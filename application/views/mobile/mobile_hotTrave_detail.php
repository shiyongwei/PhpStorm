<!DOCTYPE html>
<!--[if IE 7]>
<html lang="en" class="ie ie7"><![endif]-->
<!--[if IE 8]>
<html lang="en" class="ie ie8"><![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie ie9"><![endif]-->
<!--[!(IE)]><!-->
<html lang="en"><!--<![endif]-->
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>鹰骑特惠详情页</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-title" content="EagleRider Motorcycle Rentals">
    <meta name="description" content="摩托车租赁和旅游 #302: 2017骑往斯特吉斯 ">
    <meta name="keywords" content="2017骑往斯特吉斯,  Motorcycle Special #302">

    <meta content="authenticity_token" name="csrf-param">
    <meta content="qtaBaS/rrTzbVuQ+WRzc0/2+h9O4hHpkATrgMClckyQ=" name="csrf-token">
    <link href="/public/css/mobile.css" media="all" rel="stylesheet" type="text/css">
</head>
<body class="zh dealView" id="">
<!-- global header and navigations -->
<header class="global-header">
    <a href="javascript:;" class="site-logo">摩托车&lt;br&gt;租赁与旅游</a>
    <a href="#js-site-nav" class="site-nav-toggle js-global-nav-toggle"></a>
    <a href="#" class="user-nav-toggle js-global-nav-toggle"></a>
</header>

<nav class="site-nav js-global-nav js-navigation" id="js-site-nav">
    <ul>
        <li class="language">
            <a href="javascript:;">
                <span>国家</span>
                <span class="customSelectInner" style="width: 100px; display: inline-block;">
          <span class="flag-zh"></span>
        </span>
                <select class="languageList styled js-custom js-countriesSelect hasCustomSelect" style="width: 100px; position: absolute; opacity: 0; height: 23px; font-size: 12px;">
                    <option value="233" data-languagecode="en">
                        United States of America
                    </option>
                </select><span class="customSelect languageList styled js-custom js-countriesSelect" style="display: inline-block;"><span class="customSelectInner" style="width: 100px; display: inline-block;">
              中国
            </span></span>
            </a>
        </li>
    </ul>

    <ul>
        <li>
            <a href="/index.php/Rent/mobile_Rent?id=<?php echo 0;?>">租赁
            </a>
        </li>
        <li>
            <a href="/index.php/Trave/mobile_Trave">旅游
            </a>
        </li>
        <li>
            <a href="/index.php/Discounts/mobile_Discount">促销特惠
            </a>
        </li>
        <li>
            <a href="/index.php/Artivity/mobile_Artivity">摩托车活动
            </a>
        </li>
        <li>
            <a href="/index.php/City/mobile_city">城市
            </a>
        </li>
        <li>
            <a href="/index.php/Reg/mobile_Reg">网上取车登记</a>
        </li>
    </ul>
</nav><!-- // site nav -->

    <!-- global content -->
    <div class="global-content">
      <!-- main content -->
      <div class="main-content">
        <div class="js-page">
          
<div class="fullscrn">
  <div class="imgBG south_west"></div>  
  <div class="wrap">
    <ul class="tabs-Menu">
      <li class="menu-title">
        <h1>探索 <span><?php echo $topic['topictitle'];?></span></h1>
      </li>
      <li class="selected">
        <a href="#highlights">Highlights</a>
      </li>
      <li>
        <a href="#gallery">图片集锦</a>
      </li>
      <li>
        <a href="#explore">探索方式</a>
      </li>
      <li>
        <a href="#tours"><?php echo $topic['topictitle'];?> tours</a>
      </li>
    </ul>
  </div>  
</div>

<div class="wrap-Xlarge" id="highlights">
  <h2><?php echo $topic['topictitle'];?>摩托车旅游</h2>
  <div class="wrap-large"> 
    <p><?php echo $topic['text'];?></p>
  </div>
</div>

<div class="experience_gallery wrap-Xlarge" id="gallery">
  <h2><?php echo $topic['topictitle'];?> 图片集锦</h2>
  <div class="wrap">
    <img src="<?php echo $topic['image'];?>" width="100%">
  </div>
  <div class="wrap">
      <div class="span3"><?php echo $topic['galleryimage'];?></div>
  </div>
  <div class="wrap-large">
    <a class="btn-main full-width-btn js-gallery-trigger" href="javascript:void(0)">
      查看全部图片集锦
    </a>
  </div>
</div>

<div class="wrap-Xlarge" id="explore">
  <h2>探索方式</h2>
  <div class="wrap-large"> 
    <p>EagleRider为您提供了许多不同的方式来探索<?php echo $topic['topictitle'];?>！</p>
  </div>
  <div class="wrap-large tableContainer">
    <table dir="rtl" class="table table-bordered experience_table">
  <thead>
    <tr>
        <td >
          <b><?php echo $four['increase_name'];?></b>
        </td>
        <td >
          <b><?php echo $three['increase_name'];?></b>
        </td>
        <td >
          <b><?php echo $one['increase_name'];?></b>
        </td>
      
      <td></td>
    </tr>
  </thead>
  
  <tbody>
  <tr>
      <?php if ($four['motorcycle'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($three['motorcycle'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($one['motorcycle'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>

      <td>最新型的摩托车租赁</td>
  </tr>
  <tr>
      <?php if ($four['friendly'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($three['friendly'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($one['friendly'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <td>摩托车友好酒店</td>
  </tr>
  <tr>
      <?php if ($four['customize'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($three['customize'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($one['customize'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <td>可以定制属于自己的旅行路线</td>
  </tr>
  <tr>
      <?php if ($four['routes'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($three['routes'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($one['routes'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>

      <td>最佳摩托车旅行路线</td>
  </tr>
  <tr>
      <?php if ($four['eaglerider'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($three['eaglerider'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($one['eaglerider'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>

      <td>EagleRider旅行攻略</td>
  </tr>
  <tr>
      <?php if ($four['support'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($three['support'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($one['support'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <td>运送行李的支持车辆</td>
  </tr>
  <tr>
      <?php if ($four['spare'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($three['spare'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($one['spare'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>

      <td>备用摩托车</td>
  </tr>
  <tr>
      <?php if ($four['professional'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($three['professional'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($one['professional'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>

      <td>专业支持车驾驶员</td>
  </tr>
  <tr>
      <?php if ($four['bilingual'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($three['bilingual'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($one['bilingual'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>

      <td>专业双语导游</td>
  </tr>
  <tr>
      <?php if ($four['experience'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($three['experience'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($one['experience'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <td>团队旅行体验</td>
  </tr>
  <tr>
      <?php if ($four['breakfast'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($three['breakfast'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($one['breakfast'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>

      <td>每天提供丰盛早餐</td>
  </tr>
  <tr>
      <?php if ($four['gasolin'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($three['gasolin'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($one['gasolin'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>

      <td>骑行时所需的汽油</td>
  </tr>
  <tr>
      <?php if ($four['banquet'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($three['banquet'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($one['banquet'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>

      <td>欢迎晚宴</td>
  </tr>
  <tr>
      <?php if ($four['farewell'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($three['farewell'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>
      <?php if ($one['farewell'] == 2): ?>
          <td></td>
      <?php else: ?>
          <td>
              <img class="" src="https://d1y9jrrtx2baf.cloudfront.net/assets/static_pages/ok-244c1473b45f64723154233498465e27.png">
          </td>
      <?php endif; ?>

      <td>EagleRider欢送派对</td>
  </tr>
  </tbody>
        <tfoot>
        <tr>
            <td dir="ltr">
                <span class="starting-at">起始价格</span>
                <span class="price-box">
           <?php echo $four['price']?>
          </span>
            </td>
            <td dir="ltr">
                <span class="starting-at">起始价格</span>
                <span class="price-box">
            <?php echo $three['price']?>
          </span>
            </td>
            <td dir="ltr">
                <span class="starting-at">起始价格</span>
                <span class="price-box">
            <?php echo $one['price']?>
          </span>
            </td>
            <td></td>
        </tr>
  </tfoot>
</table>
  </div>
</div>
<div id="tours">
    <div>
      <div class="titleHeader">最极致的体验－团队旅行</div>
      <div class="wrap-fullWidth">
        <ul class="list-links-2">
            <?php foreach ($team_limit as $key=>$team_limits): ?>
            <li>
              <a href="mobile_team_detail?id=<?php echo $team_limits['id']?>">
                <div class="media-opposite ">            
                  <div class="media-left tourImg">
                    <div class="imageContainer">
                      <img alt="<?php echo $team_limits['teamtitle']?>" src="<?php echo $team_limits['image']?>">
                    </div>
                  </div>
                  <div class="media-left tourInfo">
                    <strong class="orange"><?php echo $team_limits['teamtitle']?></strong>
                    <p><?php echo $team_limits['day']?></p>
                      <div class="row price">
                        <span class="starting">起始价格</span>
                        <strong><?php echo $team_limits['price']?></strong>
                      </div>
                  </div>
                </div> 
              </a>
            </li>
            <?php endforeach; ?>
        </ul>
      </div>
    </div>

    <div>
      <div class="titleHeader">您的梦想，我们来计划！－自驾旅行</div>
      <div class="wrap-fullWidth">
        <ul class="list-links-2">
            <?php foreach ($uriving_limit as $key=>$uriving_limits): ?>
            <li>
              <a href="mobile_detail?id=<?php echo $uriving_limits['id']?>">
                <div class="media-opposite ">            
                  <div class="media-left tourImg">
                    <div class="imageContainer">
                      <img alt="<?php echo $uriving_limits['urivingtitle']?>" src="<?php echo $uriving_limits['image']?>">
                    </div>
                  </div>
                  <div class="media-left tourInfo">
                    <strong class="orange"><?php echo $uriving_limits['urivingtitle']?></strong>
                    <p><?php echo $uriving_limits['day']?></p>
                      <div class="row price">
                        <span class="starting">起始价格</span>
                        <strong><?php echo $uriving_limits['price']?></strong>
                      </div>
                  </div>
                </div> 
              </a>
            </li>
            <?php endforeach; ?>
        </ul>
      </div>
    </div>

 </div>

</div>

  <!-- global footer -->
        <footer class="global-footer">
            <div class="txt1"><a href="javascript:;">联系我们</a></div>
            <div>|</div>
            <div class="txt2"><a href="/index.php/Bottom_info/mobile_Bottom_info">常见问题</a>
            </div>
            <div>|</div>
            <div class="txt1"><a href="javascript:;">整个网站
            </a></div>
        </footer>
        <script src="/public/js/mobile.js" type="text/javascript"></script>
        <script src="/public/js/combined_widget.js" type="text/javascript"></script>
        <script src="/public/js/motorcycle_tour_reservation.js" type="text/javascript"></script>
        <script src="/public/js/signup-fc147ec8e5e10e4d566c4197de0cc29d.js" type="text/javascript"></script>
        <script src="/public/js/book-8e81d1e3dedfebf6529b5c494366bb32.js" type="text/javascript"></script>
        <script type="text/javascript">
            if(window.onLibrariesLoad)
                window.onLibrariesLoad();

            $(document).ready(function() {
                ER.Layout.onDomLoad({
                    enableCaptcha: true,
                });

                if(window.onDomLoadFN)
                {
                    window.onDomLoadFN();
                }

            });

            $(window).load(function() {
                ER.Layout.onWindowLoad();

                if(window.onPageLoadFN)
                {
                    window.onPageLoadFN();
                }

                var dealsSubscriptionContainer = $('.js-dealsSubscriptionContainer');
                new ER.Subscribe(dealsSubscriptionContainer);
            });
        </script>
        <style id="service-icons-0"></style>



</body></html>