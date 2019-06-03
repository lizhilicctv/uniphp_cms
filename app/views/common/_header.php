<header>
  <div id="mnav">
    <div class="logo"><a href="/">李志立个人博客</a></div>
    <h2 id="mnavh"><span class="navicon"></span></h2>
    <ul id="starlist">
      <li><a href="index.html">网站首页</a></li>
      <li><a href="about.html">关于我</a></li>
      <li><a href="share.html">模板分享</a></li>
      <li><a href="list.html">学无止境</a></li>
      <li><a href="info.html">慢生活</a></li>
      <li><a href="shareinfo.html">模板内容页</a></li>
      <li><a href="gbook.html">留言</a></li>
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