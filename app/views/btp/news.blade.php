@extends('btp.layouts.master')

  @section('page-title')
    BTP
  @stop

  @section('body')
    <section id="news">
      <div class="news-section-title">
        <h3>GENEL BAŞKAN'DAN</h3> <div class="stripe-title-big"> </div>
      </div>
      <hr>
      <div class="clearfix"></div>

    @foreach ($news as $article)
      <article>
      <img src="{{ asset($article->media) }}" alt="{{ $article->head }}" class="thumbnail">
        <h3>{{ $article->head }}</h3>
        <p>{{ Str::words($article->content,53) }}</p>
      </article>
    @endforeach

    {{ $news->links() }}

    </section>
    @stop
    
@stop