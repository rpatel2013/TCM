	<!--jQuery 2.1.1 -->
    <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js'); ?>"></script>

    <!--Bootstrap -->
    <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- MetisMenu -->
    <script src="<?php echo base_url('assets/lib/metismenu/metisMenu.min.js'); ?>"></script>

    <!-- Screenfull -->
    <script src="<?php echo base_url('assets/lib/screenfull/screenfull.js'); ?>"></script>

    <!-- Metis core scripts -->
    <script src="<?php echo base_url('assets/js/core.min.js'); ?>"></script>

    <!-- Metis demo scripts -->
    <script src="<?php echo base_url('assets/js/app.min.js'); ?>"></script>

    <script type="text/javascript">
      (function($) {
        $(document).ready(function() {
          $('.list-inline li > a').click(function() {
            var activeForm = $(this).attr('href') + ' > form';
            //console.log(activeForm);
            $(activeForm).addClass('animated fadeIn');
            //set timer to 1 seconds, after that, unload the animate animation
            setTimeout(function() {
              $(activeForm).removeClass('animated fadeIn');
            }, 1000);
          });
        });
      })(jQuery);
    </script>
  </body>
</html>