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
    <span class="c-gray en">&gt;</span> 侧边背景
    <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
    <table class="table table-border table-bordered table-hover table-bg">
        <thead>
        <tr>
            <th scope="col" colspan="9">侧边背景</th>
        </tr>
        <tr class="text-c">
            <th width="40">ID</th>
            <th width="50">标题</th>
            <th width="50">描述</th>
            <th width="50">描述</th>
            <th width="50">图片</th>
            <th width="50">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($side as $item => $value): ?>
            <tr class="text-c">
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['title']; ?></td>
                <td><?php echo $value['head']; ?></td>
                <td><?php echo $value['foot']; ?></td>
                <td>
                    <?php if (!empty($value['image'])): ?>
                        <a onClick="product_list_show('<?php echo $value['title'];?>','product_list_show?image=<?php echo $value['image'];?>','10001','300','300')" href="javascript:;"><img width="60" class="product-thumb" src="<?php echo $value['image'];?>"></a>
                    <?php else: ?>
                        <a href="javascript:;"></a>
                    <?php endif; ?>
                </td>
                <?php if (!isset($value['lang'])): ?>
                    <td class="td-manage">
                        <a title="编辑" href="javascript:;" onclick="name_edit('导航编辑','side_edit?id=<?php echo $value['id']; ?>')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
                    </td>
                <?php else: ?>
                    <td class="td-manage">
                        <a title="编辑" href="javascript:;" onclick="name_edit('导航编辑','side_edit?id=<?php echo $value['id']; ?>&lang=<?php echo $value['lang'];?>')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
                    </td>
                <?php endif; ?>
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
    /*产品-查看*/
    function product_list_show (title, url, id,w,h) {
        layer.open({
            type: 2,
            area: [w+'px', h +'px'],
            fix: false, //不固定
            maxmin: true,
            shade:0.4,
            title: title,
            content: url,
        });
    }

    function name_edit (title, url, id) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
</script>
</body>
</html>