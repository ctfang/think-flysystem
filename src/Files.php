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

    private static $_disk_list;
    /**
     * 驱动选择
     *
     * @param string $fileName
     */
    public static function disk($fileName='../config/flysystem.php')
    {
        if( isset(self::$_disk_list) ){

        }
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
        return self::disk()->$name($arguments);
    }
}