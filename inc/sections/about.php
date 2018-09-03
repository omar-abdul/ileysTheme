<?php if(get_theme_mod('ileys_dropdownpages')!=0):?>
<section class="about" id="about">

    <div class="container about-container"> 

        <div class="row align-items-center text-center p-5">
                <?php $page = get_post(get_theme_mod('ileys_dropdownpages')); ?>

                <div class="peek-content">
                <div class="title">
                    <h4><?php echo $page->post_title;  ?> </h4>
                </div><!--title -->
                <div class="excerpt">
                    <p> 
                <?php if($page): ?>
                    <?php setup_postdata($post = $page);?>

                    <?php the_excerpt();
                    
                    wp_reset_postdata();
                    ?>
                    <?php endif; ?>
                    </p>
                <a href="<?php echo esc_url(get_permalink($page->ID));?>" class="btn btn-danger"><?php esc_html_e('Read More','ileystheme') ?></a>
                </div><!--excerpt -->
            </div>

        </div><!--row -->
    </div><!--container -->
</section>
<?php endif;?>