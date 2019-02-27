<?php
/**
 * Created by IntelliJ IDEA.
 * User: philipp
 * Date: 2019-02-27
 * Time: 16:47
 */
//一个个人认为比较好的缓存数据封装
function cacheManage($cacheData,$mysqlData,$useCache=false){
    //首先获取对应的redis缓存
    $cache = $cacheData();
    if(!empty($cache) && $useCache){
        return $cache;
    }else{
        $data = $mysqlData();
        return $data;
    }
}

$data = cacheManage(
    function(){
        return 'this is cache data';
    },
    function(){
        return "this is data from database";
    },false
);

echo $data;