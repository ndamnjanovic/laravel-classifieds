<?php 

class Classified extends Eloquent{

  protected $table = "classifieds";

  protected $fillable = array('title','description','contact_person','contact_phone', 'classified_category_id');

  public function getCreatedAtAttribute($attr){
    return \Carbon\Carbon::parse($attr)->format('d/m/Y - h:ia');
  }

}