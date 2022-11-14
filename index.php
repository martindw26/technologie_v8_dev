<?php get_header(); ?>
<div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                                <?php
                                // Start the loop.
                                while ( have_posts() ) : the_post();
                                        the_content();        
                                endwhile;
                                ?>
                </main><!-- .site-main -->
                <?php get_sidebar( '' ); ?>
</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>