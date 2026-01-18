<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Divider extends Widget_Base {

	public function get_name() {
		return 'vlt-divider';
	}

	public function get_title() {
		return esc_html__( 'Divider', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-divider sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'divider', 'hr', 'line', 'border' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Divider', 'sodathemes' ),
			]
		);

		

		$this->add_control(
			'style', [
				'label' => esc_html__( 'Style', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'solid',
				'options' => [
					'solid' => esc_html__( 'Solid', 'sodathemes' ),
					'dotted' => esc_html__( 'Dotted', 'sodathemes' )
				],
			]
		);

		$this->add_responsive_control(
			'width', [
				'label' => esc_html__( 'Width', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%', 'px' ],
				'range' => [
					'px' => [
						'max' => 1000,
					],
				],
				'default' => [
					'size' => 100,
					'unit' => '%',
				],
				'tablet_default' => [
					'unit' => '%',
				],
				'mobile_default' => [
					'unit' => '%',
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-divider__separator' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'alignment', [
				'label' => esc_html__( 'Alignment', 'sodathemes' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'sodathemes' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'sodathemes' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'sodathemes' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-divider' => 'text-align: {{VALUE}}',
					'{{WRAPPER}} .vlt-divider__separator' => 'margin: 0 auto; margin-{{VALUE}}: 0',
				],
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Style', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'color', [
				'label' => esc_html__( 'Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-divider' => '--vlt-divider-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'height', [
				'label' => esc_html__( 'Height', 'elementor' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 1,
				],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 50,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-divider' => '--vlt-divider-height: {{SIZE}}{{UNIT}}',
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'divider', [
			'class' => [
				'vlt-divider',
				'vlt-divider--' . $settings[ 'style' ]
			]
		] );

		?>

		<div <?php echo $this->get_render_attribute_string( 'divider' ); ?>>

			<div class="vlt-divider__separator"></div>

		</div>

		<?php

	}

}