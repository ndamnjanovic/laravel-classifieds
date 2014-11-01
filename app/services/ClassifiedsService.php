<?php

class ClassifiedsService {

  public function show($id){
    $classified = Classified::find($id);
    $classifiedCategory = ClassifiedCategory::find($classified->classified_category_id);
    return View::make('classifieds.index',
                                        array(
                                          'classified' => $classified,
                                          'classifiedCategory' => $classifiedCategory
                                    ));
  }

  public function getByCategory($slug){
    $category = ClassifiedCategory::where('slug', 'like', $slug)->firstOrFail();
    $classifieds = Classified::join('classified_categories', 'classified_categories.id', '=', 'classifieds.classified_category_id')
                              ->where('slug', 'like', $slug)
                              ->where('is_approved', 1)
                              ->paginate(1, array('classifieds.*'));

    return View::make('classifieds.listings',
                                   array('classifieds' => $classifieds,
                                          'category' => $category
                                    ));
  }

  public function showCreateForm(){
    $categories = ClassifiedCategory::all();
    return View::make('classifieds.create', array('categories' => $categories));
  }

  public function store(){
    $inputData = Input::only('title', 'description', 'phone', 'category', 'contact_person', 'contact_phone', 'classified_category_id');

    try{
      $classified = Classified::create($inputData);
      if (Input::hasFile('photo')) {
        $this->savePhotos($classified);
      }
      return Redirect::to('/')->with('message', 'Vaš oglas je uspešno dodat. Administratori sajta će ga proveriti u najkraćem roku.');

    } catch (Exception $ex) {
      Log::error('Something went wrong while saving classified. ' . $ex);
      return Redirect::to('/oglasi-sabac/objavi')
                      ->withInput()
                      ->with('error', 'Dogodila se greška prilikom pokušaja da se oglas sačuva. Molimo Vas da probate ponovo. Ukoliko problem i dalje postoji, molimo Vas da nas kontaktirate. Hvala na razumevanju.');
    }
  }

  private function savePhoto($classified){
    $photos = Input::file('photo');
    foreach ($photos as $index=>$photo) {
      $destinationPath = public_path() . '/uploads/' . $classified->id;
      $filename = $classified->title . '-' . $index . '.' . $photo->getClientOriginalExtension();
      // save first image as lead image
      // the one that will be displayed on listings page
      if($index === 0){
        $classified->lead_image = $filename;
        $classified->save();
      }

      $upload_success = $photo->move($destinationPath, $filename);

      if(!$upload_success){
        Log::error('Something went wrong while saving classified images. ' . $ex);
        Session::flash('error', 'Dogodila se greška prilikom pokušaja da se sačuvaju slike. Molimo Vas da probate ponovo. Ukoliko problem i dalje postoji, molimo Vas da nas kontaktirate. Hvala na razumevanju.');
        return Redirect::to('/oglasi-sabac/objavi')->withInput();
      }
    }
  }

}