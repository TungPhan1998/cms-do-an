<?php
/* TGM Plugin Activation */
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';


add_action( 'tgmpa_register', 'my_plugin_activation' );
function my_plugin_activation() {
 
    $plugins = array(
 
            // Gọi một plugin nào đó ở bên ngoài
            // array(
            //     'name'               => 'TGM New Media Plugin', // Tên của plugin
            //     'slug'               => 'tgm-new-media-plugin', // Tên thư mục plugin
            //     'source'             => 'https://s3.amazonaws.com/tgm/tgm-new-media-plugin.zip', // Link tải plugin - direct link
            //     'required'           => true, // Nếu đặt là true thì plugin này sẽ không bắt buộc phải cài mà chỉ ở dạng Recommend.
            //     'external_url'       => 'https://github.com/thomasgriffin/New-Media-Image-Uploader', // Nếu bạn cài plugin ở bên ngoài, không phải từ WordPress.Org thì thêm URL của trang plugin vào.
            // ),
            // Gọi một plugin trong thư viện WordPress.org/plugins
            array(
                'name'      => 'WP Swiper',
                'slug'      => 'wp-swiper-slider', //Tên slug của plugin trên URL
                'required'  => false,
            ),
 
        ); // end $plugins
 
    $config = array(
        'default_path' => '',
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Có hiển thị thông báo hay không
        'dismissable'  => false,                    // Nếu đặt false thì người dùng không thể hủy thông báo cho đến khi cài hết plugin.
        'dismiss_msg'  => '',                      // Nếu 'dismissable' là false, thì tin nhắn ở đây sẽ hiển thị trên cùng trang Admin.
        'is_automatic' => false,                   // Nếu là false thì plugin sẽ không tự động kích hoạt khi cài xong.
        'message'      => '',
        'strings'      => array(
            'page_title'                      => __( 'Install Required Plugins', 'tgmpa' ),
            'menu_title'                      => __( 'Install Plugins', 'tgmpa' ),
            'installing'                      => __( 'Installing Plugin: %s', 'tgmpa' ), // %s = plugin name.
            'oops'                            => __( 'Something went wrong with the plugin API.', 'tgmpa' ),
            'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
            'activate_link'                   => _n_noop( 'Begin activating plugin', 'Begin activating plugins' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'tgmpa' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'tgmpa' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'tgmpa' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    ); // end $config
    tgmpa( $plugins, $config );
 
}

if (isset($_GET['activated']) && is_admin()){

    //Insert all page to database
    $pages = ['Porto - About','Porto - blog',
        'Porto - Category-8col','Porto - Cateogry Flex Grid1','Porto - Category-Horizontal-Filter-2',
        "Porto - checkout-shipping-2", "Porto - Checkout", "Porto - Contact",
        "Porto - Dashboard", "Porto - forgot-password", "Porto - horizontal-thumbnails", "Porto - my-account",
        "Porto - product-full-width", "Porto - Product-sticky-both", "Porto - Product-sticky-info",
        "Porto - product-sticky-tag", "Porto - Featured Article", "Porto - Single1", "Porto - viewcart"];
    foreach ($pages as $page){
        $new_page_title = trim(str_replace('Porto - ','',$page));
        $new_page_content = $page;

        $new_page_template =  trim(str_replace('Porto - ','',$page));
        $new_page_template = strtolower(create_slug($new_page_template)).".php";


        //don't change the code bellow, unless you know what you're doing
        $page_check = get_page_by_title($new_page_title);

        $new_page = array(
            'post_type' => 'page',
            'post_title' => $new_page_title,
            'post_content' => $new_page_content,
            'post_status' => 'publish',
            'post_author' => 1,
        );

        if(!isset($page_check->ID)){
            $new_page_id = wp_insert_post($new_page);

            if(!empty($new_page_template)){
                update_post_meta($new_page_id, '_wp_page_template', $new_page_template);
            }
        }
    }

  
}
function create_slug($string){
    $slug=preg_replace('/[^A-Za-z0-9-]+/', '-', $string);
    return $slug;
}

/**
 * Enqueue scripts and styles
 */
function your_theme_enqueue_scripts()
{
    // all styles
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap-v3.3.6.min.css');
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('swiper', get_stylesheet_directory_uri() . '/css/swiper.min.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css');

    /*Partner 3*/
    if (is_home()) {
        wp_enqueue_style( 'footer-style', get_template_directory_uri() . '/css/footer.css' );
        wp_enqueue_style( '1-style', get_template_directory_uri() . '/css/1.css' );
        wp_enqueue_style( '131-style', get_template_directory_uri() . '/css/131.css' );
        wp_enqueue_style( '132-style', get_template_directory_uri() . '/css/132.css' );
        wp_enqueue_style( '152-style', get_template_directory_uri() . '/css/152.css' );
        wp_enqueue_style( '153-style', get_template_directory_uri() . '/css/153.css' );
        wp_enqueue_style( '133-style', get_template_directory_uri() . '/css/133.css' );
        wp_enqueue_style( '134-style', get_template_directory_uri() . '/css/134.css' );
        wp_enqueue_style( '135-style', get_template_directory_uri() . '/css/135.css' );
        wp_enqueue_style( '136-style', get_template_directory_uri() . '/css/136.css' );
        wp_enqueue_style( '137-style', get_template_directory_uri() . '/css/137.css' );
        wp_enqueue_style( '138-style', get_template_directory_uri() . '/css/138.css' );
        wp_enqueue_style( '150-style', get_template_directory_uri() . '/css/150.css' );
        wp_enqueue_style( '151-style', get_template_directory_uri() . '/css/151.css' );
        wp_enqueue_style( '151-style', get_template_directory_uri() . '/css/swiper.min.css' );
       
    }
  
   
}

add_action('wp_enqueue_scripts', 'your_theme_enqueue_scripts');


function add_custom_script()
{
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'));
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'));
    wp_register_script('bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'));

    wp_register_script('main', get_template_directory_uri() . '/js/main.min.js', array('jquery'));
    wp_register_script('plugins', get_template_directory_uri() . '/js/plugins.min.js', array('jquery'));
    wp_register_script('swiper', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'));


    /*Phi*/
    wp_register_script('nouislider', get_template_directory_uri() . 'js/nouislider.min.js', array('jquery'));
    wp_enqueue_script('nouislider');
    /*Phi-end*/

    wp_enqueue_script('jquery');
    wp_enqueue_script('bundle');
    wp_enqueue_script('main');
    wp_enqueue_script('plugins');
    wp_enqueue_script('swiper');
 
}

add_action('wp_enqueue_scripts', 'add_custom_script');

// widget, menu
function porto_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'porto' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'porto' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'porto_widgets_init' );

function porto_editor_customizer_styles() {

	wp_enqueue_style( 'porto-editor-customizer-styles', get_theme_file_uri( '/style-editor-customizer.css' ), false, '1.1', 'all' );

	if ( 'custom' === get_theme_mod( 'primary_color' ) ) {
		// Include color patterns.
		require_once get_parent_theme_file_path( '/inc/color-patterns.php' );
		wp_add_inline_style( 'porto-editor-customizer-styles', porto_custom_colors_css() );
	}
}
add_action( 'enqueue_block_editor_assets', 'porto_editor_customizer_styles' );



@ini_set('upload_max_size', '120M');
@ini_set('post_max_size', '120M');
@ini_set('max_execution_time', '300');