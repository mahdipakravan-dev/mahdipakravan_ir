<?php
$hero_url = mp_config("reserve-media")["url"]
?>

<!-- Start -->
<section class="py-20 w-full table relative bg-no-repeat bg-center bg-cover" style="background-image: url('<?php echo $hero_url?>')">
    <div class="absolute inset-0 bg-slate-900/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-2xl text-xl text-white font-semibold">میتونیم همین الان باهم در ارتباط باشیم.</h3>

            <p class="text-white/80 max-w-xl mx-auto text-[15px]">با کلیک رو دکمه زیر در همین لحظه میتونیم با هم در ارتباط باشیم و پروژه/منتورینگ/مشاوره شما رو شروع کنیم</p>

            <div class="relative mt-8">
                <a href="<?php echo esc_url(get_home_url())?>/#contact" class="btn bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white rounded-md">رزرو جلسه</a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->