<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>

      <div class="navbar-brand">
        <a href="/"><div class="logo"></div></a>
        <small>mali oglasi grada Šapca </small>
      </div>
    </div>
    <div class="collapse navbar-collapse">
      <div class="nav navbar-nav navbar-right hidden-xs">
        <div class="row">
          <div class="pull-right">
            <a href="http://www.sabackacivija.com" target="_blank">Šabačka čivija</a>
            {{link_to_action('ClassifiedsController@create', 'Postavi oglas', array(), array('class' => 'btn btn-warning post-ad-btn'))}}
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>