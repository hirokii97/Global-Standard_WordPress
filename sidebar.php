<sidebar class="sidebar"><div class="sidebar-titile">新着記事</div>

        <div class="newPost__page__wrapper">

        <?php
            $args = array(
              'posts_per_page' => 5 // 表示件数の指定
            );
            $posts = get_posts( $args );
            foreach ( $posts as $post ): // ループの開始
            setup_postdata( $post ); // 記事データの取得
          ?>

          <a class="newPost__page__content" href=" <?php the_permalink() ?> ">
            <div class="newPost__page__content__image">
              
            <?php  
              if(has_post_thumbnail()) {
                the_post_thumbnail('large');
              } else {

                echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
              }
            ?>
          
          </div>
            <div class="newPost__page__content__about">
              <div class="newPost__page__content__bar">
                
                  <!-- カテゴリー -->
                  <?php 
                  $category = get_the_category();
                  if($category[0]){
                    echo '<div class="newPost__content__bar__category c-category-tag c-sidebar-category-tag">' . $category[0]->cat_name . '</div>';
                  }
                ?>

                <!-- 公開日時を動的に表示する -->
                <time class="newPost__content__bar__date c-date-font" datetime="<?php the_time('c'); ?>"><?php the_time('Y.n.j'); ?></time>

              </div>
              <div class="newPost__page__content__title"><?php the_title(); ?></div>
            </div>
          </a>

          <?php endforeach;  wp_reset_postdata();?>

        </div>

        <div class="sidebar__category">
          <div class="sidebar__category__title">カテゴリ</div>

          <?php 
              $categories = get_categories();
              foreach ($categories as $category) :
          ?>

          <div class="sidebar__category__box">
            <div class="sidebar__category__box__mark">
              <img src="<?php echo get_template_directory_uri()?>/assets/img/icon-chevron-right02.png">
            </div>

              <?php 
              echo '<a class="sidebar__category__box__text" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
              ?>
          </div>

          <?php endforeach; ?>
            
        </div>
      </sidebar>