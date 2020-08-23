<?php $row = $Goods->find($_GET['id']); ?>
<h1 class="ct"><?= $row['name']; ?></h1>
<div class="ct" style="display:flex">
    <div><img src="img/<?= $row['img']; ?>" style="width:400px;height:300px"> </div>
    <div>
        <div>分類：<?= $_GET['nav']; ?></div>
        <div>編號：<?= $row['no']; ?></div>
        <div>價錢：<?= $row['price']; ?></div>
        <div>詳細說明：<?= $row['intro']; ?></div>
        <div>庫存量：<?= $row['stock']; ?></div>
    </div>
</div>
    <div class="ct">購買數量<input type="number" name="qt" id="qt"><button id="buy"><img src="img/0402.jpg"></button></div>
<div class="ct"><button type="button" onclick="history.go(-1)">返回</button></div>
<script>
    $("#buy").on("click",function(){
        let qt=$("#qt").val(),id=<?=$_GET['id'];?>;
        location.href=`?do=buycart&id=${id}&qt=${qt}`;
    })
</script>