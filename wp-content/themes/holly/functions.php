<?php 

	//register resources

	function register_resources(){
		 // register a menu

			register_nav_menu('main-menu','Main Menu');

		//register a slide
		



	}



	add_action('init','register_resources');

	//menu items hooks - adding classes to menu

  function add_menu_li_class($classes,$item,$args){
    $classes[] ='nav-item';
    return $classes;
  }

  add_filter('nav_menu_css_class','add_menu_li_class',10,3);

  function add_menu_anchor_class($attrs,$item,$args){
    $attrs['class'] ='nav-link';
    return $attrs;
  }

  add_filter('nav_menu_link_attributes','add_menu_anchor_class',10,3);




 ?>