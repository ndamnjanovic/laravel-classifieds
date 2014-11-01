@section('content')

<div class="container">

  <br />
  <div class="row">
      <div class="col-sm-12">
          <ol class="breadcrumb">
              <li><a href="/">Početna</a></li>
              <li class="active">{{$category->title}}</li>
          </ol>
      </div>
  </div>


  <div class="col-sm-12 pull-right listings">
    <div class="row listing-row" style="margin-top: -10px;">
      <div class="pull-left">
          <strong>Danas, {{date('d M Y')}}</strong>
      </div>
    </div>

    @foreach($classifieds as $classified)
    <div class="row listing-row">
      <div class="col-sm-2">
          <a href="/oglasi-sabac/{{$classified->id}}" class="thumbnail " ><img alt="{{$classified->title}}" src="{{URL::asset('/uploads/' . $classified->id . '/' . $classified->lead_image) }}"></a>
      </div>

      <div class="col-sm-10">
          <h3><a class=""  href="/oglasi-sabac/{{$classified->id}}"> {{$classified->title}} </a></h3>
          <p class="muted">Objavljeno {{$classified->created_at}}</p>
          <p>{{Str::words($classified->description, 10)}}</p>
          <p>
            <br/>
            Kontakt: {{$classified->contact_phone}}
          </p>
          <p>
              <span class="classified_links pull-right">
                  &nbsp;<a class="link-info underline" href="/oglasi-sabac/{{$classified->id}}">Detalji</a>
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
  </div>
</div>
@stop