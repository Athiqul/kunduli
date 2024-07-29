<?php 
session_start();

if(!isset($_SESSION['name']))
{
  header('Location: /');
  exit();
}

?>
<!DOCTYPE html>
<html lang="en" class="dark">

<?php require_once __DIR__ . '/../includes/header.php' ?>

<body class="bg-white scroll-smooth ">
    <div id="__next" data-reactroot>
        <div class="w-full">
            <div>
                <div id="analyser" class="overflow-hidden">
                    <div id="analyser"
                    class="jsx-56635bc6dab035da relative overflow-y-scroll min-h-screen   md:py-3 h-full md:h-screen flex justify-center w-full  bg-cover bg-center " style="background-image: url(https://cdn.astopia.com/e8f74246-789f-4791-a86b-a309155a246a.jpg);">
                        <div class="jsx-56635bc6dab035da max-w-[600px] overflow-hidden glass-effect  md:h-full w-full mx-auto md:rounded-[16px]"
                            style="background-image: linear-gradient(0deg, rgb(255, 255, 255), rgb(249, 245, 237));">
                            <div class="border-radius-[30px]"
                                style="width: 100%; background-color: rgb(238, 238, 238); overflow: hidden;">
                                <div class="bg-k_orange h-[6px]  border-radius-[30px]" style="width: 2.7027%;">
                                </div>
                            </div>
                            <div
                                class="flex md:px-5 h-full  overflow-y-auto overflow-x-hidden  flex-col z-[1] gap-10 pt-3  pb-28 relative w-full">
                                <div class="grid grid-cols-3 relative z-[1] md:gap-5 items-center px-5 md:px-10">
                                    <div class="w-full"></div>
                                    <div class="flex justify-center w-full"><img src="../src/imgs/logo.jpg"
                                            class="w-[130px] cursor-pointer rounded-full"></div>
                                </div>
                                <div class="h-full w-full">
                                    <div class=" w-full md:pb-28 overflow-hidden">
                                        <div class="flex flex-col w-full px-5">
                                            <h2 class="md:text-2xl text-2xl  font-linotte_bold mb-5">Namaste <?=$_SESSION['name']?>,</h2>
                                            <div class="flex gap-3 md:gap-5 flex-col">
                                                <p class="text-base undefined" style="line-height: 1.5;">We looked at
                                                    your details. You have a special birth chart, your kundli is unique.
                                                    We made a detailed kundli analysis report for you.</p>
                                                <p class="text-base undefined" style="line-height: 1.5;">We made a
                                                    special free report all about you. In over 30 easy-to-read pages,
                                                    you’ll learn about:</p>
                                                <ul class="ml-5 list-disc font-semibold">
                                                    <li>Foundation of your Kundli - Panchang</li>
                                                    <li>Your Big 3 in Kundli</li>
                                                    <li>Your Stored Karma</li>
                                                    <li>Your Elemental Balance</li>
                                                    <li>Your Soul Desire - Atma Karaka</li>
                                                    <li>Your Favorable Deity (Ishta Devta)</li>
                                                    <li>Benefic and Malefic Grahas in your Kundli</li>
                                                    <li>Your Details Planetary Profiles</li>
                                                    <li>Your Current Running Dasha</li>
                                                    <li>And more …</li>
                                                </ul>
                                                <p class="text-base undefined" style="line-height: 1.5;">Our report
                                                    helps you understand yourself better and make good choices. Without
                                                    this knowledge, you might miss out on key insights for personal
                                                    growth.</p>
                                                <p class="text-base undefined" style="line-height: 1.5;">Click ‘Next’ to
                                                    get started</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full " style="opacity: 1; transform: scale(1);"></div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex w-full z-[10] md:max-w-[600px] max-w-2xl left-1/2 -translate-x-1/2 justify-between gap-5 fixed md:bottom-[25px] bottom-3">
                        <div class="absolute rounded-[10px] bg-gradient-to-t from-white/10 to-k_orange/30 z-[-1] bottom-[-12px] transform rotate-180 left-0 w-full h-[100px] gap-2"
                            style="mask-image: linear-gradient(white, white, transparent);"></div>
                            <div
                            class="flex justify-between py-3 px-5 w-[95%] rounded-md mx-auto bg-white shadow shadow-zinc-300/50">
                            <a href="/"
                                class=" max-w-max flex-row-reverse gap-5 justify-between font-cera_regular border border-current opacity-70 text-zinc-500 text-base w-full py-2 px-3 hover:opacity-100 ease-in duration-100 rounded-md flex items-center text-center"><span
                                    class="text-current"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18"></path>
                                    </svg></span></a><a href="/user-report-age"
                                class=" max-w-max relative z-[999] gap-10 justify-between font-cera_regular bg-orange-400 active:bg-orange-800 text-white text-base w-full py-2.5 px-5 ease-in duration-100 rounded-md flex items-center text-center"><span>Next</span><span
                                    class="text-current"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                            d="M2 10a.75.75 0 0 1 .75-.75h12.59l-2.1-1.95a.75.75 0 1 1 1.02-1.1l3.5 3.25a.75.75 0 0 1 0 1.1l-3.5 3.25a.75.75 0 1 1-1.02-1.1l2.1-1.95H2.75A.75.75 0 0 1 2 10Z"
                                            clip-rule="evenodd"></path>
                                    </svg></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  
</body>

</html>