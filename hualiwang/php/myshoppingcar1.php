<?php

@require_once("common.php");

$userid = $_GET["userid"];
$username = $_GET["username"];
$count = $_GET["count"];
$goodsid = $_GET["goodsid"];
$sql = "update myshoppingcar set buynum = buynum + $count where userid = $userid and username = '$username' and goodsid = '$goodsid '";

mysql_query($sql);

$str = "select * from myshoppingcar where userid = $userid and username = '$username'";

$result = mysql_query($str);

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