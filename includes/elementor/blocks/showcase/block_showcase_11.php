<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Showcase_11 extends Widget_Base {

	public function get_name() {
		return 'vlt-showcase-11';
	}

	public function get_title() {
		return esc_html__( 'Showcase Style 11', 'sodathemes' );
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
				'label' => esc_html__( 'Separator', 'sodathemes' ),
			]
		);

		$this->add_control(
			'separator', [
				'label' => esc_html__( 'Separator', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => '–',
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
					'{{WRAPPER}} .vlt-showcase-item' => 'margin-top: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .vlt-showcase' => 'margin-top: -{{SIZE}}{{UNIT}};'
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

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Separator', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'separator[value]!' => '',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'separator_typography',
				'selector' => '{{WRAPPER}} .vlt-showcase-separator',
			]
		);

		$this->add_control(
			'separator_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-separator' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'separator_indent', [
				'label' => esc_html__( 'Separator Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-showcase-separator' => 'margin-left: {{SIZE}}{{UNIT}}; margin-right: {{SIZE}}{{UNIT}};'
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
					'vlt-showcase--style-11'
				]
			]
		] );

		?>

		<div <?php echo $this->get_render_attribute_string( 'showcase' ); ?>>

			<<?php echo $settings[ 'title_html_tag' ]; ?> class="vlt-showcase-title">

				<?php foreach ( $settings[ 'items' ] as $index => $item ) :

					$link_key = 'link_' . $index;

					if ( $item[ 'link' ][ 'url' ] ) {
						$this->add_render_attribute( $link_key, 'href', $item[ 'link' ][ 'url' ] );

						if ( $item[ 'link' ][ 'is_external' ] ) {
							$this->add_render_attribute( $link_key, 'target', '_blank' );
						}

						if ( $item[ 'link' ][ 'nofollow' ] ) {
							$this->add_render_attribute( $link_key, 'rel', 'nofollow' );
						}
					}

					$this->add_render_attribute( 'showcase-item-' . $index, 'class', 'vlt-showcase-item' );

					if ( $item[ 'image' ][ 'url' ] ) :

						if ( $item[ 'image' ][ 'id' ] ) {
							$image_url = Group_Control_Image_Size::get_attachment_image_src( $item[ 'image' ][ 'id' ], 'image', $item );
						} else {
							$image_url = Utils::get_placeholder_image_src();
						}

						$this->add_render_attribute( 'showcase-item-' . $index, 'data-tippy-content', '<img src="' . $image_url . '" alt="' . esc_attr( Control_Media::get_image_alt( $item[ 'image' ] ) ) . '">' );

					endif;

				?>

				<span <?php echo $this->get_render_attribute_string( 'showcase-item-' . $index ); ?>>

					<?php if ( $item[ 'title' ] ) : ?>

						<?php

							$title_html = $item[ 'title' ];
							if ( $item[ 'link' ][ 'url' ] ) :
								$title_html = '<a ' . $this->get_render_attribute_string( $link_key ) . '>' . $title_html . '</a>';
							endif;
							echo $title_html;

						?>

					<?php endif; ?>

				</span>

				<?php if ( ! empty( $settings[ 'separator' ] ) ) : ?>

					<span class="vlt-showcase-separator"><?php echo $settings[ 'separator' ]; ?></span>

				<?php endif; ?>

			<?php endforeach; ?>

			</<?php echo $settings[ 'title_html_tag' ]; ?>>

		</div>

		<?php

	}

}