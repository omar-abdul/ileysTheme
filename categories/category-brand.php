    
    

<article id ="post-<?php the_ID(); ?>" <?php post_class("brand p-5 m-3");?>>

    <div class="container-fluid">
        <div class="card-box">
        
            <div class="photo bg-image-contain"  style="background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium-large')?>)">
            </div>
                <div class="description">
                        <?php the_title('<h3 class="card-title">','</h3>');?>
                        <p class="card-text"><?php the_excerpt();?></p>


                    </div>
           
                    <div class='card-box-footer'>
                            <?php $page= get_page_by_title('Get free quote'); ?>
                            <a class="btn   btn-info  w-100" href="<?php echo esc_url(get_page_link($page->ID)) ;?>"><?php echo __('Get Quote'); ?>

                            </a>

                        </div>


            </div><!--card-box-->

    </div><!--container-->
</article>
