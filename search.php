<?php
  get_header();
  /*Template Name: category-reviews*/
?>  

      <div class="container">

        <div class="row">

          <div class="col-lg-8">

<div class="mt-2 bg-secondary text-light rounded p-3 mb-4 border-dark">
<div class=""><h2>Your search results</h2></div>
</div>

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>


                                    <div class="container">
                                      <div class="row">

                                        <div class="col">

                                        <div class="card mb-4">
                                                  <div class="card-img-top">  
                                                    <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                                                    <img class="img-fluid rounded-top" src="<?php echo $url ?>" />
                                                  </div>
                                                     <div class="card-body">
                                                        <div class="small text-muted"><?php echo get_the_date();?></div>
                                                        <h2 class="card-title"><?php the_title();?></h2>
                                                        <div class="small text-muted">*****</div>
                                                        <p class="card-text">&ldquo;<?php echo excerpt(15);?>&rdquo;</p>
                                                        <div class="mb-4 card-text">By <i><?php echo get_the_author();?></i></div>
                                                        <a class="btn btn-danger" href="#!">Read more →</a>
                                                    </div>
                                                  </div>

                                          </div>

                                        </div>

                                      </div>

                                      <?php endwhile; ?>
                                <?php endif; ?>


                          </div>


                          <div class="col-lg-4">
    

                        <!-- Category sidebar DMPU-->
                        <?php get_template_part('includes/section','dmpu-block');?>
                        <!-- End Category sidebar DMPU-->

                        <!-- Reviews sidebar project posts-->
                        <?php get_template_part('includes/section','reviews-sidebar');?>
                        <!-- End Reviews sidebar project posts-->

                        <!-- Category sidebar MPU-->
                        <?php get_template_part('includes/section','mpu-block');?>
                        <!-- End Category sidebar MPU-->


                          </div>

                        </div>

                      </div>            


<?php
  get_footer();
?>  