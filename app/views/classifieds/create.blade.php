@section('content')
<div class="container">

  @if(Session::get('error') != null)
    <div class="bg-danger">
      <p>{{Session::get('error')}}</p>
      {{link_to_action('HomeController@showContactForm', Lang::get('general.contact'), array(), array('class' => 'contact'))}}
    </div>
  @endif

  <div class="row">
    <div class="col-sm-12">
      <form id="classifiedForm" name="classifiedForm" class="form-vertical" method="post" action="/oglasi-sabac"
      enctype="multipart/form-data">

        <div class="panel panel-default">
          <div class="panel-heading">{{Lang::get('classifieds.create.category_title_box')}}</div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-12 "  >
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-2" style="margin-top: 10px;">
                        <label>{{Lang::get('classifieds.create.category')}}</label>
                    </div>
                    <div class="col-sm-6">
                      <select name="classified_category_id" id="category" class="form-control " name="category" required
                          oninvalid="setCustomValidity('{{Lang::get('classifieds.create.category_required')}}')"
                          onchange="try{setCustomValidity('')}catch(e){}">
                          <option value="">{{Lang::get('classifieds.create.choose_category')}}</option>
                          @foreach ($categories as $key => $category)
                            <option value="{{$category->id}}">&nbsp;&nbsp;&nbsp;{{$category->title}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">{{Lang::get('classifieds.create.details_box')}}</div>
      <div class="panel-body">
        <div class="form-group">
          <div class="row">
            <div class="col-sm-12">
              <label>{{Lang::get('classifieds.create.title_label')}} </label>
              <input name="title" type="text" class="form-control " required
              oninvalid="setCustomValidity('{{Lang::get('classifieds.create.title_required')}}')"
              onchange="try{setCustomValidity('')}catch(e){}" value="{{Input::old('title')}}">
            </div>
            <div class="col-sm-12"><br />
              <label>{{Lang::get('classifieds.create.desc_label') . ' (ovde unesite cenu)'}}</label>
              <textarea name="description" class="form-control col-sm-8" rows="6" style="width: 99%" required
              oninvalid="setCustomValidity('{{Lang::get('classifieds.create.description_required')}}')"
              onchange="try{setCustomValidity('')}catch(e){}" value="{{Input::old('description')}}"></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">{{Lang::get('classifieds.create.contact_box')}}</div>
      <div class="panel-body">

        <div class="form-group">
          <div class="row">
            <div class="col-sm-6">
              <label>{{Lang::get('classifieds.create.phone_label')}}</label>
              <input name="contact_phone" type="text" class="form-control " required
              oninvalid="setCustomValidity('{{Lang::get('classifieds.create.phone_required')}}')"
              onchange="try{setCustomValidity('')}catch(e){}" value="{{Input::old('contact_phone')}}">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6"><br />
              <label>{{Lang::get('classifieds.create.contact_person_label')}}</label>
              <input name="contact_person" type="text" class="form-control " value="{{Input::old('contact_person')}}" >
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="panel panel-default">
      <div class="panel-heading">{{Lang::get('classifieds.create.add_images_box')}}</div>
      <div class="panel-body">
        <input name="photo[]" id="files" type="file" multiple="true"/>
      </div>
    </div>

    <button type="submit" class="btn btn-primary pull-right"><i class="icon-ok"></i>{{Lang::get('classifieds.create.submit_btn')}}</button>

    </form>
    </div>
  </div>
</div>

@stop

