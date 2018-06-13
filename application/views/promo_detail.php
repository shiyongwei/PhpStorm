<link href="/public/css/promo_detail.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/public/js/jquery-1.9.1.min.js"></script>
<?php foreach ($promotion as $key=>$promotions): ?>
<div class="js-page">
	<div class="container container_one">
		<div class="row hdl_content row_one">
			<div class=" hd_content hd_content_one" style="float: left;width: 69%;margin-right: 10px;">
				<div class=" deal_body add_one">
					<div class="deal_header" style="display: block;">
						<h1 class="secTitle add-two"><?php echo $promotions['promtitle']?></h1>
					</div>
					<div class="wrapperSeparate add-t">
						<div class="left add-w">
							<div class="img_container add-o">
								<img style="width: 100%;" src="<?php echo $promotions['image']?>">

							</div>
						</div>
						<div class="right add-m">
							<div style="display: block;">
								<div class="float_right discount_container" style="margin: 10px 0;">
									<div class="dis_price_con add-mm">
										<span class="discount_afte aft"><?php echo $promotions['price']?><small style="font-size: 78%;"></small></span> </div>

									<div class="package_price_con con">

										<div class="package_price pr" >
											<span class="title add-tit"">价值</span>
											<span class="package_calculations add-cal"><?php echo $promotions['worth']?></span>
										</div>

										<div class="package_price pr">
											<span class="title add-tit" style="display: block">折扣</span>
											<span class="package_calculations add-cal"><?php echo $promotions['discount']?></span>
										</div>

										<div class="package_price pr">
											<span class="title add-tit">你省去了</span>
											<span class="package_calculations add-cal"><?php echo $promotions['price']?></span>
										</div>
									</div>
									<div style="clear: both"></div>
									<hr>
									<div class="but_book_now add-now">
										<button class="btn-highlight btn-bok_now js-bookTrigger add" type="button" data-url="/%E6%91%A9%E6%89%98%E8%BD%A6%E7%89%B9%E6%83%A0/443/book" style="width: 60%;margin-right: 40px;">
											立即预定
										</button>

										<div class="clearfix"></div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<div class="about_deal wrapperSeparate" style="overflow: hidden;margin: 0px 0 20px;">
						<h2 style="margin: 15px 0 10px;text-transform: none;">关于这个折扣</h2>
						<p class="deal_details">
							<label>在此之前预订:</label>
							<span><?php echo $promotions['booking']?></span>
						</p>

						<p class="deal_details half " style="float: left;width: 50%;">
							<label>
								在此期间取车:
							</label>
							<span><?php echo $promotions['during']?></span>
						</p>

						<p class="deal_details half " style="float: left;width: 50%;">
							<label>
								取车于:
							</label>
							<span><?php echo $promotions['thecar']?></span>
						</p>

						<p class="deal_details half " style="float: left;width: 50%;">
							<label>
								最少车辆数:
							</label>
							<span><?php echo $promotions['vehicles']?></span>
						</p>
						<p class="deal_details half " style="float: left;width: 50%;">
							<label>
								最少租赁天数:
							</label>
							<span><?php echo $promotions['day']?></span>
						</p>
						<p class="deal_details">
						</p><p>
							暂无

						</p>
						<p></p>
					</div>
					<hr>
					<div class="clearing wrapperSeparate">
						<h3 class="add-h3">购买条款</h3>
						<p><?php echo $promotions['terms']?> </p>
					</div>
					<h3 class="wrapperSeparate availableMotorcycle add-text1">
						<span>

						  <span class="js-vehiclesList"><?php echo $promotions['text']?></span>
						</span>
					</h3>
					<h3 class="js-pariticaptingLocations">
						<span class="add-h3">联系方式</span>
					</h3>
					<div class="tel"><?php echo $promotions['city']?></div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="hotDealsList">
				<div class="row-fluid">
					<div class="span8"><h2>更多折扣</h2></div>
					<div class="span4"><a class="more_link" href="/%E6%91%A9%E6%89%98%E8%BD%A6%E7%89%B9%E6%83%A0">See All</a></div>
				</div>
				<?php foreach ($promotiont as $key=>$promotionts): ?>
				<div class="hdl_holder">
					<div class="hd_container">
						<div class="img_cont">
							<a href="promo_detail?id=<?php echo $promotionts['id']?>">
								<img src="<?php echo $promotionts['image']?>">
							</a>
						</div>
						<div class="hdl_texting_con">
							<div class="el_texting">
								<h3 class="secTitle">
									<a href="promo_detail?id=<?php echo $promotionts['id']?>"><span class="bold"><?php echo $promotionts['promtitle']?></span> </a>
								</h3>
							</div>
							<div class="discount_container"><span class="discount_before" dir="ltr"><?php echo $promotionts['worth']?></span> <span class="discount_after"><?php echo $promotionts['price']?><small></small></span>
								<a title="立即预定" data-url="/%E6%91%A9%E6%89%98%E8%BD%A6%E7%89%B9%E6%83%A0/302/book" class="btn-highlight js-bookTrigger" href="javascript:;">
									立即预定
								</a>
							</div>              </div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix">
					</div>
				</div>
				<?php endforeach; ?>

			</div>

		</div>

	</div>

	<script type="text/html" class="js-updatesTemplate">
		<div id="js-signup-for-update" class="modal hide fade overlayWrapper signup_for_update_wrapper" tabindex="-1"
			 role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<h3>注册以获得更新</h3>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<div class="clearfix"></div>
			</div>

			<div class="modal-body">
				<p>请在以下输入您的信息以订阅我们的邮件:<p>

				<form method="post" action="/%E6%91%A9%E6%89%98%E8%BD%A6%E7%89%B9%E6%83%A0/sign_up">
					<input type="hidden" name="authenticity_token" value="Z5qiHjqSK6pUT9UFx22AuvbOm6ZYukBEHESRyvzZOEw=" />

					<fieldset>
						<div class="field_half">
							<label>名 <span class="required">*</span></label>
							<input name="customer[first_name]" type="text" required/>
						</div>

						<div class="field_half control-group">
							<label>姓 <span class="required">*</span></label>
							<input name="customer[last_name]" type="text" required/>
						</div>

						<br class="clearfix"/>

						<div class="field_half control-group">
							<label>邮箱 <span class="required">*</span></label>
							<input name="customer[email]" type="text" required/>
						</div>

						<div class="field_half control-group">
							<label>邮编 <span class="required">*</span></label>
							<input name="customer[postal_code]" type="text" required/>
						</div>
					</fieldset>

					<button type="submit" class="btn-highlight signup_btn">
						注册
					</button>
				</form>
			</div>
		</div>
	</script>
	<script type="text/javascript">
		window.onDomLoadFN = function(){
			ER.Deals.SignUp.init();
			ER.Deals.Book.init();

			$(".js-vehiclesList").expander({
				expandText: "更多",
				slicePoint: 270,
				userCollapseText: "少",
			});

			$(".js-viewMoreTrigger").click(function(){
				$(".js-viewMoreContainer").show();
				$(this).hide();
				ER.Layout.scrollTo( $('.js-viewMoreContainer') );
			});

			$(".js-hideMoreTrigger").click(function(){
				$(".js-viewMoreContainer").hide();
				$(".js-viewMoreTrigger").show();
				ER.Layout.scrollTo( $('.js-pariticaptingLocations') );
			});
		};
	</script>


</div>
<?php endforeach; ?>