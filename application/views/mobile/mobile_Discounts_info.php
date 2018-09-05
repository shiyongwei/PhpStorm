<!DOCTYPE html>
<!--[if IE 7]>
<html lang="en" class="ie ie7"><![endif]-->
<!--[if IE 8]>
<html lang="en" class="ie ie8"><![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie ie9"><![endif]-->
<!--[!(IE)]><!-->
<html lang="en"><!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>鹰骑特惠详情页</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-title" content="EagleRider Motorcycle Rentals">
    <meta name="description" content="摩托车租赁和旅游 #302: 2017骑往斯特吉斯 ">
    <meta name="keywords" content="2017骑往斯特吉斯,  Motorcycle Special #302">

    <meta content="authenticity_token" name="csrf-param">
    <meta content="qtaBaS/rrTzbVuQ+WRzc0/2+h9O4hHpkATrgMClckyQ=" name="csrf-token">
    <link href="/public/css/mobile.css" media="all" rel="stylesheet" type="text/css">
</head>

<body class="zh dealView" id="">

<!-- global header and navigations -->
<header class="global-header">
    <a href="javascript:;" class="site-logo">摩托车&lt;br&gt;租赁与旅游</a>
    <a href="#js-site-nav" class="site-nav-toggle js-global-nav-toggle"></a>
    <a href="#" class="user-nav-toggle js-global-nav-toggle"></a>
</header>

<nav class="site-nav js-global-nav js-navigation" id="js-site-nav">
    <ul>
		<?php if(isset($_GET["lang"])): ?>
            <li>
                <a style="color: #ed7b19">Change language</a>
            </li>
            <li class="en">
                <a style="color: #ed7b19">English</a>
            </li>
            <li class="cn">
                <a style="color: #ed7b19">China</a>
            </li>

            <li>
                <a href="/index.php/Rent/mobile_Rent?id=<?php echo 0;?>&&lang=en">Rent
                </a>
            </li>
            <li>
                <a href="/index.php/Trave/mobile_Trave?lang=en">Travel
                </a>
            </li>
            <li>
                <a href="/index.php/Discounts/mobile_Discount?lang=en">Privilege
                </a>
            </li>
            <li>
                <a href="/index.php/Artivity/mobile_Artivity?lang=en">Motorcycle event
                </a>
            </li>
            <li>
                <a href="/index.php/City/mobile_City?lang=en">City
                </a>
            </li>
            <li>
                <a href="/index.php/Reg/mobile_Reg?lang=en">Reg</a>
            </li>
		<?php endif; ?>
		<?php if(empty($_GET["lang"])): ?>
            <li>
                <a style="color: #ed7b19">切换语言</a>
            </li>
            <li class="en">
                <a style="color: #ed7b19">英文</a>
            </li>
            <li class="cn">
                <a style="color: #ed7b19">中文</a>
            </li>
            <li>
                <a href="/index.php/Rent/mobile_Rent?id=<?php echo 0;?>">租赁
                </a>
            </li>
            <li>
                <a href="/index.php/Trave/mobile_Trave">旅游
                </a>
            </li>
            <li>
                <a href="/index.php/Discounts/mobile_Discount">促销特惠
                </a>
            </li>
            <li>
                <a href="/index.php/Artivity/mobile_Artivity">摩托车活动
                </a>
            </li>
            <li>
                <a href="/index.php/City/mobile_City">城市
                </a>
            </li>
            <li>
                <a href="/index.php/Reg/mobile_Reg">网上取车登记</a>
            </li>
		<?php endif; ?>
    </ul>
</nav>
<!-- global content -->
<?php if(isset($_GET["lang"])): ?>
    <div class="global-content">
    <!-- main content -->
    <div class="main-content">
        <div class="js-page">

            <div class="hd_content">
                <div class="deal_body">
                    <div class="deal_header">
                        <h1 class="secTitle"><span><?php echo $promotion['promtitle_en'];?></span></h1>
                    </div>

                    <div class="align-center">
                        <div class="img_container">
                            <img src="/public/image/Deals-Imagesintosturgis2017.jpg">
                        </div>
                    </div>

                    <div class="wrap">
                        <div>
                            <div class="float_right discount_container">
                                <div class="dis_price_con"><span class="discount_after"><?php echo $promotion['promtitle_en'];?><small>/day</small></span>
                                </div>

                                <div class="package_price_con">

                                    <div class="package_price">
                                        <span class="title">worth</span>
                                        <span class="package_calculations"><?php echo $promotion['worth_en'];?></span>
                                    </div>

                                    <div class="package_price">
                                        <span class="title">discount</span>
                                        <span class="package_calculations"><?php echo $promotion['discount_en'];?></span>
                                    </div>

                                    <div class="package_price">
                                        <span class="title">You save </span>
                                        <span class="package_calculations"><?php echo $promotion['price_en'];?></span>
                                    </div>
                                </div>

                                <div class="but_book_now">
                                    <a href="/index.php/Reg/mobile_Reg?lang=en" class="btn-main btn-wide">Reservations now</a>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <h2 class="orange">About this discount</h2>
                    <div class="about_deal wrap">
                        <p class="deal_details">
                            <label>Book before then:</label>
                            <span><?php echo $promotion['booking_en'];?></span>
                        </p>

                        <p class="deal_details half">
                            <label>
                                Pick up the car during this time:
                            </label>
                            <span><?php echo $promotion['during_en'];?></span>
                        </p>

                        <p class="deal_details half">
                            <label>
                                Take car on:
                            </label>
                            <span><?php echo $promotion['thecar_en'];?></span>
                        </p>
                        <p class="deal_details half">
                            <label>
                                Minimum lease days:
                            </label>
                            <span><?php echo $promotion['day_en'];?></span>
                        </p>
                        <p class="deal_details half">
                            <label>
                                contact way:
                            </label>
                            <span><?php echo $promotion['city_en'];?></span>
                        </p>
                    </div>

                    <h3 class="orange"><span>Purchase terms</span></h3>
                    <div class="wrap">
                        <p><?php echo $promotion['terms_en'];?></p>
                    </div>
                    <div class="wrap">
                        <p class="deal_details">
                    <span><?php echo $promotion['text_en'];?></span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php if(empty($_GET["lang"])): ?>
    <div class="global-content">
        <!-- main content -->
        <div class="main-content">
            <div class="js-page">

                <div class="hd_content">
                    <div class="deal_body">
                        <div class="deal_header">
                            <h1 class="secTitle"><span><?php echo $promotion['promtitle'];?></span></h1>
                        </div>

                        <div class="align-center">
                            <div class="img_container">
                                <img src="/public/image/Deals-Imagesintosturgis2017.jpg">
                            </div>
                        </div>

                        <div class="wrap">
                            <div>
                                <div class="float_right discount_container">
                                    <div class="dis_price_con"><span class="discount_after"><?php echo $promotion['promtitle'];?><small>/天</small></span>
                                    </div>

                                    <div class="package_price_con">

                                        <div class="package_price">
                                            <span class="title">价值</span>
                                            <span class="package_calculations"><?php echo $promotion['worth'];?></span>
                                        </div>

                                        <div class="package_price">
                                            <span class="title">折扣</span>
                                            <span class="package_calculations"><?php echo $promotion['discount'];?></span>
                                        </div>

                                        <div class="package_price">
                                            <span class="title">你省去了</span>
                                            <span class="package_calculations"><?php echo $promotion['price'];?></span>
                                        </div>
                                    </div>

                                    <div class="but_book_now">
                                        <a href="/index.php/Reg" class="btn-main btn-wide">立即预定</a>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>

                        <h2 class="orange">关于这个折扣</h2>
                        <div class="about_deal wrap">
                            <p class="deal_details">
                                <label>在此之前预订:</label>
                                <span><?php echo $promotion['booking'];?></span>
                            </p>

                            <p class="deal_details half">
                                <label>
                                    在此期间取车:
                                </label>
                                <span><?php echo $promotion['during'];?></span>
                            </p>

                            <p class="deal_details half">
                                <label>
                                    取车于:
                                </label>
                                <span><?php echo $promotion['thecar'];?></span>
                            </p>
                            <p class="deal_details half">
                                <label>
                                    最少租赁天数:
                                </label>
                                <span><?php echo $promotion['day'];?></span>
                            </p>
                            <p class="deal_details half">
                                <label>
                                    联系方式:
                                </label>
                                <span><?php echo $promotion['city'];?></span>
                            </p>
                        </div>

                        <h3 class="orange"><span>购买条款</span></h3>
                        <div class="wrap">
                            <p><?php echo $promotion['terms'];?></p>
                        </div>
                        <div class="wrap">
                            <p class="deal_details">
                                <span><?php echo $promotion['text'];?></span>
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- global footer -->
<?php if(isset($_GET["lang"])): ?>
    <footer class="global-footer">
        <div class="txt1"><a href="javascript:;">Contact Us</a></div>
        <div>|</div>
        <div class="txt2"><a href="/index.php/Bottom_info/mobile_Bottom_info">FAQ</a>
        </div>
        <div>|</div>
        <div class="txt1"><a href="javascript:;">The entire site
            </a></div>
    </footer>
<?php endif; ?>
<?php if(empty($_GET["lang"])): ?>
    <footer class="global-footer">
        <div class="txt1"><a href="javascript:;">联系我们</a></div>
        <div>|</div>
        <div class="txt2"><a href="/index.php/Bottom_info/mobile_Bottom_info">常见问题</a>
        </div>
        <div>|</div>
        <div class="txt1"><a href="javascript:;">整个网站
            </a></div>
    </footer>
<?php endif; ?>
<script src="/public/js/mobile.js" type="text/javascript"></script>
<script src="/public/js/combined_widget.js" type="text/javascript"></script>
<script src="/public/js/motorcycle_tour_reservation.js" type="text/javascript"></script>
<script src="/public/js/signup-fc147ec8e5e10e4d566c4197de0cc29d.js" type="text/javascript"></script>
<script src="/public/js/book-8e81d1e3dedfebf6529b5c494366bb32.js" type="text/javascript"></script>
<script type="text/javascript">
    if(window.onLibrariesLoad)
        window.onLibrariesLoad();

    $(document).ready(function() {
        ER.Layout.onDomLoad({
            enableCaptcha: true,
        });

        if(window.onDomLoadFN)
        {
            window.onDomLoadFN();
        }

    });

    $(window).load(function() {
        ER.Layout.onWindowLoad();

        if(window.onPageLoadFN)
        {
            window.onPageLoadFN();
        }

        var dealsSubscriptionContainer = $('.js-dealsSubscriptionContainer');
        new ER.Subscribe(dealsSubscriptionContainer);
    });
</script>
<script>
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
		window.location.href='/index.php/Discounts/mobile_Discount_info?id='+id+'&&lang=en';
	});

	$('.cn').click(function() {
		window.location.href='/index.php/Discounts/mobile_Discount_info?id='+id;
	});
</script>
<style id="service-icons-0"></style>
</body>
</html>