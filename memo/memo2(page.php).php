<?php get_header(); ?>

    <div class="p-header__top about-top">
      <div class="p-header__top__wrapper">
        <div class="p-header__top__title c-title-type2 c-english-title">ABOUT US</div>
        <div class="p-header__top__subtitle c-title-type2 c-sub-title">当社について</div>
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

    
    <div class="about__page">
      <div class="about__main">
        <div class="about__main__card">
          <div class="about__main__head head-mission l-inner">
            <div class="about__main__text"> 
              <div class="about__main__title c-english-title">MISSION</div>
              <div class="about__main__subtitle c-sub-title">社会的使命</div>
            </div>
            <div class="about__main__contents l-inner">
              <div class="about__main__concept">人財育成を通じて、<br class="br-sp">豊かな世界を創造する</div>
              <div class="about__main__sentence">急速に広がったグローバル社会に対応できる人材を育成することで、文化・言語の垣根を越えたコミュニケーションを活発にし、一人でも多くの人が豊かに暮らせる世界を実現することを使命とする。</div>
            </div>
          </div>
        </div>
        <div class="about__main__card">
          <div class="about__main__head head-vision l-inner">
            <div class="about__main__text"> 
              <div class="about__main__title c-english-title">VISION</div>
              <div class="about__main__subtitle c-sub-title">企業理念</div>
            </div>
            <div class="about__main__contents l-inner">
              <div class="about__main__concept">文化の垣根を越えた <br class="br-pc">人と人とのつながりが新しい価値を生む</div>
              <div class="about__main__sentence">コミュニケーションスキル習得をサポートすることで一人でも多くのビジネスパーソンの視野を広げ、世界を舞台に新しい相乗効果を生む未来を創造する。文化の垣根を越えた人と人とのつながりが新しい価値を生むことを信念とする。</div>
            </div>
          </div>
        </div>
      </div>


      <div class="about__company">

      <?php if(have_posts()): the_post(); ?>


        <div class="about__company__form"> 
          <div class="about__company__title">会社概要</div>
          <div class="about__company__contents">


            <div class="about__company-card">
              <div class="about__company-cardContents">

                <div class="about__company-tag">代表</div>
                <div class="about__company-about">

                <?php if( get_field( 'leader')):?>
                <?php the_field( 'leader'); ?>
                <?php endif; ?>

                </div>
              </div>
            </div>

            <div class="about__company-card">
              <div class="about__company-cardContents">

                <div class="about__company-tag">事業内容</div>
                <div class="about__company-about">

                <?php if( get_field( 'business')):?>
                <?php the_field( 'business'); ?>
                <?php endif; ?>

                </div>
              </div>
            </div>

            <div class="about__company-card">
              <div class="about__company-cardContents">
                <div class="about__company-tag">設立</div>

                <div class="about__company-about">

                <?php if( get_field( 'foundation')):?>
                <?php the_field( 'foundation'); ?>
                <?php endif; ?>


                </div>
              </div>
            </div>
            <div class="about__company-card">
              <div class="about__company-cardContents">
                <div class="about__company-tag">所在地</div>
                <div class="about__company-about">

                <?php if( get_field( 'address')):?>
                <?php the_field( 'address'); ?>
                <?php endif; ?>


                </div>
              </div>
            </div>

            <div class="about__company-card">
              <div class="about__company-cardContents">
                <div class="about__company-tag">TEL</div>
                <div class="about__company-about">

                <?php if( get_field( 'tel')):?>
                <?php the_field( 'tel'); ?>
                <?php endif; ?>

                </div>
              </div>
            </div>

            <div class="about__company-card">
              <div class="about__company-cardContents">
                <div class="about__company-tag">FAX</div>
                <div class="about__company-about">

                <?php if( get_field( 'fax')):?>
                <?php the_field( 'fax'); ?>
                <?php endif; ?>


                </div>
              </div>
            </div>

            <div class="about__company-card">
              <div class="about__company-cardContents">
                <div class="about__company-tag">E-mail</div>
                <div class="about__company-about">

                <?php if( get_field( 'e-mail')):?>
                <?php the_field( 'e-mail'); ?>
                <?php endif; ?>


                </div>
              </div>
            </div>
          </div>
        </div>

        <?php endif; ?>

      </div>



      <div class="about__member">
        <div class="about__member__form"> 
          <div class="about__member__title">役員紹介</div>

          
          <!-- 研修コース（タクソノミー）別で記事を表示（ループ） -->
          <?php 
            $args = array(
              'post_type' => 'officer',//役員紹介のpost-type
              'term' => 'slug',
              'posts_per_page' => -1,
              'no_found_rows' => true,
              );
              $query = new WP_Query($args); ?>

          <?php if($query->have_posts()):  ?> 
          <?php while ( $query->have_posts() ) : $query->the_post();?>

          <div class="about__member__contents">
            <div class="about__member-image">
              
              <?php if(has_post_thumbnail()){
                the_post_thumbnail('large');
              } else {
                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
              }
              ?>
            </div>

            <div class="about__member-card">
              <div class="about__name__card">

                <div class="about__position">
                <?php if( get_field( 'officer')):?>
                <?php the_field( 'officer'); ?>
                <?php endif; ?>
                </div>

                <div class="about__name">
                <?php if( get_field( 'name')):?>
                <?php the_field( 'name'); ?>
                <?php endif; ?>
                </div>

              </div>

              <div class="about__member-sentence">

              <?php if( get_field( 'career')):?>
              <?php the_field( 'career'); ?>
              <?php endif; ?>

              </div>

              <div class="about__member-sns">

                <a class="member-sns twitter" href="<?php  
                if( get_field( 'twitter')){
                  the_field( 'twitter');
                }
                ?>">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-twitter.png" alt="">
                </a>

                <a class="member-sns facebook" href=<?php  
                if( get_field( 'facebook')){
                  the_field( 'facebook');
                }
                ?>>
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-facebook.png" alt="">
                </a>

                <a class="member-sns instagram" href=<?php  
                if( get_field( 'instagram')){
                  the_field( 'instagram');
                }
                ?>>
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-instagram.png" alt="">
                </a>
              </div>
            </div>
          </div>

          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>

        </div>
      </div>
    </div>

    <?php get_footer(); ?>