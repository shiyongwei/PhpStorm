<script>
	$(function(){
		var MobileUA = (function() {
			var ua = navigator.userAgent.toLowerCase();

			var mua = {
				IOS: /ipod|iphone|ipad/.test(ua), //iOS
				IPHONE: /iphone/.test(ua), //iPhone
				IPAD: /ipad/.test(ua), //iPad
				ANDROID: /android/.test(ua), //Android Device
				WINDOWS: /windows/.test(ua), //Windows Device
				TOUCH_DEVICE: ('ontouchstart' in window) || /touch/.test(ua), //Touch Device
				MOBILE: /mobile/.test(ua), //Mobile Device (iPad)
				ANDROID_TABLET: false, //Android Tablet
				WINDOWS_TABLET: false, //Windows Tablet
				TABLET: false, //Tablet (iPad, Android, Windows)
				SMART_PHONE: false //Smart Phone (iPhone, Android)
			};

			mua.ANDROID_TABLET = mua.ANDROID && !mua.MOBILE;
			mua.WINDOWS_TABLET = mua.WINDOWS && /tablet/.test(ua);
			mua.TABLET = mua.IPAD || mua.ANDROID_TABLET || mua.WINDOWS_TABLET;
			mua.SMART_PHONE = mua.MOBILE && !mua.TABLET;

			return mua;
		}());

		//SmartPhone
		if (MobileUA.SMART_PHONE) {
			// 移动端链接地址

			document.location.href = '/index.php/Trave/mobile_Trave';
		}
	});
	$(function(){
		var MobileUA = (function() {
			var ua = navigator.userAgent.toLowerCase();

			var mua = {
				IOS: /ipod|iphone|ipad/.test(ua), //iOS
				IPHONE: /iphone/.test(ua), //iPhone
				IPAD: /ipad/.test(ua), //iPad
				ANDROID: /android/.test(ua), //Android Device
				WINDOWS: /windows/.test(ua), //Windows Device
				TOUCH_DEVICE: ('ontouchstart' in window) || /touch/.test(ua), //Touch Device
				MOBILE: /mobile/.test(ua), //Mobile Device (iPad)
				ANDROID_TABLET: false, //Android Tablet
				WINDOWS_TABLET: false, //Windows Tablet
				TABLET: false, //Tablet (iPad, Android, Windows)
				SMART_PHONE: false //Smart Phone (iPhone, Android)
			};

			mua.ANDROID_TABLET = mua.ANDROID && !mua.MOBILE;
			mua.WINDOWS_TABLET = mua.WINDOWS && /tablet/.test(ua);
			mua.TABLET = mua.IPAD || mua.ANDROID_TABLET || mua.WINDOWS_TABLET;
			mua.SMART_PHONE = mua.MOBILE && !mua.TABLET;

			return mua;
		}());

		//SmartPhone
		if (MobileUA.SMART_PHONE) {
			// 移动端链接地址

			document.location.href = '/index.php/Home/mobile_Home';
		}
	});

	$('.en').click(function() {
		var url = window.location.href;
		window.location.href='/index.php/trave?lang=en';
	});
	$('.cn').click(function() {
		window.location.href='/index.php/trave';
	});
</script>
<link href="/public/css/trave.css" type="text/css" rel="stylesheet" />
<div class="fullscrn toursscrn js-fullScreen " style="height: 458px; max-height: 1280px;">
    <img class="imgBG" src="https://d1y9jrrtx2baf.cloudfront.net/assets/dummy/tour_header_img-e0a6ba6c7c15f4f512506a183cf0bbcc.jpg">
    <div class="dim-bg"></div>

    <header class="er_reservation">
        <div class="container fold">
			<?php if(isset($_GET["lang"])): ?>
                <div class="row" style="width:1200px;margin-top: 30px;">
                <div class="span7">
                    <div class="reservation sideWidget js-combinedWidget" style="margin-left: -560px;">

                        <div class="options js-options">
                            <ul class="optionsblk widgetTabs">
                                <li class=" js-rentalTrigger">
                                    <a href="/index.php/Home"><?php echo $navigation_limit['navigation_name_en']?></a>
                                </li>

                                <li class="packages ">
                                    <a href="/index.php/Hotels"><?php echo $navigation_limit['lease_name_en']?></a>
                                </li>

                                <li class="selected js-toursTrigger">
                                    <a href="Javascript:;"><?php echo $navigation_limit['hotel_name_en']?></a>
                                </li>
                            </ul>

                            <div class="clearfix"></div>
                        </div>

                        <div class="js-rentalSearch" style="display:none;">
                            <div class="header js-header">
                                <p class="form_title">Search for motorcycle rental</p>
                                <a class="max-min-btn visible-tablet js-toggle" href="Javascript:;"><b class="caret"></b></a>

                                <div class="clearfix"></div>
                            </div>




                        </div>

                        <div class="js-toursSearch" style="width: 670px;">
                            <div class="header js-header">
                                <p class="form_title">Search for motorcycle rental</p>
                                <a class="max-min-btn visible-tablet js-toggle" href="Javascript:;"><b class="caret"></b></a>

                                <div class="clearfix"></div>
                            </div>

                            <div class="js-toursFormContainer">
                                <form accept-charset="UTF-8" action="/index.php/Rent?id=0" method="post">
                                    <div style="margin:0;padding:0;display:inline">
                                        <input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="x/t/BD/WNINoEiboXKiN2DvJ9yB72Lo4kLtPRMHN5tA=">
                                    </div>
                                    <div class="form_bot tourWidget">
                                        <div class="loader js-loading" style="display:none;">
                                            <span><img src="https://d1y9jrrtx2baf.cloudfront.net/assets/rentals/layout/Loading-023da9421c5001dc2879575217b0add0.gif"></span>
                                        </div>


                                        <div class="tour-filters-widget">
                                            <div class="row-fluid">


                                                <select name="reservation[pickup_location_id]" data-fieldtype="pickup_location" class="selectWithSearch js-locationsSelect" style="width: 97%;margin-top: 22px;">
                                                    <option value="" selected="&quot;selected&quot;">
                                                        Take car city
                                                    </option>
													<?php foreach ($city as $key=>$citys): ?>
                                                        <option value="" >
															<?php echo $citys['cit_name_en']?>
                                                        </option>
													<?php endforeach; ?>
                                                </select>

                                                <select name="reservation[pickup_location_id]" data-fieldtype="pickup_location" class="selectWithSearch js-locationsSelect" style="width: 97%;margin-top: 22px;">
                                                    <option value="" selected="&quot;selected&quot;">
                                                        ALL TRAVEL
                                                    </option>
													<?php foreach ($team as $key=>$teams): ?>
                                                        <option value="" >
															<?php echo $teams['teamtitle_en']?>
                                                        </option>
													<?php endforeach; ?>
													<?php foreach ($uriving as $key=>$urivings): ?>
                                                        <option value="" >
															<?php echo $urivings['urivingtitle_en']?>
                                                        </option>
													<?php endforeach; ?>
                                                </select>


                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="widget_btns">
                                        <a href="" class="btn-highlight js-searchTrigger">Reservations now<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="span5 visible-desktop" style="margin-top: 198px;">
                    <div class="tour-display">
                        <p style="margin-left:100px;font-size: 35px;text-align: left;position: static;display: block;line-height: 35px;margin-bottom: 30px;">START YOUR <br><em>DREAM <br>ADVENTURE</em></p>
                        <a style="margin-right: 80px;" href="Javascript:;" class="btn-highlight learn js-learn">learn about Ways to ride</a>
                    </div>
                </div>
            </div>
			<?php endif; ?>
			<?php if(empty($_GET["lang"])): ?>
                <div class="row" style="width:1200px;margin-top: 30px;">
                    <div class="span7">
                        <div class="reservation sideWidget js-combinedWidget" style="margin-left: -560px;">

                            <div class="options js-options">
                                <ul class="optionsblk widgetTabs">
                                    <li class=" js-rentalTrigger">
                                        <a href="/index.php/Home"><?php echo $navigation_limit['navigation_name']?></a>
                                    </li>

                                    <li class="packages ">
                                        <a href="/index.php/Hotels"><?php echo $navigation_limit['lease_name']?></a>
                                    </li>

                                    <li class="selected js-toursTrigger">
                                        <a href="Javascript:;"><?php echo $navigation_limit['hotel_name']?></a>
                                    </li>
                                </ul>

                                <div class="clearfix"></div>
                            </div>

                            <div class="js-rentalSearch" style="display:none;">
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
                                                <label for="">需要几辆摩托车</label>
                                                <ul class="optionsblk motorNum">
                                                    <li>
                                                        <div class="iradio_square-blue checked" style="position: relative;">
                                                            <input type="radio" name="reservation[vehicles_count]" value="1" class="js-numberCheckbox" id="vehicles_count_1_1" checked="&quot;checked&quot;" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                            <ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                        </div>
                                                        <label class="radio" for="vehicles_count_1_1">1</label>
                                                    </li>
                                                    <li>
                                                        <div class="iradio_square-blue" style="position: relative;">
                                                            <input type="radio" name="reservation[vehicles_count]" value="2" class="js-numberCheckbox" id="vehicles_count_2_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                            <ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                        </div>
                                                        <label class="radio" for="vehicles_count_2_1">2</label>
                                                    </li>
                                                    <li>
                                                        <div class="iradio_square-blue" style="position: relative;">
                                                            <input type="radio" name="reservation[vehicles_count]" value="3" class="js-numberCheckbox" id="vehicles_count_3_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                            <ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                        </div>
                                                        <label class="radio" for="vehicles_count_3_1">3</label>
                                                    </li>
                                                    <li>
                                                        <div class="iradio_square-blue" style="position: relative;">
                                                            <input type="radio" name="reservation[vehicles_count]" value="" class="js-numberCheckbox" id="vehicles_count_other_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                            <ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                        </div>
                                                        <label class="radio fieldIF js-label" for="vehicles_count_other_1">
                                                            其他
                                                        </label>
                                                        <input type="text" title="Type number of motorcycles here" name="reservation[vehicles_count]" class="fieldIFinput js-numberField" value="" style="display: none;">
                                                    </li>
                                                </ul>


                                            </div>


                                            <div class="field-block pickup-location">
                                                <label for="">行驶出发城市</label>

                                                <div class="select2-container selectWithSearch js-locationsSelect" id="s2id_autogen1">
                                                    <a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-2">
          取车城市
        </span><abbr class="select2-search-choice-close"></abbr>
                                                        <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen2" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2">
                                                    <div class="select2-drop select2-display-none select2-with-searchbox">
                                                        <div class="select2-search">
                                                            <label for="s2id_autogen2_search" class="select2-offscreen"></label>
                                                            <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="">
                                                        </div>
                                                        <ul class="select2-results" role="listbox" id="select2-results-2"></ul>
                                                    </div>
                                                </div>
                                                <select name="reservation[pickup_location_id]" data-fieldtype="pickup_location" class="selectWithSearch js-locationsSelect" tabindex="-1" title="" style="display: none;">
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

                                                <div class="select2-container selectWithSearch js-locationsSelect" id="s2id_autogen3">
                                                    <a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-4">
            与取车城市相同
          </span><abbr class="select2-search-choice-close"></abbr>
                                                        <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen4" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4" id="s2id_autogen4">
                                                    <div class="select2-drop select2-display-none select2-with-searchbox">
                                                        <div class="select2-search">
                                                            <label for="s2id_autogen4_search" class="select2-offscreen"></label>
                                                            <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-4" id="s2id_autogen4_search" placeholder="">
                                                        </div>
                                                        <ul class="select2-results" role="listbox" id="select2-results-4"></ul>
                                                    </div>
                                                </div>
                                                <select name="reservation[dropoff_location_id]" data-fieldtype="dropoff_location" class="selectWithSearch js-locationsSelect" tabindex="-1" title="" style="display: none;">
                                                    <option value="similar_to_pl" selected="&quot;selected&quot;">
                                                        与取车城市相同
                                                    </option>

                                                </select>
                                            </div>
                                            <div class="field-block">
                                                <label for="">出发日期/时间</label>

                                                <div class="dateTime">
                                                    <div class="DepDate">
                                                        <input type="text" name="reservation[pickup_date]" readonly="true" class="js-pickupDate hasDatepicker" value="05/24/2018" id="dp1527164116086">
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
                                                        <input type="text" name="reservation[dropoff_date]" readonly="true" class="js-dropoffDate hasDatepicker" value="05/25/2018" id="dp1527164116087">
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


                                <div class="promo-notifications js-promo" style="display: none; right: -100px; opacity: 0;">
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

                            <div class="js-toursSearch" style="width: 670px;">
                                <div class="header js-header">
                                    <p class="form_title">搜索摩托车旅游</p>
                                    <a class="max-min-btn visible-tablet js-toggle" href="Javascript:;"><b class="caret"></b></a>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="js-toursFormContainer">
                                    <form accept-charset="UTF-8" action="/index.php/Rent?id=0" method="post">
                                        <div style="margin:0;padding:0;display:inline">
                                            <input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="x/t/BD/WNINoEiboXKiN2DvJ9yB72Lo4kLtPRMHN5tA=">
                                        </div>
                                        <div class="form_bot tourWidget">
                                            <div class="loader js-loading" style="display:none;">
                                                <span><img src="https://d1y9jrrtx2baf.cloudfront.net/assets/rentals/layout/Loading-023da9421c5001dc2879575217b0add0.gif"></span>
                                            </div>


                                            <div class="tour-filters-widget">
                                                <div class="row-fluid">


                                                    <select name="reservation[pickup_location_id]" data-fieldtype="pickup_location" class="selectWithSearch js-locationsSelect" style="width: 97%;margin-top: 22px;">
                                                        <option value="" selected="&quot;selected&quot;">
                                                            取车城市
                                                        </option>
														<?php foreach ($city as $key=>$citys): ?>
                                                            <option value="" >
																<?php echo $citys['cit_name']?>
                                                            </option>
														<?php endforeach; ?>
                                                    </select>

                                                    <select name="reservation[pickup_location_id]" data-fieldtype="pickup_location" class="selectWithSearch js-locationsSelect" style="width: 97%;margin-top: 22px;">
                                                        <option value="" selected="&quot;selected&quot;">
                                                            所有旅游
                                                        </option>
														<?php foreach ($team as $key=>$teams): ?>
                                                            <option value="" >
																<?php echo $teams['teamtitle']?>
                                                            </option>
														<?php endforeach; ?>
														<?php foreach ($uriving as $key=>$urivings): ?>
                                                            <option value="" >
																<?php echo $urivings['urivingtitle']?>
                                                            </option>
														<?php endforeach; ?>
                                                    </select>


                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="widget_btns">
                                            <a href="" class="btn-highlight js-searchTrigger">立即预定<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
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


                                <div class="promo-notifications js-promo" style="display: none; right: -100px; opacity: 0;">
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
                                                        <div class="iradio_square-blue checked" style="position: relative;">
                                                            <input type="radio" name="reservation[vehicles_count]" value="1" class="js-numberCheckbox" id="vehicles_count_1_2" checked="&quot;checked&quot;" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                            <ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                        </div>
                                                        <label class="radio" for="vehicles_count_1_2">1</label>
                                                    </li>
                                                    <li>
                                                        <div class="iradio_square-blue" style="position: relative;">
                                                            <input type="radio" name="reservation[vehicles_count]" value="2" class="js-numberCheckbox" id="vehicles_count_2_2" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                            <ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                        </div>
                                                        <label class="radio" for="vehicles_count_2_2">2</label>
                                                    </li>
                                                    <li>
                                                        <div class="iradio_square-blue" style="position: relative;">
                                                            <input type="radio" name="reservation[vehicles_count]" value="3" class="js-numberCheckbox" id="vehicles_count_3_2" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                            <ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                        </div>
                                                        <label class="radio" for="vehicles_count_3_2">3</label>
                                                    </li>
                                                    <li>
                                                        <div class="iradio_square-blue" style="position: relative;">
                                                            <input type="radio" name="reservation[vehicles_count]" value="" class="js-numberCheckbox" id="vehicles_count_other_2" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">
                                                            <ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins>
                                                        </div>
                                                        <label class="radio fieldIF js-label" for="vehicles_count_other_2">
                                                            其他
                                                        </label>
                                                        <input type="text" title="Type number of motorcycles here" name="reservation[vehicles_count]" class="fieldIFinput js-numberField" value="" style="display: none;">
                                                    </li>
                                                </ul>


                                            </div>

                                            <input type="hidden" name="reservation[route_id]" value="custom">

                                            <div class="field-block pickup-location">
                                                <label for="">行驶出发城市</label>

                                                <div class="select2-container selectWithSearch js-locationsSelect" id="s2id_autogen5">
                                                    <a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-6">
          取车城市
        </span><abbr class="select2-search-choice-close"></abbr>
                                                        <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen6" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-6" id="s2id_autogen6">
                                                    <div class="select2-drop select2-display-none select2-with-searchbox">
                                                        <div class="select2-search">
                                                            <label for="s2id_autogen6_search" class="select2-offscreen"></label>
                                                            <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-6" id="s2id_autogen6_search" placeholder="">
                                                        </div>
                                                        <ul class="select2-results" role="listbox" id="select2-results-6"></ul>
                                                    </div>
                                                </div>
                                                <select name="reservation[pickup_location_id]" data-fieldtype="pickup_location" class="selectWithSearch js-locationsSelect" tabindex="-1" title="" style="display: none;">
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

                                                <div class="select2-container selectWithSearch js-locationsSelect" id="s2id_autogen7">
                                                    <a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-8">
            与取车城市相同
          </span><abbr class="select2-search-choice-close"></abbr>
                                                        <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen8" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-8" id="s2id_autogen8">
                                                    <div class="select2-drop select2-display-none select2-with-searchbox">
                                                        <div class="select2-search">
                                                            <label for="s2id_autogen8_search" class="select2-offscreen"></label>
                                                            <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-8" id="s2id_autogen8_search" placeholder="">
                                                        </div>
                                                        <ul class="select2-results" role="listbox" id="select2-results-8"></ul>
                                                    </div>
                                                </div>
                                                <select name="reservation[dropoff_location_id]" data-fieldtype="dropoff_location" class="selectWithSearch js-locationsSelect" tabindex="-1" title="" style="display: none;">
                                                    <option value="similar_to_pl" selected="&quot;selected&quot;">
                                                        与取车城市相同
                                                    </option>

                                                </select>
                                            </div>
                                            <div class="field-block">
                                                <label for="">出发日期/时间</label>

                                                <div class="dateTime">
                                                    <div class="DepDate">
                                                        <input type="text" name="reservation[pickup_date]" readonly="true" class="js-pickupDate hasDatepicker" value="05/25/2018" id="dp1527164116088">
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
                                                        <input type="text" name="reservation[dropoff_date]" readonly="true" class="js-dropoffDate hasDatepicker" value="05/26/2018" id="dp1527164116089">
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
                    </div>
                    <div class="span5 visible-desktop" style="margin-top: 198px;">
                        <div class="tour-display">
                            <p style="margin-left:100px;font-size: 35px;text-align: left;position: static;display: block;line-height: 35px;margin-bottom: 30px;">START YOUR <br><em>DREAM <br>ADVENTURE</em></p>
                            <a style="margin-right: 80px;" href="Javascript:;" class="btn-highlight learn js-learn">查看关于摩托车骑行的不同方式</a>
                        </div>
                    </div>
                </div>
			<?php endif; ?>
        </div>
    </header>

    <a href="Javascript:;" class="btn-light viewmore visible-desktop">
        <span class="icn-arrowOrangeDown"></span> View more
    </a>
</div>
<div id="js-viewMore" class="container wrapperSeparate top-margin">
    <div class="row" style="margin-top: 40px;">
        <div class="span12" style="width: 1170px;">
			<?php if(isset($_GET["lang"])): ?>
            <h2 class="secTitle" style="color: #000;text-align: center;">
                <span class="bold" dir="ltr">Featured</span>
                <span dir="ltr">TRAVE</span>
            </h2>
			<?php endif; ?>
			<?php if(empty($_GET["lang"])): ?>
                <h2 class="secTitle" style="color: #000;text-align: center;">
                    <span class="bold" dir="ltr">精选</span>
                    <span dir="ltr">摩托车之旅</span>
                </h2>
			<?php endif; ?>
        </div>
    </div>

    <div class="row midSection js-routatSlider slick-initialized slick-slider" role="toolbar">
        <div aria-live="polite" class="slick-list draggable">
            <div class="slick-track" style="opacity: 1; width: 4200px; left: -1500px;" role="listbox">
                <div class="tour span3 js-tourContainer slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" tabindex="-1" style="width: 270px;">
                    <a href="/baja-motorcycle-tours" class="thumbnail" tabindex="-1">
                        <img alt="巴哈" class="tour_image" src="https://d56b293rhv8dp.cloudfront.net/experience_pages/3/cover_images/original/baja_explore.jpg?1519418738">
                        <p class="tour_name">
                            <span>巴哈</span>
                        </p>
                    </a>
                </div>

                <div class="tour span3 js-tourContainer slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1" style="width: 270px;">
                    <a href="/northwest-and-the-rockies-motorcycle-tours" class="thumbnail" tabindex="-1">
                        <img alt="美国西北部和洛基山脉" class="tour_image" src="https://d56b293rhv8dp.cloudfront.net/experience_pages/5/cover_images/original/north_west.jpg?1519418908">
                        <p class="tour_name">
                            <span>美国西北部和洛基山脉</span>
                        </p>
                    </a>
                </div>
                <div class="tour span3 js-tourContainer slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 270px;">
                    <a href="/southeast-motorcycle-tours" class="thumbnail" tabindex="-1">
                        <img alt="美国东南部" class="tour_image" src="https://d56b293rhv8dp.cloudfront.net/experience_pages/6/cover_images/original/south_east.jpg?1519419012">
                        <p class="tour_name">
                            <span>美国东南部</span>
                        </p>
                    </a>
                </div>
                <div class="tour span3 js-tourContainer slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide00" style="width: 270px;">
                    <a href="/route-66-motorcycle-tours" class="thumbnail" tabindex="-1">
                        <img alt="66号公路" class="tour_image" src="https://d56b293rhv8dp.cloudfront.net/experience_pages/1/cover_images/original/route_66.jpg?1519418808">
                        <p class="tour_name">
                            <span>66号公路</span>
                        </p>
                    </a>
                </div>


                <div class="tour span3 js-tourContainer slick-slide slick-active" data-slick-index="4" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide04" style="width: 270px;">
                    <a href="/northwest-and-the-rockies-motorcycle-tours" class="thumbnail" tabindex="0">
                        <img alt="美国西北部和洛基山脉" class="tour_image" src="https://d56b293rhv8dp.cloudfront.net/experience_pages/5/cover_images/original/north_west.jpg?1519418908">
                        <p class="tour_name">
                            <span>美国西北部和洛基山脉</span>
                        </p>
                    </a>
                </div>

				<?php foreach ($topic as $key=>$topics): ?>
				<?php if(isset($_GET["lang"])): ?>
                <div class="tour span3 js-tourContainer slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide05" style="width: 270px;">
                    <a href="/index.php/hotTrave_detail?id=<?php echo $topics['topic_id']?>" class="thumbnail" tabindex="-1">
                        <img alt="<?php echo $topics['topictitle_en'];?>" class="tour_image" src="<?php echo $topics['image']?>" style="height: 180px;">
                        <p class="tour_name">
                            <span>
								<?php
//                                    for ($i=0;$i<count($city);$i++){
//                                        if ($city[$i]['cit_id'] ==  $classifyinfos['cit_id']){
                                            echo $topics['topictitle_en'];
//                                        }
//                                    }
                                ?>
                            </span>
                        </p>
                    </a>
                </div>
				<?php endif; ?>
				<?php if(empty($_GET["lang"])): ?>

                        <div class="tour span3 js-tourContainer slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide05" style="width: 270px;">
                            <a href="/index.php/hotTrave_detail?id=<?php echo $topics['topic_id']?>" class="thumbnail" tabindex="-1">
                                <img alt="<?php echo $topics['topictitle'];?>" class="tour_image" src="<?php echo $topics['image']?>" style="height: 180px;">
                                <p class="tour_name">
                            <span>
								<?php
									//                                    for ($i=0;$i<count($city);$i++){
									//                                        if ($city[$i]['cit_id'] ==  $classifyinfos['cit_id']){
									echo $topics['topictitle'];
									//                                        }
									//                                    }
								?>
                            </span>
                                </p>
                            </a>
                        </div>
					<?php endif; ?>
				<?php endforeach; ?>



            </div>
        </div>




    </div>
</div>
<div class="container psection tours-section" style="background: #efefef;
    margin: 60px auto;
    padding: 10px;">
	<?php if(isset($_GET["lang"])): ?>
        <div class="row">
            <div class="span12 tourText">
                <h1 class="secTitle" style="color: #000;text-align: center;">
                    <span class="bold" dir="ltr" style="font-weight: bold;">motorcycle</span>
                    travel
                </h1>

                <h3 style="color: #000;text-align: center;font-style: italic;">LEARN ABOUT WAYS TO RIDE</h3>
            </div>
        </div>
	<?php endif; ?>
	<?php if(empty($_GET["lang"])): ?>
        <div class="row">
            <div class="span12 tourText">
                <h1 class="secTitle" style="color: #000;text-align: center;">
                    <span class="bold" dir="ltr" style="font-weight: bold;">摩托车</span>
                    旅行
                </h1>

                <h3 style="color: #000;text-align: center;font-style: italic;">查看关于摩托车骑行的不同方式</h3>
            </div>
        </div>
	<?php endif; ?>

    <div class="row icons">
		<?php if(isset($_GET["lang"])): ?>
        <div class="span12 icons-container">
            <a href="Javascript:;" class="js-guidedTrigger coinActive" style="float: left;background: #303030;width: 25%;margin-left: 8px;">
                <svg>
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.eaglerider.com/assets/v2/dest/dest-a869bb21a4d43da79e8ac8d2de38ffdd.svg#GUIDED-TOURS"></use>
                </svg>
                <span style="margin-bottom: 10px;text-align: center;display: block;color: white;"><?php echo $explode[3]['increase_name_en'] ?></span>
            </a>
            <a href="Javascript:;" class="js-selfDriveTrigger active" style="float: left;width: 24%;background: #303030;margin-left: 8px;">
                <svg>
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.eaglerider.com/assets/v2/dest/dest-a869bb21a4d43da79e8ac8d2de38ffdd.svg#SELF-DRIVE-TOURS"></use>
                </svg>
                <span style="margin-bottom: 10px;text-align: center;display: block;color: white;"><?php echo $explode[2]['increase_name_en'] ?></span>
            </a>
            <a href="Javascript:;" class="js-bikeAndHotelTrigger" style="float: left;width: 24%;background: #303030;margin-left: 8px;">
                <svg>
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.eaglerider.com/assets/v2/dest/dest-a869bb21a4d43da79e8ac8d2de38ffdd.svg#BIKE+HOTEL"></use>
                </svg>
                <span style="margin-bottom: 10px;text-align: center;display: block;color: white;"><?php echo $explode[1]['increase_name_en'] ?></span>
            </a>
            <a href="Javascript:;" class="js-bikeOnlyTrigger" style="float: left;width: 24%;background: #303030;margin-left: 8px;">
                <svg>
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.eaglerider.com/assets/v2/dest/dest-a869bb21a4d43da79e8ac8d2de38ffdd.svg#BIKE-ONLY"></use>
                </svg>
                <span style="margin-bottom: 10px;text-align: center;display: block;color: white;"><?php echo $explode[0]['increase_name_en'] ?></span>
            </a>
        </div>
		<?php endif; ?>
		<?php if(empty($_GET["lang"])): ?>
        <div class="span12 icons-container">
            <a href="Javascript:;" class="js-guidedTrigger coinActive" style="float: left;background: #303030;width: 25%;margin-left: 8px;">
                <svg>
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.eaglerider.com/assets/v2/dest/dest-a869bb21a4d43da79e8ac8d2de38ffdd.svg#GUIDED-TOURS"></use>
                </svg>
                <span style="margin-bottom: 10px;text-align: center;display: block;color: white;"><?php echo $explode[3]['increase_name'] ?></span>
            </a>
            <a href="Javascript:;" class="js-selfDriveTrigger active" style="float: left;width: 24%;background: #303030;margin-left: 8px;">
                <svg>
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.eaglerider.com/assets/v2/dest/dest-a869bb21a4d43da79e8ac8d2de38ffdd.svg#SELF-DRIVE-TOURS"></use>
                </svg>
                <span style="margin-bottom: 10px;text-align: center;display: block;color: white;"><?php echo $explode[2]['increase_name'] ?></span>
            </a>
            <a href="Javascript:;" class="js-bikeAndHotelTrigger" style="float: left;width: 24%;background: #303030;margin-left: 8px;">
                <svg>
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.eaglerider.com/assets/v2/dest/dest-a869bb21a4d43da79e8ac8d2de38ffdd.svg#BIKE+HOTEL"></use>
                </svg>
                <span style="margin-bottom: 10px;text-align: center;display: block;color: white;"><?php echo $explode[1]['increase_name'] ?></span>
            </a>
            <a href="Javascript:;" class="js-bikeOnlyTrigger" style="float: left;width: 24%;background: #303030;margin-left: 8px;">
                <svg>
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="https://www.eaglerider.com/assets/v2/dest/dest-a869bb21a4d43da79e8ac8d2de38ffdd.svg#BIKE-ONLY"></use>
                </svg>
                <span style="margin-bottom: 10px;text-align: center;display: block;color: white;"><?php echo $explode[0]['increase_name'] ?></span>
            </a>
        </div>
		<?php endif; ?>
    </div>


    <style>
        .coinActive{
            background: #ee7c13!important;
        }
    </style>
    <script>

		$('.icons-container a').click(function () {
			$(this).addClass('coinActive').siblings().removeClass('coinActive');
			$(this).parents().find(".new_text").eq($(this).index()).show().siblings('.new_text').hide();
		});

    </script>

    <!-- guided_tours -->
	<?php if(isset($_GET["lang"])): ?>
    <div class="row featured-tours guided_tours js-guidedTours new_text" style="display: block;margin-top: 25px;">

        <div class="span8" style="padding-left: 10px;">
			<?php echo $explode[3]['text_en'] ?>
        </div>

        <div class="span4 featuredTours" style="margin-top: 15px;width: 355px !important;">
            <a href="/index.php/team" class="btn-highlight" style="width: auto;text-align: left;margin: 5px 0;clear: both;">
                View all team Tours
            </a>

            <a class="btn-highlight js-readMore" href="Javascript:;" style="width: auto;text-align: left;margin: 5px 0;clear: both;">
                learn more
            </a>
        </div>
    </div>
	<?php endif; ?>
	<?php if(empty($_GET["lang"])): ?>
        <div class="row featured-tours guided_tours js-guidedTours new_text" style="display: block;margin-top: 25px;">

            <div class="span8" style="padding-left: 10px;">
				<?php echo $explode[3]['text'] ?>
            </div>

            <div class="span4 featuredTours" style="margin-top: 15px;width: 355px !important;">
                <a href="/index.php/team" class="btn-highlight" style="width: auto;text-align: left;margin: 5px 0;clear: both;">
                    查看所有团队旅行
                </a>

                <a class="btn-highlight js-readMore" href="Javascript:;" style="width: auto;text-align: left;margin: 5px 0;clear: both;">
                    learn more
                </a>
            </div>
        </div>
	<?php endif; ?>

    <!-- self_drive -->
	<?php if(isset($_GET["lang"])): ?>
    <div class="row featured-tours guided_tours js-guidedTours new_text" style="display: block;margin-top: 25px;display: none;" >
        <div class="span8" style="padding-left: 10px;">
			<?php echo $explode[2]['text_en'] ?>
        </div>

        <div class="span4 featuredTours" style="margin-top: 15px;width: 355px !important;">
            <a href="/index.php/classify" class="btn-highlight ccc" style="width: auto;text-align: left;margin: 5px 0;clear: both;">
                View all road Tours
            </a>

            <a class="btn-highlight js-readMore" href="Javascript:;" style="width: auto;text-align: left;margin: 5px 0;clear: both;">
                learn more
            </a>
        </div>
    </div>
	<?php endif; ?>
	<?php if(empty($_GET["lang"])): ?>
    <div class="row featured-tours guided_tours js-guidedTours new_text" style="display: block;margin-top: 25px;display: none;" >
        <div class="span8" style="padding-left: 10px;">
			<?php echo $explode[2]['text'] ?>
        </div>

        <div class="span4 featuredTours" style="margin-top: 15px;width: 355px !important;">
            <a href="/index.php/classify" class="btn-highlight ccc" style="width: auto;text-align: left;margin: 5px 0;clear: both;">
                查看所有自驾旅行线路
            </a>

            <a class="btn-highlight js-readMore" href="Javascript:;" style="width: auto;text-align: left;margin: 5px 0;clear: both;">
                learn more
            </a>
        </div>
    </div>
	<?php endif; ?>

    <!-- road_trip -->
	<?php if(isset($_GET["lang"])): ?>
    <div class="row featured-tours guided_tours js-guidedTours new_text" style="display: block;margin-top: 25px;display: none;">
        <div class="span8" style="padding-left: 10px;">
			<?php echo $explode[1]['text_en'] ?>
        </div>

        <div class="span4 featuredTours" style="margin-top: 15px;width: 355px !important;">
            <a href="/index.php/hotels" class="btn-highlight" style="width: auto;text-align: left;margin: 5px 0;clear: both;">
                All motorcycle＋Hotel
            </a>

            <a class="btn-highlight js-readMore" href="Javascript:;" style="width: auto;text-align: left;margin: 5px 0;clear: both;">
                learn more
            </a>
        </div>
    </div>
	<?php endif; ?>
	<?php if(empty($_GET["lang"])): ?>
    <div class="row featured-tours guided_tours js-guidedTours new_text" style="display: block;margin-top: 25px;display: none;">
        <div class="span8" style="padding-left: 10px;">
			<?php echo $explode[1]['text'] ?>
        </div>

        <div class="span4 featuredTours" style="margin-top: 15px;width: 355px !important;">
            <a href="/index.php/hotels" class="btn-highlight" style="width: auto;text-align: left;margin: 5px 0;clear: both;">
                查看所有摩托车＋酒店套餐
            </a>

            <a class="btn-highlight js-readMore" href="Javascript:;" style="width: auto;text-align: left;margin: 5px 0;clear: both;">
                learn more
            </a>
        </div>
    </div>
	<?php endif; ?>
    <!-- bike-hotel -->
	<?php if(isset($_GET["lang"])): ?>
    <div class="row featured-tours guided_tours js-guidedTours new_text" style="display: block;margin-top: 25px;display: none;">
        <div class="span8" style="padding-left: 10px;">
			<?php echo $explode[0]['text_en'] ?>
        </div>

        <div class="span4 featuredTours" style="margin-top: 15px;width: 355px !important;">
            <a href="/index.php/rent?id=0" class="btn-highlight" style="width: auto;text-align: left;margin: 5px 0;clear: both;">

                Check out all motorcycle

            </a>

            <a class="btn-highlight js-readMore" href="Javascript:;" style="width: auto;text-align: left;margin: 5px 0;clear: both;">
                learn more
            </a>
        </div>
    </div>
	<?php endif; ?>
	<?php if(empty($_GET["lang"])): ?>
        <div class="row featured-tours guided_tours js-guidedTours new_text" style="display: block;margin-top: 25px;display: none;">
            <div class="span8" style="padding-left: 10px;">
				<?php echo $explode[0]['text'] ?>
            </div>

            <div class="span4 featuredTours" style="margin-top: 15px;width: 355px !important;">
                <a href="/index.php/rent?id=0" class="btn-highlight" style="width: auto;text-align: left;margin: 5px 0;clear: both;">

                    查看所有摩托车套餐

                </a>

                <a class="btn-highlight js-readMore" href="Javascript:;" style="width: auto;text-align: left;margin: 5px 0;clear: both;">
                    learn more
                </a>
            </div>
        </div>
	<?php endif; ?>

    <!-- bike-only -->

</div>
<?php if(isset($_GET["lang"])): ?>
<div class="container">
    <p>We also offer personalized travel.If you have any questions,please contact us！</p>
</div>
<?php endif; ?>
<?php if(empty($_GET["lang"])): ?>
    <div class="container">
        <p>我们也提供个人定制旅行。如果您有任何问题，请联系我们！</p>
    </div>
<?php endif; ?>
