<?php

require_once 'model/Database.php';

function sinh_vien_index()
{
    $connect = connect();
    $sql = "SELECT sinh_vien.* , lop_sh.ten_lop as ten_lop
    from sinh_vien 
    left join lop_sh on sinh_vien.ma_lop = lop_sh.id";
    $result = mysqli_query($connect,$sql);
    mysqli_close($connect);

    return $result;
}


function sinh_vien_store($ten,$ma_lop,$ngay_sinh)
{
    $connect = connect();
    $sql = "INSERT INTO sinh_vien(ten_sv,ma_lop,ngay_sinh) VALUES ('$ten','$ma_lop','$ngay_sinh')";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
}

function sinh_vien_edit($id)
{
    $connect = connect();
    $sql = "select * from sinh_vien where id = '$id'";
    $result = mysqli_query($connect,$sql);
    $each = mysqli_fetch_array($result);
    mysqli_close($connect);

    return $each;
}

function sinh_vien_update($id,$ten,$ma_lop,$ngay_sinh)
{
    $connect = connect();
    $sql = "UPDATE sinh_vien set ten_sv = '$ten', ma_lop = '$ma_lop', ngay_sinh = '$ngay_sinh' where id = '$id'";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
}

function sinh_vien_delete($id)
{
    $connect = connect();
    $sql = "delete from sinh_vien where id = '$id'";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
}
