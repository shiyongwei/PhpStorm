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

			document.location.href = '/index.php/Reg/mobile_Reg';
		}
	});
	$('.en').click(function() {
		var url = window.location.href;
		window.location.href='/index.php/Reg?lang=en';
	});
	$('.cn').click(function() {
		window.location.href='/index.php/Reg';
	});
</script>

<link href="/public/css/reg.css" type="text/css" rel="stylesheet" />
<?php if(isset($_GET["lang"])): ?>
<div class="container">
    <div class="row r_rider_checkin" style="width: 877px;margin-left: 140px;">

        <div class="clearfix clearfix_one">
            <div style="width: 50%;float: left">
            <h1 class="bold" style="float: left;font-size: 1.5em;">
                <span>CHECK-IN</span>
            </h1>
            </div>
            <div class="rider_quistion_con reg">
                <h2 style="color: #343434;font-weight: 700;font-size: 1.5em;">
                    <span>Question about your rental?</span>
                </h2>

                <p class="faqs_link" style="color: #555;">
                    <a href="">
                        See our Rental FAQS
                    </a>
                </p>
            </div>

        </div>

        <div class="alert alert-block alert-error js-error-alert" style="display:none;">
            <button data-dismiss="alert" class="close" type="button">×</button>
            <strong>噢,</strong>
            <p>
                VIP会员仅在预定完成72小时后才能进行快速登记。如果您在预定72小时之后还收到此邮件，请<a href="/%E8%81%94%E7%B3%BB%E6%88%91%E4%BB%AC?contact_info%5Blead_type_id%5D=20">点击这里</a> 联系我们的预定部门。感谢您的惠顾，抱歉给您带来不便。
            </p>
        </div>

        <div class="alert alert-block alert-error js-error-alert js-lookup-failure" style="display:none;">
            <button data-dismiss="alert" class="close" type="button">×</button>
            <strong>噢,</strong>
            <p></p>
        </div>

        <div class="welcom_con">
            <p>网上取车登记可以为您在取车时省去很多时间，让您在最短的时间内开始您的公路越野旅程！（"注意：取车时您还是需要出示您的驾照"）</p>
        </div>

        <a id="lookup" class="starting">&nbsp;</a>

        <div class="r_rider_checkin_form L-checkin_form bd">
            <div class="js-lookup">
                <form action="" method="Post" class="res_form js-lookupTrigger">
                    <div class="field_half control-group">
                        <label>Last Name <span class="required">*</span> </label>
                        <input value="" name="lookup[first_name]" type="text" required="">
                    </div>

                    <div class="field_half control-group">
                        <label>First Name <span class="required">*</span></label>
                        <input value="" name="lookup[last_name]" type="text" required="">
                    </div>

                    <div class="field_half control-group">
                        <label>Pick-Up City <span class="required">*</span></label>
                        <div class="dropdown">

                        </div>
                    </div>
                    <div class="field_half control-group">
                        <div class="dateTime" style="    margin-top: 30px;">
                            <input class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})">
                        </div>
                    </div>

                    <div class="buttons_con">
                        <button class="btn-highlight btn-bok_now first_button" type="submit">LOOK UP</button>
                        <span class="smallSpinner js-spinner" style="display: none;">
        <img src="https://d1y9jrrtx2baf.cloudfront.net/assets/desktop/layout/smallSpinner-0f4bcc8a9d87f60343bc94b247bfbe7d.gif">
      </span>
                        <div class="clearfix"></div>
                    </div>
                </form>

                <div class="or_con" style="    border-bottom: 2px solid #c7c7c7;clear: both;padding-bottom: 5px;margin-bottom: 25px;">
                    <p class="or" style="position: relative;top: 16px;left: 366px;font-size: 2em;margin: 0 auto;display: inline-block;background: #fff;padding: 0 10px;font-weight: 700;">OR</p>
                </div>

                <form action="" method="POST" class="res_form js-lookupTrigger">

                    <div class="field_half control-group">
                        <label>Booking Confirmation Number <span class="required">*</span></label>
                        <input value="" type="text" name="lookup[identifier]" required="" class="js-identifierField">
                    </div>

                    <div class="field_half control-group">
                        <label>Last Name <span class="required">*</span></label>
                        <input value="" type="text" name="lookup[last_name]" required="">
                    </div>

                    <div class="clearfix"></div>

                    <div class="buttons_con">
                        <button class="btn-highlight btn-bok_now first_button" type="submit">LOOK UP</button>
                        <span class="smallSpinner js-spinner" style="display: none;">
        <img src="https://d1y9jrrtx2baf.cloudfront.net/assets/desktop/layout/smallSpinner-0f4bcc8a9d87f60343bc94b247bfbe7d.gif">
      </span>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>


        </div>

        <div class="go_to_top_con"><a href="#lookup"></a></div>

        <div class="clearfix"></div>
    </div>
</div>
<?php endif; ?>
<?php if(empty($_GET["lang"])): ?>
    <div class="container">
        <div class="row r_rider_checkin" style="width: 877px;margin-left: 140px;">

            <div class="clearfix clearfix_one">
                <div style="width: 50%;float: left">
                    <h1 class="bold" style="float: left;font-size: 1.5em;">
                        <span>VIP快速取车登记</span>
                    </h1>
                </div>
                <div class="rider_quistion_con reg">
                    <h2 style="color: #343434;font-weight: 700;font-size: 1.5em;">
                        <span>对您的租赁有问题？</span>
                    </h2>

                    <p class="faqs_link" style="color: #555;">
                        <a href="">
                            请查看我们的租赁常见问题
                        </a>
                    </p>
                </div>

            </div>

            <div class="alert alert-block alert-error js-error-alert" style="display:none;">
                <button data-dismiss="alert" class="close" type="button">×</button>
                <strong>噢,</strong>
                <p>
                    VIP会员仅在预定完成72小时后才能进行快速登记。如果您在预定72小时之后还收到此邮件，请<a href="/%E8%81%94%E7%B3%BB%E6%88%91%E4%BB%AC?contact_info%5Blead_type_id%5D=20">点击这里</a> 联系我们的预定部门。感谢您的惠顾，抱歉给您带来不便。
                </p>
            </div>

            <div class="alert alert-block alert-error js-error-alert js-lookup-failure" style="display:none;">
                <button data-dismiss="alert" class="close" type="button">×</button>
                <strong>噢,</strong>
                <p></p>
            </div>

            <div class="welcom_con">
                <p>网上取车登记可以为您在取车时省去很多时间，让您在最短的时间内开始您的公路越野旅程！（"注意：取车时您还是需要出示您的驾照"）</p>
            </div>

            <a id="lookup" class="starting">&nbsp;</a>
            <div class="r_rider_checkin_form L-checkin_form bd">
                <div class="js-lookup">
                    <form action="/index.php/Reg/add" method="Post" class="res_form js-lookupTrigger">
                        <div class="field_half control-group">
                            <label>姓名 <span class="required">*</span> </label>
                            <input value="" name="name" type="text" required="">
                        </div>

                        <div class="field_half control-group">
                            <label>电话 <span class="required">*</span></label>
                            <input value="" name="tel" type="text" required="">
                        </div>
                        <div class="field_half control-group">
                            <label>租赁摩托 <span class="required">*</span></label>
                            <input value="<?php echo $reg_info['title']?>" name="title" type="text" required="">
                        </div>
                        <div class="field_half control-group">
                            <label>租赁数量 <span class="required">*</span></label>
                            <input value="<?php echo $reg_info['num']?>" name="num" type="text" required="">
                        </div>

                        <div class="field_half control-group">
                            <label>取车城市 <span class="required">*</span></label>
                            <input value="<?php echo $reg_info['star_city']?>" name="star_city" type="text" required="">
                        </div>

                        <div class="field_half control-group">
                            <label>还车城市 <span class="required">*</span></label>
                            <input value="<?php echo $reg_info['end_city']?>" name="end_city" type="text" required="">
                        </div>



<!--                        <div class="field_half control-group">-->
<!--                            <label>取车城市 <span class="required">*</span></label>-->
<!--                            <div class="dropdown">-->
<!--                                -->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="field_half control-group">
                            <div class="dateTime">
                                <label>取车时间 <span class="required">*</span></label>
                                <input name="star_time" class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php echo $reg_info['star_time']?>">
                            </div>
                        </div>
                        <div class="field_half control-group">
                            <div class="dateTime">
                                <label>还车时间 <span class="required">*</span></label>
                                <input name="end_time" class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="<?php echo $reg_info['end_time']?>">
                            </div>
                        </div>



                        <div class="buttons_con">
                            <button class="btn-highlight btn-bok_now first_button" type="submit">立 即 登 记</button>
                            <span class="smallSpinner js-spinner" style="display: none;">
        <img src="https://d1y9jrrtx2baf.cloudfront.net/assets/desktop/layout/smallSpinner-0f4bcc8a9d87f60343bc94b247bfbe7d.gif">
      </span>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>


            </div>

            <div class="go_to_top_con"><a href="#lookup"></a></div>

            <div class="clearfix"></div>
        </div>
    </div>
<?php endif; ?>
