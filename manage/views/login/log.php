<?php if(!defined('UNI_V')){exit;}?>
<?php include dirname(__FILE__).'/../common/_meta.php'; ?>
<title>系统日志</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
	<span class="c-gray en">&gt;</span>
	登陆日志
	<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="page-container">
	<div class="text-c"> 
		<form action="" method="post">
			<input type="text" name="key" id="" placeholder="日志名称" style="width:250px" class="input-text">
			<button name=""  id="" class="btn btn-success" type="submit"><i class="Hui-iconfont">&#xe665;</i> 搜日志</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20">
		<span class="l">
		<a href="javascript:;" onclick="data_del()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
		</span>
		<span class="r">共有数据：<strong><?php echo $this->count; ?></strong> 条</span>
	</div>
	<table class="table table-border table-bordered table-bg table-hover table-sort">
		<thead>
			<tr class="text-c">
				<th width="25"><input type="checkbox" name="" value=""></th>
				<th width="80">ID</th>
				<th width="100">用户名</th>
				<th width="120">客户端IP</th>
				<th width="120">时间</th>
				<th width="120">距离现在时间</th>
				<th width="70">操作</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($this->data[0] as $k=>$v){ ?>
			<tr class="text-c">
				<td><input type="checkbox" class="all" value="<?php echo $v['id']; ?>" name=""></td>
				<td><?php echo $v['id']; ?></td>
				<td><?php echo $v['username']; ?></td>
				<td><?php echo $v['ip']; ?></td>
				<td><?php echo date('Y-m-d H:i:s',$v['in_time']); ?></td>
				<td><?php echo tonow($v['in_time']); ?></td>
				<td><a title="删除" href="javascript:;" onclick="article_del(this,<?php echo $v['id']; ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<?php echo $this->data[1]; ?>
</div>
<?php include dirname(__FILE__).'/../common/_footer.php'; ?>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo APP_CONFIG['__manage__']; ?>lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
/*资讯-删除*/
function article_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$.post(
			"<?php echo u('login','ajax');?>",
		{
			id:id,
			type:'log_del',
		},
		function(result){
	        if(result===0){
	        	layer.msg('删除失败!',{icon: 5,time:1000});
	        }else{
	        	$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
	        }
	    });	
	});
}
/*自己编写管理员-批量删除*/
function data_del(){
	var arr= new Array();
	$("input[type='checkbox']:gt(0):checked").each(function(){
    	arr.push($(this).attr("value"));
	});
   if(arr.length<1){
    alert("请至少选择一个");
   }else{
	   	layer.confirm('确认要删除吗？',function(index){
			$.post(
				"<?php echo u('login','ajax');?>",
			{
				id:arr,
				type:'log_all',
			},
			function(result){
		        if(result===0){
		        	layer.msg('批量删除失败!',{icon: 5,time:1000});
		        }else{
					layer.msg('批量删除成功!',{icon:1,time:1000});
					history.go(0);
		        }
		    });	
		});
   }
	
}
</script>
</body>
</html>