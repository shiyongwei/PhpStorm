<!DOCTYPE html>
<!-- saved from url=(0040)https://www.eaglerider.cn/harley-rentals -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>哈雷租赁</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-title" content="EagleRider Motorcycle Rentals">
	<meta name="description" content="EagleRider is the largest Harley-Davidson rentals company worldwide. We rent all types of new model Harleys at the guaranteed lowest rates!">
	<meta name="keywords" content="motorcycle rentals, harley tours, harley rentals, motorcycle tours, honda rentals, bmw rentals, guided tours, bike rentals, motorcycle sales, harley used sales, certified harley sales, used motorcycle sales">

	<meta content="authenticity_token" name="csrf-param">
	<meta content="plD9UK/X3nGuKuGckNVgIHQtb98qGyParWyY7aKrCh4=" name="csrf-token">

	<link rel="shortcut icon" href="https://d1y9jrrtx2baf.cloudfront.net/assets/rentals/layout/favicon-e32d32b2d8dcbc0d4e921a2f74dd32f0.ico">

	<!-- <link rel="profile" href="http://microformats.org/profile/specs" /> -->





	<link href="/public/css/mobile.manifest-973d9a8a05059422a934f5851bf4c381.css" media="all" rel="stylesheet" type="text/css">

	<!-- Facebook Pixel Code -->

	<noscript>&lt;img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=174748619541263&amp;ev=PageView&amp;noscript=1"
		/&gt;</noscript>
	<!-- End Facebook Pixel Code -->
	<!--<script src="./rent_files/saved_resource"></script><meta class="foundation-mq"></head>-->

<body class="zh locations rentalListing inner" id="">
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

					<div class="title-bar-right">
						<button class="js-openAuthenticationForm" type="button" data-open="offCanvasRight" aria-expanded="false" aria-controls="offCanvasRight">
							<svg></svg>
						</button>
					</div>
				</div>

				<div class="js-page">

					<div class="reservation  have-small-hd  ">
						<header class="page-header sticky is-stuck" style="width:100%;">
							<?php if(isset($_GET["lang"])): ?>
							<ul class="vertical menu" data-accordion-menu="xju952-accordion-menu" role="tablist" aria-multiselectable="true">
								<li style="text-align: right;padding-right: 20px;" role="tab" class="is-accordion-submenu-parent" aria-haspopup="true" aria-expanded="false" aria-label="" aria-controls="1h25nj-acc-menu" id="7wi5c6-acc-menu-link">
									<b><?php echo count($list);?></b> Existing motorcycle models
								</li>
							</ul>
							<?php endif; ?>
							<?php if(empty($_GET["lang"])): ?>
                                <ul class="vertical menu" data-accordion-menu="xju952-accordion-menu" role="tablist" aria-multiselectable="true">
                                    <li style="text-align: right;padding-right: 20px;" role="tab" class="is-accordion-submenu-parent" aria-haspopup="true" aria-expanded="false" aria-label="" aria-controls="1h25nj-acc-menu" id="7wi5c6-acc-menu-link">
                                        <b><?php echo count($list);?></b> 现有摩托车车型
                                    </li>
                                </ul>
							<?php endif; ?>

						</header>

						<div class="clearfix"></div>


						<div class="row">
							<div class="small-12 columns">
								<?php if(isset($_GET["lang"])): ?>
                                    <?php foreach ($list as $key=>$lists): ?>
                                    <div class="card vehicle-card ">
                                        <div class="row js-vehicle-info-container">
                                            <div class="small-10 columns">
                                                <input type="hidden" value="277" class="js-vehicle-id">
                                                <h4 class="js-vehicle-name"><?php echo $lists['productitle_en']?></h4>
                                                <span class="js-vehicle-class-name">Travel brand</span>
                                            </div>
                                            <div class="small-2 columns">
                                                <a class="activator reveal-triger js-reveal-triger">
                                                    <svg></svg>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="card-image js-vehicle-image-container">
                                            <a href="">
                                                <img class="activator js-vehicle-image" src="<?php echo $lists['image']?>">
                                            </a>
                                        </div>


                                        <div class="card-content">
                                            <ul class="menu align-left">
                                            </ul>
                                        </div>
                                        <a class="button expanded js-reveal-widget" data-toggle="widget-modal" aria-controls="widget-modal" aria-haspopup="true" tabindex="0">
                                            Book now
                                        </a>
                                        <div class="vehicle-reveal js-card-reveal fast">
                                            <div class="row">
                                                <div class="small-10 columns">
                                                    <h4 class="card-title"><?php echo $lists['productitle_en']?></h4>
                                                    <span class="class-mame">Travel brand</span>
                                                </div>

                                                <div class="small-2 columns">
                                                    <a class="activator reveal-triger close js-revealClose-triger">
                                                        <svg></svg>
                                                    </a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="card-content">
                                                <ul class="menu vertical">
                                                    <li>
                                                        Engine
                                                        <span class="float-right"><?php echo $lists['productitle_en']?></span>
                                                    </li>
                                                    <li>
                                                        Bore×Route
                                                        <span class="float-right"><?php echo $lists['stroke_en']?></span>
                                                    </li>
                                                    <li>
                                                        Displacement
                                                        <span class="float-right"><?php echo $lists['displacement_en']?></span>
                                                    </li>
                                                    <li>
                                                        Brake（front）
                                                        <span class="float-right"><?php echo $lists['fronttire_en']?></span>
                                                    </li>
                                                    <li>
                                                        Brake（rear）
                                                        <span class="float-right"><?php echo $lists['rearbrake_en']?></span>
                                                    </li>
                                                    <li>
                                                        Length
                                                        <span class="float-right"><?php echo $lists['seatheight_en']?></span>
                                                    </li>
                                                    <li>
                                                        Tyre（rear）
                                                        <span class="float-right"><?php echo $lists['reartyre_en']?></span>
                                                    </li>
                                                    <li>
                                                        Fuel tank volume
                                                        <span class="float-right"><?php echo $lists['capacity_en']?></span>
                                                    </li>
                                                    <li>
                                                        Windscreen
                                                        <span class="float-right"><?php echo $lists['windshield_en']?></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="card-footer"><a class="button expanded js-reserveTrigger">
                                                    Book now
                                                </a></div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
								<?php endif; ?>
								<?php if(empty($_GET["lang"])): ?>
									<?php foreach ($list as $key=>$lists): ?>
                                        <div class="card vehicle-card ">
                                            <div class="row js-vehicle-info-container">
                                                <div class="small-10 columns">
                                                    <input type="hidden" value="277" class="js-vehicle-id">
                                                    <h4 class="js-vehicle-name"><?php echo $lists['productitle']?></h4>
                                                    <span class="js-vehicle-class-name">旅行车系</span>
                                                </div>
                                                <div class="small-2 columns">
                                                    <a class="activator reveal-triger js-reveal-triger">
                                                        <svg></svg>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="card-image js-vehicle-image-container">
                                                <a href="">
                                                    <img class="activator js-vehicle-image" src="<?php echo $lists['image']?>">
                                                </a>
                                            </div>


                                            <div class="card-content">
                                                <ul class="menu align-left">
                                                </ul>
                                            </div>
                                            <a class="button expanded js-reveal-widget" data-toggle="widget-modal" aria-controls="widget-modal" aria-haspopup="true" tabindex="0">
                                                立即预订
                                            </a>
                                            <div class="vehicle-reveal js-card-reveal fast">
                                                <div class="row">
                                                    <div class="small-10 columns">
                                                        <h4 class="card-title"><?php echo $lists['productitle']?></h4>
                                                        <span class="class-mame">旅行车系</span>
                                                    </div>

                                                    <div class="small-2 columns">
                                                        <a class="activator reveal-triger close js-revealClose-triger">
                                                            <svg></svg>
                                                        </a>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="card-content">
                                                    <ul class="menu vertical">
                                                        <li>
                                                            发动机
                                                            <span class="float-right"><?php echo $lists['productitle']?></span>
                                                        </li>
                                                        <li>
                                                            内径×行程
                                                            <span class="float-right"><?php echo $lists['stroke']?></span>
                                                        </li>
                                                        <li>
                                                            排量
                                                            <span class="float-right"><?php echo $lists['displacement']?></span>
                                                        </li>
                                                        <li>
                                                            制动器（前）
                                                            <span class="float-right"><?php echo $lists['fronttire']?></span>
                                                        </li>
                                                        <li>
                                                            制动器（后）
                                                            <span class="float-right"><?php echo $lists['rearbrake']?></span>
                                                        </li>
                                                        <li>
                                                            长度
                                                            <span class="float-right"><?php echo $lists['seatheight']?></span>
                                                        </li>
                                                        <li>
                                                            轮胎（后）
                                                            <span class="float-right"><?php echo $lists['reartyre']?></span>
                                                        </li>
                                                        <li>
                                                            油箱容量
                                                            <span class="float-right"><?php echo $lists['capacity']?></span>
                                                        </li>
                                                        <li>
                                                            挡风玻璃
                                                            <span class="float-right"><?php echo $lists['windshield']?></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-footer"><a class="button expanded js-reserveTrigger">
                                                        立即预订
                                                    </a></div>
                                            </div>
                                        </div>
									<?php endforeach; ?>
								<?php endif; ?>

							</div>
						</div>

					</div>


					<script type="text/javascript">
						window.onDomLoadFN = function(){
							$('.js-reveal-widget').click(function(){
								var parent = $(this).parent();
								var vehicle_info_container = parent.children('.js-vehicle-info-container').children('.small-10');
								var vehicle_image_container = parent.children('.js-vehicle-image-container').children();
								var vehicle_name = vehicle_info_container.find('.js-vehicle-name').html();
								var vehicle_class_name = vehicle_info_container.find('.js-vehicle-class-name').html();
								var vehicle_id = vehicle_info_container.find('.js-vehicle-id').val();
								var vehicle_image = vehicle_image_container.children('img').clone();
								$('.js-overlay-vehicle-name').html(vehicle_name);
								$('.js-overlay-vehicle-class').html(vehicle_class_name);
								$('.js-overlay-vehicle-image').html(vehicle_image);
								var form = $('.js-reservationFormContainer').find('form');
								$('<input>').attr({
									type: 'hidden',
									name: 'reservation[vehicle_model_id]',
									value: vehicle_id
								}).appendTo(form);
							})

							$(".js-reveal-triger").click(function(){
								var thisReveal = $(this).closest(".vehicle-card").children('.js-card-reveal');
								MotionUI.animateIn(thisReveal, 'hinge-in-from-middle-y');
							});
							$(".js-revealClose-triger").click(function(){
								var thisRevealClose = $(this).closest(".js-card-reveal");
								MotionUI.animateOut(thisRevealClose, 'hinge-out-from-middle-y');
							});

							$('.js-reserveTrigger').click(function(){
								$(this).closest(".vehicle-card").children('.js-reveal-widget').click();
							});

							new ER.ReservationWidget.RentalTab($(document), {"reservation_type_id":1,"pickupMinDate":"07/03/2018","pickupMaxDate":"07/03/2021","dropoffMinDate":"07/03/2018","dropoffMaxDate":"07/03/2021","pickupWeekDays":false,"dropoffWeekDays":false});
							$(".js-widget").removeClass('collapsed').addClass('expanded');
						}
					</script>
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

                    </div>

                    <div class="row">
                        <div class="small-12 columns text-center">
                            <a class="footer-logo" href="">
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
                                <a href="/index.php/Bottom_info/mobile_Bottom_info"><?php echo $bottom_infos['title_en']?></a>
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

<script src="/public/js/combined_widget.manifest-c44f36432af0d581ea7928ad16f8103c.js" type="text/javascript"></script>
<script src="/public/js/reservation_widget_scroll-6b323eb38a90ab7b37811d799c8d3583.js" type="text/javascript"></script>
<script src="/public/js/specs_overlay-751dc3b41203fc5a6940e61913bbd47d.js" type="text/javascript"></script>
<script src="/public/js/reservation_widget.manifest-758ffe312a49b213f53c933a1562087e.js" type="text/javascript"></script>
<script type="text/javascript">
	if (window.onLibrariesLoad)
		window.onLibrariesLoad();

	$(document).ready(function(){
		ER.Layout.onDomLoad({
			loggedIn: false,
			widgetDateFormat: 'yy/mm/dd',
			current_language_code: 'zh',
			href_languages: [{"language_code":"en","language_route":"https://www.eaglerider.com/harley-rentals"},{"language_code":"de","language_route":"https://www.eaglerider.com/motorrad-mieten/harley-mieten"},{"language_code":"fr","language_route":"https://www.eaglerider.com/location-moto/location-harley"},{"language_code":"es","language_route":"https://www.eaglerider.com/alquiler-de-motos/alquiler-harley-davidson"},{"language_code":"nl","language_route":"https://www.eaglerider.com/motorverhuur/harley-davidson-huren"},{"language_code":"it","language_route":"https://www.eaglerider.com/noleggio-moto/noleggio-harley-davidson"},{"language_code":"pt","language_route":"https://www.eaglerider.com/aluguel-de-motos/aluguel-de-harley-davidson"},{"language_code":"zh","language_route":"https://www.eaglerider.cn/harley-rentals"},{"language_code":"ru","language_route":"https://www.eaglerider.com/ru/harley-rentals"},{"language_code":"ar","language_route":"https://www.eaglerider.com/ar/harley-\u062a\u0623\u062c\u064a\u0631\u0627\u062a"},{"language_code":"ko","language_route":"https://www.eaglerider.com/ko/harley-rentals"},{"language_code":"sv","language_route":"https://www.eaglerider.com/sv/harley-rentals"},{"language_code":"no","language_route":"https://www.eaglerider.com/motorsykkelleie/harley-rentals"},{"language_code":"da","language_route":"https://www.eaglerider.com/motorcykeludlejninger/harley-rentals"},{"language_code":"ja","language_route":"https://www.eaglerider.com/ja/harley-rentals"}],
			enableCaptcha: true
		});

		if (window.onDomLoadFN){
			window.onDomLoadFN();
		}

		$('.js-openAuthenticationForm').click(function(){
			$('.js-authenticationForm').show();
			Materialize.updateTextFields();
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
	<script type="text/javascript" src="/public/js/conversion.js"></script><iframe name="google_cookie_match_frame" title="Google cookie match frame" width="1" height="1" src="" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" style="display:none" scrolling="no"></iframe>
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

<div class="hiddendiv common"></div><div class="reveal-overlay"><div class="reveal" id="forgetPassword" data-reveal="yxfrgq-reveal" role="dialog" aria-hidden="true" data-yeti-box="forgetPassword" data-resize="forgetPassword">
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
<div class="full reveal js-widget-overlay widget-overlay without-overlay" data-v-offset="0px" data-animation-in="slide-in-down " data-animation-out="slide-out-down " id="widget-modal" data-reveal="qkl746-reveal" role="dialog" aria-hidden="true" data-yeti-box="widget-modal" data-resize="widget-modal">
	<header>
		<div class="row">
			<div class="small-10 columns">
				<?php if(isset($_GET["lang"])): ?>
				<h3>Start your adventure</h3>
				<?php endif; ?>
				<?php if(empty($_GET["lang"])): ?>
                    <h3>开始您的冒险旅程吧</h3>
				<?php endif; ?>
			</div>
		</div>
	</header>
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

								<?php if(isset($_GET["lang"])): ?>
                                    <label for="last-name">Rent bikes <span class="text-danger">*</span> </label>
								<?php endif; ?>
								<?php if(empty($_GET["lang"])): ?>
                                    <label for="last-name">租赁摩托 <span class="text-danger">*</span> </label>
								<?php endif; ?>
                                <input id="rent_title" type="text" value="" name="title" required="">
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
                                <input name="star_time" class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})" value="">
								<?php if(isset($_GET["lang"])): ?>
                                    <label for="last-name">collection time <span class="text-danger">*</span> </label>
								<?php endif; ?>
								<?php if(empty($_GET["lang"])): ?>
                                    <label for="last-name">取车时间 <span class="text-danger">*</span> </label>
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

</div><div class="reveal-overlay"><div class="tiny reveal" id="phonesNumbers" data-reveal="zsogcr-reveal" role="dialog" aria-hidden="true" data-yeti-box="phonesNumbers" data-resize="phonesNumbers">
		<ul class="vertical menu">
			<li><a href="tel:+1 310-321-3180">+1 310-321-3180</a></li>
		</ul>
		<button class="close-button" data-close="" aria-label="Close reveal" type="button">
			<span aria-hidden="true">×</span>
		</button>
	</div></div><div class="reveal-overlay"><div class="reveal" id="privacyPolicy" data-reveal="ld8mr1-reveal" role="dialog" aria-hidden="true" data-yeti-box="privacyPolicy" data-resize="privacyPolicy">
		<h3>EagleRider Privacy Policy</h3>

		<p class="lead">Yes! Please sign me up to receive the EagleRider newsletter and other emails and communications from EagleRider. By providing my personal information, I am consenting to its use and disclosure in accordance with EagleRider’s Privacy Policy. I further consent to its use to serve targeted ads to me including via social media. I understand that I may withdraw my consent and unsubscribe from receiving future communications at any time. Consent is being sought by EagleRider.</p>

		<button class="close-button" data-close="" aria-label="Close reveal" type="button">
			<span aria-hidden="true">×</span>
		</button>
	</div></div><div class="full reveal search-overlay countries-list-overlay js-countriesContainer without-overlay" data-v-offset="0px" data-animation-in="slide-in-up" data-animation-out="slide-out-down" id="localizations" data-reveal="g0jubu-reveal" role="dialog" aria-hidden="true" data-yeti-box="localizations" data-resize="localizations">
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
</div></body></html>
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
		window.location.href='/index.php/Rent/mobile_Rent?id='+id+'&&lang=en';
	});

	$('.cn').click(function() {
		window.location.href='/index.php/Rent/mobile_Rent?id='+id;
	});

	$('.button').click(function() {
        var title = $(this).parent().find('.row .small-10 h4').html();
        $('#rent_title').val(title);
	});

</script>