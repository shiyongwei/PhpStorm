<link href="/public/css/hot_trave.css" type="text/css" rel="stylesheet" />

<?php foreach ($topic as $key=>$topics): ?>
<div class="js-page">
    <div class="row-fluid route" style="background-image: url('<?php echo $topics['image']?>');">
        <div class="span12 route-data">
            <h1 class="title"><?php echo $topics['topictitle']?></h1>
            <a href="hotTrave_detail?id=<?php echo $topics['topic_id']?>" class="discover btn">
                探索<span class="icon"></span>
            </a>
        </div>

        <a href="#" class="down js-arrow-btn"></a>
    </div>
	<?php endforeach; ?>
</div>
