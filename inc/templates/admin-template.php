<h5>Ileys General Options</h5>


<?php settings_errors();?>

<?php

$slide1 = esc_attr(get_option('slider_image_1'));
$slide2 = esc_attr(get_option('slider_image_2'));
$slide3 = esc_attr(get_option('slider_image_3'));

?>
<div class="container">
<div class="row">

    <div class="col-sm-4" >
  
        <img class="img-thumbnail" id="image1" src="<?php print $slide1?>">
        <p> <em>slide 1 </em></p>
    </div>

    <div class="col-sm-4" >
        <img src="<?php print $slide2?>" id="image2" class="img-thumbnail" >
        <p> <em>slide 2 </em></p>

    </div>
    <div class="col-sm-4">
        <img src="<?php print  $slide3?>"  id="image3" class="img-thumbnail" >
        <p> <em>slide 3 </em></p>
    </div>
</div>

</div>

<form method="POST" action="options.php">
    <?php settings_fields('ileys-settings-group');?>
    <?php  do_settings_sections('ileys_theme')?>
    <?php submit_button();?>

    
</form>

