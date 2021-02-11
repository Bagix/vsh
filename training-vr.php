<?php /* Template Name: Experience */?>

<?php get_header(); ?>

<header class="header training-header container">
  <h1 class="head-1">Doświadczenia VR</h1>
  <div class="image-box">
    <img src="<?php echo get_template_directory_uri().'/images/training/vr-training-top.png' ?>" alt="">
  </div>
  <p class="text">VR zapewnia nowy sposób poznawania świata. Możemy odtworzyć istniejące urządzenia i konkretne sytuacje, nie ruszając się z miejsca. Wystarczą gogle i odpowiednia aplikacja, aby nauczyć się czegoś nowego.</p>
</header>

<section class="exp-service container about-service">
  <p class="eyebrow">Podstawy</p>
  <h2 class="title title--letter-space">O technologii</h2>
  <p class="single-text">VR pozwala wejść w trójwymiarową rzeczywistość. Wyświetlane w goglach obrazy wydają się stać obok nas. Doświadcz w wirtualnym świecie prawdziwych emocji.</p>
  <div class="row">
    <div class="wrapper">
      <p class="eyebrow">Patrz we wszystkie strony</p>
      <h2 class="title">Gogle VR</h2>
    </div>
    <div class="image-box">
      <img src="<?php echo get_template_directory_uri().'/images/exp/gogle.jpg' ?>" alt="gogle">
    </div>
    <p class="text">Załóż gogle i rozpocznij przygodę. Gdzie się nie obejrzysz, jest coś do odkrycia.</p>
  </div>
  <div class="row">
    <div class="wrapper">
      <p class="eyebrow">zmieniaj otoczenie swoimi akcjami</p>
      <h2 class="title">Kontrolery</h2>
    </div>
    <div class="image-box">
      <img src="<?php echo get_template_directory_uri().'/images/exp/kontrolery.jpg' ?>" alt="kontrolery">
    </div>
    <p class="text">Kontrolery są jak Twoje dłonie. Łap, podnoś, otwieraj, wciskaj, obracaj, rzucaj - rób wszystko, co jest możliwe w rzeczywistości i znacznie więcej. </p>
  </div>
</section>


<section class="container exp-choice training">
  <p class="eyebrow">mobilność kontra lepsza jakość</p>
  <h2 class="title">Jakie gogle wybrać</h2>
  <div class="wrapper">
    <p class="text--tall tall1">Mobilne</p>
    <p class="text--tall tall2">Stacjonarne</p>
    <div class="image-box">
      <img src="<?php echo get_template_directory_uri().'/images/exp/choice.png' ?>" alt="wybor">
    </div>
    <p class="text text1">Brak kabli i dodatkowych urządzeń. Moc VR zamknięta w przenośnych goglach.</p>
    <p class="text text2">Niesamowita wydajność i świetna jakość grafiki dzięki połączeniu z komputerem</p>
    <p class="text look">wygląd</p>
    <div class="sep sep1"></div>
    <p class="text--bold look1">Najlepsza możliwa jakość bez limitów</p>
    <p class="text--bold look2">Obraz zapiera dech w piersiach</p>
    <p class="text graphic">jakość grafiki</p>
    <div class="sep sep2"></div>
    <p class="text--bold graphic1">Prostsze modele, mniej realizmu, ale ze świetnymi efektami</p>
    <p class="text--bold graphic2">Realistyczne odwzorowanie i fantastyczne powierzchnie</p>
    <p class="text eq">dodatkowy sprzęt</p>
    <div class="sep sep3 mobile-only"></div>
    <p class="text--bold eq1">Gogle i kontrolery, to wszystko, co potrzebne.</p>
    <p class="text--bold eq2">Komputer jest niezbędny do działania zestawu.</p>
  </div>
</section>

<section class="container training-benefits">
  <p class="eyebrow">Bezpieczeństwo i oszczędność</p>
  <h2 class="title">Korzyści szkoleń w VR</h2>
  <div class="wrapper">
    <div class="benefit-box">
      <div class="image-box">
        <img src="<?php echo get_template_directory_uri().'/images/training/benefit-1.png' ?>" alt="benefit">
      </div>
      <p>Błędy w VRze nie narażają zdrowia i życia. </p>
    </div>
    <div class="benefit-box">
      <div class="image-box">
        <img src="<?php echo get_template_directory_uri().'/images/training/benefit-2.png' ?>" alt="benefit">
      </div>
      <p>Ochrona drogiego sprzętu i maszyn.</p>
    </div>
    <div class="benefit-box">
      <div class="image-box">
        <img src="<?php echo get_template_directory_uri().'/images/training/benefit-3.png' ?>" alt="benefit">
      </div>
      <p>Przeszkolenie pracownika nie wymaga wstrzymywania linii produkcyjnej </p>
    </div>
  </div>
</section>

<section class="container training-potential points-list">
  <p class="eyebrow">Podstawy</p>
  <h2 class="title title--letter-space">Możliwości doświadczeń VR</h2>
  <div class="wrapper">
    <div class="col-left">
      <ul class="features-list">
        <li><p>Zdalne szkolenie i onboarding</p></li>
        <li><p>Prezentacja wielkogabarytowych produktów</p></li>
        <li><p>Wspólne tworzenie i prototypowanie</p></li>
      </ul>
    </div>
      <div class="col-right">
        <div class="image-box">
          <img src="<?php echo get_template_directory_uri().'/images/training/vr-training.png' ?>" alt="szkolenie vr">
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
<?php
get_footer();