<?php

/**
 * ClassifiedsController is responsible for manipulating with classifieds,
 * including adding, removing, or updating stored classifieds.
 */

class ClassifiedsController extends BaseController {

  /**
   * The layout that should be used for responses.
   */
  protected $layout = 'layouts.master';
  
  public function create() {
    $categories = ClassifiedCategory::all();
    $this->layout->content = View::make('classifieds.create', array('categories' => $categories));
  }

  public function getByCategory($slug) {
    $category = ClassifiedCategory::where('slug', 'like', $slug)->firstOrFail();
    $classifieds = Classified::join('classified_categories', 'classified_categories.id', '=', 'classifieds.classified_category_id')
                              ->where('slug', 'like', $slug)
                              ->where('is_approved', 'true')
                              ->paginate(1, array('classifieds.*'));
                        
    $this->layout->content = View::make('classifieds.listings', 
                                   array('classifieds' => $classifieds,
                                          'category' => $category
                                    ));
  }

  public function show($id) {
    $classified = Classified::find($id);
    $classifiedCategory = ClassifiedCategory::find($classified->classified_category_id);
    $this->layout->content = View::make('classifieds.index',
                                        array(
                                          'classified' => $classified,
                                          'classifiedCategory' => $classifiedCategory
                                    ));
  }

  public function store() {
    $inputData = Input::only('title', 'description', 'phone', 'category', 'contact_person', 'contact_phone', 'classified_category_id');

    try{
      $classified = Classified::create($inputData);
      if (Input::hasFile('photo')) {
        $photos = Input::only('photo');
        foreach ($photos as $index=>$photo) {
          $destinationPath = public_path() . 'uploads/' . $classified->id;
          $filename = $classified->title . '-' . $index . $photo->getClientOriginalExtension();
          $upload_success = $photo->move($destinationPath, $filename);

          if(!$upload_success){
            Log::error('Something went wrong while saving classified images. ' . $ex);
            Session::flash('error', 'Dogodila se greška prilikom pokušaja da se sačuvaju slike. Molimo Vas da probate ponovo. Ukoliko problem i dalje postoji, molimo Vas da nas kontaktirate. Hvala na razumevanju.');
            return Redirect::to('/oglasi-sabac/objavi')->withInput();
          }
        }
      }

      return Redirect::to('/')->with('message', 'Vaš oglas je uspešno dodat. Administratori sajta će ga proveriti u najkraćem roku.');
    } catch (Exception $ex) {
      Log::error('Something went wrong while saving classified. ' . $ex);
      return Redirect::to('/oglasi-sabac/objavi')
                      ->withInput()
                      ->with('error', 'Dogodila se greška prilikom pokušaja da se oglas sačuva. Molimo Vas da probate ponovo. Ukoliko problem i dalje postoji, molimo Vas da nas kontaktirate. Hvala na razumevanju.');
    }
  }
}