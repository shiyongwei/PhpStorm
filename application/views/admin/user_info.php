<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="/public/admin/favicon.ico">
    <link rel="Shortcut Icon" href="/public/admin/favicon.ico" />
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
    <title>管理员列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户信息中心
    <span class="c-gray en">&gt;</span> 用户数据登记列表
    <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
    <div class="cl pd-5 bg-1 bk-gray mt-20">
        <span class="r">共有数据：<strong><?php echo count($userInfo); ?></strong> 条</span></div>
    <table class="table table-border table-bordered table-bg">
        <thead>
        <tr>
            <th scope="col" colspan="11">用户登记列表</th>
        </tr>
        <tr class="text-c">
            <th width="40">ID</th>
            <th width="150">用户昵称</th>
            <th width="130">联系方式</th>
            <th width="130">人数</th>
            <th width="130">取车城市</th>
            <th width="130">还车城市</th>
            <th width="130">取车时间</th>
            <th width="130">还车时间</th>
            <th width="130">所选摩托</th>
            <th width="130">所选摩托套餐</th>
            <th width="100">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($userInfo as $item => $value): ?>
            <tr class="text-c">
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['phone']; ?></td>
                <td><?php echo $value['number']; ?></td>
                <td><?php echo $value['star_city']; ?></td>
                <td><?php echo $value['end_city']; ?></td>
                <td><?php echo $value['start_time']; ?></td>
                <td><?php echo $value['over_time']; ?></td>
                <td><?php echo $value['motorcycle']; ?></td>
                <td><?php echo $value['travel']; ?></td>
                <td><a style="text-decoration:none" class="ml-5" onClick="_del(this,'<?php echo $value['id']; ?>')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
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
<script type="text/javascript" src="/public/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/public/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/public/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
	/*产品-删除*/
	function _del (obj, id) {
		layer.confirm('确认要删除吗？', function(index) {
			$.ajax({
				type: 'POST',
				url: '/index.php/admin/User_info/user_info__del',
				data: {id: id},

				dataType: 'json',
				success: function(data) {
					if(data == 200)
					{
						$(obj).parents("tr").remove();
						layer.msg('已删除!', {icon: 1, time: 1000});
					}
					else
					{
						layer.msg('删除失败!', {icon: 5, time: 1000});
					}
				},
				error: function(data) {
					layer.msg('系统级错误!', {icon: 5, time: 1000});
				},
			});
		});
	}
</script>
</body>
</html>