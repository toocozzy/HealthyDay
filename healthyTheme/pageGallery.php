<?php /* Template Name: pageGallery */?>

<?php get_header();?>
<script>
  <?php include('pages/gallery/galleryCSS.js'); ?>
</script>


<?php include('components/navigation/navigation.php'); ?>

<div class="page-gallery">
  <section  class="header-section gray-color-bg position-relative d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1 text-center">
          <span class="font-size-18 d-block font-homemadeapple orange-color">Jak się masz?</span>
          <h1 class="black-color font-archivo font-weight-bold font-size-56 text-center m-0">Nasza Galeria</h1>
          <div data-aos="zoom-out" data-aos-duration="2000" class="font-size-20 font-weight-normal gray-color-2 mt-3 mb-3">
            <?php
              if (have_posts()):
                while (have_posts()) : the_post();
                  the_content();
                endwhile;
              endif;
            ?>
          </div>
        </div>
      </div>
    </div>

    <div class="wave-standard left-0 transform-rotate-180 bottom-0 position-absolute w-100"
      style="background-image: url('<?php bloginfo('template_url');?>/assets/images/wave_white_down_1.svg')">
    </div>
  </section>

  <section class="gallery-section bg-white py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1 text-center">
          <!-- wp:html --><!-- Place <div> tag where you want the feed to appear -->
          <div id="curator-feed-default-layout"><a class="crt-logo crt-tag" href="https://curator.io" target="_blank" rel="noopener noreferrer">Powered by Curator.io</a></div>
          <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
          <p><script type="text/javascript">
          /* curator-feed-default-layout */
          (function(){
          var i, e, d = document, s = "script";i = d.createElement("script");i.async = 1;
          i.src = "https://cdn.curator.io/published/a92904e1-30cc-45f2-a7f3-9400a22a78a0.js";
          e = d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
          })();
          </script></p>
          <!-- /wp:html -->
        </div>
      </div>
    </div>
  </section>
  <?php include('components/cookie-bar/cookie-bar.php'); ?>
  <?php include('components/footer/footer.php'); ?>
</div>
<script>
  <?php include('pages/gallery/galleryJS.js'); ?>
</script>

<?php get_footer();?>
