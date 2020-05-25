<?php
if (!function_exists('envo_storefront_generate_construct_footer')) :
    /**
     * Build footer
     */
    add_action('envo_storefront_generate_footer', 'envo_storefront_generate_construct_footer');

    function envo_storefront_generate_construct_footer() {
        ?>
        <div class="footer-credits-text text-center">
            <?php
            /* translators: %s: WordPress name with wordpress.org URL */
            printf(esc_html__('Proudly powered by %s', 'envo-storefront'), '<a href="' . esc_url(__('https://iti.gov.eg/', 'envo-storefront')) . '">' . esc_html__('ITI Students', 'envo-storefront') . '</a>');
            ?>
        </div> 
        <?php
    }

endif;

function custom_excerpt($post_excerpt){
    global $post;
    $newExcerpt = $post_excerpt."<a href='".get_permalink($post->ID)."'>Read more</a>";
    return $newExcerpt;
}

add_filter('the_excerpt','custom_excerpt');


add_action('wp_head','custom_theme_meta');

function custom_theme_meta(){
    echo '<meta name="author" content="Hajar">';
}


add_action( 'init', 'codex_book_init' );

function codex_book_init() {
	$labels = array(
		'name'               => _x( 'Books', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Book', 'post type singular name', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Book', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Book', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Books', 'your-plugin-textdomain' ),
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'book' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'book', $args );
}

add_action('init', 'create_custom_tax');

function create_custom_tax(){
    $labels = array(
        
        'name'               => _x( 'Tags', 'post type general name', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New Tag', 'book', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New Tag', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Tag', 'post type singular name', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Tag', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Tag', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Tags', 'your-plugin-textdomain' ),
	);
    $args = array(
        'label'              => __('tags'),
        'labels'             => $labels,
        'hierarchical'       => true,
    );

    register_taxonomy('tag','book', $args);
}