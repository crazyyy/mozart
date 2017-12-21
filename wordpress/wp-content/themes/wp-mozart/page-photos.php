<?php /* Template Name: Photos Page */ get_header(); ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <?php if ( has_post_thumbnail()) { ?>
        <div class="image-block"><img src="<?php echo the_post_thumbnail_url('full'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"  class="img-responsive center-block"></div>
      <?php }  ?>
      <!-- content -->
      <div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
        <div class="container">
          <div class="title"><?php the_title(); ?></div>

          <?php query_posts("showposts=10&post_type=photos"); ?>
            <div class="row wrap-gallery mobile-row">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-sm-4 col-xs-6">
                  <div class="block">
                    <a href="<?php the_permalink(); ?>" class="lightbox" title="<?php the_title(); ?>"><img src="<?php echo the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" class="img-responsive center-block"></a>
                    <div class="block-description block-description-padding">
                      <h4><?php the_title(); ?></h4>
                      <p><?php the_field('date'); ?></p>
                      <p><?php the_field('place'); ?></p>
                    </div>
                  </div>
                </div>
              <?php endwhile; endif; ?>
            </div>
          <?php wp_reset_query(); ?>

        </div>
      </div>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>
