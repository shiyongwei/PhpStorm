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
        <form action="/index.php/Rent?id=0" method="post">
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
                            <a href="" class="btn-highlight js-searchTrigger"><button type="submit" style="border: none;background: none;color: white;">立即搜索</button><span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
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
            <form action="/index.php/Rent?id=0" method="post">
                <div class="reservation js-combinedWidget">

                    <div class="options js-options">

                        <ul class="optionsblk widgetTabs">
                            <li class="selected js-rentalTrigger">
                                <a href="Javascript:;"><?php echo $navigation_limit['navigation_name_en']?></a>
                            </li>

                            <li class="packages ">
                                <a href="/index.php/Hotels?lang=en"><?php echo $navigation_limit['lease_name_en']?></a>
                            </li>

                            <li class=" js-toursTrigger">
                                <a href="/index.php/Trave?lang=en"><?php echo $navigation_limit['hotel_name_en']?></a>
                            </li>

                            <li class="deals">
                                <a href="/index.php/Discounts?lang=en"><?php echo $navigation_limit['promotions_name_en']?></a>
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
                            <input type="hidden" name="authenticity_token" value="1YTxxuLZwsPCnfl6mmXwrGeUXsLbZrRnQCJH85cn4kc=" />
                            <input type="hidden" name="reservation[reservation_type_id]" value="1">
                            <div class="form_bot">
                                <div class="loader js-loading" style="display:none;">
                                    <span><span><img src="/public/image/Loading-023da9421c5001dc2879575217b0add0.gif" /></span></span>
                                </div>


                                <div class="field-block fullWidth headblk js-numberSelection">
                                    <label for="">Several motorcycles are needed</label>
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
                                                other
                                            </label>
                                            <input type="text" title="Type number of motorcycles here" name="num_other" class="fieldIFinput js-numberField" value="">
                                        </li>
                                    </ul>

                                </div>

                                <div class="field-block pickup-location">
                                    <label for="">Departure city</label>
                                    <select name="star_city" data-fieldType="pickup_location"
                                            class="selectWithSearch js-locationsSelect " id="star_city">
                                        <option value="" selected=&quot;selected&quot;>
                                            Take car city
                                        </option>
										<?php foreach ($city as $key=>$citys): ?>
                                            <option value="<?php echo $citys['cit_name_en']?>" >
												<?php echo $citys['cit_name_en']?>
                                            </option>
										<?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="field-block dropoff-location">
                                    <label>Destination city</label>
                                    <select name="end_city" data-fieldType="dropoff_location"
                                            class="selectWithSearch js-locationsSelect">
                                        <option value=""
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
                                    <label for="">Departure Date/time</label>
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
                            </div>

                            <div class="widget_btns">
                                <a href="" class="btn-highlight js-searchTrigger"><button type="submit" style="border: none;background: none;color: white;">Search Now</button><span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
                            </div>

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

                </div>
            </form>

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
		$(this).find('.js-numberCheckbox').prop('checked','checked');
		
	});

</script>
