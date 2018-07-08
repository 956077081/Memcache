<?php
$mem = new Memcache();
$host='127.0.0.1';
$post= "11211";
$mem->connect($host,$post);
$mem->set("class_name","ji152","0",3306);
//class_name为 参数名称 ji152为内容 第三个参数为0 代表不压缩(1)代表压缩  3306 为生命周期
//$mem->delete("class_name");  //删除key 
//$mem->flush();//清空缓存
var_dump($mem->get("class_name"));
$mem->close(); //关闭连接

?>