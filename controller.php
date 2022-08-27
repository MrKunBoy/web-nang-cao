<?php

$action = '';

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
switch ($action) {
    case '':
        require_once 'model.php';
        require_once 'view/index.php';
        break;
    case 'create':
        require_once 'view/create.php';
        break;
    case 'store':
        $name = $_POST['name'];
        $class = $_POST['class'];
        $date = $_POST['date'];
        require_once 'model.php';
        header('location:index.php');
        break;
    case 'show':
        $id = $_GET['id'];
        require_once 'model.php';
        require_once 'view/update.php';
        break;
    case 'update':
        $id = $_POST['id'];
        $name = $_POST['name'];
        $class = $_POST['class'];
        $date = $_POST['date'];
        require_once 'model.php';
        header('location:index.php');
        break;
    case 'delete':
        $id = $_GET['id'];
        require_once 'model.php';
        header('location:index.php');
        break;
    default:
        echo 'Phá cái gì vậy :)))';
}
