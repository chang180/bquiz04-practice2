<?php
$type = $_GET['type']??0;
if ($type == 0) {
    $nav = "全部商品";
    $goods = $Goods->all(['sh' => 1]);
} else {
    $tt = $Type->find($type);
    if ($tt['parent'] == 0) {
        $nav = $tt['name'];
        $goods = $Goods->all(['sh' => 1, 'big' => $tt['id']]);
    } else {
        $tbig = $Type->find(['parent' => $tt['parent']]);
        $nav = $tbig['name'] . ">" . $tt['name'];
        $goods = $Goods->all(['sh' => 1, 'mid' => $tt['id']]);
    }
}
?>
<h1><?= $nav; ?></h1>
<?php
foreach ($goods as $g) {
?>
    <div class="ct" style="display:flex">
        <div><a href="?do=detail&id=<?=$g['id'];?>&nav=<?=$nav;?>"><img src="img/<?= $g['img']; ?>" style="width:100px;height:80px"></a></div>
        <div>
            <div><?= $g['name']; ?></div>
            <div>價格：<?= $g['price']; ?><a href="?do=buycart&id=<?= $g['id']; ?>&qt=1"><img src="img/0402.jpg"></a></div>
            <div>規格：<?= $g['spec']; ?></div>
            <div>簡介：<?= mb_substr($g['intro'], 0, 20, "utf8"); ?>...</div>
        </div>
    </div>
    <hr>
<?php
}
?>