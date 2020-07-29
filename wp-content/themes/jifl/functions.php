<?php

function jifl_files(){
    wp_enqueue_style('jifl_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','jifl_files');