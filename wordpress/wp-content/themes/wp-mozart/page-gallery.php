<?php /* Template Name: Gallery Page */ get_header(); ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <?php if ( has_post_thumbnail()) { ?>
        <div class="image-block"><img src="<?php echo the_post_thumbnail_url('full'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"  class="img-responsive center-block"></div>
      <?php } ?>
      <!-- content -->
      <div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
        <div class="container">
          <div class="title"><?php the_title(); ?></div>

          <?php $posts = get_field('top_albums'); if( $posts ): ?>
            <div class="row wrap-gallery mobile-row">
              <?php foreach( $posts as $p ): ?>
                <div class="col-sm-4 col-xs-6">
                  <div class="block">
                    <a href="<?php echo get_permalink( $p->ID ); ?>" class="lightbox" title="<?php echo get_the_title( $p->ID ); ?>"><img src="<?php echo get_the_post_thumbnail_url( $p->ID, 'full' ); ?>" alt="<?php echo get_the_title( $p->ID ); ?>" class="img-responsive center-block"></a>
                    <div class="block-description block-description-padding">
                      <h4><?php echo get_the_title( $p->ID ); ?></h4>
                      <p><?php the_field('date', $p->ID); ?></p>
                      <p><?php the_field('place', $p->ID); ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            <p><a href="/photos/" class="btn btn-block btn-grey">See all Alboms</a></p>
          <?php endif; ?>

          <?php $posts = get_field('top_videos'); if( $posts ): ?>
            <div class="row wrap-gallery mobile-row">
              <?php foreach( $posts as $p ): ?>
                <div class="col-sm-4 col-xs-6">
                  <div class="block">
                    <a href="<?php the_field('video_link', $p->ID); ?>" class="lightbox" title="<?php echo get_the_title( $p->ID ); ?>"><img src="<?php echo get_the_post_thumbnail_url( $p->ID, 'full' ); ?>" alt="<?php echo get_the_title( $p->ID ); ?>" class="img-responsive center-block"></a>
                    <div class="block-description">
                      <p><?php the_field('date', $p->ID); ?></p>
                      <p><?php the_field('place', $p->ID); ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
            <p class="wrap-btn"><a href="/photos/" class="btn btn-block btn-grey">See all videos</a></p>
          <?php endif; ?>

          <?php $images = get_field('list_of_featured_photos'); if( $images ): ?>
            <div class="title">Photos</div>
            <div class="row wrap-gallery-photo">
              <?php foreach( $images as $image ): ?>
                <div class="col-sm-3 col-xs-6">
                  <a href="<?php echo $image['url']; ?>" rel="lightbox" title="<?php echo $image['alt']; ?>" class="fancybox gallery-link"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive center-block"></a>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

        </div>
      </div>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>
