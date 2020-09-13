<?php
namespace mvc\Controllers;
use Main\HiBase as HiBase;
use mvc\models\Article;
use owo\Before\CacheClass\Cache;

/**
 * Created by PhpStorm.
 * Date: 2019/4/22
 */

class Index extends HiBase{

    public function __construct()
    {

    }

    /**
     * 首页
     */
    public function Index(){
        $cache = new Cache();
        $article_list = $cache->getFileCacheValue("index_article_list");
            if(!$article_list){
                $article_list = Article::model()->order('id desc')->limit(10)->findAll();
                $cache->setFileCache('index_article_list',$article_list);
            }
        $this->view('index', array(
            'article_list'=>$article_list
        ));
    }

    /**
     * 首页
     */
    public function Book(){
        $this->view('book', array(
            'hhhh'=>'123123','asd'=>'123'
        ));
    }
}
