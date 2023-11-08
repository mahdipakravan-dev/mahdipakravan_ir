<?php
    $logo_dark = mp_config("logo-dark")["url"];
    $logo_light = mp_config("logo-light")["url"];
?>
<!-- Navbar Start -->
<nav class="navbar" id="navbar">
    <div class="container flex flex-wrap items-center justify-between">
        <a class="navbar-brand md:me-8" href="index.html">
            <img src="<?php echo esc_url($logo_dark)?>" class="inline-block dark:hidden" alt="لوگو سایت شخصی">
            <img src="<?php echo esc_url($logo_dark)?>" class="hidden dark:inline-block" alt="سایت شخصی">
        </a>

        <div class="nav-icons flex items-center lg_992:order-2 ms-auto md:ms-8">
            <!-- Navbar Button -->
            <ul class="list-none menu-social mb-0">
                <li class="inline">
                    <a href="https://instagram.com/mahdipakravan_ir">
                        <span class="login-btn-primary"><span class="btn btn-icon btn-sm rounded-full bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white"><i class="uil uil-instagram align-middle"></i></span></span>
                        <span class="login-btn-light"><span class="btn btn-icon btn-sm rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i class="uil uil-instagram align-middle"></i></span></span>
                    </a>
                    <a href="https://t.me/mahdipakravan">
                        <span class="login-btn-primary"><span class="btn btn-icon btn-sm rounded-full bg-amber-500 hover:bg-amber-600 border-amber-500 hover:border-amber-600 text-white"><i class="uil uil-telegram align-middle"></i></span></span>
                        <span class="login-btn-light"><span class="btn btn-icon btn-sm rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i class="uil uil-telegram align-middle"></i></span></span>
                    </a>
                </li>
            </ul>
            <!-- Navbar Collapse Manu Button -->
            <button data-collapse="menu-collapse" type="button" class="collapse-btn inline-flex items-center ms-2 text-dark dark:text-white lg_992:hidden" aria-controls="menu-collapse" aria-expanded="false">
                <span class="sr-only">منو</span>
                <i class="mdi mdi-menu text-[24px]"></i>
            </button>
        </div>

        <!-- Navbar Manu -->
        <div class="navigation lg_992:order-1 lg_992:flex hidden me-auto" id="menu-collapse">
            <ul class="navbar-nav" id="navbar-navlist">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo esc_url(get_home_url())?>/#home">خانه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url(get_home_url())?>/#about">معرفی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url(get_home_url())?>/#service">مهارت ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url(get_home_url())?>/#experience">تجربیات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url(get_home_url())?>/#project">پروژه ها</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url(get_home_url())?>/#blog">مقالات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url(get_home_url())?>/#contact">ارتباط با من</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->