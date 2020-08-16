<h1>第一次購物</h1>
<a href="?do=reg"><img src="img/0413.jpg"></a><br>
<h1>會員登入</h1>
<form action="api/login.php" method="post">
帳號：<input type="text" name="acc"><br>
密碼：<input type="password" name="pw"><br>
<?php
$a=rand(10,99);
$b=rand(10,99);
$_SESSION['ans']=$a+$b;
?>
驗證碼：<?=$a,"+",$b,"=";?><input type="number" name="ans"><br>
<div class="ct"><button>登入</button><button type="reset">重置</button></div>
</form>
