
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<?php wp_nav_menu( array(
'container' => 'ul',
'menu_class' => 'nav navbar-nav',
'menu_id' => 'bootmenu',
'echo' => true,
'theme_location' => 'primary',
) );?>
</div>
</div>
</nav>