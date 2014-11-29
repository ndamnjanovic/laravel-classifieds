@section('content')
<hr class="topbar"/>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h1>{{Lang::get('general.contact')}}</h1>
      <hr />
    </div>
  </div>

  @if(Session::get('error') != null)
    <div class="bg-danger">
      <p>{{Session::get('error')}}</p>
      {{link_to_action('HomeController@showContactForm', Lang::get('general.contact'), array(), array('class' => 'contact'))}}
    </div>
  @endif

  <div class="row">
    <div class="col-md-8">
      <div class="row about-text">
        <div class="col-md-12">
          <div class="form-group">
            <div class="row">
              <div class="col-lg-12">
              <form method="post" action="/oglasi-sabac/posalji-komentar">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{Lang::get('contact.your_name')}}</label>
                      <input class="form-control" name="name" type="text" value="">
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">{{Lang::get('contact.your_email')}}</label>
                    <input class="form-control" name="email_address" type="email" value="" required
                          oninvalid="setCustomValidity('Morate uneti validnu email adresu.')"
                          onchange="try{setCustomValidity('')}catch(e){}">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{Lang::get('contact.your_comment')}}</label>
                      <textarea class="form-control" name="comment" cols="50" rows="10"></textarea>
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary pull-right"><i class="icon-ok"></i>{{Lang::get('contact.send_btn')}}</button>
              </form>
            </div>
        </div>
      </div>

    </div>

    </div><!-- /row -->

   </div>
  </div>
</div>
@stop