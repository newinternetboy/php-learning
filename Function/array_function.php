<?php
/**
 * Created by IntelliJ IDEA.
 * User: philipp
 * Date: 2019-02-01
 * Time: 10:11
 */
$arr = [
    'a' => 'a',
    'b' => 'b',
    1 => 'hu'
];
//改变数组的键的值大小写，忽略数值键,不改变原数组
$arr_change_key_case = array_change_key_case($arr,CASE_UPPER);

// array_chunk ( array $array , int $size [, bool $preserve_keys = false ] ) : array
// 第三个参数是控制是否保留原键名的，true保留，false从0开始重新标识
$arr_chunk = array_chunk($arr,1,true);
//print_r($arr_chunk);

$arr = [
    [
        'a' => [
            'a' => '0a',
            'b' => '0b'
        ],
        'b' => 'b',
    ],
    [
        'a' => 'c',
        'b' => 'd'
    ]
];
// array_column ( array $input , mixed $column_key [, mixed $index_key = null ] ) : array
// 该函数可以获取数组指定列的值，同时还可以通过$index_key设置返回数组的键值(为原数组$index_key列对应的值，经测试如果$index_key不存在，那么返回的数组键值相当于未指定)
// 这个函数除了二维，多维以下就不会处理了
$arr_column = array_column($arr,'a','b');
//print_r($arr_column);die;


// array_combine ( array $keys , array $values ) : array
// 将被作为新数组的键。非法的值将会被转换为字符串类型,当然了如果像数组这样，在转换的时候会出现报错
$keys_arr = [true,'b','c'];
$vals_arr = ['1','2','3'];
$combine = array_combine($keys_arr,$vals_arr);
//print_r($combine);die;

// array_count_values ( array $array ) : array
// 统计数组中相同元素出现的次数
// 对数组里面的每个不是 string 和 integer 类型的元素,该函数会抛出NOTICE
$count_arr = [1,2,3,2,'string1','string1','string2',['a'],['a']];
//$count_result = array_count_values($count_arr);
//print_r($count_result);


// array_diff_assoc ( array $array1 , array $array2 [, array $... ] ) : array
//两个单元仅在 (string) $elem1 === (string) $elem2 时被认为是相同的
//键值都需要比较
$arr1 = [
//    'a' => ['a0','a1'],
    'b' => 'b',
    1 => 'hello'
];
$arr2 = [
//    'a' => ['a0','a1'],
    'd' => 'd',
    'b' => 'b',
    '1' => 'string1'
];

/*$arr_diff_assoc = array_diff_assoc($arr1,$arr2);
print_r($arr_diff_assoc);die;*/

// array_diff ( array $array1 , array $array2 [, array $... ] ) : array
//两个单元仅在 (string) $elem1 === (string) $elem2 时被认为是相同的
//因此这个只能比较值可以正常转换到字符串的值
//只比较值
/*$arr_diff = array_diff($arr1,$arr2);
print_r($arr_diff);die;*/

// array_diff_key ( array $array1 , array $array2 [, array $... ] ) : array
// 该函数只比较键，返回$arr1中存在且$arr2中不存在键对应的键值
/*$arr_diff_key = array_diff_key($arr1,$arr2);
print_r($arr_diff_key);die;*/

// array_diff_uassoc ( array $array1 , array $array2 [, array $... ], callable $key_compare_func ) : array
//该函数使用用户自定义的回调函数来比较对应数组的键值是否相等,回调函数根据><=,返回1 -1 0
/*function user_callback($a,$b){
    return $a === $b ? 0 : ($a > $b ? 1 : -1);
}
$arr_diff_uassoc = array_diff_uassoc($arr1,$arr2,"user_callback");
print_r($arr_diff_uassoc);*/


// array_diff_ukey ( array $array1 , array $array2 [, array $... ], callable $key_compare_func ) : array
/*function user_key_diff($a,$b){
    return $a === $b ? 0 :($a > $b ? 1: -1);
}
$arr_diff_ukey = array_diff_ukey($arr1,$arr2,"user_key_diff");
print_r($arr_diff_ukey);*/

// array_fill_keys ( array $keys , mixed $value ) : array
// 返回以$fill_key_arr值为键，$fill_val为值得新数组,不同于array_combine()的是，该新数组所有的值都是$fill_val;
/*$fill_key_arr = ['a','b','c'];
$fill_val = [1,2,3];
$filled_arr = array_fill_keys($fill_key_arr,$fill_val);
print_r($filled_arr);*/

// array_fill ( int $start_index , int $num , mixed $value ) : array
// $start_index,指定新数组的开始下标，如果为负数，第一个元素下标为该负数，第二个从0开始
//$fill_arr = array_fill(-1,10,1);
/*$fill_arr = array_fill(5,10,1);
print_r($fill_arr);*/

// array_filter ( array $array [, callable $callback [, int $flag = 0 ]] ) : array
/*function filter($a,$b){
    //当flag为ARRAY_FILTER_USE_BOTH，键名和键值都为参数，$a为键名，$b为键值
    return $a > -1 && $b > 0 ? true : false;
}
$array_filter = array_filter([-1,0,1],'filter',ARRAY_FILTER_USE_BOTH);
print_r($array_filter);*/

// array_flip ( array $array ) : array
// 该数组是将数组的键值调换，前提是值是合法的字符串或者整形
// 可以进行值得去重，后面的优先级更高
/*$arr = [
    'a' => 'a',
    'b' => '1.2',
    'c' => 'a'
];
$flip_arr = array_flip($arr);
print_r(array_flip($flip_arr));die;*/

// array_intersect_assoc ( array $array1 , array $array2 [, array $... ] ) : array
// 返回关联数组的交集,键值都需比较
$arr1 = [
    'a1' => 'a1',
    'b' => 'b1',
    'c' => 'c'
];
$arr2 = [
    'a' => 'a1',
    'b' => 'b1',
    'c' => 'c1'
];
/*$inter_assoc_arr = array_intersect_assoc($arr1,$arr2);
print_r($inter_assoc_arr);*/

// array_intersect ( array $array1 , array $array2 [, array $... ] ) : array
/*// 返回数组的交集，只比较值
print_r(array_intersect($arr1,$arr2));*/

// array_intersect_key ( array $array1 , array $array2 [, array $... ] ) : array
/*// 返回数组的交集，只比较键
print_r(array_intersect_key($arr1,$arr2));*/

// array_key_exists ( mixed $key , array $array ) : bool
/*// 只检查第一维的键
var_dump(array_key_exists('a1',$arr1));die;*/

// array_key_first ( array $array ) : mixed
// 返回数组第一个键 php > 7.3.0
//var_dump(array_key_first($arr1));

// array_keys ( array $array [, mixed $search_value = null [, bool $strict = false ]] ) : array
// 返回数组的键(array)
//print_r(array_keys($arr1));

// array_map ( callable $callback , $array $array1 [, array $... ] ) : array
// 对$array中的每个元素调用回调函数，可以作用多个数组，每个数组的元素在函数中就是一个参数
/*function show_name_age($name,$age){
    return $name.'`s age is '.$age;
}
$name = [
    'caoxiang',
    'liuxiaohan'
];
$age = [
    26,
    21
];
$map_arr = array_map('show_name_age',$name,$age);
print_r($map_arr);*/

