<?php
$custom = [
    'key 1' => 'item 1',
    'key 2' => 'item 2',
];
$custom1 = [
    'key 1' => 'item 1',
    'key 2' => 'item 2',
    'key 3' => 'item 3',
];
echo '<pre>';
print_r($custom);
echo '</pre>';
// lay ra item
echo '<pre>';
print_r(array_values($custom));
echo '</pre>';
// lay key
echo '<pre>';
print_r(array_keys($custom));
echo '</pre>';
// them item
array_push($custom, 'item 3', 'item 4');
echo '<pre>';
print_r($custom);
echo '</pre>';
/*
 * arr_flip: chuyen doi key thanh value va nguoc lai
 * sort: sap sep theo chieu tang dan
 * arr_reverse: dao nguoc cac pt trong mang( sap sep giam dan)
 * arr_merge: gop nhieu mang lai voi nhau
 * arr_rand: lay ra key ngau nhien trong mang - random
 * arr_search: tim gia tri cua mang va cha ve key cua pt do
 * arr_slice: lay ra length pt trong mang
 * arr_unique: loai bo cac pt trung nhau
 * arr_unshift: them nhieu pt vao dau mang
 * arr_shift: xoa pt dau cua mang va tra ve pt xoa
 * serialize: chuyen doi 1 chuoi, so, mang, obj, thanh 1 chuoi dc ma hoa
 * unserialaze: dich chuoi dc ma hoa
 * json_encode($array): Chuyển mảng thành chuỗi json
 * json_decode($jsonStr, true): Chuyển chuỗi json thành mảng
 * explode($chuoi_phan_cach, $chuoi_can_chuyen): Chuyển chuỗi thành mảng dựa vào $chuoi_phan_cach
 * implode($chuoi_noi, $mang): Nối các phần tử của mảng thành chuỗi, các phần tử nối với nhau bởi $chuoi_noi
 *
 * KIEM TRA KEY
 * arr_key_exits: ktra mang co ton tai khoa key hay ko
 * in_array: kiem tra mang co ton tai gia tri value hay ko
 * arr_diff: cha ve mang chua cac pt co trong arr1 va arr2
 * arr_diff_ssoc: cha ve mang chua cac pt khong co trong arr1 va arr2
 * is_arr: ktra bien co phai la mang hay ko
 * */
$mahao = serialize($custom);
echo '<pre>';
print_r($mahao);
echo '</pre>';
$seach = array_search('item 1', $custom);
echo '<pre>';
print_r($seach);
echo '</pre>';

$sub = array_slice($custom, 2, 2);
echo '<pre>';
print_r($sub);
echo '</pre>';

$mh = unserialize($mahao);
echo '<pre>';
print_r($mh);
echo '</pre>';

$ch = array_key_exists(0, $custom);
var_dump($ch);
$chh = in_array('item 4', $custom);
var_dump($chh);

$i = array_diff($custom, $custom1);
echo '<pre>';
print_r($i);
echo '</pre>';
