<?php
/**
 * Created by IntelliJ IDEA.
 * User: philipp
 * Date: 2018-12-28
 * Time: 14:55
 */
/**
 * 在数组的开头添加指定的键值
 */
$arr = [
    ['name' => '北京','city_id' => 1]
];
array_unshift($arr,['name'=> '全国', 'city_id' => 0]);
print_r($arr);