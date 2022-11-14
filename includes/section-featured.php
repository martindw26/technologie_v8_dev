<section class="d-flex justify-content-center align-items-center h-100 min-vh-25">
	<div class="container">
	<h2 class=" post_block_title text-dark">Featured <i>articles</i></h2>

		<?php if (have_posts()) : while (have_posts()) : the_post();
		the_content();
		endwhile;
		else :
		echo '<p>No content found</p>';
		endif; ?>
		<?php // Block1 posts projects loop begins here
                                          $condition = array(
                                                "post_type"           => "post",
                                                "post_status"         => "publish",
                                                "orderby"             => "rand",
                                                "posts_per_page"      => 2,
                                                'tag_id' => 62,
                                          );                                           
                                          $block1 = new WP_Query ($condition);
                                          if ($block1->have_posts()) :
                                          while ($block1->have_posts()) : $block1->the_post();?>
				<div class="col-lg">
				<!-- Blog post-->
				<div class="box h-100 d-100 d-flex flex-column text-light bg-dark border border-0">
				<h4 class="p-3 fs-3" style="height:100px"><?php echo get_the_title();?></h4>
				<div class="p-2 text-muted">By <i><?php echo get_the_author();?></i>  | 
				<?php echo get_the_date();?></div>	
				<!-- Social share icons-->
				<?php $enable_on = get_field('on','option');?>
				<?php if($enable_on):?>
					<?php get_template_part('includes/section','social_sharefrontpage');?>
				<?php else:?>
					<?php echo '<style>{ display:none;}</style>';?>
				<?php endif;?>
				<!-- End Social share icons-->         
                           	<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                                    			<img class="img-fluid"  src="<?php echo $url ?>" />
				
				
				<div class="pt-4 pe-2 ps-2 pb-1">
				<!-- catarrayrated -->
				<?php 
				PostRatingsSystem();
				?>
				<!-- End catarrayrated -->
				</div>
				<p class="p-2">&ldquo;<?php echo excerpt(100);?>&rdquo;</p>
				<a href="<?php the_permalink() ?>" class="  btn mt-auto btn text-end text-dark bg-white p-2 rounded-0 border border-border-1 border-dark "><h4>Read More</h4></a>
                	</div><!-- End box bg-primary h-100 d-100 d-flex p-4 flex-column text-white-->				                    
				</div><br>

<?php endwhile;  else :  endif; wp_reset_postdata();?>

</div><!-- End col-lg-3 col-md-4-->    

</div><!-- End Div container-->
</section><!-- End Div section-->
<br>  
