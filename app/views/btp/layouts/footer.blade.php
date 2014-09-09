        </div><!-- /.row -->

    </div><!-- /.container -->

    <footer>
        <div class="footer">
          <div class="footer-widget-container">
            <ul>
              <li>
                <h5><a href="http://www.btp.org.tr/yonetim/myk" title="Merkez Yönetim Kurulu">Merkez Yönetim Kurulu</a></h5>
              </li><li>
                <h5><a href="http://www.btp.org.tr/yonetim/ydk" title="Yüksek Disiplin Kurulu">Yüksek Disiplin Kurulu</a></h5>
              </li><li>
                <h5><a href="http://www.btp.org.tr/yonetim/teskilat" title="İl ve İlçe Teşkilat">İl ve İlçe Teşkilat</a></h5>
              </li><li>
                <h5><a href="http://www.btp.org.tr/yonetim/baskanliklar" title="Başkanlıklar">Başkanlıklar</a></h5>
            </li></ul>
            <div class="clear"></div>
          </div>


          <div class="footer-widget-container">
            <ul>
              <li>
                <h5><a href="http://www.btp.org.tr/content/k/1/genel-baskan" title="Genel Başkan'dan">Genel Başkan'dan</a></h5>
              </li><li>
                <h5><a href="http://www.btp.org.tr/content/view/36/tuzuk" title="Tüzük">Tüzük</a></h5>
              </li><li>
                <h5><a href="http://www.btp.org.tr/content/view/25/program" title="Program">Program</a></h5>
              </li><li>
                <h5><a href="http://www.btp.org.tr/content/k/9/projeler" title="Projeler">Projeler</a></h5>
            </li></ul>
            <div class="clear"></div>
          </div>

          <div class="footer-widget-container">
            <ul>
              <li>
                <h5><a href="http://www.kabecanliyayin.net" title="Kabe Canlı Yayın">Kabe Canlı</a></h5>
              </li><li>
                <h5><a href="http://www.ehlibeyt.gen.tr" title="Ehl-iBeyt">Ehl-iBeyt</a></h5>
              </li><li>
                <h5><a href="http://www.milliekonomimodeli.com" title="Milli Ekonomi Modeli">Milli Ekonomi Modeli</a></h5>
              </li><li>
                <h5><a href="javascript:void(0)" title="Kadın Kolları">Kadın Kolları</a></h5>
              </li><li>
                <h5><a href="javascript:void(0)" title="Gençlik Kolları">Gençlik Kolları</a></h5>
            </li></ul>
            <div class="clear"></div>
          </div>


          <div class="clearfix"></div>

        </div>
        <div class="copyright">Tüm hakları Bağımsız Türkiye Partisi'ne aittir. Sitede yayınlanan yazılar, ancak kaynak ve adres gösterilerek kullanılabilir.
        <br> www.btp.org.tr </div>
        
        
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('btp/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('btp/js/elasticslideshow/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('btp/js/elasticslideshow/jquery.eislideshow.js') }}"></script>
    <script src="{{ asset('btp/js/eventCalendar/js/jquery.eventCalendar.min.js') }}"></script>
    <script src="{{ asset('btp/js/script.js') }}"></script>
    @yield('footer-js')
    <script type="text/javascript">

      $(document).ready(function() {

        $('#ei-slider').eislideshow({
          animation     : 'left',
          autoplay      : true,

        });

      });
      $(window).bind("load", function() {
          $('#yukleniyor').fadeOut(1000);
          $('#news > article > a,.contact > a,body > nav').fadeIn(1000);
      });
    </script>
  </body>
</html>