<?php

function render_custom_posts($args) {
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get the current page number

    $find_query = array(
        'post_status' => 'publish',
        'posts_per_page' => 10,
        'paged' => $paged,
    );

    $find_query = array_merge($find_query, $args);
    $query = new WP_Query($find_query);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="relative group overflow-hidden rounded-lg shadow shadow-slate-200 dark:shadow-gray-800">
                <?php
                add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );
                the_post_thumbnail();
                remove_filter( 'wp_calculate_image_srcset_meta', '__return_null' );
                ?>
                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 bg-gradient-to-b to-slate-900 from-transparent transition-all duration-500"></div>
                <div class="absolute bottom-0 opacity-0 group-hover:opacity-100 m-6 transition-all duration-500">
                    <a href="<?php the_permalink(); ?>" class="text-white hover:text-amber-500 font-semibold transition-all duration-500">
                        <?php the_title(""); ?>
                    </a>
                    <span class="block text-sm text-slate-400">
                        <?php
                        $categories = get_the_category();
                        if ($categories) {
                            $category_names = array();
                            foreach ($categories as $category) {
                                $category_names[] = '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
                            }
                            echo implode(', ', $category_names);
                        }
                        ?>
                    </span>
                </div>
            </div>
        <?php
        endwhile;

        // Pagination
        the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => 'Previous',
            'next_text' => 'Next',
        ));

        wp_reset_postdata();
    else :
        echo 'No posts found.';
    endif;
}


function display_comments($comments, $parent_id = 0)
{
    foreach ($comments as $comment) {
        if ($comment->comment_parent == $parent_id) {
            echo '<div class="p-4 rounded-lg shadow-md">';
            echo '<div class="flex items-center">';

            // Generate a random color for the circle
            $random_color = '#' . substr(md5($comment->comment_author), 0, 6);

            // Display the rounded circle with random color
            echo '<div class="rounded-full w-12 h-12 text-white text-center flex items-center justify-center" style="background-color: ' . $random_color . ';">';
            echo strtoupper(substr($comment->comment_author, 0, 1)); // Display the first letter of the author's name
            echo '</div>';

            echo '<div class="mr-4 mb-8">';
            echo '<h3 class="text-lg font-semibold">' . $comment->comment_author . '</h3>';
            echo '<p class="text-gray-600 text-sm">نوشته شده در : ' . get_comment_date('F j, Y', $comment) . '</p>';
            echo '</div>';
            echo '</div>';
            echo '<p class="mt-4">' . $comment->comment_content . '</p>';
            display_comments($comments, $comment->comment_ID); // Recursively display nested comments
            echo '</div>';
        }
    }
}
