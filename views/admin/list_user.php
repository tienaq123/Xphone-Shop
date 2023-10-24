<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="./public/css/css.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        button {
            margin-bottom: 50px;
            position: relative;
            display: inline-block;
            cursor: pointer;
            outline: none;
            border: 0;
            vertical-align: middle;
            text-decoration: none;
            font-family: inherit;
            font-size: 15px;
        }

        button.learn-more {
            font-weight: 600;
            color: #382b22;
            text-transform: uppercase;
            padding: 1.25em 2em;
            background: #fff0f0;
            border: 2px solid #b18597;
            border-radius: 0.75em;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            -webkit-transition: background 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1);
            transition: transform 150ms cubic-bezier(0, 0, 0.58, 1), background 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1);
        }

        button.learn-more::before {
            position: absolute;
            content: '';
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #f9c4d2;
            border-radius: inherit;
            -webkit-box-shadow: 0 0 0 2px #b18597, 0 0.625em 0 0 #ffe3e2;
            box-shadow: 0 0 0 2px #b18597, 0 0.625em 0 0 #ffe3e2;
            -webkit-transform: translate3d(0, 0.75em, -1em);
            transform: translate3d(0, 0.75em, -1em);
            transition: transform 150ms cubic-bezier(0, 0, 0.58, 1), box-shadow 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-box-shadow 150ms cubic-bezier(0, 0, 0.58, 1);
        }

        button.learn-more:hover {
            background: #ffe9e9;
            -webkit-transform: translate(0, 0.25em);
            transform: translate(0, 0.25em);
        }

        button.learn-more:hover::before {
            -webkit-box-shadow: 0 0 0 2px #b18597, 0 0.5em 0 0 #ffe3e2;
            box-shadow: 0 0 0 2px #b18597, 0 0.5em 0 0 #ffe3e2;
            -webkit-transform: translate3d(0, 0.5em, -1em);
            transform: translate3d(0, 0.5em, -1em);
        }

        button.learn-more:active {
            background: #ffe9e9;
            -webkit-transform: translate(0em, 0.75em);
            transform: translate(0em, 0.75em);
        }

        button.learn-more:active::before {
            -webkit-box-shadow: 0 0 0 2px #b18597, 0 0 #ffe3e2;
            box-shadow: 0 0 0 2px #b18597, 0 0 #ffe3e2;
            -webkit-transform: translate3d(0, 0, -1em);
            transform: translate3d(0, 0, -1em);
        }
    </style>
</head>

<body>

    <?php include '/xampp/htdocs/support_DAM/Bai_ThiDAM/views/layouts/header_admin.php' ?>
    <main style="display: flex; margin: 40px 80px" class="catalog  mb ">


        <div class="boxleft">
            <h2>Danh sách người dùng</h2>


            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ảnh đại diện</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Vai trò</th>
                        <th scope="col">Band</th>
                        <th scope="col">Role</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM khach_hang";
                    $result = $conn->query($sql);
                    foreach ($result as $key => $row) {

                    ?>
                        <tr>
                            <th scope="row"><?php echo $row['ma_kh'] ?></th>
                            <td><?php echo $row['ho_ten'] ?></td>
                            <td><?php echo $row['email']  ?></td>
                            <td><img width="200px" src="<?php echo $row['hinh'] ?>" alt=""></td>
                            <td><?php echo $row['kich_hoat']  ?></td>
                            <td><?php echo $row['vai_tro']  ?></td>
                            <td class="suaxoa">
                                <form method="post">
                                    <input type="hidden" name="ma_kh" value="<?php echo $row['ma_kh'] ?>">
                                    <button type="submit" name="btn-band">Band</button>
                                </form>
                            </td>
                            <td class="suaxoa">
                                <form method="post">
                                    <input type="hidden" name="ma_kh" value="<?php echo $row['ma_kh'] ?>">
                                    <button type="submit" name="btn-role">Role</button>
                                </form>
                            </td>

                        </tr>

                    <?php } ?>
                </tbody>
            </table>




        </div>

        <div class="boxright">


            <div class="mb">
                <div class="box_title">DANH MỤC</div>
                <div class="box_content2 product_portfolio">

                    <ul>
                        <?php
                        $sql = "SELECT * FROM loai";
                        $result = $conn->query($sql);
                        foreach ($result as $key => $row) {

                        ?>
                            <li><a href=""><?php echo $row['ten_loai'] ?></a></li>
                        <?php }  ?>
                    </ul>

                </div>

            </div>
            <div class="mb">
                <div class="box_title">Danh Sách Người Dùng</div>
                <div class="box_content">
                    <?php
                    $sql = "SELECT * FROM khach_hang";
                    $result = $conn->query($sql);
                    foreach ($result as $key => $row) {

                    ?>
                        <div class="selling_products" style="width:100%;">
                            <p><?php echo $row['ho_ten'] ?></p>
                        </div>
                    <?php }  ?>


                </div>
            </div>
        </div>

    </main>




    </div>
    <!-- <?php include(__DIR__ . '/../layouts/footer.php') ?> -->

</body>
<script>
    function confirmDelete(id) {
        if (confirm("Bạn có chắc chắn muốn band người dùng này?")) {
            window.location.href = "?url=delete-product&id=" + id;
        }
    }
</script>

</html>