<link href="/public/css/city_one.css" type="text/css" rel="stylesheet" />
<!--<link href="/public/css/city_two.css" type="text/css" rel="stylesheet" />-->
<div class="container">
    <div class="row">
        <!-- left side -->
        <div id="sidebar" class="sidebar span3">
            <!-- Reservation Widget -->
            <div id="reservation_widget" class="reservation sideWidget js-reservationWidget">

                <div class="options js-options">
                    <ul class="optionsblk widgetTabs">
                        <li class="selected js-rentalTrigger">
                            <a href="Javascript:;">租赁</a>
                        </li>

                        <li class="packages  js-packagesTrigger">
                            <a href="/index.php/Hotels">摩托车 &amp; 酒店</a>
                        </li>

                        <li class=" js-toursTrigger">
                            <a href="/index.php/Trave">旅游</a>
                        </li>

                        <li class="deals">
                            <a href="/index.php/Discounts">促销特惠</a>
                        </li>

                    </ul>

                    <div class="clearfix"></div>
                </div>

                <div class="js-rentalSearch" style="">
                    <div class="header js-header">
                        <p class="form_title">搜索租赁摩托车</p>
                        <a class="max-min-btn visible-tablet js-toggle" href="Javascript:;"><b class="caret"></b></a>

                        <div class="clearfix"></div>
                    </div>

                    <div class="js-reservationFormContainer">
                        <form action="/reservation_widget" method="post" class="res_widget" target="_blank">
                            <input type="hidden" name="authenticity_token" value="x/t/BD/WNINoEiboXKiN2DvJ9yB72Lo4kLtPRMHN5tA=">
                            <input type="hidden" name="reservation[reservation_type_id]" value="1">






                            <div class="form_bot">
                                <div class="loader js-loading" style="display:none;">
                                    <span><span><img src="https://d1y9jrrtx2baf.cloudfront.net/assets/rentals/layout/Loading-023da9421c5001dc2879575217b0add0.gif"></span></span>
                                </div>

                                <div class="field-block fullWidth headblk js-numberSelection">
                                    <label for="" class="">需要几辆摩托车</label>
                                    <ul class="optionsblk motorNum">
                                        <li>
                                            <div class="iradio_square-blue checked" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="1" class="js-numberCheckbox" id="vehicles_count_1_1" checked="&quot;checked&quot;" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                            <label class="radio" for="vehicles_count_1_1">1</label>
                                        </li>
                                        <li>
                                            <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="2" class="js-numberCheckbox" id="vehicles_count_2_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                            <label class="radio" for="vehicles_count_2_1">2</label>
                                        </li>
                                        <li>
                                            <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="3" class="js-numberCheckbox" id="vehicles_count_3_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                            <label class="radio" for="vehicles_count_3_1">3</label>
                                        </li>
                                        <li>
                                            <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="" class="js-numberCheckbox" id="vehicles_count_other_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                            <label class="radio fieldIF js-label" for="vehicles_count_other_1">
                                                其他
                                            </label>
                                            <input type="text" title="Type number of motorcycles here" name="reservation[vehicles_count]" class="fieldIFinput js-numberField" value="" style="display: none;">
                                        </li>
                                    </ul>


                                </div>


                                <div class="field-block pickup-location">
                                    <label for="">行驶出发城市</label>

                                    <select name="reservation[pickup_location_id]" data-fieldtype="pickup_location" class="selectWithSearch js-locationsSelect">
                                        <option value="" selected="&quot;selected&quot;">
                                            取车城市
                                        </option>
										<?php foreach ($city as $key=>$citys): ?>
                                            <option value="">
												<?php echo $citys['cit_name']?>
                                            </option>
										<?php endforeach; ?>

                                    </select>
                                </div>
                                <div class="field-block pickup-location">
                                    <label for="">行驶终点城市</label>
                                    <select name="reservation[pickup_location_id]" data-fieldType="pickup_location"
                                            class="selectWithSearch js-locationsSelect">
                                        <option value="" selected=&quot;selected&quot;>
                                            与取车城市相同
                                        </option>
										<?php foreach ($city as $key=>$citys): ?>
                                            <option value="">
												<?php echo $citys['cit_name']?>
                                            </option>
										<?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="field-block">
                                    <label for="">出发日期/时间</label>
                                    <div class="dateTime">
                                        <input class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})">
                                    </div>
                                </div>
                                <div class="field-block returning-date">
                                    <label for="">返还日期/时间</label>
                                    <div class="dateTime">

                                        <input class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})">

                                    </div>
                                </div>
                                <div class="clearfix"></div>


                                <div class="clearfix"></div>
                            </div>

                            <div class="widget_btns">
                                <a href="/index.php/Rent?id=0" class="btn-highlight js-searchTrigger">立即搜索<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
                            </div>
                        </form>
                    </div>


                    <div class="promo-notifications js-promo" style="display: none">
                        <div class="discounts group-discount">
                            <span class="arrow"></span>
                            <div class="body">
                                <h4>团队预订可以享受更多优惠！</h4>
                                <span class="percent">10%</span>
                                <span class="rule">4辆车<i>至少</i></span>
                            </div>
                            <div class="body">
                                <h3>
                                    大部分预订只需支付20%的定金哦
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="js-toursSearch" style="display:none;">
                    <div class="header js-header">
                        <p class="form_title">搜索摩托车旅游</p>
                        <a class="max-min-btn visible-tablet js-toggle" href="Javascript:;"><b class="caret"></b></a>

                        <div class="clearfix"></div>
                    </div>

                    <div class="js-toursFormContainer">
                        <form accept-charset="UTF-8" action="/tours/search_widget" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="x/t/BD/WNINoEiboXKiN2DvJ9yB72Lo4kLtPRMHN5tA="></div>
                            <div class="form_bot tourWidget">
                                <div class="loader js-loading" style="display:none;">
                                    <span><img src="https://d1y9jrrtx2baf.cloudfront.net/assets/rentals/layout/Loading-023da9421c5001dc2879575217b0add0.gif"></span>
                                </div>

                                <div class="field-block fullWidth headblk">
                                    <ul class="optionsblk motorNum tours-type">
                                        <li>
                                            <input checked="checked" class="js-line" id="tour_type_id_" name="tour_type_id" type="radio" value="">
                                            <label class="radio" for="tour_search_widget_tour_type_id_">
                                                所有旅行项目
                                            </label>
                                        </li>

                                        <li>
                                            <input class="js-line js-tourType-guided" id="tour_type_id_1" name="tour_type_id" type="radio" value="1">
                                            <label class="radio" for="tour_search_widget_tour_type_id_1">
                                                团队游
                                            </label>
                                            <div class="type-content">
                                                <ul>
                                                    <li><span class="icons-checkmark"></span>骑行期间所需的燃油</li>
                                                    <li><span class="icons-checkmark"></span>双语导游</li>
                                                    <li><span class="icons-checkmark"></span>每日早餐</li>
                                                    <li><span class="icons-checkmark"></span>定制夹克／门票／景点</li>
                                                    <li><span class="icons-checkmark"></span>门到门行李运送</li>
                                                    <li><span class="icons-checkmark"></span>摩托车租赁</li>
                                                    <li><span class="icons-checkmark"></span>还有很多，很多！</li>
                                                    <li><span class="icons-checkmark"></span>和团队一起骑行</li>
                                                    <li><span class="icons-checkmark"></span>支持车辆和司机</li>
                                                    <li><span class="icons-checkmark"></span>3到4星级的酒店</li>
                                                    <li class="more-link "><a class="js-readMore" href="Javascript:;">
                                                            查看更多</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <input class="js-line js-tourType-self_drive" id="tour_type_id_2" name="tour_type_id" type="radio" value="2">
                                            <label class="radio" for="tour_search_widget_tour_type_id_2">
                                                自驾游
                                            </label>
                                            <div class="type-content">
                                                <ul>
                                                    <li><span class="icons-checkmark"></span>专业设计的骑行路线</li>
                                                    <li><span class="icons-checkmark"></span>电子版骑行路线指引</li>
                                                    <li><span class="icons-checkmark"></span>提供GPS＊</li>
                                                    <li><span class="icons-checkmark"></span>详细的旅行计划</li>
                                                    <li><span class="icons-checkmark"></span>摩托车租赁</li>
                                                    <li><span class="icons-checkmark"></span>摩托车友好酒店</li>
                                                    <li class="more-link "><a class="js-readMore" href="Javascript:;">
                                                            查看更多</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="tour-filters-widget">
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <label for="">国家</label>
                                            <select class="selectWithSearch js-searchableSelect" id="country_id" name="country_id"><option value="">所有国家</option><option value="13">澳大利亚</option>
                                                <option value="38">加拿大</option>
                                                <option value="105">India</option>
                                                <option value="157">墨西哥</option>
                                                <option value="198">新加坡</option>
                                                <option value="233">美国</option></select>
                                        </div>
                                        <div class="span6">
                                            <label for="">城市</label>
                                            <select class="selectWithSearch js-searchableSelect" id="start_location_id" name="start_location_id"><option value="">所有城市</option><option value="2">旧金山门店</option>
                                                <option value="14">达拉斯门店</option>
                                                <option value="8">棕榈泉门店</option>
                                                <option value="197">芝加哥门店</option>
                                                <option value="10">丹佛门店</option>
                                                <option value="16">华盛顿门店</option>
                                                <option value="78">凤凰城门店</option>
                                                <option value="9">圣地亚哥门店</option>
                                                <option value="5">奥兰多机场门店</option>
                                                <option value="1">洛杉矶机场门店</option>
                                                <option value="6">拉斯维加斯门店</option>
                                                <option value="11">迈阿密门店</option>
                                                <option value="15">盐湖城门店</option>
                                                <option value="17">杰克逊镇门店</option>
                                                <option value="81">新奥尔良门店</option>
                                                <option value="305">Belgrade</option>
                                                <option value="38">弗拉格斯塔夫门店</option>
                                                <option value="20">西雅图门店</option>
                                                <option value="12">曼彻斯特门店</option>
                                                <option value="35">温哥华门店</option>
                                                <option value="64">科苏梅尔门店</option>
                                                <option value="74">波特兰门店</option>
                                                <option value="87">布里斯班门店</option>
                                                <option value="190">悉尼门店</option>
                                                <option value="199">Cairns</option>
                                                <option value="40">阿尔伯克基门店</option>
                                                <option value="219">Pensacola</option>
                                                <option value="13">那什维尔门店</option>
                                                <option value="221">Melbourne</option>
                                                <option value="226">Calgary</option>
                                                <option value="256">Milwaukee</option>
                                                <option value="26">劳德代尔堡门店</option>
                                                <option value="18">比林斯门店</option>
                                                <option value="79">新加坡门店</option>
                                                <option value="263">Boswell's Harley-Davidson</option>
                                                <option value="218">New Delhi</option></select>
                                        </div>
                                        <div class="span12">
                                            <label for="">旅游套餐名字</label>
                                            <select class="selectWithSearch js-searchableSelect" id="tour_id" name="tour_id"><option value="">所有旅游套餐名字</option><option value="2">San Francisco Motorcycle Tour</option>
                                                <option value="3">Texas Motorcycle Tour</option>
                                                <option value="4">Palm Springs Motorcycle Tour</option>
                                                <option value="6">Mid West Motorcycle Tour</option>
                                                <option value="7">Colorado Motorcycle Tour</option>
                                                <option value="8">Washington D.C. Motorcycle Tour</option>
                                                <option value="10">Arizona Motorcycle Tour</option>
                                                <option value="11">San Diego Motorcycle Tour</option>
                                                <option value="14">Georgia / Florida Motorcycle Tour</option>
                                                <option value="16">Northern California Motorcycle Tour</option>
                                                <option value="17">Pacific Coast Highway Motorcycle Tour</option>
                                                <option value="19">National Parks (Alternate) Motorcycle Tour</option>
                                                <option value="20">Las Vegas / Zion National Park Motorcycle Tour</option>
                                                <option value="24">Miami Paradise Motorcycle Tour</option>
                                                <option value="28">Los Angeles Motorcycle Tour</option>
                                                <option value="29">Chicago / Milwaukee Motorcycle Tour</option>
                                                <option value="30">Utah Motorcycle Tour</option>
                                                <option value="32">Texas 3 Day Motorcycle Tour</option>
                                                <option value="34">Denver Rocky Mountain Motorcycle Tour</option>
                                                <option value="35">Denver Motorcycle Tour</option>
                                                <option value="36">Denver / Steamboat Springs Motorcycle Tour</option>
                                                <option value="38">San Diego / Palm Springs Motorcycle Tour</option>
                                                <option value="39">Phoenix Motorcycle Tour</option>
                                                <option value="41">Las Vegas / Death Valley Motorcycle Tour</option>
                                                <option value="45">San Francisco / Napa Valley Motorcycle Tour</option>
                                                <option value="48">Miami South Florida Motorcycle Tour</option>
                                                <option value="49">Miami Key West Motorcycle Tour</option>
                                                <option value="50">Miami / Tampa Motorcycle Tour</option>
                                                <option value="51">Orlando North Florida Motorcycle Tour</option>
                                                <option value="53">Jackson Hole Motorcycle Tour</option>
                                                <option value="54">National Parks Motorcycle Tour</option>
                                                <option value="55">Orlando Florida Motorcycle Tour</option>
                                                <option value="57">66号公路摩托旅行</option>
                                                <option value="58">Wild West Motorcycle Tour</option>
                                                <option value="59">西部越野之旅—摩托车向导之旅</option>
                                                <option value="60">Wild West II Motorcycle Tour</option>
                                                <option value="67">New Orleans Motorcycle Tour</option>
                                                <option value="70">Yellowstone Motorcycle Tour</option>
                                                <option value="79">Southern California Motorcycle Tour</option>
                                                <option value="80">66号公路摩托之旅——向导摩托之旅</option>
                                                <option value="83">Baja California Motorcycle Tour</option>
                                                <option value="85">拉斯维加斯国家公园摩托车之旅——自驾游</option>
                                                <option value="86">西部经典摩托车之旅——摩托自驾游</option>
                                                <option value="87">Western Highlights II Motorcycle Tour</option>
                                                <option value="87">Western Highlights II Motorcycle Tour</option>
                                                <option value="89">Sturgis Bike Week Motorcycle Tour</option>
                                                <option value="90">Indian Spirits Motorcycle Tour</option>
                                                <option value="94">Yosemite / Sierra National Park Motorcycle Tour</option>
                                                <option value="95">Seattle / Canada Motorcycle Tour</option>
                                                <option value="97">Southwest Summer Special Motorcycle Tour</option>
                                                <option value="98">Southwest I Motorcycle Tour</option>
                                                <option value="99">Southwest II Motorcycle Tour</option>
                                                <option value="106">New Hampshire Motorcycle Tour</option>
                                                <option value="107">Vancouver / Pacific Coast Motorcycle Tour</option>
                                                <option value="108">Vancouver Island Motorcycle Tour</option>
                                                <option value="108">Vancouver Island Motorcycle Tour</option>
                                                <option value="109">Canadian Rockies Motorcycle Tour</option>
                                                <option value="114">Canada and Yellowstone Motorcycle Tour</option>
                                                <option value="115">Pacific Coast Tour™</option>
                                                <option value="142">Southern California 3 Day Motorcycle Tour</option>
                                                <option value="147">Route 66 – 8 Day Motorcycle Tour</option>
                                                <option value="178">旧金山北部摩托车之旅</option>
                                                <option value="179">旧金山南部摩托车之旅</option>
                                                <option value="180">棕榈泉 / 大熊湖摩托车之旅</option>
                                                <option value="181">旧金山 / 优胜美地摩托车之旅</option>
                                                <option value="183">科苏梅尔 （Cozumel）哈雷摩托车之旅</option>
                                                <option value="195">海岸到沙漠冒险之旅</option>
                                                <option value="209">Baja 加利福尼亚南向摩托车之旅</option>
                                                <option value="210">Baja 加利福尼亚北向摩托车之旅</option>
                                                <option value="224">拉斯维加斯极致户外摩托车之旅</option>
                                                <option value="225">波特兰摩托车之旅</option>
                                                <option value="229">布里斯班、悉尼摩托车之旅</option>
                                                <option value="230">摩羯海岸摩托车之旅</option>
                                                <option value="240">悉尼 / 布里斯班摩托车之旅</option>
                                                <option value="241">热带风情摩托车之旅</option>
                                                <option value="261">Byron Bay &amp; Hinterland Weekend Escape</option>
                                                <option value="264">Triple B – Blues, Bourbon, BBQ</option>
                                                <option value="265">Kangaroo Valley Overnighter</option>
                                                <option value="267">New South Wales Country Escape</option>
                                                <option value="269">Far North Scenic Loop </option>
                                                <option value="272">Route 66 West Albuquerque to Los Angeles Motorcycle Tour </option>
                                                <option value="273">Baja Explorer</option>
                                                <option value="281">Undara Sunset Tour</option>
                                                <option value="283">Route 66 West Chicago to Albuquerque Motorcycle Tour</option>
                                                <option value="284">Route 66 West: Albuquerque to Los Angeles Motorcycle Tour</option>
                                                <option value="284">Route 66 West: Albuquerque to Los Angeles Motorcycle Tour</option>
                                                <option value="285">Route 66 West: Chicago to Albuquerque Motorcycle Tour</option>
                                                <option value="287">Route 66 East: Los Angeles to Albuquerque Motorcycle Tour</option>
                                                <option value="288">Route 66 East Albuquerque to Chicago Motorcycle Tour</option>
                                                <option value="298">Coast to Country Tour</option>
                                                <option value="300">The Far East and Deep South Tour</option>
                                                <option value="301">Pacific Coast Motorcycle Tour - San Francisco to Los Angeles</option>
                                                <option value="302">Pacific Coast Motorcycle Tour - Los Angeles to San Francisco</option>
                                                <option value="314">Southern Belle Tour</option>
                                                <option value="320">Southwest Canyon Country Motorcycle Tour</option>
                                                <option value="335">Southern Appalachian Ride</option>
                                                <option value="343">South Africa Tour</option>
                                                <option value="357">Coast 2 Coast Motorcycle Tour</option>
                                                <option value="363">HOG Touring Rally – Colorado and Black Canyon of the Gunnison Tour - Unescorted </option>
                                                <option value="364">HOG Touring Rally - SoCal Highlights Tour - Unescorted </option>
                                                <option value="367">Cairns Select -  Reef Rainforest and Outback </option>
                                                <option value="369">Undara Sunset 2 Day Tour</option>
                                                <option value="370">Great Ocean Road Escape</option>
                                                <option value="371">Phillip Island Tour</option>
                                                <option value="372">Black Spur Bright</option>
                                                <option value="373">Great Ocean Road - Grampians Adventure</option>
                                                <option value="374">Murray River - Broken Hill</option>
                                                <option value="375">Alberta Rockies</option>
                                                <option value="376">Alberta Rockies and Badlands </option>
                                                <option value="377">The Civil War Tour</option>
                                                <option value="379">Mad Max Outback Tour</option>
                                                <option value="382">Route 66 Harley-Davidson Exclusive VIP Guided Tour</option>
                                                <option value="383">Route 66 Harley-Davidson Exclusive VIP 10 Day Guided Tour</option>
                                                <option value="384">HOG Touring Rally – Rainforests, Rivers &amp; Volcanoes Tour - Unescorted </option>
                                                <option value="385">Harley-Davidson 115th Anniversary Tour - 15-Day San Diego to Milwaukee HOG</option>
                                                <option value="386">Harley-Davidson 115th Anniversary Tour - 15-Day Seattle to Milwaukee HOG</option>
                                                <option value="387">Harley-Davidson 115th Anniversary Tour - 12-Day Fort Lauderdale to Milwaukee - HOG</option>
                                                <option value="399">Fifth Annual AWS re:Invent Harley Ride - Valley of Fire - Nov 25th </option>
                                                <option value="401">Baja California Motorcycle Tour</option>
                                                <option value="402">Milwaukee Route  66 Motorcycle Tour</option>
                                                <option value="403">HOG Touring Rally –  Yellowstone and the Beartooth Tour - Unescorted </option>
                                                <option value="404">Arizona Motorcycle Tour</option>
                                                <option value="405">Great Lakes Motorcycle Tour</option>
                                                <option value="406">115th Anniversary Route 66 - 19 Day Tour</option>
                                                <option value="408">Florida Keys Tour 12-Day</option>
                                                <option value="411">Singapore Island Ride</option>
                                                <option value="412">Johore Discovery Ride</option>
                                                <option value="413">Historical Malacca Discovery</option>
                                                <option value="415">Arizona Sun Winter Getaway </option>
                                                <option value="419">Canada to Yellowstone Motorcycle Tour - 2019</option>
                                                <option value="427">Southwest Winter Tour Getaway - Los Angeles to Las Vegas</option>
                                                <option value="428">Triple B - BlueRidge, Blues, and BBQ - Motorcycle Tour - 2019</option>
                                                <option value="431">Triple B -  BlueRidge, Blues, and BBQ - 7 Day Motorcycle Tour - 2019</option>
                                                <option value="432">Triple B -  BlueRidge, Blues, and BBQ - 8 Day Motorcycle Tour - 2019</option>
                                                <option value="436">Gulf Coast Winter Getaway</option>
                                                <option value="444">Southwest Winter Tour Getaway - Las Vegas to Los Angeles</option>
                                                <option value="471">The Great Himalayan Tour </option>
                                                <option value="471">The Great Himalayan Tour </option>
                                                <option value="480">The Himalayan Pangi Valley Tour</option>
                                                <option value="481">Fifth Annual AWS re:Invent Harley Ride – Red Rock Canyon - Nov 25th</option>
                                                <option value="482">Fifth Annual AWS re:Invent Harley Ride - Valley of Fire on Three Wheels - Nov 25th</option>
                                                <option value="483">Fifth Annual AWS re:Invent Harley Ride - Red Rock Canyon on Three Wheels - Nov 25th</option>
                                                <option value="491">Melbourne Select - Great Ocean Road &amp; Phillip Island</option>
                                                <option value="492">Sydney Select - Thunderbolts and Coastline</option>
                                                <option value="497">Blue Ridge Monuments to Mountains Motorcycle Tour</option>
                                                <option value="499">Incredible Spiti</option></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="widget_btns">
                                <a href="/index.php/Rent?id=0" class="btn-highlight js-searchTrigger">立即搜索<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
                            </div>

                        </form>
                        <script type="text/html" class="js-comparisonOverlay">

                            <div class="modal hide fade wide-overlay" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-header ">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h3 id="myModalLabel">探索方式</h3>
                                </div>

                                <div class="clearfix"></div>

                                <div class="modal-body">
                                    <table dir="rtl" class="table table-bordered experience_table">
                                        <thead>
                                        <tr>
                                            <td dir="ltr">
                                                <b>团队旅行</b>
                                            </td>
                                            <td dir="ltr">
                                                <b>公路旅行</b>
                                            </td>
                                            <td dir="ltr">
                                                <b>自驾旅行</b>
                                            </td>
                                            <td dir="ltr">
                                                <b>摩托车＋酒店</b>
                                            </td>
                                            <td dir="ltr">
                                                <b>只有摩托车</b>
                                            </td>

                                            <td></td>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>

                                            <td>最新型的摩托车租赁</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>

                                            <td>摩托车友好酒店</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>

                                            <td>可以定制属于自己的旅行路线</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>

                                            <td>最佳摩托车旅行路线</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>

                                            <td>EagleRider旅行攻略</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>运送行李的支持车辆</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>备用摩托车</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>专业支持车驾驶员</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>专业双语导游</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>团队旅行体验</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>每天提供丰盛早餐</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>骑行时所需的汽油</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>欢迎晚宴</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>EagleRider欢送派对</td>
                                        </tr>
                                        </tbody>

                                        <tfoot>
                                        <tr>
                                            <td dir="ltr">
                                                <span class="starting-at">起始价格</span>
                                                <span class="price-box">
            $349/day
          </span>
                                            </td>
                                            <td dir="ltr">
                                                <span class="starting-at">起始价格</span>
                                                <span class="price-box">
            $249/day
          </span>
                                            </td>
                                            <td dir="ltr">
                                                <span class="starting-at">起始价格</span>
                                                <span class="price-box">
            $229/day
          </span>
                                            </td>
                                            <td dir="ltr">
                                                <span class="starting-at">起始价格</span>
                                                <span class="price-box">
            $179/天
          </span>
                                            </td>
                                            <td dir="ltr">
                                                <span class="starting-at">起始价格</span>
                                                <span class="price-box">
            $149/day
          </span>
                                            </td>
                                            <td></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </script>
                    </div>


                    <div class="promo-notifications js-promo">
                        <div class="discounts group-discount">
                            <span class="arrow"></span>
                            <div class="body">
                                <h4>团队预订可以享受更多优惠！</h4>
                                <span class="percent">5%</span>
                                <span class="rule">4辆车<i>至少</i></span>
                            </div>
                            <div class="body">
                                <h3>
                                    大部分预订只需支付20%的定金哦
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="js-packagesSearch" style="display:none;">
                    <div class="header js-header">
                        <p class="form_title">定制个人行程 </p>
                        <a class="max-min-btn visible-tablet js-toggle" href="Javascript:;"><b class="caret"></b></a>

                        <div class="clearfix"></div>
                    </div>

                    <div class="js-reservationFormContainer">
                        <form action="/reservation_widget" method="post" class="res_widget" target="_blank">
                            <input type="hidden" name="authenticity_token" value="x/t/BD/WNINoEiboXKiN2DvJ9yB72Lo4kLtPRMHN5tA=">
                            <input type="hidden" name="reservation[reservation_type_id]" value="2">






                            <div class="form_bot">
                                <div class="loader js-loading" style="display:none;">
                                    <span><span><img src="https://d1y9jrrtx2baf.cloudfront.net/assets/rentals/layout/Loading-023da9421c5001dc2879575217b0add0.gif"></span></span>
                                </div>


                                <div class="field-block fullWidth headblk js-numberSelection">
                                    <label for="">需要几辆摩托车</label>
                                    <ul class="optionsblk motorNum">
                                        <li>
                                            <input type="radio" name="reservation[vehicles_count]" value="1" class="js-numberCheckbox" id="vehicles_count_1_2" checked="&quot;checked&quot;">
                                            <label class="radio" for="vehicles_count_1_2">1</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="reservation[vehicles_count]" value="2" class="js-numberCheckbox" id="vehicles_count_2_2">
                                            <label class="radio" for="vehicles_count_2_2">2</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="reservation[vehicles_count]" value="3" class="js-numberCheckbox" id="vehicles_count_3_2">
                                            <label class="radio" for="vehicles_count_3_2">3</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="reservation[vehicles_count]" value="" class="js-numberCheckbox" id="vehicles_count_other_2">
                                            <label class="radio fieldIF js-label" for="vehicles_count_other_2">
                                                其他
                                            </label>
                                            <input type="text" title="Type number of motorcycles here" name="reservation[vehicles_count]" class="fieldIFinput js-numberField" value="">
                                        </li>
                                    </ul>


                                </div>

                                <input type="hidden" name="reservation[route_id]" value="custom">

                                <div class="field-block pickup-location">
                                    <label for="">行驶出发城市</label>

                                    <select name="reservation[pickup_location_id]" data-fieldtype="pickup_location" class="selectWithSearch js-locationsSelect">
                                        <option value="" selected="&quot;selected&quot;">
                                            取车城市
                                        </option>

                                        <optgroup label="?????">
                                            <option value="259">
                                                Mesa
                                            </option>
                                            <option value="266">
                                                Scottsdale
                                            </option>
                                            <option value="78">
                                                凤凰城门店
                                            </option>
                                            <option value="38">
                                                弗拉格斯塔夫门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="Alabama">
                                            <option value="334">
                                                Opelika
                                            </option>
                                        </optgroup>
                                        <optgroup label="Arkansas">
                                            <option value="290">
                                                Rogers
                                            </option>
                                            <option value="330">
                                                Fort Smith
                                            </option>
                                        </optgroup>
                                        <optgroup label="Connecticut">
                                            <option value="331">
                                                Ellington
                                            </option>
                                        </optgroup>
                                        <optgroup label="Indiana">
                                            <option value="336">
                                                Terre Haute
                                            </option>
                                        </optgroup>
                                        <optgroup label="Iowa">
                                            <option value="314">
                                                Des Moines
                                            </option>
                                        </optgroup>
                                        <optgroup label="Kansas">
                                            <option value="344">
                                                Topeka
                                            </option>
                                        </optgroup>
                                        <optgroup label="Kentucky">
                                            <option value="269">
                                                Cincinnati
                                            </option>
                                        </optgroup>
                                        <optgroup label="Maine">
                                            <option value="335">
                                                Portland Maine
                                            </option>
                                        </optgroup>
                                        <optgroup label="North Dakota">
                                            <option value="343">
                                                Minot
                                            </option>
                                            <option value="342">
                                                Williston
                                            </option>
                                        </optgroup>
                                        <optgroup label="Pennsylvania">
                                            <option value="286">
                                                Orwigsburg
                                            </option>
                                            <option value="296">
                                                Steel City Harley-Davidson
                                            </option>
                                            <option value="198">
                                                Pittsburgh
                                            </option>
                                            <option value="341">
                                                Willow Street
                                            </option>
                                        </optgroup>
                                        <optgroup label="South Dakota">
                                            <option value="255">
                                                Rapid City
                                            </option>
                                            <option value="200">
                                                Sturgis
                                            </option>
                                        </optgroup>
                                        <optgroup label="Vermont">
                                            <option value="339">
                                                Barre
                                            </option>
                                        </optgroup>
                                        <optgroup label="Wisconsin">
                                            <option value="307">
                                                Bonduel
                                            </option>
                                            <option value="309">
                                                Green Bay
                                            </option>
                                            <option value="310">
                                                Madison
                                            </option>
                                            <option value="256">
                                                Milwaukee
                                            </option>
                                        </optgroup>
                                        <optgroup label="乔治亚州">
                                            <option value="44">
                                                亚特兰大 - 哈雷门店
                                            </option>
                                            <option value="320">
                                                Columbus Georgia
                                            </option>
                                            <option value="324">
                                                Roswell
                                            </option>
                                            <option value="43">
                                                亚特兰大门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="伊利诺伊州">
                                            <option value="298">
                                                Chicago Countryside
                                            </option>
                                            <option value="303">
                                                DeKalb
                                            </option>
                                            <option value="294">
                                                McHenry Harley-Davidson
                                            </option>
                                            <option value="302">
                                                Ottawa
                                            </option>
                                            <option value="283">
                                                Palatine
                                            </option>
                                            <option value="297">
                                                Saint Charles
                                            </option>
                                            <option value="300">
                                                Villa Park
                                            </option>
                                            <option value="299">
                                                Woodstock
                                            </option>
                                            <option value="197">
                                                芝加哥门店
                                            </option>
                                            <option value="65">
                                                Countryside宝马摩托车租赁
                                            </option>
                                        </optgroup>
                                        <optgroup label="佛罗里达州">
                                            <option value="244">
                                                Adamec Harley-Davidson
                                            </option>
                                            <option value="245">
                                                Clermont
                                            </option>
                                            <option value="254">
                                                Daytona
                                            </option>
                                            <option value="243">
                                                Fort Myers
                                            </option>
                                            <option value="267">
                                                Kissimmee
                                            </option>
                                            <option value="275">
                                                Leesburg
                                            </option>
                                            <option value="268">
                                                Orlando East Harley-Davidson
                                            </option>
                                            <option value="250">
                                                Panama City Beach
                                            </option>
                                            <option value="251">
                                                Tampa
                                            </option>
                                            <option value="26">
                                                劳德代尔堡门店
                                            </option>
                                            <option value="5">
                                                奥兰多机场门店
                                            </option>
                                            <option value="11">
                                                迈阿密门店
                                            </option>
                                            <option value="327">
                                                Gainesville
                                            </option>
                                            <option value="195">
                                                Miami Metric
                                            </option>
                                            <option value="219">
                                                Pensacola
                                            </option>
                                            <option value="248">
                                                Sanford
                                            </option>
                                            <option value="194">
                                                代托纳沙滩门店
                                            </option>
                                            <option value="170">
                                                杰克逊维尔门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="俄亥俄州">
                                            <option value="313">
                                                Cleveland
                                            </option>
                                            <option value="318">
                                                Mentor
                                            </option>
                                            <option value="308">
                                                Plain City
                                            </option>
                                            <option value="76">
                                                哥伦布门店
                                            </option>
                                            <option value="277">
                                                Athens
                                            </option>
                                            <option value="337">
                                                Mansfield
                                            </option>
                                            <option value="338">
                                                Wintersville
                                            </option>
                                            <option value="73">
                                                西尔斯宝马摩托租赁
                                            </option>
                                        </optgroup>
                                        <optgroup label="俄勒冈州">
                                            <option value="74">
                                                波特兰门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="内华达州">
                                            <option value="264">
                                                Las Vegas Harley-Davidson
                                            </option>
                                            <option value="6">
                                                拉斯维加斯门店
                                            </option>
                                            <option value="72">
                                                拉斯维加斯凯旋摩托车门店
                                            </option>
                                            <option value="25">
                                                拉斯维加斯宝马门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="加州">
                                            <option value="253">
                                                Bartels Harley-Davidson
                                            </option>
                                            <option value="265">
                                                San Marcos
                                            </option>
                                            <option value="9">
                                                圣地亚哥门店
                                            </option>
                                            <option value="2">
                                                旧金山门店
                                            </option>
                                            <option value="8">
                                                棕榈泉门店
                                            </option>
                                            <option value="1">
                                                洛杉矶机场门店
                                            </option>
                                            <option value="42">
                                                纽波特海滩门店
                                            </option>
                                            <option value="273">
                                                Lancaster
                                            </option>
                                            <option value="323">
                                                Montclair
                                            </option>
                                            <option value="328">
                                                Redding
                                            </option>
                                            <option value="279">
                                                Santa Clarita
                                            </option>
                                            <option value="77">
                                                卡梅尔门店
                                            </option>
                                            <option value="19">
                                                圣莫尼卡/玛丽安德尔湾门店
                                            </option>
                                            <option value="7">
                                                弗雷斯诺门店
                                            </option>
                                            <option value="191">
                                                旧金山宝马本田门店
                                            </option>
                                            <option value="69">
                                                比佛利山门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="华盛顿州">
                                            <option value="292">
                                                North Cascades
                                            </option>
                                            <option value="20">
                                                西雅图门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="南卡罗来纳州">
                                            <option value="270">
                                                Rock Hill
                                            </option>
                                            <option value="332">
                                                Greenville
                                            </option>
                                        </optgroup>
                                        <optgroup label="夏威夷州">
                                            <option value="58">
                                                茂宜岛基黑门店
                                            </option>
                                            <option value="22">
                                                茂宜岛门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="弗吉尼亚州">
                                            <option value="16">
                                                华盛顿门店
                                            </option>
                                            <option value="329">
                                                Roanoke
                                            </option>
                                        </optgroup>
                                        <optgroup label="德州">
                                            <option value="262">
                                                Austin
                                            </option>
                                            <option value="249">
                                                San Antonio
                                            </option>
                                            <option value="14">
                                                达拉斯门店
                                            </option>
                                            <option value="276">
                                                McAllen
                                            </option>
                                            <option value="280">
                                                Tyler
                                            </option>
                                            <option value="39">
                                                埃尔帕索门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="怀俄明州">
                                            <option value="17">
                                                杰克逊镇门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="新墨西哥州">
                                            <option value="40">
                                                阿尔伯克基门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="新泽西州">
                                            <option value="311">
                                                Lakewood
                                            </option>
                                            <option value="312">
                                                Long Branch
                                            </option>
                                            <option value="287">
                                                Mount Ephraim
                                            </option>
                                            <option value="70">
                                                纽瓦克 - 贝尔维尔门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="新罕布什尔州">
                                            <option value="293">
                                                Laconia
                                            </option>
                                            <option value="12">
                                                曼彻斯特门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="明尼苏达州">
                                            <option value="316">
                                                Eden Prairie
                                            </option>
                                            <option value="306">
                                                Faribault
                                            </option>
                                            <option value="315">
                                                Saint Paul
                                            </option>
                                            <option value="45">
                                                埃尔克河门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="犹他州">
                                            <option value="319">
                                                Timpanogos
                                            </option>
                                            <option value="15">
                                                盐湖城门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="田纳西州">
                                            <option value="263">
                                                Boswell's Harley-Davidson
                                            </option>
                                            <option value="284">
                                                Knoxville
                                            </option>
                                            <option value="285">
                                                Knoxville Airport
                                            </option>
                                            <option value="291">
                                                Kodak
                                            </option>
                                            <option value="317">
                                                Memphis
                                            </option>
                                            <option value="295">
                                                Pigeon Forge
                                            </option>
                                            <option value="13">
                                                那什维尔门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="科罗拉多州">
                                            <option value="282">
                                                Aurora
                                            </option>
                                            <option value="10">
                                                丹佛门店
                                            </option>
                                            <option value="321">
                                                Durango
                                            </option>
                                            <option value="85">
                                                大章克辛门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="纽约州">
                                            <option value="288">
                                                New York-Albany
                                            </option>
                                            <option value="260">
                                                New York-Long Island
                                            </option>
                                            <option value="333">
                                                Macedon
                                            </option>
                                            <option value="340">
                                                North Tonawanda
                                            </option>
                                            <option value="36">
                                                纽约 - 皇后村门店
                                            </option>
                                            <option value="37">
                                                纽约 - 霍华德海滩门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="蒙大拿州">
                                            <option value="305">
                                                Belgrade
                                            </option>
                                            <option value="304">
                                                Missoula
                                            </option>
                                            <option value="18">
                                                比林斯门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="路易斯安那州">
                                            <option value="274">
                                                Alexandria
                                            </option>
                                            <option value="81">
                                                新奥尔良门店
                                            </option>
                                            <option value="326">
                                                Houma
                                            </option>
                                            <option value="278">
                                                Lafayette
                                            </option>
                                            <option value="325">
                                                New Orleans Harley-Davidson
                                            </option>
                                            <option value="322">
                                                Slidell
                                            </option>
                                        </optgroup>
                                        <optgroup label="马萨诸塞州">
                                            <option value="75">
                                                波士顿门店
                                            </option>
                                            <option value="32">
                                                福克斯波罗门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="马里兰州">
                                            <option value="30">
                                                克罗夫顿门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="India">
                                            <option value="218">
                                                New Delhi
                                            </option>
                                        </optgroup>
                                        <optgroup label="Norway">
                                            <option value="236">
                                                Lyngdal
                                            </option>
                                        </optgroup>
                                        <optgroup label="俄罗斯">
                                            <option value="239">
                                                Moscow
                                            </option>
                                            <option value="240">
                                                Sochi
                                            </option>
                                        </optgroup>
                                        <optgroup label="加拿大">
                                            <option value="35">
                                                温哥华门店
                                            </option>
                                            <option value="226">
                                                Calgary
                                            </option>
                                        </optgroup>
                                        <optgroup label="墨西哥">
                                            <option value="64">
                                                科苏梅尔门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="意大利">
                                            <option value="228">
                                                Milan
                                            </option>
                                        </optgroup>
                                        <optgroup label="新加坡">
                                            <option value="79">
                                                新加坡门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="新西兰">
                                            <option value="63">
                                                克赖斯特彻奇Bularangi门店
                                            </option>
                                            <option value="51">
                                                奥克兰Bularangi门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="澳大利亚">
                                            <option value="199">
                                                Cairns
                                            </option>
                                            <option value="221">
                                                Melbourne
                                            </option>
                                            <option value="87">
                                                布里斯班门店
                                            </option>
                                            <option value="190">
                                                悉尼门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="英国">
                                            <option value="301">
                                                Silverstone
                                            </option>
                                        </optgroup>
                                        <optgroup label="荷兰">
                                            <option value="60">
                                                荷兰门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="葡萄牙">
                                            <option value="46">
                                                卡斯凯斯门店
                                            </option>
                                            <option value="54">
                                                普莱厄维赫门店
                                            </option>
                                            <option value="47">
                                                法鲁门店
                                            </option>
                                            <option value="53">
                                                波尔图门店
                                            </option>
                                            <option value="48">
                                                里斯本门店
                                            </option>
                                        </optgroup>
                                        <optgroup label="西班牙">
                                            <option value="49">
                                                马德里门店
                                            </option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="field-block dropoff-location">
                                    <label>行驶终点城市</label>

                                    <select name="reservation[dropoff_location_id]" data-fieldtype="dropoff_location" class="selectWithSearch js-locationsSelect">
                                        <option value="similar_to_pl" selected="&quot;selected&quot;">
                                            与取车城市相同
                                        </option>

                                    </select>
                                </div>
                                <div class="field-block">
                                    <label for="">出发日期/时间</label>

                                    <div class="dateTime">
                                        <div class="DepDate">
                                            <input type="text" name="reservation[pickup_date]" readonly="true" class="js-pickupDate" value="05/25/2018">
                                            <span class="icn-Calendar js-pickupDateTrigger"></span>
                                        </div>

                                        <div class="dropdown DepTime">
                                            <select name="reservation[pickup_time_slot]" data-fieldtype="pickup_time_slot">
                                                <option value=" 8:00 am">
                                                    8:00 am
                                                </option>
                                                <option value=" 8:30 am">
                                                    8:30 am
                                                </option>
                                                <option value=" 9:00 am">
                                                    9:00 am
                                                </option>
                                                <option value=" 9:30 am">
                                                    9:30 am
                                                </option>
                                                <option value="10:00 am">
                                                    10:00 am
                                                </option>
                                                <option value="10:30 am">
                                                    10:30 am
                                                </option>
                                                <option value="11:00 am">
                                                    11:00 am
                                                </option>
                                                <option value="11:30 am">
                                                    11:30 am
                                                </option>
                                                <option value="12:00 pm" selected="&quot;selected&quot;">
                                                    12:00 pm
                                                </option>
                                                <option value="12:30 pm">
                                                    12:30 pm
                                                </option>
                                                <option value=" 1:00 pm">
                                                    1:00 pm
                                                </option>
                                                <option value=" 1:30 pm">
                                                    1:30 pm
                                                </option>
                                                <option value=" 2:00 pm">
                                                    2:00 pm
                                                </option>
                                                <option value=" 2:30 pm">
                                                    2:30 pm
                                                </option>
                                                <option value=" 3:00 pm">
                                                    3:00 pm
                                                </option>
                                                <option value=" 3:30 pm">
                                                    3:30 pm
                                                </option>
                                                <option value=" 4:00 pm">
                                                    4:00 pm
                                                </option>
                                                <option value=" 4:30 pm">
                                                    4:30 pm
                                                </option>
                                                <option value=" 5:00 pm">
                                                    5:00 pm
                                                </option>
                                                <option value=" 5:30 pm">
                                                    5:30 pm
                                                </option>
                                                <option value=" 6:00 pm">
                                                    6:00 pm
                                                </option>
                                                <option value=" 6:30 pm">
                                                    6:30 pm
                                                </option>
                                                <option value=" 7:00 pm">
                                                    7:00 pm
                                                </option>
                                                <option value=" 7:30 pm">
                                                    7:30 pm
                                                </option>
                                                <option value=" 8:00 pm">
                                                    8:00 pm
                                                </option>
                                                <option value=" 8:30 pm">
                                                    8:30 pm
                                                </option>
                                                <option value=" 9:00 pm">
                                                    9:00 pm
                                                </option>
                                                <option value=" 9:30 pm">
                                                    9:30 pm
                                                </option>
                                                <option value="10:00 pm">
                                                    10:00 pm
                                                </option>
                                                <option value="10:30 pm">
                                                    10:30 pm
                                                </option>
                                                <option value="11:00 pm">
                                                    11:00 pm
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="field-block returning-date">
                                    <label for="">返还日期/时间</label>

                                    <div class="dateTime">
                                        <div class="DepDate">
                                            <input type="text" name="reservation[dropoff_date]" readonly="true" class="js-dropoffDate" value="05/26/2018">
                                            <span class="icn-Calendar js-dropoffDateTrigger"></span>
                                        </div>

                                        <div class="dropdown DepTime">
                                            <select name="reservation[dropoff_time_slot]" data-fieldtype="dropoff_time_slot">
                                                <option value=" 8:00 am">
                                                    8:00 am
                                                </option>
                                                <option value=" 8:30 am">
                                                    8:30 am
                                                </option>
                                                <option value=" 9:00 am">
                                                    9:00 am
                                                </option>
                                                <option value=" 9:30 am">
                                                    9:30 am
                                                </option>
                                                <option value="10:00 am">
                                                    10:00 am
                                                </option>
                                                <option value="10:30 am">
                                                    10:30 am
                                                </option>
                                                <option value="11:00 am">
                                                    11:00 am
                                                </option>
                                                <option value="11:30 am">
                                                    11:30 am
                                                </option>
                                                <option value="12:00 pm" selected="&quot;selected&quot;">
                                                    12:00 pm
                                                </option>
                                                <option value="12:30 pm">
                                                    12:30 pm
                                                </option>
                                                <option value=" 1:00 pm">
                                                    1:00 pm
                                                </option>
                                                <option value=" 1:30 pm">
                                                    1:30 pm
                                                </option>
                                                <option value=" 2:00 pm">
                                                    2:00 pm
                                                </option>
                                                <option value=" 2:30 pm">
                                                    2:30 pm
                                                </option>
                                                <option value=" 3:00 pm">
                                                    3:00 pm
                                                </option>
                                                <option value=" 3:30 pm">
                                                    3:30 pm
                                                </option>
                                                <option value=" 4:00 pm">
                                                    4:00 pm
                                                </option>
                                                <option value=" 4:30 pm">
                                                    4:30 pm
                                                </option>
                                                <option value=" 5:00 pm">
                                                    5:00 pm
                                                </option>
                                                <option value=" 5:30 pm">
                                                    5:30 pm
                                                </option>
                                                <option value=" 6:00 pm">
                                                    6:00 pm
                                                </option>
                                                <option value=" 6:30 pm">
                                                    6:30 pm
                                                </option>
                                                <option value=" 7:00 pm">
                                                    7:00 pm
                                                </option>
                                                <option value=" 7:30 pm">
                                                    7:30 pm
                                                </option>
                                                <option value=" 8:00 pm">
                                                    8:00 pm
                                                </option>
                                                <option value=" 8:30 pm">
                                                    8:30 pm
                                                </option>
                                                <option value=" 9:00 pm">
                                                    9:00 pm
                                                </option>
                                                <option value=" 9:30 pm">
                                                    9:30 pm
                                                </option>
                                                <option value="10:00 pm">
                                                    10:00 pm
                                                </option>
                                                <option value="10:30 pm">
                                                    10:30 pm
                                                </option>
                                                <option value="11:00 pm">
                                                    11:00 pm
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>


                                <div class="clearfix"></div>
                            </div>

                            <div class="widget_btns">
                                <a href="/index.php/Rent?id=0" class="btn-highlight js-searchTrigger">立即搜索<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>


            <div class="barblock needHelp ">
                <img src="<?php echo $side[0]['image'] ?>" alt="鹰骑帮助">
                <span class="need_help_text">
    需要<strong>帮助？ </strong>
  </span>
                <div class="needHelpContent">
                    <div class="contact_us_help">
                        <div class="email_us">
                            <a title="Frequent Questions" href="/index.php/Bottom_info" class="btn-highlight">
                                <span class="icn-faq"></span><?php echo $side[0]['head'] ?>
                            </a>

                            <div class="clearfix"></div>
                        </div>

                        <p class="phon_numbers">
                            <a href="tel:+1 310-321-3180"><?php echo $side[0]['foot'] ?></a>
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="main_cont span9">

            <h2>
                <a href="united-states">中国</a>

                <p class="membership-logo-txt js-membershipRelated" style="display: none;">
                    <span class="icons-membership-logo-dark-small"></span>
                    ：参加EagleRider俱乐部的门店
                </p>
            </h2>


            <div class="row-fluid locationContent wrapperSeparate boxed">

                <div class="span6" style="width: 100%!important;">
					<?php foreach ($city as $key=>$citys): ?>
                    <div style="width: 50%;height: 30px;float: left;">
                        <li>
                            <a href="jingxuan_detail?id=<?php echo $citys['cit_id']?>" dir="ltr"><?php echo $citys['cit_name']?></a>
                            <span class="js-membershipRelated" style="display: none;"></span>
                        </li>
                    </div>
					<?php endforeach; ?>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>