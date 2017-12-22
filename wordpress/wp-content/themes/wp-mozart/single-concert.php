<?php get_header(); ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <?php if ( has_post_thumbnail()) { ?>
        <div class="image-block"><img src="<?php echo the_post_thumbnail_url('full'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"  class="img-responsive center-block"></div>
      <?php }  ?>
      <!-- content -->
      <div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
        <div class="container">
          <div class="text-block">
            <div class="title"><?php the_title(); ?></div>
            <div class="text-big">
              <p><?php the_field('date_full'); ?>
              <br><span class="text-green"><?php the_field('place_full'); ?></span></p>
              <?php the_content(); ?>
            </div>
          </div>
          <p class="text-big title-ticket"><b>Ticket booking:</b></p>
          <!-- ticket-block -->
          <div class="ticket-block">
            <div class="clearfix">
              <?php $image = get_field('ticket_image'); ?>
              <div class="ticket-image"><img src="<?php echo $image['url']; ?>" alt="" class="img-responsive center-block"></div>
              <div class="ticket-text">
                <p><?php the_field('date_week_day'); ?>, <?php the_field('date_month'); ?> <?php the_field('date_day'); ?> , <?php the_field('time'); ?> <?php the_field('time_am__pm'); ?>
                  <br> <span class="text-green"><?php the_field('place'); ?></span></p>
                <div class="wrap-tickets">
                  <div class="text-small text-grey">TICKETS</div>
                  <ul class="tickets-list">
                    <?php if( have_rows('tickets') ): while ( have_rows('tickets') ) : the_row(); ?>
                      <li><span><?php the_sub_field('name'); ?></span><span class="pull-right">$<?php the_sub_field('price'); ?></span></li>
                    <?php endwhile; endif; ?>
                  </ul>
                  <p><a data-toggle="modal" href="#tickets" class="btn btn-big">Buy tickets</a></p>
                </div>
              </div>
            </div>
          </div>
          <!-- /ticket-block -->
        </div>

      </div>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>
