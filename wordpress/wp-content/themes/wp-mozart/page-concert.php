<?php /* Template Name: Concert Page */ get_header(); ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <?php if ( has_post_thumbnail()) { ?>
        <div class="image-block"><img src="<?php echo the_post_thumbnail_url('full'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"  class="img-responsive center-block"></div>
      <?php }  ?>
      <!-- content -->
      <div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>

        <div class="container">
          <div class="text-block">
            <div class="title"><?php the_title(); ?></div>
            <p class="text-big"></p>
          </div>
          <!-- item-nav -->
          <?php /* ?>
          <ul class="item-nav text-center clearfix">
            <li><a href="#"><span class="sprites i-arrow-prev"></span>September</a></li>
            <li><a href="#">October<span class="sprites i-arrow-next"></span></a></li>
          </ul>
          <?php */ ?>
          <!-- /item-nav -->
          <div class="row">

            <?php query_posts("showposts=12&post_type=concert"); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="col-sm-4">
                <!-- item-block -->
                <div class="item-block">
                  <a href="<?php the_permalink(); ?>"><img src="<?php echo the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>" class="img-responsive center-block"></a>
                  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <div class="row">
                    <div class="col-md-7 col-sm-12 col-xs-7">
                      <p><?php the_field('date_week_day'); ?>, <?php the_field('date_month'); ?> <span class="text-big"><?php the_field('date_day'); ?>,</span> <span class="text-big"><?php the_field('time'); ?></span><?php the_field('time_am__pm'); ?> </p>
                      <p><?php the_field('place'); ?></p>
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-5"><a data-toggle="modal" href="#tickets" class="btn">Buy tickets</a></div>
                  </div>
                  <p class="text-small"><a href="<?php the_permalink(); ?>">More info</a></p>
                </div>
                <!-- /item-block -->
              </div>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>


          </div>
        </div>

      </div>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>
