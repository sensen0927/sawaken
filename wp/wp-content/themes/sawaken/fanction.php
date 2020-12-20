<?php
add_image_size('single-post-thumbnail', 200, 160, true);
add_theme_support('post-thumbnails');

function short_php($params = array())
{
    extract(shortcode_atts(array(
        'file' => 'default'
    ), $params));
    ob_start();
    include(STYLESHEETPATH . "/$file.php");
    return ob_get_clean();
}
add_shortcode('myphp', 'short_php');