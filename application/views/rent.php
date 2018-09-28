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

			document.location.href = '/index.php/Rent/mobile_Rent';
		}
	});
	//paraName 等找参数的名称
	function GetUrlParam(paraName) {
		var url = document.location.toString();
		var arrObj = url.split("?");

		if (arrObj.length > 1) {
			var arrPara = arrObj[1].split("&");
			var arr;

			for (var i = 0; i < arrPara.length; i++) {
				arr = arrPara[i].split("=");

				if (arr != null && arr[0] == paraName) {
					return arr[1];
				}
			}
			return "";
		}
		else {
			return "";
		}
	}
	var id = GetUrlParam('id');
	$('.en').click(function() {
		window.location.href='/index.php/Rent?id='+id+'&&lang=en';
	});
	$('.cn').click(function() {
		window.location.href='/index.php/Rent?id='+id;
	});
</script>

<link href="/public/css/rent.css" type="text/css" rel="stylesheet" />
<div class="container">
    <div class="row">

        <div id="sidebar" class="sidebar span3">
			<?php if(isset($_GET["lang"])): ?>
                <div id="reservation_widget" class="reservation sideWidget js-reservationWidget">

                    <div class="options js-options">
                        <ul class="optionsblk widgetTabs">
                            <li class="selected js-rentalTrigger">
                                <a href="Javascript:;"><?php echo $navigation_limit['navigation_name_en']?></a>
                            </li>

                            <li class="packages  js-packagesTrigger">
                                <a href="Hotels"><?php echo $navigation_limit['lease_name_en']?></a>
                            </li>

                            <li class=" js-toursTrigger">
                                <a href="Trave"><?php echo $navigation_limit['hotel_name_en']?></a>
                            </li>

                        </ul>

                        <div class="clearfix"></div>
                    </div>

                    <div class="js-rentalSearch" style="">
                        <div class="header js-header">
                            <p class="form_title">Search for motorcycle rental</p>
                            <a class="max-min-btn visible-tablet js-toggle" href="Javascript:;"><b class="caret"></b></a>

                            <div class="clearfix"></div>
                        </div>

                        <div class="js-reservationFormContainer">
                            <form action="/index.php/Rent?id=0" method="post" class="res_widget" target="_blank">
                                <input type="hidden" name="authenticity_token" value="x/t/BD/WNINoEiboXKiN2DvJ9yB72Lo4kLtPRMHN5tA=">
                                <input type="hidden" name="reservation[reservation_type_id]" value="1">

                                <div class="form_bot">
                                    <div class="loader js-loading" style="display:none;">
                                        <span><span><img src="https://d1y9jrrtx2baf.cloudfront.net/assets/rentals/layout/Loading-023da9421c5001dc2879575217b0add0.gif"></span></span>
                                    </div>

                                    <div class="field-block fullWidth headblk js-numberSelection">
                                        <label for="" class="">Several motorcycles are needed</label>
                                        <ul class="optionsblk motorNum">
                                            <li style="margin-right: 0px !important;">
                                                <div class="iradio_square-blue checked" style="position: relative;"><input type="radio" name="num" value="1" class="js-numberCheckbox" id="vehicles_count_1_1" checked="&quot;checked&quot;" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label class="radio" for="vehicles_count_1_1">1</label>
                                            </li>
                                            <li style="margin-right: 0px !important;">
                                                <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="num" value="2" class="js-numberCheckbox" id="vehicles_count_2_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label class="radio" for="vehicles_count_2_1">2</label>
                                            </li>
                                            <li style="margin-right: 0px !important;">
                                                <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="num" value="3" class="js-numberCheckbox" id="vehicles_count_3_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label class="radio" for="vehicles_count_3_1">3</label>
                                            </li>
                                            <li style="margin-right: 0px !important;">
                                                <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="num" value="" class="js-numberCheckbox" id="vehicles_count_other_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label class="radio fieldIF js-label" for="vehicles_count_other_1">
                                                    Other
                                                </label>
                                                <input type="text" title="Type number of motorcycles here" name="num_other" class="fieldIFinput js-numberField" value="">
                                            </li>
                                        </ul>


                                    </div>


                                    <div class="field-block pickup-location">
                                        <label for="">Departure city</label>

                                        <select name="star_city" data-fieldtype="pickup_location" class="selectWithSearch js-locationsSelect">
                                            <option value="" selected="&quot;selected&quot;">
                                                Take car city
                                            </option>
											<?php foreach ($city as $key=>$citys): ?>
                                                <option value="<?php echo $citys['cit_name_en']?>">
													<?php echo $citys['cit_name_en']?>
                                                </option>
											<?php endforeach; ?>

                                        </select>
                                    </div>
                                    <div class="field-block pickup-location">
                                        <label for="">Destination city</label>
                                        <select name="end_city" data-fieldType="pickup_location"
                                                class="selectWithSearch js-locationsSelect">
                                            <option value="" selected=&quot;selected&quot;>
                                                Same as the pick-up city
                                            </option>
											<?php foreach ($city as $key=>$citys): ?>
                                                <option value="<?php echo $citys['cit_name_en']?>">
													<?php echo $citys['cit_name_en']?>
                                                </option>
											<?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="field-block">
                                        <label for="">date of departure/time</label>
                                        <div class="dateTime">
                                            <input class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})" name="star_time">
                                        </div>
                                    </div>
                                    <div class="field-block returning-date">
                                        <label for="">Return date/time</label>
                                        <div class="dateTime">

                                            <input class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})" name="end_time">

                                        </div>
                                    </div>
                                </div>

                                <div class="widget_btns">
                                    <a href="" class="btn-highlight js-searchTrigger"><button type="submit" style="border: none;background: none;color: white;height: 36px;">Search Now</button><span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
                                </div>
                            </form>
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



                                    <div class="clearfix"></div>
                                </div>

                                <div class="widget_btns">
                                    <a href="/index.php/Rent?id=0" class="btn-highlight js-searchTrigger">立即搜索<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
                                </div>

                            </form>

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

                            </div>


                        </div>
                    </div>

                </div>
			<?php endif; ?>
			<?php if(empty($_GET["lang"])): ?>
                <div id="reservation_widget" class="reservation sideWidget js-reservationWidget">

                    <div class="options js-options">
                        <ul class="optionsblk widgetTabs">
                            <li class="selected js-rentalTrigger">
                                <a href="Javascript:;"><?php echo $navigation_limit['navigation_name']?></a>
                            </li>

                            <li class="packages  js-packagesTrigger">
                                <a href="Hotels"><?php echo $navigation_limit['lease_name']?></a>
                            </li>

                            <li class=" js-toursTrigger">
                                <a href="Trave"><?php echo $navigation_limit['hotel_name']?></a>
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
                            <form action="/index.php/Rent?id=0" method="post" class="res_widget" target="_blank">
                                <input type="hidden" name="authenticity_token" value="x/t/BD/WNINoEiboXKiN2DvJ9yB72Lo4kLtPRMHN5tA=">
                                <input type="hidden" name="reservation[reservation_type_id]" value="1">






                                <div class="form_bot">
                                    <div class="loader js-loading" style="display:none;">
                                        <span><span><img src="https://d1y9jrrtx2baf.cloudfront.net/assets/rentals/layout/Loading-023da9421c5001dc2879575217b0add0.gif"></span></span>
                                    </div>

                                    <div class="field-block fullWidth headblk js-numberSelection">
                                        <label for="">需要几辆摩托车</label>
                                        <ul class="optionsblk motorNum">
                                            <li style="margin-right: 0px !important;">
                                                <div class="iradio_square-blue checked" style="position: relative;"><input type="radio" name="num" value="1" class="js-numberCheckbox" id="vehicles_count_1_1" checked="&quot;checked&quot;" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label class="radio" for="vehicles_count_1_1">1</label>
                                            </li>
                                            <li style="margin-right: 0px !important;">
                                                <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="num" value="2" class="js-numberCheckbox" id="vehicles_count_2_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label class="radio" for="vehicles_count_2_1">2</label>
                                            </li>
                                            <li style="margin-right: 0px !important;">
                                                <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="num" value="3" class="js-numberCheckbox" id="vehicles_count_3_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label class="radio" for="vehicles_count_3_1">3</label>
                                            </li>
                                            <li style="margin-right: 0px !important;">
                                                <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="num" value="" class="js-numberCheckbox" id="vehicles_count_other_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label class="radio fieldIF js-label" for="vehicles_count_other_1">
                                                    其他
                                                </label>
                                                <input type="text" title="Type number of motorcycles here" name="num_other" class="fieldIFinput js-numberField" value="" >
                                            </li>
                                        </ul>


                                    </div>


                                    <div class="field-block pickup-location">
                                        <label for="">行驶出发城市</label>

                                        <select name="star_city" data-fieldtype="pickup_location" class="selectWithSearch js-locationsSelect">
                                            <option value="" selected="&quot;selected&quot;">
                                                取车城市
                                            </option>
											<?php foreach ($city as $key=>$citys): ?>
                                                <option value="<?php echo $citys['cit_name']?>">
													<?php echo $citys['cit_name']?>
                                                </option>
											<?php endforeach; ?>

                                        </select>
                                    </div>
                                    <div class="field-block pickup-location">
                                        <label for="">行驶终点城市</label>
                                        <select name="end_city" data-fieldType="pickup_location"
                                                class="selectWithSearch js-locationsSelect">
                                            <option value="" selected=&quot;selected&quot;>
                                                与取车城市相同
                                            </option>
											<?php foreach ($city as $key=>$citys): ?>
                                                <option value="<?php echo $citys['cit_name']?>">
													<?php echo $citys['cit_name']?>
                                                </option>
											<?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="field-block">
                                        <label for="">出发日期/时间</label>
                                        <div class="dateTime">
                                            <input class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})" name="star_time">
                                        </div>
                                    </div>
                                    <div class="field-block returning-date">
                                        <label for="">返还日期/时间</label>
                                        <div class="dateTime">

                                            <input class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})" name="end_time">

                                        </div>
                                    </div>
                                </div>

                                <div class="widget_btns">
                                    <a href="" class="btn-highlight js-searchTrigger"><button type="submit" style="border: none;background: none;color: white;height: 36px;">立即预定</button><span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
                                </div>
                            </form>
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

                                </div>

                            </form>
                        </div>
                    </div>

                </div>
			<?php endif; ?>

			<?php if(isset($_GET["lang"])): ?>
                <div class="barblock needHelp ">
                    <img src="<?php echo $side[0]['image'] ?>" alt="help">
                    <span class="need_help_text">
                    Need<strong>Help?</strong>
                  </span>
                    <div class="needHelpContent">
                        <div class="contact_us_help">
                            <div class="email_us">
                                <a title="Frequent Questions" href="/index.php/Bottom_info" class="btn-highlight">
                                    <span class="icn-faq"></span><?php echo $side[0]['head_en'] ?>
                                </a>

                                <div class="clearfix"></div>
                            </div>

                            <p class="phon_numbers">
                                <a href="tel:+1 310-321-3180"><?php echo $side[0]['foot_en'] ?></a>
                            </p>
                        </div>
                    </div>
                </div>
			<?php endif; ?>
			<?php if(empty($_GET["lang"])): ?>
                <div class="barblock needHelp ">
                    <img src="<?php echo $side[0]['image'] ?>" alt="帮助">
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
			<?php endif; ?>

        </div>
		<?php if(isset($_GET["lang"])): ?>
            <div class="main_cont span9">
            <h1> Motorcycle rental</h1>
            <div class="search_bar">
                <h4>
                    <span class="no_results"><?php echo count($list)?></span>
                    Existing motorcycle models
                </h4>
                <div class="price-guarantee-container js-popup">
                    <a href="Javascript:;" class="js-popupTrigger" data-original-title="" title="">
                        <span class="icons-ok"></span>Best Rate Guarantee
                    </a>

                    <div class="popover-content hide js-popupContent">
                        <h4 class="best-price-guarantee-title">Price Assurance</h4>
                        <p>You will get the best price</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <section class="available_rides" style="display: block;">
                <div class="row js-vehiclesContainer" data-equalizer="pp556y-equalizer" data-equalize-by-row="true" data-locationid="" data-resize="ybtvek-eq" data-events="resize" style="margin-left: -15px;">
					<?php foreach ($list as $lists): ?>
                        <!--                    one-->
                        <form action="/index.php/Reg" method="post">
                            <div class="rideList promotionBox js-motorcycle boxs">
                                <a class="specification btn-highlight small js-specsTrigger specis" href="Javascript:;" title="<?php echo $lists['productitle_en']?>" onclick="product_list_show('<?php echo $lists['productitle_en']?>','/index.php/admin/admin/product_list_details?id=<?php echo $lists['id'];?>','800','650')">
                                    <span class="text_one">SIZE</span>
                                </a>
                                <a href="Javascript:;" class="js-bookTrigger bkt" title="Harley-Davidson® Electra Glide® Ultra Classic®">
                                    <div class="imageContainer images">
                                        <img src="<?php echo $lists['image']?>" alt="<?php echo $lists['productitle']?>">
                                    </div>
                                </a>
                                <a href="Javascript:;" style="text-decoration: none !important;display: block;">
                                    <h3 class="ride_title bold js-name ridetitles"><?php echo $lists['productitle']?></h3>
                                </a>

                                <input type="hidden" value="<?php echo $lists['productitle_en']?>" name="title">
                                <input type="hidden" value="<?php echo $reg_info['num']?>" name="num">
                                <input type="hidden" value="<?php echo $reg_info['star_city']?>" name="star_city">
                                <input type="hidden" value="<?php echo $reg_info['end_city']?>" name="end_city">
                                <input type="hidden" value="<?php echo $reg_info['star_time']?>" name="star_time">
                                <input type="hidden" value="<?php echo $reg_info['end_time']?>" name="end_time">

                                <span class="bike-class" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;margin-left: 7px;">
                          <span style="font-size: 14px;color: #000;">Class:</span> <em class="bold bolds"><?php echo $lists['category_name']?></em>
                        </span>

                                    <input type="submit" value="立即预订" style="border: none;background: none;color: white;width: 118%;height: 33px;margin-top: -5px;margin-left: -29px;">
                                <span class="icn-arrowWhiteRight" style="padding: 0;margin: 0.1em 0.5em 0 0;display: inline;float: right;top: -28px"></span>

                            </div>
                        </form>

					<?php endforeach; ?>
                </div>
                <div class="clearfix"></div>

            </section>
        </div>
		<?php endif; ?>
		<?php if(empty($_GET["lang"])): ?>
            <div class="main_cont span9">
                <h1> 摩托车租赁</h1>
                <div class="search_bar">
                    <h4>
                        <span class="no_results"><?php echo count($list)?></span>
                        现有摩托车车型
                    </h4>
                    <div class="price-guarantee-container js-popup">
                        <a href="Javascript:;" class="js-popupTrigger" data-original-title="" title="">
                            <span class="icons-ok"></span>最优价格保证
                        </a>

                        <div class="popover-content hide js-popupContent">
                            <h4 class="best-price-guarantee-title">价格保证</h4>
                            <p>您将获得最优惠的价格</p>
                        </div>
                    </div>

                </div>
                <section class="available_rides" style="display: block;">

                    <div id="test" class="row js-vehiclesContainer" data-equalizer="pp556y-equalizer" data-equalize-by-row="true" data-locationid="" data-resize="ybtvek-eq" data-events="resize" style="margin-left: -15px;">
						<?php foreach ($list as $lists): ?>
                            <!--                    one-->
                            <div class="rideList promotionBox js-motorcycle boxs">
                                <form action="/index.php/Reg" method="post">
                                <a class="specification btn-highlight small js-specsTrigger specis" href="Javascript:;" title="<?php echo $lists['productitle']?>" onclick="product_list_show('<?php echo $lists['productitle']?>','/index.php/admin/admin/product_list_details?id=<?php echo $lists['id'];?>','800','650')">
                                    <span class="text_one">规格</span>
                                </a>
                                <a href="Javascript:;" class="js-bookTrigger bkt" title="Harley-Davidson® Electra Glide® Ultra Classic®">
                                    <div class="imageContainer images">
                                        <img src="<?php echo $lists['image']?>" alt="<?php echo $lists['productitle']?>">
                                    </div>
                                </a>
                                <a href="Javascript:;" style="text-decoration: none !important;display: block;">
                                    <h3 class="ride_title bold js-name ridetitles"><?php echo $lists['productitle']?></h3>
                                </a>

                                <input type="hidden" value="<?php echo $lists['productitle']?>" name="title">
                                <input type="hidden" value="<?php echo $reg_info['num']?>" name="num">
                                <input type="hidden" value="<?php echo $reg_info['star_city']?>" name="star_city">
                                <input type="hidden" value="<?php echo $reg_info['end_city']?>" name="end_city">
                                <input type="hidden" value="<?php echo $reg_info['star_time']?>" name="star_time">
                                <input type="hidden" value="<?php echo $reg_info['end_time']?>" name="end_time">
                                <input type="hidden" value="<?php echo $reg_info['travel']?>" name="travel">

                                <span class="bike-class" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;margin-left: 7px;">
                          <span style="font-size: 14px;color: #000;">Class:</span> <em class="bold bolds"><?php echo $lists['category_name']?></em>
                        </span>
                                <a href="" class="btn-highlight small select js-bookTrigger" title="立即预订" style="float: left;width: 166px;line-height: 1.5em;padding: 5px 0 5px 38px;text-align: left;color: #fff;font-family: helvetica, Arial, sans-serif;text-transform: uppercase;font-size: 15px;height: 23px;position: absolute;bottom: 0px;">
                                    <input type="submit" value="立即预订" style="border: none;background: none;color: white;width: 118%;height: 33px;margin-top: -5px;margin-left: -29px;">
                                    <span class="icn-arrowWhiteRight" style="padding: 0;margin: 0.1em 0.5em 0 0;display: inline;float: right;top: -28px"></span>
                                </a>
                                </form>
                            </div>
						<?php endforeach; ?>
                    </div>



                </section>
            </div>
		<?php endif; ?>
    </div>
</div>

<script type="text/javascript" src="/public/js/style.js"></script>
<script type="text/javascript" src="/public/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/public/admin/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript">
    /*产品-查看*/
    function product_list_show (title, url,w,h) {
    layer.open({
    type: 2,
    area: [w+'px', h +'px'],
    fix: false, //不固定
    maxmin: true,
    shade:0.4,
    title: title,
    content: url,
    });
    }
</script>
<script>

	$(".optionsblk li").click(function(){
		$(this).find('.iradio_square-blue').addClass("checked");
		$(this).siblings().find('.iradio_square-blue').removeClass("checked");
		$(this).find('.js-numberCheckbox').prop('checked','checked');
	});

</script>
