<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $_SESSION['hour'] = $_POST['hour'];
    $_SESSION['min'] = $_POST['min'];
    header('Location: /user-birthplace');
}



?>

<!DOCTYPE html>
<html lang="en" class="dark">
<?php require_once __DIR__ . '/../includes/header.php' ?>
<body class="bg-white scroll-smooth "><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PC4V7FG"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <div id="__next" data-reactroot>
        <div class="w-full">
            <form action="/user-birthtime" method="post">
            <div>
                <div id="analyser"
                class="jsx-56635bc6dab035da relative overflow-y-scroll min-h-screen   md:py-3 h-full md:h-screen flex justify-center w-full  bg-cover bg-center " style="background-image: url(https://cdn.astopia.com/e8f74246-789f-4791-a86b-a309155a246a.jpg);">
                    <div class="jsx-56635bc6dab035da max-w-[600px] overflow-hidden glass-effect  md:h-full w-full mx-auto md:rounded-[16px]"
                        style="background-image: linear-gradient(0deg, rgb(255, 255, 255), rgb(249, 245, 237));">
                        <div class=" h-full px-5 pt-5 flex flex-col gap-14 overflow-y-scroll overflow-x-hidden w-full">
                            <div class="border-radius-[30px]"
                                style="width: 100%; background-color: rgb(238, 238, 238); overflow: hidden;">
                                <div class="bg-k_orange h-[6px] undefined border-radius-[30px]"
                                    style="width: 83.3333%;"></div>
                            </div>
                            <div class="w-full h-full" style="opacity: 1; transform: scale(1);">
                                <div
                                    class="w-full h-full max-w-lg mx-auto flex flex-col md:gap-20 gap-20 justify-center md:items-center">
                                    <h2 class="md:text-3xl font-sonorous_rough  text-2xl  text-center text-zinc-800"
                                        style="line-height: 1.1;">What’s Your Birthtime?</h2>
                                    <div
                                        class="flex max-w-md mx-auto flex-col items-end h-full justify-between gap-14 w-full">
                                        <div class="gap-10 flex flex-col w-full">
                                            <div
                                                class="flex sm:flex-row flex-col max-w-xs md:max-w-full mx-auto gap-5 w-full">
                                                <select name="hour" type="number"
                                                    class="outline-none  !border-zinc-200 focus:outline-k_orange outline-offset-2 !border md:text-xl text-lg text-center  !p-5 focus:border-zinc-800 !rounded-[20px] w-full" required>
                                                    <option value="">HH</option>
                                                    <option value="0">00 (12 midnight)</option>
                                                    <option value="1">01 (am)</option>
                                                    <option value="2">02 (am)</option>
                                                    <option value="3">03 (am)</option>
                                                    <option value="4">04 (am)</option>
                                                    <option value="5">05 (am)</option>
                                                    <option value="6">06 (am)</option>
                                                    <option value="7">07 (am)</option>
                                                    <option value="8">08 (am)</option>
                                                    <option value="9">09 (am)</option>
                                                    <option value="10">10 (am)</option>
                                                    <option value="11">11 (am)</option>
                                                    <option value="12">12 (noon)</option>
                                                    <option value="13">13 (1 pm)</option>
                                                    <option value="14">14 (2 pm)</option>
                                                    <option value="15">15 (3 pm)</option>
                                                    <option value="16">16 (4 pm)</option>
                                                    <option value="17">17 (5 pm)</option>
                                                    <option value="18">18 (6 pm)</option>
                                                    <option value="19">19 (7 pm)</option>
                                                    <option value="20">20 (8 pm)</option>
                                                    <option value="21">21 (9 pm)</option>
                                                    <option value="22">22 (10 pm)</option>
                                                    <option value="23">23 (11 pm)</option>
                                                </select><select name="min" type="number"
                                                    class="outline-none  !border-zinc-200 focus:outline-k_orange outline-offset-2 !border md:text-xl text-lg text-center  !p-5 focus:border-zinc-800 !rounded-[20px] w-full" required>
                                                    <option value="">MM</option>
                                                    <option value="0">00</option>
                                                    <option value="1">01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                    <option value="5">05</option>
                                                    <option value="6">06</option>
                                                    <option value="7">07</option>
                                                    <option value="8">08</option>
                                                    <option value="9">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                    <option value="32">32</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                    <option value="41">41</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                    <option value="46">46</option>
                                                    <option value="47">47</option>
                                                    <option value="48">48</option>
                                                    <option value="49">49</option>
                                                    <option value="50">50</option>
                                                    <option value="51">51</option>
                                                    <option value="52">52</option>
                                                    <option value="53">53</option>
                                                    <option value="54">54</option>
                                                    <option value="55">55</option>
                                                    <option value="56">56</option>
                                                    <option value="57">57</option>
                                                    <option value="58">58</option>
                                                    <option value="59">59</option>
                                                </select></div>
                                        </div>
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
                        <a href="/user-birthdate"
                            class=" max-w-max flex-row-reverse gap-5 justify-between font-cera_regular border border-current opacity-70 text-zinc-500 text-base w-full py-2 px-3 hover:opacity-100 ease-in duration-100 rounded-md flex items-center text-center"><span
                                class="text-current"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18"></path>
                                </svg></span></a><button type="submit" class=" max-w-max relative z-[999] gap-10 justify-between font-cera_regular bg-orange-400 active:bg-orange-800 text-white text-base w-full py-2.5 px-5 ease-in duration-100 rounded-md flex items-center text-center"><span>Next</span><span class="text-current"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                    <path fill-rule="evenodd" d="M2 10a.75.75 0 0 1 .75-.75h12.59l-2.1-1.95a.75.75 0 1 1 1.02-1.1l3.5 3.25a.75.75 0 0 1 0 1.1l-3.5 3.25a.75.75 0 1 1-1.02-1.1l2.1-1.95H2.75A.75.75 0 0 1 2 10Z" clip-rule="evenodd"></path>
                                </svg></span></button></div>
                </div>
            </div>
        </div>
                                </form>
    </div>

 
</body>

</html>