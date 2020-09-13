<?php
/**
 * Created by PhpStorm.
 * Date: 2019/4/22
 */
//$p = '/.*\*123\d/';
//$p = '/\d/';
//echo preg_replace($p,'//1');
//include_once('word.php');
//include_once('../owo/Hiowo.php');
//$main = dirname(__FILE__).'/main';
//$hi = new owo\Hiowo;
//$hi->run($main);

// 冒泡排序
//function bubble_sort($arr)
//{
//    $len = count($arr);
//    for ($i = 0; $i < $len -1; $i++) {//循环对比的轮数
//        for ($j = 0; $j < $len - $i - 1; $j++) {//当前轮相邻元素循环对比
//            if ($arr[$j] > $arr[$j + 1]) {//如果前边的大于后边的
//                $tmp = $arr[$j];//交换数据
//                $arr[$j] = $arr[$j + 1];
//                $arr[$j + 1] = $tmp;
//            }
//        }
//    }
//    return $arr;
//}

//function bubble_sort($arr){
//    $len = count($arr);
//    for ($i = 0 ; $i < $len - 1 ; $i++){
//        for($j = 0 ; $j < $len - $i - 1 ; $j++){
//            if($arr[$j] > $arr[$j + 1]){
//                list($arr[$j],$arr[$j+1]) = array($arr[$j+1],$arr[$j]);
//            }
//        }
//    }
//    return $arr;
//}

//function bubble_sort($arr){
//    $len = count($arr);
//    for($i = 0;$i<$len - 1;$i++){
//        for($j = 0;$j<$len-$i-1;$j++){
//            if($arr[$j]>$arr[$j+1]){
//                list($arr[$j],$arr[$j+1]) = array($arr[$j+1],$arr[$j]);
//            }
//        }
//    }
//    return $arr;
//}


//function array_sort($arr, $keys, $order=0) {
//    if (!is_array($arr)) {
//        return false;
//    }
//    $keysvalue = array();
//    foreach($arr as $key => $val) {
//        $keysvalue[$key] = $val[$keys];
//    }
//    if($order == 0){
//        asort($keysvalue);
//    }else {
//        arsort($keysvalue);
//    }
//    reset($keysvalue);
//    foreach($keysvalue as $key => $vals) {
//        $keysort[$key] = $key;
//    }
//    $new_array = array();
//    foreach($keysort as $key => $val) {
//        $new_array[$key] = $arr[$val];
//    }
//    return $new_array;
//}
//$arr = [[1,2,4,4,4],[6,3,7,9,10],[3,21,5,8,0,4],[9,2,3,5]];
//print_r(array_sort($arr,0));

//$a = 10;
//bar($a);
//function bar(&$i) {
//    $i++;
//    echo $i;
//}
//echo $a;


$arr = [3, 43, 54, 62, 21, 66, 32, 78, 36, 76, 39, 2];

////冒泡排序
//function maopao($arr){
//    $len = count($arr);
//    for($i=1;$i<$len;$i++){
//        for($j=0;$j<$len-$i;$j++){
//            if($arr[$j] > $arr[$j+1] ){
//                list($arr[$j+1],$arr[$j]) = array($arr[$j],$arr[$j+1]);
//            }
//        }
//    }
//    return $arr;
//}

//快速排序
//function quick_sort($arr){
//    if(count($arr)<=1) return $arr;
//    $check = $arr[0];
//    $left = array();
//    $right = array();
//    for($i=1;$i<count($arr);$i++){
//        if($check > $arr[$i]){
//            $left[] = $arr[$i];
//        }else{
//            $right[] = $arr[$i];
//        }
//        echo $i.'<br/>';
//    }
//    $left = quick_sort($left);
//    $right = quick_sort($right);
//    return array_merge($left,array($check),$right);
//}

echo 50 << 1;

//print_r(quick_sort($arr));

