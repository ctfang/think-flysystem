<?php
/**
 * Created by PhpStorm.
 * User: cyz
 * Date: 2017/3/7
 * Time: 上午9:26
 */

namespace Think\flysystem\inter;


interface AdapterInterface
{
    /**
     * 生产Filesystem对象
     *
     * @param array $arr
     * @return mixed
     */
    public function makeDisk(array $arr);
}