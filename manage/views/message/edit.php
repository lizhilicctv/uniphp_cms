<?php if(!defined('UNI_V')){exit;}?>
<?php include dirname(__FILE__).'/../common/_meta.php'; ?>
<title>查看留言</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-member-add">
		<input type="hidden"  value="<?php echo $this->data['id']; ?>" name="id">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<p><?php echo $this->data['title']; ?></p>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>姓名：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<p><?php echo $this->data['name']; ?></p>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>手机：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<p><?php echo $this->data['phone']; ?></p>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>时间：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<p><?php echo date('Y-m-d H:i:s',$this->data['in_time']); ?></p>
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">当前状态：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<?php if($this->data['isopen'] == 1){ ?>
					<span class="label label-success radius">已查看</span>
				<?php }else{ ?>
					<span class="label label-default radius">未查看</span>
				<?php } ?>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">修改状态：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<div class="radio-box">
					<input name="isopen" type="radio" id="sex-1" value="1" <?php if($this->data['isopen'] ==1) { echo 'checked';} ?>>
					<label for="sex-1">已经查看</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-2" value="0" name="isopen" <?php if($this->data['isopen'] ==0) { echo 'checked';} ?>>
					<label for="sex-2">以后处理</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">详细内容：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<p><?php echo $this->data['neirong']; ?></p>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>
<?php include dirname(__FILE__).'/../common/_footer.php'; ?>
<!--请在下方写此页面业务相关的脚本--> 
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	$("#form-member-add").validate({
		rules:{
			username:{
				required:true,
				minlength:2,
				maxlength:16
			},
			sex:{
				required:true,
			},
			phone:{
				required:true,
				isMobile:true,
			},
			email:{
				required:true,
				email:true,
			}
		}
	});
});
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>