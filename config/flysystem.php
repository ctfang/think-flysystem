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
            'image'=>'image/user/',
        ],
    ],
    // ftp 扩展
    'ftp'=>[
        'adapter_class'=>\Think\flysystem\adapter\Ftp::class,
        // 权限参数
        'permissions'=>[
            'host' => 'ftp.example.com',
            'username' => 'username',
            'password' => 'password',

            /** optional config settings */
            'port' => 21,
            'root' => '/path/to/root',
            'passive' => true,
            'ssl' => true,
            'timeout' => 30,
        ],
        // 目录别名
        'alias'=>[
            'image'=>'image/user/',
        ],
    ],
    // sftp 扩展
    'ftp'=>[
        'adapter_class'=>\Think\flysystem\adapter\Sftp::class,
        // 权限参数
        'permissions'=>[
            'host' => 'example.com',
            'port' => 21,
            'username' => 'username',
            'password' => 'password',
            'privateKey' => 'path/to/or/contents/of/privatekey',
            'root' => '/path/to/root',
            'timeout' => 10,
        ],
        // 目录别名
        'alias'=>[
            'image'=>'image/user/',
        ],
    ],
];