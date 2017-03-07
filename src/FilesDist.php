<?php
/**
 * Created by PhpStorm.
 * User: cyz
 * Date: 2017/3/6
 * Time: 下午6:49
 */

namespace Think\flysystem;


use League\Flysystem\Filesystem;

class FilesDist
{
    private $filesystem;

    public function __construct(array $config)
    {
        $adapter = $config['adapter_class'];
        $adapter = $adapter->makeDisk($config);
        $filesystem = new Filesystem($adapter);
        $this->filesystem = $filesystem;
    }

    public function get($fileName)
    {
        return $this->filesystem->read($fileName);
    }
}