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
    public $config;
    private $filesystem;

    public function __construct(array $config)
    {
        $this->config   = $config;
        $adapter        = new $config['adapter_class']();
        $adapter        = $adapter->makeDisk($config);
        $filesystem     = new Filesystem($adapter);
        $this->filesystem = $filesystem;
    }

    /**
     * 写文件
     *
     * @param $arrParameter
     */
    public function write($arrParameter)
    {
        list($file,$contents) = $arrParameter;
        $this->filesystem->write($file,$contents);
    }

    /**
     * 更新文件
     *
     * @param $arrParameter
     */
    public function update($arrParameter)
    {
        list($file,$contents) = $arrParameter;
        $this->filesystem->update($file,$contents);
    }

    /**
     * 写或更新文件
     *
     * @param $arrParameter
     */
    public function put($arrParameter)
    {
        list($file,$contents) = $arrParameter;
        $this->filesystem->put($file,$contents);
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
     * 删除文件
     *
     * @param $arrParameter
     */
    public function delete($arrParameter)
    {
        list($path) = $arrParameter;
        $this->filesystem->delete($path);
    }

    /**
     * 读取和删除
     *
     * @param $arrParameter
     * @return bool|false|string
     */
    public function readAndDelete($arrParameter)
    {
        list($path) = $arrParameter;
        return $this->filesystem->readAndDelete($path);
    }

    /**
     * 重命名
     *
     * @param $arrParameter
     */
    public function rename($arrParameter)
    {
        list($path) = $arrParameter;
        $this->filesystem->rename($path);
    }

    /**
     * 复制文件
     *
     * @param $arrParameter
     */
    public function copy($arrParameter)
    {
        list($path,$toPath) = $arrParameter;
        $this->filesystem->copy($path,$toPath);
    }

    /**
     * 获取Mimetypes
     *
     * @param $arrParameter
     * @return bool|false|string
     */
    public function getMimetype($arrParameter)
    {
        list($path) = $arrParameter;
        return $this->filesystem->getMimetype($path);
    }

    /**
     * 获取文件大小
     *
     * @param $arrParameter
     * @return bool|false|int
     */
    public function getSize($arrParameter)
    {
        list($path) = $arrParameter;
        return $this->filesystem->getSize($path);
    }

    /**
     * 创建目录
     *
     * @param $arrParameter
     */
    public function createDir($arrParameter)
    {
        list($path) = $arrParameter;
        $this->filesystem->createDir($path);
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
        $this->filesystem->deleteDir($path);
    }

}