<?php
/**
 * Ctn functions
 */


add_filter('excerpt_mblength', 'new_excerpt_mblength');
 
if ( ! function_exists( 'ctntheme_theme_support' ) ) :

function ctntheme_theme_support(){
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'f5efe0',
		)
	);

	/**
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 2000, 600 );

	// Add custom image size used in Cover Template.
	add_image_size( 'ctntheme-fullscreen', 2000, 600 );

	add_theme_support('category-thumbnails');

	/*
	 * Let WordPress manage the document title.
	 */
	add_theme_support( 'title-tag' );

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
			'script',
			'style',
			'navigation-widgets',
		)
	);


	/*
	 * Make theme available for translation.
	 */
	load_theme_textdomain( 'gr8newcar' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );


}
endif;
add_action( 'after_setup_theme', 'ctntheme_theme_support' );

/*
* Theme Menu
*/
function ctntheme_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'ctntheme' ),
		'expanded' => __( 'Desktop Expanded Menu', 'ctntheme' ),
		'mobile'   => __( 'Mobile Menu', 'ctntheme' ),
		'footer'   => __( 'Footer Menu', 'ctntheme' ),
		'social'   => __( 'Social Menu', 'ctntheme' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'ctntheme_menus' );

function custom_excerpt_length( $length ) {
     return 100;	//表示したい文字数
}	
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

remove_filter('the_excerpt', 'wpautop');

/*
* Theme Sidebar
*/
function ctntheme_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Sidebar Post
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Sidebar', 'ctntheme' ),
				'id'          => 'sidebar',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'ctntheme' ),
			)
		)
	);
	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #1', 'ctntheme' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'ctntheme' ),
			)
		)
	);
	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #2', 'ctntheme' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'ctntheme' ),
			)
		)
	);

}

add_action( 'widgets_init', 'ctntheme_sidebar_registration' );


/**
 * Enqueue scripts and styles.
 */
 function ctn_theme_script(){
 	// load bootstrap css
	wp_enqueue_style( 'style-css', (get_template_directory_uri()).'/assets/css/style.css' );

	wp_enqueue_style( 'step-css', (get_template_directory_uri()).'/assets/css/step.css' );

	wp_enqueue_style( 'reset-css', (get_template_directory_uri()).'/assets/css/reset.css' );

	wp_enqueue_style( 'responsive-css', (get_template_directory_uri()).'/assets/css/responsive.css' );

    wp_enqueue_style( 'ctnkaitori-style', get_stylesheet_uri() );

    //Vendor JS Files
    wp_enqueue_script('jquery-js', (get_template_directory_uri()) . '/assets/js/jquery.js', array(), '', true );

    wp_enqueue_script('script-js', (get_template_directory_uri()) . '/assets/js/script.js', array(), '', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
 }
add_action( 'wp_enqueue_scripts', 'ctn_theme_script' );


add_filter('use_block_editor_for_post', '__return_false');


// ** * Cho phép tải lên cho các tệp hình ảnh webp. * /
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    $existing_mimes['avif'] = 'image/avif';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');


// add_action('admin_menu', 'my_custom_menu_page');
// function my_custom_menu_page() {
//     // Thêm một trang menu mới
//     add_menu_page(
//         'Slider', // Tiêu đề của trang menu
//         'Custom Fields', // Tên của trang menu trong menu quản trị
//         'manage_options', // Quyền truy cập cần thiết để truy cập trang menu
//         'custom-fields', // Slug của trang menu
//         'my_custom_menu_callback', // Hàm callback để hiển thị nội dung của trang menu
//         'dashicons-admin-generic' // Icon cho trang menu
//     );
// }
// function my_custom_menu_callback() {
//     // Nội dung của trang menu
//     echo '<div class="wrap">';
//     echo '<h2>Custom Fields</h2>';
//     // Đặt mã HTML hoặc mã PHP ở đây để hiển thị các trường ACF
//     // Ví dụ:
//     // echo '<form method="post" action="options.php">';
//     // settings_fields('my_option_group');
//     // do_settings_sections('my_option_page');
//     // submit_button();
//     // echo '</form>';
//     echo '</div>';
// }


// function my_page_settings_page() {

//     acf_form([
//     'post_id' => 'options', // オプションページの場合は 'options' を指定
//     'field_groups' => ['group_65dd6e81ab5da'], // 表示するフィールドグループのID
//     'submit_value' => 'save', // 保存ボタンのテキスト
// ]);
// }

// function my_add_settings_page() {
//     add_menu_page(
//         'Slider',    // メニュータイトル
//         'Slider Manager',    // ページタイトル
//         'manage_options',  // アクセス権限（この例では「manage_options」を指定）
//         'page-settings', // ページスラッグ（一意の識別子）
//         'my_page_settings_page', // 表示コールバック関数
//         'dashicons-format-gallery', // アイコン（任意）
//         2 // メニューの位置
//     );
// }
// add_action( 'admin_menu', 'my_add_settings_page' );

// function my_admin_head() {
//     if (isset($_GET['page']) && $_GET['page'] === 'page-settings') {
//         acf_form_head();
//     }
// }
// add_action('admin_init', 'my_admin_head');




/*=================================
 スライダー画像設定ページ
===================================*/
add_action( 'init', 'cf_create_admin_menu' );
function cf_create_admin_menu() {
	/**
	 * @param string      $page_title ページのtitle属性値
	 * @param string      $menu_title 管理画面のメニューに表示するタイトル
	 * @param string      $capability メニューを操作できる権限（maange_options とか）
	 * @param string      $menu_slug  オプションページのスラッグ。ユニークな値にすること。
	 * @param string|null $icon_url   メニューに表示するアイコンの URL
	 * @param int         $position   メニューの位置
	 */
	SCF::add_options_page(
		'トップページ スライダー設定',
		'スライダー設定',
		'publish_pages',
		'slider-option',
		'dashicons-format-gallery',
		2
	);
}