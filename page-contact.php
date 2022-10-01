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
      <div class="contact__page__detail">研修のお申し込み、その他お問い合わせは、下記のフォームからお問い合わせ内容をご記入ください。<br> 2日以内に担当者からメールにてご連絡いたします。 </div>
      <div class="contact__page__apply">

        <!-- <form class="contact__page__apply__form c-form" id="form" action=""> -->
          
          <?php the_content(); ?>

          <!-- <-- 送信後メッセージ -->
          <div class="contact__page__apply__form__afterSend">
            <p class="contact__page__apply__form__afterSend__sentence">お問い合わせありがとうございました。<br> 2日以内に担当者からメールにてご連絡いたしますので、しばらくお待ちいただけますと幸いです。</p>
            <p class="contact__page__apply__form__afterSend__sentenceArrow">→ </p><a class="contact__page__apply__form__afterSend__sentenceLink">トップへ戻る<br><br></a>
          </div>
        <!-- </form> -->
      </div>
    </div>

    <?php get_footer(); ?>