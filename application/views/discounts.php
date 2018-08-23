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

            document.location.href = '/index.php/Discounts/mobile_Discount';
        }
    });

	$('.en').click(function() {
		var url = window.location.href;
		window.location.href='/index.php/Discounts?lang=en';
	});
	$('.cn').click(function() {
		window.location.href='/index.php/Discounts';
	});
</script>
<link href="/public/css/discounts.css" type="text/css" rel="stylesheet" />
<div class="container">

    <div class="row hdl_content">
        <div>


        </div>
		<?php if(isset($_GET["lang"])): ?>
        <div class="clearfix" style="margin-top: 18px;margin-left: 28px;">
            <h1 class="bold" style="color: #333;">
                Popular discount
            </h1>
        </div>
		<?php endif; ?>
		<?php if(empty($_GET["lang"])): ?>
            <div class="clearfix" style="margin-top: 18px;margin-left: 28px;">
                <h1 class="bold" style="color: #333;">
                    热门折扣
                </h1>
            </div>
		<?php endif; ?>
		<?php if(isset($_GET["lang"])): ?>
        <div class="search_bar" style="width: 100%" style="background-color: #f5f5f5;color: #565656;padding: 0 0 0px;margin: 30px 0;min-height: 40px;">
            <form action="" class="res_form" style="    padding: 0px;width: 100% !important;float: none;">
                <div class="field_half control-group left" style="width: 50%;margin: 10px 0 !important;" >
                    <label class="deal_lable left" style="width: 33%;text-align: right;margin-right: 10px;">Discount type</label>

                    <div class="btn-group withoutArrow" style="width: 220px;margin-right: 10px;border-right: 1px solid #bbbbbb;">
                        <button data-toggle="dropdown" class="btn-highlight dropdown-toggle">
                            All
                        </button>

                        </ul>
                    </div>
                </div>

                <div class="field_half control-group right" style="width: 48%;margin: 10px 0 !important;">
                    <label class="participat_lable left" style="padding-top: 0px !important;line-height: 34px;width: 40%;">Participate in the city</label>

                    <div class="btn-group withoutArrow" style="width: 220px;margin-right: 10px;border-right: 1px solid #bbbbbb;">
                        <button data-toggle="dropdown" class="btn-highlight dropdown-toggle">
                            All
                        </button>

                        <ul class="dropdown-menu">
							<?php foreach ($city as $key=>$citys): ?>
                            <li>
                                <a href="#">
									<?php echo $citys['cit_name_en']?>
                                </a>
                            </li>
							<?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </form>

            <div class="clearfix"></div>
        </div>
		<?php endif; ?>
		<?php if(empty($_GET["lang"])): ?>
            <div class="search_bar" style="width: 100%" style="background-color: #f5f5f5;color: #565656;padding: 0 0 0px;margin: 30px 0;min-height: 40px;">
                <form action="" class="res_form" style="    padding: 0px;width: 100% !important;float: none;">
                    <div class="field_half control-group left" style="width: 50%;margin: 10px 0 !important;" >
                        <label class="deal_lable left" style="width: 33%;text-align: right;margin-right: 10px;">折扣类型</label>

                        <div class="btn-group withoutArrow" style="width: 220px;margin-right: 10px;border-right: 1px solid #bbbbbb;">
                            <button data-toggle="dropdown" class="btn-highlight dropdown-toggle">
                                所有的
                            </button>

                            </ul>
                        </div>
                    </div>

                    <div class="field_half control-group right" style="width: 48%;margin: 10px 0 !important;">
                        <label class="participat_lable left" style="padding-top: 0px !important;line-height: 34px;width: 40%;">参与城市</label>

                        <div class="btn-group withoutArrow" style="width: 220px;margin-right: 10px;border-right: 1px solid #bbbbbb;">
                            <button data-toggle="dropdown" class="btn-highlight dropdown-toggle">
                                所有
                            </button>

                            <ul class="dropdown-menu">
								<?php foreach ($city as $key=>$citys): ?>
                                    <li>
                                        <a href="#">
											<?php echo $citys['cit_name']?>
                                        </a>
                                    </li>
								<?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </form>

                <div class="clearfix"></div>
            </div>
		<?php endif; ?>

		<?php foreach ($promotion as $key=>$promotions): ?>
		<?php if(isset($_GET["lang"])): ?>
        <div class="hdl_holder one_way_special ">
            <div class="hd_container ow_container" style="border: 1px solid #c7c7c7;margin: 15px 0 0;padding: 15px;position: relative;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;">
                <div class="img_cont" style="float: left;width: 20%;">
                    <a href="promo_detail?id=<?php echo $promotions['id']?>">
                        <img src="<?php echo $promotions['image']?>" style="max-width: 100%;;height: 150px;vertical-align: middle;border: 0;">
                    </a>
                </div>

                <div class="hdl_texting_con" style="float: right;width: 80%;">
                    <div class="el_texting" style="    float: left;margin: 0 0 0 1.9%;width: 75%;">
                        <h3 class="secTitle" style="color: #ED7B19;margin: 0 0 5px 0;font-size: 1.5em;letter-spacing: 0;line-height: 1.4em;">
                            <a class="pid" href="promo_detail?id=<?php echo $promotions['id']?>"">
                                <span class="bold"><?php echo $promotions['promtitle_en']?></span>

                            </a>
                        </h3>

                        <p style="margin-bottom: 0;color: #555;margin: 0 0 0px !important;display: block;-webkit-margin-before: 1em;-webkit-margin-after: 1em;-webkit-margin-start: 0px;-webkit-margin-end: 0px;">
                            <span>Book before then:</span>
                            <span><?php echo $promotions['booking_en']?></span>
                        </p>

                        <p style="margin-bottom: 0;color: #555;margin: 0 0 0px !important;display: block;-webkit-margin-before: 1em;-webkit-margin-after: 1em;-webkit-margin-start: 0px;-webkit-margin-end: 0px;">
                            <span>Pick up the car during this time:</span>
                            <span><?php echo $promotions['during_en']?></span>
                        </p>

                        <p style="margin-bottom: 0;color: #555;margin: 0 0 0px !important;display: block;-webkit-margin-before: 1em;-webkit-margin-after: 1em;-webkit-margin-start: 0px;-webkit-margin-end: 0px;">
                            <span>In returning the car:</span>
                            <span>not available </span>
                        </p>

                        <p style="margin-bottom: 0;color: #555;margin: 0 0 0px !important;display: block;-webkit-margin-before: 1em;-webkit-margin-after: 1em;-webkit-margin-start: 0px;-webkit-margin-end: 0px;"><?php echo $promotions['text_en']?></p>

                        <div class="participating_container" style="    display: block;">
                            <span class="bold location_title" style="color: #bf5e43 !important;">contact way:</span> &nbsp;
                            <a href="denver" style="    color: #ed7b19;text-decoration: none;outline: none;"><?php echo $promotions['city_en']?></a> &nbsp;
                        </div>
                    </div>
                    <div class="discount_container" style="    text-align: right;float: right;position: absolute;bottom: 15px;right: 15px;"><span class="discount_before" dir="ltr" style="text-align: center;color: #555;font-size: 1.5em;text-decoration: line-through;    display: block;line-height: 1.1em;"><?php echo $promotions['worth_en']?></span> <span class="discount_after" style="    color: #d41f1f;font-size: 1.9em;text-align: center;display: block;line-height: 1.1em;"><?php echo $promotions['price_en']?><small></small></span>
                        <a title="Reservations now" data-url="/%E6%91%A9%E6%89%98%E8%BD%A6%E7%89%B9%E6%83%A0/443/book" class="btn-highlight js-bookTrigger" href="javascript:;">
                            Reservations now
                        </a>
                    </div>          </div>

                <div class="clearfix"></div>
            </div>

        </div>
		<?php endif; ?>
		<?php if(empty($_GET["lang"])): ?>
                <div class="hdl_holder one_way_special ">
                    <div class="hd_container ow_container" style="border: 1px solid #c7c7c7;margin: 15px 0 0;padding: 15px;position: relative;-webkit-transition: all 0.3s ease-in-out;-moz-transition: all 0.3s ease-in-out;-o-transition: all 0.3s ease-in-out;transition: all 0.3s ease-in-out;">
                        <div class="img_cont" style="float: left;width: 20%;">
                            <a href="promo_detail?id=<?php echo $promotions['id']?>">
                                <img src="<?php echo $promotions['image']?>" style="max-width: 100%;;height: 150px;vertical-align: middle;border: 0;">
                            </a>
                        </div>

                        <div class="hdl_texting_con" style="float: right;width: 80%;">
                            <div class="el_texting" style="    float: left;margin: 0 0 0 1.9%;width: 75%;">
                                <h3 class="secTitle" style="color: #ED7B19;margin: 0 0 5px 0;font-size: 1.5em;letter-spacing: 0;line-height: 1.4em;">
                                    <a class="pid" href="promo_detail?id=<?php echo $promotions['id']?>"">
                                    <span class="bold"><?php echo $promotions['promtitle']?></span>

                                    </a>
                                </h3>

                                <p style="margin-bottom: 0;color: #555;margin: 0 0 0px !important;display: block;-webkit-margin-before: 1em;-webkit-margin-after: 1em;-webkit-margin-start: 0px;-webkit-margin-end: 0px;">
                                    <span>在此之前预订:</span>
                                    <span><?php echo $promotions['booking']?></span>
                                </p>

                                <p style="margin-bottom: 0;color: #555;margin: 0 0 0px !important;display: block;-webkit-margin-before: 1em;-webkit-margin-after: 1em;-webkit-margin-start: 0px;-webkit-margin-end: 0px;">
                                    <span>在此期间取车:</span>
                                    <span><?php echo $promotions['during']?></span>
                                </p>

                                <p style="margin-bottom: 0;color: #555;margin: 0 0 0px !important;display: block;-webkit-margin-before: 1em;-webkit-margin-after: 1em;-webkit-margin-start: 0px;-webkit-margin-end: 0px;">
                                    <span>还车在:</span>
                                    <span>暂无</span>
                                </p>

                                <p style="margin-bottom: 0;color: #555;margin: 0 0 0px !important;display: block;-webkit-margin-before: 1em;-webkit-margin-after: 1em;-webkit-margin-start: 0px;-webkit-margin-end: 0px;"><?php echo $promotions['text']?></p>

                                <div class="participating_container" style="    display: block;">
                                    <span class="bold location_title" style="color: #bf5e43 !important;">联系方式:</span> &nbsp;
                                    <a href="denver" style="    color: #ed7b19;text-decoration: none;outline: none;"><?php echo $promotions['city']?></a> &nbsp;
                                </div>
                            </div>
                            <div class="discount_container" style="    text-align: right;float: right;position: absolute;bottom: 15px;right: 15px;"><span class="discount_before" dir="ltr" style="text-align: center;color: #555;font-size: 1.5em;text-decoration: line-through;    display: block;line-height: 1.1em;"><?php echo $promotions['worth']?></span> <span class="discount_after" style="    color: #d41f1f;font-size: 1.9em;text-align: center;display: block;line-height: 1.1em;"><?php echo $promotions['price']?><small></small></span>
                                <a title="立即预定" data-url="/%E6%91%A9%E6%89%98%E8%BD%A6%E7%89%B9%E6%83%A0/443/book" class="btn-highlight js-bookTrigger" href="javascript:;">
                                    立即预定
                                </a>
                            </div>          </div>

                        <div class="clearfix"></div>
                    </div>

                </div>
			<?php endif; ?>
		<?php endforeach; ?>

</div>
</div>