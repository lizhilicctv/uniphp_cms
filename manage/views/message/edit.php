<?php if(!defined('UNI_V')){exit;}?>
<?php include dirname(__FILE__).'/../common/_meta.php'; ?>
<title>查看留言</title>
<meta name="keywords" content="uniphp">
<meta name="description" content="uniphp,轻量级php框架.">
</head>
<body>
<article class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-member-add">
		<input type="hidden"  value="<?php echo $this->data['id']; ?>" name="id">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>标题：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text"  disabled="disabled" class="input-text" value="<?php echo $this->data['title']; ?>" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>姓名：</label>
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<input type="text"  disabled="disabled" class="input-text" value="<?php echo $this->data['name']; ?>" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>手机：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text"  disabled="disabled" class="input-text" value="<?php echo $this->data['phone']; ?>" >
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>时间：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text"  disabled="disabled" class="input-text" value="<?php echo date('Y-m-d H:i:s',$this->data['in_time']); ?>" >
			</div>
		</div>

		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">修改状态：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
			
				<div class="radio-box">
					<div class="iradio-blue  <?php if($this->data['isopen'] ==1) { echo 'checked';} ?> "><input value="1" type="radio" id="sex-1" name="isopen" <?php if($this->data['isopen'] ==1) { echo 'checked';} ?>  style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
					<label for="sex-1" class="">已经查看</label>
				</div>
				
				<div class="radio-box">
					<div class="iradio-blue  <?php if($this->data['isopen'] ==0) { echo 'checked';} ?> "  ><input value="0" type="radio" id="sex-0" name="isopen"  <?php if($this->data['isopen'] ==0) { echo 'checked';} ?>  style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
					<label for="sex-0" class="">以后处理</label>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">详细内容：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea  class="textarea" disabled="disabled"  dragonfly="true" ><?php echo $this->data['neirong']; ?></textarea>
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
$('.iradio-blue').click(function (){
	$('.iradio-blue').removeClass('checked');
	$(this).addClass('checked');
	$(".iradio-blue input").removeAttr("checked");
    $(this).find('input').prop('checked',true);    
	
});
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>