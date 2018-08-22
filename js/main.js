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
        (window.scrollY >= about-100)? addWhite():addTransparent()  
    });
    
    $('#front-header').hover(function(){


        isthere= $('#front-header').hasClass('bg-white');
        if(isthere){
            
            return;
        }
        else{
            addWhite();
        }

    }, function(){
        var about = $('#about').height();
        if(window.scrollY >=about-100 ){
            return;
        }
        addTransparent();
    });


    $(document).on('click','.ileys-load-more',function(){
         var page = $(this).data('page');
         var ajaxurl = $(this).data('url');
         $.ajax({
             url :ajaxurl,
             type:'post',
             data:{
                 page:page,
                 action:'ileys_load_more'
             },
             error:function(res){
                console.log(res);
             },
             success:function(res){
                $('.post-container').append(res);
             }
         })
    });



    function addWhite(){
        if($('#front-header').hasClass('bg-transparent')){
            $('#front-header').removeClass('bg-transparent');
        }
        $('#front-header').addClass('bg-white');
    }
    function addTransparent(){
        if($('#front-header').hasClass('bg-white')){
            $('#front-header').removeClass('bg-white');
        }
        $('#front-header').addClass('bg-transparent');
    }

})(jQuery)
