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
        <h2 class="intitle">您现在的位置是：<a href="/">网站首页</a>&nbsp;&gt;&nbsp;<a href="#">详情</a></h2>
        <h3 class="news_title"><?php echo $this->data['title']; ?></h3>
        <div class="news_author"><span class="au01"><?php echo $this->data['author'] ? $this->data['author'] : '佚名'; ?></span><span class="au02"><?php echo date('Y-m-d',$this->data['up_time']); ?></span><span class="au03">共<b><?php echo $this->data['click']; ?></b>人围观</span></div>
        <div class="tags">
					<?php 
					foreach(explode(",",$this->data['keyword']) as $v){ ?>
						<a href="/tag/<?php echo $v; ?>.html"><?php echo $v; ?></a> 
					<?php } ?>
					</div>
        <div class="news_about"><strong>简介</strong><?php echo $this->data['desc']; ?></div>
        <div class="news_infos">
         <?php echo htmlspecialchars_decode($this->data['editor']); ?>
        </div>
      </div>
      <div class="share">
				<p class="diggit"><a href="JavaScript:;"> 很赞哦！ </a>(<b id="diggnum"><?php echo $this->data['zan']; ?></b>)</p>
			</div>
    <!--share end-->
    <div class="zsm"><p>打赏本站，你说多少就多少</p><img src="<?php echo APP_CONFIG['__index__']; ?>images/zsm.jpg"></div>
    </div>
    <div class="nextinfo">
      <p>上一篇：<a href="/" >传微软将把入门级Surface平板价格下调150美元</a></p>
      <p>下一篇：<a href="/">云南之行——大理洱海一日游</a></p>
    </div>
    <div class="otherlink">
      <h2>相关文章</h2>
      <ul>
        <li><a href="/" title="云南之行——丽江古镇玉龙雪山">云南之行——丽江古镇玉龙雪山</a></li>
        <li><a href="/" title="云南之行——大理洱海一日游">云南之行——大理洱海一日游</a></li>
        <li><a href="/" target="_blank">住在手机里的朋友</a></li>
        <li><a href="/" target="_blank">豪雅手机正式发布! 在法国全手工打造的奢侈品</a></li>
        <li><a href="/" target="_blank">教你怎样用欠费手机拨打电话</a></li>
        <li><a href="/" target="_blank">原来以为，一个人的勇敢是，删掉他的手机号码...</a></li>
      </ul>
    </div>
    <div class="news_pl">
      <h2>文章评论</h2>
      <ul>
      </ul>
    </div>
  </div>
  <div class="rightbox">
    <div class="search">
      <form action="/e/search/index.php" method="post" name="searchform" id="searchform">
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
