<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Pricing_Table extends Widget_Base {

	use \SODAThemes_Elementor\Traits\Helper;

	public function get_name() {
		return 'vlt-pricing-table';
	}

	public function get_title() {
		return esc_html__( 'Pricing Table', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-price-table sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'price', 'table', 'plan', 'pricing' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Header', 'sodathemes' ),
			]
		);



		$this->add_control(
			'title', [
				'label' => esc_html__( 'Title', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => 'Standard',
			]
		);

		$this->add_control(
			'description', [
				'label' => esc_html__( 'Description', 'sodathemes' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Enter your description', 'sodathemes' ),
			]
		);

		$this->add_control(
			'title_html_tag', [
				'label' => esc_html__( 'HTML Tag', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'h4',
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

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Pricing', 'sodathemes' ),
			]
		);

		$this->add_control(
			'currency_symbol', [
				'label' => esc_html__( 'Curency Symbol', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => '$'
			]
		);

		$this->add_control(
			'price', [
				'label' => esc_html__( 'Price', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => '39',
			]
		);

		$this->add_control(
			'sale', [
				'label' => esc_html__( 'Sale', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'On', 'sodathemes' ),
				'label_off' => esc_html__( 'Off', 'sodathemes' ),
			]
		);

		$this->add_control(
			'original_price', [
				'label' => esc_html__( 'Original Price', 'sodathemes' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 59,
				'condition' => [
					'sale' => 'yes',
				],
			]
		);

		$this->add_control(
			'period', [
				'label' => esc_html__( 'Period', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => '/ Mo',
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Features', 'sodathemes' ),
			]
		);

		$repeater = new Repeater();

		$repeater->add_control(
			'text', [
				'label' => esc_html__( 'Text', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'List Item', 'sodathemes' ),
			]
		);

		$repeater->add_control(
			'active', [
				'label' => esc_html__( 'Active', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

		$this->add_control(
			'features_list', [
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'text' => esc_html__( 'List Item #1', 'sodathemes' ),
						'active' => 'yes',
					],
					[
						'text' => esc_html__( 'List Item #2', 'sodathemes' ),
						'active' => 'yes',
					],
					[
						'text' => esc_html__( 'List Item #3', 'sodathemes' ),
						'active' => '',
					],
				],
				'title_field' => '{{{ text }}}',
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Footer', 'sodathemes' ),
			]
		);

		$this->add_control(
			'footer_template', [
				'label' => esc_html__( 'Choose Template', 'sodathemes' ),
				'type' => Controls_Manager::SELECT2,
				'options' => $this->sodathemes_get_elementor_templates(),
				'label_block' => true,
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Price Table', 'sodathemes' ),
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
					'{{WRAPPER}} .vlt-pricing-table' => 'text-align: {{VALUE}};'
				],
			]
		);

		$this->add_control(
			'background_color', [
				'label' => esc_html__( 'Background Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-pricing-table' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(), [
				'name' => 'box_shadow',
				'selector' => '{{WRAPPER}} .vlt-pricing-table',
			]
		);

		$this->add_responsive_control(
			'padding', [
				'label' => esc_html__( 'Padding', 'sodathemes' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', 'rem', '%' ],
				'selectors' => [
					'{{WRAPPER}} .vlt-pricing-table' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Header', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Title', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'title_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-pricing-table__title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} .vlt-pricing-table__title',
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Description', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_control(
			'description_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-pricing-table__subtitle' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'description_typography',
				'selector' => '{{WRAPPER}} .vlt-pricing-table__subtitle',
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Pricing', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Price', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'price_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-pricing-table__price' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'price_typography',
				'selector' => '{{WRAPPER}} .vlt-pricing-table__price',
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Currency', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'currency_typography',
				'selector' => '{{WRAPPER}} .currency',
				'condition' => [
					'currency_symbol!' => '',
				],
			]
		);

		$this->add_control(
			'currency_size', [
				'label' => esc_html__( 'Size', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .currency' => 'font-size: calc({{SIZE}}em/100)',
				],
				'condition' => [
					'currency_symbol!' => '',
				],
			]
		);

		$this->add_control(
			'currency_position', [
				'label' => esc_html__( 'Position', 'sodathemes' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'before' => [
						'title' => esc_html__( 'Before', 'sodathemes' ),
						'icon' => 'eicon-h-align-left',
					],
					'after' => [
						'title' => esc_html__( 'After', 'sodathemes' ),
						'icon' => 'eicon-h-align-right',
					],
				],
				'default' => 'before',
			]
		);

		$this->add_control(
			'currency_vertical_position', [
				'label' => esc_html__( 'Vertical Position', 'sodathemes' ),
				'type' => Controls_Manager::CHOOSE,
				'label_block' => false,
				'options' => [
					'top' => [
						'title' => esc_html__( 'Top', 'sodathemes' ),
						'icon' => 'eicon-v-align-top',
					],
					'middle' => [
						'title' => esc_html__( 'Middle', 'sodathemes' ),
						'icon' => 'eicon-v-align-middle',
					],
					'bottom' => [
						'title' => esc_html__( 'Bottom', 'sodathemes' ),
						'icon' => 'eicon-v-align-bottom',
					],
				],
				'default' => 'top',
				'selectors_dictionary' => [
					'top' => 'flex-start',
					'middle' => 'center',
					'bottom' => 'flex-end',
				],
				'selectors' => [
					'{{WRAPPER}} .currency' => 'align-self: {{VALUE}}',
				],
				'condition' => [
					'currency_symbol!' => '',
				],
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Original Price', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'sale' => 'yes',
					'original_price!' => '',
				],
			]
		);

		$this->add_control(
			'original_price_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .price-original' => 'color: {{VALUE}}',
				],
				'condition' => [
					'sale' => 'yes',
					'original_price!' => '',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'original_price_typography',
				'selector' => '{{WRAPPER}} .price-original',
				'condition' => [
					'sale' => 'yes',
					'original_price!' => '',
				],
			]
		);

		$this->add_control(
			'original_price_indent', [
				'label' => esc_html__( 'Price Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .price-original' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'sale' => 'yes',
					'original_price!' => '',
				],
			]
		);

		$this->add_control(
			'original_price_vertical_position', [
				'label' => esc_html__( 'Vertical Position', 'sodathemes' ),
				'type' => Controls_Manager::CHOOSE,
				'label_block' => false,
				'options' => [
					'top' => [
						'title' => esc_html__( 'Top', 'sodathemes' ),
						'icon' => 'eicon-v-align-top',
					],
					'middle' => [
						'title' => esc_html__( 'Middle', 'sodathemes' ),
						'icon' => 'eicon-v-align-middle',
					],
					'bottom' => [
						'title' => esc_html__( 'Bottom', 'sodathemes' ),
						'icon' => 'eicon-v-align-bottom',
					],
				],
				'selectors_dictionary' => [
					'top' => 'flex-start',
					'middle' => 'center',
					'bottom' => 'flex-end',
				],
				'default' => 'bottom',
				'selectors' => [
					'{{WRAPPER}} .price-original' => 'align-self: {{VALUE}}',
				],
				'condition' => [
					'sale' => 'yes',
					'original_price!' => '',
				],
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Period', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before'
			]
		);

		$this->add_control(
			'period_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .period' => 'color: {{VALUE}}',
				],
				'condition' => [
					'period!' => '',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'period_typography',
				'selector' => '{{WRAPPER}} .period',
				'condition' => [
					'period!' => '',
				],
			]
		);

		$this->add_control(
			'period_vertical_position', [
				'label' => esc_html__( 'Vertical Position', 'sodathemes' ),
				'type' => Controls_Manager::CHOOSE,
				'label_block' => false,
				'options' => [
					'top' => [
						'title' => esc_html__( 'Top', 'sodathemes' ),
						'icon' => 'eicon-v-align-top',
					],
					'middle' => [
						'title' => esc_html__( 'Middle', 'sodathemes' ),
						'icon' => 'eicon-v-align-middle',
					],
					'bottom' => [
						'title' => esc_html__( 'Bottom', 'sodathemes' ),
						'icon' => 'eicon-v-align-bottom',
					],
				],
				'selectors_dictionary' => [
					'top' => 'flex-start',
					'middle' => 'center',
					'bottom' => 'flex-end',
				],
				'default' => 'bottom',
				'selectors' => [
					'{{WRAPPER}} .period' => 'align-self: {{VALUE}}',
				],
				'condition' => [
					'period!' => '',
				],
			]
		);

		$this->add_control(
			'period_indent', [
				'label' => esc_html__( 'Period Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .period' => 'margin-left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'period!' => '',
				],
			]
		);

		$this->add_responsive_control(
			'price_indent', [
				'label' => esc_html__( 'Price Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .vlt-pricing-table__price' => 'margin-top: {{SIZE}}{{UNIT}};',
				]
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Features', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'features_list_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-pricing-table__content' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'features_list_typography',
				'selector' => '{{WRAPPER}} .vlt-pricing-table__content',
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Icon', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'icon_color', [
				'label' => esc_html__( 'Icon Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-pricing-table__content i' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'icon_background_color', [
				'label' => esc_html__( 'Background Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-pricing-table__content li:not(.active) i' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'icon_active_background_color', [
				'label' => esc_html__( 'Active Background Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-pricing-table__content li.active i' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_responsive_control(
			'features_list_indent', [
				'label' => esc_html__( 'Features List Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'separator' => 'before',
				'selectors' => [
					'{{WRAPPER}} .vlt-pricing-table__content li + li' => 'margin-top: {{SIZE}}{{UNIT}};',
				]
			]
		);

		$this->add_responsive_control(
			'features_indent', [
				'label' => esc_html__( 'Features Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-pricing-table__content' => 'margin-top: {{SIZE}}{{UNIT}};',
				]
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Footer', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_responsive_control(
			'footer_indent', [
				'label' => esc_html__( 'Footer Indent', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .vlt-pricing-table__footer' => 'margin-top: {{SIZE}}{{UNIT}};',
				]
			]
		);

		$this->end_controls_section();

	}

	private function render_currency_symbol( $symbol, $location ) {

		$currency_position = $this->get_settings( 'currency_position' );
		$location_setting = ! empty( $currency_position ) ? $currency_position : 'before';

		if ( ! empty( $symbol ) && $location === $location_setting ) {
			echo '<span class="currency currency--' . $location . '">' . $symbol . '</span>';
		}

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'price-table', 'class', 'vlt-pricing-table' );

		?>

		<div <?php echo $this->get_render_attribute_string( 'price-table' ); ?>>

			<?php if ( $settings[ 'title' ] || $settings[ 'description' ] ) : ?>

				<div class="vlt-pricing-table__header">

					<?php if ( ! empty( $settings[ 'title' ] ) ) : ?>

						<<?php echo $settings[ 'title_html_tag' ]; ?> class="vlt-pricing-table__title">
							<?php echo $settings[ 'title' ]; ?>
						</<?php echo $settings[ 'title_html_tag' ]; ?>>

					<?php endif; ?>

					<?php if ( ! empty( $settings[ 'description' ] ) ) : ?>

						<p class="vlt-pricing-table__subtitle">
							<?php echo $settings[ 'description' ]; ?>
						</p>

					<?php endif; ?>

				</div>

			<?php endif; ?>

			<div class="vlt-pricing-table__price">

				<?php if ( 'yes' === $settings[ 'sale' ] && ! empty( $settings[ 'original_price' ] ) ) : ?>

					<div class="price-original">
						<?php echo $settings[ 'currency_symbol' ] . $settings[ 'original_price' ]; ?>
					</div>

				<?php endif; ?>

				<?php $this->render_currency_symbol( $settings[ 'currency_symbol' ], 'before' ); ?>

				<?php if ( ! empty( $settings[ 'price' ] ) ) : ?>
					<span class="price"><?php echo $settings[ 'price' ]; ?></span>
				<?php endif; ?>

				<?php $this->render_currency_symbol( $settings[ 'currency_symbol' ], 'after' ); ?>

				<?php if ( ! empty( $settings[ 'period' ] ) ) : ?>
					<span class="period"><?php echo $settings[ 'period' ]; ?></span>
				<?php endif; ?>

			</div>

			<?php if ( ! empty( $settings[ 'features_list' ] ) ) : ?>

				<div class="vlt-pricing-table__content">

					<ul>

						<?php foreach ( $settings[ 'features_list' ] as $item ) : ?>

							<li class="<?php echo $item[ 'active' ] ? 'active' : ''; ?>">

								<?php if ( ! empty( $item[ 'text' ] ) ) : ?>

									<i class="ri-check-fill"></i>

									<span>
										<?php echo $item[ 'text' ]; ?>
									</span>

								<?php endif; ?>

							</li>

						<?php endforeach; ?>

					</ul>

				</div>

			<?php endif; ?>

			<?php if ( ! empty( $settings[ 'footer_template' ] ) ) : ?>

				<div class="vlt-pricing-table__footer">

					<?php

						if ( 'publish' !== get_post_status( $settings[ 'footer_template' ] ) ) {
							return;
						}

						echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $settings[ 'footer_template' ], true );

					?>

				</div>

			<?php endif; ?>

		</div>

		<?php

	}

}
