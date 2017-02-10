<?php

if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'top_menu'    => __('顶部菜单'),
            'footer_menu' => __('底部菜单'),
        )
    );
}

add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);

function my_css_attributes_filter($var)
{
    return is_array($var) ? array_intersect($var, array('current-menu-item', 'current-post-ancestor', 'current-menu-ancestor', 'current-menu-parent')) : '';
}

add_theme_support('post-formats', array('link', 'video', 'status', 'quote', 'image', 'chat', 'audio'));
add_post_type_support('page', 'post-formats');

add_theme_support('post-thumbnails');

// 自适应图片删除width和height
// add_filter('post_thumbnail_html', 'remove_width_attribute', 10); // add_filter('image_send_to_editor', 'remove_width_attribute', 10); // function remove_width_attribute($html) // { // $html = preg_replace('/(width|height)="\d*"\s/', "", $html); // return $html; // }

/*控制摘要字数*/
function new_excerpt_length($length)
{
    return 150;
}
add_filter("excerpt_length", "new_excerpt_length");

function Bing_excerpt_more()
{
    return '&hellip;';
}
add_filter('excerpt_more', 'Bing_excerpt_more');
