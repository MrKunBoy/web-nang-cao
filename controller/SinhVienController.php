<?php

switch($action){
    case '':
        require_once 'model/SinhVien.php';
        $result = sinh_vien_index();
        require_once 'view/sinhvien/index.php';
        break;
    case 'create':
        require_once 'model/Lop.php';
        $lops = lop_index();
        require_once 'view/sinhvien/create.php';
        break;
    case 'store':
        $ten = $_POST['name'];
        $ma_lop = $_POST['class'];
        $ngay_sinh = $_POST['date'];
        require_once 'model/SinhVien.php';
        sinh_vien_store($ten,$ma_lop,$ngay_sinh);
        header('location:index.php?controller=sinh_vien');
        break;
    case 'update':
        $id = $_POST['id'];
        $ten = $_POST['name'];
        $ma_lop = $_POST['class'];
        $ngay_sinh = $_POST['date'];
        require_once 'model/SinhVien.php';
        sinh_vien_update($id,$ten,$ma_lop,$ngay_sinh);
        header('location:index.php?controller=sinh_vien');
        break;
    case 'edit':
        $id = $_GET['id'];
        require_once 'model/Lop.php';
        $lops = lop_index();
        require_once 'model/SinhVien.php';
        $each = sinh_vien_edit($id);
        require_once 'view/sinhvien/update.php';
        break;
    case 'delete':
        $id = $_GET['id'];
        require_once 'model/SinhVien.php';
        sinh_vien_delete($id);
        header('location:index.php?controller=sinh_vien');
        break;
    default:
        echo 'Sai controller sinh viên rồi';
}
