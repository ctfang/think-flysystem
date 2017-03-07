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
     * @param string $fileName
     */
    public static function disk($fileName)
    {
        if( !isset(self::$_disk_list[$fileName]) ){
            if( !file_exists($fileName) ){
                $fileName2 = CONF_PATH.'/'.$fileName;
                if( !file_exists($fileName) ){
                    die($fileName.' 文件系统配置-不存在');
                }
                $fileName = $fileName2;
            }
            self::$_disk_list[$fileName] = new FilesDist(require_once $fileName);
        }
        return self::$_disk_list[$fileName];
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