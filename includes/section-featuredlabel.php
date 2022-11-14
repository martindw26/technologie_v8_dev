<?php 
$catarray = get_the_category( $post->ID );
foreach ($catarray as $cat) {
    $catid = $cat->term_id;

    if ($catid == 5) {
     echo '<div class="feature_label">Featured</div>';
    }


}
?>
