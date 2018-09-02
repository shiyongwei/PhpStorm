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

			document.location.href = '/index.php/Team_detail/mobile_Team_detail';
		}
	});
</script>
<link href="/public/css/classify.css" type="text/css" rel="stylesheet" />
<link href="/public/css/classify_one.css" type="text/css" rel="stylesheet" />
	<div class="js-page">
		<div class="header" style="background-color: transparent;">
			<div class="container">
				<div class="tour_meta">
					<div class="row row_one">
						<div class="tour_title span10" style="float: left">
							<h1 style="font-size: 25px;margin-top: 15px !important;border-right: 1px solid #555;padding: 0 30px;text-transform: none;"><?php echo $team['teamtitle']?></h1>
						</div>

						<div class="type_duration span2 pull-right span_two">
							<span class="type" style="display: block;">团队游 旅游</span>
							<span class="duration durone"><?php echo $team['day']?></span>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>

			<div class="container conone">
				<div class="span9 pull-right tourData tourone">
					<div class="tour_map mapone">
						<img alt="<?php echo $team['teamtitle']?>" src="<?php echo $team['image_two']?>" style="width: 100%">
					</div>
					<div class="xtra_info" style="float: left;width: 42%;float: right;margin-top: 5px;">
						<ul style="    list-style: none;margin: 0;">

							<li class="wind_speed textt" dir="ltr">
								<?php echo $team['kilometers']?>
							</li>

							<li class="season textt">
								<?php echo $team['season']?>
							</li>

							<li class="temp textt" >
								<?php echo $team['temperature']?>
							</li>
						</ul>

						<div class="media_actions" style="padding-top: 0;">
<!--							<div class="top_btns" style="display: block;">-->
<!--								<a href="Javascript:;" class="btn-highlight js-itineraryTrigger textone">-->
<!--									行程-->
<!--									<span class="iten_icon icon_decor iconone"></span>-->
<!--								</a>-->
<!--								<a href="Javascript:;" class="btn-highlight js-reviewsTrigger textone" style="border-left: 1px solid rgba(0,0,0,0.2);">-->
<!--									评论-->
<!--									<span class="rev_icon icon_decor"></span>-->
<!--								</a>-->
<!--								<div class="clearfix"></div>-->
<!--							</div>-->
						</div>
<!--						<div class="promotion-box">-->
<!--							<span class="icons-orange-star"></span>-->
<!--							<span class="icons-orange-star"></span>-->
<!--							<h4>-->
<!--								<a href="javascript:;" class="js-tourInclusions">-->
<!--									<span class="icons-exclamation-mark"></span>-->
<!--									立即告诉我怎么节省¥12,734每人吧！-->
<!--								</a>-->
<!--							</h4>-->
<!--						</div>-->

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
                                            <label for="">旅行起始日期</label>
                                            <div class="dateTime">
                                                <input class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})">
                                            </div>
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
							<img src="<?php echo $side[0]['image'] ?>" alt="鹰骑帮助">
							<span class="need_help_text">
    需要<strong>帮助？ </strong>
  </span>
							<div class="needHelpContent">
								<div class="contact_us_help">
									<div class="email_us">
										<a title="Frequent Questions" href="Problem" class="btn-highlight">
											<span class="icn-faq"></span><?php echo $side[0]['head'] ?>
										</a>


										<div class="clearfix"></div>
									</div>

									<p class="phon_numbers">
										<a href="tel:+1 310-321-3178"><?php echo $side[0]['foot'] ?></a>
									</p>
								</div>
							</div>
						</div>


					</div>
				</div>

				<div class="main_cont span9">
					<div class="about_tour" style="padding-top: 30px;">

						<div class="">
							<p style="font-size: 1.1em;"> <?php echo $team['text']?>  </p>
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
                            <?php if (!empty($date)): ?>
	                        <?php foreach ($date as $key =>$dates): ?>
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a href="#collapse-1" class="accordion-toggle" data-parent="#tour_iten" data-toggle="collapse">
                                        <span class="day"><?php echo $dates['0'];?></span>
                                        <span class="location"><?php echo $dates['1'];?></span>
                                        <span class="miles" dir="ltr">
                                          <span>
                                           <?php echo $dates['2']?>
                                          </span>
                                        </span>
<!--                                        <span class="toggle_icon">关闭 / 打开</span>-->
                                    </a>
                                    <div class="clearfix"></div>
                                </div>

                                <div id="collapse-1" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <div class="row-fluid">
                                            <div class="span5 day-gallery">
                                                <div class="modal-body" style="padding: 0 0!important;">
                                                    <div id="carousel-549" class="event_gallery carousel slide js-carousel">
                                                        <!-- Carousel items -->
                                                        <div class="carousel-inner">
                                                            <div class="active item">
                                                               <?php echo $dates['3'];?>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="span7 day-data">
                                                <div class="tour_day_details"><?php echo $dates['4'];?></div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

<!--							<div class="sep"></div>-->
							<?php endforeach; ?>
<!--							-->
                            <?php endif; ?>
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
