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
                                        <a href="/index.php/Rent/mobile_Rent?id=<?php echo $rent_lists['brand_id']?>"><?php echo $rent_lists['product_brand_en']?></a>
                                    </li>
								<?php endforeach; ?>

                                <li role="menuitem" class="is-submenu-item is-accordion-submenu-item"><a href="/index.php/Rent/mobile_Rent?id=<?php echo 0;?>">All the models</a></li>
                            </ul>
                        </li>

                        <li role="tab" class="is-accordion-submenu-parent" aria-haspopup="true" aria-expanded="false" aria-label="摩托车旅游" aria-controls="uoxvpk-acc-menu" id="exqiwo-acc-menu-link">
                            <a href="/index.php/trave/mobile_Trave">Motorcycle tour</a>

                            <ul class="menu vertical nested submenu is-accordion-submenu" data-submenu="" aria-hidden="true" role="tabpanel" aria-labelledby="exqiwo-acc-menu-link" id="uoxvpk-acc-menu" style="display: none;">
                                <li class="list-title is-submenu-item is-accordion-submenu-item" role="menuitem">The team travel</li>

                                <li role="menuitem" class="is-submenu-item is-accordion-submenu-item">
                                    <a href="/index.php/team/mobile_Team">
                                        Motorcycle tour
                                    </a>
                                </li>

                            </ul>

                            <ul class="menu vertical nested submenu is-accordion-submenu" data-submenu="" aria-hidden="true" role="tabpanel" aria-labelledby="exqiwo-acc-menu-link" id="uoxvpk-acc-menu" style="display: none;">
                                <li class="list-title is-submenu-item is-accordion-submenu-item" role="menuitem">Road trip</li>

                                <li role="menuitem" class="is-submenu-item is-accordion-submenu-item">
                                    <a href="/index.php/classify/mobile_Classify">
                                        Motorcycle trip
                                    </a>
                                </li>
                            </ul>

                            <ul class="menu vertical nested submenu is-accordion-submenu" data-submenu="" aria-hidden="true" role="tabpanel" aria-labelledby="exqiwo-acc-menu-link" id="uoxvpk-acc-menu" style="display: none;">
                                <li class="list-title is-submenu-item is-accordion-submenu-item" role="menuitem">Hot line</li>
                                <li role="menuitem" class="is-submenu-item is-accordion-submenu-item">
                                    <a href="/index.php/hot_trave/mobile_hot_trave">
                                        Popular motorcycle Tours
                                    </a>
                                </li>
                            </ul>

                            <ul class="menu vertical nested submenu is-accordion-submenu" data-submenu="" aria-hidden="true" role="tabpanel" aria-labelledby="exqiwo-acc-menu-link" id="uoxvpk-acc-menu" style="display: none;">
                                <li class="list-title is-submenu-item is-accordion-submenu-item" role="menuitem">All travel items</li>

                                <li role="menuitem" class="is-submenu-item is-accordion-submenu-item">
                                    <a href="/index.php/trave/mobile_Trave">
                                        Motorcycle tour
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li role="menuitem"><a href="/index.php/Discounts/mobile_Discount">Privilege</a></li>
                        <li role="menuitem"><a href="/index.php/Artivity/mobile_Artivity">Motorcycle event</a></li>
                        <li role="menuitem"><a href="/index.php/City/mobile_City">City</a></li>


                        <li role="menuitem">
                            <a href="/index.php/Reg/mobile_Reg">Check in online</a>
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
                                <a href=""><?php echo $bottom_infos['title_en']?></a>
							<?php endforeach; ?>

                        </div>
					<?php endif; ?>
					<?php if(empty($_GET["lang"])): ?>
                        <div class="sub-footer text-center">
                            <h5>Information</h5>
							<?php foreach ($bottom_info as $key=>$bottom_infos): ?>
                                <a href=""><?php echo $bottom_infos['title']?></a>
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
		</form></div></div><div class="full reveal js-widget-overlay widget-overlay without-overlay" data-v-offset="0px" data-animation-in="slide-in-down " data-animation-out="slide-out-down " id="widget-modal" data-reveal="qkl746-reveal" role="dialog" aria-hidden="true" data-yeti-box="widget-modal" data-resize="widget-modal">
	<header>
		<div class="row">
			<div class="small-10 columns">
				<h3>开始您的冒险旅程吧</h3>
			</div>
		</div>
	</header>
	<div class="row vehicle-info">
		<div class="small-6 columns">
			<span class="vehicle-info_name js-overlay-vehicle-name"></span>
			<span class="vehicle-info_class js-overlay-vehicle-class"></span>
		</div>
		<div class="small-6 columns js-overlay-vehicle-image">
			<img src="/public/image/moto-0645571c54c8d3a7587d4e4590006c6e.jpg">
		</div>
	</div>
	<div class="widget js-widget expanded">

		<div class="js-rentalSearch" style="">
			<div class="js-reservationFormContainer">
				<form action="https://www.eaglerider.cn/reservation_widget" method="post" class="res_widget" target="_blank">
					<input type="hidden" name="authenticity_token" value="plD9UK/X3nGuKuGckNVgIHQtb98qGyParWyY7aKrCh4=">
					<input type="hidden" name="reservation[reservation_type_id]" value="1">






					<div class="widget-tab js-rentals active" data-value="rentals-tab">
						<div class="dropdown-container">
							<div class="widget-tab_pinned widget-location row">
								<div class="small-12 columns">
									<div class="js-selection-search input-field">
										<select name="reservation[pickup_location_id]" data-fieldtype="pickup_location" class="selectWithSearch js-locationsSelect search js-widget-search labeled js-pickuploc" style="display: none;">
											<option value="" selected="&quot;selected&quot;">
												取车城市
											</option>

											<optgroup label="?????">
												<option value="259">
													Mesa
												</option>
												<option value="266">
													Scottsdale
												</option>
												<option value="78">
													凤凰城门店
												</option>
												<option value="38">
													弗拉格斯塔夫门店
												</option>
											</optgroup>
											<optgroup label="Alabama">
												<option value="334">
													Opelika
												</option>
											</optgroup>
											<optgroup label="Arkansas">
												<option value="290">
													Rogers
												</option>
												<option value="330">
													Fort Smith
												</option>
											</optgroup>
											<optgroup label="Connecticut">
												<option value="351">
													East Hartford
												</option>
												<option value="331">
													Ellington
												</option>
											</optgroup>
											<optgroup label="Indiana">
												<option value="352">
													Munster
												</option>
												<option value="336">
													Terre Haute
												</option>
											</optgroup>
											<optgroup label="Iowa">
												<option value="314">
													Des Moines
												</option>
												<option value="346">
													Ames
												</option>
											</optgroup>
											<optgroup label="Kansas">
												<option value="344">
													Topeka
												</option>
											</optgroup>
											<optgroup label="Kentucky">
												<option value="269">
													Cincinnati
												</option>
											</optgroup>
											<optgroup label="Maine">
												<option value="335">
													Portland Maine
												</option>
											</optgroup>
											<optgroup label="North Dakota">
												<option value="343">
													Minot
												</option>
												<option value="342">
													Williston
												</option>
											</optgroup>
											<optgroup label="Oklahoma">
												<option value="358">
													Oklahoma City
												</option>
											</optgroup>
											<optgroup label="Pennsylvania">
												<option value="286">
													Orwigsburg
												</option>
												<option value="296">
													Steel City Harley-Davidson
												</option>
												<option value="198">
													Pittsburgh
												</option>
												<option value="341">
													Willow Street
												</option>
											</optgroup>
											<optgroup label="South Dakota">
												<option value="255">
													Rapid City
												</option>
												<option value="200">
													Sturgis
												</option>
											</optgroup>
											<optgroup label="Vermont">
												<option value="339">
													Barre
												</option>
											</optgroup>
											<optgroup label="Wisconsin">
												<option value="307">
													Bonduel
												</option>
												<option value="309">
													Green Bay
												</option>
												<option value="310">
													Madison
												</option>
												<option value="256">
													Milwaukee
												</option>
												<option value="355">
													Milwaukee North
												</option>
												<option value="348">
													Appleton
												</option>
												<option value="356">
													Rice Lake
												</option>
											</optgroup>
											<optgroup label="乔治亚州">
												<option value="44">
													亚特兰大 - 哈雷门店
												</option>
												<option value="320">
													Columbus Georgia
												</option>
												<option value="324">
													Roswell
												</option>
												<option value="43">
													亚特兰大门店
												</option>
											</optgroup>
											<optgroup label="伊利诺伊州">
												<option value="298">
													Chicago Countryside
												</option>
												<option value="303">
													DeKalb
												</option>
												<option value="294">
													McHenry Harley-Davidson
												</option>
												<option value="302">
													Ottawa
												</option>
												<option value="283">
													Palatine
												</option>
												<option value="297">
													Saint Charles
												</option>
												<option value="300">
													Villa Park
												</option>
												<option value="299">
													Woodstock
												</option>
												<option value="197">
													芝加哥门店
												</option>
												<option value="65">
													Countryside宝马摩托车租赁
												</option>
											</optgroup>
											<optgroup label="佛罗里达州">
												<option value="246">
													Bradenton
												</option>
												<option value="245">
													Clermont
												</option>
												<option value="254">
													Daytona
												</option>
												<option value="243">
													Fort Myers
												</option>
												<option value="244">
													Jacksonville Harley-Davidson
												</option>
												<option value="267">
													Kissimmee
												</option>
												<option value="275">
													Leesburg
												</option>
												<option value="268">
													Orlando East Harley-Davidson
												</option>
												<option value="250">
													Panama City Beach
												</option>
												<option value="252">
													Sarasota
												</option>
												<option value="251">
													Tampa
												</option>
												<option value="5">
													奥兰多机场门店
												</option>
												<option value="11">
													迈阿密门店
												</option>
												<option value="360">
													Fort Lauderdale
												</option>
												<option value="327">
													Gainesville
												</option>
												<option value="195">
													Miami Metric
												</option>
												<option value="219">
													Pensacola
												</option>
												<option value="248">
													Sanford
												</option>
												<option value="194">
													代托纳沙滩门店
												</option>
												<option value="170">
													杰克逊维尔门店
												</option>
											</optgroup>
											<optgroup label="俄亥俄州">
												<option value="313">
													Cleveland
												</option>
												<option value="318">
													Mentor
												</option>
												<option value="308">
													Plain City
												</option>
												<option value="76">
													哥伦布门店
												</option>
												<option value="277">
													Athens
												</option>
												<option value="337">
													Mansfield
												</option>
												<option value="338">
													Wintersville
												</option>
												<option value="73">
													西尔斯宝马摩托租赁
												</option>
											</optgroup>
											<optgroup label="俄勒冈州">
												<option value="74">
													波特兰门店
												</option>
											</optgroup>
											<optgroup label="内华达州">
												<option value="264">
													Las Vegas Harley-Davidson
												</option>
												<option value="6">
													拉斯维加斯门店
												</option>
												<option value="72">
													拉斯维加斯凯旋摩托车门店
												</option>
												<option value="25">
													拉斯维加斯宝马门店
												</option>
											</optgroup>
											<optgroup label="加州">
												<option value="253">
													Bartels Harley-Davidson
												</option>
												<option value="265">
													San Marcos
												</option>
												<option value="9">
													圣地亚哥门店
												</option>
												<option value="2">
													旧金山门店
												</option>
												<option value="8">
													棕榈泉门店
												</option>
												<option value="1">
													洛杉矶机场门店
												</option>
												<option value="42">
													纽波特海滩门店
												</option>
												<option value="273">
													Lancaster
												</option>
												<option value="323">
													Montclair
												</option>
												<option value="328">
													Redding
												</option>
												<option value="77">
													卡梅尔门店
												</option>
												<option value="19">
													圣莫尼卡/玛丽安德尔湾门店
												</option>
												<option value="7">
													弗雷斯诺门店
												</option>
												<option value="191">
													旧金山宝马本田门店
												</option>
												<option value="69">
													比佛利山门店
												</option>
											</optgroup>
											<optgroup label="华盛顿州">
												<option value="292">
													North Cascades
												</option>
												<option value="20">
													西雅图门店
												</option>
												<option value="357">
													Tacoma
												</option>
											</optgroup>
											<optgroup label="南卡罗来纳州">
												<option value="270">
													Rock Hill
												</option>
												<option value="332">
													Greenville
												</option>
											</optgroup>
											<optgroup label="夏威夷州">
												<option value="58">
													茂宜岛基黑门店
												</option>
												<option value="22">
													茂宜岛门店
												</option>
											</optgroup>
											<optgroup label="弗吉尼亚州">
												<option value="16">
													华盛顿门店
												</option>
												<option value="329">
													Roanoke
												</option>
											</optgroup>
											<optgroup label="德州">
												<option value="262">
													Austin
												</option>
												<option value="249">
													San Antonio
												</option>
												<option value="14">
													达拉斯门店
												</option>
												<option value="276">
													McAllen
												</option>
												<option value="280">
													Tyler
												</option>
												<option value="39">
													埃尔帕索门店
												</option>
											</optgroup>
											<optgroup label="怀俄明州">
												<option value="17">
													杰克逊镇门店
												</option>
											</optgroup>
											<optgroup label="新墨西哥州">
												<option value="40">
													阿尔伯克基门店
												</option>
											</optgroup>
											<optgroup label="新泽西州">
												<option value="311">
													Lakewood
												</option>
												<option value="312">
													Long Branch
												</option>
												<option value="287">
													Mount Ephraim
												</option>
												<option value="70">
													纽瓦克 - 贝尔维尔门店
												</option>
											</optgroup>
											<optgroup label="新罕布什尔州">
												<option value="293">
													Laconia
												</option>
												<option value="345">
													Concord
												</option>
												<option value="12">
													曼彻斯特门店
												</option>
											</optgroup>
											<optgroup label="明尼苏达州">
												<option value="316">
													Eden Prairie
												</option>
												<option value="306">
													Faribault
												</option>
												<option value="315">
													Saint Paul
												</option>
												<option value="347">
													Delano
												</option>
												<option value="350">
													Mankato
												</option>
												<option value="45">
													埃尔克河门店
												</option>
											</optgroup>
											<optgroup label="犹他州">
												<option value="319">
													Timpanogos
												</option>
												<option value="15">
													盐湖城门店
												</option>
											</optgroup>
											<optgroup label="田纳西州">
												<option value="263">
													Boswell's Harley-Davidson
												</option>
												<option value="284">
													Knoxville
												</option>
												<option value="291">
													Kodak
												</option>
												<option value="317">
													Memphis
												</option>
												<option value="295">
													Pigeon Forge
												</option>
												<option value="285">
													Smoky Mountain H-D – Knoxville Airport
												</option>
												<option value="13">
													那什维尔门店
												</option>
											</optgroup>
											<optgroup label="科罗拉多州">
												<option value="282">
													Denver Airport
												</option>
												<option value="359">
													Greeley
												</option>
												<option value="10">
													丹佛门店
												</option>
												<option value="321">
													Durango
												</option>
												<option value="85">
													大章克辛门店
												</option>
											</optgroup>
											<optgroup label="纽约州">
												<option value="288">
													New York-Albany
												</option>
												<option value="260">
													New York-Long Island
												</option>
												<option value="349">
													Arkport
												</option>
												<option value="354">
													Jamestown
												</option>
												<option value="333">
													Macedon
												</option>
												<option value="340">
													North Tonawanda
												</option>
												<option value="353">
													Wurtsboro
												</option>
												<option value="36">
													纽约 - 皇后村门店
												</option>
												<option value="37">
													纽约 - 霍华德海滩门店
												</option>
											</optgroup>
											<optgroup label="蒙大拿州">
												<option value="305">
													Belgrade
												</option>
												<option value="304">
													Missoula
												</option>
												<option value="18">
													比林斯门店
												</option>
											</optgroup>
											<optgroup label="路易斯安那州">
												<option value="274">
													Alexandria
												</option>
												<option value="81">
													新奥尔良门店
												</option>
												<option value="326">
													Houma
												</option>
												<option value="278">
													Lafayette
												</option>
												<option value="325">
													New Orleans Harley-Davidson
												</option>
												<option value="322">
													Slidell
												</option>
											</optgroup>
											<optgroup label="马萨诸塞州">
												<option value="75">
													波士顿门店
												</option>
												<option value="32">
													福克斯波罗门店
												</option>
											</optgroup>
											<optgroup label="马里兰州">
												<option value="30">
													克罗夫顿门店
												</option>
											</optgroup>
											<optgroup label="India">
												<option value="218">
													New Delhi
												</option>
											</optgroup>
											<optgroup label="Norway">
												<option value="236">
													Lyngdal
												</option>
											</optgroup>
											<optgroup label="俄罗斯">
												<option value="239">
													Moscow
												</option>
											</optgroup>
											<optgroup label="加拿大">
												<option value="35">
													温哥华门店
												</option>
												<option value="226">
													Calgary
												</option>
											</optgroup>
											<optgroup label="墨西哥">
												<option value="64">
													科苏梅尔门店
												</option>
											</optgroup>
											<optgroup label="意大利">
												<option value="228">
													Milan
												</option>
											</optgroup>
											<optgroup label="新加坡">
												<option value="79">
													新加坡门店
												</option>
											</optgroup>
											<optgroup label="新西兰">
												<option value="63">
													克赖斯特彻奇Bularangi门店
												</option>
												<option value="51">
													奥克兰Bularangi门店
												</option>
											</optgroup>
											<optgroup label="澳大利亚">
												<option value="199">
													Cairns
												</option>
												<option value="221">
													Melbourne
												</option>
												<option value="87">
													布里斯班门店
												</option>
												<option value="190">
													悉尼门店
												</option>
											</optgroup>
											<optgroup label="英国">
												<option value="301">
													Silverstone
												</option>
											</optgroup>
											<optgroup label="荷兰">
												<option value="60">
													荷兰门店
												</option>
											</optgroup>
											<optgroup label="葡萄牙">
												<option value="46">
													卡斯凯斯门店
												</option>
												<option value="54">
													普莱厄维赫门店
												</option>
												<option value="47">
													法鲁门店
												</option>
												<option value="53">
													波尔图门店
												</option>
												<option value="48">
													里斯本门店
												</option>
											</optgroup>
											<optgroup label="西班牙">
												<option value="49">
													马德里门店
												</option>
											</optgroup>
										</select>
										<input type="text" id="input" readonly="" class="js-input">
										<label for="input" class="js-label">行驶出发城市</label>
										<i class="material-icons prefix arrow">
											<svg></svg>
										</i>
									</div>
								</div>
							</div>
						</div>
						<div class="widget-tab_collapsible js-widget-tab_collapsible" id="widget-tab_collapsible">
							<div class="widget-different-location row">
								<div class="small-12 columns">
									<div class="input-field check">
										<input type="checkbox" id="differentLocation" class="js-diff-location-chkbox">
										<label class="js-dropoff-trigger" for="differentLocation">
											回到不同的门店
										</label>
									</div>
								</div>
							</div>

							<div class="dropdown-container">
								<div class="widget-location wldol js-dropoff-location row" style="display:none;">
									<div class="small-12 columns">
										<div class="js-selection-search input-field">
											<select name="reservation[dropoff_location_id]" data-fieldtype="dropoff_location" class="search js-widget-search labeled js-locationsSelect js-dropoffloc" style="display: none;">

												<option value="" selected="&quot;selected&quot;">
													选择还车门店
												</option>

											</select>
											<input type="text" id="input" readonly="" class="js-input">
											<label for="input" class="js-label">行驶终点城市</label>
											<i class="material-icons prefix arrow">
												<svg></svg>
											</i>
										</div>
									</div>
								</div>
							</div>
							<div class="widget-dt row">
								<div class="widget-dt_date small-6  columns">
									<div class="dropdown-container">
										<div class="input-field small-height">
											<i class="material-icons prefix">
												<svg></svg>
											</i>
											<div class="">
												<input name="reservation[pickup_date]" class="js-pickupDate datepicker picker__input" placeholder="出发日期/时间" value="2018/07/03" readonly="" id="P198539588" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="P198539588_root"><div class="picker" id="P198539588_root" tabindex="0" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__date-display"><div class="picker__weekday-display">星期二</div><div class="picker__month-display"><div>七</div></div><div class="picker__day-display"><div>3</div></div><div class="picker__year-display"><div>2018</div></div></div><div class="picker__calendar-container"><div class="picker__header"><select class="picker__select--month browser-default" disabled="" aria-controls="P198539588_table" title="Select a month"><option value="0" disabled="">一月</option><option value="1" disabled="">二月</option><option value="2" disabled="">三月</option><option value="3" disabled="">四月</option><option value="4" disabled="">五月</option><option value="5" disabled="">六月</option><option value="6" selected="">七月</option><option value="7">八月</option><option value="8">九月</option><option value="9">十月</option><option value="10">十一月</option><option value="11">十二月</option></select><select class="picker__select--year browser-default" disabled="" aria-controls="P198539588_table" title="Select a year"><option value="2018" selected="">2018</option><option value="2019">2019</option><option value="2020">2020</option></select><div class="picker__nav--prev picker__nav--disabled" data-nav="-1" role="button" aria-controls="P198539588_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="P198539588_table" title="Next month"> </div></div><table class="picker__table" id="P198539588_table" role="grid" aria-controls="P198539588" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="星期一">M</th><th class="picker__weekday" scope="col" title="星期二">T</th><th class="picker__weekday" scope="col" title="星期三">W</th><th class="picker__weekday" scope="col" title="星期四">T</th><th class="picker__weekday" scope="col" title="星期五">F</th><th class="picker__weekday" scope="col" title="星期六">S</th><th class="picker__weekday" scope="col" title="星期日">S</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1529856000000" role="gridcell" aria-label="2018/06/25" aria-disabled="true">25</div></td><td role="presentation"><div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1529942400000" role="gridcell" aria-label="2018/06/26" aria-disabled="true">26</div></td><td role="presentation"><div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1530028800000" role="gridcell" aria-label="2018/06/27" aria-disabled="true">27</div></td><td role="presentation"><div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1530115200000" role="gridcell" aria-label="2018/06/28" aria-disabled="true">28</div></td><td role="presentation"><div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1530201600000" role="gridcell" aria-label="2018/06/29" aria-disabled="true">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1530288000000" role="gridcell" aria-label="2018/06/30" aria-disabled="true">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1530374400000" role="gridcell" aria-label="2018/07/01" aria-disabled="true">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1530460800000" role="gridcell" aria-label="2018/07/02" aria-disabled="true">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--selected picker__day--highlighted" data-pick="1530547200000" role="gridcell" aria-label="2018/07/03" aria-selected="true" aria-activedescendant="true">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today" data-pick="1530633600000" role="gridcell" aria-label="2018/07/04">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1530720000000" role="gridcell" aria-label="2018/07/05">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1530806400000" role="gridcell" aria-label="2018/07/06">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1530892800000" role="gridcell" aria-label="2018/07/07">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1530979200000" role="gridcell" aria-label="2018/07/08">8</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531065600000" role="gridcell" aria-label="2018/07/09">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531152000000" role="gridcell" aria-label="2018/07/10">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531238400000" role="gridcell" aria-label="2018/07/11">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531324800000" role="gridcell" aria-label="2018/07/12">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531411200000" role="gridcell" aria-label="2018/07/13">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531497600000" role="gridcell" aria-label="2018/07/14">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531584000000" role="gridcell" aria-label="2018/07/15">15</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531670400000" role="gridcell" aria-label="2018/07/16">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531756800000" role="gridcell" aria-label="2018/07/17">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531843200000" role="gridcell" aria-label="2018/07/18">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531929600000" role="gridcell" aria-label="2018/07/19">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532016000000" role="gridcell" aria-label="2018/07/20">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532102400000" role="gridcell" aria-label="2018/07/21">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532188800000" role="gridcell" aria-label="2018/07/22">22</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532275200000" role="gridcell" aria-label="2018/07/23">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532361600000" role="gridcell" aria-label="2018/07/24">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532448000000" role="gridcell" aria-label="2018/07/25">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532534400000" role="gridcell" aria-label="2018/07/26">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532620800000" role="gridcell" aria-label="2018/07/27">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532707200000" role="gridcell" aria-label="2018/07/28">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532793600000" role="gridcell" aria-label="2018/07/29">29</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532880000000" role="gridcell" aria-label="2018/07/30">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532966400000" role="gridcell" aria-label="2018/07/31">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1533052800000" role="gridcell" aria-label="2018/08/01">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1533139200000" role="gridcell" aria-label="2018/08/02">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1533225600000" role="gridcell" aria-label="2018/08/03">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1533312000000" role="gridcell" aria-label="2018/08/04">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1533398400000" role="gridcell" aria-label="2018/08/05">5</div></td></tr></tbody></table></div><div class="picker__footer"><button class="btn-flat picker__today" type="button" data-pick="1530633600000" disabled="" aria-controls="P198539588">今日</button><button class="btn-flat picker__clear" type="button" data-clear="1" disabled="" aria-controls="P198539588">清除</button><button class="btn-flat picker__close" type="button" data-close="true" disabled="" aria-controls="P198539588">关闭</button></div></div></div></div></div></div>
											</div>            </div>
									</div>        </div>

								<div class="widget-dt_time small-6  columns ">
									<div class="dropdown-container">
										<div class="input-field activated">
											<i class="dropdown icon"></i>
											<div class="ui dropdown js-skip selection" tabindex="0"><select name="reservation[pickup_time_slot]" data-fieldtype="pickup_time_slot">
													<option value=" 8:00 am">
														8:00 am
													</option>
													<option value=" 8:30 am">
														8:30 am
													</option>
													<option value=" 9:00 am">
														9:00 am
													</option>
													<option value=" 9:30 am">
														9:30 am
													</option>
													<option value="10:00 am">
														10:00 am
													</option>
													<option value="10:30 am">
														10:30 am
													</option>
													<option value="11:00 am">
														11:00 am
													</option>
													<option value="11:30 am">
														11:30 am
													</option>
													<option value="12:00 pm" selected="&quot;selected&quot;">
														12:00 pm
													</option>
													<option value="12:30 pm">
														12:30 pm
													</option>
													<option value=" 1:00 pm">
														1:00 pm
													</option>
													<option value=" 1:30 pm">
														1:30 pm
													</option>
													<option value=" 2:00 pm">
														2:00 pm
													</option>
													<option value=" 2:30 pm">
														2:30 pm
													</option>
													<option value=" 3:00 pm">
														3:00 pm
													</option>
													<option value=" 3:30 pm">
														3:30 pm
													</option>
													<option value=" 4:00 pm">
														4:00 pm
													</option>
													<option value=" 4:30 pm">
														4:30 pm
													</option>
													<option value=" 5:00 pm">
														5:00 pm
													</option>
													<option value=" 5:30 pm">
														5:30 pm
													</option>
													<option value=" 6:00 pm">
														6:00 pm
													</option>
													<option value=" 6:30 pm">
														6:30 pm
													</option>
													<option value=" 7:00 pm">
														7:00 pm
													</option>
													<option value=" 7:30 pm">
														7:30 pm
													</option>
													<option value=" 8:00 pm">
														8:00 pm
													</option>
													<option value=" 8:30 pm">
														8:30 pm
													</option>
													<option value=" 9:00 pm">
														9:00 pm
													</option>
													<option value=" 9:30 pm">
														9:30 pm
													</option>
													<option value="10:00 pm">
														10:00 pm
													</option>
													<option value="10:30 pm">
														10:30 pm
													</option>
													<option value="11:00 pm">
														11:00 pm
													</option>
												</select><i class="dropdown icon"></i><div class="text">12:00 pm</div><div class="menu" tabindex="-1"><div class="item" data-value=" 8:00 am">
														8:00 am
													</div><div class="item" data-value=" 8:30 am">
														8:30 am
													</div><div class="item" data-value=" 9:00 am">
														9:00 am
													</div><div class="item" data-value=" 9:30 am">
														9:30 am
													</div><div class="item" data-value="10:00 am">
														10:00 am
													</div><div class="item" data-value="10:30 am">
														10:30 am
													</div><div class="item" data-value="11:00 am">
														11:00 am
													</div><div class="item" data-value="11:30 am">
														11:30 am
													</div><div class="item active selected" data-value="12:00 pm">
														12:00 pm
													</div><div class="item" data-value="12:30 pm">
														12:30 pm
													</div><div class="item" data-value=" 1:00 pm">
														1:00 pm
													</div><div class="item" data-value=" 1:30 pm">
														1:30 pm
													</div><div class="item" data-value=" 2:00 pm">
														2:00 pm
													</div><div class="item" data-value=" 2:30 pm">
														2:30 pm
													</div><div class="item" data-value=" 3:00 pm">
														3:00 pm
													</div><div class="item" data-value=" 3:30 pm">
														3:30 pm
													</div><div class="item" data-value=" 4:00 pm">
														4:00 pm
													</div><div class="item" data-value=" 4:30 pm">
														4:30 pm
													</div><div class="item" data-value=" 5:00 pm">
														5:00 pm
													</div><div class="item" data-value=" 5:30 pm">
														5:30 pm
													</div><div class="item" data-value=" 6:00 pm">
														6:00 pm
													</div><div class="item" data-value=" 6:30 pm">
														6:30 pm
													</div><div class="item" data-value=" 7:00 pm">
														7:00 pm
													</div><div class="item" data-value=" 7:30 pm">
														7:30 pm
													</div><div class="item" data-value=" 8:00 pm">
														8:00 pm
													</div><div class="item" data-value=" 8:30 pm">
														8:30 pm
													</div><div class="item" data-value=" 9:00 pm">
														9:00 pm
													</div><div class="item" data-value=" 9:30 pm">
														9:30 pm
													</div><div class="item" data-value="10:00 pm">
														10:00 pm
													</div><div class="item" data-value="10:30 pm">
														10:30 pm
													</div><div class="item" data-value="11:00 pm">
														11:00 pm
													</div></div></div>
										</div>
									</div>        </div>
							</div>

							<div class="widget-dt row">
								<div class="widget-dt_date small-6  columns">
									<div class="dropdown-container">
										<div class="input-field small-height">
											<i class="material-icons prefix">
												<svg></svg>
											</i>
											<input name="reservation[dropoff_date]" class="js-dropoffDate datepicker picker__input" placeholder="返还日期/时间" value="2018/07/04" readonly="" id="P381028650" tabindex="-1" aria-haspopup="true" aria-expanded="false" aria-readonly="false" aria-owns="P381028650_root"><div class="picker" id="P381028650_root" tabindex="0" aria-hidden="true"><div class="picker__holder"><div class="picker__frame"><div class="picker__wrap"><div class="picker__box"><div class="picker__date-display"><div class="picker__weekday-display">星期三</div><div class="picker__month-display"><div>七</div></div><div class="picker__day-display"><div>4</div></div><div class="picker__year-display"><div>2018</div></div></div><div class="picker__calendar-container"><div class="picker__header"><select class="picker__select--month browser-default" disabled="" aria-controls="P381028650_table" title="Select a month"><option value="0" disabled="">一月</option><option value="1" disabled="">二月</option><option value="2" disabled="">三月</option><option value="3" disabled="">四月</option><option value="4" disabled="">五月</option><option value="5" disabled="">六月</option><option value="6" selected="">七月</option><option value="7">八月</option><option value="8">九月</option><option value="9">十月</option><option value="10">十一月</option><option value="11">十二月</option></select><select class="picker__select--year browser-default" disabled="" aria-controls="P381028650_table" title="Select a year"><option value="2018" selected="">2018</option><option value="2019">2019</option><option value="2020">2020</option></select><div class="picker__nav--prev picker__nav--disabled" data-nav="-1" role="button" aria-controls="P381028650_table" title="Previous month"> </div><div class="picker__nav--next" data-nav="1" role="button" aria-controls="P381028650_table" title="Next month"> </div></div><table class="picker__table" id="P381028650_table" role="grid" aria-controls="P381028650" aria-readonly="true"><thead><tr><th class="picker__weekday" scope="col" title="星期一">M</th><th class="picker__weekday" scope="col" title="星期二">T</th><th class="picker__weekday" scope="col" title="星期三">W</th><th class="picker__weekday" scope="col" title="星期四">T</th><th class="picker__weekday" scope="col" title="星期五">F</th><th class="picker__weekday" scope="col" title="星期六">S</th><th class="picker__weekday" scope="col" title="星期日">S</th></tr></thead><tbody><tr><td role="presentation"><div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1529856000000" role="gridcell" aria-label="2018/06/25" aria-disabled="true">25</div></td><td role="presentation"><div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1529942400000" role="gridcell" aria-label="2018/06/26" aria-disabled="true">26</div></td><td role="presentation"><div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1530028800000" role="gridcell" aria-label="2018/06/27" aria-disabled="true">27</div></td><td role="presentation"><div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1530115200000" role="gridcell" aria-label="2018/06/28" aria-disabled="true">28</div></td><td role="presentation"><div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1530201600000" role="gridcell" aria-label="2018/06/29" aria-disabled="true">29</div></td><td role="presentation"><div class="picker__day picker__day--outfocus picker__day--disabled" data-pick="1530288000000" role="gridcell" aria-label="2018/06/30" aria-disabled="true">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1530374400000" role="gridcell" aria-label="2018/07/01" aria-disabled="true">1</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus picker__day--disabled" data-pick="1530460800000" role="gridcell" aria-label="2018/07/02" aria-disabled="true">2</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1530547200000" role="gridcell" aria-label="2018/07/03">3</div></td><td role="presentation"><div class="picker__day picker__day--infocus picker__day--today picker__day--selected picker__day--highlighted" data-pick="1530633600000" role="gridcell" aria-label="2018/07/04" aria-selected="true" aria-activedescendant="true">4</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1530720000000" role="gridcell" aria-label="2018/07/05">5</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1530806400000" role="gridcell" aria-label="2018/07/06">6</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1530892800000" role="gridcell" aria-label="2018/07/07">7</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1530979200000" role="gridcell" aria-label="2018/07/08">8</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531065600000" role="gridcell" aria-label="2018/07/09">9</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531152000000" role="gridcell" aria-label="2018/07/10">10</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531238400000" role="gridcell" aria-label="2018/07/11">11</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531324800000" role="gridcell" aria-label="2018/07/12">12</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531411200000" role="gridcell" aria-label="2018/07/13">13</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531497600000" role="gridcell" aria-label="2018/07/14">14</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531584000000" role="gridcell" aria-label="2018/07/15">15</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531670400000" role="gridcell" aria-label="2018/07/16">16</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531756800000" role="gridcell" aria-label="2018/07/17">17</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531843200000" role="gridcell" aria-label="2018/07/18">18</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1531929600000" role="gridcell" aria-label="2018/07/19">19</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532016000000" role="gridcell" aria-label="2018/07/20">20</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532102400000" role="gridcell" aria-label="2018/07/21">21</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532188800000" role="gridcell" aria-label="2018/07/22">22</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532275200000" role="gridcell" aria-label="2018/07/23">23</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532361600000" role="gridcell" aria-label="2018/07/24">24</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532448000000" role="gridcell" aria-label="2018/07/25">25</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532534400000" role="gridcell" aria-label="2018/07/26">26</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532620800000" role="gridcell" aria-label="2018/07/27">27</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532707200000" role="gridcell" aria-label="2018/07/28">28</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532793600000" role="gridcell" aria-label="2018/07/29">29</div></td></tr><tr><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532880000000" role="gridcell" aria-label="2018/07/30">30</div></td><td role="presentation"><div class="picker__day picker__day--infocus" data-pick="1532966400000" role="gridcell" aria-label="2018/07/31">31</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1533052800000" role="gridcell" aria-label="2018/08/01">1</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1533139200000" role="gridcell" aria-label="2018/08/02">2</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1533225600000" role="gridcell" aria-label="2018/08/03">3</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1533312000000" role="gridcell" aria-label="2018/08/04">4</div></td><td role="presentation"><div class="picker__day picker__day--outfocus" data-pick="1533398400000" role="gridcell" aria-label="2018/08/05">5</div></td></tr></tbody></table></div><div class="picker__footer"><button class="btn-flat picker__today" type="button" data-pick="1530633600000" disabled="" aria-controls="P381028650">今日</button><button class="btn-flat picker__clear" type="button" data-clear="1" disabled="" aria-controls="P381028650">清除</button><button class="btn-flat picker__close" type="button" data-close="true" disabled="" aria-controls="P381028650">关闭</button></div></div></div></div></div></div>
										</div>
									</div>        </div>

								<div class="widget-dt_time small-6  columns ">
									<div class="dropdown-container">
										<div class="input-field activated">
											<i class="dropdown icon"></i>
											<div class="ui dropdown js-skip selection" tabindex="0"><select name="reservation[dropoff_time_slot]" data-fieldtype="dropoff_time_slot">
													<option value=" 8:00 am">
														8:00 am
													</option>
													<option value=" 8:30 am">
														8:30 am
													</option>
													<option value=" 9:00 am">
														9:00 am
													</option>
													<option value=" 9:30 am">
														9:30 am
													</option>
													<option value="10:00 am">
														10:00 am
													</option>
													<option value="10:30 am">
														10:30 am
													</option>
													<option value="11:00 am">
														11:00 am
													</option>
													<option value="11:30 am">
														11:30 am
													</option>
													<option value="12:00 pm" selected="&quot;selected&quot;">
														12:00 pm
													</option>
													<option value="12:30 pm">
														12:30 pm
													</option>
													<option value=" 1:00 pm">
														1:00 pm
													</option>
													<option value=" 1:30 pm">
														1:30 pm
													</option>
													<option value=" 2:00 pm">
														2:00 pm
													</option>
													<option value=" 2:30 pm">
														2:30 pm
													</option>
													<option value=" 3:00 pm">
														3:00 pm
													</option>
													<option value=" 3:30 pm">
														3:30 pm
													</option>
													<option value=" 4:00 pm">
														4:00 pm
													</option>
													<option value=" 4:30 pm">
														4:30 pm
													</option>
													<option value=" 5:00 pm">
														5:00 pm
													</option>
													<option value=" 5:30 pm">
														5:30 pm
													</option>
													<option value=" 6:00 pm">
														6:00 pm
													</option>
													<option value=" 6:30 pm">
														6:30 pm
													</option>
													<option value=" 7:00 pm">
														7:00 pm
													</option>
													<option value=" 7:30 pm">
														7:30 pm
													</option>
													<option value=" 8:00 pm">
														8:00 pm
													</option>
													<option value=" 8:30 pm">
														8:30 pm
													</option>
													<option value=" 9:00 pm">
														9:00 pm
													</option>
													<option value=" 9:30 pm">
														9:30 pm
													</option>
													<option value="10:00 pm">
														10:00 pm
													</option>
													<option value="10:30 pm">
														10:30 pm
													</option>
													<option value="11:00 pm">
														11:00 pm
													</option>
												</select><i class="dropdown icon"></i><div class="text">12:00 pm</div><div class="menu" tabindex="-1"><div class="item" data-value=" 8:00 am">
														8:00 am
													</div><div class="item" data-value=" 8:30 am">
														8:30 am
													</div><div class="item" data-value=" 9:00 am">
														9:00 am
													</div><div class="item" data-value=" 9:30 am">
														9:30 am
													</div><div class="item" data-value="10:00 am">
														10:00 am
													</div><div class="item" data-value="10:30 am">
														10:30 am
													</div><div class="item" data-value="11:00 am">
														11:00 am
													</div><div class="item" data-value="11:30 am">
														11:30 am
													</div><div class="item active selected" data-value="12:00 pm">
														12:00 pm
													</div><div class="item" data-value="12:30 pm">
														12:30 pm
													</div><div class="item" data-value=" 1:00 pm">
														1:00 pm
													</div><div class="item" data-value=" 1:30 pm">
														1:30 pm
													</div><div class="item" data-value=" 2:00 pm">
														2:00 pm
													</div><div class="item" data-value=" 2:30 pm">
														2:30 pm
													</div><div class="item" data-value=" 3:00 pm">
														3:00 pm
													</div><div class="item" data-value=" 3:30 pm">
														3:30 pm
													</div><div class="item" data-value=" 4:00 pm">
														4:00 pm
													</div><div class="item" data-value=" 4:30 pm">
														4:30 pm
													</div><div class="item" data-value=" 5:00 pm">
														5:00 pm
													</div><div class="item" data-value=" 5:30 pm">
														5:30 pm
													</div><div class="item" data-value=" 6:00 pm">
														6:00 pm
													</div><div class="item" data-value=" 6:30 pm">
														6:30 pm
													</div><div class="item" data-value=" 7:00 pm">
														7:00 pm
													</div><div class="item" data-value=" 7:30 pm">
														7:30 pm
													</div><div class="item" data-value=" 8:00 pm">
														8:00 pm
													</div><div class="item" data-value=" 8:30 pm">
														8:30 pm
													</div><div class="item" data-value=" 9:00 pm">
														9:00 pm
													</div><div class="item" data-value=" 9:30 pm">
														9:30 pm
													</div><div class="item" data-value="10:00 pm">
														10:00 pm
													</div><div class="item" data-value="10:30 pm">
														10:30 pm
													</div><div class="item" data-value="11:00 pm">
														11:00 pm
													</div></div></div>
										</div>
									</div>        </div>
							</div>

							<div class="widget-motorcycles row">
								<div class="small-12  columns  js-dropdown">
									<div class="dropdown-container activated">
										<div class="ui fluid selection dropdown js-vehicles-count input-field" tabindex="0">
											<input type="hidden" name="reservation[vehicles_count]" class="js-numberSelection" value="1">
											<i class="dropdown"></i>

											<div class="text" data-value="1">1 摩托车</div>

											<div class="menu" tabindex="-1">
												<div class="item active selected" data-value="1">
													1 摩托车
												</div>

												<div class="item" data-value="2">
													2 摩托车
												</div>
												<div class="item" data-value="3">
													3 摩托车
												</div>
												<div class="item js-more" data-value="">
													4+ 摩托车
													<span class="discounts float-right">团队预订可以享受更多优惠！</span>
												</div>

											</div>
										</div>
									</div>        </div>

								<div class="small-6  columns js-more-input hide">
									<div class="dropdown-container">
										<div class="input-field small-height more-motorcycle-number">
											<i class="prefix bike">
												<svg></svg>
											</i>
											<i class="prefix close">
												<svg></svg>
											</i>
											<input id="more_motorcycles" type="number" min="4" max="100" class="fieldIFinput js-numberField js-more-motorcycles">
										</div>
									</div>        </div>

							</div>

							<div class="widget-buttons row">
								<div class="small-12 columns">
									<div class="input-field">
										<input type="submit" value="立即搜索" class="button expanded js-searchTrigger">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>


	<button class="close-button" data-close="" aria-label="Close reveal" type="button">
		<span aria-hidden="true">×</span>
	</button>
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
</script>