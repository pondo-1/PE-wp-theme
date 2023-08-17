<?php
// check if required Plugin installed & activated
add_action('admin_notices', 'showAdminMessages');

function showAdminMessages()
{
  $plugin_messages = array();

  include_once(ABSPATH . 'wp-admin/includes/plugin.php');


  // Acf pro Plugin 
  if (!is_plugin_active('advanced-custom-fields-pro/acf.php')) {
    $plugin_messages[] = 'This theme requires you to install the ACF Plugin Pro , <a href="https://www.advancedcustomfields.com/my-account/view-licenses//">download it from here</a>.';
  }

  if (count($plugin_messages) > 0) {
    echo '<div id="message" class="error">';

    foreach ($plugin_messages as $message) {
      echo '<p><strong>' . $message . '</strong></p>';
    }

    echo '</div>';
  }
}



// Enqueue style and js
function pe_theme_files()
{
  //front end
  wp_enqueue_style('pe_theme_main_styles', get_theme_file_uri('/build/index.css'));
  // Javascript need to be loaded in footer: last variable need to be true
  wp_enqueue_script('pe_theme_js', get_template_directory_uri() . '/build/index.js', array(), '', true);
}
add_action('wp_enqueue_scripts', 'pe_theme_files');

// following section replaced by the pe_theme_feature, add_editor_style
// // Add custom acf block editor(backend) style
// function enqueue_block_editor_custom_files()
// {
//   // apply frontend stlying in backend as well, for preview mode  
//   // wp_enqueue_style('pe_theme_main_styles', get_theme_file_uri('/build/style-index.css'));
//   // additional editor style
//   // wp_enqueue_style('acf-block-editor-style', get_template_directory_uri() . '/css/acf-editor-style.css');
// }
// add_action('enqueue_block_editor_assets', 'enqueue_block_editor_custom_files');

function pe_theme_features()
{
  /*
* Let WordPress manage the document title.
* By adding theme support, we declare that this theme does not use a
* hard-coded <title> tag in the document head, and expect WordPress to
  * provide it for us.
  */
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  // add_image_size('professorLandscape', 400, 260, true); -> check image sizes 

  // Editor style. add custom acf-aditor css and front end style https://www.billerickson.net/getting-your-theme-ready-for-gutenberg/
  add_theme_support('editor-styles');
  add_editor_style(get_template_directory_uri() . '/css/acf-editor-style.css');
  add_editor_style(get_theme_file_uri('/build/index.css'));
}
add_action('after_setup_theme', 'pe_theme_features');



// Font localize : Text font & Icon font 
class local_fonts
{
  function __construct()
  {
    add_action('wp_enqueue_scripts', array($this, 'fonts'));
  }

  function fonts()
  {
    // Generate correspond fonts.css by https://gwfh.mranftl.com/fonts
    wp_enqueue_style('fonts_css', get_theme_file_uri('asset/fonts/fonts.css'), array(), 1.0, false);
    // Font awesome icon as font 
    wp_enqueue_style('font-awesome-css', get_template_directory_uri() . '/asset/fontawesome-kit-resp/css/all.css');
    // Usage 
    // 
  }
}
new local_fonts();


function registerTypeThemeRef()
{
  register_post_type(
    'theme_reference',
    array(
      'labels' => array(
        'name' => __('Theme Ref'),
        'singular_name' => __('Theme Ref')
      ),
      'public' => true,
      'has_archive' => false,
      'show_in_rest' => true,
      'menu_icon' => 'dashicons-excerpt-view'
    )
  );
}

add_action('init', 'registerTypeThemeRef');


// Image sizes 
// how to check 

// function _get_all_image_sizes()
// {
//   global $_wp_additional_image_sizes;

//   $default_image_sizes = get_intermediate_image_sizes();

//   foreach ($default_image_sizes as $size) {
//     $image_sizes[$size]['width'] = intval(get_option("{$size}_size_w"));
//     $image_sizes[$size]['height'] = intval(get_option("{$size}_size_h"));
//     $image_sizes[$size]['crop'] = get_option("{$size}_crop") ? get_option("{$size}_crop") : false;
//   }

//   if (isset($_wp_additional_image_sizes) && count($_wp_additional_image_sizes)) {
//     $image_sizes = array_merge($image_sizes, $_wp_additional_image_sizes);
//   }

//   return $image_sizes;
// }
// print_r(_get_all_image_sizes());
// 
// Array ( 
//   [thumbnail] => Array ( 
//     [width] => 150 
//     [height] => 150 
//     [crop] => 1 
//   ) 
//   [medium] => Array ( 
//     [width] => 300 
//     [height] => 300 
//     [crop] => 
//   ) 
//   [medium_large] => Array ( 
//     [width] => 768 
//     [height] => 0 
//     [crop] => 
//   ) 
//   [large] => Array ( 
//     [width] => 1024 
//     [height] => 1024 
//     [crop] => 
//   ) 
//   [1536×1536] => Array ( 
//     [width] => 1536 
//     [height] => 1536 
//     [crop] => 
//     ) 
//   [2048×2048] => Array ( 
//     [width] => 2048 
//     [height] => 2048 
//     [crop] => 
//   ) 
// ) 

/*
 * WordPress: Remove unwonted image sizes.
 * In this code I remove the three sizes medium_large, 1536x1536, 2048x2048
 * See full article: 
 */

add_filter('intermediate_image_sizes', function ($sizes) {
  return array_diff($sizes, ['medium_large']);  // Medium Large (768 x 0)
});

add_action('init', 'j0e_remove_large_image_sizes');
function j0e_remove_large_image_sizes()
{
  remove_image_size('1536x1536');             // 2 x Medium Large (1536 x 1536)
  remove_image_size('2048x2048');             // 2 x Large (2048 x 2048)
}
