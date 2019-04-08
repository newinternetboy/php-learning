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

//  array_merge_recursive ( array $array1 [, array $... ] ) : array
// 递归合并数组 字符键名会进行合并，数值键值相同会附加(不会覆盖)
/*$arr1 = [
    'color' => ['my' =>['fav'=>'red'],5]
];
$arr2 = [
    'color' => ['my' =>['fav'=>'blue'],10]
];
$arr = array_merge_recursive($arr1,$arr2);
print_r($arr);die;*/

/*// array_merge ( array $array1 [, array $... ] ) : array
// 合并数组  字符串键名相同，后面值覆盖前面，数值键名重新索引(不覆盖)
$arr1 = [
    'name' => 'liulin',
    21
];
$arr2 = [
    'name' => 'liuxiaohan',
    22
];

print_r(array_merge($arr1,$arr2));*/
/*Array
(
    [name] => liuxiaohan
    [0] => 21
    [1] => 22
)*/

/*//array_pad ( array $array , int $size , mixed $value ) : array
//将数组填充到指定长度
$arr = [1,2,3];
//print_r(array_pad($arr,5,['a'=>'b']));
print_r(array_pad($arr,-5,5));//左边填充*/

/*//array_pop ( array &$array ) : mixed
//array_pop() 弹出并返回 array 数组的最后一个单元，并将数组 array 的长度减一。
$arr = [1,2,6];
var_dump(array_pop($arr));
var_dump($arr);*/

/*// array_product ( array $array ) : number
// array_product() 以整数或浮点数返回一个数组中所有值的乘积。
// 隐式转换，非数值转换成数值; 空数组返回1
$arr =[1,2,3,'1.1'];
var_dump(array_product([]));*/

/*// array_push ( array &$array , mixed $value1 [, mixed $... ] ) : int
// 将一个或多个元素进行压栈
$arr = [];
array_push($arr,1,[1,2]);
print_r($arr);*/

/*//array_reduce ( array $array , callable $callback [, mixed $initial = NULL ] ) : mixed
//用回调函数迭代地将数组简化为单一的值
//initial 不初始化的时候为null，转为数值为0。在做乘法的时候，需要初始化为1
$arr = [[1],[2],[3]];
function mul($carry,$item){
    $carry *= $item[0];
    return $carry;
}
$res = array_reduce($arr,'mul',1);
var_dump($res);*/

/*//第一个数组键存在，后序数组不存在，不操作
//第一个数组键不存在，后序数组存在，在第一个数组新增
//第一个数组键也在后序数组中存在，则用后序数组对应的键值替换第一个数组的键值
//array_replace_recursive ( array $array1 [, array $... ] ) : array
//行为：首页进行对应键值的替换，然后根据值得类型决定是否递归执行替换
//只是一维替换
$arr = ['a'=>['a','b']];
$arr2 = ['a'=>['aa']];
$result = array_replace_recursive($arr,$arr2);
//array_replace替换行为同递归替换，但是不会进行值的递归替换
$result_replace = array_replace($arr,$arr2);
print_r($result);
print_r($result_replace);*/

/*// array_reverse ( array $array [, bool $preserve_keys = FALSE ] ) : array
// 翻转数组,第二个参数表示是否保留数组键不变
$arr = [
    1 => [1],
    2 => [2],
    3 => [3]
];
$rev_arr = array_reverse($arr, true);
print_r($rev_arr);*/

/*// array_search ( mixed $needle , array $haystack [, bool $strict = false ] ) : mixed
// 找值，返回值对应的key，如果找不到，那么返回false
$arr = [1,2,3];
$key = array_search(2,$arr);
var_dump($key);*/

/*// array_shift ( array &$array ) : mixed
// 移除数组的第一个单元，并返回该值，数组为空或者非数组返回null
$arr = [1,2,3];
$value = array_shift($arr);
var_dump($value);*/

/*//array_unshift ( array &$array [, mixed $... ] ) : int
//在数组第一个位置插入元素，支持多个参数，后面的参数先插入
$arr = [3,4];
$arr1 = [1,2];
array_unshift($arr,$arr1,'string','string2');
print_r($arr);*/

/*// array_walk ( array &$array , callable $callback [, mixed $userdata = NULL ] ) : bool
// 使用用户自定义的函数作用在数组的每一个元素上，自定义函数第一个参数加上&，对值的操作会作用到原数组
$arr = [1,2,3,4];
function powOfMine(&$value, $key){
    $value = pow($value,$key);
}
array_walk($arr,'powOfMine');
print_r($arr);*/


/*// array_walk_recursive ( array &$array , callable $callback [, mixed $userdata = NULL ] ) : bool
// 递归对数组成员进行调用用户自定义的函数
$arr = [
    'a' => [
        'a' => [
            'a'
        ]
    ]
];

function UpperCase(&$value, $key){
    $value = strtoupper($value);
}

array_walk_recursive($arr,'UpperCase');
print_r($arr);*/

/*//arsort ( array &$array [, int $sort_flags = SORT_REGULAR ] ) : bool
//对数组进行逆向排序并保持索引关系(降序)
$arr = [
1,2,3,4
];
arsort($arr,SORT_NATURAL);
print_r($arr);*/


/*// asort ( array &$array [, int $sort_flags = SORT_REGULAR ] ) : bool
// 升序排列
$arr = [
    4,3,2,1
];
asort($arr);
print_r($arr);*/

/*//compact ( mixed $varname1 [, mixed $... ] ) : array
//创建一个包含其变量与其值得数组，可以递归
$name = 'caoxiang';
$age = 20;
$arr = [
    'name','age'
];
$compact_arr = compact($arr);
print_r($compact_arr);*/

/*// extract ( array &$array [, int $flags = EXTR_OVERWRITE [, string $prefix = NULL ]] ) : int
// 关联数组，键为变量名，值为变量值
// flags:表示在非法数字和冲突键名，extract的行为
//  EXTR_OVERWRITE（默认值） :如有冲突，重写;
//  EXTR_SKIP:冲突，跳过；
//  EXTR_PREFIX_SAME：冲突了，在变量名前加前缀
//  EXTR_PREFIX_ALL:给所有变量加上前缀；
//  EXTR_PREFIX_INVALID：在非法变量名前加上前缀
//  EXTR_IF_EXISTS：覆盖已经定义好的变量，未定义的直接跳过
//  EXTR_PREFIX_IF_EXISTS：已经定义好的变量加前缀导入值
//  prefix
$age = 22;
$arr = [
    'age' => 26,
    'name' => 'caoxiang'
];
extract($arr, EXTR_PREFIX_IF_EXISTS,'cx');
echo "$cx_age";*/

//2019-04-04
/*//  count ( mixed $array_or_countable [, int $mode = COUNT_NORMAL ] ) : int
//  统计出数组中元素的个数或者对象中属性的个数(该对象实现了Countable接口)
$arr  = [];
$count = count($arr);
echo $count;*/

/*//  current ( array &$array ) : mixed,初始化数组默认指向第一个
//  end() - 将数组的内部指针指向最后一个单元
//  key() - 从关联数组中取得键名
//    each() - 返回数组中当前的键／值对并将数组指针向前移动一步 7.2的php废弃了该方法
//    prev() - 将数组的内部指针倒回一位
//    reset() - 将数组的内部指针指向第一个单元
//    next() - 将数组中的内部指针向前移动一位
$arr = ['caoxiang','liulin','liuxiaohan'];
$first = current($arr);
$end = end($arr);
$end_key = key($arr);
echo $first."\n";
echo $end."\n";
echo $end_key."\n";
$end_prev = prev($arr);
$end_prev_key = key($arr);
echo $end_prev_key."\n";*/


/*// krsort ( array &$array [, int $sort_flags = SORT_REGULAR ] ) : bool
// 对数组按照键值排序，降序
$arr = [
    'a' => 'a',
    'd' => 'd',
    'c' => 'c',
    'b' => 'b'
];
//krsort($arr);
// ksort 升序
ksort($arr);
print_r($arr);*/


/*// natcasesort ( array &$array ) : bool
// 不区分大小写的自然排序算法，保留键值关联
$array1 = $array2 = $array3 = array('IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png');
echo "Standard Sorting\n";
sort($array1);
print_r($array1);
echo "Natural order sorting case-insensitive\n";
natcasesort($array2);
print_r($array2);
echo "Natural Order sorting\n";
natsort($array3);
print_r($array3);*/

/*// range ( mixed $start , mixed $end [, number $step = 1 ] ) : array
// 生成一个指定范围的数组
$arr = range(0,10,1);
$arr2 = range(0,10,2);
print_r($arr);
print_r($arr2);*/

/*//rsort 对数组的值按降序排序
$arr = range(0,10);
rsort($arr);
print_r($arr);*/

// sort 低到高排序

/*// shuffle ( array &$array ) : bool 打乱一个数组
$arr = range(0,5);
shuffle($arr);
print_r($arr);*/

// uasort ( array &$array , callable $value_compare_func ) : bool
//

