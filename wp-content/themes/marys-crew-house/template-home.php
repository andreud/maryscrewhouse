
<?php
/**
 * Template Name: Home
 */

get_header(); ?>



<!-- Header -->
<header class="masthead" style="background-image:url(<? the_field('intro_background') ?>)" >
  <div class="container">
    <div class="intro-text">
      <img src="<? the_field('intro_logo') ?>" class="main-logo">
      <div class="intro-heading text-uppercase"><? the_field('intro_heading') ?></div>
      <? the_field('intro_content') ?>
    </div>
  </div>
</header>



    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><? the_field('houses_heading') ?></h2>
            <h3 class="section-subheading text-muted">
              <? the_field('houses_content') ?>
          </div>
        </div>
        
        <div class="row">
          
          <? 
            $houses = get_field('houses_houses');
            foreach ($houses as $key => $house) :
              $house_img_url = get_the_post_thumbnail_url($house->ID);
            ?> 
              
              <div class="col-md-4 col-sm-6 portfolio-item">
                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                      <i class="fa fa-plus fa-3x"></i>
                    </div>
                  </div>
                  <img class="img-fluid" src="<?= $house_img_url ; ?>" alt="">
                </a>
                <div class="portfolio-caption">
                  <h4><?= $house->post_title;   ?></h4>
                  <p class="text-muted">
                    <?= $house->post_content;   ?>
                  </p>
                </div>
              </div>
            <?
            endforeach;
           ?>
          
        </div>
      </div>
    </section>


    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">House 1</h2>
                 
                  
                  <!-- <iframe scrolling="no" src="http://tours.obeo.com/?tourid=177107&id=177107&refurl=http://www.maryscrewhouse.com/index.html"  width="734" height="625" ></iframe> -->

                  
                  <p>Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrupadding-top: 200pxm, reiciendis facere nemo!</p>
                   <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">House 2</h2>
                  
                  
                <!--   <iframe scrolling="no" src="http://tours.obeo.com/?tourid=536769&refurl=maryscrewhouse.com"  width="734" height="625" ></iframe> -->

                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <p>Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">House 3</h2>
                  

                  <!-- <iframe scrolling="no" src="http://tours.obeo.com/unbranded?tourid=536770"  width="734" height="625" ></iframe> -->

                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <p>Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><? the_field('services_heading') ?></h2>
            <h3 class="section-subheading text-muted"><? the_field('services_intro_text') ?></h3>
          </div>
        </div>

        <div class="row text-center">
          <? the_field('services_content'); ?>
        </div>


        <div class="row text-center">

           <? 
            $features = get_field('services_features');
            foreach ($features as $key => $feature) :
              //$house_img_url = get_the_post_thumbnail_url($house->ID);
            ?> 
            <div class="col-md-2">
            <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa <? the_field('icon_code',$feature->ID); ?> fa-stack-1x fa-inverse"></i>
            </span>
            <p class="text-muted"><?= $feature->post_content; ?></p>
          </div>

          <?php endforeach; ?>
          

        </div>
      </div>
    </section>



    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"><? the_field('about_heading') ?></h2>
            <h3 class="section-subheading text-muted"><? the_field('about_content') ?></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="img-fluid" src="http://www.maryscrewhouse.com/sitebuilder/images/Harald_and_Martin_doing_some_construction-399x296.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2003</h4>
                    <h4 class="subheading">Our Humble Beginnings</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Harald and Martin putting together some desks</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded img-fluid" src="http://www.maryscrewhouse.com/sitebuilder/images/Emily_and_our_turkey-449x334.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2006</h4>
                    <h4 class="subheading">The owner</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Stepping into Mary's, you always know you'll have unforgettable memories and laughter that never stops! -Emily King</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <img class="rounded img-fluid" src="http://www.maryscrewhouse.com/sitebuilder/images/h_s_502-392x291.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2008</h4>
                    <h4 class="subheading">Happy Birthday</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">I had the greatest times here! Thanks
                      for the best birthday party ever, I will
                      always be coming back when I need a place to stay!
                      -Michelle Lundin</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <img class="rounded img-fluid" src="http://www.maryscrewhouse.com/sitebuilder/images/What_a_lazy_bunch_eh_-351x259.jpg" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2014</h4>
                    <h4 class="subheading"></h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Meet great people; find a great job;
close to all the sailing action; Mary's
crew house is the only way to go!
            -Barry McIntosh</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>





<?php
get_footer();
