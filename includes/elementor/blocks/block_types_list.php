<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Types_List extends Widget_Base {

	public function get_name() {
		return 'vlt-types-list';
	}

	public function get_title() {
		return esc_html__( 'Types List', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-image-rollover sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'types', 'list', 'image' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Types List', 'sodathemes' ),
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
			'link', [
				'label' => esc_html__( 'Link', 'sodathemes' ),
				'type' => Controls_Manager::URL,
				'placeholder' => 'https://your-link.com',

			]
		);

		$this->add_control(
			'types', [
				'label' => esc_html__( 'Types', 'sodathemes' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'title' => 'Work title',
						'category' => 'Branding',
						'link' => [ 'url' => '#' ]
					],
				]
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Content', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'General', 'sodathemes' ),
				'type' => Controls_Manager::HEADING
			]
		);

		$this->add_control(
			'lines_color', [
				'label' => esc_html__( 'Lines Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-types-list.is-active::before, {{WRAPPER}} .vlt-types-list.is-active::after' => 'background-color: {{VALUE}};',
				]
			]
		);

		$this->add_control(
			'overlay_color', [
				'label' => esc_html__( 'Overlay Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-types-background__image, {{WRAPPER}} .vlt-types-list .vlt-types-list__item .vlt-types-list__background' => 'background-color: {{VALUE}};',
				]
			]
		);

		$this->add_control(
			'image_opacity', [
				'label' => esc_html__( 'Image Opacity', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1,
						'step' => 0.1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-types-background__image img' => 'opacity: {{SIZE}};',
					'{{WRAPPER}} .vlt-types-list .vlt-types-list__item .vlt-types-list__background img' => 'opacity: {{SIZE}};',
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
			'title_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-types-list__title' => 'color: {{VALUE}};',
				]
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .vlt-types-list__title'
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
					'{{WRAPPER}} .vlt-types-list__category' => 'color: {{VALUE}};',
				]
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'category_typography',
				'selector' => '{{WRAPPER}} .vlt-types-list__category'
			]
		);

		$this->add_responsive_control(
			'category_indent', [
				'label' => esc_html__( 'Text Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-types-list__category' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'types', 'class', 'vlt-types' );

		?>

		<div <?php echo $this->get_render_attribute_string( 'types' ); ?>>

			<?php

				if ( $settings[ 'types' ] && count( $settings[ 'types' ] ) <= 3 ) {

					echo '<div class="vlt-types-background">';

						foreach ( $settings[ 'types' ] as $item ) {

							if ( $item[ 'image' ][ 'url' ] ) {

								echo '<div class="vlt-types-background__image">';

								echo Group_Control_Image_Size_2::get_attachment_image_html( $item, 'image' );

								echo '</div>';

							}

						}

					echo '</div>';

					echo '<div class="vlt-types-list">';

						foreach ( $settings[ 'types' ] as $item ) {

							echo '<div class="vlt-types-list__item">';

								if ( $item[ 'link' ][ 'url' ] ) {

									$this->add_render_attribute( 'types-link-' . $item[ '_id' ], [
										'class' => 'vlt-underline-link',
										'href' => $item[ 'link' ][ 'url' ]
									] );

									if ( $item[ 'link' ][ 'is_external' ] ) {
										$this->add_render_attribute( 'types-link-' . $item[ '_id' ], 'target', '_blank' );
									}

									if ( $item[ 'link' ][ 'nofollow' ] ) {
										$this->add_render_attribute( 'types-link-' . $item[ '_id' ], 'rel', 'nofollow' );
									}

								}

								if ( $item[ 'image' ][ 'url' ] ) {

									echo '<div class="vlt-types-list__background">';

									echo Group_Control_Image_Size_2::get_attachment_image_html( $item, 'image' );

									echo '</div>';

								}

								echo '<div class="vlt-types-list__content">';

									if ( $item[ 'title' ] ) {

										echo '<' . $settings[ 'title_html_tag' ] . ' class="vlt-types-list__title">';

										if ( $item[ 'link' ][ 'url' ] ) {
											echo '<a ' . $this->get_render_attribute_string( 'types-link-' . $item[ '_id' ] ) . '>';
										}

										echo $item[ 'title' ];

										if ( $item[ 'link' ][ 'url' ] ) {
											echo '</a>';
										}

										echo '</' . $settings[ 'title_html_tag' ] . '>';

									}

									if ( $item[ 'category' ] ) {
										echo '<span class="vlt-types-list__category">' . $item[ 'category' ] . '</span>';
									}

								echo '</div>';

							echo '</div>';

						}

					echo '</div>';

				}

			?>

		</div>

		<?php

	}

}