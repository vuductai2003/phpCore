<?php
echo date('d/m/Y');
echo '<br>';
echo time();
/*
 * microtime: lay timestamp cua thoi diem hien tai bao gom ca microseconds
 * mktime: 
 * strftime: xuat ra chuoi tgian theo dung dinh dang tryuen vao
 * ham strtotime: ptich chuoi tgian bat ky ve dang timestamp cua tgian do*/
$t = time();
$datetiem = strftime('%m/%d/%y', $t);
echo $datetiem.'<br>';
$mktime = mktime(15, 30, 3);
