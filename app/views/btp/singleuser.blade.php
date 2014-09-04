@extends('btp.layouts.master')

  @section('page-title')
    BTP
  @stop

  @section('body')
  <style type="text/css" media="screen">
    #news article.singleUser img {
      
    }
  </style>
    <section id="news">
      <div class="news-section-title">
        <h3>BİYOGRAFİ</h3> <div class="stripe-title-big"> </div>
      </div>
      <hr>
      <div class="clearfix"></div>

    
      <article class="singleUser">
      @foreach ($biography as $key => $bio)
        <a href="#">
          <h3>{{ $bio->firstname }} {{ $bio->lastname }}</h3>
        </a>
        <p>{{ $bio->biography }}</p>
      @endforeach
      </article>
      <div class="social">
        PAYLAŞ!>
      </div>

    </section>
    @stop
    
@stop