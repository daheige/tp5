<?php
// 定义应用目录
define('ROOT_PATH', str_replace('\\', '/', dirname(__DIR__)) . '/');
define('APP_PATH', ROOT_PATH . 'app/');
define('COMMON_PATH', APP_PATH . 'common/');  //common不對外訪問
define('CONF_PATH', COMMON_PATH . 'config/'); //定义系统配置文件目录

//對於nginx不支持重寫，重新定義PATH_INFO 在框架执行前补全$_SERVER['PATH_INFO']参数
$_SERVER['PATH_INFO'] = $_SERVER['REQUEST_URI'];
// 加载系统常量和框架引导文件
require CONF_PATH . 'constants.php';
require THINK_PATH . 'start.php';
