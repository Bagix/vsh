<?php /* Template Name: Contact */

 get_header();
 
?>
<section class="container contact-form">
<h2 class="title">Porozmawiajmy</h2>
  <?php
    echo do_shortcode(
      '[contact-form-7 id="71" title="Formularz 1"]'
    );
  ?>
</section>

<section class="container contact-other">
  <div class="divider"></div>
    <h3 class="slogan">Wolisz inną formę kontaktu?</h3>
    <div class="wrapper">
      <a href="tel:+48518184154">
        <img src="<?php echo get_template_directory_uri().'/images/contact/phone.png' ?>">
        +48 518 184 154
      </a>
      <a href="mailto:hello@vhsoft.pl">
        <img src="<?php echo get_template_directory_uri().'/images/contact/envelope.png' ?>">
        hello@vhsoft.pl
      </a>
    </div>
    <div class="divider"></div>
</section>

<footer>
  <?php
    get_template_part( 'template-parts/mini-footer' );
  ?>
</footer>

<?php
get_footer();

