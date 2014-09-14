<?php

class HomeController extends BaseController {

  /**
   * The layout that should be used for responses.
   */
  protected $layout = 'layouts.master';
  protected $classifiedsService;

  public function __construct(ClassifiedsService $classifiedsService){
    $this->classifiedsService = $classifiedsService;
  }

  public function index(){
    $this->layout->content = View::make('index');
  }

  public function showContactForm(){
    $this->layout->content = View::make('contact'); 
  }

  public function sendComment(){
    return $this->classifiedsService->sendEmail(Input::only('name', 'email_address', 'comment'));
  }

}
