<?php

add_action('wp_ajax_houses_modal','housesModal');
add_action('wp_ajax_nopriv_houses_modal','housesModal');

function housesModal()
{

	$house_id = $_POST['houseID'];
	$house = get_post($house_id);
	
	echo  '<h2 class="text-uppercase">'.$house->post_title.'</h2>';

	    //Get the images ids from the post_metadata
    $images = acf_photo_gallery('gallery', $house->ID);

    //Check if return array has anything in it
    if( count($images) ):
    	?>
    	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    		

    		<ol class="carousel-indicators">
			<?
	    	$i=0;
	        //Cool, we got some data so now let's loop over it
	        foreach($images as $image):
	        	$active_class = $i==0 ? 'active' : '' ; ?>
			    	<li data-target="#carouselExampleSlidesOnly" data-slide-to="<?=$i;?>" class="<?=$active_class;?>"></li>
				<?
				$i++;
			endforeach;
			?>
			</ol>
  			

  			<div class="carousel-inner">

	    	<?
	    	$i=0;
	        //Cool, we got some data so now let's loop over it
	        foreach($images as $image):
	        	$i++;
	            $id = $image['id']; // The attachment id of the media
	            $title = $image['title']; //The title
	            $caption= $image['caption']; //The caption
	            $full_image_url= $image['full_image_url']; //Full size image url
	            $full_image_url = acf_photo_gallery_resize_image($full_image_url, 262, 160); //Resized size to 262px width by 160px height image url
	            $thumbnail_image_url= $image['thumbnail_image_url']; //Get the thumbnail size image url 150px by 150px
	            $url= $image['url']; //Goto any link when clicked
	            $target= $image['target']; //Open normal or new tab
	            $alt = get_field('photo_gallery_alt', $id); //Get the alt which is a extra field (See below how to add extra fields)
	            $class = get_field('photo_gallery_class', $id); //Get the class which is a extra field (See below how to add extra fields)
			?>
				<div class="carousel-item <?=($i==1)?'active':''; ?>">
			            <img src="<?php echo $image['full_image_url']; ?>" 
			            	alt="<?php echo $title; ?>" 
			            	title="<?php echo $title; ?>"
			            	class="d-block w-100"
			            	>
				</div>
			<?php 
			endforeach;
			?>


			</div>
			  <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div>
	<? 
	endif; 

	die();

}
