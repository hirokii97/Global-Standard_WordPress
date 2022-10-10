<?php get_header(); ?>

    <div class="p-header__top download-top">
      <div class="p-header__top__wrapper">
        <div class="p-header__top__title c-title-type2 c-english-title">DOWNLOAD</div>
        <div class="p-header__top__subtitle c-title-type2 c-sub-title p-header__download__subtitle">資料ダウンロード</div>
      </div>
    </div>

    <!--パンくずリスト-->
    <?php 
      if(function_exists('bcn_display')):
    ?>
    <div class="header-breadcrumbs l-inner">
      <?php bcn_display(); ?>
    </div>
    <?php endif; ?>


    <div class="download__page">
      <div class="download__page__detail">
        <div class="download__page__detail__title">世界で活躍できるグローバルな人材を育てる３つの研修プログラムをご用意しております。</div>
        <div class="download__page__detail__image"></div>
        <div class="download__page__detail__sentence">急速にグローバルに活躍できる企業が生き残る時代と移り変わりました。<br> ビジネス英語や経営学を効率よく学びながら、世界各国から集まるビジネスパーソンと交流し、世界レベルでの人脈を構築する研修をご用意しております。 <br><br>英語に苦手意識のある方でもご安心ください。<br> ビジネスで必要なコミュニケーションが取れるようになるまで実績豊富な講師陣がサポートいたします。<br> まずはこちらの資料をごらんください。</div>
      </div>


      <div class="download__page__apply">
        <!-- <form class="download__page__apply__form c-form" id="form" action=""> -->
          	
        <?php the_content(); ?>

        <!-- </form> -->
      </div>

    </div>


    <?php get_footer(); ?>