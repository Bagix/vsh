<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#082D36">
    <meta name="robots" content="index, follow" />
    <?php wp_head(); ?>
  </head>
  <?php
    $home_url = get_home_url();
  ?>

  <body>
    <div class="mobile-nav-bar">
      <div class="image-box logo">
        <a href="<?php echo $home_url ?>">
          <img src="<?php echo get_template_directory_uri().'/images/menu/mobile-nav-logo-white.png' ?>" alt="virtual software house">
        </a>
      </div>
      <div class="image-box trigger">
        <img src="<?php echo get_template_directory_uri().'/images/menu/menu-burger.png' ?>" alt="open menu">
      </div>
    </div>
  <?php
  $vsh_name_small = get_template_directory_uri().'/images/vsh-name-small.png';
  $mobile_nav_logo_black = get_template_directory_uri().'/images/menu/mobile-nav-logo-black.png';
  $menu_cross = get_template_directory_uri().'/images/menu/menu-cross.png';
  wp_nav_menu(array(
    'menu' => 'header-menu',
    'container' => 'nav',
    'container_id' => 'nav',
    'container_class' => '',
    'menu_class' => 'menu',
    'items_wrap' => '
<div class="holder">
            <div class="wrapper">
              <div class="image-box logo">
                <a href="'.$home_url.'">
                  <picture>
                    <source media="(min-width: 992px)" srcset="'.$vsh_name_small.'" alt="virtual software house">
                    <img src="'.$mobile_nav_logo_black.'" alt="virtual software house">
                  </picture>
                </a>
              </div>
              <div class="image-box close-icon">
                <img src="'.$menu_cross.'" alt="close menu">
              </div>
            </div>
            <ul id="%1$s" class="%2$s">%3$s</ul>
</div>
    ',
    'theme_location' => 'header-menu'
    )
  ); 
  ?>
