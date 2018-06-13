<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>发布公告</title>
    <script type="text/javascript" src="/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/ueditor/ueditor.all.min.js"></script>
</head>
<body>
<?php echo $this->calendar->generate();?>

<?php echo form_open_multipart('welcome/ceshi');?>
    <!-- 加载编辑器的容器 -->
    <script id="container" name="content" type="text/plain"></script>
    <input type="submit" value="an">
</form>
</body>
</html>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var editor = UE.getEditor('container',{
        initialFrameHeight: 500
    });//container为表单的id
</script>