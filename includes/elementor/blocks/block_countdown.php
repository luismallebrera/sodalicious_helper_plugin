<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Countdown extends Widget_Base {

	public function get_name() {
		return 'vlt-countdown';
	}

	public function get_title() {
		return esc_html__( 'Countdown', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-countdown sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'countdown', 'timer' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Countdown', 'sodathemes' )
			]
		);

		

		$this->add_control(
			'due_time', [
				'label' => esc_html__( 'Due Date', 'sodathemes' ),
				'type' => Controls_Manager::DATE_TIME,
				'default' => date( 'Y/m/d', strtotime( '+ 1 day' ) ),
			]
		);

		$this->add_control(
			'show_label', [
				'label' => esc_html__( 'Label', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'sodathemes' ),
				'label_off' => esc_html__( 'Hide', 'sodathemes' ),
				'default' => 'yes',
				'separator' => 'before',
			]
		);

		$this->add_control(
			'label_position', [
				'label' => esc_html__( 'Label Position', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'block',
				'options' => [
					'block' => esc_html__( 'Block', 'sodathemes' ),
					'inline-block' => esc_html__( 'Inline', 'sodathemes' ),
				],
				'condition' => [
					'show_label' => 'yes',
				],
			]
		);

		$this->add_responsive_control(
			'countdown_label_indent', [
				'label' => esc_html__( 'Label Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .digits.d-inline-block' => 'margin-right: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .digits.d-block' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'show_label' => 'yes',
				],
			]
		);

		$this->add_responsive_control(
			'container_width', [
				'label' => esc_html__( 'Container Width', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'unit' => '%',
					'size' => 100,
				],
				'tablet_default' => [
					'unit' => '%',
				],
				'mobile_default' => [
					'unit' => '%',
				],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 2000,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'size_units' => [
					'%',
					'px'
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-countdown' => 'max-width: {{SIZE}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);

		$this->add_responsive_control(
			'columns', [
				'label' => esc_html__( 'Columns', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 4,
					],
				],
				'desktop_default' => [
					'size' => 4,
				],
				'tablet_default' => [
					'size' => 2,
				],
				'mobile_default' => [
					'size' => 2,
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-countdown' => 'grid-template-columns: repeat({{SIZE}}, 1fr);',
				],
			]
		);

		$this->add_responsive_control(
			'columns_gap', [
				'label' => esc_html__( 'Columns Gap', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 100,
					],
				],
				'default' => [
					'size' => 20,
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-countdown' => 'grid-gap: {{SIZE}}{{UNIT}}',
				],
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Content', 'sodathemes' )
			]
		);

		$this->add_control(
			'weeks', [
				'label' => esc_html__( 'Display Weeks', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => ''
			]
		);

		$this->add_control(
			'weeks_label', [
				'label' => esc_html__( 'Custom Label for Weeks', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Weeks', 'sodathemes' ),
				'description' => esc_html__( 'Leave blank to hide', 'sodathemes' ),
				'condition' => [
					'weeks' => 'yes',
				],
			]
		);

		$this->add_control(
			'days', [
				'label' => esc_html__( 'Display Days', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);

		$this->add_control(
			'days_label', [
				'label' => esc_html__( 'Custom Label for Days', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Days', 'sodathemes' ),
				'description' => esc_html__( 'Leave blank to hide', 'sodathemes' ),
				'condition' => [
					'days' => 'yes',
				],
			]
		);

		$this->add_control(
			'hours', [
				'label' => esc_html__( 'Display Hours', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);

		$this->add_control(
			'hours_label', [
				'label' => esc_html__( 'Custom Label for Hours', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Hours', 'sodathemes' ),
				'description' => esc_html__( 'Leave blank to hide', 'sodathemes' ),
				'condition' => [
					'hours' => 'yes',
				],
			]
		);

		$this->add_control(
			'minutes', [
				'label' => esc_html__( 'Display Minutes', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);

		$this->add_control(
			'minutes_label', [
				'label' => esc_html__( 'Custom Label for Minutes', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Minutes', 'sodathemes' ),
				'description' => esc_html__( 'Leave blank to hide', 'sodathemes' ),
				'condition' => [
					'minutes' => 'yes',
				],
			]
		);

		$this->add_control(
			'seconds', [
				'label' => esc_html__( 'Display Seconds', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);

		$this->add_control(
			'seconds_label', [
				'label' => esc_html__( 'Custom Label for Seconds', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Seconds', 'sodathemes' ),
				'description' => esc_html__( 'Leave blank to hide', 'sodathemes' ),
				'condition' => [
					'seconds' => 'yes',
				],
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Boxes', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'item_background_color', [
				'label' => esc_html__( 'Background Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-countdown__item' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(), [
				'name' => 'item_box_shadow',
				'selector' => '{{WRAPPER}} .vlt-countdown__item',
			]
		);

		$this->add_responsive_control(
			'item_padding', [
				'label' => esc_html__( 'Padding', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', 'rem', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-countdown__item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'before'
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Content', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'item_align', [
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
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} .vlt-countdown__item' => 'text-align: {{VALUE}};'
				],
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Digits', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'digits_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .digits' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'digits_typography',
				'selector' => '{{WRAPPER}} .digits',
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Label', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'label_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .label' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'label_typography',
				'selector' => '{{WRAPPER}} .label',
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$get_due_date = esc_attr( $settings[ 'due_time' ] );
		$due_date = date( 'Y/m/d', strtotime( $get_due_date ) );

		$this->add_render_attribute( [
			'countdown' => [
				'class' => [
					'vlt-countdown'
				],
				'data-due-date' => $due_date,
			]
		] );

		$this->add_render_attribute( [
			'digits' => [
				'class' => [
					'digits',
					'd-' . $settings[ 'label_position' ]
				]
			],
			'label' => [
				'class' => [
					'label',
					'd-' . $settings[ 'label_position' ]
				]
			]
		] );

		?>

		<div <?php echo $this->get_render_attribute_string( 'countdown' ); ?>>

			<?php if ( ! empty( $settings[ 'weeks' ] ) ) : ?><div class="vlt-countdown__item vlt-countdown-item"><div class="weeks"><span data-weeks <?php echo $this->get_render_attribute_string( 'digits' ); ?>>00</span><?php if ( ! empty( $settings[ 'weeks_label' ] ) && $settings[ 'show_label' ] == 'yes' ) : ?><span <?php echo $this->get_render_attribute_string( 'label' ); ?>><?php echo esc_attr( $settings[ 'weeks_label' ] ); ?></span><?php endif; ?></div></div><?php endif; ?>
			<?php if ( ! empty( $settings[ 'days' ] ) ) : ?><div class="vlt-countdown__item vlt-countdown-item"><div class="days"><span data-days <?php echo $this->get_render_attribute_string( 'digits' ); ?>>00</span><?php if ( ! empty( $settings[ 'days_label' ] ) && $settings[ 'show_label' ] == 'yes' ) : ?><span <?php echo $this->get_render_attribute_string( 'label' ); ?>><?php echo esc_attr( $settings[ 'days_label' ] ); ?></span><?php endif; ?></div></div><?php endif; ?>
			<?php if ( ! empty( $settings[ 'hours' ] ) ) : ?><div class="vlt-countdown__item vlt-countdown-item"><div class="hours"><span data-hours <?php echo $this->get_render_attribute_string( 'digits' ); ?>>00</span><?php if ( ! empty( $settings[ 'hours_label' ] ) && $settings[ 'show_label' ] == 'yes' ) : ?><span <?php echo $this->get_render_attribute_string( 'label' ); ?>><?php echo esc_attr( $settings[ 'hours_label' ] ); ?></span><?php endif; ?></div></div><?php endif; ?>
			<?php if ( ! empty( $settings[ 'minutes' ] ) ) : ?><div class="vlt-countdown__item vlt-countdown-item"><div class="minutes"><span data-minutes <?php echo $this->get_render_attribute_string( 'digits' ); ?>>00</span><?php if ( ! empty( $settings[ 'minutes_label' ] ) && $settings[ 'show_label' ] == 'yes' ) : ?><span <?php echo $this->get_render_attribute_string( 'label' ); ?>><?php echo esc_attr( $settings[ 'minutes_label' ] ); ?></span><?php endif; ?></div></div><?php endif; ?>
			<?php if ( ! empty( $settings[ 'seconds' ] ) ) : ?><div class="vlt-countdown__item vlt-countdown-item"><div class="seconds"><span data-seconds <?php echo $this->get_render_attribute_string( 'digits' ); ?>>00</span><?php if ( ! empty( $settings[ 'seconds_label' ] ) && $settings[ 'show_label' ] == 'yes' ) : ?><span <?php echo $this->get_render_attribute_string( 'label' ); ?>><?php echo esc_attr( $settings[ 'seconds_label' ] ); ?></span><?php endif; ?></div></div><?php endif; ?>

		</div>

		<?php

	}

}