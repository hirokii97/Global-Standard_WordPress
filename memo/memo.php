//1

<?php 
          
          $args = array(
            'post_type' => 'custom-post',// カスタム投稿タイプ名の指定
            'post_per_page' => -1, // 投稿の取得数の指定 通常10件　-1で全件
            'order' => 'DESC', // 投稿の表示順の指定
            array(
              'taxonomy' => 'cat-name'//カスタムタクソノミー
              'terms' => array('course'),

            )
          )
          
          ?>


<?php if( $the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>


//2
<?php 
          
          $tax_name = 'course';
          $postType_name = 'custom-post';
          $terms = get_terms($tax_name);
          foreach ( $terms as $term ):
        
            $args = array(
              'post_type' => $postType_name,
              'tax_query' => array(
                array(
                  'taxonomy' => $tax_name,
                  'field'    => 'slug',
                  'terms'    => $term->slug,
                ),
              ),
            );
            $the_query = new WP_Query( $args );

          ?>

<?php endwhile; endforeach; endif; wp_reset_postdata(); ?>


//3
<?php // タクソノミー(カテゴリ)別に記事を一覧出力
              $terms = get_terms( 'group_632ad43059110' );
              foreach ( $terms as $term ) :
                  $args = array(
                      'post_type' => 'group_632ad43059110',//導入事例のslug名
                      'taxonomy' => 'course',
                      'term' => $term->slug,
                      'posts_per_page' => -1,
                      'no_found_rows' => true,
                      );

                  $query = new WP_Query($args); ?>

            <?php if( $query->have_posts()): while ( $query->have_posts()): $query->the_post(); ?>


            <?php endwhile; wp_reset_postdata(); endif; endforeach;  ?>



            <!-- contactForm -->

            <div class="c-form__wrapper">
            <div class="download__page__apply__form__title c-form__title">資料ダウンロード</div>
            <div class="download__form__content c-form__content">
              <div class="download__form__content__tag c-form__content__tag">会社名</div>
              <div class="download__form__content__box c-form__content__box">
                [text text-company placeholder "例）○○株式会社"]
              </div>
            </div>
            <div class="download__form__content c-form__content">
              <div class="download__form__content__tag c-form__content__tag">部署</div>
              <div class="download__form__content__box c-form__content__box"> 
                [text text-team placeholder "例）人事部"]
              </div>
            </div>
            <div class="download__form__content c-form__content">
              <div class="download__form__content__tag c-form__content__tag">お名前</div>
              <div class="download__form__content__tag__requiredTag c-form__content__requiredTag">必須</div>
              <div class="download__form__content__box c-form__content__box"> 
                [text* your-name placeholder "例）鈴木　一郎" ]
              </div>
            </div>
            <div class="download__form__content c-form__content">
              <div class="download__form__content__tag c-form__content__tag">お名前（フリガナ）</div>
              <div class="download__form__content__tag__requiredTag c-form__content__requiredTag">必須</div>
              <div class="download__form__content__box c-form__content__box"> 
                [text* your-subname placeholder "例）スズキ　イチロウ" ]

              </div>
            </div>
            <div class="download__form__content c-form__content">
              <div class="download__form__content__tag c-form__content__tag">メールアドレス</div>
              <div class="download__form__content__tag__requiredTag c-form__content__requiredTag">必須</div>
              <div class="download__form__content__box c-form__content__box"> 
                [email* your-email placeholder "例）info@example.com"]
              </div>
            </div>
            <div class="download__page__apply__form__check c-form__check">

[checkbox checkbox-374 ""]

             <a class="download__page__apply__form__check c-form__check__detail">個人情報保護方針</a>
              <div class="download__page__apply__form__check c-form__check__sentence">に同意します。</div>
            </div>
            <div class="download__page__apply__form__check c-form__sendBtn">

　　　　　　　[submit class:c-apply-btn class:c-apply-sendBtn " 資料をダウンロードする "]

            </div>
          </div>
          <!--送信後メッセージ-->
          <div class="download__page__apply__form__afterSend">
            <div class="download__page__apply__form__afterSend__title">資料請求いただき<br> ありがとうございました！</div>
            <p class="download__page__apply__form__afterSend__sentence">資料は以下のリンクよりダウンロードください。<br><br></p>
            <p class="download__page__apply__form__afterSend__sentenceArrow">→ </p><a class="download__page__apply__form__afterSend__sentenceLink">資料のダウンロードリンクはこちら<br><br></a>
            <p class="download__page__apply__form__afterSend__sentence">また、ご入力いただいたメールアドレスの方へもダウンロードリンクを送付しておりますので、ご確認いただけますと幸いです。</p>
          </div>









          <div class="footer-menu__address">
            <div class="address-name">〒550-1000 大阪市西区土佐堀9-5-5</div>
            <div class="address-info">
              <div class="address-tell">TEL 06-123-4567</div>
              <div class="address-fax">FAX 06-123-4568</div>
            </div>
          </div>