@extends('btp.layouts.master')

  @section('page-title')
    {{ $article->head }} || Bağımsız Türkiye Partisi
  @stop

  @section('body')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/tr_TR/sdk.js#xfbml=1&appId=1462766457295581&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

    <section id="news">
      <div class="news-section-title">
        <h3>{{ $article->cat->name }}</h3> <div class="stripe-title-big"> </div>
      </div>
      <hr>
      <div class="clearfix"></div>

    
      <article class="single">
        <a href="#">
          @if($article->media!=null)
            <img src="{{ Timthumb::link(asset($article->media),660) }}" alt="{{ $article->head }}" class="thumbnail">
          @endif
          <h3>{{ $article->head }} </h3>
        </a>
        <p>{{ $article->content }}</p>
        <div class="views">{{-- $article->view --}}</div>
        <hr>
        <a href="https://twitter.com/share" class="twitter-share-button" data-via="BTP_Kurumsal" data-related="BTP_Kurumsal">Tweet</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
          <div class="fb-like" data-href="{{ URL::current() }}" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
      </article>


    </section>
    @stop
    
@stop