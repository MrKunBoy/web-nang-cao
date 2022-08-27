<?php

require_once 'model/Database.php';

function lop_index()
{
    $connect = connect();
    $sql = "select * from lop_sh";
    $result = mysqli_query($connect,$sql);
    mysqli_close($connect);

    return $result;
}

function lop_store($class)
{
    $connect = connect();
    $sql = "insert into lop_sh(ten_lop) values ('$class')";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
}

function lop_update($class, $id)
{
    $connect = connect();
    $sql = "update lop_sh set ten_lop = '$class' where id = '$id'";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
}

function lop_edit($id)
{
    $connect = connect();
    $sql = "select * from lop_sh where id = '$id'";
    $result = mysqli_query($connect,$sql);
    $each = mysqli_fetch_array($result);
    mysqli_close($connect);

    return $each;
}

function lop_delete($id)
{
    $connect = connect();
    $sql = "delete from lop_sh where id = '$id'";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
}
