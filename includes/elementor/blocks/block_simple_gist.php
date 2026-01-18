<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Simple_Gist extends Widget_Base {

	public function get_name() {
		return 'vlt-simple-gist';
	}

	public function get_title() {
		return esc_html__( 'Simple Gist', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-code-highlight sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodathemes-elements' ];
	}

	public function get_keywords() {
		return [ 'simple', 'gist', 'github' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Simple Gist', 'sodathemes' ),
			]
		);

		

		$this->add_control(
			'url', [
				'label' => esc_html__( 'Gist URL', 'sodathemes' ),
				'type' => Controls_Manager::URL,
				'placeholder' => 'https://gist.github.com/...',
				'label_block' => true,
				'description' => __( '<a href="https://gist.github.com/" target="_blank">Visit GitHub Gist Site</a>' ),
			]
		);

		$this->add_control(
			'file', [
				'label' => esc_html__( 'File', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'condition' => [
					'url[url]!' => '',
				],
			]
		);

		$this->add_control(
			'caption', [
				'label' => esc_html__( 'Caption', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'condition' => [
					'url[url]!' => '',
				],
			]
		);

		$this->add_control(
			'highlight_lines', [
				'label' => esc_html__( 'Highlight Lines', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'condition' => [
					'url[url]!' => '',
				],
			]
		);

		$this->add_control(
			'show_footer', [
				'label' => esc_html__( 'Show Footer', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => [
					'url[url]!' => '',
				],
			]
		);

		$this->add_control(
			'show_lines_number', [
				'label' => esc_html__( 'Show Lines Number', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'condition' => [
					'url[url]!' => '',
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'gist', [
			'class' => 'gist-simple',
			'data-url' => $settings[ 'url' ][ 'url' ],
			'data-file' => $settings[ 'file' ],
			'data-highlight-lines' => $settings[ 'highlight_lines' ],
			'data-caption' => $settings[ 'caption' ],
			'data-show-footer' => $settings[ 'show_footer' ],
			'data-show-line-numbers' => $settings[ 'show_lines_number' ]
		]);

		?>

		<div <?php echo $this->get_render_attribute_string( 'gist' ); ?>></div>

		<?php

	}

}