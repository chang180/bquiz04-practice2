<form action="api/save_mem.php" method="post">
    <h1 class="ct">編輯會員資料</h1>
    <?php $row=$Member->find($_GET['id']); ?>
    帳號：<?=$row['acc'];?><br>
    密碼：<?=$row['pw'];?><br>
    姓名：<input type="text" name="name" value="<?=$row['name'];?>"><br>
    電子信箱：<input type="text" name="email" value="<?=$row['email'];?>"><br>
    地址：<input type="text" name="addr" value="<?=$row['addr'];?>"><br>
    電話：<input type="text" name="tel" value="<?=$row['tel'];?>"><br>
    <input type="hidden" name="id" value="<?=$_GET['id'];?>">
    <div class="ct"><button>修改</button><button>重置</button></div>
</form>