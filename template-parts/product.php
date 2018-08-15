<?php
$cat = get_theme_mod('ileys_category_setting');
echo $cat;

$args = array(
    'posts_per_page'=>5,
    'category'=>get_theme_mod('ileys_category_setting')
);
$posts = get_posts($args);

?>

<section class="products">

    <div class="title text-center">
            
        <h3><?php echo __('Products', 'ileys')?></h3>
    </div><!--title -->
    <div class="main-content">
    
    <?php foreach ($posts as $post):?>
        <h3><?php echo the_title();?></h3>
    </div>
<?php endforeach;?>



</section>