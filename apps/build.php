<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 创建目录的方法 php think build
return [
    // 生成应用公共文件
    // '__file__' => ['common.php','tags.php'],

    // 定义demo模块的自动生成 （按照实际定义的文件名生成）
    // 'index'     => [
    //     '__file__'   => ['common.php','tags.php'],
    //     '__dir__'    => ['behavior', 'controller', 'model', 'view'],
    //     'controller' => ['Index', 'Test', 'UserType'],
    //     'model'      => ['User', 'UserType'],
    //     'view'       => ['index/index'],
    // ],

    // 其他更多的模块定义
    // 'api'     => [
    //     '__file__'   => ['common.php','tags.php'],
    //     '__dir__'    => ['behavior', 'controller', 'service', 'model', 'view'],
    //     'controller' => ['Index', 'Test', 'UserType'],
    //     'service'    => ['Index', 'Test', 'UserType'],
    //     'model'      => ['User', 'UserType'],
    //     // 'view'       => ['index/index'],
    // ],
    'admin'     => [
        '__file__'   => ['common.php','tags.php'],
        '__dir__'    => ['behavior', 'controller/Game', 'service/Game', 'model/Game', 'view'],
        'controller' => ['Index', 'Test', 'Game/Game'],
        'service'    => ['Index', 'Test', 'Game/Game'],
        'model'      => ['User', 'Game/Game'],
        'view'       => ['index/index', 'User/user'],
    ],
];
