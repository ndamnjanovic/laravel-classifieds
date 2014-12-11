<?php

/**
 * ClassifiedsController is responsible for manipulating classifieds,
 * including adding, removing, or displaying stored classifieds.
 */

class ClassifiedsController extends BaseController {

  /**
   * The layout that should be used for responses.
   */
  protected $layout = 'layouts.master';
  protected $classifiedsService;

  public function ClassifiedsController(ClassifiedsService $classifiedsService){
    $this->classifiedsService = $classifiedsService;
  }

  public function create() {
    $this->layout->content = $this->classifiedsService->showCreateForm();
  }

  public function getByCategory($slug) {
    $this->layout->content = $this->classifiedsService->getByCategory($slug);
  }

  public function show($id) {
    $this->layout->content = $this->classifiedsService->show($id);
  }

  public function store() {
    try{
      $result = $this->classifiedsService->store();
      if($result){
        return Redirect::to('/')->with('message', Lang::get('classifieds.save.success'));
      } else {
        return Redirect::to('/oglasi-sabac/objavi')
                        ->withInput()
                        ->with('message', $validator->messages());
      }

    }catch(ImageSavingException $ex){
      Log::error('Something went wrong while saving classified images. ' . $ex);
      Session::flash('error', Lang::get('classifieds.save.image-error'));
      return Redirect::to('/oglasi-sabac/objavi')->withInput();
    }catch (Exception $ex){
      Log::error('Something went wrong while saving classified. ' . $ex);
      return Redirect::to('/oglasi-sabac/objavi')
                      ->withInput()
                      ->with('error', Lang::get('classifieds.save.error'));
    }
  }
}