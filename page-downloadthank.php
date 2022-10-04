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
        <div class="download__page__detail__image"><img src="<?php echo get_template_directory_uri() ?>/assets/img/pamphlet.png" alt=""></div>
        <div class="download__page__detail__sentence">急速にグローバルに活躍できる企業が生き残る時代と移り変わりました。 ビジネス英語や経営学を効率よく学びながら、世界各国から集まるビジネスパーソンと交流し、世界レベルでの人脈を構築する研修をご用意しております。 <br><br>英語に苦手意識のある方でもご安心ください。 ビジネスで必要なコミュニケーションが取れるようになるまで実績豊富な講師陣がサポートいたします。 まずはこちらの資料をごらんください。</div>
      </div>


      <div class="download__page__apply">
        <form class="wpcf7-form" id="form" action="">

        <!--送信後メッセージ-->
           <div class="download__page__apply__form__afterSend">
            <div class="download__page__apply__form__afterSend__title">資料請求いただき<br> ありがとうございました！</div>
            <p class="download__page__apply__form__afterSend__sentence">資料は以下のリンクよりダウンロードください。<br><br></p>
            <p class="download__page__apply__form__afterSend__sentenceArrow">→ </p><a class="download__page__apply__form__afterSend__sentenceLink" href="https://drive.google.com/file/d/1XOV2F-eCV3R8YoLxiSuaMG4rwRrN3QrD/view?usp=sharing">資料のダウンロードリンクはこちら<br><br></a>
            <p class="download__page__apply__form__afterSend__sentence">また、ご入力いただいたメールアドレスの方へもダウンロードリンクを送付しておりますので、ご確認いただけますと幸いです。</p>
          </div>
          </form>
      </div>

    </div>


    <?php get_footer(); ?>