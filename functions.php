<?php


// Add Thumbnails
add_theme_support('post-thumbnails');

add_action('wp_enqueue_scripts', 'loadScripts');
function loadScripts() {
// Add scripts

$scripts = [
	'jQuery' => [
		'dir' =>  get_template_directory_uri().'/plugins/jQuery/jquery.js',
		'depends' => array(),
		'version' => '1.0',
		'in_footer' => true,
 	],
	'Script' => [
		'dir' =>  get_template_directory_uri().'/js/script.js',
		'depends' => array('jQuery'),
		'version' => '1.0',
		'in_footer' => true,
 	],
	// 'OwCarousel' => [
	// 	'dir' =>  get_template_directory_uri().'/plugins/owlcarousel/owl.carousel.min.js',
	// 	'depends' => array('jQuery'),
	// 	'version' => '1.0',
	// 	'in_footer' => true,
 // 	],
];

$styles = [
	'Style' => [
		'dir' => get_stylesheet_uri(),
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'Styles' => [
		'dir' => get_template_directory_uri().'/dist/css/style.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'Hamburgers' => [
		'dir' => get_template_directory_uri().'/plugins/hamburgers_menu/hamburgers.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'FontAwesome' => [
		'dir' => 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'OwlCarousel' => [
		'dir' => get_template_directory_uri().'/plugins/owlcarousel/owl.carousel.min.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
	'OwlCarouselTheme' => [
		'dir' => get_template_directory_uri().'/plugins/owlcarousel/owl.theme.default.min.css',
		'depends' => '',
		'version' => '1',
		'in_footer' => false,
	],
];


	if($scripts) {
		foreach($scripts as $key => $script) {
			echo wp_enqueue_script($key, $script['dir'], $script['depends'],  $script['version'],$script['in_footer']);
		}
	}

	if($styles) {
		foreach($styles as $key => $style) {
			echo wp_enqueue_style($key, $style['dir'], $style['depends'],  $style['version'],$style['in_footer']);
		}
	}
};

add_action('wp_footer', function() {
	echo '<link href="https://fonts.googleapis.com/css?family=Fjalla+One|Oxygen:300,400,700" rel="stylesheet">';
});

// Add Menu
add_action( 'after_setup_theme', 'registerMenu' );
function registerMenu() {
  register_nav_menu( 'primary', __( 'Menu principal', 'theme-slug' ) );
};


require dirname( __FILE__ ).'/includes/post_type.php';


// Tamanho do resumo

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/ Seta Meta Tags
add_action('wp_head', 'setMeta');
function setMeta() {
global $post; $postParent = get_post($post->ID);
	?>
	<meta name="description" content="<?php echo is_home() ? bloginfo( 'description' ) : wp_trim_words($postParent->post_content, 50, null); ?>"/>
	<meta name="robots" content="index, follow">
	<link rel="canonical" href="<?php echo is_home() ? home_url() : get_permalink(); ?>" />
	<meta property="og:locale" content="pt_BR" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php echo is_home() ? bloginfo( 'name' ) : get_the_title(); ?>" />
	<meta property="og:description" content="<?php echo is_home() ? bloginfo( 'description' ) : wp_trim_words($postParent->post_content, 50, null); ?>"/>
	<meta property="og:url" content="<?php echo is_home() ? home_url() : get_permalink(); ?>" />
	<meta property="og:site_name" content="<?php echo get_bloginfo(); ?>" />
	<meta property="article:publisher" content="https://www.facebook.com/diariodeumcrohnista" />
	<meta property="article:author" content="https://www.instagram.com/ahserginho/" />
	<meta property="article:tag" content="Doença de Crohn" />
	<meta property="article:tag" content="DII" />
	<meta property="article:tag" content="Retocolite ulcerativa" />
	<meta property="article:tag" content="Diário de um Crohnista" />
	<meta property="article:section" content="HTML" />
	<meta property="article:published_time" content="<?php echo !is_home() ? get_post_time('Y\-m\-d\TH:i:s') : '' ?>" />
	<meta property="og:image" content="<?php echo is_home() ? 'http://www.diariodeumcrohnista.com.br/wp-content/uploads/2016/11/diario-de-um-crohnista.jpg' : the_post_thumbnail_url(); ?>" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="<?php echo is_home() ? bloginfo( 'description' ) : wp_trim_words($postParent->post_content, 50, null); ?>"/>
	<meta name="twitter:title" content="<?php echo is_home() ? bloginfo( 'name' ) : get_the_title(); ?>" />
	<meta name="twitter:site" content="@ahserginho" />
	<meta name="twitter:image" content="<?php echo is_home() ? 'http://www.diariodeumcrohnista.com.br/wp-content/uploads/2016/11/diario-de-um-crohnista.jpg' : the_post_thumbnail_url(); ?>" />
	<meta name="twitter:creator" content="@ahserginho" />
<?php }
?>
