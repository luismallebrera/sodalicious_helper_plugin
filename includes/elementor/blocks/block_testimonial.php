<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Testimonial extends Widget_Base {

	public function get_name() {
		return 'vlt-testimonial';
	}

	public function get_title() {
		return esc_html__( 'Testimonial', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-testimonial sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'testimonial', 'review', 'blockquote' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Testimonial', 'sodathemes' ),
			]
		);

		

		$this->add_control(
			'avatar', [
				'label' => esc_html__( 'Avatar', 'sodathemes' ),
				'type' => Controls_Manager::MEDIA,
			]
		);

		$this->add_group_control(
			Group_Control_Image_Size::get_type(), [
				'name' => 'avatar', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `testimonial_image_size` and `testimonial_image_custom_dimension`.
				'default' => 'thumbnail',
				'condition' => [
					'avatar[id]!' => '',
				],
			]
		);

		$this->add_control(
			'name', [
				'label' => esc_html__( 'Name', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => 'Joseph Bridges',
				'separator' => 'before'
			]
		);

		$this->add_control(
			'function', [
				'label' => esc_html__( 'Function', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => 'Designer',
			]
		);

		$this->add_control(
			'content', [
				'label' => esc_html__( 'Content', 'sodathemes' ),
				'type' => Controls_Manager::TEXTAREA,
				'rows' => '6',
				'default' => '"Set creepeth seasons dominion moving their lesser over above the i was good. Meat is without he beginning, our him male."',
			]
		);

		$this->add_control(
			'link', [
				'label' => esc_html__( 'Link', 'sodathemes' ),
				'type' => Controls_Manager::URL,
				'placeholder' => 'https://your-link.com',
				'separator' => 'before',
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Testimonial', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
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
				'selectors' => [
					'{{WRAPPER}} .vlt-testimonial' => 'text-align: {{VALUE}};'
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

		$this->add_group_control(
			Group_Control_Border::get_type(), [
				'name' => 'border',
				'selector' => '{{WRAPPER}} .vlt-testimonial',
			]
		);

		$this->add_control(
			'background_color', [
				'label' => esc_html__( 'Background Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-testimonial' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(), [
				'name' => 'box_shadow',
				'selector' => '{{WRAPPER}} .vlt-testimonial',
			]
		);

		$this->end_controls_tab();

		// ANCHOR
		$this->start_controls_tab(
			'tab_' . $first_level++, [
				'label' => esc_html__( 'Active', 'sodathemes' ),
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(), [
				'name' => 'border_active',
				'selector' => '.swiper-slide-active {{WRAPPER}} .vlt-testimonial',
			]
		);

		$this->add_control(
			'background_color_active', [
				'label' => esc_html__( 'Background Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'.swiper-slide-active {{WRAPPER}} .vlt-testimonial' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(), [
				'name' => 'box_shadow_active',
				'selector' => '.swiper-slide-active {{WRAPPER}} .vlt-testimonial',
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->add_responsive_control(
			'padding', [
				'label' => esc_html__( 'Padding', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', 'rem', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-testimonial' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
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
			'content_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-testimonial__content' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();

		// ANCHOR
		$this->start_controls_tab(
			'tab_' . $first_level++, [
				'label' => esc_html__( 'Active', 'sodathemes' ),
			]
		);

		$this->add_control(
			'content_color_active', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'.swiper-slide-active {{WRAPPER}} .vlt-testimonial__content' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'content_typography',
				'selector' => '{{WRAPPER}} .vlt-testimonial__content',
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Avatar', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'avatar[url]!' => '',
				],
			]
		);

		$this->add_control(
			'image_height', [
				'label' => esc_html__( 'Image Height', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 20,
						'max' => 200,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-testimonial__avatar' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'image_border_radius', [
				'label' => esc_html__( 'Border Radius', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-testimonial__avatar' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'avatar_margin', [
				'label' => esc_html__( 'Margin', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', 'rem', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-testimonial__avatar' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Meta', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Name', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'name_html_tag', [
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
			'name_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-testimonial__name' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();

		// ANCHOR
		$this->start_controls_tab(
			'tab_' . $first_level++, [
				'label' => esc_html__( 'Active', 'sodathemes' ),
			]
		);

		$this->add_control(
			'name_color_active', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'.swiper-slide-active {{WRAPPER}} .vlt-testimonial__name' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'name_typography',
				'selector' => '{{WRAPPER}} .vlt-testimonial__name',
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Function', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
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
			'function_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-testimonial__function' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_' . $first_level++, [
				'label' => esc_html__( 'Active', 'sodathemes' ),
			]
		);

		$this->add_control(
			'function_color_active', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'.swiper-slide-active {{WRAPPER}} .vlt-testimonial__function' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();

		$this->end_controls_tabs();

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'function_typography',
				'selector' => '{{WRAPPER}} .vlt-testimonial__function',
			]
		);

		$this->add_responsive_control(
			'function_indent', [
				'label' => esc_html__( 'Function Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-testimonial__function' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'meta_position', [
				'label' => esc_html__( 'Meta Position', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'bottom',
				'options' => [
					'top' => esc_html__( 'Top', 'sodathemes' ),
					'bottom' => esc_html__( 'Bottom', 'sodathemes' ),
				],
				'separator' => 'before'
			]
		);

		$this->add_control(
			'meta_alignment', [
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
					'{{WRAPPER}} .vlt-testimonial__meta' => 'text-align: {{VALUE}};'
				],
			]
		);

		$this->add_responsive_control(
			'meta_margin', [
				'label' => esc_html__( 'Margin', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', 'rem', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-testimonial__meta' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render_meta( $instance ) {

		$has_avatar = ! ! $instance[ 'avatar' ][ 'url' ];
		$has_name = ! ! $instance[ 'name' ];
		$has_function = ! ! $instance[ 'function' ];

		if ( ! $has_avatar && ! $has_name && ! $has_function ) {
			return;
		}

		if ( $instance[ 'link' ][ 'url' ] ) {

			$this->add_render_attribute( 'link', [
				'class' => 'vlt-underline-link',
				'href' => $instance[ 'link' ][ 'url' ]
			] );

			if ( $instance[ 'link' ][ 'is_external' ] ) {
				$this->add_render_attribute( 'link', 'target', '_blank' );
			}

			if ( ! empty( $instance[ 'link' ][ 'nofollow' ] ) ) {
				$this->add_render_attribute( 'link', 'rel', 'nofollow' );
			}

		}

		if ( $has_avatar || $has_name || $has_function ) : ?>

			<div class="vlt-testimonial__meta">

				<?php if ( $has_avatar ) : ?>

					<div class="vlt-testimonial__avatar">

						<?php echo Group_Control_Image_Size_2::get_attachment_image_html( $instance, 'avatar' ); ?>

					</div>

				<?php endif; ?>

				<?php if ( $has_name || $has_function ) : ?>

					<div class="vlt-testimonial__details">

						<?php if ( $has_name ) :

							$this->add_render_attribute( 'name', 'class', 'vlt-testimonial__meta-name' );

							$testimonial_name_html = $instance[ 'name' ];

							if ( $instance[ 'link' ][ 'url' ] ) :
								$testimonial_name_html = '<a ' . $this->get_render_attribute_string( 'link' ) . '>' . $testimonial_name_html . '</a>';
							endif;

							?>

							<<?php echo $instance[ 'name_html_tag' ]; ?> class="vlt-testimonial__name">

								<?php echo $testimonial_name_html; ?>

							</<?php echo $instance[ 'name_html_tag' ]; ?>>

						<?php endif; ?>

						<?php if ( $has_function ) : ?>

							<p class="vlt-testimonial__function"><?php echo $instance[ 'function' ]; ?></p>

						<?php endif; ?>

					</div>

				<?php endif; ?>

			</div><?php

		endif;

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'testimonial', 'class', 'vlt-testimonial' );

		?>

		<div <?php echo $this->get_render_attribute_string( 'testimonial' ); ?>>

			<?php if ( $settings[ 'meta_position' ] == 'top' ) : ?>

				<?php echo $this->render_meta( $settings ); ?>

			<?php endif; ?>

			<?php if ( $settings[ 'content' ] ) : ?>

				<div class="vlt-testimonial__content"><?php echo $settings[ 'content' ]; ?></div>

			<?php endif; ?>

			<?php if ( $settings[ 'meta_position' ] == 'bottom' ) : ?>

				<?php echo $this->render_meta( $settings ); ?>

			<?php endif; ?>

		</div>

	<?php

	}

}