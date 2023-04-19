<?php
    function university_post_types(){
        // Event Post Type
        register_post_type('event', array(
            'supports' => array('title','editor','excerpt'),
            'rewrite' => array('slug' => 'events'),
            'has_archive' => true,
            'public' => true,
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Events',
                'add_new_item' => 'Adicionar novo evento',
                'edit_item' => 'Editar evento',
                'all_items' => 'Todos os eventos',
                'singular_name' => 'Evento'
            ),
            'menu_icon' => 'dashicons-calendar'
        ));

        // Program Post Type
        register_post_type('program', array(
            'supports' => array('title','editor'),
            'rewrite' => array('slug' => 'programs'),
            'has_archive' => true,
            'public' => true,
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Programs',
                'add_new_item' => 'Adicionar novo programa',
                'edit_item' => 'Editar programa',
                'all_items' => 'Todos os programas',
                'singular_name' => 'Programa'
            ),
            'menu_icon' => 'dashicons-awards'
        ));
        // Professor Post Type
        register_post_type('professor', array(
            'supports' => array('title','editor'),
            'public' => true,
            'show_in_rest' => true,
            'labels' => array(
                'name' => 'Professors',
                'add_new_item' => 'Adicionar novo professor',
                'edit_item' => 'Editar professor',
                'all_items' => 'Todos os professors',
                'singular_name' => 'professor'
            ),
            'menu_icon' => 'dashicons-welcome-learn-more'
        ));
    }
    add_action('init','university_post_types');
?>