<?php
$messageArr = [
    1 => 'them thanh cong',
    2 => 'sua thanh cong',
    3 => 'xoa thanh cong'
];
function redirect($path)
{
    header('location: ' . $path);
    exit;
}

function get_message($code)
{
    global $messageArr;
    if (array_key_exists($code, $messageArr)) {
        return $messageArr[$code];
    }
    return false;
}
