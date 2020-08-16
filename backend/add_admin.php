<form action="api/save_admin.php" method="post">
    <h1 class="ct">新增管理帳號</h1>
    帳號：<input type="text" name="acc"><br>
    密碼：<input type="password" name="pw"><br>
    權限：<input type="checkbox" name="pr[]" value="1">商品分類與管理<br>
    <input type="checkbox" name="pr[]" value="2">訂單管理<br>
    <input type="checkbox" name="pr[]" value="3">會員管理<br>
    <input type="checkbox" name="pr[]" value="4">頁尾版權區管理<br>
    <input type="checkbox" name="pr[]" value="5">最新消息管理<br>
    <div class="ct"><button>新增</button><button>重置</button></div>
</form>