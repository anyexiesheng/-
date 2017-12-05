<?php
$custom_sidebars = $posts = $pages = $categories = $edge_posts = $testimonials = $clients = $news_posts = $portfolio_posts = $flexslider = $employees = $pricing = $animated_columns = $authors = $tab_slider = $banner_builder = $icarousel = array();
$target_arr = array(
    __("Same window", "mk_framework") => "_self",
    __("New window", "mk_framework") => "_blank"
);
if (mk_page_is_vc_edit_form()) {
    $tab_slider_entries = get_posts('post_type=tab_slider&orderby=title&numberposts=30&order=ASC&suppress_filters=0');
    if ($tab_slider_entries != null && !empty($tab_slider_entries)) {
        foreach ($tab_slider_entries as $key => $entry) {
            $tab_slider[$entry->ID] = $entry->post_title;
        }
    }
    $animated_columns_entries = get_posts('post_type=animated-columns&orderby=title&numberposts=30&order=ASC&suppress_filters=0');
    if ($animated_columns_entries != null && !empty($animated_columns_entries)) {
        foreach ($animated_columns_entries as $key => $entry) {
            $animated_columns[$entry->ID] = $entry->post_title;
        }
    }
    $pricing_entries = get_posts('post_type=pricing&orderby=title&numberposts=30&order=ASC&suppress_filters=0');
    if ($pricing_entries != null && !empty($pricing_entries)) {
        foreach ($pricing_entries as $key => $entry) {
            $pricing[$entry->ID] = $entry->post_title;
        }
    }
    $employees_entries = get_posts('post_type=employees&orderby=title&numberposts=30&order=ASC&suppress_filters=0');
    if ($employees_entries != null && !empty($employees_entries)) {
        foreach ($employees_entries as $key => $entry) {
            $employees[$entry->ID] = $entry->post_title;
        }
    }
    $flexslider_entries = get_posts('post_type=slideshow&orderby=title&numberposts=30&order=ASC&suppress_filters=0');
    if ($flexslider_entries != null && !empty($flexslider_entries)) {
        foreach ($flexslider_entries as $key => $entry) {
            $flexslider[$entry->ID] = $entry->post_title;
        }
    }
    $edge_entries = get_posts('post_type=edge&orderby=title&numberposts=30&order=ASC&suppress_filters=0');
    if ($edge_entries != null && !empty($edge_entries)) {
        foreach ($edge_entries as $key => $entry) {
            $edge_posts[$entry->ID] = $entry->post_title;
        }
    }
    $banner_builder_entries = get_posts('post_type=banner_builder&orderby=title&numberposts=30&order=ASC&suppress_filters=0');
    if ($banner_builder_entries != null && !empty($banner_builder_entries)) {
        foreach ($banner_builder_entries as $key => $entry) {
            $banner_builder[$entry->ID] = $entry->post_title;
        }
    }
    $icarousel_entries = get_posts('post_type=icarousel&orderby=title&numberposts=30&order=ASC&suppress_filters=0');
    if ($icarousel_entries != null && !empty($icarousel_entries)) {
        foreach ($icarousel_entries as $key => $entry) {
            $icarousel[$entry->ID] = $entry->post_title;
        }
    }
    $portfolio_entries = get_posts('post_type=portfolio&orderby=title&numberposts=30&order=ASC&suppress_filters=0');
    foreach ($portfolio_entries as $key => $entry) {
        $portfolio_posts[$entry->ID] = $entry->post_title;
    }
    $posts_entries = get_posts('post_type=post&orderby=title&numberposts=30&order=ASC&suppress_filters=0');
    foreach ($posts_entries as $key => $entry) {
        $posts[$entry->ID] = $entry->post_title;
    }
    $news_entries = get_posts('post_type=news&orderby=title&numberposts=30&order=ASC&suppress_filters=0');
    foreach ($news_entries as $key => $entry) {
        $news_posts[$entry->ID] = $entry->post_title;
    }
    $clients_entries = get_posts('post_type=clients&orderby=title&numberposts=30&order=ASC&suppress_filters=0');
    if ($clients_entries != null && !empty($clients_entries)) {
        foreach ($clients_entries as $key => $entry) {
            $clients[$entry->ID] = $entry->post_title;
        }
    }
    $testimonials_entries = get_posts('post_type=testimonial&orderby=title&numberposts=30&order=ASC&suppress_filters=0');
    if ($testimonials_entries != null && !empty($testimonials_entries)) {
        foreach ($testimonials_entries as $key => $entry) {
            $testimonials[$entry->ID] = $entry->post_title;
        }
    }
    
    $cats_entries = get_categories('orderby=name&hide_empty=0');
    foreach ($cats_entries as $key => $entry) {
        $categories[$entry->term_id] = $entry->name;
    }
    
    $page_entries = get_pages('title_li=&orderby=name');
    foreach ($page_entries as $key => $entry) {
        $pages['None'] = "*";
        $pages[$entry->post_title] = $entry->ID;
    }
    
    $mk_user_query = get_users(array(
        'number' => 50
    ));
    if (!empty($mk_user_query)) {
        foreach ($mk_user_query as $user) {
            $authors[$user->ID] = $user->display_name;
        }
    }
}
$add_css_animations = array(
    "type" => "dropdown",
    "heading" => __("Viewport Animation", "mk_framework") ,
    "param_name" => "animation",
    "value" => array(
        "无" => '',
        "淡入" => "fade-in",
        "放大" => "scale-up",
        "从右到左" => "right-to-left",
        "从左到右" => "left-to-right",
        "从下到上" => "bottom-to-top",
        "从上到下" => "top-to-bottom",
        "水平翻转" => "flip-x",
        "垂直翻转" => "flip-y"
    ),
    "description" => __("Viewport animation will be triggered when this element is being viewed while you scroll page down. Choose the type of animation from this list. please note that this only works in moderns. This feature is disabled in touch devices to increase browsing speed.", "mk_framework")
);
$add_device_visibility = array(
    "type" => "dropdown",
    "heading" => __("Visibility For devices", "mk_framework") ,
    "param_name" => "visibility",
    "value" => array(
        "所有" => '',
        "手机上隐藏 (屏幕比 765px 小)" => "hidden-sm",
        "平板上隐藏 (屏幕在 768px 和 1024px之间)" => "hidden-tl",
        "大平板上隐藏 (屏幕在 768px 和 1280px之间)" => "hidden-tl-v2",
        "桌面上隐藏 (屏幕比 1224px 宽)" => "hidden-dt",
        "大桌面上隐藏 (屏幕比 1290px 宽)" => "hidden-dt-v2",
        "手机上可见 (屏幕比 765px 小)" => "visible-sm",
        "平板上可见 (屏幕在 768px 和 1024px之间)" => "visible-tl",
        "大平板上可见 (屏幕在 768px 和 1280px之间)" => "visible-tl-v2",
        "桌面上可见 (屏幕比 1224px 宽)" => "visible-dt",
        "大桌面上可见 (屏幕比 1290px 宽)" => "visible-dt-v2"
    ),
    "description" => __("You can make this element invisible for a particular device (screen resolution) or set it to All to be visible for all devices.<br> <span style='color:red'>Important : Device detection is based on <strong>Device Screen Width</strong> and we can not clearly define the sort of device whether its a tablet or small laptop. This option mostly helps to organise your content on smaller devices (e.g. remove large content for mobiles) and it does not specifically help you to determine the type of device.</span>", "mk_framework")
);
$mk_orderby = array(
    __("Date", 'mk_framework') => "date",
    __('Menu Order', 'mk_framework') => 'menu_order',
    __("Posts In (manually selected posts)", 'mk_framework') => "post__in",
    __("post id", 'mk_framework') => "id",
    __("title", 'mk_framework') => "title",
    __("Comment Count", 'mk_framework') => "comment_count",
    __("Random", 'mk_framework') => "rand",
    __("Author", 'mk_framework') => "author",
    __("No order", 'mk_framework') => "none"
);

$theme_options = get_option(THEME_OPTIONS);
$skin_color = $theme_options['skin_color'];

