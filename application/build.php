<?php
/**
 * Created by PhpStorm.
 * User: tegic
 * Date: 16/11/18
 * Time: 上午9:35
 */
return [
    // 生成运行时目录
    '__file__' => ['common.php'],

    // 定义index模块的自动生成
    'api'    => [
        '__file__'   => ['common.php'],
        '__dir__'    => ['controller', 'model', 'view'],
        'controller' => ['Index', ],
        'model'      => [],
        'view'       => ['index/index'],
    ],
    // 。。。 其他更多的模块定义
];