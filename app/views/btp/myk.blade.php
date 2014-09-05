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
        <h3>Merkez Yönetim Kurulu</h3> <div class="stripe-title-big"> </div>
      </div>
      <hr>
      <div class="clearfix"></div>

<div class="genel">

  <ul class="tree onecolumn">
    <li>
      <hr>
      <a  class="ttip" title="Prof. Dr. Haydar Baş 1947 yılında Trabzon'da doğmuştur. İlk, orta ve lise tahsilini Trabzon'da tamamlamasının ardından; 1970 senesinde, Kayseri'deki Erciyes Üniversitesi'ne bağlı Yüksek İslam Enstitüsü'nden mezun olmuştur." href="/user/biography/1/prof-dr-haydar-bas"><img src="/_uploads/adaylar/haydar-bas.jpg" alt="Haydar Baş" /></a>
      <hr>
      <span class="type">Genel Başkan</span><span class="name">Haydar BAŞ</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/abdulkadir-misir.jpg" alt="Abdulkadir Mısır" />
      <hr>
      <span class="type"></span><span class="name">Abdulkadir Mısır</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/ugur-kepekci.jpg" alt="Abdulkadir Uğur Kepekçi" />
      <hr>
      <span class="type"></span><span class="name">Abdulkadir Uğur Kepekçi</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/abdullah-terzi.jpg" alt="Abdullah Terzi" />
      <hr>
      <span class="type"></span><span class="name">Abdullah Terzi</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/adem-birinci.jpg" alt="Adem Birinci" />
      <hr>
      <span class="type"></span><span class="name">Adem Birinci</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/ahmet-bektas.jpg" alt="Ahmet Emin Bektaş" />
      <hr>
      <span class="type"></span><span class="name">Ahmet Emin Bektaş</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/ahmet-erimhan.jpg" alt="Ahmet Erimhan" />
      <hr>
      <span class="type"></span><span class="name">Ahmet Erimhan</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/ahmet-hamdi-kepekci.jpg" alt="Ahmet Hamdi Kepekçi" />
      <hr>
      <span class="type"></span><span class="name">Ahmet Hamdi Kepekçi</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/ahmet-o-haznedar.jpg" alt="Ahmet O.Haznedar" />
      <hr>
      <span class="type"></span><span class="name">Ahmet O.Haznadar</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/alaaddin-ozkar.jpg" alt="Alaaddin Özkar" />
      <hr>
      <span class="type"></span><span class="name">Alaaddin Özkar</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/ali-garacoglu.jpg" alt="Ali Garaçoğlu" />
      <hr>
      <span class="type"></span><span class="name">Ali Garaçoğlu</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Ali Haydar Karakuş" />
      <hr>
      <span class="type"></span><span class="name">Ali Haydar Karakuş</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Ali Şenel Çobanoğlu" />
      <hr>
      <span class="type"></span><span class="name">Ali Şenel Çobanoğlu</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/ali-unal-emiroglu.jpg" alt="Ali Ünal Emiroğlu" />
      <hr>
      <span class="type"></span><span class="name">Ali Ünal Emiroğlu</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/arife-ulusoy.jpg" alt="Arife Ulusoy" />
      <hr>
      <span class="type"></span><span class="name">Arife Ulusoy</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/ata-selcuk.jpg" alt="Ata Selçuk" />
      <hr>
      <span class="type"></span><span class="name">Ata Selçuk</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/ayhan-asan.jpg" alt="Ayhan Aşan" />
      <hr>
      <span class="type"></span><span class="name">Ayhan Aşan</span> </li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Ayşe Özilhan" />
      <hr>
      <span class="type"></span><span class="name">Ayşe Özilhan</span> </li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/aziz-karaca.jpg" alt="Aziz Karaca" />
      <hr>
      <span class="type"></span><span class="name">Aziz Karaca</span> </li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/bayram-kavak.jpg" alt="Bayram Kavak" />
      <hr>
      <span class="type"></span><span class="name">Bayram Kavak</span> </li>
    <li  class="last">
      <hr>
      <img src="/_uploads/adaylar/bahri-boz.jpg" alt="Bahri Boz" />
      <hr>
      <span class="type"></span><span class="name">Behri Boz</span> </li>

  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/bilal-karamus.jpg" alt="Bilal Karamus" />
      <hr>
      <span class="type"></span><span class="name">Bilal Karamus</span> </li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Cahit Babuna" />
      <hr>
      <span class="type"></span><span class="name">Cahit Babuna</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/cavit-ozdogan.jpg" alt="Cavit Özdoğan" />
      <hr>
      <span class="type"></span><span class="name">Cavit Özdoğan</span> </li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Cemile Gülsüm Kayacı" />
      <hr>
      <span class="type"></span><span class="name">Cemile Gülsüm Kayacı</span> </li>
    <li  class="last">
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Çoşkun Gündüz" />
      <hr>
      <span class="type"></span><span class="name">Coşkun Gündüz</span></li>

  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/ekrem-sayan.jpg" alt="Ekrem Sayan" />
      <hr>
      <span class="type"></span><span class="name">Ekrem Sayan</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Elif Odaman" />
      <hr>
      <span class="type"></span><span class="name">Elif Odaman</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Elif Özge Maz" />
      <hr>
      <span class="type"></span><span class="name">Elif Özge Maz</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/emine-selcuk.jpg" alt="Emine Selçuk" />
      <hr>
      <span class="type"></span><span class="name">Emine Selçuk</span></li>
    <li  class="last">
      <hr>
      <img src="/_uploads/adaylar/emre-polat.jpg" alt="Emre Polat" />
      <hr>
      <span class="type"></span><span class="name">Emre Polat</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/ender-karabulut.jpg" alt="Ender Karabulut" />
      <hr>
      <span class="type"></span><span class="name">Ender Karabulut</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/esin-kurt.jpg" alt="Esin Kurt" />
      <hr>
      <span class="type"></span><span class="name">Esin Kurt</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Faik Ünal Silier" />
      <hr>
      <span class="type"></span><span class="name">Faik Ünal Silier</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fahri-gurgenburan.jpg" alt="Fahri Gürgenburan" />
      <hr>
      <span class="type"></span><span class="name">Fahri Gürgenburan</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Fatma Akkuş" />
      <hr>
      <span class="type"></span><span class="name">Fatma Akkuş</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/fatma-berk.jpg" alt="Fatma Berk" />
      <hr>
      <span class="type"></span><span class="name">Fatma Berk</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Fatma Göksel" />
      <hr>
      <span class="type"></span><span class="name">Fatma Göksel</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fehmi-ucar.jpg" alt="Fehmi Uçar" />
      <hr>
      <span class="type"></span><span class="name">Fehmi Uçar</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Feyza Gültekin" />
      <hr>
      <span class="type"></span><span class="name">Feyza Gültekin</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Gülseren Kocamış" />
      <hr>
      <span class="type"></span><span class="name">Gülseren Kocamış</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Gönül Akkuş" />
      <hr>
      <span class="type"></span><span class="name">Gönül Akkuş</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Gülsüm Toroman" />
      <hr>
      <span class="type"></span><span class="name">Gülsüm Toroman</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/av-gulsen-polat.jpg" alt="Gülşen Polat" />
      <hr>
      <span class="type"></span><span class="name">Gülşen Polat</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Gürcan Bahar" />
      <hr>
      <span class="type"></span><span class="name">Gürcan Bahar</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/av-hakan-guler.jpg" alt="Av. Hakan Güler" />
      <hr>
      <span class="type"></span><span class="name">Hakan Güler</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Harun Göksel" />
      <hr>
      <span class="type"></span><span class="name">Harun Göksel</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/harun-kayaci.jpg" alt="Harun Kayacı" />
      <hr>
      <span class="type"></span><span class="name">Harun Kayacı</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Hasan Ateş" />
      <hr>
      <span class="type"></span><span class="name">Hasan Ateş</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Hasan Aydın" />
      <hr>
      <span class="type"></span><span class="name">Hasan Aydın</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Hasan Bektaş" />
      <hr>
      <span class="type"></span><span class="name">Hasan Bektaş</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/hasan-ozturk.jpg" alt="Hasan Öztürk" />
      <hr>
      <span class="type"></span><span class="name">Hasan Öztürk</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/hidayet-sari.jpg" alt="Hidayet Sarı" />
      <hr>
      <span class="type"></span><span class="name">Hidayet Sarı</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/huseyin-akbal.jpg" alt="Hüseyin Akbal" />
      <hr>
      <span class="type"></span><span class="name">Hüseyin Akbal</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Hüseyin Bayram" />
      <hr>
      <span class="type"></span><span class="name">Hüseyin Bayram</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Hüseyin Turhan" />
      <hr>
      <span class="type"></span><span class="name">Hüseyin Turhan</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Hüseyin Zengin" />
      <hr>
      <span class="type"></span><span class="name">Hüseyin Zengin</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/yusuf-yakut.jpg" alt="İ. Yusuf Yakut" />
      <hr>
      <span class="type"></span><span class="name">İ. Yusuf Yakut</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="İbrahim Berk" />
      <hr>
      <span class="name">İbrahim Berk</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="İkbal Şişman" />
      <hr>
      <span class="name">İkbal Şişman</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/ismail-cetin.jpg" alt="İsmail Çetin" />
      <hr>
      <span class="name">İsmail Çetin</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/ersin-polat.jpg" alt="İsmail Ersin Polat" />
      <hr>
      <span class="type"></span><span class="name">İsmail Ersin Polat</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/izzet-yasar.jpg" alt="İzzet Yaşar" />
      <hr>
      <span class="type"></span><span class="name">İzzet Yaşar</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/lutfullah-onder.jpg" alt="Lütfullah Önder" />
      <hr>
      <span class="type"></span><span class="name">Lütfullah Önder</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fuat-sengul.jpg" alt="Fuat Şengül" />
      <hr>
      <span class="type"></span><span class="name">M. Fuat Şengül</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/murat-yavuz-koker.jpg" alt="M. Yavuz Köker" />
      <hr>
      <span class="type"></span><span class="name">M. Yavuz Köker</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/galip-akdag.jpg" alt="M. Galip Akdağ" />
      <hr>
      <span class="type"></span><span class="name">M. Galip Akdağ</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/ilteber-bahadir.jpg" alt="M. İlteber Bahadır" />
      <hr>
      <span class="type"></span><span class="name">M. İlteber Bahadır</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/mehmet-garacoglu.jpg" alt="Mehmet Zeki Garaçoğlu" />
      <hr>
      <span class="type"></span><span class="name">Mehmet Zeki Garaçoğlu</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Mehmet Turgut" />
      <hr>
      <span class="type"></span><span class="name">Mehmet Turgut</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/mehmet-emin-koc.jpg" alt="Mehmet Emin Koç" />
      <hr>
      <span class="type"></span><span class="name">Mehmet Emin Koç</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Mehmet Garaçoğlu" />
      <hr>
      <span class="type"></span><span class="name">Mehmet Garaçoğlu</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/mehmet-palamut.jpg" alt="Mehmet Palamut" />
      <hr>
      <span class="type"></span><span class="name">Mehmet Palamut</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/meryem-gultekin.jpg" alt="Meryem Gültekin" />
      <hr>
      <span class="type"></span><span class="name">Meryem Gültekin</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Metin Geyik" />
      <hr>
      <span class="type"></span><span class="name">Metin Geyik</span></li>

  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Mine Sıdıka Kermalli" />
      <hr>
      <span class="type"></span><span class="name">Mine Sıdıka Kermalli</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Mithat Kandemir" />
      <hr>
      <span class="type"></span><span class="name">Mithat Kandemir</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/muhammed-hayir.jpg" alt="Muhammed Hayır" />
      <hr>
      <span class="type"></span><span class="name">Muhammed Hayır</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/muharrem-bayraktar.jpg" alt="Muharrem Bayraktar" />
      <hr>
      <span class="type"></span><span class="name">Muharrem Bayraktar</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/muharrem-can.jpg" alt="Muharrem Can" />
      <hr>
      <span class="type"></span><span class="name">Muharrem Can</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Muharrem Gelebek" />
      <hr>
      <span class="type"></span><span class="name">Muharrem Gelebek</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/murat-cabas.jpg" alt="Murat Çabaş" />
      <hr>
      <span class="type"></span><span class="name">Murat Çabaş</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/murat-etci.jpg" alt="Murat Etçi" />
      <hr>
      <span class="type"></span><span class="name">Murat Etçi</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/murat-kazanci.jpg" alt="Murat Kazancı" />
      <hr>
      <span class="type"></span><span class="name">Murat Kazancı</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Murat Özilhan" />
      <hr>
      <span class="type"></span><span class="name">Murat Özilhan</span></li>

  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/musa-demir.jpg" alt="Musa Demir" />
      <hr>
      <span class="type"></span><span class="name">Musa Demir</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Musa Yeşilyurt" />
      <hr>
      <span class="type"></span><span class="name">Musa Yeşilyurt</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/mustafa-dogan.jpg" alt="Mustafa Doğan" />
      <hr>
      <span class="type"></span><span class="name">Mustafa Doğan</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/mustafa-eraslan.jpg" alt="Mustafa Eraslan" />
      <hr>
      <span class="type"></span><span class="name">Mustafa Eraslan</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Mustafa Hayri Baş" />
      <hr>
      <span class="type"></span><span class="name">Mustafa Hayri Baş</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li >
      <hr>
      <img src="/_uploads/adaylar/mustafa-kaya.jpg" alt="Mustafa Kaya" />
      <hr>
      <span class="type"></span><span class="name">Mustafa Kaya</span></li>
    <li >
      <hr>
      <img src="/_uploads/adaylar/mustafa-pak.jpg" alt="Mustafa Pak" />
      <hr>
      <span class="type"></span><span class="name">Mustafa Pak</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Mustafa Şahin" />
      <hr>
      <span class="type"></span><span class="name">Mustafa Şahin</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Mustafa Tekin" />
      <hr>
      <span class="type"></span><span class="name">Mustafa Tekin</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Mustafa Tozkoparan" />
      <hr>
      <span class="type"></span><span class="name">Mustafa Tozkoparan</span></li>
</ul>
<ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Muzaffer Yağmur" />
      <hr>
      <span class="type"></span><span class="name">Muzaffer Yağmur</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/muslim-karabacak.jpg" alt="Müslim Karabacak" />
      <hr>
      <span class="type"></span><span class="name">Müslim Karabacak</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Müyesser Tomruk" />
      <hr>
      <span class="type"></span><span class="name">Müyesser Tomruk</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Nazan Kayacı" />
      <hr>
      <span class="type"></span><span class="name">Nazan Kayacı</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Nazım Şahin" />
      <hr>
      <span class="type"></span><span class="name">Nazım Şahin</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Necati Çelik" />
      <hr>
      <span class="type"></span><span class="name">Necati Çelik</span></li>

    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Nihat Hekimoğlu" />
      <hr>
      <span class="type"></span><span class="name">Nihat Hekimoğlu</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/nurettin-genc.jpg" alt="Nurettin Genç" />
      <hr>
      <span class="type"></span><span class="name">Nurettin Genç</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/nuri-kaplan.jpg" alt="Nuri Kaplan" />
      <hr>
      <span class="type"></span><span class="name">Nuri Kaplan</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/orhan-dede.jpg" alt="Orhan Dede" />
      <hr>
      <span class="type"></span><span class="name">Orhan Dede</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Ömer Eyercioğlu" />
      <hr>
      <span class="type"></span><span class="name">Ömer Eyercioğlu</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Ömer Saraçoğlu" />
      <hr>
      <span class="type"></span><span class="name">Ömer Saraçoğlu</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/omer-turan.jpg" alt="Ömer Turan" />
      <hr>
      <span class="type"></span><span class="name">Ömer Turan</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/onder-colak.jpg" alt="Önder Çolak" />
      <hr>
      <span class="type"></span><span class="name">Önder Çolak</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/ruhi-sari.jpg" alt="Ruhi Sarı" />
      <hr>
      <span class="type"></span><span class="name">Ruhi Sarı</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Sabiha Karamustafa" />
      <hr>
      <span class="type"></span><span class="name">Sabiha Karamustafa</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/sami-demiray.jpg" alt="Sami Demiray" />
      <hr>
      <span class="type"></span><span class="name">Sami Demiray</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/sabri-terzi.jpg" alt="Sabri Terzi" />
      <hr>
      <span class="type"></span><span class="name">Sabri Terzi</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/sani-ak.jpg" alt="Sani Ak" />
      <hr>
       <span class="type"></span><span class="name">Sani Ak</span></li>
</ul>  
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/secil-mumcuoglu.jpg" alt="Seçil Mumcuoğlu" />
      <hr>
       <span class="type"></span><span class="name">Seçil Mumcuoğlu</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/selim-kotil.jpg" alt="Selim Kotil" />
      <hr>
      <span class="type"></span><span class="name">Selim Kotil</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/selim-mecit-beser.jpg" alt="Selim Mecit Beşer" />
      <hr>
      <span class="type"></span><span class="name">Selim Mecit Beşer</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/sevinc-baysal.jpg" alt="Sevinç Baysal" />
      <hr>
      <span class="type"></span><span class="name">Sevinç Baysal</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/suat-hari-sapmaz.jpg" alt="Suat Hayri Sapmaz" />
      <hr>
      <span class="type"></span><span class="name">Suat Hayri Sapmaz</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Süleyman Keskin" />
      <hr>
      <span class="type"></span><span class="name">Süleyman Keskin</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/sahin-bozdogan.jpg" alt="Şahin Bozdoğan" />
      <hr>
       <span class="type"></span><span class="name">Şahin Bozdoğan</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/sevket-tamac.jpg" alt="Şevket Tamaç" />
      <hr>
      <span class="type"></span><span class="name">Av. Şevket Tamaç</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Tahir Altandaş" />
      <hr>
      <span class="type"></span><span class="name">Tahir Altandaş</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/timurcan-ulusoy.jpg" alt="Timurcan Ulusoy" />
      <hr>
      <span class="type"></span><span class="name">Timurcan Ulusoy</span></li>
  </ul>
  <ul class="tree fivecolumns">
    <li>
      <hr>
      <img src="/_uploads/adaylar/turan-demir.jpg" alt="Turhan Demir" />
      <hr>
      <span class="type"></span><span class="name">Turhan Demir</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/vahit-belge.jpg" alt="Vahit Belge" />
      <hr>
      <span class="type"></span><span class="name">Vahit Belge</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/yusuf-karaca.jpg" alt="Yusuf Karaca" />
      <hr>
      <span class="type"></span><span class="name">Yusuf Karaca</span></li>
    <li>
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Zeliha Gülen" />
      <hr>
      <span class="name">Zeliha Gülen</span></li>
    <li class="last">
      <hr>
      <img src="/_uploads/adaylar/fotograf-yok.jpg" alt="Zühtü Kazancı" />
      <hr>
      <span class="name">Zühtü Kazancı</span></li>
  </ul>
</div>



      </article>
    </section>
    @stop
    
@stop