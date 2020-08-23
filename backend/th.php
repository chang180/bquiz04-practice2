<h1 class="ct">商品分類</h1>
<form action="api/add_big.php" method="post">
新增大分類<input type="text" name="name"><button>新增</button>
</form>

<form action="api/add_mid.php" method="post">
<select name="big">
<?php
$bigs=$Type->all(['parent'=>0]);
foreach($bigs as $b){
    echo "<option value='".$b['id']."'>".$b['name']."</option>";
}
?>
</select><input type="text" name="name"><button>新增</button>
</form>
<?php
foreach($bigs as $b){
    echo "大分類：",$b['name'];
    ?>
    <a href="?do=edit_type&id=<?=$b['id'];?>">修改</a><a href="api/del_type.php?id=<?=$b['id'];?>">刪除</a><br>
    <?php
    $mids=$Type->all(['parent'=>$b['id']]);
    foreach($mids as $m){
        echo "中分類：",$m['name'];
        ?>
<a href="?do=edit_type&id=<?=$m['id'];?>">修改</a><a href="api/del_type.php?id=<?=$m['id'];?>">刪除</a><br>
        <?php
    }
    echo "<hr>";
}
?>

<h1 class="ct">商品管理</h1>
<div class="ct"><a href="?do=add_goods"><button>新增商品</a></button></div>
<table>
    <tr>
        <td>編號</td>
        <td>商品名稱</td>
        <td>庫存量</td>
        <td>狀態</td>
        <td>操作</td>
    </tr>
    <?php
    $rows=$Goods->all();
    foreach($rows as $row){
    ?>
    <tr>
        <td><?=$row['no'];?></td>
        <td><?=$row['name'];?></td>
        <td><?=$row['stock'];?></td>
        <td><?=($row['sh']==1)?"販售中":"已下架";?></td>
        <td>
            <a href="?do=edit_goods&id=<?=$row['id'];?>"><button>修改</button></a>
            <a href="api/del_goods.php?id=<?=$row['id'];?>"><button>刪除</button></a>
            <a href="api/up_goods.php?id=<?=$row['id'];?>"><button>上架</button></a>
            <a href="api/dn_goods.php?id=<?=$row['id'];?>"><button>下架</button></a>
    </td>
    </tr>
    <?php } ?>
</table>