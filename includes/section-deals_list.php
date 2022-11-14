<div class="col-lg-8 p-lg-2 bg-white text-dark p-1"><h4 class="card-title font-weight-bold">Deals</h4></div>
<table class="table table-striped table-dark">

<?php if( have_rows('prodcuts') ):?>

    <?php while( have_rows('prodcuts') ) : the_row();?>

<?php
$retailer = get_sub_field('dir_retailer');
$currency = get_sub_field('dir_currency');
$url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));


//Handles the currecy symbol selection

if($currency == 'GBP') {
  $currency = '&#163';
} else if($currency == 'USD') {
  $currency = '&#36';
} else if($currency == 'Euro') {
  $currency = '&#8364';
} else if($currency == 'JPY') {
  $currency = '&#165';
} else if($currency == 'KWR') {
  $currency = '&#8361';
} else if($currency == 'INR') {
  $currency = '&#8377';
}

$description  = get_field('dir_description');


?>
	
<div class="container-fluid pb-4">
  <div class="row">
  <div class="col-md-4 text-white bg-dark p-2"><img class="img-fluid" src="<?php echo $url; ?>"/></div>
    <div class="col-md-8 text-white bg-dark pb-2">
      <h2 class="pt-2"><?php echo esc_html( get_the_title() );?></h2>
      <h3 class="pt-2"><h5><?php echo $currency;?><?php the_sub_field('dir_price');?></h3>
      <div class="">
        <div class="col text-white bg-dark  p-2"><?php echo $description;?></div>
        <div class="col text-white bg-dark  p-2"><h5>Retailer: <?php echo $retailer['label'];?></h5></div>
      </div>
      <button type="button" class="btn btn-success float-end "><a class="text-white text-decoration-none" href="<?php the_sub_field('dir_buy_now');?>" target="_blank">Get yours on <?php echo $retailer['label'];?> now</a></button>
    </div>
  </div>
</div>


<?php endwhile;  else :  endif; ?>

</table>








   
