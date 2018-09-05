<!DOCTYPE html>
<!-- saved from url=(0089)https://www.eaglerider.cn/%E6%91%A9%E6%89%98%E8%BD%A6%E5%8F%96%E8%BD%A6%E7%99%BB%E8%AE%B0 -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<?php if(isset($_GET["lang"])): ?>
    <title>EagleRider</title>
	<?php endif; ?>
	<?php if(empty($_GET["lang"])): ?>
        <title>飞鹰骑士</title>
	<?php endif; ?>


    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-title" content="EagleRider Motorcycle Rentals">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">

    <meta content="authenticity_token" name="csrf-param">
    <meta content="plD9UK/X3nGuKuGckNVgIHQtb98qGyParWyY7aKrCh4=" name="csrf-token">

    <link rel="shortcut icon" href="https://d1y9jrrtx2baf.cloudfront.net/assets/rentals/layout/favicon-e32d32b2d8dcbc0d4e921a2f74dd32f0.ico">

    <!-- <link rel="profile" href="http://microformats.org/profile/specs" /> -->




    <link href="/public/css/mobile.manifest-973d9a8a05059422a934f5851bf4c381.css" media="all" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/public/DatePicker/WdatePicker.js"></script>
    <link href="/public/DatePicker/skin/WdatePicker.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/public/js/jquery.min.js"></script>

    <style type="text/css">

    </style>



    <!-- Facebook Pixel Code -->

    <noscript>&lt;img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=174748619541263&amp;ev=PageView&amp;noscript=1"
        /&gt;</noscript>
    <!-- End Facebook Pixel Code -->


<body class="zh " id="">
<!-- global content -->
<div class="globalMessages js-notifications">
    <div class="reveal success callout global-notification js-notification js-success" id="global-notification-success" style="display:none;" data-animation-in="fade-in" data-animation-out="fade-out">
        <div class="row">
            <div class="small-11 columns js-message">
                <p></p>
            </div>
            <div class="small-1 columns">
                <button class="close-button js-closeTrigger" data-close="" aria-label="Close modal" type="button">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
    </div>

    <div class="reveal alert callout global-notification js-notification js-alert" id="global-notification-alert" style="display:none;" data-animation-in="fade-in" data-animation-out="fade-out">
        <div class="row">
            <div class="small-11 columns js-message">
                <p></p>
            </div>
            <div class="small-1 columns">
                <button class="close-button js-closeTrigger" data-close="" aria-label="Close modal" type="button">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
    </div>

    <div class="reveal warning callout global-notification js-notification js-warning" id="global-notification-warning" style="display:none;" data-animation-in="fade-in" data-animation-out="fade-out">
        <div class="row">
            <div class="small-11 columns js-message">
                <p></p>
            </div>
            <div class="small-1 columns">
                <button class="close-button js-closeTrigger" data-close="" aria-label="Close modal" type="button">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
    </div>

    <div class="reveal secondary callout global-notification js-info js-notification" id="global-notification-primary" style="display:none;" data-animation-in="fade-in" data-animation-out="fade-out">
        <div class="row">
            <div class="small-11 columns js-message">
                <p></p>
            </div>
            <div class="small-1 columns">
                <button class="close-button js-closeTrigger" data-close="" aria-label="Close modal" type="button">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- main content -->
<div class="main-content">
    <div class="off-canvas-wrapper">
        <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper="">

			<?php if(isset($_GET["lang"])): ?>
                <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas="clvo2e-off-canvas" aria-hidden="true">
                    <div class="title-bar">
                        <div class="title-bar-left">
                            <button class="" aria-label="Close menu" type="button" data-close="">
                                <svg></svg>
                            </button>

                            <span class="title-bar-title er-logo"><a href="">EagleRider</a></span>

                        </div>
                    </div>

                    <!-- Menu -->
                    <ul class="vertical menu" data-accordion-menu="iy92vw-accordion-menu" role="tablist" aria-multiselectable="true">
                        <li role="tab" class="is-accordion-submenu-parent" aria-haspopup="true" aria-expanded="false" aria-label="租赁" aria-controls="rbq2e2-acc-menu" id="xpom0a-acc-menu-link">
                            <a href="/index.php/Rent/mobile_Rent?id=<?php echo 0;?>" tabindex="0">Rent</a>

                            <ul class="menu vertical nested submenu is-accordion-submenu" data-submenu="" aria-hidden="true" role="tabpanel" aria-labelledby="xpom0a-acc-menu-link" id="rbq2e2-acc-menu" style="display: none;">
								<?php foreach ($rent_list as $key=>$rent_lists): ?>
                                    <li role="menuitem" class="is-submenu-item is-accordion-submenu-item">
                                        <a href="/index.php/Rent/mobile_Rent?id=<?php echo $rent_lists['brand_id']?>&&lang=en"><?php echo $rent_lists['product_brand_en']?></a>
                                    </li>
								<?php endforeach; ?>

                                <li role="menuitem" class="is-submenu-item is-accordion-submenu-item"><a href="/index.php/Rent/mobile_Rent?id=<?php echo 0;?>&&lang=en">All the models</a></li>
                            </ul>
                        </li>

                        <li role="tab" class="is-accordion-submenu-parent" aria-haspopup="true" aria-expanded="false" aria-label="摩托车旅游" aria-controls="uoxvpk-acc-menu" id="exqiwo-acc-menu-link">
                            <a href="/index.php/trave/mobile_Trave">Motorcycle tour</a>

                            <ul class="menu vertical nested submenu is-accordion-submenu" data-submenu="" aria-hidden="true" role="tabpanel" aria-labelledby="exqiwo-acc-menu-link" id="uoxvpk-acc-menu" style="display: none;">
                                <li class="list-title is-submenu-item is-accordion-submenu-item" role="menuitem">The team travel</li>

                                <li role="menuitem" class="is-submenu-item is-accordion-submenu-item">
                                    <a href="/index.php/team/mobile_Team?lang=en">
                                        Motorcycle tour
                                    </a>
                                </li>

                            </ul>

                            <ul class="menu vertical nested submenu is-accordion-submenu" data-submenu="" aria-hidden="true" role="tabpanel" aria-labelledby="exqiwo-acc-menu-link" id="uoxvpk-acc-menu" style="display: none;">
                                <li class="list-title is-submenu-item is-accordion-submenu-item" role="menuitem">Road trip</li>

                                <li role="menuitem" class="is-submenu-item is-accordion-submenu-item">
                                    <a href="/index.php/classify/mobile_Classify?lang=en">
                                        Motorcycle trip
                                    </a>
                                </li>
                            </ul>

                            <ul class="menu vertical nested submenu is-accordion-submenu" data-submenu="" aria-hidden="true" role="tabpanel" aria-labelledby="exqiwo-acc-menu-link" id="uoxvpk-acc-menu" style="display: none;">
                                <li class="list-title is-submenu-item is-accordion-submenu-item" role="menuitem">Hot line</li>
                                <li role="menuitem" class="is-submenu-item is-accordion-submenu-item">
                                    <a href="/index.php/hot_trave/mobile_hot_trave?lang=en">
                                        Popular motorcycle Tours
                                    </a>
                                </li>
                            </ul>

                            <ul class="menu vertical nested submenu is-accordion-submenu" data-submenu="" aria-hidden="true" role="tabpanel" aria-labelledby="exqiwo-acc-menu-link" id="uoxvpk-acc-menu" style="display: none;">
                                <li class="list-title is-submenu-item is-accordion-submenu-item" role="menuitem">All travel items</li>

                                <li role="menuitem" class="is-submenu-item is-accordion-submenu-item">
                                    <a href="/index.php/trave/mobile_Trave?lang=en">
                                        Motorcycle tour
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li role="menuitem"><a href="/index.php/Discounts/mobile_Discount?lang=en">Privilege</a></li>
                        <li role="menuitem"><a href="/index.php/Artivity/mobile_Artivity?lang=en">Motorcycle event</a></li>
                        <li role="menuitem"><a href="/index.php/City/mobile_City?lang=en">City</a></li>


                        <li role="menuitem">
                            <a href="/index.php/Reg/mobile_Reg?lang=en">Check in online</a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="small-6 columns">
                            <a class="hollow dark secondary button expanded dropdown currency-btn js-currencies-overlay-trigger">
                                ¥ US
                            </a>
                        </div>

                    </div>
                </div>
			<?php endif; ?>
			<?php if(empty($_GET["lang"])): ?>
                <div class="off-canvas position-left" id="offCanvasLeft" data-off-canvas="clvo2e-off-canvas" aria-hidden="true">
                    <div class="title-bar">
                        <div class="title-bar-left">
                            <button class="" aria-label="Close menu" type="button" data-close="">
                                <svg></svg>
                            </button>

                            <span class="title-bar-title er-logo"><a href="">飞鹰骑士</a></span>

                        </div>
                    </div>

                    <!-- Menu -->
                    <ul class="vertical menu" data-accordion-menu="iy92vw-accordion-menu" role="tablist" aria-multiselectable="true">
                        <li role="tab" class="is-accordion-submenu-parent" aria-haspopup="true" aria-expanded="false" aria-label="租赁" aria-controls="rbq2e2-acc-menu" id="xpom0a-acc-menu-link">
                            <a href="/index.php/Rent/mobile_Rent?id=<?php echo 0;?>" tabindex="0">租赁</a>

                            <ul class="menu vertical nested submenu is-accordion-submenu" data-submenu="" aria-hidden="true" role="tabpanel" aria-labelledby="xpom0a-acc-menu-link" id="rbq2e2-acc-menu" style="display: none;">
								<?php foreach ($rent_list as $key=>$rent_lists): ?>
                                    <li role="menuitem" class="is-submenu-item is-accordion-submenu-item">
                                        <a href="/index.php/Rent/mobile_Rent?id=<?php echo $rent_lists['brand_id']?>"><?php echo $rent_lists['product_brand']?></a>
                                    </li>
								<?php endforeach; ?>

                                <li role="menuitem" class="is-submenu-item is-accordion-submenu-item"><a href="/index.php/Rent/mobile_Rent?id=<?php echo 0;?>">所有车型</a></li>
                            </ul>
                        </li>

                        <li role="tab" class="is-accordion-submenu-parent" aria-haspopup="true" aria-expanded="false" aria-label="摩托车旅游" aria-controls="uoxvpk-acc-menu" id="exqiwo-acc-menu-link">
                            <a href="/index.php/trave/mobile_Trave">摩托车旅游</a>

                            <ul class="menu vertical nested submenu is-accordion-submenu" data-submenu="" aria-hidden="true" role="tabpanel" aria-labelledby="exqiwo-acc-menu-link" id="uoxvpk-acc-menu" style="display: none;">
                                <li class="list-title is-submenu-item is-accordion-submenu-item" role="menuitem">团队旅行</li>

                                <li role="menuitem" class="is-submenu-item is-accordion-submenu-item">
                                    <a href="/index.php/team/mobile_Team">
                                        摩托车团队游
                                    </a>
                                </li>

                            </ul>

                            <ul class="menu vertical nested submenu is-accordion-submenu" data-submenu="" aria-hidden="true" role="tabpanel" aria-labelledby="exqiwo-acc-menu-link" id="uoxvpk-acc-menu" style="display: none;">
                                <li class="list-title is-submenu-item is-accordion-submenu-item" role="menuitem">自驾旅行</li>

                                <li role="menuitem" class="is-submenu-item is-accordion-submenu-item">
                                    <a href="/index.php/classify/mobile_Classify">
                                        摩托车自驾游
                                    </a>
                                </li>
                            </ul>

                            <ul class="menu vertical nested submenu is-accordion-submenu" data-submenu="" aria-hidden="true" role="tabpanel" aria-labelledby="exqiwo-acc-menu-link" id="uoxvpk-acc-menu" style="display: none;">
                                <li class="list-title is-submenu-item is-accordion-submenu-item" role="menuitem">热门路线</li>
                                <li role="menuitem" class="is-submenu-item is-accordion-submenu-item">
                                    <a href="/index.php/hot_trave/mobile_hot_trave">
                                        热门摩托车旅行
                                    </a>
                                </li>
                            </ul>

                            <ul class="menu vertical nested submenu is-accordion-submenu" data-submenu="" aria-hidden="true" role="tabpanel" aria-labelledby="exqiwo-acc-menu-link" id="uoxvpk-acc-menu" style="display: none;">
                                <li class="list-title is-submenu-item is-accordion-submenu-item" role="menuitem">所有旅行项目</li>

                                <li role="menuitem" class="is-submenu-item is-accordion-submenu-item">
                                    <a href="/index.php/trave/mobile_Trave">
                                        摩托车旅游
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li role="menuitem"><a href="/index.php/Discounts/mobile_Discount">促销特惠</a></li>
                        <li role="menuitem"><a href="/index.php/Artivity/mobile_Artivity">摩托车活动</a></li>
                        <li role="menuitem"><a href="/index.php/City/mobile_City">城市</a></li>


                        <li role="menuitem">
                            <a href="/index.php/Reg/mobile_Reg">网上取车登记</a>
                        </li>
                    </ul>
                    <div class="row">
                        <div class="small-6 columns">
                            <a class="hollow dark secondary button expanded dropdown currency-btn js-currencies-overlay-trigger">
                                ¥ CNY
                            </a>
                        </div>


                    </div>
                </div>
			<?php endif; ?>


            <div class="off-canvas-content" data-off-canvas-content="">
                <div class="title-bar sticky er-bar">
                    <div class="title-bar-left">
                        <button class="menu-icon" type="button" data-open="offCanvasLeft" aria-expanded="false" aria-controls="offCanvasLeft"></button>
						<?php if(isset($_GET["lang"])): ?>
                            <a href="" class="title-bar-title er-logo">EagleRider</a>
						<?php endif; ?>
						<?php if(empty($_GET["lang"])): ?>
                            <a href="" class="title-bar-title er-logo">飞鹰骑士</a>
						<?php endif; ?>
                    </div>

                </div>

                <div class="js-page">
                    <div class="page-bg">


                        <div class="loader js-loader" style="display:none;">
                            <span><img src="/public/image/loader-683193c67c1fad25d991381a4628bc0e.gif"></span>
                        </div>
                        <header class="page-header flat-header">
                            <div class="row">
                                <div class="small-12 columns ">
									<?php if(isset($_GET["lang"])): ?>
                                    <h3>Quick pickup registration</h3>
									<?php endif; ?>
									<?php if(empty($_GET["lang"])): ?>
                                        <h3>快速取车登记</h3>
									<?php endif; ?>

                                </div>
                            </div>
                        </header>
                        <div class="clearfix"></div>
                        <div class="box-container no-margin">
                            <div class="row js-main-container">
                                <div class="small-12 columns">
                                    <div class="paragraph js-checkin-intro">
										<?php if(isset($_GET["lang"])): ?>
                                        <p>Online pickup registration can save you a lot of time when you pick up your car，Let you start your road trip in the shortest possible time！（"Notice：You still need to show your driver's license when you pick up the car"）</p>
										<?php endif; ?>
										<?php if(empty($_GET["lang"])): ?>
                                            <p>网上取车登记可以为您在取车时省去很多时间，让您在最短的时间内开始您的公路越野旅程！（"注意：取车时您还是需要出示您的驾照"）</p>
										<?php endif; ?>

                                    </div>
                                </div>

                                <div class="js-checkin_form">
                                    <div class="js-lookup">
                                        <form action="/index.php/Reg/add" method="Post">

                                            <div class="small-12 columns">
                                                <div class="input-field">
                                                    <input id="first-name" type="text" value="" name="name" required="">
													<?php if(isset($_GET["lang"])): ?>
                                                    <label for="first-name">name <span class="text-danger">*</span> </label>
													<?php endif; ?>
													<?php if(empty($_GET["lang"])): ?>
                                                        <label for="first-name">姓名 <span class="text-danger">*</span> </label>
													<?php endif; ?>

                                                </div>
                                            </div>

                                            <div class="small-12 columns">
                                                <div class="input-field">
                                                    <input id="last-name" type="text" value="" name="tel" required="">
													<?php if(isset($_GET["lang"])): ?>
                                                        <label for="last-tel">Tel <span class="text-danger">*</span> </label>
													<?php endif; ?>
													<?php if(empty($_GET["lang"])): ?>
                                                        <label for="last-name">联系方式 <span class="text-danger">*</span> </label>
													<?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="small-12 columns">
                                                <div class="input-field">
                                                    <input id="last-name" type="text" value="" name="title" required="">
													<?php if(isset($_GET["lang"])): ?>
                                                        <label for="last-name">Rent bikes <span class="text-danger">*</span> </label>
													<?php endif; ?>
													<?php if(empty($_GET["lang"])): ?>
                                                        <label for="last-name">租赁摩托 <span class="text-danger">*</span> </label>
													<?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="small-12 columns">
                                                <div class="input-field">
                                                    <input id="last-name" type="text" value="" name="num" required="">
													<?php if(isset($_GET["lang"])): ?>
                                                        <label for="last-name">Rent number <span class="text-danger">*</span> </label>
													<?php endif; ?>
													<?php if(empty($_GET["lang"])): ?>
                                                        <label for="last-name">租赁数量 <span class="text-danger">*</span> </label>
													<?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="small-12 columns">
                                                <div class="input-field">
                                                    <input id="last-name" type="text" value="" name="travel" required="">
													<?php if(isset($_GET["lang"])): ?>
                                                        <label for="last-name">Travel packages <span class="text-danger">*</span> </label>
													<?php endif; ?>
													<?php if(empty($_GET["lang"])): ?>
                                                        <label for="last-name">旅游套餐 <span class="text-danger">*</span> </label>
													<?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="small-12 columns">
                                                <div class="input-field">
                                                    <input type="text" id="pickup-location" class=" js-pickupLocName" required="" name="star_city">
													<?php if(isset($_GET["lang"])): ?>
                                                    <label for="pickup-location"> Pick-Up City <span class="text-danger">*</span> </label>
													<?php endif; ?>
													<?php if(empty($_GET["lang"])): ?>
                                                        <label for="pickup-location"> 提车城市 <span class="text-danger">*</span> </label>
													<?php endif; ?>

                                                    <input type="hidden" name="lookup[pickup_location_code]" class="js-pickupLocCode" data-fieldtype="pickup_location">
                                                </div>
                                            </div>

                                            <div class="small-12 columns">
                                                <div class="input-field">
                                                    <input type="text" id="pickup-location" class=" js-pickupLocName" required="" name="end_city">
													<?php if(isset($_GET["lang"])): ?>
                                                        <label for="pickup-location"> Car city <span class="text-danger">*</span> </label>
													<?php endif; ?>
													<?php if(empty($_GET["lang"])): ?>
                                                        <label for="pickup-location"> 还车城市 <span class="text-danger">*</span> </label>
													<?php endif; ?>

                                                    <input type="hidden" name="lookup[pickup_location_code]" class="js-pickupLocCode" data-fieldtype="pickup_location">
                                                </div>
                                            </div>

                                            <div class="small-12 columns">
                                                <div class="input-field">
													<?php if(isset($_GET["lang"])): ?>
                                                        <label for="last-name">collection time <span class="text-danger">*</span> </label>
													<?php endif; ?>
													<?php if(empty($_GET["lang"])): ?>
                                                        <label for="last-name">取车时间 <span class="text-danger">*</span> </label>
                                                        <input name="star_time" class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="">
													<?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="small-12 columns">
                                                <div class="input-field">
                                                    <input name="end_time" class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="">
													<?php if(isset($_GET["lang"])): ?>
                                                        <label for="last-name">Car time <span class="text-danger">*</span> </label>
													<?php endif; ?>
													<?php if(empty($_GET["lang"])): ?>
                                                        <label for="last-name">还车时间 <span class="text-danger">*</span> </label>
													<?php endif; ?>
                                                </div>
                                            </div>

                                            <div class="small-12 columns">
                                                <div class="input-field ">
                                                    <i class="material-icons prefix js-dateTrigger">
                                                        <svg></svg>
                                                    </i>

                                                </div>
                                            </div>

                                            <div class="small-12 columns">
												<?php if(isset($_GET["lang"])): ?>
                                                <input type="submit" value="submit " class="button expanded">
												<?php endif; ?>
												<?php if(empty($_GET["lang"])): ?>
                                                    <input type="submit" value="提交" class="button expanded">
												<?php endif; ?>

                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <footer class="footer-container js-footer">

                    <div class="row">
                        <div class="small-6 columns">
							<?php if(isset($_GET["lang"])): ?>
                                <a class="hollow dark secondary button expanded dropdown currency-btn js-currencies-overlay-trigger">
                                    ¥ US
                                </a>
							<?php endif; ?>
							<?php if(empty($_GET["lang"])): ?>
                                <a class="hollow dark secondary button expanded dropdown currency-btn js-currencies-overlay-trigger">
                                    ¥ CNY
                                </a>
							<?php endif; ?>
                        </div>

                        <div class="small-6 columns">
                            <button class="hollow dark secondary button expanded dropdown js-current text-center" type="button" data-toggle="localizations" aria-controls="localizations" aria-haspopup="true" tabindex="0">
								<?php if(isset($_GET["lang"])): ?>
                                    <span>US</span>
								<?php endif; ?>
								<?php if(empty($_GET["lang"])): ?>
                                    <span>CNY</span>
								<?php endif; ?>

                            </button>
                        </div>
                    </div>


                    <div class="row">
                        <div class="small-12 columns text-center">
                            <a class="footer-logo" href="/">
                                <img class="logo" src="<?php echo $bottom_info_all[7]['image']?>" alt="ER logo">
                            </a>
							<?php if(isset($_GET["lang"])): ?>
                                <p class="copyright"> <?php echo $bottom_info_all[7]['title_en']?></p>
							<?php endif; ?>
							<?php if(empty($_GET["lang"])): ?>
                                <p class="copyright"> <?php echo $bottom_info_all[7]['title']?></p>
							<?php endif; ?>
                        </div>
                    </div>

					<?php if(isset($_GET["lang"])): ?>
                        <div class="sub-footer text-center">
                            <h5>Information</h5>
							<?php foreach ($bottom_info as $key=>$bottom_infos): ?>
                                <a href="/index.php/Bottom_info/mobile_Bottom_info?lang=en"><?php echo $bottom_infos['title_en']?></a>
							<?php endforeach; ?>

                        </div>
					<?php endif; ?>
					<?php if(empty($_GET["lang"])): ?>
                        <div class="sub-footer text-center">
                            <h5>Information</h5>
							<?php foreach ($bottom_info as $key=>$bottom_infos): ?>
                                <a href="/index.php/Bottom_info/mobile_Bottom_info"><?php echo $bottom_infos['title']?></a>
							<?php endforeach; ?>

                        </div>
					<?php endif; ?>
                </footer>




                <div class="js-off-canvas-exit"></div></div>
        </div>
    </div>
</div>

<div style="display:none;" class="js-routes">
    <a rel="nofollow" class="js-changeLayoutUrl" href="https://www.eaglerider.cn/layouts/change"></a>
    <a rel="nofollow" class="js-changeCurrencyPath" href="https://www.eaglerider.cn/currencies/change"></a>
    <a rel="nofollow" class="js-changeCountryPath" href="https://www.eaglerider.cn/countries/change"></a>
    <a rel="nofollow" class="js-currenciesPath" href="https://www.eaglerider.cn/currencies"></a>
    <a rel="nofollow" class="js-authenticationPath" href="https://www.eaglerider.cn/authentication"></a>

    <a rel="nofollow" class="js-review_vote_path" href="https://www.eaglerider.cn/reviews/:id/vote"></a>
</div>

<div class="spinner-page-container js-spinner hide">
    <div class="spinner-logo">
        <img src="/public/image/dark-logo-c37a2b585e79e2791f702253eb5c8e9b.png">
    </div>
    <div class="loader">Loading...</div>
</div>

<div class="search-overlay static-layer js-customSelectOverlay" data-closable="slide-out-left" style="display:none">
    <header>
        <div class="row">
            <div class="small-1 columns">
                <button class="close-button" data-close="" aria-label="Close reveal" type="button">
                    <svg class="float-left"></svg>
                </button>
            </div>

            <div class="small-11 columns">
                <div class="input-field small-height">
                    <input type="text" id="custom-select-overlay-input" class="autocomplete js-input" placeholder="Search">

                </div>
            </div>
        </div>
    </header>

    <ul class="vertical menu js-selections"></ul>
</div>

<script src="/public/js/mobile-v2.manifest-822d5f186b5fcedcef7c5daea7444d89.js" type="text/javascript"></script>
<script src="/public/js/zh-7d477c2a1ef42b4075b664a879040365.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="https://d1y9jrrtx2baf.cloudfront.net/assets/libs/html5shiv-df17c62dd7eff08caf9d67c7d0eccdf6.js" type="text/javascript"></script>
<![endif]-->
<script src="/public/js/jquery.serialize-object-4692e275976f4a572042de64550ee7b4.js" type="text/javascript"></script>
<script src="/public/js/mobile_motorcycle_check_ins-e66b3aacb635bb8b8a2d1b9782ca00c4.js" type="text/javascript"></script>

<script type="text/javascript">
	if (window.onLibrariesLoad)
		window.onLibrariesLoad();

	$(document).ready(function(){
		ER.Layout.onDomLoad({
			loggedIn: false,
			widgetDateFormat: 'yy/mm/dd',
			current_language_code: 'zh',
			href_languages: [{"language_code":"en","language_route":"https://www.eaglerider.com/motorcycle-check-in"},{"language_code":"de","language_route":"https://www.eaglerider.com/motorrad-mieten/motorrad-registrierung"},{"language_code":"fr","language_route":"https://www.eaglerider.com/location-moto/moto-registre"},{"language_code":"es","language_route":"https://www.eaglerider.com/alquiler-de-motos/moto-check-in"},{"language_code":"nl","language_route":"https://www.eaglerider.com/motorverhuur/motorfiets-registratie"},{"language_code":"it","language_route":"https://www.eaglerider.com/noleggio-moto/moto-di-registrazione"},{"language_code":"pt","language_route":"https://www.eaglerider.com/aluguel-de-motos/verificacao-de-moto"},{"language_code":"zh","language_route":"https://www.eaglerider.cn/\u6469\u6258\u8f66\u53d6\u8f66\u767b\u8bb0"},{"language_code":"ru","language_route":"https://www.eaglerider.com/ru/p\u0435\u0433\u0438\u0441\u0442\u0440\u0430\u0446\u0438\u044f"},{"language_code":"ar","language_route":"https://www.eaglerider.com/ar/\u062a\u0633\u062c\u064a\u0644-\u0627\u0644\u062f\u0631\u0627\u062c\u0629-\u0627\u0644\u0646\u0627\u0631\u064a\u0629"},{"language_code":"ko","language_route":"https://www.eaglerider.com/ko/\uccb4\ud06c\uc778"},{"language_code":"sv","language_route":"https://www.eaglerider.com/sv/incheckning"},{"language_code":"no","language_route":"https://www.eaglerider.com/motorsykkelleie/innsjekking"},{"language_code":"da","language_route":"https://www.eaglerider.com/motorcykeludlejninger/check-in"},{"language_code":"ja","language_route":"https://www.eaglerider.com/ja/\u30c1\u30a7\u30c3\u30af\u30a4\u30f3"}],
			enableCaptcha: true
		});

		if (window.onDomLoadFN){
			window.onDomLoadFN();
		}

		$('.js-openAuthenticationForm').click(function(){
			$('.js-authenticationForm').show();
			Materialize.updateTextFields();
		});
		Materialize.updateTextFields();
		ER.MobileMotorcycleCheckIns.init({
			buttonImage: 'https://d1y9jrrtx2baf.cloudfront.net/assets/mobile/pages/inner/icn-date-7ff64804daa3fd29adf714390d063ca3.png'
		});


		ER.Layout.hideSpinner();
		ER.Notifications.init();

		var footer = $('.js-footer');
		var dealsSubscriptionContainer = footer.find('.js-dealsSubscriptionContainer');
		new ER.Subscribe(dealsSubscriptionContainer);
	});

	$(window).load(function(){
		ER.Layout.onWindowLoad();

		if (window.onPageLoadFN){
			window.onPageLoadFN();
		}

	});
</script>

<script type="text/javascript">
	window.captchaLoaded = false;
</script>
<script src="/public/js/api.js" async="" defer=""></script>
<script type="text/javascript">
	var onloadCallback = function() {
		window.captchaLoaded = true;
	};
</script>


<!-- Google Code for Remarketing Tag -->
<script type="text/javascript">
	/* <![CDATA[ */
	var google_conversion_id = 1072428558;
	var google_custom_params = window.google_tag_params;
	var google_remarketing_only = true;
	/* ]]> */
</script>
<div style="display:none">
    <script type="text/javascript" src="/public/js/conversion.js"></script>
</div>
<noscript>
    &lt;div style="display:inline;"&gt;
    &lt;img height="1" width="1" style="border-style:none;" alt=""
    src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1072428558/?value=0&amp;amp;guid=ON&amp;amp;script=0"/&gt;
    &lt;/div&gt;
</noscript>

<script type="text/javascript">
	var _learnq = _learnq || [];

	_learnq.push(['account', 'hDRdau']);

	(function () {
		var b = document.createElement('script'); b.type = 'text/javascript'; b.async = true;
		b.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'a.klaviyo.com/media/js/analytics/analytics.js';
		var a = document.getElementsByTagName('script')[0]; a.parentNode.insertBefore(b, a);
	})();
</script>

<div class="hiddendiv common"></div><div class="reveal-overlay"><div class="reveal" id="forgetPassword" data-reveal="gjkuuj-reveal" role="dialog" aria-hidden="true" data-yeti-box="forgetPassword" data-resize="forgetPassword">
        <div class="row">
            <h1 class="small-12 columns roboto">忘记密码？</h1>
            <p class="small-12 columns">No worries, enter your email address and we’ll help you choose a new password.</p>
        </div>

        <form accept-charset="UTF-8" action="https://www.eaglerider.cn/users/password" class="new_user" id="new_user" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="plD9UK/X3nGuKuGckNVgIHQtb98qGyParWyY7aKrCh4="></div>
            <button class="close-button" data-close="" aria-label="Close reveal" type="button">
                <span aria-hidden="true">×</span>
            </button>

            <div class="row">
                <div class="small-12 columns">
                    <div class="input-field ">
                        <input autofocus="autofocus" class="global-reset-password-email" id="user_email" name="user[email]" size="30" type="text">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="small-12 columns text-right">
                    <a class="flat secondary button " data-close="" aria-label="Close reveal">取消</a>
                    <input type="submit" value="重置密码" class="global-reset-password-submit pull-right button">
                </div>
            </div>
        </form></div></div>
<div class="reveal-overlay"><div class="tiny reveal" id="phonesNumbers" data-reveal="t5oj9g-reveal" role="dialog" aria-hidden="true" data-yeti-box="phonesNumbers" data-resize="phonesNumbers">
        <ul class="vertical menu">
            <li><a href="tel:+1 310-321-3180">+1 310-321-3180</a></li>
        </ul>
        <button class="close-button" data-close="" aria-label="Close reveal" type="button">
            <span aria-hidden="true">×</span>
        </button>
    </div></div><div class="reveal-overlay"><div class="reveal" id="privacyPolicy" data-reveal="zpful6-reveal" role="dialog" aria-hidden="true" data-yeti-box="privacyPolicy" data-resize="privacyPolicy">
        <h3>EagleRider Privacy Policy</h3>

        <p class="lead">Yes! Please sign me up to receive the EagleRider newsletter and other emails and communications from EagleRider. By providing my personal information, I am consenting to its use and disclosure in accordance with EagleRider’s Privacy Policy. I further consent to its use to serve targeted ads to me including via social media. I understand that I may withdraw my consent and unsubscribe from receiving future communications at any time. Consent is being sought by EagleRider.</p>

        <button class="close-button" data-close="" aria-label="Close reveal" type="button">
            <span aria-hidden="true">×</span>
        </button>
    </div></div><div class="full reveal search-overlay countries-list-overlay js-countriesContainer without-overlay" data-v-offset="0px" data-animation-in="slide-in-up" data-animation-out="slide-out-down" id="localizations" data-reveal="tuzhep-reveal" role="dialog" aria-hidden="true" data-yeti-box="localizations" data-resize="localizations">
    <header>
        <div class="row">
            <div class="small-2 columns">
                <button class="close-button" data-close="" aria-label="Close reveal" type="button">
                    <svg class="float-left"></svg>
                </button>
            </div>
            <div class="small-10 columns">
                <h3>选择您的语言</h3>
            </div>
        </div>
    </header>

    <ul class="countries-list  js-custom js-countriesSelect">
        <li class="en" style="line-height: 45px;">English</li>
        <li class="cn" style="line-height: 45px;">Chinese</li>

    </ul>
    <script>
		$('.en').click(function() {
			var url = window.location.href;
			window.location.href=url+'?lang=en';
		});
		$('.cn').click(function() {
			window.location.href='/index.php/Reg/mobile_Reg';
		});
    </script>
</div><div style="visibility: hidden; position: absolute; width:100%; top: -10000px; left: 0px; right: 0px; transition: visibility 0s linear 0.3s, opacity 0.3s linear; opacity: 0;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: #fff; opacity: 0.5;  filter: alpha(opacity=50)"></div><div style="margin: 0 auto; top: 0px; left: 0px; right: 0px; position: absolute; border: 1px solid #ccc; z-index: 2000000000; background-color: #fff; overflow: hidden;"><iframe title="recaptcha 验证" src="" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" name="m2f74z78crxu" style="width: 100%; height: 100%;"></iframe></div></div></body></html>