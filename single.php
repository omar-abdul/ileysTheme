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
        <div class="container">
			<div class="row  justify-content-center">
				<div class="col-12 col-md-10 mx-md-auto">


					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part( 'template-parts/single', get_post_format() );
							the_post_navigation();

							if(comments_open()):
								comments_template();
							endif;

					endwhile;
				endif;
					?>
				</div><!-- .col -->
			</div><!-- .row -->
        </div><!-- .container -->
	</main><!-- #main -->
</div><!-- #primary -->

</div><!-- .wrap -->

<?php get_footer();?>
