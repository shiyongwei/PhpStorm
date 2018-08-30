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
    <title>鹰骑活动</title>
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
    <a href="javascript:;" class="site-logo"></a>
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
                <a href="/index.php/Rent/mobile_Rent?id=<?php echo 0;?>">Rent
                </a>
            </li>
            <li>
                <a href="/index.php/Trave/mobile_Trave">Travel
                </a>
            </li>
            <li>
                <a href="/index.php/Discounts/mobile_Discount">Privilege
                </a>
            </li>
            <li>
                <a href="/index.php/Artivity/mobile_Artivity">Motorcycle event
                </a>
            </li>
            <li>
                <a href="/index.php/City/mobile_City">City
                </a>
            </li>
            <li>
                <a href="/index.php/Reg/mobile_Reg">Reg</a>
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
<!-- // site nav -->

<!-- global content -->
<div class="global-content">
    <!-- main content -->
    <div class="main-content">
        <div class="js-page">
			<?php if(isset($_GET["lang"])): ?>
            <h1>Activity List</h1>
			<?php endif; ?>
			<?php if(empty($_GET["lang"])): ?>
                <h1>活动列表</h1>
			<?php endif; ?>

            <form>
                <div class="wrap-large">
                    <ul>
                        <li>
                            <div class="media-opposite hot_deal_dropdown_container">
                                <div class="media-left halfWidth">
									<?php if(isset($_GET["lang"])): ?>
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn-highlight dropdown-toggle">
                                            <?php echo !empty($column_name) ? $column_name : 'All activities';?>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="/index.php/Artivity/mobile_Artivity" class="linkTitleHeader">
                                                    <strong>All activities</strong>
                                                </a>
                                            </li>
                                            <?php foreach ($column as $key=>$columns): ?>
                                                <li>
                                                    <a href="/index.php/Artivity/mobile_Artivity?column_id=<?php echo $columns['column_id']?>" class="linkTitleHeader">
                                                        <strong><?php echo $columns['column_name_en']?></strong>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>

                                        </ul>
                                    </div>
									<?php endif; ?>
									<?php if(empty($_GET["lang"])): ?>
                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn-highlight dropdown-toggle">
												<?php echo !empty($column_name) ? $column_name : '所有活动';?>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="/index.php/Artivity/mobile_Artivity" class="linkTitleHeader">
                                                        <strong>所有活动</strong>
                                                    </a>
                                                </li>
												<?php foreach ($column as $key=>$columns): ?>
                                                    <li>
                                                        <a href="/index.php/Artivity/mobile_Artivity?column_id=<?php echo $columns['column_id']?>" class="linkTitleHeader">
                                                            <strong><?php echo $columns['column_name']?></strong>
                                                        </a>
                                                    </li>
												<?php endforeach; ?>

                                            </ul>
                                        </div>
									<?php endif; ?>


                                </div>
								<?php if(isset($_GET["lang"])): ?>
                                <div class="media-left halfWidth">

                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn-highlight dropdown-toggle">
                                            All the stores
                                        </button>
                                        <ul class="dropdown-menu">
                                            <?php foreach ($city as $key=>$citys): ?>
                                                <li>
                                                    <a href="javasctipt:;" class="linkTitleHeader">
                                                        <strong><?php echo $citys['cit_name_en']?></strong>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <div class="validation-msg error hidden">
                                        Lorem ipsum dolor sit
                                    </div>
                                </div>
								<?php endif; ?>
								<?php if(empty($_GET["lang"])): ?>
                                    <div class="media-left halfWidth">

                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn-highlight dropdown-toggle">
                                                所有门店
                                            </button>
                                            <ul class="dropdown-menu">
												<?php foreach ($city as $key=>$citys): ?>
                                                    <li>
                                                        <a href="javasctipt:;" class="linkTitleHeader">
                                                            <strong><?php echo $citys['cit_name']?></strong>
                                                        </a>
                                                    </li>
												<?php endforeach; ?>
                                            </ul>
                                        </div>
                                        <div class="validation-msg error hidden">
                                            Lorem ipsum dolor sit
                                        </div>
                                    </div>
								<?php endif; ?>

                            </div>
                        </li>
                    </ul>
                </div>

                <div class="wrap-fullWidth eventsWrapper">
                    <ul class="list-links-2">
                        <?php foreach ($activity as $value=>$key): ?>
						<?php if(isset($_GET["lang"])): ?>
                            <li class="">
                                <a href="javascript:;">
                                    <div class="media-opposite">
                                        <!-- Event image-->
                                        <div class="media-left tourImg">
                                            <div class="imageContainer">
                                                <img src="/public/image/er-events_0015_Sturgis.jpg" alt="斯特吉斯（Sturgis）摩托车拉力赛">
                                            </div>
                                        </div>

                                        <div class="media-left tourInfo">
                                            <strong class="orange"><?php echo $key['activititle_en'];?></strong>

                                            <p><span class="dark_gray"><?php echo $key['starttime_en'];?></span></p>

                                            <p><?php echo $key['text_en'];?></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
						<?php endif; ?>
						<?php if(empty($_GET["lang"])): ?>
                                <li class="">
                                    <a href="javascript:;">
                                        <div class="media-opposite">
                                            <!-- Event image-->
                                            <div class="media-left tourImg">
                                                <div class="imageContainer">
                                                    <img src="/public/image/er-events_0015_Sturgis.jpg" alt="斯特吉斯（Sturgis）摩托车拉力赛">
                                                </div>
                                            </div>

                                            <div class="media-left tourInfo">
                                                <strong class="orange"><?php echo $key['activititle'];?></strong>

                                                <p><span class="dark_gray"><?php echo $key['starttime'];?></span></p>

                                                <p><?php echo $key['text'];?></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
							<?php endif; ?>

                        <?php endforeach; ?>
                        <!--留空防报错-->
                        <li class="">
                            <a href="javascript:;">
                                <div class="media-opposite">
                                    <!-- Event image-->
                                </div>
                            </a>
                        </li>
                        <!---->
                    </ul>
                </div>
            </form>
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
		window.location.href='/index.php/Artivity/mobile_Artivity?lang=en';
	});
	$('.cn').click(function() {
		window.location.href='/index.php/Artivity/mobile_Artivity';
	});
</script>
<style id="service-icons-0"></style>
</body>
</html>