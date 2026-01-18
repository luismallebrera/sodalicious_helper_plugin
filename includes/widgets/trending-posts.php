<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

class sodathemes_widget_trending_posts extends WP_Widget {

	public function __construct() {
		$widget_details = array(
			'classname' => 'vlt_widget_trending_posts',
			'description' => esc_html__( 'Shows trending posts.', 'sodathemes' )
		);
		parent::__construct( 'sodathemes_widget_trending_posts', esc_html__( 'SODAThemes: Trending Posts', 'sodathemes' ), $widget_details );
	}

	public function widget( $args, $instance ) {

		if ( !isset( $args[ 'widget_id' ] ) ) {
			$args[ 'widget_id' ] = $this->id;
		}

		$title = !empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';

		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

		echo $args[ 'before_widget' ];

		$widget_id = $args[ 'widget_id' ];

		$trending_posts_number_of_posts = get_field( 'trending_posts_number_of_posts', 'widget_' . $widget_id );
		$trending_posts_layout = get_field( 'trending_posts_layout', 'widget_' . $widget_id );

		$post_args = array(
			'post_type' => 'post',
			'posts_per_page' => $trending_posts_number_of_posts,
			'orderby' => 'date',
			'order' => 'DESC',
			'ignore_sticky_posts' => true,
			'meta_query' => array(
				array(
					'key' => '_is_featured',
					'value' => 'yes',
				),
			)
		);
		$new_query = new WP_Query( $post_args );

		if ( $title ) {
			echo $args[ 'before_title' ] . $title . $args[ 'after_title' ];
		}

		switch( $trending_posts_layout ) {

			case 'list': ?>

				<?php if ( $new_query->have_posts() ) : while ( $new_query->have_posts() ) : $new_query->the_post(); ?>

					<div class="vlt-widget-post">

						<?php if ( has_post_thumbnail() ) : ?>

							<div class="vlt-widget-post__thumbnail">

								<a href="<?php the_permalink(); ?>">

									<?php the_post_thumbnail( 'thumbnail', array( 'loading' => 'lazy' ) ); ?>

								</a>

							</div>

						<?php endif; ?>

						<div class="vlt-widget-post__content">

							<span><time datetime="<?php the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time></span>

							<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

						</div>

					</div>

				<?php endwhile; endif; wp_reset_postdata(); ?>

			<?php

			break;

			case 'slider': ?>

				<div class="vlt-widget-post-slider swiper-container swiper">

					<div class="swiper-wrapper">

						<?php if ( $new_query->have_posts() ) : while ( $new_query->have_posts() ) : $new_query->the_post(); ?>

							<div class="swiper-slide">

								<article class="vlt-widget-post">

									<?php if ( has_post_thumbnail() ) : ?>

										<div class="vlt-widget-post__thumbnail">

											<a href="<?php the_permalink(); ?>">
												<?php the_post_thumbnail( 'sodalicious-800x600_crop', array( 'loading' => 'lazy' ) ); ?>
											</a>

										</div>

									<?php endif; ?>

									<div class="vlt-widget-post__content">

										<span><time datetime="<?php the_time( 'c' ); ?>"><?php echo get_the_date(); ?></time></span>

										<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

									</div>

								</article>

							</div>

						<?php endwhile; endif; wp_reset_postdata(); ?>

					</div>

					<div class="vlt-swiper-pagination"></div>

				</div>

			<?php

			break;

		}

		?>

		<?php echo $args[ 'after_widget' ];

	}

	public function form( $instance ) {

		$title = isset( $instance[ 'title' ] ) ? esc_attr( $instance[ 'title' ] ) : '';

		?>
		<p><label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'sodathemes' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" /></p>

		<?php

	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance[ 'title' ] = sanitize_text_field( $new_instance[ 'title' ] );
		return $instance;
	}
}