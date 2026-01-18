<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Showcase_7 extends Widget_Base {

	public function get_name() {
		return 'vlt-showcase-7';
	}

	public function get_title() {
		return esc_html__( 'Showcase Style 7', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-gallery-grid sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-showcase' ];
	}

	public function get_keywords() {
		return [ 'showcase', 'portfolio', 'slider' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Showcase', 'sodathemes' ),
			]
		);

		

		$repeater = new Repeater();

		$repeater->add_control(
			'title', [
				'label' => esc_html__( 'Title', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'category', [
				'label' => esc_html__( 'Category', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
			]
		);

		$repeater->add_control(
			'text', [
				'label' => esc_html__( 'Text', 'sodathemes' ),
				'type' => Controls_Manager::TEXTAREA,
			]
		);

		$repeater->add_control(
			'image', [
				'label' => esc_html__( 'Image', 'sodathemes' ),
				'type' => Controls_Manager::MEDIA,
			]
		);

		$repeater->add_control(
			'image_mask', [
				'label' => esc_html__( 'Image Mask', 'sodathemes' ),
				'type' => Controls_Manager::MEDIA,
			]
		);

		$repeater->add_group_control(
			Group_Control_Image_Size::get_type(), [
				'name' => 'image', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `testimonial_image_size` and `testimonial_image_custom_dimension`.
			]
		);

		$repeater->add_control(
			'link', [
				'label' => esc_html__( 'Link', 'sodathemes' ),
				'type' => Controls_Manager::URL,
			]
		);

		$repeater->add_control(
			'link_text', [
				'label' => esc_html__( 'Link Text', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
			]
		);

		$this->add_control(
			'items', [
				'label' => esc_html__( 'Showcase Items', 'sodathemes' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '{{{ title }}}',
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
			'padding', [
				'label' => esc_html__( 'Padding', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', 'rem', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Items', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_responsive_control(
			'items_indent', [
				'label' => esc_html__( 'Items Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-item + .vlt-showcase-item' => 'margin-top: {{SIZE}}{{UNIT}};',
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
			'title_html_tag', [
				'label' => esc_html__( 'HTML Tag', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'h3',
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
			'title_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-title' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .vlt-showcase-title',
			]
		);

		$this->add_responsive_control(
			'title_margin', [
				'label' => esc_html__( 'Margin', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', 'rem', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				]
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Category', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_control(
			'category_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-category' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'category_typography',
				'selector' => '{{WRAPPER}} .vlt-showcase-category',
			]
		);

		$this->add_responsive_control(
			'category_margin', [
				'label' => esc_html__( 'Margin', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', 'rem', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-category' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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

		$this->add_control(
			'text_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-text' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'text_typography',
				'selector' => '{{WRAPPER}} .vlt-showcase-text',
			]
		);

		$this->add_responsive_control(
			'text_margin', [
				'label' => esc_html__( 'Margin', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', 'rem', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				]
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Link', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_responsive_control(
			'link_margin', [
				'label' => esc_html__( 'Margin', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', 'rem', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-link' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				]
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( [
			'showcase' => [
				'class' => [
					'vlt-showcase',
					'vlt-showcase--style-7'
				]
			]
		] );

		?>

		<div <?php echo $this->get_render_attribute_string( 'showcase' ); ?>>

			<?php foreach ( $settings[ 'items' ] as $item ) :

				$link_key = 'link_' . $item[ '_id' ];

				if ( $item[ 'link' ][ 'url' ] ) {
					$this->add_render_attribute( $link_key, 'href', $item[ 'link' ][ 'url' ] );

					if ( $item[ 'link' ][ 'is_external' ] ) {
						$this->add_render_attribute( $link_key, 'target', '_blank' );
					}

					if ( $item[ 'link' ][ 'nofollow' ] ) {
						$this->add_render_attribute( $link_key, 'rel', 'nofollow' );
					}
				}

				?>

				<div class="vlt-showcase-item row no-gutters">

					<div class="col-md-5">

						<div class="vlt-showcase-content">

							<?php if ( $item[ 'category' ] ) : ?>

								<div class="vlt-showcase-category">
									<?php echo $item[ 'category' ]; ?>
								</div>

							<?php endif; ?>

							<?php if ( $item[ 'title' ] ) : ?>

								<?php
									$title_html = $item[ 'title' ];
									if ( $item[ 'link' ][ 'url' ] ) :
										$title_html = '<a ' . $this->get_render_attribute_string( $link_key ) . '>' . $title_html . '</a>';
									endif;
								?>

								<<?php echo $settings[ 'title_html_tag' ]; ?> class="vlt-showcase-title">
									<?php echo $title_html; ?>
								</<?php echo $settings[ 'title_html_tag' ]; ?>>

							<?php endif; ?>

							<?php if ( $item[ 'text' ] ) : ?>

								<p class="vlt-showcase-text">
									<?php echo $item[ 'text' ]; ?>
								</p>

							<?php endif; ?>

							<?php if ( $item[ 'link' ][ 'url' ] && $item[ 'link_text' ] ) : ?>

								<a class="vlt-showcase-link vlt-btn vlt-btn--primary vlt-btn--effect" <?php echo $this->get_render_attribute_string( $link_key ); ?>><?php echo $item[ 'link_text' ]; ?></a>

							<?php endif; ?>

						</div>

					</div>

					<!-- image -->
					<?php if ( $item[ 'image' ][ 'url' ] ) : ?>

						<div class="vlt-showcase-image col-md-7 d-none d-md-block">

							<div class="vlt-showcase-image-original">
								<?php echo Group_Control_Image_Size::get_attachment_image_html( $item, 'image', 'image' ); ?>
							</div>

							<?php if ( $item[ 'image_mask' ][ 'url' ] ) : ?>

								<div class="vlt-showcase-image-mask">
									<?php echo Group_Control_Image_Size::get_attachment_image_html( $item, 'image', 'image_mask' ); ?>
								</div>

							<?php endif; ?>

						</div>

					<?php endif; ?>

				</div>

			<?php endforeach; ?>

		</div>

		<?php

	}

}