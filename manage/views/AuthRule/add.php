<?php if(!defined('UNI_V')){exit;}?>
<?php include dirname(__FILE__).'/../common/_meta.php'; ?>
<title>添加管理员 - 管理员管理</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="cl pd-20">
	<form action="" method="post" class="form form-horizontal" id="form-admin-add">
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2"><span class="c-red">*</span>上级权限：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<span class="select-box" style="width:150px;">
				<select class="select" name="fid" size="1">
					<option value="0">顶级权限</option>
					<?php foreach($this->datasort as $k=>$v){ ?>
					<option value="<?php echo $v['id']; ?>"><?php echo $v['title']; ?></option>
					<?php } ?>
				</select>
				</span>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2"><span class="c-red">*</span>权限名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="" id="title" name="title">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2"><span class="c-red">*</span>权限地址：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" autocomplete="off" value=""  id="name" name="name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">备注：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea  cols="" rows="" id="mark" name="mark" class="textarea"  placeholder="说点什么...120个字符以内" dragonfly="true" onKeyUp="textlength()"></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/120</p>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-3 col-sm-offset-2">
				<input id="tijiao" class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<?php include dirname(__FILE__).'/../common/_footer.php'; ?>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
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
	$("#form-admin-add").validate({
		rules:{
			title:{
				required:true,
				minlength:4,
				maxlength:16,
			},
			name:{
				required:true,
			},
		}
	});
});


function textlength(obj,max){
	var nmb=$('#mark').val().length;
	$('.textarea-length').text(nmb);
	if(nmb>120){
		$('#mark').css("background-color","orangered");
	}else{
		$('#mark').css("background-color","white");
	}
}
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>