<?php

class HomeController extends BaseController {

  /**
   * The layout that should be used for responses.
   */
  protected $layout = 'layouts.master';
  protected $utilsService;

  public function __construct(UtilsService $utilsService){
    $this->utilsService = $utilsService;
  }

  public function index(){
    $this->layout->content = $this->utilsService->showIndex();
  }

  public function showContactForm(){
    $this->layout->content = View::make('contact');
  }

  public function sendComment(){
    if(!$this->utilsService->sendEmail(Input::only('name', 'email_address', 'comment'))){
      return Redirect::to('/')->with('message', Lang::get('general.contact_email.send-success'));
    } else {
      Session::flash('error', Lang::get('errors.email.send'));
      return Redirect::to('/oglasi-sabac/kontakt')->withInput();
    }
  }

}
