<?php
namespace mvc\Controllers;
use Main\HiBase as HiBase;

/**
 * Class Sarscov
 * @package mvc\Controllers
 */

class Sarscov extends HiBase{

    public function __construct()
    {
        $json = file_get_contents("http://trip.zhongan.com/api/epidemic/queryCurrentData");
        $this->assign(array('json'=>$json));
    }

    /**
     * 首页
     */
    public function Index(){
        $this->view('index');
    }
}
