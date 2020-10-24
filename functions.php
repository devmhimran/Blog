
<?php


function blog_bootstrapping(){
    load_theme_textdomain("blog");
    add_theme_support("posts-thumbnails");
    add_theme_support("title-tag");
}
add_action("after_setup_theme","blog_bootstrapping");


function load_assets(){
    wp_enqueue_style("css", get_stylesheet_uri());
    wp_enqueue_style("Bootstrap","//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css");
}
load_assets("wp_enqueue_scripts","blog_assets")
?>
