<?php
/**
 * Created by PhpStorm.
 * User: 49391
 * Date: 2018/5/9
 * Time: 23:10
 */
function heapSort(&$list)
{
    $count = count($list);
    if ($count <= 1) {
        return $list;
    }
    buildHeap($list, $count);
    for ($i = $count - 1; $i > 0; $i--) {
        swap($list, $i, 0);//把最小的放在数组的最后面后面1位
        $count--;//剔除排序好的数字，继续前面的建堆过程
        buildHeap($list, $count);
    }
}

//用数组建立最小堆
function buildHeap(&$list, $count)
{
    //计算出最开始的下标$index,如图,为数字"97"所在位置,比较每一个子树的父结点和子结点,将最小值存入父结点中
    //从$index处对一个树进行循环比较,形成最小堆
    for ($index = intval($count / 2) - 1; $index >= 0; $index--) {
        //如果有左节点,将其下标存进最小值$min
        if ($index * 2 + 1 < $count) {
            $max = $index * 2 + 1;
            //如果有右子结点,比较左右结点的大小,如果右子结点更大,将其结点的下标记录进最大值$max
            if ($index * 2 + 2 < $count) {
                if ($list[$index * 2 + 2] > $list[$max]) {
                    $max = $index * 2 + 2;
                }
            }
            //将子结点中较大的和父结点比较,若子结点较大,与父结点交换位置,同时更新较大
            if ($list[$max] > $list[$index]) {
                swap($list, $max, $index);
            }
        }
    }
}

//此函数用来交换下数组$arr中下标为$one和$another的数据
function swap(&$arr, $one, $another)
{
    $tmp = $arr[$one];
    $arr[$one] = $arr[$another];
    $arr[$another] = $tmp;
}

//因为是数组,下标从0开始,所以,下标为n根结点的左子结点为2n+1,右子结点为2n+2;
//初始化值,建立初始堆
$list = array(49, 38, 65, 97, 76, 13, 27, 50);

heapSort($list);
var_dump($list);