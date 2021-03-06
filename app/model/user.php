<?php
/**
 * Created by PhpStorm.
 * User: qiuzhiwei
 * Date: 2017/8/17
 * Time: 10:40
 */

namespace app\model;
use core\lib\model;

class user extends model
{
    public $table = 'user';

    //获取数据库数据
    public function lists()
    {
        $result = $this -> select($this -> table, '*');
        return $result;
    }

    //插入数据
    public function insertData($data)
    {
        $result = $this -> insert($this -> table, $data);
        return $result;
    }

    //获取单条数据
    public function getOne($name)
    {
        $result = $this -> get($this -> table, '*', [
            'username' => $name
        ]);
        return $result;
    }

    //更新单条数据
    public function setOne($name, $data)
    {
        $result = $this -> update($this -> table, $data, [
            'username' => $name
        ]);
        return $result;
    }

    //删除单条数据
    public function delOne($id)
    {
        $result = $this -> delete($this -> table, [
            'bb_id' => $id
        ]);
        return $result;
    }
}