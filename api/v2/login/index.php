<?php 

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
$random_string = substr(str_shuffle($permitted_chars), 0, 10);

echo "flag{api_v2_flag_". $random_string ."}"

?>
