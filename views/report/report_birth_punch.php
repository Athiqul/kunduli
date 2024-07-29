<?php
session_start();

if (!isset($_SESSION['name'])) {
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
                    <div id="analyser" class="jsx-56635bc6dab035da relative overflow-y-scroll min-h-screen   md:py-3 h-full md:h-screen flex justify-center w-full  bg-cover bg-center " style="background-image: url(https://cdn.astopia.com/e8f74246-789f-4791-a86b-a309155a246a.jpg);">
                        <div class="jsx-56635bc6dab035da max-w-[600px] overflow-hidden glass-effect  md:h-full w-full mx-auto md:rounded-[16px]" style="background-image: linear-gradient(0deg, rgb(255, 255, 255), rgb(249, 245, 237));">
                            <div class="border-radius-[30px]" style="width: 100%; background-color: rgb(238, 238, 238); overflow: hidden;">
                                <div class="bg-k_orange h-[6px]  border-radius-[30px]" style="width: 8.10811%;">
                                </div>
                            </div>
                            <div class="flex md:px-5 h-full  overflow-y-auto overflow-x-hidden  flex-col z-[1] gap-10 pt-3  pb-28 relative w-full">
                                <div class="grid grid-cols-3 relative z-[1] md:gap-5 items-center px-5 md:px-10">
                                    <div class="w-full"></div>
                                    <div class="flex justify-center w-full"><img src="../src/imgs/logo.jpg" class="w-[130px] cursor-pointer rounded-full"></div>
                                </div>
                                <div class="w-full " style="opacity: 1; transform: scale(1);">
                                    <div class="flex h-full flex-col justify-between gap-10">
                                        <div class="flex gap-5 flex-col px-5">
                                            <div><img src="https://vedicrishi.in/kundli_analyser/panchang.png" class="md:w-[180px] w-[150px] float-right md:ml-5">
                                                <p class="text-base mb-3" style="line-height: 1.5;">In the grand
                                                    narrative of Vedic astrology, Panchang plays the role of a sage,
                                                    offering insights into our innate strengths and the shadows we
                                                    carry. It’s the whisper of the stars on the day we were born,
                                                    revealing rituals to harmonize our being with the universe.</p>
                                                <p class="text-base mb-3" style="line-height: 1.5;">The word "Panchang"
                                                    comes from "Panch," meaning five, and "Anga," meaning parts or
                                                    limbs. It refers to the five elements that determine the energy of a
                                                    day.</p>
                                                <p class="text-base mb-3" style="line-height: 1.5;">These elements are
                                                    based on how the Sun and Moon interact every day, affecting our
                                                    daily life.</p>
                                                <h2 class="text-xl  font-linotte_bold undefined">The Panchang shows five
                                                    special aspects</h2>
                                            </div>
                                            <div class="flex flex-col gap-4 py-3">
                                                <div class="overflow-hidden w-full will-change-transform" style="opacity: 1; transform: none;">
                                                    <div class="max-w  mx-auto relative flex flex-col gap-1 py-3 px-3  rounded-xl bg-[#faedcb]">
                                                        <h2 class="text-lg  font-linotte_bold undefined">Vaar - The day
                                                            of the week</h2>
                                                        <p class="text-base undefined" style="line-height: 1.5;">A key
                                                            part of panchanga, influencing the soul. It shapes how the
                                                            soul feels and communicates.</p>
                                                    </div>
                                                </div>
                                                <div class="overflow-hidden w-full will-change-transform" style="opacity: 1; transform: none;">
                                                    <div class="max-w  mx-auto relative flex flex-col gap-1 py-3 px-3  rounded-xl bg-[#f7d9c4]">
                                                        <h2 class="text-lg  font-linotte_bold undefined">Tithi - Phase
                                                            of Moon</h2>
                                                        <p class="text-base undefined" style="line-height: 1.5;">
                                                            Reflects human nature, showing strengths and weaknesses.
                                                            Special rituals like shanti puja are needed for birth tithis
                                                            like Amavasya or Pournima.</p>
                                                    </div>
                                                </div>
                                                <div class="overflow-hidden w-full will-change-transform" style="opacity: 1; transform: none;">
                                                    <div class="max-w  mx-auto relative flex flex-col gap-1 py-3 px-3  rounded-xl bg-[#c6def1]">
                                                        <h2 class="text-lg  font-linotte_bold undefined">Nakshatra - The
                                                            constellation the moon is in</h2>
                                                        <p class="text-base undefined" style="line-height: 1.5;">Each
                                                            nakshatra affects the mind's fluctuations. It's linked to
                                                            our thoughts, communication, and life energy. Certain
                                                            nakshatras, like Mula, require specific rituals for balance.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="overflow-hidden w-full will-change-transform" style="opacity: 1; transform: none;">
                                                    <div class="max-w  mx-auto relative flex flex-col gap-1 py-3 px-3  rounded-xl bg-[#dbcdf0]">
                                                        <h2 class="text-lg  font-linotte_bold undefined">Karan - Half of
                                                            Tithi</h2>
                                                        <p class="text-base undefined" style="line-height: 1.5;">Karan
                                                            relates to actions and creation in this life, signifying our
                                                            karma.</p>
                                                    </div>
                                                </div>
                                                <div class="overflow-hidden w-full will-change-transform" style="opacity: 1; transform: none;">
                                                    <div class="max-w  mx-auto relative flex flex-col gap-1 py-3 px-3  rounded-xl bg-[#f2c6de]">
                                                        <h2 class="text-lg  font-linotte_bold undefined">Yoga -
                                                            Combination of Sun and Moon</h2>
                                                        <p class="text-base undefined" style="line-height: 1.5;">Yoga
                                                            impacts overall quality. It's tied to security and support,
                                                            influencing how we handle life's challenges. Good yoga can
                                                            mitigate tithi and karan issues.</p>
                                                    </div>
                                                   
                                                </div>
                                                <div class="flex bg-[#d7edf9]
       mt-3 w-full cursor-pointer relative overflow-hidden rounded-xl justify-center py-5   text-left gap-4 items-center">
                                                    <div class="w-full px-5 flex flex-col gap-2 cursor-pointer">
                                                        <p class="text-base pr-[110px]" style="line-height: 1.5;">
                                                            <span>Your detailed <b class="font-linotte_bold   ">Kundli
                                                                    report</b> with personalised remedies is ready. It
                                                                is <b class="font-linotte_bold   ">145+ pages</b> with
                                                                analysis, remedies and Dasha predictions based on your
                                                                kundli.</span><br><a href="./payment.html">
                                                                <b class=" font-linotte_bold border-current max-w-max flex gap-1 items-center ">Download
                                                                    Your Report Now →</b>
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <div class="absolute right-0 top-7 flex w-[110px] before:right-[10px]  h-full before:absolute before:top-[0px] sm:before:top-[-15px]  before:w-[100px] before:h-[150px]  before:bg-no-repeat before:bg-cover before:bg-[url('https://vedicrishi.in/kundli_analyser/Kundli.png')]">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="relative flex items-center border-4 border-[#f9dccd] border-l-4 py-4 pr-3 pl-12 min-h-[100px] h-full max-w-lg mx-auto ">
                                                <img src="https://vedicrishi.in/kundli_analyser/character.svg" class="w-[60px] sm:w-[70px] absolute left-[-25px] sm:left-[-35px] top-1/2 -translate-y-1/2">
                                                <p class="md:text-lg text-lg rounded text-zinc-700 font-cera_medium" style="line-height: 1.5;">Panchang holds the keys to our true
                                                    nature. Ready to learn more? Click 'Next' and find out the panchang
                                                    elements that were aligned on your special day.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex w-full z-[10] md:max-w-[600px] max-w-2xl left-1/2 -translate-x-1/2 justify-between gap-5 fixed md:bottom-[25px] bottom-3">
                        <div class="absolute rounded-[10px] bg-gradient-to-t from-white/10 to-k_orange/30 z-[-1] bottom-[-12px] transform rotate-180 left-0 w-full h-[100px] gap-2" style="mask-image: linear-gradient(white, white, transparent);"></div>
                        <div class="flex justify-between py-3 px-5 w-[95%] rounded-md mx-auto bg-white shadow shadow-zinc-300/50">
                            <a href="/user-report-age" class=" max-w-max flex-row-reverse gap-5 justify-between font-cera_regular border border-current opacity-70 text-zinc-500 text-base w-full py-2 px-3 hover:opacity-100 ease-in duration-100 rounded-md flex items-center text-center"><span class="text-current"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18"></path>
                                    </svg></span></a><a href="/payment" class=" max-w-max relative z-[999] gap-10 justify-between font-cera_regular bg-orange-400 active:bg-orange-800 text-white text-base w-full py-2.5 px-5 ease-in duration-100 rounded-md flex items-center text-center"><span>Next</span><span class="text-current"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                        <path fill-rule="evenodd" d="M2 10a.75.75 0 0 1 .75-.75h12.59l-2.1-1.95a.75.75 0 1 1 1.02-1.1l3.5 3.25a.75.75 0 0 1 0 1.1l-3.5 3.25a.75.75 0 1 1-1.02-1.1l2.1-1.95H2.75A.75.75 0 0 1 2 10Z" clip-rule="evenodd"></path>
                                    </svg></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>