<?php
/**
 * Created by PhpStorm.
 * User: cyz
 * Date: 2017/3/8
 * Time: 上午11:58
 */

namespace Think\flysystem\adapter;


use Think\flysystem\inter\AdapterInterface;
use League\Flysystem\Sftp\SftpAdapter;

class Sftp implements AdapterInterface
{

    /**
     * 生产Filesystem对象
     *
     * @param array $arr
     * @return mixed
     */
    public function makeDisk(array $arr)
    {

        $filesystem = new SftpAdapter(
            $arr['permissions']
        );

        return $filesystem;
    }
}