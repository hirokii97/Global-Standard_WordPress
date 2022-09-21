<?php
/**
 * Archive Work
 */

get_header(); ?>

<div class="p-header__top news-top">
      <div class="p-header__top__wrapper">
        <div class="p-header__top__title c-title-type2 c-english-title">CASE STUDY</div>
        <div class="p-header__top__subtitle c-title-type2 c-sub-title p-header__service__subtitle">導入事例</div>
      </div>
    </div>
    <!--パンくずリスト-->
    <?php 
      if(function_exists('bcn_display')):
    ?>
    <div class="header-breadcrumbs l-inner">
      <?php bcn_display(); ?>
      <!-- <div class="header-breadcrumbs-home">ホーム</div>
      <div class="header-breadcrumbs-arrow">＞</div>
      <div class="header-breadcrumbs-firstTitle">ニュース</div> -->
    </div>
    <?php endif; ?>


    <div class="caseStudy__page">

      <div class="caseStudy__page__tab">

      <?php 
      
        $courses_terms = get_terms('course', array('hide_empty' => false));//空の投稿でもメニューは表示
        foreach ($courses_terms as $courses_term):  

        ?>

        <a class="caseStudy__page__tab__item" href="#<?php echo $courses_term->slug ?>"><?php echo esc_html( $courses_term->name ) ?></a>
        <!-- <a class="caseStudy__page__tab__item" href="#section2">異文化コミュニケーション</a>
        <a class="caseStudy__page__tab__item" href="#section3">ビジネス留学プログラム</a> -->

        <?php endforeach; ?>
      </div>
      
      
      <div class="caseStudy__page__wrapper">
        
      <?php 
      
      $courses_terms = get_terms('course', array('hide_empty' => false));//空の投稿でもメニューは表示
        foreach ($courses_terms as $courses_term):  

        ?>
            
            <!--ビジネス英語研修-->
            <div class="caseStudy__page__content">
              <div class="caseStudy__page__content__title" id="<?php echo $courses_term->slug ?>">
                <div class="caseStudy__page__content__mainTitle"><?php echo esc_html( $courses_term->name ) ?></div>
                <div class="caseStudy__page__content__subTitle c-english-title"><?php echo $courses_term->description ?>  </div>
          </div>
          <div class="caseStudy__page__content__cards">
            <div class="caseStudy__page__content__card">
              <!--header-->
              <div class="caseStudy__page__content__card__header"> 
                <div class="caseStudy__page__content__card__header-category">
                  
                <?php if( get_field( 'business_type' )):?>
                <?php the_field( 'business_type' ); ?>
                <?php endif; ?>
              
              </div>
                <div class="caseStudy__page__content__card__header-company">
                  
                <?php if( get_field( 'company' )):?>
                <?php the_field( 'company' ); ?>
                <?php endif; ?>
                
                <span>様</span></div>
              </div>
              <div class="caseStudy__page__content__card__header-image"> <img src="../assets/img/img-case01.png" alt=""></div>
              <div class="caseStudy__page__content__card__detail">
                <div class="caseStudy__page__content__card__course">
                  <div class="caseStudy__page__content__card__course-item">研修コース：</div>
                  <div class="caseStudy__page__content__card__course-item courseName"><?php echo esc_html( $courses_term->name ) ?></div>
                </div>
                <!--研修の目的-->
                <div class="caseStudy__page__content__card__item">
                  <div class="caseStudy__page__content__card__item-title">
                    <div class="caseStudy__page__content__card__item-titleMark"> <img src="../assets/img/icon-check.png" alt=""></div>
                    <div class="caseStudy__page__content__card__item-titleName">研修の目的</div>
                  </div>
                  <div class="caseStudy__page__content__card__item-sentence">

                  <?php if( get_field( 'purpose' )): ?>
                  <?php the_field( 'purpose' ); ?>
                  <?php endif; ?>


                  </div>
                </div>
                <!--選んだ理由-->
                <div class="caseStudy__page__content__card__item">
                  <div class="caseStudy__page__content__card__item-title">
                    <div class="caseStudy__page__content__card__item-titleMark"> <img src="../assets/img/icon-check.png" alt=""></div>
                    <div class="caseStudy__page__content__card__item-titleName">選んだ理由</div>
                  </div>
                  <div class="caseStudy__page__content__card__item-sentence">

                  <?php if( get_field( 'reason' )): ?>
                  <?php the_field( 'reason' ); ?>
                  <?php endif; ?>


                  </div>
                </div>
                <!--導入後の成果・効果-->
                <div class="caseStudy__page__content__card__item">
                  <div class="caseStudy__page__content__card__item-title">
                    <div class="caseStudy__page__content__card__item-titleMark"> <img src="../assets/img/icon-check.png" alt=""></div>
                    <div class="caseStudy__page__content__card__item-titleName">導入後の成果・効果</div>
                  </div>
                  <div class="caseStudy__page__content__card__item-sentence">

                  <?php if( get_field( 'result' )): ?>
                  <?php the_field( 'result' ); ?>
                  <?php endif; ?>


                  </div>
                </div>
              </div>
            </div>

          </div>
          <a class="caseStudy__page__btn c-apply-btn"><?php echo esc_html( $courses_term->name ) ?>の詳細 </a>
          
          <?php endforeach; ?>
          
        </div>
        
        
      </div>
      
    </div>
      
      
<?php get_footer(); ?>