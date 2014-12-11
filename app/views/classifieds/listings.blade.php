@section('content')

<div class="container">

  <br />
  <div class="row">
      <div class="col-sm-12">
          <ol class="breadcrumb">
              <li><a href="/">{{Lang::get('general.home')}}</a></li>
              <li class="active">{{$category->title}}</li>
          </ol>
      </div>
  </div>


  <div class="col-sm-12 pull-right listings">
    <div class="row listing-row" style="margin-top: -10px;">
      <div class="pull-left">
          <strong>{{Lang::get('general.today')}}, {{date('d M Y')}}</strong>
      </div>
    </div>

    @if(count($classifieds) > 0)
      @foreach($classifieds as $classified)
      <div class="row listing-row">
        <div class="col-sm-2">
            <a class="thumbnail " ><img alt="{{$classified->title}}" src="{{$classified->leadImageUrl}}"></a>
        </div>

        <div class="col-sm-10">
            <h3>{{link_to_action('ClassifiedsController@show', $classified->title, $classified->id, array())}}</h3>
            <p class="muted">{{Lang::get('classifieds.listings.published_at')}} {{$classified->created_at}}</p>
            <p>{{Str::words($classified->description, 10)}}</p>
            <p>
              <br/>
              {{Lang::get('general.contact')}}: {{$classified->contact_phone}}
            </p>
            <p>
                <span class="classified_links pull-right">
                    &nbsp;{{link_to_action('ClassifiedsController@show', Lang::get('classifieds.listings.details'), $classified->id, array('class' => 'link-info underline'))}}
                </span>
            </p>
        </div>
      </div>
      @endforeach

      <div >
        <ul class="pagination pull-right">
          <?php echo $classifieds->links(); ?>
        </ul>
      </div>
    @else 
      {{Lang::get('classifieds.empty_listing')}}
      {{link_to_action('ClassifiedsController@create', Lang::get('general.submit_classified'), array(), array('class' => 'btn btn-warning post-ad-btn'))}}
    @endif
  </div>
</div>
@stop