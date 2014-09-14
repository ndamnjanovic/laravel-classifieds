@section('content')
<div class="container" id="listings-page">
  <div class="row">
    <div class="col-sm-12 listing-wrapper listings-top listings-bottom">
      <div class="row">
        <div class="col-sm-7">	
          <ol class="breadcrumb">
            <li><a href="/oglasi-sabac-kat/{{$classifiedCategory->slug}}" class="link-info"><i class="fa fa-chevron-left"></i> Povratak na  {{$classifiedCategory->title}}</a></li>
            <li><a href="/">Početna</a></li>
          </ol>
        </div>
      </div>

      <div class="row">

        <div class="col-sm-7">	
            <h1>{{$classified->title}}</h1>
        </div>
      </div>
      <div class="row">

        <div class="col-sm-7">	
            <div class="row">
                <div class="col-xs-3" style="width: 100px;">	
                    <!-- Place this tag where you want the share button to render. -->
                    <div class="g-plus" data-action="share" data-annotation="bubble"></div>

                    <!-- Place this tag after the last share tag. -->
                    <script type="text/javascript">
                        (function() {
                            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                            po.src = 'https://apis.google.com/js/platform.js';
                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                        })();
                    </script>
                </div>


                <div class="col-xs-3" style="width: 100px;">	
                    <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                </div>

                <div class="col-xs-3" style="width: 100px;">	
                    <div class="fb-share-button" data-href="http://developers.facebook.com/docs/plugins/" data-type="button_count"></div>
                </div>
            </div>
          </div>
        </div>
        <hr />

        <div class="row">
            <div class="col-sm-7">
                <p>Objavljeno {{$classified->created_at}}</p>
                
                <p class="classified-details">
                  {{$classified->description}}
                </p>
            </div>
            <div class="col-sm-5 center zoom-gallery">
              <div class="row center">

                <div class="col-sm-12">	
                  <a class="fancybox" rel="group" href="css/images/single/1.jpg">
                      <img id="img_01" alt="" class="raised" src="css/images/single/1.jpg" style="width: 100%" />
                  </a>
                  <br />
                  <br />
                  <div class="row" id="gallery" >

                      <div class="col-xs-4" style="margin-bottom: 10px;">	
                          <a href="css/images/single/2.jpg" class="fancybox thumbnail" rel="group" >
                              <img alt="" src="css/images/single/thumbs/2.jpg" style="width: 100%" />
                          </a>
                      </div>
                      <div class="col-xs-4" style="margin-bottom: 10px;">	
                          <a href="css/images/single/3.jpg" class="fancybox thumbnail" rel="group" >
                              <img alt="" src="css/images/single/thumbs/3.jpg" style="width: 100%" />
                          </a>
                      </div>
                      <div class="col-xs-4" style="margin-bottom: 10px;">	
                          <a href="css/images/single/4.jpg" class="fancybox thumbnail" rel="group" >
                              <img alt="" src="css/images/single/thumbs/4.jpg" style="width: 100%" />
                          </a>
                      </div>
                      <div class="col-xs-4" style="margin-bottom: 10px;">	
                          <a href="css/images/single/5.jpg" class="fancybox thumbnail" rel="group" >
                              <img alt="" src="css/images/single/thumbs/5.jpg" style="width: 100%" />
                          </a>
                      </div>
                      <div class="col-xs-4" style="margin-bottom: 10px;">	
                          <a href="css/images/single/6.jpg" class="fancybox thumbnail" rel="group" >
                              <img alt="" src="css/images/single/thumbs/6.jpg" style="width: 100%" />
                          </a>
                      </div>
                      <div class="col-xs-4" style="margin-bottom: 10px;">	
                          <a href="css/images/single/7.jpg" class="fancybox thumbnail" rel="group" >
                              <img alt="" src="css/images/single/thumbs/7.jpg" style="width: 100%" />
                          </a>
                      </div>
                      <div class="col-xs-4" style="margin-bottom: 10px;">	
                          <a href="css/images/single/8.jpg" class="fancybox thumbnail" rel="group" >
                              <img alt="" src="css/images/single/thumbs/8.jpg" style="width: 100%" />
                          </a>
                      </div>                      
                    </div>
                </div>
              </div>
                
            </div>
        </div>			
    </div>
  </div>	
</div>
@stop