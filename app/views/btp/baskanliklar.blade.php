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
        <h3>BAŞKANLIKLAR</h3> <div class="stripe-title-big"> </div>
      </div>
      <hr>
      <div class="clearfix"></div>
<div class="genel">
  <ul class="tree onecolumn">
    <li>
      <a  class="ttip" title="Prof. Dr. Haydar Baş" href="/user/biography/1/prof-dr-haydar-bas"><img src="/_uploads/adaylar/haydar-bas.jpg" alt="Haydar Baş" /></a>
      <hr>
      <span class="type">Genel Başkan</span><span class="name">Prof. Dr. Haydar Baş</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li> <span class="type">Siyasi İşler</span>
      <hr>
      <img src="/_uploads/adaylar/fuat-sengul.jpg" alt="" />
      <hr>
      <span class="type"></span><span class="name">Fuat Şengül</span></li>
    <li> <span class="type">Teşkilat Başkanlığı</span>
      <hr>
      <img src="/_uploads/adaylar/ahmet-hamdi-kepekci.jpg" alt="Dr. Ahmet Hamdi Kepekçi" />
      <hr>
      <span class="type"></span><span class="name">Dr. Ahmet Hamdi Kepekçi</span></li>
    <li> <span class="type">Seçim İşleri</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Lütfullah Önder" />
      <hr>
      <span class="type"></span><span class="name">Lütfullah Önder</span></li>
    <li> <span class="type">Basın Propaganda</span>
      <hr>
      <img src="/_uploads/adaylar/mehmet-emin-koc.jpg" alt="Mehmet Emin Koç" />
      <hr>
      <span class="type"></span><span class="name">Mehmet Emin Koç</span></li>
    <li class="last"><span class="type">Halkla İlişkiler</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Sabiha Karamustafa" />
      <hr>
      <span class="type"></span><span class="name">Sabiha Karamustafa</span> </li>
  </ul>
  <ul class="tree fivecolumns">
    <li> <span class="type">Eğitim</span>
      <hr>
      <img src="/_uploads/adaylar/omer-eyircioglu.jpg" alt="Prof. Dr. Ömer Eyercioğlu" />
      <hr>
      <span class="type"></span><span class="name">Prof. Dr. Ömer Eyercioğlu</span></li>
    <li> <span class="type">Yerel Yönetim</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Ali Garaçoğlu" />
      <hr>
      <span class="type"></span><span class="name">Ali Garaçoğlu</span></li>
    <li> <span class="type">Mali İşler</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Bilal Karamus" />
      <hr>
      <span class="type"></span><span class="name">Bilal Karamus</span> </li>
    <li> <span class="type">Kadın Kolları</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Seçil Mumcuoğlu" />
      <hr>
      <span class="type"></span><span class="name">Seçil Mumcuoğlu</span> </li>
    <li class="last"> <span class="type">Gençlik ve Spor Kolları</span>
      <hr>
      <img src="/_uploads/adaylar/abdullah-terzi.jpg" alt="Dr. Abdullah Terzi" />
      <hr>
      <span class="type"></span><span class="name">Dr. Abdullah Terzi</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li><span class="type">Hukuk İşleri</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Prof. Dr. Ali Ünal Emiroğlu" />
      <hr>
      <span class="type"></span><span class="name">Prof. Dr. Ali Ünal Emiroğlu</span> </li>
    <li> <span class="type">Sosyal ve Kültürel Faaliyetler</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Mehmet Zeki Garaçoğlu" />
      <hr>
      <span class="type"></span><span class="name">Mehmet Zeki Garaçoğlu</span></li>
    <li> <span class="type">Hükümet ve Parlamento İlişkileri</span>
      <hr>
      <img src="/_uploads/adaylar/ahmet-emirhan.jpg" alt="Av. Ahmet Erimhan" />
      <hr>
      <span class="type"></span><span class="name">Av. Ahmet Erimhan</span></li>
    <li> <span class="type">Ar-Ge</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Prof. Dr. Ömer Saraçoğlu" />
      <hr>
      <span class="type"></span><span class="name">Prof. Dr. Ömer Saraçoğlu</span></li>
    <li class="last"> <span class="type">Sivil Toplum Kuruluşları</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Timurcan Ulusoy" />
      <hr>
      <span class="type"></span><span class="name">Timurcan Ulusoy</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li> <span class="type">Bilim ve Teknoloji</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Prof. Dr. Ata Selçuk" />
      <hr>
      <span class="type"></span><span class="name">Prof. Dr. Ata Selçuk</span></li>
    <li> <span class="type">Sosyal Medyadan Sorumlu</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Ali Karakuş" />
      <hr>
      <span class="type"></span><span class="name">Ali Karakuş</span></li>
    <li> <span class="type">Sosyal ve Ekonomik Politikalar</span>
      <hr>
      <img src="/_uploads/adaylar/selim-kotil.jpg" alt="Selim Kotil" />
      <hr>
      <span class="type"></span><span class="name">Selim Kotil</span> </li>
    <li> <span class="type">Genel Başkan Yardımcılığı</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Şevket Tamaç" />
      <hr>
      <span class="type"></span><span class="name">Şevket Tamaç</span></li>
    <li class="last"> <span class="type">Genel Başkan Yardımcılığı</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Av. İbrahim Berk" />
      <hr>
      <span class="type"></span><span class="name">Av. İbrahim Berk</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li><span class="type">Genel Başkan Yardımcılığı</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Muharrem Bayraktar" />
      <hr>
      <span class="type"></span><span class="name">Muharrem Bayraktar</span> </li>
    <li> <span class="type">Genel Başkan Yardımcılığı</span>
      <hr>
      <img src="/_uploads/adaylar/arife-ulusoy.jpg" alt="Arife Ulusoy" />
      <hr>
      <span class="type"></span><span class="name">Arife Ulusoy</span></li>
    <li> <span class="type">Genel Başkan Yardımcılığı</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Meryem Gültekin" />
      <hr>
      <span class="type"></span><span class="name">Meryem Gültekin</span></li>
    <li class="last"> <span class="type">Genel Başkan Yardımcılığı</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Av. Gülşen Polat" />
      <hr>
      <span class="type"></span><span class="name">Av. Gülşen Polat</span></li>
  </ul>
  <ul class="tree fourcolumns">
    <li> <span class="type">Genel Başkan Yardımcılığı</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Av. Gürcan Bahar" />
      <hr>
      <span class="type"></span><span class="name">Av. Gürcan Bahar</span></li>
    <li class="last"> <span class="type">Genel Başkan Yardımcılığı</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Arife Göksel" />
      <hr>
      <span class="type"></span><span class="name">Arife Göksel</span></li>
    <li> <span class="type">Genel Başkan Yardımcılığı</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Utku Selçuk" />
      <hr>
      <span class="type"></span><span class="name">Utku Selçuk</span></li>
    <li> <span class="type">Genel Başkan Yardımcılığı</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Harun Kayacı" />
      <hr>
      <span class="type"></span><span class="name">Harun Kayacı</span> </li>
  </ul>
  <ul class="tree onecolumn">
    <li> <span class="type">Genel Sekreter</span>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Dr. Nuri Kaplan" />
      <hr>
      <span class="name">Dr. Nuri Kaplan</span></li>
  </ul>
  <ul class="tree onecolumn">
    <li> <span class="type">Genel Muhasip</span>
      <hr>
      <img src="/_uploads/adaylar/sami-demiray.jpg" alt="Sami Demiray" />
      <hr>
      <span class="name">Sami Demiray</span></li>
  </ul>
</div>


      </article>
    </section>
    @stop
    
@stop