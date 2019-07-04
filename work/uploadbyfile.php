<?php
/*$path = "/Users/philipp/Desktop/out";
$file_name_path = "/Users/philipp/Desktop/new_three_img_file.txt";
if(is_dir($path)){
    $dir_handle = opendir($path);
    $file_handle = fopen($file_name_path,'w+');
    while ($file = readdir($dir_handle)){
        if(!in_array($file,['.','..'])){
            $start = rand(0,31);
            $end   = rand($start,32);
            $new_file = substr(md5(microtime(true)),$start,$end)."threedairyimg".$file;
            fwrite($file_handle,$new_file." ".$file."\n");
        }
    }
}*/
$sql_path = "/Users/philipp/Desktop/update.sql";
$arr = [
    "https://img2.soyoung.com/6df5e9f5ba1f696d79ffc6threedairyimg45258998.gif",
    "https://img2.soyoung.com/9bc94970339ethreedairyimg45291385.gif",
    "https://img2.soyoung.com/389bc94970339ethreedairyimg48755133.gif",
    "https://img2.soyoung.com/1db04f52389bc94threedairyimg45869945.gif",
    "https://img2.soyoung.com/2389bc94970339ethreedairyimg48586891.gif",
    "https://img2.soyoung.com/70339ethreedairyimg46410387.gif",
    "https://img2.soyoung.com/52389bc94970339ethreedairyimg46649276.gif",
    "https://img2.soyoung.com/39ethreedairyimg46662568.gif",
    "https://img2.soyoung.com/ab3threedairyimg45293222.gif",
    "https://img2.soyoung.com/eaf5d941cab3threedairyimg45850524.gif",
    "https://img2.soyoung.com/fb59cc484faeafthreedairyimg45291769.gif",
    "https://img2.soyoung.com/eba0fb5threedairyimg45672375.gif",
    "https://img2.soyoung.com/6feba0fthreedairyimg45290932.gif",
    "https://img2.soyoung.com/4faeaf5d941cab3threedairyimg45949062.gif",
    "https://img2.soyoung.com/ba0fb59cc484faeaf5dthreedairyimg45294199.gif",
    "https://img2.soyoung.com/0fb59cc4threedairyimg48503532.gif",
    "https://img2.soyoung.com/0fb59cc484faeaf5d94threedairyimg45310105.gif",
    "https://img2.soyoung.com/9cc484faeaf5d941cab3threedairyimg45305520.gif",
    "https://img2.soyoung.com/76feba0fb59cc484fathreedairyimg45293350.gif",
    "https://img2.soyoung.com/59cc484faeaf5d941cab3threedairyimg46028945.gif",
    "https://img2.soyoung.com/0fb59cc484faeaf5threedairyimg45307645.gif",
    "https://img2.soyoung.com/f5d941cab3threedairyimg48842668.gif",
    "https://img2.soyoung.com/eba0fb59cc484faeaf5d941cab3threedairyimg47428681.gif",
    "https://img2.soyoung.com/55eb81588adf9202fthreedairyimg45306189.gif",
    "https://img2.soyoung.com/81588adf9202f19fthreedairyimg45866252.gif",
    "https://img2.soyoung.com/88adf9202f19fthreedairyimg45278133.gif",
    "https://img2.soyoung.com/2f19fthreedairyimg45291523.gif",
    "https://img2.soyoung.com/02f19fthreedairyimg49032293.gif",
    "https://img2.soyoung.com/9fthreedairyimg48657020.gif",
    "https://img2.soyoung.com/81588adf9202f19fthreedairyimg48750388.gif",
    "https://img2.soyoung.com/f9202f19fthreedairyimg45417867.gif",
    "https://img2.soyoung.com/d55eb81588adf9202fthreedairyimg48842989.gif",
    "https://img2.soyoung.com/00824a4eed55eb81588adf9202f19fthreedairyimg46713080.gif",
    "https://img2.soyoung.com/eb81588adf9202f19fthreedairyimg46013595.gif",
    "https://img2.soyoung.com/02f19fthreedairyimg45762739.gif",
    "https://img2.soyoung.com/19fthreedairyimg45291308.gif",
    "https://img2.soyoung.com/02f19fthreedairyimg47494450.gif",
    "https://img2.soyoung.com/19fthreedairyimg45289989.gif",
    "https://img2.soyoung.com/824athreedairyimg45294098.gif",
    "https://img2.soyoung.com/66532da1909fd1431668766threedairyimg45564854.gif",
    "https://img2.soyoung.com/1668766threedairyimg46690780.gif",
    "https://img2.soyoung.com/66532da1909fd1431668766threedairyimg48500693.gif",
    "https://img2.soyoung.com/909fd1431668766threedairyimg47044306.gif",
    "https://img2.soyoung.com/da1909fd1431668766threedairyimg48856921.gif",
    "https://img2.soyoung.com/4d1e33366532threedairyimg48949752.gif",
    "https://img2.soyoung.com/9fd1431668766threedairyimg48844504.gif",
    "https://img2.soyoung.com/1431668766threedairyimg48841642.gif",
    "https://img2.soyoung.com/1909fd1431668766threedairyimg46696913.gif",
    "https://img2.soyoung.com/1909fd1431668766threedairyimg46656706.gif",
    "https://img2.soyoung.com/e33366532da1909fd14316threedairyimg48872711.gif",
    "https://img2.soyoung.com/2da1909fd1431668766threedairyimg46234214.gif",
    "https://img2.soyoung.com/366532da1909fd1431668766threedairyimg46605570.gif",
    "https://img2.soyoung.com/a1909fd1431668766threedairyimg45290970.gif",
    "https://img2.soyoung.com/3366532da1909fd1threedairyimg45290541.gif",
    "https://img2.soyoung.com/f14d1e33366532da1909fd1threedairyimg45290583.gif",
    "https://img2.soyoung.com/0ed65b98bethreedairyimg45825313.gif",
    "https://img2.soyoung.com/65b98bethreedairyimg45254328.gif",
    "https://img2.soyoung.com/0290ed65b98bethreedairyimg46484776.gif",
    "https://img2.soyoung.com/bethreedairyimg46766011.gif",
    "https://img2.soyoung.com/dd50972cthreedairyimg46740217.gif",
    "https://img2.soyoung.com/dd50972c566a0702threedairyimg48818686.gif",
    "https://img2.soyoung.com/d50972c566a07threedairyimg45648454.gif",
    "https://img2.soyoung.com/0ed65b98bethreedairyimg45294290.gif",
    "https://img2.soyoung.com/a070290ed65b98bethreedairyimg48900618.gif",
    "https://img2.soyoung.com/0ed65b98bethreedairyimg45290419.gif",
    "https://img2.soyoung.com/66a070290ed65b98bethreedairyimg47430516.gif",
    "https://img2.soyoung.com/57dd50972c566a070290ed6threedairyimg45646651.gif",
    "https://img2.soyoung.com/bethreedairyimg45417101.gif",
    "https://img2.soyoung.com/c566a070290ed65b98bethreedairyimg45293148.gif",
    "https://img2.soyoung.com/0ed65b98bethreedairyimg45647890.gif",
    "https://img2.soyoung.com/c566a070290ed65threedairyimg48790661.gif",
    "https://img2.soyoung.com/92ce2e3f7a551d44bthreedairyimg45465871.gif",
    "https://img2.soyoung.com/d44bthreedairyimg46362752.gif",
    "https://img2.soyoung.com/92ce2e3f7a551d44bthreedairyimg48853632.gif",
    "https://img2.soyoung.com/792ce2e3f7a551d44bthreedairyimg48808541.gif",
    "https://img2.soyoung.com/4bthreedairyimg46018858.gif",
    "https://img2.soyoung.com/469aed0threedairyimg46764712.gif",
    "https://img2.soyoung.com/551d44bthreedairyimg48752136.gif",
    "https://img2.soyoung.com/792ce2e3f7a551d44bthreedairyimg45291404.gif",
    "https://img2.soyoung.com/e3f7a551d44bthreedairyimg46662968.gif",
    "https://img2.soyoung.com/7a551d44bthreedairyimg48848210.gif",
    "https://img2.soyoung.com/bc469threedairyimg45245126.gif",
    "https://img2.soyoung.com/469aed079threedairyimg45268705.gif",
    "https://img2.soyoung.com/1d44bthreedairyimg46693833.gif",
    "https://img2.soyoung.com/11c5a18b295f5f5fcbebthreedairyimg48464944.gif",

];
$sql_handle = fopen($sql_path,'w+');
foreach($arr as $value){
    $index_ = strrpos($value,'img');
    $indexdot = strrpos($value,'.');
    $seq = intval(substr($value,$index_+3));
    $sql = "update tb_post_info set info_content ='{\"url\":\"{$value}\",\"attr\":\"\"}' where seq = {$seq};\n";
    fwrite($sql_handle,$sql);
}
fclose($sql_handle);


//上传后的文件路径


