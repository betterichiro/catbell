<div class="side">
         <div class="pickup">
                    <h3 class="pickup__topTtl">ピックアップ</h3>

                      <?php
                        $args = array (
                            'post_type' => 'blog', //ポストタイプのスラッグ
                            'order' => 'DESC',
                            'posts_per_page' => 4,
                            'meta_key' => 'blog_pickup', //カスタムフィールドのスラッグ名
                            'meta_value' => 'on', //カスタムフィールドの選択肢のとこ
                            'meta_compare' => 'LIKE'//条件合致
                    );
                    $my_query = new WP_Query($args);
                    if($my_query->have_posts()) :
                        while ($my_query->have_posts()) : $my_query->the_post();
                    ?>
                    <?php if(get_field('blog_pickup')) : ?>
                    <a href="<?php echo the_permalink(); ?>" class="pickup__card">
                        <div class="pickup__img">
                            <img src="<?php echo get_field('blog_img'); ?>" alt="<?php echo the_title(); ?>">
                        </div>
                        <div class="pickup__ttl"><?php echo the_title(); ?></div>
                        <span class="date pickup__date"><?php echo the_time('Y.m.d'); ?></span>
                    </a>
                    <?php endif; endwhile; endif; ?>
                </div>
                <div class="keyword">
                    <h3 class="keyword__topTtl">キーワード</h3>
                    <ul class="keyword__tagItems">
                        <?php
                        $posttags = get_tags();

                            if($posttags) :
                                foreach($posttags as $tag) :
                                  echo '<li class="keyword__tagItem"><a href="'. get_tag_link($tag->term_id) .'" class="tag keyword__tag">' . $tag->name . '</a></li>';
                        ?>

                        <?php endforeach; endif; ?>
                    </ul>
                </div>
            </div>
