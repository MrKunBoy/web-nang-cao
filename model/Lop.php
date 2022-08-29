<?php

require_once 'model/Connect.php';
require_once 'model/LopObject.php';

class Lop
{

    public function all()
    {
        $sql = "select * from lop_sh";
        $result = (new Connect())->select($sql);

        $arr = [];

        foreach ($result as $row) {
            $object = new LopObject($row);

            $arr[] = $object;
        }

        return $arr;
    }

    public function create($param)
    {
        $object = new LopObject($param);
        $sql = "insert into lop_sh(ten_lop) values ('" . $object->getTen_lop() . "')";
        (new Connect())->execute($sql);

    }

    public function find($id)
    {
        $sql = "select * from lop_sh where id = '$id'";
        $result = (new Connect())->select($sql);
        $row = mysqli_fetch_array($result);

        return new LopObject($row);
    }

    public function update(array $param)
    {
        $object = new LopObject($param);

        $sql = "update lop_sh set ten_lop = '" . $object->getTen_lop() ."' where id = '" . $object->getId() . "'";
        (new Connect())->execute($sql);
    }

    public function destroy($id)
    {
        $sql = "delete from lop_sh where id = '$id'";
        (new Connect())->execute($sql);
    }
}




