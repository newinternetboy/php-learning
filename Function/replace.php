<?php
/**
 * Created by IntelliJ IDEA.
 * User: philipp
 * Date: 2018-12-29
 * Time: 16:26
 */
$str = "http://img2.soyoung.com/upload/20181029/5/20181029184218444.jpg";
$dec = hexdec('0x11');
echo $dec;
$dec = $dec * 16;
$hex = dechex($dec);
var_dump($dec,$hex);
