<?php
namespace mvc\Controllers;
use mvc\models\ArticleDetail;
use owo\Before\CacheClass\Cache;
use Main\HiBase as HiBase;
use mvc\models\Article as Article;

/**
 * Class Book
 * @package mvc\Controllers
 */

class Note extends HiBase{

    public function __construct()
    {
        $this->assign(array('title'=>'123'));
    }

    /**
     * 笔记首页
     */
    public function Index(){
        $cache = new Cache();
        $article_list = $cache->getFileCacheValue("note_article_list");
        if(!$article_list){
            $article_list = Article::model()->order('id desc')->findAll();
            $cache->setFileCache('note_article_list',$article_list);
        }
        $this->view('index', array(
            'article_list'=>$article_list
        ));
    }

    /**
     *
     */
    public function detail(){
        $article = Article::model()->findPk($_GET['id']);
        $content = ArticleDetail::model()->where(" article_id = '".$article->id."' ")->find();
        $cache = new Cache();
        $article_list = $cache->getFileCacheValue("note_article_list");
        if(!$article_list){
            $article_list = Article::model()->where(" id != '".$article->id."' ")->order('id desc')->limit(10)->findAll();
            $cache->setFileCache('note_article_list',$article_list);
        }
        $this->setMeta(array('name'=>'description','content'=>$article->title));
        $this->view('detail', array('article'=>$article,'content'=>$content,'title'=>$article->title,'article_list'=>$article_list));
    }
}
