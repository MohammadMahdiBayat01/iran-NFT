<?php
require_once "../layouts/functions.php";
variableExist($inPage, true, "http://localhost/tailwindcss/public/Home/index.php");
?>
<!--<div class="flex">-->
<!--    <div class="text-center text-white text-4xl w-1/4">Iran NFT</div>-->
<!--    <div class="text-center text-white w-2/4">IranNFT</div>-->
<!--    <div class="w-1/4">IranNFT</div>-->
<!--</div>-->

<nav class="bg-none h-20">
    <div class="absolute z-0 rounded-full blur-3xl bg-blue-800 -right-96 -top-96 opacity-20" style="width: 900px; height: 900px; "></div>
    <div class="flex flex-wrap justify-between mx-auto z-10 relativegit">
        <a href="#" class="flex items-center rtl:space-x-reverse w-3/12">
            <span class="self-center text-5xl font-semibold whitespace-nowrap text-white">Iran NFT</span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse h-20 w-3/12">
            <div class="h-20 w-80 mx-auto flex">
                <a class="flex w-1/3 justify-center items-center"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 33 33" fill="none"><path d="M24.5867 24H10.3867C9.06667 24 7.8 23.44 6.90667 22.4667C6.46355 21.9841 6.12473 21.4154 5.91138 20.7959C5.69802 20.1765 5.61471 19.5197 5.66667 18.8667L6.77333 5.58667C6.81333 5.17333 6.66667 4.77333 6.38667 4.46667C6.10667 4.16 5.72 4 5.30667 4H3C2.45333 4 2 3.54667 2 3C2 2.45333 2.45333 2 3 2H5.32C6.29333 2 7.21333 2.41333 7.86667 3.12C8.22667 3.52 8.49333 3.98667 8.64 4.50667H25.2933C26.64 4.50667 27.88 5.04 28.7867 6C29.68 6.97333 30.1333 8.24 30.0267 9.58667L29.3067 19.5867C29.16 22.0267 27.0267 24 24.5867 24ZM8.70667 6.49333L7.66667 19.0267C7.6 19.8 7.85333 20.5333 8.37333 21.1067C8.89333 21.68 9.61333 21.9867 10.3867 21.9867H24.5867C25.9733 21.9867 27.2267 20.8133 27.3333 19.4267L28.0533 9.42667C28.085 9.04862 28.0372 8.66814 27.9131 8.30966C27.7889 7.95119 27.5912 7.62264 27.3325 7.34514C27.0738 7.06763 26.76 6.84731 26.4111 6.69832C26.0622 6.54932 25.686 6.47496 25.3067 6.48H8.70667V6.49333ZM22 30.6667C20.5333 30.6667 19.3333 29.4667 19.3333 28C19.3333 26.5333 20.5333 25.3333 22 25.3333C23.4667 25.3333 24.6667 26.5333 24.6667 28C24.6667 29.4667 23.4667 30.6667 22 30.6667ZM22 27.3333C21.6267 27.3333 21.3333 27.6267 21.3333 28C21.3333 28.3733 21.6267 28.6667 22 28.6667C22.3733 28.6667 22.6667 28.3733 22.6667 28C22.6667 27.6267 22.3733 27.3333 22 27.3333ZM11.3333 30.6667C9.86667 30.6667 8.66667 29.4667 8.66667 28C8.66667 26.5333 9.86667 25.3333 11.3333 25.3333C12.8 25.3333 14 26.5333 14 28C14 29.4667 12.8 30.6667 11.3333 30.6667ZM11.3333 27.3333C10.96 27.3333 10.6667 27.6267 10.6667 28C10.6667 28.3733 10.96 28.6667 11.3333 28.6667C11.7067 28.6667 12 28.3733 12 28C12 27.6267 11.7067 27.3333 11.3333 27.3333Z" fill="white"/><path d="M28.037 11.9098H12.016C11.4686 11.9098 11.0146 11.4471 11.0146 10.889C11.0146 10.3309 11.4686 9.86816 12.016 9.86816H28.037C28.5844 9.86816 29.0383 10.3309 29.0383 10.889C29.0383 11.4471 28.5844 11.9098 28.037 11.9098Z" fill="white"/></svg></a>
                <button type="button" class="flex w-2/3 text-white rounded-lg bg-orange-light items-center justify-center"><span class="ml-4"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 23 26" fill="none"><path d="M11.4352 13.8749C7.73691 13.8749 4.72691 10.8649 4.72691 7.16659C4.72691 3.46825 7.73691 0.458252 11.4352 0.458252C15.1336 0.458252 18.1436 3.46825 18.1436 7.16659C18.1436 10.8649 15.1336 13.8749 11.4352 13.8749ZM11.4352 2.20825C10.1212 2.21133 8.86177 2.73472 7.93257 3.66392C7.00337 4.59312 6.47999 5.8525 6.47691 7.16659C6.47999 8.48067 7.00337 9.74006 7.93257 10.6693C8.86177 11.5985 10.1212 12.1218 11.4352 12.1249C12.7493 12.1218 14.0087 11.5985 14.9379 10.6693C15.8671 9.74006 16.3905 8.48067 16.3936 7.16659C16.3905 5.8525 15.8671 4.59312 14.9379 3.66392C14.0087 2.73472 12.7493 2.21133 11.4352 2.20825ZM21.4569 25.5416C20.9786 25.5416 20.5819 25.1449 20.5819 24.6666C20.5819 20.6416 16.4752 17.3749 11.4352 17.3749C6.39524 17.3749 2.28857 20.6416 2.28857 24.6666C2.28857 25.1449 1.89191 25.5416 1.41357 25.5416C0.935241 25.5416 0.538574 25.1449 0.538574 24.6666C0.538574 19.6849 5.42691 15.6249 11.4352 15.6249C17.4436 15.6249 22.3319 19.6849 22.3319 24.6666C22.3319 25.1449 21.9352 25.5416 21.4569 25.5416Z" fill="white"/></svg></span><span class="text-xl font-bold">ورود / ثبت نام</span></button>
            </div>
<!--            <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">-->
<!--                <span class="sr-only">Open main menu</span>-->
<!--                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">-->
<!--                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>-->
<!--                </svg>-->
<!--            </button>-->
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 w-6/12" id="navbar-cta">
            <ul class="flex flex-row font-medium p-4 md:p-0 md:space-x-8 rtl:space-x-reverse">
                <li>
                    <a href="#" class="block py-3 px-4 text-2xl text-orange-light font-bold" aria-current="page">صفحه اصلی</a>
                    <hr class="mx-6 border-orange-light">
                </li>
                <li>
                    <a href="#" class="block py-3 px-4 text-darkGray text-2xl">آموزش NFT</a>
                </li>
                <li>
                    <a href="#" class="block py-3 px-4 text-darkGray text-2xl">گالری NFT ایرانی</a>
                </li>
                <li>
                    <a href="#" class="block py-3 px-4 text-darkGray text-2xl">تبلیغ NFT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
