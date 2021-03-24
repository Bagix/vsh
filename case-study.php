<?php /* Template Name: Case Study*/?>

<?php get_header(); ?>

<div class="wrapper-404">
  <div class="col col-left">
      <div class="name">
          <img src="<?php echo get_template_directory_uri().'/images/404/name.png'?>">
      </div>
  </div>

  <div id="case-study" class="col col-right content">
      <div class="logo">
          <img src="<?php echo get_template_directory_uri().'/images/404/logo2.png'?>" alt="Virtual Software House">
      </div>
      <div class="wrapper2">
          <div class="questions">
              <img src="<?php echo get_template_directory_uri().'/images/404/case-study.png'?>">
          </div>
          <div class="text">
            <p>Niedługo otworzą się<br> drzwi do nowego wymiaru<br>naszej strony...</p>
            <p>Poznaj nasze portfolio</p>
            <a href="<?php echo get_template_directory_uri().'/images/404/portfolio.pdf'?>" class="btn btn--reverse" download>Pobier PDF</a>
          </div>
          
      </div>
      <div class="bottom">
          <div class="note">
            <a href="mailto:hello@vhsoft.pl">hello@vhsoft.pl</a>
            <a href="tel:+48660734273">+48 660 734 273</a>
            <p>ul.Kościuszki 29 lok. 3</p>
            <p>90-418 Łódź</p>
          </div>
          <div class="fb">
              <a href="https://www.facebook.com/vhsoftlodz" target="_blank">
                  <img src="<?php echo get_template_directory_uri().'/images/404/fb.png'?>">
              </a>
          </div>
      </div>
  </div>
</div>

<?php get_footer(); ?>