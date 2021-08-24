<?php /* Template Name: pageFaq */?>

<?php get_header();?>
<script>
  <?php include('pages/faq/faqCSS.js'); ?>
</script>


<?php include('components/navigation/navigation.php'); ?>

<div class="page-faq">

  <section  class="header-section gray-color-bg position-relative d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1 text-center">
          <span class="font-size-18 d-block font-homemadeapple green-color">Faq</span>
          <h1 class="black-color font-archivo font-weight-bold font-size-56 text-center m-0">
            Najczęściej zadawane pytania
          </h1>
          <div data-aos="fade-up" data-aos-duration="2000" class="font-size-20 font-weight-normal gray-color-2 mt-3 mb-3">
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


  <section class="faq-section ">
    <?php $section = get_field('pagefaq')['faq-section']; ?>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="accordion" id="faq-accordion">
            <?php if($section['list']): foreach ($section['list'] as $index => $item) : ?>
              <article class="mb-3">
                <header
                  class="btn btn-link btn-block px-4 py-3 text-left gray-color-bg text-decoration-none d-flex justify-content-between"
                  id="heading-<?php echo $index; ?>"
                  data-toggle="collapse"
                  data-target="#collapse-<?php echo $index; ?>"
                  aria-expanded="false" aria-controls="collapse-<?php echo $index; ?>">
                  <h3 class="black-color font-archivo font-weight-bold font-size-16 m-0"><?php echo $item['title'];?></h3>
                  <span class="material-icons transition-0-3-all black-color">
                    expand_more
                  </span>
                </header>

                <div
                  id="collapse-<?php echo $index; ?>"
                  class="collapse gray-color-bg"
                  aria-labelledby="heading-<?php echo $index; ?>"
                  data-parent="#faq-accordion">
                  <footer class="px-4 py-3 wysiwig-container">
                    <?php echo $item['text'];?>
                  </footer>
                </div>
              </article>
            <?php endforeach; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include('components/cookie-bar/cookie-bar.php'); ?>
  <?php include('components/footer/footer.php'); ?>
</div>
<script>
  <?php include('pages/faq/faqJS.js'); ?>
</script>

<?php get_footer();?>
