<?php $themePath = get_template_directory_uri(); ?>
<!DOCTYPE html>
<html>
<head>
	
<title><?php wp_title(' - ',TRUE,'right'); bloginfo('name'); ?></title>


<!-- BASIC META -->
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, initial-scale=1.0">

<!-- FONT -->
<link type="text/css" href="<?php echo $themePath; ?>/css/font-awesome.min.css" rel="stylesheet"/>

<!-- BOOTSTRAP -->
<link type="text/css" href="<?php echo $themePath; ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
<link type="text/css" href="<?php echo $themePath; ?>/bootstrap/css/bootstrap-theme.css" rel="stylesheet"/>

<!-- STYLES -->
<link type="text/css" href="<?php echo $themePath; ?>/style.css" rel="stylesheet"/>	<!-- Std. wordpress stylesheet -->
<link type="text/css" href="<?php echo $themePath; ?>/css/styling.css" rel="stylesheet"/><!-- BASIC HTML STYLING - h1,h2 etc. -->
<link type="text/css" href="<?php echo $themePath; ?>/css/font-awesome.min.css" rel="stylesheet"/>

<?php wp_head(); ?>

</head>

<body>

<div id="header">
	<div class="container">	
		<div class="row">

			<!-- NAV -->
			<div id="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
			</div>

		</div>	<!-- row end -->
	</div><!-- container end -->	
</div><!-- NAVIGATION END -->