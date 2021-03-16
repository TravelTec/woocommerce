<?php  



/*



Plugin Name: Voucher Tec - Produtos



Plugin URI: https://github.com/TravelTec/woocommerce



GitHub Plugin URI: https://github.com/TravelTec/woocommerce



Description: Voucher Tec - Produtos é um plugin responsável pela integração do seu catálogo de serviços com o WooCommerce.


 
Version: 1.0.0



Author: Travel Tec



Author URI: https://traveltec.com.br



License: GPLv2



*/







/*



 * Plugin Update Checker



 * 



 * Note: If you're using the Composer autoloader, you don't need to explicitly require the library.



 * @link https://github.com/YahnisElsts/plugin-update-checker



 */



require_once 'plugin-update-checker-4.10/plugin-update-checker.php'; 

 
require_once plugin_dir_path(__FILE__) . 'includes/wc-functions.php';








/*



 * Plugin Update Checker Setting



 *



 * @see https://github.com/YahnisElsts/plugin-update-checker for more details.



 */



function wc_update_checker_setting() {



    if ( ! is_admin() || ! class_exists( 'Puc_v4_Factory' ) ) { 

        return; 

    } 



    $myUpdateChecker = Puc_v4_Factory::buildUpdateChecker( 

        'https://github.com/TravelTec/woocommerce', 

        __FILE__, 

        'woocommerce' 

    ); 



    // (Opcional) Set the branch that contains the stable release. 

    $myUpdateChecker->setBranch('vouchertec-woocommerce');



}







add_action( 'admin_init', 'wc_update_checker_setting' );







 