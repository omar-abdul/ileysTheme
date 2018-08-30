<?php
$cat = get_theme_mod('ileys_category_partner_setting',0);


$args = array(
    'posts_per_page'=>5,
    'category'=>get_theme_mod('ileys_category_partner_setting')
);
$posts = get_posts($args);

if($cat !==0):

?>
<section class="partner">

    <div class="main-content">
        <div class="title text-center">
            
            <h3><?php echo __('Partners', 'ileys')?></h3>
        </div><!--title -->
    <!-- <div id="myLightbox" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
                <div class='lightbox-content'>
                 <img id='lightbox-img' src="">
                <div class="lightbox-caption"><p id='lightbox-caption'></p></div>
                </div>
            </div> -->

        <div class="container"> 

            <div class="partner-carousel owl-carousel owl-theme">
            <?php foreach ($posts as $post):?>

           
                <div class="item">
                    <a href="<?php echo get_the_post_thumbnail_url($post->ID,'full')?>" data-toggle="lightbox"  data-max-width='600' data-gallery="example-gallery"> <?php 
                    $arr = array(
                        'id'=>'img_'.$post->ID,
                        'class'=>' img-fluid img-thumbnail '
                    ) ;
                    
                    ?><div class="bg-image" style="background-image:url('<?php echo get_the_post_thumbnail_url($post->ID ,'large'); ?>') ; "> 
                    </div>
                    
                    </a>                
                </div>

                
               
                <?php endforeach;?>
                <?php wp_reset_postdata();?>

            </div><!--row-->
        </div><!--container-->

    </div><!--main-content-->


</section>
<?php endif; ?>