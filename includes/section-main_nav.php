<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
<div class="topnav" id="myTopnav">
	<?php
	wp_nav_menu(
		array(
		'theme_location' => 'primary',
		'menu_class' => 'topnav' 
		)
		);
	?>
</div>
</div>


<script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>