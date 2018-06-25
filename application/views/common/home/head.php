<?php
defined('BASEPATH') OR exit('No direct script access allowed');

header('X-Powered-By: Prod-domProjects.com');
header('X-XSS-Protection: 1');
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
header('Vary: Accept-Encoding');

?>
<!doctype html>

<!--[if IE 7]>
<html lang="zh" class="ie ie7"><![endif]-->
<!--[if IE 8]>
<html lang="zh" class="ie ie8"><![endif]-->
<!--[if IE 9]>
<html lang="zh" class="ie ie9"><![endif]-->
<!--[!(IE)]><!-->
<html lang="zh"><!--<![endif]-->
<head>

    <title>Motorcycle Rentals - Motorcycle Tours | EagleRider</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="EagleRider is the largest motorcycle rental and tour company, renting all types of motorcycles while offering self-drive and guided motorcycle tours." />
    <meta name="keywords" content="Harley motorcycles, Harley-Davidson motorcycle rental, powersport rental, harley-davidson rental, honda rental, bmw, polaris, yamaha, Vespa, vespas, scooters, scooter, guided tours, self drive tours, Motorcycle Vacation, Adventure Rental, Self-drive tours, Motorcycle event rentals, Motorcycle rally rentals, one-way rentals, one way rentals, Moto Location, Motorcycle for Hire, Moto pour la location, Locations de moto, excursions guidées, excursions sans-chauffeur, vacances de moto, voyage de moto" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />

    <meta content="authenticity_token" name="csrf-param" />
    <meta content="uoBkSjlEoO8tDe9al9spagB1IopTw8zocxUuavi/CmM=" name="csrf-token" />
    <link rel="shortcut icon" href="/public/image/favicon-e32d32b2d8dcbc0d4e921a2f74dd32f0.ico">
<!--    <script src="/public/js/style.js"></script>-->

    <script type="text/javascript" src="/public/DatePicker/WdatePicker.js"></script>
    <link href="/public/DatePicker/skin/WdatePicker.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/public/js/jquery.min.js"></script>
</head>

<body class="zh home_page" id="">
<!--Global Messages-->
<div class="globalMessages js-notifications">
    <div class="alert alert-danger js-notification js-alert" style="display:none;">
        <span class="js-message"></span>
        <button class="close js-closeTrigger" type="button">×</button>
    </div>
    <div class="alert alert-success js-notification js-success"
         style="display:none;">
        <span class="js-message"></span>
        <button class="close js-closeTrigger" type="button">×</button>
    </div>
    <div class="alert alert-info js-notification js-info" style="display:none;">
        <span class="js-message"></span>
        <button class="close js-closeTrigger" type="button">×</button>
    </div>
    <div class="alert alert-warning js-notification js-warning"
         style="display:none;">
        <span class="js-message"></span>
        <button class="close js-closeTrigger" type="button">×</button>
    </div>

</div>

<div class="navigation">
    <div class="topbar">
        <div class="container" style="position: relative;">
            <div class="row">
                <div class="offset1 span3"></div>
            </div>
            <a class="brand top-brand" href="#"><img src="<?php echo $bottom_info_all[7]['image']?>" style="width: 90px;margin-top: -11px;"></a>
        </div>
    </div>

    <div class="navbar">
        <div class="navbar-inner">
            <div class="container" style="position: static;">
                <a class="btn btn-navbar js-collapse-menu" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
				<?php foreach ($navigation as $key=>$navigations): ?>
                <nav class="nav-collapse">
                    <ul class="nav main-nav js-navigation topp">
                        <li class="dropdown dropdown-bs" id="zulin">
                            <a class="dropdown-toggle js-rentalsLink" data-toggle="dropdown" data-target="#" href="<?php echo site_url('Home'); ?>">
								<?php echo $navigations['navigation_name']?><b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu dropdown-mega-menu" role="menu" aria-labelledby="dLabel">
                                <li>
                                    <div class="container">
                                        <b class="menu-heading">热门摩托车租赁</b>
                                        <ul class="dropmenu-uncat">
											<?php foreach ($rent_list as $rent_lists): ?>
                                            <li>
                                                <a class="classify" href="/index.php/Rent?id=<?php echo $rent_lists['brand_id']?>"><?php echo $rent_lists['product_brand']?></a>
                                            </li>
											<?php endforeach; ?>
                                            <li><a href="/index.php/Rent?id=<?php echo 0;?>">所有车型</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="<?php echo site_url('Hotels'); ?>" title="摩托车 &amp; 酒店"
                               class="">
								<?php echo $navigations['lease_name']?>
                            </a>
                        </li>

                        <li class="dropdown dropdown-bs " id="lvyou">
                            <a class="dropdown-toggle js-toursLink" data-toggle="dropdown"
                               href="<?php echo site_url('Home/trave'); ?>">
								<?php echo $navigations['hotel_name']?><b class="caret"></b>
                            </a>

                            <ul class="dropdown-menu dropdown-mega-menu dropmenu-cat" role="menu" aria-labelledby="dLabel">
                                <li>
                                    <div class="container">

                                        <div class="dropmenu-content">
                                            <div class="column" style="width: 23%;float: left">
                                                <b>团队旅行</b>

                                                <ul>
                                                    <li>
                                                        <a href="<?php echo site_url('team'); ?>">
                                                            摩托车团队游
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>

                                            <div class="" style="width: 23%;float: left">
                                                <b>自驾旅行</b>

                                                <ul>
                                                    <li>
                                                        <a href="<?php echo site_url('classify'); ?>" style="margin-top: 10px;">
                                                            摩托车自驾游
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="#" style="width: 23%;float: left;" >
                                                <b>热门路线</b>

                                                <ul>
                                                    <li>
                                                    </li>

                                                    <li>
                                                        <a href="<?php echo site_url('hot_trave'); ?>" style="margin-top: 10px;">
                                                            热门摩托车旅行
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="#" style="width: 23%;float: left">
                                                <b>所有旅行项目</b>

                                                <ul>
                                                    <li>
                                                        <a href="<?php echo site_url('trave'); ?>" style="margin-top: 10px;">
                                                            摩托车旅游
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </li>

                        <li class="top dropdown">
                            <a href="<?php echo site_url('Discounts'); ?>">
								<?php echo $navigations['promotions_name']?>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="<?php echo site_url('Artivity'); ?>">
								<?php echo $navigations['activity_name']?>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="<?php echo site_url('City'); ?>">
								<?php echo $navigations['city_name']?>
                            </a>
                        </li>


                        <li class="dropdown">
                            <a href="<?php echo site_url('Reg'); ?>">
								<?php echo $navigations['online_name']?>
                            </a>
                        </li>
                    </ul>
                </nav>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
