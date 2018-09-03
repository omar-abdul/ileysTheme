<?php
/**
 * Template Name : Media Page Template
 *
 */
if (!is_home() && is_front_page()){
	get_header();
} 
else {
	get_header('single');
}

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 offset-md-1">
						<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content-media', 'page' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;

							endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
