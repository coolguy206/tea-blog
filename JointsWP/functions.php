<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php'); 
require_once(get_template_directory().'/assets/functions/menu-walkers.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php'); 

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php'); 

/*Add Prev and Next Tags to Paginated Single Posts*/
function add_rel_prev_next_paginated_posts(){
global $post;
$paged = intval(get_query_var('paged')); 

if(is_single()){
	$perm_link = get_permalink();

# 1: Count number of paginated pages.
if( isset( $post->post_content ) ){
	$num_pages = substr_count( $post->post_content, '<!--nextpage-->' ) + 1;
} 

# 2: If pagination exists add the tags.
if($num_pages > 1){
	$page = intval( get_query_var('page') ); # Get Page number
	if( $page == 0 ){ $page = 1; }
	
	# 3: Add rel="prev" meta tag.
	if( ($page > 1) && ($page <= $num_pages) ){
		$prev_page_num = ($page - 1);
		if($page == 2){	$prev_page_num = '';}
		$full_url = user_trailingslashit(trailingslashit($perm_link) . $prev_page_num);
		echo '<link rel="prev" href="'. esc_url($full_url) .'" />';
		echo "\n";
	}
	
	# 4: Add rel="next" meta tag.
	if( ($page >= 1) && ($page < $num_pages) ){
		$nxt_page_num = ($page + 1);
		$full_url = user_trailingslashit(trailingslashit($perm_link) . $nxt_page_num);
		echo '<link rel="next" href="'. esc_url($full_url) .'" />';
		echo "\n";
	}
	
}}}
add_action('wp_head', 'add_rel_prev_next_paginated_posts', 2);
add_filter( 'jetpack_allow_per_post_subscriptions', '__return_true' );
?>

