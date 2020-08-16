<?php
include_once("base.php");
$test['test']="123";
$db=new DB('test');
$db->save($test);
