<?php
$number = 55;
$check = filter_var($number, FILTER_VALIDATE_INT);
$checkfl = is_float($number);
var_dump($checkfl);

$random = rand();
echo $random . '<br>';
/*
 * Kiểm tra kiểu số: is_numeric($ten_bien) hoặc filter_var()
 * Kiểm tra kiểu số nguyên: is_int($ten_bien) hoặc is_integer($ten_bien)
 * Kiểm tra kiểu số thực: is_float($ten_bien)
 * Ép kiểu số nguyên: (int)$ten_bien
 * Ép kiểu số thực: (float)$ten_bien
 * Lấy trị tuyệt đối: abs($ten_bien)
 * Làm tròn: round($ten_bien, $so_phan_thap_phan)
 * Làm tròn xuống: floor($ten_bien)
 * Làm tròn lên: ceil($ten_bien)
 * > Lấy số ngẫu nhiên: rand() hoặc rand(min, max)
 * Định dạng số: number_format($ten_bien)
 * */
