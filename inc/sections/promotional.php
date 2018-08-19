
<?php 
if(get_theme_mod('ileys_promotion_bg')!==''):
?>

<div class="container-fluid">
    <?php $image = esc_url(get_theme_mod('ileys_promotion_bg'));
          $btntxt = esc_attr(get_theme_mod('promotion_button_text',__('Try Now')));
          $txt = esc_attr(get_theme_mod('promotion_section_text',__('Input whatever text')));
          $btnurl = esc_url(get_theme_mod('promotion_button_url'));
    ?>
        <section class="promotion" style='background-image:url("<?php echo $image?>")'>


            <div class="container">
                <div class="promo-content">
                <div class="row justify-content-center">
                <div class="title">
                    <h4><?php echo $txt ?></h4>

                    </div>
                </div>


                <div class="row justify-content-center">
                <div class="text-center">
                    <a class="btn btn-info btn-lg" href="<?php echo $btnurl?>"><?php echo $btntxt;?></a>
                </div>
                </div>
</div>


            </div>
        </section>
</div>
<?php endif;?>

