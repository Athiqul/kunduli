<?php 
session_start();

if(!isset($_SESSION['name']))
{
  header('Location: /');
  exit();
}

//Age 
$year=date('Y');
$userAge=$year-$_SESSION['year'];
// Year Month 
$month=date('m');
$userMonth=$month-$_SESSION['month'];
//Year date
$date=date('d');
$userDay=$date-$_SESSION['day'];
?>

<!DOCTYPE html>
<html lang="en" class="dark">

<?php require_once __DIR__ . '/../includes/header.php' ?>

<body class="bg-white scroll-smooth ">
        <div class="w-full">
            <div>
                <div id="analyser" class="overflow-hidden">
                    <div id="analyser"
                class="jsx-56635bc6dab035da relative overflow-y-scroll min-h-screen   md:py-3 h-full md:h-screen flex justify-center w-full  bg-cover bg-center " style="background-image: url(https://cdn.astopia.com/e8f74246-789f-4791-a86b-a309155a246a.jpg);">
                        <div class="jsx-56635bc6dab035da max-w-[600px] overflow-hidden glass-effect  md:h-full w-full mx-auto md:rounded-[16px]"
                            style="background-image: linear-gradient(0deg, rgb(255, 255, 255), rgb(249, 245, 237));">
                            <div class="border-radius-[30px]"
                                style="width: 100%; background-color: rgb(238, 238, 238); overflow: hidden;">
                                <div class="bg-k_orange h-[6px]  border-radius-[30px]" style="width: 5.40541%;">
                                </div>
                            </div>
                            <div class=" h-full overflow-y-scroll overflow-x-hidden w-full">
                                <div class="w-full h-full" style="opacity:1; transform: scale(1);">
                                    <div
                                        class=" h-full w-full bg-green-700 items-center justify-center flex flex-col gap-10 pt-2 pb-28">
                                        <div class="flex flex-col justify-between gap-10 px-5">
                                            <div class="flex w-full flex-col justify-center items-center text-center">
                                                <h2 class="md:text-2xl text-2xl  font-linotte_bold mb-3 text-white">Age
                                                    by Numbers, Life by Stars</h2>
                                            </div>
                                            <div
                                                class="bg-white max-w-sm w-full mx-auto rounded-[30px] grid grid-cols-3 gap-5 p-5">
                                                <h2
                                                    class="text-lg text-center !font-cera_bold  font-linotte_bold col-span-3">
                                                    You’ve orbited the sun for <?=$userAge?> years, <?=$userMonth?> months, and <?=$userDay?> days,
                                                    collecting moments like constellations map the skies.</h2>
                                                <div class="p-2 bg-yellow-500 text-yellow-500 rounded-full">
                                                    <div
                                                        class="flex font-linotte_bold flex-col items-center rounded-full bg-white  px-2 py-5">
                                                        <span class="text-current"><?=$userAge?></span><span
                                                            class="text-sm text-current">Years</span></div>
                                                </div>
                                                <div class="p-2 bg-orange-500 text-orange-500 rounded-full">
                                                    <div
                                                        class="flex font-linotte_bold flex-col items-center rounded-full bg-white  px-2 py-5">
                                                        <span class="text-current"><?=$userMonth?></span><span
                                                            class="text-sm text-current">Months</span></div>
                                                </div>
                                                <div class="p-2 bg-blue-500 text-blue-500 rounded-full">
                                                    <div
                                                        class="flex font-linotte_bold flex-col items-center rounded-full bg-white  px-2 py-5">
                                                        <span class="text-current"><?=$userDay?></span><span
                                                            class="text-sm text-current">Days</span></div>
                                                </div>
                                            </div>
                                            <div class="flex flex-col gap-3 text-center px-5">
                                                <p class="text-base text-zinc-100" style="line-height: 1.5;">Eager to
                                                    see how the stars align for you?</p>
                                                <p class="text-base text-zinc-100" style="line-height: 1.5;">Click
                                                    ‘Next’ to explore the astrological anecdotes of your personal
                                                    galaxy.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex w-full z-[10] md:max-w-[600px] max-w-2xl left-1/2 -translate-x-1/2 justify-between gap-5 fixed md:bottom-[25px] bottom-3">
                        <div class="absolute rounded-[10px] bg-gradient-to-t from-white/10 to-k_orange/30 z-[-1] bottom-[-12px] transform rotate-180 left-0 w-full h-[100px] gap-2"
                            style="mask-image: linear-gradient(white, white, transparent);"></div>
                            <div
                            class="flex justify-between py-3 px-5 w-[95%] rounded-md mx-auto bg-white shadow shadow-zinc-300/50">
                            <a href="/user-report"
                                class=" max-w-max flex-row-reverse gap-5 justify-between font-cera_regular border border-current opacity-70 text-zinc-500 text-base w-full py-2 px-3 hover:opacity-100 ease-in duration-100 rounded-md flex items-center text-center"><span
                                    class="text-current"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18"></path>
                                    </svg></span></a><a href="/report-birth-punch"
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