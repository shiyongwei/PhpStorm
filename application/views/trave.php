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

                                    <div class="form_bot tourWidget">


                                        <div class="tour-filters-widget">
                                            <div class="row-fluid">


                                                <select name="star_city" data-fieldtype="pickup_location" class="selectWithSearch js-locationsSelect" style="width: 97%;margin-top: 22px;">
                                                    <option value="" selected="&quot;selected&quot;">
                                                        Take car city
                                                    </option>
													<?php foreach ($city as $key=>$citys): ?>
                                                        <option value="<?php echo $citys['cit_name_en']?>" >
															<?php echo $citys['cit_name_en']?>
                                                        </option>
													<?php endforeach; ?>
                                                </select>

                                                <select name="travel" data-fieldtype="pickup_location" class="selectWithSearch js-locationsSelect" style="width: 97%;margin-top: 22px;">
                                                    <option value="" selected="&quot;selected&quot;">
                                                        ALL TRAVEL
                                                    </option>
													<?php foreach ($team as $key=>$teams): ?>
                                                        <option value="<?php echo $teams['teamtitle_en']?>" >
															<?php echo $teams['teamtitle_en']?>
                                                        </option>
													<?php endforeach; ?>
													<?php foreach ($uriving as $key=>$urivings): ?>
                                                        <option value="<?php echo $urivings['urivingtitle_en']?>" >
															<?php echo $urivings['urivingtitle_en']?>
                                                        </option>
													<?php endforeach; ?>
                                                </select>


                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="widget_btns">
                                        <a href="" class="btn-highlight js-searchTrigger"><button type="submit" style="border: none;background: none;color: white;height: 33px;">Reservations now</button><span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
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

                            <div class="js-toursSearch" style="width: 670px;">
                                <div class="header js-header">
                                    <p class="form_title">搜索摩托车旅游</p>
                                    <a class="max-min-btn visible-tablet js-toggle" href="Javascript:;"><b class="caret"></b></a>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="js-toursFormContainer">
                                    <form accept-charset="UTF-8" action="/index.php/Rent?id=0" method="post">

                                        <div class="form_bot tourWidget">


                                            <div class="tour-filters-widget">
                                                <div class="row-fluid">


                                                    <select name="star_city" data-fieldtype="pickup_location" class="selectWithSearch js-locationsSelect" style="width: 97%;margin-top: 22px;">
                                                        <option value="" selected="&quot;selected&quot;">
                                                            取车城市
                                                        </option>
														<?php foreach ($city as $key=>$citys): ?>
                                                            <option value="<?php echo $citys['cit_name']?>" >
																<?php echo $citys['cit_name']?>
                                                            </option>
														<?php endforeach; ?>
                                                    </select>

                                                    <select name="travel" data-fieldtype="pickup_location" class="selectWithSearch js-locationsSelect" style="width: 97%;margin-top: 22px;">
                                                        <option value="" selected="&quot;selected&quot;">
                                                            所有旅游
                                                        </option>
														<?php foreach ($team as $key=>$teams): ?>
                                                            <option value="<?php echo $teams['teamtitle']?>" >
																<?php echo $teams['teamtitle']?>
                                                            </option>
														<?php endforeach; ?>
														<?php foreach ($uriving as $key=>$urivings): ?>
                                                            <option value="<?php echo $urivings['urivingtitle']?>" >
																<?php echo $urivings['urivingtitle']?>
                                                            </option>
														<?php endforeach; ?>
                                                    </select>


                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="widget_btns">
                                            <a href="" class="btn-highlight js-searchTrigger"><button type="submit" style="border: none;background: none;color: white;height: 33px;">立即预定</button><span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
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
