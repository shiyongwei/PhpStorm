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

                <li class="">
                    <a href="Rent_clause">租赁购买条款</a>
                </li>
                <li class="">
                    <a href="Classify_clause">自驾游购买条款</a>
                </li>
                <li class="active">
                    <a href="#">团队游购买条款</a>
                </li>


            </ul>

            <h1 class="bold">团队游购买条款</h1>

            <div class="TCcontent">
                <p class="bold">在鹰骑，服务永远高于一切。鹰骑为你精心策划旅游行程，提供最全的摩托车选择，而你只需用心体验沿途的风景，结识新的伙伴，以及梦想一下趟在鹰骑的奇妙旅程。</p>

                <h3>租赁确认函和信用卡保证金</h3>
                <p>当你签署租赁确认函以及信用卡保证协议时表明你已同意这些条款并默认你和鹰骑已签订了一份具有约束力的合同。请仔细阅读。未签署租赁确认和信用卡保证协议的顾客无法成为鹰骑的服务对象。</p>

                <h3>预订和保证金</h3>
                <p>预订时需要支付1000美元的押金，该押金不予退还。支付截止至团队游出发前65天，如你已签署信用卡授权，鹰骑会在出发前65天时在你的信用卡上收取费用。如你使用电汇或支票支付，未在行程开始前65天支付到帐，则鹰骑有权取消预订并收取取消费。</p>

                <h3>免责声明</h3>
                <p>每位鹰骑旅游团的团员都要在开团前接受并签署租赁协议和免责声明。未签署协议的将不能参与鹰骑旅游活动。我们的代理人可以提供免责声明的副本。</p>

                <h3>行李</h3>
                <p>在帮团员运送行李的过程中，鹰骑不会承担行李丢失，破损，或延迟递送所造成的损失。请团员自行购买行李保险。</p>

                <h3>取消和退款</h3>
                <p>如取消行程在出发前60天或以上，则将被收取1000美金每辆摩托车的处理费。如取消行程在出发前60天以内，则相应的费用将被收取：</p><ul class="row"><li class="span6">出发前60至31天内取消行程，将被扣除60%的预订费用</li><li class="span6">出发前30天以内取消行程，则将被扣除100%的预订费用</li><li class="span6">未取消也未出现者，则将被扣除100%的费用</li></ul><p>取消费将直接在你的信用卡中扣除，此项规定没有任何例外。因此，十分推荐顾客购买行程取消保险。</p>

                <h3>旅程取消</h3>
                <p>在这种情况下，顾客会提前被告知。鹰骑可以为你将团队游改为自驾游（包括租车和酒店住宿）。如因参团人数过少，但所有团员都同意增加一些额外费用，鹰骑可以仍然保留此团。如果团员不愿意支付额外的费用，鹰骑会全额退款。由于人数不够而取消行程所导致的团员个人额外损失，鹰骑将不予负责。这些损失包括预先支付的机票，酒店，和汽车租赁。如因某些原因，鹰骑必须要取消，提前或推迟某个旅游行程，更换旅行计划，以及改变其他相关的旅行安排，那么，由此造成的团员的损失和不便，鹰骑也不负有必须的责任。如在规定行程开始前取消行程，顾客将获得全额退款。</p>

                <h3>不遵守交通规则或团队旅行规定</h3>
                <p>如顾客不遵守交通法律法规或团队要求，鹰骑有权终止合同，并收回出租的摩托车。</p>

                <h3>租赁要求</h3>
                <ul class="row"><li class="span6">21岁周岁以上</li><li class="span6">持有有效的摩托车驾驶证</li><li class="span6">至少一年驾驶重型机车经验</li><li class="span6">信用卡</li></ul>

                <h3>导游</h3>
                <p>导游会负责为你准备一趟愉快的旅程。请在旅程开始时仔细听从导游的指导。导游会时不时地调整团队中最弱的团员的位置。请体谅我们无法满足每位团员的喜好和需求。在旅途过程中，每位团员都有机会独立享受旅行的快乐和刺激。</p>

                <h3>改变旅行安排</h3>
                <p>旅行项目按季节性推出。如因季节变更或天气条件改变而改变旅行线路和住宿安排，则行程安排也会相应改变。酒店，餐厅以及选择的公路也会做变更。</p>

                <h3>天气条件</h3>
                鹰骑每年制定一次旅行计划，都是在当地适于摩托车旅行的时候。对于旅途中经过的地方，那里的天气状况有可能出现很大的改变。鹰骑无法为不愉快或者不适合的天气条件负责。

                <h3>Waiver coverage</h3>
                <p>All Theft and Damage Waivers and Supplemental Liability Insurance options are subject to the express terms and conditions of the rental contract and do not include coverage for injury, personal property, or damage as the result of negligence such as illegal use or use of rental while under the influence of drugs or alcohol. A Police Report is required for all damages or accidents. All damages to rented motorcycle without a police report will be considered to be at the fault of the Renter.</p>

                <h3>保险</h3>
                <p>鹰骑建议你购买充分的旅游，健康，和意外事故保险，还有预定取消保险。目前，鹰骑提供的所有保险都按照租赁合同中规定的条款执行。这些保险并不包括人身伤害，个人财产损失，和因违法操作，嗑药或酒驾等疏忽驾驶造成的损坏。如因发生事故造成的损坏，须出示警察报告。如无警察报告，则所有摩托车损失由租车人承担。</p>

                <h3>免费接送</h3>
                <p>如顾客入住的酒店在鹰骑门店方圆7英里以内，鹰骑将提供免费接送服务。需满足以下条件：1.)由鹰骑安排车辆；2.)团队游行程在三天或以上。例外：在拉斯维加斯结束或开始的行程都不予提供免费接送服务。</p>

                <h3>自选取车地点</h3>
                <p>如你想在鹰骑安排的地点以外的地方取车，将被收取自选取车费。如有需求也会被收取车辆运输费。</p>

                <h3>自选还车地点</h3>
                <p>如你想在鹰骑安排的地点以外的地方还车，将被收取自选还车费。如有需求也会被收取车辆运输费。</p>

                <h3>头盔（已包括在套餐中）</h3>
                <p>预定摩托车或旅行服务时，头盔会一起提供。出于舒适和造型的考虑，顾客也可以带自己的头盔。另外，在鹰骑的各门店都可以买到头盔。</p>

                <h3>行李存放</h3>
                <p>鹰骑可以免费存放顾客的行李，机票，和其他贵重物品。顾客须自行承担可能的风险。</p>

                <h3>油费</h3>
                <p>油费由顾客自行支付。鹰骑将不承担油耗费用。</p>

                <h3>预订</h3>
                <p>使用以下方式进行预订：</p><ul class="row"><li class="span6">传真 310-536-6770</li><li class="span6">电话 310-536-6777</li><li class="span6">邮箱 tours@eaglerider.com</li><li class="span6">网址 www.eaglerider.com</li></ul><p>所有预订均按需操作，请和鹰骑团队旅游部确认你的预订</p>

                <h3>Payment by Credit Card or Wire Transfer</h3>
                <p>Payment of 20% Tour Deposit can be made by the following credit cards, VISA, Master Card, American Express, Discover or Diners Club. Balance payments can also be made by wire transfer. In this case the balance amount must be credited on the EagleRider account 60 days prior tour start.</p>

                <h3>payment by wire transfer</h3>
                <p>ALL wire transfer fees are to be paid by customer.</p><ul class="row"><li class="span12">Company Name: JC Bromac Corp. dba EagleRider</li><li class="span12">Bank Name: PNC Bank N.A.</li><li class="span12">Bank Address: East Brunswick, NJ</li><li class="span12">Telephone: 800-762-9473</li><li class="span12">Domestic Routing Number: 031207607</li><li class="span12">ACH Routing Number: 031207607</li><li class="span12">Account Number: 8026310353</li><li class="span12">SWIFT Code: PNCCUS33</li></ul><p>Please send a payment notification email to <a href="mailto:ar@eaglerider.com">ar@eaglerider.com</a> to ensure proper application of funds before or at the time of payment.</p>

            </div>
        </div>

	</div>
</div>

