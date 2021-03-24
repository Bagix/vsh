<?php /* Template Name: Games */?>

<?php get_header(); ?>

<header class="header header--with-img games-header container">
  <h1 class="head-1">Gry</h1>
  <div class="image-box">
    <img src="<?php echo get_template_directory_uri().'/images/games/games.png' ?>" alt="">
  </div>
  <p class="text">
    Nasze pierwsze działania wynikały z miłości do gier. Stworzyliśmy salon gier VR, aby każdy mógł doświadczyć immersyjności w goglach. To nam nie wystarczyło. Zrobiliśmy krok dalej – sami tworzymy gry.
  </p>
</header>


<section class="games-service container about-service">
  <p class="eyebrow">Podstawy</p>
  <h2 class="title title--letter-space">O usłudze</h2>
  <p class="single-text">Od pomysłu na grę przez outsource i realizację własnych pomysłów aż do inwestycji. Poprowadzimy projekt przez wszystkie stadia niezależnie od tego, w którym miejscu zacznie się nasza przygoda.</p>
</section>


<section class="games-variety">
  <div class="container">
    <p class="eyebrow">Inne światy, możliwości</p>
    <h2 class="title">Różnorodność</h2>
  </div>
    <div id="games-carousel">
      <div class="image-box"><img src="<?php echo get_template_directory_uri().'/images/games/japan.jpg' ?>" alt="japonia"></div>
      <div class="image-box"><img src="<?php echo get_template_directory_uri().'/images/games/stadion.jpg' ?>" alt="stadion"></div>
      <div class="image-box"><img src="<?php echo get_template_directory_uri().'/images/games/charger.jpg' ?>" alt="cyklista"></div>
    </div>
    <div class="container space-left text-wrapper">
      <p class="text">W grach kreujemy całe światy i możemy przenieść się w dowolne miejsca – od kosmosu, do magicznych zamków. Od rozrywki do realizacji celów szkoleniowych lub promocyjnych.</p>
    </div>
    <div class="container space-left link-wrapper">
      <a href="" class="link">Sprawdź nasze projekty <img class="arrow" src="<?php echo get_template_directory_uri().'/images/arrow-right-black.png' ?>" alt="arrow-right"></a>
    </div>
</section>


<section class="container games-platforms picture-bar">
  <p class="eyebrow">Urządzenia Małe i duże</p>
  <h2 class="title title--letter-space">Inne platformy</h2>
  <p class="text">Rozwój technologii sprawił, że w naszych kieszeniach z łatwością mieszczą się dziesiątki zaawansowanych gier. Do bardziej skomplikowanych projektów doskonale się sprawdzą komputery, a pełną immersję osiągniemy w goglach rzeczywistości wirtualnej.</p>
  <div class="image-wrapper">
    <div class="image-box">
      <p>Mobile</p>
      <img src="<?php echo get_template_directory_uri().'/images/games/medicine.jpg' ?>" alt="kreskówki">
    </div>
    <div class="image-box">
      <p>Quest VR</p>
      <img src="<?php echo get_template_directory_uri().'/images/games/cartoons.jpg' ?>" alt="lasery">
    </div>
    <div class="image-box">
      <p>PC VR</p>
      <img src="<?php echo get_template_directory_uri().'/images/games/lasers.jpg' ?>" alt="medycyna">
    </div>
  </div>
</section>


<section class="container games-potential points-list">
  <p class="eyebrow">Najważniejsze</p>
  <h2 class="title title--letter-space">Potencjał gier</h2>
  <div class="wrapper">
    <div class="col-left">
      <ul class="features-list">
        <li><p>Nieustannie powiększa się rynek</p></li>
        <li><p>Grywalizacja wzmacnia zaangażowanie pracowników i klientów</p></li>
        <li><p>Społeczność graczy nieustannie się powiększa</p></li>
      </ul>
    </div>
      <div class="col-right">
        <div class="image-box">
          <img src="<?php echo get_template_directory_uri().'/images/games/potential.png' ?>" alt="potencjał">
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
  jQuery('#games-carousel').slick({
    infinite: true,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    centerMode: true,
  });
</script>
<?php
get_footer();