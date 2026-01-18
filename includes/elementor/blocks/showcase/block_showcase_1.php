<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Showcase_1 extends Widget_Base {

	public function get_name() {
		return 'vlt-showcase-1';
	}

	public function get_title() {
		return esc_html__( 'Showcase Style 1', 'sodathemes' );
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
			'category', [
				'label' => esc_html__( 'Category', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
			]
		);

		$repeater->add_control(
			'title', [
				'label' => esc_html__( 'Title', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'text', [
				'label' => esc_html__( 'Text', 'sodathemes' ),
				'type' => Controls_Manager::TEXTAREA,
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

		$this->add_control(
			'navigation_anchor', [
				'label' => esc_html__( 'Navigation Anchor', 'sodathemes' ),
				'description' => esc_html__( 'Enter class / identifier that the navigation has.', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'separator' => 'before',
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Item', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Category', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
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
				'label' => esc_html__( 'Title', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'title_html_tag', [
				'label' => esc_html__( 'HTML Tag', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'h2',
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
				'label' => esc_html__( 'Text', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
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
				'separator' => 'before',
			]
		);

		$this->add_control(
			'link_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-link' => 'color: {{VALUE}};',
				],
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
					'vlt-showcase--style-1',
					'swiper-container swiper'
				],
				'data-navigation-anchor' => $settings[ 'navigation_anchor' ],
			]
		] );

	?>

	<div <?php echo $this->get_render_attribute_string( 'showcase' ); ?>>

		<div class="swiper-wrapper">

			<?php if ( $settings[ 'items' ] ) : ?>

				<?php foreach ( $settings[ 'items' ] as $key => $item ) : ?>

					<?php

						if ( $item[ 'link' ][ 'url' ] ) {

							$this->add_render_attribute( 'showcase-image-link-' . $item[ '_id' ], [
								'data-cursor' => esc_html__( 'View', '@@textdomain' ),
								'href' => $item[ 'link' ][ 'url' ]
							] );

							$this->add_render_attribute( 'showcase-simple-link-' . $item[ '_id' ], [
								'class' => 'vlt-showcase-link vlt-simple-link',
								'href' => $item[ 'link' ][ 'url' ]
							] );

							$this->add_render_attribute( 'showcase-link-' . $item[ '_id' ], [
								'href' => $item[ 'link' ][ 'url' ]
							] );

							if ( $item[ 'link' ][ 'is_external' ] ) {
								$this->add_render_attribute( 'showcase-image-link-' . $item[ '_id' ], 'target', '_blank' );
								$this->add_render_attribute( 'showcase-simple-link-' . $item[ '_id' ], 'target', '_blank' );
								$this->add_render_attribute( 'showcase-link-' . $item[ '_id' ], 'target', '_blank' );
							}

							if ( $item[ 'link' ][ 'nofollow' ] ) {
								$this->add_render_attribute( 'showcase-image-link-' . $item[ '_id' ], 'rel', 'nofollow' );
								$this->add_render_attribute( 'showcase-simple-link-' . $item[ '_id' ], 'rel', 'nofollow' );
								$this->add_render_attribute( 'showcase-link-' . $item[ '_id' ], 'rel', 'nofollow' );
							}

						}

					?>

					<div class="swiper-slide">

						<div class="vlt-showcase-item">

							<div class="row align-items-center">

								<div class="col-md-6 offset-md-1 order-md-6">

									<?php if ( $item[ 'link' ][ 'url' ] ) : ?>

										<a <?php echo $this->get_render_attribute_string( 'showcase-image-link-' . $item[ '_id' ] ); ?>>

									<?php endif; ?>

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

										<div class="swiper-lazy-preloader"></div>

									</div>

									<?php if ( $item[ 'link' ][ 'url' ] ) : ?>

										</a>

									<?php endif; ?>

								</div>

								<div class="col-md-5">

									<?php if ( $item[ 'category' ] ) : ?>

										<div class="vlt-showcase-category"><?php echo $item[ 'category' ]; ?></div>

									<?php endif; ?>

									<?php if ( $item[ 'title' ] ) : ?>

										<<?php echo $settings[ 'title_html_tag' ]; ?> class="vlt-showcase-title">

											<?php if ( $item[ 'link' ][ 'url' ] ) : ?>

												<a <?php echo $this->get_render_attribute_string( 'showcase-link-' . $item[ '_id' ] ); ?>>

											<?php endif; ?>

											<?php echo $item[ 'title' ]; ?>

											<?php if ( $item[ 'link' ][ 'url' ] ) : ?>

												</a>

											<?php endif; ?>

										</<?php echo $settings[ 'title_html_tag' ]; ?>>

									<?php endif; ?>

									<?php if ( $item[ 'text' ] ) : ?>

										<p class="vlt-showcase-text"><?php echo $item[ 'text' ]; ?></p>

									<?php endif; ?>

									<?php if ( $item[ 'link' ][ 'url' ] && $item[ 'link_text' ] ) : ?>

										<a <?php echo $this->get_render_attribute_string( 'showcase-simple-link-' . $item[ '_id' ] ); ?>>

											<?php echo $item[ 'link_text' ]; ?>

										</a>

									<?php endif; ?>

								</div>

							</div>

						</div>

					</div>

				<?php endforeach; ?>

			<?php endif; ?>

		</div>

	</div>

	<?php

	}

}