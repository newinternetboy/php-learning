<?php
/**
 * Created by IntelliJ IDEA.
 * User: philipp
 * Date: 2018-12-29
 * Time: 16:26
 */
$str = "http://img2.soyoung.com/upload/20181029/5/20181029184218444.jpg";
$dec = hexdec('0x0F0F0F0F0F');
echo $dec;
echo urldecode('lng=116.481926&device_id=167122528&lver=7.16.0&xy_token=&cityId=1&sys=2&uuid=ffffffff-cf13-ebd0-2cdd-d39339c58292&uid=0&pinyin=soyoung&page=1&xy_device_token=85452968dc60f3518a8aacb448e5686a33&keyword=%E5%8F%8C%E7%9C%BC%E7%9A%AE&app_id=2&_time=1546832749&request_id=ae9a4f06951db2c0cf19f8272d6ebca2&lat=39.995963&page_size=20&_sign=$2a$05$FhwbSzqVlVZ.NHNve/qDIeeiMwDjsrU7vESNOAyAkRhm5XqwqhMia&is_hotest=1&is_newest=1&general=1');
$parse = parse_url('http://caoxiang.api.soyoung.com/search/content?lng=116.481926&device_id=167122528&lver=7.16.0&xy_token=&cityId=1&sys=2&uuid=ffffffff-cf13-ebd0-2cdd-d39339c58292&uid=0&pinyin=soyoung&page=1&xy_device_token=85452968dc60f3518a8aacb448e5686a33&keyword=%E5%8F%8C%E7%9C%BC%E7%9A%AE&app_id=2&_time=1546832749&request_id=ae9a4f06951db2c0cf19f8272d6ebca2&lat=39.995963&page_size=20&_sign=$2a$05$FhwbSzqVlVZ.NHNve/qDIeeiMwDjsrU7vESNOAyAkRhm5XqwqhMia&is_hotest=1&is_newest=1&general=1');
function convertUrlArray($query)
{
    $queryParts = explode('&', $query);
    $params = array();
    foreach ($queryParts as $param) {
        $item = explode('=', $param);
        $params[$item[0]] = $item[1];
    }
    return $params;
}

print_r(json_encode(convertUrlArray($parse['query'])));