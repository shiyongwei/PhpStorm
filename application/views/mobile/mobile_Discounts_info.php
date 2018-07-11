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
        <li class="language">
            <a href="javascript:;">
                <span>国家</span>
                <span class="customSelectInner" style="width: 100px; display: inline-block;">
          <span class="flag-zh"></span>
        </span>
                <select class="languageList styled js-custom js-countriesSelect hasCustomSelect" style="width: 100px; position: absolute; opacity: 0; height: 23px; font-size: 12px;">
                    <option value="233" data-languagecode="en">
                        United States of America
                    </option>
                </select><span class="customSelect languageList styled js-custom js-countriesSelect" style="display: inline-block;"><span class="customSelectInner" style="width: 100px; display: inline-block;">
              中国
            </span></span>
            </a>
        </li>
    </ul>

    <ul>
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
            <a href="/index.php/City/mobile_city">城市
            </a>
        </li>
        <li>
            <a href="/index.php/Reg/mobile_Reg">网上取车登记</a>
        </li>
    </ul>
</nav><!-- // site nav -->
<!-- global content -->
<div class="global-content">
    <!-- main content -->
    <div class="main-content">
        <div class="js-page">

            <div class="hd_content">
                <div class="deal_body">
                    <div class="deal_header">
                        <h1 class="secTitle"><span><?php echo $promotion[0]['promtitle'];?></span></h1>
                    </div>

                    <div class="align-center">
                        <div class="img_container">
                            <img src="/public/image/Deals-Imagesintosturgis2017.jpg">
                        </div>
                    </div>

                    <div class="wrap">
                        <div>
                            <div class="float_right discount_container">
                                <div class="dis_price_con"><span class="discount_after"><?php echo $promotion[0]['promtitle'];?><small>/天</small></span>
                                </div>

                                <div class="package_price_con">

                                    <div class="package_price">
                                        <span class="title">价值</span>
                                        <span class="package_calculations"><?php echo $promotion[0]['worth'];?></span>
                                    </div>

                                    <div class="package_price">
                                        <span class="title">折扣</span>
                                        <span class="package_calculations"><?php echo $promotion[0]['discount'];?></span>
                                    </div>

                                    <div class="package_price">
                                        <span class="title">你省去了</span>
                                        <span class="package_calculations"><?php echo $promotion[0]['price'];?></span>
                                    </div>
                                </div>

                                <div class="but_book_now">
                                    <a href="javascript:;" class="btn-main btn-wide">立即预定</a>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <h2 class="orange">关于这个折扣</h2>
                    <div class="about_deal wrap">
                        <p class="deal_details">
                            <label>在此之前预订:</label>
                            <span><?php echo $promotion[0]['booking'];?></span>
                        </p>

                        <p class="deal_details half">
                            <label>
                                在此期间取车:
                            </label>
                            <span><?php echo $promotion[0]['during'];?></span>
                        </p>

                        <p class="deal_details half">
                            <label>
                                取车于:
                            </label>
                            <span><?php echo $promotion[0]['thecar'];?></span>
                        </p>
                        <p class="deal_details half">
                            <label>
                                最少租赁天数:
                            </label>
                            <span><?php echo $promotion[0]['day'];?></span>
                        </p>
                        <p class="deal_details half">
                            <label>
                                联系方式:
                            </label>
                            <span><?php echo $promotion[0]['city'];?></span>
                        </p>
                    </div>

                    <h3 class="orange"><span>购买条款</span></h3>
                    <div class="wrap">
                        <p><?php echo $promotion[0]['terms'];?></p>
                    </div>
                    <div class="wrap">
                        <p class="deal_details">
                    <span><?php echo $promotion[0]['text'];?></span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!-- global footer -->
<footer class="global-footer">
    <div class="txt1"><a href="javascript:;">联系我们</a></div>
    <div>|</div>
    <div class="txt2"><a href="/index.php/Bottom_info/mobile_Bottom_info">常见问题</a>
    </div>
    <div>|</div>
    <div class="txt1"><a href="javascript:;">整个网站
    </a></div>
</footer>
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
<style id="service-icons-0"></style>
</body>
</html>