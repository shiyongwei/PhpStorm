
<!DOCTYPE html>
<!-- saved from url=(0026)https://www.eaglerider.cn/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>Motorcycle Rentals - Motorcycle Tours </title>


	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
	<meta name="apple-mobile-web-app-title" content="EagleRider Motorcycle Rentals">
	<meta name="description" content="EagleRider is the largest motorcycle rental and tour company, renting all types of motorcycles while offering self-drive and guided motorcycle tours.">
	<meta name="keywords" content="Harley motorcycles, Harley-Davidson motorcycle rental, powersport rental, harley-davidson rental, honda rental, bmw, polaris, yamaha, Vespa, vespas, scooters, scooter, guided tours, self drive tours, Motorcycle Vacation, Adventure Rental, Self-drive tours, Motorcycle event rentals, Motorcycle rally rentals, one-way rentals, one way rentals, Moto Location, Motorcycle for Hire, Moto pour la location, Locations de moto, excursions guidées, excursions sans-chauffeur, vacances de moto, voyage de moto">
	<meta property="og:title" content="">
	<meta property="og:description" content="">

	<meta content="authenticity_token" name="csrf-param">
	<meta content="plD9UK/X3nGuKuGckNVgIHQtb98qGyParWyY7aKrCh4=" name="csrf-token">

	<link rel="shortcut icon" href="https://d1y9jrrtx2baf.cloudfront.net/assets/rentals/layout/favicon-e32d32b2d8dcbc0d4e921a2f74dd32f0.ico">

	<!-- <link rel="profile" href="http://microformats.org/profile/specs" /> -->

	<link href="/public/css/mobile.manifest-973d9a8a05059422a934f5851bf4c381.css" media="all" rel="stylesheet" type="text/css">


<body class="zh home_page" id="homepage">
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
						<a href="/index.php/Home/mobile_Home?lang=en" class="title-bar-title er-logo">EagleRider</a>
						<?php endif; ?>
						<?php if(empty($_GET["lang"])): ?>
                            <a href="/index.php/Home/mobile_Home" class="title-bar-title er-logo">飞鹰骑士</a>
						<?php endif; ?>

					</div>


				</div>

				<div class="js-page">
					<div class="reservation js-combinedWidget">
						<div class="widget collapsed js-widget">
							<div class="widget-header row">
								<div class="small-12 columns">
									<?php if(isset($_GET["lang"])): ?>
                                    <div class="widget-header_menu ui fluid selection dropdown" tabindex="0">
										<input type="hidden" name="user">
										<h4 class="default text">All motorcycle Tours</h4>
										<i class="dropdown icon"></i>
										<div class="menu widget-menu js-options" tabindex="-1">

											<a class="item  js-toursTrigger js-typeTrigger" value="" href="/index.php/trave/mobile_Trave">
                                                All motorcycle Tours
											</a>
											<a class="item js-toursTrigger js-typeTrigger" data-value="1" href="/index.php/team/mobile_Team">
                                                Motorcycle Tours
											</a>
											<a class="item js-toursTrigger js-typeTrigger" data-value="2" href="/index.php/classify/mobile_Classify">
                                                Road trip
											</a>
										</div>
									</div>
									<?php endif; ?>
									<?php if(empty($_GET["lang"])): ?>
                                        <div class="widget-header_menu ui fluid selection dropdown" tabindex="0">
                                            <input type="hidden" name="user">
                                            <h4 class="default text">全部摩托车旅行</h4>
                                            <i class="dropdown icon"></i>
                                            <div class="menu widget-menu js-options" tabindex="-1">

                                                <a class="item  js-toursTrigger js-typeTrigger" value="" href="/index.php/trave/mobile_Trave">
                                                    全部摩托车旅行
                                                </a>
                                                <a class="item js-toursTrigger js-typeTrigger" data-value="1" href="/index.php/team/mobile_Team">
                                                    摩托车跟团旅行
                                                </a>
                                                <a class="item js-toursTrigger js-typeTrigger" data-value="2" href="/index.php/classify/mobile_Classify">
                                                    摩托车自驾旅行
                                                </a>
                                            </div>
                                        </div>
									<?php endif; ?>
								</div>
							</div>

							<div class="js-rentalSearch" style="">
								<div class="js-reservationFormContainer">
									<form action="https://www.eaglerider.cn/reservation_widget" method="post" class="res_widget" target="_blank">
										<input type="hidden" name="authenticity_token" value="plD9UK/X3nGuKuGckNVgIHQtb98qGyParWyY7aKrCh4=">
										<input type="hidden" name="reservation[reservation_type_id]" value="1">

										<div class="widget-tab js-rentals active" data-value="rentals-tab">
											<div class="dropdown-container">
												<div class="widget-tab_pinned widget-location row">
													<div class="small-12 columns">
														<?php if(isset($_GET["lang"])): ?>
                                                        <div class="js-selection-search input-field">
															<select name="reservation[pickup_location_id]" data-fieldtype="pickup_location" class="selectWithSearch js-locationsSelect search js-widget-search labeled js-pickuploc" style="display: none;">
																<option value="" selected="&quot;selected&quot;">
                                                                    Take car city
																</option>
																<?php foreach ($city as $key=>$citys): ?>
                                                                <option value="" selected="&quot;selected&quot;">
																	<?php echo $citys['cit_name_en']?>
                                                                </option>
																<?php endforeach; ?>

															</select>
															<input type="text" id="input" readonly="" class="js-input">
															<label for="input" class="js-label">Departure city</label>
															<i class="material-icons prefix arrow">
																<svg></svg>
															</i>
														</div>
														<?php endif; ?>
														<?php if(empty($_GET["lang"])): ?>
                                                            <div class="js-selection-search input-field">
                                                                <select name="reservation[pickup_location_id]" data-fieldtype="pickup_location" class="selectWithSearch js-locationsSelect search js-widget-search labeled js-pickuploc" style="display: none;">
                                                                    <option value="" selected="&quot;selected&quot;">
                                                                        取车城市
                                                                    </option>
																	<?php foreach ($city as $key=>$citys): ?>
                                                                        <option value="" selected="&quot;selected&quot;">
																			<?php echo $citys['cit_name']?>
                                                                        </option>
																	<?php endforeach; ?>

                                                                </select>
                                                                <input type="text" id="input" readonly="" class="js-input">
                                                                <label for="input" class="js-label">行驶出发城市</label>
                                                                <i class="material-icons prefix arrow">
                                                                    <svg></svg>
                                                                </i>
                                                            </div>
														<?php endif; ?>

													</div>
												</div>
											</div>

										</div>
									</form>
								</div>
							</div>

						</div>
					</div>

					<div class="page-wrapper er-widget-img">
						<div class="er-page-header">
							<div class="er-page-header_gradient"></div>
							<img class="er-page-header_img" src="<?php echo $text[0]['image']?>">
						</div>
						<?php if(isset($_GET["lang"])): ?>
						<div class="featured-slider-wrapper">
							<h3 class="text-center">Selected destinations</h3>
							<div class="frame featured-slider js-featured-slider" id="frame" style="overflow: hidden;">

								<ul class="slides" style="transform: translateZ(0px) translateX(-865px); width: 2424px;">
									<?php foreach ($get_limits as $key=>$get_limit): ?>
									<li>
										<a title="Los Angeles" href="/index.php/jingxuan-detail/mobile_jingxuan-detail?id=<?php echo $get_limit['cit_id']?>">
											<img src="<?php echo $get_limit['logo']?>" alt="Los Angeles">
											<span class="featured-title">
                                              <?php echo $get_limit['cit_name_en']?>
                                            </span>
										</a>
									</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
						<?php endif; ?>
						<?php if(empty($_GET["lang"])): ?>
                            <div class="featured-slider-wrapper">
                                <h3 class="text-center">精选目的地</h3>
                                <div class="frame featured-slider js-featured-slider" id="frame" style="overflow: hidden;">

                                    <ul class="slides" style="transform: translateZ(0px) translateX(-865px); width: 2424px;">
										<?php foreach ($get_limits as $key=>$get_limit): ?>
                                            <li>
                                                <a title="Los Angeles" href="/index.php/jingxuan-detail/mobile_jingxuan-detail?id=<?php echo $get_limit['cit_id']?>">
                                                    <img src="<?php echo $get_limit['logo']?>" alt="Los Angeles">
                                                    <span class="featured-title">
                                              <?php echo $get_limit['cit_name']?>
                                            </span>
                                                </a>
                                            </li>
										<?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
						<?php endif; ?>

						<hr>
						<?php if(isset($_GET["lang"])): ?>
						<div class="adventure-wrapper">
							<h3 class="text-center">Start your adventure</h3>
							<div class="frame adventure js-adventure" id="frame" style="overflow: hidden;">
								<ul class="slides" style="transform: translateZ(0px); width: 468px;">

									<li class="text-center active">
										<a href="/index.php/classify/mobile_Classify">
											<h4>Road trip</h4>
											<ul class="block-list">
												<li>
													<svg></svg>
                                                    Predetermined routes
												</li>
												<li>
													<svg></svg>
                                                    Motorcycle rental
												</li>
												<li>
													<svg></svg>
                                                    Friendly motorcycle hotel
												</li>
											</ul>
											<span class="accent button">Search</span>
										</a>
									</li>

									<li class="text-center">
										<a href="/index.php/team/mobile_Team">
											<h4>The team travel</h4>
											<ul class="block-list">
												<li>
													<svg></svg>
                                                    tour guide
												</li>
												<li>
													<svg></svg>
                                                    team
                                                </li>
												<li>
													<svg></svg>
                                                    Support the car
												</li>
												<li>
													<svg></svg>
                                                    Predetermined routes
												</li>
												<li>
													<svg></svg>
                                                    Motorcycle rental
												</li>
												<li>
													<svg></svg>
                                                    Friendly motorcycle hotel
												</li>
											</ul>
											<span class="accent button">Search</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<?php endif; ?>
						<?php if(empty($_GET["lang"])): ?>
                            <div class="adventure-wrapper">
                                <h3 class="text-center">开始您的冒险旅程吧</h3>
                                <div class="frame adventure js-adventure" id="frame" style="overflow: hidden;">
                                    <ul class="slides" style="transform: translateZ(0px); width: 468px;">

                                        <li class="text-center active">
                                            <a href="/index.php/classify/mobile_Classify">
                                                <h4>自驾旅行</h4>
                                                <ul class="block-list">
                                                    <li>
                                                        <svg></svg>
                                                        预先制定好的路线
                                                    </li>
                                                    <li>
                                                        <svg></svg>
                                                        摩托车租赁
                                                    </li>
                                                    <li>
                                                        <svg></svg>
                                                        摩托车友好酒店
                                                    </li>
                                                </ul>
                                                <span class="accent button">立即搜索</span>
                                            </a>
                                        </li>

                                        <li class="text-center">
                                            <a href="/index.php/team/mobile_Team">
                                                <h4>团队旅行</h4>
                                                <ul class="block-list">
                                                    <li>
                                                        <svg></svg>
                                                        导游
                                                    </li>
                                                    <li>
                                                        <svg></svg>
                                                        团队
                                                    </li>
                                                    <li>
                                                        <svg></svg>
                                                        支持车
                                                    </li>
                                                    <li>
                                                        <svg></svg>
                                                        预先制定好的路线
                                                    </li>
                                                    <li>
                                                        <svg></svg>
                                                        摩托车租赁
                                                    </li>
                                                    <li>
                                                        <svg></svg>
                                                        摩托车友好酒店
                                                    </li>
                                                </ul>
                                                <span class="accent button">立即搜索</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
						<?php endif; ?>

						<div class="clearfix"></div>
					</div>

					<div class="harley-ad callout js-harley-content" data-closable="slide-out-down" style="display: none;">
						<div class="row">
							<div class="small-10 columns">
								<b>EagleRider is The Exclusive U.S. Provider of Rentals and Tours for Harley-Davidson</b>
							</div>
							<div class="small-2 columns text-right">
								<button aria-label="Dismiss alert" type="button" data-close="">
									<svg class="close-icon"></svg>
								</button>
							</div>
							<div class="small-12 columns">
								<p> Harley-Davidson Motor Company has formed an exclusive alliance with EagleRider, the world's largest motorcycle rental and tour company. Motorcycle enthusiasts and travelers are able to rent and tour on the most current Harley-Davidson Touring and Cruiser motorcycles at EagleRider locations around the country. Customers will also benefit from an expanded network of EagleRider pick-up and drop-off points, as many of them will be located in Harley-Davidson dealerships across the country.</p>
							</div>
							<div class="small-6 columns text-right">
								<img class="" src="/public/image/harley-d1601a2721c517c36f1dd2ca6665ced4.png">
							</div>
							<div class="small-6 columns text-left">
								<img class="" src="/public/image/logo-732570a503b57eea5ffa859c1839ad68.png">
							</div>
							<div class="small-8 columns back-harley text-center">
								<a href="https://www.harley-davidson.com/" class="button hollow no-m bottom">Back to Harley-Davidson</a>
							</div>
							<div class="small-4 continue columns">
								<button class="button no-m bottom" aria-label="Dismiss alert" type="button" data-close="">
									<span aria-hidden="true">Continue</span>
								</button>
							</div>
						</div>
					</div>

					<script type="text/javascript">
						window.onDomLoadFN = function(){

							$('.js-sticky-bar .js-reveal-triger').on("click", function() {
								$(this).hide();
								$(".js-revealClose-triger").removeClass('hide').show();
								$(this).closest('.js-sticky-bar').css('height', 'auto');
								MotionUI.animateIn($(this).closest('.js-sticky-bar'), 'slide-in-up');
							});

							$('.js-sticky-bar .js-revealClose-triger').on("click", function() {
								$(this).hide();
								$(".js-reveal-triger").show();
								$(this).closest('.js-sticky-bar').css('height', '68px');
								MotionUI.animateIn($(this).closest('.js-sticky-bar'), 'slide-out-down');
							});

							$('.js-featured-slider').sly({
								horizontal: 1,
								itemNav: 'centered',
								speed: 300,
								mouseDragging: 1,
								touchDragging: 1,
								// activateOn: 'click',
								startAt: 1,
								activateMiddle: 'forceCentered',
								activatePageOn: 'click'
							});

							$('.js-adventure').sly({
								horizontal: 1,
								itemNav: 'basic',
								speed: 300,
								mouseDragging: 1,
								touchDragging: 1,
								activateOn: 'click',
								startAt: 0,
								activateMiddle: 'forceCentered',
								activatePageOn: 'click'
							});

							var combinedWidget = new ER.CombinedWidget($.extend({
									widgetContainer: $('.js-combinedWidget')
								},
								{"reservationWidgetOptions":{"reservation_type_id":1,"pickupMinDate":"07/04/2018","pickupMaxDate":"07/04/2021","dropoffMinDate":"07/04/2018","dropoffMaxDate":"07/04/2021","pickupWeekDays":false,"dropoffWeekDays":false,"numberOfMonths":1,"optionsPath":"/reservation_widget/options"}}
							));

							var initHarleyDavidson = function(){
								var harley_div = $('.js-harley-content');

								if(window.location.href.indexOf("ref=H-D") > -1){
									harley_div.show();
								}
								else{
									harley_div.hide();
								}
							};

							initHarleyDavidson();

							//window.addEventListener( "pageshow", function ( event ) {
							//  var historyTraversal = event.persisted ||
							//      ( typeof window.performance != "undefined" && window.performance.navigation.type === 2 );
							//  if ( historyTraversal ) {
							//    combinedWidget.onBack();
							//  }
							//});
						};
					</script>
				</div>

				<footer class="footer-container js-footer">




					<div class="js-dealsSubscriptionContainer">
						<!-- .subscribe-box -->


					</div>

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

<div style="display:none;" class="js-routes">
	<a rel="nofollow" class="js-changeLayoutUrl" href="https://www.eaglerider.cn/layouts/change"></a>
	<a rel="nofollow" class="js-changeCurrencyPath" href="https://www.eaglerider.cn/currencies/change"></a>
	<a rel="nofollow" class="js-changeCountryPath" href="https://www.eaglerider.cn/countries/change"></a>
	<a rel="nofollow" class="js-currenciesPath" href="https://www.eaglerider.cn/currencies"></a>
	<a rel="nofollow" class="js-authenticationPath" href="https://www.eaglerider.cn/authentication"></a>

	<a rel="nofollow" class="js-review_vote_path" href="https://www.eaglerider.cn/reviews/:id/vote"></a>
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
<script src="/public/js/homepage-501283832130c8fc41167e7bf673c97e.js" type="text/javascript"></script>
<script src="/public/js/reservation_widget.manifest-758ffe312a49b213f53c933a1562087e.js" type="text/javascript"></script>
<script type="text/javascript">
	if (window.onLibrariesLoad)
		window.onLibrariesLoad();

	$(document).ready(function(){
		ER.Layout.onDomLoad({
			loggedIn: false,
			widgetDateFormat: 'yy/mm/dd',
			current_language_code: 'zh',
			href_languages: [{"language_code":"en","language_route":"https://www.eaglerider.com/"},{"language_code":"de","language_route":"https://www.eaglerider.com/motorrad-mieten"},{"language_code":"fr","language_route":"https://www.eaglerider.com/location-moto"},{"language_code":"es","language_route":"https://www.eaglerider.com/alquiler-de-motos"},{"language_code":"nl","language_route":"https://www.eaglerider.com/motorverhuur"},{"language_code":"it","language_route":"https://www.eaglerider.com/noleggio-moto"},{"language_code":"pt","language_route":"https://www.eaglerider.com/aluguel-de-motos"},{"language_code":"zh","language_route":"https://www.eaglerider.cn/"},{"language_code":"ru","language_route":"https://www.eaglerider.com/ru"},{"language_code":"ar","language_route":"https://www.eaglerider.com/ar"},{"language_code":"ko","language_route":"https://www.eaglerider.com/ko"},{"language_code":"sv","language_route":"https://www.eaglerider.com/sv"},{"language_code":"no","language_route":"https://www.eaglerider.com/motorsykkelleie"},{"language_code":"da","language_route":"https://www.eaglerider.com/motorcykeludlejninger"},{"language_code":"ja","language_route":"https://www.eaglerider.com/ja"}],
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

<div class="hiddendiv common"></div><div class="reveal-overlay"><div class="reveal" id="forgetPassword" data-reveal="3kwrsk-reveal" role="dialog" aria-hidden="true" data-yeti-box="forgetPassword" data-resize="forgetPassword">
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
		</form></div></div><div class="reveal-overlay"><div class="tiny reveal" id="phonesNumbers" data-reveal="6nlafa-reveal" role="dialog" aria-hidden="true" data-yeti-box="phonesNumbers" data-resize="phonesNumbers">
		<ul class="vertical menu">
			<li><a href="tel:+1 310-321-3180">+1 310-321-3180</a></li>
		</ul>
		<button class="close-button" data-close="" aria-label="Close reveal" type="button">
			<span aria-hidden="true">×</span>
		</button>
	</div></div><div class="reveal-overlay"><div class="reveal" id="privacyPolicy" data-reveal="pi8kc7-reveal" role="dialog" aria-hidden="true" data-yeti-box="privacyPolicy" data-resize="privacyPolicy">
		<h3>EagleRider Privacy Policy</h3>

		<p class="lead">Yes! Please sign me up to receive the EagleRider newsletter and other emails and communications from EagleRider. By providing my personal information, I am consenting to its use and disclosure in accordance with EagleRider’s Privacy Policy. I further consent to its use to serve targeted ads to me including via social media. I understand that I may withdraw my consent and unsubscribe from receiving future communications at any time. Consent is being sought by EagleRider.</p>

		<button class="close-button" data-close="" aria-label="Close reveal" type="button">
			<span aria-hidden="true">×</span>
		</button>
	</div></div><div class="full reveal search-overlay countries-list-overlay js-countriesContainer without-overlay" data-v-offset="0px" data-animation-in="slide-in-up" data-animation-out="slide-out-down" id="localizations" data-reveal="9eukhj-reveal" role="dialog" aria-hidden="true" data-yeti-box="localizations" data-resize="localizations">
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
			window.location.href='/index.php/Home/mobile_Home';
		});
    </script>
</div>
</body>
</html>