<?php

$allowedBlocks = [];

define('THEMEPATH', get_template_directory());
define('FUNCTIONSPATH', THEMEPATH . '/functions/');

// initial settings : add css, Lato font localize, custom post type: theme reference, fontawsome
require_once(FUNCTIONSPATH . 'init.php');
// initial settings : acf block register 
require_once(FUNCTIONSPATH . 'acfblock.php');
// acf block helper functions, Add funktions to build modules
require_once(THEMEPATH . '/acf-blocks/acfblock-helper.php');

// Add funktions to build templates
require_once(THEMEPATH . '/template-parts/navigation/nav-functions.php');
require_once(THEMEPATH . '/template-parts/archive-helper.php');




// Theme Feature
//-- Blog: default editor ignored -> acf would be used 
// add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
// function prefix_disable_gutenberg($current_status, $post_type)
// {
//   if ('post' === $post_type) return false;
//   return $current_status;
// }


/**
 * remove all default block types from wordpress
 *
 * @link https://rudrastyh.com/gutenberg/remove-default-blocks.html
 */
function allowedBlockTypes($original_allowedBlocks, $post)
{
  global $allowedBlocks;

  // if ($post->post_type === 'theme_reference') {
  //   array_push($allowedBlocks, "core/spacer", "core/paragraph", "core/heading", "core/columns");
  // }
  return $allowedBlocks;
}

add_filter('allowed_block_types', 'allowedBlockTypes', 10, 2);


// add classes to gravity form fields, see https://docs.gravityforms.com/gform_field_css_class/
/* add_filter( 'gform_field_css_class', 'custom_class', 10, 3 );
function custom_class( $classes, $field, $form ) {
if ( $field->type == 'text' ) {
$classes .= ' gradient-border-feature';
}
return $classes;
} */

//add class to gravity forms submit button, see https://docs.gravityforms.com/gform_submit_button/
add_filter( 'gform_submit_button', 'add_custom_css_classes', 10, 2 );
function add_custom_css_classes( $button, $form ) {
    $dom = new DOMDocument();
    $dom->loadHTML( '<?xml encoding="utf-8" ?>' . $button );
    $input = $dom->getElementsByTagName( 'input' )->item(0);
    $classes = $input->getAttribute( 'class' );
    $classes .= " btn--empty";
    $input->setAttribute( 'class', $classes );
    return $dom->saveHtml( $input );
}
