define(['jquery','fancybox','carousel','bootstrap','modernizr','scrollto','mmenu'], function($,fancybox,owlCarousel)
{
    return new function(){
        var self = this;
        self.run = function(){
            $('.fancybox').fancybox({
                padding: 10,
                openEffect : 'elastic',
                openSpeed  : 150,
                closeEffect : 'elastic',
                closeSpeed  : 150
            });

            $('#thumb-list').owlCarousel({
                itemsCustom : [
                    [240, 1],
                    [320, 2],
                    [360, 2],
                    [480, 4],
                    [600, 5],
                    [700, 6],
                    [768, 2],
                    [1000, 2],
                    [1200, 3],
                    [1400, 3]
                ],
                navigation : true,
                pagination: false,
                navigationText: false
            });
            $("#owl-new").owlCarousel({
                navigation : true,
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem:true
            });
            
            $('#menu-mobile').mmenu({
                extensions  : [ 'effect-slide-menu', 'pageshadow' ],
                counters    : true,
                navbars     : [
                    { position    : 'top', }
                ]
            }, {
                offCanvas: {
                    pageSelector: ".page"
                }
            });

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

            $('.qtyplus').click(function(e){
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                fieldName = $(this).attr('field');
                // Get its current value
                var currentVal = parseInt($('input[name='+fieldName+']').val());
                // If is not undefined
                if (!isNaN(currentVal)) {
                    // Increment
                    $('input[name='+fieldName+']').val(currentVal + 1);
                } else {
                    // Otherwise put a 0 there
                    $('input[name='+fieldName+']').val(0);
                }
            });

            // This button will decrement the value till 0
            $(".qtyminus").click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                fieldName = $(this).attr('field');
                // Get its current value
                var currentVal = parseInt($('input[name='+fieldName+']').val());
                // If it isn't undefined or its greater than 0
                if (!isNaN(currentVal) && currentVal > 0) {
                    // Decrement one
                    $('input[name='+fieldName+']').val(currentVal - 1);
                } else {
                    // Otherwise put a 0 there
                    $('input[name='+fieldName+']').val(0);
                }
            });

        };
    }
});