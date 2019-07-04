<?php
/**
 * Created by IntelliJ IDEA.
 * User: philipp
 * Date: 2019-01-28
 * Time: 10:49
 */
##
##生成器是一种可中断的函数, 在它里面的yield构成了中断点.###
/*function x_range($start,$end,$step){
    for($i=$start;$i<$end;$i+=$step){
        yield $i;
    }
}

foreach (x_range(1,10,1) as $value){
    echo $value."\n";
}*/

/**
 * x_range(1,10,1);返回一个迭代器，实现了Iterator接口
 */
/*var_dump(x_range(1,10,1));//object(Generator)#2 (0) {}

var_dump(x_range(1,10,1) instanceof Iterator);//bool(true)*/

/*function yield_test(){
   print "time1---".microtime(true)."\n";
   $ret = yield "yield1";//this is end of first use!
   print "time2---".microtime(true)."\n";
   $ret = yield "yield2";
//   print "time3---".microtime(true)."\n";
}
//当我们创建好生成器之后，rewind会被隐式调用，第一个yield被执行，但是返回值被忽略
//$yield_test = yield_test();
//var_dump($yield_test->current());//yield1       this mean than first yield had been executed；

//var_dump($yield_test->current());*/

/*********************迭代器start**************************/
function yield_iterator(){
    yield 1;
    echo time()."\n";
    yield 2;
    echo time()."\n";
    yield 3;
    echo time()."\n";
}

$yield_iterator = yield_iterator();
foreach ($yield_iterator as $key => $value){
    //$key 代表的是当前yield的次序
    //$value 代表的是当前yield表达式的值
    echo $key ."---->".$value."\n";
    sleep(2);
}
/*********************迭代器end**************************/



/*********************大数组start**************************/
/**
 * @param $max
 * @return Generator
 * 用生成器产生大数组，可以避免数组过大占用过多内存
 */
/*function big_array($max){
    for($i=0;$i<$max;$i++){
        yield $i;
    }
}

foreach (big_array(10) as $key => $value){
//    echo $key .'---->'. $value."\n";
}*/
/*********************大数组end**************************/


/*********************yield-send()-start**************************/
/*function gen3(){
    echo "test\n";
    echo (yield 1)."I\n";
//    echo "code between 1 and 2 yield\n";
    echo (yield 2)."II\n";
//    echo "code between 2 and 3 yield\n";
    echo (yield 3 + 1+1)."III\n";
//    echo "before next III has been exected\n";
}
$gen = gen3();*/
/*foreach ($gen as $key => $value) {
    echo "{$key} - {$value}\n";
}*/
/*$gen->rewind();
echo $gen->key().'--->'.$gen->current()."\n";
//Generator::send — 向生成器中传入一个值
//向生成器中传入一个值，并且当做 yield 表达式的结果，然后继续执行生成器(important)。
//send个人理解，首先send会将将表达式的值替换成发送的消息
//替换完成之后完成表达式所在语句的输出
//语句执行完成之后，还需要将下一个yield语句执行完毕
echo $gen->send("send message one-");*/
/**
 * 执行1 $gen->rewind();迭代器指针复位，此时第一个yield语句在迭代器实例的时候已经执行完了
 * 执行2 $gen->send();会执行yield1 到 yield2之间的code，echo (yield 1)."I\n";该语句中yield表达式
 * （yield 1）被替换成了 "send message one-" ,那么实际执行的语句为 echo "send message one-I\n"
 *  在该语句执行完，继续执行(yield 2),返回第二个yield表达式yield的值
 * 总结：
 *  send(),可以完成对yield表达式的赋值，最终获取的结果是下一个yield的值
 */

function test_send(){
    $id = 1;
    $id = yield $id;
    echo $id."\n";
    yield "second yield value";
}
$test_send = test_send();
var_dump($test_send->send($test_send->current()+10));
//11
//NULL
//完美验证上述总结
/*********************yield-send()-end**************************/