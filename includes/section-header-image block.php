<!-- Specs Table start-->

   <div class="card-img-top">
	  <?php $image_id = get_post_thumbnail_id(get_the_ID());
		$alt_text = get_post_meta($image_id , '_wp_attachment_image_alt', true);?>
	  <?php $description = $image['description'];?>
      <?php $caption = $image['caption'];?>
      <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
      <img class="img-fluid mb-4" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo $alt_text ;?>" />
   </div>

			  											
<!-- End Table -->




