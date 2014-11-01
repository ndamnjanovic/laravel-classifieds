@section('content')
<div class="container">

  @if(Session::get('error') != null)
    <div class="bg-danger">
      <p>{{Session::get('error')}}</p>
      <a class="contact" href="/oglasi-sabac/kontakt">Kontakt</a>
    </div>
  @endif

  <div class="row">
    <div class="col-sm-12">
      <form id="classifiedForm" name="classifiedForm" class="form-vertical" method="post" action="/oglasi-sabac"
      enctype="multipart/form-data">

        <div class="panel panel-default">
          <div class="panel-heading">Izaberite kategoriju oglasa</div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-12 "  >
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-2" style="margin-top: 10px;">
                        <label>Kategorija</label>
                    </div>
                    <div class="col-sm-6">
                      <select name="classified_category_id" id="category" class="form-control " name="category" required
                          oninvalid="setCustomValidity('Morate izabrati kategoriju')"
                          onchange="try{setCustomValidity('')}catch(e){}">
                          <option value="">Izaberite kategoriju</option>
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
      <div class="panel-heading">Detalji</div>
      <div class="panel-body">
        <div class="form-group">
          <div class="row">
            <div class="col-sm-12">
              <label>Naslov </label>
              <input name="title" type="text" class="form-control " required
              oninvalid="setCustomValidity('Morate uneti naslov')"
              onchange="try{setCustomValidity('')}catch(e){}">
            </div>
            <div class="col-sm-12"><br />
              <label>Tekst oglasa </label>
              <textarea name="description" class="form-control col-sm-8" rows="6" style="width: 99%" required
              oninvalid="setCustomValidity('Morate uneti tekst oglasa')"
              onchange="try{setCustomValidity('')}catch(e){}"></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">Kontakt</div>
      <div class="panel-body">

        <div class="form-group">
          <div class="row">
            <div class="col-sm-6">
              <label>Telefon</label>
              <input name="contact_phone" type="text" class="form-control " required
              oninvalid="setCustomValidity('Morate uneti kontakt telefon')"
              onchange="try{setCustomValidity('')}catch(e){}">
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6"><br />
              <label>Ime i prezime kontakt osobe</label>
              <input name="contact_person" type="text" class="form-control "  >
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="panel panel-default">
      <div class="panel-heading">Dodaj slike</div>
      <div class="panel-body">
        <input name="photo[]" id="files" type="file" multiple="true"/>
      </div>
    </div>

    <button type="submit" class="btn btn-primary pull-right"><i class="icon-ok"></i>  Objavi oglas</button>

    </form>
    </div>
  </div>
</div>

@stop

