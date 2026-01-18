<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Phone_Block extends Widget_Base {

	public function get_name() {
		return 'vlt-phone-block';
	}

	public function get_title() {
		return esc_html__( 'Phone Block', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-tel-field sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'phone', 'link', 'action' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Phone Block', 'sodathemes' ),
			]
		);



		$this->add_control(
			'caption', [
				'label' => esc_html__( 'Caption', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'default' => 'Call us <br>Directly'
			]
		);

		$this->add_control(
			'tel', [
				'label' => esc_html__( 'Tel', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => '+44 987 065 908',
				'label_block' => true
			]
		);

		$this->add_control(
			'link', [
				'label' => esc_html__( 'Link', 'sodathemes' ),
				'type' => Controls_Manager::URL,
				'placeholder' => 'https://your-link.com',
				'default' => [
					'url'=> 'tel:+44987065908',
				]
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
				'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}}' => 'text-align: {{VALUE}};'
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
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Icon', 'sodathemes' ),
				'type' => Controls_Manager::HEADING
			]
		);

		$this->add_control(
			'icon_color', [
				'label' => esc_html__( 'Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-phone-block__icon' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'icon_background_color', [
				'label' => esc_html__( 'Background Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-phone-block__icon' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'icon_height', [
				'label' => esc_html__( 'Icon Height', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-phone-block__icon' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
				]
			]
		);

		$this->add_control(
			'icon_size', [
				'label' => esc_html__( 'Icon Size', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-phone-block__icon' => 'font-size: {{SIZE}}{{UNIT}};',
				]
			]
		);

		$this->add_control(
			'icon_indent', [
				'label' => esc_html__( 'Icon Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-phone-block__icon' => 'margin-right: {{SIZE}}{{UNIT}};',
				]
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Caption', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'caption_typography',
				'selector' => '{{WRAPPER}} .vlt-phone-block__caption',
			]
		);

		$this->add_control(
			'caption_color', [
				'label' => esc_html__( 'Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-phone-block__caption' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'caption_indent', [
				'label' => esc_html__( 'Caption Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-phone-block__caption' => 'margin-right: {{SIZE}}{{UNIT}};',
				]
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Tel', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'tel_typography',
				'selector' => '{{WRAPPER}} .vlt-phone-block__phone',
			]
		);

		$this->add_control(
			'tel_color', [
				'label' => esc_html__( 'Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-phone-block__phone' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'phone-block', 'class', 'vlt-phone-block' );

		if ( ! empty( $settings[ 'link' ][ 'url' ] ) ) {

			$this->add_render_attribute( 'link', 'href', $settings[ 'link' ][ 'url' ] );

			if ( $settings[ 'link' ][ 'is_external' ] ) {
				$this->add_render_attribute( 'link', 'target', '_blank' );
			}

			if ( $settings[ 'link' ][ 'nofollow' ] ) {
				$this->add_render_attribute( 'link', 'rel', 'nofollow' );
			}

		}

		?>

		<div <?php echo $this->get_render_attribute_string( 'phone-block' ); ?>>

			<div class="vlt-phone-block__icon">
				<i class="ri-phone-fill"></i>
			</div>

			<?php if ( $settings[ 'caption' ] ): ?>

				<div class="vlt-phone-block__caption">
					<?php echo $settings[ 'caption' ]; ?>
				</div>

			<?php endif; ?>

			<?php if ( ! empty( $settings[ 'link' ][ 'url' ] ) && $settings[ 'tel' ] ) : ?>

				<div class="vlt-phone-block__phone">

					<a <?php echo $this->get_render_attribute_string( 'link' ); ?>>
						<?php echo $settings[ 'tel' ]; ?>
					</a>

				</div>

			<?php endif; ?>

		</div>

		<?php

	}

}
