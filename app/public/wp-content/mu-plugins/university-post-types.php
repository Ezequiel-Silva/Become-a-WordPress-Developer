<?php
    function university_post_types(){
        register_post_type('event', array(
            'public' => true,
            'labels' => array(
                'name' => 'Events',
                'add_new_item' => 'Adicionar novo evento',
                'edit_item' => 'Editar evento',
                'all_items' => 'Todos os eventos'
            ),
            'menu_icon' => 'dashicons-calendar'
        ));
    }
    add_action('init','university_post_types');
?>