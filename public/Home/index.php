<?php
require_once "../layouts/functions.php";
// authenticate
$inPage = true;


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../assets/styles/Home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        .liked {
            color: #ef4444; /* text-red-500 */
            transform: scale(1.1); /* scale-110 */
        }

        .liked:hover {
            color: #b91c1c; /* text-red-700 */
            transform: scale(1.2); /* scale-120 */
        }
    </style>
    <title>Home</title>
</head>
<body class="bg-darkBlue" dir="rtl">
<div class="container mx-auto mt-10">
    <?php include_once("../layouts/header.php") ?>
    <div class="flex w-full relative" style="height: 650px">
        <div class="h-full w-2/3 mt-60">
            <p class="text-white text-3xl light">بازار جهانی توکن‌های غیرمثلی بر بستر بلاکچین پلیگان</p>
            <p class="text-7xl text-white bold my-16">دنیای NFT های <span class="text-red-600 bold">شگفت انگیز</span></p>
            <p class="text-2xl text-white opacity-50 pl-32"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
            <div class="flex h-20 mt-14">
                <div class="flex w-5/12">
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none"><path d="M14.3332 28.0001C6.79984 28.0001 0.666504 21.8667 0.666504 14.3334C0.666504 6.80008 6.79984 0.666748 14.3332 0.666748C21.8665 0.666748 27.9998 6.80008 27.9998 14.3334C27.9998 21.8667 21.8665 28.0001 14.3332 28.0001ZM14.3332 2.66675C7.89317 2.66675 2.6665 7.90675 2.6665 14.3334C2.6665 20.7601 7.89317 26.0001 14.3332 26.0001C20.7732 26.0001 25.9998 20.7601 25.9998 14.3334C25.9998 7.90675 20.7732 2.66675 14.3332 2.66675ZM28.3332 29.3347C28.0798 29.3347 27.8265 29.2414 27.6265 29.0414L24.9598 26.3747C24.7739 26.1866 24.6696 25.9327 24.6696 25.6681C24.6696 25.4035 24.7739 25.1496 24.9598 24.9614C25.3465 24.5747 25.9865 24.5747 26.3732 24.9614L29.0398 27.6281C29.4265 28.0147 29.4265 28.6547 29.0398 29.0414C28.8398 29.2414 28.5865 29.3347 28.3332 29.3347Z" fill="white" fill-opacity="0.5"/></svg></div>
                        <input type="text" id="input-group-1" class="bg-transparent border border-red-600 text-gray-900 text-lg rounded-3xl block w-full h-full ps-12 p-2.5" placeholder="جست و جو NFT ها و هنرمندان">
                    </div>
                </div>
                <button class="block w-4/12 rounded-3xl text-2xl text-white bold mr-16" style="background: linear-gradient(90deg, #7011AD 0%, #BC0505 49.31%, #FC630F 100%);">دریافت مشاوره رایگان</button>
            </div>
        </div>
        <div class="h-full w-1/3 flex relative p-12 mt-10">
            <img class="absolute rounded-[70px] rotate-12 w-[421px] h-[547px] z-10" src="../layouts/images/fortniteIMG.jpg">
            <div class="absolute rounded-[70px] w-[411px] h-[526px] border opacity-50 z-0" style="transform: rotate(20deg)"></div>
            <div class="absolute z-0 rounded-full blur-3xl -right-60 -top-36 w-full" style=" height: 900px; background: radial-gradient(57.85% 57.85% at 50% 50%, rgba(61, 13, 88, 0.38) 32.38%, rgba(7, 15, 28, 0) 100%);box-shadow: 0px 0px 0px 0px #4B109440;box-shadow: 22px 12px 54px 0px #4B109440;box-shadow: 86px 48px 99px 0px #4B109436;box-shadow: 194px 109px 133px 0px #4B109421;box-shadow: 345px 193px 158px 0px #4B10940A;box-shadow: 538px 301px 173px 0px #4B109400;"></div>
            <div class="flex absolute bg-white/10 backdrop-blur-sm rounded-2xl top-[90%] p-4 z-20"><span><img src="../layouts/images/+500.png"></span><span class="text-white text-2xl self-center mr-2">+500 هنرمند</span></div>
        </div>
    </div>
<!--    first nav    -->
    <div class="flex mt-32 w-96">
        <div class="w-1/4"><img src="../layouts/images/Wallet.png"></div>
        <div class=" w-3/4 self-center">
            <p class="text-white text-4xl pb-2">کیف پول</p>
            <p class="text-white text-2xl light">Wallet</p>
        </div>
    </div>
    <div class="grid grid-cols-6 gap-8 py-10">
        <div class="block relative border py-8 bg-white/5" style="border-image-slice: 30;border-image-source: linear-gradient(317deg, #FC280C 8.01%, #07101D 100%, #07101D 100%)">
            <div class="absolute bg-darkBlue border-t border-t-[#FC280C] -bottom-[10px] -right-[19px] -rotate-45 z-10 w-12 h-8 rounded-b-3xl"></div>
            <img class="mx-auto" src="../layouts/images/MetaMask.png" alt="MetaMask">
            <p class="text-white text-xl opacity-50 text-center mt-6">MetaMask</p>
        </div>
        <div class="block relative border py-8 bg-white/5" style="border-image-slice: 30;border-image-source: linear-gradient(314.69deg, #00D1FF 25.82%, #07101D 87.02%);">
            <div class="absolute bg-darkBlue border-t border-t-[#00D1FF] -bottom-[10px] -right-[19px] -rotate-45 z-10 w-12 h-8 rounded-b-3xl"></div>
            <img class="mx-auto" src="../layouts/images/Coinbase.png" alt="Coinbase">
            <p class="text-white text-xl opacity-50 text-center mt-6">Coinbase</p>
        </div>
        <div class="block relative border py-8 bg-white/5" style="border-image-slice: 30;border-image-source: linear-gradient(314.69deg, #760AFF 13.25%, #07101D 87.02%);)">
            <div class="absolute bg-darkBlue border-t border-t-[#760AFF] -bottom-[10px] -right-[19px] -rotate-45 z-10 w-12 h-8 rounded-b-3xl"></div>
            <img class="mx-auto" src="../layouts/images/Exodus.png" alt="Exodus">
            <p class="text-white text-xl opacity-50 text-center mt-6">Exodus</p>
        </div>
        <div class="block relative border py-8 bg-white/5" style="border-image-slice: 30;border-image-source: linear-gradient(314.69deg, #FE007A 25.82%, #07101D 87.02%);">
            <div class="absolute bg-darkBlue border-t border-t-[#FE007A] -bottom-[10px] -right-[19px] -rotate-45 z-10 w-12 h-8 rounded-b-3xl"></div>
            <img class="mx-auto" src="../layouts/images/Uniswap.png" alt="Uniswap">
            <p class="text-white text-xl opacity-50 text-center mt-6">Uniswap</p>
        </div>
        <div class="block relative border py-8 bg-white/5" style="border-image-slice: 30;border-image-source: linear-gradient(314.69deg, #FFBF1C 25.82%, #07101D 87.02%);">
            <div class="absolute bg-darkBlue border-t border-t-[#FFBF1C] -bottom-[10px] -right-[19px] -rotate-45 z-10 w-12 h-8 rounded-b-3xl"></div>
            <img class="mx-auto" src="../layouts/images/Bainance.png" alt="Bainance">
            <p class="text-white text-xl opacity-50 text-center mt-6">Bainance</p>
        </div>
        <div class="block relative border py-8 bg-white/5" style="border-image-slice: 30;border-image-source: linear-gradient(314.69deg, #00D1FF 25.82%, #07101D 87.02%);">
            <div class="absolute bg-darkBlue border-t border-t-[#00D1FF] -bottom-[10px] -right-[19px] -rotate-45 z-10 w-12 h-8 rounded-b-3xl"></div>
            <img class="mx-auto" src="../layouts/images/TrustWallet.png" alt="TrustWallet">
            <p class="text-white text-xl opacity-50 text-center mt-6">TrustWallet</p>
        </div>
    </div>
    <!--    second nav    -->
    <div class="flex mt-32 w-96">
        <div class="w-1/4"><img src="../layouts/images/HotBids.png"></div>
        <div class=" w-3/4 self-center">
            <p class="text-white text-4xl pb-2">پیشنهاد های داغ</p>
            <p class="text-white text-2xl light">Hot Bids</p>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-8 mt-10">
        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4">
            <figure class="flex relative justify-center">
                <div class="flex absolute top-4 justify-center rounded-full bg-white/10 backdrop-blur-sm w-44 h-14 text-2xl text-white"><span class="text-white text-2xl self-center">2h 24m 12s</span></div>
                <div class="flex absolute top-4 left-0 rounded-full bg-white/10 backdrop-blur-sm w-14 h-14">
                    <i class="fas fa-heart text-2xl text-white cursor-pointer transition duration-300 self-center mx-auto" onclick="toggleHeartColor(this)"></i>
                </div>
                <img src="../layouts/images/DigiBoy.png" alt="DigiBoy">
            </figure>
            <figcaption class="block mt-4">
                <p class="text-4xl text-white bold py-5 text-left">Digi boy</p>
                <p class="text-3xl text-white light text-left">By Negor</p>
                <p class="grid grid-cols-2 mt-8"><span class="text-2xl text-white text-right light">آخرین پیشنهاد</span><span class="text-left"><span class="text-2xl text-white light mr-2">ETH</span><sapn class="text-3xl text-white bold">2.28</sapn></span></p>
                <button class="mt-8 px-14 py-4 text-2xl text-white bold rounded-xl" style="background: linear-gradient(90deg, #7011AD 0%, #BC0505 49.31%, #FC630F 100%);">پیشنهاد سریع</button>
            </figcaption>
        </div>
        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4">
            <figure class="flex relative justify-center">
                <div class="flex absolute top-4 justify-center rounded-full bg-white/10 backdrop-blur-sm w-44 h-14 text-2xl text-white"><span class="text-white text-2xl self-center">2h 24m 12s</span></div>
                <div class="flex absolute top-4 left-0 rounded-full bg-white/10 backdrop-blur-sm w-14 h-14">
                    <i class="fas fa-heart text-2xl text-white cursor-pointer transition duration-300 self-center mx-auto" onclick="toggleHeartColor(this)"></i>
                </div>
                <img src="../layouts/images/AngryApe.png" alt="AngryApe">
            </figure>
            <figcaption class="block mt-4">
                <p class="text-4xl text-white bold py-5 text-left">Angry Ape</p>
                <p class="text-3xl text-white light text-left">By Farshad</p>
                <p class="grid grid-cols-2 mt-8"><span class="text-2xl text-white text-right light">آخرین پیشنهاد</span><span class="text-left"><span class="text-2xl text-white light mr-2">ETH</span><sapn class="text-3xl text-white bold">2.28</sapn></span></p>
                <button class="mt-8 px-14 py-4 text-2xl text-white bold rounded-xl" style="background: linear-gradient(90deg, #7011AD 0%, #BC0505 49.31%, #FC630F 100%);">پیشنهاد سریع</button>
            </figcaption>
        </div>
        <div class="bg-white/10 backdrop-blur-sm rounded-xl p-4">
            <figure class="flex relative justify-center">
                <div class="flex absolute top-4 justify-center rounded-full bg-white/10 backdrop-blur-sm w-44 h-14 text-2xl text-white"><span class="text-white text-2xl self-center">2h 24m 12s</span></div>
                <div class="flex absolute top-4 left-0 rounded-full bg-white/10 backdrop-blur-sm w-14 h-14">
                    <i class="fas fa-heart text-2xl text-white cursor-pointer transition duration-300 self-center mx-auto" onclick="toggleHeartColor(this)"></i>
                </div>
                <img src="../layouts/images/Virtualland.png" alt="Virtualland">
            </figure>
            <figcaption class="block mt-4">
                <p class="text-4xl text-white bold py-5 text-left">Virtualland</p>
                <p class="text-3xl text-white light text-left">By Amirhossein</p>
                <p class="grid grid-cols-2 mt-8"><span class="text-2xl text-white text-right light">آخرین پیشنهاد</span><span class="text-left"><span class="text-2xl text-white light mr-2">ETH</span><sapn class="text-3xl text-white bold">2.28</sapn></span></p>
                <button class="mt-8 px-14 py-4 text-2xl text-white bold rounded-xl" style="background: linear-gradient(90deg, #7011AD 0%, #BC0505 49.31%, #FC630F 100%);">پیشنهاد سریع</button>
            </figcaption>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-x-10 mt-60">
        <div class="relative border border-green-600 rounded-xl backdrop-blur-sm z-10" style="background: linear-gradient(106.88deg, rgba(0, 255, 26, 0.1) 19.63%, rgba(255, 255, 255, 0.1) 98.74%);">
            <div class="flex absolute right-10 -top-12 w-20 h-20 bg-white/10 border border-white/50 rounded-2xl items-center justify-center z-20"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none"><path d="M19.9802 45.4998C19.5802 45.4998 19.2602 45.4198 19.0202 45.3198C18.2202 45.0198 16.8602 44.0398 16.8602 40.9398V28.0398H12.1802C9.50016 28.0398 8.54016 26.7798 8.20016 26.0398C7.86016 25.2798 7.56016 23.7398 9.32016 21.7198L24.4602 4.51977C26.5002 2.19977 28.1602 2.35977 28.9602 2.65977C29.7602 2.95977 31.1202 3.93977 31.1202 7.03977V19.9398H35.8002C38.4802 19.9398 39.4402 21.1998 39.7802 21.9398C40.1202 22.6998 40.4202 24.2398 38.6602 26.2598L23.5202 43.4598C22.1002 45.0798 20.8602 45.4998 19.9802 45.4998ZM27.8602 5.47977C27.8002 5.55977 27.3802 5.75977 26.7202 6.51977L11.5802 23.7198C11.0202 24.3598 10.9402 24.7598 10.9402 24.8398C10.9802 24.8598 11.3402 25.0598 12.1802 25.0598H18.3602C19.1802 25.0598 19.8602 25.7398 19.8602 26.5598V40.9598C19.8602 41.9598 20.0402 42.3998 20.1202 42.5198C20.1802 42.4398 20.6002 42.2398 21.2602 41.4798L36.4002 24.2798C36.9602 23.6398 37.0402 23.2398 37.0402 23.1598C37.0002 23.1398 36.6402 22.9398 35.8002 22.9398H29.6202C28.8002 22.9398 28.1202 22.2598 28.1202 21.4398V7.03977C28.1402 6.03977 27.9402 5.61977 27.8602 5.47977Z" fill="white"/></svg></div>
            <p class="mt-12 px-5 text-white text-3xl">سرعت</p>
            <p class="px-5 my-10 text-white light text-xl">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
        </div>
        <div class="relative border border-blue-800 rounded-xl backdrop-blur-sm z-10" style="background: linear-gradient(106.88deg, rgba(74, 1, 224, 0.1) 19.63%, rgba(255, 255, 255, 0.1) 98.74%);">
            <div class="flex absolute right-10 -top-12 w-20 h-20 bg-white/10 border border-white/50 rounded-2xl items-center justify-center z-20"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none"><path d="M23.9998 45.5199C21.8198 45.5199 19.6598 44.8799 17.9598 43.6199L9.3598 37.1999C7.0798 35.4999 5.2998 31.9599 5.2998 29.1199V14.2599C5.2998 11.1799 7.5598 7.8999 10.4598 6.8199L20.4398 3.0799C22.4198 2.3399 25.5398 2.3399 27.5198 3.0799L37.5198 6.8199C40.4198 7.8999 42.6798 11.1799 42.6798 14.2599V29.1199C42.6798 31.9599 40.8998 35.4999 38.6198 37.1999L30.0198 43.6199C28.3398 44.8799 26.1798 45.5199 23.9998 45.5199ZM21.4998 5.8799L11.5198 9.6199C9.7998 10.2599 8.2998 12.4199 8.2998 14.2599V29.1199C8.2998 31.0199 9.6398 33.6799 11.1398 34.7999L19.7398 41.2199C22.0398 42.9399 25.9398 42.9399 28.2398 41.2199L36.8398 34.7999C38.3598 33.6599 39.6798 30.9999 39.6798 29.1199V14.2599C39.6798 12.4399 38.1798 10.2799 36.4598 9.6199L26.4798 5.8799C25.1598 5.3799 22.8398 5.3799 21.4998 5.8799Z" fill="white"/><path d="M24.0001 23.3398H23.8601C20.9601 23.2598 18.8401 21.0398 18.8401 18.3398C18.8401 15.5798 21.1001 13.3198 23.8601 13.3198C26.6201 13.3198 28.8801 15.5798 28.8801 18.3398C28.8789 19.64 28.3742 20.8892 27.4717 21.8252C26.5693 22.7612 25.3394 23.3112 24.0401 23.3598C24.0201 23.3398 24.0201 23.3398 24.0001 23.3398ZM23.8601 16.3198C22.7401 16.3198 21.8401 17.2198 21.8401 18.3398C21.8401 19.4398 22.7001 20.3198 23.7801 20.3598H24.0001C24.5129 20.329 24.9943 20.1021 25.3443 19.726C25.6943 19.3499 25.8862 18.8535 25.8801 18.3398C25.8828 18.0738 25.8323 17.8099 25.7318 17.5637C25.6312 17.3174 25.4825 17.0936 25.2944 16.9055C25.1063 16.7174 24.8826 16.5687 24.6363 16.4681C24.39 16.3676 24.1261 16.3172 23.8601 16.3198ZM24.0001 34.6998C22.2801 34.6998 20.5401 34.2398 19.2001 33.3398C17.8601 32.4598 17.1001 31.1618 17.1001 29.7818C17.1001 28.4018 17.8601 27.1018 19.2001 26.2018C21.9001 24.4018 26.1201 24.4218 28.8001 26.2018C30.1401 27.0818 30.9001 28.3818 30.9001 29.7618C30.9001 31.1418 30.1401 32.4418 28.8001 33.3418C27.4601 34.2418 25.7201 34.6998 24.0001 34.6998ZM20.8601 28.6798C20.3601 28.9998 20.0801 29.3998 20.1001 29.7598C20.1001 30.1198 20.3801 30.5198 20.8601 30.8398C22.5401 31.9598 25.4601 31.9598 27.1401 30.8398C27.6401 30.5198 27.9201 30.1198 27.9201 29.7598C27.9201 29.3998 27.6401 28.9998 27.1601 28.6798C25.4801 27.5798 22.5401 27.5798 20.8601 28.6798Z" fill="white"/></svg></div>
            <p class="mt-12 px-5 text-white text-3xl">امنیت</p>
            <p class="px-5 my-10 text-white light text-xl">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
        </div>
        <div class="relative border border-red-700 rounded-xl backdrop-blur-sm z-10" style="background: linear-gradient(106.88deg, rgba(255, 19, 4, 0.1) 19.63%, rgba(255, 255, 255, 0.1) 98.74%);">
            <div class="flex absolute right-10 -top-12 w-20 h-20 bg-white/10 border border-white/50 rounded-2xl items-center justify-center z-20"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none"><path d="M13.1 45.5C15.36 45.5 17.74 44.96 20.2 43.92C22.6 42.9 25.02 41.5 27.38 39.8C29.72 38.08 31.98 36.16 34.12 34.06C36.24 31.92 38.16 29.66 39.86 27.34C41.58 24.94 42.96 22.54 43.94 20.22C44.98 17.74 45.5 15.34 45.5 13.08C45.5 11.52 45.22 10.04 44.68 8.66C44.12 7.24 43.22 5.92 42 4.78C40.46 3.26 38.7 2.5 36.82 2.5C36.04 2.5 35.24 2.68 34.56 3C33.78 3.36 33.12 3.9 32.64 4.62L28 11.16C27.58 11.74 27.26 12.3 27.04 12.86C26.78 13.46 26.64 14.06 26.64 14.64C26.64 15.4 26.86 16.14 27.28 16.84C27.6476 17.4648 28.0984 18.0367 28.62 18.54L29.98 19.96C29.96 20.02 29.94 20.06 29.92 20.1C29.68 20.52 29.2 21.24 28.28 22.32C27.3 23.44 26.38 24.46 25.46 25.4C24.28 26.56 23.3 27.48 22.38 28.24C21.24 29.2 20.5 29.68 20.06 29.9L20.1 30L18.64 28.56C18.02 27.94 17.42 27.48 16.84 27.18C15.74 26.5 14.34 26.38 12.94 26.96C12.42 27.18 11.86 27.48 11.26 27.9L4.62 32.62C3.88 33.12 3.34 33.76 3.02 34.52C2.72 35.28 2.58 35.98 2.58 36.68C2.58 37.64 2.8 38.6 3.22 39.5C3.64 40.4 4.16 41.18 4.82 41.9C5.96 43.16 7.2 44.06 8.64 44.64C10.02 45.2 11.52 45.5 13.1 45.5ZM36.82 5.5C37.92 5.5 38.94 5.98 39.92 6.94C40.84 7.8 41.48 8.74 41.88 9.76C42.3 10.8 42.5 11.9 42.5 13.08C42.5 14.94 42.06 16.96 41.18 19.04C40.28 21.16 39.02 23.36 37.42 25.56C35.82 27.76 34 29.9 32 31.92C30 33.9 27.84 35.74 25.62 37.36C23.46 38.94 21.24 40.22 19.04 41.14C15.62 42.6 12.42 42.94 9.78 41.84C8.76 41.42 7.86 40.78 7.04 39.86C6.58 39.36 6.22 38.82 5.92 38.18C5.68 37.68 5.56 37.16 5.56 36.64C5.56 36.32 5.62 36 5.78 35.64C5.90786 35.3923 6.10165 35.1846 6.34 35.04L12.98 30.32C13.38 30.04 13.74 29.84 14.08 29.7C14.52 29.52 14.7 29.34 15.38 29.76C15.78 29.96 16.14 30.26 16.54 30.66L18.06 32.16C18.84 32.92 20.04 33.1 20.96 32.76L21.5 32.52C22.32 32.08 23.28 31.4 24.34 30.5C25.3 29.68 26.34 28.72 27.6 27.48C28.58 26.48 29.56 25.42 30.58 24.24C31.52 23.14 32.2 22.2 32.62 21.42L32.86 20.82C32.98 20.36 33.02 20.1 33.02 19.82C33.02 19.1 32.76 18.46 32.26 17.96L30.76 16.4C30.36 16 30.06 15.62 29.86 15.28C29.7 15.02 29.64 14.8 29.64 14.6C29.64 14.44 29.7 14.2 29.8 13.96C29.94 13.64 30.16 13.28 30.44 12.9L35.08 6.34C35.2672 6.07129 35.5227 5.85728 35.82 5.72C36.14 5.58 36.48 5.5 36.82 5.5ZM20.1 30.02L20.42 31.38L19.88 29.98C19.98 29.96 20.06 29.98 20.1 30.02ZM11 19.5C11.82 19.5 12.5 18.82 12.5 18C12.5 17.28 13.22 15.78 14.42 14.5C15.6 13.24 16.9 12.5 18 12.5C18.82 12.5 19.5 11.82 19.5 11C19.5 10.18 18.82 9.5 18 9.5C16.06 9.5 14.02 10.54 12.24 12.44C10.58 14.22 9.5 16.4 9.5 18C9.5 18.82 10.18 19.5 11 19.5ZM4 19.5C4.82 19.5 5.5 18.82 5.5 18C5.5 11.1 11.1 5.5 18 5.5C18.82 5.5 19.5 4.82 19.5 4C19.5 3.18 18.82 2.5 18 2.5C9.46 2.5 2.5 9.46 2.5 18C2.5 18.82 3.18 19.5 4 19.5Z" fill="white"/></svg></div>
            <p class="mt-12 px-5 text-white text-3xl">پشتیبانی</p>
            <p class="px-5 my-10 text-white light text-xl">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
        </div>
    </div>
    <!--    nav    -->
    <div class="flex mt-32 w-96">
        <div class="w-1/4"><img src="../layouts/images/HotBids.png"></div>
        <div class=" w-3/4 self-center">
            <p class="text-white text-4xl pb-2">پیشنهاد های داغ</p>
            <p class="text-white text-2xl light">Hot Bids</p>
        </div>
    </div>
    <div class="grid grid-cols-3 gap-x-10 mt-80">
        <div class="flex relative justify-center h-56 rounded-2xl bg-white/10">
            <img src="../layouts/images/dog.png" as/dog NFTlt="" class="absolute rounded-2xl h-96 -top-64">
            <div class="w-full px-4 mt-36">
                <p class="text-left text-white text-3xl bold">D'EVOLs</p>
                <p class="grid grid-cols-2 mt-2"><span class="flex"><span class="text-white text-2xl bold">ETH</span><span class="text-white text-2xl bold px-2">12.3</span><span><svg xmlns="http://www.w3.org/2000/svg" width="21" height="34" viewBox="0 0 21 34" fill="none"><g clip-path="url(#clip0_150_146)"><path d="M20.4683 17.115L10.4999 23.205L0.524902 17.115L10.4999 0L20.4683 17.115ZM10.4999 25.1606L0.524902 19.0706L10.4999 33.6L20.4749 19.0706L10.4999 25.1606Z" fill="#FFBF1C"/></g><defs><clipPath id="clip0_150_146"><rect width="21" height="33.6" fill="white"/></clipPath></defs></svg></span></span><span class="text-white text-2xl light text-left">By Reza</span></p>
            </div>
        </div>
        <div class="flex relative justify-center h-56 rounded-2xl bg-white/10">
            <img src="../layouts/images/wolf.png" a/wolf NFTlt="" class="absolute rounded-2xl h-96 -top-64">
            <div class="w-full px-4 mt-36">
                <p class="text-left text-white text-3xl bold">D'EVOLs</p>
                <p class="grid grid-cols-2 mt-2"><span class="flex"><span class="text-white text-2xl bold">ETH</span><span class="text-white text-2xl bold px-2">12.3</span><span><svg xmlns="http://www.w3.org/2000/svg" width="21" height="34" viewBox="0 0 21 34" fill="none"><g clip-path="url(#clip0_150_146)"><path d="M20.4683 17.115L10.4999 23.205L0.524902 17.115L10.4999 0L20.4683 17.115ZM10.4999 25.1606L0.524902 19.0706L10.4999 33.6L20.4749 19.0706L10.4999 25.1606Z" fill="#FFBF1C"/></g><defs><clipPath id="clip0_150_146"><rect width="21" height="33.6" fill="white"/></clipPath></defs></svg></span></span><span class="text-white text-2xl light text-left">By Amir</span></p>
            </div>
        </div>
        <div class="flex relative justify-center h-56 rounded-2xl bg-white/10">
            <img src="../layouts/images/horse.png" alt="horse NFT" class="absolute rounded-2xl h-96 -top-64">
            <div class="w-full px-4 mt-36">
                <p class="text-left text-white text-3xl bold">D'EVOLs</p>
                <p class="grid grid-cols-2 mt-2"><span class="flex"><span class="text-white text-2xl bold">ETH</span><span class="text-white text-2xl bold px-2">12.3</span><span><svg xmlns="http://www.w3.org/2000/svg" width="21" height="34" viewBox="0 0 21 34" fill="none"><g clip-path="url(#clip0_150_146)"><path d="M20.4683 17.115L10.4999 23.205L0.524902 17.115L10.4999 0L20.4683 17.115ZM10.4999 25.1606L0.524902 19.0706L10.4999 33.6L20.4749 19.0706L10.4999 25.1606Z" fill="#FFBF1C"/></g><defs><clipPath id="clip0_150_146"><rect width="21" height="33.6" fill="white"/></clipPath></defs></svg></span></span><span class="text-white text-2xl light text-left">By Mahsa</span></p>
            </div>
        </div>
    </div>

    <?php include_once("../layouts/footer.php") ?>
</div>
<script src="../../assets/scripts/Home.js"></script>
</body>
</html>