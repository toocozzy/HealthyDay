<?php /* Template Name: pagePrice */?>

<?php get_header();?>
<script>
  <?php include('pages/price/priceCSS.js'); ?>
</script>


<?php include('components/navigation/navigation.php'); ?>

<div class="page-price">
  <section  class="header-section gray-color-bg position-relative d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <h1 class="black-color font-archivo font-weight-bold font-size-56 text-center"><?php echo get_the_title(); ?></h1>
          <div class="font-size-20 font-weight-normal gray-color-2 mb-3">
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


  <section class="price-section">
    <?php $priceSection = get_field('pageprice')['price-section']; ?>

    <div class="container">
      <?php if($priceSection['list']): foreach ($priceSection['list'] as $index => $item) : ?>
        <div class="row mb-5">
          <div class="col-12">
            <h2 data-aos="zoom-out" class="black-color font-archivo font-weight-bold text-center font-size-40 mb-5"><?php echo $item['title']; ?></h2>
          </div>
          <?php if($item['columns']): foreach ($item['columns'] as $index => $elem) : ?>
            <div class="col-lg-4">
              <article data-aos="zoom-out" data-aos-duration="2000" class="shadow gray-color-bg mb-4">
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

  <section class="details-section">
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
  <?php include('pages/price/priceJS.js'); ?>
</script>

<?php get_footer();?>
