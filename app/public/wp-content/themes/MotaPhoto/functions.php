<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Twenty Twenty One
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    // Chargement du fichier scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'child-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true );
}

// fonction pour créer une taxonomie personnalisée
function motaphoto_register_taxonomies () {

    // Taxonomie "Catégorie"
    $labels = array(
   	 'name'          	=> ( 'Catégorie' ),
   	 'singular_name' 	=> ( 'Catégorie' ),
   	 'plural_name'      => ( 'Catégories' ),
     'search_items'  	=> ( 'Rechercher une catégorie' ),
   	 'all_items'     	=> ( 'Toutes les catégories' ),
   	 'edit_item'     	=> ( 'Modifier la catégorie' ),
   	 'update_item'   	=> ( 'Mettre à jour la catégorie' ),
   	 'add_new_item'  	=> ( 'Ajouter la nouvelle catégorie' ),
   	 'new_item_name' 	=> ( 'Nouvelle catégorie' ),
   	 'menu_name'     	=> ( 'Catégorie' )
    );

    $args = array(
   	'hierarchical'  	=> true,
   	'labels'        	=> $labels,
   	'show_ui'       	=> true,
   	'show_admin_column' => true,
    'query_var'     	=> true,
    'show_in_rest'  	=> true,
    );

    register_taxonomy('categ', array( 'photo' ), $args);

// Taxonomie "Format"
$labels = array(
    'name'          	=> ( 'Format' ),
    'singular_name' 	=> ( 'Format' ),
    'plural_name'      => ( 'Formats' ),
 'search_items'  	=> ( 'Rechercher un format' ),
    'all_items'     	=> ( 'Tous les formats' ),
    'edit_item'     	=> ( 'Modifier le format' ),
    'update_item'   	=> ( 'Mettre à jour le format' ),
    'add_new_item'  	=> ( 'Ajouter le nouveau format' ),
    'new_item_name' 	=> ( 'Nouveau format' ),
    'menu_name'     	=> ( 'Format' )
);

$args = array(
   'hierarchical'  	=> true,
   'labels'        	=> $labels,
   'show_ui'       	=> true,
   'show_admin_column' => true,
   'query_var'     	=> true,
   'show_in_rest'  	=> true,
);

register_taxonomy('format', array( 'photo' ), $args);
}

add_action('init', 'motaphoto_register_taxonomies'); 

