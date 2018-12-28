<?php
/**
 * Created by IntelliJ IDEA.
 * User: philipp
 * Date: 2018-12-28
 * Time: 15:15
 */
$str = "https://api.soyoung.com/hello.php";
$parse_url = parse_url($str);
print_r($parse_url);
$file_name = $parse_url['path'];
var_dump($file_name);
//文件名的后缀
$ext_name = substr(strstr($file_name,'.'),'1');
var_dump($ext_name);
