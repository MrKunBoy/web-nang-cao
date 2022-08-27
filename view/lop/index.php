<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách lớp</title>
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
            padding: 10px 10px;
            margin-bottom: 10px;
            display: block;
            background-color: #0081B3;
            color: #ffffff;
            border-radius: 5px;
            width: 10%;
            text-align: center;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>

</body>

</html>
<h1>Danh sách lớp</h1>

<a class="create" href="?controller=lop&action=create">Thêm lớp sinh hoạt</a>

<table id="customers">
    <tr>
        <th>
            Mã
        </th>
        <th>
            Tên lớp
        </th>
        <th>
            Thao tác
        </th>
    </tr>
    <?php foreach ($result as $each) { ?>
        <tr>
            <td>
                <?php echo $each['id'] ?>
            </td>
            <td>
                <?php echo $each['ten_lop'] ?>
            </td>
            <td>
                <a class=update" href="?controller=lop&action=edit&id=<?php echo $each['id'] ?>">Update</a>&nbsp;
                <a class="delete" href="?controller=lop&action=delete&id=<?php echo $each['id'] ?>">Delete</a>
            </td>
        </tr>

    <?php } ?>
</table>