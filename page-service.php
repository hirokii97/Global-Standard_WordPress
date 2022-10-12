<?php get_header(); ?>

    <div class="p-header__top service-top">
      <div class="p-header__top__wrapper">
        <div class="p-header__top__title c-title-type2 c-english-title">SERVICE</div>
        <div class="p-header__top__subtitle c-title-type2 c-sub-title p-header__service__subtitle">サービス</div>
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

    <div class="service__page">
      <div class="service__main">
        <div class="service__main__sentence">

        <?php if(have_posts()): ?>
          <?php the_content(); ?>
          <?php endif; ?>


        </div>
        <div class="service__main__page">

          <!-- 研修コース（タクソノミー）別で記事を表示（ループ） -->

          <!-- id取得 -->

          <?php 
            $args = array(
              'post_type' => 'service',//サービス（固定ページ）のpost-type
              'term' => 'slug',
              'posts_per_page' => -1,
              'no_found_rows' => true,
              );
              $query = new WP_Query($args); ?>

          <?php if($query->have_posts()):  ?> 
          <?php while ( $query->have_posts() ) : $query->the_post();?>

          <div class="service__main__section" id="<?php echo $query->current_post+1 ?>">

            <div class="service__section__card">
              <div class="service__card-title-section">

                <!-- 研修名 -->
                <div class="service__card-title-section-title">


                <?php if(get_field('service_name')): ?>
                <?php the_field('service_name') ?>
                <?php endif; ?>

                <!-- 研修名（英語） -->
                </div>
                <div class="service__card-subtitle c-english-title">

                <?php if(get_field('service_name_english')): ?>
                <?php the_field('service_name_english') ?>
                <?php endif; ?>

                </div>
              </div>

              <!-- 研修内容 -->
              <div class="service__card-sentence">

              <?php if(get_field('service_contents')): ?>
                <?php the_field('service_contents') ?>
                <?php endif; ?>


              </div>
              <div class="service__card-table">
                <div class="service__card-table-row">

                  <div class="service__card-table-tag">対象</div>
                  <div class="service__card-table-detail">

                  <?php if(get_field('target')): ?>
                <?php the_field('target') ?>
                <?php endif; ?>


                  </div>
                </div>

                <div class="service__card-table-row">
                  <div class="service__card-table-tag">費用</div>
                  <div class="service__card-table-detail">

                <?php if(get_field('cost')) :?>
                <?php the_field('cost') ?>
                <?php endif; ?>

                  </div>
                </div>
              </div><a class="service__card-apply c-apply-btn" href="<?php echo home_url('/contact'); ?>">お申し込みはこちら</a>
            </div>
          </div>

          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>

        </div>


        <div class="service__main__flow">

          <?php 
            $args = array(
              'post_type' => 'flow',//カスタム投稿タイプ「導入の流れ」
              'term' => 'slug',
              'posts_per_page' => -1,//全記事を出力
              'no_found_rows' => true,//SQLの動作を早くする
            );
            $query = new WP_Query($args); ?>


          <div class="service__flow-wrapper">
            <div class="service__flow-title">導入の流れ</div>
            
            <div class="service__flow-boxes">
              
              <?php if($query->have_posts()):  ?> 
              <?php while ( $query->have_posts() ) : $query->the_post();?>

              <div class="service__flow-box">
                <div class="service__flow-stepBox step<?php echo $query->current_post+1 ?>">
                  <div class="stepBox-step c-english-title">STEP</div>
                  <div class="stepBox step-number c-english-title"><?php the_content(); ?>
                  </div>
                </div>
                <div class="service__flow-contents-wrapper">
                  <div class="service__flow-contents background-step<?php echo $query->current_post+1 ?> contents-step<?php echo $query->current_post+1 ?>">
                    <div class="service__flow-content">
                      <div class="service__flow-content-title">

                      <?php if( get_field( 'title')):?>
                      <?php the_field( 'title'); ?>
                      <?php endif; ?>

                      </div>
                      <div class="service__flow-content-sentence">

                      <?php if( get_field( 'content')):?>
                      <?php the_field( 'content'); ?>
                      <?php endif; ?>

                      </div>
                    </div>
                  </div>
                  <div class="service__flow-spArrow">
                    <div class="service__flow-spArrow-first step<?php echo $query->current_post+1 ?>"></div>
                    <div class="service__flow-spArrow-second step<?php echo $query->current_post+1 ?>"></div>
                  </div>
                </div>
              </div>

              <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>

            </div>

          </div>

        </div>

        <div class="service__main__question">
          <div class="service__question-title">よくある質問</div>

          <div class="service__question-wrapper">

            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

            <?php $field_group = SCF::get( 'faq' ); ?>
            <?php foreach ( $field_group as $fields ) :?>

            <a class="service__question-card">
              <div class="service__question-box">
              <!-- 質問 -->
                <div class="service__question-box-title">
                
                <?php echo nl2br(esc_html( $fields['question'] )) ;?>
                
                </div>
                <div class="service__question-box-btn"></div>
              </div>

              <!-- 回答 -->
              <div class="service__question-card-answer">

              <?php echo nl2br(esc_html( $fields['answer'] )) ;?>

              </div>
            </a>

            <?php endforeach; ?>
            <?php endwhile; ?> 
            <?php endif; ?>

           </div>

        </div>
      </div>

    </div>


    <?php get_footer(); ?>