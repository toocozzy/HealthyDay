<?php /* Template Name: pageCity */?>

<?php
  get_header();
  global $post;
  $thumbnail_id = get_post_thumbnail_id( $post->ID );
  $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
?>
<script>
  <?php include('pages/city/cityCSS.js'); ?>
</script>

<?php include('components/navigation/navigation.php'); ?>

<div class="page-city">
  <section class="header-section gray-color-bg position-relative">
    <div class="container">
      <div class="row ">
        <div class="col-lg-6">
          <img class="w-100 mr-5" alt="<?php echo $alt; ?>" src="<?php echo get_the_post_thumbnail_url(); ?>" />
        </div>
        <div class="col-lg-6">
          <aside class="pl-4">
            <span class="font-size-18 d-block font-homemadeapple green-color">Miasto</span>
            <h1 data-aos="fade-up" class="black-color font-archivo font-weight-bold font-size-40 m-0">
              <?php echo the_title(); ?>
            </h1>
            <div data-aos="fade-up" data-aos-duration="2000" class="font-size-16 font-weight-normal gray-color-2 mt-3 mb-3">
              <?php
                if (have_posts()):
                  while (have_posts()) : the_post();
                    the_content();
                  endwhile;
                endif;
              ?>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>

  <?php include('components/cookie-bar/cookie-bar.php'); ?>
  <?php include('components/footer/footer.php'); ?>
</div>
<script>
  <?php include('pages/city/cityJS.js'); ?>
</script>

<?php get_footer();?>
