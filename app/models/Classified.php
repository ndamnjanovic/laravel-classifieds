<?php

class Classified extends Eloquent{

  protected $table = "classifieds";

  protected $fillable = array('title','description','contact_person','contact_phone', 'classified_category_id');

  protected $appends = array('leadImageUrl');

  public function getCreatedAtAttribute($attr){
    return \Carbon\Carbon::parse($attr)->format('d/m/Y - h:ia');
  }

  public function getLeadImageUrlAttribute(){
    if($this->lead_image){
      $leadImageUrl = URL::asset('/uploads/' . $this->id . '/' . $this->lead_image);
    } else {
      $leadImageUrl = URL::asset('/img/missing-image.jpg');
    }
    return $leadImageUrl;
  }

}