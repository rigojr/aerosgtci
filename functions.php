<?php 

function genesis_widgets() {

	register_sidebar( array(
		'name'          => 'Why Us Submenu Widget',
		'id'            => 'whyus-submenu',
		'description'   => 'No desc',
		'before_widget' => '<div id="%1$s" class="submenu">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => 'Products & Services Submenu Widget',
		'id'            => 'proserv-submenu',
		'description'   => 'No desc',
		'before_widget' => '<div id="%1$s" class="submenu">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
}

add_action( 'widgets_init', 'genesis_widgets' );

?>