@extends('btp.layouts.master')

  @section('page-title')
    BTP
  @stop

  @section('body')
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
          <h3>{{ $article->head }}</h3>
        </a>
        <p>{{ $article->content }}</p>

      </article>
      <div class="social">
        PAYLAŞ!>
      </div>

    </section>
    @stop
    
@stop