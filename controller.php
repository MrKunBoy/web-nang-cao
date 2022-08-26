
<?php

/* 
 - kiểm tra xem gọi món gì
*/

if (empty($_GET['mon'])) {
    // chưa gọi món thì ở lại trang menu
    include 'menu.php';
}else{
    // gọi được món truyền đến mdel xử lý
    $mon = $_GET['mon'];
    // kết nối cơ sở dữ liệu lấy món theo $mon
    include 'model.php';
    include 'dia.php';
}