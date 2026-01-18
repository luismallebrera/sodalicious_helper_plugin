<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Showcase_6 extends Widget_Base {

	public function get_name() {
		return 'vlt-showcase-6';
	}

	public function get_title() {
		return esc_html__( 'Showcase Style 6', 'sodathemes' );
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
			'image', [
				'label' => esc_html__( 'Image', 'sodathemes' ),
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
				'label' => esc_html__( 'Settings', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_SETTINGS,
			]
		);

		$this->add_responsive_control(
			'height', [
				'label' => esc_html__( 'Height', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'em', 'rem', '%', 'vh' ],
				'range' => [
					'vh' => [
						'min' => 10,
						'max' => 100,
					],
					'px' => [
						'min' => 40,
						'max' => 1440,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase' => 'height: {{SIZE}}{{UNIT}}; min-height: {{SIZE}}{{UNIT}};',
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

		$this->add_responsive_control(
			'padding', [
				'label' => esc_html__( 'Padding', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', 'rem', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-links' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'links_indent', [
				'label' => esc_html__( 'Link Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-links li + li' => 'margin-top: {{SIZE}}{{UNIT}};',
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
				],
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
					'vlt-showcase--style-6'
				]
			]
		] );

		?>

		<div <?php echo $this->get_render_attribute_string( 'showcase' ); ?>>

			<div class="vlt-showcase-links swiper-container swiper">

				<div class="swiper-wrapper">

					<div class="swiper-slide">

						<ul>

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

							<li class="vlt-showcase-link">

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

								<?php if ( $item[ 'category' ] ) : ?>

									<div class="vlt-showcase-category">
										<?php echo $item[ 'category' ]; ?>
									</div>

								<?php endif; ?>

							</li>

							<?php endforeach; ?>

						</ul>

					</div>

				</div>

			</div>

			<div class="vlt-showcase-images swiper-container swiper">

				<div class="swiper-wrapper">

					<?php foreach ( $settings[ 'items' ] as $item ) : ?>

						<?php if ( $item[ 'image' ][ 'url' ] ) : ?>

							<div class="swiper-slide">

								<div class="vlt-showcase-image">

									<?php

										if ( $item[ 'image' ][ 'id' ] ) {
											$image_url = Group_Control_Image_Size::get_attachment_image_src( $item[ 'image' ][ 'id' ], 'image', $item );
										} else {
											$image_url = Utils::get_placeholder_image_src();
										}
										$image_html = '<img class="swiper-lazy" src="" data-src="' . esc_attr( $image_url ) . '" alt="' . esc_attr( Control_Media::get_image_alt( $item[ 'image' ] ) ) . '">';
										echo $image_html;

									?>

									<div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>

								</div>

							</div>

						<?php endif; ?>

					<?php endforeach; ?>

				</div>

			</div>

		</div>

		<?php

	}

}