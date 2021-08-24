
<?php get_header();?>

<?php
  global $post;
?>

<script>
  <?php include('pages/single-entry/single-entryCSS.js'); ?>
</script>

<?php include('components/navigation/navigation.php'); ?>

<div class="single-entry">
  <section class="header-section position-relative gray-color-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <header class="mb-3">
            <h1 class="black-color font-archivo font-size-40 font-weight-bold"><?php echo get_the_title(); ?></h1>
            <date class="font-size-16 light-green-color-bg green-color font-jost px-2 py-1 font-weight-bold my-2">
              <?php echo get_the_date( 'd-m-Y' ); ?>
            </date>
            
          </header>

          <footer>
            <?php
              global $post;
              $categories = get_the_category($post->ID);

              if($categories) : foreach($categories as $elem) :
            ?>
              <span class="border border-secondary badge px-2 py-1 font-size-14 font-jost ">
                <?php echo $elem->name; ?>
              </span>
            <?php endforeach; endif; ?>
          </footer>

        </div>
      </div>
    </div>
    
    <div class="wave-standard left-0 transform-rotate-180 bottom-0 position-absolute w-100"
      style="background-image: url('<?php bloginfo('template_url');?>/assets/images/wave_white_down_1.svg')">
    </div>
  
  </section>

  <section class="content-section">
    <div class="container">
      <div class="row">

        <div class="col-lg-10 offset-lg-1">
          <figure class="featured-image mt-4" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></figure>

          <article tabindex="0" class="wysiwig-container border-top py-4">
           <?php echo get_post_field('post_content', $post->ID); ?>
          </article>
        </div>
      </div>
    </div>
  </section>
 <?php include('components/cookie-bar/cookie-bar.php'); ?>
 <?php include('components/footer/footer.php'); ?>
</div>

<script>
  <?php include('pages/single-entry/single-entryJS.js'); ?>
</script>

<?php get_footer();?>
