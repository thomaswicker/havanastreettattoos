
  <script src="<?php bloginfo( 'template_directory' ); ?>/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/bower_components/foundation/js/foundation/foundation.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/bower_components/foundation/js/foundation/foundation.topbar.js"></script>
  <script src="<?php bloginfo( 'template_directory' ); ?>/js/application.min.js"></script>

  <script>
  $('img').bind('mouseenter mouseleave', function() {
      $(this).attr({
          src: $(this).attr('data-other-src')
          , 'data-other-src': $(this).attr('src')
      })
  });
  </script>

  <script>
    $(document).foundation();
  </script>

  <!-- <script>
    smoothScroll.init();
  </script> -->

  <script>
    var scroll = new SmoothScroll('a[href*="#"]');
  </script>

  <?php wp_footer(); ?>

</body>

</html>
