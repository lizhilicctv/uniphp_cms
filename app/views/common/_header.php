<?php
	use UNI\tools\Db;
	$nav=Db::name('cate')->order('sort asc,id asc')->getall('id,catename,en_name,fid,type');
	//使用递归排序
	function pai($res,$fid=0,$level=0){
		static $arr=[];//静态方法
		foreach ($res as $key => $value) {
			if($value['fid']==$fid){
				$value['level']=$level;
				$arr[]=$value;
				pai($res,$value['id'],$level+1);
			}
		}
		return $arr;
	}	
	$nav=pai($nav);
?>
<header>
  <div id="mnav">
    <div class="logo"><a href="/">李志立个人博客</a></div>
    <h2 id="mnavh"><span class="navicon"></span></h2>
    <ul id="starlist">
      <li><a href="/">网站首页</a></li>
		<?php foreach($nav as $k=>$v){ 
			if($v['level'] == 0){?>
			<li><a href="/<?php if($v['type'] == 3){echo 'list/'.$v['en_name'];}else{echo $v['en_name'];} ?>.html"><?php echo $v['catename']; ?></a>
				<ul>
					<?php foreach($nav as $k1=>$v1){ 
						if($v1['fid'] == $v['id']){
					?>
					<li><a href="/list/<?php echo $v1['en_name']; ?>.html"><?php echo $v1['catename']; ?></a></li>
					<?php } }?>
				</ul>
			</li>
		<?php } } ?>
    </ul>
  </div>
  <script>
window.onload = function ()
{
	var oH2 = document.getElementById("mnavh"); 
	var oUl = document.getElementById("starlist");  
	oH2.onclick = function ()
	{
		var style = oUl.style;
		style.display = style.display == "block" ? "none" : "block";
		oH2.className = style.display == "block" ? "open" : ""
	}
}
</script> 
</header>
<style>
	#starlist { float: right;  }
	#starlist > li{
		font-size: 16px;
		display: inline-block;
		padding: 0 30px;
		text-align: center;
		position: relative;
	}
	#starlist > li:hover{
		background: #005580;
	}
	#starlist li:hover ul{
		display: block;
	}
	#starlist ul{
		display: none;
		position: absolute;
		background: #333333;
		left: 0;
	}
	#starlist ul li{
		float: none;
		display: block;
		padding: 0 30px;
	}
	#starlist ul > li:hover{
		background: #6DBFFF;
	}
</style>