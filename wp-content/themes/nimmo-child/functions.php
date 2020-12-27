<?php

/**
 * Add child styles.
 * 
 * @author CaseThemes
 */
function nimmo_enqueue_styles()
{
    $parent_style = 'nimmo-style';
    
    wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array(
        $parent_style
    ));
    wp_enqueue_script('child-js', get_template_directory_uri() . '/assets/jquery-3.4.1.min.js', array( 'jquery' ));

}

add_action('wp_enqueue_scripts', 'nimmo_enqueue_styles');

/**
 * Load vc template dir.
 * 
 * @author CaseThemes
 */
if (function_exists("vc_set_shortcodes_templates_dir")) {
    vc_set_shortcodes_templates_dir(get_stylesheet_directory() . "/vc_templates/");
}



/*---------- Defer Script ---------*/
/*function defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'recaptcha__en.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );
*/

/*------------- Custom Post type team member ------------------*/

function create_posttype() {
//Register Services post type
register_post_type( 'team',
// CPT Options
array(
'labels' => array(
'name' => __( 'Team' ),
'singular_name' => __( 'Team' )
),
'public' => true,
'has_archive' => false,
'rewrite' => array('slug' => 'teams'),
'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
)
);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );



//Team Texonomy Creation
add_action( 'init', 'create_Categorys_nonhierarchical_taxonomy', 0 );
function create_Categorys_nonhierarchical_taxonomy()
{ 
      // Labels part for the GUI
   $labels = array(
       'name' => _x( 'Job Title', 'taxonomy general name' ),
       'singular_name' => _x( 'Job Title', 'taxonomy singular name' ),
       'search_items' =>  __( 'Search Job Title' ),
       'popular_items' => __( 'Popular Job Title' ),
       'all_items' => __( 'All Job Title' ),
       'parent_item' => null,
       'parent_item_colon' => null,
       'edit_item' => __( 'Edit Job Title' ),
       'update_item' => __( 'Update Job Title' ),
       'add_new_item' => __( 'Add New Job Title' ),
       'new_item_name' => __( 'New Job Title' ),
       'separate_items_with_commas' => __( 'Separate Job Title with commas' ),
       'add_or_remove_items' => __( 'Add or remove Job Title' ),
       'choose_from_most_used' => __( 'Choose from the most used Job Title' ),
       'menu_name' => __( 'Job Title' ),
   );
   // Now register the hierarchical taxonomy like tag
   register_taxonomy('job_title','team',array(
       'hierarchical' => true,
       'labels' => $labels,
       'show_ui' => true,
       'show_admin_column' => true,
       'update_count_callback' => '_update_post_term_count',
       'query_var' => true,
       'rewrite' => array( 'slug' => 'job_title' ),
   ));
   $labels1 = array(
       'name' => _x( 'Technology', 'taxonomy general name' ),
       'singular_name' => _x( 'Technology', 'taxonomy singular name' ),
       'search_items' =>  __( 'Search Gruop' ),
       'popular_items' => __( 'Popular Gruop' ),
       'all_items' => __( 'All Technology' ),
       'parent_item' => null,
       'parent_item_colon' => null,
       'edit_item' => __( 'Edit Technology' ),
       'update_item' => __( 'Update Technology' ),
       'add_new_item' => __( 'Add New Technology' ),
       'new_item_name' => __( 'New Technology Name' ),
       'separate_items_with_commas' => __( 'Separate Technology with commas' ),
       'add_or_remove_items' => __( 'Add or remove Technology' ),
       'choose_from_most_used' => __( 'Choose from the most used Gruop' ),
       'menu_name' => __( 'Technology Group' ),
   );
    register_taxonomy('technology','team',array(
       'hierarchical' => true,
       'labels' => $labels1,
       'show_ui' => true,
       'show_admin_column' => true,
       'update_count_callback' => '_update_post_term_count',
       'query_var' => true,
       'rewrite' => array( 'slug' => 'technology' ),
   ));
        // Labels part for location
     $labels2 = array(
       'name' => _x( 'Location', 'taxonomy general name' ),
       'singular_name' => _x( 'Location', 'taxonomy singular name' ),
       'search_items' =>  __( 'Search Location' ),
       'popular_items' => __( 'Popular Location' ),
       'all_items' => __( 'All Location' ),
       'parent_item' => null,
       'parent_item_colon' => null,
       'edit_item' => __( 'Edit Location' ),
       'update_item' => __( 'Update Location' ),
       'add_new_item' => __( 'Add New Location' ),
       'new_item_name' => __( 'New Location Name' ),
       'separate_items_with_commas' => __( 'Separate Location with commas' ),
       'add_or_remove_items' => __( 'Add or remove Location' ),
       'choose_from_most_used' => __( 'Choose from the most used Location' ),
       'menu_name' => __( 'Location' ),
   );
    // Now register the location taxonomy like tag
    register_taxonomy('location','team',array(
       'hierarchical' => true,
       'labels' => $labels2,
       'show_ui' => true,
       'show_admin_column' => true,
       'update_count_callback' => '_update_post_term_count',
       'query_var' => true,
       'rewrite' => array( 'slug' => 'location' ),
   ));

    // Labels part for type
     $labels3 = array(
       'name' => _x( 'Type', 'taxonomy general name' ),
       'singular_name' => _x( 'Type', 'taxonomy singular name' ),
       'search_items' =>  __( 'Search Type' ),
       'popular_items' => __( 'Popular Type' ),
       'all_items' => __( 'All Type' ),
       'parent_item' => null,
       'parent_item_colon' => null,
       'edit_item' => __( 'Edit Type' ),
       'update_item' => __( 'Update Type' ),
       'add_new_item' => __( 'Add New Type' ),
       'new_item_name' => __( 'New Type Name' ),
       'separate_items_with_commas' => __( 'Separate Type with commas' ),
       'add_or_remove_items' => __( 'Add or remove Type' ),
       'choose_from_most_used' => __( 'Choose from the most used Type' ),
       'menu_name' => __( 'Type' ),
   );
     // Now register the type taxonomy like tag
    register_taxonomy('type','team',array(
       'hierarchical' => true,
       'labels' => $labels3,
       'show_ui' => true,
       'show_admin_column' => true,
       'update_count_callback' => '_update_post_term_count',
       'query_var' => true,
       'rewrite' => array( 'slug' => 'type' ),
   ));
}
//End teamtype Texonomy Creation


wpcf7_add_form_tag('page','page_handler');

function page_handler(){
  $html ="";
 
 $id = get_the_id(); 
$args = array(
  'post_type'   => 'team',
  'post_status' => 'publish',
  'id' =>$id,
  'post_per_page' => '-1'
 );
 
$team = new WP_Query( $args );

 while ($team->have_posts()) {

   ?>
  <div style="display: none;" class="test3 <?php echo get_the_id();?>"></div>
    <?php
     
        $team->the_post();
        ?>
          
          <?php 
          $developerName = get_the_title($id); 
          $developer_id = get_field('developer_id',$id);
          $type = get_field( 'type',$id);
          $location = get_field( 'location',$id,true);
          $job_title = get_field( 'job_title',$id,true);
          $contact_no = get_field( 'contact_no',$id,true);
          $contact_email = get_field( 'contact_email',$id ,true);
          $skills = get_field('skills',$id , true);
         
          $experience = get_field('experience',$id , true);
          $discount_price = get_field('discount_price',$id , true);
          $discount = rtrim($discount_price,"CAD");
          $rate_per_hour = get_field('rate_per_hour',$id , true);
          $rate = rtrim($rate_per_hour,"CAD");

          

    $html='<input type="hidden" name="developerName" value="'.$developerName.'">
          <input type="hidden" name="developerId" value="'. $developer_id.'">
          <input type="hidden" name="contactEmail" value="'. $contact_email.'">
          <input type="hidden" name="type" value="'. $type.'">
          <input type="hidden" name="location" value="'. $location.'">
          <input type="hidden" name="jobtitle" value="'. $job_title.'">
          <input type="hidden" name="contactno" value="'. $contact_no.'">
          <input type="hidden" name="skills" value="'.strip_tags($skills).'">
          <input type="hidden" name="experience" value="'.$experience.'">
          <input type="hidden" id="discount" name="discountprice" value="'.$discount.'">
          <input type="hidden" id="price" name="rate_per_hour" value="'.$rate.'">
          <input type="hidden" id="total" name="total">';
           
    wp_reset_postdata();
  }     
    
return $html;
}


//date picker hook for cf7 IE
add_filter( 'wpcf7_support_html5_fallback', '__return_true' );
