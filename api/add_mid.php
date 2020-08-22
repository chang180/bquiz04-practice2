<?php
include_once "../base.php";
$Type->save(['parent'=>$_POST['big'],'name'=>$_POST['name']]);
to("../admin.php?do=th");