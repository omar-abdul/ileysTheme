<?php


get_header('single'); ?>

	<div id="primary" class="content-area container ">
		<div id="content" class="site-content mx-auto p-5 text-center" role="main">

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found', 'ileystheme' ); ?></h1>
			</header>

			<div class="page-wrapper ">
				<div class="page-content">
					<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'ileystheme' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>