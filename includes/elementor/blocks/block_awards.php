<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Awards extends Widget_Base {

	public function get_script_depends() {
		return [ 'swiper' ];
	}

	public function get_style_depends() {
		return [ 'swiper' ];
	}

	public function get_name() {
		return 'vlt-awards';
	}

	public function get_title() {
		return esc_html__( 'Awards', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-rating sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'time', 'line', 'timeline', 'awards' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Awards', 'sodathemes' ),
			]
		);

		

		$repeater = new Repeater();

		$repeater->add_control(
			'date', [
				'label' => esc_html__( 'Date', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
			]
		);

		$repeater->add_control(
			'title', [
				'label' => esc_html__( 'Title', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
			]
		);

		$repeater->add_control(
			'text', [
				'label' => esc_html__( 'Text', 'sodathemes' ),
				'type' => Controls_Manager::TEXTAREA,
			]
		);

		$repeater->add_control(
			'link', [
				'label' => esc_html__( 'Link', 'sodathemes' ),
				'type' => Controls_Manager::URL,
			]
		);

		$this->add_control(
			'items', [
				'label' => esc_html__( 'List Items', 'sodathemes' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'date' => '2018',
						'title' => 'CSS Design Awards',
						'text' => 'Site of the day',
						'link' => [ 'url'=> '#' ]
					],
					[
						'date' => '2018',
						'title' => 'Awwwards',
						'text' => 'Honorable Mention',
						'link' => [ 'url'=> '#' ]
					],
					[
						'date' => '2018',
						'title' => 'The Webby Awards',
						'text' => 'Official Honor',
						'link' => [ 'url'=> '#' ]
					],
					[
						'date' => '2017',
						'title' => 'Awwwards',
						'text' => 'Site of the day',
						'link' => [ 'url'=> '#' ]
					],
					[
						'date' => '2017',
						'title' => 'CSS Design Awards',
						'text' => 'Site of the day',
						'link' => [ 'url'=> '#' ]
					],
					[
						'date' => '2017',
						'title' => 'CSS Design Awards',
						'text' => 'Site of the day',
						'link' => [ 'url'=> '#' ]
					],
					[
						'date' => '2017',
						'title' => 'The Lovie Awards',
						'text' => 'Award Winner',
						'link' => [ 'url'=> '#' ]
					],
					[
						'date' => '2017',
						'title' => 'Wadline',
						'text' => 'Summer 2017 awards winner',
						'link' => [ 'url'=> '#' ]
					],
				],
				'title_field' => '{{{ date }}} - {{{ title }}}',
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
			'speed', [
				'label' => esc_html__( 'Animation Speed', 'sodathemes' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 1000,
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'General', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Line', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'line_color', [
				'label' => esc_html__( 'Border Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-awards__list-date::after' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Dot', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_control(
			'dot_border_color', [
				'label' => esc_html__( 'Border Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-awards__list-date::before' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'dot_background_color', [
				'label' => esc_html__( 'Background Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-awards__list-date::before' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Date', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_control(
			'date_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-awards__list-date' => 'color: {{VALUE}};',
				]
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'date_typography',
				'selector' => '{{WRAPPER}} .vlt-awards__list-date'
			]
		);

		$this->add_responsive_control(
			'date_padding', [
				'label' => esc_html__( 'Padding', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', 'rem', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-awards__list-date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'List', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_responsive_control(
			'list_padding', [
				'label' => esc_html__( 'Padding', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', 'rem', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-awards__list' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Grid', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_responsive_control(
			'row_gap', [
				'label' => esc_html__( 'Row Gap', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-awards__grid' => 'grid-row-gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'column_gap', [
				'label' => esc_html__( 'Column Gap', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-awards__grid' => 'grid-column-gap: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'grid_padding', [
				'label' => esc_html__( 'Padding', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', 'rem', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-awards__grid' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Content', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Title', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'title_html_tag', [
				'label' => esc_html__( 'HTML Tag', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'h6',
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
			'title_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-awards-item__title' => 'color: {{VALUE}};',
				]
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .vlt-awards-item__title'
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Text', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_control(
			'text_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-awards-item__text' => 'color: {{VALUE}};',
				]
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'text_typography',
				'selector' => '{{WRAPPER}} .vlt-awards-item__text'
			]
		);

		$this->add_control(
			'text_indent', [
				'label' => esc_html__( 'Text Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-awards-item__text' => 'margin-top: {{SIZE}}{{UNIT}};',
				]
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'awards', [
			'class' => 'vlt-awards swiper-container swiper',
			'data-speed' => $settings[ 'speed' ],
			'data-cursor' => esc_html__( 'Drag', 'sodathemes' )
		] );

		usort( $settings[ 'items' ], function( $item1, $item2 ) {
			if ( $item1[ 'date' ] == $item2[ 'date' ] ) return 0;
			return $item1[ 'date' ] < $item2[ 'date' ] ? 1 : -1;
		} );

		$new_array = [];

		foreach ( $settings[ 'items' ] as $item ) :

			$new_array[ $item[ 'date' ] ][] = $item;

		endforeach;

		?>

		<div <?php echo $this->get_render_attribute_string( 'awards' ); ?>>

			<div class="swiper-wrapper">

				<?php

					foreach ( $new_array as $item => $key ) :

						echo '<div class="swiper-slide">';

							echo '<div class="vlt-awards__list">';

								echo '<span class="vlt-awards__list-date ' . $settings[ 'title_html_tag' ] . '">' . $item . '</span>';

								$award_grid_class = count ( $key ) > 3 ? 'vlt-awards__grid vlt-awards__grid--2-col' : 'vlt-awards__grid';

								echo '<div class="' . $award_grid_class . '">';

									foreach ( $key as $award ) :

										$link_key = 'link_' . $award[ '_id' ];

										if ( $award[ 'link' ][ 'url' ] ) {

											$this->add_render_attribute( $link_key, [
												'class' => 'vlt-underline-link',
												'href' => $award[ 'link' ][ 'url' ]
											] );

											if ( $award[ 'link' ][ 'is_external' ] ) {
												$this->add_render_attribute( $link_key, 'target', '_blank' );
											}

											if ( $award[ 'link' ][ 'nofollow' ] ) {
												$this->add_render_attribute( $link_key, 'rel', 'nofollow' );
											}

										}

										echo '<div class="vlt-awards-item">';

											if ( $award[ 'title' ] ) {

												echo '<' . $settings[ 'title_html_tag' ] . ' class="vlt-awards-item__title">';

												if ( $award[ 'link' ][ 'url' ] ) {
													echo '<a ' . $this->get_render_attribute_string( $link_key ) . '>';
												}

												echo $award[ 'title' ];

												if ( $award[ 'link' ][ 'url' ] ) {
													echo '</a>';
												}

												echo '</' . $settings[ 'title_html_tag' ] . '>';

											}

											if ( $award[ 'text' ] ) {
												echo '<p class="vlt-awards-item__text">' . $award[ 'text' ] . '</p>';
											}

										echo '</div>';

									endforeach;

								echo '</div>';

							echo '</div>';

						echo '</div>';

					endforeach;

				?>

			</div>

		</div>

	<?php

	}

}