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
    }
    add_action('init','university_post_types');
?>