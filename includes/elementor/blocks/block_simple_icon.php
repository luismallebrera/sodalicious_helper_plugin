<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Simple_Icon extends Widget_Base {

	public function get_name() {
		return 'vlt-simple-icon';
	}

	public function get_title() {
		return esc_html__( 'Simple Icon', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-favorite sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'simple', 'icon' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Simple Icon', 'sodathemes' ),
			]
		);



		$this->add_control(
			'source', [
				'label' => esc_html__( 'Source', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'icon' => esc_html__( 'Icon', 'sodathemes' ),
					'image' => esc_html__( 'Icon Image', 'sodathemes' ),
					'class' => esc_html__( 'Icon Class', 'sodathemes' ),
				],
			]
		);

		$this->add_control(
			'image', [
				'label' => esc_html__( 'Icon', 'sodathemes' ),
				'type' => Controls_Manager::MEDIA,
				'condition' => [
					'source' => 'image'
				]
			]
		);

		$this->add_group_control(
			Group_Control_Image_Size::get_type(), [
				'name' => 'image', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `testimonial_image_size` and `testimonial_image_custom_dimension`.
				'default' => 'full',
				'condition' => [
					'source' => 'image'
				]
			]
		);

		$this->add_control(
			'icon', [
				'label' => esc_html__( 'Icon', 'sodathemes' ),
				'type' => Controls_Manager::ICONS,
				'condition' => [
					'source' => 'icon'
				]
			]
		);

		$this->add_control(
			'class', [
				'label' => esc_html__( 'Icon Class', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'condition' => [
					'source' => 'class'
				]
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
				'selectors' => [
					'{{WRAPPER}}' => 'text-align: {{VALUE}};'
				],
			]
		);

		$this->add_control(
			'icon_size', [
				'label' => esc_html__( 'Icon Size', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-simple-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'icon_color', [
				'label' => esc_html__( 'Icon Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-simple-icon' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'icon', 'class', 'vlt-simple-icon' );

		?>

		<div <?php echo $this->get_render_attribute_string( 'icon' ); ?>>

			<?php

				switch( $settings[ 'source' ] ) {

					case 'icon':

						if ( $settings[ 'icon' ][ 'value' ] ) {

							Icons_Manager::render_icon( $settings[ 'icon' ], [ 'aria-hidden' => 'true' ] );

						}

						break;

					case 'image':

						if ( $settings[ 'image' ][ 'url' ] ) {

							echo Group_Control_Image_Size_2::get_attachment_image_html( $settings, 'image' );

						}

						break;

					case 'class':

						if ( $settings[ 'class' ] ) {

							echo '<i class="' . $settings[ 'class' ] . '"></i>';

						}

						break;
				}


			?>

		</div>

		<?php

	}

}
