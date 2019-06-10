<!doctype html>
<html>
<head>
<meta charset="gb2312">
<title><?php echo getSession('system')["webname"]; ?></title>
<meta name="keywords" content="<?php echo getSession('system')["keyword"]; ?>" />
<meta name="description" content="<?php echo getSession('system')["miaoshu"]; ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo APP_CONFIG['__index__']; ?>css/base.css" rel="stylesheet">
<link href="<?php echo APP_CONFIG['__index__']; ?>css/index.css" rel="stylesheet">
<link href="<?php echo APP_CONFIG['__index__']; ?>css/m.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="<?php echo APP_CONFIG['__index__']; ?>js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<?php include dirname(__FILE__).'/../common/_header.php'; ?>
<div class="line46"></div>
<div class="blank"></div>
<article>
  <div class="leftbox">
    <div class="infos">
      <div class="newsview">
        <h2 class="intitle">您现在的位置是：<a href="/">网站首页</a>&nbsp;&gt;&nbsp;<a href="/massage.html">留言</a></h2>
        <div class="news_infos">
          
					<!--PC和WAP自适应版-->
<div id="SOHUCS" sid="请将此处替换为配置SourceID的语句" ></div> 
<script type="text/javascript"> 
(function(){ 
var appid = 'cyrMOo7Hd'; 
var conf = 'prod_bfbfdec0342b677f6bafccea543be304'; 
var width = window.innerWidth || document.documentElement.clientWidth; 
if (width < 960) { 
window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("https://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })(); </script>
					
					
        </div>
      </div>
    </div>
    
  </div>
  <?php include dirname(__FILE__).'/../common/_side.php'; ?>
</article>
<?php include dirname(__FILE__).'/../common/_footer.php'; ?>
</body>
</html>
