<?php
  add_theme_support('post-thumbnails');
  add_post_type_support( 'page', 'excerpt' );

  function nfj_register_post_types() {
    register_post_type( 'entry',
      array(
        'labels' => array(
          'name' => __( 'Wpisy' ),
          'singular_name' => __( 'Wpis' )
        ),
        'has_archive' => true,
        'rewrite' => array('slug' => 'blog', 'with_front' => false),
        'public' => true,
        'menu_position' => 4,
        'taxonomies' => array( 'category' ),
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
      )
    );
  }

  add_action( 'init', 'nfj_register_post_types' );


  function nfj_load_posts() {
    check_ajax_referer('load_more_posts', 'security');

    $args = array(
      'post_status' => 'publish',
      'orderby' => 'publish_date',
      'post_type' => 'entry',
      'posts_per_page' => $_POST['posts_per_page'],
    );


    if($_POST['category_id']) {
      $args[] = (object) ['category__in' => array($_POST['category_id'])];
    }

    $query = new WP_Query($args);

    $total = $query->found_posts;
    $index = 0;
    if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <?php $index++; ?>
      <div class="col-12">
        <?php include('components/card/' . $_POST['post_template'] . '/' . $_POST['post_template'] . '.php'); ?>
      </div>
    <?php endwhile; endif; wp_die();
  }

  add_action('wp_ajax_load_posts_by_ajax', 'nfj_load_posts');
  add_action('wp_ajax_nopriv_load_posts_by_ajax', 'nfj_load_posts');

  function remove_menu () {
     remove_menu_page('edit.php');
  }
  add_action('admin_menu', 'remove_menu');

  add_theme_support( 'post-thumbnails', array( 'post', 'entry' ) );
?>
