<?php
/**
 * Odin functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Odin
 * @since 2.2.0
 */

/**
 * Sets content width.
 */
$device = 0;
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

if ($iphone || $android || $palmpre || $ipod || $berry == true) 
{
    $device = "mobile";
 }else {
    $device = "desktop";
 }


if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

/**
 * Odin Classes.
 */
require_once get_template_directory() . '/core/classes/class-bootstrap-nav.php';
require_once get_template_directory() . '/core/classes/class-shortcodes.php';
//require_once get_template_directory() . '/core/classes/class-shortcodes-menu.php';
require_once get_template_directory() . '/core/classes/class-thumbnail-resizer.php';
// require_once get_template_directory() . '/core/classes/class-theme-options.php';
// require_once get_template_directory() . '/core/classes/class-options-helper.php';
 require_once get_template_directory() . '/core/classes/class-post-type.php';
// require_once get_template_directory() . '/core/classes/class-taxonomy.php';
// require_once get_template_directory() . '/core/classes/class-metabox.php';
// require_once get_template_directory() . '/core/classes/abstracts/abstract-front-end-form.php';
// require_once get_template_directory() . '/core/classes/class-contact-form.php';
// require_once get_template_directory() . '/core/classes/class-post-form.php';
// require_once get_template_directory() . '/core/classes/class-user-meta.php';
// require_once get_template_directory() . '/core/classes/class-post-status.php';
//require_once get_template_directory() . '/core/classes/class-term-meta.php';

/**
 * Odin Widgets.
 */
require_once get_template_directory() . '/core/classes/widgets/class-widget-like-box.php';

if ( ! function_exists( 'odin_setup_features' ) ) {

	/**
	 * Setup theme features.
	 *
	 * @since 2.2.0
	 */
	function odin_setup_features() {

		/**
		 * Add support for multiple languages.
		 */
		load_theme_textdomain( 'odin', get_template_directory() . '/languages' );

		/**
		 * Register nav menus.
		 */
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'odin' )
			)
		);

		/*
		 * Add post_thumbnails suport.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add feed link.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Support Custom Header.
		 */
		$default = array(
			'width'         => 0,
			'height'        => 0,
			'flex-height'   => false,
			'flex-width'    => false,
			'header-text'   => false,
			'default-image' => '',
			'uploads'       => true,
		);

		add_theme_support( 'custom-header', $default );

		/**
		 * Support Custom Background.
		 */
		$defaults = array(
			'default-color' => '',
			'default-image' => '',
		);

		add_theme_support( 'custom-background', $defaults );

		/**
		 * Support Custom Editor Style.
		 */
		add_editor_style( 'assets/css/editor-style.css' );

		/**
		 * Add support for infinite scroll.
		 */
		add_theme_support(
			'infinite-scroll',
			array(
				'type'           => 'scroll',
				'footer_widgets' => false,
				'container'      => 'content',
				'wrapper'        => false,
				'render'         => false,
				'posts_per_page' => get_option( 'posts_per_page' )
			)
		);

		/**
		 * Add support for Post Formats.
		 */
		// add_theme_support( 'post-formats', array(
		//     'aside',
		//     'gallery',
		//     'link',
		//     'image',
		//     'quote',
		//     'status',
		//     'video',
		//     'audio',
		//     'chat'
		// ) );

		/**
		 * Support The Excerpt on pages.
		 */
		// add_post_type_support( 'page', 'excerpt' );

		/**
		 * Switch default core markup for search form, comment form, and comments to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption'
			)
		);

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for custom logo.
		 *
		 *  @since Odin 2.2.10
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		) );
	}
}

add_action( 'after_setup_theme', 'odin_setup_features' );

/**
 * Register widget areas.
 *
 * @since 2.2.0
 */
function odin_widgets_init() {
	register_sidebar(
		array(
			'name' => __( 'Main Sidebar', 'odin' ),
			'id' => 'main-sidebar',
			'description' => __( 'Site Main Sidebar', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'odin_widgets_init' );

/**
 * Flush Rewrite Rules for new CPTs and Taxonomies.
 *
 * @since 2.2.0
 */
function odin_flush_rewrite() {
	flush_rewrite_rules();
}

add_action( 'after_switch_theme', 'odin_flush_rewrite' );

/**
 * Load site scripts.
 *
 * @since 2.2.0
 */
function odin_enqueue_scripts() {
	$template_url = get_template_directory_uri();

	// Loads Odin main stylesheet.
	wp_enqueue_style( 'odin-style', get_stylesheet_uri(), array(), null, 'all' );

	// jQuery.
	wp_enqueue_script( 'jquery' );

	// Html5Shiv
	wp_enqueue_script( 'html5shiv', $template_url . '/assets/js/html5.js' );
	wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

	// General scripts.
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		// Bootstrap.
		wp_enqueue_script( 'bootstrap', $template_url . '/assets/js/libs/bootstrap.min.js', array(), null, true );

		// FitVids.
		wp_enqueue_script( 'fitvids', $template_url . '/assets/js/libs/jquery.fitvids.js', array(), null, true );

		// Main jQuery.
		wp_enqueue_script( 'odin-main', $template_url . '/assets/js/main.js', array(), null, true );
	} else {
		// Grunt main file with Bootstrap, FitVids and others libs.
		wp_enqueue_script( 'odin-main-min', $template_url . '/assets/js/main.min.js', array(), null, true );
	}

	// Grunt watch livereload in the browser.
	// wp_enqueue_script( 'odin-livereload', 'http://localhost:35729/livereload.js?snipver=1', array(), null, true );

	// Load Thread comments WordPress script.
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'odin_enqueue_scripts', 1 );

/**
 * Odin custom stylesheet URI.
 *
 * @since  2.2.0
 *
 * @param  string $uri Default URI.
 * @param  string $dir Stylesheet directory URI.
 *
 * @return string      New URI.
 */
function odin_stylesheet_uri( $uri, $dir ) {
	return $dir . '/assets/css/style.css';
}

add_filter( 'stylesheet_uri', 'odin_stylesheet_uri', 10, 2 );

/**
 * Query WooCommerce activation
 *
 * @since  2.2.6
 *
 * @return boolean
 */
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	function is_woocommerce_activated() {
		return class_exists( 'woocommerce' ) ? true : false;
	}
}

/**
 * Core Helpers.
 */
require_once get_template_directory() . '/core/helpers.php';

/**
 * WP Custom Admin.
 */
require_once get_template_directory() . '/inc/admin.php';

/**
 * Comments loop.
 */
require_once get_template_directory() . '/inc/comments-loop.php';

/**
 * WP optimize functions.
 */
require_once get_template_directory() . '/inc/optimize.php';

/**
 * Custom template tags.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * WooCommerce compatibility files.
 */
if ( is_woocommerce_activated() ) {
	add_theme_support( 'woocommerce' );
	require get_template_directory() . '/inc/woocommerce/hooks.php';
	require get_template_directory() . '/inc/woocommerce/functions.php';
	require get_template_directory() . '/inc/woocommerce/template-tags.php';
}
register_nav_menus (
  array (
      'main-menu' => __( 'Main Menu', 'odin' ),
            'footer-menu-1' => __( 'Menu Footer', 'odin' ),
	  		'footer-menu-2' => __( 'Menu Footer Coluna 1', 'odin' ),
			'footer-menu-3' => __( 'Menu Footer Coluna 2', 'odin' ),
			'footer-menu-4' => __( 'Menu Footer Coluna 3', 'odin' ),
	  		'menu-mobile' => __( 'Menu Mobile', 'odin' )
  )
);

function post_corpoclinico() {
    $corpoclinico = new Odin_Post_Type(
        'Corpo Clinico', // Nome (Singular) do Post Type.
        'corpo-clinico' // Slug do Post Type.
    );

    $corpoclinico->set_labels(
        array(
            'menu_name' => __( 'Corpo Cl??nico', 'odin' )
        )
    );

    $corpoclinico->set_arguments(
        array(
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt','custom-fields' ),
            'menu_icon' => 'dashicons-buddicons-buddypress-logo'
        )
    );
}

add_action( 'init', 'post_corpoclinico', 1 );

function post_slider() {
    $slider = new Odin_Post_Type(
        'Slider', // Nome (Singular) do Post Type.
        'slider' // Slug do Post Type.
    );

    $slider->set_labels(
        array(
            'menu_name' => __( 'Slider', 'odin' )
        )
    );

    $slider->set_arguments(
        array(
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt','custom-fields' ),
            'menu_icon' => 'dashicons-embed-photo'
        )
    );
}

add_action( 'init', 'post_slider', 1 );

add_action('init', 'type_post_unidades');

function type_post_unidades() {
    $labels = array(
        'name' => _x('Unidades', 'post type general name'),
        'singular_name' => _x('Unidade', 'post type singular name'),
        'add_new' => _x('Adicionar Unidade', 'Novo item'),
        'add_new_item' => __('Novo Item'),
        'edit_item' => __('Editar Item'),
        'new_item' => __('Novo Item'),
        'view_item' => __('Ver Item'),
        'search_items' => __('Procurar Itens'),
        'not_found' =>  __('Nenhum registro encontrado'),
        'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Unidades'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title','editor','thumbnail', 'excerpt', 'custom-fields', 'revisions', 'trackbacks'),
        "rewrite" => array(
        "with_front" => false
    )
    );

    register_post_type( 'unidades' , $args );
    flush_rewrite_rules();

}

function post_depoimentos() {
    $depoimentos = new Odin_Post_Type(
        'Depoimentos', // Nome (Singular) do Post Type.
        'depoimentos' // Slug do Post Type.
    );

    $depoimentos->set_labels(
        array(
            'menu_name' => __( 'Depoimentos', 'odin' )
        )
    );

    $depoimentos->set_arguments(
        array(
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt','custom-fields' ),
            'menu_icon' => 'dashicons-testimonial'
        )
    );
}

add_action( 'init', 'post_depoimentos', 1 );

































































































































































































































































function tresrecentes() {

	
    global $post;
    $args = array( 'numberposts' => 3 );
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) : setup_postdata($post); ?>

<div class="card-conteudo conteudo-img" style="background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%), url(<?php echo the_post_thumbnail_url(); ?>)">
    <div class="texto-conteudo">
        <h3><?php the_title(); ?></h3>
        <a href="<?php the_permalink(); ?>"><button>Ver mais</button></a>
    </div>
</div>


<?php endforeach;

}
add_shortcode( 'tres-recentes', 'tresrecentes' );










function tresrecentesdesk() {

	
    global $post;
    $args = array( 'numberposts' => 2 );
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) : setup_postdata($post); ?>

<div class="card-conteudo conteudo-img" style="background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%), url(<?php echo the_post_thumbnail_url(); ?>)">
    <div class="texto-conteudo">
        <h3><?php the_title(); ?></h3>
        <a href="<?php the_permalink(); ?>"><button>Ver mais</button></a>
    </div>
</div>


<?php endforeach;

}
add_shortcode( 'tres-recentesdesk', 'tresrecentesdesk' );







function tresrecentesdeskblog() {

	
    global $post;
    $args = array( 'numberposts' => 3 );
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) : setup_postdata($post); ?>

<div class="card-conteudo conteudo-img" style="background: linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%), url(<?php echo the_post_thumbnail_url(); ?>)">
    <div class="texto-conteudo">
        <h3><?php the_title(); ?></h3>
        <a href="<?php the_permalink(); ?>"><button>Ver mais</button></a>
    </div>
</div>


<?php endforeach;

}
add_shortcode( 'tres-recentesdeskblog', 'tresrecentesdesk' );









function tresrecomenda() {

	
    global $post;
    $args = array( 'numberposts' => 3, 'cat' => 2 );
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) : setup_postdata($post); ?>

<div class="card-conteudo conteudo-img" style="background:linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%), url(<?php echo the_post_thumbnail_url(); ?>)">
    <div class="texto-conteudo">
        <h3><?php the_title(); ?></h3>
        <a href="<?php the_permalink(); ?>"><button>Ver mais</button></a>
    </div>
</div>


<?php endforeach;

}
add_shortcode( 'tres-recomenda', 'tresrecomenda' );


function tresrecomendadesk() {

	
    global $post;
    $args = array( 'numberposts' => 2, 'cat' => 2 );
    $myposts = get_posts( $args );
    foreach( $myposts as $post ) : setup_postdata($post); ?>

<div class="card-conteudo conteudo-img" style="background:linear-gradient(90deg, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%), url(<?php echo the_post_thumbnail_url(); ?>)">
    <div class="texto-conteudo">
        <h3><?php the_title(); ?></h3>
        <a href="<?php the_permalink(); ?>"><button>Ver mais</button></a>
    </div>
</div>


<?php endforeach;

}
add_shortcode( 'tres-recomendadesk', 'tresrecomendadesk' );














function post_materiais() {
    $material = new Odin_Post_Type(
        'Material Cliente', // Nome (Singular) do Post Type.
        'materiais clientes' // Slug do Post Type.
    );

    $material->set_labels(
        array(
            'menu_name' => __( 'Materiais cliente', 'odin' )
        )
    );

    $material->set_arguments(
        array(
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt','custom-fields' ),
            'menu_icon' => 'dashicons-book-alt'
        )
    );
}

add_action( 'init', 'post_materiais', 1 );



function post_materiais_medico() {
    $materiaismedico = new Odin_Post_Type(
        'materiaismedico Medico', // Nome (Singular) do Post Type.
        'materiaismedico' // Slug do Post Type.
    );

    $materiaismedico->set_labels(
        array(
            'menu_name' => __( 'Materiais medico', 'odin' )
        )
    );

    $materiaismedico->set_arguments(
        array(
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt','custom-fields' ),
            'menu_icon' => 'dashicons-book-alt'
        )
    );
}

add_action( 'init', 'post_materiais_medico', 1 );




function post_youtube() {
    $youtube = new Odin_Post_Type(
        'youtube', // Nome (Singular) do Post Type.
        'youtube' // Slug do Post Type.
    );

    $youtube->set_labels(
        array(
            'menu_name' => __( 'youtube', 'odin' )
        )
    );

    $youtube->set_arguments(
        array(
            'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt','custom-fields' ),
            'menu_icon' => 'dashicons-book-alt'
        )
    );
}

add_action( 'init', 'post_youtube', 1 );




















function youtubewid() {

	$args = array(
		'numberposts' => 2,
		'post_type'=> 'youtube',
		'order'    => 'ASC'
		);              
	
	$the_query = new WP_Query( $args );

	foreach ($the_query->posts as $key => $post) {?>

		<div class="card-conteudo-video">
		<iframe width="315" height="200" src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'link_materiais', true); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	
	<?php }
	
}
	add_shortcode( 'tres-youtubes', 'youtubewid' );



