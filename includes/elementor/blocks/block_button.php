<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Button extends Widget_Base {

	public function get_name() {
		return 'vlt-button';
	}

	public function get_title() {
		return esc_html__( 'Button', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-button sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'button', 'link', 'action' ];
	}

	public static function get_button_sizes() {
		return [
			'xs' => esc_html__( 'Extra Small', 'sodathemes' ),
			'sm' => esc_html__( 'Small', 'sodathemes' ),
			'md' => esc_html__( 'Medium', 'sodathemes' ),
			'lg' => esc_html__( 'Large', 'sodathemes' )
		];
	}

	public static function get_button_styles() {
		return [
			'primary' => esc_html__( 'Primary', 'sodathemes' ),
			'secondary' => esc_html__( 'Secondary', 'sodathemes' )
		];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Button', 'sodathemes' ),
			]
		);

		

		$this->add_control(
			'text', [
				'label' => esc_html__( 'Text', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => 'Click Here',
				'label_block' => true
			]
		);

		$this->add_control(
			'link', [
				'label' => esc_html__( 'Link', 'sodathemes' ),
				'type' => Controls_Manager::URL,
				'placeholder' => 'https://your-link.com',
				'default' => [
					'url'=> '#',
				]
			]
		);

		$this->add_control(
			'style', [
				'label' => esc_html__( 'Style', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'primary',
				'options' => self::get_button_styles(),
				'separator' => 'before',
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
				'default' => 'left',
				'selectors' => [
					'{{WRAPPER}}' => 'text-align: {{VALUE}};'
				],
			]
		);

		$this->add_control(
			'full_width', [
				'label' => esc_html__( 'Full Width', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

		$this->add_control(
			'button_disabled', [
				'label' => esc_html__( 'Disable Button', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

		$this->add_control(
			'button_effect', [
				'label' => esc_html__( 'Button Effect', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'button_rounded', [
				'label' => esc_html__( 'Button Rounded', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

		$this->add_control(
			'size', [
				'label' => esc_html__( 'Size', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'options' => self::get_button_sizes(),
				'default' => 'md'
			]
		);

		$this->add_control(
			'icon', [
				'label' => esc_html__( 'Icon', 'sodathemes' ),
				'type' => Controls_Manager::ICONS,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'icon_position', [
				'label' => esc_html__( 'Icon Position', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'left',
				'options' => [
					'left' => esc_html__( 'Before', 'sodathemes' ),
					'right' => esc_html__( 'After', 'sodathemes' ),
				],
				'condition' => [
					'icon[value]!' => '',
				],
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Button Style', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'text_typography',
				'selector' => '{{WRAPPER}} .vlt-btn',
			]
		);

		// ANCHOR
		$this->start_controls_tabs(
			'tabs_' . $first_level++
		);

		// ANCHOR
		$this->start_controls_tab(
			'tab_' . $first_level++, [
				'label' => esc_html__( 'Normal', 'sodathemes' ),
			]
		);

		$this->add_control(
			'text_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-btn' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'background_color', [
				'label' => esc_html__( 'Background Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-btn' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(), [
				'name' => 'box_shadow',
				'selector' => '{{WRAPPER}} .vlt-btn',
			]
		);

		$this->end_controls_tab();

		// ANCHOR
		$this->start_controls_tab(
			'tab_' . $first_level++, [
				'label' => esc_html__( 'Hover', 'sodathemes' ),
			]
		);

		$this->add_control(
			'text_color_hover', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-btn:hover' => 'color: {{VALUE}};'
				],
			]
		);

		$this->add_control(
			'background_color_hover', [
				'label' => esc_html__( 'Background Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-btn:not(.vlt-btn--effect):hover' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .vlt-btn.vlt-btn--effect::after' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(), [
				'name' => 'box_shadow_hover',
				'selector' => '{{WRAPPER}} .vlt-btn:hover',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( [
			'button' => [
				'class' => [
					'vlt-btn',
					'vlt-btn--' . $settings[ 'size' ],
					'vlt-btn--' . $settings[ 'style' ]
				],
				'role' => 'button'
			]
		] );

		if ( $settings[ 'button_effect' ] == 'yes' ) {
			$this->add_render_attribute( 'button', 'class', 'vlt-btn--effect' );
		}

		if ( $settings[ 'full_width' ] == 'yes' ) {
			$this->add_render_attribute( 'button', 'class', 'vlt-btn--block' );
		}

		if ( $settings[ 'button_rounded' ] == 'yes' ) {
			$this->add_render_attribute( 'button', 'class', 'vlt-btn--rounded' );
		}

		if ( $settings[ 'button_disabled' ] == 'yes' ) {
			$this->add_render_attribute( 'button', 'class', 'disabled' );
		}

		if ( $settings[ 'link' ][ 'url' ] ) {

			$this->add_render_attribute( 'button', 'href', $settings[ 'link' ][ 'url' ] );

			if ( $settings[ 'link' ][ 'is_external' ] ) {
				$this->add_render_attribute( 'button', 'target', '_blank' );
			}

			if ( $settings[ 'link' ][ 'nofollow' ] ) {
				$this->add_render_attribute( 'button', 'rel', 'nofollow' );
			}

		}

		?>

		<a <?php echo $this->get_render_attribute_string( 'button' ); ?>>

			<?php if ( ! empty( $settings[ 'icon' ][ 'value' ] ) && $settings[ 'icon_position' ] == 'left' ) : ?>

				<?php Icons_Manager::render_icon( $settings[ 'icon' ], [ 'aria-hidden' => 'true', 'class' => $settings[ 'icon_position' ] ] ); ?>

			<?php endif; ?>

			<?php echo $settings[ 'text' ]; ?>

			<?php if ( ! empty( $settings[ 'icon' ][ 'value' ] ) && $settings[ 'icon_position' ] == 'right' ) : ?>

				<?php Icons_Manager::render_icon( $settings[ 'icon' ], [ 'aria-hidden' => 'true', 'class' => $settings[ 'icon_position' ] ] ); ?>

			<?php endif; ?>

		</a>

		<?php

	}

}