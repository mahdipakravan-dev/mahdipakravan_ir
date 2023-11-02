<?php
/* Template Name:بلاگ */
require('wp-load.php');

get_header();
?>

<body class="font-shabnam text-base text-black dark:text-white dark:bg-slate-900">

<?php
get_template_part("inc/partials/navbar");
?>

<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="service">
    <div class="container">
        <div class="grid grid-cols-1 pb-2 text-center">
            <h3 class="mb-6 md:text-2xl text-xl md:leading-normal leading-normal font-semibold">جزوات دانشگاهی</h3>
        </div>

        <div class="w-full h-[300px] border border-slate-300 rounded mt-2 flex justify-center items-center hidden" id="booklets_container_empty">
            در حال حاضر مقاله ای گذاشته نشده است , به زودی...
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px] mt-8" id="blog_container">
            <?php
            $args = array(
                'post_type' => 'page',
                'category_name' => 'booklet',
                'posts_per_page' => 3,
                'order' => 'DESC'
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    ?>
                    <div class="relative group overflow-hidden rounded-lg shadow shadow-slate-200 dark:shadow-gray-800">
                        <?php the_post_thumbnail(); ?>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 bg-gradient-to-b to-slate-900 from-transparent transition-all duration-500"></div>
                        <div class="absolute bottom-0 opacity-0 group-hover:opacity-100 m-6 transition-all duration-500">
                            <a href="<?php the_permalink(); ?>" class="text-white hover:text-amber-500 font-semibold transition-all duration-500">
                                <?php the_title(); ?>
                            </a>
                            <span class="block text-sm text-slate-400">جزوات</span>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo 'No pages found with the "booklet" category.';
            endif;
            ?>
        </div>

        <div class="grid grid-cols-1 pb-6 text-center mt-8">
            <h3 class="mb-6 md:text-2xl text-xl md:leading-normal leading-normal font-semibold">مقاله ها</h3>

            <p class="text-slate-400 max-w-xl mx-auto text-[15px]">
                مقاله ها و جزوات من در حوزه های مهندسی نرم افزار , وب و هوش مصنوعی
            </p>
        </div>

        <div class="w-full h-[400px] border border-slate-300 rounded mt-8 flex justify-center items-center hidden"  id="post_container_empty">
            در حال حاضر مقاله ای گذاشته نشده است , به زودی...
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px] mt-8" id="blog_container">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get the current page number

            $query= new WP_Query(array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 10,
            ));


            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    ?>
                    <div class="relative group overflow-hidden rounded-lg shadow shadow-slate-200 dark:shadow-gray-800">
                        <?php the_post_thumbnail(); ?>
                        <div class="absolute inset-0 opacity-0 group-hover:opacity-100 bg-gradient-to-b to-slate-900 from-transparent transition-all duration-500"></div>
                        <div class="absolute bottom-0 opacity-0 group-hover:opacity-100 m-6 transition-all duration-500">
                            <a href="<?php the_permalink(); ?>" class="text-white hover:text-amber-500 font-semibold transition-all duration-500">
                                <?php the_title(""); ?>
                            </a>
                            <span class="block text-sm text-slate-400">جزوات</span>
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
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>

</body>
</html>
