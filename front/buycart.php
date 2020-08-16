<?php
if(empty($_SESSION['login'])){
    echo "請先登入";
    exit;
}
?>
<h1 class="ct"><?=$_SESSION['login'];?>的購物車</h1>