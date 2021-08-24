
<?php get_header();?>
<script>
  <?php include('pages/archive-entry/archive-entryCSS.js'); ?>
</script>

<?php include('components/navigation/navigation.php'); ?>

<div class="archive-entry">
  <section  class="header-section gray-color-bg position-relative d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1 text-center">
          <span class="font-size-18 d-block font-homemadeapple orange-color">przepisy i blog?</span>
          <h1 class="black-color font-archivo font-weight-bold font-size-56 text-center m-0">Nasze artykuły</h1>
        </div>
      </div>
    </div>

    <div class="wave-standard left-0 transform-rotate-180 bottom-0 position-absolute w-100"
      style="background-image: url('<?php bloginfo('template_url');?>/assets/images/wave_white_down_1.svg')">
    </div>

  </section>

  <section class="py-5">
    <div class="container">
      <div class="row posts-list">
        <?php
          $posts_per_page = 6;
          $index = 0;
          $query = new WP_Query(array(
            'post_type' => 'entry',
            'post_status' => 'publish',
            'orderby' => 'publish_date',
            'posts_per_page' => $posts_per_page,
          ));

          if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
          $index++;
        ?>
          <div data-aos="fade-up" class="col-12">
            <?php include('components/card/card-entry/card-entry.php'); ?>
          </div>
          <div class="col-6 offset-lg-3">
            <hr class="" />
          </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>

      </div>
      <div class="row">
        <div class="col-12 my-5 d-flex justify-content-center">
          <button
            data-aos="fade-up" data-aos-duration="1000"
            data-posts-per-page="<?php echo $posts_per_page; ?>"
            data-posts-length="<?php echo $query->found_posts; ?>"
            class="rounded-25 btn-show-more px-4 border-0 text-decoration-none py-2 blue-color-bg text-white transition-0-3-all filter-brightness-hover-0-8"
            href="#">
            Pokaż więcej
          </button>
        </div>
      </div>
    </div>
  </section>

  <?php include('components/cookie-bar/cookie-bar.php'); ?>
  <?php include('components/footer/footer.php'); ?>
</div>

<script>
  <?php include('pages/archive-entry/archive-entryJS.js'); ?>
</script>

<?php get_footer();?>
