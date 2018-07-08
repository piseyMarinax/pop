<?php 
//blog session lang 
//$variable_sess = '';
//session_destroy();
//Session::set('lang');
//$_SESSION['lang'];
if (session_status() == PHP_SESSION_NONE) {
    session_start();
	$variable_sess = "Session has just started";
	if(!isset($_REQUEST['lang'])){
		if(@$_SESSION['lang'] == ''){
			$_SESSION['lang'] = "kh";
		}
	}else{
		$_SESSION['lang'] = $_REQUEST['lang'];
	}
}else{
	$variable_sess = "Session has started already";
	if(!isset($_REQUEST['lang'])){
		if(@$_SESSION['lang'] == ''){
			$_SESSION['lang'] = "kh";
		}
	}else{
		$_SESSION['lang'] = $_REQUEST['lang'];
	}
}
$sess_url = $_SERVER['REQUEST_URI'];

?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#"> 
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="http://nextop.beautheme.com/xmlrpc.php">
<script type="text/javascript">document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
<title>POP CAMBODIA</title>
<!-- unicode font style-->
<link href="/assets/font.css" rel="stylesheet" type="text/css">
<!--end unicode font style-->
	<style>
		.wishlist_table .add_to_cart, a.add_to_wishlist.button.alt { border-radius: 16px; -moz-border-radius: 16px; -webkit-border-radius: 16px; }			
	</style>

<meta name="description" content="POP CAMBODIA, offer more interests of events as national or international, Artist, Model" />
<link rel="canonical" href="http://POPCAMBODIA.COM/contents/contacts" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="POP CAMBODIA, offer more interests of events as national or international, Artist, Model" />
<meta property="og:description" content="POP CAMBODIA, offer more interests of events as national or international, Artist, Model" />
<meta property="og:url" content="http://POPCAMBODIA.COM/" />
<meta property="og:site_name" content="POP CAMBODIA" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="POP CAMBODIA, offer more interests of events as national or international, Artist, Model" />
<meta name="twitter:title" content="POP CAMBODIA, offer more interests of events as national or international, Artist, Model" />
<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"http:\/\/popcambodia.com\/","name":"POP CAMBODIA Theme","potentialAction":{"@type":"SearchAction","target":"http:\/\/popcambodia.com\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>

<link rel='dns-prefetch' href='//s0.wp.com' />
<link rel='dns-prefetch' href='//secure.gravatar.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="POP CAMBODIA, offer more interests of events as national or international, Artist, Model; Feed" href="http://popcambodia.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="POP CAMBODIA, offer more interests of events as national or international, Artist, Model; Comments Feed" href="http://popcambodia.com/comments/feed/" />
<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"http:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"http:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/nextop.beautheme.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.8"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='simple-payments-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/jetpack/modules/simple-payments/simple-payments.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='ab-intlTelInput-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/appointment-booking/frontend/resources/css/intlTelInput.css?ver=9.4' type='text/css' media='all' />
<link rel='stylesheet' id='ab-reset-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/appointment-booking/frontend/resources/css/ab-reset.css?ver=9.4' type='text/css' media='all' />
<link rel='stylesheet' id='ab-ladda-min-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/appointment-booking/frontend/resources/css/ladda.min.css?ver=9.4' type='text/css' media='all' />
<link rel='stylesheet' id='ab-main-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/appointment-booking/frontend/resources/css/bookly-main.css?ver=9.4' type='text/css' media='all' />
<link rel='stylesheet' id='ab-picker-classic-date-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/appointment-booking/frontend/resources/css/picker.classic.date.css?ver=9.4' type='text/css' media='all' />
<link rel='stylesheet' id='ab-picker-date-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/appointment-booking/frontend/resources/css/picker.classic.css?ver=9.4' type='text/css' media='all' />
<link rel='stylesheet' id='ab-picker-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/appointment-booking/frontend/resources/css/ab-picker.css?ver=9.4' type='text/css' media='all' />
<link rel='stylesheet' id='ab-columnizer-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/appointment-booking/frontend/resources/css/ab-columnizer.css?ver=9.4' type='text/css' media='all' />
<link rel='stylesheet' id='ab-customer-profile-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/appointment-booking/frontend/modules/customer_profile/resources/css/customer_profile.css?ver=9.4' type='text/css' media='all' />
<link rel='stylesheet' id='flowdemo-demo-import-style-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/beautheme-demo//assets/css/style.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/contact-form-7/includes/css/styles.css?ver=4.9' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=3.1.2' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=3.1.2' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/woocommerce/assets/css/woocommerce.css?ver=3.1.2' type='text/css' media='all' />
<link rel='stylesheet' id='yith-quick-view-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/yith-woocommerce-quick-view/assets/css/yith-quick-view.css?ver=4.7.8' type='text/css' media='all' />
<style id='yith-quick-view-inline-css' type='text/css'>

				#yith-quick-view-modal .yith-wcqv-main{background:#ffffff;}
				#yith-quick-view-close{color:#cdcdcd;}
				#yith-quick-view-close:hover{color:#ff0000;}
</style>
<link rel='stylesheet' id='woocommerce_prettyPhoto_css-css' href='//nextop.beautheme.com/wp-content/plugins/woocommerce/assets/css/prettyPhoto.css?ver=3.1.2' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-selectBox-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css?ver=1.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='yith-wcwl-main-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/yith-woocommerce-wishlist/assets/css/style.css?ver=2.1.2' type='text/css' media='all' />
<link rel='stylesheet' id='yith-wcwl-font-awesome-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all' />
<link rel='stylesheet' id='nextop_parent-theme-style-css' href='<?php echo URL;?>templates/themes/bootstrap/themes/nextop/style.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='nextop_child-childtheme-style-css' href='<?php echo URL;?>templates/themes/bootstrap/themes/nextop-child/style.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='nextop-fonts-css' href='http://fonts.googleapis.com/css?family=Lato%3A100%2C300%2C400%2C700%2C900%7CPlayfair+Display%3A400%2C400italic%2C700%2C700italic%2C900%2C900italic%7CFedero%3A400%2C700italic%2C700%2C400italic&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='css-font-awesome-css' href='<?php echo URL;?>templates/themes/bootstrap/themes/nextop/asset/css/font-awesome.min.css?ver=4.3.0' type='text/css' media='all' />
<link rel='stylesheet' id='css-idangerous-css' href='<?php echo URL;?>templates/themes/bootstrap/themes/nextop/asset/css/swiper.min.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='css-animate-css' href='<?php echo URL;?>templates/themes/bootstrap/themes/nextop/asset/css/animate.css?ver=3.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='css-normalize-css' href='<?php echo URL;?>templates/themes/bootstrap/themes/nextop/asset/css/normalize.css?ver=4.2.0' type='text/css' media='all' />
<link rel='stylesheet' id='css-bootstrap-css' href='<?php echo URL;?>templates/themes/bootstrap/themes/nextop/asset/css/bootstrap.css?ver=3.3.1' type='text/css' media='all' />
<link rel='stylesheet' id='css-default-style-css' href='<?php echo URL;?>templates/themes/bootstrap/themes/nextop/asset/css/nextop.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='css-default-css' href='<?php echo URL;?>templates/themes/bootstrap/themes/nextop/style.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='color-filters-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/color-filters/assets/css/color-filters.css?ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/js_composer/assets/css/js_composer.min.css?ver=5.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_custom_css-css' href='<?php echo URL;?>templates/themes/bootstrap/uploads/js_composer/custom.css?ver=5.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='ms-main-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/masterslider/public/assets/css/masterslider.main.css?ver=3.1.3' type='text/css' media='all' />
<link rel='stylesheet' id='ms-custom-css' href='<?php echo URL;?>templates/themes/bootstrap/uploads/masterslider/custom.css?ver=3.3' type='text/css' media='all' />
<link rel='stylesheet' id='open-sans-css' href='http://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.7.8' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css' href='<?php echo URL;?>templates/themes/bootstrap/plugins/jetpack/css/jetpack.css?ver=5.2.1' type='text/css' media='all' />
<script>
      if (document.location.protocol != "http:") {
          document.location = document.URL.replace(/^http:/i, "http:");
      }
      </script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/bootstrap/plugins/appointment-booking/frontend/resources/js/spin.min.js?ver=9.4'></script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/bootstrap/plugins/appointment-booking/frontend/resources/js/ladda.min.js?ver=9.4'></script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/bootstrap/plugins/appointment-booking/frontend/resources/js/hammer.min.js?ver=9.4'></script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/bootstrap/plugins/appointment-booking/frontend/resources/js/jquery.hammer.min.js?ver=9.4'></script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/bootstrap/plugins/appointment-booking/frontend/resources/js/picker.js?ver=9.4'></script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/bootstrap/plugins/appointment-booking/frontend/resources/js/picker.date.js?ver=9.4'></script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/bootstrap/plugins/appointment-booking/frontend/resources/js/intlTelInput.min.js?ver=9.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var BooklyL10n = {"today":"Today","months":["January","February","March","April","May","June","July","August","September","October","November","December"],"days":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"daysShort":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"nextMonth":"Next month","prevMonth":"Previous month","show_more":"Show more"};
/* ]]> */
</script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/bootstrap/plugins/appointment-booking/frontend/resources/js/bookly.js?ver=9.4'></script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/bootstrap/plugins/appointment-booking/frontend/modules/customer_profile/resources/js/customer_profile.js?ver=9.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/nextop.beautheme.com\/cart-2\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='//nextop.beautheme.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.1.2'></script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/bootstrap/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=5.1.1'></script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/bootstrap/themes/nextop/asset/js/modernizr.custom.js?ver=2.7.1'></script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/bootstrap/themes/nextop/asset/js/swiper.min.js?ver=3.2.0'></script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/bootstrap/themes/nextop/asset/js/bootstrap.min.js?ver=3.3.1'></script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/bootstrap/themes/nextop/asset/js/isotope.pkgd.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/bootstrap/themes/nextop/asset/js/jquery.jplayer.js?ver=3.2.0'></script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/bootstrap/themes/nextop/asset/js/jplayer.playlist.min.js?ver=3.2.0'></script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/bootstrap/themes/nextop/asset/js/slick.min.js?ver=1.0.1'></script>
<script type='text/javascript' src='<?php echo URL;?>templates/themes/bootstrap/themes/nextop/asset/js/jquery.lazyload.min.js?ver=1.9.7'></script>
<link rel='http://api.w.org/' href='http://nextop.beautheme.com/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://nextop.beautheme.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo URL;?>templates/themes/includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 4.7.8" />
<meta name="generator" content="WooCommerce 3.1.2" />
<link rel='shortlink' href='http://wp.me/P8K6Pm-hj' />
<link rel="alternate" type="application/json+oembed" href="http://nextop.beautheme.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fnextop.beautheme.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://nextop.beautheme.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fnextop.beautheme.com%2F&#038;format=xml" />
<script>var ms_grabbing_curosr='<?php echo URL;?>templates/themes/bootstrap/plugins/masterslider/public/assets/css/common/grabbing.cur',ms_grab_curosr='<?php echo URL;?>templates/themes/bootstrap/plugins/masterslider/public/assets/css/common/grab.cur';</script>
<meta name="generator" content="MasterSlider 3.1.3 - Responsive Touch Image Slider" />
<link rel='dns-prefetch' href='//v0.wordpress.com'>
<link rel='dns-prefetch' href='//i0.wp.com'>
<link rel='dns-prefetch' href='//i1.wp.com'>
<link rel='dns-prefetch' href='//i2.wp.com'>
<style type='text/css'>img#wpstats{display:none}</style> <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
<meta name="generator" content="PING INFORMATION TECHNOLOGY GROUP." />
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="<?php echo URL;?>templates/themes/bootstrap/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><style type="text/css" title="dynamic-css" class="options-output">header .position-menu .social-header ul li i{color:;}.search-icon-svg{fill:;}.sticker .search-icon-svg{fill:#ffffff;}header .position-menu .social-header ul li i:hover{color:;}header,header.header-default,.position-menu,.header.header-default,#menu-content-home-slide{background:;}footer,footer .footer-widget .widget-title,footer .footer-widget .widget-body .menu li a,footer .footer-widget .widget-body,.book-info span.book-name a,footer .footer-widget .widget-body .book-info .book-price,.widget-footer .list-social a,.detail-project footer .architech-listsocial a, .page-template-architect-full footer .architech-listsocial a,footer .footer-left span.copyright,footer .footer-left span,footer .footer h4,footer .footer-left span.copyright:after{color:;}footer,footer .large-container{background:;}header #main-navigation.default .menu-item a, .header .position-menu .main-menu ul li a,#menu-content-home-slide .main-menu ul li a{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading header #main-navigation.default .menu-item a, .header .position-menu .main-menu ul li a,.wf-loading #menu-content-home-slide .main-menu ul li a,{opacity: 0;}.ie.wf-loading header #main-navigation.default .menu-item a, .header .position-menu .main-menu ul li a,.ie.wf-loading #menu-content-home-slide .main-menu ul li a,{visibility: hidden;}header #main-navigation.default .menu-item a:hover, .header .position-menu .main-menu ul li a:hover, .header .position-menu .main-menu ul li.menu-item-has-children:hover,.header .position-menu .main-menu ul li.menu-item-has-children:hover a,#menu-content-home-slide .main-menu ul li a:hover{color:;}header #main-navigation.default .menu-item:hover .sub-menu li,header .position-menu .main-menu ul li.menu-item-has-children .sub-menu,.header .position-menu .main-menu ul li.menu-item-has-children .sub-menu{background:;}header #main-navigation.default .menu-item:hover .sub-menu li a,.header .position-menu .main-menu ul li.menu-item-has-children .sub-menu li a,#menu-content-home-slide .main-menu ul li .sub-menu li a{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading header #main-navigation.default .menu-item:hover .sub-menu li a,.wf-loading .header .position-menu .main-menu ul li.menu-item-has-children .sub-menu li a,.wf-loading #menu-content-home-slide .main-menu ul li .sub-menu li a,{opacity: 0;}.ie.wf-loading header #main-navigation.default .menu-item:hover .sub-menu li a,.ie.wf-loading .header .position-menu .main-menu ul li.menu-item-has-children .sub-menu li a,.ie.wf-loading #menu-content-home-slide .main-menu ul li .sub-menu li a,{visibility: hidden;}header #main-navigation.default .menu-item:hover .sub-menu li a:hover,header .position-menu .main-menu ul li.menu-item-has-children .sub-menu li,.header .position-menu .main-menu ul li.menu-item-has-children .sub-menu li a:hover,#menu-content-home-slide .main-menu ul li .sub-menu li a:hover{color:;}body,header #main-navigation.default .menu-item a{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body,header #main-navigation.default .menu-item a,{opacity: 0;}.ie.wf-loading body,header #main-navigation.default .menu-item a,{visibility: hidden;}.title-element{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .title-element,{opacity: 0;}.ie.wf-loading .title-element,{visibility: hidden;}button,header #main-navigation.default .menu-item a,.form-input-contact input[type="submit"], .form-input input[type="submit"]{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading button,header #main-navigation.default .menu-item a,.wf-loading .form-input-contact input[type="submit"], .form-input input[type="submit"],{opacity: 0;}.ie.wf-loading button,header #main-navigation.default .menu-item a,.ie.wf-loading .form-input-contact input[type="submit"], .form-input input[type="submit"],{visibility: hidden;}button:hover{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading button:hover,{opacity: 0;}.ie.wf-loading button:hover,{visibility: hidden;}button,.form-input-contact input[type="submit"], .form-input input[type="submit"]{color:;}button:hover,.form-input-contact input[type="submit"]:hover, .form-input input[type="submit"]:hover{color:;}button,.form-input-contact input[type="submit"]:hover, .form-input input[type="submit"]:hover{color:;}button:hover,.form-input-contact input[type="submit"]:hover, .form-input input[type="submit"]:hover{color:;}.sidebar,.left-sidebar,.right-sidebar{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .sidebar,.wf-loading .left-sidebar,.wf-loading .right-sidebar,{opacity: 0;}.ie.wf-loading .sidebar,.ie.wf-loading .left-sidebar,.ie.wf-loading .right-sidebar,{visibility: hidden;}.sidebar,.left-sidebar,.right-sidebar{background-color:;}body,header #main-navigation.default .menu-item a,.text-social .short-description,.gallery-classic .item-gallery .text-full .author-text{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body,header #main-navigation.default .menu-item a,.wf-loading .text-social .short-description,.wf-loading .gallery-classic .item-gallery .text-full .author-text,{opacity: 0;}.ie.wf-loading body,header #main-navigation.default .menu-item a,.ie.wf-loading .text-social .short-description,.ie.wf-loading .gallery-classic .item-gallery .text-full .author-text,{visibility: hidden;}.description h2,.header-element,.about-element .title,.model-detail-element .content-details .details-text .title,.model-detail-element .img-show-model .hot,.model-detail-element .content-details .details-text .hot,.link,.model-detail-element .content-details .details-img .work,.service-element ul li .number,.blog-element .content-element ul li .content-item .text-content .title,.blog-element .content-element ul li .content-item .date-time,.content-text-about h3,.timeline-element .list-timeline ul li h3,.timeline-element .list-timeline ul li h2,.become-model .title,.cover-personer-artis .detials-content-cover h3,.cover-personer-artis .detials-content-cover h2,.album-item .details-album .year,.tour-element .list-tour .item-tour .title,.tour-element .list-tour .item-tour .day,.cover-personer .content-cover-personer h3,.cover-personer .item-social li .social,.details-personer .details-personer-slide .swiper-slide .item .content-details-personer h3,.list-testimonials .main-testimonial .content-testimonial,.btn-loadmore,.model-detail-element.style-text .content-about .content h3,.model-detail-element.style-text .content-about .title-about,.model-detail-element.style-text .content-about h5,.member-element .content-member .name,.offer-element .content-left,.blog-element.page .content-element-page ul li .content-item .text-content .title,.blog-element.page .content-element-page ul li .content-item .date-time,.blog-element .content-list ul li.post-content .content-item,.blog-element.list-page .content-element-page ul li .text-content .title,.blog-element.list-page .content-element-page ul li .content-item .date-time,.blog-element.list-page .content-element-page ul li .text-content span a,.contact-form .info-contact .title-contact,.product-sidebar .widget .widget-title,.product-detail h1,.more-detail-product .title-detail ul li,.more-detail-product .content-detail h1, .more-detail-product .content-detail h2, .more-detail-product .content-detail h3, .more-detail-product .content-detail h4, .more-detail-product .content-detail h5, .more-detail-product .content-detail h6,.title-review,.other-products .title-others,.hight-fashion .content-img-center .content-fashion-center,.hight-fashion .content-img .title-fashion,.architech-header-cover .title-page-architech .title-page,.detail-content-view .architech-items .title-architect-info,.text-full-bg .text-full-message,.text-full-bg .text-fill-auth,.detail-content-view .architech-items .architect-description,.detail-content-view .architech-items .follow-architect,.text-social .title-section,.gallery-classic .item-gallery .text-full .title-text,.short-paragraph .box-top,.architech-slider-project .architech-big-title,.architech-slider-project .architech-list-title .nav-item{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading .description h2,.wf-loading .header-element,.wf-loading .about-element .title,.wf-loading .model-detail-element .content-details .details-text .title,.wf-loading .model-detail-element .img-show-model .hot,.wf-loading .model-detail-element .content-details .details-text .hot,.wf-loading .link,.wf-loading .model-detail-element .content-details .details-img .work,.wf-loading .service-element ul li .number,.wf-loading .blog-element .content-element ul li .content-item .text-content .title,.wf-loading .blog-element .content-element ul li .content-item .date-time,.wf-loading .content-text-about h3,.wf-loading .timeline-element .list-timeline ul li h3,.wf-loading .timeline-element .list-timeline ul li h2,.wf-loading .become-model .title,.wf-loading .cover-personer-artis .detials-content-cover h3,.wf-loading .cover-personer-artis .detials-content-cover h2,.wf-loading .album-item .details-album .year,.wf-loading .tour-element .list-tour .item-tour .title,.wf-loading .tour-element .list-tour .item-tour .day,.wf-loading .cover-personer .content-cover-personer h3,.wf-loading .cover-personer .item-social li .social,.wf-loading .details-personer .details-personer-slide .swiper-slide .item .content-details-personer h3,.wf-loading .list-testimonials .main-testimonial .content-testimonial,.wf-loading .btn-loadmore,.wf-loading .model-detail-element.style-text .content-about .content h3,.wf-loading .model-detail-element.style-text .content-about .title-about,.wf-loading .model-detail-element.style-text .content-about h5,.wf-loading .member-element .content-member .name,.wf-loading .offer-element .content-left,.wf-loading .blog-element.page .content-element-page ul li .content-item .text-content .title,.wf-loading .blog-element.page .content-element-page ul li .content-item .date-time,.wf-loading .blog-element .content-list ul li.post-content .content-item,.wf-loading .blog-element.list-page .content-element-page ul li .text-content .title,.wf-loading .blog-element.list-page .content-element-page ul li .content-item .date-time,.wf-loading .blog-element.list-page .content-element-page ul li .text-content span a,.wf-loading .contact-form .info-contact .title-contact,.wf-loading .product-sidebar .widget .widget-title,.wf-loading .product-detail h1,.wf-loading .more-detail-product .title-detail ul li,.wf-loading .more-detail-product .content-detail h1, .more-detail-product .content-detail h2, .more-detail-product .content-detail h3, .more-detail-product .content-detail h4, .more-detail-product .content-detail h5, .more-detail-product .content-detail h6,.wf-loading .title-review,.wf-loading .other-products .title-others,.wf-loading .hight-fashion .content-img-center .content-fashion-center,.wf-loading .hight-fashion .content-img .title-fashion,.wf-loading .architech-header-cover .title-page-architech .title-page,.wf-loading .detail-content-view .architech-items .title-architect-info,.wf-loading .text-full-bg .text-full-message,.wf-loading .text-full-bg .text-fill-auth,.wf-loading .detail-content-view .architech-items .architect-description,.wf-loading .detail-content-view .architech-items .follow-architect,.wf-loading .text-social .title-section,.wf-loading .gallery-classic .item-gallery .text-full .title-text,.wf-loading .short-paragraph .box-top,.wf-loading .architech-slider-project .architech-big-title,.wf-loading .architech-slider-project .architech-list-title .nav-item,{opacity: 0;}.ie.wf-loading .description h2,.ie.wf-loading .header-element,.ie.wf-loading .about-element .title,.ie.wf-loading .model-detail-element .content-details .details-text .title,.ie.wf-loading .model-detail-element .img-show-model .hot,.ie.wf-loading .model-detail-element .content-details .details-text .hot,.ie.wf-loading .link,.ie.wf-loading .model-detail-element .content-details .details-img .work,.ie.wf-loading .service-element ul li .number,.ie.wf-loading .blog-element .content-element ul li .content-item .text-content .title,.ie.wf-loading .blog-element .content-element ul li .content-item .date-time,.ie.wf-loading .content-text-about h3,.ie.wf-loading .timeline-element .list-timeline ul li h3,.ie.wf-loading .timeline-element .list-timeline ul li h2,.ie.wf-loading .become-model .title,.ie.wf-loading .cover-personer-artis .detials-content-cover h3,.ie.wf-loading .cover-personer-artis .detials-content-cover h2,.ie.wf-loading .album-item .details-album .year,.ie.wf-loading .tour-element .list-tour .item-tour .title,.ie.wf-loading .tour-element .list-tour .item-tour .day,.ie.wf-loading .cover-personer .content-cover-personer h3,.ie.wf-loading .cover-personer .item-social li .social,.ie.wf-loading .details-personer .details-personer-slide .swiper-slide .item .content-details-personer h3,.ie.wf-loading .list-testimonials .main-testimonial .content-testimonial,.ie.wf-loading .btn-loadmore,.ie.wf-loading .model-detail-element.style-text .content-about .content h3,.ie.wf-loading .model-detail-element.style-text .content-about .title-about,.ie.wf-loading .model-detail-element.style-text .content-about h5,.ie.wf-loading .member-element .content-member .name,.ie.wf-loading .offer-element .content-left,.ie.wf-loading .blog-element.page .content-element-page ul li .content-item .text-content .title,.ie.wf-loading .blog-element.page .content-element-page ul li .content-item .date-time,.ie.wf-loading .blog-element .content-list ul li.post-content .content-item,.ie.wf-loading .blog-element.list-page .content-element-page ul li .text-content .title,.ie.wf-loading .blog-element.list-page .content-element-page ul li .content-item .date-time,.ie.wf-loading .blog-element.list-page .content-element-page ul li .text-content span a,.ie.wf-loading .contact-form .info-contact .title-contact,.ie.wf-loading .product-sidebar .widget .widget-title,.ie.wf-loading .product-detail h1,.ie.wf-loading .more-detail-product .title-detail ul li,.ie.wf-loading .more-detail-product .content-detail h1, .more-detail-product .content-detail h2, .more-detail-product .content-detail h3, .more-detail-product .content-detail h4, .more-detail-product .content-detail h5, .more-detail-product .content-detail h6,.ie.wf-loading .title-review,.ie.wf-loading .other-products .title-others,.ie.wf-loading .hight-fashion .content-img-center .content-fashion-center,.ie.wf-loading .hight-fashion .content-img .title-fashion,.ie.wf-loading .architech-header-cover .title-page-architech .title-page,.ie.wf-loading .detail-content-view .architech-items .title-architect-info,.ie.wf-loading .text-full-bg .text-full-message,.ie.wf-loading .text-full-bg .text-fill-auth,.ie.wf-loading .detail-content-view .architech-items .architect-description,.ie.wf-loading .detail-content-view .architech-items .follow-architect,.ie.wf-loading .text-social .title-section,.ie.wf-loading .gallery-classic .item-gallery .text-full .title-text,.ie.wf-loading .short-paragraph .box-top,.ie.wf-loading .architech-slider-project .architech-big-title,.ie.wf-loading .architech-slider-project .architech-list-title .nav-item,{visibility: hidden;}.header-element .title-element:after{background-color:;}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1461819220025{background-color: #ffffff !important;}.vc_custom_1474950767754{background-color: #0a0a0a !important;}.vc_custom_1462849648276{background-color: #f7f7f7 !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript> <style id="nextop-custom-fonts" type="text/css">
    
        
            </style>
	<link rel="icon" type="image/png" href="<?php echo URL;?>public/img/POP_logo.jpg" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php echo URL;?>public/img/POP_logo.jpg" sizes="32x32">

<!-- Starting blog company work with -->  
<style type="text/css">
/* ---------- gallery styles start here ----------------------- */
.gallery {
	list-style: none;
	margin: 0;
	padding: 0;
}
.gallery li {
	margin: 10px 5px;
	float: left;
	position: relative;
	width: 220px;
}
.gallery img {
	background: #fff;
	border: solid 1px #ccc;
	padding: 5px;
}
.gallery li:hover img {
	border-color: #999;
}
.gallery em {
	width: 102px;
	height:24px;
	background: url(public/images/bubble.gif) no-repeat;
	padding: 3px 0 6px;
	display: none;
	position: absolute;
	top: -2px;
	left: 50px;
	font-style: normal;
	text-align: center;
}
.gallery a {
	text-decoration: none;
	color: #000;
}
.gallery a:hover em {
	display: block;
}
</style>
<!-- ending blog company work with -->    
</head>
<?php 
	$url_arr = array(); $url_arr = explode('/', $sess_url);
	$url_len = count($url_arr);
	$str_url = '';
	$n = 0;
	if(isset($_GET['lang'])){
		if($url_len > 2){
			foreach($url_arr as $arrkey => $arr_val){
				$n++;
				if($n > 1 AND $n < $url_len){
					$str_url.=$arr_val.'/';
				}
			}
		}else{$str_url = '';}
	}else{
		if($url_len > 2){
			foreach($url_arr as $arrkey => $arr_val){
				$n++;
				if($n > 1){
					$str_url.=$arr_val.'/';
				}
			}
		}else{$str_url = '';}
	}
?>
<body data-rsssl=1 class="home page-template page-template-templates page-template-template-blank page-template-templatestemplate-blank-php page page-id-1073 _masterslider _msp_version_3.1.3 wpb-js-composer js-comp-ver-5.1.1 vc_responsive" style="background:#f7f7f7">

	<header class="header header-default">
		<div class="position-menu">
			<div class="container">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="social social-header">
						<ul>
							<li><a href="https://www.facebook.com/agencypopcambodia/" target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://twitter.com/POPCAMBODIA" target="_blank"><i class="fa fa-twitter"></i></a></li>
							<li><a href="http://instagram.com/pop.cambodia" target="_blank"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
					<div class="languager">
						<ul>
							<li><a href="<?php echo URL.$str_url.'?lang=kh';?>" title="Switch to Khmer" style="font-family:Hanuman;"><img alt="Khmer" src="/public/images/kh.jpg" /> ខ្មែរ </a></li>
							<li><a href="<?php echo URL.$str_url.'?lang=en';?>" title="Switch to English"><img alt="English" src="/public/images/en.jpg" /> EN</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<!-- end for header -->