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

        $(this).siblings('.submenu .submenu-dropdown').toggleClass('submenu-dropdown-active',200)
    })
    // $(".lightbox-link").click(function(e){

    //     $('.lightbox-content img').attr('src',e.target.src);
    //     $('#myLightbox').lightbox({
    //         show:true,
    //         backdrop:false
    //     });
    // })
    function getSectionHeight(section){
        if($(section).length){
            return $(section).offset().top+ $(section).outerHeight();
        }
        return null;
       
    }

    $(window).scroll(function(){


        var about = $('#about').height();
        (window.scrollY >= about-100)? addWhite():addTransparent()  ;

    var windowBottom = $(window).scrollTop()+$(window).height();
    var aboutSection = getSectionHeight('.about');
    var productSection = getSectionHeight('.products');
    var tradingSection = getSectionHeight('.trading');
    // var partnerSection = getSectionHeight('.partner');

        if(aboutSection && windowBottom >= aboutSection){
            $('#about .section-image').animate({
                
                opacity:'1',
                left:'0'
               

            },1000)
            $('#about .peek-content').animate({
                
                opacity:'1',
                right:'0'
               

            },1000)
        }
        if(productSection && windowBottom >= productSection-150){
            $('.products').animate({
                opacity:'1',
            },400,function(){
                $('.main-content').animate({
                
                    opacity:'1',
                    bottom:'0'
                   
    
                },800)
            });

        }
        if(tradingSection && windowBottom >= tradingSection){
            $('.trading').animate({
                opacity:'1'
            },800,function(){
                $('.trading .section-image').animate({
                
                    opacity:'1',
                    right:'0'
                   
    
                },800)
                $('.trading .peek-content').animate({
                    
                    opacity:'1',
                    left:'0'
                   
    
                },800)
            })
        }

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
        var that = $(this);
         var page = $(this).data('page');
         var newpage = page+1;

         
         var ajaxurl = $(this).data('url');
         var newpage = page +1;

         var category = $(this).data('category');
         $.ajax({
             url :ajaxurl,
             type:'post',
             data:{
                 page:page,
                 category:category,
                 action:'ileys_load_more'
             },
             error:function(res){
                console.log(res);
             },
             success:function(res){
                 that.data('page',newpage);
                $('.ileys-post-container').append(res);
             }
         })
    });



    function addWhite(){
        if($('#front-header').hasClass('bg-nav')){
            $('#front-header').removeClass('bg-nav');
        }
        $('#front-header').addClass('bg-white');
    }
    function addTransparent(){
        if($('#front-header').hasClass('bg-white')){
            $('#front-header').removeClass('bg-white');
        }
        $('#front-header').addClass('bg-nav');
    }

})(jQuery)
