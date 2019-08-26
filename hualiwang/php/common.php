<?php
@header("Access-Control-Allow-Origin:*"); //cros
@header("content-type:text/html;charset=utf8");
//链接数据库  获取所有的用户信息
mysql_connect("b-kcxkege4gliwti.bch.rds.gz.baidubce.com:3306", "b_kcxkege4gliwti", "MOwn5CFZmCRl9152"); //使用用户名和密码 链接到指定的地方(3306是你们的端口)
mysql_select_db("b_kcxkege4gliwti"); //选择指定的数据库
mysql_query("set character set 'utf8'"); //设置执行语句的编码格式  防止中文乱码  求你了 不要抄  直接复制粘贴 如果出错中文取出来就是null


