<?php

/*

Generic template Standard Post Format

*/?>

<article id ="post-<?php the_ID(); ?>" <?php post_class();?>>
<div class="container">
<div class="card ">
    <?php  if(has_post_thumbnail()):?>
            <div class="standard-featured"></div>

    <div class="card-header" style='background-image:url("<?php echo get_thumbnail_default(); ?>");'>
    <?php endif;?>
  </div>
  <div class="card-body">
    <header>
       <?php the_title('<h3 class="card-title text-center">','</h3>');?>
    </header>
    <div class="mx-5 card-text-wrapper text-center">
    <p class="card-text "> <?php the_content();?></p>
  </div>
  </div>
  <div class='w-100'>
    <?php $page= get_page_by_title('Get free quote'); ?>
      <a class="btn  btn-lg btn-info w-100" href="<?php echo esc_url(get_page_link($page->ID)) ;?>"><?php echo __('Get Quote'); ?>

    </a>
  </div>
</div>
</div>

</article>

