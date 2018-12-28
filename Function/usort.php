<?php
/**
 * Created by IntelliJ IDEA.
 * User: philipp
 * Date: 2018-12-28
 * Time: 14:06
 */
/**
 * unsort 可以对数组使用自定义的排序函数
 * 自定义的比较函数，如果$a>$b返回大于0的数，反之返回小于0的数
 * 如果$a = $b,返回小于0的数，并不影响排序的结果，但是会增加不必要的排序操作
 */
function my_unsort($a,$b){
//    return $a > $b ? 1 : -1;
    return $a > $b ? 1 : (($a == $b) ? 0 : -1);
}

$arr = [1,2,6,4,6,5];
usort($arr,'my_unsort');
print_r($arr);