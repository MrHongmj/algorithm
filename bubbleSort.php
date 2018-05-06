<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/6
 * Time: 22:19
 */
//冒泡排序
function bubbleSort(array $list){
    $count = count($list);
    for($i = 0; $i<$count; $i++ ){
        for ($j = $i+1; $j < $count; $j++){
            if($list[$j] < $list[$i]){
                $tmp = $list[$i];
                $list[$i] = $list[$j];
                $list[$j] = $tmp;
            }
        }
    }
    return $list;
}

$list = [3,6,9,1,0,8,7,2,5,4,34,54,11,33,56,14,30,22];
var_dump(bubbleSort($list));