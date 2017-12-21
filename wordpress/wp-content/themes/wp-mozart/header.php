<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="http://www.google-analytics.com/" rel="dns-prefetch"><!-- dns prefetch -->

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <?php wp_head(); ?>
</head>
<body>

  <div id="wrap">
    <!-- header -->
    <header>
      <div class="container">
        <div class="logo">
          <?php if ( !is_front_page() && !is_home() ){ ?>
            <a href="<?php echo home_url(); ?>">
          <?php } ?>
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="img-responsive">
          <?php if ( !is_front_page() && !is_home() ){ ?>
            </a>
          <?php } ?>
        </div>
        <div class="slogan">We welcome all music lovers, as well as everyone who are going to become ones! <br>Come with your little ones to feel the relaxing environment of our concerts!</div>
        <ul class="social-list">
          <li><a href="https://www.facebook.com/PlaywithMozart/" target="_blank" class="sprites i-fb"></a></li>
          <li><a href="#" target="_blank" class="sprites i-ins"></a></li>
          <li><a href="https://www.youtube.com/channel/UCYpObBZ8IwsO-JBpO-2QafA" target="_blank" class="sprites i-tube"></a></li>
        </ul>
      </div>
    </header>
    <!-- /header -->
    <!-- navigation -->
    <nav>
      <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
          <?php wpeHeadNav(); ?>
        </div>
      </div>
    </nav>
    <!-- /navigation -->

