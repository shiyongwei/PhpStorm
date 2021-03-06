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

			document.location.href = '/index.php/Jingxuan_detail/mobile_Jingxuan_detail';
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
		window.location.href='/index.php/Jingxuan_detail?id='+id+'&&lang=en';
	});
	$('.cn').click(function() {
		window.location.href='/index.php/Jingxuan_detail?id='+id;
	});
</script>


<link href="/public/css/jingxuan_detail.css" type="text/css" rel="stylesheet" />

<div class="js-page">

	<div class="fullscrn locationsScrn js-fullScreen" style="height: 559px; max-height: 1280px;">
		<img src="https://d56b293rhv8dp.cloudfront.net/locations/6/cover_images/original/eaglerider.ride.2.23.2014-9885.jpg?1470842365" class="imgBG">

		<header class="er_reservation">
			<?php if(isset($_GET["lang"])): ?>
			<div class="reservation js-reservationWidget">

				<div class="options js-options">
                    <ul class="optionsblk widgetTabs">
                        <li class="selected js-rentalTrigger">
                            <a href="Javascript:;"><?php echo $navigation_limit['navigation_name_en']?></a>
                        </li>

                        <li class="packages ">
                            <a href="hotels"><?php echo $navigation_limit['lease_name_en']?></a>
                        </li>

                        <li class=" js-toursTrigger">
                            <a href="trave"><?php echo $navigation_limit['hotel_name_en']?></a>
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
							<input type="hidden" name="authenticity_token" value="StOnzcmyYeDIddEB9p3xHy7stqU0Xrqeq1q4zfPYXqY=">
							<input type="hidden" name="reservation[reservation_type_id]" value="1">
							<div class="form_bot">
								<div class="loader js-loading" style="display:none;">
									<span><span><img src=""></span></span>
								</div>


								<div class="field-block fullWidth headblk js-numberSelection">
									<label for="" class="">How many Motorcycles</label>
									<ul class="optionsblk motorNum"  style="width: 400px;">
										<li>
											<div class="iradio_square-blue checked" style="position: relative;"><input type="radio" name="num" value="1" class="js-numberCheckbox" id="vehicles_count_1_1" checked="&quot;checked&quot;" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											<label class="radio" for="vehicles_count_1_1">1</label>
										</li>
										<li>
											<div class="iradio_square-blue" style="position: relative;"><input type="radio" name="num" value="2" class="js-numberCheckbox" id="vehicles_count_2_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											<label class="radio" for="vehicles_count_2_1">2</label>
										</li>
										<li>
											<div class="iradio_square-blue" style="position: relative;"><input type="radio" name="num" value="3" class="js-numberCheckbox" id="vehicles_count_3_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											<label class="radio" for="vehicles_count_3_1">3</label>
										</li>
                                        <li>
                                            <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="num" value="" class="js-numberCheckbox" id="vehicles_count_other_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                            <label class="radio fieldIF js-label" for="vehicles_count_other_1">
                                                other
                                            </label>
                                            <input type="text" title="Type number of motorcycles here" name="num_other" class="fieldIFinput js-numberField" value="" >
                                        </li>
									</ul>


								</div>


                                <div class="field-block pickup-location">
                                    <label for="">Departure city</label>
                                    <select name="star_city" data-fieldType="pickup_location"
                                            class="selectWithSearch js-locationsSelect">
                                        <option value="" selected=&quot;selected&quot;>
                                            Take car city
                                        </option>
										<?php foreach ($city as $key=>$citys): ?>
                                            <option value="<?php echo $citys['cit_name_en']?>">
												<?php echo $citys['cit_name_en']?>
                                            </option>
										<?php endforeach; ?>
                                    </select>
                                </div>

                                <div class="field-block dropoff-location">
                                    <label>Destination city</label>
                                    <select name="end_city" data-fieldType="dropoff_location"
                                            class="selectWithSearch js-locationsSelect">
                                        <option value="similar_to_pl"
                                                selected=&quot;selected&quot;>
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
                                    <label for="">Starting/time</label>
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
								<div class="clearfix"></div>


								<div class="clearfix"></div>
							</div>

							<div class="widget_btns">
                                <a href="Javascript:;" class="btn-highlight js-searchTrigger"><button type="submit" style="border: none;background: none;color: white;height: 33px;">Search Now</button><span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
							</div>
						</form>
					</div>
				</div>

			</div>
			<?php endif; ?>
			<?php if(empty($_GET["lang"])): ?>
                <div class="reservation js-reservationWidget">

                    <div class="options js-options">
                        <ul class="optionsblk widgetTabs">
                            <li class="selected js-rentalTrigger">
                                <a href="Javascript:;"><?php echo $navigation_limit['navigation_name']?></a>
                            </li>

                            <li class="packages ">
                                <a href="hotels"><?php echo $navigation_limit['lease_name']?></a>
                            </li>

                            <li class=" js-toursTrigger">
                                <a href="trave"><?php echo $navigation_limit['hotel_name']?></a>
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
                                <input type="hidden" name="authenticity_token" value="StOnzcmyYeDIddEB9p3xHy7stqU0Xrqeq1q4zfPYXqY=">
                                <input type="hidden" name="reservation[reservation_type_id]" value="1">


                                <div class="form_bot">
                                    <div class="loader js-loading" style="display:none;">
                                        <span><span><img src="https://d1y9jrrtx2baf.cloudfront.net/assets/rentals/layout/Loading-023da9421c5001dc2879575217b0add0.gif"></span></span>
                                    </div>


                                    <div class="field-block fullWidth headblk js-numberSelection">
                                        <label for="" class="">需要几辆摩托车</label>
                                        <ul class="optionsblk motorNum"  style="width: 400px;">
                                            <li>
                                                <div class="iradio_square-blue checked" style="position: relative;"><input type="radio" name="num" value="1" class="js-numberCheckbox" id="vehicles_count_1_1" checked="&quot;checked&quot;" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label class="radio" for="vehicles_count_1_1">1</label>
                                            </li>
                                            <li>
                                                <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="num" value="2" class="js-numberCheckbox" id="vehicles_count_2_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label class="radio" for="vehicles_count_2_1">2</label>
                                            </li>
                                            <li>
                                                <div class="iradio_square-blue" style="position: relative;"><input type="radio" name="num" value="3" class="js-numberCheckbox" id="vehicles_count_3_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label class="radio" for="vehicles_count_3_1">3</label>
                                            </li>
                                            <li>
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
                                        <select name="star_city" data-fieldType="pickup_location"
                                                class="selectWithSearch js-locationsSelect">
                                            <option value="" selected=&quot;selected&quot;>
                                                取车城市
                                            </option>
											<?php foreach ($city as $key=>$citys): ?>
                                                <option value="<?php echo $citys['cit_name']?>">
													<?php echo $citys['cit_name']?>
                                                </option>
											<?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="field-block dropoff-location">
                                        <label>行驶终点城市</label>
                                        <select name="end_city" data-fieldType="dropoff_location"
                                                class="selectWithSearch js-locationsSelect">
                                            <option value="similar_to_pl"
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


                                    <div class="clearfix"></div>
                                </div>

                                <div class="widget_btns">
                                    <a href="" class="btn-highlight js-searchTrigger"><button type="submit" style="border: none;background: none;color: white;height: 33px;">立即预定</button><span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
			<?php endif; ?>

<!--			<div class="locationNameWrapper" id="detail_one">-->
<!--				<h2 class="locationName" id="detail_two">-->
<!--					<em class="bold" id="detail_tre">拉斯维加斯门店</em> 摩托车租赁和旅游-->
<!--				</h2>-->
<!--				<div class="clearfix"></div>-->
<!---->
<!--				<div class="btn_cont">-->
<!--				</div>-->
<!--			</div>-->

			<a href="Javascript:;" class="btn-light viewmore visible-desktop">
				<span class="icn-arrowOrangeDown"></span> View more
			</a>
		</header>
	</div>

	<div class="top-motor-container" style="margin-top: 10px;">
		<div class="container psection" id="js-viewMore detail_for">
			<div class="row wrapperSeparate" id="detail_5">
				<?php if(isset($_GET["lang"])): ?>
				<div class="span12 topMotor" id="detail_6">
					<a class="js-viewAllTrigger" href="Rent_city?id=<?php echo $cityinfo['cit_id']?>" id="detail_7" style="background: rgba(248,202,62,0.4);">
						<h2 class="secTitle" id="detail_8">
							<span class="bold" style="font-weight: bold;">Motorcycle hire</span>
							in <?php echo $cityinfo['cit_name_en']?>
						</h2>
						<div class="disclaimer" id="detail_9">
							<span id="detail_10">All prices are based on current city and current date，Prices may vary depending on the time of pickup and the city</span>
							<div class="clearfix"></div>
						</div>
						<section class="available_rides" style="display: block;">
							<div class="row" style="margin-left: -15px;">

								<?php foreach ($rentinfo as $key=>$rentinfos): ?>

                                <div class="rideList promotionBox js-motorcycle" data-equalizer-watch="" data-bookurl="/%E7%A7%9F%E8%B5%81/11/reservation?location_id=6" id="detail_11">
                                    <div class="imageContainer" id="detail_12">
                                        <img src="<?php echo $rentinfos['image']?>" alt="<?php echo $rentinfos['productitle_en']?>">
                                    </div>
                                    <h3 class="ride_title bold js-name js-bookTrigger" id="detail_13"><?php echo $rentinfos['productitle_en']?></h3>
                                    <div class="ratesWrapper" dir="ltr" style="    padding: 3px 0 5px 0;">
                                        <span class="rate" id="detail_14">everyday:<em class="bold" dir="ltr" id="detail_15"> <?php echo $rentinfos['day_price_en']?></span>
                                        <span class="rate"  id="detail_17">weekly :<em class="bold" dir="ltr" id="detail_16"><?php echo $rentinfos['week_price_en']?></span>
                                    </div>
<!--                                    <span class="bike-class" id="detail_18">Class: <em class="bold" id="detail_19">经典车型</em></span>-->
                                </div>
								<?php endforeach; ?>



							</div>
							<div class="clearfix"></div>
						</section>
						<span class="btn-highlight" id="detail_20">Check all motorcycle rental prices<span class="icn-arrowWhiteRight"></span></span>
					</a>
				</div>
				<?php endif; ?>
				<?php if(empty($_GET["lang"])): ?>
                    <div class="span12 topMotor" id="detail_6">
                        <a class="js-viewAllTrigger" href="Rent_city?id=<?php echo $cityinfo['cit_id']?>" id="detail_7" style="background: rgba(248,202,62,0.4);">
                            <h2 class="secTitle" id="detail_8">
                                <span class="bold" style="font-weight: bold;">摩托车出租</span>
                                在 <?php echo $cityinfo['cit_name']?>
                            </h2>
                            <div class="disclaimer" id="detail_9">
                                <span id="detail_10">所有价格都是基于当前城市及当前日期，价格可能根据不同的取车时间及城市有所改变</span>
                                <div class="clearfix"></div>
                            </div>
                            <section class="available_rides" style="display: block;">
                                <div class="row" style="margin-left: -15px;">

									<?php foreach ($rentinfo as $key=>$rentinfos): ?>

                                        <div class="rideList promotionBox js-motorcycle" data-equalizer-watch="" data-bookurl="/%E7%A7%9F%E8%B5%81/11/reservation?location_id=6" id="detail_11">
                                            <div class="imageContainer" id="detail_12">
                                                <img src="<?php echo $rentinfos['image']?>" alt="<?php echo $rentinfos['productitle']?>">
                                            </div>
                                            <h3 class="ride_title bold js-name js-bookTrigger" id="detail_13"><?php echo $rentinfos['productitle']?></h3>
                                            <div class="ratesWrapper" dir="ltr" style="    padding: 3px 0 5px 0;">
                                                <span class="rate" id="detail_14">每天:<em class="bold" dir="ltr" id="detail_15"> <?php echo $rentinfos['day_price']?></span>
                                                <span class="rate"  id="detail_17">每周:<em class="bold" dir="ltr" id="detail_16"><?php echo $rentinfos['week_price']?></span>
                                            </div>
                                            <!--                                    <span class="bike-class" id="detail_18">Class: <em class="bold" id="detail_19">经典车型</em></span>-->
                                        </div>
									<?php endforeach; ?>



                                </div>
                                <div class="clearfix"></div>
                            </section>
                            <span class="btn-highlight" id="detail_20">查看全部摩托车租赁价格<span class="icn-arrowWhiteRight"></span></span>
                        </a>
                    </div>
				<?php endif; ?>

			</div>
		</div>
	</div>



	<div class="container psection">
		<div class="locationToursWrapper row">
			<?php if(isset($_GET["lang"])): ?>
			<div class="span12 js-toursSection toursSection">
				<h2 class="secTitle"><span class="bold">Motorcycle tour</span> in <?php echo $cityinfo['cit_name_en']?></h2>

				<div class="tours_list row">


					<?php foreach ($teaminfo as $key=>$teaminfos): ?>
					<div class="js-tourContainer tour span3 " style="width: 259px!important;">

						<a href="Team_detail?id=<?php echo $teaminfos['id']?>">
							<div class="img_cont">
								<img class="tour_image" alt="Route 66 West: Albuquerque to Los Angeles Motorcycle Tour" src="<?php echo $teaminfos['image']?>" style="height: 120px;">
								<span class="tour_name">
            <span><?php echo $teaminfos['teamtitle_en']?></span>
<!--            <span class="tour_type">团队游</span>-->
          </span>
							</div>
							<span class="tour_dest">
          <br>
          <em class="bold" dir="ltr"><?php echo $teaminfos['day_en']?></em>
        </span>
							<div class="actions">
								<div class="tour_price">
									<div class="starting_info">
										<span class="title">The starting price</span>
										<em class="bold">
											<?php echo $teaminfos['price']?>
										</em>
									</div>
									<span class="btn-highlight">View tour routes</span>
								</div>
							</div>

						</a>
					</div>
					<?php endforeach; ?>

				</div>

				<a class="btn-highlight" href="trave">
                    View all travel items<span class="icn-arrowWhiteRight"></span>
				</a>

			</div>
			<?php endif; ?>
			<?php if(empty($_GET["lang"])): ?>
                <div class="span12 js-toursSection toursSection">
                    <h2 class="secTitle"><span class="bold">摩托车旅游</span> 在 <?php echo $cityinfo['cit_name']?></h2>

                    <div class="tours_list row">


						<?php foreach ($teaminfo as $key=>$teaminfos): ?>
                            <div class="js-tourContainer tour span3 " style="width: 259px!important;">

                                <a href="Team_detail?id=<?php echo $teaminfos['id']?>">
                                    <div class="img_cont">
                                        <img class="tour_image" alt="Route 66 West: Albuquerque to Los Angeles Motorcycle Tour" src="<?php echo $teaminfos['image']?>" style="height: 120px;">
                                        <span class="tour_name">
            <span><?php echo $teaminfos['teamtitle']?></span>
                                            <!--            <span class="tour_type">团队游</span>-->
          </span>
                                    </div>
                                    <span class="tour_dest">
          <br>
          <em class="bold" dir="ltr"><?php echo $teaminfos['day']?></em>
        </span>
                                    <div class="actions">
                                        <div class="tour_price">
                                            <div class="starting_info">
                                                <span class="title">起始价格</span>
                                                <em class="bold">
													<?php echo $teaminfos['price']?>
                                                </em>
                                            </div>
                                            <span class="btn-highlight">查看旅游线路</span>
                                        </div>
                                    </div>

                                </a>
                            </div>
						<?php endforeach; ?>

                    </div>

                    <a class="btn-highlight" href="trave">
                        查看所有旅行项目<span class="icn-arrowWhiteRight"></span>
                    </a>

                </div>
			<?php endif; ?>

		</div>
	</div>



	<div class="bot_section psection">
		<div class="container">
			<div class="row">
				<div class="featuredSpecials_con">
					<div class="specials_container hotdeal_container">
						<?php if(isset($_GET["lang"])): ?>
						<div class="bot_section span12 featured_deals js-dealsSection">
							<h2>
								<span class="bold">Special motorcycle</span>
								in <?php echo $cityinfo['cit_name_en']?>
							</h2>

							<table class="table specialsTable">
								<tbody>
								<tr>
									<th>Discount name</th>
									<th>value </th>
								</tr>

								<?php foreach ($promotion as $key=>$promotions): ?>
								<tr>
									<td>
										<span><?php echo $promotions['promtitle_en']?></span>
									</td>

									<td>
										<div class="discount_container"><span class="discount_before" dir="ltr"><?php echo $promotions['worth_en']?></span> <span class="discount_after"><?php echo $promotions['price_en']?></small></span> </div>
									</td>
								</tr>
								<?php endforeach; ?>
								</tbody>
							</table>

							<div class="section_btns">
								<a href="/index.php/Discounts" class="btn-darkHighlight">
                                    More promotional offers

									<span class="btn-decor"></span>
									<span class="icn-arrowWhiteRight"></span>
								</a>
							</div>

							<div class="clearfix"></div>
						</div>
						<?php endif; ?>
						<?php if(empty($_GET["lang"])): ?>
                            <div class="bot_section span12 featured_deals js-dealsSection">
                                <h2>
                                    <span class="bold">特价摩托车</span>
                                    在 <?php echo $cityinfo['cit_name']?>
                                </h2>

                                <table class="table specialsTable">
                                    <tbody>
                                    <tr>
                                        <th>折扣名称</th>
                                        <th>价值</th>
                                    </tr>

									<?php foreach ($promotion as $key=>$promotions): ?>
                                        <tr>
                                            <td>
                                                <span><?php echo $promotions['promtitle']?></span>
                                            </td>

                                            <td>
                                                <div class="discount_container"><span class="discount_before" dir="ltr"><?php echo $promotions['worth']?></span> <span class="discount_after"><?php echo $promotions['price']?></small></span> </div>
                                            </td>
                                        </tr>
									<?php endforeach; ?>
                                    </tbody>
                                </table>

                                <div class="section_btns">
                                    <a href="/index.php/Discounts" class="btn-darkHighlight">
                                        更多促销特惠

                                        <span class="btn-decor"></span>
                                        <span class="icn-arrowWhiteRight"></span>
                                    </a>
                                </div>

                                <div class="clearfix"></div>
                            </div>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="grayBG wrapperSeparate">
		<?php if(isset($_GET["lang"])): ?>
		<div class="container map_container">

			<div class="row">
				<div class="about_location span6 pull-right">
					<div class="row-fluid directions_result js-aboutUsSection" id="js-about-wrapper">
						<?php echo $cityinfo['valder_en']?>
					</div>
				</div>

				<div class="find_location span6 pull-left" >
					<div class="row-fluid direction_result">
						<div class="span4">
							<h3><span class="icn-map-pin"></span> addresses</h3>
							<p>
								<?php echo $cityinfo['address_en']?>
							</p>
						</div>

						<div class="span4">
							<h3><span class="icn-orange-phone"></span> Contact</h3>
							<p>
								<a href="tel:+1 (702) 876-8687"><?php echo $cityinfo['information']?></a><br>


								<br>
							</p>
						</div>

						<div class="span4">
							<h3><span class="icn-clock"></span> Business Hours</h3>
							<p>
								<?php echo $cityinfo['time_en']?>
							</p>

						</div>
					</div>
					<div class="findUs">
						<div class="mapContainer">
							<div id="map"></div>
						</div>
					</div>

					<br><p><?php echo $cityinfo['text_en']?>。</p>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<?php if(empty($_GET["lang"])): ?>
            <div class="container map_container">

                <div class="row">
                    <div class="about_location span6 pull-right">
                        <div class="row-fluid directions_result js-aboutUsSection" id="js-about-wrapper">
							<?php echo $cityinfo['valder']?>
                        </div>
                    </div>

                    <div class="find_location span6 pull-left" >
                        <div class="row-fluid direction_result">
                            <div class="span4">
                                <h3><span class="icn-map-pin"></span> 地址</h3>
                                <p>
									<?php echo $cityinfo['address']?>
                                </p>
                            </div>

                            <div class="span4">
                                <h3><span class="icn-orange-phone"></span> 联系方式</h3>
                                <p>
                                    <a href="tel:+1 (702) 876-8687"><?php echo $cityinfo['information']?></a><br>


                                    <br>
                                </p>
                            </div>

                            <div class="span4">
                                <h3><span class="icn-clock"></span> 营业时间</h3>
                                <p>
									<?php echo $cityinfo['time']?>
                                </p>

                            </div>
                        </div>
                        <div class="findUs">
                            <div class="mapContainer">
                                <div id="map"></div>
                            </div>
                        </div>

                        <br><p><?php echo $cityinfo['text']?>。</p>
                    </div>
                </div>
            </div>
		<?php endif; ?>

	</div>



		</div>
	</div>

	<div id="backTop">
		<a href="javascript:;">
			<img alt="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/rentals/layout/go_to_top_arrow-89a29b7f7853fe434467d2d9883486de.png">
		</a>
	</div>


	<script type="text/javascript">
		window.onDomLoadFN = function(){
			var initClickTriggers = function(){
				$('#backTop a').click(function() {
					$('body,html').animate({scrollTop : 0 }, 800);
					return false;
				});

				$('.js-bookTrigger').click(function(){
					var trigger = $(this);
					var vehicle = trigger.parents('.js-motorcycle');

					$.ajax({
						url: (vehicle.attr('data-bookUrl') + '.js'),
						type: 'get',
						dataType: 'json',
						success: function(response){
							var overlay = $(response.content);

							overlay.on('shown', function(){
								new ER.CombinedWidget({
									widgetContainer: overlay.find('.js-reservationWidget'),
									reservationWidgetOptions: response.reservation_widget
								});
							});

							ER.Layout.showOverlay(overlay);
						},
						error: function(jqXHR){
							var response = JSON.parse(jqXHR.responseText);

							ER.Notifications.showErrorMessage( response.message );
						}
					});
				});
			};

			new ER.CombinedWidget({
				widgetContainer: $('.js-reservationWidget'),
				reservationWidgetOptions: {"reservation_type_id":1,"pickupMinDate":"06/20/2018","pickupMaxDate":"06/20/2021","dropoffMinDate":"06/20/2018","dropoffMaxDate":"06/20/2021","pickupWeekDays":{"[Wed, 20 Jun 2018, Mon, 15 Oct 2018]":[{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":3},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":4},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":5},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":6},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":0},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":1},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":2}],"[Tue, 16 Oct 2018, Sun, 20 Jun 2021]":[{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":3},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":4},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":5},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":6},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":0},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":1},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":2}]},"dropoffWeekDays":{"[Wed, 20 Jun 2018, Mon, 15 Oct 2018]":[{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":3},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":4},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":5},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":6},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":0},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":1},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":2}],"[Tue, 16 Oct 2018, Sun, 20 Jun 2021]":[{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":3},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":4},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":5},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":6},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":0},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":1},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":2}]},"pickupWhitelistIntervals":[],"pickupBlackoutIntervals":[{"start":"2018-11-22","end":"2018-11-22","reason":"Thanksgiving Day"},{"start":"2018-12-25","end":"2018-12-25","reason":"Christmas Day"},{"start":"2019-01-01","end":"2019-01-01","reason":"New Year's Day"},{"start":"2019-11-28","end":"2019-11-28","reason":"Thanksgiving Day"},{"start":"2019-12-25","end":"2019-12-25","reason":"Christmas Day"},{"start":"2020-01-01","end":"2020-01-01","reason":"New Years Day"},{"start":"2020-11-26","end":"2020-11-26","reason":"Thanksgiving Day"},{"start":"2020-12-25","end":"2020-12-25","reason":"Christmas Day"}],"dropoffWhitelistIntervals":[],"dropoffBlackoutIntervals":[{"start":"2018-11-22","end":"2018-11-22","reason":"Thanksgiving Day"},{"start":"2018-12-25","end":"2018-12-25","reason":"Christmas Day"},{"start":"2019-01-01","end":"2019-01-01","reason":"New Year's Day"},{"start":"2019-11-28","end":"2019-11-28","reason":"Thanksgiving Day"},{"start":"2019-12-25","end":"2019-12-25","reason":"Christmas Day"},{"start":"2020-01-01","end":"2020-01-01","reason":"New Years Day"},{"start":"2020-11-26","end":"2020-11-26","reason":"Thanksgiving Day"},{"start":"2020-12-25","end":"2020-12-25","reason":"Christmas Day"}]},
				packagesReservationWidgeOptions: {"reservation_type_id":2,"pickupMinDate":"06/21/2018","pickupMaxDate":"06/20/2021","dropoffMinDate":"06/22/2018","dropoffMaxDate":"06/20/2021","pickupWeekDays":{"[Wed, 20 Jun 2018, Mon, 15 Oct 2018]":[{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":3},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":4},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":5},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":6},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":0},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":1},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":2}],"[Tue, 16 Oct 2018, Sun, 20 Jun 2021]":[{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":3},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":4},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":5},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":6},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":0},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":1},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":2}]},"dropoffWeekDays":{"[Wed, 20 Jun 2018, Mon, 15 Oct 2018]":[{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":3},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":4},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":5},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":6},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":0},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":1},{"interval":{"start_time":"09:00 am","end_time":"06:00 pm"},"day":2}],"[Tue, 16 Oct 2018, Sun, 20 Jun 2021]":[{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":3},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":4},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":5},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":6},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":0},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":1},{"interval":{"start_time":"09:00 am","end_time":"05:00 pm"},"day":2}]},"pickupWhitelistIntervals":[],"pickupBlackoutIntervals":[{"start":"2018-11-22","end":"2018-11-22","reason":"Thanksgiving Day"},{"start":"2018-12-25","end":"2018-12-25","reason":"Christmas Day"},{"start":"2019-01-01","end":"2019-01-01","reason":"New Year's Day"},{"start":"2019-11-28","end":"2019-11-28","reason":"Thanksgiving Day"},{"start":"2019-12-25","end":"2019-12-25","reason":"Christmas Day"},{"start":"2020-01-01","end":"2020-01-01","reason":"New Years Day"},{"start":"2020-11-26","end":"2020-11-26","reason":"Thanksgiving Day"},{"start":"2020-12-25","end":"2020-12-25","reason":"Christmas Day"}],"dropoffWhitelistIntervals":[],"dropoffBlackoutIntervals":[{"start":"2018-11-22","end":"2018-11-22","reason":"Thanksgiving Day"},{"start":"2018-12-25","end":"2018-12-25","reason":"Christmas Day"},{"start":"2019-01-01","end":"2019-01-01","reason":"New Year's Day"},{"start":"2019-11-28","end":"2019-11-28","reason":"Thanksgiving Day"},{"start":"2019-12-25","end":"2019-12-25","reason":"Christmas Day"},{"start":"2020-01-01","end":"2020-01-01","reason":"New Years Day"},{"start":"2020-11-26","end":"2020-11-26","reason":"Thanksgiving Day"},{"start":"2020-12-25","end":"2020-12-25","reason":"Christmas Day"}]}
			});
			if($("#map").length > 0){
				ER.Maps.onDomLoad({
					startingLatitude: 36.050764,
					startingLongitude: -115.18196,
					startingZoom: 12,
					locations: [{"id":1,"latitude":"33.926","longitude":"-118.3699","name":"\u6d1b\u6749\u77f6\u673a\u573a\u95e8\u5e97","street_address":"11860 S. La Cienega Blvd.","city":"Los Angeles ","state":"California","postal_code":"90250","url":"/losangeles","toll_free":"+1 800-501-8687","phone":"+1 (310) 536-6777","fax":"+1 310-536-6770","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":2,"latitude":"37.747221","longitude":"-122.4196","name":"\u65e7\u91d1\u5c71\u95e8\u5e97","street_address":"1635 Valencia St.","city":"San Francisco ","state":"California","postal_code":"94110","url":"/sanfrancisco","toll_free":"+1 888-464-6499","phone":"+1 415-503-1900","fax":"+1 415-503-1901","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":5,"latitude":"28.4453616","longitude":"-81.361927","name":"\u5965\u5170\u591a\u673a\u573a\u95e8\u5e97","street_address":"3770 37th Street","city":"Orlando ","state":"Florida","postal_code":"32805","url":"/orlando","toll_free":"+1 888-390-6700","phone":"+1 407-438-4055","fax":"+1 407-438-4266","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523005:00 pm"]},{"id":6,"latitude":"36.050764","longitude":"-115.18196","name":"\u62c9\u65af\u7ef4\u52a0\u65af\u95e8\u5e97","street_address":"7660 Dean Martin Drive","city":"Las Vegas","state":"Nevada","postal_code":"89139","url":"/las-vegas-main-depot","toll_free":"+1 888-916-7433","phone":"+1 (702) 876-8687","fax":"+1 702-876-8724","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":7,"latitude":"36.7737057","longitude":"-119.68268","name":"\u5f17\u96f7\u65af\u8bfa\u95e8\u5e97","street_address":"2577 N. Fowler Ave.","city":"Fresno","state":"California","postal_code":"93727","url":"/fresno","toll_free":"","phone":"+1 559-292-8411","fax":"+1 559-292-8437","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u4e00 \u4ece \u4ece09:00 am\u523011:00 am","\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":8,"latitude":"33.755557","longitude":"-116.36163","name":"\u68d5\u6988\u6cc9\u95e8\u5e97","street_address":"74-855 Country Club Dr.,","city":"Palm Springs","state":"California","postal_code":"92260","url":"/palmsprings","toll_free":"+1 866-464-7368","phone":"+1 760-718-3327","fax":"+1 760-779-5003","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":9,"latitude":"32.8236132","longitude":"-117.22729","name":"\u5723\u5730\u4e9a\u54e5\u95e8\u5e97","street_address":"4645 Morena Blvd.","city":"San Diego ","state":"California","postal_code":"92117","url":"/sandiego","toll_free":"+1 800-479-3794","phone":"+1 619-369-9480","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u516d\u5230\u661f\u671f\u5929 \u4ece \u4ece09:00 am\u523005:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523007:00 pm"]},{"id":10,"latitude":"39.755706","longitude":"-104.98708","name":"\u4e39\u4f5b\u95e8\u5e97","street_address":"2360 Lawrence St.","city":"Denver Downtown","state":"Colorado","postal_code":"80205","url":"/denver","toll_free":"+1 866-534-0360","phone":"+1 303-531-5890","fax":"+1 303-531-5896","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":11,"latitude":"25.788589","longitude":"-80.321703","name":"\u8fc8\u963f\u5bc6\u95e8\u5e97","street_address":"7500 N.W. 25th Street","city":"Miami ","state":"Florida","postal_code":"33122","url":"/miami","toll_free":"+1 877-641-6443","phone":"+1 305-468-0108","fax":"+1 305-468-0103","hours_of_operation":["\u4ece\u661f\u671f\u4e09\u5230\u661f\u671f\u4e00 \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":12,"latitude":"42.974853","longitude":"-71.458879","name":"\u66fc\u5f7b\u65af\u7279\u95e8\u5e97","street_address":"98 Willow Street","city":"Manchester","state":"New Hampshire","postal_code":"03103","url":"/manchester","toll_free":"+1 877-736-8431","phone":"+1 603-627-3957","fax":"+1 603-627-3917","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece11:00 am\u523003:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523004:00 pm"]},{"id":13,"latitude":"35.884271","longitude":"-86.433126","name":"\u90a3\u4ec0\u7ef4\u5c14\u95e8\u5e97","street_address":"2233 NW Broad St.","city":"Murfreesboro","state":"Tennessee","postal_code":"37129","url":"/nashville","toll_free":"+1 800-342-1681","phone":"+1 615-225-6057","fax":"+1 615-225-6008","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523004:00 pm","\u661f\u671f\u516d \u4ece \u4ece08:30 am\u523003:00 pm"]},{"id":14,"latitude":"32.9651441","longitude":"-96.9197134","name":"\u8fbe\u62c9\u65af\u95e8\u5e97","street_address":"1845 N Interstate 35E","city":"Carrollton","state":"Texas","postal_code":"75006","url":"/dallas","toll_free":"+1 800-208-0942","phone":"+1 972-370-3359","fax":"+1 972-986-5056","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece09:00 am\u523002:30 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":15,"latitude":"40.7080401","longitude":"-111.8908599","name":"\u76d0\u6e56\u57ce\u95e8\u5e97","street_address":"2900 South State St","city":"Salt Lake City","state":"Utah","postal_code":"84115","url":"/saltlakecity","toll_free":"+1 844-836-8619","phone":"+1 385-831-7253","fax":"+1 801-433-1803","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523004:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":16,"latitude":"38.863881","longitude":"-77.28102","name":"\u534e\u76db\u987f\u95e8\u5e97","street_address":"9739 Fairfax Blvd","city":"Fairfax","state":"Virginia","postal_code":"22031","url":"/washingtondc","toll_free":"+1 800-975-0119","phone":"+1 703-291-6659","fax":"","hours_of_operation":["\u661f\u671f\u4e00 \u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm","\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u56db \u4ece \u4ece10:00 am\u523007:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece11:00 am\u523004:00 pm"]},{"id":17,"latitude":"43.464789","longitude":"-110.79275","name":"\u6770\u514b\u900a\u9547\u95e8\u5e97","street_address":"1060 S. Hwy 89","city":"Jackson","state":"Wyoming","postal_code":"83001","url":"/jacksonhole","toll_free":"","phone":"+1 307-734-5110","fax":"+1 307-733-5687","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":18,"latitude":"45.737482","longitude":"-108.59129","name":"\u6bd4\u6797\u65af\u95e8\u5e97","street_address":"6900 S. Frontage Rd","city":"Billings","state":"Montana","postal_code":"59101","url":"/billings","toll_free":"+1 877-256-7057","phone":"+1 406-256-7108","fax":"+1 406-256-0629","hours_of_operation":["\u4ece\u661f\u671f\u516d\u5230\u661f\u671f\u4e00 \u4ece \u4ece09:00 am\u523004:00 pm","\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":19,"latitude":"33.988051","longitude":"-118.44531","name":"\u5723\u83ab\u5c3c\u5361/\u739b\u4e3d\u5b89\u5fb7\u5c14\u6e7e\u95e8\u5e97","street_address":"4110 Lincoln Blvd","city":"Marina Del Rey","state":"California","postal_code":"90292","url":"/santamonica","toll_free":"","phone":"+1 310-302-1239","fax":"+1 310-302-1209","hours_of_operation":["\u661f\u671f\u4e00 \u4ece \u4ece10:00 am\u523003:00 pm","\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523004:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":20,"latitude":"47.479122","longitude":"-122.33425","name":"\u897f\u96c5\u56fe\u95e8\u5e97","street_address":"13809 1st Ave S.","city":"Burien","state":"Washington","postal_code":"98168","url":"/seattle","toll_free":"+1 888-900-9909","phone":"+1 206-743-0059","fax":"+1 888-600-4217","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":22,"latitude":"20.941762","longitude":"-156.68905","name":"\u8302\u5b9c\u5c9b\u95e8\u5e97","street_address":"30 Halawai Dr A-3","city":"Lahaina","state":"Hawaii","postal_code":"96761","url":"/maui","toll_free":"+1 877-351-9666","phone":"+1 808-667-7000","fax":"+1 808-661-1181","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":25,"latitude":"36.143371","longitude":"-115.22704","name":"\u62c9\u65af\u7ef4\u52a0\u65af\u5b9d\u9a6c\u95e8\u5e97","street_address":"6175 W Sahara Ave","city":"Las Vegas","state":"Nevada","postal_code":"89146  ","url":"/lasvegasmotorcyclerentalbmw","toll_free":"","phone":"+1 702-430-3510","fax":"+1 702-839-9570","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece09:00 am\u523010:00 am"]},{"id":26,"latitude":"26.098882","longitude":"-80.136487","name":"\u52b3\u5fb7\u4ee3\u5c14\u5821\u95e8\u5e97","street_address":"1880 S. Federal Hwy","city":"Fort Lauderdale ","state":"Florida","postal_code":"33316","url":"/fortlauderdale","toll_free":"+1 866-510-8740","phone":"+1 954-514-7230","fax":"+1 954-769-1005","hours_of_operation":["\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u5929 \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":30,"latitude":"39.049167","longitude":"-76.662019","name":"\u514b\u7f57\u592b\u987f\u95e8\u5e97","street_address":"745 MD Route 3","city":"Gambrills","state":"Maryland","postal_code":"21054","url":"/crofton","toll_free":"+1 877-285-5620","phone":"+1 410-923-5581","fax":"+1 410-923-5580","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523008:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":32,"latitude":"42.0816061","longitude":"-71.279758","name":"\u798f\u514b\u65af\u6ce2\u7f57\u95e8\u5e97","street_address":"1000 Washington St.","city":"Foxboro","state":"Massachusetts","postal_code":"02035","url":"/foxboro","toll_free":"","phone":"+1 508-543-1734","fax":"+1 508-543-1739","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece11:00 am\u523003:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523004:00 pm"]},{"id":35,"latitude":"49.2046264","longitude":"-123.12872","name":"\u6e29\u54e5\u534e\u95e8\u5e97","street_address":"8910 Shaughnessy St.","city":"Vancouver","state":"British Columbia","postal_code":"V6P 3Y5","url":"/vancouver","toll_free":"+1 877-468-9908","phone":"+1 778-775-6033","fax":"+1 778-379-2452","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":36,"latitude":"40.720684","longitude":"-73.732356","name":"\u7ebd\u7ea6 - \u7687\u540e\u6751\u95e8\u5e97","street_address":"222-02 Jamaica Ave.","city":"Queens Village","state":"New York","postal_code":"11428","url":"/queens","toll_free":"+1 800-527-2727","phone":"+1 718-464-1465","fax":"+1 718-740-4887","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523005:00 pm"]},{"id":37,"latitude":"40.650754","longitude":"-73.837633","name":"\u7ebd\u7ea6 - \u970d\u534e\u5fb7\u6d77\u6ee9\u95e8\u5e97","street_address":"164-01 Crossbay Blvd.","city":"Howard Beach","state":"New York","postal_code":"11414","url":"/howardbeach","toll_free":"","phone":"+1 718-738-7618","fax":"+1 718-245-7606","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":38,"latitude":"35.1934","longitude":"-111.66008","name":"\u5f17\u62c9\u683c\u65af\u5854\u592b\u95e8\u5e97","street_address":"800 W. Route 66","city":"Flagstaff","state":"Arizona","postal_code":"86001","url":"/flagstaff","toll_free":"+1 800-234-1353 Road Side Assistance","phone":"+1 928-637-6575","fax":"+1 800-234-1353 Road Side Assistance","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece09:00 am\u523011:30 am","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":39,"latitude":"31.748945","longitude":"-106.34111","name":"\u57c3\u5c14\u5e15\u7d22\u95e8\u5e97","street_address":"8000 Gateway Blvd East","city":"El Paso","state":"Texas","postal_code":"79907","url":"/%E5%9F%83%E5%B0%94%E5%B8%95%E7%B4%A2","toll_free":"+1 800-453-0846","phone":"+1 915-629-7433","fax":"+1 915-592-6709","hours_of_operation":["\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":40,"latitude":"35.0871465","longitude":"-106.5479362","name":"\u963f\u5c14\u4f2f\u514b\u57fa\u95e8\u5e97","street_address":"8603 Lomas Blvd, NE","city":"Albuquerque","state":"New Mexico","postal_code":"87112","url":"/albuquerque","toll_free":"+1 833-405-9955","phone":"+1 505-337-0623","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523004:00 pm"]},{"id":42,"latitude":"33.617884","longitude":"-117.88831","name":"\u7ebd\u6ce2\u7279\u6d77\u6ee9\u95e8\u5e97","street_address":"1107 Jamboree Rd","city":"Newport Beach","state":"California","postal_code":"92660","url":"/newportbeach","toll_free":"+1 800-975-6301 ","phone":"+1 714-332-2994","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":43,"latitude":"33.963706","longitude":"-84.530814","name":"\u4e9a\u7279\u5170\u5927\u95e8\u5e97","street_address":"508 Cobb Pkwy N.","city":"Marietta","state":"Georgia","postal_code":"30062","url":"/atlanta","toll_free":"+1 800-572-3720","phone":"+1 770-424-8804","fax":"+1 770-424-4544","hours_of_operation":["\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:30 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:30 am\u523005:00 pm"]},{"id":44,"latitude":"33.928674","longitude":"-84.550423","name":"\u4e9a\u7279\u5170\u5927 - \u54c8\u96f7\u95e8\u5e97","street_address":"919 South Cobb Drive","city":"Marietta","state":"Georgia","postal_code":"30060","url":"/atlantaharley","toll_free":"+1 844-437-9889","phone":"+1  770-450-8059 ","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":45,"latitude":"45.324232","longitude":"-93.560931","name":"\u57c3\u5c14\u514b\u6cb3\u95e8\u5e97","street_address":"19600 Evans St. NW","city":"Elk River","state":"Minnesota","postal_code":"55330","url":"/elk-river","toll_free":"","phone":"+1 763-241-2000","fax":"+1 763-241-5347","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523007:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":46,"latitude":"38.704249","longitude":"-9.406965","name":"\u5361\u65af\u51ef\u65af\u95e8\u5e97","street_address":"Av. Marginal, Estrada Nacional 16","city":"Monte Estoril","state":"Portugal","postal_code":"2765-249","url":"/cascais","toll_free":"","phone":"+35 1 219 426 300","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523007:00 pm"]},{"id":47,"latitude":"37.035246","longitude":"-7.836626","name":"\u6cd5\u9c81\u95e8\u5e97","street_address":"Estrada Nacional 125-10, Est. do Aeoroport","city":"Faro","state":"Portugal","postal_code":"8000-146","url":"/faro","toll_free":"","phone":"+35 1 219 426 300","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523007:00 pm"]},{"id":48,"latitude":"38.724191","longitude":"-9.152774","name":"\u91cc\u65af\u672c\u95e8\u5e97","street_address":"Rua Castilho, No 72 A/B/C","city":"Lisboa","state":"Portugal","postal_code":"1250-068","url":"/lisbon","toll_free":"","phone":"+35 1 219 426 300","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523007:00 pm"]},{"id":49,"latitude":"40.472101","longitude":"-3.682686","name":"\u9a6c\u5fb7\u91cc\u95e8\u5e97","street_address":"Agustin de Foxa S/N, Estacion de Chamartin","city":"Madrid","state":"Madrid","postal_code":"28036","url":"/madrid","toll_free":"","phone":"+34 917 321 293","fax":"+1 310-536-6770","hours_of_operation":["\u4ece\u661f\u671f\u516d\u5230\u661f\u671f\u56db \u4ece \u4ece09:00 am\u523008:00 pm","\u661f\u671f\u4e94 \u4ece \u4ece07:00 pm\u523008:00 pm"]},{"id":51,"latitude":"-36.87304","longitude":"174.831845","name":"\u5965\u514b\u5170Bularangi\u95e8\u5e97","street_address":"Unit 3, 95 St. Johns Road","city":"Auckland","state":"New Zealand","postal_code":"1010","url":"/auckland-bularangi","toll_free":"","phone":"+1 310-536-6777","fax":"+1 310-536-6770","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":53,"latitude":"41.154128","longitude":"-8.604789","name":"\u6ce2\u5c14\u56fe\u95e8\u5e97","street_address":"Rua de Santa Catarina, 899","city":"Porto","state":"Portugal","postal_code":"4000-455","url":"/porto","toll_free":"","phone":"+1 310-536-6777","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523007:00 pm"]},{"id":54,"latitude":"38.784271","longitude":"-9.124659","name":"\u666e\u83b1\u5384\u7ef4\u8d6b\u95e8\u5e97","street_address":"Av. Severiano Falcao, No7","city":"Prior Velho","state":"Portugal","postal_code":"2685-379","url":"/prior-velho","toll_free":"","phone":"+1 310-536-6777","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523007:00 pm"]},{"id":58,"latitude":"20.718127","longitude":"-156.44602","name":"\u8302\u5b9c\u5c9b\u57fa\u9ed1\u95e8\u5e97","street_address":"2463 S. Kihei Rd #C-14","city":"Kihei","state":"Hawaii","postal_code":"96753","url":"/mauikihei","toll_free":"+1 877-351-9666","phone":"+1 808-667-7000","fax":"+1 808-661-1181","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":60,"latitude":"52.092552","longitude":"6.648414","name":"\u8377\u5170\u95e8\u5e97","street_address":"Nijverheidsstraat  12","city":"Eibergen","state":"Holland","postal_code":"7151 HN  ","url":"/holland","toll_free":"","phone":"+31 53-727-1066","fax":"+31 53-461-7101","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u56db \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523008:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":63,"latitude":"-43.543017","longitude":"172.639829","name":"\u514b\u8d56\u65af\u7279\u5f7b\u5947Bularangi\u95e8\u5e97","street_address":"28B Byron Street","city":"Christchurch","state":"New Zealand","postal_code":"8023","url":"/christchurch-bularangi","toll_free":"","phone":"+1 310-536-6777","fax":"+1 310-536-6770","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece08:30 am\u523005:30 pm"]},{"id":64,"latitude":"20.483447","longitude":"-86.971003","name":"\u79d1\u82cf\u6885\u5c14\u95e8\u5e97","street_address":"Carretera Costera Sur km 3.8","city":"Cozumel","state":"Mexico","postal_code":"77600","url":"/cozumel","toll_free":"+1 888-879-7873","phone":"+1 987-857-0106","fax":"+1 480-473-0974","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":65,"latitude":"41.779015","longitude":"-87.868964","name":"Countryside\u5b9d\u9a6c\u6469\u6258\u8f66\u79df\u8d41","street_address":"6070 S. LaGrange Rd.","city":"Countryside","state":"Illinois","postal_code":"60525","url":"/chicagocountryside","toll_free":"","phone":"+1 708-588-9900","fax":"+1 310-536-6776","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":69,"latitude":"34.042519","longitude":"-118.45972","name":"\u6bd4\u4f5b\u5229\u5c71\u95e8\u5e97","street_address":"11857 Santa Monica Blvd","city":"Los Angeles","state":"California","postal_code":"90025","url":"/beverlyhills","toll_free":"","phone":"+1 310-888-1831","fax":"+1 310-274-1171","hours_of_operation":["\u4ece\u661f\u671f\u516d\u5230\u661f\u671f\u5929 \u4ece \u4ece09:00 am\u523004:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523005:30 pm"]},{"id":70,"latitude":"40.802693","longitude":"-74.14598","name":"\u7ebd\u74e6\u514b - \u8d1d\u5c14\u7ef4\u5c14\u95e8\u5e97","street_address":"655 Washington Ave","city":"Belleville","state":"New Jersey","postal_code":"07109","url":"/newark","toll_free":"","phone":"+1 973-751-4545","fax":"+1 973-751-6506","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523005:00 pm","\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523004:00 pm"]},{"id":72,"latitude":"36.097063","longitude":"-115.19883","name":"\u62c9\u65af\u7ef4\u52a0\u65af\u51ef\u65cb\u6469\u6258\u8f66\u95e8\u5e97","street_address":"6175 W Sahara Ave","city":"Las Vegas","state":"Nevada","postal_code":"89146","url":"/lasvegastriumph","toll_free":"","phone":"+1 702-430-3500","fax":"","hours_of_operation":["\u661f\u671f\u4e00 \u4ece \u4ece10:00 am\u523005:00 pm","\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece09:00 am\u523010:00 am"]},{"id":73,"latitude":"41.418895","longitude":"-81.69318","name":"\u897f\u5c14\u65af\u5b9d\u9a6c\u6469\u6258\u79df\u8d41","street_address":"1901 Brookpark Rd","city":"Cleveland","state":"Ohio","postal_code":"44109","url":"/clevelandbmw","toll_free":"","phone":"+1 216-749-1363","fax":"+1 216-398-1244","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523004:00 pm"]},{"id":74,"latitude":"45.3838766","longitude":"-122.5830142","name":"\u6ce2\u7279\u5170\u95e8\u5e97","street_address":"870 E Berkeley St.","city":"Gladstone","state":"Oregon","postal_code":"97027","url":"/portland","toll_free":"+1 833-449-6517","phone":"+1 503-610-5341","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523005:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":75,"latitude":"42.406388","longitude":"-71.014971","name":"\u6ce2\u58eb\u987f\u95e8\u5e97","street_address":"184 Broadway","city":"Revere","state":"Massachusetts","postal_code":"02151","url":"/boston","toll_free":"","phone":"+1 781-629-4908","fax":"+1 781-629-5271","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece11:00 am\u523003:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523004:00 pm"]},{"id":76,"latitude":"40.082642","longitude":"-82.926794","name":" \u54e5\u4f26\u5e03\u95e8\u5e97","street_address":"5436 Westerville Rd","city":"Westerville","state":"Ohio","postal_code":"43081","url":"/columbus","toll_free":"","phone":"+1 614-212-7866","fax":"+1 614-212-7898","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523005:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523008:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":77,"latitude":"36.617975","longitude":"-121.8433","name":"\u5361\u6885\u5c14\u95e8\u5e97","street_address":"1933 Del Monte Blvd","city":"Seaside","state":"California","postal_code":"93955","url":"/carmel","toll_free":"+1 831-241-2800","phone":"+1 831-899-2800","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece09:00 am\u523012:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523004:00 pm"]},{"id":78,"latitude":"33.439961","longitude":"-111.91068","name":"\u51e4\u51f0\u57ce\u95e8\u5e97","street_address":"1000 N. McClintock Dr.","city":"Tempe","state":"Arizona","postal_code":"85281","url":"/phoenix","toll_free":"+1 888-251-0301 ","phone":"+1 602-666-0758","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":79,"latitude":"1.279847","longitude":"103.785978","name":"\u65b0\u52a0\u5761\u95e8\u5e97","street_address":"3 South Buona Vista Road, Viva Vista, #01-23","city":"Singapore","state":"SINGAPORE","postal_code":"118136","url":"/singapore-city","toll_free":"","phone":"+65 6476-7674","fax":"+65 6296-4548","hours_of_operation":["\u4ece\u661f\u671f\u516d\u5230\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523008:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u56db \u4ece \u4ece12:00 pm\u523008:00 pm","\u661f\u671f\u4e94 \u4ece \u4ece06:00 pm\u523008:00 pm"]},{"id":81,"latitude":"29.966846","longitude":"-90.089694","name":"\u65b0\u5965\u5c14\u826f\u95e8\u5e97","street_address":"2830 Canal Street","city":"New Orleans","state":"Louisiana","postal_code":"70119","url":"/new-orleans","toll_free":"+1 888-300-6140","phone":"+1 504-821-9575","fax":"+1 504-821-9991","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":85,"latitude":"39.067818","longitude":"-108.54099","name":"\u5927\u7ae0\u514b\u8f9b\u95e8\u5e97","street_address":"2060 East Main Street","city":"Grand Junction","state":"Colorado","postal_code":"81501","url":"/grandjunction","toll_free":"","phone":"+1 970-242-2260","fax":"+1 970-242-9496","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":87,"latitude":"-27.622152","longitude":"153.121675","name":"\u5e03\u91cc\u65af\u73ed\u95e8\u5e97","street_address":"2/2938 Logan Rd","city":"Underwood","state":"Queensland","postal_code":"4119","url":"/brisbane","toll_free":"+61 800-213-643","phone":"+61 (0)7 3341 1000","fax":"ABN 51 164 918 441","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523003:00 pm"]},{"id":170,"latitude":"30.190479","longitude":"-81.712744","name":"\u6770\u514b\u900a\u7ef4\u5c14\u95e8\u5e97","street_address":"1515 Wells Rd.","city":"Jacksonville","state":"Florida","postal_code":"32073","url":"/jacksonville","toll_free":"","phone":"+1 904-375-2921","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u4e00 \u4ece \u4ece12:00 pm\u523001:00 pm"]},{"id":190,"latitude":"-33.869186","longitude":"151.106086","name":"\u6089\u5c3c\u95e8\u5e97","street_address":"336 Parramatta Rd","city":"Burwood","state":"New South Wales","postal_code":"2134","url":"/sydney","toll_free":"+61 800-213-643","phone":"+61 2-9747-3064","fax":"ABN: 89 166 542 267","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":191,"latitude":"37.644898","longitude":"-122.41386","name":"\u65e7\u91d1\u5c71\u5b9d\u9a6c\u672c\u7530\u95e8\u5e97","street_address":"136 S. Linden Ave Ste. H","city":"South San Francisco","state":"California","postal_code":"94080","url":"/san-francisco-bmw-honda","toll_free":"","phone":"+1 415-905-0771","fax":"+1 650-989-8826","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece12:00 pm\u523004:00 pm","\u661f\u671f\u4e00 \u4ece\u661f\u671f\u4e09\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":194,"latitude":"29.141794","longitude":"-81.124696","name":"\u4ee3\u6258\u7eb3\u6c99\u6ee9\u95e8\u5e97","street_address":"3566 W. International Speedway Blvd.","city":"Daytona Beach","state":"Florida","postal_code":"32124","url":"/daytonabeach","toll_free":"","phone":"+1 386-681-1000","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523006:00 pm"]},{"id":195,"latitude":"25.790608","longitude":"-80.323446","name":"Miami Metric","street_address":"7500 NW 25th St. Unit 4","city":"Miami","state":"Florida","postal_code":"33122","url":"/miami-metric","toll_free":"+1 305-418-2112","phone":"+1 844-200-2112","fax":"+1 786-453-0002","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":197,"latitude":"41.9772552","longitude":"-88.0084409","name":"\u829d\u52a0\u54e5\u95e8\u5e97","street_address":"5490 Park Place","city":"Rosemont","state":"Illinois","postal_code":"60018","url":"/chicago","toll_free":"+1 833-211-0438","phone":"+1 224-603-6047","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":198,"latitude":"40.411975","longitude":"-80.080028","name":"Pittsburgh","street_address":"500 East Main St.","city":"Carnegie","state":"Pennsylvania","postal_code":"15106","url":"/pittsburgh","toll_free":"+1 800-979-3769","phone":"+1 412-276-1300","fax":"+1 412-276-3400","hours_of_operation":["\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":199,"latitude":"-16.924885","longitude":"145.774189","name":"Cairns","street_address":"21 Sheridan Street","city":"Cairns","state":"Queensland","postal_code":"4870","url":"/cairns","toll_free":"+61 800-213-643","phone":"+61 7-4031-2789","fax":"ABN 73 168 753 080","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece08:30 am\u523003:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece08:30 am\u523005:00 pm","\u661f\u671f\u516d \u4ece \u4ece08:30 am\u523004:00 pm"]},{"id":200,"latitude":"44.41684","longitude":"-103.52553","name":"Sturgis","street_address":"2106 Lazelle St.","city":"Sturgis","state":"South Dakota","postal_code":"57785","url":"/sturgis","toll_free":"","phone":"+1 605-206-7832","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece09:00 am\u523004:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":218,"latitude":"28.421484","longitude":"77.101052","name":"New Delhi","street_address":"The Bikers Caf\u00e9 Gurgaon, Ground Floor, Emaar MGF Palm Spring Plaza, Golf Course Road, DLF Phase 5, Sector 54","city":"Gurugram","state":"*International","postal_code":"122009","url":"/new-delhi","toll_free":"","phone":"+91 88-0053-4133","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523006:00 pm"]},{"id":219,"latitude":"30.476893","longitude":"-87.256311","name":"Pensacola","street_address":"6250 North W St","city":"Pensacola","state":"Florida","postal_code":"32505","url":"/pensacola","toll_free":"","phone":"+1 850-748-3423","fax":"+1 850-696-2377","hours_of_operation":["\u4ece\u661f\u671f\u516d\u5230\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523004:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm"]},{"id":221,"latitude":"-37.816176","longitude":"145.196402","name":"Melbourne","street_address":"3/603 Maroondah Hwy","city":"Mitcham","state":"Victoria","postal_code":"3132","url":"/melbourne","toll_free":"+61 800-213-643","phone":"+61 3-9874-1348","fax":"ABN 33 611 878801","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":226,"latitude":"51.075078","longitude":"-114.00272","name":"Calgary","street_address":"2520 23rd St. NE Unit 22","city":"Calgary","state":"Alberta","postal_code":"T2E 8L2","url":"/calgary","toll_free":"+1 877-296-9675","phone":".","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece09:00 am\u523011:00 am","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece08:30 am\u523005:00 pm"]},{"id":228,"latitude":"45.531705","longitude":"9.596625","name":"Milan","street_address":"Via Bergamo 17","city":"Treviglio","state":"Milano","postal_code":"24047","url":"/milan","toll_free":"+39 331-2209-667","phone":"+39 036-3303-916","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523008:00 pm"]},{"id":236,"latitude":"58.138437","longitude":"7.036646","name":"Lyngdal","street_address":"Sandveien 12,","city":"Lyngdal","state":"Norway","postal_code":"4580","url":"/lyngdal","toll_free":"","phone":"+47 488844033","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e09 \u4ece\u661f\u671f\u4e94\u5230\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523004:00 pm","\u661f\u671f\u56db \u4ece \u4ece10:00 am\u523006:00 pm"]},{"id":239,"latitude":"55.680671","longitude":"37.512821","name":"Moscow","street_address":"Vernadskogo Prospekt 12D","city":"Moscow","state":"*International","postal_code":".","url":"/moscow","toll_free":"","phone":"+ 7 968 847 8484","fax":".","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":243,"latitude":"26.5406451","longitude":"-81.794685","name":"Fort Myers","street_address":"9501 Thunder Road","city":"Fort Myers","state":"Florida","postal_code":"33913","url":"/fort-myers","toll_free":"+1 844-368-0138","phone":"+1 239-666-3538","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523005:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":244,"latitude":"30.221684","longitude":"-81.573405","name":"Jacksonville Harley-Davidson","street_address":"8909 Baymeadows Rd","city":"Jacksonville","state":"Florida","postal_code":"32256","url":"/jacksonville-harley-davidson","toll_free":"+1 (833) 281-6471","phone":"+1 (904) 425-2003","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece11:00 am\u523005:00 pm"]},{"id":245,"latitude":"28.536057","longitude":"-81.736892","name":"Clermont","street_address":"2480 S Highway 27","city":"Clermont","state":"Florida","postal_code":"34711","url":"/clermont","toll_free":"+1 (844) 320-6470","phone":"+1 (352) 269-6136","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523002:30 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523005:30 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523003:30 pm"]},{"id":246,"latitude":"27.494887","longitude":"-82.475872","name":"Bradenton","street_address":"624 67th St. Cir East","city":"Bradenton","state":"Florida","postal_code":"34208","url":"/bradenton","toll_free":"+1 (844) 378-0605","phone":"+1 (941) 803-0319","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523003:00 pm"]},{"id":248,"latitude":"28.818443","longitude":"-81.332494","name":"Sanford","street_address":"620 Hickman Cir","city":"Sanford","state":"Florida","postal_code":"32771","url":"/sanford","toll_free":"+1 (844) 378-0204","phone":"+1 (407) 554-4115","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523006:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523007:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":249,"latitude":"29.450938","longitude":"-98.630222","name":"San Antonio","street_address":"7230 NW Loop 410","city":"San Antonio","state":"Texas","postal_code":"78245","url":"/san-antonio","toll_free":"+1 (844) 378-0582","phone":"+1 (210) 714-6605","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":250,"latitude":"30.488058","longitude":"-85.113549","name":"Panama City Beach","street_address":"14700 Panama City Beach Pkwy","city":"Panama City Beach","state":"Florida","postal_code":"32413","url":"/panama-city-beach","toll_free":"+1 (844) 378-0581","phone":"+1 (850) 807-4458","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523004:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":251,"latitude":"28.012039","longitude":"-82.505619","name":"Tampa","street_address":"6920 N. Dale Mabry Hwy","city":"Tampa","state":"Florida","postal_code":"33614","url":"/tampa","toll_free":"+1 (844) 378-0203","phone":"+1 (813) 345-2598","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523004:00 pm"]},{"id":252,"latitude":"27.33249","longitude":"-82.450027","name":"Sarasota","street_address":"330 Cattlemen Rd","city":"Sarasota","state":"Florida","postal_code":"34232","url":"/sarasota","toll_free":"+1 (844) 378-0604","phone":"+1 (941) 343-8668","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523004:00 pm"]},{"id":253,"latitude":"33.98731","longitude":"-118.44747","name":"Bartels Harley-Davidson","street_address":"4131 Lincoln Blvd","city":"Marina Del Rey","state":"California","postal_code":"90292","url":"/bartels-harley-davidson","toll_free":"+1 (866) 893-7719","phone":"+1 (310) 593-9767","fax":"+1 (310) 943-3769","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523005:00 pm","\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":254,"latitude":"29.339418","longitude":"-81.132259","name":"Daytona ","street_address":"1637 US-1","city":"Ormond Beach","state":"Florida","postal_code":"32174","url":"/daytona","toll_free":"+1 (844) 378-1138","phone":"+1 (386) 261-1330","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523003:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":255,"latitude":"44.1133858","longitude":"-103.26983","name":"Rapid City","street_address":"2820 Harley Dr.","city":"Rapid City","state":"South Dakota","postal_code":"57702","url":"/rapid-city","toll_free":"+1 (844) 378-1145","phone":"+1 (605) 340-8630","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523004:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":256,"latitude":"42.958919","longitude":"-87.992219","name":"Milwaukee","street_address":"6221 W. Layton Ave","city":"Milwaukee","state":"Wisconsin","postal_code":"53220","url":"/milwaukee","toll_free":"+1 (844) 378-1141","phone":"+1 (414) 988-7049","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523005:00 pm","\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523003:00 pm"]},{"id":259,"latitude":"33.39812","longitude":"-111.84172","name":"Mesa","street_address":"922 S. Country Club Dr.","city":"Mesa","state":"Arizona","postal_code":"85210","url":"/mesa","toll_free":"+1 (844) 378-2135","phone":"+1 (480) 285-0900","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523004:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":260,"latitude":"40.753445","longitude":"-73.920663","name":"New York-Long Island","street_address":"42-11 Northern Blvd.","city":"Long Island City","state":"New York","postal_code":"11101","url":"/new-york-long-island","toll_free":"+1 (844) 378-2151","phone":"+1 (718) 577-1075","fax":"","hours_of_operation":["\u661f\u671f\u4e00 \u4ece\u661f\u671f\u4e09\u5230\u661f\u671f\u516d \u4ece \u4ece09:30 am\u523006:00 pm"]},{"id":262,"latitude":"30.142992","longitude":"-97.793614","name":"Austin","street_address":"10917 S Interstate 35","city":"Austin","state":"Texas","postal_code":"78747","url":"/austin","toll_free":"+1 (844) 378-1142","phone":"+1 (512) 312-7530","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":263,"latitude":"36.148985","longitude":"-86.743667","name":"Boswell's Harley-Davidson","street_address":"401 Fesslers Ln","city":"Nashville","state":"Tennessee","postal_code":"37210","url":"/boswells-harley-davidson","toll_free":"+1 (844) 378-2125","phone":"+1 (615) 850-7993","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523004:00 pm"]},{"id":264,"latitude":"36.083099","longitude":"-115.17154","name":"Las Vegas Harley-Davidson","street_address":"5191 Las Vegas Blvd S","city":"Las Vegas","state":"Nevada","postal_code":"89119","url":"/las-vegas-harley-davidson","toll_free":"+1 (844) 378-3060","phone":"+1 (702) 852-6567","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:30 pm"]},{"id":265,"latitude":"33.142663","longitude":"-117.1859","name":"San Marcos","street_address":"1040 Los Vallecitos Blvd. Suite 113","city":"San Marcos","state":"California","postal_code":"92069","url":"/san-marcos","toll_free":"+1 (844) 378-2144","phone":"+1 (760) 593-2820","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u4e00 \u4ece \u4ece10:00 am\u523006:00 pm","\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":266,"latitude":"33.628322","longitude":"-111.89527","name":"Scottsdale","street_address":"15656 N Hayden Rd","city":"Scottsdale","state":"Arizona","postal_code":"85260","url":"/scottsdale","toll_free":"+1 (844) 378-2142","phone":"+1 (480) 696-5964","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523003:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":267,"latitude":"28.346358","longitude":"-81.6001758","name":"Kissimmee","street_address":"7786 West Irlo Bronson Hwy","city":"Kissimmee","state":"Florida","postal_code":"34747","url":"/kissimmee","toll_free":"+1 (844) 836 8618","phone":"+1 (407) 627 1209","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":268,"latitude":"28.5460484","longitude":"-81.2158162","name":"Orlando East Harley-Davidson","street_address":"11898 Lake Underhill Rd","city":"Orlando ","state":"Florida","postal_code":"32825","url":"/east-orlando-harley-davidson","toll_free":"+1 (844) 836 8617","phone":"+1 (407) 627 1113","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523007:00 pm","\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u5929 \u4ece \u4ece11:00 am\u523005:00 pm"]},{"id":269,"latitude":"38.9989757","longitude":"-84.6505053","name":"Cincinnati","street_address":"8025 Action Blvd Ste 1","city":"Florence","state":"Kentucky","postal_code":"41042","url":"/cincinnati","toll_free":"+1 (844) 836 8615","phone":"+1 (859) 448 5996","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u5929 \u4ece \u4ece11:00 am\u523004:00 pm"]},{"id":270,"latitude":"34.9304847","longitude":"-80.974704","name":"Rock Hill","street_address":"1178 Galleria Blvd","city":"Rock Hill","state":"South Carolina","postal_code":"29730","url":"/rock-hill","toll_free":"+1 (844) 836 8613","phone":"+1 (803) 393 4601","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523005:00 pm"]},{"id":273,"latitude":"34.6798819","longitude":"-118.1655638","name":"Lancaster","street_address":"1759 W Avenue J12","city":"Lancaster","state":"California","postal_code":"93534","url":"/lancaster","toll_free":"+1 (888) 900-9901","phone":"+1 (310) 321-3180","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece09:00 am\u523005:00 pm","\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u516d \u4ece \u4ece08:00 am\u523006:00 pm"]},{"id":274,"latitude":"31.2779124","longitude":"-92.4524878","name":"Alexandria","street_address":"2030 N Mall Drive","city":"Alexandria","state":"Louisiana","postal_code":"71301","url":"/alexandria","toll_free":"+1 (844) 826-5745","phone":"+1 (318) 403-3838","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":275,"latitude":"28.835138","longitude":"-81.8922872","name":"Leesburg","street_address":"1745 US Hwy 441","city":"Leesburg","state":"Florida","postal_code":"34748","url":"/leesburg","toll_free":"+1 (844) 826-5743","phone":"+1 (352) 363-5733","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece11:00 am\u523004:00 pm"]},{"id":276,"latitude":"26.1981117","longitude":"-98.2722759","name":"McAllen","street_address":"1201 S Bentsen Rd.","city":"McAllen","state":"Texas","postal_code":"78501","url":"/mcallen","toll_free":"+1 (844) 829 5924","phone":"+1 (956) 441 2868","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece08:00 am\u523007:00 pm"]},{"id":277,"latitude":"39.3525931","longitude":"-82.100742","name":"Athens","street_address":"165 Columbus Rd","city":"Athens","state":"Ohio","postal_code":"45701","url":"/athens","toll_free":"+1 (844) 830-6978","phone":"+1 (740) 208-2619","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":278,"latitude":"30.2461735","longitude":"-92.106257","name":"Lafayette","street_address":"724 I-10 South Frontage Road","city":"Scott","state":"Louisiana","postal_code":"70583","url":"/lafayette","toll_free":"+1 (844) 830-6972","phone":"+1 (337) 205-9910","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523005:30 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523004:00 pm"]},{"id":280,"latitude":"32.3348889","longitude":"-95.2693673","name":"Tyler","street_address":"1211 South SE Loop 323","city":"Tyler","state":"Texas","postal_code":"75701","url":"/tyler","toll_free":"+1 (844) 829 5926","phone":"+1 (903) 707 8936","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":282,"latitude":"39.7651124","longitude":"-104.7972213","name":"Aurora","street_address":"16565 E. 33rd Drive","city":" Aurora","state":"Colorado","postal_code":"80011","url":"/aurora","toll_free":"+1 844-829-5924","phone":"+1 720-597-3088","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523005:00 pm","\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523004:00 pm"]},{"id":283,"latitude":"42.1467969","longitude":"-88.0304777","name":"Palatine","street_address":"2015 North Rand Road","city":"Palatine","state":"Illinois","postal_code":"60074","url":"/palatine","toll_free":"","phone":"+1 (310) 321-3180","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523003:00 pm"]},{"id":284,"latitude":"35.9085661","longitude":"-84.1512323","name":"Knoxville","street_address":"605 Levell Road","city":"Knoxville","state":"Tennessee","postal_code":"37932","url":"/knoxville","toll_free":"+1 844-829-5926","phone":"+1 865-444-4075","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece12:00 pm\u523005:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":285,"latitude":"35.754319","longitude":"-84.0257787","name":"Smoky Mountain H-D \u2013 Knoxville Airport","street_address":"1820 W. Lamar Alexander Pkwy,","city":"Maryville","state":"Tennessee","postal_code":"37801","url":"/knoxvilleairport","toll_free":"+1 844-378-2152","phone":"+1 865-444-4071","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece11:00 am\u523006:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523006:00 pm"]},{"id":286,"latitude":"40.6410864","longitude":"-76.0817174","name":"Orwigsburg","street_address":"1123 Brick Hill Rd.","city":"Orwigsburg","state":"Pennsylvania","postal_code":"17961","url":"/orwigsburg","toll_free":"+1 (844) 830-6972","phone":"+1 (570) 218-7148","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e8c \u4ece\u661f\u671f\u56db\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523007:00 pm","\u661f\u671f\u4e09 \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523004:00 pm"]},{"id":287,"latitude":"39.8896996","longitude":"-75.0922357","name":"Mount Ephraim","street_address":"926 Black Horse Pike","city":"Mount Ephraim","state":"New Jersey","postal_code":"08059","url":"/mountephraim","toll_free":"","phone":"+1 (310) 321-3180","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece09:00 am\u523004:00 pm"]},{"id":288,"latitude":"42.7584935","longitude":"-73.604772","name":"New York-Albany","street_address":"1130 Hoosick Rd.","city":"Troy","state":"New York","postal_code":"12180","url":"/newyorkalbany","toll_free":"+1 833-449-6518","phone":"+1 518-312-4044","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523003:00 pm"]},{"id":290,"latitude":"36.3571608","longitude":"-94.1569295","name":"Rogers","street_address":"2409 Hudson Rd","city":"Rogers","state":"Arkansas","postal_code":"72756","url":"/rogers","toll_free":"","phone":"+1 (310) 321-3180","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":291,"latitude":"35.985576","longitude":"-83.610165","name":"Kodak","street_address":"3607 Outdoor Sportsmans Pl,","city":"Kodak","state":"Tennessee","postal_code":"37801","url":"/kodak","toll_free":"+1 (844) 830-6973","phone":"+1 (865) 444-4073","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523006:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:30 am\u523007:30 pm"]},{"id":292,"latitude":"48.4602215","longitude":"-122.3449003","name":"North Cascades","street_address":"1337 Goldenrod Rd.","city":"Burlington","state":"Washington","postal_code":"98233","url":"/northcascades","toll_free":"+1 (833) 446-7094","phone":"+1 (360) 429-0090","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece11:00 am\u523004:00 pm","\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":293,"latitude":"43.6485988","longitude":"-71.500897","name":"Laconia","street_address":"239 Daniel Webster Hwy","city":"Meredith","state":"New Hampshire","postal_code":"03253","url":"/laconia","toll_free":"","phone":"+1 (310) 321-3180","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523005:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":294,"latitude":"42.3396337","longitude":"-88.2368209","name":"McHenry Harley-Davidson","street_address":"1903 W Route 120","city":"Chicago ","state":"Illinois","postal_code":"60051","url":"/mchenry-harley-davidson","toll_free":"","phone":"+1 (310) 321-3180","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523003:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":295,"latitude":"35.8046262","longitude":"-83.5800401","name":"Pigeon Forge","street_address":"105 Waldens Main Street","city":"Pigeon Forge","state":"Tennessee","postal_code":"37863","url":"/pigeonforge","toll_free":"+1 844-378-2140","phone":"+1 865-444-4015","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523005:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523006:00 pm"]},{"id":296,"latitude":"40.2114339","longitude":"-80.2005921","name":"Steel City Harley-Davidson","street_address":"1375 Washington Road","city":"Washington","state":"Pennsylvania","postal_code":"15301","url":"/steel-city-harley-davidson","toll_free":"","phone":"+1 (724) 225-7020","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece11:00 am\u523004:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523005:00 pm"]},{"id":297,"latitude":"41.9106734","longitude":"-88.3446848","name":"Saint Charles","street_address":"131 S. Randall Road","city":"St. Charles","state":"Illinois","postal_code":"60174","url":"/saintcharles","toll_free":"","phone":"+1 (310) 321-3180","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523003:00 pm"]},{"id":298,"latitude":"41.9106736","longitude":"-88.34469","name":"Chicago Countryside","street_address":"9950 Joliet Road","city":"Countryside","state":"Illinois","postal_code":"60525","url":"/chicago-countryside","toll_free":"","phone":"+1 (310) 321-3180","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523003:00 pm"]},{"id":299,"latitude":"42.2892304","longitude":"-88.4333743","name":"Woodstock","street_address":"2235 S Eastwood Dr. (Route 47)","city":"Woodstock","state":"Illinois","postal_code":"60098","url":"/woodstock","toll_free":"","phone":"+1 (310) 321-3180","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523003:00 pm"]},{"id":300,"latitude":"41.905873","longitude":"-87.9826929","name":"Villa Park","street_address":"120 North Ave","city":"Villa Park","state":"Illinois","postal_code":"60181","url":"/villapark","toll_free":"","phone":"+1 (310) 321-3180","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523003:00 pm"]},{"id":301,"latitude":"52.0767416","longitude":"-1.0260307","name":"Silverstone","street_address":"Uni 18 Silverstone Park,","city":"Silverstone","state":"Towcester","postal_code":"NN128TL","url":"/silverstone","toll_free":"","phone":"44 1327 857 213","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523005:30 pm","\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523012:00 pm"]},{"id":302,"latitude":"41.3754173","longitude":"-88.8269189","name":"Ottawa","street_address":"750 Centennial Drive\u00a0","city":"Ottawa","state":"Illinois","postal_code":"61350","url":"/ottawa","toll_free":"","phone":"+ (310) 321-3180","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523003:00 pm"]},{"id":303,"latitude":"41.9367115","longitude":"-88.7280598","name":"DeKalb","street_address":"969 N Peace Street","city":"Dekalb","state":"Illinois","postal_code":"60115","url":"/dekalb","toll_free":"","phone":"+ 1 (310) 321-3180","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523003:00 pm"]},{"id":304,"latitude":"46.9218549","longitude":"-114.0701485","name":"Missoula","street_address":"5106 East Harrier Dr.","city":"Missoula","state":"Montana","postal_code":"59808","url":"/missoula","toll_free":"+1 833-392-8662","phone":"+1 406-552-4503","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":305,"latitude":"45.7637864","longitude":"-111.1774567","name":"Belgrade","street_address":"540 Alaska Frontage Road","city":"Belgrade","state":"Montana","postal_code":"59714","url":"/belgrade","toll_free":"+1 (833) 392-8663","phone":"+1 (406) 206-5561","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":306,"latitude":"44.3194997","longitude":"-93.3073323","name":"Faribault","street_address":"2704 Airport Drive","city":"Faribault","state":"Minnesota","postal_code":"55021","url":"/faribault","toll_free":"+1 (833) 392-8664","phone":"+1 (507) 384-6120","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece09:30 am\u523004:30 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:30 am\u523005:00 pm"]},{"id":307,"latitude":"44.7045088","longitude":"-88.377043","name":"Bonduel","street_address":"W 2709 St Hwy 29","city":"Bonduel","state":"Wisconsin","postal_code":"54107","url":"/bonduel","toll_free":"+1 (833) 392-8665","phone":"+1 (715) 280-1030","fax":"","hours_of_operation":["\u661f\u671f\u4e00 \u661f\u671f\u56db \u4ece \u4ece09:00 am\u523004:00 pm","\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u4e09 \u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523003:00 pm","\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523002:00 pm"]},{"id":308,"latitude":"40.1243992","longitude":"-83.1901624","name":"Plain City","street_address":"7610 Commerce Place","city":"Plain City","state":"Ohio","postal_code":"43064","url":"/plaincity","toll_free":"+1 (833) 392-8666","phone":"+1 (614) 707-5203","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece11:00 am\u523004:00 pm"]},{"id":309,"latitude":"44.5584728","longitude":"-88.06311","name":"Green Bay","street_address":"1966 Velp Ave","city":"Greenbay","state":"Wisconsin","postal_code":"54303","url":"/greenbay","toll_free":"+1 (833) 392-8667","phone":"+1 (920) 569-0824","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523003:00 pm"]},{"id":310,"latitude":"43.0448934","longitude":"-89.2748382","name":"Madison","street_address":"6200 Millpond Road","city":"Madison","state":"Wisconsin","postal_code":"53718","url":"/madison","toll_free":"+1 (833) 392-8668","phone":"+1 (608) 620-6283","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523004:00 pm"]},{"id":311,"latitude":"40.0481985","longitude":"-74.2080144","name":"Lakewood","street_address":"300 Route 70","city":"Lakewood","state":"New Jersey","postal_code":"08701","url":"/lakewood","toll_free":"+1 (833) 392-8669","phone":"+1 (732) 994-0426","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523007:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523004:00 pm"]},{"id":312,"latitude":"40.2992622","longitude":"-74.0084276","name":"Long Branch","street_address":"671 Broadway","city":"Long Branch","state":"New Jersey","postal_code":"07740","url":"/longbranch","toll_free":"","phone":"+ 1 (310) 321-3180","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523004:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523007:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":313,"latitude":"41.419357","longitude":"-81.8044047","name":"Cleveland","street_address":"4985 W. 150TH ST","city":"Cleveland","state":"Ohio","postal_code":"44135","url":"/cleveland","toll_free":"","phone":"+ (310) 321-3180","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523004:00 pm","\u661f\u671f\u5929 \u4ece \u4ece12:00 pm\u523004:00 pm"]},{"id":314,"latitude":"41.6512216","longitude":"-93.6200958","name":"Des Moines","street_address":"81 NW 49th Place","city":"Des Moines","state":"Iowa","postal_code":"50313","url":"/desmoines","toll_free":"","phone":"+ 1 (310) 321-3180","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece08:30 am\u523007:00 pm","\u661f\u671f\u516d \u4ece \u4ece08:00 am\u523004:00 pm"]},{"id":315,"latitude":"44.9490735","longitude":"-92.980723","name":"Saint Paul","street_address":"2899 Hudson Blvd.","city":"St. Paul","state":"Minnesota","postal_code":"55128","url":"/saintpaul","toll_free":"+1 833-211-0436","phone":"+1 651-243-2973","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523007:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523004:00 pm"]},{"id":316,"latitude":"44.8654162","longitude":"-93.437097","name":"Eden Prairie","street_address":"12480 Plaza Dr","city":"Eden Prairie","state":"Minnesota","postal_code":"55344","url":"/edenprairie","toll_free":"+1 833-211-0433","phone":"+1 952-300-6640","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523004:00 pm"]},{"id":317,"latitude":"35.1844204","longitude":"-89.8372597","name":"Memphis","street_address":"2160 Whitten Rd.","city":"Memphis","state":"Tennessee","postal_code":"38133","url":"/memphis","toll_free":"+1 833-211-0434","phone":"+1 901-842-1748","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece11:00 am\u523003:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523004:00 pm"]},{"id":318,"latitude":"41.6861976","longitude":"-81.3363769","name":"Mentor","street_address":"8567 Tyler Blvd.","city":"Mentor","state":"Ohio","postal_code":"44060","url":"/mentor","toll_free":"+1 833-211-0435","phone":"+1 440-299-1012","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e09 \u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523005:30 pm","\u661f\u671f\u56db \u4ece \u4ece09:00 am\u523006:30 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523004:30 pm"]},{"id":319,"latitude":"40.3267731","longitude":"-111.7385097","name":"Timpanogos","street_address":"555 South Geneva Road.","city":"Lindon","state":"Utah","postal_code":"84042","url":"/timpanogos","toll_free":"+1 833-211-0437","phone":"+1 801-494-5482","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":320,"latitude":"32.5637931","longitude":"-84.9443529","name":"Columbus Georgia","street_address":"3230 Williams Rd.","city":"Columbus","state":"Georgia","postal_code":"31909","url":"/columbusgeorgia","toll_free":"+1 (888) 900-9901","phone":"+1 (706) 810-8225","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece12:00 pm\u523004:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":321,"latitude":"37.2440249","longitude":"-107.8734416","name":"Durango","street_address":"750 S. Camino Del Rio","city":"Durango","state":"Colorado","postal_code":"81301","url":"/durango","toll_free":"+1 (866) 204-2687","phone":"+1 (970) 289-1468","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece11:00 am\u523004:00 pm"]},{"id":322,"latitude":"30.0410539","longitude":"-89.9708152","name":"Slidell","street_address":"791 W. I-10 Service Rd","city":"Slidell","state":"Louisiana","postal_code":"70128","url":"/slidell","toll_free":"+1 (866) 603-7482","phone":"+1 (985) 235-7490","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":323,"latitude":"34.0956452","longitude":"-117.6934783","name":"Montclair","street_address":"8710 Central Ave","city":"Montclair","state":"California","postal_code":"91763","url":"/montclair","toll_free":"+1 (866) 986-1213","phone":"+1 (909) 946-3211","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":324,"latitude":"34.0601309","longitude":"-84.3285277","name":"Roswell","street_address":"11480 Alpharetta Hwy","city":"Roswell","state":"Georgia","postal_code":"30076","url":"/roswell","toll_free":"+1 (866) 986-1284","phone":"+1 (706) 810-8250","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u5929\u5230\u661f\u671f\u4e00 \u4ece \u4ece11:00 am\u523005:00 pm","\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523007:00 pm","\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523006:00 pm"]},{"id":325,"latitude":"29.9776079","longitude":"-90.2009417","name":"New Orleans Harley-Davidson","street_address":"6015 Airline Dr","city":"Metairie","state":"Louisiana","postal_code":"70003","url":"/neworleanshd","toll_free":"+1 (866) 376-8477","phone":"+1 (504) 681-9840","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece11:00 am\u523005:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523005:00 pm"]},{"id":326,"latitude":"29.6138215","longitude":"-90.7570292","name":"Houma","street_address":"1740 Martin Luther King Blvd.","city":"Houma","state":"Louisiana","postal_code":"70360","url":"/houma","toll_free":"+1 (866) 345-8277","phone":"+1 (985) 882-1217","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:30 pm"]},{"id":327,"latitude":"29.6920516","longitude":"-82.4527547","name":"Gainesville","street_address":"4125 NW 97th Blvd","city":"Gainesville","state":"Florida","postal_code":"32606","url":"/gainesville","toll_free":"+1 (866) 234-5027","phone":"+1 (352) 415-0436","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece11:00 am\u523005:00 pm","\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":328,"latitude":"40.6249379","longitude":"-122.3683949","name":"Redding","street_address":"1268 Twin View Blvd","city":"Redding","state":"California","postal_code":"96003","url":"/redding","toll_free":"+1 (866) 730-7984","phone":"+1 (530) 212-9490","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:30 pm"]},{"id":329,"latitude":"37.3087937","longitude":"-80.0080803","name":"Roanoke","street_address":"1925 Peters Creek Rd NW","city":"Roanoke","state":"Virginia","postal_code":"24017","url":"/roanoke","toll_free":"+1 (866) 724-2725","phone":"+1 (540) 698-1260","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":330,"latitude":"35.322044","longitude":"-94.3991177","name":"Fort Smith","street_address":"6304 S 36th Street","city":"Fort Smith","state":"Arkansas","postal_code":"72908","url":"/fortsmith","toll_free":"+1 (833) 456-4109","phone":"+1 (479) 668-4334","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":331,"latitude":"41.9263658","longitude":"-72.4579428","name":"Ellington","street_address":"398 Somers Rd","city":"Ellington","state":"Connecticut","postal_code":"06029","url":"/ellington","toll_free":"+1 (855) 313-4187","phone":"+1 (860) 317-6881","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e09 \u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u56db \u4ece \u4ece09:00 am\u523008:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523003:00 pm","\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523002:00 pm"]},{"id":332,"latitude":"34.8346682","longitude":"-82.2950598","name":"Greenville","street_address":"30 Chrome Drive","city":"Greenville","state":"South Carolina","postal_code":"29615","url":"/greenville","toll_free":"+1 (855) 313-6046","phone":"+1 (864) 777-7506","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece12:00 pm\u523006:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523007:00 pm"]},{"id":333,"latitude":"43.1183133","longitude":"-77.3698865","name":"Macedon","street_address":"3120 Kittering Road","city":"Macedon","state":"New York","postal_code":"14502","url":"/macedon","toll_free":"+1 (855) 378-1792","phone":"+1 (585) 899-4455","fax":"","hours_of_operation":["\u661f\u671f\u4e8c \u661f\u671f\u56db \u4ece \u4ece10:00 am\u523007:00 pm","\u661f\u671f\u4e00 \u661f\u671f\u4e09 \u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523005:00 pm","\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523003:00 pm"]},{"id":334,"latitude":"32.641137","longitude":"-85.3587526","name":"Opelika","street_address":"1201 Fox Run Pkwy \u00a0Opelika, Alabama 36801","city":"Opelika","state":"Alabama","postal_code":"36801","url":"/opelika","toll_free":"+1 (833) 453-4831","phone":"+1 (334) 523-8761","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":335,"latitude":"43.6888917","longitude":"-70.3288898","name":"Portland Maine","street_address":"375 Riverside Street ","city":"Portland","state":"Maine","postal_code":"04103","url":"/portlandmaine","toll_free":"+1 (855) 366-5230","phone":"+1 (207) 558-8130","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":336,"latitude":"39.4195789","longitude":"-87.4175895","name":"Terre Haute","street_address":"3912 S US Hwy 41","city":"Terre Haute","state":"Indiana","postal_code":"47802","url":"/terrehaute","toll_free":"+1 (855) 313-8207","phone":"+1 (479) 668-4484","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece11:00 am\u523004:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523005:00 pm"]},{"id":337,"latitude":"40.7947331","longitude":"-82.5152451","name":"Mansfield","street_address":"1400 Harrington Memorial Road","city":"Mansfield","state":"Ohio","postal_code":"44903","url":"/mansfield","toll_free":"+1 (855) 378-0072","phone":"+1 (419) 362-5118","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523003:00 pm"]},{"id":338,"latitude":"40.3807837","longitude":"-80.7091631","name":"Wintersville","street_address":"284 Canton Road Rt#43","city":"Wintersville","state":"Ohio","postal_code":"43953","url":"/wintersville","toll_free":"+1 (855) 210-3811","phone":"+1 (740) 212-3113","fax":"","hours_of_operation":["\u661f\u671f\u4e00 \u661f\u671f\u56db \u4ece \u4ece08:30 am\u523008:00 pm","\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u4e09 \u661f\u671f\u4e94 \u4ece \u4ece08:30 am\u523005:00 pm","\u661f\u671f\u516d \u4ece \u4ece08:30 am\u523003:00 pm"]},{"id":339,"latitude":"44.1679032","longitude":"-72.5128393","name":"Barre","street_address":"663 South Barre Road","city":"Barre","state":"Vermont","postal_code":"05641","url":"/barre","toll_free":"+1 (855) 378-2066","phone":"+1 (802) 778-0379","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523003:00 pm"]},{"id":340,"latitude":"43.0500861","longitude":"-78.8497247","name":"North Tonawanda","street_address":"1149 Erie Ave","city":"North Tonawanda","state":"New York","postal_code":"14120","url":"/northtonawanda","toll_free":"+1 (855) 313-2473","phone":"+1 (716) 852-1214","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523007:00 pm","\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523003:00 pm"]},{"id":341,"latitude":"39.988664","longitude":"-76.2723926","name":"Willow Street","street_address":"308 Beaver Valley Pike","city":"Willow Street","state":"Pennsylvania","postal_code":"17584","url":"/willowstreet","toll_free":"+1 (855) 378-1809","phone":"+1 (717) 431-9160","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523003:00 pm","\u661f\u671f\u4e00 \u661f\u671f\u4e09 \u661f\u671f\u4e94 \u4ece \u4ece08:00 am\u523008:00 pm","\u661f\u671f\u4e8c \u661f\u671f\u56db \u4ece \u4ece08:00 am\u523005:00 pm","\u661f\u671f\u516d \u4ece \u4ece08:00 am\u523003:00 pm"]},{"id":342,"latitude":"48.2078717","longitude":"-103.6321584","name":"Williston","street_address":"6611 2nd Ave West","city":"Williston","state":"North Dakota","postal_code":"58801","url":"/williston","toll_free":"+1 (855) 203-1729","phone":"+1 (701) 353-1838","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523005:00 pm"]},{"id":343,"latitude":"48.3070717","longitude":"-101.2981015","name":"Minot","street_address":"6701 Hwy 83 South","city":"Minot","state":"North Dakota","postal_code":"58701","url":"/minot","toll_free":"+1 (855) 202-7130","phone":"+1 (701) 343-9209","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece10:00 am\u523005:00 pm"]},{"id":344,"latitude":"39.0302397","longitude":"-95.6857052","name":"Topeka","street_address":"2047 SW Topeka Blvd","city":"Topeka","state":"Kansas","postal_code":"66612","url":"/topeka","toll_free":"+1 (855) 214-7479","phone":"+1 (785) 670-5930","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":345,"latitude":"43.1875949","longitude":"-71.5005611","name":"Concord","street_address":"142 Manchester St.","city":"Concord","state":"New Hampshire","postal_code":"03301","url":"/concord","toll_free":"","phone":"600-224-3268","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523004:00 pm","\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523003:00 pm"]},{"id":346,"latitude":"42.0338626","longitude":"-93.5889551","name":"Ames","street_address":"1930 E 13th St. ","city":"Ames","state":"Iowa","postal_code":"50010","url":"/ames","toll_free":"","phone":"(515) 232-6223","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523004:00 pm"]},{"id":347,"latitude":"45.0506458","longitude":"-93.7973565","name":"Delano","street_address":"822 Babcock Blvd W. ","city":"Delano","state":"Minnesota","postal_code":"55328","url":"/delano","toll_free":"","phone":"736-972-6282","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u56db \u4ece \u4ece10:00 am\u523007:00 pm","\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523004:00 pm"]},{"id":348,"latitude":"44.2863328","longitude":"-88.4905596","name":"Appleton","street_address":"5322 Clairemont Dr","city":"Appleton","state":"Wisconsin","postal_code":"54913","url":"/appleton","toll_free":"","phone":"+1 (920)757-1651","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u516d\u5230\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523004:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":349,"latitude":"39.3816499","longitude":"-82.1771713","name":"Arkport","street_address":"7611 Industrial Park Rd.","city":"Hornell","state":"New York","postal_code":"14843","url":"/arkport","toll_free":"","phone":"+1 (607) 295-7426","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e8c \u4ece \u4ece08:00 am\u523006:00 pm","\u661f\u671f\u4e09 \u4ece \u4ece08:00 am\u523005:00 pm","\u4ece\u661f\u671f\u56db\u5230\u661f\u671f\u4e94 \u4ece \u4ece08:00 am\u523008:00 pm","\u661f\u671f\u516d \u4ece \u4ece08:00 am\u523004:00 pm"]},{"id":350,"latitude":"44.185487","longitude":"-94.0121199","name":"Mankato","street_address":"1200 N River Dr.","city":"Mankato","state":"Minnesota","postal_code":"56001","url":"/mankato","toll_free":"","phone":"507 345 6077","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:30 am\u523006:00 pm"]},{"id":351,"latitude":"41.7707281","longitude":"-72.6511098","name":"East Hartford","street_address":"221Governor St","city":"East Hartford","state":"Connecticut","postal_code":"06108","url":"/easthartford","toll_free":"","phone":"860 528 7200","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u4e09 \u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm","\u661f\u671f\u56db \u4ece \u4ece09:00 am\u523007:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523003:00 pm"]},{"id":352,"latitude":"41.5241583","longitude":"-87.512177","name":"Calumet","street_address":"10350 Calumet Ave","city":"Munster","state":"Indiana","postal_code":"46321","url":"/calumet","toll_free":"+1 844-206-8674","phone":"+1 219-801-3983","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523007:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":353,"latitude":"41.5720237","longitude":"-74.4780114","name":"Wurtsboro","street_address":"4 Sullivan St.","city":"wurtsboro","state":"New York","postal_code":"12790","url":"/wurtsboro","toll_free":"","phone":"845 888 2426","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u516d\u5230\u661f\u671f\u5929 \u4ece \u4ece09:00 am\u523003:30 pm","\u4ece\u661f\u671f\u4e8c\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":354,"latitude":"42.1273101","longitude":"-79.1857294","name":"Jamestown","street_address":"1951 East Main St","city":"Falconer","state":"New York","postal_code":"14733","url":"/jamestown","toll_free":"","phone":"716 484 0113","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e09 \u4ece \u4ece08:00 am\u523005:00 pm","\u4ece\u661f\u671f\u56db\u5230\u661f\u671f\u4e94 \u4ece \u4ece08:00 am\u523008:00 pm","\u661f\u671f\u516d \u4ece \u4ece08:00 am\u523003:00 pm"]},{"id":355,"latitude":"43.1175555","longitude":"-88.0551715","name":"Milwaukee North ","street_address":"11310 Silver Springs Dr.","city":"Milwaukee ","state":"Wisconsin","postal_code":"53225","url":"/milwaukeenorth","toll_free":"+1 (833) 396-9150","phone":"+1 (414) 395-8934","fax":"","hours_of_operation":["\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523004:00 pm","\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece10:00 am\u523007:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523005:00 pm"]},{"id":356,"latitude":"45.4740626","longitude":"-91.7508507","name":"Rice Lake","street_address":"2801 S Wisconsin Ave","city":"Rice Lake","state":"Wisconsin","postal_code":"54868","url":"/ricelake","toll_free":"","phone":"715 234 5400","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]},{"id":357,"latitude":"47.2427797","longitude":"-122.3993656","name":"Tacoma","street_address":"2302 Pacific Hwy E.","city":"Fife","state":"Washington","postal_code":"98424","url":"/tacoma","toll_free":"","phone":"253 922 3700","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u4e94 \u4ece \u4ece09:30 am\u523006:00 pm","\u661f\u671f\u516d \u4ece \u4ece09:30 am\u523005:00 pm","\u661f\u671f\u5929 \u4ece \u4ece10:00 am\u523005:00 pm"]},{"id":358,"latitude":"35.4632554","longitude":"-97.7040002","name":"Oklahoma City","street_address":"6904 W Reno Ave","city":"Oklahoma City","state":"Oklahoma","postal_code":"73127","url":"/oklahomacity","toll_free":"","phone":"+1 (405) 631-8680","fax":"","hours_of_operation":["\u4ece\u661f\u671f\u4e00\u5230\u661f\u671f\u516d \u4ece \u4ece09:00 am\u523006:00 pm"]}],
					airportImageUrl: 'https://d1y9jrrtx2baf.cloudfront.net/assets/libs/airport.png'
				});
			}
			ER.VideoOverlays.init();
			$(window).scroll(function() {
				if($(this).scrollTop() > 100) {
					$('#backTop').fadeIn();
				} else {
					$('#backTop').fadeOut();
				}
			});
			$('.js-rating').raty({
				readOnly: true,
				half    : false,
				number: 5,
				score: function() {
					return $(this).attr('data-score');
				}
			});
			ER.Reviews.init();
			$(".js-reviewsSection .js-review .js-body").expander({
				expandText: "多",
				slicePoint: 170,
				userCollapseText: "少",
			});
			initClickTriggers();
			$(".js-toursSection").each(function( index ) {
				if($(this).find(".js-tourContainer").length == 1){
					$("body").addClass("oneTour");
				}
			});
		};
	</script>
<script>

	$(".optionsblk li").click(function(){
		$(this).find('.iradio_square-blue').addClass("checked");
		$(this).siblings().find('.iradio_square-blue').removeClass("checked");
		$(this).find('.js-numberCheckbox').prop('checked','checked');
	});

</script>
</div>