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
        console.log(about)
        if(window.scrollY >= about-100){
            $('header').addClass('bg-white box-shadow');
            $('header').removeClass('bg-transparent',200);

        }
        else{
            $('header').addClass('bg-transparent',200);
            $('header').removeClass('bg-white  box-shadow');  
        }
        
    });

})(jQuery)
