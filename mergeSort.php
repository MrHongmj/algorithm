<?php
//归并排序
//时间复杂度为O(nlogn)
//空间复杂度在于每次合并消耗的临时变量tmp，需要循环N此，空间复杂度O(n)
function mergeSort(&$list){
    $count = count($list);
    if($count <=1){
        return $list;
    }
    $left = 0;
    $right = $count-1;
    mSort($list,$left,$right);
}
function mSort(&$list,$left,$right){
    if($left < $right){
        $mid = floor(($left + $right)/2);
        mSort($list,$left,$mid);
        mSort($list,$mid+1,$right);
        merge($list,$left,$mid,$right);
    }
}
function merge(&$list,$left,$mid,$right){
    $i = $left;
    $j = $mid +1;
    $k = $left;//新的数组建值
    $tmp = array();
    //判断左右两边的数组都还没空的情况添加到临时数组中
    while($i <= $mid && $j <= $right+1){
        if($list[$i] <= $list[$j]){
            $tmp[$k++] = $list[$i++];
        }else{
            $tmp[$k++] = $list[$j++];
        }
    }
    //其中一个数组比较完了，直接把剩下一个数组补全
    while($i <= $mid+1){
        $tmp[$k++] = $list[$i++];
    }
    while($j <= $right+1){
        $tmp[$k++] = $list[$j++];
    }
    for($i = $left; $i <= $right; $i++){
        $list[$i] = $tmp[$i];
    }
}
$list = [3,6,2,8,1,7,9,10];
mergeSort($list);
var_dump($list);


