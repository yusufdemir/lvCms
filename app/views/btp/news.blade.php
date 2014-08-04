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

    @for($i=1; $i <=5; $i++)
      <article>
      <img src="http://dummyimage.com/220x150/8a4d4d/ffffff.jpg&text=BTP-news" alt="" class="thumbnail">
        <h3>RAMAZAN BAYRAMINIZ MÜBAREK OLSUN</h3>
        
        <p>Mübarek Kadir Gecesi’ni idrak ettik. Türkiye’de huzurla, dualarla, zikir meclisleri ile ihya edilen gece yaz akşamına denk gelmesi hasebiyle bahçelere taşan Teravih namazlarıyla süslendi. Ülkemizdeki huzur maalesef komşu coğrafyalarda sağlanamıyor. Ramazan ayı boyunca Filistin’de verilen canlar için dua ettik.  Müslümanlar üzerinden devam eden işgallerin bitmesi için Kadir Gecesi’nde de ellerimizi göğe kaldırdık. Temennimiz bayrama barış ortamında girilmesidir. İslam...</p>
      </article>
    @endfor

    <ul class="pagination">
      <li><a href="#">&laquo;</a></li>
      <li><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">&raquo;</a></li>
    </ul>
    </section>
    @stop
    
@stop