<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Mask_Image extends Widget_Base {

	public function get_name() {
		return 'vlt-mask-image';
	}

	public function get_title() {
		return esc_html__( 'Mask Image', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-image sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'mask', 'photo', 'image' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Mask Image', 'sodathemes' ),
			]
		);



		$repeater = new Repeater();

		$repeater->add_control(
			'image', [
				'label' => esc_html__( 'Image', 'sodathemes' ),
				'type' => Controls_Manager::MEDIA,
			]
		);

		$repeater->add_control(
			'mask_image', [
				'label' => esc_html__( 'Mask Image', 'sodathemes' ),
				'type' => Controls_Manager::MEDIA,
			]
		);

		$repeater->add_group_control(
			Group_Control_Image_Size::get_type(), [
				'name' => 'image', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
			]
		);

		$repeater->add_control(
			'spin', [
				'label' => esc_html__( 'Spin', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
			]
		);

		$this->add_control(
			'images', [
				'label' => esc_html__( 'Images', 'sodathemes' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls()
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'mask-image', 'class', 'vlt-mask-image' );

		$index = count( $settings[ 'images' ] );

		?>

		<div <?php echo $this->get_render_attribute_string( 'mask-image' ); ?>>

			<?php foreach ( $settings[ 'images' ] as $image ) : ?>

				<?php if ( $image[ 'image' ][ 'url' ] ) : ?>

					<?php

						$style = 'z-index: ' . $index . ';';

						if ( $image[ 'mask_image' ][ 'url' ] ) {
							$style .= '--vlt-mask-image: url(' . wp_get_attachment_image_src( $image[ 'mask_image' ][ 'id' ], $image[ 'image_size' ] )[0] . ')';
						}

						echo wp_get_attachment_image( $image[ 'image' ][ 'id' ], $image[ 'image_size' ], false, [
							'class' => $image[ 'spin' ] == 'yes' ? 'spin' : '',
							'loading' => 'lazy',
							'style' => $style
						]);

					?>

				<?php endif; ?>

			<?php $index--; endforeach; ?>

		</div>

		<?php

	}

}
