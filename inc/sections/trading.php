<?php 
$cat = get_theme_mod('ileys_trading_dropdowncat',0);


$args = array(
    'posts_per_page'=>5,
    'category'=>get_theme_mod('ileys_trading_dropdowncat')
);
$posts = get_posts($args);

if($cat !==0):

?>
<section class="trading">

<div class="container"> 
        <div class="title text-center">
           <h2> <?php echo __(get_theme_mod('ileys_trading_title','Trading'));?></h2> 
        </div><!--title -->
        <div class="peek-content">
    <div class="row p-5">


<?php foreach($posts as $post):?>
        <div class=" col-12 col-md-4 img-wrap pb-3">
           


                <?php the_post_thumbnail('medium',['class'=>' img-fluid']);
                
               
                ?>
                <span class="img-caption"><p><?php the_title();?></p></span>
                </div><!--col-sm-6 -->
        <?php endforeach; ?>
           
                <?php wp_reset_postdata();?>
       
        </div><!--row -->
    </div>
</div><!--container -->
</section>
<?php endif;?>
