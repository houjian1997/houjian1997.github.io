<?php
@require_once("common.php");

$goodsid = $_GET["goodsid"];

$sql = "select * from goodsinfo where goodsid = $goodsid";

$result = mysql_query($sql);

$item = mysql_fetch_array($result);
    $obj = array();
    $obj["id"] = $item["id"];
    $obj["goodsname"] = $item["goodsname"];
    $obj["goodstitle"] = $item["goodstitle"];
    $obj["goodsnum"] = $item["goodsnum"];
    $obj["goodsprice"] = $item["goodsprice"];
    $obj["goodsimg"] = $item["goodsimg"];
    $obj["bigimg"] = $item["bigimg"];
    $obj["smallimg"] = $item["smallimg"];
    $obj["lb"] = $item["lb"];
    $obj["bh"] = $item["bh"];
    $obj["cl"] = $item["cl"];
    $obj["bz"] = $item["bz"];
    $obj["commit"] = $item["commit"];
    $obj["fs"] = $item["fs"];
    $obj["ps"] = $item["ps"];
    $obj["tip"] = $item["tip"];
echo json_encode($obj);

?>