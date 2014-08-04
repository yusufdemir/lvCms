<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page-title') - Bağımsız Türkiye Partisi</title>

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
      Cufon.replace('ul.cat-news li.first h3, #news > article > a > h3', { fontFamily: 'Bebas Neue'});
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