<?php
namespace mvc\Controllers;
use owo\Base\DisplayClass\Display;
use owo\Before\CacheClass\Cache;
use Main\HiBase as HiBase;
use mvc\models\Article;
/**
 * Class Book
 * @package mvc\Controllers
 */

class Download extends HiBase{

    public function __construct()
    {
        $this->assign(array('ssss'=>'book'));
    }

    /**
     * 首页
     */
    public function Index(){
        $cache = new Cache();
        $article_list = $cache->getFileCacheValue("download_article_list");
        if(!$article_list){
            $article_list = Article::model()->order('id desc')->findAll();
            $cache->setFileCache('download_article_list',$article_list);
        }
        $this->view('index', array(
            'article_list'=>$article_list
        ));
    }

    public function curl($url){
        $UserAgent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; SLCC1; .NET CLR 2.0.50727; .NET CLR 3.0.04506; .NET CLR 3.5.21022; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HEADER, 0);  //0表示不输出Header，1表示输出
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_ENCODING, '');
        curl_setopt($curl, CURLOPT_USERAGENT, $UserAgent);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        return curl_exec($curl);
    }

    /**
     *  把表格数据转化为数组
     */
    public function getTablearray($html,$on){
        $title = [];
        $sort = [];
        preg_match_all("/<a>[^<]*?<\/a>/", $html, $title);
        preg_match_all("/<span>[^<]*?<\/span><a>/", $html, $sort);
        $array = [];
        foreach ($title[0] as $item => $value){
            $array[$item]['title'] = rtrim(ltrim($value,'<span>'),'</span>');
            $array[$item]['sort'] =  rtrim(ltrim($sort[0][$item],'<span>'),'</span>');
        }
        return $array;
    }
    /**
     * 查找网页标签内的内容，$count参数表示第count次出现
     **/
    public function getAttrCentont($html,$start,$end){
        $startlen = strlen($start);
        $endlen = strlen($end);
        $tab_s = $this->newstripos($html,$start);
        $tab_e = $this->newstripos($html,$end);
        $tab = mb_substr($html,$tab_s,$tab_e-$tab_s,'utf8');
        return $tab;
    }


    /**
     * 查找网页标签内的内容，$count参数表示第count次出现
     **/
    public function getTabcentont($html,$name,$param,$count=1){
        $len = strlen($name.$param);
        $tab_s = $this->newstripos($html,'<'.$name.$param   .'>', $count);
        $tab_e = $this->newstripos($html,'</'.$name.'>',$count);
        $tab = mb_substr($html,$tab_s+$len+2,$tab_e-$tab_s-$len-2,'utf8');
        return $tab;
    }

    /**
     * 查找出现的位置
     **/
    public function newstripos($html,$name,$count=1,$offset=0){
        $pos = mb_stripos($html, $name, $offset,'utf8');
        $count--;
        if ($count > 0 && $pos !== FALSE)
            $pos = $this->newstripos($html, $name ,$count, $pos+1);
        return $pos;
    }

}
