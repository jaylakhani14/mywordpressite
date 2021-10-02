<?php

function my_custom_new_menu()
{
    register_nav_menus(
        array(
            'my-custom-menu' => __('My Custom Menu'),
            'extra-menu' => __('Extra Menu')
        )
    );
}
add_action('init', 'my_custom_new_menu');

?>


