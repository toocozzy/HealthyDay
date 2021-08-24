
<?php get_header();?>
<script>
  <?php include('pages/category/categoryCSS.js'); ?>
</script>

<div class="category-page">
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>Archive entry</h1>
          <p>Selected category <?php echo get_queried_object()->name; ?></p>
        </div>
      </div>
      <div class="row posts-list">
        <?php
          $posts_per_page = 5;

          $query = new WP_Query(array(
            'post_type' => 'entry',
            'post_status' => 'publish',
            'orderby' => 'publish_date',
            'posts_per_page' => $posts_per_page,
            'category__in' => array(get_queried_object()->term_id),
          ));



          if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
        ?>
          <div class="col-3">
            <?php include('components/card/card-entry/card-entry.php'); ?>
          </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>

      </div>
      <div class="row">
        <div class="col-12 my-5">
          <button
            data-posts-per-page="<?php echo $posts_per_page; ?>"
            data-posts-length="<?php echo $query->found_posts; ?>"
            data-category-in="<?php echo get_queried_object()->term_id; ?>"
            class="btn btn-show-more btn-primary">
            Pokaż więcej
          </button>
        </div>
      </div>
    </div>
  </section>

</div>

<script>
  <?php include('pages/category/categoryJS.js'); ?>
</script>

<?php get_footer();?>
