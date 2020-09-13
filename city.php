<?php
/*
实现country_city函数, 当调用country_city('china','beijing'), 返回值为'China, Beijing'。即将两个参数首字母大写，然后插入逗号与空格。
将这个函数保存在city.py文件中，并创建test_city.py文件。在test_city.py文件中，基于unittest模块编写测试用例。

# city.py
def country_city(country, city):
    # 在这里写实现
    pass

# test_city.py
import unittest
# 在这里编写测试
tinykpwang
*/
echo country_city('china','beijing');
function country_city($a,$b){
    return ucfirst($a).', '.ucfirst($b);
}

// 冒泡排序
function bubble_sort($arr)
{
    $len = count($arr);
    for ($i = 0; $i < $len -1; $i++) {//循环对比的轮数
        for ($j = 0; $j < $len - $i - 1; $j++) {//当前轮相邻元素循环对比
            if ($arr[$j] > $arr[$j + 1]) {//如果前边的大于后边的
                $tmp = $arr[$j];//交换数据
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $tmp;
            }
        }
    }
    return $arr;
}
$arr = [5,2,4,7,9,4,2,6,8,3];
print_r(bubble_sort($arr));



