<?php
namespace mvc\Controllers;
use Main\HiBase as HiBase;
/**
 * Class Book
 * @package mvc\Controllers
 */

class Book extends HiBase{

    public function __construct()
    {
        $this->assign(array('ssss'=>'book'));
    }

    /**
     * 首页
     */
    public function Index(){
        $url = 'https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&tn=baidu&wd=123456';
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
        $data = curl_exec($curl);
        $data = preg_replace('/ class="([^\"]*)"/isU','',(string)$data);  //清除所有的class
        $data = preg_replace('/ width="([^\"]*)"/isU','',(string)$data);         //清除所有的width
        $data = preg_replace('/ colspan="([^\"]*)"/isU','',(string)$data);     //清除所有的colspan
        $data = preg_replace('/ style="([^\"]*)"/isU','',(string)$data);      //清除所有的style
        $data = preg_replace('/ href="([^\"]*)"/isU','',(string)$data);      //清除所有的style
        $data = preg_replace('/ target="([^\"]*)"/isU','',(string)$data);      //清除所有的style
        $data = preg_replace('/ title="([^\"]*)"/isU','',(string)$data);      //清除所有的style
        $data = str_replace('</b>','',str_replace('<b>','',$data)); //清楚所有 b 标签
        $data = $this->getTabcentont($data,'div',' id="content_right"',1);
        $data = $this->getTabcentont($data,'table','',1);
        $data = $this->getTablearray($data,1);
        $this->view('book/index', array(
            'data'=>$data
        ));
    }

    /**
     * 首页
     */
    public function Book(){
        $this->view('book/book',
            array('hhhh'=>'123123','asd'=>'123'));
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
    public function getTabcentont($html,$name,$param,$count=1){
        $len = strlen($name.$param);
        $tab_s = $this->newstripos($html,'<'.$name.$param   .'>', $count);
        $tab_e = $this->newstripos($html,'</'.$name.'>',$count);
        $tab = mb_substr($html,$tab_s+$len+2,$tab_e-$tab_s-$len-2,'utf8');
        return (string)$tab;
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
