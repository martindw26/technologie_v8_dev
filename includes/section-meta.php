<hr class="hr">
<div class="text-dark text-muted m-2"><i>By </i><?php the_author_meta('display_name', 1); ?><i>  | Posted </i><?php echo get_the_date();?></div>
<div class="text-dark text-muted m-2"><i>Category: </i> 
<?php
$categories = get_the_category();
$separator = ' ';
$output = '';
if ( ! empty( $categories ) ) {
    foreach( $categories as $category ) {
        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
    }
    echo trim( $output, $separator );
}
?>
</div>
<div class="text-dark text-muted m2"><?php echo get_the_tag_list('<p class="m-2"><i>Tags: </i>  ',', ','</p>'); ?>
</div><hr class="hr">