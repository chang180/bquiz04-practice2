<?php include_once "base.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0057)?do=admin -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>┌精品電子商務網站」</title>
	<link href="css.css" rel="stylesheet" type="text/css">
	<script src="jquery-3.4.1.js"></script>
	<script src="js.js"></script>
</head>

<body>
	<iframe name="back" style="display:none;"></iframe>
	<div id="main">
		<div id="top">
			<a href="index.php">
				<img src="0416.jpg">
			</a>
			<img src="0417.jpg">
		</div>
		<div id="left" class="ct">
			<div style="min-height:400px;">
<?php
$pr=unserialize($Admin->find(['acc'=>$_SESSION['admin']])['pr']);
if($_SESSION['admin']=='admin'){
?>
				<a href="?do=admin">管理權限設置</a>
				<a href="?do=th">商品分類與管理</a>
				<a href="?do=order">訂單管理</a>
				<a href="?do=mem">會員管理</a>
				<a href="?do=bot">頁尾版權管理</a>
				<a href="?do=news">最新消息管理</a>
<?php } else {
?>
                <a <?=(in_array(1,$pr)?"":"style='display:none;'");?> href="?do=th">商品分類與管理</a>
				<a <?=(in_array(2,$pr)?"":"style='display:none;'");?> href="?do=order">訂單管理</a>
				<a <?=(in_array(3,$pr)?"":"style='display:none;'");?> href="?do=mem">會員管理</a>
				<a <?=(in_array(4,$pr)?"":"style='display:none;'");?> href="?do=bot">頁尾版權管理</a>
				<a <?=(in_array(5,$pr)?"":"style='display:none;'");?> href="?do=news">最新消息管理</a>
<?php
}

?>

				<a href="?do=logout" style="color:#f00;">登出</a>
			</div>
		</div>
		<div id="right">
			<?php
			$do = $_GET['do'] ?? "admin";
			$file = "backend/" . $do . ".php";
			include file_exists($file) ? $file : "backend/admin.php";
			?>
		</div>
		<div id="bottom" style="line-height:70px; color:#FFF; background:url(icon/bot.png);" class="ct">
		<?=$bottom['bottom'];?> </div>
	</div>

</body>

</html>