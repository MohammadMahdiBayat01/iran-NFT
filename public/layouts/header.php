<?php
require_once "../layouts/functions.php";
variableExist($inPage, true, "http://localhost/tailwindcss/public/Home/index.php");
?>
<!--<div class="flex">-->
<!--    <div class="text-center text-white text-4xl w-1/4">Iran NFT</div>-->
<!--    <div class="text-center text-white w-2/4">IranNFT</div>-->
<!--    <div class="w-1/4">IranNFT</div>-->
<!--</div>-->

<nav class="hidden lg:block bg-none h-16">
    <div class="absolute z-0 rounded-full blur-3xl -right-60 -top-36" style="width: 900px; height: 900px; background: radial-gradient(57.85% 57.85% at 50% 50%, rgba(61, 13, 88, 0.38) 32.38%, rgba(7, 15, 28, 0) 100%);"></div>
    <div class="flex flex-wrap justify-between mx-auto z-10 relative">
        <a href="#" class="flex items-center rtl:space-x-reverse">
            <span class="self-center text-5xl bold whitespace-nowrap text-white">Iran NFT</span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse h-16">
            <div class="h-16 w-80 mx-auto flex">
                <a class="flex w-1/3 justify-center items-center"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 33 33" fill="none"><path d="M24.5867 24H10.3867C9.06667 24 7.8 23.44 6.90667 22.4667C6.46355 21.9841 6.12473 21.4154 5.91138 20.7959C5.69802 20.1765 5.61471 19.5197 5.66667 18.8667L6.77333 5.58667C6.81333 5.17333 6.66667 4.77333 6.38667 4.46667C6.10667 4.16 5.72 4 5.30667 4H3C2.45333 4 2 3.54667 2 3C2 2.45333 2.45333 2 3 2H5.32C6.29333 2 7.21333 2.41333 7.86667 3.12C8.22667 3.52 8.49333 3.98667 8.64 4.50667H25.2933C26.64 4.50667 27.88 5.04 28.7867 6C29.68 6.97333 30.1333 8.24 30.0267 9.58667L29.3067 19.5867C29.16 22.0267 27.0267 24 24.5867 24ZM8.70667 6.49333L7.66667 19.0267C7.6 19.8 7.85333 20.5333 8.37333 21.1067C8.89333 21.68 9.61333 21.9867 10.3867 21.9867H24.5867C25.9733 21.9867 27.2267 20.8133 27.3333 19.4267L28.0533 9.42667C28.085 9.04862 28.0372 8.66814 27.9131 8.30966C27.7889 7.95119 27.5912 7.62264 27.3325 7.34514C27.0738 7.06763 26.76 6.84731 26.4111 6.69832C26.0622 6.54932 25.686 6.47496 25.3067 6.48H8.70667V6.49333ZM22 30.6667C20.5333 30.6667 19.3333 29.4667 19.3333 28C19.3333 26.5333 20.5333 25.3333 22 25.3333C23.4667 25.3333 24.6667 26.5333 24.6667 28C24.6667 29.4667 23.4667 30.6667 22 30.6667ZM22 27.3333C21.6267 27.3333 21.3333 27.6267 21.3333 28C21.3333 28.3733 21.6267 28.6667 22 28.6667C22.3733 28.6667 22.6667 28.3733 22.6667 28C22.6667 27.6267 22.3733 27.3333 22 27.3333ZM11.3333 30.6667C9.86667 30.6667 8.66667 29.4667 8.66667 28C8.66667 26.5333 9.86667 25.3333 11.3333 25.3333C12.8 25.3333 14 26.5333 14 28C14 29.4667 12.8 30.6667 11.3333 30.6667ZM11.3333 27.3333C10.96 27.3333 10.6667 27.6267 10.6667 28C10.6667 28.3733 10.96 28.6667 11.3333 28.6667C11.7067 28.6667 12 28.3733 12 28C12 27.6267 11.7067 27.3333 11.3333 27.3333Z" fill="white"/><path d="M28.037 11.9098H12.016C11.4686 11.9098 11.0146 11.4471 11.0146 10.889C11.0146 10.3309 11.4686 9.86816 12.016 9.86816H28.037C28.5844 9.86816 29.0383 10.3309 29.0383 10.889C29.0383 11.4471 28.5844 11.9098 28.037 11.9098Z" fill="white"/></svg></a>
                <button type="button" class="flex w-2/3 text-white rounded-lg bg-orange-light items-center justify-center"><span class="ml-3"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 23 26" fill="none"><path d="M11.4352 13.8749C7.73691 13.8749 4.72691 10.8649 4.72691 7.16659C4.72691 3.46825 7.73691 0.458252 11.4352 0.458252C15.1336 0.458252 18.1436 3.46825 18.1436 7.16659C18.1436 10.8649 15.1336 13.8749 11.4352 13.8749ZM11.4352 2.20825C10.1212 2.21133 8.86177 2.73472 7.93257 3.66392C7.00337 4.59312 6.47999 5.8525 6.47691 7.16659C6.47999 8.48067 7.00337 9.74006 7.93257 10.6693C8.86177 11.5985 10.1212 12.1218 11.4352 12.1249C12.7493 12.1218 14.0087 11.5985 14.9379 10.6693C15.8671 9.74006 16.3905 8.48067 16.3936 7.16659C16.3905 5.8525 15.8671 4.59312 14.9379 3.66392C14.0087 2.73472 12.7493 2.21133 11.4352 2.20825ZM21.4569 25.5416C20.9786 25.5416 20.5819 25.1449 20.5819 24.6666C20.5819 20.6416 16.4752 17.3749 11.4352 17.3749C6.39524 17.3749 2.28857 20.6416 2.28857 24.6666C2.28857 25.1449 1.89191 25.5416 1.41357 25.5416C0.935241 25.5416 0.538574 25.1449 0.538574 24.6666C0.538574 19.6849 5.42691 15.6249 11.4352 15.6249C17.4436 15.6249 22.3319 19.6849 22.3319 24.6666C22.3319 25.1449 21.9352 25.5416 21.4569 25.5416Z" fill="white"/></svg></span><span class="text-xl font-bold">ورود / ثبت نام</span></button>
            </div>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul class="flex flex-row font-medium p-4 md:p-0 md:space-x-8 rtl:space-x-reverse">
                <li>
                    <a href="#" class="block py-3 px-4 text-xl text-orange-light font-bold" aria-current="page">صفحه اصلی</a>
                    <hr class="mx-6 border-orange-light">
                </li>
                <li>
                    <a href="#" class="block py-3 px-4 text-darkGray text-xl">آموزش NFT</a>
                </li>
                <li>
                    <a href="#" class="block py-3 px-4 text-darkGray text-xl">گالری NFT ایرانی</a>
                </li>
                <li>
                    <a href="#" class="block py-3 px-4 text-darkGray text-xl">تبلیغ NFT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<nav class="block lg:hidden bg-none h-14">
    <!-- drawer component -->
    <div id="menu" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-64 dark:bg-gray-800" tabindex="-1" aria-labelledby="menu-label">
        <h5 id="menu-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">منو</h5>
        <button type="button" data-drawer-hide="menu" aria-controls="menu" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-100 group">
                        <span class="ms-3">صفحه اصلی</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-100 group">
                        <span class="ms-3">آموزش NFT</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-100 group">
                        <span class="ms-3">گالری NFT ایرانی</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-100 group">
                        <span class="ms-3">آموزش NFT</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-gray-100 group">
                        <span class="flex-1 ms-3 whitespace-nowrap">سبد خرید</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="grid grid-cols-3">
        <div><button type="button" data-drawer-target="menu" data-drawer-show="menu" data-drawer-body-scrolling="false" aria-controls="menu"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M21 5.25H3C2.59 5.25 2.25 4.91 2.25 4.5C2.25 4.09 2.59 3.75 3 3.75H21C21.41 3.75 21.75 4.09 21.75 4.5C21.75 4.91 21.41 5.25 21 5.25ZM21.001 10.25H11.531C11.121 10.25 10.781 9.91 10.781 9.5C10.781 9.09 11.121 8.75 11.531 8.75H21.001C21.411 8.75 21.751 9.09 21.751 9.5C21.751 9.91 21.411 10.25 21.001 10.25ZM21 15.25H3C2.59 15.25 2.25 14.91 2.25 14.5C2.25 14.09 2.59 13.75 3 13.75H21C21.41 13.75 21.75 14.09 21.75 14.5C21.75 14.91 21.41 15.25 21 15.25ZM21.001 20.25H11.531C11.121 20.25 10.781 19.91 10.781 19.5C10.781 19.09 11.121 18.75 11.531 18.75H21.001C21.411 18.75 21.751 19.09 21.751 19.5C21.751 19.91 21.411 20.25 21.001 20.25Z" fill="white"/></svg></button></div>
        <div class="text-white text-2xl bold text-center">Iran NFT</div>
        <div class="flex justify-end">
            <button type="button" class="h-10 w-10"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"><path d="M12.5 21.75C18.15 21.75 22.75 17.15 22.75 11.5C22.75 5.85 18.15 1.25 12.5 1.25C6.85 1.25 2.25 5.85 2.25 11.5C2.25 17.15 6.85 21.75 12.5 21.75ZM12.5 2.75C17.33 2.75 21.25 6.68 21.25 11.5C21.25 16.32 17.33 20.25 12.5 20.25C7.67 20.25 3.75 16.32 3.75 11.5C3.75 6.68 7.67 2.75 12.5 2.75ZM2 22.751C2.19 22.751 2.38 22.681 2.53 22.531L4.53 20.531C4.66948 20.3899 4.7477 20.1994 4.7477 20.001C4.7477 19.8026 4.66948 19.6121 4.53 19.471C4.24 19.181 3.76 19.181 3.47 19.471L1.47 21.471C1.18 21.761 1.18 22.241 1.47 22.531C1.62 22.681 1.81 22.751 2 22.751Z" fill="white"/></svg></button>
            <button type="button" class="h-10 w-10"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none"><path d="M12.0002 12.75C8.83015 12.75 6.25016 10.17 6.25016 7C6.25016 3.83 8.83015 1.25 12.0002 1.25C15.1702 1.25 17.7502 3.83 17.7502 7C17.7502 10.17 15.1702 12.75 12.0002 12.75ZM12.0002 2.75C10.8738 2.75264 9.79433 3.20126 8.99787 3.99771C8.20141 4.79417 7.7528 5.87364 7.75015 7C7.7528 8.12636 8.20141 9.20583 8.99787 10.0023C9.79433 10.7987 10.8738 11.2474 12.0002 11.25C13.1265 11.2474 14.206 10.7987 15.0024 10.0023C15.7989 9.20583 16.2475 8.12636 16.2502 7C16.2475 5.87364 15.7989 4.79417 15.0024 3.99771C14.206 3.20126 13.1265 2.75264 12.0002 2.75ZM20.5902 22.75C20.1802 22.75 19.8402 22.41 19.8402 22C19.8402 18.55 16.3202 15.75 12.0002 15.75C7.68015 15.75 4.16016 18.55 4.16016 22C4.16016 22.41 3.82016 22.75 3.41016 22.75C3.00016 22.75 2.66016 22.41 2.66016 22C2.66016 17.73 6.85015 14.25 12.0002 14.25C17.1502 14.25 21.3402 17.73 21.3402 22C21.3402 22.41 21.0002 22.75 20.5902 22.75Z" fill="white"/></svg></button>
        </div>
    </div>
</nav>
