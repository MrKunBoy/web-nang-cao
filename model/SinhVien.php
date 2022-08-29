<?php

require_once 'model/Connect.php';
require_once 'model/SinhVienObject.php';

class SinhVien{
    public function all()
    {
        $sql = "SELECT sinh_vien.* , lop_sh.ten_lop as ten_lop
        from sinh_vien 
        left join lop_sh on sinh_vien.ma_lop = lop_sh.id";
        $result = (new Connect())->select($sql);

        $arr = [];

        foreach ($result as $row) {
            $object = new SinhVienObject($row);

            $arr[] = $object;
        }

        return $arr;
    }

    public function create($param)
    {
        $object = new SinhVienObject($param);
        $sql = "INSERT INTO sinh_vien(ten_sv,ma_lop,ngay_sinh) 
        VALUES ('".$object->getTen_sv()."','".$object->getMa_lop()."','".$object->getNgay_sinh()."')";
        (new Connect())->execute($sql);

    }

    public function find($id)
    {
        $sql = "select * from sinh_vien where id = '$id'";
        $result = (new Connect())->select($sql);
        $row = mysqli_fetch_array($result);

        return new SinhVienObject($row);
    }

    public function update(array $param)
    {
        $object = new SinhVienObject($param);

        $sql = "UPDATE sinh_vien 
        set ten_sv = '" . $object->getTen_sv() ."', 
        ma_lop = '" . $object->getMa_lop() ."', 
        ngay_sinh = '" . $object->getNgay_sinh() ."' 
        where id = '" . $object->getId() . "'";
        (new Connect())->execute($sql);
    }

    public function destroy($id)
    {
        $sql = "delete from sinh_vien where id = '$id'";
        (new Connect())->execute($sql);
    }
}


