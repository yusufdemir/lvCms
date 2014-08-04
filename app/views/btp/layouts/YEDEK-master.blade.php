<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page-title') - static title</title>

    <!-- Bootstrap -->
    <link href="{{ asset('btp/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('btp/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('btp/js/eventCalendar/css/eventCalendar.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="http://cufon.shoqolate.com/js/cufon-yui.js" type="text/javascript"></script>
    <script src="{{ asset('btp/js/bebas-neue.cufonfonts.js') }}" type="text/javascript"></script>
    <script src="{{ asset('btp/js/Calibri_700.font.js') }}" type="text/javascript"></script>
    
    <script type="text/javascript">
      Cufon.replace('.blog-nav-item', { fontFamily: 'Bebas Neue', hover: true,textShadow: '1px 1px black' });
      Cufon.replace('.cat-news h3', { fontFamily: 'Calibri'});
      Cufon.replace('ul.cat-news li.first h3', { fontFamily: 'Bebas Neue'});
    </script>
    
  </head>
  <body>

  	<header>
      <div class="container"></div>
    </header>

    <nav class="blog-nav">
      <div class="container">
        <ul id="main-menu">
          <li class="blog-nav-item active"><a href="{{ URL::to('/') }}"><i class="glyphicon glyphicon-home"></i></a></li>
          <li class="blog-nav-item"><a href="#">PARTİ</a>
            <ul class="sub-menu">
              <li class="blog-nav-item"><a href="#">PROGRAM</a></li>
              <li class="blog-nav-item"><a href="#">TÜZÜK</a></li>
            </ul>
          </li>
          <li class="blog-nav-item"><a href="#">YÖNETİM</a></li>
          <li class="blog-nav-item"><a href="#">GENEL BAŞKAN'DAN</a></li>
          <li class="blog-nav-item"><a href="#">DEMEÇLER</a></li>
          <li class="blog-nav-item"><a href="#">PROJELER</a></li>
          <li class="blog-nav-item"><a href="#">BASINDA BTP</a></li>
          <li class="blog-nav-item"><a href="#">MEDYA</a></li>
        </ul>
      </div>
    </nav>

  	<div class="container contents">


        <div class="row">

          <div class="col-sm-8 home-main"> 

            <section id="slider">
              <div id="ei-slider" class="ei-slider">
                  <ul class="ei-slider-large">
                  @for($i=1; $i <=5; $i++)
                    <li>
                      <img src="http://dummyimage.com/600x400/8a4d4d/ffffff.jpg&text=BTP+-+{{$i}}" alt="image01" />
                      <div class="ei-title">
                        <h3>BİRLİK VE BERABERLİK BÖYLE OLUR {{ $i }}</h3>
                        <!--<h2>Açıklama</h2>-->
                      </div>
                    </li>
                  @endfor
                  </ul>

                  <ul class="ei-slider-thumbs">
                    <li class="ei-slider-element">Current</li>
                  @for($i=1; $i <=5; $i++)
                    <li>
                      <a href="#">BİRLİK VE BERABERLİK BÖYLE OLUR {{$i}}</a>
                      <img src="http://dummyimage.com/600x400/8a4d4d/ffffff.jpg&text=BTP+-+{{$i}}" alt="thumb01" />
                    </li>
                  @endfor
                  </ul>
              </div>
            </section>
        
            <div class="clearfix"></div>

            <div class="columnist-last-post">
              <div class="columnist-content">
                <a href="#">
                  <strong>Hz. Yusuf misali</strong>
                  <p>BRICS ülkeleri yeni bir ekonomi yapılanması için imzaları attılar. IMF ve Dünya Bankası’na rakip...</p>
                </a>
              </div>
            </div>
            
            <div class="row">
              
              <div class="cat-news col-sm-6">
                <div class="sidebar-module-title">
                  <h4>GENEL BAŞKAN'DAN</h4> <div class="stripe-title"> </div>
                </div>
                <ul class="cat-news">
                  <li class="first">
                    <img class="thumbnail" src="http://dummyimage.com/320x210/8a4d4d/ffffff.jpg&text=BTP-cat" alt="test">
                    <h3>KADİR GECENİZ MÜBAR</h3>
                    <p>Bugün bin aydan daha hayırlı olan mübarek Kadir Gecesini idrak edeceğiz. Bu münasebetle bir mesaj yayınlayan... Devamını oku »</p>
                  </li>
                  <li>
                    <img class="thumbnail" src="http://dummyimage.com/50x50/8a4d4d/ffffff.jpg&text=BTP-cat" alt="test">
                    <h3>Kadir geceniz mübarek olsun</h3>
                    <small>20.07.2014</small>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <img class="thumbnail" src="http://dummyimage.com/50x50/8a4d4d/ffffff.jpg&text=BTP-cat" alt="test">
                    <h3>Kadir geceniz mübarek olsun</h3>
                    <small>20.07.2014</small>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <img class="thumbnail" src="http://dummyimage.com/50x50/8a4d4d/ffffff.jpg&text=BTP-cat" alt="test">
                    <h3>Kadir geceniz mübarek olsun</h3>
                    <small>20.07.2014</small>
                    <div class="clearfix"></div>
                  </li>
                </ul>
                  
              </div>

              <div class="cat-news col-sm-6">
                <div class="sidebar-module-title">
                  <h4>DEMEÇLER</h4> <div class="stripe-title"> </div>
                </div>
                <ul class="cat-news">
                  <li class="first">
                    <img class="thumbnail" src="http://dummyimage.com/320x210/8a4d4d/ffffff.jpg&text=BTP-cat" alt="test">
                    <h3>Kadir geceniz mübarek olsun</h3>
                    <p>Bugün bin aydan daha hayırlı olan mübarek Kadir Gecesini idrak edeceğiz. Bu münasebetle bir mesaj yayınlayan... Devamını oku »</p>
                  </li>
                  <li>
                    <img class="thumbnail" src="http://dummyimage.com/50x50/8a4d4d/ffffff.jpg&text=BTP-cat" alt="test">
                    <h3>Kadir geceniz mübarek olsun</h3>
                    <small>20.07.2014</small>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <img class="thumbnail" src="http://dummyimage.com/50x50/8a4d4d/ffffff.jpg&text=BTP-cat" alt="test">
                    <h3>Kadir geceniz mübarek olsun</h3>
                    <small>20.07.2014</small>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <img class="thumbnail" src="http://dummyimage.com/50x50/8a4d4d/ffffff.jpg&text=BTP-cat" alt="test">
                    <h3>Kadir geceniz mübarek olsun</h3>
                    <small>20.07.2014</small>
                    <div class="clearfix"></div>
                  </li>
                </ul>
              </div>

            </div>

          </div><!-- /.blog-main -->

          <aside>
            <div class="col-sm-4 blog-sidebar">
              <div class="sidebar-module-title">
                <h4>ETKİNLİK TAKVİMİ</h4> <div class="stripe-title"> </div>
              </div>
              <div class="clearfix"></div>
              <div class="sidebar-module">
                <div id="eventCalendar"></div>
              </div>
              <!-- /.Sidebar-news-Start -->
                <div class="sidebar-module-title">
                  <h4>HABERLER</h4> <div class="stripe-title"> </div>
                </div>
                <ul class="cat-news">
                  <li class="first">
                    <img class="thumbnail" src="http://dummyimage.com/320x210/8a4d4d/ffffff.jpg&text=BTP-cat" alt="test">
                    <h3>Kadir geceniz mübarek olsun</h3>
                    <p>Bugün bin aydan daha hayırlı olan mübarek Kadir Gecesini idrak edeceğiz. Bu münasebetle bir mesaj yayınlayan... Devamını oku »</p>
                  </li>
                  <li>
                    <img class="thumbnail" src="http://dummyimage.com/50x50/8a4d4d/ffffff.jpg&text=BTP-cat" alt="test">
                    <h3>Kadir geceniz mübarek olsun</h3>
                    <small>20.07.2014</small>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <img class="thumbnail" src="http://dummyimage.com/50x50/8a4d4d/ffffff.jpg&text=BTP-cat" alt="test">
                    <h3>Kadir geceniz mübarek olsun</h3>
                    <small>20.07.2014</small>
                    <div class="clearfix"></div>
                  </li>
                  <li>
                    <img class="thumbnail" src="http://dummyimage.com/50x50/8a4d4d/ffffff.jpg&text=BTP-cat" alt="test">
                    <h3>Kadir geceniz mübarek olsun</h3>
                    <small>20.07.2014</small>
                    <div class="clearfix"></div>
                  </li>
                </ul>
                <br>
              <!-- /.Sidebar-news-END -->
              <div class="sidebar-module sidebar-module-inset">
                <h4>Btp.org.tr Yenilendi.</h4>
                <p>Yenilenen alt yapısıyla<em>daha hızlı ve daha güvenli</em>.</p>
              </div>
            </div><!-- /.blog-sidebar -->
          </aside>
        </div><!-- /.row -->

    </div><!-- /.container -->

    <footer>
        <div class="footer">
          
          <div class="clearfix"></div>

        </div>
        <div class="copyright">Tüm hakları Bağımsız Türkiye Partisi'ne aittir. Sitede yayınlanan yazılar, ancak kaynak ve adres gösterilerek kullanılabilir.
        <br> www.btp.org.tr </div>
        
        
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('btp/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('btp/js/elasticslideshow/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('btp/js/elasticslideshow/jquery.eislideshow.js') }}"></script>
    <script src="{{ asset('btp/js/eventCalendar/js/jquery.eventCalendar.min.js') }}"></script>
    <script src="{{ asset('btp/js/script.js') }}"></script>

    <script type="text/javascript">

      $(document).ready(function() {

        $('#ei-slider').eislideshow({
          animation     : 'left',
          autoplay      : true,

        });

      });
    </script>
  </body>
</html>