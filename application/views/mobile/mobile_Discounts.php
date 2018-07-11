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
    <title>鹰骑特惠</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script async="" src="/public/js/analytics.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-title" content="EagleRider Motorcycle Rentals">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <link href="/public/css/mobile.css" media="all" rel="stylesheet" type="text/css">
</head>

<body class="zh tourType" id="motorcycleTours">

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
            <a href="/index.php/City/mobile_City">城市
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

            <h1>热门折扣</h1>

            <!-- Guided Motorcycle Tours List -->
            <form action="">
                <!--<h2 class="orange">Sort By</h2>-->
                <div class="wrap-large">
                    <ul>
                        <li>
                            <div class="media-opposite hot_deal_dropdown_container">
                                <div class="media-left halfWidth">
                                    <label>折扣类型</label>

                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn-highlight dropdown-toggle">
                                            所有的
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="javascript:;">所有的</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="media-left halfWidth">
                                    <label>参与城市</label>
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn-highlight dropdown-toggle">
                                            所有
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="javascript:;">所有</a>
                                            </li>
                                            <?php foreach ($city as $key=>$citys): ?>
                                                <li>
                                                    <a href="javasctipt:;">
                                                       <?php echo $citys['cit_name']?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="wrap-fullWidth hot_deal_products_container">
                    <ul class="list-links-2">
                        <?php foreach ($promotion as $value=>$key): ?>
                            <li class="">
                                <a href="/index.php/Discounts/mobile_Discount_info?id=<?php echo $key['id'];?>">
                                    <div class="media-opposite ">
                                        <!-- tour image-->
                                        <div class="media-left tourImg">
                                            <div class="imageContainer">
                                                <img src="<?php echo $key['image'];?>" alt="<?php echo $key['promtitle'];?>">
                                                <span class="align-center"><?php echo $key['booking'];?></span>
                                            </div>
                                        </div>
                                        <!--tour title -->
                                        <div class="media-left tourInfo">
                                            <strong class="orange"><?php echo $key['promtitle'];?></strong>
                                            <p class="dealDetails">
                                                联系方式:
                                                <span class="dark_gray"><?php echo $key['city'];?></span>
                                            </p>

                                            <div class="row price">
                                                <div class="discount_container">
                                                    <span class="discount_before" dir="ltr"><?php echo $key['worth'];?></span>
                                                    <span class="discount_after"><?php echo $key['price'];?><small>/天</small></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="wrap-fullwidth">
                    <nav class="pagination pagination-large pagination-right">
                        <ul>


                            <li class="page active">
                                <a href="javascript:;">1</a>
                            </li>

                            <li class="page">
                                <a href="javascript:;" rel="next">2</a>
                            </li>

                            <li class="page">
                                <a href="javascript:;">3</a>
                            </li>

                            <li class="page">
                                <a href="javascript:;">4</a>
                            </li>

                            <li class="next">
                                <a href="javascript:;" rel="next">&gt;</a>
                            </li>

                            <li class="last">
                                <a href="javascript:;">&gt;&gt;</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </form>
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