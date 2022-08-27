<?php

require_once 'model/Database.php';

switch($action){
    case '':
        $sql = "select * from sinh_vien";
        $result = mysqli_query($connect,$sql);
        break;
    case 'store':
        $sql = "INSERT INTO sinh_vien(ten_sv,ma_lop,ngay_sinh) VALUES ('$ten','$ma_lop','$ngay_sinh')";
        mysqli_query($connect,$sql);
        break;
    case 'update':
        $sql = "update sinh_vien set ten_sv = '$ten', ma_lop = '$ma_lop', ngay_sinh = '$ngay_sinh' where id = '$id'";
        mysqli_query($connect,$sql);
        break;
    case 'edit':
        $sql = "select * from sinh_vien where id = '$id'";
        $result = mysqli_query($connect,$sql);
        $each = mysqli_fetch_array($result);
        break;
    case 'delete':
        $sql = "delete from sinh_vien where id = '$id'";
        mysqli_query($connect,$sql);
        break;
    }