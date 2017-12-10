
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
                <a class="portfolio-link" href="#portfolioModal" data-house-id="<?=$house->ID;?>">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                      <i class="fa fa-plus fa-3x"></i>
                    </div>
                  </div>
                  <img class="img-fluid" src="<?= $house_img_url ; ?>" alt="">
                </a>
                <div class="portfolio-caption">
                  <h4><?= $house->post_title; ?></h4>
                  <p class="text-muted"><?= $house->post_content; ?></p>
                </div>
              </div>
            <?
            endforeach;
           ?>
          
        </div>
      </div>
    </section>


    <!-- Portfolio Modals -->

    
    <!-- Modal 0 -->
    <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
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
                  <!-- Project Details Go Here 
                  <h2 class="text-uppercase">House </h2>
                  <p>Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrupadding-top: 200pxm, reiciendis facere nemo!</p>
                   <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close</button>-->
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
              
              <? 
             // $blog_posts = get_posts(['posts_per_page' => 5]);
              $blog_posts = get_field('about_posts');
              foreach ($blog_posts as $key => $blog_post) : 
                  $panel_side_class = ($key%2!=0) ? 'timeline-inverted' : '';
                  $panel_image_url = get_the_post_thumbnail_url($blog_post->ID);

              ?>
              <li class="<?= $panel_side_class; ?>">
                <div class="timeline-image" style="background-image: url(<?= $panel_image_url; ?>)">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4><?= the_date($blog_post->ID) ?></h4>
                    <h4 class="subheading"><?= $blog_post->post_title; ?></h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"><?= $blog_post->post_content; ?></p>
                  </div>
                </div>
              </li>

            <? endforeach; ?>
        
              
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
