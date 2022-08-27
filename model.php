<?php

$connect = mysqli_connect('localhost', 'root', '', 'web_nang_cao');
mysqli_set_charset($connect, 'utf8');



switch ($action) {
    case '':
        $sql = "SELECT * FROM sinh_vien";
        $result = mysqli_query($connect, $sql);
        break;
    case 'store':
        $sql = "INSERT INTO sinh_vien(ten_sv,lop_sh,ngay_sinh) VALUES('$name','$class','$date')";
        mysqli_query($connect, $sql);
        break;
    case 'show':
        $sql = "SELECT * FROM sinh_vien where id = $id";
        $result = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($result);
        break;
    case 'update':
        $sql = "UPDATE sinh_vien
        SET ten_sv = '$name', lop_sh = '$class', ngay_sinh = '$date'
        WHERE id = '$id'";
        mysqli_query($connect, $sql);
        break;
    case 'delete':
        $sql = "DELETE FROM sinh_vien
        WHERE id = '$id'";
        mysqli_query($connect, $sql);
        break;
}

mysqli_close($connect);
