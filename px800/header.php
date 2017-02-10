<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <title>
    <?php if (is_home()) {
    bloginfo('name');
    echo "-";
    bloginfo('description');
} elseif (is_category()) {
    single_cat_title();
    echo "-";
    bloginfo('name');
} elseif (is_single() || is_page()) {
    single_post_title();
} elseif (is_search()) {
    echo "搜索结果";
    echo "-";
    bloginfo('name');
} elseif (is_404()) {
    echo "未找到页面!";
} else {
    wp_title('', true);
}?>
  </title>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
  <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
  <?php wp_head();?>
</head>

<body>
  <div id="container">
    <header>
      <div id="blog-ico"><a href="<?php if (is_user_logged_in()) {
    bloginfo('url');
    echo '/wp-admin';} else {echo wp_login_url();}?>" title="Login"><img src="<?php bloginfo('template_url');?>/static/images/阴阳图-1.png"></a></div>
      <div id="show-date"></div>
      <h1>{  <a class="logo" href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a>  }</h1>
      <p id="site-des">
        <?php bloginfo('description');?>
      </p>
    </header>
    <?php
wp_nav_menu(
    array(
        'theme_location'  => 'top_menu',
        'depth'           => 0,
        'container'       => 'nav',
        'container_id'    => 'navigation',
        'container_class' => '',
        'menu_id'         => 'menu_nav',
        'echo'            => true,
    )
);
?>
