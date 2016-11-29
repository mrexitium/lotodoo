<?php 
$themePath = get_template_directory_uri();
get_header(); ?>

<div id="wrapper">
	
	<div id="content">
		<div class="container">
		
			<?php //wp_reset_query(); ?>   
			<?php //if (have_posts()) : while (have_posts()) : the_post(); ?>  
				<?php //the_content(); ?>
			   	<?php //the_field(); //Advanced Custom Fields ?> 
			<?php //endwhile; endif; ?>
		
		</div><!-- CONTAINER END -->
	</div><!-- CONTENT END -->
	
</div>

<?php get_footer(); ?>