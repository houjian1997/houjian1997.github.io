<?php

@require_once("common.php");

$userid = $_GET["userid"];
$username = $_GET["username"];
$goodsid = $_GET["goodsid"];

$sql = "delete from myshoppingcar where userid = $userid and username = '$username' and goodsid = $goodsid ";

mysql_query($sql);

$count = mysql_affected_rows();

$obj = array();

if($count > 0){
    $obj["code"] = 1;
    $obj["msg"] = "删除成功";
}else{
    $obj["code"] = 0;
    $obj["msg"] = "删除失败";
}

echo json_encode($obj);

?>