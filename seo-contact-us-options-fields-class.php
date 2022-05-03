<?php

class SEOContactUsOptionsFields{

    public $page_slug;
    public $option_group;

    function __construct() {
        // это у нас используется много где, поэтому давайте вынесем как отдельное свойство
        $this->page_slug = 'seo-contact-us-options';
        $this->option_group = 'seo-contact-us-settings';

        add_action( 'admin_menu', array( $this, 'add' ), 25 );
        add_filter( 'option_page_capability_'.$this->page_slug, 'my_page_capability' ); // ?
    }

    function add(){
        add_menu_page('Seo Contact Us Button', 'Seo Contact Us Button', 'manage_options', $this->page_slug, array( $this, 'display' ), 'dashicons-phone', 4 );
    }

    function display( $args ){
        if (isset($_POST['submit'])){

            $MegaArray = [];

            $number = (count($_POST) - 1) / 4;

            for ($i = 0; $i < $number; $i++){

                $i == 0 ? $x = '' : $x = $i;

                $seo_contact_us_options_name = trim($_POST['seo_contact_us_options_name_'.$x]);
                $seo_contact_us_options_a = base64_decode(trim($_POST['seo_contact_us_options_a_'.$x]));
                $seo_contact_us_options_color = trim($_POST['seo_contact_us_options_color_'.$x]);
                $seo_contact_us_options_logo = stripslashes(trim($_POST['seo_contact_us_options_logo_'.$x]));

                $array = array(
                    'seo_contact_us_options_name' => $seo_contact_us_options_name,
                    'seo_contact_us_options_a' => $seo_contact_us_options_a,
                    'seo_contact_us_options_color' => $seo_contact_us_options_color,
                    'seo_contact_us_options_logo' => $seo_contact_us_options_logo,
                );
                array_push($MegaArray, $array);
            }

            update_option('MegaArray', $MegaArray);
        }

        settings_fields("opt_group");     // скрытые защитные поля
        require plugin_dir_path(__FILE__) . '/view-admin.php';

    }

    // Изменим права
    function my_page_capability( $capability ) {
        return 'edit_others_posts';
    }

}

new SEOContactUsOptionsFields();




