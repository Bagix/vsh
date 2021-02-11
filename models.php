<?php /* Template Name: Models */?>

<?php get_header(); ?>

<header class="header models-header container">
  <h1 class="head-1">Gry</h1>
  <div class="image-box">
    <img src="<?php echo get_template_directory_uri().'/images/models/models.png' ?>" alt="">
  </div>
  <p class="text">
    Otaczają nas trójwymiarowe przedmioty i przestrzenie oraz... płaskie ekrany. Wyjdź poza zdjęcia i pokaż swoje produkty w przestrzennej formie na stronie internetowej lub w AR. Pozwól odbiorcom poznać obiekty z każdej strony, a nawet obejrzyj we własnej przestrzeni. 
  </p>
</header>

<section class="models-service container about-service">
  <p class="eyebrow">Podstawy</p>
  <h2 class="title title--letter-space">O usłudze</h2>
  <p class="single-text">Potrafimy wykreować produkt od zera, odtworzyć istniejące obiekty w pełnym realiźmie lub umieścić je w fantazyjnej przestrzeni. Animacja, wprawienie w ruch i dodanie interakcji z produktem też nie są problemem.</p>
</section>

<section class="container models-objects">
  <p class="eyebrow">Style modelowania </p>
  <h2 class="title">Poznaj różne postacie obiektów 3D</h2>
  <div id="objects-carousel">
    <div class="image-box">
      <p>styl 1</p>
      <img src="<?php echo get_template_directory_uri().'/images/models/vacuum.png' ?>" alt="odkurzacz">
    </div>
    <div class="image-box">
      <p>styl 2</p>
      <img src="<?php echo get_template_directory_uri().'/images/models/object.png' ?>" alt="obiekt">
    </div>
    <div class="image-box">
      <p>styl 3</p>
      <img src="<?php echo get_template_directory_uri().'/images/models/dog.png' ?>" alt="pies">
    </div>
  </div>
  <p class="text">Przestrzenie i obiekty 3D mogą wyglądać jak wyjęte z naszego otoczenia, z innej galaktyki lub przenosić nas do świata z kreskówek.</p>
  <a href="" class="link">Sprawdź nasze projekty <img class="arrow" src="<?php echo get_template_directory_uri().'/images/arrow-right-black.png' ?>" alt="arrow-right"></a></a>
</section>

<section class="container models-projects">
  <p class="eyebrow">Wiele sposobów projektowania</p>
  <h2 class="title">Rzeczywiste, czy całkowicie umowne?</h2>
  <p class="text">Możemy stworzyć cyfrowe modele z całą ich złożonością lub uprościć do kanciastych brył, aby zyskać nierzeczywisty oraz oszczędny wygląd.</p>
  <div class="wrapper">
    <div class="image-box">
      <p>rzeczywiste</p>
      <img src="<?php echo get_template_directory_uri().'/images/models/coffe.png' ?>" alt="ekspres do kawy">
      <p class="text">Model jest bliski rzeczywistości. Zawiera wiele szczegółów i dokładne tekstury.</p>
    </div>
    <div class="image-box">
      <p>stylizowane</p>
      <img src="<?php echo get_template_directory_uri().'/images/models/knight.png' ?>" alt="rycerz">
      <p class="text">Bryła została uproszczona i stworzona z konkretną wizją artystyczną.</p>
    </div>
  </div>
</section>

<section class="container models-creation">
<p class="eyebrow">Proces</p>
<h2 class="title">Kilka etapów kreacji</h2>
<p class="text">Modele 3D są starannie przygotowywane i zanim trafią do odbiorców, przechodzą przez kilka etapów. Najpierw powstaje bryła. Potem obiekt otrzymuje kolory i materiały. Całość można dodatkowo wzbogacić animacją.</p>
<div class="wrapper">
  <div class="image-box">
    <img src="<?php echo get_template_directory_uri().'/images/models/creation-1.png' ?>" alt="modelowanie">
    <p>Modelowanie</p>
  </div>
  <div class="image-box">
    <img src="<?php echo get_template_directory_uri().'/images/models/creation-2.png' ?>" alt="teksturowanie">
    <p>Teksturowanie</p>
  </div>
  <div class="image-box">
    <img src="<?php echo get_template_directory_uri().'/images/models/creation-3.png' ?>" alt="animowanie">
    <p>Animowanie</p>
  </div>
</div>
</section>

<section class="container models-potential points-list">
  <p class="eyebrow">Najważniejsze</p>
  <h2 class="title title--letter-space">Jak można wykorzystać modele 3D</h2>
  <div class="wrapper">
    <div class="col-left">
      <ul class="features-list">
        <li><p>Atrakcyjnie prezentują ofertę w sklepie internetowym, wirtualnym konfiguratorze itp.</p></li>
        <li><p>Pozwalają na oglądanie przedmiotu z każdej strony, również w środku</p></li>
        <li><p>Animowane pokazują działanie i zachowanie produktów </p></li>
      </ul>
    </div>
      <div class="col-right">
        <div class="image-box">
          <img src="<?php echo get_template_directory_uri().'/images/models/models-use.png' ?>" alt="potencjał">
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
  jQuery('#objects-carousel').slick({
    responsive: [
      {
        breakpoint: 8000,
        settings: "unslick"
      },
      {
        breakpoint: 992,
        settings: {
          infinite: false,
          initialSlide: 1,
          appendArrows: jQuery('.models-objects'),
          adaptiveHeight: true
        }
      }
    ]
  });
</script>
<?php
get_footer();