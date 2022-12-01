
<?php 
$disclaimer_text = get_field( 'article_post_content_disclaimer_block_text','option' );
$disclaimer_url = get_field( 'article_post_content_disclaimer_block_url','option' );
if get_feild( 'article_post_content_disclaimer_block_text','option' ):?>
    <p><?php echo $disclaimer_text;?><a href="'.$disclaimer_url.'">&#9432;</a></p>
<?php endif;?>    