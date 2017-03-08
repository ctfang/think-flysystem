<?php
/**
 * Created by PhpStorm.
 * User: cyz
 * Date: 2017/3/8
 * Time: 上午11:54
 */

namespace Think\flysystem\adapter;


use Think\flysystem\inter\AdapterInterface;
use League\Flysystem\Adapter\Ftp as Adapter;

class Ftp implements AdapterInterface
{

    /**
     * 生产Filesystem对象
     *
     * @param array $arr
     * @return mixed
     */
    public function makeDisk(array $arr)
    {
        $filesystem = new Adapter(
            $arr['permissions']
        );

        return $filesystem;
    }
}