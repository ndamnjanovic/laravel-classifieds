@section('content')

<div class="jumbotron home-search" style="">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        @if(Session::get('message') != null)
          <div class="bg-success">
            {{Session::get('message')}}
          </div>
        @endif

        <p class="main_description">Besplatni mali oglasi iz celog Mačvanskog okruga</p>

      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-12">

        <div class="row directory">
          <div class="col-sm-12 ">
            <h2><span>{{Lang::get('general.categories_label')}}</span></h2>
          </div>
        </div>

        <div class="row directory">
          <div class="col-xs-12">
        @foreach($categories as $category)
            <div class="directory-block col-sm-4 col-xs-6">
              <div class="row">
                <div class="col-sm-3">
                  <i class="fa {{$category->class}}"></i>
                </div>
                <div class="col-sm-9">
                  <h4>{{link_to_action('ClassifiedsController@getByCategory', $category->title, $category->slug, array('class' => 'bold'))}} ({{count($category->classifieds)}})</h4>
                  <p>{{$category->description}}</p>
                </div>
              </div>
            </div>
        @endforeach
          </div>
        </div>
    </div>
  </div>
</div>
@stop
