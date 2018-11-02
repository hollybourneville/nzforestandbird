<?php 

	//register resources

	function register_resources(){
		 // register a menu

			register_nav_menu('main-menu','Main Menu');

		//register a slide
		

      $arg = array(
        'labels' => array(
          'name' => 'Quad' ,
          'singular_name' => 'Quad',
          'menu_name' => 'Quad'
        ),
        'public' => true,
        'show_in_nav_menues' => true,
    );
    register_post_type( 'quad',$arg);

    $arg = array(
        'labels' => array(
          'name' => 'Hero' ,
          'singular_name' => 'Hero',
          'menu_name' => 'Hero'
        ),
        'public' => true,
        'show_in_nav_menues' => true,
    );
    register_post_type( 'hero',$arg);

    $arg = array(
        'labels' => array(
          'name' => 'Features' ,
          'singular_name' => 'Feature',
          'menu_name' => 'Features'
        ),
        'public' => true,
        'show_in_nav_menues' => true,
    );
    register_post_type( 'feature',$arg);  

    $arg = array(
        'labels' => array(
          'name' => 'Contact' ,
          'singular_name' => 'Contact',
          'menu_name' => 'Contact'
        ),
        'public' => true,
        'show_in_nav_menues' => true,
    );
    register_post_type( 'contact',$arg);

    $arg = array(
      'label' => 'Type',
      'rewrite' => array( 'slug' => 'type' ),
      'hierarchical' => true,
    );
    register_taxonomy('type','contact',$arg);

    $arg = array(
        'labels' => array(
          'name' => 'Volunteer' ,
          'singular_name' => 'Volunteer',
          'menu_name' => 'Volunteer'
        ),
        'public' => true,
        'show_in_nav_menues' => true,
    );
    register_post_type( 'volunteer',$arg);


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