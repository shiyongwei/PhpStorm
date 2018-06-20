<link href="/public/css/activity.css" type="text/css" rel="stylesheet" />
<div class="container">
	<div class="row">
		<div id="sidebar" class="sidebar span3">
			<div class="reservation sideWidget js-reservationWidget js-primary" id="reservation_widget">

				<div class="options js-options">
					<ul class="optionsblk widgetTabs">
						<li class="selected js-rentalTrigger">
							<a href="Javascript:;">租赁</a>
						</li>

						<li class="packages  js-packagesTrigger">
							<a href="Hotels">摩托车 &amp; 酒店</a>
						</li>

						<li class=" js-toursTrigger">
							<a href="Trave">旅游</a>
						</li>

						<li class="deals">
							<a href="/%E6%91%A9%E6%89%98%E8%BD%A6%E7%89%B9%E6%83%A0">促销特惠</a>
						</li>


					</ul>

					<div class="clearfix">


					</div>
				</div>

				<div class="js-rentalSearch" style="">
					<div class="header js-header">
						<p class="form_title">搜索租赁摩托车</p>
						<a class="max-min-btn visible-tablet js-toggle" href="Javascript:;"><b class="caret"></b></a>

						<div class="clearfix"></div>
					</div>

					<div class="js-reservationFormContainer">
						<form action="/reservation_widget" method="post" class="res_widget" target="_blank">
							<input type="hidden" name="authenticity_token" value="OAGmrg7Wkum+E07O297c3QOQaMobokqN3waX2R0FIwY=">
							<input type="hidden" name="reservation[reservation_type_id]" value="1">






							<div class="form_bot">
								<div class="loader js-loading" style="display:none;">
									<span><span><img src="https://d1y9jrrtx2baf.cloudfront.net/assets/rentals/layout/Loading-023da9421c5001dc2879575217b0add0.gif"></span></span>
								</div>


								<div class="field-block fullWidth headblk js-numberSelection">
									<label for="">需要几辆摩托车</label>
									<ul class="optionsblk motorNum">
										<li>
											<div class="iradio_square-blue checked" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="1" class="js-numberCheckbox" id="vehicles_count_1_1" checked="&quot;checked&quot;" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											<label class="radio" for="vehicles_count_1_1">1</label>
										</li>
										<li>
											<div class="iradio_square-blue" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="2" class="js-numberCheckbox" id="vehicles_count_2_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											<label class="radio" for="vehicles_count_2_1">2</label>
										</li>
										<li>
											<div class="iradio_square-blue" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="3" class="js-numberCheckbox" id="vehicles_count_3_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											<label class="radio" for="vehicles_count_3_1">3</label>
										</li>
										<li>
											<div class="iradio_square-blue" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="" class="js-numberCheckbox" id="vehicles_count_other_1" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											<label class="radio fieldIF js-label" for="vehicles_count_other_1">
												其他
											</label>
											<input type="text" title="Type number of motorcycles here" name="reservation[vehicles_count]" class="fieldIFinput js-numberField" value="" style="display: none;">
										</li>
									</ul>


								</div>


								<div class="field-block pickup-location">
									<label for="">行驶出发城市</label>
									<select name="reservation[pickup_location_id]" data-fieldType="pickup_location"
											class="selectWithSearch js-locationsSelect">
										<option value="" selected=&quot;selected&quot;>
											取车城市
										</option>
										<?php foreach ($city as $key=>$citys): ?>
											<option value="">
												<?php echo $citys['cit_name']?>
											</option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="field-block pickup-location">
									<label for="">行驶终点城市</label>
									<select name="reservation[pickup_location_id]" data-fieldType="pickup_location"
											class="selectWithSearch js-locationsSelect">
										<option value="" selected=&quot;selected&quot;>
											与取车城市相同
										</option>
										<?php foreach ($city as $key=>$citys): ?>
											<option value="">
												<?php echo $citys['cit_name']?>
											</option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="field-block">
									<label for="">出发日期/时间</label>
									<div class="dateTime">
										<input class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})">
									</div>
								</div>
								<div class="field-block returning-date">
									<label for="">返还日期/时间</label>
									<div class="dateTime">

										<input class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})">

									</div>
								</div>
								<div class="clearfix"></div>


								<div class="clearfix"></div>
							</div>

							<div class="widget_btns">
								<a href="Javascript:;" class="btn-highlight js-searchTrigger">立即搜索<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
							</div>
						</form>
					</div>


					<div class="promo-notifications js-promo" style="display: none; right: -100px; opacity: 0;">
						<div class="discounts group-discount">
							<span class="arrow"></span>
							<div class="body">
								<h4>团队预订可以享受更多优惠！</h4>
								<span class="percent">10%</span>
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

				<div class="js-toursSearch" style="display:none;">
					<div class="header js-header">
						<p class="form_title">搜索摩托车旅游</p>
						<a class="max-min-btn visible-tablet js-toggle" href="Javascript:;"><b class="caret"></b></a>

						<div class="clearfix"></div>
					</div>

					<div class="js-toursFormContainer">
						<form accept-charset="UTF-8" action="/tours/search_widget" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="OAGmrg7Wkum+E07O297c3QOQaMobokqN3waX2R0FIwY="></div>
							<div class="form_bot tourWidget">
								<div class="loader js-loading" style="display:none;">
									<span><img src="https://d1y9jrrtx2baf.cloudfront.net/assets/rentals/layout/Loading-023da9421c5001dc2879575217b0add0.gif"></span>
								</div>

								<div class="field-block fullWidth headblk">
									<ul class="optionsblk motorNum tours-type">
										<li>
											<div class="iradio_line-blue checked"><input checked="checked" class="js-line" id="tour_type_id_" name="tour_type_id" type="radio" value="" style="position: absolute; opacity: 0;"><div class="icheck_line-icon"></div>
												所有旅行项目
												<ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>

										</li>

										<li>
											<div class="iradio_line-blue"><input class="js-line js-tourType-guided" id="tour_type_id_1" name="tour_type_id" type="radio" value="1" style="position: absolute; opacity: 0;"><div class="icheck_line-icon"></div>
												团队游
												<ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>

											<div class="type-content">
												<ul>
													<li><span class="icons-checkmark"></span>骑行期间所需的燃油</li>
													<li><span class="icons-checkmark"></span>双语导游</li>
													<li><span class="icons-checkmark"></span>每日早餐</li>
													<li><span class="icons-checkmark"></span>定制夹克／门票／景点</li>
													<li><span class="icons-checkmark"></span>门到门行李运送</li>
													<li><span class="icons-checkmark"></span>摩托车租赁</li>
													<li><span class="icons-checkmark"></span>还有很多，很多！</li>
													<li><span class="icons-checkmark"></span>和团队一起骑行</li>
													<li><span class="icons-checkmark"></span>支持车辆和司机</li>
													<li><span class="icons-checkmark"></span>3到4星级的酒店</li>
													<li class="more-link "><a class="js-readMore" href="Javascript:;">
															查看更多</a>
													</li>
												</ul>
											</div>
										</li>

										<li>
											<div class="iradio_line-blue"><input class="js-line js-tourType-self_drive" id="tour_type_id_2" name="tour_type_id" type="radio" value="2" style="position: absolute; opacity: 0;"><div class="icheck_line-icon"></div>
												自驾游
												<ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>

											<div class="type-content">
												<ul>
													<li><span class="icons-checkmark"></span>专业设计的骑行路线</li>
													<li><span class="icons-checkmark"></span>电子版骑行路线指引</li>
													<li><span class="icons-checkmark"></span>提供GPS＊</li>
													<li><span class="icons-checkmark"></span>详细的旅行计划</li>
													<li><span class="icons-checkmark"></span>摩托车租赁</li>
													<li><span class="icons-checkmark"></span>摩托车友好酒店</li>
													<li class="more-link "><a class="js-readMore" href="Javascript:;">
															查看更多</a>
													</li>
												</ul>
											</div>
										</li>

									</ul>
								</div>
								<div class="tour-filters-widget">
									<div class="row-fluid">
										<div class="span6">
											<label for="">国家</label>
											<div class="select2-container selectWithSearch js-searchableSelect" id="s2id_country_id"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-9">所有国家</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen9" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-9" id="s2id_autogen9"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen9_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-9" id="s2id_autogen9_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-9">   </ul></div></div><select class="selectWithSearch js-searchableSelect" id="country_id" name="country_id" tabindex="-1" title="" style="display: none;"><option value="">所有国家</option><option value="13">澳大利亚</option>
												<option value="38">加拿大</option>
												<option value="105">India</option>
												<option value="157">墨西哥</option>
												<option value="198">新加坡</option>
												<option value="233">美国</option></select>
										</div>
										<div class="span6">
											<label for="">城市</label>
											<div class="select2-container selectWithSearch js-searchableSelect" id="s2id_start_location_id"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-10">所有城市</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen10" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-10" id="s2id_autogen10"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen10_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-10" id="s2id_autogen10_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-10">   </ul></div></div><select class="selectWithSearch js-searchableSelect" id="start_location_id" name="start_location_id" tabindex="-1" title="" style="display: none;"><option value="">所有城市</option><option value="2">旧金山门店</option>
												<option value="14">达拉斯门店</option>
												<option value="8">棕榈泉门店</option>
												<option value="197">芝加哥门店</option>
												<option value="10">丹佛门店</option>
												<option value="16">华盛顿门店</option>
												<option value="78">凤凰城门店</option>
												<option value="9">圣地亚哥门店</option>
												<option value="5">奥兰多机场门店</option>
												<option value="1">洛杉矶机场门店</option>
												<option value="6">拉斯维加斯门店</option>
												<option value="11">迈阿密门店</option>
												<option value="15">盐湖城门店</option>
												<option value="17">杰克逊镇门店</option>
												<option value="81">新奥尔良门店</option>
												<option value="305">Belgrade</option>
												<option value="38">弗拉格斯塔夫门店</option>
												<option value="20">西雅图门店</option>
												<option value="12">曼彻斯特门店</option>
												<option value="35">温哥华门店</option>
												<option value="64">科苏梅尔门店</option>
												<option value="74">波特兰门店</option>
												<option value="87">布里斯班门店</option>
												<option value="190">悉尼门店</option>
												<option value="199">Cairns</option>
												<option value="40">阿尔伯克基门店</option>
												<option value="219">Pensacola</option>
												<option value="13">那什维尔门店</option>
												<option value="221">Melbourne</option>
												<option value="226">Calgary</option>
												<option value="256">Milwaukee</option>
												<option value="26">劳德代尔堡门店</option>
												<option value="18">比林斯门店</option>
												<option value="79">新加坡门店</option>
												<option value="263">Boswell's Harley-Davidson</option>
												<option value="218">New Delhi</option></select>
										</div>
										<div class="span12">
											<label for="">旅游套餐名字</label>
											<div class="select2-container selectWithSearch js-searchableSelect" id="s2id_tour_id"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-11">所有旅游套餐名字</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen11" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-11" id="s2id_autogen11"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen11_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-11" id="s2id_autogen11_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-11">   </ul></div></div><select class="selectWithSearch js-searchableSelect" id="tour_id" name="tour_id" tabindex="-1" title="" style="display: none;"><option value="">所有旅游套餐名字</option><option value="2">San Francisco Motorcycle Tour</option>
												<option value="3">Texas Motorcycle Tour</option>
												<option value="4">Palm Springs Motorcycle Tour</option>
												<option value="6">Mid West Motorcycle Tour</option>
												<option value="7">Colorado Motorcycle Tour</option>
												<option value="8">Washington D.C. Motorcycle Tour</option>
												<option value="10">Arizona Motorcycle Tour</option>
												<option value="11">San Diego Motorcycle Tour</option>
												<option value="14">Georgia / Florida Motorcycle Tour</option>
												<option value="16">Northern California Motorcycle Tour</option>
												<option value="17">Pacific Coast Highway Motorcycle Tour</option>
												<option value="19">National Parks (Alternate) Motorcycle Tour</option>
												<option value="20">Las Vegas / Zion National Park Motorcycle Tour</option>
												<option value="24">Miami Paradise Motorcycle Tour</option>
												<option value="28">Los Angeles Motorcycle Tour</option>
												<option value="29">Chicago / Milwaukee Motorcycle Tour</option>
												<option value="30">Utah Motorcycle Tour</option>
												<option value="32">Texas 3 Day Motorcycle Tour</option>
												<option value="34">Denver Rocky Mountain Motorcycle Tour</option>
												<option value="35">Denver Motorcycle Tour</option>
												<option value="36">Denver / Steamboat Springs Motorcycle Tour</option>
												<option value="38">San Diego / Palm Springs Motorcycle Tour</option>
												<option value="39">Phoenix Motorcycle Tour</option>
												<option value="41">Las Vegas / Death Valley Motorcycle Tour</option>
												<option value="45">San Francisco / Napa Valley Motorcycle Tour</option>
												<option value="48">Miami South Florida Motorcycle Tour</option>
												<option value="49">Miami Key West Motorcycle Tour</option>
												<option value="50">Miami / Tampa Motorcycle Tour</option>
												<option value="51">Orlando North Florida Motorcycle Tour</option>
												<option value="53">Jackson Hole Motorcycle Tour</option>
												<option value="54">National Parks Motorcycle Tour</option>
												<option value="55">Orlando Florida Motorcycle Tour</option>
												<option value="57">66号公路摩托旅行</option>
												<option value="58">Wild West Motorcycle Tour</option>
												<option value="59">西部越野之旅—摩托车向导之旅</option>
												<option value="60">Wild West II Motorcycle Tour</option>
												<option value="67">New Orleans Motorcycle Tour</option>
												<option value="70">Yellowstone Motorcycle Tour</option>
												<option value="79">Southern California Motorcycle Tour</option>
												<option value="80">66号公路摩托之旅——向导摩托之旅</option>
												<option value="83">Baja California Motorcycle Tour</option>
												<option value="85">拉斯维加斯国家公园摩托车之旅——自驾游</option>
												<option value="86">西部经典摩托车之旅——摩托自驾游</option>
												<option value="87">Western Highlights II Motorcycle Tour</option>
												<option value="87">Western Highlights II Motorcycle Tour</option>
												<option value="89">Sturgis Bike Week Motorcycle Tour</option>
												<option value="90">Indian Spirits Motorcycle Tour</option>
												<option value="94">Yosemite / Sierra National Park Motorcycle Tour</option>
												<option value="95">Seattle / Canada Motorcycle Tour</option>
												<option value="97">Southwest Summer Special Motorcycle Tour</option>
												<option value="98">Southwest I Motorcycle Tour</option>
												<option value="99">Southwest II Motorcycle Tour</option>
												<option value="106">New Hampshire Motorcycle Tour</option>
												<option value="107">Vancouver / Pacific Coast Motorcycle Tour</option>
												<option value="108">Vancouver Island Motorcycle Tour</option>
												<option value="108">Vancouver Island Motorcycle Tour</option>
												<option value="109">Canadian Rockies Motorcycle Tour</option>
												<option value="114">Canada and Yellowstone Motorcycle Tour</option>
												<option value="115">Pacific Coast Tour™</option>
												<option value="142">Southern California 3 Day Motorcycle Tour</option>
												<option value="147">Route 66 – 8 Day Motorcycle Tour</option>
												<option value="178">旧金山北部摩托车之旅</option>
												<option value="179">旧金山南部摩托车之旅</option>
												<option value="180">棕榈泉 / 大熊湖摩托车之旅</option>
												<option value="181">旧金山 / 优胜美地摩托车之旅</option>
												<option value="183">科苏梅尔 （Cozumel）哈雷摩托车之旅</option>
												<option value="195">海岸到沙漠冒险之旅</option>
												<option value="209">Baja 加利福尼亚南向摩托车之旅</option>
												<option value="210">Baja 加利福尼亚北向摩托车之旅</option>
												<option value="224">拉斯维加斯极致户外摩托车之旅</option>
												<option value="225">波特兰摩托车之旅</option>
												<option value="229">布里斯班、悉尼摩托车之旅</option>
												<option value="230">摩羯海岸摩托车之旅</option>
												<option value="240">悉尼 / 布里斯班摩托车之旅</option>
												<option value="241">热带风情摩托车之旅</option>
												<option value="261">Byron Bay &amp; Hinterland Weekend Escape</option>
												<option value="264">Triple B – Blues, Bourbon, BBQ</option>
												<option value="265">Kangaroo Valley Overnighter</option>
												<option value="267">New South Wales Country Escape</option>
												<option value="269">Far North Scenic Loop </option>
												<option value="272">Route 66 West Albuquerque to Los Angeles Motorcycle Tour </option>
												<option value="273">Baja Explorer</option>
												<option value="281">Undara Sunset Tour</option>
												<option value="283">Route 66 West Chicago to Albuquerque Motorcycle Tour</option>
												<option value="284">Route 66 West: Albuquerque to Los Angeles Motorcycle Tour</option>
												<option value="284">Route 66 West: Albuquerque to Los Angeles Motorcycle Tour</option>
												<option value="285">Route 66 West: Chicago to Albuquerque Motorcycle Tour</option>
												<option value="287">Route 66 East: Los Angeles to Albuquerque Motorcycle Tour</option>
												<option value="288">Route 66 East Albuquerque to Chicago Motorcycle Tour</option>
												<option value="298">Coast to Country Tour</option>
												<option value="300">The Far East and Deep South Tour</option>
												<option value="301">Pacific Coast Motorcycle Tour - San Francisco to Los Angeles</option>
												<option value="302">Pacific Coast Motorcycle Tour - Los Angeles to San Francisco</option>
												<option value="314">Southern Belle Tour</option>
												<option value="320">Southwest Canyon Country Motorcycle Tour</option>
												<option value="335">Southern Appalachian Ride</option>
												<option value="343">South Africa Tour</option>
												<option value="357">Coast 2 Coast Motorcycle Tour</option>
												<option value="363">HOG Touring Rally – Colorado and Black Canyon of the Gunnison Tour - Unescorted </option>
												<option value="364">HOG Touring Rally - SoCal Highlights Tour - Unescorted </option>
												<option value="367">Cairns Select -  Reef Rainforest and Outback </option>
												<option value="369">Undara Sunset 2 Day Tour</option>
												<option value="370">Great Ocean Road Escape</option>
												<option value="371">Phillip Island Tour</option>
												<option value="372">Black Spur Bright</option>
												<option value="373">Great Ocean Road - Grampians Adventure</option>
												<option value="374">Murray River - Broken Hill</option>
												<option value="375">Alberta Rockies</option>
												<option value="376">Alberta Rockies and Badlands </option>
												<option value="377">The Civil War Tour</option>
												<option value="379">Mad Max Outback Tour</option>
												<option value="382">Route 66 Harley-Davidson Exclusive VIP Guided Tour</option>
												<option value="383">Route 66 Harley-Davidson Exclusive VIP 10 Day Guided Tour</option>
												<option value="384">HOG Touring Rally – Rainforests, Rivers &amp; Volcanoes Tour - Unescorted </option>
												<option value="385">Harley-Davidson 115th Anniversary Tour - 15-Day San Diego to Milwaukee HOG</option>
												<option value="386">Harley-Davidson 115th Anniversary Tour - 15-Day Seattle to Milwaukee HOG</option>
												<option value="387">Harley-Davidson 115th Anniversary Tour - 12-Day Fort Lauderdale to Milwaukee - HOG</option>
												<option value="399">Fifth Annual AWS re:Invent Harley Ride - Valley of Fire - Nov 25th </option>
												<option value="401">Baja California Motorcycle Tour</option>
												<option value="402">Milwaukee Route  66 Motorcycle Tour</option>
												<option value="403">HOG Touring Rally –  Yellowstone and the Beartooth Tour - Unescorted </option>
												<option value="404">Arizona Motorcycle Tour</option>
												<option value="405">Great Lakes Motorcycle Tour</option>
												<option value="406">115th Anniversary Route 66 - 19 Day Tour</option>
												<option value="408">Florida Keys Tour 12-Day</option>
												<option value="411">Singapore Island Ride</option>
												<option value="412">Johore Discovery Ride</option>
												<option value="413">Historical Malacca Discovery</option>
												<option value="415">Arizona Sun Winter Getaway </option>
												<option value="419">Canada to Yellowstone Motorcycle Tour - 2019</option>
												<option value="427">Southwest Winter Tour Getaway - Los Angeles to Las Vegas</option>
												<option value="428">Triple B - BlueRidge, Blues, and BBQ - Motorcycle Tour - 2019</option>
												<option value="431">Triple B -  BlueRidge, Blues, and BBQ - 7 Day Motorcycle Tour - 2019</option>
												<option value="432">Triple B -  BlueRidge, Blues, and BBQ - 8 Day Motorcycle Tour - 2019</option>
												<option value="436">Gulf Coast Winter Getaway</option>
												<option value="444">Southwest Winter Tour Getaway - Las Vegas to Los Angeles</option>
												<option value="471">The Great Himalayan Tour </option>
												<option value="471">The Great Himalayan Tour </option>
												<option value="480">The Himalayan Pangi Valley Tour</option>
												<option value="481">Fifth Annual AWS re:Invent Harley Ride – Red Rock Canyon - Nov 25th</option>
												<option value="482">Fifth Annual AWS re:Invent Harley Ride - Valley of Fire on Three Wheels - Nov 25th</option>
												<option value="483">Fifth Annual AWS re:Invent Harley Ride - Red Rock Canyon on Three Wheels - Nov 25th</option>
												<option value="491">Melbourne Select - Great Ocean Road &amp; Phillip Island</option>
												<option value="492">Sydney Select - Thunderbolts and Coastline</option>
												<option value="497">Blue Ridge Monuments to Mountains Motorcycle Tour</option>
												<option value="499">Incredible Spiti</option></select>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="widget_btns">
								<a href="Javascript:;" class="btn-highlight js-searchTrigger">立即搜索<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
							</div>

						</form>
						<script type="text/html" class="js-comparisonOverlay">

							<div class="modal hide fade wide-overlay" tabindex="-1" role="dialog"
								 aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header ">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									<h3 id="myModalLabel">探索方式</h3>
								</div>

								<div class="clearfix"></div>

								<div class="modal-body">
									<table dir="rtl" class="table table-bordered experience_table">
										<thead>
										<tr>
											<td dir="ltr">
												<b>团队旅行</b>
											</td>
											<td dir="ltr">
												<b>公路旅行</b>
											</td>
											<td dir="ltr">
												<b>自驾旅行</b>
											</td>
											<td dir="ltr">
												<b>摩托车＋酒店</b>
											</td>
											<td dir="ltr">
												<b>只有摩托车</b>
											</td>

											<td></td>
										</tr>
										</thead>

										<tbody>
										<tr>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>

											<td>最新型的摩托车租赁</td>
										</tr>
										<tr>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td></td>

											<td>摩托车友好酒店</td>
										</tr>
										<tr>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>

											<td>可以定制属于自己的旅行路线</td>
										</tr>
										<tr>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td></td>
											<td></td>

											<td>最佳摩托车旅行路线</td>
										</tr>
										<tr>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td></td>
											<td></td>

											<td>EagleRider旅行攻略</td>
										</tr>
										<tr>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td></td>
											<td></td>
											<td></td>

											<td>运送行李的支持车辆</td>
										</tr>
										<tr>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td></td>
											<td></td>
											<td></td>

											<td>备用摩托车</td>
										</tr>
										<tr>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td></td>
											<td></td>
											<td></td>

											<td>专业支持车驾驶员</td>
										</tr>
										<tr>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>

											<td>专业双语导游</td>
										</tr>
										<tr>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td></td>
											<td></td>
											<td></td>

											<td>团队旅行体验</td>
										</tr>
										<tr>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>

											<td>每天提供丰盛早餐</td>
										</tr>
										<tr>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>

											<td>骑行时所需的汽油</td>
										</tr>
										<tr>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td></td>
											<td></td>
											<td></td>

											<td>欢迎晚宴</td>
										</tr>
										<tr>
											<td>
												<img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png" />
											</td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>

											<td>EagleRider欢送派对</td>
										</tr>
										</tbody>

										<tfoot>
										<tr>
											<td dir="ltr">
												<span class="starting-at">起始价格</span>
												<span class="price-box">
            $349/day
          </span>
											</td>
											<td dir="ltr">
												<span class="starting-at">起始价格</span>
												<span class="price-box">
            $249/day
          </span>
											</td>
											<td dir="ltr">
												<span class="starting-at">起始价格</span>
												<span class="price-box">
            $229/day
          </span>
											</td>
											<td dir="ltr">
												<span class="starting-at">起始价格</span>
												<span class="price-box">
            $179/天
          </span>
											</td>
											<td dir="ltr">
												<span class="starting-at">起始价格</span>
												<span class="price-box">
            $149/day
          </span>
											</td>
											<td></td>
										</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</script>
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

				<div class="js-packagesSearch" style="display:none;">
					<div class="header js-header">
						<p class="form_title">定制个人行程 </p>
						<a class="max-min-btn visible-tablet js-toggle" href="Javascript:;"><b class="caret"></b></a>

						<div class="clearfix"></div>
					</div>

					<div class="js-reservationFormContainer">
						<form action="/reservation_widget" method="post" class="res_widget" target="_blank">
							<input type="hidden" name="authenticity_token" value="OAGmrg7Wkum+E07O297c3QOQaMobokqN3waX2R0FIwY=">
							<input type="hidden" name="reservation[reservation_type_id]" value="2">






							<div class="form_bot">
								<div class="loader js-loading" style="display:none;">
									<span><span><img src="https://d1y9jrrtx2baf.cloudfront.net/assets/rentals/layout/Loading-023da9421c5001dc2879575217b0add0.gif"></span></span>
								</div>


								<div class="field-block fullWidth headblk js-numberSelection">
									<label for="">需要几辆摩托车</label>
									<ul class="optionsblk motorNum">
										<li>
											<div class="iradio_square-blue checked" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="1" class="js-numberCheckbox" id="vehicles_count_1_2" checked="&quot;checked&quot;" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											<label class="radio" for="vehicles_count_1_2">1</label>
										</li>
										<li>
											<div class="iradio_square-blue" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="2" class="js-numberCheckbox" id="vehicles_count_2_2" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											<label class="radio" for="vehicles_count_2_2">2</label>
										</li>
										<li>
											<div class="iradio_square-blue" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="3" class="js-numberCheckbox" id="vehicles_count_3_2" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											<label class="radio" for="vehicles_count_3_2">3</label>
										</li>
										<li>
											<div class="iradio_square-blue" style="position: relative;"><input type="radio" name="reservation[vehicles_count]" value="" class="js-numberCheckbox" id="vehicles_count_other_2" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
											<label class="radio fieldIF js-label" for="vehicles_count_other_2">
												其他
											</label>
											<input type="text" title="Type number of motorcycles here" name="reservation[vehicles_count]" class="fieldIFinput js-numberField" value="" style="display: none;">
										</li>
									</ul>


								</div>

								<input type="hidden" name="reservation[route_id]" value="custom">



								<div class="clearfix"></div>
							</div>

							<div class="widget_btns">
								<a href="Javascript:;" class="btn-highlight js-searchTrigger">立即搜索<span class="btn-decor"></span><span class="icn-arrowWhiteRight"></span></a>
							</div>
						</form>
					</div>
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
							<a title="Email Us" href="/contact_us_help.js" class="btn-highlight js-captureLeadTrigger" rel="nofollow">
								<span class="icn-email"></span>联系我们！
							</a>

							<div class="clearfix"></div>
						</div>

						<p class="phon_numbers">
							<a href="tel:+1 310-321-3180">+1 310-321-3180</a>
						</p>
					</div>
				</div>
			</div>

		</div>

        <div class="main_cont span9" style="margin-top: 50px;">

            <ul class="ptTabs">
                <li class="active">
                    <a href="#">租赁购买条款</a>
                </li>
                <li class="">
                    <a href="Classify_clause">自驾游购买条款</a>
                </li>
                <li class="">
                    <a href="Team_clause">团队游购买条款</a>
                </li>


            </ul>

            <h1 class="bold">鹰骑租赁条款</h1>

            <h2 class="bold">租赁条款</h2>
            <div class="TCcontent">
                <h3>摩托车租赁要求</h3>
                <p>
                    21岁周岁以上<br>持有有效的摩托车驾驶证<br>信用卡
                </p>

                <h3>日租金包含以下：</h3>
                <p>
                    无限里程数（指定车型），不按小时收费<br>一个出租日按24小时计算<br>安全的车辆
                </p>

                <h3>客户使用手册</h3>
                <p>
                    每位客户将会获得一份摩托车使用手册。客户使用手册涵盖了安全操作摩托车的所有方面，客户的维护责任以及当地和该州的法律条款。
                </p>

                <h3>行李存放</h3>
                <p>
                    鹰骑免费提供存放顾客行李，机票，和其他贵重物品。顾客须自行承担可能的风险。
                </p>

                <h3>油费</h3>
                <p>
                    油费由顾客自行承担。鹰骑不负责油耗和里程损耗。你可以选择预付油费。如果还车时未加满油，也未预付油费，则会收取35美元油费
                </p>

                <h3>头盔（已包括在日租金中）</h3>
                <p>
                    预定摩托车或旅行服务时，头盔会一起提供。出于舒适和造型的考虑，顾客也可以带自己的头盔。另外，在鹰骑的各门店都可以买到头盔。在大部分城市都有法律规定必须戴头盔。
                </p>

                <h3>更多驾驶员</h3>
                <p>
                    可以免费增加一名驾驶员，不小于21岁，持有有效摩托车驾驶证。
                </p>

                <h3>维护责任</h3>
                <p>
                    顾客有责任每次加油时检查引擎油量和及时报告车辆机械问题。取车时会提供车辆维修费报销说明。如因顾客疏忽驾驶或未做正常维护，则顾客需自行承担损失。
                </p>

                <h3>更换车辆</h3>
                <p>
                    鹰骑保留为顾客更换摩托车的权利。如果鹰骑无法提供预订车辆则会为你替换成同类型或更好的摩托车。
                </p>

                <h3>押金</h3>
                <p>
                    取车时需支付1000美元到3000美元不等的押金。必须使用有效信用卡支付押金。
                </p>

                <h3>限制条件</h3>
                <p>
                    违反下列限制条件，顾客的所有VIP车辆损坏保险自动无效并自行承担损失。道路限制：出租车辆不允许在沙石路，沙滩等非公共道路上行驶。绝对不允许野外行驶。进入墨西哥境内，必须购买墨西哥保险和签订鹰骑书面协议或参与鹰骑旅行团。如违反以上规定，顾客的车辆损失险将作废，顾客需自行承担车辆损坏造成的损失。死亡谷限制：六月到八月的死亡谷十分危险，不建议进入。
                </p>

                <h3>RESERVATION AND DEPOSIT</h3>
                <p>
                </p><p>A 20% deposit is required at the time of booking for any reservation over $1,000 USD and booked more than 30 days before the pick-up date. The remaining balance must be paid in full within 30 days before the pick-up date. For a group booking that is paid by one credit card or debit card, EagleRider will charge the remaining group balance to the same card charged for the initial 20% deposit.</p><p>If you would like to pay the remaining balance with another card or wire transfer, please  <a href="/%E8%81%94%E7%B3%BB%E6%88%91%E4%BB%AC">contact us</a> and make arrangements before the remaining balance due date. By clicking "Book Reservation" at checkout, you give EagleRider permission to charge your card(s) 30 days before the pick-up date. You also authorize EagleRider to re-initiate any charge(s) to your card(s) that is dishonored for any reason. If EagleRider does not receive the remaining balance prior to 30 days before pick-up date, then EagleRider reserves the right to cancel the rental reservation and charge a cancellation fee.</p>
                <p></p>


                <h3>还车规定</h3>
                <p>
                    一个出租日是24小时。如还车超时则可能收取25美元的超时费。
                </p>

                <h3>退款规定</h3>
                <p>
                    所有确认的预订都不予退款，除非预定取消保护条款另有规定。提前还车不予退款。
                </p>
                <h3>store credits</h3>
                <p>
                    Store credits owned by an individual may only be used for reservations booked by and for that specific individual. Store Credits can be used once per payment (So once during booking, and multiple during subsequent payments). Store Credits expire one year after the issuing date.
                </p>
                <h3>支付方式</h3>
                <p>
                    鹰骑租赁接受以下支付方式：现金，旅行支票，VISA， Master Card， AMEX， Discover， Diners Club， and JCB。押金无法使用旅行支票支付。
                </p>

                <h3>摩托车赛事附加费</h3>
                <p>
                    所有摩托车活动/赛事期间的租赁都可能被收取45美元每天的附加费，并可能有最少租赁天数要求。
                </p>

                <h3>环境保护附加费</h3>
                <p>
                    环境保护附加费是租赁费的6.5%。
                </p>

                <h3>预定条款</h3>
                <p>
                    预订时需全额支付才能确保你要租的车辆和当天的价格。<br>预订费不予退款<br>优惠价有日期限制并取决于当时的车辆情况。<br>在不同的城市和季节，所有的租赁车型和价格都可能不一样。
                </p>
            </div>

            <h2 class="bold">保险和保护计划</h2>
            <div class="TCcontent">
                <h3>保险条款和附加费用</h3>
                <p>
                    国家强制责任险已包含在你的租赁中。请和你租车的门店确认哪些是国家规定。你的保险不包含车辆损坏或被盗。鹰骑也有很多 选择供顾客升级保险。请和你的保险公司确认，因为大部分信用卡公司和保险公司认为摩托车出租较特殊，一般与汽车出租处理方式不同。请务必与你的信用卡公司和保险公司确认承保范围。
                </p>

                <h3>Waiver coverage</h3>
                <p>
                </p><p>All Theft and Damage Waivers and Supplemental Liability Insurance options are subject to the express terms and conditions of the rental contract and do not include coverage for injury, personal property, or damage as the result of negligence such as illegal use or use of rental while under the influence of drugs or alcohol. A Police Report is required for all damages or accidents. All damages to rented motorcycle without a police report will be considered to be at the fault of the Renter.</p>
                <p></p>

                <p>补充责任险保障了超出第三方责任险所覆盖的当地法律规定的最低保额的经济损失。请注意补充责任险是补充性质的，是法律规定的所有保险以外的辅助保险。</p> <ul> <li>补充责任险（30万美元）提供了超出最低保额至30万美元的保险</li> <li>补充责任险（100万美元）提供了超出最低保额至100万美元的保险</li> </ul>

                <div class="tableContainer">
                    <table class="tableStyle">
                        <tbody>
                        <tr>
                            <td></td>
                            <td>
                                <strong> No Coverage purchased</strong>
                            </td>
                            <td>
                                <strong><span class="orange">VIP</span> Vacation Interruption Protection plus Theft &amp; Damage Waiver $25 per day</strong>
                            </td>
                            <td>
                                <strong><span class="orange">VIP-ZERO</span> Vacation Interruption Protection plus Theft &amp; Damage Waiver $35 per day</strong>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg" width="30%">
                                <strong> Damage Waiver </strong> <br>Include any and all accidental (non-negligent) damage to motorcycle and motorcycle accessories.*
                                <a href="/%E7%A7%9F%E8%B5%81/rental-terms-and-conditions" target="_blank">
                                    See Terms &amp; Conditions
                                </a>
                            </td>
                            <td width="20%">
                                <p>Renter pays <br>Full Retail Value of ALL damages</p>
                            </td>
                            <td width="20%">
                                <p><strong>$2000 DEDUCTIBLE</strong> <br>Renter pays $2000</p>
                            </td>
                            <td width="20%">
                                <p><strong>$0 DEDUCTIBLE</strong> <br>Renter pays $0</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg">
                                <strong>Theft Coverage </strong><br>Includes Theft of Motorcycle and motorcycle accessories provided motorcycle was locked with all locks supplied by rental company. Does NOT include personal belongings left on motorcycle or in saddlebags.
                            </td>
                            <td>
                                <p>Renter pays<br> <strong>Full Retail Value</strong> of Motorcycle</p>
                            </td>
                            <td>
                                <p><strong>$5,000 DEDUCTIBLE</strong><br> Renter pays Up to <strong>$5,000</strong> per occurrence.</p>
                            </td>
                            <td>
                                <p><strong>$1,000 DEDUCTIBLE</strong><br> Renter pays Up to <strong>$1,000</strong> per occurrence.</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg">
                                <strong>Vacation Interruption Protection (VIP)</strong><br>In the event of a mechanical breakdown requiring the motorcycle to be in repair for more than 12 hours. Flat tires <strong>do not</strong> constitute a breakdown.
                            </td><td>
                                <p>退还当天的租金或按比例退还租金</p>
                            </td>
                            <td>
                                <p>退还当天的租金+提供不多于$35每天的更换租赁</p>
                            </td>
                            <td>
                                <p>退还当天的租金+提供不多于$100每天的更换租赁</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg">
                                <strong>Personal Property Loss Protection</strong> In the event of theft or damage to personal property and belongings.
                            </td>
                            <td>
                                <p>不包含</p>
                            </td>
                            <td>
                                <p>不包含</p>
                            </td>
                            <td>
                                <p>Renter is provided coverage up to $500 for replacement of personal property. A Police Report is required.</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg">
                                <strong> Additional Driver</strong> Renters are fully covered when exchanging rental motorcycles within your riding group.
                            </td>
                            <td>
                                <p>不包含</p>
                            </td>
                            <td>
                                <p>不包含</p>
                            </td>
                            <td>
                                <p>Additional Renter(s) permitted to ride other rental motorcycles within group at no charge. Additional driver must sign rental agreement(s) at time of pick-up.</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg">
                                爆胎保护
                            </td>
                            <td>
                                <p>不包含</p>
                            </td>
                            <td>
                                <p>不包含</p>
                            </td>
                            <td>
                                <p>包含轮胎修理/人工</p>
                            </td>
                        </tr>
                        <tr>
                            <td class="bg">
                                押金
                            </td>
                            <td>
                                <p><strong>$5,000 Deposit</strong></p>
                            </td>
                            <td>
                                <p><strong>$2,000 Deposit</strong></p>
                            </td>
                            <td>
                                <p><strong>$100 Deposit</strong></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>

                <h3>Roadside Assistance</h3>
                <p>
                    Roadside Assistance Coverage provides towing and roadside assistance by an EagleRider approved vendor if your motorcycle becomes inoperable. The benefits include emergency road service towing (within 30 miles of occurrence) emergency fuel delivery (up to 2 gallons) and jump start services. In purchasing the Roadside Assistance Coverage, we will waive the cost of any approved tow or road side assistance service unlimited.
                </p>
                <h3>摩托车车型保证</h3>
                <p>
                    Any reservation made within 48 hours of pickup is subject to availability. Please call our store location to confirm.
                </p>
                <p>
                    选择了我们的“摩托车车型保证”后，您就可以确保能在取车时提取到预订时所选择的摩托车。而如果您没有选择这个选项，在一些情况下，我们可能无法提供您选择的摩托车，但会为您准备同类型的其他车辆。
                </p>
            </div>

        </div>

	</div>
</div>

