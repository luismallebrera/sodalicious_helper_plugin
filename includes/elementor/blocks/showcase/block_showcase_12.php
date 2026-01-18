<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Showcase_12 extends Widget_Base {

	public function get_name() {
		return 'vlt-showcase-12';
	}

	public function get_title() {
		return esc_html__( 'Showcase Style 12', 'sodathemes' );
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
				'name' => 'image', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
			]
		);

		$repeater->add_control(
			'link', [
				'label' => esc_html__( 'Link', 'sodathemes' ),
				'type' => Controls_Manager::URL,
				'placeholder' => 'https://your-link.com',
				'default' => [
					'url'=> '#',
				]
			]
		);

		$repeater->add_control(
			'title', [
				'label' => esc_html__( 'Title', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true
			]
		);

		$repeater->add_control(
			'category', [
				'label' => esc_html__( 'Category', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
			]
		);

		$repeater->add_control(
			'date', [
				'label' => esc_html__( 'Date', 'sodathemes' ),
				'type' => Controls_Manager::DATE_TIME,
			]
		);

		$repeater->add_control(
			'services', [
				'label' => esc_html__( 'Services', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true
			]
		);

		$repeater->add_control(
			'client', [
				'label' => esc_html__( 'Client', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true
			]
		);

		$repeater->add_control(
			'content', [
				'label' => esc_html__( 'Content', 'sodathemes' ),
				'type' => Controls_Manager::TEXTAREA,
			]
		);

		$this->add_control(
			'items', [
				'label' => esc_html__( 'Items', 'sodathemes' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls()
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Links', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
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
					'{{WRAPPER}} .vlt-showcase-link + .vlt-showcase-link' => 'margin-top: {{SIZE}}{{UNIT}};'
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
				'name' => 'year_typography',
				'selector' => '{{WRAPPER}} .vlt-showcase-category',
			]
		);

		$this->add_control(
			'category_indent', [
				'label' => esc_html__( 'Category Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-category' => 'margin-top: {{SIZE}}{{UNIT}};',
				]
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

		$this->add_control(
			'background_color', [
				'label' => esc_html__( 'Background Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-info-wrapper' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'padding', [
				'label' => esc_html__( 'Padding', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', 'rem', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-info-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				]
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Meta', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_responsive_control(
			'meta_margin', [
				'label' => esc_html__( 'Margin', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', 'rem', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-meta' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Meta Title', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'meta_title_typography',
				'selector' => '{{WRAPPER}} .vlt-showcase-meta__title',
			]
		);

		$this->add_control(
			'meta_title_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-meta__title' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Meta Text', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'meta_text_typography',
				'selector' => '{{WRAPPER}} .vlt-showcase-meta__text',
			]
		);

		$this->add_control(
			'meta_text_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-meta__text' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'meta_text_indent', [
				'label' => esc_html__( 'Text Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-meta__text' => 'margin-top: {{SIZE}}{{UNIT}};',
				]
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Content', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'content_typography',
				'selector' => '{{WRAPPER}} .vlt-showcase-content',
			]
		);

		$this->add_control(
			'content_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-content' => 'color: {{VALUE}};',
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
					'vlt-showcase--style-12'
				]
			]
		] );

		?>

		<div <?php echo $this->get_render_attribute_string( 'showcase' ); ?>>

			<div class="container-fluid g-0">

				<div class="row g-0">

					<div class="col-xl-6">

						<ul class="vlt-showcase-list">

							<?php foreach( $settings[ 'items' ] as $item ) : ?>

								<?php

									if ( ! empty( $item[ 'link' ][ 'url' ] ) ) {

										$this->add_render_attribute( 'link' . $item[ '_id' ], 'href', $item[ 'link' ][ 'url' ] );

										if ( $item[ 'link' ][ 'is_external' ] ) {
											$this->add_render_attribute( 'link' . $item[ '_id' ], 'target', '_blank' );
										}

										if ( $item[ 'link' ][ 'nofollow' ] ) {
											$this->add_render_attribute( 'link' . $item[ '_id' ], 'rel', 'nofollow' );
										}

									}

								?>

								<li class="vlt-showcase-link">

									<?php if ( $item[ 'title' ] ) : ?>

										<<?php echo $settings[ 'title_html_tag' ]; ?> class="vlt-showcase-title h1">

											<?php

												if ( ! empty( $item[ 'link' ][ 'url' ] ) ) {
													echo '<a ' . $this->get_render_attribute_string( 'link' . $item[ '_id' ] ) .'>';
												}

											?>

											<?php echo $item[ 'title' ]; ?>

											<?php

												if ( ! empty( $item[ 'link' ][ 'url' ] ) ) {
													echo '</a>';
												}

											?>

										</<?php echo $settings[ 'title_html_tag' ]; ?>>

									<?php endif; ?>

									<?php if ( $item[ 'category' ] ) : ?>

										<div class="vlt-showcase-category"><?php echo $item[ 'category' ]; ?></div>

									<?php endif; ?>

								</li>

							<?php endforeach; ?>

						</ul>

					</div>

					<div class="col-xl-6 sticky-parent">

						<div class="sticky-column">

							<div class="vlt-showcase-info-wrapper">

								<div class="vlt-showcase-info swiper-container swiper">

									<div class="swiper-wrapper">

										<?php foreach( $settings[ 'items' ] as $item ) : ?>

											<?php $date = date( 'm M, Y', strtotime( $item[ 'date' ] ) ); ?>

											<div class="swiper-slide">

												<div class="vlt-showcase-item">

													<?php if ( $item[ 'image' ][ 'url' ] ) : ?>

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

													<?php endif; ?>

													<div class="vlt-showcase-meta">

														<?php if ( $item[ 'services' ] ) : ?>

															<div>
																<h5 class="vlt-showcase-meta__title"><?php esc_html_e( 'Services', 'sodathemes' ); ?></h5>
																<p class="vlt-showcase-meta__text"><?php echo $item[ 'services' ]; ?></p>
															</div>

														<?php endif; ?>

														<?php if ( $item[ 'client' ] ) : ?>

															<div>
																<h5 class="vlt-showcase-meta__title"><?php esc_html_e( 'Client', 'sodathemes' ); ?></h5>
																<p class="vlt-showcase-meta__text"><?php echo $item[ 'client' ]; ?></p>
															</div>

														<?php endif; ?>

														<?php if ( $date ) : ?>

															<div>
																<h5 class="vlt-showcase-meta__title"><?php esc_html_e( 'Date', 'sodathemes' ); ?></h5>
																<p class="vlt-showcase-meta__text"><?php echo $date; ?></p>
															</div>

														<?php endif; ?>

													</div>

													<?php if ( $item[ 'content' ] ) : ?>

														<div class="vlt-showcase-content">
															<p><?php echo $item[ 'content' ]; ?></p>
														</div>

													<?php endif; ?>

												</div>

											</div>

										<?php endforeach; ?>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

		<?php

	}

}