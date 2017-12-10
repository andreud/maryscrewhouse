
<?php
/**
 * Template Name: Crew Help Pages
 */

get_header(); ?>


<div id="primary" class="container">
    <main id="main" class="site-main">

      <?php
      while ( have_posts() ) : the_post();

        //get_template_part( 'template-parts/content', 'page' );
        the_content();


      endwhile; // End of the loop.
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->


<?php
get_footer();
