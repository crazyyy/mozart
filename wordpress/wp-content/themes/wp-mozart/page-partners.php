<?php /* Template Name: Partners Page */ get_header(); ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <?php if ( has_post_thumbnail()) { ?>
        <div class="image-block"><img src="<?php echo the_post_thumbnail_url('full'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"  class="img-responsive center-block"></div>
      <?php }  ?>
      <!-- content -->
      <div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
        <div class="container">
          <!-- text-block -->
          <div class="text-block">
            <div class="title"><?php the_title(); ?></div>
            <?php the_content(); ?>
          </div>

          <ul class="partners-list partners-list-page">
            <?php if( have_rows('partners_sponsors') ): while ( have_rows('partners_sponsors') ) : the_row(); ?>
              <?php $image = get_sub_field('image');  ?>
              <li>
                <a href="<?php the_sub_field('link'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
              </li>
            <?php endwhile; endif; ?>
          </ul>
        </div>
      </div>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>

