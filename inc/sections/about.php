<?php if(get_theme_mod('ileys_dropdownpages')!=0):?>
<section class="about" id="about">

    <div class="container"> 

        <div class="row align-items-center">

            <div class="col-lg ftrd-img">
                <?php $page = get_post(get_theme_mod('ileys_dropdownpages')); ?>
                <div class="section-image"><?php echo get_the_post_thumbnail($page->ID, array(555,355) );?></div>
            </div>
            <div class="col-lg">
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
                <a href="<?php echo esc_url(get_permalink($page->ID));?>" class="btn btn-danger"><?php esc_html_e('Read More','btn_text_domain') ?></a>
                </div><!--excerpt -->


            </div><!--col-sm-6 -->

        </div><!--row -->
    </div><!--container -->
</section>
<?php endif;?>