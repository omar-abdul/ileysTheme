/*

##############
Admin panel js 
###############


*/

jQuery(document).ready(function($){

    invokeUpload('#upload-btn-1','#slider_image_1', '#image1');
    invokeUpload('#upload-btn-2','#slider_image_2', '#image2');
    invokeUpload('#upload-btn-3','#slider_image_3', '#image3');
    

    function invokeUpload(btn, form_el ,img_container){
        btn = btn.toString();
        form_el = form_el.toString();
        $(btn).on('click',function(e){
            var mediaUploader;

            e.preventDefault();
            if(mediaUploader){
                mediaUploader.open();
                return;
            }
    
            mediaUploader = wp.media.frames.file_frame = wp.media({
                title: 'Choose a slide image',
                button: {
                    text:'Choose image'
                },
                multiple: false
            })
            mediaUploader.on('select',function(){
                attachment =  mediaUploader.state().get('selection').first().toJSON();
                
                $(form_el).val(attachment.url);
                $(img_container).attr('src',attachment.url);
            });
            mediaUploader.open();
    
        });
    }

});
