<?php /* Template Name: pageContact */?>

<?php get_header();?>
<script>
  <?php include('pages/contact/contactCSS.js'); ?>
</script>


<?php include('components/navigation/navigation.php'); ?>

<div class="page-contact">
  <section  class="header-section gray-color-bg position-relative d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1 text-center">
          <span class="font-size-18 d-block font-homemadeapple green-color">Nasz kontakt</span>
          <h1 class="black-color font-archivo font-weight-bold font-size-56 text-center m-0">
            Skontaktuj się z nami
          </h1>
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

  <section class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <aside>
            <div data-aos="zoom-out" data-aos-duration="750">
              <h3 class="black-color d-flex align-items-center font-archivo font-weight-bold font-size-20">BIURO OBSŁUGI KLIENTA :</h3>
              <p class="font-size-16 d-flex font-weight-normal d-flex justify-content-between gray-color-2 mb-0">
                pn - pt:&nbsp;<span class="font-weight-bold"> 8:00 - 16:00</span>
              </p>
              <p class="font-size-16 d-flex font-weight-normal d-flex justify-content-between gray-color-2 m-0">
                sb:&nbsp;<span class="font-weight-bold"> 10:00 - 14:00</span>
              </p>
              <p class="font-size-16 d-flex font-weight-normal d-flex justify-content-between gray-color-2 m-0">
                e-mail:&nbsp;<a href="mailto:kontakt@healthy-day.pl" class="font-weight-bold font-size-16 green-color"> kontakt@healthy-day.pl</a>
              </p>

              <p class="font-size-16 d-flex font-weight-normal d-flex justify-content-between gray-color-2 mb-2">
                Telefon:&nbsp;<a href="tel:+48537384709" class="font-weight-bold font-size-16 green-color"> +48 537 384 709</a>
              </p>

              <footer class="d-flex mb-4">
                <a
                  style="width: 30px; height: 30px;"
                  target="_BLANK"
                  href="https://www.facebook.com/pages/Healthy-Day-catering-dietetyczny/273653596104673?fref=ts"
                  class="px-3 py-3 mr-3 gray-color-2-bg d-flex align-items-center cursor-pointer rounded-circle justify-content-center">
                  <img src="<?php bloginfo('template_url');?>/assets/images/facebook.svg" alt="facebook logo"/>
                </a>
                <a
                  style="width: 30px; height: 30px;"
                  target="_BLANK"
                  href="https://www.instagram.com/healthyday_cateringdietetyczny/"
                  class="px-3 py-3 gray-color-2-bg d-flex align-items-center cursor-pointer rounded-circle justify-content-center">
                  <img src="<?php bloginfo('template_url');?>/assets/images/instagram.svg" alt="instagram logo"/>
                </a>
              </footer>
            </div>

            <div data-aos="zoom-out" data-aos-duration="750">
              <h3 class="black-color d-flex align-items-center font-archivo font-weight-bold font-size-20">BIURO OBSŁUGI ZAMÓWIEŃ :</h3>
              <p class="font-size-16 font-weight-normal gray-color-2">
                (informacje dotyczące aktywnych, nieaktywnych zamówień, terminów dostaw,zmiany godzin lub adresów)
              </p>

              <p class="font-size-16 d-flex font-weight-normal d-flex justify-content-between gray-color-2 mb-0">
                pn - pt:&nbsp;<span class="font-weight-bold"> 10.00 – 18.00</span>
              </p>
              <p class="font-size-16 d-flex font-weight-normal d-flex justify-content-between gray-color-2 m-0">
                e-mail:&nbsp;<a href="mailto:kontakt@healthy-day.pl" class="font-weight-bold font-size-16 green-color"> kontakt@healthy-day.pl</a>
              </p>

              <p class="font-size-16 d-flex font-weight-normal d-flex justify-content-between gray-color-2 mb-2">
                Telefon:&nbsp;<a href="tel:+48730822819" class="font-weight-bold font-size-16 green-color"> +48 730 822 819</a>
              </p>
            </div>

            <div data-aos="zoom-out" data-aos-duration="750">
              <h3 class="black-color d-flex align-items-center font-archivo font-weight-bold font-size-20">DIETETYK :</h3>
              <p class="font-size-16 font-weight-normal gray-color-2">
                (konsultacje dietetyczne, modyfikacje diet, wykluczenia, preferencje)
              </p>

              <p class="font-size-16 d-flex font-weight-normal d-flex justify-content-between gray-color-2 mb-0">
                pn - pt:&nbsp;<span class="font-weight-bold"> 8.00 – 16.00</span>
              </p>
              <p class="font-size-16 d-flex font-weight-normal d-flex justify-content-between gray-color-2 m-0">
                e-mail:&nbsp;<a href="mailto:dietetyk@healthy-day.pl" class="font-weight-bold font-size-16 green-color"> dietetyk@healthy-day.pl</a>
              </p>

              <p class="font-size-16 d-flex font-weight-normal d-flex justify-content-between gray-color-2 mb-2">
                Telefon:&nbsp;<a href="tel:+48515075957" class="font-weight-bold font-size-16 green-color"> +48 515 075 957</a>
              </p>
            </div>

            <div data-aos="zoom-out" data-aos-duration="750">
              <h3 class="black-color d-flex align-items-center font-archivo font-weight-bold font-size-20">KORDYNATOR DOSTAW :</h3>
              <p class="font-size-16 font-weight-normal gray-color-2">
                (uwagi, pytania w trakcie dostaw)
              </p>

              <p class="font-size-16 d-flex font-weight-normal d-flex justify-content-between gray-color-2 mb-0">
                pn - pt:&nbsp;<span class="font-weight-bold"> 4.00 – 10.00</span>
              </p>
              <p class="font-size-16 d-flex font-weight-normal d-flex justify-content-between gray-color-2 m-0">
                e-mail:&nbsp;<a href="mailto:kordynatordostaw@healthy-day.pl" class="font-weight-bold font-size-16 green-color"> kordynatordostaw@healthy-day.pl</a>
              </p>

              <p class="font-size-16 d-flex font-weight-normal d-flex justify-content-between gray-color-2 mb-2">
                Telefon:&nbsp;<a href="tel:+48535256261" class="font-weight-bold font-size-16 green-color"> +48 535 256 261</a>
              </p>
            </div>

          </aside>
        </div>
        <div class="col-lg-5 offset-lg-1 mt-4 mt-lg-0">
          <?php echo do_shortcode( '[contact-form-7 id="53" title="Contact form 1"]' ); ?>
        </div>
      </div>
  </section>
  <?php include('components/cookie-bar/cookie-bar.php'); ?>
  <?php include('components/footer/footer.php'); ?>
</div>
<script>
  <?php include('pages/contact/contactJS.js'); ?>
</script>

<?php get_footer();?>
