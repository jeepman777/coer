<?php
namespace core\lib;
use core\lib\config;

class route
{
    public $control;
    public $action;

    public function __construct()
    {
        //url路由
        $path = $_SERVER['REQUEST_URI'];
        $control = config::getConf('CONTROL', 'route');
        $action = config::getConf('ACTION', 'route');
        if (isset($path) && $path != '/') {
            if ($path == '/index.php') {
                $this->control = $control;
                $this->action = $action;
                return;
            }
            $patharr = explode('/', trim($path, '/'));
            if (isset($patharr[0])) {
                $this->control = $patharr[0];
            }
            unset($patharr[0]);
            if (isset($patharr[1])) {
                $this->action = $patharr[1];
                unset($patharr[1]);
            } else {
                $this->action = config::getConf('ACTION', 'route');
            }

            //获取 url中 get 参数
            $count = count($patharr) + 2;
            $i = 2;
            while ($i < $count) {
                if (isset($patharr[$i + 1])) {
                    $_GET[$patharr[$i]] = $patharr[$i + 1];
                }
                $i = $i + 2;
            }
        } else {
            $this->control = $control;
            $this->action = $action;
        }
    }
}
