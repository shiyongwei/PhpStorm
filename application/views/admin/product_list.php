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
    <title>建材列表</title>
    <link rel="stylesheet" href="/public/admin/lib/zTree/v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
</head>
<body class="pos-r">
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理
    <span class="c-gray en">&gt;</span> 产品列表
    <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
    <div class="cl pd-5 bg-1 bk-gray mt-20">
        <?php if (!isset($list[0]['lang'])): ?>
        <span class="l"><a class="btn btn-primary radius" onclick="product_list_add('添加产品','product_list_add')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 添加产品</a></span>
        <?php endif; ?>
        <span class="r">共有数据：<strong><?php echo count($list);?></strong> 条</span></div>
    <div class="mt-20">
        <table class="table table-border table-bordered table-bg table-hover table-sort">
            <thead>
            <tr class="text-c">
                <th width="40">ID</th>
                <th width="60">缩略图</th>
                <th width="100">产品名称</th>
                <th>描述</th>
                <th width="60">品牌</th>
                <th width="60">是否城市</th>
                <th width="60">类型</th>
                <th width="60">发布状态</th>
                <th width="100">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $key => $value): ?>
                <tr class="text-c va-m">
                    <td><?php echo $value['id'];?></td>
                    <td>
                        <?php if (!empty($value['image'])): ?>
                            <a onClick="product_list_show('<?php echo $value['productitle'];?>','product_list_show?image=<?php echo $value['image'];?>','10001','600','450')" href="javascript:;"><img width="60" class="product-thumb" src="<?php echo $value['image'];?>"></a>
                        <?php else: ?>
                            <a href="javascript:;"></a>
                        <?php endif; ?>
                    </td>
                    <?php if (!isset($value['lang'])): ?>
                        <td class="text-l">
                            <a style="text-decoration:none" onClick="product_list_details('<?php echo $value['productitle'];?>','product_list_details?id=<?php echo $value['id'];?>','10001','800','650')" href="javascript:;"><?php echo $value['productitle'];?></a>
                        </td>
                    <?php else: ?>
                        <td class="text-l">
                            <a style="text-decoration:none" onClick="product_list_details('<?php echo $value['productitle'];?>','product_list_details?id=<?php echo $value['id'];?>&lang=<?php echo $value['lang'];?>','10001','800','650')" href="javascript:;"><?php echo $value['productitle'];?></a>
                        </td>
                    <?php endif; ?>
                    <td class="text-l"><?php echo $value['text'];?></td>
                    <td><?php echo $value['product_brand'];?></td>
                    <?php if ($value['cit_id'] == 0): ?>
                    <td><?php echo '否';?></td>
                     <?php else: ?>
                    <td><?php echo '是';?></td>
                     <?php endif; ?>
                    <td><?php echo $value['category_name'];?></td>
                    <?php if ($value['statu'] == 0): ?>
                        <td class="td-status"><span class="label label-default radius">已下架</span></td>
                    <?php else: ?>
                        <td class="td-status"><span class="label label-success radius">已发布</span></td>
                    <?php endif; ?>
                    <td class="td-manage">
                        <?php if ($value['statu'] == 0): ?>
                            <a style="text-decoration:none" onClick="product_start(this,<?php echo $value['id'];?>)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>
                        <?php else: ?>
                            <a style="text-decoration:none" onClick="product_stop(this,'<?php echo $value['id'];?>')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>
                        <?php endif; ?>
                        <?php if (!isset($value['lang'])): ?>
                            <a style="text-decoration:none" class="ml-5" onClick="product_edit('产品编辑','product_list_edit?id=<?php echo $value['id'];?>','10001')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
                        <?php else: ?>
                            <a style="text-decoration:none" class="ml-5" onClick="product_edit('产品编辑','product_list_edit?id=<?php echo $value['id'];?>&lang=<?php echo $value['lang'];?>','10001')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a>
                        <?php endif; ?>
                        <a style="text-decoration:none" class="ml-5" onClick="product_del(this,'<?php echo $value['id'];?>')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/public/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/public/admin/lib/zTree/v3/js/jquery.ztree.all-3.5.min.js"></script>
<script type="text/javascript" src="/public/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/public/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/public/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
    /*产品-添加*/
    function product_list_add (title, url) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
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
    /*产品-详情*/
    function product_list_details (title, url, id,w,h) {
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
    function product_stop (obj, id) {
        layer.confirm('确认要下架吗？', function(index) {
            $.post('/index.php/admin/ListController/list_statu', {'id': id, 'statu': 1}, function(data) {
                if(data == 200)
                {
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="product_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已下架</span>');
                    $(obj).remove();
                    layer.msg('已下架!', {icon: 5, time: 1000}, function() {
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
    function product_start (obj, id) {
        layer.confirm('确认要发布吗？', function(index) {
            $.post('/index.php/admin/ListController/list_statu', {'id': id, 'statu': 0}, function(data) {
                if(data == 200)
                {
                    $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="product_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
                    $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
                    $(obj).remove();
                    layer.msg('已发布!', {icon: 6, time: 1000}, function() {
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

    /*产品-编辑*/
    function product_edit (title, url, id) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }

    /*产品-删除*/
    function product_del (obj, id) {
        layer.confirm('确认要删除吗？', function(index) {
            $.ajax({
                type: 'POST',
                url: '/index.php/admin/ListController/list_del',
                data:{id:id},

                dataType: 'json',
                success: function(data) {
                    if(data == 200){
                        $(obj).parents("tr").remove();
                        layer.msg('已删除!', {icon: 1, time: 1000});
                    }else {
                        layer.msg('删除失败!', {icon:5, time: 1000});
                    }
                },
                error: function(data) {
                    layer.msg('系统级错误!', {icon:5, time: 1000});
                },
            });
        });
    }
</script>
</body>
</html>