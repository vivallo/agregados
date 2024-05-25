<?php
function registroCPTsitioAzul() {  
  
  $rotuloCtpEquipos = array(
    'name'               => 'Equipos',
    'singular_name'      => 'Equipos',
    'add_new'            => 'Agregar nuevo',
    'add_new_item'       => 'Agregar Equipos',
    'edit_item'          => 'Editar',
    'new_item'           => 'Nuevo',
    'all_items'          => 'Todos',
    'view_item'          => 'Ver Equipos',
    'view_items'         => 'Ver Equipos',
    'search_items'       => 'Buscar Equipos',
    'not_found'          => 'No hay Equipos',
    'not_found_in_trash' => 'Papelera vacia',
    'menu_name'          => 'Equipos'
	);		
	$incluirCtpEquipos = array(
		'labels'				      => $rotuloCtpEquipos,
		'public'				      => true,
		'show_ui'				      => true,
    'taxonomies'          => array('cat_equipos'),
		'publicly_queryable'  => true,
		'show_in_nav_menu'		=> true,
		'show_in_menu'		    => true,
		'query_var'				    => true,
		'capability_type'		  => 'post',
		'has_archive'			    => true,
		'hierarchical'		    => false,
		'menu_position'		    => 4,
		'supports'				    => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
	);  
  register_post_type('cpt_equipos', $incluirCtpEquipos);
  
  register_taxonomy(
    'eti_equipos',
    array('cpt_equipos'),
    array(
      'label'             => 'Apodos',
      'rewrite'           => array('slug'=>'eti_equipos'),
      'show_ui'           => true,
      'show_admin_column' => true,
      'hierarchical'      => false,
    )
  );
  
  $rotuloCPTjugadores = array(
    'name'               => 'Jugadores',
    'singular_name'      => 'Jugadores',
    'add_new'            => 'Nuevo jugador',
    'add_new_item'       => 'Nuevo jugador',
    'edit_item'          => 'Editar',
    'new_item'           => 'Nuevo',
    'all_items'          => 'Todos',
    'view_item'          => 'Ver jugador',
    'view_items'         => 'Ver jugador',
    'search_items'       => 'Buscar jugador',
    'not_found'          => 'No hay jugadores',
    'not_found_in_trash' => 'Papelera vacia',
    'menu_name'          => 'Jugadores',
	);		
	$incluirCPTjugadores = array(
		'labels'				      => $rotuloCPTjugadores,
		'public'				      => true,
		'show_ui'				      => true,
    'taxonomies'          => array(),
		'publicly_queryable'  => true,
		'show_in_nav_menu'		=> true,
		'show_in_menu'		    => true,
		'query_var'				    => true,
		'capability_type'		  => 'post',
		'has_archive'			    => true,
		'hierarchical'		    => false,
		'menu_position'		    => 4,
		'supports'				    => array('title', 'editor', 'thumbnail', 'custom-fields'),
	);  
  register_post_type('cpt_jugador', $incluirCPTjugadores);
  
  register_taxonomy(
    'eti_nacionalidad',
    array('cpt_jugador'),
    array(
      'label'             => 'Nacionalidad',
      'rewrite'           => array('slug'=>'eti_nacionalidad'),
      'show_ui'           => true,
      'show_admin_column' => true,
      'hierarchical'      => true,
    )
  );
  
  register_taxonomy(
    'eti_puesto',
    array('cpt_jugador'),
    array(
      'label'             => 'Puesto',
      'rewrite'           => array('slug'=>'eti_puesto'),
      'show_ui'           => true,
      'show_admin_column' => true,
      'hierarchical'      => true,
    )
  );
  
  /*-- comienza tipo de estadios --*/
  $rotuloCPTestadios = array(
    'name'               => 'Estadios',
    'singular_name'      => 'Estadios',
    'add_new'            => 'Nuevo estadio',
    'add_new_item'       => 'Nuevo estadio',
    'edit_item'          => 'Editar',
    'new_item'           => 'Nuevo',
    'all_items'          => 'Todos',
    'view_item'          => 'Ver estadio',
    'view_items'         => 'Ver estadio',
    'search_items'       => 'Buscar estadio',
    'not_found'          => 'No hay estadios',
    'not_found_in_trash' => 'Papelera vacia',
    'menu_name'          => 'Estadios',
	);		
	$incluirCPTestadios = array(
		'labels'				      => $rotuloCPTestadios,
		'public'				      => true,
		'show_ui'				      => true,
    'taxonomies'          => array(),
		'publicly_queryable'  => true,
		'show_in_nav_menu'		=> true,
		'show_in_menu'		    => true,
		'query_var'				    => true,
		'capability_type'		  => 'post',
		'has_archive'			    => true,
		'hierarchical'		    => false,
		'menu_position'		    => 4,
		'supports'				    => array('title', 'editor', 'thumbnail', 'custom-fields'),
	);  
  register_post_type('cpt_estadio', $incluirCPTestadios);
  
  /*-- comienza tipo de estadios --*/
  $rotuloCPTprogramacion = array(
    'name'               => 'Programación',
    'singular_name'      => 'Programación',
    'add_new'            => 'Nueva programación',
    'add_new_item'       => 'Nueva programación',
    'edit_item'          => 'Editar',
    'new_item'           => 'Nuevo',
    'all_items'          => 'Todos',
    'view_item'          => 'Ver programación',
    'view_items'         => 'Ver programación',
    'search_items'       => 'Buscar programación',
    'not_found'          => 'No hay programación',
    'not_found_in_trash' => 'Papelera vacia',
    'menu_name'          => 'Programación',
	);		
	$incluirCPTprogramacion = array(
		'labels'				      => $rotuloCPTprogramacion,
		'public'				      => true,
		'show_ui'				      => true,
    'taxonomies'          => array(),
		'publicly_queryable'  => true,
		'show_in_nav_menu'		=> true,
		'show_in_menu'		    => true,
		'query_var'				    => true,
		'capability_type'		  => 'post',
		'has_archive'			    => true,
		'hierarchical'		    => false,
    'rewrite'             => false,
		'menu_position'		    => 4,
		'supports'				    => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
	);  
  register_post_type('cpt_programacion', $incluirCPTprogramacion);
  
  /*-- comienza tipo de estadios --*/
  $rotuloCPTposicion = array(
    'name'               => 'Posiciones',
    'singular_name'      => 'Posiciones',
    'add_new'            => 'Nueva Tabla',
    'add_new_item'       => 'Nueva Tabla',
    'edit_item'          => 'Editar',
    'new_item'           => 'Nuevo',
    'all_items'          => 'Todos',
    'view_item'          => 'Ver Tablas',
    'view_items'         => 'Ver Tablas',
    'search_items'       => 'Buscar Tablas',
    'not_found'          => 'No hay Tablas',
    'not_found_in_trash' => 'Papelera vacia',
    'menu_name'          => 'Posiciones',
	);		
	$incluirCPTposicion = array(
		'labels'				      => $rotuloCPTposicion,
		'public'				      => true,
		'show_ui'				      => true,
    'taxonomies'          => array(),
		'publicly_queryable'  => true,
		'show_in_nav_menu'		=> true,
		'show_in_menu'		    => true,
		'query_var'				    => true,
		'capability_type'		  => 'post',
		'has_archive'			    => true,
		'hierarchical'		    => false,
		'menu_position'		    => 4,
		'supports'				    => array('title', 'editor', 'custom-fields'),
	);  
  register_post_type('cpt_posicion', $incluirCPTposicion);
  
  
  
  register_taxonomy(
    'cat_torneos',
    ['cpt_equipos', 'cpt_programacion', 'cpt_posicion', 'cpt_estadio'],
    array(
      'label'             => 'Torneos',
      'rewrite'           => array('slug'=>'cat_torneos'),
      'show_ui'           => true,
      'show_admin_column' => true,
      'hierarchical'      => true,
    )
  );
  
  
}

add_action('init', 'registroCPTsitioAzul');
add_action('admin_init', 'registroCPTsitioAzul');
?>