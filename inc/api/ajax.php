<?php

class AjaxHandler
{
    public function __construct()
    {
        add_action('wp_ajax_load_posts', array($this, 'load_posts'));
        add_action('wp_ajax_nopriv_load_posts', array($this, 'load_posts'));
    }

    public function load_posts() {
        $page = intval($_POST['page']);
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 5,
            'paged' => $page,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                get_template_part('content', 'post');
            }
        }

        wp_reset_postdata();
        die();
    }
}