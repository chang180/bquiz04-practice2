<h1 class="ct">會員註冊</h1>
<form action="api/reg.php" method="post" class="ct">
姓名：<input type="text" name="name"><br>
帳號：<input type="text" name="acc" id="acc"><button type="button" onclick="chkacc()">檢測帳號</button><span id="result"></span><br>
密碼：<input type="password" name="pw"><br>
電話：<input type="text" name="tel"><br>
地址：<input type="text" name="addr"><br>
電子信箱：<input type="text" name="email"><br>
<div class="ct"><button>註冊</button><button type="reset">重置</button></div>
</form>
<script>
    function chkacc(){
        $.post("api/chkacc.php",{"acc":$("#acc").val()},function(res){
            $("#result").text(res);
        })
    }
</script>