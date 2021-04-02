<?php

function consult_cs_js(){
    
  wp_enqueue_style('flaticon',get_template_directory_uri().'/assets/css/flaticon.css',array(),'1.0.0','all');
  wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700,800%7CMontserrat:200,300,400,500,600,700,800,900',array(),'1.0.0','all');
  wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/css/font-awesome.min.css',array(),'1.0.0','all');
  wp_enqueue_style('text-animated',get_template_directory_uri().'/assets/css/animate.css',array(),'1.0.0','all');
  wp_enqueue_style('animate',get_template_directory_uri().'/assets/css/text-animation.css',array(),'1.0.0','all');
  wp_enqueue_style('fancybox1',get_template_directory_uri().'/assets/css/jquery.fancybox.min.css',array(),'1.0.0','all');
  wp_enqueue_style('fancybox2',get_template_directory_uri().'/assets/css/magnific-popup.min.css',array(),'1.0.0','all');
  wp_enqueue_style('fancybox2',get_template_directory_uri().'/assets/css/magnific-popup.min.css',array(),'1.0.0','all');
  wp_enqueue_style('owl-carousel',get_template_directory_uri().'/assets/css/owl.carousel.min.css',array(),'1.0.0','all');
  wp_enqueue_style('slider-revolution-1',get_template_directory_uri().'/rs-plugin/css/layers.css',array(),'1.0.0','all');
  wp_enqueue_style('slider-revolution-2',get_template_directory_uri().'/rs-plugin/css/settings.css',array(),'1.0.0','all');
  wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css',array(),'1.0.0','all');
  wp_enqueue_style('plugins',get_template_directory_uri().'/assets/css/plugins.css',array(),'1.0.0','all');
  wp_enqueue_style('icons',get_template_directory_uri().'/assets/css/icons.css',array(),'1.0.0','all');
  wp_enqueue_style('menu-css',get_template_directory_uri().'/assets/css/menu-css.css',array(),'1.0.0','all');
  wp_enqueue_style('main-css',get_template_directory_uri().'/assets/css/main.css',array(),'1.0.0','all');
  wp_enqueue_style('responsive-css',get_template_directory_uri().'/assets/css/responsive.css',array(),'1.0.0','all');
  
  
  
  
  
  
  wp_enqueue_script('modernizr',get_template_directory_uri().'/assets/js/modernizr.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('waypoint',get_template_directory_uri().'/assets/js/waypoints.min.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/js/bootstrap.min.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('plugins-js',get_template_directory_uri().'assets/js/plugins.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('scrollup-js',get_template_directory_uri().'/assets/js/jquery.scrollUp.min.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('gmaps-api','https://maps.googleapis.com/maps/api/js?key=AIzaSyB4RM7zOgOKq6n2fv407hX28xiL-M6vLdY');
  wp_enqueue_script('gmaps',get_template_directory_uri().'/assets/js/gmaps.js',array('jquery'),'1.0.0',false);
  wp_enqueue_script('jquery-fancybox',get_template_directory_uri().'/assets/js/jquery.fancybox.min.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('magnific-popup',get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('isotope-pkgd',get_template_directory_uri().'/assets/js/isotope.pkgd.min.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('counterup-js',get_template_directory_uri().'/assets/js/counterup.min.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('owl-carousel-scr',get_template_directory_uri().'/assets/js/owl.carousel.min.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('wow-min-js',get_template_directory_uri().'/assets/js/wow.min.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('jquery-lettering-js',get_template_directory_uri().'/assets/js/jquery.lettering.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('jquery-textillate-js',get_template_directory_uri().'/assets/js/jquery.textillate.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('mixitup-js',get_template_directory_uri().'/assets/js/mixitup.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('chart1-js',get_template_directory_uri().'/assets/js/chart.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('chart2-js',get_template_directory_uri().'/assets/js/chart-active.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('slider-revolution-2',get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.tools.min.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('slider-revolution-4',get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.revolution.min.js',array('jquery'),'1.0.0',true);
 


  wp_enqueue_script('slider-revolution-5',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.actions.min.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('slider-revolution-6',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.kenburn.min.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('slider-revolution-7',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('slider-revolution-8',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.migration.min.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('slider-revolution-9',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.navigation.min.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('slider-revolution-10',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.parallax.min.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('slider-revolution-11',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.slideanims.min.js',array('jquery'),'1.0.0',true);
  wp_enqueue_script('slider-revolution-12',get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.video.min.js',array('jquery'),'1.0.0',true);

  wp_enqueue_script('custom-js',get_template_directory_uri().'/assets/js/custom.js',array('jquery'),'1.0.0',true);




}
add_action('wp_enqueue_scripts','consult_cs_js');