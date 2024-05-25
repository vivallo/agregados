<?php

add_action( 'cmb2_admin_init', 'opcionesCyR' );
add_action( 'cmb2_admin_init', 'opcionesCyRubicar' );
add_action( 'cmb2_admin_init', 'opcionesCyRvitrina' );
add_action( 'cmb2_admin_init', 'opcionesCyRservicio' );
add_action( 'cmb2_admin_init', 'opcionesCyRsomos' );
add_action( 'cmb2_admin_init', 'opcionesCyRproducto' );
add_action( 'cmb2_admin_init', 'opcionesCyRcliente' );
add_action( 'cmb2_admin_init', 'opcionesCyRperfil' );


/* -------- ** comienza opciones GENERALES ------- */
function opcionesCyR() {

/* -------- ** comienza sección General ** ------- */

	$cmb_options = new_cmb2_box( array(
		'id'            => 'opcionesPlantilla',
		'title'         => esc_html__( 'General', 'cmb2' ),
		'object_types'  => array( 'options-page' ),
		'option_key'    => 'OpcionCyRgeneral',
    'parent_slug'   => 'opcionesED-functions.php',
	) );
  
	$cmb_options->add_field( array(
		'name' => esc_html__( 'Que Vitrina (slide) mostrar', 'cmb2' ),
		'desc' => esc_html__( 'elige que vitrina mostrar', 'cmb2' ),
		'id'   => 'elegirVitrina',
		'type' => 'title',
	) );
  
  $cmb_options->add_field( array(
    'name'    => 'Elegir Vitrina (slide)',
    'id'      => 'ordenVitrina',
    'type'    => 'radio_inline',
    'options' => array(
      'dinamica'    => __( 'Dinámica', 'cmb2' ),
      'estatica'    => __( 'Estática', 'cmb2' ),
    ),
    'default' => 'dinamica',
  ) );
  
	$cmb_options->add_field( array(
		'name' => esc_html__( 'Ordenar Secciones', 'cmb2' ),
		'desc' => esc_html__( 'elige el orden en que van a ir las secciones', 'cmb2' ),
		'id'   => 'ordenSeccion',
		'type' => 'title',
	) );

	$cmb_options->add_field( array(
		'name'             => esc_html__( 'Ordenar secciones en página principal', 'cmb2' ),
		'desc'             => esc_html__( 'elegir orden', 'cmb2' ),
		'id'               => 'ordenSecciones',
		'type'             => 'select',
		'show_option_none' => false,
		'options'          => array(
			'ordenUno'   => esc_html__( '1) Servicios - Productos', 'cmb2' ),
			'ordenDos'   => esc_html__( '2) Productos - Servicios', 'cmb2' ),
		),
    
	) );
  
}



/* -------- ** comienza opciones de UBICACIÓN ** ------- */
function opcionesCyRubicar() { 
  $secondary_options = new_cmb2_box( array(
		'id'           => 'opciones_ubicacion',
		'title'        => esc_html__( 'Ubicación', 'cmb2' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'OpcionCyRubicacion',
		'parent_slug'  => 'opcionesED-functions.php',
	) );
 
	/* direcciones */
	$secondary_options->add_field( array(
		'name' => esc_html__( 'Direcciones de Castro y Rivera extintores', 'cmb2' ),
		'desc' => esc_html__( 'Agrega o edita direcciones desde aquí', 'cmb2' ),
		'id'   => 'direcciones',
		'type' => 'title',
	) );
	
	$secondary_options->add_field( array(
		'name'    => esc_html__( 'Cargar dirección principal', 'cmb2' ),
		'desc'    => esc_html__( 'Dirección principal', 'cmb2' ),
		'id'      => 'direccionUno',
		'type'    => 'text',
	) );
  
	/* telefonos moviles */
	$secondary_options->add_field( array(
		'name' => esc_html__( 'Teléfonos Moviles', 'cmb2' ),
		'desc' => esc_html__( 'Agrega o cambia números desde aquí', 'cmb2' ),
		'id'   => 'fonoMovil',
		'type' => 'title',
	) );
	
	$secondary_options->add_field( array(
		'name'    => esc_html__( 'Cargar teléfono movil principal', 'cmb2' ),
		'desc'    => esc_html__( 'Número principal', 'cmb2' ),
		'id'      => 'movilUno',
		'type'    => 'text',
	) );
	
	$secondary_options->add_field( array(
		'name'    => esc_html__( 'Cargar teléfono movil dos', 'cmb2' ),
		'desc'    => esc_html__( 'Número opcional', 'cmb2' ),
		'id'      => 'movilDos',
		'type'    => 'text',
	) );
	
	$secondary_options->add_field( array(
		'name'    => esc_html__( 'Cargar teléfono movil tres', 'cmb2' ),
		'desc'    => esc_html__( 'Número opcional', 'cmb2' ),
		'id'      => 'movilTres',
		'type'    => 'text',
	) );
  
	/* whatsapp */
	$secondary_options->add_field( array(
		'name' => esc_html__( 'Números WhatsApp', 'cmb2' ),
		'desc' => esc_html__( 'Agrega, quita o cambia números desde aquí', 'cmb2' ),
		'id'   => 'numeroChat',
		'type' => 'title',
	) );
	
	$secondary_options->add_field( array(
		'name'    => esc_html__( 'Cargar número WhatsApp principal', 'cmb2' ),
		'desc'    => esc_html__( 'Número principal', 'cmb2' ),
		'id'      => 'WaUno',
		'type'    => 'text',
	) );
  
  /* Correos @ */
	$secondary_options->add_field( array(
		'name' => esc_html__( 'Correos electrónicos', 'cmb2' ),
		'desc' => esc_html__( 'Agrega, quita o cambia correos desde aquí', 'cmb2' ),
		'id'   => 'virtualCorreo',
		'type' => 'title',
	) );
  
	
	$secondary_options->add_field( array(
		'name'    => esc_html__( 'Cargar dirección de correo electrónico principal', 'cmb2' ),
		'desc'    => esc_html__( 'Diección principal', 'cmb2' ),
		'id'      => 'correoUno',
		'type'    => 'text',
	) );
	
	$secondary_options->add_field( array(
		'name'    => esc_html__( 'Cargar dirección de correo electrónico 2', 'cmb2' ),
		'desc'    => esc_html__( 'Dirección opcional', 'cmb2' ),
		'id'      => 'correoDos',
		'type'    => 'text',
	) );
  
	/* redes sociales */
	$secondary_options->add_field( array(
		'name' => esc_html__( 'Redes Sociales', 'cmb2' ),
		'desc' => esc_html__( 'Agrega, quita o cambia una red social desde aquí', 'cmb2' ),
		'id'   => 'redesSociales',
		'type' => 'title',
	) );
	
	$secondary_options->add_field( array(
		'name'    => esc_html__( 'Facebook', 'cmb2' ),
		'desc'    => esc_html__( 'Dirección web', 'cmb2' ),
		'id'      => 'facebook',
		'type'    => 'text',
	) );
	
	$secondary_options->add_field( array(
		'name'    => esc_html__( 'Twitter', 'cmb2' ),
		'desc'    => esc_html__( 'Dirección web', 'cmb2' ),
		'id'      => 'twitter',
		'type'    => 'text',
	) );
	
	$secondary_options->add_field( array(
		'name'    => esc_html__( 'Instagram', 'cmb2' ),
		'desc'    => esc_html__( 'Dirección web', 'cmb2' ),
		'id'      => 'instagram',
		'type'    => 'text',
	) );
	
	$secondary_options->add_field( array(
		'name'    => esc_html__( 'LinkedIn', 'cmb2' ),
		'desc'    => esc_html__( 'Dirección web', 'cmb2' ),
		'id'      => 'linkedin',
		'type'    => 'text',
	) );
	
	$secondary_options->add_field( array(
		'name'    => esc_html__( 'Youtube', 'cmb2' ),
		'desc'    => esc_html__( 'Dirección web', 'cmb2' ),
		'id'      => 'youtube',
		'type'    => 'text',
	) );
  
	$secondary_options->add_field( array(
		'name' => esc_html__( 'Formulario Contacto', 'cmb2' ),
		'desc' => esc_html__( 'Quita o cambia la foto de fondo desde aquí', 'cmb2' ),
		'id'   => 'seccionContacto',
		'type' => 'title',
	) );
   
	$secondary_options->add_field( array(
		'name'      => esc_html__( 'Contacto:', 'cmb2' ),
		'desc'      => esc_html__( 'Formulario Contact Form 7', 'cmb2' ),
		'id'        => 'codigoCF7',
		'type'      => 'text',
    'attributes' => array(
      'readonly'  => 'readonly',
    ),
	) );
  
	$secondary_options->add_field( array(
		'name'    => esc_html__( 'Contacto, imágen de fondo', 'cmb2' ),
		'desc'    => esc_html__( 'Cargar imágen', 'cmb2' ),
		'id'      => 'imgContacto',
		'type'    => 'file',
	) );
  
	$secondary_options->add_field( array(
		'name' => esc_html__( 'Mapa Google', 'cmb2' ),
		'desc' => esc_html__( 'Quita o cambia el mapa desde aquí', 'cmb2' ),
		'id'   => 'seccionMapa',
		'type' => 'title',
	) );
  
	$secondary_options->add_field( array(
		'name'    => esc_html__( 'Mapa:', 'cmb2' ),
		'desc'    => esc_html__( 'URL Google', 'cmb2' ),
		'id'      => 'mapaGoogle',
		'type'    => 'textarea_code',
	) );

}  



/* -------- ** comienza opciones de VITRINA (slide) ** ------- */
function opcionesCyRvitrina() {
  
  $vitrina_opciones = new_cmb2_box( array(
		'id'            => 'opciones_vitrina',
		'title'         => esc_html__( 'Vitrina (slide)', 'cmb2' ),
		'object_types'  => array( 'options-page' ),
		'option_key'    => 'OpcionCyRvitrina',
    'parent_slug'  => 'opcionesED-functions.php',
	) );
  
  
	$vitrina_opciones->add_field(array(
		'name'          => __( 'Vitrina dinámica', 'cmb2' ),
		'id'            => 'vitrinaDinamica',
		'type'          => 'title',
	) );

	$grupo_vitrina_1 = $vitrina_opciones->add_field( array(
		'id'          => 'vitrinaCyRuno',
		'type'        => 'group',
    'repeatable'  => false,
		'description' => esc_html__( 'Agregando datos', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Servicio número {#}', 'cmb2' ),
			'add_button'     => esc_html__( 'Agregar servicio', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => false,
      'closed'         => true,
//      'quicktags'      => false,
		),
	) );

	$vitrina_opciones->add_group_field($grupo_vitrina_1, array(
		'name'       => esc_html__( 'Sub Titulo', 'cmb2' ),
		'id'         => 'subtituloDinamica',
		'type'       => 'text',
	) );

	$vitrina_opciones->add_group_field($grupo_vitrina_1, array(
		'name'       => esc_html__( 'Titulo', 'cmb2' ),
		'id'         => 'tituloDinamica',
		'type'       => 'text',
	) );

	$vitrina_opciones->add_group_field($grupo_vitrina_1, array(
		'name'       => esc_html__( 'Refencias', 'cmb2' ),
		'id'         => 'refenciaDinamica',
		'type'       => 'text',
	) );
  
	$vitrina_opciones->add_group_field($grupo_vitrina_1, array(
		'name'    => esc_html__( 'Imágenes de la vitrina dinámica', 'cmb2' ),
		'desc'    => esc_html__( 'Cargar imágen', 'cmb2' ),
		'id'      => 'imgVitrina',
		'type'    => 'file',
	) ); 
  
  
    
	$vitrina_opciones->add_field(array(
		'name'          => __( 'Vitrina estática', 'cmb2' ),
		'id'            => 'vitrinaEstatica',
		'description' => esc_html__( 'dimensión recomendada para las imágenes es de 980(ancho) x 380(alto) pixeles', 'cmb2' ),
		'type'          => 'title',
	) );
  
  
  $vitrina_opciones->add_field(array(
    'name'         => esc_html__('Galería Vitrina', 'cmb2'),
    'desc'         => esc_html__('Cargar imágenes, dimensión recomendada es de 980x380 pixeles', 'cmb2'),
    'id'           => 'imgEstatica',
    'type'         => 'file_list',
    'preview_size' => array(100, 100),
  ));
  
  
  
}


  
/* -------- ** comienza opciones de SERVICIOS ** ------- */
function opcionesCyRservicio() {

  $servicios_opciones = new_cmb2_box( array(
		'id'           => 'opciones_servicios',
		'title'        => esc_html__( 'Servicios', 'cmb2' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'OpcionCyRservicios',
		'parent_slug'  => 'opcionesED-functions.php',
	) );
  
	$servicios_opciones->add_field( array(
		'name' => esc_html__( 'Instalación', 'cmb2' ),
		'desc' => esc_html__( 'Agrega, quita o cambia servicios desde aquí', 'cmb2' ),
		'id'   => 'tituloInstalar',
		'type' => 'title',
	) );

	$servicios_opciones->add_field( array(
		'name'       => esc_html__( 'Descripción del servicio', 'cmb2' ),
		'id'         => 'textoInstalar',
		'type'       => 'textarea',
	) );
  
	$servicios_opciones->add_field( array(
		'name' => esc_html__( 'Prevención', 'cmb2' ),
		'desc' => esc_html__( 'Agrega, quita o cambia servicios desde aquí', 'cmb2' ),
		'id'   => 'tituloPrevencion',
		'type' => 'title',
	) );

	$servicios_opciones->add_field( array(
		'name'       => esc_html__( 'Descripción del servicio', 'cmb2' ),
		'id'         => 'textoPrevencion',
		'type'       => 'textarea',
	) );
  
	$servicios_opciones->add_field( array(
		'name' => esc_html__( 'Asesoría', 'cmb2' ),
		'desc' => esc_html__( 'Agrega, quita o cambia servicios desde aquí', 'cmb2' ),
		'id'   => 'tituloAsesoria',
		'type' => 'title',
	) );

	$servicios_opciones->add_field( array(
		'name'       => esc_html__( 'Descripción del servicio', 'cmb2' ),
		'id'         => 'textoAsesoria',
		'type'       => 'textarea',
	) );
  
	$servicios_opciones->add_field( array(
		'name' => esc_html__( 'Mantención', 'cmb2' ),
		'desc' => esc_html__( 'Agrega, quita o cambia servicios desde aquí', 'cmb2' ),
		'id'   => 'tituloMantener',
		'type' => 'title',
	) );

	$servicios_opciones->add_field( array(
		'name'       => esc_html__( 'Descripción del servicio', 'cmb2' ),
		'id'         => 'textoMantener',
		'type'       => 'textarea',
	) );

}



/* -------- ** comienza seccion SOMOS ** ------- */
function opcionesCyRsomos() {

  $somos_options = new_cmb2_box( array(
		'id'           => 'opciones_somos',
		'title'        => esc_html__( 'Somos', 'cmb2' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'OpcionCyRsomos',
		'parent_slug'  => 'opcionesED-functions.php',
	) );
  
	$somos_options->add_field( array(
		'name' => esc_html__( 'Texto somos', 'cmb2' ),
		'desc' => esc_html__( 'Editar texto somos desde aquí', 'cmb2' ),
		'id'   => 'seccionSomos',
		'type' => 'title',
	) );

	$somos_options->add_field(array(
		'name'       => esc_html__( 'Descripción de la empresa', 'cmb2' ),
		'id'         => 'textoSomos',
		'type'       => 'wysiwyg',
    'options'    => array(
      'media_buttons' => false,
      'textarea_rows' => 8,
      'quicktags'     => false,
    ),
	) );
  
	$somos_options->add_field( array(
		'name' => esc_html__( 'Texto Misión', 'cmb2' ),
		'desc' => esc_html__( 'Editar los texto desde aquí', 'cmb2' ),
		'id'   => 'tituloMision',
		'type' => 'title',
	) );
	
	$somos_options->add_field( array(
		'name'       => esc_html__( 'Descripción del texto', 'cmb2' ),
		'id'         => 'textoMision',
		'type'       => 'wysiwyg',
    'options'    => array(
      'media_buttons' => false,
      'textarea_rows' => 8,
      'quicktags'     => false,
    ),
	) );

	$somos_options->add_field( array(
		'name' => esc_html__( 'Texto Visión', 'cmb2' ),
		'desc' => esc_html__( 'Editar los texto desde aquí', 'cmb2' ),
		'id'   => 'tituloVision',
		'type' => 'title',
	) );
	
	$somos_options->add_field( array(
		'name'       => esc_html__( 'Descripción del texto', 'cmb2' ),
		'id'         => 'textoVision',
		'type'       => 'wysiwyg',
    'options'    => array(
      'media_buttons' => false,
      'textarea_rows' => 8,
      'quicktags'     => false,
    ),
	) );
	
	$somos_options->add_field( array(
		'name' => esc_html__( 'Texto Política de calidad', 'cmb2' ),
		'desc' => esc_html__( 'Editar los texto desde aquí', 'cmb2' ),
		'id'   => 'tituloPolitica',
		'type' => 'title',
	) );
	
	$somos_options->add_field( array(
		'name'       => esc_html__( 'Descripción del texto', 'cmb2' ),
		'id'         => 'textoPolitica',
		'type'       => 'wysiwyg',
    'options'    => array(
      'media_buttons' => false,
      'textarea_rows' => 8,
      'quicktags'     => false,
    ),
	) );

}

  
  
/* -------- ** comienza seccion PRODUCTOS ** ------- */
function opcionesCyRproducto() {

  $productos_options = new_cmb2_box( array(
		'id'           => 'opciones_productos',
		'title'        => esc_html__( 'Productos', 'cmb2' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'OpcionCyRproductos',
		'parent_slug'  => 'opcionesED-functions.php',
	) );
  
	$productos_options->add_field( array(
		'name' => esc_html__( 'Mostrar u ocultar los precios de los productos', 'cmb2' ),
		'desc' => esc_html__( 'Desde aquí debes marcar o desmarcar', 'cmb2' ),
		'id'   => 'seccionProducto',
		'type' => 'title',
	) );
	
	$productos_options->add_field( array(
	'name' => 'Marca para mostrar precios:',
	'desc' => '(desmarcar para no mostrar precios)',
	'id'   => 'mostrarPrecios',
	'type' => 'checkbox',
	) );

}

 
  
/* -------- ** comienza seccion CLIENTES ** ------- */
function opcionesCyRcliente() {

  $clientes_options = new_cmb2_box( array(
		'id'           => 'opciones_clientes',
		'title'        => esc_html__( 'Clientes', 'cmb2' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'OpcionCyRclientes',
		'parent_slug'  => 'opcionesED-functions.php',
	) );
  
	$clientes_options->add_field( array(
		'name' => esc_html__( 'Clientes, sección a mostrar', 'cmb2' ),
		'desc' => __('Marca <b>mostrar</b> u <b>ocultar</b> esta sección', 'cmb2'),
		'id'   => 'tituloVision',
		'type' => 'title',
	) );

	$clientes_options->add_field( array(
    'name'    => 'Marcar opción',
    'id'      => 'clienteVision',
    'type'    => 'radio_inline',
    'options' => array(
        'mostrarCliente' => __( '<b>Mostrar</b> esta sección', 'cmb2' ),
        'ocultarCliente' => __( '<b>Ocultar</b> esta sección', 'cmb2' ),
    ),
    'default' => 'mostrarCliente',
	) );
  
	$clientes_options->add_field( array(
		'name' => esc_html__( 'Clientes de Castro y Rivera extintores', 'cmb2' ),
		'desc' => esc_html__( 'Agrega, Quita o cambia clientes desde aquí', 'cmb2' ),
		'id'   => 'seccionCliente',
		'type' => 'title',
	) );

	$groupo_clientes = $clientes_options->add_field( array(
		'id'          => 'clienteCyR',
		'type'        => 'group',
		'description' => esc_html__( 'Agregando clientes', 'cmb2' ),
		'options'     => array(
			'group_title'    => esc_html__( 'Cliente número {#}', 'cmb2' ),
			'add_button'     => esc_html__( 'Agregar cliente', 'cmb2' ),
			'remove_button'  => esc_html__( 'Eliminar', 'cmb2' ),
			'sortable'       => true,
      'closed'         => true,
		),
	) );
  
	$clientes_options->add_group_field( $groupo_clientes, array(
		'name'    => esc_html__( 'Elegir imágen del cliente', 'cmb2' ),
		'desc'    => esc_html__( 'Cargar imágen', 'cmb2' ),
		'id'      => 'imgCliente',
		'type'    => 'file',
	) );

	$clientes_options->add_group_field( $groupo_clientes, array(
		'name'       => esc_html__( 'Nombre del cliente', 'cmb2' ),
		'id'         => 'nombreCliente',
		'type'       => 'text',
	) );

	$clientes_options->add_group_field( $groupo_clientes, array(
		'name'       => esc_html__( 'Rubro del cliente', 'cmb2' ),
		'id'         => 'rubroCliente',
		'type'       => 'text',
	) );

}

/* -------- ** comienza seccion Avatar ** ------- */
function opcionesCyRperfil() {
  $prefijo = 'perfil_usuario_';
	
  $perfil_opciones = new_cmb2_box( array(
		'id'           		=> $prefijo . 'editar',
		'title'        		=> esc_html__( 'metabox de perfil de usuario', 'cmb2' ),
		'object_types' 		=> array( 'user' ),
	    'show_names'   		=> true,
	    'new_user_section'  =>'add_new_user',
	) );

	$perfil_opciones->add_field( array(
		'name'     => esc_html__( 'Información Extra', 'cmb2' ),
		'desc'     => esc_html__( 'Informacion extra (opcional)', 'cmb2' ),
		'id'       => $prefijo . 'extraInfo',
		'type'     => 'title',
		'on_front' => false,
	) );
	
	$perfil_opciones->add_field( array(
		'name'    => esc_html__( 'Avatar', 'cmb2' ),
		'desc'    => esc_html__( 'carga imágen personal para tú avatar', 'cmb2' ),
		'id'      => $prefijo . 'avatar',
		'type'    => 'file',
	) );
}

?>
