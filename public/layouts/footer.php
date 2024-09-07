<?php
require_once "../layouts/functions.php";
variableExist($inPage, true, "http://localhost/tailwindcss/public/Home/index.php");
?>

<footer class="flex w-full h-80 mt-20" style="border-top: 1px solid;border-image-slice : 10 ;border-image-source: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #FFFFFF 100%);background: #091028;">
    <div class="w-4/12 h-full pt-12 pr-24 pl-16">
        <p class="text-white text-5xl bold mt-10">iran NFT</p>
        <p class="text-white text-xl light mt-8">بازار دیجیتال جهانی برای خرید و فروش کلکسیون ها و توکن های غیرقابل تعویض (NFT) و کشف اقلام دیجیتال منحصر به فرد</p>
    </div>
    <div class="grid grid-cols-2 w-5/12 h-full pt-12">
        <ul class="">
            <li class="text-white text-2xl bold py-3">دسترسی سریع</li>
            <li class="text-white text-2xl light py-3">شرایط استفاده از خدمات</li>
            <li class="text-white text-2xl light py-3">سوالات متداول</li>
            <li class="text-white text-2xl light py-3">درباره ما</li>
        </ul>
        <ul class="">
            <li class="text-white text-2xl bold py-3">حساب من</li>
            <li class="text-white text-2xl light py-3">پروفایل</li>
            <li class="text-white text-2xl light py-3">ان اف تی های شما</li>
            <li class="text-white text-2xl light py-3">علاقه مندی ها</li>
        </ul>
    </div>
    <div class="w-3/12 h-full pt-12 pl-20">
        <p class="text-white text-3xl mb-12">به ما بپیوندید</p>
        <div class="flex gap-x-5">
            <img src="../layouts/images/Telegram.png">
            <img src="../layouts/images/Twitter.png">
            <img src="../layouts/images/Discord.png">
            <img src="../layouts/images/Instagram.png">
        </div>
    </div>
</footer>
