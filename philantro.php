<?php
    /**
     * Plugin Name: Philantro - Donations and Donor Management
     * Plugin URI: http://www.philantro.com
     * Description: Welcome to the better way of accepting donations. <strong>Official plugin for the Philantro&reg; platform.</strong><br/> To get started: Activate and then go to your Philantro&reg; settings page on the Wordpress dashboard to set up your Organization ID.
     * Version: 5.13
     * Author: Philantro Inc.
     * Author URI: http://www.philantro.com
     * License: GPLv2
     */
    
    
    define('philantro_logo', plugins_url('asset/logo.png', __FILE__ ));
    define('philantro_icon', plugins_url('asset/wordpress-asset.png', __FILE__ ));
    define('philantro_option_page', plugin_dir_path( __FILE__ ) . '/options.php');
    
    function activate_philantro() {
        if(get_option('OID')){
            $OID = get_option('OID');
            update_option('OID', $OID);
        }elseif(get_option('EIN')){
            $OID = get_option('EIN');
            add_option('OID', $OID);
            delete_option('EIN');
        }else{
            add_option('OID', '000000000');
        }
    }
    
    function deactive_philantro() {
        //delete_option('OID');
    }
    
    function admin_init_philantro() {
        register_setting('philantro', 'OID');
    }
    
    
    add_action( 'current_screen', 'thisScreen' );
    
    function thisScreen() {
        
        $currentScreen = get_current_screen();
        
        if( $currentScreen->id === "toplevel_page_philantro" ) {
            
            add_action( 'admin_head', 'admin_css' );
            add_action('admin_print_footer_scripts', 'philantro' );
            
            wp_enqueue_style( 'color-code-style', plugin_dir_url( __FILE__ ) . '/css/philantro.css' );
            function admin_css(){
                
                ?>
                <style>
                    ul#adminmenu a.wp-has-current-submenu:after, ul#adminmenu>li.current>a.current:after{
                        border-right-color: #f3f3f3;
                    }
                    #wpcontent{
                        background-color: #f3f3f3;
                    }
                    .update-nag{
                        display: none;
                    }
                </style>
                <?php
            }
        }else{
            
            wp_enqueue_style( 'color-code-style', plugin_dir_url( __FILE__ ) . '/css/philantro-editor.css' );
        }
    }


// Add Shortcode
    function donate_shortcode( $atts ) {
        
        $id = null;
        $color = '#3277A2';
        $label = 'Donate';
        
        // Attributes
        extract( shortcode_atts(
                array(
                    'label' => 'Donate',
                    'id' => null,
                    'color' => '#3277A2',
                ), $atts )
        );
        // Code
        
        if(!preg_match('/#([a-fA-F0-9]{3}){1,2}\b/',$color)):
            $color = '#3277A2';
        endif;
        
        if($id != null):
            
            return '<a href="#_'. $id  .'" style="background-color:'.  $color  .'" class="philantro-btn">'. $label  .'</a>';
        
        else:
            
            return '<a href="#_givealways" style="background-color:'.  $color  .'" class="philantro-btn">'. $label  .'</a>';
        
        endif;
    }

// Add Shortcode
    function donate_form_shortcode( $atts ) {
        
        $id = null;
        $color = '#3277A2';
        $affiliate = null;
        
        // Attributes
        extract( shortcode_atts(
                array(
                    'id' => null,
                    'color' => '#3277A2',
                    'affiliate' => null,
                ), $atts )
        );
        // Code
        
        if(!preg_match('/#([a-fA-F0-9]{3}){1,2}\b/',$color)):
            $color = '#3277A2';
        endif;
        
        if($id != null):
            
            return '<div id="ph-root" data-campaign="'. $id  .'" data-color="'.  $color  .'" data-affiliate="'. $affiliate .'"></div>';
        
        else:
            
            return '<div id="ph-root" data-color="'.  $color  .'" data-affiliate="'. $affiliate .'"></div>';
        
        endif;
    }


// Add Shortcode
    function two_button_shortcode( $atts ) {
        
        $color = '#3277A2';
        $onetime_label = 'One-Time';
        $recurring_label = 'Monthly Gift';
        
        // Attributes
        extract( shortcode_atts(
                array(
                    'onetime_label' => 'One-Time',
                    'recurring_label' => 'Monthly Gift',
                    'color' => '#3277A2',
                ), $atts )
        );
        // Code
        
        if(!preg_match('/#([a-fA-F0-9]{3}){1,2}\b/',$color)):
            $color = '#3277A2';
        endif;
        
        return '<div class="philantro-love"><a href="#_givealways" style="background-color:'.  $color  .'" class="philantro-btn">'. $onetime_label  .'</a><a href="#_giverecurring" style="background-color:'.  $color  .'" class="philantro-btn">'. $recurring_label  .'</a></div>';
        
    }



// Add Shortcode
    function event_shortcode( $atts ) {
        
        $id = null;
        $color = '#4097AF';
        
        // Attributes
        extract( shortcode_atts(
                array(
                    'id' => null,
                    'color' => '#4097AF',
                ), $atts )
        );
        // Code
        
        $color = str_replace("#", "", $color);
        
        if(!preg_match('/^[a-f0-9]{6}$/i',$color)):
            $color = '#' .  $color;
        else:
            $color = '#4097AF';
        endif;
        
        if($id != null):
            
            return '<div id="ph-root" data-event="'. $id .'" data-color="'.  $color  .'"></div>';
        
        else:
            
            return '';
        
        endif;
    }



// Add Shortcode
    function fundraise_shortcode( $atts ) {
        
        $OID = preg_replace('/\D/', '', get_option('OID'));
        
        $id = null;
        $label = 'Donate';
        $color = null;
        
        // Attributes
        extract( shortcode_atts(
                array(
                    'id' => null,
                    'label' => null,
                    'color' => null
                ), $atts )
        );
        
        if($id != null):
            
            return '<div class="philantro-progress" data-campaign="'. $id .'" data-button="'. $label .'" data-color="'. $color .'">Online donations provided by <a href="https://wwww.philantro.com">Philantro</a>.</div>';
        
        endif;
    }


// Add Shortcode
    function donation_bar_shortcode( $atts ) {
        
        $id = null;
        $button = 'Donate';
        $color = null;
        $amounts = null;
        $amount_variable = '';
        
        // Attributes
        extract( shortcode_atts(
                array(
                    'id' => null,
                    'button' => null,
                    'color' => null,
                    'amounts' => null,
                ), $atts )
        );
        
        if(!empty($amounts)){
            
            $amounts = explode("-", $amounts);
            $i = 0;
            
            if(is_array($amounts)){
                
                foreach($amounts as $amount){
                    $raw_amount = filter_var(trim($amount), FILTER_SANITIZE_NUMBER_INT,FILTER_FLAG_ALLOW_THOUSAND);
                    $amount_variable .= !empty($raw_amount)?$raw_amount . '-':'';
                    $i++;
                }
                $amount_variable = rtrim($amount_variable,'-');
                
            }
            
            if($amount_variable != null):
                return '<div class="philantro-bar" data-amount="'. $amount_variable .'" data-campaign="'. $id .'" data-button="'. $button .'" data-color="'. $color .'"></div>';
            endif;
        }
    }
    
    
    
    function admin_menu_philantro() {
        add_menu_page('Philantro&reg; Plugin', 'Philantro&reg;', 'manage_options', 'philantro', 'options_page_philantro', philantro_icon);
    }
    
    function options_page_philantro() {
        include(philantro_option_page);
    }
    
    function philantro() {
        $OID = preg_replace('/\D/', '', get_option('OID'));
        if(!$OID):
            $OID = '000000000';
        endif;
        ?>
        <script type="text/javascript">
            (function() {
                var s = document.createElement('script');
                var ph = document.getElementsByTagName('script')[0];
                s.type = "text/javascript";
                s.src = "https://philantro.s3.amazonaws.com/pdf/philantro.js";
                s.async = true;
                window.options = { OID: '<?php echo $OID ?>'};
                ph.parentNode.insertBefore(s, ph);
            })();
        </script>
        <?php
    }
    
    function load_campaigns() {
        $OID = preg_replace('/\D/', '', get_option('OID'));
        
        if(!$OID):
            $OID = '000000000';
        endif;
        
        $currentScreen = get_current_screen();
        $current_user =  wp_get_current_user();
        $plugin_data = get_plugin_data(plugin_dir_path( __FILE__ ) . '/philantro.php');
        
        if($currentScreen->parent_file == 'philantro'):
            
            ?>

            <script type="text/javascript">

                setTimeout(function(){
                    jQuery('#philantro-notification').fadeOut();
                }, 300000);


                var environment = {
                    url: '<?php echo get_site_url(); ?>',
                    plugin_version: '<?php echo $plugin_data['Version'] ?>'
                };
                
                <?php if($OID):?>


                function get_links() {
                    jQuery.ajax({
                        url: "https://www.philantro.com/api/external.php",
                        jsonp: "callback",
                        type: "POST",
                        dataType: "jsonp",
                        data: {
                            EIN: <?php echo $OID ?>,
                            environment: environment
                        }
                    }).done(function(response){

                    }).fail(function(){
                    
                    })
                }

                get_links();
                <?php endif; ?>

            </script>
        <?php endif;
    }
    
    function philantro_button_block() {
        wp_enqueue_script(
            'philantro-btn',
            plugin_dir_url(__FILE__) . '/js/donate-button.js',
            array('wp-blocks','wp-editor'),
            true
        );
    }
    
    function philantro_form_block() {
        wp_enqueue_script(
            'philantro-donate-form-block',
            plugin_dir_url(__FILE__) . '/js/donate-form.js',
            array('wp-blocks','wp-editor'),
            true
        );
    }
    
    function philantro_event_block() {
        wp_enqueue_script(
            'philantro-event-form-block',
            plugin_dir_url(__FILE__) . '/js/event-form.js',
            array('wp-blocks','wp-editor'),
            true
        );
    }
    
    function philantro_fundraiser_block() {
        wp_enqueue_script(
            'philantro-progress',
            plugin_dir_url(__FILE__) . '/js/fundraiser.js',
            array('wp-blocks','wp-editor'),
            true
        );
        
    }
    
    
    register_activation_hook(__FILE__, 'activate_philantro');
    register_deactivation_hook(__FILE__, 'deactive_philantro');
    
    if (is_admin()) {
        add_action('admin_init', 'admin_init_philantro');
        add_action('admin_menu', 'admin_menu_philantro');
        add_action('admin_print_footer_scripts', 'load_campaigns' );
        add_shortcode( 'donate', 'donate_shortcode' );
        add_shortcode( 'donateform', 'donate_form_shortcode' );
        add_shortcode( 'event', 'event_shortcode' );
        add_shortcode( 'fundraise', 'fundraise_shortcode' );
        add_shortcode( 'donatebar', 'donation_bar_shortcode' );
        add_shortcode( 'twobutton', 'two_button_shortcode' );
        add_action('enqueue_block_editor_assets', 'philantro_button_block');
        add_action('enqueue_block_editor_assets', 'philantro_form_block');
        add_action('enqueue_block_editor_assets', 'philantro_event_block');
        add_action('enqueue_block_editor_assets', 'philantro_fundraiser_block');
        
    }
    
    if (!is_admin()) {
        add_action('wp_footer', 'philantro');
        add_shortcode( 'donate', 'donate_shortcode' );
        add_shortcode( 'donateform', 'donate_form_shortcode' );
        add_shortcode( 'event', 'event_shortcode' );
        add_shortcode( 'donatebar', 'donation_bar_shortcode' );
        add_shortcode( 'fundraise', 'fundraise_shortcode' );
        add_shortcode( 'twobutton', 'two_button_shortcode' );
    }



