<?php

namespace Model;

use Zero\Model;

class UserModel extends Model
{
    public function __construct() 
    {
        parent::__construct();
        $this->table = 'user';
        $this->feild = '`name`, `age`';
    }

    public function create($user)
    {
        $this->value = $user;
        $rs = $this->C();
        return $rs;
    }

    public function retrieve($feild, $where)
    {
        $this->feild = $feild;
        $this->where = $where;
        $user = $this->R();
        return $user;
    }

    public function update($upval, $where)
    {
        $this->upval = $upval;
        $this->where = $where;
        $rs = $this->U();
        return $rs;
    }

    public function delete($id)
    {
        $this->id = $id;
        $rs = $this->D();
        return $rs;
    }
}