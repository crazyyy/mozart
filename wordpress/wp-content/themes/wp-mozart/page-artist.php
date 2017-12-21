<?php /* Template Name: Artist Page */ get_header(); ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <?php if ( has_post_thumbnail()) { ?>
        <div class="image-block"><img src="<?php echo the_post_thumbnail_url('full'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"  class="img-responsive center-block"></div>
      <?php }  ?>
      <!-- content -->
      <div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
        <div class="container">
          <div class="title"><?php the_title(); ?></div>

          <?php the_content(); ?>

          <div class="title-border title title-small"><span>Our Musicians</span></div>

          <?php $i = 0; if( have_rows('artists') ): while ( have_rows('artists') ) : the_row(); ?>
            <!-- artist-block -->
            <div class="artist-block">
              <?php $image = get_sub_field('image'); ?>

              <?php if( !empty($image) ): ?>
                <?php if(( $i == 0 ) || ( $i == 2 ) || ( $i == 4 ) || ( $i == 6 ) || ( $i == 8 )) { ?>
                  <div class="artist-block-image"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive center-block"></div>
                <?php } else { ?>
                  <div class="artist-block-image visible-xs"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive center-block"></div>
                <?php } ?>
              <?php endif; ?>

              <div class="artist-block-text">
                <div class="title title-small"><?php the_sub_field('title'); ?> <span class="artist-type"><?php the_sub_field('type'); ?></span></div>
                <?php the_sub_field('description'); ?>
              </div>

              <?php if( !empty($image) ): ?>
                <?php if(( $i == 0 ) || ( $i == 2 ) || ( $i == 4 ) || ( $i == 6 ) || ( $i == 8 )) { } else { ?>
                  <div class="artist-block-image hidden-xs"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive"></div>
                <?php } ?>
              <?php endif; ?>

            </div>
            <!-- /artist-block -->
          <?php $i++; endwhile; endif; ?>


          <div class="title-border title title-small title-border-margin-small"><span>Guest Artists</span></div>
          <!-- artist-block -->
          <div class="artist-block">
            <?php $image = get_field('guest_artist_image'); if( !empty($image) ): ?>
              <div class="artist-block-image visible-xs"><img src="<?php echo $image['url']; ?>" alt="" class="img-responsive center-block"></div>
            <?php endif; ?>
            <div class="artist-block-text">
              <div class="title title-small"><?php the_field('guest_artist_title'); ?></div>
              <?php the_field('guest_artist_description'); ?>
            </div>
            <?php $image = get_field('guest_artist_image'); if( !empty($image) ): ?>
              <div class="artist-block-image hidden-xs"><img src="<?php echo $image['url']; ?>" alt="" class="img-responsive"></div>
            <?php endif; ?>
          </div>
          <!-- /artist-block -->
        </div>

      </div>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>




