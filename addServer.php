<?php
//制作分布式储存管理
//$mysql =mysqli_connect("localhost","root","123456");
 class asd{
	 public $n;
	 public $m;
	 public function getM(){
		 return $m;
	 }
 }
 $a = new asd();
 $a->n = 123;
 $a->m ="12asdasd3";

 
 $mem = new Memcache();
 $host = '192.168.31.186';
 $post = '11211';
 $mem->addServer($host,$post);
 $host = "192.168.31.186";
 $post = '11212';
 $mem->addServer($host,$post);
 $host = "127.0.0.1";
 $post= '11211';
 $mem->addServer($host,$post);
 $mem->set("class_name1",$a,0,3600);
  $res= $mem->get("class_name1");
  //$str =$mem->set("class_name",mysqli_connect("localhost","root","123456"),0,3600);
 // var_dump($str);
 // $str= $mem->get("class_name");
 // mysqli_select_db($str,"shop");
 // mysqli_query($str,"set names utf8");
 // $res = mysqli_query($str,"select * from category ");
 var_dump($res);
 $mem->close();
?>