<?php
    $hero_url = mp_config("opt-media")["url"]
?>

<!-- Start Hero -->
<section class="relative pt-28 personal-wrapper overflow-hidden bg-amber-500/5" id="home">
    <div class="absolute inset-0" id="overlay"></div>
    <div class="container">
        <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
            <div>
                <h4 class="font-bold lg:text-[40px] text-3xl lg:leading-normal leading-normal mb-4">سلام, من مهدی پاکروان هستم !<br><span class="typewrite text-amber-500" data-period="2000" data-type='[ "مهندس نرم افزار", "طراح وب", "محقق هوش مصنوعی و ML" ]'> <span class="wrap"></span> </span></h4>
                <p class="text-slate-400 max-w-xl">
                    متخصص در توسعه وب و مهندسی نرم‌افزار با تجربه و علاقه به هوش مصنوعی و وب 3 هستم. هدف من ادغام این تخصص‌ها برای ایجاد راهکارهای نوآورانه در زمینه‌های مختلف است.
                </p>

                <div class="mt-6">
                    <a href="#" class="btn bg-amber-500/10 hover:bg-amber-500 border-amber-500/10 hover:border-amber-500 text-amber-500 hover:text-white rounded-md ms-1">دانلود رزومه</a>
                </div>
            </div>

            <div class="relative">
                <img src="<?php echo esc_url($hero_url); ?>" alt="">

                <div class="absolute lg:top-80 md:top-56 top-48 ltr:md:-right-0 ltr:right-2 rtl:md:-left-0 rtl:left-2 p-4 rounded-lg shadow-md dark:shadow-gray-800 bg-white dark:bg-slate-900 m-3 w-44 text-center">
                    <h6 class="font-semibold">طراح وب</h6>
                    <h6 class="text-sm text-slate-400 mt-1">+5 سال تجربه</h6>
                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<div class="relative">
    <div class="absolute block w-full h-auto bottom-[25px] z-1 left-0">
        <a href="#about"><i class="mdi mdi-arrow-down absolute top-0 left-0 right-0 text-center inline-flex items-center justify-center rounded-full bg-white dark:bg-slate-900 h-12 w-12 mx-auto shadow-md dark:shadow-gray-800"></i></a>
    </div>
</div>
<!-- End Hero -->
