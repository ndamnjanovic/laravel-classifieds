<?php

/**
 * Utils service handles stuff that are not specifically
 * related to some service
 */

class UtilsService {

  public function showIndex(){
    $categories = ClassifiedCategory::all();
    return View::make('index', array('categories' => $categories));
  }

  public function sendEmail($data){
    Mail::send('emails.contact', $data, function($message) use ($data)
    {
      $message->from($data['email_address'], $data['name']);
      $message->to(Config::get('constants'), 'Nedeljko Damnjanovic')->subject('Mali oglasi - kontakt');
    });

    if(count(Mail::failures()) > 0){
      Session::flash('error', Lang::get('errors.email.send'));
      return Redirect::to('/oglasi-sabac/kontakt')->withInput();
    }else {
      return Redirect::to('/')->with('message', Lang::get('general.email.send-success'));
    }
  }

}