<?php 
//memcache 扩展定义了memcache session 处理器  提高访问速度
ini_set("session.save_handler",'memcache');   //修改php配置中的 session.save_handle  默认为 file形式
ini_set("session.save_path","tcp://127.0.0.1:11211");
//init_set("session.save_path","tcp://127.0.0.1:11211;tcp://127.0.0.1:11212"); //多个时的格式
session_start();
$_SESSION['user_name'] = "123";
echo session_id();  //memcache  存储时key 为 session_id 
?>
