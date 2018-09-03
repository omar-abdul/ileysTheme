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
			<div class="container ileys-post-container">


			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'gallery' );

				endwhile;


			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
			</div>

			<div class="pages mx-auto">
				<?php the_posts_pagination();?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer();?>
