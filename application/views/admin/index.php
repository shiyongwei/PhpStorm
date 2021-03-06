﻿<?php $user = $this->session->userdata('user');?>
<?php if(empty($user)) :?>
    <?php echo '<script>alert("请先登录");location.href="/index.php/admin/admin/index"</script>'; ?>
<?php endif ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/public/admin/lib/html5shiv.js"></script>
    <script type="text/javascript" src="/public/admin/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/public/admin/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/public/admin/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/public/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/public/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/public/admin/static/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="/public/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>极限丶挑战</title>
</head>
<body>
<header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container-fluid cl">
            <a class="logo navbar-logo f-l mr-10 hidden-xs" href="/index.php/admin/admin/login" ><?php echo $content['lang_homePage']?></a>
            <a style="color: white; margin-left: 40px;position: fixed;top: 10px;" id="chinese"><?php echo $content['lang_chinese']?></a>
            <a style="color: white;position: fixed;top: 10px;margin-left: 100px;" id="english"><?php echo $content['lang_english']?></a>
            <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
            <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                <ul class="cl">
                    <li>欢迎:</li>
                    <li class="dropDown dropDown_hover">
                        <a href="#" class="dropDown_A"><?php echo $username; ?><i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="/index.php/admin/LoginController/logout">退出</a></li>
                        </ul>
                    </li>

<!--                    <select id="language" style=" margin: 9px;padding-bottom:5px;background: rgb(34,34,34);width: 65px;height: 28px;font-size: 13px;color: #ffffff;text-align: center;border: 1px #1a1a1a solid;border-radius: 5px;float: left;" onchange="func()">-->
<!--                        <option value ="中文版" id="chinese">中文版</option>-->
<!--                        <option value ="英文版" id="english">英文版</option>-->
<!--                    </select>-->



                    <li id="Hui-skin" class="dropDown right dropDown_hover"> <a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
                            <li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
                            <li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
                            <li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
                            <li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
                            <li><a href="javascript:;" data-val="orange" title="橙色">橙色</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<?php $url = $_SERVER['REQUEST_URI'];?>
<?php if (empty(parse_url($url)['query'])): ?>

    <aside class="Hui-aside">
        <div class="menu_dropdown bk_2">
            <dl id="menu-navigation">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 导航管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>

                    <ul>
                        <li><a data-href="navigation" data-title="导航编辑" href="javascript:void(0)">导航编辑</a></li>
                        <li><a data-href="background" data-title="导航背景" href="javascript:void(0)">导航背景</a></li>
                        <li><a data-href="side" data-title="侧边背景" href="javascript:void(0)">侧边背景</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-bottom">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 底部管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="bottom" data-title="底部编辑" href="javascript:void(0)">底部编辑</a></li>
                        <li><a data-href="text" data-title="相关信息详情页" href="javascript:void(0)">底部相关信息编辑</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-bottom">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 新闻发布<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="tidings" data-title="新闻" href="javascript:void(0)">新闻编辑</a></li>
                        <li><a data-href="announcement" data-title="公告" href="javascript:void(0)">公告编辑</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-product">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 产品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="product_brand" data-title="品牌编辑" href="javascript:void(0)">品牌编辑</a></li>
                        <li><a data-href="product_category" data-title="分类编辑" href="javascript:void(0)">分类编辑</a></li>
                        <li><a data-href="product_list" data-title="产品编辑" href="javascript:void(0)">产品编辑</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-city">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 城市管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="city" data-title="城市管理" href="javascript:void(0)">城市编辑</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-tourism">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 旅游管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="topic" data-title="旅游主题" href="javascript:void(0)">旅游主题编辑</a></li>
                        <li><a data-href="explore" data-title="探索方式" href="javascript:void(0)">探索方式编辑</a></li>
                        <li><a data-href="uriving" data-title="自驾游编辑" href="javascript:void(0)">自驾游编辑</a></li>
                        <li><a data-href="team" data-title="团队游编辑" href="javascript:void(0)">团队游编辑</a></li>
                        <li><a data-href="video" data-title="团队游视频编辑" href="javascript:void(0)">团队游视频编辑</a></li>
                        <li><a data-href="photo" data-title="团队游图片编辑" href="javascript:void(0)">团队游图片编辑</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-promotions">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 促销管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="promotions" data-title="促销编辑" href="javascript:void(0)">促销特惠编辑</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-activity">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 活动管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="column" data-title="活动栏目" href="javascript:void(0)">活动栏目</a></li>
                        <li><a data-href="activityedit" data-title="活动编辑" href="javascript:void(0)">活动编辑</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-destination">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 用户信息中心<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="user_info" data-title="用户数据" href="javascript:void(0)">用户登记数据</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-admin">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="admin_list" data-title="管理员列表" href="javascript:void(0)">管理员编辑</a></li>
                    </ul>
                </dd>
            </dl>
        </div>
    </aside>

<?php else: ?>

    <aside class="Hui-aside">
        <div class="menu_dropdown bk_2">
            <dl id="menu-navigation">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 导航管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>

                    <ul>
                        <li><a data-href="navigation?lang=en" data-title="导航编辑" href="javascript:void(0)">导航编辑</a></li>
                        <li><a data-href="background?lang=en" data-title="导航背景" href="javascript:void(0)">导航背景</a></li>
                        <li><a data-href="side?lang=en" data-title="侧边背景" href="javascript:void(0)">侧边背景</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-bottom">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 底部管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="bottom?lang=en" data-title="底部编辑" href="javascript:void(0)">底部编辑</a></li>
                        <li><a data-href="text?lang=en" data-title="相关信息详情页" href="javascript:void(0)">底部相关信息编辑</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-bottom">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 新闻发布<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="tidings?lang=en" data-title="新闻" href="javascript:void(0)">新闻编辑</a></li>
                        <li><a data-href="announcement?lang=en" data-title="公告" href="javascript:void(0)">公告编辑</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-product">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 产品管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="product_brand?lang=en" data-title="品牌编辑" href="javascript:void(0)">品牌编辑</a></li>
                        <li><a data-href="product_category?lang=en" data-title="分类编辑" href="javascript:void(0)">分类编辑</a></li>
                        <li><a data-href="product_list?lang=en" data-title="产品编辑" href="javascript:void(0)">产品编辑</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-city">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 城市管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="city?lang=en" data-title="城市管理" href="javascript:void(0)">城市编辑</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-tourism">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 旅游管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="topic?lang=en" data-title="旅游主题" href="javascript:void(0)">旅游主题编辑</a></li>
                        <li><a data-href="explore?lang=en" data-title="探索方式" href="javascript:void(0)">探索方式编辑</a></li>
                        <li><a data-href="uriving?lang=en" data-title="自驾游编辑" href="javascript:void(0)">自驾游编辑</a></li>
                        <li><a data-href="team?lang=en" data-title="团队游编辑" href="javascript:void(0)">团队游编辑</a></li>
                        <li><a data-href="team_video" data-title="团队游视频编辑" href="javascript:void(0)">团队游视频编辑</a></li>
                        <li><a data-href="team_photo" data-title="团队游图片编辑" href="javascript:void(0)">团队游图片编辑</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-promotions">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 促销管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="promotions?lang=en" data-title="促销编辑" href="javascript:void(0)">促销特惠编辑</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-activity">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 活动管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="column?lang=en" data-title="活动栏目" href="javascript:void(0)">活动栏目</a></li>
                        <li><a data-href="activityedit?lang=en" data-title="活动编辑" href="javascript:void(0)">活动编辑</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-destination">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 用户信息中心<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="user_info" data-title="用户数据" href="javascript:void(0)">用户登记数据</a></li>
                    </ul>
                </dd>
            </dl>
            <dl id="menu-admin">
                <dt><i class="Hui-iconfont">&#xe72d;</i> 管理员管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
                <dd>
                    <ul>
                        <li><a data-href="admin_list?lang=en" data-title="管理员列表" href="javascript:void(0)">管理员编辑</a></li>
                    </ul>
                </dd>
            </dl>
        </div>
    </aside>

<?php endif; ?>








<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
    <div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
        <div class="Hui-tabNav-wp">
            <ul id="min_title_list" class="acrossTab cl">
                <li class="active">
                    <span title="我的桌面" data-href="welcome.html">我的桌面</span>
                    <em></em></li>
            </ul>
        </div>
        <div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
    </div>
    <div id="iframe_box" class="Hui-article">
        <div class="show_iframe">
            <div style="display:none" class="loading"></div>
            <iframe scrolling="yes" frameborder="0" src="welcome"></iframe>
        </div>
    </div>
</section>

<div class="contextMenu" id="Huiadminmenu">
    <ul>
        <li id="closethis">关闭当前 </li>
        <li id="closeall">关闭全部 </li>
    </ul>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/public/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->
<script>
	//判断页面是中文版还是英文版
	var url = window.location.href;
    //切换英文版时跳转
	$('#english').click(function() {
		window.location.replace("login?lang=en");
	});
	// alert(lang);
	//中文版
	$('#chinese').click(function() {
		var url = window.location.href;
		new_url = url.split('?')[0];
		window.location.replace(new_url);
	});





</script>


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/public/admin/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
</body>
</html>