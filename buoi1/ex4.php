<?php
$custom = [
    'key 1' => 'item 1',
    'key 2' => 'item 2',
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
 * */
// arr_unshift: them nhieu pt vao dau mang
// arr_shift: xoa pt dau cua mang va tra ve pt xoa
