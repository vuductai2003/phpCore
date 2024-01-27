<?php
// lấy số kí tự của chuổi
$str = 'vu duc tai';

for ($i = 0; $i < strlen($str); $i++){
    echo $str[$i]. '<br>';
}

// có dấu
$str1 = 'vũ đức tài';
$st =  mb_strlen($str1, 'UTF-8');
for ($i = 0; $i < $st; $i++){
    echo mb_substr($str1, $i, 1, 'UTF-8').'<br>';
}
// lấy ra tên gmail
$email = 'sdfsdf$gmil.com';
$inp = strstr($email, '$', true);
echo $inp.'<br>';
// lay 5 ki tu cuoi
$str2 = 'hoc lap trình';
$in = mb_substr($str2, -5, null, 'UTF-8');
echo $in;
// xóa chữ đaàu tiên trong chuổi
