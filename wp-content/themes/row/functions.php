<?php
/**

 Functions
 
 */
 
 
//.................. BASIC FUNCTIONS .................. //

/* language include.*/
$lang = TEMPLATE_PATH . '/languages';
load_theme_textdomain('cebolang', $lang);

//.................. BASIC FUNCTIONS .................. //

/* Below is an include to default custom fields for the posts.*/
include(TEMPLATEPATH . '/library/simple_functions.php');


/* Include Super Furu Custom Options Panel*/
require_once(TEMPLATEPATH .  '/options/options_panel.php');


 /* ................. CUSTOM POST TYPES .................... */
/* Below is an include to a default custom post type.*/
include(TEMPLATEPATH . '/library/post_types.php');

 /* ................. SOME OPTIONS FOR POSTS .................... */
/* Below is an include to a few options for your posts.*/
include(TEMPLATEPATH . '/options/single-options.php'); 


 /* ................. SOME OPTIONS FOR SLIDES .................... */
/* Below is an include to a few options for your slides.*/
// include(TEMPLATEPATH . '/library/videobox.php'); 


 /* ................. SOME OPTIONS FOR PROJECTS .................... */
/* Below is an include to a few options for your projects.*/
include(TEMPLATEPATH . '/options/project-options.php'); 
include(TEMPLATEPATH . '/options/email-signup-options.php'); 


 /* ................. SOME OPTIONS FOR PROJECTS .................... */
/* Below is an include to a few options for your projects.*/
include(TEMPLATEPATH . '/options/local-options.php'); 


 /* ................. SOME OPTIONS FOR PROJECTS .................... */
/* Below is an include to a few options for your projects.*/
include(TEMPLATEPATH . '/options/amenity-options.php'); 


 /* ................. SOME OPTIONS FOR PRESS .................... */
/* Below is an include to a few options for press releases.*/
include(TEMPLATEPATH . '/options/press-options.php'); 
include(TEMPLATEPATH . '/options/weather-options.php');

 /* ................. SOME OPTIONS FOR PRESS .................... */
/* Below is an include to a few options for press releases.*/
include(TEMPLATEPATH . '/library/repeatable-fields-metabox.php'); 

 /* ................. SOME OPTIONS FOR AMENITIES BOSCOBOX .................... */
/* Below is an include to a few options for bosco box photos.*/
include(TEMPLATEPATH . '/options/amenities-options-repeatable-fields.php'); 




 /* ................. SOME OPTIONS FOR Imagegalleries .................... */
/* Below is an include to a few options for press releases.*/
// include(TEMPLATEPATH . '/options/imagegalleries-options.php'); 
include(TEMPLATEPATH . '/options/imagegalleries-options.php'); 


 /* ................. METABOXES .................... */
/* Below is an include to a few options for your projects.*/
include(TEMPLATEPATH . '/library/metaboxes/meta_box.php'); 


 /* ................. CUSTOM FIELDS .................... */
/* Below is an include to a few options for your projects.*/
include(TEMPLATEPATH . '/library/custom_fields.php'); 

/* .................. SHORTCODES ...…… */
/* Below is an include to default custom fields for the posts.*/
include(TEMPLATEPATH . '/library/shortcodes.php');



/* .................. SHORTCODES ...…… */
/* Below is an include to default custom fields for the posts.*/
include(TEMPLATEPATH . '/library/widgets.php');


add_filter('show_admin_bar', '__return_false');

function is_subpage() {
	global $post;                              // load details about this page

	if ( is_page() && $post->post_parent ) {   // test to see if the page has a parent
		return $post->post_parent;             // return the ID of the parent post

	} else {                                   // there is no parent so ...
		return false;                          // ... the answer to the question is false
	}
}

// function get_avatar_url($author_id, $size){
//     $get_avatar = get_avatar( $author_id, $size );
//     preg_match("/src='(.*?)'/i", $get_avatar, $matches);
//     return ( $matches[1] );
// }



// Removed shortcodes from the content
function  strip_shortcode_gallery( $content ) {
	preg_match_all( '/'. get_shortcode_regex() .'/s', $content, $matches, PREG_SET_ORDER );
	if ( ! empty( $matches ) ) {
		foreach ( $matches as $shortcode ) {
			if ( 'gallery' === $shortcode[2] ) {
				$pos = strpos( $content, $shortcode[0] );
				if ($pos !== false)
					return substr_replace( $content, '', $pos, strlen($shortcode[0]) );
			}
		}
	}
	return $content;
};

// Get attached images & spits out a list of them.
function nerdy_get_images($size = 'thumbnail', $limit = '0', $offset = '0') {
	global $post;
	$images = get_children( array('post_parent' => $post->ID, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID') );
	if ($images) {
		$num_of_images = count($images);
		if ($offset > 0) : $start = $offset--; else : $start = 0; endif;
		if ($limit > 0) : $stop = $limit+$start; else : $stop = $num_of_images; endif;
		$i = 0;
		foreach ($images as $image) {
			if ($start <= $i and $i < $stop) {
			$img_title = $image->post_title;   // title.
			$img_description = $image->post_content; // description.
			$img_caption = $image->post_excerpt; // caption.
			$img_url = wp_get_attachment_url($image->ID); // url of the full size image.
			$preview_array = image_downsize( $image->ID, $size );
			$img_preview = $preview_array[0]; // thumbnail or medium image to use for preview.
			?>
			<li>
				<a href="<?php echo $img_url; ?>"><img src="<?php echo $img_preview; ?>" alt="<?php echo $img_caption; ?>" title="<?php echo $img_title; ?>"></a>
			</li>
			<?php
			}
			$i++;
		}
	}
}

function get_post_gallery_imagess() {
	$attachment_ids = array();
	$pattern = get_shortcode_regex();
	$images = array();
	if (preg_match_all( '/'. $pattern .'/s', get_the_content(), $matches ) ) {
		//finds the "gallery" shortcode and puts the image ids in an associative array at $matches[3]
		$count = count($matches[3]);      //in case there is more than one gallery in the post.
		for ($i = 0; $i < $count; $i++){
			$atts = shortcode_parse_atts( $matches[3][$i] );
			if ( isset( $atts['ids'] ) ){
				$attachment_ids = explode( ',', $atts['ids'] );
				$attachementsCount = count($attachment_ids);
				if ($attachementsCount > 0){
					for ($j = 0; $j < $attachementsCount ; $j++) { 
						$image = array();
						$attachmentId = intval($attachment_ids[$j]);
						$image['id'] = $attachmentId;
						$image['full'] = wp_get_attachment_image_src($attachmentId, 'full');
						$image['medium'] = wp_get_attachment_image_src($attachmentId, 'medium');
						$image['thumbnail'] = wp_get_attachment_image_src($attachmentId, 'thumbnail');
						$image['captioner'] = wp_get_attachment_metadata($attachmentId, true);
						array_push($images, $image);
					}
				}
			}
		}
	}
	return $images;
}



function wpb_get_post_views($postID){
	$count_key = 'wpb_post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return "";
	}
	return $count.' ';
}


function wpb_set_post_views($postID) {
	$count_key = 'wpb_post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	}else{
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function wpb_track_post_views ($post_id) {
	if ( !is_single() ) return;
	if ( empty ( $post_id) ) {
		global $post;
		$post_id = $post->ID;    
	}
	wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');

function click_taxonomy_dropdown($taxonomy) { ?>
	<form action="/" class="caldago" method="post">
	<select name="cat" id="cat" class="postform">
	<option value="-1">Category</option>
	<?php
	$terms = get_terms($taxonomy);
	foreach ($terms as $term) {
		printf( '<option class="level-0" value="%s">%s</option>', $term->slug, $term->name );
	}
	echo '</select></form>';
	?>
<?php }

if ( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

/* ................. ADDITIONAL INFO FOR SHORTCODES .................... */
/* Below is an include to a few options for your projects.*/

define( 'SS_BASE_DIR', TEMPLATEPATH . '/' );
define( 'SS_BASE_URL', get_template_directory_uri() . '/' );


if ( !function_exists('ss_framework_admin_scripts') ) {

	// Backend Scripts
	function ss_framework_admin_scripts( $hook ) {

		if( $hook == 'post.php' || $hook == 'post-new.php' ) {
			wp_register_script( 'tinymce_scripts', SS_BASE_URL . 'library/tinymce/js/scripts.js', array('jquery'), false, true );
			wp_enqueue_script('tinymce_scripts');
		}

	}
	add_action('admin_enqueue_scripts', 'ss_framework_admin_scripts');
	
}

function tt($image,$width,$height){
	return bloginfo('template_url') . "/library/thumb.php?src=$image&w=$width&h=$height";
}

function the_slug($echo=true){
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  if( $echo ) echo $slug;
  do_action('after_slug', $slug);
  return $slug;
}

add_action( 'after_setup_theme', 'customSize_setup' );
function customSize_setup() {
	add_image_size( 'customSize_soft_1024xany', 1024, 9999 );
	add_image_size( '705x450', 705, 450, true );
	add_image_size( 'customSize_soft_600xany', 600, 9999 );
}

// add x-default to hreflang
function x_default_hreflang() {
    $languages = icl_get_languages('skip_missing=1');
    foreach($languages as $l){
        if ( $l['language_code'] == 'en' ) { // set your default language
            $x_default_url = $l['url'];
            $output='<link rel="alternate" hreflang="x-default" href="' . $x_default_url . '" />'  . PHP_EOL;
            echo $output;
        } 
    }
}
add_action('wp_head','x_default_hreflang',1);