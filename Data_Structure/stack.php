<?php
/**
 * Created by IntelliJ IDEA.
 * User: philipp
 * Date: 2019-01-16
 * Time: 11:38
 */
/**
 * 1
 * 十进制转其他进制的算法
 */
//栈的应用实例
//N = (N div d) * d + N mod d 进制转换
$int10 = 1348;
$hex = 8;
$mod_arr = [];
while(true){
    $mod = bcmod($int10,$hex);
    $int10 = bcdiv(bcsub($int10,$mod,0),$hex,0);
    array_push($mod_arr,$mod);
    if($int10 == 0){
        break;
    }
}
//var_dump(join('',array_reverse($mod_arr)));

/**
 * 2
 * 期待的急迫程度，括弧匹配
 */
//  [ ( [ ] [ ] ) ]
//  1 2 3 4 5 6 7 8
$input = ['[',']','(','(',')'];
$arr_input_save = [];
$matches = ['[' => ']','(' => ')'];
//一次输入
foreach($input as $k => $v){
    $last = array_pop($arr_input_save);
//不匹配的时候
    //1 arr_input_save 为空
    //2 arr_input_save 最后一个元素不和输入的$v匹配
    if(!isset($last) || $v != $matches[$last]){
        if(!is_null($last)){
            array_push($arr_input_save,$last);
        }
        array_push($arr_input_save,$v);
    }
}
print_r($arr_input_save);