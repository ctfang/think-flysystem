<?php
/**
 * Created by PhpStorm.
 * User: cyz
 * Date: 2017/3/6
 * Time: 下午6:42
 */
return [

    'local'=>[
        'adapter_class'=>\Think\flysystem\adapter\Local::class,
        [
            'file' => [
                'public' => 0744,
                'private' => 0700,
            ],
            'dir' => [
                'public' => 0755,
                'private' => 0700,
            ]
        ]
    ],
];