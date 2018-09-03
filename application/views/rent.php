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
                <div class="reservation sideWidget js-reservationWidget js-primary" id="reservation_widget">

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

                        <div class="clearfix">


                        </div>
                    </div>

                    <div class="js-rentalSearch" style="">
                        <div class="header js-header">
                            <p class="form_title">Search for motorcycle rental</p>
                            <a class="max-min-btn visible-tablet js-toggle" href="Javascript:;"><b class="caret"></b></a>

                            <div class="clearfix"></div>
                        </div>

                        <div class="js-reservationFormContainer">

                                <div class="form_bot">
                                    <div class="loader js-loading" style="display:none;">
                                        <span><span><img src="https://d1y9jrrtx2baf.cloudfront.net/assets/rentals/layout/Loading-023da9421c5001dc2879575217b0add0.gif"></span></span>
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
                                                    other
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
													<?php echo $citys['cit_name']?>
                                                </option>
											<?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="field-block pickup-location">
                                        <label for="">Destination city</label>
                                        <select name="reservation[pickup_location_id]" data-fieldType="pickup_location"
                                                class="selectWithSearch js-locationsSelect">
                                            <option value="" selected=&quot;selected&quot;>
                                                Same as the pick-up city
                                            </option>
											<?php foreach ($city as $key=>$citys): ?>
                                                <option value="">
													<?php echo $citys['cit_name']?>
                                                </option>
											<?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="field-block">
                                        <label for="">Departure Date/time</label>
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


                                    <div class="clearfix"></div>
                                </div>

                                <div class="widget_btns">
                                    <a href="Javascript:;" class="btn-highlight js-searchTrigger">Search Now<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
                                </div>
                        </div>
                    </div>


                </div>
			<?php endif; ?>
			<?php if(empty($_GET["lang"])): ?>
                <div class="reservation sideWidget js-reservationWidget js-primary" id="reservation_widget">

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

                        <div class="clearfix">


                        </div>
                    </div>

                    <div class="js-rentalSearch" style="">
                        <div class="header js-header">
                            <p class="form_title">搜索租赁摩托车</p>
                            <a class="max-min-btn visible-tablet js-toggle" href="Javascript:;"><b class="caret"></b></a>

                            <div class="clearfix"></div>
                        </div>

                        <div class="js-reservationFormContainer">

                                <div class="form_bot">
                                    <div class="loader js-loading" style="display:none;">
                                        <span><span><img src="https://d1y9jrrtx2baf.cloudfront.net/assets/rentals/layout/Loading-023da9421c5001dc2879575217b0add0.gif"></span></span>
                                    </div>


                                    <div class="field-block fullWidth headblk js-numberSelection">
                                        <label for="">需要几辆摩托车</label>
                                        <ul class="optionsblk motorNum">
                                            <li style="margin-right: 0px;">
                                                <div class="iradio_square-blue checked" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="1" class="js-numberCheckbox" id="vehicles_count_1_1" checked="&quot;checked&quot;" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label class="radio" for="vehicles_count_1_1">1</label>
                                            </li>
                                            <li style="margin-right: 0px;">
                                                <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="2" class="js-numberCheckbox" id="vehicles_count_2_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label class="radio" for="vehicles_count_2_1">2</label>
                                            </li>
                                            <li style="margin-right: 0px;">
                                                <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="3" class="js-numberCheckbox" id="vehicles_count_3_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label class="radio" for="vehicles_count_3_1">3</label>
                                            </li>
                                            <li style="margin-right: 0px;">
                                                <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="" class="js-numberCheckbox" id="vehicles_count_other_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label class="radio fieldIF js-label" for="vehicles_count_other_1">
                                                    其他
                                                </label>
                                                <input type="text" title="Type number of motorcycles here" name="reservation[vehicles_count]" class="fieldIFinput js-numberField" value="" >
                                            </li>
                                        </ul>



                                    </div>


                                    <div class="field-block pickup-location">
                                        <label for="">行驶出发城市</label>
                                        <select name="reservation[pickup_location_id]" data-fieldType="pickup_location"
                                                class="selectWithSearch js-locationsSelect">
                                            <option value="" selected=&quot;selected&quot;>
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
                                    <a href="Javascript:;" class="btn-highlight js-searchTrigger">立即搜索<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
                                </div>
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
                                <a href="" class="btn-highlight small select js-bookTrigger" title="立即预订" style="float: left;width: 166px;line-height: 1.5em;padding: 5px 0 5px 38px;text-align: left;color: #fff;font-family: helvetica, Arial, sans-serif;text-transform: uppercase;font-size: 15px;height: 23px;position: absolute;bottom: 0px;">
                                    <input type="submit" value="立即预订" style="border: none;background: none;color: white;"><span class="icn-arrowWhiteRight" style="padding: 0;margin: 0.1em 0.5em 0 0;display: inline;"></span>
                                </a>
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
                    <div class="clearfix"></div>
                </div>
                <section class="available_rides" style="display: block;">
                    <div class="row js-vehiclesContainer" data-equalizer="pp556y-equalizer" data-equalize-by-row="true" data-locationid="" data-resize="ybtvek-eq" data-events="resize" style="margin-left: -15px;">
						<?php foreach ($list as $lists): ?>
                            <!--                    one-->
                        <form action="/index.php/Reg" method="post">
                            <div class="rideList promotionBox js-motorcycle boxs">
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

                                <span class="bike-class" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;margin-left: 7px;">
                          <span style="font-size: 14px;color: #000;">Class:</span> <em class="bold bolds"><?php echo $lists['category_name']?></em>
                        </span>
                                <a href="" class="btn-highlight small select js-bookTrigger" title="立即预订" style="float: left;width: 166px;line-height: 1.5em;padding: 5px 0 5px 38px;text-align: left;color: #fff;font-family: helvetica, Arial, sans-serif;text-transform: uppercase;font-size: 15px;height: 23px;position: absolute;bottom: 0px;">
                                    <input type="submit" value="立即预订" style="border: none;background: none;color: white;"><span class="icn-arrowWhiteRight" style="padding: 0;margin: 0.1em 0.5em 0 0;display: inline;"></span>
                                </a>
                            </div>
                        </form>

						<?php endforeach; ?>
                    </div>
                    <div class="clearfix"></div>

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
	});

</script>
