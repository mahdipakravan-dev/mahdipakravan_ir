<?php
get_header();
$comments = get_comments(array(
    'post_id' => get_the_ID(),
    'status' => 'approve',
));
?>
<link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

<body class="font-shabnam text-base text-black dark:text-white dark:bg-slate-900">

<?php
get_template_part("inc/partials/navbar");
?>

<section class="relative md:py-24 py-16 bg-gray-50 dark:bg-slate-800" id="service">
    <div class="container">
        <main id="main" class="site-main">
            <article class="w-full shadow-md flex flex-col md:flex-row justify-between space-x-2 p-4">
                <div class="md:w-[60%]">
                    <h1 class="text-2xl font-bold pb-10">پروژه وبسایت تواناشو</h1>

                    <div class="bg-slate-900 p-2 rounded mb-4">
                        <h3 class="text-md mb-2 flex justify-start items-center">
                            <i data-feather="watch" class="h-5 w-5 ml-2"></i>
                            تاریخ
                        </h3>

                        <?php
                        $start_date = get_post_meta(get_the_ID(), 'start_date', true);
                        $end_date = get_post_meta(get_the_ID(), 'end_date', true);
                        echo "<p class='text-sm' dir='rtl'>
تاریخ شروع :                                
                                <span dir='rtl'>$start_date</span> 
                              </p>";
                        echo "<p class='text-sm' dir='rtl'>
تاریخ پایان :                                
                                <span dir='rtl'>$end_date</span> 
                              </p>";
                        ?>

                    </div>
                    <div class="bg-slate-900 p-2 rounded mb-4">
                        <h3 class="text-md mb-2 flex justify-start items-center">
                            <i data-feather="user" class="h-5 w-5 ml-2"></i>
                            کارفرما
                        </h3>

                        <p class="text-sm">
                            <?php
                                $summary = get_post_meta(get_the_ID(), 'master', true);
                                if (!empty($summary)) {
                                    echo wpautop($summary);
                                }
                            ?>
                        </p>
                    </div>

                    <div class="bg-slate-900 p-2 rounded mb-4 shadow-md">
                        <h3 class="text-md mb-2 flex justify-start items-center">
                            <i data-feather="monitor" class="h-5 w-5 ml-2"></i>
                            استک های استفاده شده
                        </h3>

                        <div class="grid grid-cols-4 gap-1">
                            <?php
                                $stacks = get_post_meta(get_the_ID(), 'stacks', true);
                                $array = explode(',', $stacks);
                                foreach ($array as $stack) {
                            ?>
                                <div class="border bg-slate-500 rounded p-1 ml-1 flex justify-center"><?php echo $stack?></div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="bg-slate-900 p-2 rounded mb-4">
                        <h3 class="text-md mb-2 flex justify-start items-center">
                            <i data-feather="globe" class="h-5 w-5 ml-2"></i>
                            آدرس وبسایت
                        </h3>

                        <p class="text-sm">
                            <?php
                            $address = get_post_meta(get_the_ID(), 'address', true);
                            if (!empty($address)) {
                                echo "<a href='$address'>$address</a>";
                            }
                            ?>
                        </p>
                    </div>
                </div>
                <div class="w-full h-full justify-center items-center ">
                    <div class="swiper">
                        <h4 class="mb-2">تصاویری از پروژه</h4>
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img src="https://arzonline.info/wp-content/uploads/2023/08/14020509000906_Test_PhotoN-504x375.jpg"
                                     alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://arzonline.info/wp-content/uploads/2023/08/14020509000906_Test_PhotoN-504x375.jpg"
                                     alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="https://arzonline.info/wp-content/uploads/2023/08/14020509000906_Test_PhotoN-504x375.jpg"
                                     alt="">
                            </div>
                            ...
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <!--                        <img width="100%" height="100%" src="https://impactconsultingng.com/wp-content/uploads/2019/05/projectmanagement-691x691.jpeg?189db0&189db0" alt="">-->
                </div>
            </article>
        </main>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<style>
    .swiper {
        width: 100%;
        height: 300px;
        border-radius: 10px;
    }
    @media screen and (min-width: 600px) {
        .swiper {
            width: 500px;
            height: 400px;
            margin-top: 10%;
        }
    }
</style>
<script type="module">
    import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
</script>
<?php get_footer(); ?>

</body>
</html>
