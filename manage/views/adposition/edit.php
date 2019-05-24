<?php if(!defined('UNI_V')){exit;}?>
<?php include dirname(__FILE__).'/../common/_meta.php'; ?>

<title>友情链接添加</title>
</head>
<body>
<div class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-category-add" enctype="multipart/form-data">
		<div id="tab-category" class="HuiTab">
			<div class="tabCon">
				<input type="hidden" name="id" value="{$data.id}" />
					<div class="row cl">
					<label class="form-label col-xs-3 col-sm-2">
						<span class="c-red">*</span>
						广告名称：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<input type="text" class="input-text" value="{$data.ad_title}" placeholder="" id="ad_title" name="ad_title">
					</div>
					<div class="col-3">
					</div>
				</div>
				
		
				
				<div class="row cl">
					<label class="form-label col-xs-3 col-sm-2">是否开启：</label>
					<div class="formControls col-xs-9 col-sm-9">
						<div class="switch"  data-on-label="开" data-off-label="关">
					      <input type="checkbox" {if condition="$data['isopen'] eq 1"} checked="checked" {/if} name="isopen"/>
					    </div>
					</div>
				</div>
				
				<div class="row cl">
					<label class="form-label col-xs-3 col-sm-2">
						所属栏目：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<span class="select-box" style="width:30%">
						<select class="select" id="category_id" name="category_id">
							<option value="">不属于任何栏目</option>
							{volist name="CategoryRes" id="CategoryRes"}
							<option {if condition="$data['category_id'] eq $CategoryRes['id']"} selected="selected" {/if} value="{$CategoryRes.id}">{$CategoryRes.catename}</option>
							{/volist}						
						</select>
						</span>
						<span style="padding-right: 20px;color: #AAAAAA;"> * 这里用于商城栏目广告。而且只可以定位到顶级栏目。</span>
					</div>
					<div class="col-3">
					</div>
				</div>
				<div class="row cl" id="fimg">
					<label class="form-label col-xs-4 col-sm-2">广告图片上传：</label>
					<div class="formControls col-xs-8 col-sm-9">
						<div style="margin-bottom: 20px;">
							<span class="btn-upload form-group">
							  <input class="input-text upload-url radius"  type="text" placeholder="已经选择图片。图片在输入框后面！"  id="uploadfile-1" readonly><a href="javascript:void();" class="btn btn-primary radius"><i class="icon Hui-iconfont">&#xe642;</i>  浏览文件</a>
							  <input type="file" multiple  name="pic" class="input-file">
							</span>
							<img src="{$data['pic']}" height="40" style="padding: 10px;" alt="" />
							<input style="margin-top: 10px;" type="text" class="input-text" value="{$data['url']}" placeholder="请输入图片链接地址" id="ad_title" name="url">
						</div>
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
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<style type="text/css">
	#abtn,.dtbtn{
		color: red;
	}
	.li123{
		line-height: 30px;
		background: burlywood;
		display: inline-block;
		vertical-align: middle;padding: 0 8px;
	}
</style>
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