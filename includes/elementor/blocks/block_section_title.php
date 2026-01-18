<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Section_Title extends Widget_Base {

	public function get_name() {
		return 'vlt-section-title';
	}

	public function get_title() {
		return esc_html__( 'Section Title', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-site-title sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'heading', 'title', 'text', 'section' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Title', 'sodathemes' ),
			]
		);

	

		$this->add_control(
			'subtitle', [
				'label' => esc_html__( 'Subtitle', 'sodathemes' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'Enter your subtitle', 'sodathemes' ),
			]
		);

		$this->add_control(
			'title', [
				'label' => esc_html__( 'Title', 'sodathemes' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'Enter your title', 'sodathemes' ),
				'default' => esc_html__( 'Add Your Heading Text Here', 'sodathemes' ),
				'separator' => 'before'
			]
		);

		$this->add_control(
			'html_tag', [
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
				]
			]
		);

		$this->add_control(
			'description', [
				'label' => esc_html__( 'Description', 'sodathemes' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'Enter your description', 'sodathemes' ),
				'separator' => 'before'
			]
		);

		$this->add_control(
			'link', [
				'label' => esc_html__( 'Link', 'sodathemes' ),
				'type' => Controls_Manager::URL,
				'placeholder' => 'https://your-link.com',
				'separator' => 'before'
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
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}}' => 'text-align: {{VALUE}};'
				],
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

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Heading', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'heading_typography',
				'selector' => '{{WRAPPER}} .vlt-section-title__heading',
			]
		);

		$this->add_control(
			'heading_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-section-title__heading' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Subtitle', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'subtitle_typography',
				'selector' => '{{WRAPPER}} .vlt-section-title__subtitle',
			]
		);

		$this->add_control(
			'subtitle_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-section-title__subtitle' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'subtitle_background_color', [
				'label' => esc_html__( 'Background Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-section-title__subtitle' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'subtitle_indent', [
				'label' => esc_html__( 'Subtitle Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-section-title__subtitle' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Description', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'description_typography',
				'selector' => '{{WRAPPER}} .vlt-section-title__description',
			]
		);

		$this->add_control(
			'description_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-section-title__description' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'description_indent', [
				'label' => esc_html__( 'Description Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-section-title__description' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'section-title', 'class', 'vlt-section-title' );

		if ( $settings[ 'link' ][ 'url' ] ) {

			$this->add_render_attribute( 'link', [
				'href' => $settings[ 'link' ][ 'url' ],
				'class' => 'vlt-underline-link'
			] );

			if ( $settings[ 'link' ][ 'is_external' ] ) {
				$this->add_render_attribute( 'link', 'target', '_blank' );
			}

			if ( $settings[ 'link' ][ 'nofollow' ] ) {
				$this->add_render_attribute( 'link', 'rel', 'nofollow' );
			}

		}

		?>

		<div <?php echo $this->get_render_attribute_string( 'section-title' ); ?>>

			<?php if ( $settings[ 'subtitle' ] ) : ?>
				<span class="vlt-section-title__subtitle"><?php echo $settings[ 'subtitle' ]; ?></span>
			<?php endif; ?>

			<?php if ( $settings[ 'title' ] ) : ?>

				<<?php echo esc_attr( $settings[ 'html_tag' ] ); ?> class="vlt-section-title__heading">

					<?php if ( $settings[ 'link' ][ 'url' ] ) : ?>
						<a <?php echo $this->get_render_attribute_string( 'link' ); ?>>
					<?php endif; ?>

					<?php echo $settings[ 'title' ]; ?>

					<?php if ( $settings[ 'link' ][ 'url' ] ) : ?>
						</a>
					<?php endif; ?>

				</<?php echo esc_attr( $settings[ 'html_tag' ] ); ?>>

			<?php endif; ?>

			<?php if ( $settings[ 'description' ] ) : ?>
				<p class="vlt-section-title__description"><?php echo $settings[ 'description' ]; ?></p>
			<?php endif; ?>

		</div>

	<?php

	}

}
