<?php get_header(); ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <!-- content -->
      <div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
        <div class="container text-big">
          <div class="title"><?php the_title(); ?></div>
          <p><?php the_field('date', $p->ID); ?></p>
          <p><?php the_field('place', $p->ID); ?></p>

          <?php $images = get_field('gallery'); if( $images ): ?>
            <div class="row wrap-gallery-photo">
              <?php foreach( $images as $image ): ?>
                <div class="col-sm-3 col-xs-6">
                  <a href="<?php echo $image['url']; ?>" rel="lightbox" title="<?php echo $image['alt']; ?>" class="fancybox gallery-link"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive center-block"></a>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
          <?php the_content(); ?>
        </div>
        <div class="line line-margin"></div>
      </div>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>
