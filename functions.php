<?php
/**
 *  Theme: 
 *  File: functions.php
 *  Author: the Guaranteed SEO team
 */

 // add jquery in no conflict mode
add_action( 'wp_enqueue_scripts', 'load_jquery' );
function load_jquery() {
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/css/bootstrap.min.css' );
    wp_enqueue_style( 'theme-css', get_stylesheet_uri(), 'bootstrap-style' );

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', WP_SITEURL.'/wp-includes/js/jquery/jquery.js', false,null, true ); 
    wp_enqueue_script( 'jquery' );
    
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', false, null, true );
}

// prevent CF7 from loading jquery and other resources on every page
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

// Add the following before wp_head() to the page(s) where CF7 is used
// if(is_page(13)) {
//     if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
//         wpcf7_enqueue_scripts();
//     }
 
//     if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
//         wpcf7_enqueue_styles();
//     }
// }

if(function_exists('register_nav_menus')):
    register_nav_menus(array(
        'main' => 'Main Navigation'
    ));
endif;

add_theme_support('post-thumbnails');

// Add GSEO custom htaccess modifications
function add_htaccess() {
    require_once(ABSPATH.'/wp-admin/includes/misc.php');
    $insertion = array();
    $insertion = file('http://guaranteedseo.com/inc/htaccess-edits.txt', FILE_IGNORE_NEW_LINES);
    $htaccess_file = ABSPATH.'.htaccess';
    return insert_with_markers($htaccess_file, 'GSEO', (array) $insertion);
}
if(function_exists('get_home_path')) {
    add_action('generate_rewrite_rules', 'add_htaccess');
}

// hide WP meta from hackers
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');

// add custom variables
add_action('wp_head','site_url_script');
function site_url_script() {
 ?>
 <script type="text/javascript">
  var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
  var siteUrl = '<?php echo get_bloginfo('url'); ?>';
 </script>
<?php
}


function _remove_script_version( $src ){
$parts = explode( '?ver', $src );
return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

function debug($var) {
    $bt = debug_backtrace();
    $caller = array_shift($bt);
    echo '<strong>', $caller['file'], ' (line ', $caller['line'], ')</strong>';
    echo '<pre style="background:#fafafa;padding:10px;font-size:13px">';
    print_r($var);
    echo '</pre>';
}