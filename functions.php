<?php
/**
 * autolombard_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package autolombard_theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function autolombard_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on autolombard_theme, use a find and replace
		* to change 'autolombard_theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'autolombard_theme', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'autolombard_theme' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'autolombard_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'autolombard_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function autolombard_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'autolombard_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'autolombard_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function autolombard_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'autolombard_theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'autolombard_theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'autolombard_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function autolombard_theme_scripts() {
	wp_enqueue_style( 'autolombard_theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'autolombard_theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'autolombard_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'autolombard_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



function mytheme_customize_register( $wp_customize ) {
/*
Добавляем секцию в настройки темы
*/
  $wp_customize->add_section(
      // ID
      'data_sale_section',
      // Arguments array
      array(
          'title' => 'Поля шапки и подвала',
          'capability' => 'edit_theme_options',
          'description' => "Тут можно настройки блока"
      )
  );
  $wp_customize->add_setting(
      // ID
      'sale_image',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  // Add Controls
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site_image_control', array(
        'label' => "Лого в подвале",
        'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'sale_image'   
    )));
/*
Добавляем поле телефона site_telephone
*/
  $wp_customize->add_setting(
      // ID
      'sale_title',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'sale_title_control',
      // Arguments array
      array(
          'type' => 'textarea',
          'label' => "Описание сайта",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'sale_title'
      )
  );
  $wp_customize->add_setting(
      // ID
      'sale_tel',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'sale_text_control',
      // Arguments array
      array(
          'type' => 'text',
          'label' => "Телефон в Москве",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'sale_tel'
      )
  );
  $wp_customize->add_setting(
      // ID
      'sale_tel2',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'sale_tel2_control',
      // Arguments array
      array(
          'type' => 'text',
          'label' => "Телефон в Санкт-Петербурге",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'sale_tel2'
      )
  );
  $wp_customize->add_setting(
      // ID
      'sale_txt',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'sale_txt_control',
      // Arguments array
      array(
          'type' => 'text',
          'label' => "Время работы",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'sale_txt'
      )
  );
  $wp_customize->add_setting(
      // ID
      'link_wts',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'link_wts_control',
      // Arguments array
      array(
          'type' => 'text',
          'label' => "Ссылка на Whatsapp",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'link_wts'
      )
  );
  $wp_customize->add_setting(
      // ID
      'link_tg',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'link_tg_control',
      // Arguments array
      array(
          'type' => 'text',
          'label' => "Ссылка на Telegram",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'link_tg'
      )
  );
  $wp_customize->add_setting(
      // ID
      'footer_text',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'footer_text_control',
      // Arguments array
      array(
          'type' => 'textarea',
          'label' => "Пользовательское соглашение в подвале",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'footer_text'
      )
  );
  $wp_customize->add_setting(
      // ID
      'foot1',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'foot1_control',
      // Arguments array
      array(
          'type' => 'textarea',
          'label' => "Описание в подвале",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'foot1'
      )
  );
  $wp_customize->add_setting(
      // ID
      'foot2',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'foot2_control',
      // Arguments array
      array(
          'type' => 'textarea',
          'label' => "Описание в подвале",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'foot2'
      )
  );
  $wp_customize->add_setting(
      // ID
      'copy',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'copy_control',
      // Arguments array
      array(
          'type' => 'text',
          'label' => "Копирайт",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'copy'
      )
  );
  $wp_customize->add_setting(
      // ID
      'politic',
      // Arguments array
      array(
          'default' => '',
          'type' => 'option'
      )
  );
  $wp_customize->add_control(
      // ID
      'politic_control',
      // Arguments array
      array(
          'type' => 'text',
          'label' => "Ссылка на политику конфиденциальности",
          'section' => 'data_sale_section',
          // This last one must match setting ID from above
          'settings' => 'politic'
      )
  );
}
add_action( 'customize_register', 'mytheme_customize_register' );
