<div class="footer">
  <div class="container">

    <div class="row">

      <div class="col-sm-4 col-xs-12">
        <p><strong>&copy; Šabačka čivija 2014</strong></p>
        <p>{{Lang::get('general.all_rights_reserved')}}</p>
      </div>

      <div class="col-sm-8 col-xs-12">
        <p class="footer-links">
          <a href="/" class="active">{{Lang::get('general.home')}}</a>
          <!--  <a href="/uslovi-koriscenja">Uslovi korišćenja</a> -->
          {{link_to_action('HomeController@showContactForm', Lang::get('general.contact'), array(), array())}}
        </p>
      </div>
    </div>
  </div>
</div>