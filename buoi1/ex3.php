<?php
// mang da chieu

$cusArr = [
    [
        'name'=>'tai',
        'age'=>20
    ],
    [
        'name'=>'nam',
        'age'=>21
    ]
];
echo '<pre>';
print_r($cusArr);
echo '</pre>';

// khai bao arr ko co dl
$customArr = [];
// them dl
$customArr[] = [
        'name'=>'tai',
        'age'=>20
];
$customArr[] = [
        'name'=>'nam',
        'age'=>21
];
$customArr['status'] = 'pass';
echo '<pre>';
print_r($customArr);
echo '</pre>';
