<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Pie_Chart extends Widget_Base {

	public function get_script_depends() {
		return [ 'inview', 'circle-progress' ];
	}

	public function get_name() {
		return 'vlt-pie-chart';
	}

	public function get_title() {
		return esc_html__( 'Pie Chart', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-counter-circle sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'progress', 'bar', 'circle', 'chart', 'pie' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Layout', 'sodathemes' ),
			]
		);

		

		$this->add_control(
			'final_value', [
				'label' => esc_html__( 'Chart Value', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ '%' ],
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => '%',
					'size' => 50,
				],
			]
		);

		$this->add_control(
			'counter_html_tag', [
				'label' => esc_html__( 'Counter HTML Tag', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'h5',
				'options' => [
					'h1' => esc_html__( 'Heading 1', 'sodathemes' ),
					'h2' => esc_html__( 'Heading 2', 'sodathemes' ),
					'h3' => esc_html__( 'Heading 3', 'sodathemes' ),
					'h4' => esc_html__( 'Heading 4', 'sodathemes' ),
					'h5' => esc_html__( 'Heading 5', 'sodathemes' ),
					'h6' => esc_html__( 'Heading 6', 'sodathemes' ),
					'div' => esc_html__( 'div', 'sodathemes' ),
					'span' => esc_html__( 'span', 'sodathemes' ),
					'p' => esc_html__( 'p', 'sodathemes' )
				],
			]
		);

		$this->add_control(
			'show_count', [
				'label' => esc_html__( 'Display Count', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
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
				'selectors_dictionary' => [
					'left' => 'flex-start',
					'center' => 'center',
					'right' => 'flex-end',
				],
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} .vlt-pie-chart' => 'justify-content: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'prefix_label', [
				'label' => esc_html__( 'Prefix Label', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'separator' => 'before'
			]
		);

		$this->add_control(
			'suffix_label', [
				'label' => esc_html__( 'Suffix Label', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => '%'
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Settings', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_SETTINGS
			]
		);

		$this->add_control(
			'chart_animation_duration', [
				'label' => esc_html__( 'Animation Duration', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 1000,
				]
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'General', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE
			]
		);

		$this->add_control(
			'chart_height', [
				'label' => esc_html__( 'Height', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 350,
						'step' => 10,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 180,
				]
			]
		);

		$this->add_control(
			'chart_thickness', [
				'label' => esc_html__( 'Thickness', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 5,
				]
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Colors', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE
			]
		);

		$this->add_control(
			'chart_track_color', [
				'label' => esc_html__( 'Track Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#f5f5f5'
			]
		);

		$this->add_control(
			'chart_bar_color', [
				'label' => esc_html__( 'Bar Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#101010'
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Typography', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Title', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'title_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-pie-chart__title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .vlt-pie-chart__title',
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Prefix', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'prefix_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-pie-chart__title > .prefix' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'prefix_typography',
				'selector' => '{{WRAPPER}} .vlt-pie-chart__title > .prefix',
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Suffix', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'suffix_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-pie-chart__title > .suffix' => 'color: {{VALUE}}',
				]
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'suffix_typography',
				'selector' => '{{WRAPPER}} .vlt-pie-chart__title > .suffix',
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( [
			'pie-chart' => [
				'class' => 'vlt-pie-chart',
				'data-chart-value' => $settings[ 'final_value' ][ 'size' ],
				'data-chart-animation-duration' => $settings[ 'chart_animation_duration' ][ 'size' ],
				'data-chart-height' => $settings[ 'chart_height' ][ 'size' ],
				'data-chart-thickness' => $settings[ 'chart_thickness' ][ 'size' ],
				'data-chart-track-color' => $settings[ 'chart_track_color' ],
				'data-chart-bar-color' => $settings[ 'chart_bar_color' ],
			]
		] );

		?>

		<div <?php echo $this->get_render_attribute_string( 'pie-chart' ); ?>>

			<div class="vlt-pie-chart__bar">

				<?php if ( $settings[ 'show_count' ] == 'yes' ) : ?>

					<<?php echo esc_attr( $settings[ 'counter_html_tag' ] ); ?> class="vlt-pie-chart__title">

						<?php if ( isset( $settings[ 'prefix_label' ] ) ): ?>

							<span class="prefix"><?php echo esc_html( $settings[ 'prefix_label' ] ); ?></span>

						<?php endif; ?>

							<span class="counter">0</span>

						<?php if ( isset( $settings[ 'suffix_label' ] ) ): ?>

							<span class="suffix"><?php echo esc_html( $settings[ 'suffix_label' ] ); ?></span>

						<?php endif; ?>

					</<?php echo esc_attr( $settings[ 'counter_html_tag' ] ); ?>>

				<?php endif; ?>

			</div>

		</div>

		<?php

	}

}
