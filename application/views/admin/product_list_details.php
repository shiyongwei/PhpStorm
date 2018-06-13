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

<title>图片展示</title>
<link href="/public/admin/lib/lightbox2/2.8.1/css/lightbox.css" rel="stylesheet" type="text/css" >
</head>
<body>
<div class="page-container">
    <?php if (!empty($list[0]['image'])): ?>

        <img src="<?php echo $list[0]['image'];?>" style="margin-left: 100px">

    <?php endif; ?>
    <table class="table table-border table-bordered table-hover">
        <thead>
        <tr>
            <th width="20%">Class</th>
            <th>描述</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($list[0]['product_brand'])): ?>
            <tr>
                <th>所属品牌</th>
                <td><?php echo $list[0]['product_brand'];?></td>
            </tr>
        <?php endif; ?>

        <?php if (!empty($list[0]['category_name'])): ?>
            <tr>
                <th>所属类型</th>
                <td><?php echo $list[0]['category_name'];?></td>
            </tr>
        <?php endif; ?>

        <?php if (!empty($list[0]['stroke'])): ?>
            <tr>
                <th>内径×行程</th>
                <td><?php echo $list[0]['stroke'];?></td>
            </tr>
        <?php endif; ?>

        <?php if (!empty($list[0]['displacement'])): ?>
            <tr>
                <th>排量</th>
                <td><?php echo $list[0]['displacement'];?></td>
            </tr>
        <?php endif; ?>

        <?php if (!empty($list[0]['reartyre'])): ?>
            <tr>
                <th>后轮胎</th>
                <td><?php echo $list[0]['reartyre'];?></td>
            </tr>
        <?php endif; ?>

        <?php if (!empty($list[0]['fronttire'])): ?>
            <tr>
                <th>前轮胎</th>
                <td><?php echo $list[0]['fronttire'];?></td>
            </tr>
        <?php endif; ?>

        <?php if (!empty($list[0]['rearbrake'])): ?>
            <tr>
                <th>后制动器</th>
                <td><?php echo $list[0]['rearbrake'];?></td>
            </tr>
        <?php endif; ?>

        <?php if (!empty($list[0]['frontbrake'])): ?>
            <tr>
                <th>前刹车</th>
                <td><?php echo $list[0]['frontbrake'];?></td>
            </tr>
        <?php endif; ?>

        <?php if (!empty($list[0]['seatheight'])): ?>
            <tr>
                <th>座位高度</th>
                <td><?php echo $list[0]['seatheight'];?></td>
            </tr>
        <?php endif; ?>

        <?php if (!empty($list[0]['compression'])): ?>
            <tr>
                <th>压缩比</th>
                <td><?php echo $list[0]['compression'];?></td>
            </tr>
        <?php endif; ?>
        <?php if (!empty($list[0]['capacity'])): ?>
            <tr>
                <th>油箱容量</th>
                <td><?php echo $list[0]['capacity'];?></td>
            </tr>
        <?php endif; ?>

        <?php if (!empty($list[0]['windshield'])): ?>
            <tr>
                <th>挡风玻璃</th>
                <td><?php echo $list[0]['windshield'];?></td>
            </tr>
        <?php endif; ?>

        <?php if (!empty($list[0]['text'])): ?>
            <tr>
                <th>产品摘要</th>
                <td><?php echo $list[0]['text'];?></td>
            </tr>
        <?php endif; ?>

        </tbody>
    </table>

</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/public/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/public/admin/lib/lightbox2/2.8.1/js/lightbox.min.js"></script>
<script type="text/javascript">
$(function(){
	$(".portfolio-area li").Huihover();
});
</script>
</body>
</html>