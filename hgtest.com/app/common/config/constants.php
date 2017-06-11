<?php
//定义系统常量
defined('SYS_VERSION') or define('SYS_VERSION', '5.0.9');
define('THINK_PATH', ROOT_PATH . 'thinkphp/');
define('PUBLIC_PATH', ROOT_PATH . 'public/');
define('RUNTIME_PATH', PUBLIC_PATH . 'runtime/');
define('EXTEND_PATH', COMMON_PATH . 'extend/'); //拓展目录
define('VENDOR_PATH', ROOT_PATH . 'vendor/');   //vendor拓展目录
if (!is_dir(RUNTIME_PATH)) {
    mkdir(RUNTIME_PATH, 0755, true);
}
//定义环境变量APP_ENV (testing测试环境,local本地环境,production生产环境)
define('APP_ENV', isset($_SERVER['APP_ENV']) ? strtolower($_SERVER['APP_ENV']) : 'production');
//测试或本地环境打开调试模式，线上环境关闭
define('APP_DEBUG', in_array(APP_ENV, ['testing', 'local']));
define('SYS_DEV_PATH', in_array(APP_ENV, ['tesing', 'local']) ? CONF_PATH . APP_ENV . '/' : CONF_PATH . 'production/');
