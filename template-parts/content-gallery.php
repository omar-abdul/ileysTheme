<?php

/*

Generic template Gallery Post Format

*/?>

<article id ="post-<?php the_ID(); ?>" <?php post_class('ileys-gallery-format');?>>
<div class="container">
<div class="card " itemscope itemtype="https://schema.org/Thing">
        <header>
                <?php  if(get_thumbnail_default()):
                    $attachments = get_thumbnail_default(5);
                    ?>

                   <div  id = 'post-gallery-<?php the_ID();?>' class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <?php 
                                $i = 0;
                            foreach($attachments as $attachment):
                                 $active = ($i==0 ?'active':'');
                            ?>
                                <div itemprop="image" class='carousel-item <?php echo $active;?> bg-image standard-featured' style='background-image:url(<?php echo wp_get_attachment_url($attachment->ID);?>)'>

                                </div>
                            <?php $i++; endforeach; ?>
                        </div>
                   </div> 
                <?php endif; ?>
            
         </header>
  <div class="card-body">
    
       <?php the_title('<h3 class="card-title text-center" itemprop="name">','</h3>');?>
   
    <div class="card-text-wrapper " itemprop="description">
    
        <?php 
            $content = get_the_content();
            $content = preg_replace("/<img[^>]+\>/i"," ", $content);
            $content = apply_filters("the_content",$content);
            $content = str_replace (']]>',']]>', $content);
            echo $content;
        ?>
    
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

