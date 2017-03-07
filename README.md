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


复制 /vendor/selden1992/think-flysystem/config/flysystem.php 到 CONF_PATH.'extra/flysystem.php'

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

alias目录别名的作用在于快捷更换目录，例如开发阶段，log_alias指向root/log/下，部署阶段更改为 ../../log/

## 其他使用方法和flysystem一致

API
一般用法

写文件

Files::write('path/to/file.txt', 'contents');
更新文件

Files::update('path/to/file.txt', 'new contents');
写或更新文件

Files::put('path/to/file.txt', 'contents');
读取文件

$contents = Files::read('path/to/file.txt');
检查文件是否存在

$exists = Files::has('path/to/file.txt');
注意：这只对文件而不是目录具有一致的行为。在Flysystem中，目录不太重要，它们是隐式创建的，常常被忽略，因为不是每个适配器（文件系统类型）都支持目录。

删除文件

Files::delete('path/to/file.txt');
读取和删除

$contents = Files::readAndDelete('path/to/file.txt');
重命名文件

Files::rename('filename.txt', 'newname.txt');
复制文件

Files::copy('filename.txt', 'duplicate.txt');
获取Mimetypes

$mimetype = Files::getMimetype('path/to/file.txt');
获取时间戳

$timestamp = Files::getTimestamp('path/to/file.txt');
获取文件大小

$size = Files::getSize('path/to/file.txt');
创建目录

Files::createDir('path/to/nested/directory');
当写入更深的路径时，也隐含地指定了目录

Files::write('path/to/file.txt', 'contents');
删除目录

Files::deleteDir('path/to/directory');
上述方法将递归删除目录

注意：Flysystem API使用的所有路径都是相对于适配器根目录的。

