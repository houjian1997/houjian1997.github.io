<?php
@require_once("common.php");

$userid = $_GET["userid"];
$username = $_GET["username"];
$goodsid = $_GET["goodsid"];
$goodsname = $_GET["goodsname"];
$goodstitle = $_GET["goodstitle"];
$goodsprice = $_GET["goodsprice"];
$goodsimg = $_GET["goodsimg"];
$buynum = $_GET["buynum"];
$ps = $_GET["ps"];
$sql = "select count(*) from myshoppingcar where userid = '$userid' and username = '$username' and goodsid = '$goodsid'";

$result = mysql_query($sql);

$item = mysql_fetch_array($result);

if($item[0]>0){
    $str = "update myshoppingcar set buynum = buynum + $buynum  where userid = '$userid' and username = '$username' and goodsid = '$goodsid'";
}else{
    $str = "insert into myshoppingcar (userid,username,goodsid,buynum,goodsname,goodstitle,goodsprice,goodsimg,ps)values($userid,'$username',$goodsid,$buynum,'$goodsname','$goodstitle',$goodsprice,'$goodsimg','$ps')";
}

mysql_query($str);

$count = mysql_affected_rows();

$obj = array();

if($count>0){
    $obj["code"] = 1;
    $obj["msg"] = "加入购物车成功";
}else{
    $obj["code"] = 0;
    $obj["msg"] = "加入购物车失败";
}

echo json_encode($obj);

?>