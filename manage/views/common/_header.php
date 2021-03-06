<header class="navbar-wrapper">
	<div class="navbar navbar-fixed-top">
		<div class="container-fluid cl">
			<a class="logo navbar-logo f-l mr-10 hidden-xs" href="<?php echo u('index','index'); ?>">网站管理后台</a>
			<a class="logo navbar-logo-m f-l mr-10 visible-xs" href="<?php echo u('index','index'); ?>">网站管理后台</a>
			<span class="logo navbar-slogan f-l mr-10 hidden-xs">v1.0</span>
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav">
				<ul class="cl">
					<li class="dropDown dropDown_hover">
						<li class="navbar-levelone current"  style="margin-left: 50px;">
							<a href="javascript:;">网站配置</a>
						</li>
						<li class="navbar-levelone">
							<a href="javascript:;">内容管理</a>
						</li>

						<li>
							<a href="/" target="_blank">网站首页</a>
						</li>
					</li>
				</ul>
			</nav>
			<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
				<ul class="cl">
					<li>超级管理员</li>
					<li class="dropDown dropDown_hover">
						<a href="#" class="dropDown_A"><?php echo getSession('admin_name'); ?><i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							
							<li><a href="<?php echo u('login','out'); ?>">退出</a></li>
						</ul>
					</li>
					<li class="lizhili1" id="Hui-msg">
						<a data-href="<?php echo u('comment','index'); ?>" data-title="评论消息" href="javascript:;" title="评论消息"><span class="badge badge-danger" id="lizhili_ping">评<?php echo !!getSession('comment_header') ? getSession('comment_header') : ''; ?></span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a>
					</li>
					
					<li class="lizhili1" id="Hui-msg">
						<a data-href="<?php echo u('message','index'); ?>" data-title="留言消息" href="javascript:;" title="留言消息"><span class="badge badge-danger" id="lizhili_liu">留<?php echo !!getSession('message_header') ? getSession('message_header') : ''; ?></span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a>
					</li>
					<li id="Hui-skin" class="dropDown right dropDown_hover">
						<a href="javascript:;" class="dropDown_A" title="换肤"><i class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li>
								<a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a>
							</li>
							<li>
								<a href="javascript:;" data-val="blue" title="蓝色">蓝色</a>
							</li>
							<li>
								<a href="javascript:;" data-val="green" title="绿色">绿色</a>
							</li>
							<li>
								<a href="javascript:;" data-val="red" title="红色">红色</a>
							</li>
							<li>
								<a href="javascript:;" data-val="yellow" title="黄色">黄色</a>
							</li>
							<li>
								<a href="javascript:;" data-val="orange" title="橙色">橙色</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>