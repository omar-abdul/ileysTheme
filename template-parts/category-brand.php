    
    

<article id ="post-<?php the_ID(); ?>" <?php post_class();?>>

    <div class="card-deck">
        <div class="card mx-5">
            <?php the_post_thumbnail('medium',['class'=>' card-img-top']);?>
            <div class="card-body">
                 <?php the_title('<h3 class="card-title">','</h3>');?>
                <p class="card-text"><?php the_excerpt();?></p>
            </div>
            <div class="card-footer">
            <?php $page= get_page_by_title('Get free quote'); ?>
                <a class="btn btn-info" href="<?php echo esc_url(get_page_link($page->ID)) ;?>"><?php echo __('Get Quote'); ?></a>
            </div>
    </div>
</article>
