<?php /* Template Name: pageCost */?>

<?php get_header();?>
<script>
  <?php include('pages/cost/costCSS.js'); ?>
</script>

<?php include('components/navigation/navigation.php'); ?>



<div class="page-cost">
  <section class="header-section gray-color-bg position-relative d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <h1 data-aos="fade-up" class="black-color font-archivo font-weight-bold font-size-56 text-center"><?php echo get_the_title(); ?></h1>
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
  <?php
    $page_id = get_queried_object_id();
    $pages = get_pages(array(
      'meta_key' => 'pagePrice',
      'child_of' => $page_id
    ));
  ?>
  <?php if($pages) : foreach($pages as $key => $page) : ?>
    <section class="price-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3 my-5">
            <h2 data-aos="fade-up" class="black-color font-archivo font-weight-bold font-size-40 text-center text-capitalize"><?php echo $page->post_title; ?></h2>
            <div data-aos="fade-up" data-aos-duration="2000" class="font-size-16 font-weight-normal text-center gray-color-2 mb-3">
              <?php echo $page->post_content; ?>
            </div>
          </div>
        </div>
      </div>

      <?php $priceSection = get_field('pageprice', $page->ID)['price-section']; ?>

      <div class="container">
        <?php if($priceSection['list']): foreach ($priceSection['list'] as $index => $item) : ?>
          <div class="row mb-5 mb-lg-0">
            <div class="col-12">
              <h3 data-aos="fade-up" class="black-color font-archivo font-weight-bold font-size-26 mb-3">
                <?php echo $item['title']; ?>
              </h3>
            </div>
            <?php if($item['columns']): foreach ($item['columns'] as $index => $elem) : ?>
              <div class="col-lg-4">
                <article data-aos="fade-up" data-aos-duration="2000" class="shadow gray-color-bg mb-4">
                  <header class="border-bottom p-3">
                    <h3 class="black-color font-archivo text-center font-weight-bold m-0 font-size-24">
                      <?php echo $elem['title']; ?>
                    </h3>
                  </header>
                  <?php if($elem['details']): foreach ($elem['details'] as $index => $detail) : ?>
                    <div class="border-bottom py-2 px-3">
                      <p class="font-size-30 font-weight-light gray-color-2 mb-1">
                        <?php echo $detail['kcal']; ?>
                        <span class="font-size-14 font-archivo">kcal</span>
                      </p>
                      <h4 class="font-size-40 font-archivo black-color font-weight-bold">
                        <?php echo $detail['price']; ?>
                        <span class="font-size-14 font-archivo">PLN</span>
                      </h4>
                    </div>
                  <?php endforeach; endif; ?>
                </article>
              </div>
            <?php endforeach; endif; ?>
          </div>
        <?php endforeach; endif; ?>
      </div>
    </section>
  <?php endforeach; endif; ?>


  <section class="details-section gray-color-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="font-size-14 gray-color-2">zestaw próbny 50 zł</p>
          <h3 class="font-size-20 black-color font-weight-bold font-archivo text-uppercase">uwaga! Oferta dla firm!!!</h3>
          <p class="font-size-14 gray-color-2">* przy dostawie min. 5 zestawów na jeden adres -15% </p>
          <p class="font-size-14 gray-color-2 mb-4">* przy dostawie min. 10 zestawów na jeden adres -20%</p>
          <p class="font-size-14 gray-color-2">Poleć Healthy Day swojemu znajomemu i dostań dzień GRATIS!! </p>
          <p class="font-size-14 gray-color-2">(promocja ważna przy umowie poleconej osoby na okres min. 2 tygodni)</p>
        </div>
      </div>
    </div>
  </section>
  <?php include('components/cookie-bar/cookie-bar.php'); ?>
  <?php include('components/footer/footer.php'); ?>
</div>
<script>
  <?php include('pages/cost/costJS.js'); ?>
</script>

<?php get_footer();?>
