<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  
  <div class="l-container">
  <header class="l-header">
    <div class="l-header__inner">
      <div class="l-header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <?php bloginfo('name'); ?>
        </a>
      </div>
      
      <!-- ハンバーガーメニューボタン -->
      <button class="c-hamburger" id="js-hamburger" aria-label="メニューを開く" aria-expanded="false">
        <span class="c-hamburger__line"></span>
        <span class="c-hamburger__line"></span>
        <span class="c-hamburger__line"></span>
      </button>
      
      <!-- ナビゲーションメニュー -->
      <nav class="l-header__nav" id="js-nav">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'container' => false,
          'menu_class' => 'c-nav',
          'fallback_cb' => false,
        ));
        ?>
      </nav>
    </div>
  </header>

