<?php
$url = 'http://api.map.baidu.com/location/ip'.'?ak='.'F10c04ed0939110e024e319af6bad640'.'&ip='.'167.179.75.107'.'&coor=bd09ll';
$content = file_get_contents($url);
print_r($content);