(function($){

    $(document).click(function(){
        $('.submenu-dropdown').removeClass('submenu-dropdown-active',200);
    })
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

    $(".icon").click(function(){
        $(".icon").toggleClass("active");
        $(".site-nav").toggleClass("site-nav-active",500);
    })
    $(".submenu-toggle").click(function(e){
        e.preventDefault();
        e.stopPropagation();
        $('.submenu .submenu-dropdown').toggleClass('submenu-dropdown-active',200)
    })
    $(".lightbox-link").click(function(e){

        $('.lightbox-content img').attr('src',e.target.src);
        $('#myLightbox').lightbox({
            show:true,
            backdrop:false
        });
    })

    $(window).scroll(function(){
        var about = $('#about').height();
        if(window.scrollY >= about-100){
            $('#front-header').addClass('bg-white',200);
        }
        else{
            $('#front-header').removeClass('bg-white'); 
        }     
    });
    
    $('#front-header').hover(function(){

        $('#front-header').removeClass('bg-transparent');
        isthere= $('#front-header').hasClass('bg-white');
        if(isthere){
            
            return;
        }
        else{
            $('#front-header').addClass('bg-white',200); 
        }

    }, function(){
        var about = $('#about').height();
        if(window.scrollY >=about-100 ){
            return;
        }
        $('#front-header').removeClass('bg-white');
    });



})(jQuery)
