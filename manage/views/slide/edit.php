<?php if(!defined('UNI_V')){exit;}?>
<?php include dirname(__FILE__).'/../common/_meta.php'; ?>
<title>幻灯片修改添加</title>
<meta name="keywords" content="uniphp">
<meta name="description" content="uniphp,轻量级php框架.">
</head>
<body>
<div class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-category-add" enctype="multipart/form-data">
		<div id="tab-category" class="HuiTab">
			<div class="tabCon">
				<input type="hidden" name="id" value="<?php echo $this->data['id']; ?>" />
				<div class="row cl">
					<label class="form-label col-xs-3 col-sm-2"><span class="c-red">*</span>  图片标题：</label>
					<div class="formControls col-xs-9 col-sm-9">
						<input type="text" class="input-text" value="<?php echo $this->data['title']; ?>" placeholder="请输入图片标题" id="keyword" name="title">
					</div>
				</div>
				
				<div class="row cl">
					<label class="form-label col-xs-3 col-sm-2">链接地址：</label>
					<div class="formControls col-xs-9 col-sm-9">
						<input type="text" class="input-text" value="<?php echo $this->data['url']; ?>" placeholder="链接地址必须包含，http://" id="url" name="url">
					</div>
				</div>
			
				 
				<div class="row cl">
					<label class="form-label col-xs-3 col-sm-2"><span class="c-red">*</span>  上传图片：</label>
					<div class="formControls col-xs-9 col-sm-9">
						<div class="uploader-thum-container">
							<a href="javascript:void();"  class="btn btn-primary radius"><i class="icon Hui-iconfont">&#xe642;</i> 浏览文件</a>
							<input type="file" class="input-file" onchange='onpic()' name="img" id="pic" value="" accept='image/*' style="font-size: 20px;left:0;"/><span id="sp"></span>
						</div>
						<img src="<?php echo $this->data['img']; ?>" height="60"/>
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-3 col-sm-2">是否启用：</label>
					<div class="formControls col-xs-9 col-sm-9">
						<div class="switch"  data-on-label="开" data-off-label="关">
						  <?php if($this->data['isopen'] ==1){ ?>
						  	<input type="checkbox" checked="checked" name="isopen"/>
						  <?php }else{ ?>
						  	<input type="checkbox" name="isopen"/>
						  <?php } ?>
						</div>
					</div>
				</div>
				<div class="row cl">
					<label class="form-label col-xs-3 col-sm-2">文章摘要：</label>
					<div class="formControls col-xs-9 col-sm-9">
						<textarea name="desc" cols="" rows="" id="desc" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="textlength()"><?php echo $this->data['desc']; ?></textarea>
						<p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
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
<style type="text/css">
	.li123{
		line-height: 30px;
		background: burlywood;
		display: inline-block;
		vertical-align: middle;padding: 0 8px;
	}
</style>
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
	$("#form-category-add").validate({
		rules:{
			title:{
				required:true,
			},
			linkurl:{
				required:true,
				url:true,
			},
		}
	});

});
function textlength(){
	var nmb=$('#desc').val().length;
	$('.textarea-length').text(nmb);
	if(nmb>100){
		$('#desc').css("background-color","orangered");
	}else{
		$('#desc').css("background-color","white");
	}
}
function onpic(){
	var file=document.getElementById("pic").files[0];
	document.getElementById("sp").innerHTML='您已经选择图片：'+file['name'];
	document.getElementById("sp").className = 'li123';
}
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>