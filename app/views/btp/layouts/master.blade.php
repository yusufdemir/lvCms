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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="http://cufon.shoqolate.com/js/cufon-yui.js" type="text/javascript"></script>
    <script src="{{ asset('btp/js/bebas-neue.cufonfonts.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
    Cufon.replace('.blog-nav-item', { fontFamily: 'Bebas Neue', hover: true,textShadow: '1px 1px black' }); 
    </script>
  </head>
  <body>

  	<header>
	      <div class="container">

	      </div>
    </header>

    <nav class="blog-nav">
      <div class="container">
        <ul id="main-menu">
          <li class="blog-nav-item active"><a href="#"><i class="glyphicon glyphicon-home"></i></a></li>
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

          <div class="col-sm-8 blog-main">

            <section id="slider">
              <div id="ei-slider" class="ei-slider">
                  <ul class="ei-slider-large">
                  @for($i=0; $i < 5; $i++)
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
                  @for($i=0; $i < 5; $i++)
                    <li>
                      <a href="#">BİRLİK VE BERABERLİK BÖYLE OLUR {{$i}}</a>
                      <img src="http://dummyimage.com/600x400/8a4d4d/ffffff.jpg&text=BTP+-+{{$i}}" alt="thumb01" />
                    </li>
                  @endfor
                  </ul>
              </div>
            </section>

            <div class="clearfix"></div>

            <div class="blog-post">
              <h2 class="blog-post-title">Sample blog post</h2>
              <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

              <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
              <hr>
              <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
              <blockquote>
                <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </blockquote>
              <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
              <h2>Heading</h2>
              <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <h3>Sub-heading</h3>
              <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
              <pre><code>Example code block</code></pre>
              <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
              <h3>Sub-heading</h3>
              <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
              <ul>
                <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                <li>Donec id elit non mi porta gravida at eget metus.</li>
                <li>Nulla vitae elit libero, a pharetra augue.</li>
              </ul>
              <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
              <ol>
                <li>Vestibulum id ligula porta felis euismod semper.</li>
                <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
              </ol>
              <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
            </div><!-- /.blog-post -->

            <div class="blog-post">
              <h2 class="blog-post-title">Another blog post</h2>
              <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

              <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
              <blockquote>
                <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              </blockquote>
              <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
              <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
            </div><!-- /.blog-post -->

            <div class="blog-post">
              <h2 class="blog-post-title">New feature</h2>
              <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

              <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
              <ul>
                <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                <li>Donec id elit non mi porta gravida at eget metus.</li>
                <li>Nulla vitae elit libero, a pharetra augue.</li>
              </ul>
              <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
              <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
            </div><!-- /.blog-post -->

            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>

          </div><!-- /.blog-main -->

          <aside>
            <div class="col-sm-4 blog-sidebar">
              <div class="sidebar-module sidebar-module-inset">
                <h4>About</h4>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
              </div>
              <div class="sidebar-module">
                <h4>Archives</h4>
                <ol class="list-unstyled">
                  <li><a href="#">March 2014</a></li>
                  <li><a href="#">February 2014</a></li>
                  <li><a href="#">January 2014</a></li>
                  <li><a href="#">December 2013</a></li>
                  <li><a href="#">November 2013</a></li>
                  <li><a href="#">October 2013</a></li>
                  <li><a href="#">September 2013</a></li>
                  <li><a href="#">August 2013</a></li>
                  <li><a href="#">July 2013</a></li>
                  <li><a href="#">June 2013</a></li>
                  <li><a href="#">May 2013</a></li>
                  <li><a href="#">April 2013</a></li>
                </ol>
              </div>
              <div class="sidebar-module">
                <h4>Elsewhere</h4>
                <ol class="list-unstyled">
                  <li><a href="#">GitHub</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Facebook</a></li>
                </ol>
              </div>
            </div><!-- /.blog-sidebar -->
          </aside>
        </div><!-- /.row -->

    </div><!-- /.container -->

    <footer>
        <div class="blog-footer">
          <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
          <p>
            <a href="#">Back to top</a>
          </p>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('btp/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('btp/js/elasticslideshow/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('btp/js/elasticslideshow/jquery.eislideshow.js') }}"></script>

    <script type="text/javascript">
      jQuery(function() {
        jQuery('#ei-slider').eislideshow({
          animation     : 'left',
          autoplay      : true,

        });
      });
    </script>
  </body>
</html>