<?php

switch($action){
    case '':
        require_once 'model/Lop.php';
        $result = lop_index();
        require_once 'view/lop/index.php';
        break;
    case 'create':
        require_once 'view/lop/create.php';
        break;
    case 'store':
        $class = $_POST['name_class'];
        require_once 'model/Lop.php';
        lop_store($class);
        header('location:index.php?controller=lop');
        break;
    case 'update':
        $id = $_POST['id'];
        $class = $_POST['name_class'];
        require_once 'model/Lop.php';
        lop_update($class, $id);
        header('location:index.php?controller=lop');
        break;
    case 'edit':
        $id = $_GET['id'];
        require_once 'model/Lop.php';
        $each = lop_edit($id);
        require_once 'view/lop/update.php';
        break;
    case 'delete':
        $id = $_GET['id'];
        require_once 'model/Lop.php';
        lop_delete($id);
        header('location:index.php?controller=lop');
        break;
    default:
        echo 'Sai controller lớp rồi';
        break;
}
