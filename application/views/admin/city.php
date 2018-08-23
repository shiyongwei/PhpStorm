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
    <title>城市编辑</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 城市管理
    <span class="c-gray en">&gt;</span> 城市编辑
    <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
    <div class="cl pd-5 bg-1 bk-gray">
        <?php if (!isset($cites[0]['lang'])): ?>
        <span class="l">
            <a class="btn btn-primary radius" href="javascript:;" onclick="city_add('添加城市','city_add')">
                <i class="Hui-iconfont">&#xe600;</i> 添加城市</a>
        </span>
        <?php endif ;?>
        <span class="r">共有数据：<strong><?php echo count($cites); ?></strong> 条</span>
    </div>
    <table class="table table-border table-bordered table-hover table-bg">
        <thead>
        <tr>
            <th scope="col" colspan="9">城市管理</th>
        </tr>
        <tr class="text-c">
            <th width="40">ID</th>
            <th width="60">缩略图</th>
            <th width="50">城市名称</th>
            <th width="50">地址</th>
            <th width="50">联系方式</th>
            <th width="50">营业时间</th>
            <th width="100">简介</th>
            <th width="50">发布状态</th>
            <th width="70">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($cites as $item): ?>
            <tr class="text-c">
                <td><?php echo $item['cit_id'];?></td>
                <td>
                    <?php if (!empty($item['logo'])): ?>
                        <a onClick="product_list_show('<?php echo $item['cit_name'];?>','product_list_show?image=<?php echo $item['logo'];?>','10001','240','200')" href="javascript:;"><img width="60" class="product-thumb" src="<?php echo $item['logo'];?>"></a>
                    <?php else: ?>
                        <a href="javascript:;"></a>
                    <?php endif; ?>
                </td>
                <td>
                    <?php echo $item['cit_name']; ?>
                </td>
                <td>
                    <?php echo $item['address']; ?>
                </td>
                <td>
                    <?php echo $item['information']; ?>
                </td>
                <td>
                    <?php echo $item['time']; ?>
                </td>
                <td>
                    <?php echo $item['text']; ?>
                </td>
                <?php if ($item['status'] == 0): ?>
                    <td class="td-status"><span class="label label-default radius">普通</span></td>
                <?php else: ?>
                    <td class="td-status"><span class="label label-success radius">广告</span></td>
                <?php endif; ?>
                <td class="td-manage">
                    <?php if ($item['status'] == 0): ?>
                        <a style="text-decoration:none" onClick="team_start(this,'<?php echo $item['cit_id'];?>')" href="javascript:;" title="广告"><i class="Hui-iconfont">&#xe603;</i></a>
                    <?php else: ?>
                        <a style="text-decoration:none" onClick="team_stop(this,'<?php echo $item['cit_id'];?>')" href="javascript:;" title="普通"><i class="Hui-iconfont">&#xe6de;</i></a>
                    <?php endif; ?>
                    <?php if (!isset($item['lang'])): ?>
                        <a title="编辑" href="javascript:;" onclick="city_edit('城市编辑','city_edit?id=<?php echo $item['cit_id']; ?>')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
                    <?php else: ?>
                        <a title="编辑" href="javascript:;" onclick="city_edit('城市编辑','city_edit?id=<?php echo $item['cit_id']; ?>&lang=<?php echo $item['lang'] ;?>>')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
                    <?php endif; ?>
                    <a title="删除" href="javascript:;" onclick="city_del(this,'<?php echo $item['cit_id']; ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
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

    /*城市-添加*/
    function city_add (title, url, w, h) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }

    /*城市-编辑*/
    function city_edit (title, url, id, w, h) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }

    /*城市-删除*/
    function city_del (obj, id) {
        layer.confirm('删除须谨慎，确认要删除吗？', function() {

            $.post('/index.php/admin/CityController/city_del', {'id': id}, function(data) {
                if(data == 200)
                {
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!', {icon: 1, time: 1000},function() {
                        location.reload();
                    });
                }
                else
                {
                    layer.msg('删除失败!', {icon: 5, time: 2000},);
                }
            });
        });
    }
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
    /*产品-下架*/
    function team_stop (obj, id) {
        layer.confirm('确认要下架吗？', function(index) {
            $.post('/index.php/admin/CityController/city_status', {'id': id, 'status': 1}, function(data) {
                if(data == 200)
                {
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="team_start(this,id)" href="javascript:;" title="广告"><i class="Hui-iconfont">&#xe603;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">普通</span>');
                    $(obj).remove();
                    layer.msg('普通!', {icon: 5, time: 1000}, function() {
                        location.reload();
                    });
                }
                else
                {
                    layer.msg('下架失败!', {icon: 5, time: 1000});
                }
            });

        });
    }

    /*产品-发布*/
    function team_start (obj, id) {
        layer.confirm('确认要发布吗？', function(index) {
            $.post('/index.php/admin/CityController/city_status', {'id': id, 'status': 0}, function(data) {
                if(data == 200)
                {
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="team_stop(this,id)" href="javascript:;" title="普通"><i class="Hui-iconfont">&#xe6de;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">广告</span>');
                    $(obj).remove();
                    layer.msg('已发布广告!', {icon: 6, time: 1000}, function() {
                        location.reload();
                    });
                }
                else
                {
                    layer.msg('下架为普通!', {icon: 5, time: 1000});
                }

            });

        });
    }
</script>
</body>
</html>