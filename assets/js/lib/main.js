$(window).load(function() {
    // PRELOADER
    if ($('body').hasClass('hide')) {
        $('.preloader').fadeOut(1000, function(){
            setTimeout(function(){$('.preloader').remove(); },2000);
            $('body').removeClass('hide');
        });
        $('body').removeClass('hide');
    } else {
        $('.preloader').fadeOut(1000, function(){
            $('.preloader').remove();
        });
    }
});

$(function() {
    $('#menu-mobile').mmenu({
        extensions  : [ 'effect-slide-menu', 'pageshadow' ],
        counters  : true,
        navbar    : {
            // title    : 'Advanced menu'
        },
        navbars   : [
            { position  : 'top', }
        ]
    });
});

$(document).ready(function() {
    $('footer h4.title').click(function() {
        $(this).toggleClass('active');
        $(this).next().slideToggle(250);
    });
    $('li.all_categories').mouseover(function() {
        $(this).addClass('open');
    });
    $('li.all_categories').mouseleave(function() {
        $(this).removeClass('open');
    });
    $('li.all_categories ul').mouseover(function() {
        $('.background-hover').addClass('active');
    });
    $('li.all_categories ul').mouseleave(function() {
        $('.background-hover').removeClass('active');
    });
});

$(document).ready(function(){

    /** 
     * This part does the "fixed navigation after scroll" functionality
     * We use the jQuery function scroll() to recalculate our variables as the 
     * page is scrolled/
     */
    $(window).scroll(function(){
        var window_top = $(window).scrollTop() + 12; // the "12" should equal the margin-top value for nav.stick
        var div_top = $('.row-floor-wrapper').offset().top;
            if (window_top > div_top) {
                $('.floor-elevator-block').addClass('stick');
            } else {
                $('.floor-elevator-block').removeClass('stick');
            }
    });

    /**
     * This part causes smooth scrolling using scrollto.js
     * We target all a tags inside the nav, and apply the scrollto.js to it.
     */
    $(".floor-menu a").click(function(evn){
        evn.preventDefault();
        $('html,body').scrollTo(this.hash, this.hash); 
    });

    /**
     * This part handles the highlighting functionality.
     * We use the scroll functionality again, some array creation and 
     * manipulation, class adding and class removing, and conditional testing
     */
    var aChildren = $(".floor-menu li").children(); // find the a children of the list items
    var aArray = []; // create the empty aArray
    for (var i=0; i < aChildren.length; i++) {    
        var aChild = aChildren[i];
        var ahref = $(aChild).attr('href');
        aArray.push(ahref);
    } // this for loop fills the aArray with attribute href values

    $(window).scroll(function(){
        var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
        var windowHeight = $(window).height(); // get the height of the window
        var docHeight = $(document).height();

        for (var i=0; i < aArray.length; i++) {
            var theID = aArray[i];
            var divPos = $(theID).offset().top; // get the offset of the div from the top of page
            var divHeight = $(theID).height(); // get the height of the div in question
            if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                $("a[href='" + theID + "']").addClass("active");
            } else {
                $("a[href='" + theID + "']").removeClass("active");
            }
        }
    });
});


jQuery("#HeaderSearchCategoryBox").change(function(e) {
    switch(jQuery(this).val()){
        case "":
            cattitle = 'Category';
        break;
        case '1':
            cattitle = 'Fashion Pria';
        break;
        case '2':
            cattitle = 'Fashion Wanita';
        break;
    }
    jQuery('#valueHeaderSearchCategoryBox').html(cattitle);
});
jQuery("#HeaderSearchCategoryBox").trigger('change');

$(function() {
    $('.fancybox').fancybox({
        padding: 10,
        openEffect : 'elastic',
        openSpeed  : 150,
        closeEffect : 'elastic',
        closeSpeed  : 150
    });
  });