<?php
add_action( 'cmb2_admin_init', 'metaboxTipoCyR' );
add_action( 'cmb2_admin_init', 'metaboxLadoCyR' );
add_action( 'cmb2_admin_init', 'metaboxAbajoCyR' );

/* -------- ** comienza opciones GENERALES ------- */
function metaboxTipoCyR() {

  $prefijo = 'datos_tipo_';
  
/* -------- ** comienza sección General ** ------- */

	$mbs_opciones = new_cmb2_box( array(
		'id'            => $prefijo.'categoria',
		'title'         => esc_html__( 'Producto', 'cmb2' ),
		'object_types'  => array( 'productos' ),
    'context'       => 'side',
    'priority'      => 'core',
    'show_names'    => 'true',
	'column'		=> 'true',
	) );

	$mbs_opciones->add_field( array(
		'desc'            => esc_html__( 'Elija un tipo de producto', 'cmb2' ),
		'id'              => $prefijo.'producto',
		'name'			  => esc_html__( 'Tipo', 'cmb2' ),
    	'taxonomy'        => 'tipo_producto',
		'type'            => 'taxonomy_select',
		'remove_default'  => 'true',
		'column'		  => 'true',
	) );
  
}
function metaboxLadoCyR() {

  $prefijo = 'datos_uno_';
  
/* -------- ** comienza sección General ** ------- */

	$mbs_opciones = new_cmb2_box( array(
		'id'            => $prefijo.'cualidad',
		'title'         => esc_html__( 'Sku, Precio, Oferta', 'cmb2' ),
		'object_types'  => array( 'productos' ),
    'context'       => 'side',
    'priority'      => 'low',
    'show_names'    => 'true',
	) );

	$mbs_opciones->add_field( array(
		'desc'       => esc_html__( 'Ingrese código SKU', 'cmb2' ),
		'name'		 => esc_html__( 'Sku', 'cmb2' ),
		'id'         => $prefijo.'codigoSKU',
		'type'       => 'text',
		'column'	 => 'true',
	) );

	$mbs_opciones->add_field( array(
		'desc'       => esc_html__( 'Ingresar precio fijo', 'cmb2' ),
		'id'         => $prefijo.'precioFijo',
		'type'       => 'text',
	) );

	$mbs_opciones->add_field( array(
		'desc'       => esc_html__( 'Ingresar Oferta (opcional)', 'cmb2' ),
		'id'         => $prefijo.'precioOferta',
		'type'       => 'text',
	) );
  
}
function metaboxAbajoCyR() {

  $prefijo = 'datos_dos_';
  
/* -------- ** comienza sección General ** ------- */

	$mbs_opciones = new_cmb2_box( array(
		'id'            => $prefijo.'cualidad',
		'title'         => esc_html__( 'Reseña corta y Descripción técnica', 'cmb2' ),
		'object_types'  => array( 'productos' ),
    'context'       => 'normal',
    'priority'      => 'high',
    'show_names'    => 'true',
	) );

	$mbs_opciones->add_field( array(
		'name'       => esc_html__( 'Reseña corta del producto', 'cmb2' ),
		'desc'       => esc_html__( 'Ingrese el texto', 'cmb2' ),
		'id'         => $prefijo.'reseniaCorta',
		'type'       => 'text',
	) );
	
	
	$mbs_opciones->add_field( array(
		'name'       => esc_html__( 'Caracteristicas técnicas', 'cmb2' ),
		'desc'       => esc_html__( 'Subir archivo  .CSV (valor separado por comas)', 'cmb2' ),
		'id'         => $prefijo.'listaDescripcion',
		'type'       => 'file',
    'options' => array(
      'url' => false, // Hide the text input for the url
    ),
    'text'    => array(
      'add_upload_file_text' => 'Subir CSV',
      'file_text' => 'Archivo: ',
		  'file_download_text' => 'Descargar', // default: "Download"
    ),
    'query_args' => array(
		  'type' => 'application/csv',
    ),
	) );

	$mbs_opciones->add_field( array(
		'name'       => esc_html__( 'Galeria del producto', 'cmb2' ),
		'desc'       => esc_html__( 'Subir maximo 10 imágenes', 'cmb2' ),
		'id'         => $prefijo.'imGaleria',
		'type'       => 'file_list',
    'text'       => array(
      'add_upload_files_text' => 'Subir imágenes (max. 10)'
    ),
    'query_args' => array(
      'type' => array(
        'image/jpeg',
        ),
		 ),
	) );
	
}

?>
