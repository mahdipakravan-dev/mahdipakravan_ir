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
            render_custom_posts(array(
                'post_type' => 'page',
                'category_name' => 'booklet',
                'posts_per_page' => 3,
                'order' => 'DESC'
            ))
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
            <?php render_custom_posts(array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 10,
            )) ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>

</body>
</html>
