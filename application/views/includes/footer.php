	  </main>

	  <!-- JS Global Compulsory -->
	  <script src="<?php echo base_url('assets/vendor/jquery-migrate/jquery-migrate.min.js');?>"></script>
	  <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js');?>"></script>
	  <script src="<?php echo base_url('assets/vendor/jquery.easing/js/jquery.easing.min.js');?>"></script>
	  <script src="<?php echo base_url('assets/vendor/popper.min.js');?>"></script>
	  <script src="<?php echo base_url('assets/vendor/tether.js');?>"></script>
	  <script src="<?php echo base_url('assets/vendor/bootstrap/bootstrap.min.js');?>"></script>
    

	  <!-- JS Implementing Plugins -->
	  <script src="<?php echo base_url('assets/vendor/hs-megamenu/src/hs.megamenu.js');?>"></script>
  
    <!-- jQuery UI Widgets -->
    <script  src="<?php echo base_url('assets/vendor/jquery-ui/ui/widgets/datepicker.js');?>"></script>

	  <!-- JS Unify -->
	  <script src="<?php echo base_url('assets/js/components/hs.header.js');?>"></script>
	  <script src="<?php echo base_url('assets/js/helpers/hs.hamburgers.js');?>"></script>
    <script src="<?php echo base_url('assets/js/components/hs.datepicker.js');?>"></script>
    
  <script>
    $(document).on('ready', function () {
      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');

      // initialization of carousel
      $.HSCore.components.HSCarousel.init('.js-carousel');

      // initialization of masonry
      $('.masonry-grid').imagesLoaded().then(function () {
        $('.masonry-grid').masonry({
          columnWidth: '.masonry-grid-sizer',
          itemSelector: '.masonry-grid-item',
          percentPosition: true
        });
      });

      // initialization of popups
      $.HSCore.components.HSPopup.init('.js-fancybox');
    });

    $(window).on('load', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#js-header'));
      $.HSCore.helpers.HSHamburgers.init('.hamburger');

      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991
      });
    });
  </script>



	</body>
</html>




