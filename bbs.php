<!DOCTYPE html>
<html>
<head>
	<title>title</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="./css/bbs.css" />
	<script src="./js/jquery-2.2.3.min.js"></script>
	<script src="./js/bootstrap.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript">
		$(document).ready(function(){
			$(".menu li:first a").addClass("menu_txt");
			$(".menu li:nth-child(2) a").removeClass("menu_txt");
		})
	</script>
</head>
<body>
	<header style="height: 135px;">
		<?php include './head.html'; ?></header>
	<div class="container">
		<div class="daohang">
			<ol class="breadcrumb">
				<li>
					<a href="./index.html">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</a>
				</li>
				<li>
					<a href="#">社区</a>
				</li>
			</ol>
		</div>
		<div class="topani">
			<div class="top-ani">
				<div class="ani_img">图片大小1200px*350px;</div>
			</div>
			<div class="top-img">
				<!--<img src="#" alt="#" class="top1_img">
				<img src="#" alt="#" class="top1_img">
				<img src="#" alt="#" class="top1_img">
				-->
				<div class="top1_img">图片大小395px*50px</div>
				<div class="top1_img">图片大小395px*50px</div>
				<div class="top1_img">图片大小395px*50px</div>
			</div>
		</div>
		<div class="content">
			<div class="con_left">
				<div class="title">
					<h2>
						<a href="./part-11,html">闲聊|创作</a>
					</h2>
					<span class="glyphicon glyphicon-minus badge" data-toggle="collapse"  data-target="#title11" ></span>
				</div>
				<div class="index collapse in" id="title11">
					<ul class="clear">
						<li>
							<a href="./form-11-1.html" title="自曝版">
								<!--<img src="#" alt="#" />
								-->
								<div class="index_img">
									图片大小
									<br/>
									100px*100px
								</div>
							</a>
							<div class="index_index">
								<a href="./form-11-1.html" title="自曝版">自曝版</a>
								<span class="badge">0</span> <em>主题：0</em>
								<br />
								<br />
								<br /> <em class="tiezi">帖数：0</em>
								<!--版主昵称最大2行-->
								<span class="banzhu">版主昵称</span>
							</div>
						</li>
						<li>
							<a href="./form-11-2.html" title="原创CG">
								<!--<img src="#" alt="#" />
								-->
								<div class="index_img">
									图片大小
									<br/>
									100px*100px
								</div>
							</a>
							<div class="index_index">
								<a href="./form-11-2.html" title="原创CG">原创CG</a>
								<span class="badge">0</span>
								<em>主题：0</em>
								<br />
								<br />
								<br />
								<em class="tiezi">帖数：0</em>
								<!--版主昵称最大2行-->
								<span class="banzhu">版主昵称</span>
							</div>
						</li>
						<li>
							<a href="./form-11-3.html" title="水星球">
								<!--<img src="#" alt="#" />
								-->
								<div class="index_img">
									图片大小
									<br/>
									100px*100px
								</div>
							</a>
							<div class="index_index">
								<a href="./form-11-3.html" title="水星球">水星球</a>
								<span class="badge">0</span>
								<em>主题：0</em>
								<br />
								<br />
								<br />
								<em class="tiezi">帖数：0</em>
								<!--版主昵称最大2行-->
								<span class="banzhu">版主昵称</span>
							</div>
						</li>
						<li>
							<a href="./form-11-4.html" title="动漫版">
								<!--<img src="#" alt="#" />
								-->
								<div class="index_img">
									图片大小
									<br/>
									100px*100px
								</div>
							</a>
							<div class="index_index">
								<a href="./form-11-4.html" title="动漫版">动漫版</a>
								<span class="badge">0</span>
								<em>主题：0</em>
								<br />
								<br />
								<br />
								<em class="tiezi">帖数：0</em>
								<!--版主昵称最大2行-->
								<span class="banzhu">版主昵称</span>
							</div>
						</li>
					</ul>
				</div>
				<div class="title">
					<h2>
						<a href="./part-21,html">新游戏</a>
					</h2>
					<span class="glyphicon glyphicon-minus badge" data-toggle="collapse"  data-target="#title22" ></span>
				</div>
				<div class="index collapse in" id="title22">
					<ul class="clear">
						<li>
							<a href="./form-21-1.html" title="神佑">
								<!--<img src="#" alt="#" />
								-->
								<div class="index_img">
									图片大小
									<br/>
									100px*100px
								</div>
							</a>
							<div class="index_index">
								<a href="./form-21-1.html" title="神佑">神佑</a>
								<span class="badge">0</span>
								<em>主题：0</em>
								<br />
								<br />
								<br />
								<em class="tiezi">帖数：0</em>
								<!--版主昵称最大2行-->
								<span class="banzhu">版主昵称</span>
							</div>
						</li>
						<li>
							<a href="./form-21-2.html" title="失落的方舟">
								<!--<img src="#" alt="#" />
								-->
								<div class="index_img">
									图片大小
									<br/>
									100px*100px
								</div>
							</a>
							<div class="index_index">
								<a href="./form-21-2.html" title="失落的方舟">失落的方舟</a>
								<span class="badge">0</span>
								<em>主题：0</em>
								<br />
								<br />
								<br />
								<em class="tiezi">帖数：0</em>
								<!--版主昵称最大2行-->
								<span class="banzhu">版主昵称</span>
							</div>
						</li>
						<li>
							<a href="./form-21-3.html" title="冒险岛2">
								<!--<img src="#" alt="#" />
								-->
								<div class="index_img">
									图片大小
									<br/>
									100px*100px
								</div>
							</a>
							<div class="index_index">
								<a href="./form-21-3.html" title="冒险岛2">冒险岛2</a>
								<span class="badge">0</span>
								<em>主题：0</em>
								<br />
								<br />
								<br />
								<em class="tiezi">帖数：0</em>
								<!--版主昵称最大2行-->
								<span class="banzhu">版主昵称</span>
							</div>
						</li>
						<li>
							<a href="./form-21-4.html" title="救世之树">
								<!--<img src="#" alt="#" />
								-->
								<div class="index_img">
									图片大小
									<br/>
									100px*100px
								</div>
							</a>
							<div class="index_index">
								<a href="./form-21-4.html" title="救世之树">救世之树</a>
								<span class="badge">0</span>
								<em>主题：0</em>
								<br />
								<br />
								<br />
								<em class="tiezi">帖数：0</em>
								<!--版主昵称最大2行-->
								<span class="banzhu">版主昵称</span>
							</div>
						</li>
					</ul>
				</div>
				<div class="title">
					<h2>
						<a href="./part-31,html">游戏讨论区</a>
					</h2>
					<span class="glyphicon glyphicon-minus badge" data-toggle="collapse"  data-target="#title33" ></span>
				</div>
				<div class="index collapse in" id="title33">
					<ul class="clear">
						<li class="li3">
							<a href="./form-31-1.html" title="黑色沙漠">
								<!--<img src="#" alt="#" />
								-->
								<div class="index_img">
									图片大小
									<br/>
									100px*100px
								</div>
							</a>
							<div class="index_index">
								<a href="./form-31-1.html" title="黑色沙漠">黑色沙漠</a>
								<span class="badge">0</span>
								<em>主题：0</em>
								<br />
								<br />
								<br />
								<em class="tiezi">帖数：0</em>
								<!--版主昵称最大2行-->
								<span class="banzhu">版主昵称</span>
							</div>
						</li>
						<li class="li3">
							<a href="./form-31-2.html" title="剑灵">
								<!--<img src="#" alt="#" />
								-->
								<div class="index_img">
									图片大小
									<br/>
									100px*100px
								</div>
							</a>
							<div class="index_index">
								<a href="./form-31-2.html" title="剑灵">剑灵</a>
								<span class="badge">0</span>
								<em>主题：0</em>
								<br />
								<br />
								<br />
								<em class="tiezi">帖数：0</em>
								<!--版主昵称最大2行-->
								<span class="banzhu">版主昵称</span>
							</div>
						</li>
						<li class="li3">
							<a href="./form-31-3.html" title="天涯明月刀">
								<!--<img src="#" alt="#" />
								-->
								<div class="index_img">
									图片大小
									<br/>
									100px*100px
								</div>
							</a>
							<div class="index_index">
								<a href="./form-31-3.html" title="天涯明月刀">天涯明月刀</a>
								<span class="badge">0</span>
								<em>主题：0</em>
								<br />
								<br />
								<br />
								<em class="tiezi">帖数：0</em>
								<!--版主昵称最大2行-->
								<span class="banzhu">版主昵称</span>
							</div>
						</li>
					</ul>
				</div>
				<div class="title">
					<h2>
						<a href="./part-41,html">美图捏人区</a>
					</h2>
					<span class="glyphicon glyphicon-minus badge" data-toggle="collapse"  data-target="#title44" ></span>
				</div>
				<div class="index collapse in" id="title44">
					<ul class="clear">
						<li class="li3">
							<a href="./form-41-1.html" title="黑色沙漠捏人区">
								<!--<img src="#" alt="#" />
								-->
								<div class="index_img">
									图片大小
									<br/>
									100px*100px
								</div>
							</a>
							<div class="index_index">
								<a href="./form-41-1.html" title="黑色沙漠捏人区">黑色沙漠捏人区</a>
								<span class="badge">0</span>
								<em>主题：0</em>
								<br />
								<br />
								<br />
								<em class="tiezi">帖数：0</em>
								<!--版主昵称最大2行-->
								<span class="banzhu">版主昵称</span>
							</div>
						</li>
						<li class="li3">
							<a href="./form-41-2.html" title="剑灵美图区">
								<!--<img src="#" alt="#" />
								-->
								<div class="index_img">
									图片大小
									<br/>
									100px*100px
								</div>
							</a>
							<div class="index_index">
								<a href="./form-41-2.html" title="剑灵美图区">剑灵美图区</a>
								<span class="badge">0</span>
								<em>主题：0</em>
								<br />
								<br />
								<br />
								<em class="tiezi">帖数：0</em>
								<!--版主昵称最大2行-->
								<span class="banzhu">版主昵称</span>
							</div>
						</li>
						<li class="li3">
							<a href="./form-41-3.html" title="天涯明月刀美图区">
								<!--<img src="#" alt="#" />
								-->
								<div class="index_img">
									图片大小
									<br/>
									100px*100px
								</div>
							</a>
							<div class="index_index">
								<a href="./form-41-3.html" title="天涯明月刀美图区">天涯明月刀美图区</a>
								<span class="badge">0</span>
								<em>主题：0</em>
								<br />
								<br />
								<br />
								<em class="tiezi">帖数：0</em>
								<!--版主昵称最大2行-->
								<span class="banzhu">版主昵称</span>
							</div>
						</li>
					</ul>
				</div>
				<div class="title">
					<h2>
						<a href="./part-51,html">现充</a>
					</h2>
					<span class="glyphicon glyphicon-minus badge" data-toggle="collapse"  data-target="#title55" ></span>
				</div>
				<div class="index collapse in" id="title55">
					<ul class="clear">
						<li class="li3">
							<a href="./form-51-1.html" title="思辨">
								<!--<img src="#" alt="#" />
								-->
								<div class="index_img">
									图片大小
									<br/>
									100px*100px
								</div>
							</a>
							<div class="index_index">
								<a href="./form-51-1.html" title="思辨">思辨</a>
								<span class="badge">0</span>
								<em>主题：0</em>
								<br />
								<br />
								<br />
								<em class="tiezi">帖数：0</em>
								<!--版主昵称最大2行-->
								<span class="banzhu">版主昵称</span>
							</div>
						</li>
						<li class="li3">
							<a href="./form-51-2.html" title="跳蚤市场">
								<!--<img src="#" alt="#" />
								-->
								<div class="index_img">
									图片大小
									<br/>
									100px*100px
								</div>
							</a>
							<div class="index_index">
								<a href="./form-51-2.html" title="跳蚤市场">跳蚤市场</a>
								<span class="badge">0</span>
								<em>主题：0</em>
								<br />
								<br />
								<br />
								<em class="tiezi">帖数：0</em>
								<!--版主昵称最大2行-->
								<span class="banzhu">版主昵称</span>
							</div>
						</li>
						<li class="li3">
							<a href="./form-51-3.html" title="硬件讨论区">
								<!--<img src="#" alt="#" />
								-->
								<div class="index_img">
									图片大小
									<br/>
									100px*100px
								</div>
							</a>
							<div class="index_index">
								<a href="./form-51-3.html" title="硬件讨论区">硬件讨论区</a>
								<span class="badge">0</span>
								<em>主题：0</em>
								<br />
								<br />
								<br />
								<em class="tiezi">帖数：0</em>
								<!--版主昵称最大2行-->
								<span class="banzhu">版主昵称</span>
							</div>
						</li>
					</ul>
				</div>

			</div>
			<div class="con_right"></div>
		</div>
	</div>
</body>
</html>