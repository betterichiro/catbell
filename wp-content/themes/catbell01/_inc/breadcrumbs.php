<nav>
      <ol class="breadcrumbs">
          <li class="breadcrumbs__item"><a href="<?php echo home_url(); ?>" class="breadcrumbs__link">ホーム</a></li>

          <?php if(is_post_type_archive('blog')) : ?>
          <!-- ブログ一覧 -->
          <li class="breadcrumbs__item">ブログ一覧</li>

          <?php elseif(is_singular('blog')) : ?>
          <!-- ブログ詳細 -->
          <li class="breadcrumbs__item"><a href="<?php echo get_post_type_archive_link('blog'); ?>" class="breadcrumbs__link">ブログ一覧</a></li>
          <li class="breadcrumbs__item"><?php echo the_title(); ?></li>

          <?php elseif(is_page('cat_type')) : ?>
          <!-- 猫種一覧(固定ページ) -->
          <div class="breadcrumbs__item">猫種一覧</div>

          <?php elseif(is_tax('cat_type')) : ?>
          <!-- 猫種詳細一覧(taxonomy.php) -->
          <li class="breadcrumbs__item"><a href="<?php echo get_permalink(get_page_by_path('cat_type')->ID); ?>" class="breadcrumbs__link">猫種一覧</a></li>
          <li class="breadcrumbs__item"><?php echo single_term_title(); ?>の一覧</li>

          <?php elseif(is_tag()) : ?>
          <!-- tag一覧 -->
          <li class="breadcrumbs__item"><a href="<?php echo get_post_type_archive_link('blog'); ?>" class="breadcrumbs__link">ブログ一覧</a></li>
				  <li class="breadcrumbs__item"><?php echo single_term_title(); ?></li>

          <?php endif; ?>
      </ol>
</nav>
