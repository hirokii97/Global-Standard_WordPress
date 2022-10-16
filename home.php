<?php get_header(); ?>

    <div class="p-header__top news-top">
      <div class="p-header__top__wrapper">
        <div class="p-header__top__title c-title-type2 c-english-title">NEWS</div>
        <div class="p-header__top__subtitle c-title-type2 c-sub-title p-header__service__subtitle">ニュース</div>
      </div>
    </div>
    <!--パンくずリスト-->
    <div class="header-breadcrumbs l-inner">
      <a class="header-breadcrumbs-home" href="<?php echo home_url('/') ?>">ホーム</a>
      <div class="header-breadcrumbs-arrow">＞</div>
      <div class="header-breadcrumbs-firstTitle">ニュース</div>
    </div>


    <div class="news__page">
      <div class="news__page__front">

        <div class="news__page__front-title">ニュース</div>

       

        <?php 
          if(have_posts()):?>

        <div class="news__page__wrapper">

          <?php while(have_posts()): the_post(); ?>
            
            <a class="news__page__content" href=" <?php the_permalink() ?> ">
            <div class="news__page__content__image">
            
            <?php  
              if(has_post_thumbnail()) {
                the_post_thumbnail('large');
              } else {

                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="画像データがない場合に記載する画像">';
              }
            ?>
            
          </div>
            <div class="news__page__content__about">
              <div class="news__page__content__bar">

                <?php 

                $category = get_the_category();
                if($category[0]){
                  echo '<div class="news__content__bar__category c-category-tag c-front-category-tag">' . $category[0]->cat_name . '</div>';
                } 
                
                ?>

              <div class="news__content__bar__new c-new-mark">
              
              <?php 
                
                  // $post_time = get_the_time('U');
                  // $days = 1; //New!を表示させる日数
                  // $last = time() - ($days * 24 * 60 * 60);

                  // if ($post_time > $last) {
                  // echo 'NEW';
                  // }

                  $limit = 2;
                  $num = $wp_query->current_post;
                  if ( $limit > $num ):
                    echo 'NEW';
                  endif;
                ?>
                </div>

                <time class="news__content__bar__date c-front-new-mark c-date-font" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>
              </div>
              <div class="news__page__content__title"><?php the_title(); ?></div>
            </div>
          </a>

          
          <?php endwhile; ?>
          

         <?php if(paginate_links()):?>

          <div class="news__page__pageNation">

            <?php 

              echo paginate_links(
                  array(
                    'end_size' => 0,
                    'mid_size' => 1,
                    'prev_next' => true,
                    'prev_text' => '<img src="'.  get_template_directory_uri() . '/assets/img/icon-chevron-left.png">',
                    'next_text' => '<img src="'.  get_template_directory_uri() . '/assets/img/icon-chevron-right.png">',
                  ));

            ?>
              
            </div>

            <?php endif; ?>

        </div>
        
        <?php endif; ?>
        
      </div>

      <?php get_sidebar(); ?>
    
    </div>

    <?php get_footer() ;?>