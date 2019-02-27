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

$arr_test = json_decode('[
{
"id": "1",
"uid": "1",
"user_name": "\u5218\u5c0f\u6db5",
"phone_number": "2147483647",
"status": "0",
"cancel_reason": "",
"operator_id": "1",
"operator_name": "",
"create_time": "0000-00-00 00:00:00",
"update_time": "0000-00-00 00:00:00"
},
{
"id": "2",
"uid": "2",
"user_name": "\u67f3\u6797",
"phone_number": "2147483647",
"status": "1",
"cancel_reason": "",
"operator_id": "3",
"operator_name": "",
"create_time": "2019-02-01 00:00:00",
"update_time": "2019-02-20 00:00:00"
},
{
"id": "3",
"uid": "3",
"user_name": "\u5434\u5f66\u7956",
"phone_number": "2147483647",
"status": "2",
"cancel_reason": "",
"operator_id": "5",
"operator_name": "",
"create_time": "2019-02-02 00:00:00",
"update_time": "2019-02-21 00:00:00"
}
]',true);

usort($arr_test,function($a,$b){
    if($a['status'] < $b['status']){
        return 1;
    }elseif($a['status'] == $b['status']){
        return 0;
    }else{
        return -1;
    }
});

//print_r($arr_test);

