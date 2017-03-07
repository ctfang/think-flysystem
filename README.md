# think-filesystem
think PHP5集成Filesystem


think-filesystem基于 Frank de Jonge 开发的 PHP 包 Flysystem 提供了强大的文件系统抽象。think-filesystem 文件系统集成是中文化和简单化，当然也做了一下本地化封装。

## 安装

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ composer require selden1992/think-flysystem
```

or add

```
"selden1992/think-flysystem": "dev-master"
```

to the `require` section of your `composer.json` file.

## 配置


复制 /Users/cyz/web/tp5/vendor/selden1992/think-flysystem/config/flysystem.php 到 CONF_PATH.'extra/flysystem.php'

```php

<?php
/**
 * 演示配置
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
            'log_alias'=>'log/',
        ],
    ],
    // 其他驱动
    
];

```

## 普通使用


```php

<?php
namespace app\index\controller;

use Think\flysystem\Files;

class Index
{
    public function index()
    {
        // 普通写入
        Files::put('log/test.log',time());
        // 目录别名写入
        Files::alias('log_alias')->put('test.log',time());

        // 普通读取
        Files::read('log/test.log');
        // 目录别名读取
        Files::alias('log_alias')->read('read.log');
    }
}

```

