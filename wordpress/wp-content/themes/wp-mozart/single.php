<?php get_header(); ?>

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
      </div>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>
