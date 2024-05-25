<?php
/*
 * Add my new menu to the Admin Control Panel
 */

//en este espacio entran los tipo de post, las taxonomias, los menu y se guardan metadatos.
function mt_cpt_init() {  
  $nivelProducto = array(
    'name'            => __('Productos', 'mt-textdomain'),
    'singular_name'   => __('Producto', 'mt-textdomain'),
    'add_new'         => __('Agregar producto', 'mt-textdomain'),
    'add_new_item'    => __('Agregar nuevo producto', 'mt-textdomain'),
    'edit_item'       => __('Editar producto', 'mt-textdomain'),
    'new_item'        => __('Nuevo producto', 'mt-textdomain'),
    'all_items'       => __('Mostrar todos', 'mt-textdomain'),
    'featured_image'  => __('Imagen principal', 'mt-textdomain'),
  );
  
  $incluirProducto = array(
    'label'         => __('productos', 'mt-textdomain'),
    'description'   => __('Productos todos', 'mt-textdomain'),
    'labels'        => $nivelProducto,
    'public'        => true,
    'supports'      => array('title', 'editor', 'author', 'thumbnail'),
    'show_ui'       => true,
    'show_in_menu'  => true,
    'menu_position' => 5,
  );

  register_post_type('productos', $incluirProducto);
  
  flush_rewrite_rules();
  
  add_theme_support( 'post-thumbnails', array( 'productos' ) );
  
  register_taxonomy(
    'tipo_producto',
    'productos',
      array(
        'labels'        => array('name'=>__('Tipo Producto'), 'add_new_item' => __( 'Agregar Categoría' ),),
        'rewrite'       => array('slug' => 'tipoproducto'),
        'hierarchical'  => false,
        'meta_box_cb'   => false,
    )
  );
  
  register_nav_menus(
    array(
      'MenuTableroPrincipal' => __( 'Menu Tablero Principal' ),
      'MenuSesion' => __( 'Menu Sesion' )
    )
  );
  
}

add_action('init', 'mt_cpt_init');
add_action('admin_init','mt_cpt_init');	

function menu_css($classes, $item, $args) {
  if($args->theme_location == 'MenuTableroPrincipal') {
    $classes[] = '';
  }
  return $classes;
}


// agregando font awesome al tablero principal de wordpress
function faTablero() {
  wp_enqueue_style('Fontello', get_template_directory_uri().'/css/fontello/css/extintores.css', false);
}

function iconoProducto() {
   echo "<style type='text/css' media='screen'>
   		#adminmenu #menu-posts-productos .menu-icon-productos div.wp-menu-image::before { font-family: 'extintores' !important; content: '\\f134'; font-size:16px; }
		.cmb2_select { width: 100%; }
		.column-datos_tipo_producto, .column-datos_uno_codigoSKU { width: 10%; }
		</style>";
 }


// ESCONDER AREA DE OPCIONES PERSONALES DEL PERFIL

function hide_personal_options(){
?>
<script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery("#your-profile .form-table:first, #your-profile h3:first").remove();
  });
</script>
<?php
}

add_action('admin_head','hide_personal_options');
add_filter('nav_menu_css_class','menu_css',3,3);
add_action('admin_init', 'faTablero');
add_action('admin_head', 'iconoProducto');

add_action( 'wp_before_admin_bar_render', 'borrarLogoWP');
function borrarLogoWP() {

  global $wp_admin_bar;

  $wp_admin_bar->remove_menu( 'wp-logo' ); // Elimina el logo WordPress

}

?>
