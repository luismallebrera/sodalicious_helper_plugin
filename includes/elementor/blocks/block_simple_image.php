<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Simple_Image extends Widget_Base {

	public function get_name() {
		return 'vlt-simple-image';
	}

	public function get_title() {
		return esc_html__( 'Simple Image', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-image sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'simple', 'photo', 'image' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Simple Image', 'sodathemes' ),
			]
		);

	

		$this->add_control(
			'image', [
				'label' => esc_html__( 'Image', 'sodathemes' ),
				'type' => Controls_Manager::MEDIA,
			]
		);

		$this->add_group_control(
			Group_Control_Image_Size::get_type(), [
				'name' => 'image', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
			]
		);

		$this->add_control(
			'mask', [
				'label' => esc_html__( 'Mask', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'mask_animation_delay', [
				'label' => esc_html__( 'Animation Delay', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 10000,
						'step' => 100,
					],
				],
				'condition' => [
					'mask' => 'yes',
				],
			]
		);

		$this->add_control(
			'link_to', [
				'label' => esc_html__( 'Link', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'none',
				'options' => [
					'none' => esc_html__( 'None', 'sodathemes' ),
					'file' => esc_html__( 'Media File', 'sodathemes' ),
					'custom' => esc_html__( 'Custom URL', 'sodathemes' ),
				],
				'separator' => 'before'
			]
		);

		$this->add_control(
			'link', [
				'label' => esc_html__( 'Link', 'sodathemes' ),
				'type' => Controls_Manager::URL,
				'placeholder' => 'https://your-link.com',
				'condition' => [
					'link_to' => 'custom',
				],
			]
		);

		$this->add_control(
			'caption', [
				'label' => esc_html__( 'Caption', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'condition' => [
					'link_to' => 'file',
				],
			]
		);

		$this->add_control(
			'gallery_id', [
				'label' => esc_html__( 'Gallery ID', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'condition' => [
					'link_to' => 'file',
				],
			]
		);

		$this->add_responsive_control(
			'link_alignment', [
				'label' => esc_html__( 'Alignment', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'left' => esc_html__( 'Left', 'sodathemes' ),
					'center' => esc_html__( 'Center', 'sodathemes' ),
					'right' => esc_html__( 'Right', 'sodathemes' ),
				],
				'selectors_dictionary' => [
					'left' => 'flex-start',
					'center' => 'center',
					'right' => 'flex-end',
				],
				'default' => 'right',
				'selectors' => [
					'{{WRAPPER}} .vlt-simple-image' => 'justify-content: {{VALUE}};',
				],
				'condition' => [
					'link_to!' => 'none',
				],
			]
		);

		$this->add_responsive_control(
			'link_vertical_alignment', [
				'label' => esc_html__( 'Vertical Alignment', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'top' => esc_html__( 'Top', 'sodathemes' ),
					'middle' => esc_html__( 'Middle', 'sodathemes' ),
					'bottom' => esc_html__( 'Bottom', 'sodathemes' ),
				],
				'selectors_dictionary' => [
					'top' => 'flex-start',
					'middle' => 'center',
					'bottom' => 'flex-end',
				],
				'default' => 'bottom',
				'selectors' => [
					'{{WRAPPER}} .vlt-simple-image' => 'align-items: {{VALUE}};',
				],
				'condition' => [
					'link_to!' => 'none',
				],
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Image Mask', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'mask' => 'yes',
				],
			]
		);

		$this->add_control(
			'mask_background_color', [
				'label' => esc_html__( 'Background Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .inside ' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Image Link', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'link_to!' => 'none',
				],
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
					'{{WRAPPER}} .vlt-simple-image__link' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'background_color', [
				'label' => esc_html__( 'Background Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-simple-image__link' => 'background-color: {{VALUE}};',
				],
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
					'{{WRAPPER}} .vlt-simple-image__link:hover' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'background_color_hover', [
				'label' => esc_html__( 'Background Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-simple-image__link:hover' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->end_controls_section();

	}

	private function get_link_url( $instance ) {

		if ( 'none' === $instance[ 'link_to' ] ) {
			return false;
		}

		if ( 'custom' === $instance[ 'link_to' ] ) {
			if ( empty( $instance[ 'link' ][ 'url' ] ) ) {
				return false;
			}

			return $instance[ 'link' ];
		}

		return [
			'url' => $instance[ 'image' ][ 'url' ],
		];

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'simple-image', 'class', 'vlt-simple-image' );

		$link = $this->get_link_url( $settings );

		if ( $link ) {

			$this->add_render_attribute( 'link', 'class', 'vlt-simple-image__link' );

			$this->add_link_attributes( 'link', $link );

			if ( 'custom' !== $settings[ 'link_to' ] ) {

				$this->add_render_attribute( 'link', [
					'data-fancybox' => $settings[ 'gallery_id' ],
					'data-caption' => $settings[ 'caption' ]
				] );

			}

		}

		?>

		<div <?php echo $this->get_render_attribute_string( 'simple-image' ); ?>>

			<?php if ( $link ) : ?>

				<a <?php echo $this->get_render_attribute_string( 'link' ); ?>><i class="ri-add-fill"></i></a>

			<?php endif; ?>

			<?php if ( $settings[ 'mask' ] == 'yes' ) : ?>

				<div class="vlt-simple-image__mask" data-aos="image-mask-animation" data-aos-delay="<?php echo $settings[ 'mask_animation_delay' ][ 'size' ]; ?>"><div class="inside"></div></div>

			<?php endif; ?>

			<?php if ( $settings[ 'image' ][ 'url' ] ) : ?>

				<?php echo Group_Control_Image_Size_2::get_attachment_image_html( $settings, 'image' ); ?>

			<?php endif; ?>

		</div>

		<?php

	}

}
