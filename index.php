<?php

//php > 7.
$controller = $_GET['controller'] ?? '';

$action = $_GET['action'] ?? '';

//php < 7.
// if(!empty($_GET['controller'])){
//     $controller = $_GET['controller'];
// }

switch($controller){
    case '':
        require_once 'controller/Controller.php';
        break;
    case 'sinh_vien':
        require_once 'controller/SinhVienController.php';
        break;
    case 'lop':
        require_once 'controller/LopController.php';
        break;
    default:
        echo 'Sai controller rồi';
}
