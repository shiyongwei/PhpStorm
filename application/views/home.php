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

			document.location.href = '/index.php/Home/mobile_Home';
		}
	});

	$('.en').click(function() {
		var url = window.location.href;
        window.location.href='/index.php/Home?lang=en';
	});
	$('.cn').click(function() {
		window.location.href='/index.php/Home';
	});
</script>

<link href="/public/css/index.css" type="text/css" rel="stylesheet" />
<div class="fullscrn homescrn js-fullScreen">

    <img class="imgBG" src="<?php echo $text[0]['image']?>">

    <header class="er_reservation">
        <p class="homeTitle"><em><?php echo $text[0]['title']?></em></p>
		<?php if(empty($_GET["lang"])): ?>
        <form action="/index.php/Rent" method="post">
        <div class="reservation js-combinedWidget">

            <div class="options js-options">

                <ul class="optionsblk widgetTabs">
                    <li class="selected js-rentalTrigger">
                        <a href="Javascript:;"><?php echo $navigation_limit['navigation_name']?></a>
                    </li>

                    <li class="packages ">
                        <a href="/index.php/Hotels"><?php echo $navigation_limit['lease_name']?></a>
                    </li>

                    <li class=" js-toursTrigger">
                        <a href="/index.php/Trave"><?php echo $navigation_limit['hotel_name']?></a>
                    </li>

                    <li class="deals">
                        <a href="/index.php/Discounts"><?php echo $navigation_limit['promotions_name']?></a>
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
                        <input type="hidden" name="authenticity_token" value="1YTxxuLZwsPCnfl6mmXwrGeUXsLbZrRnQCJH85cn4kc=" />
                        <input type="hidden" name="reservation[reservation_type_id]" value="1">
                        <div class="form_bot">
                            <div class="loader js-loading" style="display:none;">
                                <span><span><img src="/public/image/Loading-023da9421c5001dc2879575217b0add0.gif" /></span></span>
                            </div>


                            <div class="field-block fullWidth headblk js-numberSelection">
                                <label for="">需要几辆摩托车</label>
                                <ul class="optionsblk motorNum" style="width: 300px !important;">
                                    <li>
                                        <div class="iradio_square-blue checked" style="position: relative;"><input type="radio" name="num" value="1" class="js-numberCheckbox" checked="checked" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        <label class="radio" for="vehicles_count_1_1">1</label>
                                    </li>
                                    <li>
                                        <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="num" value="2" class="js-numberCheckbox"  style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        <label class="radio" for="vehicles_count_2_1">2</label>
                                    </li>
                                    <li>
                                        <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="num" value="3" class="js-numberCheckbox"  style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        <label class="radio" for="vehicles_count_3_1">3</label>
                                    </li>
                                    <li>
                                        <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="num" value="" class="js-numberCheckbox"  style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                        <label class="radio fieldIF js-label" for="vehicles_count_other_1">
                                            其他
                                        </label>
                                        <input type="text" title="Type number of motorcycles here" name="num_other" class="fieldIFinput js-numberField" value="">
                                    </li>
                                </ul>

                            </div>

                            <div class="field-block pickup-location">
                                <label for="">行驶出发城市</label>
                                <select name="star_city" data-fieldType="pickup_location"
                                        class="selectWithSearch js-locationsSelect " id="star_city">
                                    <option value="" selected=&quot;selected&quot;>
                                        取车城市
                                    </option>
									<?php foreach ($city as $key=>$citys): ?>
                                        <option value="<?php echo $citys['cit_name']?>" >
											<?php echo $citys['cit_name']?>
                                        </option>
									<?php endforeach; ?>
                                </select>
                            </div>
                            <div class="field-block dropoff-location">
                                <label>行驶终点城市</label>
                                <select name="end_city" data-fieldType="dropoff_location"
                                        class="selectWithSearch js-locationsSelect">
                                    <option value=""
                                            selected=&quot;selected&quot;>
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
                            <div class="clearfix"></div>
                        </div>

                        <div class="widget_btns">
                            <a href="" class="btn-highlight js-searchTrigger"><button type="submit">立即搜索</button><span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
                        </div>

                </div>
                <div class="promo-notifications js-promo">
                    <div class="discounts group-discount">
                        <span class="arrow"></span>
                        <div class="body">
                            <h4>团队预订可以享受更多优惠！</h4>
                            <span class="percent">10%</span>
                            <span class="rule">3辆车<i>至少</i></span>
                        </div>
                        <div class="body">
                            <h3>
                                大部分预订只需支付20%的定金哦
                            </h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </form>
		<?php endif; ?>
		<?php if(isset($_GET["lang"])): ?>
            <div class="reservation js-combinedWidget">

                <div class="options js-options">
                        <ul class="optionsblk widgetTabs">
                            <li class="selected js-rentalTrigger">
                                <a href="Javascript:;"><?php echo $navigation_limit['navigation_name_en']?></a>
                            </li>

                            <li class="packages ">
                                <a href="/index.php/Hotels"><?php echo $navigation_limit['lease_name_en']?></a>
                            </li>

                            <li class=" js-toursTrigger">
                                <a href="/index.php/Trave"><?php echo $navigation_limit['hotel_name_en']?></a>
                            </li>

                            <li class="deals">
                                <a href="/index.php/Discounts"><?php echo $navigation_limit['promotions_name_en']?></a>
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
                        <form action="#" method="post" class="res_widget" target="_blank">
                            <input type="hidden" name="authenticity_token" value="1YTxxuLZwsPCnfl6mmXwrGeUXsLbZrRnQCJH85cn4kc=" />
                            <input type="hidden" name="reservation[reservation_type_id]" value="1">
                            <div class="form_bot">
                                <div class="loader js-loading" style="display:none;">
                                    <span><span><img src="/public/image/Loading-023da9421c5001dc2879575217b0add0.gif" /></span></span>
                                </div>


                                <div class="field-block fullWidth headblk js-numberSelection">
                                    <label for="">Several motorcycles are needed</label>
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
                                                Other
                                            </label>
                                            <input type="text" title="Type number of motorcycles here" name="reservation[vehicles_count]" class="fieldIFinput js-numberField" value="" style="display: none;">
                                        </li>
                                    </ul>
                                </div>

                                <div class="field-block pickup-location">
                                    <label for="">Departure city</label>
                                    <select name="reservation[pickup_location_id]" data-fieldType="pickup_location"
                                            class="selectWithSearch js-locationsSelect">
                                        <option value="" selected=&quot;selected&quot;>
                                            Take car city
                                        </option>
										<?php foreach ($city as $key=>$citys): ?>
                                            <option value="">
												<?php echo $citys['cit_name_en']?>
                                            </option>
										<?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="field-block dropoff-location">
                                    <label>Destination city</label>
                                    <select name="reservation[dropoff_location_id]" data-fieldType="dropoff_location"
                                            class="selectWithSearch js-locationsSelect">
                                        <option value="similar_to_pl"
                                                selected=&quot;selected&quot;>
                                            Same as the pick-up city
                                        </option>
										<?php foreach ($city as $key=>$citys): ?>
                                            <option value="">
												<?php echo $citys['cit_name_en']?>
                                            </option>
										<?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="field-block">
                                    <label for="">date of departure/time</label>
                                    <div class="dateTime">
                                        <input class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})">
                                    </div>
                                </div>
                                <div class="field-block returning-date">
                                    <label for="">Return date/time</label>
                                    <div class="dateTime">

                                        <input class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})">

                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="widget_btns">
                                <a href="/index.php/Rent?id=0" class="btn-highlight js-searchTrigger">Search Now<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
                            </div>
                        </form>
                    </div>


                    <div class="promo-notifications js-promo">
                        <div class="discounts group-discount">
                            <span class="arrow"></span>
                            <div class="body">
                                <h4>Team booking can enjoy more discounts!</h4>
                                <span class="percent">10%</span>
                                <span class="rule">three vehicles minimum</span>
                            </div>
                            <div class="body">
                                <h3>
                                    Most bookings only require a 20% down payment
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
                        <form accept-charset="UTF-8" action="tours/search_widget.html" method="post">
                            <div style="margin:0;padding:0;display:inline">
                                <input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="1YTxxuLZwsPCnfl6mmXwrGeUXsLbZrRnQCJH85cn4kc=" />
                            </div>
                            <div class="form_bot tourWidget">
                                <div class="loader js-loading" style="display:none;">
                                    <span><img src="/public/image/Loading-023da9421c5001dc2879575217b0add0.gif" /></span>
                                </div>

                                <div class="field-block fullWidth headblk">
                                    <ul class="optionsblk motorNum tours-type">
                                        <li>
                                            <input checked="checked" class="js-line" id="tour_type_id_" name="tour_type_id" type="radio" value="" />
                                            <label class="radio" for="tour_search_widget_tour_type_id_">
                                                所有旅行项目
                                            </label>
                                        </li>

                                        <li>
                                            <input class="js-line js-tourType-guided" id="tour_type_id_1" name="tour_type_id" type="radio" value="1" />
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
                                            <input class="js-line js-tourType-self_drive" id="tour_type_id_2" name="tour_type_id" type="radio" value="2" />
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
                                            <select class="selectWithSearch js-searchableSelect" id="country_id" name="country_id">
                                                <option value="">所有国家</option>
                                                <option value="13">澳大利亚</option>
                                                <option value="38">加拿大</option>
                                                <option value="105">India</option>
                                                <option value="157">墨西哥</option>
                                                <option value="198">新加坡</option>
                                                <option value="233">美国</option>
                                            </select>
                                        </div>
                                        <div class="span6">
                                            <label for="">城市</label>
                                            <select class="selectWithSearch js-searchableSelect" id="start_location_id" name="start_location_id">
                                                <option value="">所有城市</option>
                                                <option value="2">旧金山门店</option>
                                                <option value="14">达拉斯门店</option>
                                                <option value="8">棕榈泉门店</option>
                                            </select>
                                        </div>
                                        <div class="span12">
                                            <label for="">旅游套餐名字</label>
                                            <select class="selectWithSearch js-searchableSelect" id="tour_id" name="tour_id">
                                                <option value="">所有旅游套餐名字</option>
                                                <option value="2">San Francisco Motorcycle Tour</option>
                                                <option value="3">Texas Motorcycle Tour</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="widget_btns">
                                <a href="Javascript:;" class="btn-highlight js-searchTrigger">立即搜索<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
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
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>

                                            <td>最新型的摩托车租赁</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>

                                            <td>摩托车友好酒店</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>

                                            <td>可以定制属于自己的旅行路线</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>

                                            <td>最佳摩托车旅行路线</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>

                                            <td>EagleRider旅行攻略</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>运送行李的支持车辆</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>备用摩托车</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>专业支持车驾驶员</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>专业双语导游</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>团队旅行体验</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>每天提供丰盛早餐</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>骑行时所需的汽油</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>

                                            <td>欢迎晚宴</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png" />
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
                                <span class="rule">3辆车<i>至少</i></span>
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
                        <form action="reservation_widget/new.html" method="post" class="res_widget" target="_blank">
                            <input type="hidden" name="authenticity_token" value="1YTxxuLZwsPCnfl6mmXwrGeUXsLbZrRnQCJH85cn4kc=" />
                            <input type="hidden" name="reservation[reservation_type_id]"
                                   value="2">


                            <div class="form_bot">
                                <div class="loader js-loading" style="display:none;">
                                    <span><span><img src="/public/image/Loading-023da9421c5001dc2879575217b0add0.gif" /></span></span>
                                </div>


                                <div class="field-block fullWidth headblk js-numberSelection">
                                    <label for="">需要几辆摩托车</label>
                                    <ul class="optionsblk motorNum">
                                        <li>
                                            <input type="radio" name="reservation[vehicles_count]" value="1" class="js-numberCheckbox"
                                                   id="vehicles_count_1_2"
                                                   checked=&quot;checked&quot;>
                                            <label class="radio" for="vehicles_count_1_2">1</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="reservation[vehicles_count]" value="2" class="js-numberCheckbox"
                                                   id="vehicles_count_2_2"
                                            >
                                            <label class="radio" for="vehicles_count_2_2">2</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="reservation[vehicles_count]" value="3" class="js-numberCheckbox"
                                                   id="vehicles_count_3_2"
                                            >
                                            <label class="radio" for="vehicles_count_3_2">3</label>
                                        </li>
                                        <li>
                                            <input type="radio" name="reservation[vehicles_count]" value="" class="js-numberCheckbox"
                                                   id="vehicles_count_other_2"
                                            >
                                            <label class="radio fieldIF js-label"
                                                   for="vehicles_count_other_2">
                                                其他
                                            </label>
                                            <input type="text" title="Type number of motorcycles here" name="reservation[vehicles_count]"
                                                   class="fieldIFinput js-numberField"
                                                   value="" />
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="widget_btns">
                                <a href="Javascript:;" class="btn-highlight js-searchTrigger">立即搜索<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
		<?php endif; ?>
    </header>

    <a class="btn-light viewmore visible-desktop js-viewMoreTrigger" href="Javascript:;">
        <span class="icn-arrowOrangeDown"></span> view more
    </a>
</div>

<div id="js-viewMore" class="midSection psection container js-featuredDestinations">
	<?php if(isset($_GET["lang"])): ?>
    <div class="row">
        <h2 class="midSecTitle">
            <em>Selected destinations</em>
        </h2>

        <ul class="thumbnails span12">
			<?php foreach ($get_limits as $key=>$get_limit): ?>
            <li class="span3">

                <a class="thumbnail" title="Los Angeles" href="/index.php/jingxuan_detail?id=<?php echo $get_limit['cit_id']?>">
                    <img style="height: 320px;" src="<?php echo $get_limit['logo']?>" alt="Los Angeles">
                    <p>
						<?php echo $get_limit['cit_name_en']?>
                    </p>
                </a>
            </li>
			<?php endforeach; ?>
        </ul>

        <div class="section_btns">
            <a href="/index.php/city" class="btn-highlight">
                More destinations<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span>
            </a>
        </div>
    </div>
	<?php endif; ?>
	<?php if(empty($_GET["lang"])): ?>
    <div class="row">
        <h2 class="midSecTitle">
            <em>精选目的地</em>
        </h2>

        <ul class="thumbnails span12">
			<?php foreach ($get_limits as $key=>$get_limit): ?>
                <li class="span3">

                    <a class="thumbnail" title="Los Angeles" href="/index.php/jingxuan_detail?id=<?php echo $get_limit['cit_id']?>">
                        <img style="height: 320px;" src="<?php echo $get_limit['logo']?>" alt="Los Angeles">
                        <p>
							<?php echo $get_limit['cit_name']?>
                        </p>
                    </a>
                </li>
			<?php endforeach; ?>
        </ul>

        <div class="section_btns">
            <a href="/index.php/city" class="btn-highlight">
                更多目的地<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span>
            </a>
        </div>
    </div>
	<?php endif; ?>

</div>
<hr>
<div class="container">
    <div class="row table-and-ads">
		<?php if(isset($_GET["lang"])): ?>
        <div class="span8 er-specials js-deals" style="width: 1170px;">
            <h2>
                Popular discount
            </h2>
            <table class="table specialsTable dealsHomePage">
                <tbody>
                <tr>
                    <th>Discount name</th>
                    <th>price</th>
                </tr>
				<?php foreach ($promotiom as $key=>$promotioms): ?>
                <tr>
                    <td>
						<?php echo $promotioms['promtitle_en']?>
                    </td>
                    <td>
                        <div class="discount_container"><span class="discount_before" dir="ltr"><?php echo $promotioms['worth_en']?></span>
                            <span class="discount_after"><?php echo $promotioms['price_en']?></small></span></div>
                    </td>
                </tr>
				<?php endforeach; ?>
                </tbody>
            </table>
            <div class="section_btns">
                <a href='index.php/Discounts' class="btn-darkHighlight">
                    View promotional offers<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
		<?php endif; ?>
		<?php if(empty($_GET["lang"])): ?>
        <div class="span8 er-specials js-deals" style="width: 1170px;">
            <h2>
                热门折扣
            </h2>
            <table class="table specialsTable dealsHomePage">
                <tbody>
                <tr>
                    <th>折扣名称</th>
                    <th>价格</th>
                </tr>
				<?php foreach ($promotiom as $key=>$promotioms): ?>
                    <tr>
                        <td>
							<?php echo $promotioms['promtitle']?>
                        </td>
                        <td>
                            <div class="discount_container"><span class="discount_before" dir="ltr"><?php echo $promotioms['worth']?></span>
                                <span class="discount_after"><?php echo $promotioms['price']?></small></span></div>
                        </td>
                    </tr>
				<?php endforeach; ?>
                </tbody>
            </table>
            <div class="section_btns">
                <a href='index.php/Discounts' class="btn-darkHighlight">
                    查看促销特惠<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
		<?php endif; ?>
    </div>
</div>

<div class="bot_section psection">
    <div class="container">
		<?php if(isset($_GET["lang"])): ?>
        <div class="row">
            <div class="span12 er-about">
                <?php echo $bottom[0]['bottom_text_en']?>
            </div>
        </div>
		<?php endif; ?>
		<?php if(empty($_GET["lang"])): ?>
            <div class="row">
                <div class="span12 er-about">
					<?php echo $bottom[0]['bottom_text']?>
                </div>
            </div>
		<?php endif; ?>
    </div>
</div>
<script>
	$(".optionsblk li").click(function(){
		$(this).find('.iradio_square-blue').addClass("checked");
		$(this).siblings().find('.iradio_square-blue').removeClass("checked");
		// $('.js-numberCheckbox').prop('checked','checked');
	});

</script>
