    <!-- footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <ul class="footer-nav">
              <li><a href="about.html">About</a></li>
              <li><a href="concert.html">Find a Concert</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="artists.html">Our Artists</a></li>
            </ul>
          </div>
          <div class="col-sm-3">
            <ul class="footer-nav">
              <li><a href="partners.html">Partners&Sponsors</a></li>
              <li><a href="reviews.html">Reviews</a></li>
              <li><a href="gifts.html">Gifts</a></li>
              <li><a href="contacts.html">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-sm-6 text-right">
            <ul class="social-list">
              <li><a href="#" target="_blank" class="sprites i-fb-big"></a></li>
              <li><a href="#" target="_blank" class="sprites i-ins-big"></a></li>
              <li><a href="#" target="_blank" class="sprites i-tube-big"></a></li>
            </ul>
            <!-- copyright -->
            <div class="copyright">
              <p class="text-big">Copyright © &copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>.</p>
              <p><a href="#">Terms and Conditions</a></p>
            </div>
            <!-- /copyright -->
          </div>
        </div>
      </div>
    </footer>
    <!-- /footer -->
  </div>

  <?php wp_footer(); ?>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

</body>
</html>
