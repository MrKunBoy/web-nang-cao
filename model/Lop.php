<?php

require_once 'model/Database.php';

switch($action){
    case '':
        $sql = "select * from lop_sh";
        $result = mysqli_query($connect,$sql);
        break;
    case 'store':
        $sql = "insert into lop_sh(ten_lop) values ('$class')";
        mysqli_query($connect,$sql);
        break;
    case 'update':
        $sql = "update lop_sh set ten_lop = '$class' where id = '$id'";
        mysqli_query($connect,$sql);
        break;
    case 'edit':
        $sql = "select * from lop_sh where id = '$id'";
        $result = mysqli_query($connect,$sql);
        $each = mysqli_fetch_array($result);
        break;
    case 'delete':
        $sql = "delete from lop_sh where id = '$id'";
        mysqli_query($connect,$sql);
        break;
    default:
        echo 'Sai controller rồi';
    }