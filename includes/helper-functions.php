<?php

/**
 * @author: SODAThemes
 * @version: 1.0
 */

/**
 * Add contact methods
 */
if ( ! function_exists( 'sodathemes_add_contact_methods' ) ) {
	function sodathemes_add_contact_methods( $contactmethods ) {
		$contactmethods[ 'facebook' ] = esc_html__( 'Facebook URL', 'sodathemes' );
		$contactmethods[ 'instagram' ] = esc_html__( 'Instagram URL', 'sodathemes' );
		$contactmethods[ 'twitter' ] = esc_html__( 'Twitter URL', 'sodathemes' );
		$contactmethods[ 'tumblr' ] = esc_html__( 'Tumblr URL', 'sodathemes' );
		$contactmethods[ 'pinterest' ] = esc_html__( 'Pinterest URL', 'sodathemes' );

		return $contactmethods;
	}
}
add_filter( 'user_contactmethods', 'sodathemes_add_contact_methods' );

/**
 * Extend mime types
 */
if ( ! function_exists( 'sodathemes_mime_types' ) ) {
	function sodathemes_mime_types( $mimes ) {
		$mimes[ 'svg' ] = 'image/svg+xml';
		return $mimes;
	}
}
add_filter( 'upload_mimes', 'sodathemes_mime_types' );

/**
 * Share buttons
 */
if ( ! function_exists( 'sodathemes_get_post_share_buttons' ) ) {
	function sodathemes_get_post_share_buttons( $postID ) {
		$url = get_permalink( $postID );
		$title = get_the_title( $postID );

		$output = '<a href="javascript:;" class="vlt-social-icon vlt-social-icon--style-2 facebook" data-sharer="facebook" data-url="' . $url . '"><i class="socicon-facebook"></i></a>';

		$output .= '<a href="javascript:;" class="vlt-social-icon vlt-social-icon--style-2 twitter" data-sharer="twitter" data-title="' . $title . '" data-url="' . $url . '"><i class="socicon-twitter"></i></a>';

		$output .= '<a href="javascript:;" class="vlt-social-icon vlt-social-icon--style-2 pinterest" data-sharer="pinterest" data-url="' . $url . '"><i class="socicon-pinterest"></i></a>';

		$output .= '<a href="javascript:;" class="vlt-social-icon vlt-social-icon--style-2 linkedin" data-sharer="linkedin" data-url="' . $url . '"><i class="socicon-linkedin"></i></a>';

		return apply_filters( 'sodathemes/get_post_share_buttons', $output );
	}
}

/**
 * Register post type
 */
if ( ! function_exists( 'sodathemes_slide_register_custom_post' ) ) {

	function sodathemes_slide_register_custom_post() {

		$labels = array(
			'name' => esc_html__( 'Slides', 'sodathemes' ),
			'singular_name' => esc_html__( 'Slide', 'sodathemes' ),
			'add_new' => esc_html__( 'Add New Slide', 'sodathemes' ),
			'add_new_item' => esc_html__( 'Add New Slide', 'sodathemes' ),
			'edit_item' => esc_html__( 'Edit Slide', 'sodathemes' ),
			'new_item' => esc_html__( 'New Slide', 'sodathemes' ),
			'view_item' => esc_html__( 'View Slide', 'sodathemes' ),
			'search_items' => esc_html__( 'Search Slides', 'sodathemes' ),
			'not_found' => esc_html__( 'No Slide Found', 'sodathemes' ),
			'not_found_in_trash' => esc_html__( 'No slide found in Trash', 'sodathemes' )
		);

		$args = array(
			'labels' => $labels,
			'supports' => array( 'title', 'editor', 'elementor' ),
			'hierarchical' => false,
			'public' => false,
			'show_ui' => true,
			'show_in_menu' => true,
			'menu_position' => 5,
			'menu_icon' => 'dashicons-images-alt2',
			'show_in_admin_bar' => true,
			'show_in_nav_menus' => true,
			'can_export' => true,
			'has_archive' => false,
			'exclude_from_search' => false,
			'publicly_queryable' => true,
			'rewrite' => false,
			'capability_type' => 'page',
		);

		register_post_type( 'slide', $args );

	}

	add_action( 'init', 'sodathemes_slide_register_custom_post', 0 );

}

if ( ! function_exists( 'sodathemes_slide_custom_taxonomy' ) ) {

	function sodathemes_slide_custom_taxonomy() {

		$labels = array(
			'name' => _x( 'Slide Categories', 'Taxonomy General Name', 'sodathemes' ),
			'singular_name' => _x( 'Slide Category', 'Taxonomy Singular Name', 'sodathemes' ),
			'menu_name' => esc_html__( 'Slide Category', 'sodathemes' ),
			'all_items' => esc_html__( 'All Item Categories', 'sodathemes' ),
			'parent_item' => esc_html__( 'Parent Item', 'sodathemes' ),
			'parent_item_colon' => esc_html__( 'Parent Item:', 'sodathemes' ),
			'new_item_name' => esc_html__( 'New Item Category', 'sodathemes' ),
			'add_new_item' => esc_html__( 'Add New Item', 'sodathemes' ),
			'edit_item' => esc_html__( 'Edit Item', 'sodathemes' ),
			'update_item' => esc_html__( 'Update Item', 'sodathemes' ),
			'view_item' => esc_html__( 'View Item', 'sodathemes' ),
			'separate_items_with_commas' => esc_html__( 'Separate items with commas', 'sodathemes' ),
			'add_or_remove_items' => esc_html__( 'Add or remove items', 'sodathemes' ),
			'choose_from_most_used' => esc_html__( 'Choose from the most used', 'sodathemes' ),
			'popular_items' => esc_html__( 'Popular Items', 'sodathemes' ),
			'search_items' => esc_html__( 'Search Items', 'sodathemes' ),
			'not_found' => esc_html__( 'Not Found', 'sodathemes' ),
			'no_terms' => esc_html__( 'No items', 'sodathemes' ),
			'items_list' => esc_html__( 'Items list', 'sodathemes' ),
			'items_list_navigation' => esc_html__( 'Items list navigation', 'sodathemes' ),
		);

		$args = array(
			'labels' => $labels,
			'hierarchical' => true,
			'public' => true,
			'show_ui' => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud' => true,
		);

		register_taxonomy( 'slide_category', array( 'slide' ), $args );

	}

	add_action( 'init', 'sodathemes_slide_custom_taxonomy', 0 );

}