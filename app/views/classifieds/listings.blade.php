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
    <div class="row premium listing-row">
      <div class="col-sm-2">
          <a href="/oglasi-sabac/1" class="thumbnail " ><img alt="176 * 120" src="{{public_path() . '/' . $classified->id . '/' . $classified->title . '-0' . '.png'}}"></a>
      </div>

      <div class="col-sm-10">
          <h3><a class=""  href="/oglasi-sabac/{{$classified->id}}"> {{$classified->title}} </a></h3>
          <p class="muted">Objavljeno {{$classified->created_at}}</p>
          <p>{{Str::limit($classified->description, 40)}}</p>
          <p>
            Kontakt: {{$classified->contact_phone}}
          </p>
          <p>
              <span class="classified_links pull-right">
                  &nbsp;<a class="link-info underline" href="/oglasi-sabac/{{$classified->id}}">Detalji</a>&nbsp;
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