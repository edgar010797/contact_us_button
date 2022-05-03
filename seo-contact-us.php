<?php
/**
 * Plugin Name: Seo Contact Us Button
 * Description: Добавляет на сайт кнопку "Все в одном", при клике на который выводятся кнопки мессенджеров и социальных сетей
 * Version:     1.0.0
 * Author:      Edgar Podosyan
 * Author URI:  https://github.com/edgar010797
 * Text Domain: seo-contact-us
 */


add_action('wp_head', 'seo_contact_us_styles');
function seo_contact_us_styles(){
    $MegaArray = get_option('MegaArray');
    echo "<style>";
    foreach($MegaArray as $button) {
        echo ".seo-social-button.".$button['seo_contact_us_options_name'].":before { background-color: ".$button['seo_contact_us_options_color']."; }";
        echo ".seo-social-button.".$button['seo_contact_us_options_name']." .fa { color: ".$button['seo_contact_us_options_color']."; }";
    }
    echo "</style>";
}


function seo_contact_us_enqueue_styles_and_scripts() {
    wp_enqueue_style( 'font_awesome', plugins_url( 'assets/font-awesome-4.7.0/css/font-awesome.min.css' , __FILE__ ));
    wp_enqueue_style( 'seo_contact_us_styles', plugins_url( 'assets/css/seo-contact-us-styles.css' , __FILE__ ));

    wp_enqueue_script( 'seo_contact_us_scripts', plugins_url( 'assets/js/seo-contact-us-scripts.js' , __FILE__ ), array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'seo_contact_us_enqueue_styles_and_scripts', 1 );



//add_action( 'admin_enqueue_scripts', '', 99 );
require_once plugin_dir_path(__FILE__) . '/seo-contact-us-options-fields-class.php';


add_action('wp_footer','view');
function view(){
    require_once plugin_dir_path(__FILE__) . '/view.php';
}
