<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Heading extends Widget_Base {

	public function get_name() {
		return 'vlt-heading';
	}

	public function get_title() {
		return esc_html__( 'Heading', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-t-letter sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'heading', 'title', 'text' ];
	}

	public static function get_display_titles() {
		return [
			'none' => esc_html__( 'None', 'sodathemes' ),
			'display-1' => esc_html__( 'Display 1', 'sodathemes' ),
			'display-2' => esc_html__( 'Display 2', 'sodathemes' )
		];
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
			'title', [
				'label' => esc_html__( 'Title', 'sodathemes' ),
				'type' => Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'Enter your title', 'sodathemes' ),
				'default' => esc_html__( 'Add Your Heading Text Here', 'sodathemes' ),
			]
		);

		$this->add_control(
			'html_tag', [
				'label' => esc_html__( 'HTML Tag', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'h1',
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
			'display_title', [
				'label' => esc_html__( 'Display Title', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'none',
				'options' => self::get_display_titles()
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

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'text_typography',
				'selector' => '{{WRAPPER}} .vlt-heading',
			]
		);

		$this->add_control(
			'text_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-heading' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'stroke', [
				'label' => esc_html__( 'Stroke', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'separator' => 'before'
			]
		);

		$this->add_control(
			'stroke_fill_width', [
				'label' => esc_html__( 'Stroke Fill Width', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'size' => 1
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-heading' => '-webkit-text-stroke-width: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'stroke!' => '',
				],
			]
		);

		$this->add_control(
			'blend_mode', [
				'label' => esc_html__( 'Blend Mode', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'' => esc_html__( 'Normal', 'sodathemes' ),
					'multiply' => esc_html__( 'Multiply', 'sodathemes' ),
					'screen' => esc_html__( 'Screen', 'sodathemes' ),
					'overlay' => esc_html__( 'Overlay', 'sodathemes' ),
					'darken' => esc_html__( 'Darken', 'sodathemes' ),
					'lighten' => esc_html__( 'Lighten', 'sodathemes' ),
					'color-dodge' => esc_html__( 'Color Dodge', 'sodathemes' ),
					'saturation' => esc_html__( 'Saturation', 'sodathemes' ),
					'color' => esc_html__( 'Color', 'sodathemes' ),
					'difference' => esc_html__( 'Difference', 'sodathemes' ),
					'exclusion' => esc_html__( 'Exclusion', 'sodathemes' ),
					'hue' => esc_html__( 'Hue', 'sodathemes' ),
					'luminosity' => esc_html__( 'Luminosity', 'sodathemes' ),
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-heading' => 'mix-blend-mode: {{VALUE}}',
				],
				'separator' => 'before'
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'heading', 'class', 'vlt-heading' );

		if ( $settings[ 'display_title' ] !== 'none' ) {
			$this->add_render_attribute( 'heading', 'class', 'vlt-' . $settings[ 'display_title' ] );
		}

		if ( $settings[ 'link' ][ 'url' ] ) {

			$this->add_render_attribute( 'link', [
				'href' => $settings[ 'link' ][ 'url' ]
			] );

			if ( $settings[ 'link' ][ 'is_external' ] ) {
				$this->add_render_attribute( 'link', 'target', '_blank' );
			}

			if ( $settings[ 'link' ][ 'nofollow' ] ) {
				$this->add_render_attribute( 'link', 'rel', 'nofollow' );
			}

			if ( $settings[ 'stroke' ] !== 'yes' ) {
				$this->add_render_attribute( 'link', 'class', 'vlt-underline-link' );
			}

		}

		if ( $settings[ 'stroke' ] == 'yes' ) {
			$this->add_render_attribute( 'heading', 'class', 'vlt-is-stroke' );
		}

		?>

		<<?php echo esc_attr( $settings[ 'html_tag' ] ); ?> <?php echo $this->get_render_attribute_string( 'heading' ); ?>>

			<?php if ( $settings[ 'link' ][ 'url' ] ) : ?>
				<a <?php echo $this->get_render_attribute_string( 'link' ); ?>>
			<?php endif; ?>

			<?php if ( $settings[ 'title' ] ) : ?>
				<?php echo $settings[ 'title' ]; ?>
			<?php endif; ?>

			<?php if ( $settings[ 'link' ][ 'url' ] ) : ?>
				</a>
			<?php endif; ?>

		</<?php echo esc_attr( $settings[ 'html_tag' ] ); ?>>

	<?php

	}

}