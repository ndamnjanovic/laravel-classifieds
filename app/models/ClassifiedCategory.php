<?php

class ClassifiedCategory extends Eloquent {

  protected $table = 'classified_categories';

  public function classifieds() {
    return $this->hasMany('Classified');
  }
}