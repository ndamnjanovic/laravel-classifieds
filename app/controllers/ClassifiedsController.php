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
    return $this->classifiedsService->store();
  }
}