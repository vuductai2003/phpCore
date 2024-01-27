<?php
$ar = [1,2,3,4];
$customArr =
    [
        'name' => 'duc tai',
        'age' => 20,
        'add' => 'hanoi'
    ];

echo '<pre>';
print_r($customArr);
echo '</pre>';

// them phan tu vao mang
$customArr['phone'] = 12345;
echo '<pre>';
print_r($customArr);
echo '</pre>';

// xoa pt mang: unset
unset($customArr['age']);
echo '<pre>';
print_r($customArr);
echo '</pre>';
// doc mang
foreach ($customArr as $item) {
    echo $item.'<br>';
}

foreach ($customArr as $index => $item) {
    echo $index. ' = ' . $item.'<br>';
}

