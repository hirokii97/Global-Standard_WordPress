
var swiper = new Swiper('.swiper-container', {
  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
  loop: true,
  pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
  },
  autoplay: {
      delay: 5000,
      disableOnInteraction: true
  },
});


//drawer
jQuery(function() {
  //処理を書く部分
  jQuery(".header-hamburger-item").click(function () {//ボタンがクリックされたら
    jQuery(this).toggleClass('active');//ボタン自身に activeクラスを付与し
      jQuery(".header-drawer-nav").toggleClass('active');//ナビゲーションにactiveクラスを付与
  });
  
  jQuery(".header-drawer-nav a").click(function () {//ナビゲーションのリンクがクリックされたら
      jQuery(".header-hamburger-item").removeClass('active');//ボタンの activeクラスを除去し
      jQuery(".header-drawer-nav").removeClass('active');//ナビゲーションのactiveクラスも除去
  });
});
  
  
  
  //トップに戻る
  // .to-top-btnをクリックした際の設定
  jQuery('.to-top-btn').click(function () {
    jQuery('body,html').animate({
      scrollTop: 0//ページトップまでスクロール
    }, 500);//ページトップスクロールの速さ。数字が大きいほど遅くなる
    return false;//リンク自体の無効化
  });
  

//アコーディオンをクリックした時の動作
jQuery(".service__question-card").on("click", function(){
  jQuery(this).find(".service__question-box-title").toggleClass("active")//質問分が赤くなる
  jQuery(this).find(".service__question-box-btn").toggleClass("active")//「+」から「×」に変化
  jQuery(this).find(".service__question-card-answer").slideToggle(500);//回答文が現れる
})


//資料ダウンロード完了メッセージ
jQuery(document).ready(function () {
  
  jQuery('#form').submit(function (event) {
    var formData = jQuery('#form').serialize();
    jQuery.ajax({
      url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLSdKls0LPq9U7Q1I2Ef3eYspg8HJlMCEApTPtbquv1wd-380wg/formResponse",
      data: formData,
      type: "POST",
      dataType: "xml",
      statusCode: {
        0: function () {
          jQuery(".download__page__apply__form__afterSend").slideDown();
          jQuery(".c-form__wrapper").fadeOut();
          jQuery('html,body').animate({scrollTop:jQuery('#form').position().top})
          //window.location.href = "thanks.html";
        },
        // 200: function () {
        //   jQuery(".false-message").slideDown();
        // }
      }
    });
    event.preventDefault();
  });

});


//お問い合わせ完了メッセージ
jQuery(document).ready(function () {

  jQuery('#form').submit(function (event) {
    var formData = jQuery('#form').serialize();
    jQuery.ajax({
      url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLSeczX8zlGmozQRuF7nC3DOBJMcKGd-U8OpLTiVnoDBg99BZZQ/formResponse",
      data: formData,
      type: "POST",
      dataType: "xml",
      statusCode: {
        0: function () {
          jQuery(".contact__page__apply__form__afterSend").slideDown();
          jQuery(".contact__sended").slideDown();
          jQuery(".c-form__wrapper").fadeOut();
          jQuery(".contact__page__detail ").fadeOut();
          jQuery('html,body').animate({scrollTop:jQuery('.header').position().top})
          //window.location.href = "thanks.html";
        },
        // 200: function () {
        //   jQuery(".false-message").slideDown();
        // }
      }
    });
    event.preventDefault();
  });

});


//selectが requiredじゃない場合はjQueryを使う↓

// <select class="is-empty"></select>としておく
// jQuery(function(jQuery){
//   const Target = jQuery('.is-empty');
//   jQuery(Target).on('change', function(){
//     if (jQuery(Target).val() !== "選択してください"){
//       jQuery(this).removeClass('is-empty');
//     } else {
//       jQuery(this).addClass('is-empty');
//     }
//   });
// });

