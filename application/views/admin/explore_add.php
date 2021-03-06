<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
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
<!--/meta 作为公共模版分离出去-->

<link href="/public/admin/lib/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-article-add" onsubmit="return false">
            <input type="hidden" name="id" value="<?php echo $explore['explore_id'];?>">
            <?php if (isset($explore['lang'])): ?>
                <input type="hidden" name="lang" value="<?php echo $explore['lang'];?>">
            <?php endif; ?>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>探索方式：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo $explore['increase_name'];?>" placeholder="" id="" name="increase_name">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">
                <span class="c-red">*</span>摩托车租赁：</label>
                <div class="mt-20 skin-minimal">
                        <div class="radio-box">
                            <input type="radio" id="radio-1"  name="motorcycle" value="1" <?php echo $explore['motorcycle'] == 1 ? 'checked' : '';?>>
                            <label for="radio-1">YES</label>
                        </div>
                        <div class="radio-box">
                            <input type="radio" id="radio-2" value="2" name="motorcycle" <?php echo $explore['motorcycle'] == 2 ? 'checked' : '';?>>
                            <label for="radio-1">NO</label>
                        </div>
                </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">
                <span class="c-red">*</span>摩托车友好酒店
                ：</label>
                <div class="mt-20 skin-minimal">
                        <div class="radio-box">
                            <input type="radio" id="radio-3" name="friendly" value="1" <?php echo $explore['friendly'] == 1 ? 'checked' : '1';?>>
                            <label for="radio-3">YES</label>
                        </div>
                        <div class="radio-box">
                            <input type="radio" id="radio-4" name="friendly" value="2" <?php echo $explore['friendly'] == 2 ? 'checked' : '2';?>>
                            <label for="radio-4">NO</label>
                        </div>
                </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">
                <span class="c-red">*</span>可以定制属于自己的旅行路线
                ：</label>
                <div class="mt-20 skin-minimal">
                        <div class="radio-box">
                            <input type="radio" id="radio-5" name="customize" value="1" <?php echo $explore['customize'] == 1 ? 'checked' : '1';?>>
                            <label for="radio-5">YES</label>
                        </div>
                        <div class="radio-box">
                            <input type="radio" id="radio-6"  name="customize" value="2" <?php echo $explore['customize'] == 2 ? 'checked' : '2';?>>
                            <label for="radio-6">NO</label>
                        </div>
                </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">
                <span class="c-red">*</span>最佳摩托车旅行路线：</label>
                <div class="mt-20 skin-minimal">
                        <div class="radio-box">
                            <input type="radio" id="radio-7" name="routes" value="1" <?php echo $explore['routes'] == 1 ? 'checked' : '1';?>>
                            <label for="radio-7">YES</label>
                        </div>
                        <div class="radio-box">
                            <input type="radio" id="radio-8" name="routes" value="2" <?php echo $explore['routes'] == 2 ? 'checked' : '2';?>>
                            <label for="radio-8">NO</label>
                        </div>
                </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">
                <span class="c-red">*</span>EagleRider旅行攻略：</label>
                <div class="mt-20 skin-minimal">
                        <div class="radio-box">
                            <input type="radio" id="radio-9" name="eaglerider" value="1" <?php echo $explore['eaglerider'] == 1 ? 'checked' : '1';?>>
                            <label for="radio-9">YES</label>
                        </div>
                        <div class="radio-box">
                            <input type="radio" id="radio-10" name="eaglerider" value="2" <?php echo $explore['eaglerider'] == 2 ? 'checked' : '2';?>>
                            <label for="radio-10">NO</label>
                        </div>
                </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">
                <span class="c-red">*</span>运送行李的支持车辆：</label>
                <div class="mt-20 skin-minimal">
                    <div class="radio-box">
                        <input type="radio" id="radio-11" name="support" value="1" <?php echo $explore['support'] == 1 ? 'checked' : '';?>>
                        <label for="radio-11">YES</label>
                    </div>
                    <div class="radio-box">
                        <input type="radio" id="radio-12" name="support" value="2" <?php echo $explore['support'] == 2 ? 'checked' : '';?>>
                        <label for="radio-12">NO</label>
                    </div>
                </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">
                <span class="c-red">*</span>备用摩托车：</label>
                <div class="mt-20 skin-minimal">
                        <div class="radio-box">
                            <input type="radio" id="radio-13" name="spare" value="1" <?php echo $explore['spare'] == 1 ? 'checked' : '';?>>
                            <label for="radio-13">YES</label>
                        </div>
                        <div class="radio-box">
                            <input type="radio" id="radio-14" name="spare" value="2" <?php echo $explore['spare'] == 2 ? 'checked' : '';?>>
                            <label for="radio-14">NO</label>
                        </div>
                </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">
                <span class="c-red">*</span>专业支持车驾驶员：</label>
                <div class="mt-20 skin-minimal">
                        <div class="radio-box">
                            <input type="radio" id="radio-15" name="professional" value="1" <?php echo $explore['professional'] == 1 ? 'checked' : '';?>>
                            <label for="radio-15">YES</label>
                        </div>
                        <div class="radio-box">
                            <input type="radio" id="radio-16" name="professional" value="2" <?php echo $explore['professional'] == 2 ? 'checked' : '';?>>
                            <label for="radio-16">NO</label>
                        </div>
                </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">
                <span class="c-red">*</span>专业双语导游：</label>
                <div class="mt-20 skin-minimal">
                        <div class="radio-box">
                            <input type="radio" id="radio-17" name="bilingual" value="1" <?php echo $explore['bilingual'] == 1 ? 'checked' : '';?>>
                            <label for="radio-17">YES</label>
                        </div>
                        <div class="radio-box">
                            <input type="radio" id="radio-18" name="bilingual" value="2" <?php echo $explore['bilingual'] == 2 ? 'checked' : '';?>>
                            <label for="radio-18">NO</label>
                        </div>
                </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">
                <span class="c-red">*</span>团队旅行体验：</label>
                <div class="mt-20 skin-minimal">
                        <div class="radio-box">
                            <input type="radio" id="radio-19" name="experience" value="1" <?php echo $explore['experience'] == 1 ? 'checked' : '';?>>
                            <label for="radio-19">YES</label>
                        </div>
                        <div class="radio-box">
                            <input type="radio" id="radio-20" name="experience" value="2" <?php echo $explore['experience'] == 2 ? 'checked' : '';?>>
                            <label for="radio-20">NO</label>
                        </div>
                </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">
                <span class="c-red">*</span>每天提供丰盛早餐：</label>
                <div class="mt-20 skin-minimal">
                        <div class="radio-box">
                            <input type="radio" id="radio-21" name="breakfast" value="1" <?php echo $explore['breakfast'] == 1 ? 'checked' : '';?>>
                            <label for="radio-21">YES</label>
                        </div>
                        <div class="radio-box">
                            <input type="radio" id="radio-22" name="breakfast" value="2" <?php echo $explore['breakfast'] == 2 ? 'checked' : '';?>>
                            <label for="radio-22">NO</label>
                        </div>
                </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">
                <span class="c-red">*</span>骑行时所需的汽油：</label>
                <div class="mt-20 skin-minimal">
                        <div class="radio-box">
                            <input type="radio" id="radio-23" name="gasolin" value="1" <?php echo $explore['gasolin'] == 1 ? 'checked' : '';?>>
                            <label for="radio-23">YES</label>
                        </div>
                        <div class="radio-box">
                            <input type="radio" id="radio-24" name="gasolin" value="2" <?php echo $explore['gasolin'] == 2 ? 'checked' : '';?>>
                            <label for="radio-24">NO</label>
                        </div>
                </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">
                <span class="c-red">*</span>欢迎晚宴
                ：</label>
                <div class="mt-20 skin-minimal">
                        <div class="radio-box">
                            <input type="radio" id="radio-25" name="banquet" value="1" <?php echo $explore['banquet'] == 1 ? 'checked' : '';?>>
                            <label for="radio-25">YES</label>
                        </div>
                        <div class="radio-box">
                            <input type="radio" id="radio-26" name="banquet" value="2" <?php echo $explore['banquet'] == 2 ? 'checked' : '';?>>
                            <label for="radio-26">NO</label>
                        </div>
                </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">
                <span class="c-red">*</span>EagleRider欢送派对
                ：</label>
                <div class="mt-20 skin-minimal">
                        <div class="radio-box">
                            <input type="radio" id="radio-27" name="farewell" value="1" <?php echo $explore['farewell'] == 1 ? 'checked' : '';?>>
                            <label for="radio-27">YES</label>
                        </div>
                        <div class="radio-box">
                            <input type="radio" id="radio-28" name="farewell" value="2" <?php echo $explore['farewell'] == 2 ? 'checked' : '';?>>
                            <label for="radio-28">NO</label>
                        </div>
                </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>价格：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo $explore['price'];?>" placeholder=""  name="price">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">精心绘制：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <script id="editor" type="text/plain" style="width:100%;height:400px;"><?php echo $explore['text'];?></script>
                </div>
            </div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button onClick="article_save_submit();" class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i>提交</button>
				<button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/public/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/public/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/public/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/public/admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/public/admin/lib/ueditor/1.4.3/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/public/admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
$(function(){
    var ue = UE.getEditor('editor');
});
function article_save_submit()
{
    var   str = $("#form-article-add").serialize();

    $.post('/index.php/admin/Explore/explore_add',{'str':str},function(data) {

        if(data == 200){

            layer.msg('OK',{icon:1,time:2000});

        }else{


            layer.msg('NO',{icon:6,time:2000});

        }
    });
}
</script>
</body>
</html>