<?php
const TEXTDOMAIN = 'yoy';
load_theme_textdomain( TEXTDOMAIN, get_template_directory() . '/languages' );

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_post_type_support( 'page', 'excerpt' );

add_image_size( 'yoy-post-thumb', 622, 267, true );
add_image_size( 'yoy-home-slide', 1920, 500, true );


// Remove image size attributes from thumbnail and images sent to editor
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );
function remove_width_attribute( $html ) {
	$html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	return $html;
}

if (!is_admin()) add_action("wp_enqueue_scripts", "yoy_scripts", 11);
function yoy_scripts() {
	wp_deregister_script('jquery');
	wp_register_script( 'jquery', ( '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js' ), false, null, true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrapjs', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js', array('jquery'), false, true );
}

if (!is_admin()) add_action("wp_enqueue_scripts", "yoy_styles", 11);
function yoy_styles() {
	wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css', false );
	wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', false );
	wp_enqueue_style( 'yoycss', get_template_directory_uri() . '/css/style.css', false);
}

// Register menus
register_nav_menus(
	array(
		'primary'   => __( 'Primary menu', TEXTDOMAIN ),
		'secondary' => __( 'Footer menu', TEXTDOMAIN ),
	)
);

require_once('includes/navwalker.php');

// Register Widgets
function theme_widgets_init() {
	register_sidebar( array(
		'name'          => 'Sidebar',
		'id'            => 'sidebar-1',
		'description'   => 'Add widgets here to appear in your sidebar.',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Footer Menus',
		'id'            => 'footer-1',
		'description'   => 'Add widgets here to appear in your footer.',
		'before_widget' => '<div class="col-sm-3 footermw">',
		'after_widget'  => '</div>',
		'before_title'  => '<h6 class="hide">',
		'after_title'   => '</h6>',
	) );
}
add_action( 'widgets_init', 'theme_widgets_init' );

if ( file_exists( dirname( __FILE__ ) . '/cmb/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/cmb/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/CMB/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/CMB/init.php';
}


/**
 * Metabox for Page Template
 * @author Kenneth White
 * @link https://github.com/WebDevStudios/CMB2/wiki/Adding-your-own-show_on-filters
 *
 * @param bool $display
 * @param array $meta_box
 * @return bool display metabox
 */
function strong_metabox_show_on_template( $display, $meta_box ) {
	if ( ! isset( $meta_box['show_on']['key'], $meta_box['show_on']['value'] ) ) {
		return $display;
	}

	if ( 'template' !== $meta_box['show_on']['key'] ) {
		return $display;
	}

	$post_id = 0;

	// If we're showing it based on ID, get the current ID
	if ( isset( $_GET['post'] ) ) {
		$post_id = $_GET['post'];
	} elseif ( isset( $_POST['post_ID'] ) ) {
		$post_id = $_POST['post_ID'];
	}

	if ( ! $post_id) {
		return false;
	}

	$template_name = get_page_template_slug( $post_id );
	$template_name = ! empty( $template_name ) ? substr( $template_name, 0, -4 ) : 'default';

	// See if there's a match
	return in_array( $template_name, (array) $meta_box['show_on']['value'] );
}
add_filter( 'cmb2_show_on', 'strong_metabox_show_on_template', 10, 2 );

function strong_metabox_show_on_front_page( $display, $meta_box ) {
	if ( ! isset( $meta_box['show_on']['key'] ) ) {
		return $display;
	}

	if ( 'front-page' !== $meta_box['show_on']['key'] ) {
		return $display;
	}

	$post_id = 0;

	// If we're showing it based on ID, get the current ID
	if ( isset( $_GET['post'] ) ) {
		$post_id = $_GET['post'];
	} elseif ( isset( $_POST['post_ID'] ) ) {
		$post_id = $_POST['post_ID'];
	}

	if ( ! $post_id ) {
		return $display;
	}

	// Get ID of page set as front page, 0 if there isn't one
	$front_page = get_option( 'page_on_front' );

	// there is a front page set and we're on it!
	return $post_id == $front_page;
}
add_filter( 'cmb2_show_on', 'strong_metabox_show_on_front_page', 10, 2 );

add_filter( 'cmb2_meta_boxes', 'strong_metaboxes' );
function strong_metaboxes( array $meta_boxes ) {
	$prefix = '_yoy_';

	$cmb_home = new_cmb2_box( array(
		'id'            => $prefix . 'homepage_options',
		'title'         => __( 'Homepage Options', 'cmb2' ),
		'object_types'  => array( 'page', ), // Post type
		'show_on'		=> array('key'=>'front-page', 'value'=>''),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
	) );
	$cmb_home->add_field( array(
		'id'          => $prefix . 'homepage_slides',
		'type'        => 'group',
		'description' => __( 'Manage Homepage Slideshow', 'yoy' ),
		'options'     => array(
			'group_title'   => __( 'Slide {#}', 'yoy' ), // since version 1.1.4, {#} gets replaced by row number
			'add_button'    => __( 'Add another slide', 'yoy' ),
			'remove_button' => __( 'Remove slide', 'yoy' ),
			'sortable'      => true, // beta
		),
	) );
	$cmb_home->add_group_field( $prefix . 'homepage_slides', array(
		'name' => 'Slide Text',
		'id'   => 'content',
		'type' => 'wysiwyg',
	) );
	$cmb_home->add_group_field( $prefix . 'homepage_slides', array(
		'name' => 'Slide Title',
		'id'   => 'title',
		'type' => 'text',
	) );
	$cmb_home->add_group_field( $prefix . 'homepage_slides', array(
		'name' => 'Slide Subtitle',
		'id'   => 'subtitle',
		'type' => 'wysiwyg',
	) );
	$cmb_home->add_group_field( $prefix . 'homepage_slides', array(
		'name' => 'Slide URL',
		'id'   => 'url',
		'type' => 'text_url',
	) );
	$cmb_home->add_group_field( $prefix . 'homepage_slides', array(
		'name' => 'Slide Image',
		'id'   => 'image',
		'type' => 'file',
	) );
}

require_once("includes/phpFlickr/phpFlickr.php");


class YOY_Admin {

	/**
	 * Option key, and option page slug
	 * @var string
	 */
	private $key = 'yoy_options';

	/**
	 * Options page metabox id
	 * @var string
	 */
	private $metabox_id = 'yoy_option_metabox';

	/**
	 * Options Page title
	 * @var string
	 */
	protected $title = '';

	/**
	 * Options Page hook
	 * @var string
	 */
	protected $options_page = '';

	/**
	 * Constructor
	 * @since 0.1.0
	 */
	public function __construct() {
		// Set our title
		$this->title = __( 'Site Options', 'yoy' );
	}

	/**
	 * Initiate our hooks
	 * @since 0.1.0
	 */
	public function hooks() {
		add_action( 'admin_init', array( $this, 'init' ) );
		add_action( 'admin_menu', array( $this, 'add_options_page' ) );
		add_action( 'cmb2_init', array( $this, 'add_options_page_metabox' ) );
	}


	/**
	 * Register our setting to WP
	 * @since  0.1.0
	 */
	public function init() {
		register_setting( $this->key, $this->key );
	}

	/**
	 * Add menu options page
	 * @since 0.1.0
	 */
	public function add_options_page() {
		$this->options_page = add_menu_page( $this->title, $this->title, 'manage_options', $this->key, array( $this, 'admin_page_display' ) );

		// Include CMB CSS in the head to avoid FOUT
		add_action( "admin_print_styles-{$this->options_page}", array( 'CMB2_hookup', 'enqueue_cmb_css' ) );
	}

	/**
	 * Admin page markup. Mostly handled by CMB2
	 * @since  0.1.0
	 */
	public function admin_page_display() {
		?>
		<div class="wrap cmb2-options-page <?php echo $this->key; ?>">
			<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
			<?php cmb2_metabox_form( $this->metabox_id, $this->key, array( 'cmb_styles' => false ) ); ?>
		</div>
		<?php
	}

	/**
	 * Add the options metabox to the array of metaboxes
	 * @since  0.1.0
	 */
	function add_options_page_metabox() {

		$cmb = new_cmb2_box( array(
			'id'      => $this->metabox_id,
			'hookup'  => false,
			'show_on' => array(
				// These are important, don't remove
				'key'   => 'options-page',
				'value' => array( $this->key, )
			),
		) );

		// Set our CMB2 fields
		$cmb->add_field( array(
			'name' => __( 'Flickr API Key', 'yoy' ),
			'id'   => 'flickr_api_key',
			'type' => 'text'
		) );

		$cmb->add_field( array(
			'name' => __( 'Flickr User ID', 'yoy' ),
			'id'   => 'flickr_user_id',
			'type' => 'text'
		) );

		$cmb->add_field( array(
			'name' => __( 'Flickr Image Count', 'yoy' ),
			'id'   => 'flickr_image_count',
			'type' => 'text',
			'default' => '6'
		) );

		$cmb->add_field( array(
			'name' => __( 'Facebook URL', 'yoy' ),
			'id'   => 'facebook_url',
			'type' => 'text_url'
		) );

		$cmb->add_field( array(
			'name' => __( 'Youtube URL', 'yoy' ),
			'id'   => 'youtube_url',
			'type' => 'text_url'
		) );

		$cmb->add_field( array(
			'name' => __( 'Twitter URL', 'yoy' ),
			'id'   => 'twitter_url',
			'type' => 'text_url'
		) );

		$cmb->add_field( array(
			'name' => __( 'Instagram URL', 'yoy' ),
			'id'   => 'instagram_url',
			'type' => 'text_url'
		) );

	}

	/**
	 * Public getter method for retrieving protected/private variables
	 * @since  0.1.0
	 * @param  string  $field Field to retrieve
	 * @return mixed          Field value or exception is thrown
	 */
	public function __get( $field ) {
		// Allowed fields to retrieve
		if ( in_array( $field, array( 'key', 'metabox_id', 'title', 'options_page' ), true ) ) {
			return $this->{$field};
		}

		throw new Exception( 'Invalid property: ' . $field );
	}

}

/**
 * Helper function to get/return the YOY_Admin object
 * @since  0.1.0
 * @return YOY_Admin object
 */
function yoy_admin() {
	static $object = null;
	if ( is_null( $object ) ) {
		$object = new YOY_Admin();
		$object->hooks();
	}

	return $object;
}

/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function yoy_get_option( $key = '' ) {
	return cmb2_get_option( yoy_admin()->key, $key );
}
// Get it started
yoy_admin();