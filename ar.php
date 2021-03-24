<?php /* Template Name: AR */?>

<?php get_header(); ?>

<header class="header header--with-img ar-header container">
  <h1 class="head-1">Rzeczywistość rozszerzona</h1>
  <div class="image-box">
    <img src="<?php echo get_template_directory_uri().'/images/ar/ar.png' ?>" alt="">
  </div>
  <p class="text">Widziałeś kiedyś lądowanie kosmitów przed swoim domem? Może kiedyś chciałeś się dowiedzieć jak działa dany produkt? Nakieruj telefon na obiekt i odkryj niewidoczne dla oczu. Przedmiot może kryć znacznie więcej niż się wydaje.</p>
</header>

<section class="ar-service container about-service">
  <p class="eyebrow">Podstawy</p>
  <h2 class="title title--letter-space">O technologii</h2>
  <p class="single-text">AR dodaje do otaczającego nas świata cyfrowe obiekty. Może to być angażujący filtr na twarz, prezentacja urządzenia do kupienia, gra lub przydatne informacje wyświetlane na rzeczywistym przedmiocie.</p>
</section>

<section class="container ar-devices">
  <div class="grider">
    <div class="wrapper-1">
      <p class="eyebrow">Potęga technologii ar</p>
      <h2 class="title">Urządzenia mobilne</h2>
      <div class="image-box image-1">
        <img src="<?php echo get_template_directory_uri().'/images/ar/devices-1.png' ?>" alt="urządzenia">
      </div>
      <p class="text text-1">Prawie każdy może doświadczyć AR. Wystarczy wziąć telefon lub tablet i sprawdzić co kryje się w okolicy. Przetestuj sam.</p>
    </div>
    <div class="wrapper-2">
      <div class="image-box image-2">
        <img src="<?php echo get_template_directory_uri().'/images/ar/devices-2.png' ?>" alt="urządzenia">
      </div>
      <p class="text text-2">Otwórz stronę na urządzeniu mobilnym, a zobaczysz więcej</p>
    </div>
  </div>
</section>

<section class="ar-possibilities">
  <div class="container">
    <p class="eyebrow">Nieskończone</p>
    <h2 class="title">Możliwości</h2>
    <p class="text">Prezentacja, symulacja działania usługi, zabawa i kooperacja w różnych miejscach. To kilka przetestowanych zastosowań technologii AR. Jakie jeszcze możemy odkryć przestrzenie?</p>
  </div>
  <div class="slider-wrapper">
    <img class="frame" src="<?php echo get_template_directory_uri().'/images/ar/telefon.png' ?>">
    <div id="ar-slider">
      <div class="image-box box-1">
        <img src="<?php echo get_template_directory_uri().'/images/ar/flexUltimate.png' ?>">
      </div>
      <div class="image-box box-2">
        <img src="<?php echo get_template_directory_uri().'/images/ar/s80.png' ?>">
      </div>
      <div class="image-box box-3">
        <img src="<?php echo get_template_directory_uri().'/images/ar/ixeo.png' ?>">
      </div>
      <div class="image-box box-4">
        <img src="<?php echo get_template_directory_uri().'/images/ar/kanapa.png' ?>">
      </div>
    </div>
  </div>
  <div class="container">
    <p class="text">Dowiedz się jak korzystać z urządzeń, zanim będziesz mieć z nimi fizyczny kontakt lub poznaj je poprzez wizualizacje. Odkryj na co dzień niewidoczne szczegóły. Sprawdź co się kryje wewnątrz.</p>
    <a href="" class="link">Sprawdź nasze projekty <img class="arrow" src="<?php echo get_template_directory_uri().'/images/arrow-right-black.png' ?>" alt="arrow-right"></a>
  </div>
  <div class="container options">
    <div id="options-slider">
      <div class="option-box">
        <div class="image-box">
          <img src="<?php echo get_template_directory_uri().'/images/ar/instrukcje.png' ?>" alt="instrukcje">
        </div>
        <div class="wrapper">
          <p class="sub-title">Instrukcje</p>
          <p class="text">Pokazanie tłumaczy lepiej niż instrukcja na kartce. Dodaj urządzenie do realnego świata i zaprezentuj działanie animacjami.</p>
        </div>
      </div>
      <div class="option-box swap">
        <div class="image-box">
          <img src="<?php echo get_template_directory_uri().'/images/ar/przeswietl.png' ?>" alt="prześwietl">
        </div>
        <div class="wrapper">
          <p class="sub-title">Prześwietl</p>
          <p class="text">Zobacz jak przedmiot wygląda od środka.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="container ar-use points-list">
  <p class="eyebrow">Najważniejsze</p>
  <h2 class="title title--letter-space">W jakich branżach AR jest wykorzystywany</h2>
  <div class="wrapper">
    <div class="col-left">
      <ul class="features-list">
        <li><p>Marketing, sprzedaż, e-commerce</p></li>
        <li><p>Edukacja, instrukcje, szkolenia</p></li>
        <li><p>Przemysł, serwis, bezpieczeństwo</p></li>
      </ul>
    </div>
      <div class="col-right">
        <div class="image-box">
          <img src="<?php echo get_template_directory_uri().'/images/ar/ar-use.png' ?>" alt="wykorzystanie ar">
        </div>
    </div>
  </div>
</section>

<?php
  get_template_part( 'template-parts/contact-us' );
?>

<footer>
  <?php
    get_template_part( 'template-parts/full-footer' );
  ?>
</footer>
<script>
  jQuery('#ar-slider').slick({
    infinite: false,
    initialSlide: 2,
    appendArrows: jQuery('.slider-wrapper'),
    variableWidth: true,
    centerMode: true,
  });

  jQuery('#options-slider').slick({
    responsive: [
      {
        breakpoint: 8000,
        settings: "unslick"
      },
      {
        breakpoint: 992,
        settings: {
          infinite: false,
          appendArrows: jQuery('.options'),
        }
      }
    ]
  });
</script>
<?php
get_footer();