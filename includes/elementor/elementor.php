<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class SODAThemesInitElementor {

	private static $_instance = null;

	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	private function include_widgets_files() {
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_action_block.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_alert_message.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_awards.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_button.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_changelog.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_contact_form_7.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_content_marquee.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_content_slider.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_countdown.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_counter_up.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_demo_item.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_divider.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_fancy_text.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_google_map.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_heading.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_images_compare.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_justified_gallery.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_list_editor.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_marquee_text.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_mask_image.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_page_title.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_partner.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_phone_block.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_pie_chart.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_pricing_table.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_progress_bar.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_section_title.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_service_box.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_simple_gist.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_simple_icon.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_simple_image.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_simple_link.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_single_post.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_slider_controls.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_slider_fixed_bar.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_slider_progress.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_social_icons.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_styled_list.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_team_member.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_template.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_testimonial.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_timeline.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_twitter_review.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_types_list.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/block_video_button.php';

		// Showcase
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/showcase/block_showcase_1.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/showcase/block_showcase_2.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/showcase/block_showcase_3.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/showcase/block_showcase_4.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/showcase/block_showcase_5.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/showcase/block_showcase_6.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/showcase/block_showcase_7.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/showcase/block_showcase_8.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/showcase/block_showcase_9.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/showcase/block_showcase_10.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/showcase/block_showcase_11.php';
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/blocks/showcase/block_showcase_12.php';

	}

	public function register_widgets() {
		$this->include_widgets_files();

		// Register Widgets
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Action_Block() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Alert_Message() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Awards() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Button() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Changelog() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Contact_Form_7() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Content_Marquee() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Content_Slider() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Countdown() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Counter_Up() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Demo_Item() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Divider() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Fancy_Text() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Google_Map() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Heading() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Images_Compare() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Justified_Gallery() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_List_Editor() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Marquee_Text() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Mask_Image() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Page_Title() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Partner() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Phone_Block() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Pie_Chart() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Pricing_Table() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Progress_Bar() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Section_Title() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Service_Box() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Simple_Gist() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Simple_Icon() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Simple_Image() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Simple_Link() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Single_Post() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Slider_Controls() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Slider_Fixed_Bar() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Slider_Progress() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Social_Icons() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Styled_List() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Team_Member() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Template() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Testimonial() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Timeline() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Twitter_Review() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Types_List() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Video_Button() );

		// Showcase
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Showcase_1() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Showcase_2() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Showcase_3() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Showcase_4() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Showcase_5() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Showcase_6() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Showcase_7() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Showcase_8() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Showcase_9() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Showcase_10() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Showcase_11() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\Widget_SODAThemes_Showcase_12() );

	}

	private function include_extensions_files() {
		require_once sodathemes_helper_plugin()->plugin_path . 'includes/elementor/extensions/aos-animation/aos-animation.php';
	}

	public function register_categories( $elements_manager ) {
		$elements_manager->add_category(
			'sodalicious-elements',
			array(
				'title' => esc_html__( 'Sodalicious Elements', 'sodathemes' )
			)
		);
		$elements_manager->add_category(
			'sodalicious-showcase',
			array(
				'title' => esc_html__( 'Sodalicious Showcase', 'sodathemes' )
			)
		);
	}

	public function register_elementor_locations( $elementor_theme_manager ) {
		$elementor_theme_manager->register_location( 'header' );
		$elementor_theme_manager->register_location( 'footer' );
		$elementor_theme_manager->register_location( 'single' );
		$elementor_theme_manager->register_location( 'archive' );
		$elementor_theme_manager->register_location( '404' );
	}

	public function register_editor_styles() {
		wp_enqueue_style( 'sodathemes-elementor-style', sodathemes_helper_plugin()->plugin_url . 'includes/elementor/assets/css/elementor.css', array(), sodathemes_helper_plugin()->plugin_version );
	}

	public function add_exclusive_icons_tab( $settings ) {
		$settings['socicons'] = [
			'name' => 'socicons',
			'label' => esc_html__( 'Socicons', 'sodathemes' ),
			'url' => sodathemes_helper_plugin()->plugin_url . 'includes/elementor/fonts/socicons/socicon.css',
			'enqueue' => [ sodathemes_helper_plugin()->plugin_url . 'includes/elementor/fonts/socicons/socicon.css' ],
			'prefix' => 'socicon-',
			'displayPrefix' => false,
			'labelIcon' => 'socicon-twitter',
			'fetchJson' => sodathemes_helper_plugin()->plugin_url . 'includes/elementor/fonts/socicons/elementor.json',
			'native' => false,
			'ver' => '1.0'
		];
		return $settings;
	}

	public function __construct() {
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
		add_action( 'elementor/editor/after_enqueue_styles', [ $this, 'register_editor_styles' ] );
		add_action( 'elementor/elements/categories_registered', [ $this, 'register_categories' ] );
		add_action( 'elementor/theme/register_locations', [ $this, 'register_elementor_locations' ] );
		add_filter( 'elementor/icons_manager/additional_tabs', [$this, 'add_exclusive_icons_tab' ] );
	}

}

// Instantiate Plugin Class
SODAThemesInitElementor::instance();