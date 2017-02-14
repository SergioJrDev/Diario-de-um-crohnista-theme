<?php 

// Register Custom Post Type
function post_type_blog() {

	$labels = array(
		'name'                  => _x( 'blog', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'blog', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'blog', 'text_domain' ),
		'name_admin_bar'        => __( 'blog', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todos Itens', 'text_domain' ),
		'add_new_item'          => __( 'Add Novo Item', 'text_domain' ),
		'add_new'               => __( 'Add Novo', 'text_domain' ),
		'new_item'              => __( 'Novo Item', 'text_domain' ),
		'edit_item'             => __( 'Editar Item', 'text_domain' ),
		'update_item'           => __( 'Atualizar Item', 'text_domain' ),
		'view_item'             => __( 'Ver Item', 'text_domain' ),
		'search_items'          => __( 'Procurar Item', 'text_domain' ),
		'not_found'             => __( 'Não Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Não Encontrado no Lixo', 'text_domain' ),
		'featured_image'        => __( 'Imagem Destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Setar Imagem Destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Remover Imagem Destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Blog Label', 'text_domain' ),
		'description'           => __( 'Blog Descrição', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'editor', 'thumbnail', 'title' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'blog', $args );

}

function post_type_parceiros() {

	$labels = array(
		'name'                  => _x( 'Parceiros', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Parceiros', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Parceiros', 'text_domain' ),
		'name_admin_bar'        => __( 'Parceiros', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todos Itens', 'text_domain' ),
		'add_new_item'          => __( 'Add Novo Item', 'text_domain' ),
		'add_new'               => __( 'Add Novo', 'text_domain' ),
		'new_item'              => __( 'Novo Item', 'text_domain' ),
		'edit_item'             => __( 'Editar Item', 'text_domain' ),
		'update_item'           => __( 'Atualizar Item', 'text_domain' ),
		'view_item'             => __( 'Ver Item', 'text_domain' ),
		'search_items'          => __( 'Procurar Item', 'text_domain' ),
		'not_found'             => __( 'Não Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Não Encontrado no Lixo', 'text_domain' ),
		'featured_image'        => __( 'Imagem Destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Setar Imagem Destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Remover Imagem Destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Blog Label', 'text_domain' ),
		'description'           => __( 'Blog Descrição', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'editor', 'thumbnail', 'title' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'parceiros', $args );

}

function post_type_events() {

	$labels = array(
		'name'                  => _x( 'Eventos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Eventos', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Eventos', 'text_domain' ),
		'name_admin_bar'        => __( 'Eventos', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todos Itens', 'text_domain' ),
		'add_new_item'          => __( 'Add Novo Item', 'text_domain' ),
		'add_new'               => __( 'Add Novo', 'text_domain' ),
		'new_item'              => __( 'Novo Item', 'text_domain' ),
		'edit_item'             => __( 'Editar Item', 'text_domain' ),
		'update_item'           => __( 'Atualizar Item', 'text_domain' ),
		'view_item'             => __( 'Ver Item', 'text_domain' ),
		'search_items'          => __( 'Procurar Item', 'text_domain' ),
		'not_found'             => __( 'Não Encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Não Encontrado no Lixo', 'text_domain' ),
		'featured_image'        => __( 'Imagem Destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Setar Imagem Destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Remover Imagem Destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Blog Label', 'text_domain' ),
		'description'           => __( 'Blog Descrição', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'editor', 'thumbnail', 'title' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'eventos',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'events', $args );

}

add_action( 'init', 'post_type_blog', 0 );
add_action( 'init', 'post_type_events', 0 );
add_action( 'init', 'post_type_parceiros', 0 );



 ?>