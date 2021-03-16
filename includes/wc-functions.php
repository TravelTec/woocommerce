<?php 



/*

 * Add my new menu to the Admin Control Panel

 */
 

function scripts_wc_js() { 
    wp_enqueue_script( 'jquery', plugins_url( '/assets/js/jquery-3.1.1.min.js', __FILE__ ));
    wp_enqueue_script( 'scripts-wc-js', plugins_url( '/assets/js/scripts.js', __FILE__ ));
}

add_action('admin_init','scripts_wc_js');