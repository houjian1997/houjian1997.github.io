<?php
@require_once("common.php");

$keywords = $_GET["keywords"];

$rank = $_GET["rank"];

$orderkey = $_GET["orderkey"];

$sql = "select * from goodsinfo where goodsname like '%$keywords%' and goodsid >= 0 and goodsid <= 40 order by $orderkey $rank";

$result = mysql_query($sql);

$list = array();

while($item = mysql_fetch_array($result)){
    $temp = array();
    $temp["id"] = $item["id"];
    $temp["goodsid"] = $item["goodsid"];
    $temp["goodsname"] = $item["goodsname"];
    $temp["goodstitle"] = $item["goodstitle"];
    $temp["goodsnum"] = $item["goodsnum"];
    $temp["goodsprice"] = $item["goodsprice"];
    $temp["goodsimg"] = $item["goodsimg"];
    $temp["bigimg"] = $item["bigimg"];
    $temp["smallimg"] = $item["smallimg"];
    $list[] = $temp;
}

echo json_encode($list);


?>