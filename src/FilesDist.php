<?php
/**
 * Created by PhpStorm.
 * User: cyz
 * Date: 2017/3/6
 * Time: 下午6:49
 */

namespace Think\flysystem;


use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;

class FilesDist
{
    private $filesystem;

    public function __construct(array $config)
    {
        $adapter = new Local('/runtime/', LOCK_EX, Local::DISALLOW_LINKS, [
            'file' => [
                'public' => 0744,
                'private' => 0700,
            ],
            'dir' => [
                'public' => 0755,
                'private' => 0700,
            ]
        ]);
        $filesystem = new Filesystem($adapter);
        $this->filesystem = $filesystem;
    }

    public function get($fileName)
    {
        return $this->filesystem->read($fileName);
    }
}