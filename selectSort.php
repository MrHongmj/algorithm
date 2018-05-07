<?php
    function selectSort($list){
        $count = count($list);
        if($count <= 1){
            return $list;
        }
        
        for($i = 0; $i < $count; $i++){
            for($j = $i; $i < $count; $i++){
                if(!isset($min)){
                    $min = $list[$j];
                }
                if($min > $list[$j]){
                    $min = $list[$j];
                }
            }
            $list[$i] = $min;
            unset($min);
        }
        return $list;
    }
$list = [3,6,9,11,33,56,14,1,22,7,2,5,4,34,46,-2,-6,0,8,54,30,22];
var_dump(selectSort($list));


