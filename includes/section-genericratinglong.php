<!-- catarrayrated -->
<?php 
        $catarrayrated = get_the_category( $post->ID );
        foreach ($catarrayrated as $catarrayrated) {
            $catarrayrated = $catarrayrated->term_id;
            if ($catarrayrated == 2) {
                get_template_part('includes/section','reviewrating');
            }elseif ($catarrayrated == 3){
                get_template_part('includes/section','difficulty_rating');
            }
        }
?>
<!-- End catarrayrated -->