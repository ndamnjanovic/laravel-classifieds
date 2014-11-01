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
      Session::flash('error', 'Dogodila se greška prilikom slanja poruke. Molimo Vas da probate ponovo. Hvala na razumevanju.');
      return Redirect::to('/oglasi-sabac/kontakt')->withInput();
    }else {
      return Redirect::to('/')->with('message', 'Vaša poruka je uspešno poslata. Javićemo Vam se u najkraćem roku.');
    }
  }

}