<?php

/*

Generic template Standard Post Format

*/?>

<article id ="post-<?php the_ID(); ?>" <?php post_class();?>>
<div class="container">
<div class="card text-center">
    <?php  if(has_post_thumbnail()):?>
            <div class="standard-featured"></div>

    <div class="card-header" style='background-image:url("<?php echo get_the_post_thumbnail_url(); ?>");'>
    <?php endif;?>
  </div>
  <div class="card-body">
    <header>
        <a href="<?php the_permalink();?>"><?php the_title('<h3 class="card-title">','</h3>');?></a>
    </header>
    <p class="card-text"> <?php the_excerpt();?></p>
  </div>
  <div class="card-footer text-muted">
     <?php echo ileys_post_data();?>
  </div>
</div>
</div>

</article>

