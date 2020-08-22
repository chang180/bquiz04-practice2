<form action="api/edit_type.php" method="post">
<?php
$row=$Type->find($_GET['id']);
?>
修改名稱：<input type="text" name="name" value="<?=$row['name'];?>">
<input type="hidden" name="id" value="<?=$_GET['id'];?>">
<button>確定</button>
</form>