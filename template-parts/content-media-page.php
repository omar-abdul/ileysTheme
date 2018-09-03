<?php 
/**
 * 
 * Generic Template for media page
 */
?>

<h3 class="media-title">Images</h3>

<div class="row my-5">
<?php  if(get_thumbnail_default()):
                    $attachments = get_thumbnail_default(-1);
                    ?>

                   
                        
                            <?php 
                               
                            foreach($attachments as $attachment):
                                 
                            ?>
                                <a href="<?php echo wp_get_attachment_url($attachment->ID);?>" data-toggle="lightbox" data-gallery="imagegallery"  data-title='<?php get_the_post_thumbnail_caption();?>' class="col-sm-4">
                                
                                <img class="img-fluid" src="<?php echo wp_get_attachment_url($attachment->ID);?>"  width="300" height:="300">
                                </a>
                                
                            <?php  endforeach; ?>
                        

                <?php endif; ?>

</div>

<h3 class="media-title">Videos</h3>

<div class="row my-5">


    <?php 
    $content = apply_filters('the_content',get_the_content());
    


        $media = get_all_embeds($content);

        foreach ($media as $m):?>
                <a href="<?php echo $m?>" data-toggle="lightbox" data-gallery="videogallery" class="col-sm-4">
                    <img src="" class="img-fluid yt-thumbnail" data-url="<?php echo $m; ?>">
                </a>
        <?php endforeach;?>


</div>