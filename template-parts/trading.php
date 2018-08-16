<?php $page = get_post(get_theme_mod('ileys_trading_dropdownpages')); ?>
<section class="trading">

<div class="container"> 
        <div class="title text-center">
            <h4><?php echo $page->post_title;  ?> </h4>
        </div><!--title -->
    <div class="row align-items-center">

        <?php if(get_theme_mod('ileys_trading_dropdownpages')!=0):?>

        <div class="col-lg">

            <div class="excerpt">
                <p> 
            <?php if($page): ?>
                <?php setup_postdata($post = $page);?>

                <?php the_excerpt();
                
                wp_reset_postdata();
                ?>
                <?php endif; ?>
                </p>
            <a href="<?php echo esc_url(get_permalink($page->ID));?>" class="btn btn-trade"><?php esc_html_e('Read More','btn_text_domain') ?></a>
            </div><!--excerpt -->


        </div><!--col-sm-6 -->

        <div class="col-lg-4  mt-3 mb-5 text-center">


                <div class="section-image">
                    <div class='trade-img' style="background-image:url('<?php echo get_the_post_thumbnail_url($page->ID);?>')">
                           
                </div>
            </div>

        </div>
<?php endif;?>
    </div><!--row -->
</div><!--container -->
</section>
