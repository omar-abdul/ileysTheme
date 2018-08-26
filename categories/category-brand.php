    
    

<article id ="post-<?php the_ID(); ?>" <?php post_class("brand p-5 m-3");?>>

    <div class="container-fluid">
        <div class="card-box">
        <div class="row align-items-center  ">
            <div class="col p-5"><?php the_post_thumbnail('medium',['class'=>'  img-responsive']);?></div>
           
          
                <div class="col p-5">
                        <?php the_title('<h3 class="card-title">','</h3>');?>
                        <p class="card-text"><?php the_excerpt();?></p>
                    </div>
           
           </div> <!--row--> 

        <div class='mt-3 card-box-footer'>
            <?php $page= get_page_by_title('Get free quote'); ?>
            <a class="btn   btn-info  w-100" href="<?php echo esc_url(get_page_link($page->ID)) ;?>"><?php echo __('Get Quote'); ?>

            </a>

        </div>
        </div><!--card-box-->

    </div><!--container-->
</article>
