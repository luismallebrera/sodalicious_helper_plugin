<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Template extends Widget_Base {

	use \SODAThemes_Elementor\Traits\Helper;

	public function get_name() {
		return 'vlt-template';
	}

	public function get_title() {
		return esc_html__( 'Template', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-document-file sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'template', 'library', 'block', 'page', 'section', 'element' ];
	}

	public function is_reload_preview_required() {
		return true;
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Template', 'sodathemes' ),
			]
		);

		

		$this->add_control(
			'template', [
				'label' => esc_html__( 'Choose Template', 'sodathemes' ),
				'type' => Controls_Manager::SELECT2,
				'options' => $this->sodathemes_get_elementor_templates(),
				'label_block' => true,
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$template_id = $this->get_settings( 'template' );

		if ( 'publish' !== get_post_status( $template_id ) ) {
			return;
		}

		?>

		<div class="vlt-elementor-template">

			<?php echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $template_id, true ); ?>

		</div>

		<?php

	}

}