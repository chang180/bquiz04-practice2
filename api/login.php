<?php
include_once "../base.php";
$chk=$Member->find(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
if(!empty($chk) && $_POST['ans']==$_SESSION['ans']){
    $_SESSION['login']=$_POST['acc'];
    $_SESSION['cart']=[];
    to("../index.php");
}else{
    to("../index.php?do=login");
}