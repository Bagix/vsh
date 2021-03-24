<?php /* Template Name: About Us */?>

<?php get_header(); ?>

<header class="header header--with-img about-us-header container">
  <h1 class="head-1 head-1--small-space">O nas</h1>
  <p class="text">
    Virtual Software House to pełne pasjonatów studio developerskie. Naszą główną działalnością jest tworzenie aplikacji i gier na platformy VR oraz AR. Projektujemy personalizowane rozwiązania dla klientów.
  </p>
</header>

<section class="about-us-philosophy container">
  <h2 class="title">Filozofia </h2>
  <div class="image-box">
    <picture>
      <source media="(min-width: 992px)" srcset="<?php echo get_template_directory_uri().'/images/about-us/philosophy.png' ?>">
      <img src="<?php echo get_template_directory_uri().'/images/about-us/philosophy-mobile.png' ?>" alt="Filozofia VR">
    </picture>
  </div>
  <p class="text">Chcemy, aby dzięki technologii ludzie zyskiwali nowe możliwości. Wierzymy, że dobre projekty można tworzyć tylko ze szczerością i z dialogiem.</p>
</section>

<section class="about-us-values container">
  <h2 class="title">Wartości</h2>
  <p class="text">Dbamy o klienta i budujemy relację opartą na zaufaniu. Dokładamy wszelkich starań by podkreślić w tworzonych projektach wartości, które cenimy.</p>
  <div class="value-box">
    <h3 class="title title--thin">Kreatywność</h3>
    <div class="wrapper">
      <div class="image-box">
       <img src="<?php echo get_template_directory_uri().'/images/about-us/creativity.png' ?>" alt="kreatywność">
      </div>
      <p class="text">Mamy głowy pełne pomysłów i mnóstwo energii do ich realizacji. Podchodzimy do problemów z otwartością i inspirujemy się otaczającym nas światem.</p>
    </div>
  </div>
  <div class="value-box">
    <h3 class="title title--thin">Partnerstwo</h3>
    <div class="wrapper">
      <div class="image-box">
        <img src="<?php echo get_template_directory_uri().'/images/about-us/partnership.png' ?>" alt="partnerstwo">
      </div>
      <p class="text">Zmiany zachodzące w świecie od dawna nie są dziełem jednego człowieka czy małego zespołu. Sięgamy wysoko i szukamy partnerów, gotowych wyruszyć z nami w ciekawe miejsca.</p>
    </div>
  </div>
  <div class="value-box">
    <h3 class="title title--thin">Ambicja</h3>
    <div class="wrapper">
      <div class="image-box">
        <img src="<?php echo get_template_directory_uri().'/images/about-us/ambition.png' ?>" alt="ambicja">
      </div>
      <p class="text">Nie podążamy wyznaczoną ścieżką. Chcemy tworzyć nieszablonowe rozwiązania i za każdym razem robić krok do przodu. Sięgamy wyżej, doskonalimy nasze projekty.</p>
    </div>
  </div>
  <p class="text">Połączenie tych wartości przekładamy w zaangażowanie, które wkładamy w każdą dziedzinę naszej działalności.</p>
</section>

<section class="about-us-events container">
  <h2 class="title">Salon i eventy</h2>
  <div class="image-box">
    <picture>
      <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri().'/images/about-us/events.png' ?>">
      <img src="<?php echo get_template_directory_uri().'/images/about-us/events-mobile.png' ?>" alt="eventy">
    </picture>
  </div>
  <p class="text">Przez 3 lata prowadzliśmy elektroniczny park rozrywki oraz organizowaliśmy eventy z technologią VR. Dzięki animacji rozrywki w najlepszych grach mogliśmy zaobserwować schematy zachowań użytkowników. To daje nam realny pogląd, jak ludzie reagują na wirtualne doświadczenia.</p>
</section>

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