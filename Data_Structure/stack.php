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
/**
 * hanoi 汉罗塔问题
 * 汉罗塔的解决充分利用了栈后进先出的特性来解决
 * 分析
 * 1 n个圆盘从A移动到C，可以将问题简化成将n-1个圆盘，从A移动到B，然后把n号盘从A移动到C
 * 2 步骤一过后，那么问题就成了将n-2个盘从B借助A移动到C,移动后将n-1号圆盘移动到C
 * 3 步骤二过后，那么问题就成了将n-3个盘从A借助B移动到C,移动后将n-2号圆盘移动到C
 */

class Hanoi{
    //记录第几次移动
    static $m = 0;

    public function move($n,$b1,$b2){
        echo "第".++self::$m."次移动，把{$n}号盘从{$b1}杆儿移动到{$b2}杆儿"."\n";
    }

    public function hanoi_move($n,$b1,$b2,$b3){
        if($n == 1){
            $this->move(1,$b1,$b3);
        }else{
            $this->hanoi_move($n-1,$b1,$b3,$b2);
            $this->move($n,$b1,$b3);
            $this->hanoi_move($n-1,$b2,$b1,$b3);
        }
    }
}

$Hanoi = new Hanoi();
$Hanoi->hanoi_move(4,'A','B','C');