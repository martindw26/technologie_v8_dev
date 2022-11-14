<section class="d-flex justify-content-center align-items-center h-100 min-vh-25">
	<div class="container">
	<h2 class=" post_block_title text-dark">Featured <i>articles</i></h2>
		<div class="row gy-2">
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
                                                "posts_per_page"      => 1,
                                                'tag_id' => 62,
                                          );                                           
                                          $block1 = new WP_Query ($condition);
                                          if ($block1->have_posts()) :
                                          while ($block1->have_posts()) : $block1->the_post();?>
				<div class="col-lg">
				<div class="Featured-post-dt">
<div class="container h-100 ">
	<div class="jumbotron jumbotron-fluid mb-3 pt-1 pb-0 bg-light position-relative">
		<div class="pl-4 pr-0 h-100">
			<div class="row justify-content-between">
				<div class="col-md-6 p-4 align-self-center">
				<h1 class="mb-3 pt-1 font-weight-bold"><?php echo get_the_title();?></h1>
				<h2 class="mb-4">
				<!-- catarrayrated -->
				<?php 
				$catarrayrated = get_the_category( $post->ID );
				foreach ($catarrayrated as $catarrayrated) {
				$catarrayrated = $catarrayrated->term_id;
				if ($catarrayrated == 2) {
				get_template_part('includes/section','reviewratingshort');
				}elseif ($catarrayrated == 3){
				get_template_part('includes/section','difficultyratingshort');
				}
				}
				?>
				<!-- End catarrayrated -->
				</h2>
				<p class="mb-3">&#34;<?php echo excerpt(100);?>&#34;
				</p>
				<p class="text-muted">Article by: <i><?php echo get_the_author();?> </i>| Posted: <i><?php echo get_the_date();?>					</i></p>
				<a href="<?php the_permalink() ?>" class="btn btn-dark text-white">Read More</a>
				</div>
				<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
				<div class="col-md-6 d-none d-md-block pr-0" style="background-size: cover;background-repeat: no-repeat;background-				image:url('<?php echo $url ?>');">	</div>
			</div>
		</div>
	</div>
</div>
</div>
				                    
				</div><br>

<?php endwhile;  else :  endif; wp_reset_postdata();?>

</div><!-- End col-lg-3 col-md-4-->    
</div><!-- End Div row gy-2--> 
</div><!-- End Div container-->
</section><!-- End Div section-->
<br>  
