<?php
/**
 * Created by PhpStorm.
 * User: cyz
 * Date: 2017/3/6
 * Time: 下午6:49
 */

namespace Think\flysystem;


use League\Flysystem\Filesystem;

class FilesDist
{
    private $filesystem;

    public function __construct(array $config)
    {
        $adapter = new $config['adapter_class']();
        $adapter = $adapter->makeDisk($config);
        $filesystem = new Filesystem($adapter);
        $this->filesystem = $filesystem;
    }

    /**
     * 获取文件内容
     *
     * @param $arrParameter
     * @return bool|false|string
     */
    public function read($arrParameter)
    {
        list($file) = $arrParameter;
        return $this->filesystem->read($file);
    }

    /**
     * 写或更新文件
     *
     * @param $arrParameter
     * @return bool|false|string
     */
    public function put($arrParameter)
    {
        list($file,$contents) = $arrParameter;
        return $this->filesystem->put($file,$contents);
    }

    /**
     * 写文件
     *
     * @param $arrParameter
     * @return bool
     */
    public function write($arrParameter)
    {
        list($file,$contents) = $arrParameter;
        return $this->filesystem->write($file,$contents);
    }

    /**
     * 检查文件是否存在
     *
     * @param $arrParameter
     * @return bool
     */
    public function has($arrParameter)
    {
        list($file) = $arrParameter;
        return $this->filesystem->has($file);
    }

    /**
     * 递归删除目录
     *
     * @param $arrParameter
     * @return bool
     */
    public function deleteDir($arrParameter)
    {
        list($path) = $arrParameter;
        return $this->filesystem->deleteDir($path);
    }
}