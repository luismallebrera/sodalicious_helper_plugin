<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Slider_Controls extends Widget_Base {

	public function get_name() {
		return 'vlt-slider-controls';
	}

	public function get_title() {
		return esc_html__( 'Slider Controls', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-post-navigation sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'navigation', 'slider', 'controls' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Slider Controls', 'sodathemes' ),
			]
		);

		

		$this->add_control(
			'navigation', [
				'label' => esc_html__( 'Navigation', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'both',
				'options' => [
					'both' => esc_html__( 'Both', 'sodathemes' ),
					'arrows' => esc_html__( 'Arrows', 'sodathemes' ),
					'fraction' => esc_html__( 'Fraction', 'sodathemes' )
				],
			]
		);

		$this->add_control(
			'arrows_style', [
				'label' => esc_html__( 'Arrows Style', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'icon' => esc_html__( 'Icon', 'sodathemes' ),
					'text' => esc_html__( 'Text', 'sodathemes' )
				],
				'condition' => [
					'navigation' => [ 'both', 'arrows' ],
				],
			]
		);

		$this->add_control(
			'prev_label', [
				'label' => esc_html__( 'Prev Label', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => 'Prev',
				'separator' => 'before',
				'condition' => [
					'navigation' => [ 'arrows', 'both' ],
					'arrows_style' => 'text'
				],
			]
		);

		$this->add_control(
			'next_label', [
				'label' => esc_html__( 'Next Label', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => 'Next',
				'condition' => [
					'navigation' => [ 'arrows', 'both' ],
					'arrows_style' => 'text'
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
					'{{WRAPPER}}' => 'text-align: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'text_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-slider-controls' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'slider-controls', 'class', 'vlt-slider-controls' );

		// prepend slider controls
		$show_fraction = ( in_array( $settings[ 'navigation' ], [ 'fraction', 'both' ] ) );
		$show_arrows = ( in_array( $settings[ 'navigation' ], [ 'arrows', 'both' ] ) );
		$arrows_style = $settings[ 'arrows_style' ];

		?>

		<div <?php echo $this->get_render_attribute_string( 'slider-controls' ); ?>>

			<?php if ( $show_arrows ) : ?>

				<span class="vlt-swiper-button-prev">

					<?php

						switch( $arrows_style ) {

							case 'icon':
								echo '<i class="ri-arrow-left-line"></i>';
							break;

							case 'text':
								echo $settings[ 'prev_label' ];
							break;

						}

					?>

				</span>

			<?php endif; ?>

			<?php if ( $show_fraction ) : ?>

				<span class="vlt-swiper-pagination"></span>

			<?php else: ?>

				<?php if ( $show_arrows ) : ?>

					<span class="sep">―</span>

				<?php endif; ?>

			<?php endif; ?>

			<?php if ( $show_arrows ) : ?>

				<span class="vlt-swiper-button-next">

					<?php

						switch( $arrows_style ) {

							case 'icon':
								echo '<i class="ri-arrow-right-line"></i>';
							break;

							case 'text':
								echo $settings[ 'next_label' ];
							break;

						}

					?>

				</span>

			<?php endif; ?>

		</div>

		<?php

	}

}