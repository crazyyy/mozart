<?php /* Template Name: About Page */ get_header(); ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <?php if ( has_post_thumbnail()) { ?>
        <div class="image-block"><img src="<?php echo the_post_thumbnail_url('full'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"  class="img-responsive center-block"></div>
      <?php }  ?>
      <!-- content -->
      <div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
        <div class="container text-big">
          <div class="title"><?php the_title(); ?></div>
          <?php the_content(); ?>
        </div>

        <div class="line line-margin"></div>
        <div class="container">
          <div class="title title-middle text-pink">Press Releases:</div>
          <?php if( have_rows('press_releases') ): while ( have_rows('press_releases') ) : the_row(); ?>
          <!-- release-block -->
          <div class="release-block clearfix blue-block">
            <?php $image = get_sub_field('image');  ?>
            <div class="release-block-image"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive"></div>
            <div class="release-block-text">
              <?php the_sub_field('description'); ?>
              <a href="<?php the_sub_field('read_more_anchor'); ?>"><?php the_sub_field('read_more_title'); ?></a>
            </div>
          </div>
          <!-- /release-block -->
          <?php endwhile; endif; ?>
        </div>
      </div>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>

