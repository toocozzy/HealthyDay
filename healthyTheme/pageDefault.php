<?php /* Template Name: pageDefault */?>

<?php get_header();?>
<script>
  <?php include('pages/default/defaultCSS.js'); ?>
</script>


<?php include('components/navigation/navigation.php'); ?>

<div class="page-default">
  <section class="header-section gray-color-bg position-relative d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <h1 class="black-color font-archivo font-weight-bold font-size-56 text-center"><?php echo get_the_title(); ?></h1>
        </div>
      </div>
    </div>

    <div class="wave-standard left-0 transform-rotate-180 bottom-0 position-absolute w-100"
      style="background-image: url('<?php bloginfo('template_url');?>/assets/images/wave_white_down_1.svg')">
    </div>
  </section>

  <section class="default-section white-smoke-bg py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <article tabindex="0" class="wysiwig-container">
            <?php
              if (have_posts()):
                while (have_posts()) : the_post();
                  the_content();
                endwhile;
              endif;
            ?>
          </article>
        </div>
      </div>
    </div>
  </section>
  <?php include('components/cookie-bar/cookie-bar.php'); ?>
  <?php include('components/footer/footer.php'); ?>
</div>

<script>
  <?php include('pages/default/defaultJS.js'); ?>
</script>


<?php get_footer();?>
