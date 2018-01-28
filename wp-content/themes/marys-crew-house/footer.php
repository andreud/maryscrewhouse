<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Marys_Crew_House
 */

?>

	</div><!-- #content -->



	<!-- Contact -->
  <?php 
    // Pull content from "Home" Page
    $home_page_id = 5;
    //$houses = get_posts(['post_type'=>'house']);
    $houses = get_field('houses_houses',$home_page_id);
  ?>
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><?php the_field('contact_heading',$home_page_id); ?></h2>
            <!-- <h3 class="section-subheading text-muted">To get a quote or with any questions.</h3>
            <p class="text-muted">Mary's cell: 954-242-1109 / Boys house 1: 954-761-3660 / Girls house 1: 954-761-3661 / maryscrewhouse@yahoo.com</p> -->
            <div class="text-muted">
              <?php the_field('contact_content',$home_page_id); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6">
                        <label>Arrival Date (Optional)</label>
                        <input class="form-control" id="arrival" type="date" placeholder="Arrival Date (Optional)" >
                      </div>
                      <div class="col-sm-6">
                        <label>Departure Date (Optional)</label>
                        <input class="form-control" id="departure" type="date" placeholder="Departure Date (Optional)" >  
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <select class="form-control" id="prefHouse">
                      <option value="none">Preferred House (Optional)</option>
                      <?php foreach ($houses as $key => $house): ?>
                        <option value="<?= $house->post_name ?>"><?= $house->post_title ?></option>
                      <?php endforeach ?>                   
                    </select>
                  </div>

                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Any details, inquiries or questions (Optional)"></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Marys Crew House <?= date("Y") ?></span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              
              <li class="list-inline-item">
                <!-- https://www.facebook.com/pages/Marys-Crew-House/165630090143660 -->
                <a href="<? the_field('facebook_url',$home_page_id) ?>">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="http://yachtiepages.com">Developed by YachtieWorld</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>




</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
