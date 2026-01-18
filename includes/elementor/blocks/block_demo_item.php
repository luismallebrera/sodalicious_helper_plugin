<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Demo_Item extends Widget_Base {

	public function get_name() {
		return 'vlt-demo-item';
	}

	public function get_title() {
		return esc_html__( 'Demo Item', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-image-box sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'demo', 'item', 'message' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Demo Item', 'sodathemes' ),
			]
		);

		

		$this->add_control(
			'image', [
				'label' => esc_html__( 'Image', 'sodathemes' ),
				'type' => Controls_Manager::MEDIA,
			]
		);

		$this->add_group_control(
			Group_Control_Image_Size::get_type(), [
				'name' => 'image', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
			]
		);

		$this->add_control(
			'title', [
				'label' => esc_html__( 'Title', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
			]
		);

		$this->add_control(
			'badge', [
				'label' => esc_html__( 'Badge', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
			]
		);

		$this->add_control(
			'link', [
				'label' => esc_html__( 'Link', 'sodathemes' ),
				'type' => Controls_Manager::URL,
				'separator' => 'before'
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
				],
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

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'demo-item', 'class', 'vlt-demo-item' );

		if ( $settings[ 'link' ][ 'url' ] ) {
			$this->add_render_attribute( 'link', 'href', $settings[ 'link' ][ 'url' ] );

			if ( $settings[ 'link' ][ 'is_external' ] ) {
				$this->add_render_attribute( 'link', 'target', '_blank' );
			}

			if ( $settings[ 'link' ][ 'nofollow' ] ) {
				$this->add_render_attribute( 'link', 'rel', 'nofollow' );
			}

		}

		?>

		<div <?php echo $this->get_render_attribute_string( 'demo-item' ); ?>>

			<?php

				if ( ! empty( $settings[ 'image' ][ 'url' ] ) ) :

					echo '<div class="vlt-demo-item-image">';

						if ( $settings[ 'link' ][ 'url' ] ) :
							echo '<a ' . $this->get_render_attribute_string( 'link' ) . '>';
						endif;

						echo Group_Control_Image_Size_2::get_attachment_image_html( $settings, 'image' );

						if ( $settings[ 'link' ][ 'url' ] ) :
							echo '</a>';
						endif;

						if ( $settings[ 'badge' ] ) {
							echo '<span class="badge">' . $settings['badge'] . '</span>';
						}

					echo '</div>';

				endif;

			?>

			<div class="vlt-demo-item-content">

				<?php if ( $settings[ 'title' ] ) : ?>

					<?php
						$title_html = $settings[ 'title' ];
						if ( $settings[ 'link' ][ 'url' ] ) :
							$title_html = '<a ' . $this->get_render_attribute_string( 'link' ) . '>' . $title_html . '</a>';
						endif;
					?>

					<<?php echo $settings['title_html_tag']; ?> class="vlt-demo-item-title">
						<?php echo $title_html; ?>
					</<?php echo $settings['title_html_tag']; ?>>

				<?php endif; ?>

			</div>

		</div>

		<?php

	}

}