<?php
include_once "../base.php";
$Type->save(['parent'=>0,'name'=>$_POST['name']]);
to("../admin.php?do=th");