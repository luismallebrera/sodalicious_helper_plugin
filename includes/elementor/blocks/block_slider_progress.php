<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Slider_Progress extends Widget_Base {

	public function get_name() {
		return 'vlt-slider-progress';
	}

	public function get_title() {
		return esc_html__( 'Slider Progress', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-post-navigation sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'navigation', 'slider', 'controls', 'progress' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Slider Progress', 'sodathemes' ),
			]
		);

		$this->add_control(
			'direction', [
				'label' => esc_html__( 'Style', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'horizontal',
				'options' => [
					'horizontal' => esc_html__( 'Horizontal', 'sodathemes' ),
					'vertical' => esc_html__( 'Vertical', 'sodathemes' ),
				],
			]
		);

		$this->add_control(
			'color', [
				'label' => esc_html__( 'Color', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'none',
				'options' => [
					'none' => esc_html__( 'None', 'sodathemes' ),
					'white' => esc_html__( 'White', 'sodathemes' ),
					'black' => esc_html__( 'Black', 'sodathemes' )
				],
			]
		);

		$this->add_control(
			'link', [
				'label' => esc_html__( 'Link', 'sodathemes' ),
				'type' => Controls_Manager::URL,
				'placeholder' => 'https://your-link.com',
				'separator' => 'before',
				'condition' => [
					'direction!' => 'vertical'
				]
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( [
			'slider-progress' => [
				'class' => 'vlt-swiper-progress',
				'data-direction' => $settings[ 'direction' ]
			]
		] );

		if ( $settings[ 'color' ] !== 'none' ) {
			$this->add_render_attribute( '_wrapper', 'class', 'has-' . $settings[ 'color' ] . '-color' );
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

		}

		?>

		<div <?php echo $this->get_render_attribute_string( 'slider-progress' ); ?>>

			<?php

				switch( $settings[ 'direction' ] ) {

					case 'vertical':

						echo '<span class="current"></span>';
						echo '<div class="bar"><span></span></div>';
						echo '<span class="total"></span>';

					break;

					case 'horizontal':

						echo '<span class="current"></span>';
						echo '<span class="sep">/</span>';
						echo '<span class="total"></span>';
						echo '<div class="bar"><span></span></div>';

						if ( $settings[ 'link' ][ 'url' ] ) {
							echo '<a ' . $this->get_render_attribute_string( 'link' ) . '><i class="ri-layout-grid-fill"></i></a>';
						}

					break;

				}

			?>

		</div>

		<?php

	}

}