<?php if(!defined('UNI_V')){exit;}?>
<?php include dirname(__FILE__).'/../common/_meta.php'; ?>
<title>添加用户</title>
<meta name="keywords" content="uniphp">
<meta name="description" content="uniphp,轻量级php框架.">
</head>
<body>
<article class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-member-add">
		<input type="hidden" name="id" id="id" value="<?php echo $this->data['id']; ?>" />
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>用户名：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $this->data['username']; ?>" placeholder="" id="username" name="username">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>性别：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="radio-box">
					<input name="sex" type="radio" id="sex-1" value="1" <?php if($this->data['sex'] == 1){ echo ' checked';} ?> >
					<label for="sex-1">男</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-2" value="2" name="sex" <?php if($this->data['sex'] == 2){ echo ' checked';} ?>>
					<label for="sex-2">女</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-3" value="3" name="sex" <?php if($this->data['sex'] == 3){ echo ' checked';} ?>>
					<label for="sex-3">保密</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>手机：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $this->data['phone']; ?>" placeholder="" id="phone" name="phone">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>邮箱：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" placeholder="@" value="<?php echo $this->data['email']; ?>" name="email" id="email">
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">所在城市：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<div id="province"></div>
				<!-- 自己定义的选择地址,在最下面 -->
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">详细地址：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $this->data['address']; ?>" placeholder="" id="" name="address">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">
				积分：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo $this->data['score']; ?>" placeholder="输入积分" id="points" name="score">
			</div>
			<div class="col-3">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">是否认证：</label>
			<div class="formControls col-xs-9 col-sm-9">
				<div class="switch"  data-on-label="开" data-off-label="关">
					<?php if($this->data['state'] == 1){?>
						<input type="checkbox" checked="checked" name="state"/>
					<?php }else{ ?>
						<input type="checkbox" name="state"/>
					<?php } ?>
				  
				</div>
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
<style type="text/css">
	#province select{
		margin-right: 15px;
		height: 30px;
		width: 80px;
	}
</style>
<!--请在下方写此页面业务相关的脚本--> 
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/jquery.provincesCity.js"></script>
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/provincesData.js"></script>
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
			},
			
		},
		
	});
	
	
	$("#province").ProvinceCity();
});
</script> 
<script type="text/javascript">
//自己编写地址选中
	$(function(){
		$("[name='sheng']").find("option:contains('<?php echo $this->data['sheng']; ?>')").attr("selected",true);
		$("[name='sheng']").change();
		$("[name='shi']").find("option:contains('<?php echo $this->data['shi']; ?>')").attr("selected",true);
		$("[name='shi']").change();
		$("[name='xian']").find("option:contains('<?php echo $this->data['xian']; ?>')").attr("selected",true);
	});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>