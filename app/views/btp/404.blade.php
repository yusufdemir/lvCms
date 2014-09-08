@extends('btp.layouts.master')

  @section('page-title')
    404 - Aradığınız Sayfa Bulunamadı || Bağımsız Türkiye Partisi
  @stop

  @section('body')

<div id="fb-root"></div>

    <section id="news">
      <div class="news-section-title">
        <h3>404 - Aradığınız Sayfa Bulunamadı</h3> <div class="stripe-title-big"> </div>
      </div>
      <hr>
      <div class="clearfix"></div>

    
      <article class="single">
        <a href="#">
          <h3>404</h3>
        </a>
        <p> - Aradığınız Sayfa Bulunamadı - </p>

        <hr>
        <a href="https://twitter.com/share" class="twitter-share-button" data-via="BTP_Kurumsal" data-related="BTP_Kurumsal">Tweet</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
          <div class="fb-like" data-href="{{ URL::current() }}" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
      </article>


    </section>
    @stop
    
@stop