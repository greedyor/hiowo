<?php
namespace mvc\Controllers;
use Main\HiBase as HiBase;
/**
 * Class Book
 * @package mvc\Controllers
 */

class About extends HiBase{

    public function __construct()
    {
        $this->assign(array('ssss'=>'book'));
    }

    /**
     * 首页
     */
    public function Index(){

        $this->view('index', array(
        ));
    }


}
