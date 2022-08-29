<?php

class SinhVienController
{
    public function index()
    {
        require_once 'model/SinhVien.php';
        $result = (new SinhVien())->all();
        require_once 'view/sinhvien/index.php';
    }

    public function create()
    {
        require_once 'model/Lop.php';
        $lops = (new Lop())->all();
        require_once 'view/sinhvien/create.php';
    }

    public function store()
    {
        require_once 'model/SinhVien.php';
        (new SinhVien())->create($_POST);
        header('location:index.php?controller=sinh_vien');
    }

    public function edit()
    {
        $id = $_GET['id'];
        require_once 'model/SinhVien.php';
        $each = (new SinhVien())->find($id);
        require_once 'model/Lop.php';
        $lops = (new Lop())->all();
        require_once 'view/sinhvien/update.php';
    }

    public function update()
    {
        require_once 'model/SinhVien.php';
        (new SinhVien())->update($_POST);
        header('location:index.php?controller=sinh_vien');
    }

    public function delete()
    {
        $id = $_GET['id'];
        require_once 'model/SinhVien.php';
        (new SinhVien())->destroy($id);
        header('location:index.php?controller=sinh_vien');
    }
}


//     case 'update':
//         $id = $_POST['id'];
//         $ten = $_POST['name'];
//         $ma_lop = $_POST['class'];
//         $ngay_sinh = $_POST['date'];
//         require_once 'model/SinhVien.php';
//         sinh_vien_update($id,$ten,$ma_lop,$ngay_sinh);
//         header('location:index.php?controller=sinh_vien');
//         break;
//     case 'edit':
//         $id = $_GET['id'];
//         require_once 'model/Lop.php';
//         $lops = lop_index();
//         require_once 'model/SinhVien.php';
//         $each = sinh_vien_edit($id);
//         require_once 'view/sinhvien/update.php';
//         break;
//     case 'delete':
//         $id = $_GET['id'];
//         require_once 'model/SinhVien.php';
//         sinh_vien_delete($id);
//         header('location:index.php?controller=sinh_vien');
//         break;
//     default:
//         echo 'Sai controller sinh viên rồi';
// }
