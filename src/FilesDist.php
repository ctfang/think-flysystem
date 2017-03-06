<?php
/**
 * Created by PhpStorm.
 * User: cyz
 * Date: 2017/3/6
 * Time: 下午6:49
 */

namespace Think\flysystem;


class FilesDist
{
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }
}