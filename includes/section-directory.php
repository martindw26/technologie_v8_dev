<!--########################################
############## Dirtectory block ################
######################################## -->


<div class="col-lg-8 p-lg-2 bg-white text-dark p-1"><h4 class="card-title font-weight-bold">Deals</h4></div>
<table class="table table-striped table-dark">


<?php if( have_rows('prodcuts') ):?>

    <?php while( have_rows('prodcuts') ) : the_row();?>

<?php
$retailer = get_sub_field('dir_retailer');
?>
	
<div class="container-fluid">
  <div class="row">
  <div class="col-md-4 text-white bg-dark p-2"><img class="img-fluid" src="<?php the_sub_field('dir_image');?>"/></div>
    <div class="col-md-8 text-white bg-dark pb-2">
      <h2 class="pt-2"><?php the_sub_field('dir_product');?></h2>
      <div class="">
        <div class="col text-white bg-dark  p-2"><?php the_sub_field('dir_description');?></div>
        <div class="col text-white bg-dark  p-2"><h5>Retailer: <?php echo $retailer['label'];?></h5></div>
      </div>
      <button type="button" class="btn btn-success float-end "><a class="text-white text-decoration-none" href="<?php the_sub_field('dir_buy_now');?>"?>Get yours now</a></button>
    </div>
  </div>
</div>


<?php endwhile;  else :  endif; ?>

</table>			

    
