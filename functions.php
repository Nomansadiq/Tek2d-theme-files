<?php
/*
* This is use to display function.php
*/
?>
<?php
// Function to add a class to the <li> elements
function add_additional_class_on_li($classes, $item, $args) {
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// Function to add a class to the <a> elements
function add_additional_class_on_anchor($atts, $item, $args) {
    if (isset($args->add_a_class)) {
        if (isset($atts['class'])) {
            $atts['class'] .= ' ' . $args->add_a_class;
        } else {
            $atts['class'] = $args->add_a_class;
        }
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_anchor', 10, 3);

register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'Tek2D' ),
) );

add_theme_support( 'custom-logo' );

function myfirsttheme_setup() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'my-style', get_template_directory_uri() . '/assets/js/tek2d.js');
}
add_action( 'wp_enqueue_scripts', 'myfirsttheme_setup' );


?>
