<?php
  /* Template Name: pageDiets */
  global $post;
?>

<?php get_header();?>
<script>
  <?php include('pages/diets/dietsCSS.js'); ?>
</script>

<?php include('components/navigation/navigation.php'); ?>

<div class="page-diets">
  <section  class="header-section gray-color-bg position-relative d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1 text-center">
          <span class="font-size-18 d-block font-homemadeapple green-color">Z miłością</span>
          <h1 class="black-color font-archivo font-weight-bold font-size-56 text-center m-0">Nasze Diety</h1>
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

  <section class="diets-section">
    <?php
      $counter = 0;


      $childPages = new WP_Query( array(
       'post_type'      => 'page',
       'posts_per_page' => -1,
       'post_parent'    => $post->ID,
       'order'          => 'ASC',
       'orderby'        => 'menu_order'
       ));
    ?>
    <div class="container">
      <div class="row">
        <?php if ( $childPages->have_posts() ) : while ( $childPages->have_posts() ) : $childPages->the_post(); $counter++; ?>
          <div class="col-lg-6">
            <article class="mb-5">
              <h3 data-aos="fade-up" data-aos-delay="<?php echo ($counter % 2) === 0 ? '100' : '300'; ?>"
                class="font-archivo font-weight-bold green-color text-uppercase font-size-30 mb-3">
                <?php echo the_title();?>
              </h3>
              <?php if(has_post_thumbnail()) :?>
                <figure data-aos="fade-up" data-aos-delay="<?php echo ($counter % 2) === 0 ? '200' : '400'; ?>" class="my-3 mx-auto">
                  <img class="img-fluid" src="<?php echo the_post_thumbnail_url();?>" alt="<?php echo the_title();?>" />
                </figure>
              <?php endif; ?>
              <div data-aos="fade-up" data-aos-delay="<?php echo ($counter % 2) === 0 ? '300' : '500'; ?>" class="wysiwig-container">
                <?php echo the_excerpt();?>
              </div>
              <a
                data-aos="fade-up" data-aos-delay="<?php echo ($counter % 2) === 0 ? '500' : '700'; ?>"
                href="<?php echo get_post_permalink();?>"
                class="px-4 d-inline-flex text-decoration-none py-2 mt-4 green-color-bg text-white transition-0-3-all filter-brightness-hover-0-8">
                Więcej informacji
              </a>
            </article>
          </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>
      </div>
    </div>
  </section>
  <?php include('components/cookie-bar/cookie-bar.php'); ?>
  <?php include('components/footer/footer.php'); ?>
</div>
<script>
  <?php include('pages/diets/dietsJS.js'); ?>
</script>

<?php get_footer();?>
