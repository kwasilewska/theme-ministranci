<?php
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

if (function_exists("register_sidebar")) {
    register_sidebar(array(
        'name' => 'right-sidebar',
        'id' => 'right-sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li><hr class="sidebar_hr">',
        'before_title' => '<h3 class="widget_title">',
        'after_title' => '</h3>',
    ));
}

/**
 * 
 * @param integer $month_number
 * @return string|null
 */
function getMonthRoma( $month_number ) {
    $rzymskie = [
        0 => '',
        1 => 'I',
        2 => 'II',
        3 => 'III',
        4 => 'IV',
        5 => 'V',
        6 => 'VI',
        7 => 'VII',
        8 => 'VIII',
        9 => 'IX',
        10 => 'X',
        11 => 'XI',
        12 => 'XII',
    ];

    if ( isset($rzymskie[intval($month_number)]) ){
        return $rzymskie[intval($month_number)];
    }
    return null;
}

/**
 * 
 * @param string $date
 * @return string
 */
function getDateWithRoma( $date ) {
    $d = explode(' ', $date);
    
    return $d[0] . ' ' . getMonthRoma($d[1]) . ' ' . $d[2];
}

function template_chooser($template)   {    
  global $wp_query;   
  $post_type = get_query_var('post_type');   
  if( $wp_query->is_search && $post_type == 'products' )   
  {
    return locate_template('archive-search.php');  //  redirect to archive-search.php
  }   
  return $template;   
}   
add_filter('template_include', 'template_chooser');   