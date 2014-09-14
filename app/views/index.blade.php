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

      <div class="row">
        <div class="col-sm-12" style="text-align: center">
            <div id="quotes">
              <div class="text-item" style="display: none;">Novo! <strong>Besplatni</strong> mali oglasi! </div>
              <div class="text-item" style="display: none;"><strong>Prodaj</strong>, <strong>kupi</strong>, <strong>zameni</strong>!</div>
              <div class="text-item" style="display: none;">Probaj! <strong>Besplatno</strong> je! </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-12 col-md-12">

        <div class="row directory">
          <div class="col-sm-12 ">
            <h2><span>Kategorije</span></h2>
          </div>
        </div>

        <div class="row directory">
            <div class="col-xs-12">
              <div class="directory-block col-sm-4 col-xs-6">
                <div class="row">
                  <div class="col-sm-3">
                    <i class="fa fa-home"></i>
                  </div>
                  <div class="col-sm-9">
                    <h4><a href="/oglasi-sabac-kat/nekretnine"> Nekretnine</h4>
                    <p><a href="listings.html" >Cars</a>, <a href="listings.html" >Car Parts</a>, <a href="listings.html" >Campervans</a>, <a href="listings.html">Motobikes</a>, <a href="listings.html" >Scooters</a>, <a href="listings.html" >Vans</a>, <a href="listings.html" >Trucks</a></p>
                  </div>
                </div>
              </div>

              <div class="directory-block col-sm-4 col-xs-6">
                  <div class="row">
                      <div class="col-sm-3">
                          <i class="fa fa-truck"></i>
                      </div>
                      <div class="col-sm-9">
                          <h4>Vozila</h4>
                          <p><a href="listings.html" >Cars</a>, <a href="listings.html" >Car Parts</a>, <a href="listings.html" >Campervans</a>, <a href="listings.html">Motobikes</a>, <a href="listings.html" >Scooters</a>, <a href="listings.html" >Vans</a>, <a href="listings.html" >Trucks</a></p>
                      </div>
                  </div>
              </div>

              <div class="directory-block col-sm-4 col-xs-6">
                  <div class="row">
                      <div class="col-sm-3">
                          <i class="fa fa-shopping-cart"></i>
                      </div>
                      <div class="col-sm-9">
                          <h4>Shopping</h4>
                          <p><a href="listings.html" >Cars</a>, <a href="listings.html" >Car Parts</a>, <a href="listings.html" >Campervans</a>, <a href="listings.html">Motobikes</a>, <a href="listings.html" >Scooters</a>, <a href="listings.html" >Vans</a>, <a href="listings.html" >Trucks</a></p>
                      </div>
                  </div>
              </div>
                <div class="directory-block col-sm-4 col-xs-6">
                    <div class="row">
                        <div class="col-sm-3">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4>Houses and flats</h4>
                            <p><a href="listings.html" >Cars</a>, <a href="listings.html" >Car Parts</a>, <a href="listings.html" >Campervans</a>, <a href="listings.html">Motobikes</a>, <a href="listings.html" >Scooters</a>, <a href="listings.html" >Vans</a>, <a href="listings.html" >Trucks</a></p>
                        </div>
                    </div>
                </div>

                <div class="directory-block col-sm-4 col-xs-6">
                    <div class="row">
                        <div class="col-sm-3">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4>Car and vehicles</h4>
                            <p><a href="listings.html" >Cars</a>, <a href="listings.html" >Car Parts</a>, <a href="listings.html" >Campervans</a>, <a href="listings.html">Motobikes</a>, <a href="listings.html" >Scooters</a>, <a href="listings.html" >Vans</a>, <a href="listings.html" >Trucks</a></p>
                        </div>
                    </div>
                </div>

                <div class="directory-block col-sm-4 col-xs-6">
                    <div class="row">
                        <div class="col-sm-3">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4>Shopping</h4>
                            <p><a href="listings.html" >Cars</a>, <a href="listings.html" >Car Parts</a>, <a href="listings.html" >Campervans</a>, <a href="listings.html">Motobikes</a>, <a href="listings.html" >Scooters</a>, <a href="listings.html" >Vans</a>, <a href="listings.html" >Trucks</a></p>
                        </div>
                    </div>
                </div>
                                    <div class="directory-block col-sm-4 col-xs-6">
                    <div class="row">
                        <div class="col-sm-3">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4>Houses and flats</h4>
                            <p><a href="listings.html" >Cars</a>, <a href="listings.html" >Car Parts</a>, <a href="listings.html" >Campervans</a>, <a href="listings.html">Motobikes</a>, <a href="listings.html" >Scooters</a>, <a href="listings.html" >Vans</a>, <a href="listings.html" >Trucks</a></p>
                        </div>
                    </div>
                </div>

                <div class="directory-block col-sm-4 col-xs-6">
                    <div class="row">
                        <div class="col-sm-3">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4>Car and vehicles</h4>
                            <p><a href="listings.html" >Cars</a>, <a href="listings.html" >Car Parts</a>, <a href="listings.html" >Campervans</a>, <a href="listings.html">Motobikes</a>, <a href="listings.html" >Scooters</a>, <a href="listings.html" >Vans</a>, <a href="listings.html" >Trucks</a></p>
                        </div>
                    </div>
                </div>

                <div class="directory-block col-sm-4 col-xs-6">
                    <div class="row">
                        <div class="col-sm-3">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="col-sm-9">
                            <h4>Shopping</h4>
                            <p><a href="listings.html" >Cars</a>, <a href="listings.html" >Car Parts</a>, <a href="listings.html" >Campervans</a>, <a href="listings.html">Motobikes</a>, <a href="listings.html" >Scooters</a>, <a href="listings.html" >Vans</a>, <a href="listings.html" >Trucks</a></p>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
    </div>        
</div>
@stop
