<?php get_header(); ?>

    <div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
      <div class="container text-big">
        <div class="title"><?php _e( 'Page not found', 'wpeasy' ); ?></div>
        <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
      </div>
      <div class="line line-margin"></div>
    </div>

<?php get_footer(); ?>
