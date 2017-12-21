<?php /* Template Name: Gift Page */ get_header(); ?>


    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <?php if ( has_post_thumbnail()) { ?>
        <div class="image-block"><img src="<?php echo the_post_thumbnail_url('full'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"  class="img-responsive center-block"></div>
      <?php }  ?>
      <!-- content -->
      <div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
        <div class="container">
          <div class="text-block">
            <div class="title"><?php the_title(); ?></div>
            <?php the_content(); ?>
          </div>
          <div class="product-block__container">

            <?php if( have_rows('gifts') ): while ( have_rows('gifts') ) : the_row(); ?>
              <!-- product-block -->
              <div class="product-block">
                <div class="row">
                  <div class="col-md-3 col-sm-4">
                    <div class="product-image">
                      <?php $image = get_sub_field('image'); ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive center-block">
                      <a href="#order" data-toggle="modal" class="btn btn-circle">Book now</a>
                    </div>
                  </div>
                  <div class="col-md-9 col-sm-8">
                    <div class="product-text">
                      <div class="row mobile-row">
                        <div class="col-xs-7">
                          <h3 class="title title-middle text-pink"><?php the_sub_field('title'); ?></h3></div>
                        <div class="col-xs-5">
                          <div class="price pink-block">Price:<span>$<?php the_sub_field('price'); ?></span></div>
                        </div>
                      </div>
                      <?php the_sub_field('description'); ?>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /product-block -->
            <?php endwhile; endif; ?>

          </div><!-- /.product-block__container -->

        </div>
      </div>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>
