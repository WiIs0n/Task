<?php 

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
$random_string = substr(str_shuffle($permitted_chars), 0, 10);

echo "Your flag: flag{secret_folder_flag_". $random_string ."}"

?>
