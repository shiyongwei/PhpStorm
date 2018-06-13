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
    <link href="/public/admin/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="/public/admin/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
    <link href="/public/admin/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/public/admin/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="/public/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>后台登录 - H-ui.admin v3.1</title>
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="loginWraper">
    <div id="loginform" class="loginBox">
        <form class="form form-horizontal" action="" method="post" id="form-login" onsubmit="return false">
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
                <div class="formControls col-xs-8">
                    <input  name="username" type="text" placeholder="账户" class="input-text size-L">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
                <div class="formControls col-xs-8">
                    <input  name="password" type="password" placeholder="密码" class="input-text size-L">
                </div>
            </div>
            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <input name="" type="submit" id="submit_from" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
                    <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;取&nbsp;&nbsp;&nbsp;&nbsp;消&nbsp;">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="footer"></div>
<script type="text/javascript" src="/public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/public/admin/static/h-ui/js/H-ui.min.js"></script>
<script>
    $('#submit_from').click(function() {

        var   str = $("#form-login").serialize();

        $.post('/index.php/admin/LoginController/login',{'str':str},function(data) {



            if(data == 200){

                layer.msg('登录成功!',{icon:1,time:2000},function() {

                    location.href='/index.php/admin/admin/login';

                });



            }else if(data == 500){

                layer.msg('帐号密码不能为空',{icon:3,time:2000});

            } else{


                layer.msg('登录失败,帐号密码不匹配',{icon:6,time:2000});

            }


        });


    })
</script>
</body>
</html>