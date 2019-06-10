<!doctype html>
<html>
<head>
<meta charset="utf-8">
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
        <h2 class="intitle">您现在的位置是：<a href="/">网站首页</a>&nbsp;&gt;&nbsp;<a href="/about.html">关于我</a></h2>
        <div class="news_infos">
          <p>李志立，男，自然生长起来的80后。2013年，通过自学，进入编程的世界。现在通过编程养活着，自己和妻女。每天对着电脑，过着每一天。有时候有点累，有点烦，静下心来。慢慢考虑一下，这个编程对于我们意味着什么。</p>
					<p><h4>探索未知</h4>小时候，一个人在家把钟表拆了，想知道里面是一个什么原理。买一个空白磁带，把林志颖的　<十七岁的雨季>　拷贝到空白磁带。家里买了彩色电视，黑白电视收了起来，用小霸王学习机研究了一天，终于可以打游戏。自己动手一天，制作自己的陀螺，陶瓷。等等。其实直到今天我还在探索，想用编程探索更多自己不了解的世界。　</p>
					<p><h4>逃避和控制</h4>这个世界有很多是自己不想面对的，包括升职，赚钱，荣誉。在现实世界中，我没有精力把事情处理好，我也害怕如果我处理不好，是不是直接抛出错误，内存溢出就直接崩溃了呢。在编程的世界，我所向披靡，可以解决大部分人都解决不了的问题。我可以控制整个流程，而且他也是高效，可控，具有逻辑的。我更加的喜欢这个编程的世界</p>
					<p><h4>创造和未来</h4>我可以给我自己创造一个工具。并把他用于生活。</p>
        </div>
      </div>
    </div>

		
		<div class="news_pl">
		  <h2>碎碎念</h2>
		  <ul>
		  </ul>
		</div>
		
		<div class="news_pl">
		  <h2>开源作品</h2>
		  <ul id="kai">
				<li style="display: inline-block;width: 20%;margin:2%;">
					<a target="_blank" href="https://github.com/lizhilicctv/uninode"><img src="<?php echo APP_CONFIG['__index__']; ?>images/1.jpg" style="width: 100%;" alt=""></a>
				</li>
				<li style="display: inline-block;width: 20%;margin:2%;">
					<a target="_blank" href="https://github.com/lizhilicctv/uniphp"><img src="<?php echo APP_CONFIG['__index__']; ?>images/2.jpg" style="width: 100%;" alt=""></a>
				</li>
				<li style="display: inline-block;width: 20%;margin:2%;">
					<a target="_blank" href="https://github.com/lizhilicctv/uniphp_cms"><img src="<?php echo APP_CONFIG['__index__']; ?>images/3.jpg" style="width: 100%;" alt=""></a>
				</li>
				<li style="display: inline-block;width: 20%;margin:2%;">
					<a target="_blank" href="https://me.csdn.net/weixin_42249565"><img src="<?php echo APP_CONFIG['__index__']; ?>images/4.jpg" style="width: 100%;" alt=""></a>
				</li>
		  </ul>
		</div>
  </div>
	<style>
		#kai li{
			border: 1px solid #F2F2F2;
			box-shadow: 0px 0px 3px #EEEEEE;
			transition: all .5s;
			-moz-transition: all .5s;	/* Firefox 4 */
			-webkit-transition: all .5s;	/* Safari 和 Chrome */
			-o-transition: all .5s;	/* Opera */
		}
		#kai li:hover{
			box-shadow: 0px 0px 3px #222;
			transform: scale(1.1,1.1);
		}
	</style>
  <?php include dirname(__FILE__).'/../common/_side.php'; ?>
</article>
<?php include dirname(__FILE__).'/../common/_footer.php'; ?>
</body>
</html>
