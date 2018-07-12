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

			document.location.href = '/index.php/Reg/mobile_Reg';
		}
	});
</script>

<link href="/public/css/reg.css" type="text/css" rel="stylesheet" />
<div class="container">
    <div class="row r_rider_checkin" style="width: 877px;margin-left: 140px;">

        <div class="clearfix clearfix_one">
            <div style="width: 50%;float: left">
            <h1 class="bold" style="float: left;font-size: 1.5em;">
                <span>VIP快速取车登记</span>
            </h1>
            </div>
            <div class="rider_quistion_con reg">
                <h2 style="color: #343434;font-weight: 700;font-size: 1.5em;">
                    <span>对您的租赁有问题？</span>
                </h2>

                <p class="faqs_link" style="color: #555;">
                    <a href="/faqs/%E6%91%A9%E6%89%98%E8%BD%A6%E5%87%BA%E7%A7%9F">
                        请查看我们的租赁常见问题
                    </a>
                </p>
            </div>

        </div>

        <div class="alert alert-block alert-error js-error-alert" style="display:none;">
            <button data-dismiss="alert" class="close" type="button">×</button>
            <strong>噢,</strong>
            <p>
                VIP会员仅在预定完成72小时后才能进行快速登记。如果您在预定72小时之后还收到此邮件，请<a href="/%E8%81%94%E7%B3%BB%E6%88%91%E4%BB%AC?contact_info%5Blead_type_id%5D=20">点击这里</a> 联系我们的预定部门。感谢您的惠顾，抱歉给您带来不便。
            </p>
        </div>

        <div class="alert alert-block alert-error js-error-alert js-lookup-failure" style="display:none;">
            <button data-dismiss="alert" class="close" type="button">×</button>
            <strong>噢,</strong>
            <p></p>
        </div>

        <div class="welcom_con">
            <p>网上取车登记可以为您在取车时省去很多时间，让您在最短的时间内开始您的公路越野旅程！（"注意：取车时您还是需要出示您的驾照"）</p>
        </div>

        <a id="lookup" class="starting">&nbsp;</a>

        <div class="r_rider_checkin_form L-checkin_form bd">
            <div class="js-lookup">
                <form action="/reservation_lookup" method="Post" class="res_form js-lookupTrigger">
                    <div class="field_half control-group">
                        <label>名 <span class="required">*</span> </label>
                        <input value="" name="lookup[first_name]" type="text" required="">
                    </div>

                    <div class="field_half control-group">
                        <label>姓 <span class="required">*</span></label>
                        <input value="" name="lookup[last_name]" type="text" required="">
                    </div>

                    <div class="field_half control-group">
                        <label>取车城市 <span class="required">*</span></label>
                        <div class="dropdown">
                            <select name="lookup[pickup_location_id]" data-fieldtype="pickup_location" required="">
                                <option value="" selected="">
                                    选择一个
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
                                    <option value="331">
                                        Ellington
                                    </option>
                                </optgroup>
                                <optgroup label="Indiana">
                                    <option value="336">
                                        Terre Haute
                                    </option>
                                </optgroup>
                                <optgroup label="Iowa">
                                    <option value="314">
                                        Des Moines
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
                                    <option value="244">
                                        Adamec Harley-Davidson
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
                                    <option value="251">
                                        Tampa
                                    </option>
                                    <option value="26">
                                        劳德代尔堡门店
                                    </option>
                                    <option value="5">
                                        奥兰多机场门店
                                    </option>
                                    <option value="11">
                                        迈阿密门店
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
                                    <option value="279">
                                        Santa Clarita
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
                                    <option value="285">
                                        Knoxville Airport
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
                                    <option value="13">
                                        那什维尔门店
                                    </option>
                                </optgroup>
                                <optgroup label="科罗拉多州">
                                    <option value="282">
                                        Aurora
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
                                    <option value="333">
                                        Macedon
                                    </option>
                                    <option value="340">
                                        North Tonawanda
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
                                    <option value="240">
                                        Sochi
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
                        </div>
                    </div>
                    <div class="field_half control-group">
                        <div class="dateTime" style="    margin-top: 30px;">
                            <input class="Wdate" type="text" onClick="WdatePicker({el:this,dateFmt:'yyyy-MM-dd HH:mm:ss'})">
                        </div>
                    </div>

                    <div class="buttons_con">
                        <button class="btn-highlight btn-bok_now first_button" type="submit">查询</button>
                        <span class="smallSpinner js-spinner" style="display: none;">
        <img src="https://d1y9jrrtx2baf.cloudfront.net/assets/desktop/layout/smallSpinner-0f4bcc8a9d87f60343bc94b247bfbe7d.gif">
      </span>
                        <div class="clearfix"></div>
                    </div>
                </form>

                <div class="or_con" style="    border-bottom: 2px solid #c7c7c7;clear: both;padding-bottom: 5px;margin-bottom: 25px;">
                    <p class="or" style="position: relative;top: 16px;left: 366px;font-size: 2em;margin: 0 auto;display: inline-block;background: #fff;padding: 0 10px;font-weight: 700;">或者</p>
                </div>

                <form action="/reservation_lookup" method="POST" class="res_form js-lookupTrigger">

                    <div class="field_half control-group">
                        <label>Booking Confirmation Number <span class="required">*</span></label>
                        <input value="" type="text" name="lookup[identifier]" required="" class="js-identifierField">
                    </div>

                    <div class="field_half control-group">
                        <label>姓 <span class="required">*</span></label>
                        <input value="" type="text" name="lookup[last_name]" required="">
                    </div>

                    <div class="clearfix"></div>

                    <div class="buttons_con">
                        <button class="btn-highlight btn-bok_now first_button" type="submit">查询</button>
                        <span class="smallSpinner js-spinner" style="display: none;">
        <img src="https://d1y9jrrtx2baf.cloudfront.net/assets/desktop/layout/smallSpinner-0f4bcc8a9d87f60343bc94b247bfbe7d.gif">
      </span>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>


        </div>

        <div class="go_to_top_con"><a href="#lookup"></a></div>

        <div class="clearfix"></div>
    </div>
</div>