<?php /* Template Name: Home Page*/?>

<?php get_header(); ?>

<header class="hp-header">
  <div class="bg-col bg-col--left"></div>
  <div class="bg-col bg-col--right"></div>
  <h1>Drzwi do nowego<br> wymiaru</h1>
  <div class="logo">
    <img src="<?php echo get_template_directory_uri().'/images/vsh-logo.png' ?>" alt="virtual software house">
  </div>
  <div class="name">
    <picture>
      <source media="(min-width: 1200px)" srcset="<?php echo get_template_directory_uri().'/images/vsh-name.png' ?>">
      <img src="<?php echo get_template_directory_uri().'/images/vsh-name-small.png' ?>" alt="virtual software house">
    </picture>
  </div>
  <div id="go-down">
    <img src="<?php echo get_template_directory_uri().'/images/arrow-down.png' ?>" alt="go down">
    kontynuuj
  </div>
</header>

<section id="discover">
  <div class="container">
    <h2 class="title">Odkryj nieznaną rzeczywistość</h2>
    <p class="sub-title">Tworzymy aplikacje VR i AR. Dla Ciebie.</p>
    <div class="btn-box">
      <a href="<?php echo get_permalink( get_page_by_title( 'kontakt' ) )?>" class="btn">Napisz do nas <img class="arrow" src="<?php echo get_template_directory_uri().'/images/arrow-right.png' ?>" alt=""></a>
    </div>
    <p class="description">Zmieniamy otoczenie poprzez dodawanie do rzeczywistości.  Tworzymy nowe światy, wcielamy w życie niemożliwe.<br><br>
Włóż gogle i odkryj, poznaj, przeszkól lub chwyć telefon i zobacz czego nie widzisz. </p>
  </div>
  <div class="container-max">
  <picture>
    <source media="(min-width: 1400px)" srcset="<?php echo get_template_directory_uri().'/images/discover-picture.jpg' ?>">
    <source media="(min-width: 992px)" srcset="<?php echo get_template_directory_uri().'/images/discover-picture-medium.jpg' ?>">
    <img src="<?php echo get_template_directory_uri().'/images/discover-picture-small.jpg' ?>" alt="discover vr-ar">
  </picture>
  </div>
</section>

<section id="vr-ar">
  <div id="switcher">
    <div id="switch-bg"></div>
    <div id="vr-btn" class="active">VR</div>
    <div id="ar-btn">AR</div>
  </div>

  <div id="vr-box">
    <div class="container general">
      <h2 class="title">Przenieś się do światów poza realnym zasięgiem</h2>
      <p class="description">
        Aplikacje wirtualnej rzeczywistości mogą przyjmować różnorodne formy. 
        Zobacz jakie projekty zrealizowaliśmy!
      </p>
      <a href="<?php echo get_permalink( get_page_by_title( 'nasze projekty' ) )?>" class="link regular-case">Sprawdź nasze projekty <img class="arrow" src="<?php echo get_template_directory_uri().'/images/arrow-right-black.png' ?>" alt="arrow-right"></a>
    </div>
    <div class="container training">
        <h3 class="slogan">Pomagamy szkolić pracowników zdalnie, bezpiecznie i efektywnie</h3>
    </div>
    <div class="container-max box360">
      <iframe allowfullscreen="true" class="photo360"src="https://momento360.com/e/u/1d4d59e3bdd9493c8ea1dcfe66b7bb5c?utm_campaign=embed&utm_source=other&heading=311.48&pitch=3.09&field-of-view=75&size=medium&wheel=false"> </iframe>
    </div>

    <div class="container two-cols">
      <div class="col-left">
        <div class="image-box space-base">
          <img src="<?php echo get_template_directory_uri().'/images/space-base.png' ?>" alt="space base">
        </div>
      </div>
      <div class="col-right">
        <div class="wrapper">
          <div class="text-square">
            W kosmicznej bazie każdy trener jest w stanie kompleksowo przeszkolić swoich podopiecznych
          </div>
          <a href="" class="link regular-case hp-link">kosmiczna szkoła groupe seb <img class="arrow" src="<?php echo get_template_directory_uri().'/images/arrow-right-black.png' ?>" alt="arrow-right"></a>
        </div>
      </div>
    </div>

    <div class="container gym-slogan">
      <h3 class="slogan">Zmieniamy fitness poprzez technologie i gry</h3>
    </div>
    <div class="container container--wide gym">
      <div>
      <div class="image-box">
        <img src="<?php echo get_template_directory_uri().'/images/gym-image.png' ?>" alt="vr-gym">
      </div>
      <div class="wrapper">
        <div class="text-square">
          7 gier i aplikacji fitnessowych dla studia EMS&VR. Trening w połączeniu z technologią staje się ciekawszy i pozwala osiągać więcej.
        </div>
        <a href="http://vrgym.fit/pl/" class="link regular-case hp-link">virtual gym <img class="arrow" src="<?php echo get_template_directory_uri().'/images/arrow-right-black.png' ?>" alt="arrow-right"></a>
      </div>
      </div>
    </div>

    <div class="container">
      <h3 class="slogan">W doświadczeniach i zabawie przekazujemy wiedzę</h3>
    </div>

    <div class="container video">
      <video controls autoplay muted>
        <source src="<?php echo get_template_directory_uri().'/videos/antresolka_001.mp4' ?>" type="video/mp4">
      </video>
    </div>

    <div class="container two-cols comics">
      <div class="col-left">
        <div class="image-box">
        <img src="<?php echo get_template_directory_uri().'/images/entomologia.png' ?>" alt="space base">
      </div>
      </div>
      <div class="col-right">
        <div class="wrapper">
          <div class="text-square">
            Poznaj 100 lat polskiego komiksu i niepodległości Polski. Wskocz do rysowanych światów znanych np. z Tytusa, Romka i A’Tomka w pierwszej tego typu aplikacji w Europie.
          </div>
          <a href="https://niepodlegla.gov.pl/aktualnosci/niepodlegla-kom-100-lat-polskiego-komiksu/" class="link regular-case hp-link">niepodległa.kom <img class="arrow" src="<?php echo get_template_directory_uri().'/images/arrow-right-black.png' ?>" alt="arrow-right"></a>
        </div>
      </div>
    </div>
  </div>

  <div id="ar-box">
    <div class="container general">
      <h2 class="title">Sprawdź co kryje ekran</h2>
      <p class="description">
        Aplikacje rozszerzające rzeczywistość mogą przyjmować 
        różnorodne formy. Zobacz jakie projekty zrealizowaliśmy!
      </p>
      <a href="<?php echo get_permalink( get_page_by_title( 'nasze projekty' ) )?>" class="link regular-case">Sprawdź nasze projekty <img class="arrow" src="<?php echo get_template_directory_uri().'/images/arrow-right-black.png' ?>" alt="arrow-right"></a>
    </div>
    <div class="container-max equipment">
      <picture>
        <source media="(min-width: 1600px)" srcset="<?php echo get_template_directory_uri().'/images/eq-bg-big.png' ?>">
        <source media="(min-width: 992px)" srcset="<?php echo get_template_directory_uri().'/images/eq-bg.png' ?>">
        <source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri().'/images/eq-bg-medium2.png' ?>">
        <source media="(min-width: 576px)" srcset="<?php echo get_template_directory_uri().'/images/eq-bg-medium.png' ?>">
        <img src="<?php echo get_template_directory_uri().'/images/eq-bg-mobile.png' ?>" alt="">
      </picture>
      <div class="wrapper">
        <h3 class="slogan">Prezentuj i ucz obsługi realnych urządzeń</h3>
        <div class="image-box">
          <img src="<?php echo get_template_directory_uri().'/images/telefon.png' ?>" alt="odkurzacz">
          <div class="holder-hp">
            <div class="text-square">Sprawdź jak pasują do Twojej przestrzeni urządzenia Groupe SEB: Tefal i KRUPS, poznaj ich atuty oraz dowiedz się jak ich używać.</div>
            <a href="http://homearoundapp.pl/" class="link regular-case hp-link">homearound <img class="arrow" src="<?php echo get_template_directory_uri().'/images/arrow-right-black.png' ?>" alt="arrow-right"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="container apps">
      <h3 class="slogan">Nasze aplikacje pomagają dobrać urządzenia do Twojej przestrzeni</h3>
      <div class="image-box">
        <img src="<?php echo get_template_directory_uri().'/images/inteligentna_klimatyzacja.png' ?>" alt="inteligentna klimatyzacja">
      </div>
      <div class="wrapper">
        <div class="text-square">
          Odkryj swój idealny produkt. Umieść we własnym pomieszczeniu, przesuń 
          i przymocuj do ściany.
        </div>
        <a href="" class="link regular-case hp-link">inteligentna klimatyzacja <img class="arrow" src="<?php echo get_template_directory_uri().'/images/arrow-right-black.png' ?>" alt="arrow-right"></a>
      </div>
    </div>

    <div class="container-max filters">
      <div class="container">
        <h3 class="slogan">Nietypowa reklama?</h3>
        <div class="video-box">
          <div class="image-box">
            <img src="<?php echo get_template_directory_uri().'/images/phone.png' ?>" alt="">
          </div>
          <video autoplay muted loop>
            <source src="<?php echo get_template_directory_uri().'/videos/wilk_filtr_AR.mp4' ?>" type="video/mp4">
          </video>
        </div>
        <div class="wrapper">
          <div class="text-square">
            Zaangażuj odbiorców w zabawę i pośrednie informowanie o swojej marce. Stwórzmy filtr i pozmieniajmy twarze na Instagramie.
          </div>
          <a href="" class="link regular-case hp-link">nakładka na instagram <img class="arrow" src="<?php echo get_template_directory_uri().'/images/arrow-right-black.png' ?>" alt="arrow-right"></a></div>
      </div>
    </div>

  </div>
</section>

<section id="more">
  <div class="container-max">
    <div class="image-box">
      <img src="<?php echo get_template_directory_uri().'/images/separator.png' ?>">
    </div>
    <h3 class="slogan">
      Możemy znacznie więcej
    </h3>
    <a href="<?php echo get_permalink( get_page_by_title( 'nasze projekty' ) )?>" class="btn btn--reverse">Zobacz nasze projekty</a>
  </div>
</section>

<section id="partners">
  <h3 class="slogan">Tworzyliśmy razem z</h3>

  <div class="container logos">
  <div class="image-box">
    <picture>
      <source media="(min-width: 992px)" srcset="<?php echo get_template_directory_uri().'/images/logos/krups2.png' ?>">
      <img src="<?php echo get_template_directory_uri().'/images/logos/krups.png' ?>" alt="krups">
    </picture>
  </div>
    <div class="image-box">
      <picture>
        <source media="(min-width: 992px)" srcset="<?php echo get_template_directory_uri().'/images/logos/ec12.png' ?>">
        <img src="<?php echo get_template_directory_uri().'/images/logos/ec1.png' ?>" alt="ec1">
      </picture>
    </div>
    <div class="image-box">
      <picture>
        <source media="(min-width: 992px)" srcset="<?php echo get_template_directory_uri().'/images/logos/dehus2.png' ?>">
        <img src="<?php echo get_template_directory_uri().'/images/logos/dehus.png' ?>" alt="dehus">
      </picture>
    </div>
    <div class="image-box">
      <picture>
        <source media="(min-width: 992px)" srcset="<?php echo get_template_directory_uri().'/images/logos/tubadzin2.png' ?>">
        <img src="<?php echo get_template_directory_uri().'/images/logos/tubadzin.png' ?>" alt="tubadzin">
      </picture>
    </div>
    <div class="image-box">
      <picture>
        <source media="(min-width: 992px)" srcset="<?php echo get_template_directory_uri().'/images/logos/terra2.png' ?>">
        <img src="<?php echo get_template_directory_uri().'/images/logos/terra.png' ?>" alt="terra">
      </picture>
    </div>
    <div class="image-box">
      <picture>
        <source media="(min-width: 992px)" srcset="<?php echo get_template_directory_uri().'/images/logos/tefal2.png' ?>">
        <img src="<?php echo get_template_directory_uri().'/images/logos/tefal.png' ?>" alt="tefal">
      </picture>
    </div>
  </div>

  <div class="container separators">
    <div class="image-box">
      <img src="<?php echo get_template_directory_uri().'/images/paski.png' ?>">
    </div>
  </div>

  <div class="container talk">
    <div class="image-box">
        <img src="<?php echo get_template_directory_uri().'/images/porozmawiajmy.png' ?>" alt="Porozmawiajmy">
    </div>

    <div class="wrapper">
      <h3 class="slogan">Porozmawiajmy!</h3>
      <div class="info">
        <div class="col-left">
          <p><a href="mailto:hello@vhsoft.pl">hello@vhsoft.pl</a></p>
          <p><a href="tel:+48518184154">+48 518 184 154</a></p>
        </div>
        <div class="col-right">
          <p>ul.Kościuszki 29 lok. 3</p>
          <p>90-418 Łódź</p>
        </div>
      </div>
      <a href="<?php echo get_permalink( get_page_by_title( 'kontakt' ) )?>" class="link regular-case">Darmowa wycena <img class="arrow" src="<?php echo get_template_directory_uri().'/images/arrow-right-black.png' ?>" alt="arrow-right"></a>
      <div class="social-media">
        <a href="https://www.instagram.com/vhsoft.pl/" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/instagram.png' ?>" alt="instagram"></a>
        <a href="https://www.linkedin.com/company/vhsoft-virtual-software-house/about/" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/linkedin.png' ?>" alt="linkedin"></a>
        <a href="https://www.facebook.com/vhsoftlodz" target="_blank"><img src="<?php echo get_template_directory_uri().'/images/facebook.png' ?>" alt="facebook"></a>
      </div>

    </div>

  </div>
</section>

<footer id="hp-footer">
  <?php 
    get_template_part( 'template-parts/mini-footer' );
  ?>
</footer>

<script>
  jQuery('.logos').slick({
    responsive: [
      {
        breakpoint: 8000,
        settings: "unslick"
      },
      {
        breakpoint: 992,
        settings: {
          infinite: true,
          arrows: false,
          slidesToShow: 3,
          slidesToScroll: 1,
          variableWidth: true,
          autoplay: true,
          autoplaySpeed: 2000,
        }
      }
    ]
  });
</script>
<?php
get_footer();