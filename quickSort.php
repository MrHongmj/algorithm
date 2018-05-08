<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/6
 * Time: 22:58
 */
//快速排序的原理：找到当前数组中的任意一个元素（一般选择中间的元素），作为标准，新建两个空数组，遍历整个数组元素，
//如果遍历到的元素比当前的元素要小，那么就放到左边的数组，否则放到右面的数组，然后再对新数组进行同样的操作，
//不难发现，这里符合递归的原理，所以我们可以用递归来实现。
function quickSort($list)
{
    $count = count($list);
    if ($count <= 1) {
        return $list;
    }
    $base_key = floor($count / 2);//向下取整
    $middle = $list[$base_key];
    $right = [];
    $left = [];
    for ($i = 0; $i < $count; $i++) {
        if ($i == $base_key) {
            continue;
        }
        if ($list[$i] < $middle) {
            array_push($left, $list[$i]);
        } else {
            array_push($right, $list[$i]);
        }
    }
    $ret = array_merge(quickSort($left), array($middle), quickSort($right));
    return $ret;
}

$list = [3, 6, 9, 11, 33, 56, 14, 1, 22, 7, 2, 5, 4, 34, 46, -2, -6, 0, 8, 54, 30, 22];
var_dump(quickSort($list));