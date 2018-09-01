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
    
    <link href="/public/css/mobile.css" media="all" rel="stylesheet" type="text/css">
</head>
<body class="zh eaglerider-stuff" id="">
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
<div class="global-content">
    <!-- main content -->
    <div class="main-content">
        <div class="js-page">
            <?php foreach ($text as $value=>$key): ?>
			<?php if(isset($_GET["lang"])): ?>
            <div class="link-container">
                    <a href="/index.php/Bottom_info/mobile_Bottom?id=<?php echo $key['id'];?>&&lang=en">
                        <i class="icn-stuff"><img src="<?php echo $key['image'];?>" alt=""></i><?php echo $key['title_en'];?>
                    </a>
            </div>
			<?php endif; ?>
			<?php if(empty($_GET["lang"])): ?>
                    <div class="link-container">
                        <a href="/index.php/Bottom_info/mobile_Bottom?id=<?php echo $key['id'];?>">
                            <i class="icn-stuff"><img src="<?php echo $key['image'];?>" alt=""></i><?php echo $key['title'];?>
                        </a>
                    </div>
				<?php endif; ?>

            <?php endforeach; ?>
        </div>
    </div>
</div>
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
	$('.en').click(function() {
		window.location.href='/index.php/Bottom_info/mobile_Bottom_info?lang=en';
	});
	$('.cn').click(function() {
		window.location.href='/index.php/Bottom_info/mobile_Bottom_info';
	});
</script>
<style id="service-icons-0"></style>
</body>
</html>