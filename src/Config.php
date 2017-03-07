<?php
/**
 * Created by PhpStorm.
 * User: cyz
 * Date: 2017/3/6
 * Time: 下午6:41
 */

namespace Think\flysystem;


class Config
{
    private static $config;

    /**
     * 设置配置
     *
     * @param array $config
     */
    public static function setConfig(array $config)
    {
        self::$config = $config;
    }

    /**
     * 获取驱动配置
     *
     * @param $diskType
     */
    public static function getConfig($diskType)
    {
        if( !isset(self::$config) ){
            self::$config = include self::filePath();
        }
        return self::$config[$diskType];
    }

    /**
     * 获取默认配置地址
     *
     * @return string
     */
    public static function filePath()
    {
        $fileName = CONF_PATH.'extra/flysystem.php';
        if( !file_exists($fileName) ){
            copy(dirname(__DIR__).'/config/flysystem.php',$fileName);
        }
        return $fileName;
    }
}