<?php
/**
 * Created by PhpStorm.
 * User: cyz
 * Date: 2017/3/6
 * Time: 下午6:42
 */
return [

    // 默认驱动
    'default'=>'local',
    // 本地驱动
    'local'=>[
        'adapter_class'=>\Think\flysystem\adapter\Local::class,
        // 跟目录
        'root'=>'./files/',
        // 权限参数
        'permissions'=>[
            'file' => [
                'public' => 0744,
                'private' => 0700,
            ],
            'dir' => [
                'public' => 0755,
                'private' => 0700,
            ]
        ],
        // 目录别名
        'alias'=>[
            'image'=>'image/test/s',
        ],
    ],
];