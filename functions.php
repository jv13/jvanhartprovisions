<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    /*--- Top left Widget ---*/
    register_sidebar( array(
        'name'          => ('Top Left Nav Widget'),
        'id'            => 'top-left',
        'description'   => 'Widget for top left nav',
        'before_widget' => '<div class="widget-top Leftnav">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

    /*--- Top right Widget ---*/
    register_sidebar( array(
        'name'          => ('Top Right Nav Widget'),
        'id'            => 'top-right',
        'description'   => 'Widget for top right nav',
        'before_widget' => '<div class="widget-top Rightnav">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

        /*--- Header Widget ---*/
    register_sidebar( array(
        'name'          => ('Header Widget'),
        'id'            => 'header-one',
        'description'   => 'Logo for header widget',
        'before_widget' => '<div class="widget-header widget-header">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));

    /*--- First Index Widget ---*/
register_sidebar( array(
    'name'          => ('First Index Widget'),
    'id'            => 'index-one',
    'description'   => 'First index widget',
    'before_widget' => '<div class="widget-index widget-one">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*--- Second Index Widget ---*/
register_sidebar( array(
'name'          => ('Second Index Widget'),
'id'            => 'index-two',
'description'   => 'Second index widget',
'before_widget' => '<div class="widget-index widget-two">',
'after_widget'  => '</div>',
'before_title'  => '<h3>',
'after_title'   => '</h3>'
));

/*--- Third Index Widget ---*/
register_sidebar( array(
'name'          => ('Third Index Widget'),
'id'            => 'index-three',
'description'   => 'Third index widget',
'before_widget' => '<div class="widget-index widget-three">',
'after_widget'  => '</div>',
'before_title'  => '<h3>',
'after_title'   => '</h3>'
));

/*--- First About Widget ---*/
register_sidebar( array(
'name'          => ('First About Widget'),
'id'            => 'about-one',
'description'   => 'First about widget',
'before_widget' => '<div class="widget-about widget-one">',
'after_widget'  => '</div>',
'before_title'  => '<h3>',
'after_title'   => '</h3>'
));

/*--- Second About Widget ---*/
register_sidebar( array(
'name'          => ('Second About Widget'),
'id'            => 'about-second',
'description'   => 'Second about widget',
'before_widget' => '<div class="widget-about widget-second">',
'after_widget'  => '</div>',
'before_title'  => '<h3>',
'after_title'   => '</h3>'
));

/*--- Third About Widget ---*/
register_sidebar( array(
'name'          => ('Third About Widget'),
'id'            => 'about-third',
'description'   => 'Third about widget',
'before_widget' => '<div class="widget-about widget-third">',
'after_widget'  => '</div>',
'before_title'  => '<h3>',
'after_title'   => '</h3>'
));

/*--- Second Products Widget ---*/
register_sidebar( array(
'name'          => ('Second Products Widget'),
'id'            => 'products-two',
'description'   => 'Second products widget',
'before_widget' => '<div class="widget-products widget-two">',
'after_widget'  => '</div>',
'before_title'  => '<h3>',
'after_title'   => '</h3>'
));

/*--- Top Blog sidebar Widget ---*/
register_sidebar( array(
'name'          => ('Top blog Sidebar Widget'),
'id'            => 'blog-one',
'description'   => 'Top blog sidebar widget',
'before_widget' => '<div class="widget-blog widget-one">',
'after_widget'  => '</div>',
'before_title'  => '<h3>',
'after_title'   => '</h3>'
));

/*--- Bottom blog sidebar Widget ---*/
register_sidebar( array(
'name'          => ('Bottom Blog Sidebar Widget'),
'id'            => 'blog-two',
'description'   => 'Bottom Blog sidebar widget',
'before_widget' => '<div class="widget-blog widget-two">',
'after_widget'  => '</div>',
'before_title'  => '<h3>',
'after_title'   => '</h3>'
));

/*--- Contact sidebar Widget ---*/
register_sidebar( array(
'name'          => ('Contact Sidebar Widget'),
'id'            => 'contact-one',
'description'   => 'Contact sidebar widget',
'before_widget' => '<div class="widget-contact widget-one">',
'after_widget'  => '</div>',
'before_title'  => '<h3>',
'after_title'   => '</h3>'
));

    /*--- First Footer Widget ---*/
    register_sidebar( array(
        'name'          => ('First Footer Widget'),
        'id'            => 'footer-one',
        'description'   => 'First footer in the widget',
        'before_widget' => '<div class="widget-footer widget-first">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
        /*--- Second Footer Widget ---*/
    register_sidebar( array(
        'name'          => ('Second Footer Widget'),
        'id'            => 'footer-two',
        'description'   => 'Middle footer in the widget',
        'before_widget' => '<div class="widget-footer widget-second">',
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

/*--- Sets News Excerpt length ---*/
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



// Changing excerpt more
function new_excerpt_more($more) {
  global $post;
  return '… <a href="'. get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';
}
  add_filter('excerpt_more', 'new_excerpt_more');






?>
