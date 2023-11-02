<!-- Start -->
<section class="relative md:py-24 py-16" id="blog">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-6 md:text-2xl text-xl md:leading-normal leading-normal font-semibold">مقاله ها و جزوات</h3>

            <p class="text-slate-400 max-w-xl mx-auto text-[15px]">
                مقاله ها و جزوات من در حوزه های مهندسی نرم افزار , وب و هوش مصنوعی
            </p>
        </div><!--end grid-->

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
        </div><!--end grid-->

        <div class="w-full text-center pt-16">
            <a href="https://madipakravan.ir/blog.html">همه مقالات</a>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End -->