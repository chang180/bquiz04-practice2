<form action="api/bottom.php" method="post">
    <ht class="ct">頁尾版權管理</ht>
    <div class="ct">
        頁尾宣告內容<input type="text" name="bottom" value="<?=$bottom['bottom'];?>" id="txt"><br>
        <button>修改</button><button type="button" onclick="clearTxt()">重置</button>
    </div>
</form>
<script>
    function clearTxt(){
        $("#txt").val("");
    }
</script>