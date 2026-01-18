<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Justified_Gallery extends Widget_Base {

	public function get_name() {
		return 'vlt-justified-gallery';
	}

	public function get_title() {
		return esc_html__( 'Justified Gallery', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-gallery-justified sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'gallery', 'photo', 'image', 'justified' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Justified Gallery', 'sodathemes' ),
			]
		);


		$this->add_control(
			'gallery', [
				'label' => esc_html__( 'Add Images', 'sodathemes' ),
				'type' => Controls_Manager::GALLERY,
			]
		);

		$this->add_group_control(
			Group_Control_Image_Size::get_type(), [
				'name' => 'gallery', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
			]
		);

		$this->add_control(
			'mask', [
				'label' => esc_html__( 'Mask', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
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

		$this->add_control(
			'row_height', [
				'label' => esc_html__( 'Row Height', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 600,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 360
				]
			]
		);

		$this->add_control(
			'margins', [
				'label' => esc_html__( 'Margins', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 150,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 30
				]
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'justified-gallery', [
			'class' => 'vlt-justified-gallery',
			'data-row-height' => $settings[ 'row_height' ][ 'size' ],
			'data-margins' => $settings[ 'margins' ][ 'size' ]
		] );

		$aos_delay = 100;

		?>

		<div <?php echo $this->get_render_attribute_string( 'justified-gallery' ); ?>>

			<?php

				foreach ( $settings[ 'gallery' ] as $image ) {

					$this->add_render_attribute( 'link-' . $image[ 'id' ], [
						'href' => $image[ 'url' ],
						'data-fancybox' => $this->get_id()
					] );

					echo '<div class="vlt-simple-image">';

						if ( $settings[ 'mask' ] == 'yes' ) :
							echo '<div class="vlt-simple-image__mask" data-aos="image-mask-animation" data-aos-delay="' . $aos_delay . '"><div class="inside"></div></div>';
						endif;

						$image_url = Group_Control_Image_Size_2::get_attachment_image_src( $image['id'], 'gallery', $settings );

						echo '<a ' . $this->get_render_attribute_string( 'link-' . $image[ 'id' ] ) .'>';

						echo '<img src="' . esc_attr( $image_url ) . '" alt="' . esc_attr( Control_Media::get_image_alt( $image ) ) . '" loading="lazy"/>';

						echo '</a>';

					echo '</div>';

					$aos_delay += 100;

				}

			?>

		</div>

		<?php

	}

}
