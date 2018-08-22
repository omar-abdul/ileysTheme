    
    

<article id ="post-<?php the_ID(); ?>" <?php post_class();?>>

    <div class="card-deck">
        <div class="card mx-5">
            <?php the_post_thumbnail('medium',['class'=>' card-img-top']);?>
            <div class="card-body">
                 <?php the_title('<h3 class="card-title">','</h3>');?>
                <p class="card-text"><?php the_excerpt();?></p>
            </div>
            <div class="card-footer">
                <button class="btn btn-info"><?php echo __('Get Quote'); ?></button>
            </div>
    </div>
</article>
