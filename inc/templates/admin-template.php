<h1>Ileys Theme</h1>
<?php settings_errors();?>
<form method="POST" action="options.php">
    <?php settings_fields('ileys-settings-group');?>
    <?php  do_settings_sections('ileys_theme')?>
    <?php submit_button();?>

    
</form>

