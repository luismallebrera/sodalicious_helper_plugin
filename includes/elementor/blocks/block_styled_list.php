<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Styled_List extends Widget_Base {

	public function get_name() {
		return 'vlt-styled-list';
	}

	public function get_title() {
		return esc_html__( 'Styled List', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-post-list sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'style', 'list' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Styled List', 'sodathemes' ),
			]
		);

		

		$this->add_control(
			'style', [
				'label' => esc_html__( 'Style', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style-1',
				'options' => [
					'style-1' => esc_html__( 'Style 1', 'sodathemes' ),
					'style-2' => esc_html__( 'Style 2', 'sodathemes' ),
					'style-3' => esc_html__( 'Style 3', 'sodathemes' )
				],
			]
		);

		$repeater = new Repeater();

		$repeater->add_control(
			'text', [
				'label' => esc_html__( 'Text', 'sodathemes' ),
				'type' => Controls_Manager::TEXTAREA,
			]
		);

		$this->add_control(
			'list', [
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'text' => esc_html__( 'List Item #1', 'sodathemes' ),
					],
					[
						'text' => esc_html__( 'List Item #2', 'sodathemes' ),
					],
					[
						'text' => esc_html__( 'List Item #3', 'sodathemes' ),
					],
				],
				'title_field' => '{{{ text }}}',
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Styled List', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'General', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'list_indent', [
				'label' => esc_html__( 'List Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} li + li' => 'margin-top: {{SIZE}}{{UNIT}};',
				]
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Text', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'text_typography',
				'selector' => '{{WRAPPER}} .vlt-styled-list li',
			]
		);

		$this->add_control(
			'text_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-styled-list li' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Icon', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'style' => 'style-1',
				],
			]
		);

		$this->add_control(
			'icon_color', [
				'label' => esc_html__( 'Icon Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-styled-list i' => 'color: {{VALUE}};',
				],
				'condition' => [
					'style' => 'style-1',
				],
			]
		);

		$this->add_control(
			'icon_background_color', [
				'label' => esc_html__( 'Icon Background Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-styled-list i' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'style' => 'style-1',
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'styled-list', [
			'class' => [
				'vlt-styled-list',
				'vlt-styled-list--' . $settings[ 'style' ]
			]
		] );

		?>

		<ul <?php echo $this->get_render_attribute_string( 'styled-list' ); ?>>

			<?php

				switch( $settings[ 'style' ] ) {

					case 'style-1':

					if ( $settings[ 'list' ] ) {

						foreach ( $settings[ 'list' ] as $item ) {
							echo '<li><i class="ri-check-fill"></i>' . $item[ 'text' ] . '</li>';
						}

					}

					break;

					case 'style-2':
					case 'style-3':

					if ( $settings[ 'list' ] ) {

						foreach ( $settings[ 'list' ] as $item ) {
							echo '<li>' . $item[ 'text' ] . '</li>';
						}

					}

					break;

				}

			?>

		</ul>

		<?php

	}

}