@extends('btp.layouts.master')

  @section('page-title')
    BTP
  @stop

  @section('body')
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
          @foreach ($cats['genelBaskan'] as $index => $post)
            @if ($index == 0)
              <li class="first"> 
                @if($post->media!=null)
                  <img src="{{ Timthumb::link(asset($post->media),220,150) }}" alt="{{ $post->head }}" class="thumbnail">
                @else
                  <img class="thumbnail" src="http://dummyimage.com/320x210/8a4d4d/ffffff.jpg&text=BTP" alt="BTP">
                @endif
                <h3><a href="{{ URL::to('content/view/'.$post->id.'/'.$post->slug) }}" title="{{ $post->head }}">{{ $post->head }}</a></h3>
                <p>{{ Str::words($post->content,20) }}</p>
              </li>
            @else
              <li>
                @if($post->media!=null)
                  <img src="{{ Timthumb::link(asset($post->media),50,50) }}" alt="{{ $post->head }}" class="thumbnail">
                @else
                  <img class="thumbnail" src="http://dummyimage.com/50x50/8a4d4d/ffffff.jpg&text=BTP" alt="test">
                @endif
                <h4><a href="{{ URL::to('content/view/'.$post->id.'/'.$post->slug) }}" title="{{ $post->head }}">{{ $post->head }}</a></h4>
                <small>{{ date("Y-m-d",strtotime($post->created_at)) }}</small>
                <div class="clearfix"></div>
              </li>
            @endif

          @endforeach
        </ul>
          
      </div>

      <div class="cat-news col-sm-6">
        <div class="sidebar-module-title">
          <h4>DEMEÇLER</h4> <div class="stripe-title"> </div>
        </div>
        <ul class="cat-news">
          @foreach ($cats['demecler'] as $index => $post)
            @if ($index == 0)
              <li class="first"> 
                @if($post->media!=null)
                  <img src="{{ Timthumb::link(asset($post->media),220,150) }}" alt="{{ $post->head }}" class="thumbnail">
                @else
                  <img class="thumbnail" src="http://dummyimage.com/320x210/8a4d4d/ffffff.jpg&text=BTP" alt="BTP">
                @endif
                <h3><a href="{{ URL::to('content/view/'.$post->id.'/'.$post->slug) }}" title="{{ $post->head }}">{{ $post->head }}</a></h3>
                <p>{{ Str::words($post->content,20) }}</p>
              </li>
            @else
              <li>
                @if($post->media!=null)
                  <img src="{{ Timthumb::link(asset($post->media),50,50) }}" alt="{{ $post->head }}" class="thumbnail">
                @else
                  <img class="thumbnail" src="http://dummyimage.com/50x50/8a4d4d/ffffff.jpg&text=BTP" alt="test">
                @endif
                <h4><a href="{{ URL::to('content/view/'.$post->id.'/'.$post->slug) }}" title="{{ $post->head }}">{{ $post->head }}</a></h4>
                <small>{{ date("Y-m-d",strtotime($post->created_at)) }}</small>
                <div class="clearfix"></div>
              </li>
            @endif

          @endforeach
        </ul>
      </div>

    </div>
    @stop
    
@stop