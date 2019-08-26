<?php
@require_once("common.php");
$usertel = $_GET["usertel"];
$userpwd = $_GET["userpwd"];

$sql = "select count(*) from userinfo where usertel = '$usertel'";

$result = mysql_query($sql);

$item = mysql_fetch_array($result);

$obj = array();

    if ($item[0] > 0) {
        $obj["code"] = 0;
        $obj["msg"] = "该手机号已存在";  
    }else{
    
        $str = "insert into userinfo(usertel,userpwd)values($usertel,$userpwd)";

        mysql_query($str);

        $count = mysql_affected_rows();

        if ($count > 0) {
            $obj["code"] = 1;
            $obj["msg"] = "注册成功";
        }else{
            $obj["code"] = 1;
            $obj["msg"] = "注册失败";
        }
    }

echo json_encode($obj);
?>