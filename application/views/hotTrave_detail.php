<link href="/public/css/hotTrave_detail.css" type="text/css" rel="stylesheet" />

<div class="fullscrn js-fullScreen" style="overflow: visible; height: 789px; max-height: 1280px;">
    <img class="imgBG" src="<?php echo $hotreave_detail['image'] ?>">

    <header class="">
        <div class="display">
            <p>探索<span><?php echo $hotreave_detail['topictitle'] ?></span></p>
            <a href="#start-adventure" class="btn_white js-start-adventure">开始您的冒险旅程吧</a>
        </div>
    </header>

    <a class="btn-light viewmore visible-desktop js-viewMoreTrigger" href="Javascript:;">
        <span class="icn-arrowOrangeDown"></span> 查看更多
    </a>

    <div class="navbar experience-nav js-nav affix-top">
        <div class="navbar-inner">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <ul class="nav">
                            <li><a href="#highlights" class="js-highlights">Highlights</a></li>
                            <li><a href="#gallery" class="js-gallery">图片集锦</a></li>
                            <li><a href="#explore" class="js-explore">探索方式</a></li>
                            <li>
                                <a href="#tours" class="js-tours">
                                    <?php echo $hotreave_detail['topictitle'] ?> TOURS
                                </a>
                            </li>
                            <li>
                                <a class="btn-highlight" href="#start-adventure">
                                    开始您的冒险旅程吧
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container experience_content">
    <div class="row" id="highlights">
        <h2 class="span12"><?php echo $hotreave_detail['topictitle'] ?></h2>
    </div>

    <div class="row">
        <?php echo $hotreave_detail['text'] ?>
    </div>

    <div class="experience_gallery">
        <div class="row" id="gallery">
            <h2 class="span12"><?php echo $hotreave_detail['topictitle'] ?> 图片集锦</h2>
        </div>

        <div class="row-fluid">
            <div class="span8 cover-img">
                <img class="" src="<?php echo $hotreave_detail['image'] ?>">
            </div>

            <div class="span4 small-images">
                <div class="row-fluid">
                    <?php echo $hotreave_detail['galleryimage'] ?>
                </div>

                <div class="row-fluid">
                    <a class="span12 light_btn btn-highlight js-gallery-trigger" href="javascript:;">
                        <span class="galery_icon icon_decor"></span> 查看全部图片集锦
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section id="explore" class="experience_table">
        <div class="row">
            <h2 class="span12">探索方式</h2>
        </div>
        <div class="row">
            <div class="span12">
                <p>EagleRider为您提供了许多不同的方式来探索<?php echo $hotreave_detail['topictitle'] ?>！</p>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <table dir="rtl" class="table table-bordered experience_table">
                    <thead>
                    <tr>
                        <td dir="ltr">
                            <b><?php echo $four['increase_name']; ?></b>
                        </td>
                        <td dir="ltr">
                            <b><?php echo $three['increase_name']; ?></b>
                        </td>
                        <td dir="ltr">
                            <b><?php echo $two['increase_name']; ?></b>
                        </td>
                        <td dir="ltr">
                            <b><?php echo $one['increase_name']; ?></b>
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
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($three['motorcycle'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($two['motorcycle'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($one['motorcycle'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>

                        <td>最新型的摩托车租赁</td>
                    </tr>
                    <tr>
                        <?php if ($four['friendly'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($three['friendly'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($two['friendly'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($one['friendly'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <td>摩托车友好酒店</td>
                    </tr>
                    <tr>
                        <?php if ($four['customize'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($three['customize'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($two['customize'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($one['customize'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <td>可以定制属于自己的旅行路线</td>
                    </tr>
                    <tr>
                        <?php if ($four['routes'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($three['routes'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($two['routes'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($one['routes'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>

                        <td>最佳摩托车旅行路线</td>
                    </tr>
                    <tr>
                        <?php if ($four['eaglerider'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($three['eaglerider'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($two['eaglerider'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($one['eaglerider'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>

                        <td>EagleRider旅行攻略</td>
                    </tr>
                    <tr>
                        <?php if ($four['support'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($three['support'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($two['support'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($one['support'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <td>运送行李的支持车辆</td>
                    </tr>
                    <tr>
                        <?php if ($four['spare'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($three['spare'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($two['spare'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($one['spare'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>

                        <td>备用摩托车</td>
                    </tr>
                    <tr>
                        <?php if ($four['professional'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($three['professional'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($two['professional'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($one['professional'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>

                        <td>专业支持车驾驶员</td>
                    </tr>
                    <tr>
                        <?php if ($four['bilingual'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($three['bilingual'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($two['bilingual'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($one['bilingual'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>

                        <td>专业双语导游</td>
                    </tr>
                    <tr>
                        <?php if ($four['experience'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($three['experience'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($two['experience'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($one['experience'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <td>团队旅行体验</td>
                    </tr>
                    <tr>
                        <?php if ($four['breakfast'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($three['breakfast'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($two['breakfast'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($one['breakfast'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>

                        <td>每天提供丰盛早餐</td>
                    </tr>
                    <tr>
                        <?php if ($four['gasolin'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($three['gasolin'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($two['gasolin'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($one['gasolin'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>

                        <td>骑行时所需的汽油</td>
                    </tr>
                    <tr>
                        <?php if ($four['banquet'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($three['banquet'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($two['banquet'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($one['banquet'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>

                        <td>欢迎晚宴</td>
                    </tr>
                    <tr>
                        <?php if ($four['farewell'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($three['farewell'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($two['farewell'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
                            </td>
                        <?php endif; ?>
                        <?php if ($one['farewell'] == 2): ?>
                            <td></td>
                        <?php else: ?>
                            <td>
                                <img class="" src="/public/image/ok-244c1473b45f64723154233498465e27.png">
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
            <?php echo $four['price'] ?>
          </span>
                            <span class="book-btn js-guidedBookTrigger">
              <a href="#start-adventure" class="btn-highlight small">立即预订</a>
            </span>
                        </td>
                        <td dir="ltr">
                            <span class="starting-at">起始价格</span>
                            <span class="price-box">
            <?php echo $three['price'] ?>
          </span>
                            <span class="book-btn js-selfDriveBookTrigger">
              <a href="#start-adventure" class="btn-highlight small">立即预订</a>
            </span>
                        </td>
                        <td dir="ltr">
                            <span class="starting-at">起始价格</span>
                            <span class="price-box">
           <?php echo $two['price'] ?>
          </span>
                            <span class="book-btn">
              <a href="/hotels" class="btn-highlight small">立即预订</a>
            </span>
                        </td>
                        <td dir="ltr">
                            <span class="starting-at">起始价格</span>
                            <span class="price-box">
            <?php echo $one['price'] ?>
          </span>
                            <span class="book-btn js-rentalBookTrigger">
              <a href="#start-adventure" class="btn-highlight small">立即预订</a>
            </span>
                        </td>
                        <td></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div><!-- .row -->
    </section>
</div>


<section class="tours_list experience_tours_list" id="tours">
    <div class="container">
        <div class="row">
            <h3 class="span12">最极致的体验－团队旅行</h3>
        </div>

        <div class="row js-routatSlider slick-initialized slick-slider">
            <div aria-live="polite" class="slick-list draggable">
                <div class="slick-track" role="listbox" style="opacity: 1; width: 1200px; left: 0px;">

                    <?php foreach ($team_limit as $key => $team_limits): ?>
                        <div class="tour span3 js-tourContainer slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide03" style="width: 270px;">
                            <a href="team_detail?id=<?php echo $team_limits['id'] ?>" tabindex="0">
                                <div class="img_cont">
                                    <img alt="Route 66 West: Chicago to Albuquerque Motorcycle Tour" class="tour_image" src="/public/image/Route_66_East_Map.jpg">
                                    <span class="tour_name">
                                    <span><?php echo $team_limits['teamtitle'] ?></span>
                                        <span class="tour_type">团队游</span>
                                    </span>
                                </div>
                                <span class="tour_dest"><?php echo $team_limits['kilometers'] ?>
                                    <em class="bold" dir="ltr"><?php echo $team_limits['day'] ?></em>
                                </span>
                                <div class="actions">
                                    <div class="tour_price">
                                        <div class="starting_info">
                                            <span class="title">起始价格</span>
                                            <em class="bold">¥<?php echo $team_limits['price'] ?></em>
                                        </div>
                                        <span class="btn-highlight">查看旅行</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>


        </div>

        <div class="row">
            <h3 class="span12">您的梦想，我们来计划！－自驾旅行</h3>
        </div>

        <div class="row js-routatSlider slick-initialized slick-slider">
            <div aria-live="polite" class="slick-list draggable">
                <div class="slick-track" role="listbox" style="opacity: 1; width: 1200px; left: 0px;">

                    <?php foreach ($uriving_limit as $key => $uriving_limits): ?>
                        <div class="tour span3 js-tourContainer slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="-1" role="option" aria-describedby="slick-slide03" style="width: 270px;">
                            <a href="detail?id=<?php echo $uriving_limits['id'] ?>" tabindex="0">
                                <div class="img_cont">
                                    <img alt="Route 66 West: Chicago to Albuquerque Motorcycle Tour" class="tour_image" src="/public/image/Route_66_East_Map.jpg">
                                    <span class="tour_name">
                                    <span><?php echo $uriving_limits['urivingtitle'] ?></span>
                                    <span class="tour_type">团队游</span>
                                    </span>
                                </div>

                                <span class="tour_dest"><?php echo $uriving_limits['kilometers'] ?>
                                    <em class="bold" dir="ltr"><?php echo $uriving_limits['day'] ?></em>
                                </span>

                                <div class="actions">
                                    <div class="tour_price">
                                        <div class="starting_info">
                                            <span class="title">起始价格</span>
                                            <em class="bold">¥<?php echo $uriving_limits['price'] ?></em>
                                        </div>
                                        <span class="btn-highlight">查看旅行</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>


        </div>

</section>