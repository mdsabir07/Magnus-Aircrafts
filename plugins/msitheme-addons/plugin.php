<?php
namespace MsiThemeEssentialAddons;
use MsiThemeEssentialAddons\Widgets\SectionTitle;
use MsiThemeEssentialAddons\Widgets\BorderHeading;
use MsiThemeEssentialAddons\Widgets\ParallaxHero;
use MsiThemeEssentialAddons\Widgets\ImageSlider;
use MsiThemeEssentialAddons\Widgets\AboutUs;
// use MsiThemeEssentialAddons\Widgets\AsForm;
use MsiThemeEssentialAddons\Widgets\SocialShare;
use MsiThemeEssentialAddons\Widgets\SocialLinks;
use MsiThemeEssentialAddons\Widgets\Blogs;
use MsiThemeEssentialAddons\Widgets\Products;
use MsiThemeEssentialAddons\Widgets\CounterUp;
use MsiThemeEssentialAddons\Widgets\VideoGallery;
use MsiThemeEssentialAddons\Widgets\TextBlock;
use MsiThemeEssentialAddons\Widgets\TeamBlock;
use MsiThemeEssentialAddons\Widgets\TeamMembers;
use MsiThemeEssentialAddons\Widgets\ProductTab;
use MsiThemeEssentialAddons\Widgets\EventFilter;
use MsiThemeEssentialAddons\Widgets\Galleries;
use MsiThemeEssentialAddons\Widgets\OwnFusion;
/**
 * Class Plugin
 *
 * Main Plugin class
 * @since 1.2.0
 */
class MsiThemeEssentialAddonsPlugin {

	/**
	 * Instance
	 *
	 * @since 1.2.0
	 * @access private
	 * @static
	 *
	 * @var Plugin The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.2.0
	 * @access public
	 *
	 * @return Plugin An instance of the class.
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * widget_scripts
	 *
	 * Load required plugin core files.
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function widget_scripts() {
		wp_enqueue_script( 'magnific-popup', plugins_url( 'assets/js/jquery.magnific-popup.min.js', __FILE__ ), array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'msitheme-addons', plugins_url( 'assets/js/msitheme-addons.js', __FILE__ ), array('jquery'), '1.0.0', true );
	}

	/**
	 *  widgets styles
	 *
	 * Load widgets styles
	 *
	 */
	public function widget_styles() { 
		wp_enqueue_style( 'magnific-popup', plugins_url( '/assets/css/magnific-popup.css', __FILE__ ) );
		wp_enqueue_style( 'msitheme-addons-css', plugins_url( '/assets/css/msitheme-addons.css', __FILE__ ) );
	}

	/**
	 * Include Widgets files
	 *
	 * Load widgets files
	 *
	 * @since 1.2.0
	 * @access private
	 */
	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/section-title.php' );
		require_once( __DIR__ . '/widgets/border-heading.php' );
		require_once( __DIR__ . '/widgets/parallax-hero.php' );
		require_once( __DIR__ . '/widgets/image-slider.php' );
		require_once( __DIR__ . '/widgets/about-us.php' );
		require_once( __DIR__ . '/widgets/social-share.php' );
		require_once( __DIR__ . '/widgets/social-links.php' );
		require_once( __DIR__ . '/widgets/blog-posts.php' );
		require_once( __DIR__ . '/widgets/products.php' );
		require_once( __DIR__ . '/widgets/counter-up.php' );
		require_once( __DIR__ . '/widgets/video-gallery.php' );
		require_once( __DIR__ . '/widgets/text-block.php' );
		require_once( __DIR__ . '/widgets/team-block.php' );
		require_once( __DIR__ . '/widgets/team-members.php' );
		require_once( __DIR__ . '/widgets/product-tab.php' );
		require_once( __DIR__ . '/widgets/event-filter.php' );
		require_once( __DIR__ . '/widgets/galleries.php' );
		require_once( __DIR__ . '/widgets/own-fusion.php' );
	}

	/**
	 * Register Widgets
	 *
	 * Register new Elementor widgets.
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new SectionTitle() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new BorderHeading() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new ParallaxHero() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new ImageSlider() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new AboutUs() );
		// \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new AsForm() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new SocialShare() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new SocialLinks() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Blogs() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Products() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new CounterUp() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new VideoGallery() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new TextBlock() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new TeamBlock() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new TeamMembers() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new ProductTab() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new EventFilter() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Galleries() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new OwnFusion() );
	}

	/**
	 *  Plugin class constructor
	 *
	 * Register plugin action hooks and filters
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function __construct() {

		// Register widget scripts
		add_action( 'elementor/frontend/after_register_scripts', [ $this, 'widget_scripts' ] );

		// Register widget Style
		add_action( 'elementor/frontend/after_enqueue_styles', [ $this, 'widget_styles' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );

		// Register categories
		add_action( 'elementor/elements/categories_registered', [$this, 'register_msitheme_category'] );
	}
	
	public function register_msitheme_category($manager) {
		$manager->add_category('msitheme',[
			'title'	=> esc_html__( 'MsiTheme', 'msitheme' ),
			'icon'	=> esc_attr__( 'fas fa-image', 'msitheme' ),
		]);
	}
}

// Instantiate Plugin Class
MsiThemeEssentialAddonsPlugin::instance();
