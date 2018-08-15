(function($){

    $(document).click(function(){
        $('.submenu-dropdown').removeClass('submenu-dropdown-active',500);
    })

    $(".icon").click(function(){
        $(".icon").toggleClass("active");
        $(".site-nav").toggleClass("site-nav-active",500);
    })
    $(".submenu-toggle").click(function(e){
        e.preventDefault();
        e.stopPropagation();
        $('.submenu .submenu-dropdown').toggleClass('submenu-dropdown-active',500)
    })

})(jQuery)
