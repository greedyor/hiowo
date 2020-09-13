<?php
namespace mvc\Controllers;
use owo\Before\CacheClass\Cache;

/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2019/7/15
 * Time: 15:47
 */

class Test
{

//    private $link;

    public function __construct()
    {
//        $this->link = $this->mysqli(unserialize(DBPARAM));
    }

    public function test()
    {
//        $this->runtime();
//        print_r(Article::model()->findAll());
//
//        Db::begin();
//
//        $a = new Article();
//        $a->create_time = date('Y-m-d H:i:s');
//        $a->title = '123';
//        $a->save();
//
//        Db::commit();
//
//
//        print_r($this->runtime(1));

        $cache = new Cache();
        $cache->setTempCache("https://blog.hiowo.com/note/detail?id=1425",86400);
        echo $cache->getTempCache("/note/detail?id=1425");
    }

    public function runtime($mode=0)   {
        static $t;
        if(!$mode){
            $t = microtime();
            return;
        }
        $t1 = microtime();
        @list($m0,$s0) = explode("   ",$t);
        @list($m1,$s1) = explode("   ",$t1);
        return  '<br/>'.@sprintf("%.3fms",($s1+$m1-$s0-$m0)*1000);
    }

    public function flush()
    {
        phpinfo();
    }
}