<?php if(!defined('UNI_V')){exit;}?>
<?php include dirname(__FILE__).'/../common/_meta.php'; ?>
<title>新建网站角色 - 管理员管理 </title>
<meta name="keywords" content="uniphp">
<meta name="description" content="uniphp,轻量级php框架.">
</head>
<body>
<article class="cl pd-20">
	<form action="" method="post" class="form form-horizontal" id="form-admin-role-add">
		<input type="hidden"  value="<?php echo $this->data['id']; ?>" name="id">
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2"><span class="c-red">*</span>角色名称：</label>
			<div class="formControls col-xs-9 col-sm-10">
				<input type="text" class="input-text" value="<?php echo $this->data['title']; ?>" placeholder="" id="title" name="title" datatype="*4-16" nullmsg="用户账户不能为空">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">备注：</label>
			<div class="formControls col-xs-9 col-sm-10">
				<input type="text" class="input-text" value="<?php echo $this->data['desc']; ?>" placeholder="" id="desc" name="desc">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-3 col-sm-2">网站角色：</label>
			<div class="formControls col-xs-9 col-sm-10">
				<dl class="permission-list" id="lizhili">
				<?php foreach($this->datasort as $k=>$v){ ?>
					<?php if($v['level'] == 0){ 
						$arr=explode(',', $this->data['rules']);
						?>
						<dt>
							<label>
								<input type="checkbox" value="<?php echo $v['id']; ?>" <?php  if(in_array($v['id'], $arr)){echo 'checked="checked"';} ?> id="f<?php echo $v['id']; ?>" name="rules[]">
								<?php echo $v['title']; ?></label>
						</dt>
					<?php }else{ ?>
							<div class="check-box" value="<?php echo $v['id']; ?>"  style="padding: 8px;">
								<label ><input type="checkbox" class="f<?php echo $v['id']; ?>" <?php if(in_array($v['id'], $arr)){echo 'checked="checked"';} ?> name="rules[]" value="<?php echo $v['id']; ?>">
							   <?php echo $v['title']; ?></label>
							  </div>
					<?php } ?>
				
				<?php } ?>
				</dl>
				
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-3 col-sm-offset-2">
				<button type="submit" class="btn btn-success radius"><i class="icon-ok"></i> 确定</button>
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
	$(".permission-list dt input:checkbox").click(function(){
		$(this).closest("dl").find("dd input:checkbox").prop("checked",$(this).prop("checked"));
	});
	$(".permission-list2 dd input:checkbox").click(function(){
		var l =$(this).parent().parent().find("input:checked").length;
		var l2=$(this).parents(".permission-list").find(".permission-list2 dd").find("input:checked").length;
		if($(this).prop("checked")){
			$(this).closest("dl").find("dt input:checkbox").prop("checked",true);
			$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",true);
		}
		else{
			if(l==0){
				$(this).closest("dl").find("dt input:checkbox").prop("checked",false);
			}
			if(l2==0){
				$(this).parents(".permission-list").find("dt").first().find("input:checkbox").prop("checked",false);
			}
		}
	});
	
	$("#form-admin-role-add").validate({
		rules:{
			title:{
				required:true,
			},
		},
		
	});
	
	$('#lizhili input').click(function(){
	    if($(this).attr('id')){
	    	var liz='.'+$(this).attr('id');
	    	if($(this).prop('checked')){
	    		$(liz).prop("checked",'checked');
	    	}else{
	    		$(liz).removeAttr("checked");
	    	}
	    }
	    if($(this).attr('class')){
	    	var liz='#'+$(this).attr('class');
	    	
	    	$(liz).prop("checked",'checked');
	    	
	    }
	  });
});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>