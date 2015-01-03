<?php

class ClassifiedCategoriesSeeder extends DatabaseSeeder{

  public function run() {
    ClassifiedCategory::create(
      array(
        'title' => 'Vozila',
        'description' => 'Automobili, kamioni, motocikli, auto-delovi',
        'class' => 'fa-car',
        'slug' => 'vozila'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Nekretnine',
        'description' => 'Kuće, stanovi, garaže, vikendice, placevi',
        'class' => 'fa-home',
        'slug' => 'nekretnine'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Kućni ljubimci',
        'description' => 'Prodaja, poklanjanje, hrana za ljubimce',
        'class' => 'fa-paw',
        'slug' => 'kucni-ljubimci'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Telefoni',
        'description' => 'Mobilni i fiksni telefoni, oprema, prodaja/zamena, delovi',
        'class' => 'fa-phone',
        'slug' => 'telefoni'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Nameštaj i pokućstvo',
        'description' => 'Stolovi, stolice, kreveti, ormari, kuhinje, antikviteti, tepisi',
        'class' => 'fa-archive',
        'slug' => 'namestaj-pokucstvo'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Računari',
        'description' => 'PC računari, tableti, monitori, komponente, štampači, mrežna oprema, servisi',
        'class' => 'fa-laptop ',
        'slug' => 'racunari'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Audio, TV, Foto',
        'description' => 'Televizori, foto aparati, zvučnici, kamere, oprema',
        'class' => 'fa-camera',
        'slug' => 'audio-tv-foto'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Poljoprivreda',
        'description' => 'Traktori, kombajni, kosilice, ostale poljoprivredne mašine, domaće životinje, seme, sadnice',
        'class' => 'fa-leaf',
        'slug' => 'poljoprivreda'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Mašine, alati, oprema',
        'description' => 'Industrijski i zanatski proizvodi, mašine, alati, pumpe, kompresori, kancelarijski aparati i oprema',
        'class' => 'fa-wrench',
        'slug' => 'audio-tv-foto'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Sport i rekreacija',
        'description' => 'Sportska odeća i obuća, roleri, fitnes oprema, oprema za lov i ribolov, kamp oprema, bicikli',
        'class' => 'fa-soccer-ball-o',
        'slug' => 'sport-rekreacija'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Kućni aparati',
        'description' => 'Frižideri, zamrzivači, grejna tela, mali kućni aparati, bela tehnika, bojleri, klima uređaji, šivaće mašine',
        'class' => 'fa-plug',
        'slug' => 'kucni-aparati'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Zdravlje',
        'description' => 'Profesionalna medicinska oprema, ortopedska pomogala, medicinski aparati, usluge',
        'class' => 'fa-stethoscope',
        'slug' => 'zdravlje'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Odeća, obuća i dodaci',
        'description' => 'Ženska, muška i dečija odeća i obuća, modni dodaci, tekstil, pozamanterija',
        'class' => 'fa-suitcase',
        'slug' => 'odeca-obuca'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Sve za decu',
        'description' => 'Oprema za bebe, odeća, obuća, bicikli, igračke, nameštaj, knjige',
        'class' => 'fa-child',
        'slug' => 'sve-za-decu'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Muzika i instrumenti',
        'description' => 'Gitare, harmonike, bubnjevi, klaviri, duvački i gudački instrumenti, pribor i oprema',
        'class' => 'fa-music',
        'slug' => 'muzicki-instrumenti'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Usluge',
        'description' => 'Građevinske usluge, Transport i selidba, podučavanje, knjigovodstvene usluge, servis i popravka, stolarske, krojačke, pravne usluge',
        'class' => 'fa-life-saver',
        'slug' => 'usluge'
      )
    );
    ClassifiedCategory::create(
      array(
        'title' => 'Lični oglasi',
        'description' => 'Ona traži njega, On traži nju',
        'class' => 'fa-heart',
        'slug' => 'licni-oglasi'
      )
    );
  }


}