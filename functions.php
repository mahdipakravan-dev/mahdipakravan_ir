<?php

define( 'MP_THEME_DIRECTORY', plugin_dir_path(__FILE__));
define( 'MP_FRAMEWORK_DIRECTORY', plugin_dir_url(__FILE__) . '/inc' );
function enable_page_categories() {
    register_taxonomy_for_object_type('category', 'page');
}
add_theme_support('post-thumbnails', array('page','post'));
function disable_post_thumbnail_srcset($sources) {
    return false;
}
add_filter('wp_calculate_image_srcset', 'disable_post_thumbnail_srcset');
function custom_image_sizes() {
    add_image_size('full-thumbnail', 800, 800, true); // Change 300 and 200 to your desired width and height
}
add_action('after_setup_theme', 'custom_image_sizes');

add_action('init', 'enable_page_categories');
function enqueue_custom_styles() {
    wp_enqueue_style('tobii-css', get_template_directory_uri() . '/dist/assets/libs/tobii/css/tobii.min.css');
    wp_enqueue_style('tiny-slider-css', get_template_directory_uri() . '/dist/assets/libs/tiny-slider/tiny-slider.css');
    wp_enqueue_style('unicons-css', get_template_directory_uri() . '/dist/assets/libs/@iconscout/unicons/css/line.css');
    wp_enqueue_style('mdi-css', get_template_directory_uri() . '/dist/assets/libs/@mdi/font/css/materialdesignicons.min.css');
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/dist/assets/css/tailwind.css');
}

add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

function enqueue_custom_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('feather-icons', get_template_directory_uri() . '/dist/assets/libs/feather-icons/feather.min.js', array(), null, true);
    wp_enqueue_script('gumshoe-polyfills', get_template_directory_uri() . '/dist/assets/libs/gumshoejs/gumshoe.polyfills.min.js', array(), null, true);
    wp_enqueue_script('tobii', get_template_directory_uri() . '/dist/assets/libs/tobii/js/tobii.min.js', array(), null, true);
    wp_enqueue_script('tiny-slider', get_template_directory_uri() . '/dist/assets/libs/tiny-slider/min/tiny-slider.js', array(), null, true);
    wp_enqueue_script('plugins-init', get_template_directory_uri() . '/dist/assets/js/plugins.init.js', array(), null, true);
    wp_enqueue_script('app', get_template_directory_uri() . '/dist/assets/js/app.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

function custom_preprocess_comment($commentdata) {
    if ( isset( $_POST['author'] ) && ! empty( $_POST['author'] ) ) {
        $commentdata['comment_author'] = wp_filter_nohtml_kses( $_POST['author'] );
    }
    if ( isset( $_POST['email'] ) && ! empty( $_POST['email'] ) ) {
        $commentdata['comment_author_email'] = sanitize_email( $_POST['email'] );
    }
    return $commentdata;
}
add_filter('preprocess_comment', 'custom_preprocess_comment');


require_once MP_THEME_DIRECTORY . "/inc/redux/main.php";
require_once MP_THEME_DIRECTORY . "/inc/api/utils.php";

if ( ! function_exists( 'mp_config' ) ) {
    function mp_config( $id, $fallback = false) {
        if(!$fallback) $fallback = "";
        return Redux::getOption('mp_config', $id, $fallback);
    }
}

// Add custom meta box for "summary"
function add_summary_meta_box() {
    add_meta_box(
        'summary-meta-box',
        'Summary',
        'display_summary_meta_box',
        'post',  // 'post' for posts, 'page' for pages
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'add_summary_meta_box');

function display_summary_meta_box($post) {
    $summary = get_post_meta($post->ID, 'summary', true);
    ?>
    <textarea name="summary" id="summary" rows="4" style="width: 100%;"><?php echo esc_textarea($summary); ?></textarea>
    <?php
}

function save_summary_meta_data($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (isset($_POST['summary'])) {
        update_post_meta($post_id, 'summary', sanitize_text_field($_POST['summary']));
    }
}
add_action('save_post', 'save_summary_meta_data');
