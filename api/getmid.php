<?php
include_once "../base.php";
$parent=$_POST['parent'];
$mids=$Type->all(['parent'=>$parent]);
foreach($mids as $m){
    echo "<option value='".$m['id']."'>".$m['name']."</option>";
}