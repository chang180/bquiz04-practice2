<?php $row=$Ord->find(['no'=>$_GET['no']]);?>
<h1 class="ct">訂單編號<?=$row['no'];?>的詳細資料</h1>
<table>
    <tr>
        <td>登入帳號</td>
        <td><?=$_SESSION['login'];?></td>
    </tr>
    <tr>
        <td>姓名</td>
        <td><?=$row['name'];?></td>
    </tr>
    <tr>
        <td>電子信箱</td>
        <td><?=$row['name'];?></td>
    </tr>
    <tr>
        <td>聯絡地址</td>
        <td><?=$row['addr'];?></td>
    </tr>
    <tr>
        <td>聯絡電話</td>
        <td><?=$row['tel'];?></td>
    </tr>
</table>
<hr>
<table>
    <tr>
        <td>商品名稱</td>
        <td>編號</td>
        <td>數量</td>
        <td>單價</td>
        <td>小計</td>
    </tr>
    <?php
    $sum=0;
    $goods=unserialize($row['goods']);
    foreach($goods as $id=>$qt){
    $row=$Goods->find($id);
?>
    <tr>
        <td><?=$row['name'];?></td>
        <td><?=$row['no'];?></td>
        <td><?=$qt;?></td>
        <td><?=$row['price'];?></td>
        <td><?=$qt*$row['price'];?></td>
    </tr>
    <?php 
$sum+=$qt*$row['price'];
} ?>
</table>
<div class="ct">總價：<?=$sum;?></div>
<input type="hidden" name="total" value="<?=$sum;?>">
<div class="ct"><a href="?do=order"><button type="button">返回</button></a></div>