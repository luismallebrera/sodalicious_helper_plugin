<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Twitter_Review extends Widget_Base {

	public function get_name() {
		return 'vlt-twitter-review';
	}

	public function get_title() {
		return esc_html__( 'Twitter Review', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-twitter-feed sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'twitter', 'review' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Twitter Review', 'sodathemes' ),
			]
		);

		

		$this->add_control(
			'image', [
				'label' => esc_html__( 'Avatar', 'sodathemes' ),
				'type' => Controls_Manager::MEDIA,
			]
		);

		$this->add_group_control(
			Group_Control_Image_Size::get_type(), [
				'name' => 'image', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
			]
		);

		$this->add_control(
			'icon_class', [
				'label' => esc_html__( 'Icon Class', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => 'socicon-twitter'
			]
		);

		$this->add_control(
			'author', [
				'label' => esc_html__( 'Author', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'default' => 'Joseph Bridges'
			]
		);

		$this->add_control(
			'info', [
				'label' => esc_html__( 'Info', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'default' => 'Designer in Google'
			]
		);

		$this->add_control(
			'content', [
				'label' => esc_html__( 'Content', 'sodathemes' ),
				'type' => Controls_Manager::WYSIWYG,
				'default' => '"Set creepeth seasons dominion moving their lesser over above the i was good. Meat is without he beginning, our him male."'
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Avatar', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'image[url]!' => '',
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
					'{{WRAPPER}} .vlt-twitter-review__avatar' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'image_border_radius', [
				'label' => esc_html__( 'Border Radius', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-twitter-review__avatar' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'image_indent', [
				'label' => esc_html__( 'Image Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-twitter-review__avatar' => 'margin-right: {{SIZE}}{{UNIT}};',
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

		$this->add_group_control(
			Group_Control_Border::get_type(), [
				'name' => 'border',
				'selector' => '{{WRAPPER}} .vlt-twitter-review',
			]
		);

		$this->add_control(
			'background_color', [
				'label' => esc_html__( 'Background Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-twitter-review' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'padding', [
				'label' => esc_html__( 'Padding', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', 'rem', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-twitter-review' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				]
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Icon', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);


		$this->add_control(
			'icon_color', [
				'label' => esc_html__( 'Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-twitter-review__icon' => 'color: {{VALUE}};',
				],
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
					'{{WRAPPER}} .vlt-twitter-review__icon' => 'font-size: {{SIZE}}{{UNIT}};',
				]
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Author', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_control(
			'author_html_tag', [
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

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'author_typography',
				'selector' => '{{WRAPPER}} .vlt-twitter-review__author',
			]
		);

		$this->add_control(
			'author_color', [
				'label' => esc_html__( 'Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-twitter-review__author' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Info', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'info_typography',
				'selector' => '{{WRAPPER}} .vlt-twitter-review__info',
			]
		);

		$this->add_control(
			'info_color', [
				'label' => esc_html__( 'Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-twitter-review__info' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'info_indent', [
				'label' => esc_html__( 'Info Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-twitter-review__info' => 'margin-top: {{SIZE}}{{UNIT}};',
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
				'selector' => '{{WRAPPER}} .vlt-twitter-review__content',
			]
		);

		$this->add_control(
			'content_color', [
				'label' => esc_html__( 'Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-twitter-review__content' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'content_indent', [
				'label' => esc_html__( 'Content Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-twitter-review__content' => 'margin-top: {{SIZE}}{{UNIT}};',
				]
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'twitter-review', 'class', 'vlt-twitter-review' );

		?>

		<div <?php echo $this->get_render_attribute_string( 'twitter-review' ); ?>>

			<div class="vlt-twitter-review__header">

				<?php if ( $settings[ 'image' ][ 'url' ] ) : ?>

					<div class="vlt-twitter-review__avatar">

						<?php echo Group_Control_Image_Size_2::get_attachment_image_html( $settings, 'image' ); ?>

					</div>

				<?php endif; ?>

				<div class="vlt-twitter-review__meta">

					<?php if ( $settings[ 'author' ] ) : ?>

						<<?php echo $settings[ 'author_html_tag' ]; ?> class="vlt-twitter-review__author"><?php echo $settings[ 'author' ]; ?></<?php echo $settings[ 'author_html_tag' ]; ?>>

					<?php endif; ?>

					<?php if ( $settings[ 'info' ] ) : ?>

						<div class="vlt-twitter-review__info"><?php echo $settings[ 'info' ]; ?></div>

					<?php endif; ?>

				</div>

				<div class="vlt-twitter-review__icon"><i class="<?php echo $settings[ 'icon_class' ]; ?>"></i></div>

			</div>

			<?php if ( $settings[ 'content' ] ) : ?>

				<div class="vlt-twitter-review__content">

					<p><?php echo $settings[ 'content' ]; ?></p>

				</div>

			<?php endif; ?>

		</div>

		<?php

	}

}