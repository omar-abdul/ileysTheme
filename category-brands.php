<?php 

/*
######

Custom Category page to display The Brand Category
#####
*/
?>
<?php 
	if (!is_home() && is_front_page()){
		get_header();
	} 
	else {
		get_header('single');
	}


?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container-fluid ileys-post-container">

				<div class="row align-items-center justify-content-start">
					<div class="col-12 col-md-8   offset-md-2   my-3 cat-content">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'categories/category','brand' );

				endwhile;

			endif;
			?>
			</div>
			
		</div>
		<div class="pages"><?php the_posts_pagination("mx-auto");?></div>
		</div>
		
		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .wrap -->

<?php get_footer();?>

