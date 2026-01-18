<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Contact_Form_7 extends Widget_Base {

	use \SODAThemes_Elementor\Traits\Helper;

	public function get_name() {
		return 'vlt-contact-form-7';
	}

	public function get_title() {
		return esc_html__( 'Contact Form 7', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-mail sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'contact', 'form', '7', 'mail' ];
	}

	protected function register_controls() {

		$first_level = 0;

		if ( ! class_exists( 'WPCF7_ContactForm' ) ) {

			// ANCHOR
			$this->start_controls_section(
				'section_' . $first_level++, [
					'label' => esc_html__( 'Warning!', 'sodathemes' ),
				]
			);



			$this->add_control(
				'notification_' . $first_level++, [
					'type' => Controls_Manager::RAW_HTML,
					'raw' => '<strong>Contact Form 7</strong> is not installed/activated on your site. Please install and activate <strong>Contact Form 7</strong> first.',
					'content_classes' => 'elementor-panel-alert elementor-panel-alert-info',
					'separator' => 'after',
				]
			);

			// ANCHOR
			$this->end_controls_section();

		} else {

			// ANCHOR
			$this->start_controls_section(
				'section_' . $first_level++, [
					'label' => esc_html__( 'Contact Form 7', 'sodathemes' ),
				]
			);

		

			$this->add_control(
				'contact_form', [
					'label' => esc_html__( 'Select Form', 'sodathemes' ),
					'type' => Controls_Manager::SELECT2,
					'options' => $this->sodathemes_get_contact_form_7(),
					'default' => 0
				]
			);

			// ANCHOR
			$this->end_controls_section();

		}

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( [
			'contact-form-7' => [
				'class' => [
					'vlt-contact-form-7'
				]
			]
		] );

		?>

		<div <?php echo $this->get_render_attribute_string( 'contact-form-7' ); ?>>

			<?php
				if ( ! empty( $settings[ 'contact_form' ] ) ) {
					echo do_shortcode( '[contact-form-7 id="' . $settings[ 'contact_form' ] . '" ]' );
				}
			?>

		</div>

		<?php

	}

}
