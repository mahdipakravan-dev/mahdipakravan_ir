<?php
$intro_image_url = mp_config("intro-media")["url"]
?>

<!-- Start -->
<section class="relative md:py-24 py-16" id="about">
    <div class="container">
        <div class="grid lg:grid-cols-12 md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
            <div class="lg:col-span-5 lg:px-8">
                <div class="relative">
                    <div class="absolute inset-0 border dark:border-gray-800 rounded-full -mt-[10px] -ms-3 h-[100%] w-[100%] -z-1"></div>
                    <img src="<?php echo esc_url($intro_image_url) ?>" class="rounded-full shadow-md shadow-gray-200 dark:shadow-gray-800" alt="">

                    <div class="absolute lg:bottom-20 md:bottom-10 bottom-6 ltr:lg:-right-16 rtl:lg:-left-16 ltr:md:-right-8 rtl:md:-left-8 ltr:right-0 rtl:left-0 p-4 rounded-lg shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 m-3 w-44 text-center">
                        <h6 class="font-semibold">+5 سال تجربه</h6>
                        <span class="text-sm text-slate-400">+6 سال مطالعه</span>
                    </div>
                </div>
            </div><!--end col-->

            <div class="lg:col-span-7">
                <div class="lg:ms-5">
                    <h3 class="mb-6 md:text-2xl text-xl md:leading-normal leading-normal font-semibold">از لحاظ فنی و علمی بگم براتون.</h3>

                    <p class="text-slate-400 max-w-xl text-[15px]">
                        از 5 سال گذشته من در حال مطالعه و پیاده سازی پروژه های مختلف بودم , این تجربیات به من امکان می‌دهد که با دقت و دانش عمیق تر به پروژه‌ها پرداخته و از کیفیت برتری برخوردار شوند. این تجربیات مرا توانمند کرده‌اند که کمتر با مشکلات فنی و باگ‌ها مواجه شوم.
                    </p>

                    <div class="mt-6">
                        <a href="#project" class="btn bg-amber-500/10 hover:bg-amber-500 border-amber-500/10 hover:border-amber-500 text-amber-500 hover:text-white rounded-md me-2 mt-2">مشاهده نمونه کارها</a>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->