<?php

namespace app\control;
use core\coer;
use core\lib\model;

class index extends coer
{
    public function index()
    {
        //PDO 写法
//        $model = new \core\lib\model();
//        $sql = 'select * from bb';
//        $result = $model->query($sql);  //查询数据库
//        p($result->fetchAll());

        //medoo 写法
//        $model = new \app\model\user();
//        $result = $model -> lists();
//        $setOne = $model -> setOne('7', [
//            'bb_name' => 'setOne',
//            'bb_pd' => 'setpd'
//        ]);
//        $insertData = $model -> insertData([
//            'bb_name' => 'insert',
//            'bb_pd' => 'sinetepd',
//            'date' => date('Y-m-d')
//        ]);
        $this -> assign('data', 'input');
        $this -> display('index/index');
    }
}
