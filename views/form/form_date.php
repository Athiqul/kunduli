<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['month'] = $_POST['month'];
    $_SESSION['year'] = $_POST['year'];
    $_SESSION['day'] = $_POST['day'];
    header('Location: /user-birthtime');
}

$lan = $_SESSION['lan'];

?>

<!DOCTYPE html>
<html lang="en" class="dark">

<?php require_once __DIR__ . '/../includes/header.php' ?>

<?php if ($lan == 'hi') : ?>

    <body class="bg-white scroll-smooth ">
        <div id="__next" data-reactroot>
            <div class="w-full">
                <form action="/user-birthdate" method="POST">
                    <div>
                        <div id="analyser" class="jsx-56635bc6dab035da relative overflow-y-scroll min-h-screen md:py-3 h-full md:h-screen flex justify-center w-full bg-cover bg-center " style="background-image: url(https://cdn.astopia.com/e8f74246-789f-4791-a86b-a309155a246a.jpg);">
                            <div class="jsx-56635bc6dab035da max-w-[600px] overflow-hidden glass-effect md:h-full w-full mx-auto md:rounded-[16px]" style="background-image: linear-gradient(0deg, rgb(255, 255, 255), rgb(249, 245, 237));">
                                <div class="h-full px-5 pt-5 flex flex-col gap-14 overflow-y-scroll overflow-x-hidden w-full">
                                    <div class="border-radius-[30px]" style="width: 100%; background-color: rgb(238, 238, 238); overflow: hidden;">
                                        <div class="bg-k_orange h-[6px] undefined border-radius-[30px]" style="width: 66.6667%;"></div>
                                    </div>
                                    <div class="w-full h-full" style="opacity: 1; transform: scale(1);">
                                        <div class="w-full max-w-lg mx-auto h-full flex flex-col md:gap-20 gap-10 justify-center md:items-center">
                                            <h2 class="md:text-3xl font-sonorous_rough text-2xl text-center text-zinc-800" style="line-height: 1.1;">आपकी जन्मतिथि क्या है?</h2>
                                            <div class="flex max-w-md mx-auto justify-between h-full flex-col items-end gap-14 w-full ">
                                                <div class="gap-10 flex flex-col w-full">
                                                    <div class="grid md:grid-cols-4 md:max-w-full max-w-xs mx-auto flex-col gap-5 w-full">
                                                        <div class="relative inline-block w-full">
                                                            <select name="day" class="outline-none !border-zinc-200 focus:outline-orange-400 outline-offset-2 !border md:text-xl text-lg text-center !p-5 focus:border-zinc-800 !rounded-[20px] w-full  appearance-none" required="">
                                                                <option value="">दिन</option>
                                                                <?php for ($i = 1; $i <= 31; $i++) : ?>
                                                                    <option value="<?= $i ?>"><?= $i ?></option>
                                                                <?php endfor ?>
                                                            </select>
                                                            <svg class="absolute top-1/2 right-3 transform -translate-y-1/2 w-5 h-5 text-gray-300 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="w-full md:col-span-2 relative inline-block ">
                                                            <select name="month" type="number" class="outline-none !border-zinc-200 focus:outline-orange-400 outline-offset-2 !border md:text-xl text-lg text-center  !p-5 focus:border-zinc-800 !rounded-[20px] w-full appearance-none" required="">
                                                                <option value="">महीना</option>
                                                                <option value="1">जनवरी</option>
                                                                <option value="2">फरवरी</option>
                                                                <option value="3">मार्च</option>
                                                                <option value="4">अप्रैल</option>
                                                                <option value="5">मई</option>
                                                                <option value="6">जून</option>
                                                                <option value="7">जुलाई</option>
                                                                <option value="8">अगस्त</option>
                                                                <option value="9">सितंबर</option>
                                                                <option value="10">अक्टूबर</option>
                                                                <option value="11">नवंबर</option>
                                                                <option value="12">दिसंबर</option>
                                                            </select>
                                                            <svg class="absolute top-1/2 right-3 transform -translate-y-1/2 w-5 h-5 text-gray-300 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="relative inline-block w-full">
                                                        <select name="year" type="number" class="outline-none !border-zinc-200 focus:outline-orange-400 outline-offset-2 !border text-base text-center !p-5 focus:border-zinc-800 !rounded-[20px] w-full appearance-none" required="">
                                                            <option value="">वर्ष</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                            <option value="1959">1959</option>
                                                            <option value="1958">1958</option>
                                                            <option value="1957">1957</option>
                                                            <option value="1956">1956</option>
                                                            <option value="1955">1955</option>
                                                            <option value="1954">1954</option>
                                                            <option value="1953">1953</option>
                                                            <option value="1952">1952</option>
                                                            <option value="1951">1951</option>
                                                            <option value="1950">1950</option>
                                                            <option value="1949">1949</option>
                                                            <option value="1948">1948</option>
                                                            <option value="1947">1947</option>
                                                            <option value="1946">1946</option>
                                                            <option value="1945">1945</option>
                                                            <option value="1944">1944</option>
                                                            <option value="1943">1943</option>
                                                            <option value="1942">1942</option>
                                                            <option value="1941">1941</option>
                                                            <option value="1940">1940</option>
                                                        </select>

                                                        <svg class="absolute top-1/2 right-3 transform -translate-y-1/2 w-5 h-5 text-gray-300 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                            </svg>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-full z-[10] md:max-w-[600px] max-w-2xl left-1/2 -translate-x-1/2 justify-between gap-5 fixed md:bottom-[25px] bottom-3">
                            <div class="absolute rounded-[10px] bg-gradient-to-t from-white/10 to-k_orange/30 z-[-1] bottom-[-12px] transform rotate-180 left-0 w-full h-[150px] gap-2" style="mask-image: linear-gradient(white, white, transparent);"></div>
                            <div class="flex justify-between py-3 px-5 w-[95%] rounded-md mx-auto bg-white shadow shadow-zinc-300/50">
                                <a href="/user-gender" class="max-w-max flex-row-reverse gap-5 justify-between font-cera_regular border border-current opacity-70 text-zinc-500 text-base w-full py-2 px-3 hover:opacity-100 ease-in duration-100 rounded-md flex items-center text-center">
                                    <span class="text-current">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18"></path>
                                        </svg>
                                    </span>
                                </a>
                                <button type="submit" class="max-w-max relative z-[999] gap-10 justify-between font-cera_regular bg-orange-400 active:bg-orange-800 text-white text-base w-full py-2.5 px-5 ease-in duration-100 rounded-md flex items-center text-center">
                                    <span>अगला</span>
                                    <span class="text-current">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                            <path fill-rule="evenodd" d="M2 10a.75.75 0 0 1 .75-.75h12.59l-2.1-1.95a.75.75 0 1 1 1.02-1.1l3.5 3.25a.75.75 0 0 1 0 1.1l-3.5 3.25a.75.75 0 1 1-1.02-1.1l2.1-1.95H2.75A.75.75 0 0 1 2 10Z" clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>

<?php else : ?>

    <body class="bg-white scroll-smooth ">
        <div id="__next" data-reactroot>
            <div class="w-full">
                <form action="/user-birthdate" method="POST">
                    <div>
                        <div id="analyser" class="jsx-56635bc6dab035da relative overflow-y-scroll min-h-screen   md:py-3 h-full md:h-screen flex justify-center w-full  bg-cover bg-center " style="background-image: url(https://cdn.astopia.com/e8f74246-789f-4791-a86b-a309155a246a.jpg);">
                            <div class="jsx-56635bc6dab035da max-w-[600px] overflow-hidden glass-effect  md:h-full w-full mx-auto md:rounded-[16px]" style="background-image: linear-gradient(0deg, rgb(255, 255, 255), rgb(249, 245, 237));">
                                <div class=" h-full px-5 pt-5 flex flex-col gap-14 overflow-y-scroll overflow-x-hidden w-full">
                                    <div class="border-radius-[30px]" style="width: 100%; background-color: rgb(238, 238, 238); overflow: hidden;">
                                        <div class="bg-k_orange h-[6px] undefined border-radius-[30px]" style="width: 66.6667%;"></div>
                                    </div>
                                    <div class="w-full h-full" style="opacity: 1; transform: scale(1);">
                                        <div class="w-full max-w-lg mx-auto h-full flex flex-col md:gap-20 gap-10 justify-center md:items-center">
                                            <h2 class="md:text-3xl font-sonorous_rough  text-2xl  text-center text-zinc-800" style="line-height: 1.1;">What’s Your Birthdate?</h2>
                                            <div class="flex max-w-md mx-auto justify-between h-full flex-col items-end gap-14 w-full ">
                                                <div class="gap-10 flex flex-col w-full">
                                                    <div class="grid md:grid-cols-4 md:max-w-full max-w-xs mx-auto flex-col gap-5 w-full">
                                                    <div class="relative inline-block w-full">
                                                            <select name="day" class="outline-none !border-zinc-200 focus:outline-orange-400 outline-offset-2 !border md:text-xl text-lg text-center !p-5 focus:border-zinc-800 !rounded-[20px] w-full  appearance-none" required="">
                                                                <option value="">Day</option>
                                                                <?php for ($i = 1; $i <= 31; $i++) : ?>
                                                                    <option value="<?= $i ?>"><?= $i ?></option>
                                                                <?php endfor ?>
                                                            </select>
                                                            <svg class="absolute top-1/2 right-3 transform -translate-y-1/2 w-5 h-5 text-gray-300 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                            </svg>
                                                        </div>
                                                        <div class="w-full md:col-span-2 relative inline-block"><select name="month" type="number" class="outline-none  !border-zinc-200 focus:outline-orange-400 outline-offset-2 !border md:text-xl text-lg text-center  !p-5 focus:border-zinc-800 !rounded-[20px] w-full appearance-none" required="">
                                                                <option value="">MM</option>
                                                                <option value="1">January</option>
                                                                <option value="2">February</option>
                                                                <option value="3">March</option>
                                                                <option value="4">April</option>
                                                                <option value="5">May</option>
                                                                <option value="6">June</option>
                                                                <option value="7">July</option>
                                                                <option value="8">August</option>
                                                                <option value="9">September</option>
                                                                <option value="10">October</option>
                                                                <option value="11">November</option>
                                                                <option value="12">December</option>
                                                            </select>

                                                            <svg class="absolute top-1/2 right-3 transform -translate-y-1/2 w-5 h-5 text-gray-300 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                            </svg>
                                                           
                                                        </div>
                                                        <div class="relative inline-block">
                                                        <select name="year" type="number" class="outline-none  !border-zinc-200 focus:outline-orange-400 outline-offset-2 !border  text-base text-center  !p-5 focus:border-zinc-800 !rounded-[20px] w-full appearance-none" required="">
                                                            <option value="">YYYY</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                            <option value="1959">1959</option>
                                                            <option value="1958">1958</option>
                                                            <option value="1957">1957</option>
                                                            <option value="1956">1956</option>
                                                            <option value="1955">1955</option>
                                                            <option value="1954">1954</option>
                                                            <option value="1953">1953</option>
                                                            <option value="1952">1952</option>
                                                            <option value="1951">1951</option>
                                                            <option value="1950">1950</option>
                                                            <option value="1949">1949</option>
                                                            <option value="1948">1948</option>
                                                            <option value="1947">1947</option>
                                                            <option value="1946">1946</option>
                                                            <option value="1945">1945</option>
                                                            <option value="1944">1944</option>
                                                            <option value="1943">1943</option>
                                                            <option value="1942">1942</option>
                                                            <option value="1941">1941</option>
                                                            <option value="1940">1940</option>
                                                        </select>
                                                        <svg class="absolute top-1/2 right-3 transform -translate-y-1/2 w-5 h-5 text-gray-300 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                                            </svg>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex w-full z-[10] md:max-w-[600px] max-w-2xl left-1/2 -translate-x-1/2 justify-between gap-5 fixed md:bottom-[25px] bottom-3">
                            <div class="absolute rounded-[10px] bg-gradient-to-t from-white/10 to-k_orange/30 z-[-1] bottom-[-12px] transform rotate-180 left-0 w-full h-[150px] gap-2" style="mask-image: linear-gradient(white, white, transparent);"></div>
                            <div class="flex justify-between py-3 px-5 w-[95%] rounded-md mx-auto bg-white shadow shadow-zinc-300/50">
                                <a href="/user-gender" class=" max-w-max flex-row-reverse gap-5 justify-between font-cera_regular border border-current opacity-70 text-zinc-500 text-base w-full py-2 px-3 hover:opacity-100 ease-in duration-100 rounded-md flex items-center text-center"><span class="text-current"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18"></path>
                                        </svg></span></a><button type="submit" class=" max-w-max relative z-[999] gap-10 justify-between font-cera_regular bg-orange-400 active:bg-orange-800 text-white text-base w-full py-2.5 px-5 ease-in duration-100 rounded-md flex items-center text-center"><span>Next</span><span class="text-current"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                            <path fill-rule="evenodd" d="M2 10a.75.75 0 0 1 .75-.75h12.59l-2.1-1.95a.75.75 0 1 1 1.02-1.1l3.5 3.25a.75.75 0 0 1 0 1.1l-3.5 3.25a.75.75 0 1 1-1.02-1.1l2.1-1.95H2.75A.75.75 0 0 1 2 10Z" clip-rule="evenodd"></path>
                                        </svg></span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </body>
<?php endif ?>


</html>