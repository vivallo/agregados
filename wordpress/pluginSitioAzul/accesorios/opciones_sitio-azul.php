<?php

add_action( 'cmb2_admin_init', 'opcionesSitioAzul' );
add_action( 'cmb2_admin_init', 'equipoBaseSitioAzul' );
add_action( 'cmb2_admin_init', 'opcionesInicioSitioAzul' );
add_action( 'cmb2_admin_init', 'opcionesProgramacionSitioAzul' );

/* -------- ** comienza opciones GENERALES ** ------- */
function opcionesSitioAzul() { 
  $secondary_options = new_cmb2_box( array(
		'id'           => 'opciones_ubicacion',
		'title'        => esc_html__( 'Frases', 'cmb2' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'OpcionFraces',
		'parent_slug'  => 'opciones_sitio-azul.php',
	) );
  
	$secondary_options->add_field( array(
		'name' => esc_html__( 'Frases que van debajo del logo', 'cmb2' ),
		'desc' => esc_html__( 'Agrega, quita o cambia frases desde aquí', 'cmb2' ),
		'id'   => 'fraces',
		'type' => 'title',
	) );
  
  $secondary_options->add_field(array(
    'name'         => esc_html__('Lista de Frases', 'cmb2'),
    'desc'         => esc_html__('Estas frases cambiaran de manera aleatoria.', 'cmb2'),
    'id'           => 'listaFraces',
    'type'         => 'text',
    'repeatable'   => true,
  ));

}

/* -------- ** comienza opciones equipo base ** ------- */
function equipoBaseSitioAzul() { 
  $secondary_options = new_cmb2_box( array(
		'id'           => 'opciones_equipo_base',
		'title'        => esc_html__( 'Equipo Base', 'cmb2' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'OpcionEquipoBase',
		'parent_slug'  => 'opciones_sitio-azul.php',
	) );
  
	$secondary_options->add_field( array(
		'name' => esc_html__( 'Elegir equipo base', 'cmb2' ),
		'desc' => esc_html__( 'Elige para definir un equipo', 'cmb2' ),
		'id'   => 'equipoBase',
		'type' => 'title',
	) );
  
  $secondary_options->add_field(array(
    'name'         			=> esc_html__('Lista de equipos', 'cmb2'),
    'desc'         			=> esc_html__('Equipos.', 'cmb2'),
    'id'           			=> 'nombreEquipoBase',
    'type'         			=> 'post_search_ajax',
		'query_args'				=> [
			'post_type'					=> ['cpt_equipos' ],
			'post_status'				=> ['publish' ],
			'posts_per_page'		=> -1
		]
  )
);

}

/* -------- ** comienza opciones inicio ** ------- */
function opcionesInicioSitioAzul() { 
  $secondary_options = new_cmb2_box( array(
		'id'           => 'opciones_inicio',
		'title'        => esc_html__( 'Opciones Inicio', 'cmb2' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'OpcionInicio',
		'parent_slug'  => 'opciones_sitio-azul.php',
	) );
  
	$secondary_options->add_field( array(
		'name' => esc_html__( 'Sección Posiciones, Programación y Resultados', 'cmb2' ),
		'desc' => esc_html__( 'Elige para definir tabla de pocisiones, próximo partido y último partido para la portada', 'cmb2' ),
		'id'   => 'tituProximoPartido',
		'type' => 'title',
	) );
  
	$secondary_options->add_field(array(
		'name'         			=> esc_html__('Último artículo', 'cmb2'),
		'desc'         			=> esc_html__('Agregar Artículo.', 'cmb2'),
		'id'           			=> 'articuloIngresado',
		'type'         			=> 'post_search_ajax',
		'query_args'				=> [
				'post_type'					=> 'cpt_programacion',
				'meta_query'     		=> [
					'relation'=>'AND',
					['key'=>'datos_programacion_principal', 'value'=>'on'],
					['key'=>'datos_programacion_articulo', 'value'=>'on'],
					['key'=>'datos_programacion_jugado', 'value'=>'on']
				]
			]
		)
	);
  
	$secondary_options->add_field(array(
		'name'         			=> esc_html__('Tabla de pocisiones', 'cmb2'),
		'desc'         			=> esc_html__('Agregar tabla.', 'cmb2'),
		'id'           			=> 'tablaPosicion',
		'type'         			=> 'post_search_ajax',
		'query_args'				=> [
				'post_type'					=> 'cpt_posicion',
				'meta_key'					=>'datos_posiciones_tOrdenada',
				'meta_value'				=>'on'
			]
		)
	);
  
  $secondary_options->add_field([
    'name'         			=> esc_html__('Próximo partido', 'cmb2'),
    'desc'         			=> esc_html__('Agregar partido.', 'cmb2'),
    'id'           			=> 'proximoPartido',
    'type'         			=> 'post_search_ajax',
		'query_args'				=> [
			'post_type'					=> 'cpt_programacion',
			'meta_query'     => [
					'relation'=>'AND',
					['key'=>'datos_programacion_principal', 'value'=>'on'],
					['key'=>'datos_programacion_jugado', 'value'=>'off'/*, 'compare'=>'NOT EXISTS'*/]
				]
			]
		]
	);
  
	$secondary_options->add_field(array(
		'name'         			=> esc_html__('Último resultado', 'cmb2'),
		'desc'         			=> esc_html__('Agregar Partido.', 'cmb2'),
		'id'           			=> 'partidoJugado',
		'type'         			=> 'post_search_ajax',
		'query_args'				=> [
				'post_type'					=> 'cpt_programacion',
				'meta_query'     		=> [
					'relation'=>'AND',
					['key'=>'datos_programacion_principal', 'value'=>'on'],
					['key'=>'datos_programacion_jugado', 'value'=>'on'/*, 'compare'=>'NOT EXISTS'*/]
				]
			]
		)
	);
  
	$secondary_options->add_field(array(
		'name'         			=> esc_html__('Elegir Video', 'cmb2'),
		'desc'         			=> esc_html__('Buscar dato.', 'cmb2'),
		'id'           			=> 'ultimoVideo',
		'type'         			=> 'post_search_ajax',
		'query_args'				=> [
				'post_type'					=> 'cpt_programacion',
				'meta_query'     		=> [
					'relation'=>'AND',
					['key'=>'datos_programacion_principal', 'value'=>'on'],
					['key'=>'datos_programacion_jugado', 'value'=>'on'/*, 'compare'=>'NOT EXISTS'*/]
				]
			]
		)
	);

}

/* -------- ** comienza opciones programación ** ------- */
function opcionesProgramacionSitioAzul() { 
	
  $secondary_options = new_cmb2_box( array(
		'id'           => 'opciones_programacion',
		'title'        => esc_html__( 'Programación', 'cmb2' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'OpcionProgramacion',
		'parent_slug'  => 'opciones_sitio-azul.php',
	) );
  
	$secondary_options->add_field( array(
		'name' => esc_html__( 'Orden de lista, torneos a mostrar', 'cmb2' ),
		'desc' => esc_html__( 'Seleccionar el torneo y año para que aparezca en la página de programación por defecto.', 'cmb2' ),
		'id'   => 'tituProximoPartido',
		'type' => 'title',
	) );
  
	$secondary_options->add_field(array(
		'name'         			=> esc_html__('Seleccionar Torneo', 'cmb2'),
		'desc'         			=> esc_html__('Seleccionar una opción', 'cmb2'),
		'id'           			=> 'torneo',
		'type'           		=> 'taxonomy_select',
		'taxonomy'					=> 'cat_torneos'
		)
	);
  
  $secondary_options->add_field([
    'name'         			=> esc_html__('Ingresar Año', 'cmb2'),
    'desc'         			=> esc_html__('Agregar número del año.', 'cmb2'),
    'id'           			=> 'anio',
    'type'         			=> 'post_search_ajax',
		'query_args'				=> [
			'post_type'					=> 'cpt_programacion',
			'meta_query'     		=> ['key'=>'datos_programacion_anio','compare'=>'NO EXISTE'],
			]
		]
	);

	$secondary_options->add_field( array(
    'name'             => 'Ordenar programación',
    'desc'             => 'Seleccionar una opción',
    'id'               => 'ordenar',
    'type'             => 'select',
    'show_option_none' => false,
    'default'          => 'custom',
    'options'          => array(
        'jornadaMayor' => __( 'Jornada de mayor a menor', 'cmb2' ),
        'jornadaMenor' => __( 'Jornada de menor a mayor', 'cmb2' ),
        'fechaMayor'	 => __( 'Fecha de mayor a menor', 'cmb2' ),
        'fechaMenor'	 => __( 'Fecha de menor a mayor', 'cmb2' ),
    ),
	) );

}

?>