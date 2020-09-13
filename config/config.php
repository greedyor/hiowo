<?php
/**
 * 配置文件
 */
return array(

    /**
     * 默认访问控制器
     */
    'default_controller'=> 'Index',

    /**
     * 默认访问方法
     */
    'default_method'=> 'index',

    /**
     * 默认字符格式
     */
    'default_charset'=> 'utf-8',

    /**
     * 数据库参数
     */
    'dbparam' => array(
        //  数据库类型
        'dbtype' => 'mysql',
        // 地址
        'host' => '47.107.108.169',
        // 用户
        'username' => 'root',
        // 密码
        'password' => 'Zz!14336',
        // 数据库
        'dbname' => 'blog',
        // 端口
        'port' => '3306',
        // 字符类型
        'charset' => 'utf8',
        // 表前缀
        'prefix' => 'ob_'
    ),

    /**
     * 视图模板
     **/
    // display template_base
    'template_base' => array(
        'base'=>array('name'=>'base','isnull'=>0),
        'base_iframe'=>array('name'=>'base_iframe','isnull'=>0),
        'login'=>array('name'=>'','isnull'=>1),
        'default_template_base' => array('name'=>'base','isnull'=>0)
    ),

    /**
     * 文件缓存
     */
    'file_cache' => array(
        //路径
        'url'=> 'file',
        //过期时间
        'expire'=> 86400
    ),

    /**
     * 全局页面缓存
     */
    'temp_cache' => array(
        //路径
        'url'=> 'temp',
        //开启状态
        'is_open'=> 0,
        //过期时间
        'expire'=> 3600
    ),

    // SESSION 过期时间
    'SESSION_EXPIRES' => 0
);
