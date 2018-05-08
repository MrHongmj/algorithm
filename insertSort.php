<?php
function insertSort($list)
{
    $count = count($list);
    if ($count <= 1) {
        return $list;
    }
    for ($i = 1; $i < $count; $i++) {
        $tmp = $list[$i];
        for ($j = $i - 1; $j >= 0; $j--) {
            if ($tmp < $list[$j]) {
                $list[$j + 1] = $list[$j];
                $list[$j] = $tmp;
            } else {
                break;
            }
        }
    }
    return $list;
}

$list = [3, 6, 9, 11, 33, 56, 14, 1, 22, 7, 2, 5, 4, 34, 46, -2, -6, 0, 8, 54, 30, 22];
var_dump(insertSort($list));
