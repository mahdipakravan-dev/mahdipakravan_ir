<?php get_header(); ?>

<body class="font-shabnam text-base text-black dark:text-white dark:bg-slate-900">

<?php
get_template_part("inc/partials/navbar");
?>

<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="service">
    <div class="container">
        <div class="h-[70vh] w-full flex flex-col justify-center items-center">
            <?php the_content(); ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>

</body>
</html>
