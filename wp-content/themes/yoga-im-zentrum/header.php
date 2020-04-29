<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	
	<link rel="shortcut icon" href="<?php  echo get_template_directory_uri() ?>/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   
</head>

<body  role="document" <?php body_class(); ?> class="backImageRoom" >
<div class="check-media-query"></div>	
	
  <div class="bg-lines" ></div>
    <!-- Fixed navbar -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container nav-holder">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="z-index: 80;">
				    <span class="sr-only">Toggle navigation</span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				  </button>
				  <div class="navbar-brand">
					<object class="logo" type="image/svg+xml" data="<?php  echo get_template_directory_uri() ?>/images/logo.svg">
					  Ihr Browser ist veraltet und unterstützt das SVG Bild-Format nicht. Bitte aktualisieren Sie ihn.
					</object>
					<a class="navbar-click" href="<?php  echo get_option('home');?>"></a>
				  </div>
				  
				</div>
	    		
				<?php  $args = array(
							'menu' => 'Haupt-Navigation',
							'container' => 'div',
							'container_class' => 'collapse navbar-collapse',
							'container_id' => 'navbar',
							'menu_class' => 'nav navbar-nav',
							'walker'	 => new BootstrapNavMenuWalker()
									);
				wp_nav_menu( $args ); 
				
				?>
	        </div>
    </nav>
	<?php if (get_the_ID() != 15) { ?>
	<div class="container-full header" role="header" >
		<header class="entry-header">
		
		
		<?php 	// echo get_the_ID(); 
				// echo get_the_title();
$menu_items = wp_get_nav_menu_items( 'Haupt-Navigation' );
$this_item = current( wp_filter_object_list( $menu_items, array( 'object_id' => get_queried_object_id() ) ) );
//echo $this_item->title;
				?>
			<?php 
				
			if($this_item->title == "Seminare 2018") {
					
				print("<h1 class='entry-title'>Seminare 2018</h1>");
			
			} else if ($this_item->title == "Aktuelles")  {
				
				print("<h1 class='entry-title'>Aktuelles</h1>"); 
			
			} else {
			
				the_title( '<h1 class="entry-title">', '</h1>' );
			
			};
			
			?>
		
		
		</header><!-- .entry-header -->
	</div>
	<?php } ?>
    <div class="container" role="main" >

		<?php if($this_item->title != "Stundenplan" && get_the_ID() != 15 ) 
		{ ?>

		
		<div class="row">
			<div class="col-lg-2 "></div>
			<div class="col-lg-8">
		<?php } ?>
	