<?php

?>


<article id ="post-<?php the_ID(); ?>" <?php post_class();?>>
<div class="container ">
    <div class="entry-header text-center">
       <?php the_title('<h3 class="entry-title">', '</h3>'); ?>
    </div>
  <div class="entry-content">
    <?php the_content();?>
  </div>

</div>
</div>

</article>