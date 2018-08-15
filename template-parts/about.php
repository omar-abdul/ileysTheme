
<section class="about">

    <div class="container"> 

        <div class="row text-center">
            <?php if(get_theme_mod('ileys_dropdownpages')!=0):?>
            <div class="col-sm-4 ftrd-img">
                <?php $page = get_post(get_theme_mod('ileys_dropdownpages')); ?>
                <div class="section-image"><?php echo get_the_post_thumbnail($page->ID, 'thumbnail' );?></div>
            </div>
            <div class="col-sm-3">
                <div class="title">
                    <h4><?php echo $page->post_title;  ?> </h4>
                </div>
                <div class="excerpt">
                    <p><?php if($page->post_excerpt !==''): echo $page->post_excerpt?>
                        <?php else: echo $page->post_content;?>
                    <?php endif; ?>  

                    </p>
                </div>


            </div>
<?php endif;?>
        </div>
    </div>
</section>