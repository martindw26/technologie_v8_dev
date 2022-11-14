<?php
  get_header();
 /* Template Name: Deals Post*/
 /* Template Post Type: post */
  /* v2*/
?>  

<div class="container">

        <div class="row">
	
          <div class="col-lg-8 p-lg-2 bg-white text-dark">


            <h1 class="display-4 font-weight-bold text-dark"><?php echo esc_html( get_the_title() );?><i> Deals</i></h1><hr>

				<!-- Social share icons-->
				<?php $enable_in_article = get_field('on_article','option');?>
				<?php if($enable_in_article):?>
					<?php get_template_part('includes/section','social_sharefrontpagearticle');?>
				<?php else:?>
					<?php echo '<style>{ display:none;}</style>';?>
				<?php endif;?>
				<!-- End Social share icons-->


              <?php get_template_part('includes/section','reviewrating');?><br><br>

             <!-- header image block-->
                                                
             <?php get_template_part('includes/section','header-image block');?>
                                                
             <!-- End header image block-->

             <?php 
	$description  = get_field('dir_description');
	echo '<div class="col text-text-dark bg-white border border-1 border-dark  p-2">'.$description.'</div>';
             ?>


             <!-- Article content blocks -->
             <?php get_template_part('includes/section','deals_list');?>
             <!-- End Article content blocks-->

              <!-- meta block-->
             <?php get_template_part('includes/section','meta');?>
             <!-- End meta block-->

             <!-- Social share icons-->
             <?php $enable_in_article = get_field('on_article','option');?>
             <?php if($enable_in_article):?>
             <?php get_template_part('includes/section','social_sharefrontpagearticle');?>
             <?php else:?>
             <?php echo '<style>{ display:none;}</style>';?>
             <?php endif;?>
              <hr>
             <!-- End Social share icons-->

              	
             <!-- Start of posts related posts-->
             <?php get_template_part( 'template-parts/related_new' );?>
             <!-- End of posts related posts-->

          </div>

                        <div class="sidebar col-lg-4 col-md-4">

                                      <!-- Category sidebar search-->
                                      <?php get_template_part('includes/section','search');?>
                                      <!-- End Category sidebar search-->

		   <!-- Start of posts sidebar related posts-->
	 	   <?php get_template_part( 'template-parts/deals_sidebar' );?>
		   <!-- End of posts sidebar related posts-->                         
	     </div>




      </div>               

</div>






<?php get_footer(); ?>