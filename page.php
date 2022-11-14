<?php
  get_header();
/*Template name: Default*/
?>  

<div class="container">

        <div class="row">

          <div class="col-lg-8 p-lg-2">

            <h1 class="display-2 font-weight-bold"><?php echo esc_html( get_the_title() );?></h1>

				<!-- Social share icons-->
				<?php $enable_in_article = get_field('on_article','option');?>
				<?php if($enable_in_article):?>
					<?php get_template_part('includes/section','social_sharefrontpagearticle');?>
				<?php else:?>
					<?php echo '<style>{ display:none;}</style>';?>
				<?php endif;?>
				<!-- End Social share icons-->

          <br>
   
          <div class="container-fluid">
          <?php the_field('about_us_text');?>
          </div>


          </div>

                        <div class="sidebar col-lg-4 col-md-4 p-2">

                                      <!-- Category sidebar search-->
                                      <?php get_template_part('includes/section','search');?>
                                      <!-- End Category sidebar search-->

                                      <!-- Reviews sidebar project posts-->
                                      <?php get_template_part('includes/section','reviews-sidebar');?>
                                      <!-- End Reviews sidebar project posts-->
                        </div>




      </div>               

</div>




<?php get_footer(); ?>