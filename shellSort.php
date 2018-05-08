<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/8
 * Time: 21:01
 */
function shellSort($list)
{
    $count = count($list);
    if ($count <= 1) {
        return $list;
    }
    $base_num = 2;//因子
    $step = floor($count / $base_num);//向下取整
    while ($step >= 1) {
        for ($i = 0; $i < $step; $i++) {
            for ($j = $i + $step; $j < $count; $j += $step) {
                $tmp = $list[$j];
                for ($k = $j - $step; $k >= 0; $k -= $step) {
                    if ($tmp < $list[$k]) {
                        $list[$k + $step] = $list[$k];
                        $list[$k] = $tmp;
                    } else {
                        break;
                    }
                }
            }

        }
        $step = floor($step / $base_num);
    }
    return $list;
}

$list = [3, 6, 9, 11, 33, 56, 14, 1, 22, 7, 2, 5, 4, 34, 46, -2, -6, 0, 8, 54, 30, 22];
var_dump(shellSort($list));