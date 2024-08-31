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
    <title>Home</title>
</head>
<body class="bg-darkBlue" dir="rtl">
<div class="container mx-auto mt-10">
    <?php include_once("../layouts/header.php") ?>
    <div class="flex w-full relative" style="height: 850px">
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
            <div class="absolute z-0 rounded-full blur-3xl -right-60 -top-36" style="width: 900px; height: 900px; background: radial-gradient(57.85% 57.85% at 50% 50%, rgba(61, 13, 88, 0.38) 32.38%, rgba(7, 15, 28, 0) 100%);box-shadow: 0px 0px 0px 0px #4B109440;box-shadow: 22px 12px 54px 0px #4B109440;box-shadow: 86px 48px 99px 0px #4B109436;box-shadow: 194px 109px 133px 0px #4B109421;box-shadow: 345px 193px 158px 0px #4B10940A;box-shadow: 538px 301px 173px 0px #4B109400;"></div>
            <div class="flex absolute bg-white/10 backdrop-blur-sm rounded-2xl top-2/3 p-4 z-20"><span><img src="../layouts/images/+500.png"></span><span class="text-white text-2xl self-center mr-2">+500 هنرمند</span></div>
        </div>
    </div>
    <?php include_once("../layouts/footer.php") ?>
</div>
</body>
</html>