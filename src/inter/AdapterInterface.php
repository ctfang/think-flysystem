<?php
/**
 * Created by PhpStorm.
 * User: cyz
 * Date: 2017/3/7
 * Time: 上午9:26
 */

namespace Think\flysystem;


interface AdapterInterface
{
    /**
     * 对配置信息处理
     *
     * @param array $arr
     * @return mixed
     */
    public function setConfig(array $arr);

    /**
     * 生产Filesystem对象
     *
     * @param array $arr
     * @return mixed
     */
    public function makeDisk(array $arr);
}