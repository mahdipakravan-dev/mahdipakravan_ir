<section class="relative md:py-24 py-16" id="project">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-2xl text-xl md:leading-normal leading-normal font-semibold">کارها و پروژه های من</h3>

            <p class="text-slate-400 max-w-xl mx-auto text-[15px]">این قسمت بزود در دسترس قرار خواهد گرفت...</p>
        </div><!--end grid-->
        <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 mt-8 gap-[30px]">
            <?php render_custom_posts(array(
                'post_type' => 'portfolio',
                'posts_per_page' => 6,
                'paged' => get_query_var('paged')
            )); ?>

        </div>
    </div>
</section>