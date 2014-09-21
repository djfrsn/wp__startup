<?php
function getPageBySlugname($slugname) {
    $args = array(
        'post_type'     => 'page',
        'hierarchical'  => 0,
        'post_status'   => 'publish'
    );
    $pages = get_pages($args);
    foreach ($pages as $page) {
        if ($page->post_name == $slugname) {
            return $page->ID;
        }
    }       
}
?>
