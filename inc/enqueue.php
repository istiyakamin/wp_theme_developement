<?php
function consult_css_js() {
	
	wp_enqueue_style( 'flaticon-css', get_theme_file_uri() . '/assets/css/flaticon.css',  array(), '1.0.0', 'all' );
	wp_enqueue_style( 'gfcss', consult_fonts_url(),  array(), '1.0.0');
	wp_enqueue_style( 'fontawesome-css', get_theme_file_uri() . '/assets/css/font-awesome.min.css',  array(), '1.0.0', 'all' );
	wp_enqueue_style( 'animate-css', get_theme_file_uri() . '/assets/css/animate.css',  array(), '1.0.0', 'all' );
	wp_enqueue_style( 'text-amination-css', get_theme_file_uri() . '/assets/css/text-animation.css',  array(), '1.0.0', 'all' );
	wp_enqueue_style( 'fancybox-css', get_theme_file_uri() . '/assets/css/fancybox.min.css',  array(), '1.0.0', 'all' );
	wp_enqueue_style( 'magnific-css', get_theme_file_uri() . '/assets/css/magnific-popup.min.css',  array(), '1.0.0', 'all' );
	wp_enqueue_style( 'owlcarosol-css', get_theme_file_uri() . '/assets/css/owl.carousel.min.css',  array(), '1.0.0', 'all' );
	wp_enqueue_style( 'layers-css', get_theme_file_uri() . '/rs-plugin/css/layers.css',  array(), '1.0.0', 'all' );
	//wp_enqueue_style( 'favicon-css', get_theme_file_uri().'/images/favicon.ico',  array(), '1.0.0', 'all' );
	wp_enqueue_style( 'settings-css', get_theme_file_uri() . '/rs-plugin/css/settings.css',  array(), '1.0.0', 'all' );
	wp_enqueue_style( 'bootstrap-css', get_theme_file_uri() . '/assets/css/bootstrap.min.css',  array(), '1.0.0', 'all' );
	wp_enqueue_style( 'plugins-css', get_theme_file_uri() . '/assets/css/plugins.css',  array(), '1.0.0', 'all' );
	wp_enqueue_style( 'icons-css', get_theme_file_uri() . '/assets/css/icons.css',  array(), '1.0.0', 'all' );
	wp_enqueue_style( 'menu-css', get_theme_file_uri() . '/assets/css/menu-css.css',  array(), '1.0.0', 'all' );
	wp_enqueue_style( 'main-css', get_theme_file_uri() . '/assets/css/main.css',  array(), '1.0.0', 'all' );
	wp_enqueue_style( 'responsive-css', get_theme_file_uri() . '/assets/css/responsive.css',  array(), '1.0.0', 'all' );
	
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'modernizr-js', get_stylesheet_directory_uri() . '/assets/js/modernizr.js', array(), '1.0.0', true );
	wp_enqueue_script( 'waypoints-js', get_theme_file_uri() . '/assets/js/waypoints.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bootstrap-js', get_theme_file_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'plugin-js', get_theme_file_uri() . '/assets/js/plugins.js', array(), '1.0.0', true );
	wp_enqueue_script( 'scrollUP-js', get_theme_file_uri() . '/assets/js/jquery.scrollUp.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'map-js', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyB4RM7zOgOKq6n2fv407hX28xiL-M6vLdY', array(), '1.0.0', true );
	wp_enqueue_script( 'gmaps-js', get_theme_file_uri() . '/assets/js/gmaps.js', array(), '1.0.0', true );
	wp_enqueue_script( 'fancybox-js', get_theme_file_uri() . '/assets/js/jquery.fancybox.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'magnific-js', get_theme_file_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'isotope-js', get_theme_file_uri() . '/assets/js/isotope.pkgd.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'counterup-js', get_theme_file_uri() . '/assets/js/counterup.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'owl-js', get_theme_file_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'wow-js', get_theme_file_uri() . '/assets/js/wow.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'lettering-js', get_theme_file_uri() . '/assets/js/jquery.lettering.js', array(), '1.0.0', true );
	wp_enqueue_script( 'texttillate-js', get_theme_file_uri() . '/assets/js/jquery.textillate.js', array(), '1.0.0', true );
	wp_enqueue_script( 'mixitup-js', get_theme_file_uri() . '/assets/js/mixitup.js', array(), '1.0.0', true );
	wp_enqueue_script( 'chart-js', get_theme_file_uri() . '/assets/js/chart.js', array(), '1.0.0', true );
	wp_enqueue_script( 'chart-active-js', get_theme_file_uri() . '/assets/js/chart-active.js', array(), '1.0.0', true );
	wp_enqueue_script( 'therpunch-js', get_theme_file_uri() . '/rs-plugin/js/jquery.themepunch.tools.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'revolution-js', get_theme_file_uri() . '/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'actions-js', get_theme_file_uri() . '/rs-plugin/js/extensions/revolution.extension.actions.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'krnburn-js', get_theme_file_uri() . '/rs-plugin/js/extensions/revolution.extension.kenburn.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'layeranimation-js', get_theme_file_uri() . '/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'miration-js', get_theme_file_uri() . '/rs-plugin/js/extensions/revolution.extension.migration.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'navigation-js', get_theme_file_uri() . '/rs-plugin/js/extensions/revolution.extension.navigation.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'parallax-js', get_theme_file_uri() . '/rs-plugin/js/extensions/revolution.extension.parallax.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'slideanims-js', get_theme_file_uri() . '/rs-plugin/js/extensions/revolution.extension.slideanims.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'vidoess-js', get_theme_file_uri() . '/rs-plugin/js/extensions/revolution.extension.video.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'custom-js', get_theme_file_uri() . '/assets/js/custom.js', array(), '1.0.0', true );
	wp_enqueue_script( 'custom-js', get_theme_file_uri() . '/assets/js/jquery.min.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'consult_css_js');

function consult_fonts_url() {
$fonts_url = '';
 
/* Translators: If there are characters in your language that are not
* supported by Lora, translate this to 'off'. Do not translate
* into your own language.
*/
$opensense = _x( 'on', 'Opensense font: on or off', 'Open+Sense' );
$montserrat = _x( 'on', 'Montserrat font: on or off', 'Montserrat' );
 
if ( 'off' !== $opensense || 'off' !== $montserrat ) {
$font_families = array();
 
if ( 'off' !== $opensense ) {
$font_families[] = 'Open+Sans:300i,400,400i,600,700,800';
}
 
if ( 'off' !== $montserrat ) {
$font_families[] = 'Montserrat:200,300,400,500,600,700,800,900';
}
 
$query_args = array(
'family' => urlencode( implode( '|', $font_families ) ),
'subset' => urlencode( 'cyrillic-ext,cyrillic,vietnamese,latin-ext,greek,greek-ext' ),
);
 
$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
}
 
return esc_url_raw( $fonts_url );
}

// Adding Google fonts to the editor

function consult_editor_styles() {
	$opensense = (array('editor-style.css' => '//fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700,800' ));
	$montserrat = (array('editor-style.css' => '//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900' ));
add_editor_style($opensense, $montserrat);
}
add_action( 'after_setup_theme', 'consult_editor_styles' );



//Adding fonts to the Custom Header screen


function consult_custom_header_fonts() {
wp_enqueue_style( 'theme-slug-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,700,800', array(), null );
wp_enqueue_style( 'theme-slug-fonts', '//fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900', array(), null );
}
add_action( 'admin_print_styles-appearance_page_custom-header', 'consult_custom_header_fonts' );
?>