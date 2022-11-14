<div class="container">

    <h3 class="mb-4 post_block_title">Latest <i>reviews</i></h3>



        <div class="row">

    	



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

                                                "orderby"             => "date",

                                                "posts_per_page"      => 2,

                                                

                                                'category__in' => array( 6 )



                                          );                                           



                                          $block1 = new WP_Query ($condition);



                                          if ($block1->have_posts()) :

                            

                                          while ($block1->have_posts()) : $block1->the_post();?>





    

						      <div class="col-lg">

						      		<!-- Blog post-->

						                    <div class="card mb-4">

						                    	<div class="card-img-top">	

						                    		<?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>

    												<img class="img-fluid" src="<?php echo $url ?>" />

						                    	</div>

						                         <div class="card-body">

						                            <div class="small text-muted"><?php echo get_the_date();?></div>

						                            <h2 class="card-title"><?php the_title();?></h2>

						                            <div class="small text-muted">*****</div>

						                            <p class="card-text">&ldquo;<?php echo excerpt(15);?>&rdquo;</p>

						                            <div class="mb-4 card-text">By <i><?php echo get_the_author();?></i></div>

						                            <a class="btn btn-danger" href="<?php the_permalink() ?>">Read more →</a>



						                        </div>

						                    </div>

      

</div>

    



    					<?php endwhile;  else :  endif; wp_reset_postdata();?>



     

      

  </div>

  <br>    