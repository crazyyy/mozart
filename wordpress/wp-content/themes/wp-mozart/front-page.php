<?php /* Template Name: Home Page */ get_header(); ?>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

      <?php if ( has_post_thumbnail()) { ?>
        <div class="image-block"><img src="<?php echo the_post_thumbnail_url('full'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>"  class="img-responsive center-block"></div>
      <?php } ?>

      <div class="container">
        <div class="about-block clearfix">
          <div class="about-image"><img src="<?php echo get_template_directory_uri(); ?>/img/about.png" alt="" class="img-responsive center-block"></div>
          <div class="about-text">
            <div class="title">About us</div>
            <?php the_content(); ?>
          </div>
        </div>
      </div>
      <!-- /about-block -->
      <div class="line"></div>
      <div class="container">
        <div class="title text-center">Find a Concert <span class="month">September - October</span></div>
        <div class="row">
          <div class="col-sm-4">
            <!-- item-block -->
            <div class="item-block">
              <img src="img/content/img-1.jpg" alt="" class="img-responsive center-block">
              <h4>Woodwinds for Little Ones at Trehaus</h4>
              <div class="row">
                <div class="col-md-7 col-sm-12 col-xs-7">
                  <p>Sunday, Sep <span class="text-big">17,</span> <span class="text-big">10-11</span>am </p>
                  <p>Singapore Art Museum</p>
                </div>
                <div class="col-md-5 col-sm-12 col-xs-5"><a data-toggle="modal" href="#tickets" class="btn">Buy tickets</a></div>
              </div>
              <p class="text-small"><a href="concert-page.html">More info</a></p>
            </div>
            <!-- /item-block -->
          </div>
          <div class="col-sm-4">
            <!-- item-block -->
            <div class="item-block">
              <img src="img/content/img-2.jpg" alt="" class="img-responsive center-block">
              <h4>Songs from the Movies and More</h4>
              <div class="row">
                <div class="col-md-7 col-sm-12 col-xs-7">
                  <p>Sunday, Sep <span class="text-big">17,</span> <span class="text-big">10-11</span>am </p>
                  <p>Singapore Art Museum</p>
                </div>
                <div class="col-md-5 col-sm-12 col-xs-5"><a data-toggle="modal" href="#tickets" class="btn">Buy tickets</a></div>
              </div>
              <p class="text-small"><a href="concert-page.html">More info</a></p>
            </div>
            <!-- /item-block -->
          </div>
          <div class="col-sm-4">
            <!-- item-block -->
            <div class="item-block">
              <img src="img/content/img-3.jpg" alt="" class="img-responsive center-block">
              <h4>The Harp Musical Morning for Everyone</h4>
              <div class="row">
                <div class="col-md-7 col-sm-12 col-xs-7">
                  <p>Sunday, Sep <span class="text-big">17,</span> <span class="text-big">10-11</span>am </p>
                  <p>Singapore Art Museum</p>
                </div>
                <div class="col-md-5 col-sm-12 col-xs-5"><a data-toggle="modal" href="#tickets" class="btn">Buy tickets</a></div>
              </div>
              <p class="text-small"><a href="concert-page.html">More info</a></p>
            </div>
            <!-- /item-block -->
          </div>
        </div>
      </div>
      <!-- partners -->
      <div class="partners">
        <div class="container container-large">
          <div class="title text-center">Our Partners and Sponsors</div>
          <ul class="partners-list">
            <?php if( have_rows('partners_sponsors', 45) ): while ( have_rows('partners_sponsors', 45) ) : the_row(); ?>
              <?php $image = get_sub_field('image');  ?>
              <li>
                <a href="<?php the_sub_field('link'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></a>
              </li>
            <?php endwhile; endif; ?>
          </ul>
        </div>
      </div>
      <!-- partners -->

    <?php endwhile; endif; ?>

<?php get_footer(); ?>
