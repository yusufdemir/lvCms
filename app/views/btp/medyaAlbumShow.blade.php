@extends('btp.layouts.master')

  @section('page-title')
    BTP
  @stop

  @section('body')
  <link href="{{ asset('btp/js/flexslider/flexslider.css') }}" rel="stylesheet">
    <section id="news">
      <div class="news-section-title">
        <h3>MEDYA</h3> <div class="stripe-title-big"> </div>
      </div>
      <hr>
      <div class="clearfix"></div>
<style>

</style>

    
<div id="slider" class="flexslider">
  <ul class="slides">
    @foreach ($album as $photo)        <li><img src="{{ Timthumb::link(asset($photo->photo->link),650,390) }}" /></li>
    @endforeach 
  </ul>
</div>
<div id="carousel" class="flexslider">
  <ul class="slides">
    @foreach ($album as $photo)
        <li><img src="{{ Timthumb::link(asset($photo->photo->link),200,120) }}" /></li>
    @endforeach
  </ul>
</div>


    
    </section>
    @stop
    
@stop


@section('footer-js')
<script src="{{ asset('btp/js/flexslider/jquery.flexslider-min.js') }}"></script>
<script>
$(window).load(function() {
  // The slider being synced must be initialized first
  $('#carousel').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 210,
    itemMargin: 5,
    asNavFor: '#slider'
  });
   
  $('#slider').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#carousel"
  });
});
</script>
@stop

