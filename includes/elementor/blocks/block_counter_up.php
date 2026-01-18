<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Counter_Up extends Widget_Base {

	public function get_script_depends() {
		return [ 'inview', 'jquery-numerator' ];
	}

	public function get_name() {
		return 'vlt-counter-up';
	}

	public function get_title() {
		return esc_html__( 'Counter Up', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-counter sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'count', 'counter', 'numbers' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Counter Up', 'sodathemes' ),
			]
		);

		

		$this->add_control(
			'style', [
				'label' => esc_html__( 'Style', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'style-1' => esc_html__( 'Style 1', 'sodathemes' ),
					'style-2' => esc_html__( 'Style 2', 'sodathemes' )
				],
				'default' => 'style-1',
			]
		);

		$this->add_control(
			'starting_number', [
				'label' => esc_html__( 'Starting Number', 'sodathemes' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 0,
			]
		);

		$this->add_control(
			'ending_number', [
				'label' => esc_html__( 'Ending Number', 'sodathemes' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 1200,
			]
		);

		$this->add_control(
			'title', [
				'label' => esc_html__( 'Title', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'default' => 'Counter Number',
				'separator' => 'before'
			]
		);

		$this->add_control(
			'title_html_tag', [
				'label' => esc_html__( 'HTML Tag', 'sodathemes' ),
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
				]
			]
		);

		$this->add_control(
			'prefix', [
				'label' => esc_html__( 'Number Prefix', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => '~',
				'separator' => 'before',
			]
		);

		$this->add_control(
			'suffix', [
				'label' => esc_html__( 'Number Suffix', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => 'k'
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
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}}' => 'text-align: {{VALUE}}',
				],
				'separator' => 'before'
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
				'type' => Controls_Manager::NUMBER,
				'default' => 2000,
				'min' => 100,
				'step' => 100,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'thousand_separator', [
				'label' => esc_html__( 'Thousand Separator', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'sodathemes' ),
				'label_off' => esc_html__( 'Hide', 'sodathemes' ),
				'default' => 'yes',
			]
		);

		$this->add_control(
			'thousand_separator_char', [
				'label' => esc_html__( 'Separator', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'' => esc_html__( 'Default', 'sodathemes' ),
					'.' => esc_html__( 'Dot', 'sodathemes' ),
					' ' => esc_html__( 'Space', 'sodathemes' ),
				],
				'condition' => [
					'thousand_separator' => 'yes',
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
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Number', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'number_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-counter-up__number' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'number_typography',
				'selector' => '{{WRAPPER}} .vlt-counter-up__number',
			]
		);

		$this->add_control(
			'number_background_color', [
				'label' => esc_html__( 'Background Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-counter-up__number' => 'background-color: {{VALUE}}',
				]
			]
		);

		$this->add_control(
			'number_width', [
				'label' => esc_html__( 'Width', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 300,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-counter-up__number' => 'min-width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'number_padding', [
				'label' => esc_html__( 'Padding', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', 'rem', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-counter-up__number' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				]
			]
		);

		$this->add_responsive_control(
			'number_margin', [
				'label' => esc_html__( 'Margin', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', 'rem', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-counter-up__number' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				]
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Title', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'title_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-counter-up__title' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .vlt-counter-up__title',
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( [
			'counter-up' => [
				'class' => [
					'vlt-counter-up',
					'vlt-counter-up--' . $settings[ 'style' ]
				],
				'data-animation-speed' => $settings[ 'animation_speed' ]
			]
		] );

		if ( ! empty( $settings[ 'thousand_separator' ] ) ) {
			$delimiter = empty( $settings[ 'thousand_separator_char' ] ) ? ',' : $settings[ 'thousand_separator_char' ];
			$this->add_render_attribute( 'counter-up', 'data-delimiter', $delimiter );
		}

		?>

		<div <?php echo $this->get_render_attribute_string( 'counter-up' ); ?>>

			<div class="vlt-counter-up__number">

				<?php if ( ! empty( $settings[ 'prefix' ] ) ) : ?>
					<span class="prefix"><?php echo $settings[ 'prefix' ]; ?></span>
				<?php endif; ?>

				<?php

					if ( $settings[ 'ending_number' ] ) {
						echo '<span class="counter">';
						echo $settings[ 'ending_number' ];
						echo '</span>';
					}

				?>

				<?php if ( ! empty( $settings[ 'suffix' ] ) ) : ?>
					<span class="suffix"><?php echo $settings[ 'suffix' ]; ?></span>
				<?php endif; ?>

			</div>

			<?php if ( $settings[ 'title' ] ) : ?>
				<<?php echo $settings[ 'title_html_tag' ]; ?> class="vlt-counter-up__title"><?php echo $settings[ 'title' ]; ?></<?php echo $settings[ 'title_html_tag' ]; ?>>
			<?php endif; ?>

		</div>

	<?php

	}

}