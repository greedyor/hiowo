<?php
/**
 *  -- PATH --
 */
defined('SYSTEM_PATH') or define("SYSTEM_PATH",rtrim(dirname(__FILE__),'main'));
defined('CONFIG_PATH') or define("CONFIG_PATH", SYSTEM_PATH."config/");
defined('EXTERN_PATH') or define("EXTERN_PATH", SYSTEM_PATH."extern/");
defined('MAIN_PATH') or define("MAIN_PATH", SYSTEM_PATH."main/");
defined('CONTROLLES_PATH') or define("CONTROLLES_PATH", SYSTEM_PATH."mvc/controllers/");
defined('MODEL_PATH') or define("MODEL_PATH", SYSTEM_PATH.",mvc/models/");
defined('VIEW_PATH') or define("VIEW_PATH", SYSTEM_PATH."mvc/views/");
defined('PUBLIC_PATE') or define("PUBLIC_PATE", SYSTEM_PATH."public/");
defined('ROOT') or define("ROOT", 'http://'.$_SERVER["SERVER_NAME"].'/');
defined('CACHE_PATH ') or define("CACHE_PATH", SYSTEM_PATH.'cache/');