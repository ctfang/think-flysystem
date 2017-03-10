<?php
/**
 * Created by PhpStorm.
 * User: cyz
 * Date: 2017/3/7
 * Time: 下午2:03
 */

namespace Think\flysystem;


class Container
{
    public $FilesDist;

    protected $alias;

    public function __construct(FilesDist $FilesDist)
    {
        $this->FilesDist = $FilesDist;
    }

    /**
     * 自动调用
     *
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        if($this->alias){
            $arguments[0] = $this->alias.$arguments[0];
        }
        return call_user_func_array(array($this->FilesDist, $name), $arguments);
    }

    /**
     * 目录别名
     *
     * @param $name
     * @return mixed
     */
    public function alias($name)
    {
        $config = $this->FilesDist->config;
        if(isset($config['alias'][$name])){
            $this->alias = $config['alias'][$name];
        }else{
            $this->alias = $name;
        }
        return $this;
    }
}