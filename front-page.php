<?php
/*Template name: Front-Page*/
?>

<?php get_header();?>



                        <!-- Featured Post-->
                        <div class="bg-light">
	                    <?php get_template_part('includes/section','hp_featured_slider');?><hr class="container">
                        </div>

                        <!-- End Featured Post-->
                        
                        <!-- Reviews Post Block-->
                        <div class="bg-light">
                        <?php get_template_part('includes/section','non_featured_reviews');?><hr class="container">
                        </div>
                        <!-- End of Reviews Post Block--> 
                                    
                        <!-- Projects Post Block-->
                        <div class="bg-light">
                        <?php get_template_part('includes/section','non_featured_projects');?><hr class="container">
                        </div>
                        <!-- End of Projects Post Block-->

                        <!-- Projects Post Block-->
                        <div class="bg-light">
                        <?php get_template_part('includes/section','homepage_deals_block');?>
                        </div>
                        <!-- End of Projects Post Block-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>