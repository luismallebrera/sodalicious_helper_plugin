<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class Widget_SODAThemes_Single_Post extends Widget_Base {

	use \SODAThemes_Elementor\Traits\Helper;

	public function get_name() {
		return 'vlt-single-post';
	}

	public function get_title() {
		return esc_html__( 'Single Post', 'sodathemes' );
	}

	public function get_icon() {
		return 'eicon-post sodathemes-badge';
	}

	public function get_categories() {
		return [ 'sodalicious-elements' ];
	}

	public function get_keywords() {
		return [ 'post', 'single', 'news', 'article' ];
	}

	protected function register_controls() {

		$first_level = 0;

		// ANCHOR
		$this->start_controls_section(
			'section_' . $first_level++, [
				'label' => esc_html__( 'Single Post', 'sodathemes' ),
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
					'style-4' => esc_html__( 'Style 4', 'sodathemes' ),
					'style-5' => esc_html__( 'Style 5', 'sodathemes' ),
					'style-6' => esc_html__( 'Style 6', 'sodathemes' ),
					'style-also-like' => esc_html__( 'Also like', 'sodathemes' )
				],
			]
		);

		$this->add_control(
			'post_id', [
				'label' => esc_html__( 'Select Post', 'sodathemes' ),
				'type' => Controls_Manager::SELECT2,
				'label_block' => true,
				'options' => $this->sodathemes_get_post_name(),
			]
		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		if ( ! $settings[ 'post_id' ] ) {
			return;
		}

		$args = array(
			'post_type' => 'post',
			'p' => $settings[ 'post_id' ],
			'post_status' => 'publish',
		);

		$new_query = new \WP_Query( $args );

	?>

	<?php if ( $new_query->have_posts() ) : while ( $new_query->have_posts() ) : $new_query->the_post(); ?>

		<?php get_template_part( 'template-parts/post/post', $settings[ 'style' ] ); ?>

	<?php endwhile; endif; wp_reset_postdata(); wp_reset_query(); ?>

	<?php

	}

}
