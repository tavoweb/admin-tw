<?php
/**
Plugin Name: Admin TW
GitHub Plugin URI: https://github.com/tavoweb/admin-tw
Plugin URI: https://github.com/tavoweb/admin-tw
Description: Change Wordpress admin bar, menu, login, footer, icon and colors
Version: 1.0.3
Author: TavoWEB
Author URI: www.tavoweb.lt
Text Domain: admin-tw
Domain Path: /languages
*/

class Admin_Theme_tw {

	function __construct() {
		$this->init();
	}

	function init(){
		
		$dir = dirname(__FILE__);
		require $dir . '/modules/setting/setting.php';
		require $dir . '/modules/nav/nav.php';
		require $dir . '/modules/color/color.php';
		require $dir . '/modules/login/login.php';
		require $dir . '/modules/footer/footer.php';

		$arg = array(
		     'page_title'   => 'TavoWEB CMS'
		    ,'menu_title'	=> 'TavoWEB admin'
		    ,'menu_slug'	=> 'admin-tw'
		    ,'setting_name' => 'wp_admin_theme_musik_option'
			,'plugin_file'  => __FILE__
		);

		$setting = 
		new Admin_Theme_Setting($arg);
		new Admin_Theme_Nav($setting);
		new Admin_Theme_Color($setting);
		new Admin_Theme_Footer($setting);
		new Admin_Theme_Login($setting);

	}

}

new Admin_Theme_tw;
//support widget
require_once 'widget.php';

