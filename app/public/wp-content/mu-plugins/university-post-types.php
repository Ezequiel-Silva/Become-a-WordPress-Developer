<?php
    function university_post_types(){
        register_post_type('event', array(
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
    }
    add_action('init','university_post_types');
?>