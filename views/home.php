

<!DOCTYPE html>
<html lang="en" class="dark">

<?php require_once __DIR__.'/includes/header.php'?>

<body class="bg-white scroll-smooth ">
    <div id="" data-reactroot>
        <div class="w-full">
            <form action="<?=$base_url?>/user-name" method="get">
            <div>
                <div id="analyser"
                    class="jsx-56635bc6dab035da relative overflow-y-scroll min-h-screen   md:py-3 h-full md:h-screen flex justify-center w-full bg-cover  bg-center " style="background-image: url(https://cdn.astopia.com/e8f74246-789f-4791-a86b-a309155a246a.jpg);">
                    <div style="background-image:linear-gradient(0deg,#ffffff,#f9f5ed)"
                        class="jsx-56635bc6dab035da max-w-[600px] overflow-hidden glass-effect  md:h-full w-full mx-auto md:rounded-[16px]">
                        <div class=" h-full px-5 pt-5 flex flex-col gap-14 overflow-y-scroll overflow-x-hidden w-full">
                            <div class="h-full w-full">
                                <div
                                    class="w-full max-w-lg mx-auto pb-14 md:pb-28 flex flex-col md:gap-10 gap-10 items-center">
                                    <div class="flex flex-col gap-3 w-full">
                                        <div class="flex justify-center bg-transparent  mb-[30px] w-full"><img src="/src/imgs/logo.jpg"
                                                class="w-[130px] cursor-pointer rounded-full" /></div>
                                        <h2 class="md:text-3xl font-sonorous_rough  text-2xl  text-zinc-800">Your Free
                                            In-depth Kundli Analysis</h2>
                                        <p>Use our free kundli calculator to analyse your kundli in detail for your
                                            personality, your stored karma, ayurvedic type, malefic and benefic grahas
                                            in your kundli and much more.</p>
                                        <h6 style="line-height:1.1" class="md:text-xl  text-lg  mt-3 text-zinc-800">
                                            Please select your language to get started</h6>
                                    </div>
                                    <div
                                        class="flex max-w-sm mx-auto flex-col h-full justify-between items-end gap-10 w-full">
                                        <div class="gap-5 md:gap-10 flex flex-col w-full">
                                            <button type="button" onclick="changeLanguage('hi')" name="language" value="hi" 
                                                class="!border-zinc-200 outline-none border font-sonorous_rough py-5 px-5 md:px-7 rounded-[10px]   duration-100 ease-in  md:text-xl text-lg   w-full">
                                                <h2>हिंदी</h2>
                                            </button>
                                            
                                            <button type="button" 
                                                name="language" value="en"
                                                class="!border-zinc-200 outline-none border font-sonorous_rough py-5 px-5 md:px-7 rounded-[10px]   duration-100 ease-in  md:text-xl text-lg   w-full">
                                                <h2>English</h2>
                                            </button>
                                            
                                            </div>
                                            <input type="hidden" name="language" value="en" id="languageInput">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="flex w-full z-[10] md:max-w-[600px] max-w-2xl left-1/2 -translate-x-1/2 justify-between gap-5 fixed md:bottom-[25px] bottom-3">
                    <div style="-webkit-mask-image:linear-gradient(white, white, transparent);mask-image:linear-gradient(white, white, transparent)"
                        class="absolute rounded-[10px] bg-gradient-to-t from-white/10 to-k_orange/30 z-[-1] bottom-[-12px] transform rotate-180 left-0 w-full h-[150px] gap-2">
                    </div>
                    <div
                        class="flex justify-between py-3 px-5 w-[95%] rounded-md mx-auto bg-white shadow shadow-zinc-300/50">
                        <div></div><button 
                            class=" max-w-max relative z-[999] gap-10 justify-between font-cera_regular bg-orange-400 active:bg-orange-800 text-white text-base w-full py-2.5 px-5 ease-in duration-100 rounded-md flex items-center text-center"><span>Next</span><span
                                class="text-current"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor" class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M2 10a.75.75 0 0 1 .75-.75h12.59l-2.1-1.95a.75.75 0 1 1 1.02-1.1l3.5 3.25a.75.75 0 0 1 0 1.1l-3.5 3.25a.75.75 0 1 1-1.02-1.1l2.1-1.95H2.75A.75.75 0 0 1 2 10Z"
                                        clip-rule="evenodd"></path>
                                </svg></span></button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

     <script>
        function changeLanguage(lan) {
            // Set the hidden input value
            document.getElementById('languageInput').value =lan;
          

            }
        
    </script>
   
</body>


</html>