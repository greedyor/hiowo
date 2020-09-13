<?php
namespace Main;
use mvc\Controllers\Index;
use mvc\models\Article as Article;
use mvc\models\Meta as Meta;
use mvc\models\Visit;
use owo\Hiowo as Hiowo;
use owo\base\HttpClass\Request;
use owo\base\HttpClass\SqlSafe;

/**
 * Created by PhpStorm.
 * Date: 2019/4/22
 */


class HiBase extends Hiowo{

    public $novelmeta_list;

    public function __Initialization(){
        $this->RecordVisitIP();
        new SqlSafe();
        $this->assign(array('title'=>'Hi OwO'));
        $this->setMeta();
    }
    /*
     * 记录访问 ip
     */
    private function RecordVisitIP(){
        //判断 ip 是否来自共享互联网, 判断 ip 是否来自代理, 否则就是来自远程地址
        $ip_address = !empty($_SERVER['HTTP_CLIENT_IP'])?$_SERVER['HTTP_CLIENT_IP']:(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])?$_SERVER['HTTP_X_FORWARDED_FOR']:$_SERVER['REMOTE_ADDR']);
        if(!empty($ip_address) && $ip_address !== '127.0.0.1') {
            $visit = new Visit();
            $visit->ip = $ip_address;
            $visit->visit_time = date('Y-m-d H:i:s');
            $visit->type = 2;
            $visit->save();
        }
    }

    /**
     * @param $tltle
     * @return string
     */
    public function getMeta(){
        $test = new Meta();


        $is_exists_keywords = 0;
        $is_exists_description = 0;
        $specific_mate = '';
        foreach($this->novelmeta_list as $key => $value){
            if('keywords' == $value->name){
                $is_exists_keywords = 1;
            }
            if('description' == $value->name){
                $is_exists_description = 1;
            }
            $specific_mate .= '<meta name="'.$value->name.'" content="'.$value->content.'">';
        }
        $mate = '';
        $metalist = Meta::model()->where((($is_exists_keywords)?" name != 'keywords' ":'').($is_exists_keywords&&$is_exists_description?'and':'').($is_exists_keywords?" name != 'description' ":''))->findAll();
        foreach($metalist as $item => $vol){
            if(('keywords' == $vol->name && $is_exists_keywords)||('description' == $vol->name && $is_exists_description)){
                continue;
            }
            $mate .= '<meta '.($vol->type == 1?'name="'.$vol->name.'" content="'.$vol->content.'"':'http-equiv="'.$vol->http_equiv.'"'.(empty($vol->content)?'':' content="'.$vol->content.'"')).'>';
        }
        return $mate.$specific_mate;
    }

    /**
     * @param $tltle
     * @return string
     */
    public function setMeta($arr=[]){
        if($arr){
            $this->novelmeta_list[] = (object)$arr;
        }
        $this->assign(array('meta'=>$this->getMeta()));
        return true;
    }
}