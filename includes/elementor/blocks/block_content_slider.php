<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Content_Slider extends Widget_Base {

	use \SODAThemes_Elementor\Traits\Helper;

	public function get_name() {
		return 'vlt-content-slider';
	}

	public function get_title() {
		return esc_html__( 'Content Slider', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-slider-push sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'slider', 'content', 'carousel' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Slider', 'sodathemes' ),
			]
		);

		

		$slides_to_show = range( 1, 4 );
		$slides_to_show = array_combine( $slides_to_show, $slides_to_show );

		$this->add_responsive_control(
			'slides_to_show', [
				'label' => esc_html__( 'Slides to Show', 'sodathemes' ),
				'description' => esc_html__( 'Number of slides per view.', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'auto' => esc_html__( 'Auto', 'sodathemes' ),
				] + $slides_to_show,
				'desktop_default' => 1,
				'tablet_default' => 1,
				'mobile_default' => 1,
				'frontend_available' => true,
			]
		);

		$this->add_responsive_control(
			'slides_to_scroll', [
				'label' => esc_html__( 'Slides to Scroll', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'description' => esc_html__( 'Set numbers of slides to define and enable group sliding.', 'sodathemes' ),
				'options' => $slides_to_show,
				'desktop_default' => 1,
				'tablet_default' => 1,
				'mobile_default' => 1,
				'frontend_available' => true,
			]
		);

		$this->add_control(
			'gap', [
				'label' => esc_html__( 'Gap', 'sodathemes' ),
				'description' => esc_html__( 'Distance between slides.', 'sodathemes' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px' ],
				'range' => [
					'px' => [
						'min' => -500,
						'max' => 500,
						'step' => 1,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 0,
				]
			]
		);

		$this->add_control(
			'slides_centered', [
				'label' => esc_html__( 'Centered Slides', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'no',
			]
		);

		$this->add_control(
			'navigation_anchor', [
				'label' => esc_html__( 'Navigation Anchor', 'sodathemes' ),
				'description' => esc_html__( 'Enter class / identifier that the navigation has.', 'sodathemes' ),
				'type' => Controls_Manager::TEXT,
				'separator' => 'before',
			]
		);

		$this->end_controls_section();

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Query Settings', 'sodathemes' ),
			]
		);

		$this->add_control(
			'show_by', [
				'label' => esc_html__( 'Show By', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'show_by_cat',
				'options' => [
					'show_by_id' => esc_html__( 'Show By ID', 'sodathemes' ),
					'show_by_cat' => esc_html__( 'Show By Category', 'sodathemes' ),
				],
			]
		);

		$this->add_control(
			'slide_id', [
				'label' => esc_html__( 'Select Slide', 'sodathemes' ),
				'type' => Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
				'options' => $this->sodathemes_get_post_name( 'slide' ),
				'condition' => [
					'show_by' => 'show_by_id',
				]
			]
		);

		$this->add_control(
			'slide_cat', [
				'label' => esc_html__( 'Select Category', 'sodathemes' ),
				'type' => Controls_Manager::SELECT2,
				'label_block' => true,
				'multiple' => true,
				'options' => $this->sodathemes_get_taxonomies( 'slide_category' ),
				'condition' => [
					'show_by' => 'show_by_cat',
				]
			]
		);

		$this->add_control(
			'max_slides', [
				'label' => esc_html__( 'Max Slides', 'sodathemes' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 3,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'custom_order', [
				'label' => esc_html__( 'Custom order', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'no',
				'separator' => 'before',
			]
		);

		$this->add_control(
			'orderby', [
				'label' => esc_html__( 'Orderby', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'none',
				'options' => [
					'none' => esc_html__( 'None','sodathemes' ),
					'ID' => esc_html__( 'ID','sodathemes' ),
					'date' => esc_html__( 'Date','sodathemes' ),
					'name' => esc_html__( 'Name','sodathemes' ),
					'title' => esc_html__( 'Title','sodathemes' ),
					'comment_count' => esc_html__( 'Comment count','sodathemes' ),
					'rand' => esc_html__( 'Random','sodathemes' ),
				],
				'condition' => [
					'custom_order' => 'yes',
				]
			]
		);

		$this->add_control(
			'order', [
				'label' => esc_html__( 'Order', 'sodathemes' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => [
					'DESC' => esc_html__( 'Descending', 'sodathemes' ),
					'ASC' => esc_html__( 'Ascending', 'sodathemes' ),
				],
				'condition' => [
					'custom_order' => 'yes',
				]
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

		$this->add_control(
			'loop', [
				'label' => esc_html__( 'Loop', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->add_control(
			'autoplay', [
				'label' => esc_html__( 'Autoplay', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
			]
		);

		$this->add_control(
			'autoplay_speed', [
				'label' => esc_html__( 'Autoplay Speed', 'sodathemes' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 5000,
				'condition' => [
					'autoplay' => 'yes'
				]
			]
		);

		$this->add_control(
			'slider_offset', [
				'label' => esc_html__( 'Slider Offset', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
			]
		);

		$this->add_control(
			'mousewheel', [
				'label' => esc_html__( 'Mousewheel', 'sodathemes' ),
				'type' => Controls_Manager::SWITCHER,
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		// prepend slider settings
		$slide_settings = [
			'slides_to_show' => $settings[ 'slides_to_show' ],
			'slides_to_show_tablet' => $settings[ 'slides_to_show_tablet' ],
			'slides_to_show_mobile' => $settings[ 'slides_to_show_mobile' ],
			'slides_to_scroll' => $settings[ 'slides_to_scroll' ],
			'slides_to_scroll_tablet' => $settings[ 'slides_to_scroll_tablet' ],
			'slides_to_scroll_mobile' => $settings[ 'slides_to_scroll_mobile' ]
		];

		$this->add_render_attribute( 'content-slider', [
			'class' => 'vlt-content-slider swiper-container swiper',
			'data-navigation-anchor' => $settings[ 'navigation_anchor' ],
			'data-gap' => $settings[ 'gap' ][ 'size' ],
			'data-loop' => $settings[ 'loop' ],
			'data-speed' => $settings[ 'speed' ],
			'data-autoplay' => $settings[ 'autoplay' ],
			'data-autoplay-speed' => $settings[ 'autoplay_speed' ],
			'data-slides-centered' => $settings[ 'slides_centered' ],
			'data-slider-offset' => $settings[ 'slider_offset' ],
			'data-mousewheel' => $settings[ 'mousewheel' ],
			'data-slide-settings' => json_encode( $slide_settings )
		] );

		// prepend query
		$args = array(
			'post_type' => 'slide',
			'posts_per_page' => $settings[ 'max_slides' ],
			'post_status' => 'publish',
		);

		if ( $settings[ 'custom_order' ] == 'yes' ) {
			$args[ 'orderby' ] = $settings[ 'orderby' ];
			$args[ 'order' ] = $settings[ 'order' ];
		}

		$slide_post_ids = [];

		switch ( $settings[ 'show_by' ] ) {

			case 'show_by_id':
				$args[ 'post__in' ] = $settings[ 'slide_id' ];
				break;

			case 'show_by_cat':
				$get_slides_categories = $settings[ 'slide_cat' ];
				$slider_cats = str_replace( ' ', '', $get_slides_categories );
				if ( '0' != $get_slides_categories ) {
					if ( is_array( $slider_cats ) && count( $slider_cats ) > 0 ) {
						$field_name = is_numeric( $slider_cats[0] ) ? 'term_id' : 'slug';
						$args[ 'tax_query' ] = array(
							array(
								'taxonomy' => 'slide_category',
								'terms' => $slider_cats,
								'field' => $field_name,
								'include_children' => false
							)
						);
					}
				}
				break;
		}

		if ( ! empty( $settings[ 'slide_id' ] ) || ! empty( $settings[ 'slide_cat' ] ) ) {

			$new_query = new \WP_Query( $args );
			if ( $new_query->have_posts() ) : while ( $new_query->have_posts() ) : $new_query->the_post();
				$slide_post_ids[] = get_the_ID();
			endwhile; endif;
			wp_reset_postdata(); wp_reset_query();

		} else {
			echo sprintf( __( 'Select Query or create your first slide <a href="%s" target="_blank">here</a>!', 'sodathemes' ), admin_url('edit.php?post_type=slide' ) );
			return;
		}

		?>

		<div <?php echo $this->get_render_attribute_string( 'content-slider' ); ?>>

			<div class="swiper-wrapper">

				<?php foreach( $slide_post_ids as $slide_id ) : ?>

					<div class="swiper-slide">

						<?php echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $slide_id, true ); ?>

					</div>

				<?php endforeach; ?>

			</div>

		</div>

	<?php

	}

}