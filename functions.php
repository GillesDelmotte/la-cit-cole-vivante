<?php

function assets($path){
return get_template_directory_uri() . '/' . trim($path, '/');
};

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}


function register_custom_post_types(){

    register_post_type('actualities', [
        'label' => 'actualités',
        'labels' => [
            'singular-name' => 'actualité',
            'add_new_item' => 'ajouter une nouvelle actualité'
        ],
        'description' => 'toutes les actualité de l‘école',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'rewrite' => ['slug' => 'actualities']
    ]);   

    register_post_type('teachers', [
        'label' => 'Enseignants',
        'labels' => [
            'singular-name' => 'enseignant',
            'add_new_item' => 'ajouter un enseignant'
        ],
        'description' => 'tous les enseignants',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-businessperson',
        'rewrite' => ['slug' => 'teachers']
    ]); 
    
    register_post_type('management', [
        'label' => 'Dirigeants',
        'labels' => [
            'singular-name' => 'dirigeant',
            'add_new_item' => 'ajouter un dirigeant'
        ],
        'description' => 'tous les dirigeants',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-businessman',
        'rewrite' => ['slug' => 'management']
    ]);  

    register_post_type('pop', [
        'label' => 'Membres du pop',
        'labels' => [
            'singular-name' => 'membre du pop',
            'add_new_item' => 'ajouter un membre du pop'
        ],
        'description' => 'tous les membres du pop',
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-businesswoman',
        'rewrite' => ['slug' => 'pop']
    ]);  
}
add_action( 'init', 'register_custom_post_types');


add_image_size('thumb_250x250', 250, 250, true);