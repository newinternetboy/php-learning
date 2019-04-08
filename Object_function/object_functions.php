<?php
/**
 * Created by IntelliJ IDEA.
 * User: caoxiang
 * Date: 2019-04-08
 * Time: 10:38
 */
class Electron{

}
class Computer extends Electron {
    public $var1;

    protected $var2;

    private  $var3;

    public static function static_function_1(){
        echo get_called_class()."\n";
    }

    public function method1(){}

    public function method2(){}
}

class_alias("Computer",'CC');
$computer = new CC();
var_dump($computer);


//class_exists — 检查类是否已定义
//是否默认调用 __autoload。
class_exists('Computer',true);

if(class_exists("Computer",true)){
    $computer = new CC();
}


//get_called_class — 后期静态绑定（"Late Static Binding"）类的名称
Computer::static_function_1();

//get_class_methods — 返回由类的方法名组成的数组,错误返回Null
$class_methods = get_class_methods("CC");
var_dump($class_methods);

//get_class_vars — 返回由类的默认属性组成的数组(只能获取公共修饰符作用的成员变量)
$class_vars = get_class_vars("CC");
print_r($class_vars);


//get_class — 返回对象的类名
$class_name = get_class($computer);
var_dump($class_name);


//get_object_vars — 返回由对象属性组成的关联数组
$object_vars = get_object_vars($computer);
print_r($object_vars);


//get_parent_class — 返回对象或类的父类名
$class_name = get_parent_class($computer);
$class_name1 = get_parent_class("Computer");
echo $class_name."\n".$class_name1."\n";


// get_declared_interfaces ( void ) : array 其内容是当前脚本中所有已声明的接口的名字
$interfaces_name = get_declared_interfaces();
print_r($interfaces_name);

//is_subclass_of — 如果此对象是该类的子类，则返回 TRUE
var_dump(is_subclass_of($computer,'Electron'));

//method_exists  检查类的方法是否存在于指定的 object中。
var_dump(method_exists($computer,'method1'));

//property_exists 检查对象或类是否具有该属性
var_dump(property_exists($computer,'var1'));

