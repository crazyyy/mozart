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

  <!-- tickets -->
  <div class="modal fade" id="tickets" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="sprites i-close" aria-hidden="true"></span></button>
        <div class="title-small title">The Harp Musical Morning for Everyone</div>
        <form action="#">
          <div class="row mobile-row">
            <div class="col-xs-6">
              <p>Sunday, Sep 17, 10-11am </p>
            </div>
            <div class="col-xs-6">
              <p class="text-green text-right">Singapore Art Museum</p>
            </div>
          </div>
          <div class="row mobile-row">
            <div class="col-xs-6">
              <ul class="input-list">
                <li>
                  <label>
                    <input type="checkbox">1adult + 1child ($40.00)</label>
                </li>
              </ul>
            </div>
            <div class="col-xs-6">
              <ul class="input-list">
                <li>
                  <label>
                    <input type="checkbox" checked>Extra child ($20.00)</label>
                </li>
                <li>
                  <label>
                    <input type="checkbox" checked>Extra adult ($30.00)</label>
                </li>
              </ul>
            </div>
          </div>
          <div class="wrap-form-group">
            <div class="form-group">
              <input type="text" placeholder="Name">
            </div>
            <div class="form-group">
              <input type="text" placeholder="Email Address*" required>
            </div>
          </div>
          <div class="wrap-summ clearfix">
            <div class="summ">
              <b>$60.00</b>
              <div class="text-small">1adult + 2child</div>
            </div>
            <button class="btn btn-middle">Buy with PayPal</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /tickets -->

  <?php wp_footer(); ?>

</body>
</html>
