<?php get_header(); ?>

<body class="font-shabnam text-base text-black dark:text-white dark:bg-slate-900">

<?php
    get_template_part("inc/partials/navbar");
    get_template_part("inc/partials/hero");
    get_template_part("inc/partials/intro");
    get_template_part("inc/partials/steps");
    get_template_part("inc/partials/reserve-cover");
    get_template_part("inc/partials/experience");
    get_template_part("inc/partials/portfolio");
    get_template_part("inc/partials/recommends");
    get_template_part("inc/partials/blog-hero");
    get_template_part("inc/partials/contact-hero");
?>
<?php get_footer(); ?>

</body>
</html>