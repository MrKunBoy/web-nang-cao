<?php

class LopController{
    public function index()
    {
        require_once 'model/Lop.php';
        $arr = (new Lop())->all();
        require_once 'view/lop/index.php';
    }

    public function create()
    {
        
        require_once 'view/lop/create.php';
    }

    public function store()
    {
        require_once 'model/Lop.php';
        (new Lop())->create($_POST);
        header('location:index.php?controller=lop');
    }

    public function edit()
    {
        $id = $_GET['id'];
        require_once 'model/Lop.php';
        $each = (new Lop())->find($id);
        require_once 'view/lop/update.php';
    }

    public function update()
    {
        require_once 'model/Lop.php';
        (new Lop())->update($_POST);
        header('location:index.php?controller=lop');
    }

    public function delete()
    {
        $id = $_GET['id'];
        require_once 'model/Lop.php';
        (new Lop())->destroy($id);
        header('location:index.php?controller=lop');
    }

}

