<?php
  get_header();
 /* Template Name: Multi Review Post repeater*/
 /* Template Post Type: post */
?>  

<div class="container">

        <div class="row">

          <div class="col-lg-8 p-lg-2">

            <h1 class="display-4 font-weight-bold text-dark"><?php echo esc_html( get_the_title() );?></h1>

             <!-- header image block-->
                                                
             <?php get_template_part('includes/section','header-image block');?>
                                                
             <!-- End header image block-->

             <!-- SEO text-->

             <div class=" bg-secondary text-light p-4 mb-4 border-dark lead">
             <?php the_field('seo_paragraph');?> 
             </div>

             <!-- Article content blocks -->
             <?php get_template_part('includes/section','multiproductjump');?>
             <!-- End Article content blocks-->


       
             <!-- Article content blocks -->
             <?php get_template_part('includes/section','multiproduct3');?>
             <!-- End Article content blocks-->
            

             <!-- meta block-->
             <?php get_template_part('includes/section','meta');?>
             <!-- End meta block-->

             <!-- Start of posts related posts-->
             <?php get_template_part( 'template-parts/related_new' );?>
             <!-- End of posts related posts-->

          </div>

                        <div class="sidebar col-lg-4 col-md-4 p-2">

                                      <!-- Category sidebar search-->
                                      <?php get_template_part('includes/section','search');?>
                                      <!-- End Category sidebar search-->

		   <!-- Start of posts related posts-->
	 	   <?php get_template_part( 'template-parts/reviews_sidebar' );?>
		   <!-- End of posts related posts-->      
                        </div>




      </div>               

</div>

    

<?php get_footer(); ?>