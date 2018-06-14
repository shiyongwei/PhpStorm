<link href="/public/css/classify.css" type="text/css" rel="stylesheet" />
<link href="/public/css/classify_one.css" type="text/css" rel="stylesheet" />
<?php foreach ($team as $key =>$teams): ?>
	<div class="js-page">
		<div class="header" style="background-color: transparent;">
			<div class="container">
				<div class="tour_meta">
					<div class="row row_one">
						<div class="tour_title span10" style="float: left">
							<h1 style="font-size: 25px;margin-top: 15px !important;border-right: 1px solid #555;padding: 0 30px;text-transform: none;"><?php echo $teams['teamtitle']?></h1>
						</div>

						<div class="type_duration span2 pull-right span_two">
							<span class="type" style="display: block;">团队游 旅游</span>
							<span class="duration durone"><?php echo $teams['day']?></span>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>

			<div class="container conone">
				<div class="span9 pull-right tourData tourone">
					<div class="tour_map mapone">
						<img alt="旅行地图" src="/public/image/hd_route66_19_days-1.jpg" style="width: 100%">
					</div>
					<div class="xtra_info" style="float: left;width: 42%;float: right;margin-top: 5px;">
						<ul style="    list-style: none;margin: 0;">

							<li class="wind_speed textt" dir="ltr">
								<?php echo $teams['kilometers']?>
							</li>

							<li class="season textt">
								<?php echo $teams['season']?>
							</li>

							<li class="temp textt" >
								<?php echo $teams['temperature']?>
							</li>
						</ul>

						<div class="media_actions" style="padding-top: 0;">
							<div class="top_btns" style="display: block;">
								<a href="Javascript:;" class="btn-highlight js-itineraryTrigger textone">
									行程
									<span class="iten_icon icon_decor iconone"></span>
								</a>
								<a href="Javascript:;" class="btn-highlight js-reviewsTrigger textone" style="border-left: 1px solid rgba(0,0,0,0.2);">
									评论
									<span class="rev_icon icon_decor"></span>
								</a>
								<div class="clearfix"></div>
							</div>

							<a href="Javascript:;" class="light_btn btn-highlight js-playTrigger" data-youtube-vid="http://www.youtube.com/embed/KC38ELJF-k4?autoplay=1" style="float: none;padding: 3px;background-color: #D13634;margin-top: 5px;text-align: left;color: #fff;">
								播放旅行视频
								<span class="play_icon icon_decor"></span>
							</a>

							<a href="Javascript:;" data-url="/%E6%91%A9%E6%89%98%E8%BD%A6%E6%97%85%E6%B8%B8/80/gallery" class="light_btn btn-highlight js-galleryTrigger" style="float: none;padding: 3px;background-color: #D13634;margin-top: 5px;text-align: left;color: #fff;">
								查看旅行照片
								<span class="galery_icon icon_decor"></span>
							</a>
						</div>

						<div class="promotion-box">
							<span class="icons-orange-star"></span>
							<span class="icons-orange-star"></span>
							<h4>
								<a href="javascript:;" class="js-tourInclusions">
									<span class="icons-exclamation-mark"></span>
									立即告诉我怎么节省¥12,734每人吧！
								</a>
							</h4>
						</div>

					</div>

				</div>
			</div>

			<img class="tourViewBg" src="https://d56b293rhv8dp.cloudfront.net/tours/80/cover_images/original/er-tours-header_0000s_0001_ap-062014-04553.jpg?1407947574" style="position: absolute;z-index: -1;top: 111px;left: 0px;height: 370px !important;width: 100% !important;">
		</div>

		<div class="container">
			<div class="row">
				<div class="sidebar span3">
					<div class="reservation sideWidget js-widget" style="margin-top: -382px;">
						<div class="tour_reservation js-tourReservation">
							<div class="header head">
								<strong class="form_title" style="padding: 0px 0px;">立即预订</strong>
								<a class="max-min-btn visible-tablet js-toggle" href="Javascript:;"><b class="caret"></b></a>
							</div>

							<div class="js-motorcycleTourReservation">
								<form accept-charset="UTF-8" action="/%E6%91%A9%E6%89%98%E8%BD%A6%E6%97%85%E6%B8%B8/80/reservation" class="res_widget tour_Widget" data-url="/%E6%91%A9%E6%89%98%E8%BD%A6%E6%97%85%E6%B8%B8/:id/reservation" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="uY0zlLg6Q4Az+f8ENqhrCXLaRLO8xJSREh2HuhMAD/s="></div>
									<div class="form_bot" style="padding: 10px 5% 8%;">
										<div class="tour-guides" style="    padding: 10px;
    border: 1px solid #444;
    text-align: center;">
											所有旅行都会提供Chinese／英语导游
										</div>
										<div class="field-block">
											<label>旅行起始日期</label>

											<div class="">
												<div class="dateTime">
													<div class="DepDate">
														<input class="js-pickupDate hasDatepicker" id="motorcycle_tour_reservation_pickup_date" name="motorcycle_tour_reservation[pickup_date]" type="text" value="05/30/2018">
														<span class="icn-Calendar js-calendarIcon" style="background-image: url('/public/image/Calendar_icon-aa77fa064febf5f3bb73e8d9af00a4b5.png');)"></span>
													</div>
												</div>
											</div>
											<p class="widget_error_container">


											</p>
										</div>

										<p class="widget_error_container"></p>


										<div class="tour_option_table">
											<label style="padding-left: 11px;">旅游套餐</label>

											<table class="options">
												<tbody><tr>
													<th>&nbsp;</th>
													<th>
														<img src="https://d1y9jrrtx2baf.cloudfront.net/assets/desktop/layout/blank-52ea19d5f89ac18bbfff328e961da00e.gif" class="tw_1person" alt="人数" title="人数">
													</th>
													<th>
														<img src="https://d1y9jrrtx2baf.cloudfront.net/assets/desktop/layout/blank-52ea19d5f89ac18bbfff328e961da00e.gif" class="tw_1ride" alt="摩托车" title="摩托车">
													</th>
													<th>
														<img src="https://d1y9jrrtx2baf.cloudfront.net/assets/desktop/layout/blank-52ea19d5f89ac18bbfff328e961da00e.gif" class="tw_1bedroom" alt="房间数" title="房间数">
													</th>
													<th>价格</th>
												</tr>

												<tr class="js-package" data-packageprice="18100.73" data-packageoptions="2/1/1" data-segmentid="">
													<td>
														<div class="field-block fullWidth">
															<ul class="optionsblk motorNum vertical_optionsblk">
																<li><div class="iradio_square-blue" style="position: relative;"><input id="motorcycle_tour_reservation_package_id_3127" name="motorcycle_tour_reservation[package_id]" type="radio" value="3127" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></li>
															</ul>
														</div>
													</td>

													<td>2</td>
													<td>1</td>
													<td>1</td>
													<td>
              <span class="priceContainer js-priceText" data-pricetemplate="¥[PRICE]">
                ¥18,100.73
              </span>
														<i>每人</i>
													</td>
												</tr>
												<tr class="js-package" data-packageprice="25803.17" data-packageoptions="2/2/1" data-segmentid="">
													<td>
														<div class="field-block fullWidth">
															<ul class="optionsblk motorNum vertical_optionsblk">
																<li><div class="iradio_square-blue" style="position: relative;"><input id="motorcycle_tour_reservation_package_id_3126" name="motorcycle_tour_reservation[package_id]" type="radio" value="3126" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></li>
															</ul>
														</div>
													</td>

													<td>2</td>
													<td>2</td>
													<td>1</td>
													<td>
              <span class="priceContainer js-priceText" data-pricetemplate="¥[PRICE]">
                ¥25,803.17
              </span>
														<i>每人</i>
													</td>
												</tr>
												<tr class="js-package" data-packageprice="33890.74" data-packageoptions="1/1/1" data-segmentid="">
													<td>
														<div class="field-block fullWidth">
															<ul class="optionsblk motorNum vertical_optionsblk">
																<li><div class="iradio_square-blue" style="position: relative;"><input id="motorcycle_tour_reservation_package_id_3128" name="motorcycle_tour_reservation[package_id]" type="radio" value="3128" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div></li>
															</ul>
														</div>
													</td>

													<td>1</td>
													<td>1</td>
													<td>1</td>
													<td>
              <span class="priceContainer js-priceText" data-pricetemplate="¥[PRICE]">
                ¥33,890.74
              </span>
														<i>每人</i>
													</td>
												</tr>
												</tbody></table>
											<p class="widget_error_container"></p>
										</div>

										<div class="field-block fullWidth js-numberSelection">
											<label>旅游套餐数量</label>

											<ul class="optionsblk motorNum">
												<li>
													<div class="iradio_square-blue checked" style="position: relative;"><input checked="checked" class="js-numberCheckbox" id="packages-count-1" name="motorcycle_tour_reservation[packages_count]" type="radio" value="1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
													<label class="radio" for="packages-count-1">1</label>
												</li>
												<li>
													<div class="iradio_square-blue" style="position: relative;"><input class="js-numberCheckbox" id="packages-count-2" name="motorcycle_tour_reservation[packages_count]" type="radio" value="2" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
													<label class="radio" for="packages-count-2">2</label>
												</li>
												<li>
													<div class="iradio_square-blue" style="position: relative;"><input class="js-numberCheckbox" id="packages-count-3" name="motorcycle_tour_reservation[packages_count]" type="radio" value="3" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
													<label class="radio" for="packages-count-3">3</label>
												</li>

												<li>
													<div class="iradio_square-blue" style="position: relative;"><input class="js-numberCheckbox" id="packages-count-other" name="motorcycle_tour_reservation[packages_count]" type="radio" value="" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
													<label class="radio js-label" for="packages-count-other">其他</label>
													<input class="js-numberField" id="motorcycle_tour_reservation_packages_count" name="motorcycle_tour_reservation[packages_count]" type="text" style="display: none;">
												</li>
											</ul>


											<div class="clearfix"></div>
										</div>

										<div class="price-guarantee-container js-popup">
											<a href="Javascript:;" class="js-popupTrigger" data-original-title="" title="">
												<span class="icons-ok" style="background-image: url('/public/image/icons-s591d0889db-2861c9d….png')"></span>最优价格保证
											</a>

											<div class="popover-content hide js-popupContent">
												<h4 class="best-price-guarantee-title">EagleRider价格保证</h4>
												<p>您将获得最优惠的价格</p>

											</div>
										</div>

									</div>

									<div class="widget_btns">
										<a href="Javascript:;" class="btn-highlight js-bookTrigger">
											预定旅游服务
											<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span>
										</a>
									</div>

									<div class="clearfix"></div>
								</form>
							</div>

							<div class="promo-notifications js-promo" style="display: none; right: -100px; opacity: 0;">
								<div class="discounts group-discount">
									<span class="arrow"></span>
									<div class="body">
										<h4>团队预订可以享受更多优惠！</h4>
										<span class="percent">5%</span>
										<span class="rule">4辆车<i>至少</i></span>
									</div>
									<div class="body">
										<h3>
											大部分预订只需支付20%的定金哦
										</h3>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>

						<div class="barblock included-box">
							<a href="javascript:;" class="js-tourInclusions">
								<h2>
									节省¥12,734
								</h2>
								<div class="btn-darkHighlight">
									<span class="text">告诉我节省内容有哪些 </span><span class="icn-arrowWhiteRight"></span>
								</div>
							</a>
						</div>

						<div class="barblock tour_listing">
							<h3 class="orange">更多体验66号公路的方式</h3>
							<div>
								<a class="thumbnail" title="Route 66" href="http://www.eaglerider.com/zh/route-66-motorcycle-tours">
									<img src="https://d56b293rhv8dp.cloudfront.net/homepage_touts/59/images/size287c/route66.jpg?1476900602" alt="Route 66">
									<p>
										Route 66
									</p>
								</a>
							</div>
						</div>


						<div class="barblock needHelp ">
							<img src="https://d1y9jrrtx2baf.cloudfront.net/assets/desktop/layout/need_help-69e7631247308fb6cb28fa1719efe3ff.jpg" alt="鹰骑帮助">
							<span class="need_help_text">
    需要<strong>帮助？ </strong>
  </span>
							<div class="needHelpContent">
								<div class="contact_us_help">
									<div class="email_us">
										<a title="Frequent Questions" href="/faqs/%E6%91%A9%E6%89%98%E8%BD%A6%E5%87%BA%E7%A7%9F" class="btn-highlight">
											<span class="icn-faq"></span>常见问题
										</a>
										<a title="Email Us" href="/contact_us_help.js?contact_info%5Bcategory_id%5D=2" class="btn-highlight js-captureLeadTrigger" rel="nofollow">
											<span class="icn-email"></span>联系我们！
										</a>

										<div class="clearfix"></div>
									</div>

									<p class="phon_numbers">
										<a href="tel:+1 310-321-3178">+1 310-321-3178</a>
									</p>
								</div>
							</div>
						</div>


					</div>
				</div>

				<div class="main_cont span9">
					<div class="about_tour" style="padding-top: 30px;">

						<div class="">
							<p style="font-size: 1.1em;"> <?php echo $teams['text']?>  </p>
							<div class="clearfix"></div>
						</div>

						<div class="clearfix"></div>
					</div>

					<div class="itenrary js-itinerarySection" id="itinerary">
						<h2 class="h2">旅游行程</h2>

						<div class="collapse_btns" style="margin-top: -50px;padding-bottom: 30px;">
							<a href="Javascript:;" class="coll_all btn-highlight js-collapse">
								全部关闭<span class="icn-arrowWhiteDown"></span>
							</a>          <a href="Javascript:;" class="btn-highlight js-expand">
								全部打开<span class="icn-arrowWhiteUp"></span>
							</a>          <div class="clearfix"></div>
						</div>

						<div class="clearfix"></div>

						<div class="accordion" id="tour_iten">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a href="#collapse-1" class="accordion-toggle" data-parent="#tour_iten" data-toggle="collapse">
										<span class="day">第1天</span>
										<span class="location">Chicago, IL - Arrival</span>
										<span class="miles" dir="ltr">
          <span>
            0.0 英里
          </span>
          <span>/</span>
          <span>
            0.0 公里
          </span>
        </span>
										<span class="toggle_icon">关闭 / 打开</span>
									</a>
									<div class="clearfix"></div>
								</div>

								<div id="collapse-1" class="accordion-body collapse in">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span5 day-gallery">
												<div class="modal-body">
													<div id="carousel-549" class="event_gallery carousel slide js-carousel">
														<!-- Carousel items -->
														<div class="carousel-inner">
															<div class="active item">
																<img alt="Location Image" src="/public/image/er-tours-daily_0000s_0001_shutterstock_84639565.jpg">
															</div>
														</div>

													</div>
												</div>
											</div>

											<div class="span7 day-data">
												<div class="tour_day_details">You arrive at Chicago International Airport and transfer on your own to your hotel. In Chicago you are in the biggest and most exciting of the Great Lake cities. Chicago has a skyline to rival any city – an amazing selection of top rated museums, restaurants, cafes, bars and nightclubs pay homage to the city’s strong jazz and blues heritage.</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>

							<div class="sep"></div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a href="#collapse-2" class="accordion-toggle" data-parent="#tour_iten" data-toggle="collapse">
										<span class="day">第2天</span>
										<span class="location">Chicago, IL – Springfield, IL</span>
										<span class="miles" dir="ltr">
          <span>
            205.0 英里
          </span>
          <span>/</span>
          <span>
            328.0 公里
          </span>
        </span>
										<span class="toggle_icon">关闭 / 打开</span>
									</a>
									<div class="clearfix"></div>
								</div>

								<div id="collapse-2" class="accordion-body collapse in">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span5 day-gallery">
												<div class="modal-body">
													<div id="carousel-550" class="event_gallery carousel slide js-carousel">
														<!-- Carousel items -->
														<div class="carousel-inner">
															<div class="active item">
																<img alt="Location Image" src="https://d56b293rhv8dp.cloudfront.net/tour_activity_assets/381/images/size279/er-tours-daily_0000s_0021_ap-061314-05275.jpg?1418945836">
															</div>
														</div>

													</div>
												</div>
											</div>

											<div class="span7 day-data">
												<div class="tour_day_details">This morning you pick up your bike and are off on the ultimate American road trip. Parallel to I-55, the legendary Route 66 began its run right here, cutting through the state before running all the way to the Pacific Coast. Get a glimpse of the old-time diners and other Americana that still stand. From Chicago you head south, pass the old truck stop town of McLean, and roar through the coal-mining area of Illinois – along the Pontiac Trail towards Springfield, the Illinois state capital.</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>

							<div class="sep"></div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a href="#collapse-3" class="accordion-toggle" data-parent="#tour_iten" data-toggle="collapse">
										<span class="day">第3天</span>
										<span class="location">Springfield, IL – Rolla, MO</span>
										<span class="miles" dir="ltr">
          <span>
            205.0 英里
          </span>
          <span>/</span>
          <span>
            328.0 公里
          </span>
        </span>
										<span class="toggle_icon">关闭 / 打开</span>
									</a>
									<div class="clearfix"></div>
								</div>

								<div id="collapse-3" class="accordion-body collapse in">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span5 day-gallery">
												<div class="modal-body">
													<div id="carousel-551" class="event_gallery carousel slide js-carousel">
														<!-- Carousel items -->
														<div class="carousel-inner">
															<div class="active item">
																<img alt="Location Image" src="https://d56b293rhv8dp.cloudfront.net/tour_activity_assets/382/images/size279/er-tours-daily_0000s_0018_ap-061414-07348.jpg?1418945837">
															</div>
														</div>

													</div>
												</div>
											</div>

											<div class="span7 day-data">
												<div class="tour_day_details">Your ride will take you further south as you head toward St. Louis and your overnight stop in Rolla. Along the way there will be numerous Highway towns, which invite you for a stop en route.  You should definitely see the famous Dixie truck stop, “Our Lady of the Highway Statue”, Litchfield and the “Paris Stop Café”. Take time to visit Meramec Caverns as you head for the Mississippi River and don’t miss the famous “Chain of Rocks Bridge”. You are in Missouri now, the state where the forests meet the prairie and the Mississippi River meets the Missouri River. Enjoy the short ride today into the "Gateway to the West," St. Louis. This amazing city rests along the shores of the mighty Mississippi River and is home to some of the best live music and BBQ ribs in the country. You will then continue to Rolla, MO, known as “The Middle of Everywhere” for your overnight stay.</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>

							<div class="sep"></div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a href="#collapse-4" class="accordion-toggle" data-parent="#tour_iten" data-toggle="collapse">
										<span class="day">第4天</span>
										<span class="location">Rolla, MO – Tulsa, OK</span>
										<span class="miles" dir="ltr">
          <span>
            290.0 英里
          </span>
          <span>/</span>
          <span>
            464.0 公里
          </span>
        </span>
										<span class="toggle_icon">关闭 / 打开</span>
									</a>
									<div class="clearfix"></div>
								</div>

								<div id="collapse-4" class="accordion-body collapse in">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span5 day-gallery">
												<div class="modal-body">
													<div id="carousel-552" class="event_gallery carousel slide js-carousel">
														<!-- Carousel items -->
														<div class="carousel-inner">
															<div class="active item">
																<img alt="Location Image" src="https://d56b293rhv8dp.cloudfront.net/tour_activity_assets/383/images/size279/er-tours-daily_0000s_0017_ap-061514-08493.jpg?1418945837">
															</div>
														</div>

													</div>
												</div>
											</div>

											<div class="span7 day-data">
												<div class="tour_day_details">From Rolla your ride will take you along the northern edge of the Ozark Mountains, which occupies most of southern Missouri and northern Arkansas. This area remained frontier territory until the timber companies moved in at the end of the 19th century. None of the Ozark Peaks are particularly high, though the roads through switch, dip, climb, and swerve to provide stunning views of steep hillsides thick with oak, elm, hickory, and redbud – all quite resplendent in fall. Ride through the famous towns of Lebanon and Conway and stop in Carthage to see the old beautiful courthouse. Before you enter the state of Oklahoma make a stop in Joplin. Oklahoma contains more miles of the old highway than any other state and is a great place for bikers and old-road fans. Today’s destination is Tulsa, Oklahoma.  From its early days through its peak as an oil-boom town and up to the present, Tulsa has always been a city striving to move forward.</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>

							<div class="sep"></div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a href="#collapse-5" class="accordion-toggle" data-parent="#tour_iten" data-toggle="collapse">
										<span class="day">第5天</span>
										<span class="location">Tulsa, OK – Clinton, OK</span>
										<span class="miles" dir="ltr">
          <span>
            195.0 英里
          </span>
          <span>/</span>
          <span>
            312.0 公里
          </span>
        </span>
										<span class="toggle_icon">关闭 / 打开</span>
									</a>
									<div class="clearfix"></div>
								</div>

								<div id="collapse-5" class="accordion-body collapse in">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span5 day-gallery">
												<div class="modal-body">
													<div id="carousel-553" class="event_gallery carousel slide js-carousel">
														<!-- Carousel items -->
														<div class="carousel-inner">
															<div class="active item">
																<img alt="Location Image" src="https://d56b293rhv8dp.cloudfront.net/tour_activity_assets/384/images/size279/er-tours-daily_0000s_0016_ap-061614-09348.jpg?1418945838">
															</div>
														</div>

													</div>
												</div>
											</div>

											<div class="span7 day-data">
												<div class="tour_day_details">From Tulsa you head west through Oklahoma to your stop in Clinton. Cover a hundred miles of the Old West’s Indian country between Tulsa and Oklahoma City. In the 1830’s all this land, held to be useless, was set aside as Indian Territory – a convenient dumping ground for the so-called Five Civilized Tribes who blocked white settlement in the southern states. The Choctaw and the Chickasaw of Mississippi, the Seminole of Florida, and the Creek of Alabama were each assigned a share, while the rest was given to the Cherokee from Carolina, Tennessee, and Georgia. Today, the state has a large Native American Indian population – “Oklahoma” is the Choctaw word for “red man”. Further west you ride through El Reno – over the mile-long bridge, near Bridgeport and into Oklahoma City, the heart and soul of Route 66 country! Continue to our overnight stay in Clinton.</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>

							<div class="sep"></div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a href="#collapse-6" class="accordion-toggle" data-parent="#tour_iten" data-toggle="collapse">
										<span class="day">第6天</span>
										<span class="location">Clinton, OK – Amarillo, TX</span>
										<span class="miles" dir="ltr">
          <span>
            180.0 英里
          </span>
          <span>/</span>
          <span>
            288.0 公里
          </span>
        </span>
										<span class="toggle_icon">关闭 / 打开</span>
									</a>
									<div class="clearfix"></div>
								</div>

								<div id="collapse-6" class="accordion-body collapse in">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span5 day-gallery">
												<div class="modal-body">
													<div id="carousel-554" class="event_gallery carousel slide js-carousel">
														<!-- Carousel items -->
														<div class="carousel-inner">
															<div class="active item">
																<img alt="Location Image" src="https://d56b293rhv8dp.cloudfront.net/tour_activity_assets/385/images/size279/er-tours-daily_0000s_0015_ap-061714-00760.jpg?1418945839">
															</div>
														</div>

													</div>
												</div>
											</div>

											<div class="span7 day-data">
												<div class="tour_day_details">This morning you should rise early for your journey into the Panhandle, the southernmost portion of the Great Plains, often called “the real Texas”. It certainly fulfills the fantasy of what Texas should look like. Once the buffalo – and the natives – had been driven away from what was seen as perilous and uninhabitable frontier country, the Panhandle began to yield great natural resources in the 1870’s. Helium, oil as well as agriculture, brought wealth to the region and is home to some of the world’s largest ranches.  Amarillo may seem cut off from the rest of Texas, but it stands on one of the great American cross-country routes – I-40 (once legendary Route 66), roughly 300 miles from Albuquerque and 250 miles west of Oklahoma City. Amarillo takes its name from Spanish and it means “yellow”, the color that is so characteristic to this region.  Why don’t you enjoy dinner tonight at "The Big Texan Steakhouse". </div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>

							<div class="sep"></div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a href="#collapse-7" class="accordion-toggle" data-parent="#tour_iten" data-toggle="collapse">
										<span class="day">第7天</span>
										<span class="location">Amarillo, TX – Santa Fe, NM</span>
										<span class="miles" dir="ltr">
          <span>
            290.0 英里
          </span>
          <span>/</span>
          <span>
            464.0 公里
          </span>
        </span>
										<span class="toggle_icon">关闭 / 打开</span>
									</a>
									<div class="clearfix"></div>
								</div>

								<div id="collapse-7" class="accordion-body collapse in">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span5 day-gallery">
												<div class="modal-body">
													<div id="carousel-555" class="event_gallery carousel slide js-carousel">
														<!-- Carousel items -->
														<div class="carousel-inner">
															<div class="active item">
																<img alt="Location Image" src="https://d56b293rhv8dp.cloudfront.net/tour_activity_assets/386/images/size279/er-tours-daily_0000s_0014_ap-061814-01014.jpg?1418945839">
															</div>
														</div>

													</div>
												</div>
											</div>

											<div class="span7 day-data">
												<div class="tour_day_details">Today you leave Texas and are on your way into “The Land of Enchantment”, New Mexico.  Be sure to pass through the world famous Cadillac Ranch before leaving Texas.  Stop at the ghost town of Glen Rio, where you can stand with one foot in New Mexico and the other one in Texas. With 4 states behind and 3 still ahead, you ride your bike through the land of Commanche Indians and into Tucumcari, the biggest town between Albuquerque and Amarillo. You head up into the high plains of Santa Fe in central New Mexico. Santa Fe is one of America’s oldest and most beautiful cities, and will be your base for the next two nights. Enjoy our hotel in Santa Fe close to the historic town square and mission.</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>

							<div class="sep"></div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a href="#collapse-8" class="accordion-toggle" data-parent="#tour_iten" data-toggle="collapse">
										<span class="day">第8天</span>
										<span class="location">Santa Fe, NM - Free Day</span>
										<span class="miles" dir="ltr">
          <span>
            0.0 英里
          </span>
          <span>/</span>
          <span>
            0.0 公里
          </span>
        </span>
										<span class="toggle_icon">关闭 / 打开</span>
									</a>
									<div class="clearfix"></div>
								</div>

								<div id="collapse-8" class="accordion-body collapse in">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span5 day-gallery">
												<div class="modal-body">
													<div id="carousel-556" class="event_gallery carousel slide js-carousel">
														<!-- Carousel items -->
														<div class="carousel-inner">
															<div class="active item">
																<img alt="Location Image" src="https://d56b293rhv8dp.cloudfront.net/tour_activity_assets/387/images/size279/er-tours-daily_0000s_0012_ap-061914-03620.jpg?1418945840">
															</div>
														</div>

													</div>
												</div>
											</div>

											<div class="span7 day-data">
												<div class="tour_day_details">Today is at leisure to rest and enjoy the distinctive flavor of this nearly 400-year-old city. The blend of cultures here becomes evident in the southwestern architectural style so closely associated with New Mexico’s capital city. Perhaps you would like to take a ride along the river valley to the old Native American Indian town of Taos, enjoy a sunrise hot air balloon ride, or play cowboy for a day on a horseback ride along a mountain or canyon trail. </div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>

							<div class="sep"></div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a href="#collapse-9" class="accordion-toggle" data-parent="#tour_iten" data-toggle="collapse">
										<span class="day">第9天</span>
										<span class="location">Santa Fe, NM – Gallup, NM</span>
										<span class="miles" dir="ltr">
          <span>
            200.0 英里
          </span>
          <span>/</span>
          <span>
            320.0 公里
          </span>
        </span>
										<span class="toggle_icon">关闭 / 打开</span>
									</a>
									<div class="clearfix"></div>
								</div>

								<div id="collapse-9" class="accordion-body collapse in">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span5 day-gallery">
												<div class="modal-body">
													<div id="carousel-557" class="event_gallery carousel slide js-carousel">
														<!-- Carousel items -->
														<div class="carousel-inner">
															<div class="active item">
																<img alt="Location Image" src="https://d56b293rhv8dp.cloudfront.net/tour_activity_assets/388/images/size279/er-tours-daily_0000s_0011_ap-062014-04123.jpg?1418945841">
															</div>
														</div>

													</div>
												</div>
											</div>

											<div class="span7 day-data">
												<div class="tour_day_details">This morning you head south, down to Albuquerque, New Mexico’s largest city, home to a third of the state’s population. Albuquerque is sprawling at the heart of New Mexico, where the main east - west road and rail routes cross both the Rio Grande and the old road south to Mexico. You cross the Rio Grande and head west out into the open country and the hues of the Navajo wilderness. Further on ride through Grants and along Cibola National Forest towards the famous Route 66 town of Gallup, an old railroad town and Indian stronghold. Enjoy your stay tonight with a host of fellow riders from around the world at one of the many biker friendly hotels in Gallup.</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>

							<div class="sep"></div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a href="#collapse-10" class="accordion-toggle" data-parent="#tour_iten" data-toggle="collapse">
										<span class="day">第10天</span>
										<span class="location">Gallup, NM – Flagstaff, AZ</span>
										<span class="miles" dir="ltr">
          <span>
            185.0 英里
          </span>
          <span>/</span>
          <span>
            296.0 公里
          </span>
        </span>
										<span class="toggle_icon">关闭 / 打开</span>
									</a>
									<div class="clearfix"></div>
								</div>

								<div id="collapse-10" class="accordion-body collapse in">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span5 day-gallery">
												<div class="modal-body">
													<div id="carousel-558" class="event_gallery carousel slide js-carousel">
														<!-- Carousel items -->
														<div class="carousel-inner">
															<div class="active item">
																<img alt="Location Image" src="https://d56b293rhv8dp.cloudfront.net/tour_activity_assets/389/images/size279/er-tours-daily_0000s_0010_ap-062114-05717.jpg?1418945842">
															</div>
														</div>

													</div>
												</div>
											</div>

											<div class="span7 day-data">
												<div class="tour_day_details">From Gallup it’s only about half an hour to the Arizona border.  Once you enter Arizona enjoy a very scenic ride through the Petrified Forest, a fossilized prehistoric forest of giant trees that has been unearthed by erosion.  Just west of Petrified National Forest you get to Holbrook and Winslow, two old Route 66 towns that are kept alive by transcontinental truckers. Tonight we will stay in Flagstaff, the northern Arizona community on historic Route 66 and is the regions hub for visits to the Grand Canyon.</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>

							<div class="sep"></div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a href="#collapse-11" class="accordion-toggle" data-parent="#tour_iten" data-toggle="collapse">
										<span class="day">第11天</span>
										<span class="location">Flagstaff , AZ – Williams, AZ</span>
										<span class="miles" dir="ltr">
          <span>
            165.0 英里
          </span>
          <span>/</span>
          <span>
            264.0 公里
          </span>
        </span>
										<span class="toggle_icon">关闭 / 打开</span>
									</a>
									<div class="clearfix"></div>
								</div>

								<div id="collapse-11" class="accordion-body collapse in">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span5 day-gallery">
												<div class="modal-body">
													<div id="carousel-559" class="event_gallery carousel slide js-carousel">
														<!-- Carousel items -->
														<div class="carousel-inner">
															<div class="active item">
																<img alt="Location Image" src="https://d56b293rhv8dp.cloudfront.net/tour_activity_assets/390/images/size279/er-tours-daily_0000s_0000_shutterstock_149612675.jpg?1418945843">
															</div>
														</div>

													</div>
												</div>
											</div>

											<div class="span7 day-data">
												<div class="tour_day_details">Today you will be able to visit one of the Natural Wonders of the World, the Grand Canyon.  The Grand Canyon comprises of layered rocks, cliffs, hills, and valleys and is among the earth’s greatest on-going geological spectacles.   Today you will have plenty of time to ride along the rim and stop for amazing vistas and photos.  Tonight you will overnight in Williams where you can walk, dine and shop in this historic downtown on Route 66.</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>

							<div class="sep"></div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a href="#collapse-12" class="accordion-toggle" data-parent="#tour_iten" data-toggle="collapse">
										<span class="day">第12天</span>
										<span class="location">Williams, AZ – Laughlin, NV</span>
										<span class="miles" dir="ltr">
          <span>
            190.0 英里
          </span>
          <span>/</span>
          <span>
            304.0 公里
          </span>
        </span>
										<span class="toggle_icon">关闭 / 打开</span>
									</a>
									<div class="clearfix"></div>
								</div>

								<div id="collapse-12" class="accordion-body collapse in">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span5 day-gallery">
												<div class="modal-body">
													<div id="carousel-560" class="event_gallery carousel slide js-carousel">
														<!-- Carousel items -->
														<div class="carousel-inner">
															<div class="active item">
																<img alt="Location Image" src="https://d56b293rhv8dp.cloudfront.net/tour_activity_assets/1197/images/size279/er-tours-daily_0000s_0007_ap-062214-07801.jpg?1418946442">
															</div>
														</div>

													</div>
												</div>
											</div>

											<div class="span7 day-data">
												<div class="tour_day_details">Cruise down “Memory Lane” and head towards the town of Seligman, one of the longest surviving stretches of the “Mother Road”. From Seligman, Route 66 heads off on a northern loop through the Hualapai Indian Reservation and a dozens of quickly fading towns.  From Seligman you stay on Route 66 all the way into Kingman. Leaving Kingman, stay on Route 66 via the Oatman Highway.  Continue on Route 66 / Oatman Highway as you wind through the canyons surrounded by active and extinct gold mines.  The town of Oatman is considered a living Ghost Town.  Much of the village stays true to its heritage with staged gunfights and wild burros wandering the streets.  Continue to the magical oasis in the dessert, Laughlin.</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>

							<div class="sep"></div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a href="#collapse-13" class="accordion-toggle" data-parent="#tour_iten" data-toggle="collapse">
										<span class="day">第13天</span>
										<span class="location">Laughlin, NV – Victorville, CA</span>
										<span class="miles" dir="ltr">
          <span>
            215.0 英里
          </span>
          <span>/</span>
          <span>
            344.0 公里
          </span>
        </span>
										<span class="toggle_icon">关闭 / 打开</span>
									</a>
									<div class="clearfix"></div>
								</div>

								<div id="collapse-13" class="accordion-body collapse in">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span5 day-gallery">
												<div class="modal-body">
													<div id="carousel-561" class="event_gallery carousel slide js-carousel">
														<!-- Carousel items -->
														<div class="carousel-inner">
															<div class="active item">
																<img alt="Location Image" src="https://d56b293rhv8dp.cloudfront.net/tour_activity_assets/1196/images/size279/er-tours-daily_0000s_0005_ap-062414-09567.jpg?1418946440">
															</div>
														</div>

													</div>
												</div>
											</div>

											<div class="span7 day-data">
												<div class="tour_day_details">Today it’s off to California, the final state on your ride down legendary Route 66. Ride along the Mojave Desert, which offers some of the most dramatic scenery in Southern California…rolling with lush grasses, startling volcanic formations, large stands of Joshua trees, and even in some Pinyon pines. From the desert you get right into the cool pines of the San Gabriel Mountains. Head for Victorville, which is your base for tonight.</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>

							<div class="sep"></div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a href="#collapse-14" class="accordion-toggle" data-parent="#tour_iten" data-toggle="collapse">
										<span class="day">第14天</span>
										<span class="location">Victorville, CA – Los Angeles, CA</span>
										<span class="miles" dir="ltr">
          <span>
            110.0 英里
          </span>
          <span>/</span>
          <span>
            176.0 公里
          </span>
        </span>
										<span class="toggle_icon">关闭 / 打开</span>
									</a>
									<div class="clearfix"></div>
								</div>

								<div id="collapse-14" class="accordion-body collapse in">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span5 day-gallery">
												<div class="modal-body">
													<div id="carousel-562" class="event_gallery carousel slide js-carousel">
														<!-- Carousel items -->
														<div class="carousel-inner">
															<div class="active item">
																<img alt="Location Image" src="https://d56b293rhv8dp.cloudfront.net/tour_activity_assets/1198/images/size279/er-tours-daily_0000s_0003_ap-062514-00323.jpg?1418946443">
															</div>
														</div>

													</div>
												</div>
											</div>

											<div class="span7 day-data">
												<div class="tour_day_details">Today you are on your way to the final destination of your legendary American road trip, Los Angeles. You head for the end of Route 66 at the Santa Monica Pier. Santa Monica is one of the oldest and largest LA’s resorts. Once a wild beachfront playground, it is now a self-consciously liberal and healthy community. Spend the afternoon sightseeing and enjoy Hollywood with the famous Chinese Theatre, Beverly Hills, Rodeo Drive, and much more. Riders always have mixed emotions as they stand at the "End of the Trail" sign on the Santa Monica Pier. There is a sense of joy and elation at having completed a journey most people only dream about, and a sense of sadness at the thought of the ride having come to an end. The great news is that next ride is just a dream away, and EagleRider looks forward to welcoming you back very soon.</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>

							<div class="sep"></div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a href="#collapse-15" class="accordion-toggle" data-parent="#tour_iten" data-toggle="collapse">
										<span class="day">第15天</span>
										<span class="location">Los Angeles, CA - Departure</span>
										<span class="miles" dir="ltr">
          <span>
            0.0 英里
          </span>
          <span>/</span>
          <span>
            0.0 公里
          </span>
        </span>
										<span class="toggle_icon">关闭 / 打开</span>
									</a>
									<div class="clearfix"></div>
								</div>

								<div id="collapse-15" class="accordion-body collapse in">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span5 day-gallery">
												<div class="modal-body">
													<div id="carousel-563" class="event_gallery carousel slide js-carousel">
														<!-- Carousel items -->
														<div class="carousel-inner">
															<div class="active item">
																<img alt="Location Image" src="https://d56b293rhv8dp.cloudfront.net/tour_activity_assets/393/images/size279/er-tours-daily_0000s_0002_shutterstock_18420307.jpg?1418945844">
															</div>
														</div>

													</div>
												</div>
											</div>

											<div class="span7 day-data">
												<div class="tour_day_details">Today your exciting trip will conclude in Los Angeles. Please be sure to let us know if you need an extra night or two in L.A. to enjoy the sights.

												</div>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>


						</div>
					</div>


					<div class=" reviews js-reviewsSection" id="reviews">
						<div class="rev_head">
							<span class="no_reviews">0</span>

							<span>用户评价</span>

							<span class="view_all">(<a href="/%E6%91%A9%E6%89%98%E8%BD%A6%E8%87%AA%E9%A9%BE%E6%B8%B8/route-66-motorcycle-tour/reviews">查看所有</a>)</span>

							<a href="Javascript:;" class="btn-highlight js-updateReviewTrigger">
								添加评论<span class="add_icon"></span>
							</a>

							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="js-galleryTemplate"></div>

		<div class="modal hide fade overlayWrapper js-tourInclusionsOverlay tourInclusions-wrapper">
			<div class="modal-header">
				<h3>
					15天自驾66号公路摩托之旅——向导摩托之旅所包含的服务
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
							<th></th>
							<th>单独购买价格</th>
							<th>EagleRider旅行套餐价格</th>
						</tr>
						</thead>

						<tbody>
						<tr class="js-tourItem">
							<td class="js-popup" data-popupplacement="top">
								新款摩托车租赁

								<a href="Javascript:;" class="info-icon js-popupTrigger" data-original-title="" title="">i</a>

								<div class="popover-content hide js-popupContent">

									<p>提供印第安、哈雷、本田、宝马、雅马哈、胜利，或者北极星等品牌摩托车租赁。</p>
								</div>
							</td>

							<td>¥14,345 /person</td>
							<td>包含的</td>
						</tr>
						<tr class="js-tourItem">
							<td class="js-popup" data-popupplacement="top">
								2-3星级酒店住宿

							</td>

							<td>¥22,048 /person</td>
							<td>包含的</td>
						</tr>
						<tr class="js-tourItem">
							<td class="js-popup" data-popupplacement="top">
								无限里程

							</td>

							<td>¥962 /person</td>
							<td>包含的</td>
						</tr>
						<tr class="js-tourItem">
							<td class="js-popup" data-popupplacement="top">
								驾驶员和乘客的头盔

							</td>

							<td>¥962 /person</td>
							<td>包含的</td>
						</tr>
						<tr class="js-tourItem">
							<td class="js-popup" data-popupplacement="top">
								Custom Daily Itinerary

								<a href="Javascript:;" class="info-icon js-popupTrigger" data-original-title="" title="">i</a>

								<div class="popover-content hide js-popupContent">

									<p>Scenic routing designed exclusively for you, be sure to let us know if you want to make changes to any of the routes. </p>
								</div>
							</td>

							<td>¥2,407 /person</td>
							<td>包含的</td>
						</tr>
						<tr class="js-tourItem">
							<td class="js-popup" data-popupplacement="top">
								鹰骑摩托车路线图

								<a href="Javascript:;" class="info-icon js-popupTrigger" data-original-title="" title="">i</a>

								<div class="popover-content hide js-popupContent">

									<p>Custom maps highlighting EagleRider locations and our top routes across North America. </p>
								</div>
							</td>

							<td>¥121</td>
							<td>包含的</td>
						</tr>
						<tr class="js-tourItem">
							<td class="js-popup" data-popupplacement="top">
								往返于住宿酒店和EagleRider门店间的交通

							</td>

							<td>¥192</td>
							<td>包含的</td>
						</tr>
						<tr class="js-tourItem">
							<td class="js-popup" data-popupplacement="top">
								消费税

							</td>

							<td>¥5,584 /person</td>
							<td>包含的</td>
						</tr>
						</tbody>

						<tfoot>
						<tr>
							<td>旅行价值总计  </td>
							<td colspan="2">
								¥46,625 每人
							</td>
						</tr>

						<tr>
							<td>旅行价格总计  </td>
							<td colspan="2">
								¥33,890 每人
							</td>
						</tr>

						<tr>
							<td>总共节省  </td>
							<td colspan="2">
								¥12,734 每人
							</td>
						</tr>
						</tfoot><tfoot>
						</tfoot></table>
				</div>

				<div class="table-container">
					<table class="table">
						<thead>
						<tr>
							<th>不包含</th>
						</tr>
						</thead>

						<tbody>
						<tr class="js-tourItem">
							<td class="js-popup" data-popupplacement="top">
								机票

							</td>
						</tr>
						<tr class="js-tourItem">
							<td class="js-popup" data-popupplacement="top">
								正餐（除了注明会提供的以外）

							</td>
						</tr>
						<tr class="js-tourItem">
							<td class="js-popup" data-popupplacement="top">
								任何未在“旅行中包括”所列的
							</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>



	</div>
<?php endforeach; ?>