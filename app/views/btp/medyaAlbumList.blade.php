@extends('btp.layouts.master')

  @section('page-title')
    BTP
  @stop

  @section('body')
    <section id="news">
      <div class="news-section-title">
        <h3>MEDYA</h3> <div class="stripe-title-big"> </div>
      </div>
      <hr>
      <div class="clearfix"></div>
<style>
#news article img {
  float: right;
  margin: 0px 0px 0px 0px;
  width: 200px;
  height: 120px;
}
.multipleslides {
  position: relative;
  width: 200px;
  height: 120px;
  float: left;
}
.multipleslides > * { 
  position:absolute; 
  left:0; 
  top:0; 
  display:block; 
  margin:0px;
  padding: 0px;
}
summary {
  width: 200px;
  height: 150px;
  float: left;
  margin: 5px;
  text-align: center;
}
</style>

    
      <article class="list-media">
        @foreach ($media as $album)
          <summary>
            <span class="title">{{ $album->name }}</span>
            <div class="multipleslides">
            
            @foreach ($album->album as $photo)
              @if ($photo->deleted == 0) 
                <a href="{{ URL::to('/gallery/view/'.$album->id.'/'.$album->name) }}"> <img src="{{ Timthumb::link(asset($photo->photo->link),200,120) }}"></a>
              @endif
            @endforeach  
            </div>
            
          </summary>
        @endforeach    
      </article>
    
    </section>
    @stop
    
@stop


@section('footer-js')
  <script>
$(function(){
  $('.multipleslides').each(function(){
    // scope everything for each slideshow
    var $this = this;
    $('> :gt(0)', $this).hide();
    var $time = Math.floor((Math.random() * 500) + 5000);
    setInterval(function(){$('> :first-child',$this).fadeOut().next().fadeIn().end().appendTo($this);}, $time);
  })
});
</script>
@stop

