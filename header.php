<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Global Standard -just another WordPress site</title>
    <meta name="description" content="">
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,400;1,500;1,700;1,900&amp;family=Noto+Sans+JP:wght@300;400;500;700;900&amp;family=Roboto:ital,wght@1,700&amp;display=swap" rel="stylesheet">
    <!--Swiper-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">

    <?php wp_head();?> 
    
  </head>
  <body>
    <header class="header">
      <div class="header__inner">
        <a class="header__title c-main-title" href="<?php echo home_url('/')  ?>">Global Standard</a>
        
        <?php 
           wp_nav_menu(
             array(
               'depth' => 1,
               'theme_location' => 'global',
               'container' =>'false',
               'menu_class' =>'header__nav',
               )
               )
               ?>

        <div class="header__btn-box">
          <a class="download__btn c-white-btn btn" href="<?php echo home_url('/download'); ?>">資料ダウンロード</a>
          <a class="contact__btn c-blue-btn btn" href="<?php echo home_url('/contact'); ?>">お問い合わせ</a>
        </div>
        <div class="header-menu-hamburger">
          <div class="header-hamburger-item"><span></span><span></span><span></span></div>
        </div>
      </div>

      <?php 
           wp_nav_menu(
             array(
               'depth' => 1,
               'theme_location' => 'drawer',
               'container_class' =>'header-drawer-nav',
               'menu_class' => 'header-drawer-wrapper',
               )
               )
               ?>

      <!-- <div class="header-drawer-nav">
        <div class="header-drawer-wrapper">
          <a class="header__list list" href="./index.html">トップ</a>
          <a class="header__list list" href="./about/index.html">当社について</a>
          <a class="header__list list" href="./service/index.html">サービス</a><a class="header__list list" href="./results/index.html">導入事例</a><a class="header__list list" href="./news/index.html">お知らせ</a><a class="download__btn c-white-btn btn">資料ダウンロード</a><a class="contact__btn c-blue-btn btn">お問い合わせ</a>
        </div>
      </div> -->
    </header>