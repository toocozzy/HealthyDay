<?php /* Template Name: pageAbout */?>

<?php get_header();?>
<script>
  <?php include('pages/about/aboutCSS.js'); ?>
</script>


<?php include('components/navigation/navigation.php'); ?>

<div class="page-about">
  <section  class="header-section gray-color-bg position-relative d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1 text-center">
          <span class="font-size-18 d-block font-homemadeapple green-color">Nasza misja, pasja oraz cele</span>
          <h1 class="black-color font-archivo font-weight-bold font-size-56 text-center m-0">O nas</h1>
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

  <section class="story-section bg-white py-5">
    <div class="container">
      <div class="row mb-5 overflow-hidden">
        <div class="col-lg-5">
          <article>
            <h2 data-aos="zoom-out" data-aos-duration="500" class="black-color font-archivo font-weight-bold font-size-30 mb-4">
              Nasza <span class="green-color">misja</span>
            </h2>

            <p data-aos="zoom-out" data-aos-duration="750" class="font-size-18 font-weight-normal gray-color-2">
              Staramy się, aby każda dieta z Healthy Day była dla Państwa przyjemnością i miłą codziennością. W naszym cateringu  istnieje
              możliwość wprowadzania wykluczeń na poszczególne produkty oraz własnych preferencji. Nie lubisz słodkich śniadań? ,
              raz dziennie lubisz pić smoothie ?, sałatki to posiłek z którym się nigdy nie zaprzyjaźnisz ? w Healthy Day to nie
              problem ! W zakładce "zamów dietę" krok po kroku możesz uzupełnić swój profil i swoje wykluczenia oraz preferencje.
            </p>
            <a
              data-aos="zoom-out"
              data-aos-duration="1000"
              href="http://zamow.healthy-day.pl/"
              class="rounded-25 btn-show-more px-5 mt-4 d-inline-block border-0 text-decoration-none py-3 blue-color-bg text-white transition-0-3-all
              filter-brightness-hover-0-8">
              Zamów Teraz!
            </a>
          </article>
        </div>
        <div class="col-lg-6 offset-lg-1 d-none d-lg-flex align-items-center">
          <img class="w-100" data-aos="fade-in" src="<?php bloginfo('template_url');?>/assets/images/bg-2.jpg" />
        </div>
      </div>


      <div class="row mb-5 overflow-hidden">
        <div class="col-lg-6 d-none d-lg-flex align-items-center">
          <img class="w-100" data-aos="fade-in" src="<?php bloginfo('template_url');?>/assets/images/bg-3.jpg" />
        </div>

        <div class="col-lg-5 offset-lg-1">
          <article>
            <h2 data-aos="zoom-out" data-aos-duration="500" class="black-color font-archivo font-weight-bold font-size-30 mb-4">
              Nasza <span class="orange-color">pasja</span>
            </h2>

            <p data-aos="zoom-out" data-aos-duration="750" class="font-size-18 font-weight-normal gray-color-2">
              Nasze diety w Healthy Day są dopasowane pod kątem Twoich preferencji, stanu zdrowia, smaków, trybu funkcjonowania,
              pracy, aktywności fizycznej, indywidualnych przyzwyczajeń. Healthy Day to propozycja 18 diet , które możesz sprawdzić
              w zakładce "diety oferta" . Diety są dostępne w 12 wariantach kalorycznych. U nas zaoferujemy Ci każdy rodzaj diety w
              wybranej przez Ciebie ilości posiłków 5 lub 4 .
            </p>
            <a
              data-aos="zoom-out"
              data-aos-duration="1000"
              href="<?php echo get_site_url(); ?>/diety"
              class="rounded-25 btn-show-more px-5 mt-4 d-inline-block border-0 text-decoration-none py-3 green-color-bg text-white transition-0-3-all
              filter-brightness-hover-0-8">
              Zobacz diety
            </a>
          </article>
        </div>
      </div>

      <div class="row mb-5 overflow-hidden">
        <div class="col-lg-5">
          <article>
            <h2 data-aos="zoom-out" data-aos-duration="500" class="black-color font-archivo font-weight-bold font-size-30 mb-4">
              Nasze <span class="green-color">cele</span>
            </h2>

            <p data-aos="zoom-out" data-aos-duration="750" class="font-size-18 font-weight-normal gray-color-2">
              Posiłki wykonujemy z codziennie dostarczanych świeżych produktów od regionalnych dostawców.
              Diety oparte są o najlepszej jakości nieprzetworzone, naturalne produkty.
              Posiłki są pakowane w hermetyczne opakowania idealnie nadające się do przemieszczania oraz podgrzewania. U nas masz możliwość
              wyboru opakowań ekologicznych które są w 100 % kompostowalne i są wyprodukowane w 100% z towarzyw naturalnych.
            </p>
            <a
              data-aos="zoom-out"
              data-aos-duration="1000"
              href="<?php echo get_site_url(); ?>/galeria"
              class="rounded-25 btn-show-more px-5 mt-4 d-inline-block border-0 text-decoration-none py-3 blue-color-bg text-white transition-0-3-all
              filter-brightness-hover-0-8">
              Galeria
            </a>
          </article>
        </div>
        <div class="col-lg-6 offset-lg-1 d-none d-lg-flex align-items-center">
          <img class="w-100" data-aos="fade-in" src="<?php bloginfo('template_url');?>/assets/images/bg-4.jpg" />
        </div>
      </div>

      <div class="row mb-5 overflow-hidden">
        <div class="col-lg-6 d-none d-lg-flex align-items-center">
          <img class="w-100" data-aos="fade-in" src="<?php bloginfo('template_url');?>/assets/images/bg-5.jpg" />
        </div>
        <div class="col-lg-5 offset-lg-1 d-flex align-items-center">
          <article>
            <h2 data-aos="zoom-out" data-aos-duration="500" class="black-color font-archivo font-weight-bold font-size-30 mb-4">
              Dla <span class="orange-color">Ciebie</span>
            </h2>

            <p data-aos="zoom-out" data-aos-duration="750" class="font-size-18 font-weight-normal gray-color-2">
              Tylko u nas przez cały okres trwania diety możesz dokonywać zmian w diecie w zależności od potrzeb, kontaktując się z naszym
              Biurem Obsługi Klineta lub naszymi dietetykami. Idą na wprost oczekiwaniom klientom z łatwością znajdziecie i nawiążecie
              z nami kontakt na naszych social mediach :
              <a class="green-color" href="https://www.instagram.com/healthyday_cateringdietetyczny/">instagram</a>
              oraz
              <a class="green-color" href="https://www.facebook.com/pages/Healthy-Day-catering-dietetyczny/273653596104673?fref=ts">facebook</a>
              Zatrudniamy najlepszych kucharzy, którzy gotują, pieką i przyrządzają potrawy dietetyczne nadając im przepyszną zdrową formę. Nasza
              ekipa składa się od kilku lat ze stałej ekipy, co rok poszerzając się o głowy pełne pomysłów. Każdego dnia dietetycy i kucharze czuwają
               nad przygotowaniem każdej diety indywidualnie. Dostosowujemy się do Twoich potrzeb pod kątem diety, preferencji, transportu a kontakt z nami nigdy nie jest problematyczny.
            </p>
            <a
              data-aos="zoom-out"
              data-aos-duration="1000"
              href="<?php echo get_site_url(); ?>/kontakt"
              class="rounded-25 btn-show-more px-5 mt-4 d-inline-block border-0 text-decoration-none py-3 green-color-bg text-white transition-0-3-all
              filter-brightness-hover-0-8">
              Kontakt
            </a>
          </article>
        </div>
      </div>
    </div>
  </section>

  <?php include('components/cookie-bar/cookie-bar.php'); ?>
  <?php include('components/footer/footer.php'); ?>
</div>
<script>
  <?php include('pages/about/aboutJS.js'); ?>
</script>

<?php get_footer();?>
