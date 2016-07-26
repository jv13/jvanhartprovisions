<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    /*--- Top left Widget ---*/
    register_sidebar( array(
        'name'          => ('Top Left Nav Widget'),
        'id'            => 'top-left',
        'description'   => 'Widget for top left nav',
        'before_widget' => '<div class="widget-topLeftnav">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

    /*--- Top right Widget ---*/
    register_sidebar( array(
        'name'          => ('Top Right Nav Widget'),
        'id'            => 'top-right',
        'description'   => 'Widget for top right nav',
        'before_widget' => '<div class="widget-topRightnav">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

        /*--- First Footer Widget ---*/
    register_sidebar( array(
        'name'          => ('Header Widget'),
        'id'            => 'header-one',
        'description'   => 'Logo for header widget',
        'before_widget' => '<div class="widget-header widget-header">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
        /*--- Second Footer Widget ---*/
    register_sidebar( array(
        'name'          => ('Second Footer Widget'),
        'id'            => 'footer-two',
        'description'   => 'Middle footer in the widget',
        'before_widget' => '<div class="widget-footer widget-middle">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));


    }

add_action('widgets_init', 'blank_widgets_init');


/*-------------- Enable Menu --------------- */

add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' );

/*--- Custom Post: Links ---*/

function custom_web_resources() {

  $labels = array(
    /*--- Begin Labels Options ---*/
    'name'               => _x( 'Links', 'post type general name' ),
    'singular_name'      => _x( 'Link', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'weblink' ),
    'add_new_item'       => __( 'Add Link' ),
    'edit_item'          => __( 'Edit Links' ),
    'new_item'           => __( 'New Link' ),
    'all_items'          => __( 'All Links' ),
    'view_item'          => __( 'View Links' ),
    'search_items'       => __( 'Search Links' ),
    'not_found'          => __( 'No links found' ),
    'not_found_in_trash' => __( 'No links found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Web Links'
  );

  $args = array(
    /*--- Begin Arguments Options ---*/
    'labels'        => $labels,
    'description'   => 'Place to put useful links to other web resources',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );

  register_post_type( 'links', $args );
}

add_action( 'init', 'custom_web_resources' );

?>
