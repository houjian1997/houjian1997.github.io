<?php

@require_once("common.php");

$keywords = $_GET["keywords"];

$rank = $_GET["rank"];

$orderkey = $_GET["orderkey"];

$sql = "select * from flowersinfo where goodsname like '%$keywords%' and goodsid >= 41 and goodsid <= 60 order by $orderkey $rank";

$result = mysql_query($sql);

$list = array();

while($item = mysql_fetch_array($result)){
    $temp = array();
    $temp["id"] = $item["id"];
    $temp["goodsid"] = $item["goodsid"];
    $temp["goodsname"] = $item["goodsname"];
    $temp["goodsmsg"] = $item["goodsmsg"];
    $temp["goodsnum"] = $item["goodsnum"];
    $temp["goodsprice"] = $item["goodsprice"];
    $temp["goodsimg"] = $item["goodsimg"];
    $temp["bigimg"] = $item["bigimg"];
    $temp["smallimg"] = $item["smallimg"];
    $list[] = $temp;
}

echo json_encode($list);

?>