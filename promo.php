<?php /* Template Name: Promo */?>

<?php get_header(); ?>

<header class="header promo-header container">
  <h1 class="head-1">Reklama</h1>
  <div class="image-box">
    <img src="<?php echo get_template_directory_uri().'/images/promo/promo.png' ?>" alt="">
  </div>
  <p class="text">
    Interaktywne historie, grywalizacja, ciekawe wizualizacje, gry i inne formy dostarczania wrażeń. Zaangażuj odbiorców, zachęć do zakupu i zapoznaj ze swoją marką. Przekrocz granice typowej reklamy.
  </p>
</header>

<section class="promo-service container about-service">
  <p class="eyebrow">Podstawy</p>
  <h2 class="title title--letter-space">O usłudze</h2>
  <p class="single-text">Możemy stworzyć przeżycia niedostępne w rzeczywistości. VR, AR, pełne wirtualne światy, interaktywny obiekt, promocyjna gra, a może masz własny pomysł? Możliwości są niemal nieograniczone.</p>
</section>

<section class="promo-oportunities container">
  <p class="eyebrow">Nowatorskie przyciąganie uwagi</p>
  <h2 class="title title--letter-space">Możliwości</h2>
  <div class="video-box">
    <div class="image-box">
      <img src="<?php echo get_template_directory_uri().'/images/promo/phone.png' ?>" alt="">
    </div>
    <video autoplay muted loop>
      <source src="<?php echo get_template_directory_uri().'/videos/wilk_filtr_AR.mp4' ?>" type="video/mp4">
    </video>
  </div>
  <div class="wrapper">
    <p class="text">
      Standardowe reklamy działają coraz gorzej albo w ogóle są nieskuteczne?
      Spróbuj nowych, immersyjnych form. Wciągnij odbiorców w świat nieznanych wrażeń.
    </p>
    <a href="" class="link">Sprawdź nasze projekty <img class="arrow" src="<?php echo get_template_directory_uri().'/images/arrow-right-black.png' ?>" alt="arrow-right"></a>
  </div>
</section>

<section class="container promo-personalization picture-bar">
  <p class="eyebrow">Projekty stworzone dla ciebie</p>
  <h2 class="title title--letter-space">Personalizacja</h2>
  <p class="text">Różne cele wymagają dopasowanych rozwiązań. Pomożemy Ci dobrać projekt i technologię zgodnie z potrzebami Twoimi oraz klientów.</p>
  <div class="image-wrapper">
    <div class="image-box">
      <p>Gry</p>
      <img src="<?php echo get_template_directory_uri().'/images/promo/games.jpg' ?>" alt="gry">
    </div>
    <div class="image-box">
      <p>Filtry</p>
      <img src="<?php echo get_template_directory_uri().'/images/promo/filters.jpg' ?>" alt="filtry">
    </div>
    <div class="image-box">
      <p>Doświadczenie</p>
      <img src="<?php echo get_template_directory_uri().'/images/promo/experience.jpg' ?>" alt="doświadczenie">
    </div>
  </div>
</section>

<section class="container promo-features points-list">
  <p class="eyebrow">Najważniejsze</p>
  <h2 class="title title--letter-space">Cechy interaktywnej reklamy</h2>
  <div class="wrapper">
    <div class="col-left">
      <ul class="features-list">
        <li><p>Tworzy relację z odbiorcą</p></li>
        <li><p>Zachęca do częstszego kontaktu z firmą</p></li>
        <li><p>Bawi i buduje dobre skojarzenia z marką</p></li>
      </ul>
    </div>
      <div class="col-right">
        <div class="image-box">
          <img src="<?php echo get_template_directory_uri().'/images/promo/features.jpg' ?>" alt="cechy">
        </div>
    </div>
  </div>
</section>

<div class="promo-see-more container-max">
  <img src="<?php echo get_template_directory_uri().'/images/promo/see-more.jpg' ?>" alt="Zobacz więcej z AR">
</div>

<?php
    get_template_part( 'template-parts/contact-us' );
  ?>
<footer>
  <?php
    get_template_part( 'template-parts/full-footer' );
  ?>
</footer>

<?php
get_footer();