<?php
// kết nối csdl
$connect = mysqli_connect('localhost','root','','web_nang_cao');
mysqli_set_charset($connect,'utf8');

// lấy csdl
$sql = "select * from mon where ten_mon = '$mon'";
// trả về kết quả là 1 mảng
$result = mysqli_query($connect,$sql);
// lấy phần tử đầu tiên
$each = mysqli_fetch_array($result);