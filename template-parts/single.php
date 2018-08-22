<?php 


/*

Single post template 


*/

?>

<article id ="post-<?php the_ID(); ?>" <?php post_class();?>>
<div class="container">
    <div class="entry-header text-center">
        <div class="entry-meta"><?php echo single_ileys_post_data();?></div>
       <?php the_title('<h3 class="entry-title">','</h3>'); ?>
    </div>
  <div class="entry-content clear-fix">
      <?php the_content(); ?>
  </div>
</div>
</div>

</article>
