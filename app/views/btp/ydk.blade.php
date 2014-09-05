@extends('btp.layouts.masterSingle')

  @section('page-title')
    BTP
  @stop

  @section('body')
    <section id="news">
      <article class="singlePages">


<style>
  hr {
     clear:both;
  }
#news article img {
  margin:10px 50px 10px 10px;
  width: 90px;
  height: 110px;
}

  .genel {
    width: 100%;
    margin: 0 auto;
    text-align: center;
}
.genel .tree {
    overflow: hidden;
    background: url(images/divider-610.png) bottom center no-repeat;
    padding: 20px 0 20px 0;
}
.genel .tree li img {
    -webkit-box-shadow: 0px 0px 7px rgba(0, 0, 0, 1);
    -moz-box-shadow: 0px 0px 7px rgba(0, 0, 0, 1);
    box-shadow: 0px 0px 7px rgba(0, 0, 0, 1);
    border: 1px solid #FFF;
}
.genel .tree span {
    display: block;
    font-size: 12px;
    font-family: Arial, Helvetica, sans-serif;
}
.genel .tree .spr {
    width: 197px;
    height: 1px;
    background: url(images/divider-197.png) no-repeat;
    margin: 12px 0 12px 0;
}
.genel .onecolumn li {
    display: block;
    width: 197px;
    margin: 0 auto;
}
.genel .threecolumns {
    width: 660px;
    margin: 0 auto;
}
.genel .threecolumns li {
    display: block;
    width: 197px;
    float: left;
    margin-right: 34px;
}
.genel .threecolumns li.last {
    margin-right: 0px;
}
.genel .fourcolumns {
    width: 810px;
    margin: 0 auto;
}
.genel .fourcolumns li {
    display: block;
    width: 197px;
    float: left;
    margin-right: 4px;
}
.genel .fourcolumns li.last {
    margin-right: 0px;
}
.genel .secondcolumns {
    width: 660px;
    margin: 0 auto;
}
.genel .secondcolumns li {
    display: block;
    width: 197px;
    margin-left: 120px;
    float: left;
}
.genel .secondcolumns li.last {
    margin-right: 0px;
    margin-left: 30px;
}
.genel .fivecolumns {
    width: 100%;
    margin: 0 auto;
}
.genel .fivecolumns li {
    display: block;
    width: 197px;
    float: left;
    margin-right: 0;
}
.genel .fivecolumns li.last {
    margin-right: 0px;
}
</style>

      <div class="news-section-title">
        <h3>Yüksek Disiplin Kurulu</h3> <div class="stripe-title-big"> </div>
      </div>
      <hr>
      <div class="clearfix"></div>
      
<div class="genel">

  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Ahmet Rıdvan Murat" />
      <hr>
      <span class="type"></span><span class="name">Ahmet Rıdvan Murat</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Ali Cengiz Taygan" />
      <hr>
      <span class="type"></span><span class="name">Ali Cengiz Taygan</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Avni Aslan" />
      <hr>
      <span class="type"></span><span class="name">Avni Aslan</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/cumhur-akgun.jpg" alt="Cumhur Akgün" />
      <hr>
      <span class="type"></span><span class="name">Cumhur Akgün</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Fuat Aydın" />
      <hr>
      <span class="type"></span><span class="name">Fuat Aydın</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/ilhan-gultekin.jpg" alt="İlhan Gültekin" />
      <hr>
      <span class="type"></span><span class="name">İlhan Gültekin</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/kazim-ustun.jpg" alt="Kazım Üstün" />
      <hr>
      <span class="type"></span><span class="name">Kazım Üstün</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/mustafa-cicek.jpg" alt="Mustafa Çiçek" />
      <hr>
      <span class="type"></span><span class="name">Mustafa Çiçek</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/mustafa-hilmi-yildirim.jpg" alt="Mustafa Hilmi Yıldırım" />
      <hr>
      <span class="type"></span><span class="name">Mustafa Hilmi Yıldırım</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/osman-bas.jpg" alt="Osman Baş" />
      <hr>
      <span class="type"></span><span class="name">Osman Baş</span></li>
  </ul>
  <ul class="tree onecolumn">
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/tevrat-duran.jpg" alt="Tevrat Duran" />
      <hr>
      <span class="type"></span><span class="name">Tevrat Duran</span></li>
  </ul>
  <ul class="tree onecolumn">
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Cemal Baba" />
      <hr>
      <span class="type"></span><span class="name">Cemal Baba</span></li>
  </ul>
</div>



      </article>
    </section>
    @stop
    
@stop