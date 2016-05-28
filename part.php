<?php 
	$part=$_GET['part'];
	$forum=$_GET['forum'];
	$part_title="";
	$forum_title="";
	switch($part){
		case 11:{
			$part_title='闲聊|创作';
			switch ($forum) {
				case 1:
					$forum_title='自曝版';
					break;
				case 2:
					$forum_title='原创CG';
					break;	
				case 3:
					$forum_title='水星球';
					break;	
				case 4:
					$forum_title='动漫版';
					break;						
				default:
					$forum_title='请使用正确方式打开本网页';
					break;
				}
			}
			break;
		case 21:{
			$part_title='新游戏';
			switch ($forum) {
				case 1:
					$forum_title='神佑';
					break;
				case 2:
					$forum_title='失落的方舟';
					break;	
				case 3:
					$forum_title='冒险岛2';
					break;	
				case 4:
					$forum_title='救世之树';
					break;						
				default:
					$forum_title='请使用正确方式打开本网页';
					break;
				}
			}
			break;
		case 31:{
			$part_title='游戏讨论区';
			switch ($forum) {
				case 1:
					$forum_title='黑色沙漠';
					break;
				case 2:
					$forum_title='剑灵';
					break;	
				case 3:
					$forum_title='天涯明月刀';
					break;							
				default:
					$forum_title='请使用正确方式打开本网页';
					break;
				}
			}
			break;
		case 41:{
			$part_title='美图捏人区';
			switch ($forum) {
				case 1:
					$forum_title='黑色沙漠捏人区';
					break;
				case 2:
					$forum_title='剑灵美图区';
					break;	
				case 3:
					$forum_title='天涯明月刀美图区';
					break;							
				default:
					$forum_title='请使用正确方式打开本网页';
					break;
				}
			}
			break;
		case 51:{
			$part_title='现冲';
			switch ($forum) {
				case 1:
					$forum_title='思辨';
					break;
				case 2:
					$forum_title='跳蚤市场';
					break;	
				case 3:
					$forum_title='硬件讨论区';
					break;							
				default:
					$forum_title='请使用正确方式打开本网页';
					break;
				}
			}
			break;
		default:
			$part_title='请使用正确方式打开本网页';
			$forum_title='请使用正确方式打开本网页';
			break;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>title</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="./css/part.css" />
	<link rel="stylesheet" type="text/css" href="./css/leftdaohang.css" />
	<script src="./js/jquery-2.2.3.min.js"></script>
	<script src="./js/leftdaohang.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script>
		$(function(){
			var part_id=$('#accordion').children().eq(<?php echo floor($part/10)-1; ?>);
			part_id.addClass('open');
			part_id.children('ul').css('display','block');
			var forum_id=part_id.children('ul').children().eq(<?php echo $forum-1;?>).children();
			forum_id.css('background','#b63b4d');
			forum_id.css('color','#ffffff');
		});


	</script>
</head>
<body>
	<header style="height: 135px;">
		<?php include './head.html'; ?>
	</header>
	<div class="container">
		<div class="daohang">
			<ol class="breadcrumb">
				<li>
					<a href="./index.html">
						<span class="glyphicon glyphicon-home" aria-hidden="true" style="color:rgb(197,215,227);" title="主站" alt="主站"></span>
					</a>
				</li>
				<li>
					<?php echo "<a href=\"part-".$part.".html\" title=\"".$part_title."\" alt=\"".$part_title."\">".$part_title."</a>";?>
				</li>
				<li>
					<?php echo "<a href=\"form-".$part."-".$forum.".html\" title=\"".$forum_title."\" alt=\"".$forum_title."\">".$forum_title."</a>";?>
				</li>
			</ol>
		</div>
		<div class="leftdaohang">
			<div class="ldh_title"></div>
			<div class="ldh_content">
				<ul id="accordion" class="accordion">
					<li>
						<div class="link">闲聊|创作<i class="fa glyphicon glyphicon-chevron-down"></i></div>
						<ul class="submenu">
							<li><a href="./form-11-1.html" title="水星球">水星球</a></li>
							<li><a href="./form-11-2.html" title="原创CG">原创CG</a></li>
							<li><a href="./form-11-3.html" title="自曝版">自曝版</a></li>
							<li><a href="./form-11-4.html" title="动漫版">动漫版</a></li>
						</ul>
					</li>
					<li>
						<div class="link">新游戏<i class="glyphicon glyphicon-chevron-down"></i></div>
						<ul class="submenu">
							<li><a href="./form-21-1.html" title="神佑">神佑</a></li>
							<li><a href="./form-21-2.html" title="失落的方舟">失落的方舟</a></li>
							<li><a href="./form-21-3.html" title="冒险岛2">冒险岛2</a></li>
							<li><a href="./form-21-4.html" title="救世之树">救世之树</a></li>
						</ul>
					</li>
					<li>
						<div class="link">游戏讨论区<i class="glyphicon glyphicon-chevron-down"></i></div>
						<ul class="submenu">
							<li><a href="./form-31-1.html" title="黑色沙漠">黑色沙漠</a></li>
							<li><a href="./form-31-2.html" title="剑灵">剑灵</a></li>
							<li><a href="./form-31-3.html" title="天涯明月刀">天涯明月刀</a></li>
						</ul>
					</li>
					<li><div class="link">美图捏人区<i class="glyphicon glyphicon-chevron-down"></i></div>
						<ul class="submenu">
							<li><a href="./form-41-1.html" title="黑色沙漠捏人站">黑色沙漠捏人站</a></li>
							<li><a href="./form-41-2.html" title="剑灵美图站">剑灵美图站</a></li>
							<li><a href="./form-41-3.html" title="天刀美图站">天刀美图站</a></li>
						</ul>
					</li>
					<li><div class="link">现充<i class="glyphicon glyphicon-chevron-down"></i></div>
						<ul class="submenu">
							<li><a href="./form-51-1.html" title="Secondary title 6-1">思辨</a></li>
							<li><a href="./form-51-2.html" title="Secondary title 6-2">跳蚤市场</a></li>
							<li><a href="./form-51-3.html" title="Secondary title 6-3">硬件讨论版</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>