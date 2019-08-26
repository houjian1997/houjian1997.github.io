<?php

@require_once("common.php");

$userid = $_GET["userid"];
$username = $_GET["username"];

$sql = "select * from myshoppingcar where userid = $userid and username = '$username'";

$result = mysql_query($sql);

$list = array();

while($item = mysql_fetch_array($result)){
    $obj = array();
    $obj["goodsid"] = $item["goodsid"];
    $obj["buynum"] = $item["buynum"];
    $obj["goodsprice"] = $item["goodsprice"];
    $obj["goodsimg"] = $item["goodsimg"];
    $obj["goodsname"] = $item["goodsname"];
    $obj["goodstitle"] = $item["goodstitle"];
    $obj["ps"] = $item["ps"];
    $list[] = $obj;
}

echo json_encode($list);







?>