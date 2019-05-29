<?php if(!defined('UNI_V')){exit;}?>
<?php include dirname(__FILE__).'/../common/_meta.php'; ?>
<title>网站名称</title>
<meta name="keywords" content="uniphp">
<meta name="description" content="uniphp,轻量级php框架.">
</head>
<body>
<?php 
include dirname(__FILE__).'/../common/_header.php';
include dirname(__FILE__).'/../common/_menu.php';
?>
<style>
	.modal-title{color: #f00;}
	.modal-body{line-height: 30px;}
	.modal-body span{padding: 0 10px;font-size: 18px;color: #f00;}
	.modal-body a:hover{color: #666;}
	@media(min-width:768px) {.modal-dialog {width: 400px;margin: 200px auto	}}
	@media(min-width:992px) {.modal-lg {width: 400px}}
</style>
<section class="Hui-article-box">
	<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
		<div class="Hui-tabNav-wp">
			<ul id="min_title_list" class="acrossTab cl">
				<li class="active">
					<span title="系统信息" data-href="<?php echo u('index','main'); ?>">系统信息</span>
					<em></em></li>
		</ul>
	</div>
		<div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
</div>
	<div id="iframe_box" class="Hui-article">
		<div class="show_iframe">
			<div style="display:none" class="loading"></div>
			<iframe scrolling="yes" frameborder="0" src="<?php echo u('index','main'); ?>"></iframe>
	</div>
</div>
</section>

<div id="modal-demo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content radius">
				<div class="modal-header">
					<h3 class="modal-title">温馨提示</h3>
					<a class="close" data-dismiss="modal" aria-hidden="true" href="javascript:void();">×</a>
				</div>
				<div class="modal-body lizhili1">
					<p><a data-href="<?php echo u('message','index'); ?>" data-title="留言消息" href="javascript:;" data-dismiss="modal" aria-hidden="true"
						 title="留言消息">您有<span>
								<?php echo getSession('message_header'); ?></span>个新留言尚未处理，点击处理</a></p>
					<p><a data-href="<?php echo u('comment','index'); ?>" data-title="评论消息" href="javascript:;" data-dismiss="modal" aria-hidden="true"
						 title="评论消息">您有<span>
								<?php echo getSession('comment_header'); ?></span>个新评论尚未处理，点击处理</a></p>
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">稍后查看</button>
				</div>
			</div>
		</div>
	</div>

<?php include dirname(__FILE__).'/../common/_footer.php'; ?>
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script type="text/javascript">
$(function(){
	
	$("body").Huitab({
		tabBar:".navbar-wrapper .navbar-levelone",
		tabCon:".Hui-aside .menu_dropdown",
		className:"current",
		index:0,
	});
});
/*个人信息*/
function myselfinfo(){
	layer.open({
		type: 1,
		area: ['600px','600px'],
		fix: false, //不固定
		maxmin: true,
		shade:0.4,
		title: '帮助信息',
		content: ' <img src="/static/manage/qqimg.jpg" width="100" > <img src="/static/manage/weixinimg.jpg" width="100">',
	});
}




function tishi() {
	$("#modal-demo").modal("show")
}

if (<?php echo getSession('message_header'); ?> > 0 || <?php echo getSession('comment_header'); ?> > 0) {
	tishi();
	playSound();
}

function playSound() {
	var borswer = window.navigator.userAgent.toLowerCase();
	if (borswer.indexOf("ie") >= 0) {
		//IE内核浏览器
		var strEmbed =
			'<embed name="embedPlay" src="http://data.huiyi8.com/2017/gha/03/17/1702.mp3" autostart="true" hidden="true" loop="false"></embed>';
		if ($("body").find("embed").length <= 0)
			$("body").append(strEmbed);
		var embed = document.embedPlay;

		//浏览器不支持 audion，则使用 embed 播放
		embed.volume = 100;
		//embed.play();这个不需要
	} else {
		//非IE内核浏览器
		var strAudio = "<audio id='audioPlay' src='http://data.huiyi8.com/2017/gha/03/17/1702.mp3' hidden='true'>";
		if ($("body").find("audio").length <= 0)
			$("body").append(strAudio);
		var audio = document.getElementById("audioPlay");

		//浏览器支持 audion
		audio.play();
	}
}


</script> 

</body>
</html>