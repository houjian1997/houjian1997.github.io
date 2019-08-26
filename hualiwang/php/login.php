<?php
@require_once("common.php");
$userkey = $_GET["userkey"];
$userpwd = $_GET["userpwd"];

$sql = "select  * from  userinfo where usertel = '$userkey'";

$result = mysql_query($sql);

$item = mysql_fetch_array($result);

$obj = array();

if($item){
    $existPwd = $item["userpwd"];
    if($existPwd == $userpwd){
       $obj["code"] = 1;
       $obj["msg"] = "登录成功";
       $obj["userid"]= $item["id"];
       $obj["username"] = $item["usertel"];
    }else{
       $obj["code"] = 0;
       $obj["msg"] = "您输入的用户名与密码不匹配";
    }
}else{
    $sql1 = "select  * from  userinfo1 where useremail = '$userkey'";

    $result1 = mysql_query($sql1);

    $item1 = mysql_fetch_array($result1); 

    if($item1){
        $existPwd = $item1["userpwd"];
        if($existPwd == $userpwd){
           $obj["code"] = 1;
           $obj["msg"] = "登录成功";
           $obj["userid"]= $item1["id"];
           $obj["username"] = $item1["useremail"];
        }else{
           $obj["code"] = 0;
           $obj["msg"] = "您输入的用户名与密码不匹配";
        }
    }else{
        $obj["code"] = 0;
        $obj["msg"] = "您输入的用户名还未注册";
    }
}

echo json_encode($obj);

?>