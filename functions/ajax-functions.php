<?php

function populate_search_results() {
    if (empty($_POST['s']) || empty($_POST['nonce'])) {
        return false;
    }
    if (!wp_verify_nonce($_POST['nonce'], 'customjs')) {
        return false;
    }

    $s = sanitize_post($_POST['s']);

    query_posts(array( 
        's' => $s,
        'posts_per_page' => -1
    ));

    ob_start();
    get_template_part('loops/search-results');
    $results = ob_get_clean();
    ob_end_flush();

    echo $results;

    wp_die(); 
}

add_action("wp_ajax_populate_search_results", "populate_search_results");
add_action("wp_ajax_nopriv_populate_search_results", "populate_search_results"); 