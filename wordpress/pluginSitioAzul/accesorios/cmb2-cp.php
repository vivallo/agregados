<?php
add_action( 'cmb2_admin_init', 'opcionesSAVequipos' );
add_action( 'cmb2_admin_init', 'opcionesSAVestadios' );
add_action( 'cmb2_admin_init', 'opcionesSAVprogramacion' );
add_action( 'cmb2_admin_init', 'opcionesSAVjugadores' );
add_action( 'cmb2_admin_init', 'opcionesSAVposiciones' );
add_action( 'cmb2_admin_init', 'logoCategoriaSitioAzul' );

function opcionesSAVequipos() {
  
  $prefijo = 'datos_equipo_';
  
  /* -------- ** comienza sección General ** ------- */  
	$mbs_estadistica = new_cmb2_box( array(
		'id'            => $prefijo.'general',
		'title'         => esc_html__( 'Detalles del equipo' ),
		'object_types'  => array( 'cpt_equipos' ),
    'context'       => 'side',
    'priority'      => 'low',
    'show_names'    => true,
	) );
  
	$mbs_estadistica->add_field( array(
    'name'          => esc_html__('Segunda Imagen'),
		'desc'          => __( 'Agregar imagen bicolor', 'cmb2' ),
		'id'            => $prefijo.'bicolor',
    'type'					=> 'file',
    // Optional:
    'options' => array(
        'url' => true, // Hide the text input for the url
    ),
    'text'    => array(
        'add_upload_file_text' => 'Buscar' // Change upload button text. Default: "Add or Upload File"
    ),
    // query_args are passed to wp.media's library query.
    'query_args' => array(
        'type' => 'application/pdf', // Make library only display PDFs.
        // Or only allow gif, jpg, or png images
        'type' => array(
        //     'image/gif',
        //     'image/jpeg',
             'image/png',
         ),
    ),
    'preview_size' => 'large', // Image size to use when previewing in the admin.
	) );
  
  $mbs_estadistica->add_field( array(
    'name'          => esc_html__('Estadio'),
		'desc'          => __( 'Agregar un resinto', 'cmb2' ),
		'id'            => $prefijo.'estadio',
		'type'          => 'post_search_ajax',
		'column'	      => true,
		'query_args'	  => array(
			'post_type'			=> array( 'cpt_estadio' ),
			'posts_per_page'	=> -1
		)
    
	) );
  
}

function opcionesSAVestadios() {
  
  $prefijoE = 'datos_estadio_';
  
  /* -------- ** comienza sección General ** ------- */  
	$mbs_estadistica = new_cmb2_box( array(
		'id'            => $prefijoE.'general',
		'title'         => esc_html__( 'Detalles del estadio' ),
		'object_types'  => array( 'cpt_estadio' ),
    'context'       => 'side',
    'priority'      => 'low',
    'show_names'    => true,
	) );  

	$mbs_estadistica->add_field( array(
		'desc'       => esc_html__( 'Ingresar capacidad', 'cmb2' ),
		'id'         => $prefijoE.'capacidad',
		'type'       => 'text',
	) );
  
}

function opcionesSAVprogramacion() {
  
  $prefijoPro = 'datos_programacion_';
	
	/* titulo del partido x3 */
	$mbs_titulo = new_cmb2_box( array(
		'id'            => $prefijoPro.'titulo',
		'title'         => esc_html__( 'Titulo / 3' ),
		'object_types'  => array( 'cpt_programacion' ),
    'context'       => 'normal',
    'priority'      => 'low',
    'show_names'    => 'true',
		'closed'				=> 'true'
	) );

	$mbs_titulo->add_field( array(
    'name'        => esc_html__( 'Titulo 1' ),
		'desc'        => esc_html__( 'Primera parte', 'cmb2' ),
		'id'          => $prefijoPro.'titu1',
		'type'        => 'text',
	) );

	$mbs_titulo->add_field( array(
    'name'        => esc_html__( 'Color 1' ),
		'desc'        => esc_html__( 'Primer color', 'cmb2' ),
		'id'          => $prefijoPro.'color1',
		'type'        => 'colorpicker',
		'default'			=>'#ffffff'
	) );

	$mbs_titulo->add_field( array(
    'name'        => esc_html__( 'Titulo 2' ),
		'desc'        => esc_html__( 'Segunda parte', 'cmb2' ),
		'id'          => $prefijoPro.'titu2',
		'type'        => 'text',
	) );

	$mbs_titulo->add_field( array(
    'name'        => esc_html__( 'Color 2' ),
		'desc'        => esc_html__( 'Segundo color', 'cmb2' ),
		'id'          => $prefijoPro.'color2',
		'type'        => 'colorpicker',
		'default'			=>'#ffffff'
	) );

	$mbs_titulo->add_field( array(
    'name'        => esc_html__( 'Titulo 3' ),
		'desc'        => esc_html__( 'Tercera parte', 'cmb2' ),
		'id'          => $prefijoPro.'titu3',
		'type'        => 'text',
	) );

	$mbs_titulo->add_field( array(
    'name'        => esc_html__( 'Color 3' ),
		'desc'        => esc_html__( 'Tercer color', 'cmb2' ),
		'id'          => $prefijoPro.'color3',
		'type'        => 'colorpicker',
		'default'			=>'#ffffff'
	) );

	/* situación del partido */
  $mbs_situacion = new_cmb2_box( array(
		'id'            => $prefijoPro.'titu_situacion',
		'title'         => esc_html__( 'Situación del partido' ),
		'object_types'  => array( 'cpt_programacion' ),
    'context'       => 'side',
    'priority'      => 'low',
    'show_names'    => 'true',
	) );

	$mbs_situacion->add_field( array(
    'name'        => esc_html__( 'Jugado' ),
		'desc'        => esc_html__( 'Marcar como jugado', 'cmb2' ),
		'id'          => $prefijoPro.'jugado',
		'type'        => 'checkbox',
		'column'			=> true
	) );

	$mbs_situacion->add_field( array(
    'name'        => esc_html__( 'Artículo' ),
		'desc'        => esc_html__( 'Marcar si tiene artículo', 'cmb2' ),
		'id'          => $prefijoPro.'articulo',
		'type'        => 'checkbox',
	) );

	$mbs_situacion->add_field( array(
    'name'        => esc_html__( 'Principal' ),
		'desc'        => esc_html__( 'Marcar si es principal', 'cmb2' ),
		'id'          => $prefijoPro.'principal',
		'type'        => 'checkbox',
	) );

	$mbs_situacion->add_field( array(
    'name'        => esc_html__( 'Video' ),
		'desc'        => esc_html__( 'video youtube', 'cmb2' ),
		'id'          => $prefijoPro.'video',
		'type'        => 'oembed',
	) );
  
  /* -------- ** comienza sección General ** ------- */  
	$mbs_detalle = new_cmb2_box( array(
		'id'            => $prefijoPro.'general',
		'title'         => esc_html__( 'Detalles del partido' ),
		'object_types'  => array( 'cpt_programacion' ),
    'context'       => 'side',
    'priority'      => 'low',
    'show_names'    => 'true',
	) );

  /*-- comienzan los equipos --*/
  $grupo_equipos = $mbs_detalle->add_field( array(
		'id'          => $prefijoPro.'grupo_0',
		'type'        => 'group',
    'repeatable'  => false, //true
		'options'     => array(
			'group_title'    => esc_html__( 'Equipos', 'cmb2' ),
			'add_button'     => esc_html__( 'Agregar', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => false,
      'closed'         => true,
		),
	) );

	$mbs_detalle->add_group_field( $grupo_equipos, array(
    'name'        => esc_html__( 'Equipo Local' ),
		'desc'        => esc_html__( 'Ingresar nombre', 'cmb2' ),
		'id'          => $prefijoPro.'local',
		'type'        => 'text',
		'column'			=> 'true'
	) );

	$mbs_detalle->add_group_field( $grupo_equipos, array(
    'name'        => esc_html__( 'Tarjetas Amarillas Local' ),
		'desc'        => esc_html__( 'Ingresar cantidad', 'cmb2' ),
		'id'          => $prefijoPro.'taLocal',
		'type'        => 'text'
	) );

	$mbs_detalle->add_group_field( $grupo_equipos, array(
    'name'        => esc_html__( 'Tarjetas Rojas Local' ),
		'desc'        => esc_html__( 'Ingresar cantidad', 'cmb2' ),
		'id'          => $prefijoPro.'trLocal',
		'type'        => 'text'
	) );

	$mbs_detalle->add_group_field( $grupo_equipos, array(
    'name'        => esc_html__( 'Goles Local' ),
		'desc'        => esc_html__( 'Ingresar cantidad', 'cmb2' ),
		'id'          => $prefijoPro.'golesLocal',
		'type'        => 'text'
	) );

	$mbs_detalle->add_group_field( $grupo_equipos, array(
    'name'        => esc_html__( 'Goles Visita' ),
		'desc'        => esc_html__( 'Ingresar cantidad', 'cmb2' ),
		'id'          => $prefijoPro.'golesVisita',
		'type'        => 'text'
	) );

	$mbs_detalle->add_group_field( $grupo_equipos, array(
    'name'        => esc_html__( 'Tarjetas Rojas Visita' ),
		'desc'        => esc_html__( 'Ingresar cantidad', 'cmb2' ),
		'id'          => $prefijoPro.'trVisita',
		'type'        => 'text'
	) );

	$mbs_detalle->add_group_field( $grupo_equipos, array(
    'name'        => esc_html__( 'Tarjetas Amarillas Visita' ),
		'desc'        => esc_html__( 'Ingresar cantidad', 'cmb2' ),
		'id'          => $prefijoPro.'taVisita',
		'type'        => 'text'
	) );

	$mbs_detalle->add_group_field( $grupo_equipos, array(
    'name'        => esc_html__( 'Equipo Visita' ),
		'desc'        => esc_html__( 'Ingresar nombre', 'cmb2' ),
		'id'          => $prefijoPro.'visita',
		'type'        => 'text'
	) );
  
  /*-- comienza anotadores --*/
  $grupo_anotador = $mbs_detalle->add_field( array(
		'id'          => $prefijoPro.'grupo_00',
		'type'        => 'group',
    'repeatable'  => false,
		'options'     => array(
			'group_title'    => esc_html__( 'Anotadores', 'cmb2' ),
			'add_button'     => esc_html__( 'Agregar', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => false,
      'closed'         => true,
		),
	) );

		$mbs_detalle->add_group_field( $grupo_anotador, array(
			'name'        => esc_html__( 'Anotador local' ),
			'desc'        => esc_html__( 'Ingresar nombre', 'cmb2' ),
			'id'          => $prefijoPro.'anotadorL',
			'type'        => 'text',
			'repeatable'  => true,
		) );

		$mbs_detalle->add_group_field( $grupo_anotador, array(
			'name'        => esc_html__( 'Anotador visita' ),
			'desc'        => esc_html__( 'Ingresar nombre', 'cmb2' ),
			'id'          => $prefijoPro.'anotadorV',
			'type'        => 'text',
			'repeatable'  => true,
		) );
  
  /*-- comienza tarjetas amarillas --*/
  $grupo_tarjetas = $mbs_detalle->add_field( array(
		'id'          => $prefijoPro.'grupo_1',
		'type'        => 'group',
    'repeatable'  => false,
		'options'     => array(
			'group_title'    => esc_html__( 'Tarjetas Amarillas', 'cmb2' ),
			'add_button'     => esc_html__( 'Agregar', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => false,
      'closed'         => true,
		),
	) );

		$mbs_detalle->add_group_field( $grupo_tarjetas, array(
			'name'        => esc_html__( 'Tarjetas amarilla local' ),
			'desc'        => esc_html__( 'Ingresar nombre', 'cmb2' ),
			'id'          => $prefijoPro.'tAmarillaL',
			'type'        => 'text',
			'repeatable'  => true,
		) );

		$mbs_detalle->add_group_field( $grupo_tarjetas, array(
			'name'        => esc_html__( 'Tarjetas amarilla visita' ),
			'desc'        => esc_html__( 'Ingresar nombre', 'cmb2' ),
			'id'          => $prefijoPro.'tAmarillaV',
			'type'        => 'text',
			'repeatable'  => true,
		) );
  
  /*-- comienza tarjetas rojas --*/
  $grupo_tarjeta_r = $mbs_detalle->add_field( array(
		'id'          => $prefijoPro.'grupo_3',
		'type'        => 'group',
    'repeatable'  => false,
		'options'     => array(
			'group_title'    => esc_html__( 'Tarjetas Rojas', 'cmb2' ),
			'add_button'     => esc_html__( 'Agregar', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => false,
      'closed'         => true,
		),
	) );

		$mbs_detalle->add_group_field( $grupo_tarjeta_r, array(
			'name'        => esc_html__( 'Tarjetas rojas local' ),
			'desc'        => esc_html__( 'Ingresar nombre', 'cmb2' ),
			'id'          => $prefijoPro.'tRojaL',
			'type'        => 'text',
			'repeatable'  => true,
		) );

		$mbs_detalle->add_group_field( $grupo_tarjeta_r, array(
			'name'        => esc_html__( 'Tarjetas rojas visita' ),
			'desc'        => esc_html__( 'Ingresar nombre', 'cmb2' ),
			'id'          => $prefijoPro.'tRojaV',
			'type'        => 'text',
			'repeatable'  => true,
		) );
	
	$grupo_detalle_2 = $mbs_detalle->add_field( array(
		'id'          => $prefijoPro.'grupo_2',
		'type'        => 'group',
    'repeatable'  => false,
		'options'     => array(
			'group_title'    => esc_html__( 'Detalles Juego Finalizado', 'cmb2' ),
			'add_button'     => esc_html__( 'Agregar', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => false,
      'closed'         => true,
		),
	) );
  

		$mbs_detalle->add_group_field( $grupo_detalle_2, array(
			'name'        => esc_html__( 'Arbitro' ),
			'desc'        => esc_html__( 'Ingresar Nombre', 'cmb2' ),
			'id'          => $prefijoPro.'arbitro',
			'type'        => 'text'
		) );

		$mbs_detalle->add_group_field( $grupo_detalle_2, array(
			'name'        => esc_html__( 'Tiempo de juego' ),
			'desc'        => esc_html__( 'Ingresar minutos', 'cmb2' ),
			'id'          => $prefijoPro.'tiempo',
			'type'        => 'text'
		) );

		$mbs_detalle->add_group_field( $grupo_detalle_2, array(
			'name'        => esc_html__( 'Publico' ),
			'desc'        => esc_html__( 'Ingresar cantidad', 'cmb2' ),
			'id'          => $prefijoPro.'publico',
			'type'        => 'text'
		) );

	// $mbs_detalle->add_group_field( $grupo_detalle, array(
	// 	'name'			        => esc_html__( 'Torneo', 'cmb2' ),
	// 	'desc'              => esc_html__( 'Elejir torneo', 'cmb2' ),
	// 	'id'                => $prefijoPro.'torneo',
  //   'taxonomy'          => 'cat_torneos',
	// 	'type'              => 'taxonomy_select',
  //   'show_option_none'  => 'elegir',
	// 	'remove_default'    => false,
	// 	'column'		        => true,
	// ) );

	 /* -------- ** comienza sección Detalles ** ------- */  
	 $mbs_detalle_p = new_cmb2_box( array(
		'id'            => $prefijoPro.'detalles',
		'title'         => esc_html__( 'Detalles Generales' ),
		'object_types'  => array( 'cpt_programacion' ),
    'context'       => 'side',
    'priority'      => 'low',
    'show_names'    => 'true',
	) );

	$mbs_detalle_p->add_field( array(
    'name'        => esc_html__( 'Partido Nº' ),
		'desc'        => esc_html__( 'Ingresar Valor', 'cmb2' ),
		'id'          => $prefijoPro.'num',
		'type'        => 'text'
	) );
  
  $mbs_detalle_p->add_field( array(
		'name'          => esc_html__( 'Estadio' ),
		'desc'          => esc_html__( 'Agregar un recinto', 'cmb2' ),
		'id'            => $prefijoPro.'estadio',
		'type'          => 'text'
	) );

	$mbs_detalle_p->add_field( array(
		'name'        => esc_html__( 'Fecha' ),
		'desc'        => esc_html__( 'Ingresar Fecha', 'cmb2' ),
		'id'          => $prefijoPro.'fecha',
		'type'        => 'text_date',
    'date_format' => 'Y-m-d'
	) );

	$mbs_detalle_p->add_field( array(
		'name'        => esc_html__( 'Hora' ),
		'desc'        => esc_html__( 'Ingresar Hora', 'cmb2' ),
		'id'          => $prefijoPro.'hora',
		'type'        => 'text_time',
    'time_format' => 'H:m',
	) );  

	$mbs_detalle_p->add_field( array(
		'name'        => esc_html__( 'Año' ),
		'desc'        => esc_html__( 'Ingresar Año', 'cmb2' ),
		'id'          => $prefijoPro.'anio',
		'type'        => 'text',
	) );  
  
}

function opcionesSAVjugadores() {
  
  $prefijoJug = 'datos_jugadores_';

	 /* -------- ** comienza sección Detalles ** ------- */  
	 $mbs_detalle_j = new_cmb2_box( array(
		'id'            => $prefijoJug.'detalles',
		'title'         => esc_html__( 'Detalles Generales' ),
		'object_types'  => array( 'cpt_jugador' ),
    'context'       => 'side',
    'priority'      => 'low',
    'show_names'    => 'true',
	) );

	$mbs_detalle_j->add_field( array(
    'name'        => esc_html__( 'Número' ),
		'desc'        => esc_html__( 'Número de camiseta', 'cmb2' ),
		'id'          => $prefijoJug.'numero',
		'type'        => 'text',
		'column'			=> true
	) );
  
  $mbs_detalle_j->add_field( array(
		'name'        => esc_html__( 'Equipo' ),
		'desc'        => esc_html__( 'Equipo perteneciente', 'cmb2' ),
		'id'          => $prefijoJug.'equipo',
		'type'        => 'text',
		'column'			=> true
	) );

	$mbs_detalle_j->add_field( array(
		'name'        => esc_html__( 'Natalicio' ),
		'desc'        => esc_html__( 'Fecha de nacimiento', 'cmb2' ),
		'id'          => $prefijoJug.'natalicio',
		'type'        => 'text_date',
    'date_format' => 'd-m-Y'
	) );

	$mbs_detalle_j->add_field( array(
		'name'        => esc_html__( 'Estatura' ),
		'desc'        => esc_html__( 'En metros centimetros', 'cmb2' ),
		'id'          => $prefijoJug.'estatura',
		'type'        => 'text',
	) );  

	$mbs_detalle_j->add_field( array(
		'name'        => esc_html__( 'Peso' ),
		'desc'        => esc_html__( 'Peso en kilos', 'cmb2' ),
		'id'          => $prefijoJug.'peso',
		'type'        => 'text',
	) );  
  
}

function opcionesSAVposiciones() {
  
  $prefijoPos = 'datos_posiciones_';

	/* -------- ** comienza sección datos generales ** ------- */  
	$mbs_datos_generales = new_cmb2_box( array(
	 'id'            => $prefijoJug.'datos',
	 'title'         => esc_html__( 'Datos Generales' ),
	 'object_types'  => array( 'cpt_posicion' ),
	 'context'       => 'side',
	 'priority'      => 'low',
	 'show_names'    => 'true',
 ) );

 $mbs_datos_generales->add_field( array(
	 'name'        => esc_html__( 'Temporada' ),
	 'desc'        => esc_html__( 'Ingresar año', 'cmb2' ),
	 'id'          => $prefijoPos.'anio',
	 'type'        => 'text',
	 'column'				 => true,
 ) );

 $mbs_datos_generales->add_field( array(
	 'name'        => esc_html__( 'Partido' ),
	 'desc'        => esc_html__( 'Ingresar número', 'cmb2' ),
	 'id'          => $prefijoPos.'nPartido',
	 'type'        => 'text',
	 'column'				 => true,
 ) );

 $mbs_datos_generales->add_field( array(
	 'name'        => esc_html__( 'Ordenada' ),
	 'desc'        => esc_html__( 'Activar', 'cmb2' ),
	 'id'          => $prefijoPos.'tOrdenada',
	 'type'        => 'checkbox',
	 'column'				 => true,
 ) ); 

 /* -------- ** comienza sección Detalles ** ------- */  
 $mbs_detalle_tabla = new_cmb2_box( array(
	'id'            => $prefijoJug.'detalles',
	'title'         => esc_html__( 'Detalles Tabla' ),
	'object_types'  => array( 'cpt_posicion' ),
	'context'       => 'side',
	'priority'      => 'low',
	'show_names'    => 'true',
) );
	  
		/*-- comienza grupo de posiciones --*/
		$grupo_posiciones = $mbs_detalle_tabla->add_field( array(
			'id'          => $prefijoPos.'tabla_general',
			'type'        => 'group',
			'repeatable'  => true,
			'options'     => array(
				'group_title'    => esc_html__( 'Table General {#}', 'cmb2' ),
				'add_button'     => esc_html__( 'Agregar', 'cmb2' ),
				'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
				'sortable'       => true,
				'closed'         => true,
			),
		) );

		$mbs_detalle_tabla->add_group_field( $grupo_posiciones, array(
			'name'        => esc_html__( 'Posición' ),
			'desc'        => esc_html__( 'Ingresar número', 'cmb2' ),
			'id'          => $prefijoPos.'posicion',
			'type'        => 'text',
			'repeatable'  => false,
		) );

		$mbs_detalle_tabla->add_group_field( $grupo_posiciones, array(
			'name'        => esc_html__( 'Equipo' ),
			'desc'        => esc_html__( 'Ingresar nombre', 'cmb2' ),
			'id'          => $prefijoPos.'equipo',
			'type'        => 'text',
			'repeatable'  => false,
		) );

		$mbs_detalle_tabla->add_group_field( $grupo_posiciones, array(
			'name'        => esc_html__( 'Partidos Jugados' ),
			'desc'        => esc_html__( 'Ingresar número', 'cmb2' ),
			'id'          => $prefijoPos.'pJugado',
			'type'        => 'text',
			'repeatable'  => false,
		) );

		$mbs_detalle_tabla->add_group_field( $grupo_posiciones, array(
			'name'        => esc_html__( 'Partidos Ganados' ),
			'desc'        => esc_html__( 'Ingresar número', 'cmb2' ),
			'id'          => $prefijoPos.'pGanado',
			'type'        => 'text',
			'repeatable'  => false,
		) );

		$mbs_detalle_tabla->add_group_field( $grupo_posiciones, array(
			'name'        => esc_html__( 'Partidos Empatados' ),
			'desc'        => esc_html__( 'Ingresar número', 'cmb2' ),
			'id'          => $prefijoPos.'pEmpatado',
			'type'        => 'text',
			'repeatable'  => false,
		) );

		$mbs_detalle_tabla->add_group_field( $grupo_posiciones, array(
			'name'        => esc_html__( 'Partidos Perdidos' ),
			'desc'        => esc_html__( 'Ingresar número', 'cmb2' ),
			'id'          => $prefijoPos.'pPerdidos',
			'type'        => 'text',
			'repeatable'  => false,
		) );

		$mbs_detalle_tabla->add_group_field( $grupo_posiciones, array(
			'name'        => esc_html__( 'Goles a Favor' ),
			'desc'        => esc_html__( 'Ingresar número', 'cmb2' ),
			'id'          => $prefijoPos.'gFavor',
			'type'        => 'text',
			'repeatable'  => false,
		) );

		$mbs_detalle_tabla->add_group_field( $grupo_posiciones, array(
			'name'        => esc_html__( 'Goles en Contra' ),
			'desc'        => esc_html__( 'Ingresar número', 'cmb2' ),
			'id'          => $prefijoPos.'gContra',
			'type'        => 'text',
			'repeatable'  => false,
		) );

		$mbs_detalle_tabla->add_group_field( $grupo_posiciones, array(
			'name'        => esc_html__( 'Diferencia de Goles' ),
			'desc'        => esc_html__( 'Ingresar número', 'cmb2' ),
			'id'          => $prefijoPos.'gDiferencia',
			'type'        => 'text',
			'repeatable'  => false,
		) );

		$mbs_detalle_tabla->add_group_field( $grupo_posiciones, array(
			'name'        => esc_html__( 'Total puntos' ),
			'desc'        => esc_html__( 'Ingresar número', 'cmb2' ),
			'id'          => $prefijoPos.'puntos',
			'type'        => 'text',
			'repeatable'  => false,
		) );

		$mbs_detalle_tabla->add_group_field( $grupo_posiciones, array(
			'name'        => esc_html__( 'Goles de Visitante' ),
			'desc'        => esc_html__( 'Ingresar número', 'cmb2' ),
			'id'          => $prefijoPos.'gVisitante',
			'type'        => 'text',
			'repeatable'  => false,
		) );

		$mbs_detalle_tabla->add_group_field( $grupo_posiciones, array(
			'name'        => esc_html__( 'Tarjetas Amarillas' ),
			'desc'        => esc_html__( 'Ingresar número', 'cmb2' ),
			'id'          => $prefijoPos.'tAmarillas',
			'type'        => 'text',
			'repeatable'  => false,
		) );

		$mbs_detalle_tabla->add_group_field( $grupo_posiciones, array(
			'name'        => esc_html__( 'Tarjetas Rojas' ),
			'desc'        => esc_html__( 'Ingresar número', 'cmb2' ),
			'id'          => $prefijoPos.'tRojas',
			'type'        => 'text',
			'repeatable'  => false,
		) );

}

function logoCategoriaSitioAzul() {

  $prefijoLogo = 'logo_categoria_';
	
	$mbs_logo_categoria = new_cmb2_box( [
	 'id'            => $prefijoLogo.'datos',
	 'title'         => esc_html__( 'Datos Generales' ),
	 'object_types'  => ['term'],
	 'taxonomies'		 => ['cat_torneos'],
	 'show_names'    => true,
 ] );
  
	

 $mbs_logo_categoria->add_field([
	 'name'        => esc_html__( 'Logo' ),
	 'desc'        => esc_html__( 'Elegir logo', 'cmb2' ),
	 'id'          => $prefijoLogo.'nombre',
	 'type'        => 'text',
	 'column'			 => true,
 ]);

}

?>