<?php get_header(); ?>


    <div class="p-header__top contact-top">
      <div class="p-header__top__wrapper">
        <div class="p-header__top__title c-title-type2 c-english-title">CONTACT</div>
        <div class="p-header__top__subtitle c-title-type2 c-sub-title p-header__contact__subtitle">お問い合わせ</div>
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


    <div class="contact__page">

        <!-- <form class="wpcf7-form" id="form" action=""> -->

         <!-- <-- 送信後メッセージ -->
          <div class="contact__page__apply__form__afterSend">
            <p class="contact__page__apply__form__afterSend__sentence">お問い合わせありがとうございました。<br> 2日以内に担当者からメールにてご連絡いたしますので、しばらくお待ちいただけますと幸いです。</p>
            <p class="contact__page__apply__form__afterSend__sentenceArrow">→ </p><a class="contact__page__apply__form__afterSend__sentenceLink" href="<?php echo home_url('/') ?>">トップへ戻る<br><br></a>
          </div>
        <!-- </form> -->
      </div>
    </div>

    <?php get_footer(); ?>