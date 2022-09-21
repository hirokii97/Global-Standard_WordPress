<?php get_header(); ?>

    <div class="p-header__top news-top">
      <div class="p-header__top__wrapper">
        <div class="p-header__top__title c-title-type2 c-english-title">NEWS</div>
        <div class="p-header__top__subtitle c-title-type2 c-sub-title p-header__service__subtitle">ニュース</div>
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
    
    <?php if(have_posts()) : ?>

      <div class="news__post">
        <div class="news__post__wrapper">
          <div class="news__post__header">
            <div class="news__post__header__item">

            <?php 
            $category = get_the_category();
            if($category[0]){
              echo ' <div class="news__post__header__item__category c-category-tag">' . $category[0]->cat_name . '</div>';
            } 
            ?>

              <time class="news__post__header__item__date c-date-font" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>

            </div>
            <div class="news__post__header__title"><?php the_title(); ?></div>
          </div>
          <div class="news__post__image">

          <?php  
              if(has_post_thumbnail()) {
                the_post_thumbnail('large');
              } else {

                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
              }
            ?>

          </div>
          <div class="news__post__contents">

              <?php the_content(); ?>

          <div class="news__post__content__pageNation">

              <?php 

              $prev_post = get_previous_post();
              if( !empty($prev_post)){
                $prev_url = get_permalink($prev_post->ID);
              }

              $next_post = get_next_post();
              if( !empty($next_post)){
                $next_url = get_permalink($next_post->ID);
              }
              
              ?>

            <a class="news__post__content__pageNation-btn" href="
            
            <?php echo $prev_url; ?>

            ">< 前の記事へ</a>


            <a class="news__post__content__pageNation-btn" href="
            
            <?php echo $next_url; ?>
            
            ">次の記事へ ></a>
          </div>
        
        </div>
      </div>
      
      <?php endif; ?>
      
      <?php get_sidebar(); ?>
      
    </div>
    
    <?php get_footer() ;?>