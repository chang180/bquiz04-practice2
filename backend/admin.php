<div class="ct"><button onclick="location.href='?do=add_admin'">新增管理員</button></div>
<table>
    <tr>
        <td>帳號</td>
        <td>密碼</td>
        <td>管理</td>
    </tr>
    <?php
$rows=$Admin->all();
foreach($rows as $row){
    ?>
    <tr>
        <td><?=$row['acc'];?></td>
        <td><?=$row['pw'];?></td>
        <td>
<?php
if($row['acc']=='admin') echo "此為最高權限帳號";
else{
?>
<a href="?do=edit_admin&id=<?=$row['id'];?>"><button>修改</button></a>
<a href="api/del_admin.php?id=<?=$row['id'];?>"><button>刪除</button></a>
<?php
}
?>
        </td>
    </tr>
<?php } ?>
</table>