<?php
include_once "../base.php";
$chk=$Member->find(['acc'=>$_POST['acc']]);
if(empty($chk)){
    echo "帳號可使用";
}else{
    echo "帳號已存在";
}