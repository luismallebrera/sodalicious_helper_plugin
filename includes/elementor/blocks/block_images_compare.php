<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Images_Compare extends Widget_Base {

	public function get_name() {
		return 'vlt-images-compare';
	}

	public function get_title() {
		return esc_html__( 'Images Compare', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-image-before-after sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'compare', 'photo', 'image', 'slider' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Images Compare', 'sodathemes' ),
			]
		);

		

		$this->add_control(
			'before_image', [
				'label' => esc_html__( 'Before Image', 'sodathemes' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_control(
			'after_image', [
				'label' => esc_html__( 'After Image', 'sodathemes' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_group_control(
			Group_Control_Image_Size::get_type(), [
				'name' => 'image', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'images-compare', 'class', 'vlt-images-compare' );

		?>

		<div <?php echo $this->get_render_attribute_string( 'images-compare' ); ?>>

			<div class="vlt-images-compare-images">

				<?php if ( $settings[ 'before_image' ][ 'url' ] ) : ?>

					<div class="vlt-images-compare-image-before">
						<?php echo Group_Control_Image_Size_2::get_attachment_image_html( $settings, 'image', 'before_image' ); ?>
					</div>

				<?php endif; ?>

				<?php if ( $settings[ 'after_image' ][ 'url' ] ) : ?>

					<div class="vlt-images-compare-image-after">
						<?php echo Group_Control_Image_Size_2::get_attachment_image_html( $settings, 'image', 'after_image' ); ?>
					</div>

				<?php endif; ?>

				<div class="vlt-images-compare-images-divider">

					<div class="vlt-images-compare-images-divider-button">
						<i class="ri-drag-move-line"></i>
					</div>

				</div>

			</div>

		</div>

		<?php

	}

}