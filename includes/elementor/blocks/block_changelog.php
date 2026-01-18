<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Changelog extends Widget_Base {

	public function get_name() {
		return 'vlt-changelog';
	}

	public function get_title() {
		return esc_html__( 'Changelog', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-history sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodathemes-elements' ];
	}

	public function get_keywords() {
		return [ 'changelog', 'history', 'version' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Changelog', 'sodathemes' ),
			]
		);

		

		$this->add_control(
			'date', [
				'label' => esc_html__( 'Date', 'sodathemes' ),
				'type' => Controls_Manager::DATE_TIME,
				'picker_options' => [
					'enableTime' => 'false'
				]
			]
		);

		$this->add_control(
			'version', [
				'label' => esc_html__( 'Version', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
			]
		);

		$this->add_control(
			'description', [
				'label' => esc_html__( 'Description', 'sodathemes' ),
				'type' => Controls_Manager::WYSIWYG,
				'separator' => 'after'
			]
		);

		$repeater = new Repeater();

		$repeater->add_control(
			'type', [
				'label' => esc_html__( 'Type', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'new',
				'options' => [
					'new' => esc_html__( 'New', 'sodathemes' ),
					'tweak' => esc_html__( 'Tweak', 'sodathemes' ),
					'fix' => esc_html__( 'Fix', 'sodathemes' ),
					'update' => esc_html__( 'Update', 'sodathemes' ),
				],
			]
		);

		$repeater->add_control(
			'text', [
				'label' => esc_html__( 'Text', 'sodathemes' ),
				'type' => Controls_Manager::TEXTAREA,
			]
		);

		$this->add_control(
			'list', [
				'label' => esc_html__( 'Content', 'sodathemes' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'title_field' => '[{{{ type }}}] {{{ text }}}',
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
				'label' => esc_html__( 'Date', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'date_typography',
				'selector' => '{{WRAPPER}} .vlt-changelog__date',
			]
		);

		$this->add_control(
			'date_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-changelog__date' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Description', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), [
				'name' => 'description_typography',
				'selector' => '{{WRAPPER}} .vlt-changelog__description',
			]
		);

		$this->add_control(
			'description_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-changelog__description' => 'color: {{VALUE}};',
				],
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
				'selector' => '{{WRAPPER}} li',
			]
		);

		$this->add_control(
			'text_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} li' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( 'changelog', 'class', 'vlt-changelog' );

		$badge = [
			'new' => esc_html__( 'New', 'sodathemes' ),
			'tweak' => esc_html__( 'Tweak', 'sodathemes' ),
			'fix' => esc_html__( 'Fix', 'sodathemes' ),
			'update' => esc_html__( 'Update', 'sodathemes' )
		];

		?>

		<div <?php echo $this->get_render_attribute_string( 'changelog' ); ?>>

			<?php if ( $settings[ 'version' ] ) : ?>
				<span class="vlt-changelog__version badge"><?php echo esc_html( $settings[ 'version' ] ); ?></span>
			<?php endif; ?>

			<?php if ( $settings[ 'date' ] ) : ?>

				<div class="vlt-changelog__date h6"><?php echo date( 'm M, Y', strtotime( $settings[ 'date' ] ) ); ?></div>

			<?php endif; ?>

			<div class="vlt-changelog__more">

				<?php

					if ( $settings[ 'description' ] ) :
						echo '<small class="vlt-changelog__description">' . wp_kses_post( $settings[ 'description' ] ) . '</small>';
					endif;

				?>

				<?php if ( $settings[ 'list' ] ) : ?>

					<ul>

						<?php

							foreach ( $settings[ 'list' ] as $item ) {

								echo '<li><span class="badge ' . array_search( $badge[ $item[ 'type' ] ], $badge ) . '">' . $badge[ $item[ 'type' ] ] . '</span>' . $item[ 'text' ] . '</li>';

							}

						?>

					</ul>

				<?php endif; ?>

			</div>

		</div>

		<?php

	}

}