define(['jquery','flexslider','scrollto'], function($, flexslider)
{
    return new function(){
        var self = this;
        self.run = function(){
            $('#bg-slider .flexslider').flexslider({
                animation: "slide",
                directionNav: true,
                controlNav: false,
                prevText: "",
                nextText: ""
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

        };        
    }
});