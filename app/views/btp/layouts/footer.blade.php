        </div><!-- /.row -->

    </div><!-- /.container -->

    <footer>
        <div class="footer">
          
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

    <script type="text/javascript">

      $(document).ready(function() {

        $('#ei-slider').eislideshow({
          animation     : 'left',
          autoplay      : true,

        });

      });
    </script>
  </body>
</html>