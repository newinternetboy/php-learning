<?php
/**
 * Created by IntelliJ IDEA.
 * User: philipp
 * Date: 2019-01-23
 * Time: 11:53
 */
/**
 * 目录文件遍历
 */
$dir = __DIR__;
if(!is_dir($dir)){
    echo "不是目录，请查证后再试";
}else{
    $dir_handle = opendir($dir);
    while($file = readdir($dir_handle)){
        if(!in_array($file,['.','..'])){
            echo $file."\n";
        }
    }
}

/**
 * 文件内容读取
 */
$file_path = $dir."/usort.php";
if(!file_exists($file_path)){
    echo "文件不存在，请查证后再试";
}else{
    $file_handle = fopen($file_path,'r');
    while($line = fread($file_handle,1024)){
        echo $line."\n";
    }
}