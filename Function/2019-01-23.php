<?php
/**
 * Created by IntelliJ IDEA.
 * User: philipp
 * Date: 2019-01-23
 * Time: 10:06
 */
$str = "abcda";
/**
 * 作用：找子串在主串中第一次出现的下标
 * 返回值：找到了返回对应的下标，没找到返回false
 */
$pos     =  strpos($str,'cdd');//false
$pos1    =  strpos($str,'b');//1


/**
 * 作用：找子串在主串中第一次出现的下标(不区分大小写)
 * 返回值：找到了返回对应的下标，没找到返回false
 */
$ipos = stripos($str,'E');
//var_dump($ipos);

/**
 * 作用：找子串在主串中最后一次出现位置的下标
 * 返回值：找到了返回对应的下标，没找到返回false
 */
$rpos = strrpos($str,"a");
//var_dump($rpos);

/**
 * 作用：找子串在主串中最后一次出现位置的下标(不区分大小写)
 * 返回值：找到了返回对应的下标，没找到返回false
 */
$irpos  =   strripos($str,'A');
//var_dump($irpos);

/*********************************************************/
/**
 * 作用：从字符串指定下标向后截取指定长度的字符串
 * $start:正数，从指定下标开始截取；负数，倒数$start个字符开始截取。
 * $length:正数表示截取$length个字符，负数表示截取到从末尾倒数$length个字符的位置
 * 总结：这个函数感觉很吊
 */
$substr = substr($str,0,1);//a
$substr = substr($str,-2,1);
$substr = substr($str,0,-1);
$substr = substr($str,-2,-1);//d
//var_dump($substr);

/**
 * 作用：同substr，但是该函数支持多字节字符的截取
 */
$mbstr = "我爱中国";
$mb_substr = mb_substr($mbstr,0,1,"UTF-8");
//var_dump($mb_substr);

/**
 * 作用：将字符串从指定下标的指定长度的字符替换成目标字符串
 * 返回值：返回替换后的主串
 */
$str_replace = substr_replace($str,'**',1,2);//a**da
//var_dump($str_replace);

/**
 * 作用：找到主串中特定的字符，替换成目标字符。
 * 返回值：返回替换后的主串
 */
$str_replace = str_replace('a','b',$str);
//var_dump($str,$str_replace);//string(5) "abcda" string(5) "bbcdb"

/**
 * 作用：找到主串中特定的字符串，替换成目标字符串(不区分大小写)
 */
$str_ireplace = str_ireplace("A",'B',$str);
//var_dump($str_ireplace);die;

/**
 * 作用：将指定字符串复制指定的遍数
 * 返回值：返回复制后的字符串
 */
$str_repeat = str_repeat("*a",3);
//var_dump($str_repeat);

/**
 * 作用：将字符串随机打乱
 * 返回值：返回打乱后的字符串
 */
$str_shuffled = str_shuffle($str);
//var_dump($str_shuffled);//"badca"  "daacb"

/**
 * 作用：反转字符串
 * 返回值：返回反转后的字符串
 */
$str_reved = strrev($str);
//var_dump($str_reved);

/**
 * 作用：将字符串填充到指定长度
 * 返回值：返回填充后的字符
 */
$str_padded = str_pad($str,10,'*',STR_PAD_BOTH);
//var_dump($str_padded);