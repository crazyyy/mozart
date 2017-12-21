<?php get_header(); ?>

  <div class="content">
    <div class="container">
      <div class="title"><?php _e( 'Latest Posts', 'wpeasy' ); ?></div>

      <?php get_template_part('loop'); ?>
      <?php get_template_part('pagination'); ?>

    </div>
  </div>

<?php get_footer(); ?>
