<?php

/*

Generic template Standard Post Format

*/?>

<article id ="post-<?php the_ID(); ?>" <?php post_class('ileys-gallery-format');?>>
<div class="container">
<div class="card text-center">

    <header>
            <?php
                if(get_thumbnail_default()):
                    $attachments = get_thumbnail_default(5);
            ?>
            <div id='post-gallery-<?php the_ID()?>' class='carousel slide' data-ride='carousel'>
                    <div class='carousel-inner' role='listbox'>
                        <?php
                            $i = 0;
                            foreach($attachments as $attachment):
                                $active = ($i== 0?'active':'');

                        ?>
                        <div class='carousel-item <?php echo $active?> bg-image standard-featured' style='background-image:url(<?php echo wp_get_attachment_url($attachment->ID);?>)'></div>
                        <?php $i++; endforeach;?>

                    </div>
                    <a class="carousel-control-prev" href="#post-gallery-<?php the_ID()?>" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#post-gallery-<?php the_ID()?>" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
            </div>
        <?php endif;?>
    </header>
  <div class="card-body">
    <header>
        <a href="<?php the_permalink();?>"><?php the_title('<h3 class="card-title">','</h3>');?></a>
    </header>
    <p class="card-text"> <?php the_excerpt();?></p>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>
</div>

</article>

