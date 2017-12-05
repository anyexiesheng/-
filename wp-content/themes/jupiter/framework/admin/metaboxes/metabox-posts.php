<?php
$config  = array(
      'title' => sprintf('%s页面选项', THEME_NAME),
      'id' => 'mk-metaboxes-general',
      'pages' => array(
            'post',

      ),
      'callback' => '',
      'context' => 'normal',
      'priority' => 'core'
);
$options = array(
      array(
            "name" => __("Layout", "mk_framework"),
            "desc" => __("Please choose the layout of this page. If you choose 'Default' then you may modify it from Theme Settings => Blog/News => Blog Single Post => Single Layout.", "mk_framework"),
            "id" => "_layout",
            "default" => 'default',
            "options" => array(
                  "default" => __("Default", "mk_framework"),
                  "left" => __("Left Sidebar", "mk_framework"),
                  "right" => __("Right Sidebar", "mk_framework"),
                  "full" => __("Full Layout", "mk_framework")
            ),
            "type" => "select"
      ),
      array(
            "name" => __("Manage Page Elements", "mk_framework"),
            "desc" => __("Depending on your need you can change this page's general layout by making structral changes.", "mk_framework"),
            "id" => "_template",
            "default" => '',
            "options" => array(
                  "no-header" => __('Remove Header', "mk_framework"),
                  "no-title" => __('Remove Page Title', "mk_framework"),
                  "no-header-title" => __('Remove Header & Page Title', "mk_framework"),
                  "no-footer" => __('Remove Footer', "mk_framework"),
                  "no-header-footer" => __('Remove Header & Footer', "mk_framework"),
                  "no-footer-title" => __('Remove Footer & Page Title', "mk_framework"),
                  "no-header-title-footer" => __('Remove Header & Page Title & Footer', "mk_framework")
            ),
            "type" => "select"
      ),
      array(
            "name" => __("Stick Template?", "mk_framework"),
            "desc" => __("Enabling this option will remove padding after header and before footer.", "mk_framework"),
            "id" => "_padding",
            "default" => 'false',
            "type" => "toggle"
      ),

      array(
            "name" => __("Page Preloader?", "mk_framework"),
            "desc" => __("This option will enable preloader for this post only. If you would like to enable it throughout the site consider setting the option in General => Site Preloader => Preloader.", "mk_framework"),
            "id" => "page_preloader",
            "default" => 'false',
            "type" => "toggle"
      ),
      array(
            "name" => __("Page Title Align", "mk_framework"),
            "desc" => __("You can change title and subtitle text align.", "mk_framework"),
            "id" => "_introduce_align",
            "default" => 'left',
            "options" => array(
                  "left" => '左',
                  "right" => '右',
                  "center" => '中'
            ),
            "type" => "select"
      ),
      array(
            "name" => __("Custom Page Title", "mk_framework"),
            "desc" => __("You can add a custom title for this page. (This option have NOTHING to do with title  &lt;title&gt; tag inside HTML.)", "mk_framework"),
            "id" => "_custom_page_title",
            "rows" => "1",
            "default" => "",
            "type" => "text"
      ),
      array(
            "name" => __("Page Heading Subtitle", "mk_framework"),
            "desc" => __("You can add a subtitle to header section of this page using this option.", "mk_framework"),            
            "id" => "_page_introduce_subtitle",
            "rows" => "3",
            "default" => "",
            "type" => "textarea"
      ),
      array(
            "name" => __("Breadcrumb", "mk_framework"),
            "desc" => __("You can disable Breadcrumb for this page using this option", "mk_framework"),
            "id" => "_disable_breadcrumb",
            "default" => 'true',
            "type" => "toggle"
      ),
      array(
            "name" => __("Main Navigation Location", "mk_framework"),
            "desc" => __("选择用于此页面的菜单位置。如果留空，主菜单将被使用。您应该先 <a target='_blank' href='" . admin_url('nav-menus.php') . "'>创建菜单</a> 然后 <a target='_blank' href='" . admin_url('nav-menus.php') . "?action=locations'>指定菜单位置</a>", "mk_framework"),
            "id" => "_menu_location",
            "default" => '',
            "placeholder" => 'true',
            "width" => 400,
            "options" => array(
                  "primary-menu" => __('Primary Navigation', "mk_framework"),
                  "second-menu" => __('Second Navigation', "mk_framework"),
                  "third-menu" => __('Third Navigation', "mk_framework"),
                  "fourth-menu" => __('Fourth Navigation', "mk_framework"),
                  "fifth-menu" => __('Fifth Navigation', "mk_framework"),
                  "sixth-menu" => __('Sixth Navigation', "mk_framework"),
            ),
            "type" => "select"
      ),
      array(
            "name" => __("Custom Sidebar", "mk_framework"),
            "desc" => __("You can create a custom sidebar, under Sidebar option and then assign the custom sidebar here to this post. later on you can customize which widgets to show up. <a target=\"blank\" href=\"https://artbees.net/themes/video/jupiter-widgets-custom-sidebars/\">CLICK HERE</a> for more information.", "mk_framework"),
            "id" => "_sidebar",
            "default" => '',
            "options" => mk_get_sidebar_options(),
            "type" => "select"
      )
);
new mkMetaboxesGenerator($config, $options);


$config  = array(
  'title' => sprintf( '%s文章选项', THEME_NAME ),
  'id' => 'mk-metaboxes-tabs',
  'pages' => array(
    'post'
  ),
  'callback' => '',
  'context' => 'normal',
  'priority' => 'core'
);
$options = array(

  array(
    "name" => __( "Featured Image Lightbox in Blog Loop", "mk_framework" ),
    "desc" => __( "By default if user clicks on featured images in blog loop a lightbox will be opened. However you can disable this feature, and instead once user clicked on featured image it will go through to single post.", "mk_framework" ),
    "id" => "_disable_post_lightbox",
    "default" => 'true',
    "type" => "toggle"
  ),

  array(
    "name" => __("Post Type", "mk_framework" ),
    "desc" => __( "You can set the post type using this option.", "mk_framework" ),
    "id" => "_single_post_type",
    "default" => 'image',
    "preview" => false,
    "options" => array(
      "image" => '图像',
      "video" => '视频',
      "audio" => '音频',
      "portfolio" => '作品',
    ),
    "type" => "select"
  ),

  array(
    "name" => __( "Gallery Images", "mk_framework" ),
    "desc" => __( "You can re-arrange images by drag and drop as well as deleting images.", "mk_framework" ),
    "id" => "_gallery_images",
    "default" => '',
    "type" => "gallery"
  ),

  array(
    "name" => __( "Classic Loops Style Orientation", "mk_framework" ),
    "desc" => __( "This option allows you to choose how the blog loop item be displayed. This option only applies to Classic style.", "mk_framework" ),
    "id" => "_classic_orientation",
    "default" => 'landscape',
    "options" => array(
      "landscape" => '水平风格',
      "portraite" => '垂直风格',
    ),
    "type" => "select"
  ),

  array(
    "name" => __( "Upload MP3 File", "mk_framework" ),
    "desc" => __( "Upload MP3 your file or paste the full URL for external files. This file formated needed for Safari, Internet Explorer, Chrome. ", "mk_framework" ),
    "id" => "_mp3_file",
    "preview" => false,
    "default" => "",
    "type" => "upload"
  ),

  array(
    "name" => __( "Upload OGG File", "mk_framework" ),
    "desc" => __( "Upload OGG your file or paste the full URL for external files. This file formated needed for Firefox, Opera, Chrome. ", "mk_framework" ),
    "id" => "_ogg_file",
    "preview" => false,
    "default" => "",
    "type" => "upload"
  ),
  array(
    "name" => __( "Sound Track Author", "mk_framework" ),
    "desc" => __( "Fill this Field If you would like to state the author of the audio file you are about to post.", "mk_framework" ),
    "id" => "_single_audio_author",
    "type" => "text"
  ),
    array(
    "name" => __( "Soundcloud", "mk_framework" ),
    "desc" => __( "Paste embed iframe or Wordpress shortcode. You can get iframe from soundcould share=>embed popup. both formats are acceptable. Please note that using this option will ignore above options related to hosted audio player.", "mk_framework" ),
    "subtitle" => __( "", "mk_framework" ),
    "id" => "_audio_iframe",
    "preview" => false,
    "default" => "",
    "type" => "textarea"
  ),

  array(
    "name" => __( "Video Site", "mk_framework" ),
    "id" => "_single_video_site",
    "default" => 'youku',
    "options" => array(
	  "youku" => '优酷',
      "tudou" => '土豆',
      "wule" => '56视频',
	  "vqq" => '腾讯视频',
      "vimeo" => 'Vimeo',
      "youtube" => 'Youtube',
      "dailymotion" => 'Daily Motion',
    ),
    "type" => "select"
  ),

  array(
    "name" => __( "Video Id", "mk_framework" ),
    "desc" => __( "Please fill this option with the required ID. you can find the ID from the link parameters as examplified below:<br /> http://www.youtube.com/watch?v=<strong>ID</strong><br />https://vimeo.com/<strong>ID</strong><br />http://www.dailymotion.com/embed/video/<strong>ID</strong>", "mk_framework" ),
    "id" => "_single_video_id",
    "type" => "text"
  ),

  array(
    "name" => __( "Featured Image", "mk_framework" ),
    "desc" => __( "This option will disable post featured image, video, audio and gallery (portfolio post type).", "mk_framework" ),
    "id" => "_disable_featured_image",
    "default" => 'true',
    "type" => "toggle"
  ),
  array(
    "name" => __( "Meta Section", "mk_framework" ),
    "desc" => __("Using this option you can show/hide extra information about the blog or post, such as Author, Date Created, etc...", "mk_framework"),
    "id" => "_disable_meta",
    "default" => 'true',
    "type" => "toggle"
  ),
  array(
    "name" => __( "Tags", "mk_framework" ),
    "desc" => __( "Using this option you can Show/Hide tags in blogs.", "mk_framework" ),
    "id" => "_disable_tags",
    "default" =>'true',
    "type" => "toggle"
  ),
  array(
    "name" => __( "Related Posts", "mk_framework" ),
    "desc" => __( "If you do not want to show related posts disable the post here", "mk_framework" ),
    "id" => "_disable_related_posts",
    "default" =>'true',
    "type" => "toggle"
  ),
  array(
    "name" => __( "About Author Box", "mk_framework" ),
    "desc" => __( "Disable the about author box here", "mk_framework" ),
    "id" => "_disable_about_author",
    "default" => 'true',
    "type" => "toggle"
  ),
  array(
    "name" => __( "Comments", "mk_framework" ),
    "desc" => __( "Disable comments section for this post.", "mk_framework" ),
    "id" => "_disable_comments",
    "default" => 'true',
    "type" => "toggle"
  ),

);
new mkMetaboxesGenerator( $config, $options );
