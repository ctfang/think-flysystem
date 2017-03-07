<?php
/**
 * Created by PhpStorm.
 * User: cyz
 * Date: 2017/3/7
 * Time: 上午9:25
 */

namespace Think\flysystem\adapter;


use Think\flysystem\AdapterInterface;

/**
 * 本地配置驱动
 *
 * @package Think\flysystem\adapter
 */
class Local implements AdapterInterface
{

    /**
     * 对配置信息处理
     *
     * @param array $arr
     * @return mixed
     */
    public function setConfig(array $arr)
    {
        // TODO: Implement setConfig() method.
    }

    /**
     * 生产Filesystem对象
     *
     * @param array $arr
     * @return mixed
     */
    public function makeDisk(array $arr)
    {
        // TODO: Implement makeDisk() method.
    }
}