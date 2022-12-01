<?php
$disclaimer_text = get_field( 'article_post_content_disclaimer_block_text','option' );
$disclaimer_url = get_field( 'article_post_content_disclaimer_block_url','option' );

if(get_field('article_post_content_disclaimer_block_text','option'))
{
    echo '<p>' . $disclaimer_text . '<a href='.$disclaimer_url.' target="_blank"/>&#9432;</a></p>';
}

?>