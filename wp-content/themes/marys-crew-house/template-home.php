
<?php
/**
 * Template Name: Home
 */

get_header(); ?>



<!-- Header -->
<header class="masthead">
  <div class="container">
    <div class="intro-text">
      <img src="img/marys/crayonBlueHouse.gif" class="main-logo">
      <div class="intro-heading text-uppercase">Welcome to Mary's Crew House!</div>
      <div class="intro-lead-in">
          816 SE 12th Street <br>
          Fort Lauderdale, Florida   33316-2008  
      </div>
      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">Explore Houses</a>
      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#contact">Get a Quote</a>
    </div>
  </div>
</header>



    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Houses Tour</h2>
            <h3 class="section-subheading text-muted">
              Pictures and 360 views of our houses. 
              <br>You can also check out <a class="js-scroll-trigger" href="#services">What is available on our houses</a> </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/marys/house1/SideYard_500.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>House 1</h4>
              <p class="text-muted">
                816 SE 12th Street Fort Lauderdale, FL, 33316-2008 
              </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/marys/house2/536769_700.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>House 2</h4>
              <p class="text-muted">814 SE 18th Ct Fort Lauderdale, FL, 33316-2008 </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/marys/house3/536770_700.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>House 3</h4>
              <p class="text-muted">
                814 SE 18th Ct Fort Lauderdale, FL, 33316-2008 
              </p>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">What is available</h2>
            <h3 class="section-subheading text-muted">All the amenities you could ask for, and more. <br>
              With two apartments located right off 17th Street in Fort Lauderdale, Florida, <br> you are also <strong>close to all the Crew Agencies and Marinas</strong>.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-2">
            <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-wifi fa-stack-1x fa-inverse"></i>
            </span>
            <!-- <h4 class="service-heading">E-Commerce</h4> -->
            <p class="text-muted">Full free internet and WI-FI access in all Apartments.</p>
          </div>
          <div class="col-md-2">
            <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-tv fa-stack-1x fa-inverse"></i>
            </span>
            <p class="text-muted">Large TV`s with cable access in every room.</p>
          </div>
          <div class="col-md-2">
            <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-cutlery fa-stack-1x fa-inverse"></i>
            </span>
            <p class="text-muted">Large fully functional kitchens in all houses.</p>
          </div>

          <div class="col-md-2">
            <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-arrows-alt fa-stack-1x fa-inverse"></i>
            </span>
            <p class="text-muted">Large community living rooms in all housesv</p>
          </div>

          <div class="col-md-2">
            <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-thermometer-full fa-stack-1x fa-inverse"></i>
            </span>
            <p class="text-muted">Fully Heated swimming pool at House 1</p>
          </div>

          <div class="col-md-2">
            <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-heartbeat fa-stack-1x fa-inverse"></i>
            </span>
            <p class="text-muted">Exercise equipment.</p>
          </div>

          <div class="col-md-2">
            <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-cab fa-stack-1x fa-inverse"></i>
            </span>
            <p class="text-muted">Free pick up when you arrive in town.</p>
          </div>

          

          <div class="col-md-2">
            <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-eraser fa-stack-1x fa-inverse"></i>
            </span>
            <p class="text-muted">Washing machines and dryers in all houses.</p>
          </div>

          <div class="col-md-2">
            <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <p class="text-muted">Personal lockers for valuables.</p>
          </div>

          <div class="col-md-2">
            <span class="fa-stack fa-2x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-free-code-camp fa-stack-1x fa-inverse"></i>
            </span>
            <p class="text-muted">Barbecue and outdoor seating areas in all Houses.</p>
          </div>

        </div>
      </div>
    </section>



    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">Mary's Crew Houses are fully functional crew houses which opened in September 2003. We provide accommodation to crew members who are new and old to the
yachting industry. Not only do you have an excellent place to stay while looking for
a job, but you can always find help from the many people who have either just
started in the industry or have been in it for years. You'll make the best of friends
from all over the world, and always have a nice home to come back to, when either
needing a break or needing to once again look for a crew job.
After a day's work, you can come home, have a swim in the heated pool, or enjoy
one of the many dinner get-togethers that are held regularly at the houses. Great
contacts are made through these crew houses, and great times are had.
If you're looking for crew or accommodation, stop by or give us a call. Click on the
Contact Us icon for contact information</h3>
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
