<?php
function selectSort($list)
{
    $count = count($list);
    if ($count <= 1) {
        return $list;
    }

    for ($i = 0; $i < $count; $i++) {
        $min_key = $i;
        for ($j = $i + 1; $j < $count; $j++) {
            if ($list[$min_key] > $list[$j]) {
                $min_key = $j;
            }
        }
        $tmp = $list[$i];
        $list[$i] = $list[$min_key];
        $list[$min_key] = $tmp;
    }
    return $list;
}

$list = [3, 6, 9, 11, 33, 56, 14, 1, 22, 7, 2, 5, 4, 34, 46, -2, -6, 0, 8, 54, 30, 22];
var_dump(selectSort($list));


