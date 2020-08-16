<?php
include_once "../base.php";
$chk=$Admin->find(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
if(!empty($chk) && $_POST['ans']==$_SESSION['ans']){
    $_SESSION['admin']=$_POST['acc'];
    to("../admin.php");
}else{
    echo "<script>
    alert('對不起，您輸入的驗證碼有誤，請您重新登入');
    location.href='../index.php?do=admin';
    </script>";
    exit;
}