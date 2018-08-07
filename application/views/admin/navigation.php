
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
    <script type="text/javascript" src="/public/admin/lib/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>导航管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 导航管理
    <span class="c-gray en">&gt;</span> 导航编辑
    <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
    <table class="table table-border table-bordered table-hover table-bg">
        <thead>
        <tr>
            <th scope="col" colspan="9">导航管理</th>
        </tr>
        <tr class="text-c">
            <th width="40">ID</th>
            <th width="50">导航1</th>
            <th width="50">导航2</th>
            <th width="50">导航3</th>
            <th width="50">导航4</th>
            <th width="50">导航5</th>
            <th width="50">导航6</th>
            <th width="50">导航7</th>
            <th width="50">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($navigation as $item => $value): ?>
            <tr class="text-c">
                <td><?php echo $value['navigation_id']; ?></td>
                <td><?php echo $value['navigation_name']; ?></td>
                <td><?php echo $value['lease_name']; ?></td>
                <td><?php echo $value['hotel_name']; ?></td>
                <td><?php echo $value['promotions_name']; ?></td>
                <td><?php echo $value['activity_name']; ?></td>
                <td><?php echo $value['city_name']; ?></td>
                <td><?php echo $value['online_name']; ?></td>
                <td class="td-manage">
                        <a title="编辑" href="javascript:;" onclick="navigation_edit('导航编辑','navigation_edit?id=<?php echo $value['navigation_id']; ?>','1','550','450')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <div id="test1"></div>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/public/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/public/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/public/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">

    /*品牌-编辑*/
    function navigation_edit (title, url, id, w, h) {
        layer_show(title, url, w, h);
    }
</script>
</body>
</html>