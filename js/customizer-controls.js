jQuery(document).ready(function($){

console.log('things');
wp.customize('ileys_category_setting',function(value){
    value.bind(function(newVal){
        newVal = parseInt(newVal,10);
        if(newVal > 0 ){
            value.set(newVal)
            console.log('yeay')
        }
        else {
            console.log("@not")
        }

        });
    });
});