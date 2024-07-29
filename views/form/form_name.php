<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $_SESSION['name'] = $_POST['name'];
    header('Location: /user-gender');
}



?>

<!DOCTYPE html>
<html lang="en" class="dark">

<?php 

require_once __DIR__ .'/../includes/header.php';
?>

<body class="bg-white scroll-smooth "><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PC4V7FG"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <div id="__next" data-reactroot>
        <div class="w-full">
            <form method="POST" action="">
            <div>
                <div id="analyser"
                class="jsx-56635bc6dab035da relative overflow-y-scroll min-h-screen   md:py-3 h-full md:h-screen flex justify-center w-full  bg-cover bg-center " style="background-image: url(https://cdn.astopia.com/e8f74246-789f-4791-a86b-a309155a246a.jpg);">
                    <div class="jsx-56635bc6dab035da max-w-[600px] overflow-hidden glass-effect  md:h-full w-full mx-auto md:rounded-[16px]"
                        style="background-image: linear-gradient(0deg, rgb(255, 255, 255), rgb(249, 245, 237));">
                        <div class=" h-full px-5 pt-5 flex flex-col gap-14 overflow-y-scroll overflow-x-hidden w-full">
                            <div class="border-radius-[30px]"
                                style="width: 100%; background-color: rgb(238, 238, 238); overflow: hidden;">
                                <div class="bg-k_orange h-[6px] undefined border-radius-[30px]"
                                    style="width: 33.3333%;"></div>
                            </div>
                            <div class="w-full h-full" style="opacity: 1; transform: scale(1);">
                                <div class="w-full h-full max-w-lg mx-auto flex flex-col gap-20 items-center">
                                    <h2 class="md:text-3xl font-sonorous_rough  text-2xl  text-center text-zinc-800"
                                        style="line-height: 1.1;">What’s Your Name?</h2>
                                    <div
                                        class="flex max-w-md mx-auto flex-col h-full justify-between items-end gap-10 w-full">
                                        <div class="gap-10 flex flex-col w-full"><input type="text"
                                                placeholder="Enter your name"
                                                class="!border-zinc-200 outline-none border  py-5 px-5 md:px-7 rounded-[10px]  focus:outline-k_orange duration-100 ease-in  md:text-xl text-lg   w-full"
                                                name="name" placeholder="Your name..." value="<?=  $_SESSION['name']??''?>" required></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="flex w-full z-[10] md:max-w-[600px] max-w-2xl left-1/2 -translate-x-1/2 justify-between gap-5 fixed md:bottom-[25px] bottom-3">
                    <div class="absolute rounded-[10px] bg-gradient-to-t from-white/10 to-k_orange/30 z-[-1] bottom-[-12px] transform rotate-180 left-0 w-full h-[150px] gap-2"
                        style="mask-image: linear-gradient(white, white, transparent);"></div>
                    <div
                        class="flex justify-between py-3 px-5 w-[95%] rounded-md mx-auto bg-white shadow shadow-zinc-300/50">
                        <a href="/"
                            class=" max-w-max flex-row-reverse gap-5 justify-between font-cera_regular border border-current opacity-70 text-zinc-500 text-base w-full py-2 px-3 hover:opacity-100 ease-in duration-100 rounded-md flex items-center text-center"><span
                                class="text-current"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18"></path>
                                </svg></span></a><button type="submit"
                            class=" max-w-max relative z-[999] gap-10 justify-between font-cera_regular bg-orange-400 active:bg-orange-800 text-white text-base w-full py-2.5 px-5 ease-in duration-100 rounded-md flex items-center text-center"><span>Next</span><span
                                class="text-current"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M2 10a.75.75 0 0 1 .75-.75h12.59l-2.1-1.95a.75.75 0 1 1 1.02-1.1l3.5 3.25a.75.75 0 0 1 0 1.1l-3.5 3.25a.75.75 0 1 1-1.02-1.1l2.1-1.95H2.75A.75.75 0 0 1 2 10Z"
                                        clip-rule="evenodd"></path>
                                </svg></span></button></div>
                </div>
            </div>
            </form>
        </div>
    </div>


</body>

</html>