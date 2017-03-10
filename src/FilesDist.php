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
     * @param $file
     * @param $contents
     */
    public function write($file,$contents)
    {
        $this->filesystem->write($file,$contents);
    }

    /**
     * 更新文件
     *
     * @param $file
     * @param $contents
     */
    public function update($file,$contents)
    {
        $this->filesystem->update($file,$contents);
    }

    /**
     * 写或更新文件
     *
     * @param $file
     * @param $contents
     */
    public function put($file,$contents)
    {
        $this->filesystem->put($file,$contents);
    }

    /**
     * 获取文件内容
     *
     * @param $file
     * @return bool|false|string
     */
    public function read($file)
    {
        return $this->filesystem->read($file);
    }

    /**
     * 检查文件是否存在
     *
     * @param $file
     * @return bool
     */
    public function has($file)
    {
        return $this->filesystem->has($file);
    }

    /**
     * 删除文件
     *
     * @param $path
     */
    public function delete($path)
    {
        $this->filesystem->delete($path);
    }

    /**
     * 读取和删除
     *
     * @param $path
     * @return bool|false|string
     */
    public function readAndDelete($path)
    {
        return $this->filesystem->readAndDelete($path);
    }

    /**
     * 重命名
     *
     * @param $path
     */
    public function rename($path)
    {
        $this->filesystem->rename($path);
    }

    /**
     * 复制文件
     *
     * @param $path
     * @param $toPath
     */
    public function copy($path,$toPath)
    {
        $this->filesystem->copy($path,$toPath);
    }

    /**
     * 获取Mimetypes
     *
     * @param $path
     * @return bool|false|string
     */
    public function getMimetype($path)
    {
        return $this->filesystem->getMimetype($path);
    }

    /**
     * 时间戳
     * @param $path
     * @return bool|false|string
     */
    public function getTimestamp($path)
    {
        return $this->filesystem->getMimetype($path);
    }

    /**
     * 获取文件大小
     *
     * @param $path
     * @return bool|false|int
     */
    public function getSize($path)
    {
        return $this->filesystem->getSize($path);
    }

    /**
     * 创建目录
     *
     * @param $path
     * @internal param $arrParameter
     */
    public function createDir($path)
    {
        $this->filesystem->createDir($path);
    }

    /**
     * 递归删除目录
     *
     * @param $path
     * @return bool
     */
    public function deleteDir($path)
    {
        $this->filesystem->deleteDir($path);
    }

}