<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Progress_Bar extends Widget_Base {

	public function get_script_depends() {
		return [ 'inview' ];
	}

	public function get_name() {
		return 'vlt-progress-bar';
	}

	public function get_title() {
		return esc_html__( 'Progress Bar', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-skill-bar sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'progress', 'bar', 'line', 'count' ];
	}

	public static function get_progress_bar_style() {
		return [
			'default' => esc_html__( 'Default', 'sodathemes' ),
			'dotted' => esc_html__( 'Dotted', 'sodathemes' ),
		];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Progress Bar', 'sodathemes' ),
			]
		);

		

		$this->add_control(
			'style', [
				'label' => esc_html__( 'Style', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => self::get_progress_bar_style(),
			]
		);

		$this->add_control(
			'title', [
				'label' => esc_html__( 'Title', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Progress Bar', 'sodathemes' ),
			]
		);

		$this->add_control(
			'title_html_tag', [
				'label' => esc_html__( 'HTML Tag', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'h6',
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
			'final_value', [
				'label' => esc_html__( 'Final Value', 'sodathemes' ),
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
				'default' => 'left',
				'selectors' => [
					'{{WRAPPER}} .vlt-progress-bar' => 'text-align: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Counter', 'sodathemes' ),
			]
		);

		$this->add_control(
			'show_count', [
				'label' => esc_html__( 'Display Count', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes'
			]
		);

		$this->add_control(
			'count_alignment', [
				'label' => esc_html__( 'Alignment', 'sodathemes' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'none' => [
						'title' => esc_html__( 'None', 'sodathemes' ),
						'icon' => 'eicon-ban',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'sodathemes' ),
						'icon' => 'eicon-h-align-right',
					],
				],
				'default' => 'right',
				'selectors' => [
					'{{WRAPPER}} .counter' => 'float: {{VALUE}};'
				],
				'condition' => [
					'show_count' => 'yes',
				],
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Settings', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_SETTINGS,
			]
		);

		$this->add_control(
			'animation_speed', [
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
					'size' => 3000,
				],
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'General', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'height', [
				'label' => esc_html__( 'Height', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-progress-bar--default .vlt-progress-bar__track' => 'height: {{SIZE}}{{UNIT}}',
					'{{WRAPPER}} .vlt-progress-bar--dotted .vlt-progress-bar__track' => 'height: {{SIZE}}{{UNIT}}',
					'{{WRAPPER}} .vlt-progress-bar--dotted .vlt-progress-bar__track .dot' => 'height: {{SIZE}}{{UNIT}}; width:{{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'border_radius', [
				'label' => esc_html__( 'Border Radius', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-progress-bar--default .vlt-progress-bar__track' => 'border-radius: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .vlt-progress-bar--dotted .vlt-progress-bar__track .dot' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Background', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'track_background_color', [
				'label' => esc_html__( 'Track Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-progress-bar--default .vlt-progress-bar__track' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .vlt-progress-bar--dotted .vlt-progress-bar__track > .dot' => 'background-color: {{VALUE}}',
				]
			]
		);

		$this->add_control(
			'bar_background_color', [
				'label' => esc_html__( 'Bar Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-progress-bar--default .vlt-progress-bar__track > .bar' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .vlt-progress-bar--dotted .vlt-progress-bar__track > .bar > .dot' => 'background-color: {{VALUE}}',
				]
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
					'{{WRAPPER}} .vlt-progress-bar__title' => 'color: {{VALUE}}',
				]
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .vlt-progress-bar__title'
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Counter', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_control(
			'count_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-progress-bar__title > span' => 'color: {{VALUE}}',
				]
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'count_typography',
				'selector' => '{{WRAPPER}} .vlt-progress-bar__title > span'
			]
		);

		$this->end_controls_section();

	}

	protected function render_default( $instance ) {

		$this->add_render_attribute( 'progress-bar', [
			'class' => [
				'vlt-progress-bar',
				'vlt-progress-bar--' . $instance[ 'style' ],
			],
			'data-final-value' => $instance[ 'final_value' ][ 'size' ],
			'data-animation-speed' => $instance[ 'animation_speed' ][ 'size' ],
		] );

		?>

		<div <?php echo $this->get_render_attribute_string( 'progress-bar' ); ?>>

			<?php if ( $instance[ 'title' ] ) : ?>

				<<?php echo esc_attr( $instance[ 'title_html_tag' ] ); ?> class="vlt-progress-bar__title">

					<?php echo esc_html( $instance[ 'title' ] ); ?>

					<?php if ( $instance[ 'show_count' ] ) : ?>

						<span class="counter">0</span>

					<?php endif; ?>

				</<?php echo esc_attr( $instance[ 'title_html_tag' ] ); ?>>

			<?php endif; ?>

			<div class="vlt-progress-bar__track"><span class="bar"></span></div>

		</div>

		<?php

	}

	protected function render_dotted( $instance ) {

		$this->add_render_attribute( 'progress-bar', [
			'class' => [
				'vlt-progress-bar',
				'vlt-progress-bar--' . $instance[ 'style' ],
			],
			'data-final-value' => $instance[ 'final_value' ][ 'size' ],
			'data-animation-speed' => $instance[ 'animation_speed' ][ 'size' ],
		] );

		?>

		<div <?php echo $this->get_render_attribute_string( 'progress-bar' ); ?>>

			<?php if ( $instance[ 'title' ] ) : ?>

				<<?php echo esc_attr( $instance[ 'title_html_tag' ] ); ?> class="vlt-progress-bar__title">

					<?php echo esc_html( $instance[ 'title' ] ); ?>

					<?php if ( $instance[ 'show_count' ] ) : ?>

						<span class="counter">0</span>

					<?php endif; ?>

				</<?php echo esc_attr( $instance[ 'title_html_tag' ] ); ?>>

			<?php endif; ?>

			<div class="vlt-progress-bar__track">
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<span class="dot"></span>
				<div class="bar">
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
					<span class="dot"></span>
				</div>
			</div>

		</div>

		<?php

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		switch( $settings[ 'style' ] ) {
			case 'default':
				$this->render_default( $settings );
				break;
			case 'dotted':
				$this->render_dotted( $settings );
				break;
		}

	}

}