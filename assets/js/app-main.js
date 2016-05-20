var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
	baseUrl: '/',
    urlArgs: "v=002",
	waitSeconds: 60,
	shim: {
		"bootstrap"	: {
			deps: ['jquery'],
		},
		'jq_ui' : {
			deps : ['jquery'],
		},
		"noty" : {
			deps : ['jquery'],
		},
		"cart" : {
			deps : ['jquery'],
		},
		'fancybox' : {
			deps : ['jquery'],
		},
		'carousel' : {
			deps : ['jquery'],
		},
		'scrollto' : {
			deps : ['jquery']
		},
		'mmenu' : {
			deps : ['jquery']
		},
		'flexslider' : {
			deps : ['jquery']
		}
	},

	paths: {
		// LIBRARY
		cart			: 'js/shop_cart',
		jq_ui			: 'js/jquery-ui',
		noty			: 'js/jquery.noty',
		jquery 			: dirTema+'/assets/js/lib/jquery.min',
		bootstrap		: dirTema+'/assets/js/lib/bootstrap.min',
		scrollto		: dirTema+'/assets/js/lib/jquery.scrollto',
		mmenu			: dirTema+'/assets/js/lib/jquery.mmenu.min.all',
		carousel		: dirTema+'/assets/js/lib/owl.carousel.min',
		fancybox		: dirTema+'/assets/js/lib/jquery.fancybox.pack',
		flexslider		: dirTema+'/assets/js/lib/jquery.flexslider-min',
		modernizr		: dirTema+'/assets/js/lib/modernizr.custom.28468',
		
		// ROUTE
		router          : 'js/router',

		// CONTROLLER
		main	        : dirTema+'/assets/js/default',
		home	        : dirTema+'/assets/js/home',
	}
});
require([
	'jquery',
	'router',
	'cart',
	'main'
], function($,router,cart,main){
	router.define('/', 'home@run');
	router.define('home', 'home@run');
	router.run();
	cart.run();
	main.run();
});