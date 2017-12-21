<?php /* Template Name: Reviews Page */ get_header(); ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <?php if ( has_post_thumbnail()) { ?>
        <div class="image-block"><img src="<?php echo the_post_thumbnail_url('full'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"  class="img-responsive center-block"></div>
      <?php } ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
        <div class="container">
          <!-- text-block -->
          <div class="text-block">
            <div class="title"><?php the_title(); ?></div>
            <div class="row">
              <div class="col-sm-8">
                <?php the_content(); ?>
              </div>
              <div class="col-sm-4">
                <p class="text-right"><a href="#review-form" class="btn slow btn-blue btn-large">Send your review</a></p>
              </div>
            </div>
          </div>
          <!-- /text-block -->

          <!-- reviews -->
          <div class="reviews">
            <?php if( have_rows('reviews') ): while ( have_rows('reviews') ) : the_row(); ?>
              <!-- review-block -->
              <div class="review-block">
                <div class="clearfix">
                  <?php $image = get_sub_field('image'); if( !empty($image) ): ?>
                    <div class="review-image"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive"></div>
                  <?php endif; ?>
                  <div class="review-text">
                    <?php the_sub_field('content'); ?>
                    <div class="review-name"><?php the_sub_field('name'); ?></div>
                  </div>
                </div>
              </div>
              <!-- /review-block -->
            <?php endwhile; endif; ?>
          </div>
          <!-- /reviews -->

          <!-- review-form -->
          <div id="review-form" class="pink-block form-block">
            <div class="title">Send your review</div>
            <form action="#">
              <div class="clearfix">
                <div class="review-form-left">
                  <p>
                    <label>Name *</label>
                    <input type="text" required>
                  </p>
                  <p>
                    <label>Email Address *</label>
                    <input type="text" required>
                  </p>
                  <p>
                    <label>Your photo</label>
                    <input type="file">
                  </p>
                </div>
                <div class="review-form-right">
                  <p>
                    <label>Message *</label>
                    <textarea name="message" id="message" required></textarea>
                  </p>
                  <p>
                    <button class="btn btn-middle">SUBMIT</button>
                  </p>
                </div>
              </div>
            </form>
          </div>
          <!-- /review-form -->
        </div>

      </div>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>

