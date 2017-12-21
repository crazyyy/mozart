<?php /* Template Name: Contact Page */ get_header(); ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <?php if ( has_post_thumbnail()) { ?>
        <div class="image-block"><img src="<?php echo the_post_thumbnail_url('full'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" class="img-responsive center-block"></div>
      <?php }  ?>
      <!-- content -->
      <div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>

        <div class="container">
          <!-- text-block -->
          <div class="text-block">
            <div class="title"><?php the_title(); ?></div>
            <?php the_content(); ?>
          </div>
          <!-- /text-block -->
          <!-- contacts-form -->
          <div class="contacts-form form-block">
            <form action="#">
              <div class="row">
                <div class="col-sm-6">
                  <p>
                    <label>Name *</label>
                    <input type="text" required>
                  </p>
                  <p>
                    <label>Email Address *</label>
                    <input type="text" required>
                  </p>
                  <p>
                    <label>Submit </label>
                    <input type="text">
                  </p>
                </div>
                <div class="col-sm-6">
                  <p>
                    <label>Message</label>
                    <textarea name="message" id="message"></textarea>
                  </p>
                </div>
              </div>
              <p>
                <button class="btn btn-middle" type="button">SUBMIT</button>
              </p>
            </form>
          </div>
          <!-- /contacts-form -->
          <div class="contacts-text-block text-block">
            <div class="title">Did you know?</div>
            <div class="text-big">
              We also offer private parties and school visits. please get in touch for more details.
              <ul class="contacts-list">
                <li><a href="mailto:ks@playwithmozart.sg" class="text-green">ks@playwithmozart.sg</a></li>
                <li><a href="tel:+6598168947" class="grey-link">+65 98168947</a></li>
                <li>
                  <a href="#" class="sprites i-fb-square"></a>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>
