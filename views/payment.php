<?php
session_start();

if (!isset($_SESSION['name'])) {
    header('Location: /');
    exit();
}

?>
<html lang="en" class="dark">

<?php require_once __DIR__ . '/includes/header.php' ?>

<body class="bg-slate-200 scroll-smooth ">
    <div id="__next" data-reactroot="">
        <div class="w-full">
            <div class="pattern flex flex-col gap-10 items-center py-10"><button class="cursor-pointer -mt-2" style="width:180px; height: 150px;"> <img src="../src/imgs/logo.jpg" class="rounded-full" alt=""> </button>
                <div class="w-full max-w-3xl shadow-xl bg-white px-5 md:px-24 flex flex-col gap-5 items-center py-8 rounded-md">
                    <div class="flex flex-col gap-2 text-center mb-5">
                        <h2 class="md:text-4xl text-3xl font-cera_black">Limited-time Offer!</h2>
                    </div>
                    <div class="border-4 border-yellow-400 rounded-xl w-full">
                        <div>
                            <div class="flex flex-col divide-y ">
                                <div class="flex relative gap-5 items-center py-3.5 md:px-10 px-5">
                                    <label for="Varshphal Report" class="relative border overflow-hidden rounded-md flex w-[30px] h-[30px] text-center duration-100 gap-2 ease-in cursor-pointer justify-center flex-col items-center text-lg border-transparent shadow-lg shadow-lime-500/30 bg-lime-600">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#fff" class="w-5 h-5">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                        <input type="radio" id="Varshphal Report" value="VARSHPHAL REPORT" name="offer" class="opacity-0 cursor-pointer absolute" onchange="handleOfferChange()">
                                    </label>
                                    <div class="flex justify-between w-full items-center">
                                        <div>
                                            <h2 class="md:text-lg flex sm:flex-row flex-col justify-start text-left sm:gap-3 sm:items-center">
                                                Varshphal Report</h2>
                                            <p class="sm:pt-0 pt-1 text-orange-600 font-cera_medium">Your Yearly Predictions</p>
                                        </div>
                                        <div>
                                            <div class="flex text-right md:gap-3 text-xl md:flex-row flex-col">
                                                <span class="line-through text-lg md:text-xl text-zinc-500">$ <!-- -->20</span>
                                                <h2>$ <!-- -->10</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex relative gap-5 items-center py-3.5 md:px-10 px-5">
                                    <label for="Your Premium Kundli" class="relative border overflow-hidden rounded-md flex w-[30px] h-[30px] text-center duration-100 gap-2 ease-in cursor-pointer justify-center flex-col items-center text-lg border-zinc-300 bg-white hover:border-lime-500 text-zinc-800">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#fff" class="w-5 h-5">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                        <input type="radio" id="Your Premium Kundli" value="KUNDLI_REPORT" name="offer" class="opacity-0 cursor-pointer absolute" onchange="handleOfferChange()">
                                    </label>
                                    <div class="flex justify-between w-full items-center">
                                        <div>
                                            <h2 class="md:text-lg flex sm:flex-row flex-col justify-start text-left sm:gap-3 sm:items-center">
                                                Your Premium Kundli</h2>
                                            <p class="sm:pt-0 pt-1 text-orange-600 font-cera_medium">145 Pages with Remedies</p>
                                        </div>
                                        <div>
                                            <div class="flex text-right md:gap-3 text-xl md:flex-row flex-col">
                                                <span class="line-through text-lg md:text-xl text-zinc-500">$ <!-- -->25</span>
                                                <h2>$ <!-- -->15</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex relative gap-5 items-center py-3.5 md:px-10 px-5">
                                    <label for="Best Combo Offer" class="relative border overflow-hidden rounded-md flex w-[30px] h-[30px] text-center duration-100 gap-2 ease-in cursor-pointer justify-center flex-col items-center text-lg border-zinc-300 bg-white hover:border-lime-500 text-zinc-800">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#fff" class="w-5 h-5">
                                                <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                        <input type="radio" id="Best Combo Offer" value="KUNDLI_VARSHPHAL_COMBO" name="offer" class="opacity-0 cursor-pointer absolute" onchange="handleOfferChange()">
                                    </label>
                                    <div class="flex justify-between w-full items-center">
                                        <div>
                                            <h2 class="md:text-lg flex sm:flex-row flex-col justify-start text-left sm:gap-3 sm:items-center">
                                                Best Combo Offer
                                                <b class="bg-lime-600 max-w-max text-center shadow-xl shadow-zinc-500/30 text-white font-cera_regular rounded-full uppercase px-3 py-[3px] text-xs font-bold">Special
                                                    Offer</b>
                                            </h2>
                                            <p class="sm:pt-0 pt-1 text-orange-600 font-cera_medium">Premium Kundli + Varshphal</p>
                                        </div>
                                        <div>
                                            <div class="flex text-right md:gap-3 text-xl md:flex-row flex-col">
                                                <span class="line-through text-lg md:text-xl text-zinc-500">$ <!-- -->45</span>
                                                <h2>$ <!-- -->18</h2>
                                            </div>
                                            <span class="font-cera_bold text-center text-lime-600">( <!-- -->60 <!-- -->% OFF)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-between sm:flex-row flex-col gap-10 w-full pt-5">
                        <div class="flex flex-col gap-4 w-full">
                            <h4 class="text-gray-700 border-b text-lg sm:text-xl sm:w-full sm:font-cera_bold font-cera_medium pb-1 sm:border-b border-gray-300 mb-2">
                                Review Birth Details</h4>
                            <div class="max-h-max p-5 w-full rounded-md bg-gradient-to-l from-amber-200 to-yellow-100 relative ">
                                <div class="flex flex-col gap-3 text-zinc-800"><span class="text-xl capitalize font-cera_medium"><?= $_SESSION['name'] ?></span>
                                    <div class="flex gap-6"><span class="font-cera_medium whitespace-nowrap"><?= $_SESSION['day'] ?>
                                            <?php
                                            $months = [
                                                1 => 'January', 2 => 'February', 3 => 'March',
                                                4 => 'April', 5 => 'May', 6 => 'June',
                                                7 => 'July', 8 => 'August', 9 => 'September',
                                                10 => 'October', 11 => 'November', 12 => 'December'
                                            ];

                                            ?>
                                            <!-- --><?= $months[$_SESSION['month']] ?>,
                                            <!-- --><?= $_SESSION['year'] ?></span><span class=" font-cera_medium max-w-max whitespace-nowrap"><?= $_SESSION['hour'] ?>:
                                            <!-- --><?= $_SESSION['min'] ?> Minutes
                                        </span></div><span class=" leading-6 font-cera_medium break-words flex gap-2 items-center"><img src="https://vedicrishi.in/icons/map.png" width="18" class="h-full" alt="map"><?= $_SESSION['state'] ?>, <?= $_SESSION['country'] ?></span>
                                </div><button class="flex gap-2 hover:underline text-sm font-cera_medium bg-amber-300 rounded-bl-md rounded-tr-md text-black absolute top-0 py-3 px-3 right-0">EDIT</button>
                            </div>
                        </div>
                        <div class="flex w-full flex-col gap-7">
                            <div class="w-full flex flex-row sm:flex-col gap-5 sm:gap-2 items-center justify-start">
                                <h2 class="text-gray-700 text-lg sm:text-xl sm:w-full font-cera_bold pb-1 sm:border-b border-gray-300 mb-2">
                                    Report Language</h2><select name="language" class="sm:w-full text-gray-500 p-2 border-2 rounded-md w-40">
                                    <option selected="" value="en">English</option>
                                    <option value="hi">Hindi</option>
                                </select>
                            </div>

                            <div class="w-full flex flex-row sm:flex-col gap-5 sm:gap-2 sm:items-start items-center justify-start">
                                <h2 class="text-gray-700 text-lg sm:text-xl sm:w-full font-cera_bold pb-1 sm:border-b border-gray-300 mb-2">
                                    Select chart type</h2>
                                <div class="flex gap-3">
                                    <div class="w-14 h-14 relative"><input type="radio" name="chart" value="NORTH_INDIAN" class="chart cursor-pointer" checked><label class="label pdf-north-chart graychart"></label></div>
                                    <div class="w-14 h-14 relative"><input type="radio" name="chart" value="SOUTH_INDIAN" class="chart cursor-pointer"><label class="label gray pdf-south-chart graychart"></label></div>
                                    <div class="w-14 h-14 relative"><input type="radio" name="chart" value="EAST_INDIAN" class="chart cursor-pointer"><label class="label gray pdf-east-chart graychart"></label></div>
                                </div>
                            </div>
                            <div class="w-full flex flex-row sm:flex-col gap-5 sm:gap-2 items-center justify-start">
                                <h2 class="text-gray-700 text-lg sm:text-xl sm:w-full font-cera_bold pb-1 sm:border-b border-gray-300 mb-2">
                                    Varshaphal Year</h2><select name="lang" class="sm:w-full sm:max-w-md max-w-[230px] w-full text-gray-500 p-2 border-2 rounded-md ">
                                    <option value="2023">January 2023 - 2024</option>
                                    <option selected="" value="2024">January 2024 - 2025</option>
                                    <option value="2025">January 2025 - 2026</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex flex-col gap-3 border-t mt-5 ">
                        <div class="inputbox pt-3 mt-4">
                            <label for="email">Enter Your Email</label>
                            <input type="email" id="email" class="input " name="email" placeholder="Enter Your Email" value="">
                        </div>
                        <div class="inputbox pt-1 "><label for="mobilenumber">Enter Your Mobile number</label>
                            <div class="border-2 flex border-zinc-400 rounded-md "><select class="!border-0 bg-gray-50 w-[80px] cursor-pointer outline-none">
                                    <option value="+1">🇨🇦 +1</option>
                                    <option value="+1">🇺🇸 +1</option>
                                    <option value="+7">🇰🇿 +7</option>
                                    <option value="+7">🇷🇺 +7</option>
                                    <option value="+20">🇪🇬 +20</option>
                                    <option value="+27">🇿🇦 +27</option>
                                    <option value="+30">🇬🇷 +30</option>
                                    <option value="+31">🇳🇱 +31</option>
                                    <option value="+32">🇧🇪 +32</option>
                                    <option value="+33">🇫🇷 +33</option>
                                    <option value="+34">🇪🇸 +34</option>
                                    <option value="+36">🇭🇺 +36</option>
                                    <option value="+39">🇮🇹 +39</option>
                                    <option value="+40">🇷🇴 +40</option>
                                    <option value="+41">🇨🇭 +41</option>
                                    <option value="+43">🇦🇹 +43</option>
                                    <option value="+44">🇬🇬 +44</option>
                                    <option value="+44">🇮🇲 +44</option>
                                    <option value="+44">🇯🇪 +44</option>
                                    <option value="+44">🇬🇧 +44</option>
                                    <option value="+45">🇩🇰 +45</option>
                                    <option value="+46">🇸🇪 +46</option>
                                    <option value="+47">🇧🇻 +47</option>
                                    <option value="+47">🇳🇴 +47</option>
                                    <option value="+47">🇸🇯 +47</option>
                                    <option value="+48">🇵🇱 +48</option>
                                    <option value="+49">🇩🇪 +49</option>
                                    <option value="+51">🇵🇪 +51</option>
                                    <option value="+52">🇲🇽 +52</option>
                                    <option value="+53">🇨🇺 +53</option>
                                    <option value="+54">🇦🇷 +54</option>
                                    <option value="+55">🇧🇷 +55</option>
                                    <option value="+56">🇨🇱 +56</option>
                                    <option value="+57">🇨🇴 +57</option>
                                    <option value="+58">🇻🇪 +58</option>
                                    <option value="+60">🇲🇾 +60</option>
                                    <option value="+61">🇦🇺 +61</option>
                                    <option value="+61">🇨🇽 +61</option>
                                    <option value="+61">🇨🇨 +61</option>
                                    <option value="+62">🇮🇩 +62</option>
                                    <option value="+63">🇵🇭 +63</option>
                                    <option value="+64">🇳🇿 +64</option>
                                    <option value="+64">🇵🇳 +64</option>
                                    <option value="+65">🇸🇬 +65</option>
                                    <option value="+66">🇹🇭 +66</option>
                                    <option value="+81">🇯🇵 +81</option>
                                    <option value="+82">🇰🇷 +82</option>
                                    <option value="+84">🇻🇳 +84</option>
                                    <option value="+86">🇨🇳 +86</option>
                                    <option value="+90">🇹🇷 +90</option>
                                    <option selected="" value="+91">🇮🇳 +91</option>
                                    <option value="+92">🇵🇰 +92</option>
                                    <option value="+93">🇦🇫 +93</option>
                                    <option value="+94">🇱🇰 +94</option>
                                    <option value="+95">🇲🇲 +95</option>
                                    <option value="+98">🇮🇷 +98</option>
                                    <option value="+211">🇸🇸 +211</option>
                                    <option value="+212">🇲🇦 +212</option>
                                    <option value="+213">🇩🇿 +213</option>
                                    <option value="+216">🇹🇳 +216</option>
                                    <option value="+218">🇱🇾 +218</option>
                                    <option value="+220">🇬🇲 +220</option>
                                    <option value="+221">🇸🇳 +221</option>
                                    <option value="+222">🇲🇷 +222</option>
                                    <option value="+223">🇲🇱 +223</option>
                                    <option value="+224">🇬🇳 +224</option>
                                    <option value="+225">🇨🇮 +225</option>
                                    <option value="+226">🇧🇫 +226</option>
                                    <option value="+227">🇳🇪 +227</option>
                                    <option value="+228">🇹🇬 +228</option>
                                    <option value="+229">🇧🇯 +229</option>
                                    <option value="+230">🇲🇺 +230</option>
                                    <option value="+231">🇱🇷 +231</option>
                                    <option value="+232">🇸🇱 +232</option>
                                    <option value="+233">🇬🇭 +233</option>
                                    <option value="+234">🇳🇬 +234</option>
                                    <option value="+235">🇹🇩 +235</option>
                                    <option value="+236">🇨🇫 +236</option>
                                    <option value="+237">🇨🇲 +237</option>
                                    <option value="+238">🇨🇻 +238</option>
                                    <option value="+239">🇸🇹 +239</option>
                                    <option value="+240">🇬🇶 +240</option>
                                    <option value="+241">🇬🇦 +241</option>
                                    <option value="+242">🇨🇬 +242</option>
                                    <option value="+243">🇨🇩 +243</option>
                                    <option value="+244">🇦🇴 +244</option>
                                    <option value="+245">🇬🇼 +245</option>
                                    <option value="+246">🇮🇴 +246</option>
                                    <option value="+248">🇸🇨 +248</option>
                                    <option value="+249">🇸🇩 +249</option>
                                    <option value="+250">🇷🇼 +250</option>
                                    <option value="+251">🇪🇹 +251</option>
                                    <option value="+252">🇸🇴 +252</option>
                                    <option value="+253">🇩🇯 +253</option>
                                    <option value="+254">🇰🇪 +254</option>
                                    <option value="+255">🇹🇿 +255</option>
                                    <option value="+256">🇺🇬 +256</option>
                                    <option value="+257">🇧🇮 +257</option>
                                    <option value="+258">🇲🇿 +258</option>
                                    <option value="+260">🇿🇲 +260</option>
                                    <option value="+261">🇲🇬 +261</option>
                                    <option value="+262">🇹🇫 +262</option>
                                    <option value="+262">🇾🇹 +262</option>
                                    <option value="+262">🇷🇪 +262</option>
                                    <option value="+263">🇿🇼 +263</option>
                                    <option value="+264">🇳🇦 +264</option>
                                    <option value="+265">🇲🇼 +265</option>
                                    <option value="+266">🇱🇸 +266</option>
                                    <option value="+267">🇧🇼 +267</option>
                                    <option value="+268">🇸🇿 +268</option>
                                    <option value="+269">🇰🇲 +269</option>
                                    <option value="+290">🇸🇭 +290</option>
                                    <option value="+291">🇪🇷 +291</option>
                                    <option value="+297">🇦🇼 +297</option>
                                    <option value="+298">🇫🇴 +298</option>
                                    <option value="+299">🇬🇱 +299</option>
                                    <option value="+345">🇰🇾 +345</option>
                                    <option value="+350">🇬🇮 +350</option>
                                    <option value="+351">🇵🇹 +351</option>
                                    <option value="+352">🇱🇺 +352</option>
                                    <option value="+353">🇮🇪 +353</option>
                                    <option value="+354">🇮🇸 +354</option>
                                    <option value="+355">🇦🇱 +355</option>
                                    <option value="+356">🇲🇹 +356</option>
                                    <option value="+357">🇨🇾 +357</option>
                                    <option value="+358">🇦🇽 +358</option>
                                    <option value="+358">🇫🇮 +358</option>
                                    <option value="+359">🇧🇬 +359</option>
                                    <option value="+370">🇱🇹 +370</option>
                                    <option value="+371">🇱🇻 +371</option>
                                    <option value="+372">🇪🇪 +372</option>
                                    <option value="+373">🇲🇩 +373</option>
                                    <option value="+374">🇦🇲 +374</option>
                                    <option value="+375">🇧🇾 +375</option>
                                    <option value="+376">🇦🇩 +376</option>
                                    <option value="+377">🇲🇨 +377</option>
                                    <option value="+378">🇸🇲 +378</option>
                                    <option value="+379">🇻🇦 +379</option>
                                    <option value="+380">🇺🇦 +380</option>
                                    <option value="+381">🇷🇸 +381</option>
                                    <option value="+382">🇲🇪 +382</option>
                                    <option value="+383">🇽🇰 +383</option>
                                    <option value="+385">🇭🇷 +385</option>
                                    <option value="+386">🇸🇮 +386</option>
                                    <option value="+387">🇧🇦 +387</option>
                                    <option value="+389">🇲🇰 +389</option>
                                    <option value="+420">🇨🇿 +420</option>
                                    <option value="+421">🇸🇰 +421</option>
                                    <option value="+423">🇱🇮 +423</option>
                                    <option value="+500">🇫🇰 +500</option>
                                    <option value="+500">🇬🇸 +500</option>
                                    <option value="+501">🇧🇿 +501</option>
                                    <option value="+502">🇬🇹 +502</option>
                                    <option value="+503">🇸🇻 +503</option>
                                    <option value="+504">🇭🇳 +504</option>
                                    <option value="+505">🇳🇮 +505</option>
                                    <option value="+506">🇨🇷 +506</option>
                                    <option value="+507">🇵🇦 +507</option>
                                    <option value="+508">🇵🇲 +508</option>
                                    <option value="+509">🇭🇹 +509</option>
                                    <option value="+590">🇬🇵 +590</option>
                                    <option value="+590">🇧🇱 +590</option>
                                    <option value="+590">🇲🇫 +590</option>
                                    <option value="+591">🇧🇴 +591</option>
                                    <option value="+592">🇬🇾 +592</option>
                                    <option value="+593">🇪🇨 +593</option>
                                    <option value="+594">🇬🇫 +594</option>
                                    <option value="+595">🇵🇾 +595</option>
                                    <option value="+596">🇲🇶 +596</option>
                                    <option value="+597">🇸🇷 +597</option>
                                    <option value="+598">🇺🇾 +598</option>
                                    <option value="+599"> +599</option>
                                    <option value="+670">🇹🇱 +670</option>
                                    <option value="+672">🇦🇶 +672</option>
                                    <option value="+672">🇭🇲 +672</option>
                                    <option value="+672">🇳🇫 +672</option>
                                    <option value="+673">🇧🇳 +673</option>
                                    <option value="+674">🇳🇷 +674</option>
                                    <option value="+675">🇵🇬 +675</option>
                                    <option value="+676">🇹🇴 +676</option>
                                    <option value="+677">🇸🇧 +677</option>
                                    <option value="+678">🇻🇺 +678</option>
                                    <option value="+679">🇫🇯 +679</option>
                                    <option value="+680">🇵🇼 +680</option>
                                    <option value="+681">🇼🇫 +681</option>
                                    <option value="+682">🇨🇰 +682</option>
                                    <option value="+683">🇳🇺 +683</option>
                                    <option value="+685">🇼🇸 +685</option>
                                    <option value="+686">🇰🇮 +686</option>
                                    <option value="+687">🇳🇨 +687</option>
                                    <option value="+688">🇹🇻 +688</option>
                                    <option value="+689">🇵🇫 +689</option>
                                    <option value="+690">🇹🇰 +690</option>
                                    <option value="+691">🇫🇲 +691</option>
                                    <option value="+692">🇲🇭 +692</option>
                                    <option value="+850">🇰🇵 +850</option>
                                    <option value="+852">🇭🇰 +852</option>
                                    <option value="+853">🇲🇴 +853</option>
                                    <option value="+855">🇰🇭 +855</option>
                                    <option value="+856">🇱🇦 +856</option>
                                    <option value="+880">🇧🇩 +880</option>
                                    <option value="+886">🇹🇼 +886</option>
                                    <option value="+960">🇲🇻 +960</option>
                                    <option value="+961">🇱🇧 +961</option>
                                    <option value="+962">🇯🇴 +962</option>
                                    <option value="+963">🇸🇾 +963</option>
                                    <option value="+964">🇮🇶 +964</option>
                                    <option value="+965">🇰🇼 +965</option>
                                    <option value="+966">🇸🇦 +966</option>
                                    <option value="+967">🇾🇪 +967</option>
                                    <option value="+968">🇴🇲 +968</option>
                                    <option value="+970">🇵🇸 +970</option>
                                    <option value="+971">🇦🇪 +971</option>
                                    <option value="+972">🇮🇱 +972</option>
                                    <option value="+973">🇧🇭 +973</option>
                                    <option value="+974">🇶🇦 +974</option>
                                    <option value="+975">🇧🇹 +975</option>
                                    <option value="+976">🇲🇳 +976</option>
                                    <option value="+977">🇳🇵 +977</option>
                                    <option value="+992">🇹🇯 +992</option>
                                    <option value="+993">🇹🇲 +993</option>
                                    <option value="+994">🇦🇿 +994</option>
                                    <option value="+995">🇬🇪 +995</option>
                                    <option value="+996">🇰🇬 +996</option>
                                    <option value="+998">🇺🇿 +998</option>
                                    <option value="+1242">🇧🇸 +1242</option>
                                    <option value="+1246">🇧🇧 +1246</option>
                                    <option value="+1264">🇦🇮 +1264</option>
                                    <option value="+1268">🇦🇬 +1268</option>
                                    <option value="+1284">🇻🇬 +1284</option>
                                    <option value="+1340">🇻🇮 +1340</option>
                                    <option value="+1441">🇧🇲 +1441</option>
                                    <option value="+1473">🇬🇩 +1473</option>
                                    <option value="+1649">🇹🇨 +1649</option>
                                    <option value="+1664">🇲🇸 +1664</option>
                                    <option value="+1670">🇲🇵 +1670</option>
                                    <option value="+1671">🇬🇺 +1671</option>
                                    <option value="+1684">🇦🇸 +1684</option>
                                    <option value="+1758">🇱🇨 +1758</option>
                                    <option value="+1767">🇩🇲 +1767</option>
                                    <option value="+1784">🇻🇨 +1784</option>
                                    <option value="+1849">🇩🇴 +1849</option>
                                    <option value="+1868">🇹🇹 +1868</option>
                                    <option value="+1869">🇰🇳 +1869</option>
                                    <option value="+1876">🇯🇲 +1876</option>
                                    <option value="+1939">🇵🇷 +1939</option>
                                </select><input type="text" id="mobilenumber" class="w-full outline-none px-2" minlength="8" maxlength="11" name="mobilenumber" placeholder="Enter Your Mobile Number" value=""></div>
                        </div>
                        <div class="flex flex-col w-full">
                            <div class="flex sm:flex-row flex-col items-start gap-5 sm:gap-10 w-full mt-3"><button type="submit" class=" cursor-pointer text-lg font-bold rounded-md font-cera_medium bg-yellow-400 w-full text-black py-2.5 md:float-right hover:bg-yellow-500">Pay
                                    with Card</button></div>
                        </div>
                    </div>
                </div>
                <div class="text-lg flex gap-3 text-gray-600 justify-center ">© <?= date('Y') ?> nukshatra.in<a class="text-blue-500" href="/">Home</a></div>
            </div>
        </div>
    </div>

    <script>
        function handleOfferChange() {
            const offers = document.getElementsByName('offer');
            offers.forEach((offer) => {
                const label = offer.previousElementSibling;
                if (offer.checked) {
                    label.classList.add('shadow-lg', 'border-transparent', 'shadow-lime-500/30', 'bg-lime-600');
                    label.classList.remove('border-zinc-300', 'bg-white', 'hover:border-lime-500', 'text-zinc-800');
                } else {
                    label.classList.add('border-zinc-300', 'bg-white', 'hover:border-lime-500', 'text-zinc-800');
                    label.classList.remove('shadow-lg', 'shadow-lime-500/30', 'bg-lime-600', 'border-transparent');
                }
            });
        }
    </script>

    <script>
        document.querySelectorAll('.chart').forEach(function(radio) {
            radio.addEventListener('change', function() {
                document.querySelectorAll('.label').forEach(function(label) {
                    label.classList.add('gray');
                });
                this.nextElementSibling.classList.remove('gray');
            });
        });

        // Trigger change event on page load to apply initial state
        document.querySelector('.chart:checked').dispatchEvent(new Event('change'));
    </script>
</body>

</html>