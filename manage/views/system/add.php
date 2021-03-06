<?php if(!defined('UNI_V')){exit;}?>
<?php include dirname(__FILE__).'/../common/_meta.php'; ?>
<title>栏目添加</title>
<meta name="keywords" content="uniphp">
<meta name="description" content="uniphp,轻量级php框架.">
</head>
<body>
<div class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-category-add">
		<div id="tab-category" class="HuiTab">
			<div class="tabCon">
				<div class="row cl">
					<label class="form-label col-xs-3 col-sm-2">
						<span class="c-red">*</span>
						中文名称：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="" placeholder="" id="cnname" name="cnname">
					</div>
					<div class="col-3">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-3 col-sm-2">
						<span class="c-red">*</span>
						英文名称：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="" placeholder="" id="enname" name="enname">
					</div>
					<div class="col-3">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-3 col-sm-2">
						<span class="c-red">*</span>
						配置类型：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<span class="select-box">
						<select class="select" id="type" name="type">
							<option value>请选择类型</option>
							<option value="1">单行文本</option>
							<option value="2">多行文本</option>
							<option value="3">单按钮</option>
						</select>
						</span>
					</div>
					<div class="col-3">
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-3 col-sm-2">
						配置可选值：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="" placeholder="用英文逗号分隔" id="kxvalue" name="kxvalue">
					</div>
					<div class="col-3">
					</div>
				</div>
				
				<div class="row cl">
					<label class="form-label col-xs-3 col-sm-2">配置简介：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<textarea name="desc" id="desc" cols="" rows="" class="textarea"  placeholder="说点什么，请输入..." onKeyUp="textlength()"></textarea>
						<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
					</div>
					<div class="col-3">
					</div>
				</div>
				<div class="row cl">
					<div class="col-9 col-offset-2">
						<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<!--_footer 作为公共模版分离出去-->
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
	
	$("#tab-category").Huitab({
		index:0
	});
	// 这里的正则没有填写
	
	
	$("#form-category-add").validate({
		// $.validator.addMethod('zh1',function(value,element,params){
		// 	var zh1= ^[\u4e00-\u9fa5]$;
		// 	return this.optional(element) || (zh1.test(value));
		// },'必须填写中文');
		rules:{
			cnname:{
				required:true,
				zh1:true,
			},
			enname:{
				required:true,
			},
			type:{
				required:true,
			},
		}
		

	});
	
});
function textlength(){
	var nmb=$('#mark').val().length;
	$('.textarea-length').text(nmb);
	if(nmb>100){
		$('#mark').css("background-color","orangered");
	}else{
		$('#mark').css("background-color","white");
	}
}
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>