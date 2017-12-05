<?php
class mkSidebarGenerator {
	var $sidebar_names = array();
	var $footer_sidebar_count = 0;
	var $footer_sidebar_names = array();
	
	function mkSidebarGenerator(){
		$this->sidebar_names = array(
			'page'=>__('页面小工具区','mk_framework'),
			'single_post'=>__('单篇文章页面小工具区','mk_framework'),
			'single_portfolio'=>__('单篇作品页面小工具区','mk_framework'),
			'single_news'=>__('单篇新闻页面小工具区','mk_framework'),
			'search'=>__('搜索页面小工具区','mk_framework'),
			'archive'=>__('存档页面小工具区','mk_framework'),
			'404'=>__('404页面小工具区','mk_framework'),
			'woocommerce'=>__('Woocommerce商店小工具区','mk_framework'),
			'woocommerce_single'=>__('Woocommerce产品详细页面小工具区','mk_framework'),
		);
		$this->footer_sidebar_names = array(
			__('第一页脚小工具区','mk_framework'),
			__('第二页脚小工具区','mk_framework'),
			__('第三页脚小工具区','mk_framework'),
			__('第四页脚小工具区','mk_framework'),
			__('第五页脚小工具区','mk_framework'),
			__('第六页脚小工具区','mk_framework'),
		);

	}

	function register_sidebar(){

		$i = 1;

		foreach ($this->sidebar_names as $name){
			register_sidebar(array(
				'name' => $name,
				'id' => 'sidebar-'.$i,
				'description' => $name,
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget' => '</section>',
				'before_title' => '<div class="widgettitle">',
				'after_title' => '</div>',
			));
			$i++;
		}	
		foreach ($this->footer_sidebar_names as $name){
			register_sidebar(array(
				'name' =>  $name,
				'id' => 'sidebar-'.$i,
				'description' => $name,
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget' => '</section>',
				'before_title' => '<div class="widgettitle">',
				'after_title' => '</div>',
			));
			$i++;
		}


	register_sidebar( array(
			'name' =>  '侧边面板 - 上面导航',
			'id' => 'sidebar-'.$i,
			'description' => '侧边面板小工具区. 添加到这里的小工具将被添加到侧边面板导航上面.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<div class="widgettitle">',
			'after_title' => '</div>',
	));	

	$i++;

	register_sidebar( array(
			'name' =>  '侧边面板 - 下面导航',
			'id' => 'sidebar-'.$i,
			'description' => '侧边面板小工具区. 添加到这里的小工具将被添加到侧边面板导航下面.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<div class="widgettitle">',
			'after_title' => '</div>',
	));	
		
	$i++;
		
		//register custom sidebars
	$custom_sidebars = get_option(THEME_OPTIONS);
		if(!empty($custom_sidebars['sidebars'])){
			$custom_sidebar_names = explode(',',$custom_sidebars['sidebars']);
			foreach ($custom_sidebar_names as $name){
				register_sidebar(array(
					'name' =>  $name,
					'id' => 'sidebar-'.$i,
					'description' => $name,
					'before_widget' => '<section id="%1$s" class="widget %2$s">',
					'after_widget' => '</section>',
					'before_title' => '<div class="widgettitle">',
					'after_title' => '</div>',
				));

				$i++;
			}
		}
		
	}
	
	function get_sidebar($post_id){
		
		if(is_page() || is_home()){
			$sidebar = $this->sidebar_names['page'];
		}
		if(is_search()) {
		$sidebar = $this->sidebar_names["search"];
		}
		if(is_404()) {
		$sidebar = $this->sidebar_names["404"];
		}
		if(is_archive()) {
		$sidebar = $this->sidebar_names["archive"];
		}		
		if(is_singular('post')){
			$sidebar = $this->sidebar_names['single_post'];
		}
		if(is_singular('portfolio')){
			$sidebar = $this->sidebar_names['single_portfolio'];
		}
		if(is_singular('news')){
			$sidebar = $this->sidebar_names['single_news'];
		}
		if(is_archive()){
			$sidebar = $this->sidebar_names["archive"];
		}
		if ( function_exists('is_woocommerce') && is_woocommerce() && is_archive()) { 
			$sidebar = $this->sidebar_names["woocommerce"]; 
		}
		if ( function_exists('is_woocommerce') && is_woocommerce() && is_single()) { 
			$sidebar = $this->sidebar_names["woocommerce_single"]; 
		}
		if ( function_exists('is_bbpress') && is_bbpress()) { 
			$sidebar = $this->sidebar_names['page'];
		}

		
		
		if(!empty($post_id)){
			$custom = get_post_meta($post_id, '_sidebar', true);
			if(!empty($custom)){
				$sidebar = $custom;
			}
		}
		if(isset($sidebar)){
			dynamic_sidebar($sidebar);
		}
	}
	function get_footer_sidebar(){
		global $post;
		if(is_singular()) {
				if($this->footer_sidebar_count == 0) {
					$single_area = get_post_meta($post->ID, '_widget_first_col', true);
					if(!empty($single_area)) {
						dynamic_sidebar($single_area);				
					} else {
						dynamic_sidebar($this->footer_sidebar_names[$this->footer_sidebar_count]);
					}
				}
				if($this->footer_sidebar_count == 1) {
					$single_area = get_post_meta($post->ID, '_widget_second_col', true);
					if(!empty($single_area)) {
						dynamic_sidebar($single_area);				
					} else {
						dynamic_sidebar($this->footer_sidebar_names[$this->footer_sidebar_count]);
					}
				}
				if($this->footer_sidebar_count == 2) {
					$single_area = get_post_meta($post->ID, '_widget_third_col', true);
					if(!empty($single_area)) {
						dynamic_sidebar($single_area);				
					} else {
						dynamic_sidebar($this->footer_sidebar_names[$this->footer_sidebar_count]);
					}
				}
				if($this->footer_sidebar_count == 3) {
					$single_area = get_post_meta($post->ID, '_widget_fourth_col', true);
					if(!empty($single_area)) {
						dynamic_sidebar($single_area);				
					} else {
						dynamic_sidebar($this->footer_sidebar_names[$this->footer_sidebar_count]);
					}
				}
				if($this->footer_sidebar_count == 4) {
					$single_area = get_post_meta($post->ID, '_widget_fifth_col', true);
					if(!empty($single_area)) {
						dynamic_sidebar($single_area);				
					} else {
						dynamic_sidebar($this->footer_sidebar_names[$this->footer_sidebar_count]);
					}
				}
				if($this->footer_sidebar_count == 5) {
					$single_area = get_post_meta($post->ID, '_widget_sixth_col', true);
					if(!empty($single_area)) {
						dynamic_sidebar($single_area);				
					} else {
						dynamic_sidebar($this->footer_sidebar_names[$this->footer_sidebar_count]);
					}
				}
		} else {
			dynamic_sidebar($this->footer_sidebar_names[$this->footer_sidebar_count]);
		}
		$single_area = '';
		$this->footer_sidebar_count++;
	}

}
global $_mkSidebarGenerator;
$_mkSidebarGenerator = new mkSidebarGenerator;

add_action('widgets_init', array($_mkSidebarGenerator,'register_sidebar'));

function mk_sidebar_generator($function){
	global $_mkSidebarGenerator;
	$args = array_slice( func_get_args(), 1 );
	return call_user_func_array(array( &$_mkSidebarGenerator, $function ), $args );
}


