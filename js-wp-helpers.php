<?php
/**
 * Plugin Name: JS WP Helpers
 * Plugin URI:  
 * Description: Helper functions for wordpress
 * Version: 1.0
 * Author: Joel S
 * Author URI: 
 */

function wph_post_type_args($pluralName,$singularName){

    $capitalSingularname = ucfirst($singularName);
    $capitalPluralname = ucfirst($pluralName);

    $labels = array(
		'name'               => _x( $capitalPluralname, 'post type general name'),
		'singular_name'      => _x( $capitalSingularname, 'post type singular name'),
		'menu_name'          => _x( $capitalPluralname, 'admin menu'),
		'name_admin_bar'     => _x( $capitalSingularname, 'add new on admin bar'),
		'add_new'            => _x( 'Lägg till ny', $capitalSingularname),
		'add_new_item'       => __( "Lägg till ny $capitalSingularname"),
		'new_item'           => __( "Ny $capitalSingularname"),
		'edit_item'          => __( "Ändra $singularName"),
		'view_item'          => __( "Se $singularName"),
		'all_items'          => __( "Alla $pluralName"),
		'search_items'       => __( "Sök $pluralName"),
		'parent_item_colon'  => __( "Överordnad $pluralName:"),
		'not_found'          => __( "Ingen $singularName hittades."),
		'not_found_in_trash' => __( "Ingen $singularName hittades i skräpkorgen.")
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => $singularName ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    return compact('args');

 }