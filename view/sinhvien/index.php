<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

        a {
            text-decoration: none;
        }

        .update {
            color: blue;
        }

        .delete {
            color: red;
        }

        .create {
            padding: 10px 20px;
            display: block;
            background-color: #0081B3;
            color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }

        .menu {
            padding: 10px 20px;
            display: block;
            background-color: #0081B3;
            color: #ffffff;
            border-radius: 5px;
            text-align: center;
            margin-right: 10px;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>

</body>

</html>
<h1>Danh sách sinh viên</h1>
<div style="display: flex; margin-bottom: 10px;">
    <a class="menu" href="?controller=base">Menu</a>
    <a class="create" href="?controller=sinh_vien&action=create">Thêm sinh viên</a>
</div>
<table id="customers">
    <tr>
        <th>
            Mã
        </th>
        <th>
            Tên
        </th>
        <th>
            Lớp sinh hoạt
        </th>
        <th>
            Ngày sinh
        </th>
        <th>
            Thao tác
        </th>
    </tr>
    <?php foreach ($result as $each) { ?>
        <tr>
            <td>
                <?php echo $each->getId() ?>
            </td>
            <td>
                <?php echo $each->getTen_sv() ?>
            </td>
            <td>
                <?php echo $each->getTen_lop() ?>
            </td>
            <td>
                <?php echo $each->getNgay_sinh() ?>
            </td>
            <td>
                <a class="update" href="?controller=sinh_vien&action=edit&id=<?php echo $each->getId() ?>">Update</a>&nbsp;
                <a class="delete" href="?controller=sinh_vien&action=delete&id=<?php echo $each->getId() ?>">Delete</a>
            </td>
        </tr>

    <?php } ?>
</table>