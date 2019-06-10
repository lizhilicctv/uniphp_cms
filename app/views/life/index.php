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
<script src="<?php echo APP_CONFIG['__index__']; ?>js/page.js"></script>
</head>
<body>
<?php include dirname(__FILE__).'/../common/_header.php'; ?>
<div class="line46"></div>
<article>
  <div class="leftbox">
    <div class="newblogs">
      <h2 class="hometitle"><span><a href="/jstt/bj/">心得笔记</a><a href="/jstt/css3/">CSS3|Html5</a><a href="/jstt/web/">网站建设</a></span>学无止境</h2>
      <ul>
				<?php foreach($this->data[0] as $k=>$v){ ?>
					<li>
					  <h3 class="blogtitle"><a href="/life/show/<?php echo $v['id']; ?>.html" target="_blank" ><?php echo $v['title']; ?></a></h3>
					  <div class="bloginfo"><span class="blogpic"><a href="/life/show/<?php echo $v['id']; ?>.html" title=""><img src="<?php echo isset($v['url']) ? $v['url'] : '/static/moren.jpg'; ?>"  /></a></span>
					    <p><?php echo $v['desc']; ?>...</p>
					  </div>
					  <div class="autor"><span class="lm f_l"><?php echo $v['author'] ? $v['author'] : '佚名'; ?></span><span class="dtime f_l"><?php echo date('Y-m-d',$v['up_time']); ?></span><span class="viewnum f_l">浏览（<?php echo $v['click']; ?>）</span><span class="pingl f_l">赞（<?php echo $v['zan']; ?>）</span><span class="f_r"><a href="/life/show/<?php echo $v['id']; ?>.html" class="more">阅读原文>></a></span></div>
					</li>
					
				<?php }?>
      </ul>
      <?php echo $this->data[1]; ?>
    </div>
  </div>
  <div class="rightbox">
  <div class="blank"></div>
    <div class="search">
      <form action="/sokey.html" method="post" name="searchform" id="searchform">
        <input name="keyboard" id="keyboard" class="input_text" value="请输入关键字" style="color: rgb(153, 153, 153);" onfocus="if(value=='请输入关键字'){this.style.color='#000';value=''}" onblur="if(value==''){this.style.color='#999';value='请输入关键字'}" type="text">
        <input name="show" value="title" type="hidden">
        <input name="tempid" value="1" type="hidden">
        <input name="tbname" value="news" type="hidden">
        <input name="Submit" class="input_submit" value="搜索" type="submit">
      </form>
    </div>
    <div class="paihang">
      <h2 class="ab_title"><a href="/">本栏推荐</a></h2>
      <ul>
				<?php foreach( $this->ben as $k=>$v){ ?>
					 <li><b><a href="/life/show/<?php echo $v['id']; ?>.html" target="_blank"><?php echo $v['title']; ?></a></b>
					  <p><?php echo mb_substr($v['desc'],0,40); ?>...</p>
					</li>
				<?php } ?>
      </ul>
      <div class="ad"><img src="<?php echo APP_CONFIG['__index__']; ?>images/ad300x100.jpg"></div>
    </div>
    <div class="paihang">
      <h2 class="ab_title"><a href="/">点击排行</a></h2>
      <ul>
        <?php foreach( $this->all as $k=>$v){ ?>
        	 <li><b><a href="/life/show/<?php echo $v['id']; ?>.html" target="_blank"><?php echo $v['title']; ?></a></b>
        	  <p><?php echo mb_substr($v['desc'],0,40); ?>...</p>
        	</li>
        <?php } ?>
      </ul>
      <div class="ad"><img src="<?php echo APP_CONFIG['__index__']; ?>images/ad01.jpg"></div>
    </div>
    <div class="weixin">
      <h2 class="ab_title">微信关注</h2>
      <ul>
        <img src="<?php echo APP_CONFIG['__index__']; ?>images/wx.jpg">
      </ul>
    </div>
  </div>
</article>
<?php include dirname(__FILE__).'/../common/_footer.php'; ?>
</body>
</html>
