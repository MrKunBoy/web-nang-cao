<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/demo2.css" />
    <title>Thêm sinh viên</title>
    <style>
        html {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background: linear-gradient(#c8d1e0, #ebeff3);
        }

        label {
            width: 125px;
            color: black;
            display: inline-block;
            font-weight: 500;
            text-align: left;
        }

        .ip_sm {
            /* margin-left: 130px; */
            margin-top: 10px;
            width: 250px;
            background-color: rgb(255, 153, 0);
            border: 2px solid rgb(255, 123, 0);
            font-size: 16px;
            padding-top: 5px;
            padding-bottom: 5px;
            border-radius: 2px;
            color: white;
            font-weight: 550;
        }

        .ip_text, .select {
            width: 250px;
            font-size: 16px;
            color: blue;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .select {
            border: 1px solid rgb(118, 118, 118);
            border-radius: 3px;
            width: 258px;
        }

        h1 {
            margin: 0;
            color: white;
            font-family: 'Courier New', Courier, monospace;
        }

        .m-bt-2 {
            margin-bottom: 2px;
        }

        .m-bt-5 {
            margin-bottom: 5px;
        }

        .main {
            margin: 10px auto;
            display: flex;
        }

        .main-chil {
            width: 50%;
            background-color: rgb(193, 241, 160);
            text-align: center;
            margin: auto;
            padding: 10px;
        }

        #input_arr {
            color: blue;
            font-size: 16px;
        }

        .form-top {
            background-color: rgb(11, 130, 134);
            padding: 10px;
        }

        .form-center {
            background-color: rgb(25, 226, 233);
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="main-chil">
            <form action="?controller=sinh_vien&action=store" method="post">
                <div class="form-top m-bt-2">
                    <h1>Thêm sinh viên</h1>
                </div>
                <div class="form-center m-bt-2">
                    <div class="m-bt-5">
                        <label>Tên sinh viên:</label>
                        <input class="ip_text" type="text" name="ten_sv" required />
                    </div>
                    <div class="m-bt-5">
                        <label>Lớp sinh hoạt:</label>
                        <select name="ma_lop" class="select">
                            <?php foreach($lops as $lop){ ?>
                            <option value="<?php echo $lop->getId() ?>"><?php echo $lop->getTen_lop() ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="m-bt-5">
                        <label>Ngày sinh:</label>
                        <input class="ip_text" type="date" name="ngay_sinh" required />
                    </div>

                    <label for=""></label>
                    <input class="ip_sm" type="submit" value="Thêm sinh viên">
                </div>

            </form>
        </div>
    </div>
</body>

</html>