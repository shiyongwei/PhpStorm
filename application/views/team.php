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

			document.location.href = '/index.php/Team/mobile_Team';
		}

		$('.en').click(function() {
			var url = window.location.href;
			window.location.href='/index.php/Team?lang=en';
		});
		$('.cn').click(function() {
			window.location.href='/index.php/Team';
		});


	});
</script>
<link href="/public/css/classify.css" type="text/css" rel="stylesheet" />
<div class="js-page">
	<?php if(isset($_GET["lang"])): ?>
	<div class="container">
		<div class="row-fluid" style="margin-top: 30px;">
			<div class="main_cont span12">
				<div class="row-fluid">
					<h1 class="span8">
                        Motorcycle tour
					</h1>
				</div>


				<div class="search_bar js-searchContainer">
					<div class="btn-group">
						<button id="search-country-select" data-toggle="dropdown" class="btn-highlight dropdown-toggle">
							All City
						</button>

						<span class="arrow"><span class="arrow"></span></span>

						<ul class="dropdown-menu" data-text-for-selector="#search-country-select">

							<?php foreach ($city as $key=>$citys): ?>
							<li class="search-dropdown-select-option">
								<a href="#">
									<?php echo $citys['cit_name_en']?>
								</a>
							</li>
							<?php endforeach; ?>
						</ul>
					</div>

					<strong>
						<span class="no_results js-toursCount"><?php echo count($team)?></span>
						Team
                        Existing tourism projects
					</strong>
					<div class="clearfix"></div>
				</div>


				<div class="clearfix"></div>

				<section class="tours_list">
					<div class="row-fluid">
						<?php foreach ($team as $key=>$teams): ?>
							<!--one-->
							<div class="tour span4  js-tourContainer" data-duration="19" style="width: 31%;margin-left: 15px!important;margin-top: 15px;">
								<a href="team_detail?id=<?php echo $teams['id']?>">
									<div class="img_cont">
                                        <img alt="<?php echo $teams['teamtitle']?>" class="tour_image" src="<?php echo $teams['image_two']?>">
										<span class="tour_name">
                                    <span><?php echo $teams['teamtitle_en']?></span>
                                        <span class="tour_type">team tour</span>
                                    </span>
									</div>

									<span class="tour_dest">
                                    <!--Milwaukee, WI-->
                                    <em class="bold" dir="ltr"><?php echo $teams['day_en']?></em>
                                </span>

									<div class="actions">
										<div class="tour_price">
											<div class="starting_info">
												<span class="title">The starting price</span>
												<em class="bold">¥<?php echo $teams['price']?></em>
											</div>
											<span class="btn-highlight">View tour routes</span>
										</div>
									</div>
								</a>
							</div>
						<?php endforeach; ?>

					</div>

					<div class="clearfix"></div>


				</section>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<?php if(empty($_GET["lang"])): ?>
        <div class="container">
            <div class="row-fluid" style="margin-top: 30px;">
                <div class="main_cont span12">
                    <div class="row-fluid">
                        <h1 class="span8">
                            摩托车团队游
                        </h1>
                    </div>


                    <div class="search_bar js-searchContainer">
                        <div class="btn-group">
                            <button id="search-country-select" data-toggle="dropdown" class="btn-highlight dropdown-toggle">
                                所有城市
                            </button>

                            <span class="arrow"><span class="arrow"></span></span>

                            <ul class="dropdown-menu" data-text-for-selector="#search-country-select">

								<?php foreach ($city as $key=>$citys): ?>
                                    <li class="search-dropdown-select-option">
                                        <a href="#">
											<?php echo $citys['cit_name']?>
                                        </a>
                                    </li>
								<?php endforeach; ?>
                            </ul>
                        </div>

                        <strong>
                            <span class="no_results js-toursCount"><?php echo count($team)?></span>
                            团队
                            现有旅游项目
                        </strong>
                        <div class="clearfix"></div>
                    </div>


                    <div class="clearfix"></div>

                    <section class="tours_list">
                        <div class="row-fluid">
							<?php foreach ($team as $key=>$teams): ?>
                                <!--one-->
                                <div class="tour span4  js-tourContainer" data-duration="19" style="width: 31%;margin-left: 15px!important;margin-top: 15px;">
                                    <a href="team_detail?id=<?php echo $teams['id']?>">
                                        <div class="img_cont">
                                            <img alt="<?php echo $teams['teamtitle']?>" class="tour_image" src="<?php echo $teams['image_two']?>">
                                            <span class="tour_name">
                                    <span><?php echo $teams['teamtitle']?></span>
                                        <span class="tour_type">团队游</span>
                                    </span>
                                        </div>

                                        <span class="tour_dest">
                                    <!--Milwaukee, WI-->
                                    <em class="bold" dir="ltr"><?php echo $teams['day']?></em>
                                </span>

                                        <div class="actions">
                                            <div class="tour_price">
                                                <div class="starting_info">
                                                    <span class="title">起始价格</span>
                                                    <em class="bold">¥<?php echo $teams['price']?></em>
                                                </div>
                                                <span class="btn-highlight">查看旅游线路</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
							<?php endforeach; ?>

                        </div>

                        <div class="clearfix"></div>


                    </section>
                </div>
            </div>
        </div>
	<?php endif; ?>


	<div class="modal hide fade overlayWrapper js-tourInclusionsOverlay tourInclusions-wrapper">
		<div class="modal-header">
			<h3>
				<span class="translation_missing" title="translation missing: zh.views.motorcycle_tours.tour.table-tour-Inclusions.Tour-Inclusions">Tour Inclusions</span>
			</h3>

			<button class="close" aria-hidden="true" data-dismiss="modal" type="button">
				×
			</button>

			<div class="clearfix"></div>
		</div>

		<div class="modal-body">
			<div class="table-container">
				<table class="table">
					<thead>
					<tr>
						<th>EagleRider Exclusive Extras - 15 Day Tour</th>
						<th>单独购买价格</th>
						<th>With Tour Package</th>
					</tr>
					</thead>

					<tbody>
					</tbody>

					<tfoot>
					<tr>
						<td>旅行价值总计</td>
						<td colspan="2">
							每人
						</td>
					</tr>
					</tfoot>
					<tfoot>
					</tfoot>
				</table>
			</div>

			<div class="table-container">
				<table class="table">
					<thead>
					<tr>
						<th>EagleRider Exclusive Extras - 8 Day Tour</th>
						<th>单独购买价格</th>
						<th>EagleRider旅行套餐价格</th>
					</tr>
					</thead>

					<tbody>
					</tbody>

					<tfoot>
					<tr>
						<td>旅行价值总计</td>
						<td colspan="2">
							每人
						</td>
					</tr>
					</tfoot>
					<tfoot>
					</tfoot>
				</table>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		window.onDomLoadFN = function() {
			ER.ToursFiltration.init();

			$('.js-pagination .js-perPageSelect').change(function() {
				var selectedOption = $(this).find('option:selected');

				window.location.href = (window.location.pathname + $.query.set("per_page", selectedOption.val()).toString());
			});

			$('.js-tourInclusions').click(function() {
				ER.Layout.showOverlay($('.js-tourInclusionsOverlay'));
			});
		};
	</script>
</div>