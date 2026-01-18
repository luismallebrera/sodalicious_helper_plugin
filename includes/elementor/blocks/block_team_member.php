<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Team_Member extends Widget_Base {

	public function get_name() {
		return 'vlt-team-member';
	}

	public function get_title() {
		return esc_html__( 'Team Member', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-person sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'team', 'member', 'avatar' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Team Member', 'sodathemes' ),
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
					'style-3' => esc_html__( 'Style 3', 'sodathemes' ),
					'style-4' => esc_html__( 'Style 4', 'sodathemes' )
				],
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
				'default' => 'Margaret Watson',
			]
		);

		$this->add_control(
			'function', [
				'label' => esc_html__( 'Function', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'default' => 'Project Manager',
				'condition' => [
					'style!' => 'style-3'
				]
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Social Profiles', 'sodathemes' ),
				'condition' => [
					'style!' => 'style-2',
				],
			]
		);

		$this->add_control(
			'show_socials', [
				'label' => esc_html__( 'Show Socials', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$repeater = new Repeater();

		$repeater->add_control(
			'view', [
				'label' => esc_html__( 'View', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'icon' => 'Icon',
					'text' => 'Text',
				],
				'default' => 'text',
			]
		);

		$repeater->add_control(
			'icon', [
				'label' => esc_html__( 'Icon', 'sodathemes' ),
				'type' => Controls_Manager::ICONS,
				'fa4compatibility' => 'social',
				'condition' => [
					'view' => 'icon',
				],
			]
		);

		$repeater->add_control(
			'text', [
				'label' => esc_html__( 'Text', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'condition' => [
					'view' => 'text',
				],
			]
		);

		$repeater->add_control(
			'link', [
				'label' => esc_html__( 'Link', 'sodathemes' ),
				'type' => Controls_Manager::URL,
				'placeholder' => 'https://your-link.com',
			]
		);

		$this->add_control(
			'socials', [
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'view' => 'icon',
						'icon' => [
							'value' => 'fab fa-facebook-f',
							'library' => 'fa-brands'
						],
						'link' => [ 'url' => '#' ]
					],
					[
						'view' => 'icon',
						'icon' => [
							'value' => 'fab fa-twitter',
							'library' => 'fa-brands'
						],
						'link' => [ 'url' => '#' ]
					],
					[
						'view' => 'icon',
						'icon' => [
							'value' => 'fab fa-linkedin-in',
							'library' => 'fa-brands'
						],
						'link' => [ 'url' => '#' ]
					]
				],
				'condition' => [
					'show_socials' => 'yes',
				]
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Team Member', 'sodathemes' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'style!' => 'style-2',
				],
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
					'{{WRAPPER}} .vlt-team-member__title' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Function', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'function_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-team-member__function' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'heading_' . $first_level++, [
				'label' => esc_html__( 'Social', 'sodathemes' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'social_color', [
				'label' => esc_html__( 'Text Color', 'sodathemes' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .vlt-social-icon' => 'color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();

	}

	protected function render_socials( $instance ) {

		$this->add_render_attribute( 'socials', 'class', 'vlt-team-member__socials' );

		if ( $instance[ 'socials' ] ) : ?>

			<div <?php echo $this->get_render_attribute_string( 'socials' ); ?>>

				<?php foreach ( $instance[ 'socials' ] as $item ) : ?>

					<?php if ( ! empty( $item[ 'link' ][ 'url' ] ) ) : ?>

						<?php

							$this->add_render_attribute( 'social-link-' . $item[ '_id' ], [
								'class' => 'vlt-social-icon',
								'href' => $item[ 'link' ][ 'url' ]
							] );

							if ( $item[ 'link' ][ 'is_external' ] ) {
								$this->add_render_attribute( 'social-link-' . $item[ '_id' ], 'target', '_blank' );
							}

							if ( $item[ 'link' ][ 'nofollow' ] ) {
								$this->add_render_attribute( 'social-link-' . $item[ '_id' ], 'rel', 'nofollow' );
							}

							switch( $item[ 'view' ] ) {

								case 'icon':

									$this->add_render_attribute( 'social-link-' . $item[ '_id' ], [
										'class' => 'vlt-social-icon--style-2'
									] );

									break;

								case 'text':

									$this->add_render_attribute( 'social-link-' . $item[ '_id' ], [
										'class' => 'vlt-social-icon--style-1'
									] );

									break;

							}

						?>

						<a <?php echo $this->get_render_attribute_string( 'social-link-' . $item[ '_id' ] ); ?>>

							<?php

								switch( $item[ 'view' ] ) {

									case 'icon':

										if ( $item[ 'icon' ][ 'value' ] ) :

											Icons_Manager::render_icon( $item[ 'icon' ], [ 'aria-hidden' => 'true' ] );

										endif;

									break;

									case 'text':

										if ( $item[ 'text' ] ) :

											echo $item[ 'text' ];

										endif;

									break;

								}

							?>

						</a>

					<?php endif; ?>

				<?php endforeach; ?>

			</div>

		<?php endif;

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$this->add_render_attribute( [
			'team-member' => [
				'class' => [
					'vlt-team-member',
					'vlt-team-member--' . $settings[ 'style' ]
				]
			]
		] );

		if ( $settings[ 'style' ] == 'style-2' ) {
			$this->add_render_attribute( 'team-member', 'data-follow-info', '' );
		}

		?>

		<div <?php echo $this->get_render_attribute_string( 'team-member' ); ?>>

			<?php

				switch( $settings[ 'style' ] ) {

					case 'style-1':

						if ( ! empty( $settings[ 'image' ][ 'url' ] ) ) :

							echo '<div class="vlt-team-member__avatar">';

								echo Group_Control_Image_Size_2::get_attachment_image_html( $settings, 'image' );

								if ( $settings[ 'show_socials' ] == 'yes' ) {
									$this->render_socials( $settings );
								}

							echo '</div>';

						endif;

						echo '<div class="vlt-team-member__content">';

						if ( $settings[ 'title' ] ) {
							echo '<h5 class="vlt-team-member__title">' . $settings[ 'title' ] . '</h5>';
						}

						if ( $settings[ 'function' ] ) {
							echo '<span class="vlt-team-member__function">' . $settings[ 'function' ] . '</span>';
						}

						echo '</div>';

					break;

					case 'style-2':

						if ( ! empty( $settings[ 'image' ][ 'url' ] ) ) :

							echo '<div class="vlt-team-member__avatar">';

								echo Group_Control_Image_Size_2::get_attachment_image_html( $settings, 'image' );

							echo '</div>';

						endif;

						echo '<div class="vlt-team-member__content">';

						if ( $settings[ 'title' ] ) {
							echo '<h5 class="vlt-team-member__title" data-follow-info-title="">' . $settings[ 'title' ] . '</h5>';
						}

						if ( $settings[ 'function' ] ) {
							echo '<span class="vlt-team-member__function" data-follow-info-content="">' . $settings[ 'function' ] . '</span>';
						}

						echo '</div>';

					break;

					case 'style-3':

						if ( ! empty( $settings[ 'image' ][ 'url' ] ) ) :

							echo '<div class="vlt-team-member__avatar">';

								echo Group_Control_Image_Size_2::get_attachment_image_html( $settings, 'image' );

								echo '<div class="vlt-team-member__content">';

									if ( $settings[ 'title' ] ) {

										echo '<h5 class="vlt-team-member__text" data-marquee>';
											echo '<span data-marquee-text="' . $settings[ 'title' ] . '">' . $settings[ 'title' ] . '</span>';
											echo '<span data-marquee-text="' . $settings[ 'title' ] . '">' . $settings[ 'title' ] . '</span>';
											echo '<span data-marquee-text="' . $settings[ 'title' ] . '">' . $settings[ 'title' ] . '</span>';
										echo '</h5>';

									}

									if ( $settings[ 'show_socials' ] == 'yes' ) {
										$this->render_socials( $settings );
									}

								echo '</div>';

							echo '</div>';

						endif;

					break;

					case 'style-4':

						if ( ! empty( $settings[ 'image' ][ 'url' ] ) ) :

							echo '<div class="vlt-team-member__avatar">';

								echo Group_Control_Image_Size_2::get_attachment_image_html( $settings, 'image' );

								echo '<div class="vlt-team-member__content">';

									if ( $settings[ 'title' ] ) {
										echo '<h5 class="vlt-team-member__title">' . $settings[ 'title' ] . '</h5>';
									}

									if ( $settings[ 'function' ] ) {
										echo '<span class="vlt-team-member__function">' . $settings[ 'function' ] . '</span>';
									}

									if ( $settings[ 'show_socials' ] == 'yes' ) {
										$this->render_socials( $settings );
									}

								echo '</div>';

							echo '</div>';

						endif;

					break;

				}

			?>

		</div>

		<?php

	}

}