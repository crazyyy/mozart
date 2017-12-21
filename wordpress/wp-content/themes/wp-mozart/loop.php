<div class="row wrap-gallery mobile-row">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('col-sm-4 col-xs-6'); ?>>
      <div class="block">
        <a href="<?php the_permalink(); ?>" class="lightbox" title="<?php the_title(); ?>">
          <?php if ( has_post_thumbnail()) { ?>
            <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" class="img-responsive center-block" />
          <?php } else { ?>
            <img src="<?php echo catchFirstImage(); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" class="img-responsive center-block" />
          <?php } ?>
        </a>
        <div class="block-description block-description-padding">
          <h4><?php the_title(); ?></h4>
        </div>
      </div>
    </div>
  <?php endwhile; endif; ?>
</div>
