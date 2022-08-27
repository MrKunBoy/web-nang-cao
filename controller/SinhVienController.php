<?php

switch($action){
    case '':
        require_once 'model/SinhVien.php';
        require_once 'view/sinhvien/index.php';
        break;
    case 'create':
        require_once 'view/sinhvien/create.php';
        break;
    case 'store':
        $ten = $_POST['name'];
        $ma_lop = $_POST['class'];
        $ngay_sinh = $_POST['date'];
        require_once 'model/SinhVien.php';
        header('location:?controller=sinh_vien');
        break;
    case 'update':
        $id = $_POST['id'];
        $ten = $_POST['name'];
        $ma_lop = $_POST['class'];
        $ngay_sinh = $_POST['date'];
        require_once 'model/SinhVien.php';
        header('location:?controller=sinh_vien');
        break;
    case 'edit':
        $id = $_GET['id'];
        require_once 'model/SinhVien.php';
        require_once 'view/sinhvien/update.php';
        break;
    case 'delete':
        $id = $_GET['id'];
        require_once 'model/SinhVien.php';
        header('location:?controller=sinh_vien');
        break;
    default:
        echo 'Sai controller sinh viên rồi';
}
