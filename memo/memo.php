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