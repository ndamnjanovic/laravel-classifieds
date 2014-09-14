<?php 

class ClassifiedCategoriesSeeder extends DatabaseSeeder{

  public function run() {
    ClassifiedCategory::create(
      array(
        'title' => 'Vozila',
        'slug' => 'vozila'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Nekretnine',
        'slug' => 'nekretnine'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Kućni ljubimci',
        'slug' => 'kucni-ljubimci'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Telefoni',
        'slug' => 'telefoni'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Nameštaj i pokućstvo',
        'slug' => 'namestaj-pokucstvo'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Računari',
        'slug' => 'racunari'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Audio, TV, Foto',
        'slug' => 'audio-tv-foto'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Poljoprivreda',
        'slug' => 'poljoprivreda'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Mašine, alati, oprema',
        'slug' => 'audio-tv-foto'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Sport i rekreacija',
        'slug' => 'sport-rekreacija'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Kućni aparati',
        'slug' => 'kucni-aparati'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Zdravlje',
        'slug' => 'zdravlje'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Odeća, obuća i dodaci',
        'slug' => 'odeca-obuca'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Sve za decu',
        'slug' => 'sve-za-decu'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Muzički instrumenti',
        'slug' => 'muzicki-instrumenti'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Knjige',
        'slug' => 'knjige'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Usluge',
        'slug' => 'usluge'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Lični oglasi',
        'slug' => 'licni-oglasi'
      )
    );
  }


}