@extends('btp.layouts.master')

  @section('page-title')
    {{$cat->name}} || Bağımsız Türkiye Partisi
  @stop

  @section('body')
    <section id="news">
      <div class="news-section-title">
        <h3>{{$cat->name}}</h3> <div class="stripe-title-big"> </div>
      </div>
      <hr>
      <div class="clearfix"></div>

    @foreach ($news as $article)
      <article>
        <a href="{{ URL::to('content/view/'.$article->id.'/'.$article->slug) }}">
          @if($article->media!=null)
            <img src="{{ Timthumb::link(asset($article->media),220,150) }}" alt="{{ $article->head }}" class="thumbnail">
          @endif
          <h3>{{ $article->head }}</h3>
        </a>
        <p>{{ Str::words(strip_tags($article->content),55) }}</p>

      </article>
    @endforeach

    {{ $news->links() }}

    </section>
    @stop
    
@stop