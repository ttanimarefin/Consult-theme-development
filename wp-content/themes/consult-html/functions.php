<?php

require_once(get_template_directory().'/inc/enqueue.php');

// Latest Jquery disable and enable theme Jquery
add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', "//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js", false, null);
    wp_enqueue_script('jquery');
}
function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );
?>
