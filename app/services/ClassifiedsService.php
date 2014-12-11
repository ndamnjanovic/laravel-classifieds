<?php

class ClassifiedsService {

  private $storeValidationRules = array(
    'title' => 'required',
    'description' => 'required',
    'contact_phone' => 'required'
  );

  public function show($id){
    $classified = Classified::find($id);
    $classifiedCategory = ClassifiedCategory::find($classified->classified_category_id);

    $classifiedImages = array();
    if(File::exists(public_path() . '/uploads/' . $id)){
      $classifiedImages = File::allFiles(public_path() . '/uploads/' . $id);
    }

    return View::make('classifieds.index',
                                        array(
                                          'classified' => $classified,
                                          'images' => $classifiedImages,
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

    $validator = Validator::make($inputData, $this->storeValidationRules);

    if($validator->passes()){
      $classified = Classified::create($inputData);
      if (Input::hasFile('photo')) {
        $this->savePhotos($classified);
      }
      return true;
    } else {
      return false;
    }
  }

  private function savePhotos($classified){
    $photos = Input::file('photo');
    foreach ($photos as $index=>$photo) {
      $destinationPath = public_path() . '/uploads/' . $classified->id;
      $imageSlugName = Str::slug($classified->title . '-' . $index);
      $filename =  $imageSlugName . '.' . $photo->getClientOriginalExtension();
      // save first image as lead image
      // the one that will be displayed on listings page
      if($index === 0){
        $classified->lead_image = $filename;
        $classified->save();
      }

      try{
        $photo->move($destinationPath, $filename);        
      }catch(Exception $ex){
        throw new ImageSavingException();
      }
    }
  }

}