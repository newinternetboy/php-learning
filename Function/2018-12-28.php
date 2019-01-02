<?php
/**
 * Created by IntelliJ IDEA.
 * User: philipp
 * Date: 2018-12-28
 * Time: 18:13
 */
/**
 * 每日十个php的基本核心函数
 */
//密码散列算法函数
//1
//password_hash目前支持PASSWORD_BCRYPT，PASSWORD_ARGON2I，PASSWORD_BCRYPT三种算法
//PASSWORD_BCRYPT 选项支持salt(php7.0以后废弃)，cost
//PASSWORD_ARGON2I 选项支持memory_cost，time_cost，threads
$password = password_hash('caoxiang',PASSWORD_DEFAULT);
$password1 = password_hash('caoxiang',PASSWORD_DEFAULT);
var_dump($password == $password1);
//false 即使明文相同，两次生成hash，结果也不相同，只能通过password_verify来校验hash和密码
var_dump($password);
//2 password_needs_rehash检查hash生成的时候是否使用了对应的算法和options
var_dump(password_needs_rehash($password,PASSWORD_DEFAULT));
//3 password_verify 检查password和散列哈希是否匹配
var_dump(password_verify('caoxiang',$password));
//4 password_get_info 返回生成hash的相关信息
var_dump(password_get_info($password));


