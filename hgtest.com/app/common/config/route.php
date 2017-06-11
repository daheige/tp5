<?php
//路由规则，关于路由配置请看think\Route类
use think\Route;

Route::get('/h5/test', 'Index/index/index');
//黑哥建议路由用路由注册方式进行，可以采用分组和路由拆分到不同的文件
// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],

// ];
