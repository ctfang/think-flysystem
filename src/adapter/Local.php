<?php
/**
 * Created by PhpStorm.
 * User: cyz
 * Date: 2017/3/7
 * Time: 上午9:25
 */

namespace Think\flysystem\adapter;
use Think\flysystem\inter\AdapterInterface;


/**
 * 本地配置驱动
 *
 * @package Think\flysystem\adapter
 */
class Local implements AdapterInterface
{

    /**
     * 生产Filesystem对象
     *
     * @param array $arr
     * @return mixed
     */
    public function makeDisk(array $arr)
    {
        if ( !is_dir($arr['root']) ){
            mkdir($arr['root'],0777,true);
            is_dir($arr['root']) or die($arr['root'].'不能写');
        }
        $adapter = new \League\Flysystem\Adapter\Local($arr['root'], LOCK_EX, \League\Flysystem\Adapter\Local::DISALLOW_LINKS, [
            'file' => [
                'public' => 0744,
                'private' => 0700,
            ],
            'dir' => [
                'public' => 0755,
                'private' => 0700,
            ]
        ]);
        return $adapter;
    }
}