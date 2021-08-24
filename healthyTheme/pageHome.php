<?php /* Template Name: pageHome */?>

<?php get_header();?>
<script>
  <?php include('pages/home/homeCSS.js'); ?>
</script>

<?php include('components/navigation/navigation.php'); ?>

<div class="home-page">
  <section
    class="header-section overflow-hidden background-size-cover position-relative gray-color-bg d-flex align-items-center">

    <span
      data-aos="fade-up"
      data-aos-duration="800"
      class="background-size-cover position-absolute bottom-0 left-0 w-100 h-100"
      style="background-image: url('<?php bloginfo('template_url');?>/assets/images/bg-1.jpg')"></span>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <h1 data-aos="flip-left" class="font-size-56 font-weight-bold font-archivo green-color text-uppercase">
             Healthy-Day
          </h1>
          <p data-aos="flip-left" class="font-weight-bold font-archivo black-color font-size-30">Catering Dietetyczny</p>
          <p data-aos-duration="800" data-aos="fade" class="text-uppercase gray-color-2 font-size-18 mt-4 mb-5">
            Trójmiasto | Warszawa | Bydgoszcz | Łódź | Toruń
          </p>

          <a
            href="http://zamow.healthy-day.pl/"
            class="rounded-25 btn-show-more px-5 mt-4 border-0 text-decoration-none py-3 blue-color-bg text-white transition-0-3-all
            filter-brightness-hover-0-8">
            Zamów Teraz!
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="values-section position-relative">
    <div
      class="wave-standard transform-rotate-180 left-0 bottom-100 position-absolute w-100"
      style="background-image: url('<?php bloginfo('template_url');?>/assets/images/wave_white_down_1.svg')">
    </div>

    <div class="container">
      <div class="row d-flex">
        <div class="col-12">
          <h2 data-aos="fade-up" class="black-color font-archivo font-weight-bold font-size-40 text-center mb-5">Nasze <span
          class="green-color">wartości</span></h2>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
          <article data-aos="fade-up" data-aos-duration="500" class="shadow px-3 py-4 d-flex flex-column align-items-center text-center h-100">
            <figure class="d-flex align-items-center green-color-bg rounded-circle">
              <span class="material-icons text-white p-3">
                settings
              </span>
            </figure>
            <h3 class="black-color font-archivo font-weight-bold font-size-24 text-center mb-4">Rzetelność</h3>
            <p class="font-size-16 font-weight-normal gray-color-2">
              Posiłki wykonujemy z codziennie dostarczanych świeżych produktów od regionalnych dostawców. Diety oparte są o najlepszej jakości nieprzetworzone, naturalne produkty.
            </p>
          </article>
        </div>

        <div class="col-lg-4 mb-4 mb-lg-0">
          <article data-aos="fade-up" data-aos-duration="750" class="shadow px-3 py-4 d-flex flex-column align-items-center text-center h-100">
            <figure class="d-flex align-items-center green-color-bg rounded-circle">
              <span class="material-icons text-white p-3">
                favorite
              </span>
            </figure>
            <h3 class="black-color font-archivo font-weight-bold font-size-24 text-center mb-4">Jakość</h3>
            <p class="font-size-16 font-weight-normal gray-color-2">
              Nasze diety w Healthy Day są dopasowane pod kątem Twoich preferencji, stanu zdrowia, smaków, trybu funkcjonowania, pracy, aktywności fizycznej, indywidualnych przyzwyczajeń.
            </p>
          </article>
        </div>

        <div class="col-lg-4 mb-0">
          <article data-aos="fade-up" data-aos-duration="1000" class="shadow px-3 py-4 d-flex flex-column align-items-center text-center h-100">
            <figure class="d-flex align-items-center green-color-bg rounded-circle">
              <span class="material-icons text-white p-3">
                shopping_bag
              </span>
            </figure>
            <h3 class="black-color font-archivo font-weight-bold font-size-24 text-center mb-4">Dla Ciebie</h3>
            <p class="font-size-16 font-weight-normal gray-color-2">
              Tylko u nas przez cały okres trwania diety możesz dokonywać zmian w diecie w zależności od potrzeb, kontaktując się z naszym Biurem Obsługi Klineta lub naszymi dietetykami. A zamówienie złożysz online!
            </p>
          </article>
        </div>

      </div>
    </div>
    <div
      class="wave-standard left-0 top-100 position-absolute w-100"
      style="background-image: url('<?php bloginfo('template_url');?>/assets/images/wave_white_down_1.svg')">
    </div>
  </section>

  <section class="menu-section position-relative d-flex align-items-center">
    <span
      class="position-absolute background-size-cover z-index-decrement-1 left-0 top-0 green-color-bg poor w-100 w-lg-50 h-100"
      style="background-image: url('<?php bloginfo('template_url');?>/assets/images/poor-transparent.png')" >
    </span>
    <span
      class="position-absolute background-size-cover z-index-decrement-1 d-none d-lg-block w-50 h-100 right-0 top-0"
      style="background-image: url('<?php bloginfo('template_url');?>/assets/images/bg-6.jpg')" >
    </span>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <article class="pr-lg-5 py-lg-5 mr-lg-4">
            <span class="font-size-18 d-block font-homemadeapple text-white mb-2">Our menu</span>
            <h2
              data-aos="fade-up"
              class="text-white font-archivo font-weight-bold font-size-40 ">
              <span class="orange-color">Dieta</span> dostosowana do Twoich potrzeb!
            </h2>
            <p data-aos="fade-up" data-aos-duration="500" class="light-green-color font-size-20">
              Healthy Day to propozycja 18 diet, dostępnych w 12 wariantach kalorycznych. U nas zaoferujemy Ci każdy rodzaj diety w wybranej przez Ciebie ilości posiłków 5 lub 4. Dodatkowo możesz uwzględnić swoje preferencje żywienione!
            </p>
            <a
              data-aos="fade-up"
              data-aos-duration="1000"
              href="<?php echo get_site_url(); ?>/diety/"
              class="rounded-25 d-inline-block border border-light px-5 py-3 mt-4 text-decoration-none text-white transition-0-3-all
              filter-brightness-hover-0-8">
              Diety
            </a>
          </article>
        </div>

      </div>
    </div>
  </section>

  <section class="steps-section position-relative">
    <div
      class="wave-standard transform-rotate-180 left-0 bottom-100 position-absolute w-100"
      style="background-image: url('<?php bloginfo('template_url');?>/assets/images/wave_white_down_1.svg')">
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-5 d-flex align-items-center">
          <figure data-aos="fade-up" class="m-0 shadow-default">
            <img class="w-100" src="<?php bloginfo('template_url');?>/assets/images/bg-3.jpg" />
          </figure>
        </div>

        <div class="col-lg-6 offset-lg-1">
          <article class="pt-5">
            <span class="font-size-18 d-block font-homemadeapple green-color">Nasze korki</span>

            <h2 data-aos="fade-up" class="black-color font-archivo font-weight-bold font-size-40 ">
              nasze <span class="green-color">kroki</span>
            </h2>

            <p data-aos="fade-up" data-aos-duration="500" class="font-size-20 font-weight-normal gray-color-2">
              Każdego dnia dietetycy i kucharze czuwają nad przygotowaniem każdej diety indywidualnie. Dostosowujemy się do Twoich potrzeb pod kątem diety, preferencji, transportu a kontakt z nami nigdy nie jest problematyczny.
            </p>

            <ul class="mt-4">
              <li data-aos="fade-up" data-aos-duration="600" class="black-color d-flex flex-wrap font-archivo font-weight-bold font-size-16 mb-2">
                <span class="material-icons mr-3 red-color">
                  book
                </span>
                Zamawiasz swoją dietę online
              </li>
              <li data-aos="fade-up" data-aos-duration="800" class="black-color d-flex flex-wrap font-archivo font-weight-bold font-size-16 mb-2">
                <span class="material-icons mr-3 red-color">
                  bolt
                </span>
                Wybierasz swoje preferencje i wykluczenia
              </li>
              <li data-aos="fade-up" data-aos-duration="1000" class="black-color d-flex flex-wrap font-archivo font-weight-bold font-size-16 mb-2">
                <span class="material-icons mr-3 red-color">
                  restaurant
                </span>
                My gotujemy i dowozimy w dogodnej porze
              </li>
              <li data-aos="fade-up" data-aos-duration="1200" class="black-color d-flex flex-wrap font-archivo font-weight-bold font-size-16 mb-2">
                <span class="material-icons mr-3 red-color">
                  favorite
                </span>
                Oszczędzasz czas i masz spokój ducha
              </li>
            </ul>
          </article>
        </div>
      </div>
    </div>

    <div
      class="wave-standard left-0 top-100 position-absolute w-100"
      style="background-image: url('<?php bloginfo('template_url');?>/assets/images/wave_white_down_1.svg')">
    </div>
  </section>

  <section class="contact-section  position-relative">
    <span
      class="position-absolute background-size-cover z-index-decrement-1 right-0 top-0 orange-color-bg poor w-100 w-lg-50 h-100"
      style="background-image: url('<?php bloginfo('template_url');?>/assets/images/poor-transparent.png')" >
    </span>

    <span
      class="position-absolute background-size-cover z-index-decrement-1 d-none d-lg-block w-50 h-100 left-0 top-0"
      style="background-image: url('<?php bloginfo('template_url');?>/assets/images/bg-7.jpg')" >
    </span>

    <div class="container">
      <div class="row">
        <div class="col-lg-5 offset-lg-7">
          <article>
            <span class="font-size-18 d-block font-homemadeapple text-white mb-2">Our menu</span>
            <h2 data-aos="fade-up" class="text-white font-archivo font-weight-bold font-size-40 ">
              Twoje zdrowie to dla nas podstawa!
            </h2>
            <p data-aos-duration="500" class="light-green-color font-size-20">
              W Healthy-Day wiemy jak ważne dla dobrego samopoczucia jest odpowiednie żywienie. Dlatego dla Twojego zdrowia udostępniamy wsparcie dietetyka, który przeprowadzi szczegółowy wywiad żywieniony.
            </p>
            <a
              data-aos="fade-up"
              data-aos-duration="1000"
              href="<?php echo get_site_url(); ?>/wywiad-zywieniowy/"
              class="rounded-25 d-inline-block border border-light px-5 py-3 mt-4 text-decoration-none text-white transition-0-3-all filter-brightness-hover-0-8">
              Wywiad żywieniowy
            </a>
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonial-section bg-white position-realtive" >
  <div
      class="wave-standard left-0 transform-rotate-180 bottom-100 position-absolute w-100"
      style="background-image: url('<?php bloginfo('template_url');?>/assets/images/wave_white_down_1.svg')">
  </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center mb-5">
          <span class="font-size-18 d-block font-homemadeapple green-color">Oceń nas</span>
          <h2 data-aos="fade-up" class="black-color font-archivo font-weight-bold font-size-40 ">
            Opinie <span class="orange-color">nasz</span>ych klientów
          </h2>
        </div>
      </div>
      <div class="row d-flex">
        <div class="col-lg-3 col-md-6 col-12">
          <article
            data-aos="fade-up"
            class="text-center mb-4 mb-lg-0 px-3 bg-white pb-3 pt-3 shadow h-100">
            
            <h3 class="my-2 font-size-20 font-weight-bold black-color">Joanna </h3>
            <p class="font-size-16 font-italic font-weight-normal gray-color-2 mb-2">
            5 gwiazdek to za mało 🙂 Bardzo dobry, miły i rzetelny kontakt. Przejrzysta strona, możliwość dokonywania wykluczeń z diety, co w przypadku alergików jest kwestią newralgiczną. Zawsze punktualna dostawa. Jedzenie bardzo smaczne, świetne jakościowo i świeże. Szczerze polecam 🙂
            </p>

            <span class="material-icons green-color font-size-30">
              format_quote
            </span>
          </article>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <article
            data-aos="fade-up"
            data-aos-duration="500"
            class="text-center mb-4 mb-lg-0 px-3 bg-white pb-3 pt-3 shadow h-100">
            
            <h3 class="my-2 font-size-20 font-weight-bold black-color">Piotr</h3>
            <p class="font-size-16 font-italic font-weight-normal gray-color-2 mb-2">
              Przez ponad 2 lata korzystałem z diety pudełkowej od healthy day i był to czas, w którym nie martwielm się ani o kaloryke, ani o smak i świeżość posiłków, ani o punktualność dostaw. Także mogę polecić z czystym sumieniem
            </p>

            <span class="material-icons green-color font-size-30">
              format_quote
            </span>
          </article>
        </div>

        <div class="col-lg-3 col-md-6 col-12">
          <article
            data-aos="fade-up"
            data-aos-duration="750"
            class="text-center mb-4 mb-lg-0 px-3 bg-white pb-3 pt-3 shadow h-100">
            
            <h3 class="my-2 font-size-20 font-weight-bold black-color">Agata</h3>
            <p class="font-size-16 font-italic font-weight-normal gray-color-2 mb-2">
              Polecam szczególnie, jeśli jesteś na diecie eliminującej niektóre produkty. Można wykluczyć dowolną ilość składników i mieć pewność, ze wege posiłki będą smaczne, zdrowe, a do tego ciekawe.
            </p>

            <span class="material-icons green-color font-size-30">
              format_quote
            </span>
          </article>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <article
            data-aos="fade-up"
            data-aos-duration="1000"
            class="text-center mb-4 mb-lg-0 px-3 bg-white pb-3 pt-3 shadow h-100">
            
            <h3 class="my-2 font-size-20 font-weight-bold black-color">Adam</h3>
            <p class="font-size-16 font-italic font-weight-normal gray-color-2 mb-2">
              Zróżnicowana dieta, indywidualne podejście do klienta, pyszne posiłki, miła obsługa. Zawsze na czas, zawsze pysznie i świeżo. ❤
            </p>

            <span class="material-icons green-color font-size-30">
              format_quote
            </span>
          </article>
        </div>

      </div>
    </div>
  </section>

  <?php include('components/footer/footer.php'); ?>
  <?php include('components/cookie-bar/cookie-bar.php'); ?>
  <?php include('components/modal-info/modal-info.php'); ?>
</div>

<script>
  <?php include('pages/home/homeJS.js'); ?>
</script>

<?php get_footer();?>
