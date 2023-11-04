<!-- Start -->
<section class="relative pt-16 pb-6" id="blog">
    <div class="container">
        <div class="grid grid-cols-1 pb-4 text-center">
            <h3 class="mb-6 md:text-2xl text-xl md:leading-normal leading-normal font-semibold">جزوات من</h3>

            <p class="text-slate-400 max-w-xl mx-auto text-[15px]">
                جزوات من در رشته مهندسی نرم افزار
            </p>

        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px] mt-4" id="blog_container">
            <?php
                render_custom_posts(array(
                    'post_type' => 'page',
                    'category_name' => 'booklet',
                    'posts_per_page' => 3,
                    'order' => 'DESC'
                ));
            ?>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8 text-center">
            <h3 class="mb-6 md:text-2xl text-xl md:leading-normal leading-normal font-semibold">مقاله های من</h3>

            <p class="text-slate-400 max-w-xl mx-auto text-[15px]">
                مقاله های من در حوزه های مهندسی نرم افزار , وب و هوش مصنوعی
            </p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px] mt-4" id="blog_container">
            <?php
                render_custom_posts(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'order' => 'DESC'
                ))
            ?>
        </div><!--end grid-->

        <div class="w-full text-center mt-12">
            <a href="<?php echo site_url() ?>/blog">همه مقالات و جزوه ها</a>
        </div>
    </div>
</section>