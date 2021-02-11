<?php /* Template Name: AR */?>

<?php get_header(); ?>

<header class="header ar-header container">
  <h1 class="head-1">Rzeczywistość rozszerzona</h1>
  <div class="image-box">
    <img src="<?php echo get_template_directory_uri().'/images/ar/ar.png' ?>" alt="">
  </div>
  <p class="text">Widziałeś kiedyś lądowanie kosmitów przed swoim domem? Może kiedyś chciałeś się dowiedzieć jak działa dany produkt? Nakieruj telefon na obiekt i odkryj niewidoczne dla oczu. Przedmiot może kryć znacznie więcej niż się wydaje.</p>
</header>

<section class="ar-service container about-service">
  <p class="eyebrow">Podstawy</p>
  <h2 class="title title--letter-space">O technologii</h2>
  <p class="single-text">VR pozwala wejść w trójwymiarową rzeczywistość. Wyświetlane w goglach obrazy wydają się stać obok nas. Doświadcz w wirtualnym świecie prawdziwych emocji.</p>
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
  <div id="ar-slider">
    
  </div>
  <div class="container">
    <p class="text">Dowiedz się jak korzystać z urządzeń, zanim będziesz mieć z nimi fizyczny kontakt lub poznaj je poprzez wizualizacje. Odkryj na co dzień niewidoczne szczegóły. Sprawdź co się kryje wewnątrz.</p>
    <a href="" class="link">Sprawdź nasze projekty <img class="arrow" src="<?php echo get_template_directory_uri().'/images/arrow-right-black.png' ?>" alt="arrow-right"></a>
  </div>
  <div class="container">

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
  // jQuery('#objects-carousel').slick({
  //   responsive: [
  //     {
  //       breakpoint: 8000,
  //       settings: "unslick"
  //     },
  //     {
  //       breakpoint: 992,
  //       settings: {
  //         infinite: false,
  //         initialSlide: 1,
  //         appendArrows: jQuery('.models-objects'),
  //         adaptiveHeight: true
  //       }
  //     }
  //   ]
  // });
</script>
<?php
get_footer();