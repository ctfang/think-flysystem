<?php
/**
 * Created by PhpStorm.
 * User: cyz
 * Date: 2017/3/6
 * Time: 下午6:41
 */

namespace Think\flysystem;


class Files
{

    /**
     * 驱动列表
     *
     * @var
     */
    private static $_disk_list;

    /**
     * 驱动选择
     *
     * @param string $diskType
     * @return Container
     */
    public static function disk($diskType)
    {
        $config = Config::getConfig($diskType);
        return new Container(new FilesDist($config));
    }

    /**
     * 获取对象
     *
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::disk( Config::defaultDisk() )->$name($arguments);
    }

    /**
     * 目录别名
     *
     * @param $arguments
     * @return mixed
     */
    public static function alias($arguments)
    {
        return self::disk( Config::defaultDisk() )->alias($arguments);
    }
}