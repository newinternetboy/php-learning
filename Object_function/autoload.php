<?php
/**
 * Created by IntelliJ IDEA.
 * User: caoxiang
 * Date: 2019-04-10
 * Time: 16:40
 */
//spl_autoload_register();用户自定的加载文件注册函数，调用一个类，在抛出异常前，会通过该函数加载，加载失败才抛出异常。
interface Interface1{
    public function Method1();
}

interface Interface2 extends Interface1{
    public function Method2();
}

interface Interface3{
    public function Method3();
}
class Clever implements Interface2, Interface3 {
    public function Method1()
    {
        // TODO: Implement Method1() method.
    }
    public function Method2()
    {
        // TODO: Implement Method2() method.
    }
    public function Method3()
    {
        // TODO: Implement Method3() method.
    }
}
spl_autoload_register(function($name){
    var_dump("类名".$name);
});