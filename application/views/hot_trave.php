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

            document.location.href = '/index.php/hot_trave/mobile_hot_trave';
        }
    });
	$('.en').click(function() {
		var url = window.location.href;
		window.location.href='/index.php/hot_trave?lang=en';
	});
	$('.cn').click(function() {
		window.location.href='/index.php/hot_trave';
	});
</script>
<link href="/public/css/hot_trave.css" type="text/css" rel="stylesheet" />

<?php if(isset($_GET["lang"])): ?>
<?php foreach ($topic as $key=>$topics): ?>
<div class="js-page">
    <div class="row-fluid route" style="background-image: url('<?php echo $topics['image']?>');">
        <div class="span12 route-data">
            <h1 class="title"><?php echo $topics['topictitle_en']?></h1>
            <a href="hotTrave_detail?id=<?php echo $topics['topic_id']?>" class="discover btn">
                explore<span class="icon"></span>
            </a>
        </div>

        <a href="#" class="down js-arrow-btn"></a>
    </div>
	<?php endforeach; ?>
</div>
<?php endif; ?>
<?php if(empty($_GET["lang"])): ?>
<?php foreach ($topic as $key=>$topics): ?>
<div class="js-page">
    <div class="row-fluid route" style="background-image: url('<?php echo $topics['image']?>');">
        <div class="span12 route-data">
            <h1 class="title"><?php echo $topics['topictitle']?></h1>
            <a href="hotTrave_detail?id=<?php echo $topics['topic_id']?>" class="discover btn">
                探索<span class="icon"></span>
            </a>
        </div>

        <a href="#" class="down js-arrow-btn"></a>
    </div>
	<?php endforeach; ?>
</div>
<?php endif; ?>