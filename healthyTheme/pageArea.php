<?php /* Template Name: pageArea */?>

<?php get_header();?>
<script>
  <?php include('pages/area/areaCSS.js'); ?>
</script>


<?php include('components/navigation/navigation.php'); ?>

<div class="page-area">
  <section  class="header-section gray-color-bg position-relative d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1 text-center">
          <span class="font-size-18 d-block font-homemadeapple green-color">Nasze dostawy</span>
          <h1 class="black-color font-archivo font-weight-bold font-size-56 text-center m-0">Gdzie dowozimy?</h1>
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

  <section  class="area-info-section position-relative d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div data-aos="zoom-out" data-aos-duration="750" class="col-lg-10 offset-lg-1 mt-5 text-center">
          <p class="font-size-16 font-weight-normal gray-color-2 mb-2">Obsługujemy</p>
          <p class="font-size-20 font-weight-bold text-dark text-uppercase mb-2">Trójmiasto | Warszawa | Bydgoszcz | Łódź | Toruń</p>
          <p class="font-size-20 font-weight-bold text-dark text-uppercase mb-2"><span class="text-lowercase">oraz</span> okoliczne miasta</p>
          <p class="font-size-16 font-weight-normal gray-color-2 mb-2">Wpisz nazwę swojego miasta aby zweryfikować możliwość dostawy</p>
        </div>
      </div>
    </div>
  </section>

  <section class="form-section py-5 position-relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <form class="delivery-form">
            <div class="input-group mb-3 position-relative">
              <input
                type="text"
                class="form-control input-cities"
                placeholder="Wpisz nazwę miasta"
                aria-label="Wybierz miasto">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Sprawdź</button>
              </div>
            </div>
            <span class="response font-size-16 font-weight-bold mb-0"></span>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="rules-section gray-color-bg position-relative d-flex align-items-center">
    <div class="wave-standard left-0 top-0 position-absolute w-100"
      style="background-image: url('<?php bloginfo('template_url');?>/assets/images/wave_white_down_1.svg')">
    </div> 
    <div class="container">
      <div class="row">
        <div class="col-lg-12 ">
          <h3 data-aos="zoom-out" data-aos-duration="750" class="black-color d-flex align-items-center font-archivo font-weight-bold mb-4 font-size-30">Zasady dostaw :</h3>

          <ul class="ml-4">
            <li data-aos="zoom-out" data-aos-duration="750" class="font-size-16 font-weight-normal gray-color-2 mb-2">
              Dostawy odbywają się w godzinach 5.00-9:00  (TRÓJMIASTO i okolice) oraz w godzinach 2:00-9:00 (WARSZAWA i okolice) (Toruń i okolice) (Bydgoszcz i okolice).
            </li>
            <li data-aos="zoom-out" data-aos-duration="750" class="font-size-16 font-weight-normal gray-color-2 mb-2">
              Transport na terenie Trójmiasta, Warszawy i okolic, Torunia i okolic, Bydgoszczy i okolic jest DARMOWY.
            </li>
            <li data-aos="zoom-out" data-aos-duration="750" class="font-size-16 font-weight-normal gray-color-2 mb-2">
              Catering można wybrać w opcji tygodniowej ( od poniedziałku do piątku) lub w opcji z weekendami.
            </li>
            <li data-aos="zoom-out" data-aos-duration="750" class="font-size-16 font-weight-normal gray-color-2 mb-2">
              Dostawa odbywa się od poniedziałku do soboty ( * dla osób z opcją weekendową w sobotę dostarczane będą dwa zestawy – na sobotę oraz niedzielę).
            </li>
            <li data-aos="zoom-out" data-aos-duration="750" class="font-size-16 font-weight-normal gray-color-2 mb-2">
              Preferowaną godzinę dostaw klient wybiera dla siebie w opcji, w której dostawca ma zjawić się najpóźniej np. DO 5:30, DO 6:00, DO 6:30, DO 7:00 itd.
            </li>
            <li data-aos="zoom-out" data-aos-duration="750" class="font-size-16 font-weight-normal gray-color-2 mb-2">
              Dostawy odbywają się pod adresy zamieszkania, pracy lub w inne wyznaczone przez klienta miejsce.
            </li>
            <li data-aos="zoom-out" data-aos-duration="750" class="font-size-16 font-weight-normal gray-color-2 mb-2">
              Istnieje możliwość STOPOWANIA zamówienia. Informację o wstrzymaniu diety należy wysłać na nasz adres mailowy: <a href="mailto:kontakt@healthy-day.pl">kontakt@healthy-day.pl</a>. Zgłoszenia przyjmujemy do godz. 10:00 dnia poprzedzającego dostawę. Po godz. 10:00 samą dostawę możemy wstrzymać, natomiast zestaw zostanie wliczony do zamówienia.
            </li>
            <li data-aos="zoom-out" data-aos-duration="750" class="font-size-16 font-weight-normal gray-color-2 mb-2">
              Ilość niewykorzystanych dni podczas trwania umowy, która została nam prawidłowo zgłoszona zostaje przesunięta do wykorzystania na kolejny okres.
            </li>
            <li data-aos="zoom-out" data-aos-duration="750" class="font-size-16 font-weight-normal gray-color-2 mb-2">
              Istnieje możliwość zmiany adresu, bądź godzin dostawy - jeśli zgłoszenie nie będzie później niż o godzinie 14:00 (TRÓJMIASTO) oraz
              nie później niż o godzinie 12:00 (WARSZAWA) w dniu poprzedzającym dostawę. Przekierowania lub zmiany godzin dostaw prosimy kierować
              na <a href="mailto:kontakt@healthy-day.pl">kontakt@healthy-day.pl</a>
            </li>
            <li data-aos="zoom-out" data-aos-duration="750" class="font-size-16 font-weight-normal gray-color-2 mb-2">
              Istnieje możliwość zamówienia dostawy na 2 dni z góry oraz możliwość przygotowania zestawu „w trasę” - bez potrzeby podgrzewania. Tzw. „zimny zestaw”.
            </li>
            <li data-aos="zoom-out" data-aos-duration="750" class="font-size-16 font-weight-normal gray-color-2 mb-2">
              Istnieje możliwość domówienia do swojej diety poszczególnego posiłku dla osoby bliskiej np. Obiad dla męża do swojego zestawu 🙂
            </li>
            <li data-aos="zoom-out" data-aos-duration="750" class="font-size-16 font-weight-normal gray-color-2 mb-2">
              W przypadku zepsutego domofonu lub problemów z dostaniem się na posesję domu lub firmy dostawca będzie kontaktował się telefonicznie z klientem. Jeśli klient nie odbierze telefonu otrzyma od naszego dostawcy smsa z informacją w jaki sposób może odebrać swój zestaw. Zastrzegamy sobie prawo, że w przypadku braku kontaktu z klientem podczas dostawy kierowca nie ma obowiązku ponownie dostarczyć zamówienia.
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="area-section d-none">
    <div id="map"></div>
  </section>

  <?php include('components/cookie-bar/cookie-bar.php'); ?>
  <?php include('components/footer/footer.php'); ?>
</div>


<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrCuJqBLojxVQvT9SFKg8KLMhTsaJMSyI">
</script>


<script>
  <?php include('pages/area/areaJS.js'); ?>
</script>




<?php get_footer();?>
