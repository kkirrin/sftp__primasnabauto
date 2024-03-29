<?php
/**
 * flare functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package flare
 */

/**
 * Get the path for the file ( to support child theme )
 *
 * @since flare 1.0.0
 *
 * @param string $file_path, path from the theme
 * @return string full path of file inside theme
 *
 */
if( !function_exists('flare_file_directory') ){
	function flare_file_directory( $file_path ){

		if( file_exists( trailingslashit( get_stylesheet_directory() ) . $file_path) ){
			return trailingslashit( get_stylesheet_directory() ) . $file_path;
		}
		else{
			return trailingslashit( get_template_directory() ) . $file_path;
		}
	}
}

/**
 * require flare int.
 */
require get_template_directory() . '/inc/init.php';

if ( ! function_exists( 'flare_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function flare_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on flare-eye, use a find and replace
	 * to change 'flare-eye' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'flare', get_template_directory() . '/languages' );
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );


	/*
	 * Enable support for image sizes on posts and pages.
	 *
	 * @link https://developer.wordpress.org/reference/functions/add_image_size/
	 */
	add_image_size( 'flare-main-banner', 1370, 650, true );
	add_image_size( 'flare-blog', 900, 650, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'flare' ),
		'top-menu' => esc_html__( 'Top Menu', 'flare' ),
		'top-right' => esc_html__('Top-right-menu', 'flare'),
		'top-left' => esc_html__('Top-left-menu', 'flare'),
		'mobile-menu' => esc_html__('Mobile-menu', 'flare'),
		'footer-menu-one' => esc_html__('Footer-menu-one', 'flare'),
		'footer-menu-two' => esc_html__('Footer-menu-two', 'flare'),
		'top-auc' => esc_html__('top-auc', 'flare'),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );


	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'flare_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	/*implimenting new feature from 4.5*/
	add_theme_support( 'custom-logo', array(
	   'header-text' => array( 'site-title', 'site-description' ),
	   'height'      => 50,
	   'width'       => 165,
	   'flex-width' => true
	) );

}
endif;
add_action( 'after_setup_theme', 'flare_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function flare_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'flare_content_width', 640 );
}
add_action( 'after_setup_theme', 'flare_content_width', 0 );

/*** Свой стандартный ГРАВАТАР ***/
add_filter( 'avatar_defaults', 'newgravatar' );
function newgravatar ($avatar_defaults) {
$myavatar = get_bloginfo('template_directory') . '/images/cropped-gh.png';
$avatar_defaults[$myavatar] = "MYGRAVATAR";
return $avatar_defaults;
}
/**
 * Enqueue scripts and styles.
 */


function flare_scripts() {
		wp_enqueue_style( 'flare-style', get_stylesheet_uri(),'','5.7.8' );
		/*google fonts*/
		wp_enqueue_style( 'flare-google-fonts', '//fonts.googleapis.com/css?family=Merriweather:300,300italic,400,400italic,700,700italic');

		wp_enqueue_style( 'flare-fonts', '//fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic');
	 	//  VARIABLES AND ARRAY
        $assets_url = get_template_directory_uri() .'/assets/';
        // REGISTER STYLE
	    wp_enqueue_style( 'bootstrap', $assets_url.'css/vendor/bootstrap.min.css', '', '3.8.2');
	    wp_enqueue_style( 'swiper-bundle', $assets_url.'css/vendor/swiper-bundle.min.css');
	    wp_enqueue_style( 'font-awesome', $assets_url.'font-awesome/css/font-awesome.min.css', array(), '4.834534' );
        wp_enqueue_style( 'slick', $assets_url.'css/vendor/slick.css');
        wp_enqueue_style( 'animation', $assets_url.'css/components/animation.css');

        // REGISTER SCRIPT
        wp_enqueue_script( 'jquery-bootstrap', $assets_url.'js/vender/bootstrap.min.js', array('jquery'), 'v4.3.9', true );
        wp_enqueue_script( 'swiper-bundle', $assets_url.'js/vender/swiper-bundle.min.js', '', '1.5');
        wp_enqueue_script( 'jquery-slick', $assets_url.'js/vender/slick.js', array('jquery'));
        // wp_enqueue_script( 'app', $assets_url.'js/app.js', array(), 'v1.5.5');

        wp_enqueue_script( 'jquery-wow', $assets_url.'js/vender/wow.min.js', array('jquery'), '1.1.5', true );
        
        //ENQUEUE
        // wp_enqueue_script( 'flare-main', $assets_url.'js/main.js', array('jquery'),null,true, '2.2.3' );
        
	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'flare_scripts' );



/*added admin css for meta*/
function flare_admin_style($hook) {
	if ( in_array( $hook, array( 'post.php', 'post-new.php' ) ) ) {
        wp_register_style( 'flare-admin-meta-css', get_template_directory_uri() . '/assets/css/custom-meta.css',array(), '','1.2'  );
        wp_enqueue_style( 'flare-admin-meta-css' );
    }
}
add_action( 'admin_enqueue_scripts', 'flare_admin_style' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/*breadcrum function*/

if ( ! function_exists( 'flare_simple_breadcrumb' ) ) :

	/**
	 * Simple breadcrumb.
	 *
	 * @since 1.0.0
	 */
	function flare_simple_breadcrumb() {

		if ( ! function_exists( 'breadcrumb_trail' ) ) {
			require_once get_template_directory() . '/assets/breadcrumbs/breadcrumbs.php';
		}

		$breadcrumb_args = array(
			'container'   => 'div',
			'show_browse' => false,
		);
		breadcrumb_trail( $breadcrumb_args );

	}

endif;


/*update to pro added*/
require_once( trailingslashit( get_template_directory() ) . 'trt-customize-pro/flare/class-customize.php' );

function flare_featured_home_main_slider() {

	?>
		<div class="main-slider">
		<div class="item"
				style="background-image: url('https://primasnabauto.ru/wp-content/themes/flare/assets/img/main__slide_1.png');">
				<div class="carousel-caption wow fadeInUp">
					<h1>Заказ авто из Японии, Кореи и Китая</h1>
					<p>Автомобили под заказ: из Японии, Кореи, Китая. <br> Мы купим и привезём любой авто, в том числе санкционный.</p>
					<a class="carousel-caption__btn" href="https://wa.me/+79146867878">
						Связаться </a>
				</div>
			</div>

			<div class="item"
				style="background-image: url('https://primasnabauto.ru/wp-content/themes/flare/assets/img/main_slide.png');">
				<div class="carousel-caption wow fadeInUp">
					<h1>Аукционы Японии</h1>
					<p>Как купить&nbsp;автомобиль из Японии Хотите приобрести автомобиль с японского
						аукциона надежно и
						выгодно? Компания "ПримаСнаб Авто" поможет на каждом этапе покупки, даже если вы находитесь в другом
						регионе. Вы можете... </p>
					<a class="carousel-caption__btn" href="https://primasnabauto.ru/auktsiony-yaponii/">
						Подробнее.. </a>
				</div>
			</div>
	
			<div class="item"
				style="background-image: url('https://primasnabauto.ru/wp-content/uploads/2017/11/Lexus-RX-350-F-Sport-1280x650.jpg');">
				<div class="carousel-caption wow fadeInUp">
					<h1>Таможенное оформление Автомобилей
					</h1>
					<p>Наша компания предлагает перечень услуг таможенного оформления: Оформление
						транспортных средств и
						мототехники, распилов и запчастей на автомобили Консультирование по вопросам таможенного оформления;
						Предварительный анализ документов, предоставленных на таможенное декларирование; Проверка... </p>
					<a class="carousel-caption__btn" href="https://primasnabauto.ru/tamozhennoe-oformlenie-2/">
						Подробнее.. </a>
				</div>
			</div>
			
			<div class="item"
			style="background-image: url('https://primasnabauto.ru/wp-content/uploads/2023/09/123.jpg');">
				<div class="carousel-caption wow fadeInUp">
					<h1> Наш Youtube канал: @primasnabauto
					</h1>
					<p>Друзья, приветствуем вас на нашем канале! Наша компания занимается таможенным оформлением автомобилей и привозом авто под заказ с аукционов Японии и Кореи. Здесь мы будем снимать обзоры на привезённые автомобили, рассказывать про новости в мире авто и показывать весь интересный процесс нашей работы! Подписывайтесь на нас в inst - @primasnabauto Мы находимся во Владивостоке ул. Нижнепортовая,1 телефон для связи с нами 8 800 20 10 888 . </p>
					<a class="carousel-caption__btn"
						href="https://primasnabauto.ru/ustanovka-i-aktivatsiya-ustrojstv-era-g/">
						Подробнее.. </a>
				</div>
			</div>
	
		</div>
	
		<?php
	}
	
	add_action( 'flare_homepage', 'flare_featured_home_main_slider', 10 );