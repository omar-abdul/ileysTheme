(function($){
    $(document).click(function(e){
        $(".submenu-dropdown").removeClass('submenu-active');
    })
    $(".icon").click(function(){
        $(".icon").toggleClass("active");
        $(".site-nav").toggleClass("site-nav-active",500);
    })
    $(".submenu-toggle").click(function(e){
        e.preventDefault();
        e.stopPropagation();
        $('.submenu-dropdown').toggleClass("submenu-active");
    })


})(jQuery)
