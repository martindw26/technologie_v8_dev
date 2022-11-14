<?php if( have_posts() ): while( have_posts() ): the_post();?>



<?php 

$product = get_field('product'); // Gets the product field and stores it to $product

$product_description = get_field('product_description'); // Gets the description field and stores it to $product_description

$ProductCodeSKU = get_field('sku'); // Gets the sku field and stores it to $ProductCodeSKU
$ProductCodeASIN = get_field('asin'); // Gets the asin field and stores it to $ProductCodeASIN
$ProductCodeMPN = get_field('mpn'); // Gets the mpn field and stores it to $ProductCodeMPN
$ProductCodeUPC = get_field('upc'); // Gets the upc field and stores it to $ProductCodeUPC
$ProductCodeEAN = get_field('ean'); // Gets the ean field and stores it to $ProductCodeEAN
$ProductNumber = get_field('product_number'); // Gets the product_number field and stores it to $ProductNumber
$ProductBuyLink = get_field('buy_link'); // Gets the buy_now field and stores it to $ProductBuyLink


?>



<h3><strong></strong><i><?php echo $product;?></i></h3>
<?php get_template_part('includes/section','reviewrating');?>
<?php $price = get_field('price');?> 
<h5 class="text-success"><strong>Price £</strong><?php echo $price;?></h5>

<hr>
  <?php if($ProductCodeSKU):?>
  SKU: <?php echo $ProductCodeSKU;?><br>
  <?php endif;?>
  <?php if($ProductCodeASIN):?>
  ASIN: <?php echo $ProductCodeASIN;?><br>
  <?php endif;?>
  <?php if($ProductCodeMPN):?>
  MPN: <?php echo $ProductCodeMPN;?><br>
  <?php endif;?>
  <?php if($ProductCodeUPC):?>
  UPC: <?php echo $ProductCodeUPC;?><br>
  <?php endif;?>
  <?php if($ProductCodeEAN):?>
  EAN: <?php echo $ProductCodeEAN;?><br>
  <?php endif;?>
  <?php if($ProductNumber):?>
  Product Number: <?php echo $ProductNumber;?><br>
  <?php endif;?>
<hr>

<p>
<?php echo $product_description;?>  
</p><br>


<?php 
$images = get_field('gallery');
if( $images ): ?>
    <ul class="row list-unstyled">
        <?php foreach( $images as $image ): ?>
          <li class="col-lg-4">
                
                     <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class='img-fluid'/>
                
                <p><?php echo esc_html($image['caption']); ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


<p>
<a href='<?php echo $ProductBuyLink;?>'class='btn btn-success' role='button' target="_blank">Buy now</a>
</p><br>

<!--<h3><strong>Gallery: </strong><i></i></h3><br>-->

<?php $ProductSOLD = get_field('sold');?>

    <?php if( $ProductSOLD <> 'Blank' ):?>
        <strong>Product availibilty: </strong><?php echo $ProductSOLD;?>
    <?php endif;?>


<?php endwhile; else: endif;?>
