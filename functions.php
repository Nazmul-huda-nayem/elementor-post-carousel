<?php
namespace PCFEBlogPosts;

define( "PCFE_ASFSK_ASSETS_ADMIN_DIR_FILE", plugin_dir_url( __FILE__ ) . "assets/admin" );

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class PCFEFunctions {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function pcfe_admin_editor_scripts() {
		add_filter( 'script_loader_tag', [ $this, 'pcfe_admin_editor_scripts_as_a_module' ], 10, 2 );
	}

	public function pcfe_admin_editor_scripts_as_a_module( $tag, $handle ) {
		if ( 'pcfe_blogpost_editor' === $handle ) {
			$tag = str_replace( '<script', '<script type="module"', $tag );
		}

		return $tag;
	}

	private function include_widgets_files() {
		require_once( __DIR__ . '/widgets/widget.php' );
	}

	public function pcfe_register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register WidgetsF
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\PCFEWidgets());
	}

	// Register Category
	function pcfe_new_add_elementor_widget_categories( $elements_manager ) {

		$elements_manager->add_category(
			'pcfe-category',
			[
				'title' => esc_html__( 'Post Carousel', 'post-carousel-for-elementor' ),
				'icon' => 'eicon-person',
			]
		);
	}

	public function pcfe_all_assets_style_for_the_public(){
		$bwdpc_all_cdn = plugin_dir_url( __FILE__ ) . 'assets/public/';
		wp_enqueue_script( 'pcfe-owl-interactive', $bwdpc_all_cdn.'owl.carousel.min.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'pcfe-main-interactive', $bwdpc_all_cdn.'main.js', array('jquery'), '1.0.0', true );
		$all_css_js_file = array(
			'pcfe-plugin-owl-style' => array('pcfe_path_define'=>$bwdpc_all_cdn.'owl.carousel.min.css'),
			'pcfe-plugin-owltheme' => array('pcfe_path_define'=>$bwdpc_all_cdn.'owl.theme.default.min.css'),
            'pcfe-plugin-main-style' => array('pcfe_path_define'=>$bwdpc_all_cdn.'main.css'),
            'pcfe-plugin-responsive' => array('pcfe_path_define'=>$bwdpc_all_cdn.'responsive.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['pcfe_path_define'], null, '1.0.0', 'all');
        }
		wp_enqueue_style( 'pcfe-font-awesome', $bwdpc_all_cdn.'fontawesome.css', null, '1.0.0', 'all' );
	}

	public function pcfe_all_assets_for_elementor_editor_admin(){
		$all_css_js_file = array(
            'pcfe-admin-icon' => array('pcfe_path_admin_define'=>PCFE_ASFSK_ASSETS_ADMIN_DIR_FILE . '/icon.css'),
        );
        foreach($all_css_js_file as $handle => $fileinfo){
            wp_enqueue_style( $handle, $fileinfo['pcfe_path_admin_define'], null, '1.0.0', 'all');
        }
	}
	
	public function __construct() {

		// For public assets
		add_action('wp_enqueue_scripts', [$this, 'pcfe_all_assets_style_for_the_public']);

		// For Elementor Editor
		add_action('elementor/editor/before_enqueue_scripts', [$this, 'pcfe_all_assets_for_elementor_editor_admin']);
		
		// Register Category
		add_action( 'elementor/elements/categories_registered', [ $this, 'pcfe_new_add_elementor_widget_categories' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'pcfe_register_widgets' ] );

		// Register editor scripts
		add_action( 'elementor/editor/after_enqueue_scripts', [ $this, 'pcfe_admin_editor_scripts' ] );
	}
}

// Instantiate Plugin Class
PCFEFunctions::instance();