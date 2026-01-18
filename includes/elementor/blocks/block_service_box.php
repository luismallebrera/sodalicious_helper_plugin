<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Service_Box extends Widget_Base {

	public function get_name() {
		return 'vlt-service-box';
	}

	public function get_title() {
		return esc_html__( 'Service Box', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-icon-box sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'service', 'box' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Service Box', 'sodathemes' ),
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
				'name' => 'image', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `testimonial_image_size` and `testimonial_image_custom_dimension`.
			]
		);

		$this->add_control(
			'title', [
				'label' => esc_html__( 'Title', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true
			]
		);

		$this->add_control(
			'text', [
				'label' => esc_html__( 'Text', 'sodathemes' ),
				'type' => Controls_Manager::TEXTAREA,
			]
		);

		$this->add_control(
			'link', [
				'label' => esc_html__( 'Link', 'sodathemes' ),
				'type' => Controls_Manager::URL,
				'placeholder' => 'https://your-link.com',
				'default' => [
					'url'=> '#',
				],
				'separator' => 'before'
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
					'{{WRAPPER}}' => 'text-align: {{VALUE}};'
				],
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Image', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_responsive_control(
			'image_max_height', [
				'label' => esc_html__( 'Max Height', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 2000,
					],
				],
				'size_units' => [
					'px'
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-service-box__image > img' => 'max-height: {{SIZE}}{{UNIT}}; width: auto;',
				],
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Title', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_control(
			'html_tag', [
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

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .vlt-service-box__title',
			]
		);

		$this->add_control(
			'title_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-service-box__title' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'title_indent', [
				'label' => esc_html__( 'Title Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-service-box__title' => 'margin-top: {{SIZE}}{{UNIT}};',
				]
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Text', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'text_typography',
				'selector' => '{{WRAPPER}} .vlt-service-box__text',
			]
		);

		$this->add_control(
			'text_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-service-box__text' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'text_indent', [
				'label' => esc_html__( 'Text Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-service-box__text' => 'margin-top: {{SIZE}}{{UNIT}};',
				]
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'service', 'class', 'vlt-service-box' );

		$this->add_render_attribute( 'service-link', [
			'href' => $settings[ 'link' ][ 'url' ]
		] );

		if ( $settings[ 'link' ][ 'is_external' ] ) {
			$this->add_render_attribute( 'service-link', 'target', '_blank' );
		}

		if ( $settings[ 'link' ][ 'nofollow' ] ) {
			$this->add_render_attribute( 'service-link', 'rel', 'nofollow' );
		}

		?>

		<div <?php echo $this->get_render_attribute_string( 'service' ); ?>>

			<?php

				if ( $settings[ 'image' ][ 'url' ] ) {

					echo '<div class="vlt-service-box__image">';

					echo Group_Control_Image_Size_2::get_attachment_image_html( $settings, 'image' );

					echo '</div>';
				}

			?>

			<div class="vlt-service-box__content">

				<?php if ( $settings[ 'title' ] ) : ?>

					<<?php echo esc_attr( $settings[ 'html_tag' ] ); ?> class="vlt-service-box__title">

						<?php if ( ! empty( $settings[ 'link' ][ 'url' ] ) ) : ?>

							<a <?php echo $this->get_render_attribute_string( 'service-link' ); ?>>

						<?php endif; ?>

						<?php echo $settings[ 'title' ]; ?>

						<?php if ( ! empty( $settings[ 'link' ][ 'url' ] ) ) : ?>

							</a>

						<?php endif; ?>

					</<?php echo esc_attr( $settings[ 'html_tag' ] ); ?>>

				<?php endif; ?>

				<?php if ( $settings[ 'text' ] ) : ?>

					<p class="vlt-service-box__text"><?php echo $settings[ 'text' ]; ?></p>

				<?php endif; ?>

			</div>

		</div>

		<?php

	}

}
