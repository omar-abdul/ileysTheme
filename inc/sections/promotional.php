
<?php 
if(!empty(get_theme_mod('ileys_promotion_bg'))):
?>

<div class="container-fluid p-0">

        <section class="promotion" style='background-image:url("<?php echo esc_url(get_theme_mod('ileys_promotion_bg'));?>")' >
        


            <div class="container">
                <div class="promo-content">
                <div class="row justify-content-center">
                <div class="title">
                    <h4><?php echo esc_attr(get_theme_mod('promotion_section_text',__('Input whatever text'))); ?></h4>

                    </div>
                </div>


                <div class="row justify-content-center">
                <div class="text-center">
                    <a class="btn btn-info btn-lg" href="<?php echo esc_url(get_theme_mod('promotion_button_url')); ?>"><?php echo esc_attr(get_theme_mod('promotion_button_text',__('Try Now')));?></a>
                </div>
                </div>
</div>


            </div>
        </section>
</div>
<?php endif;?>

