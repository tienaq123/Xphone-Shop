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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
            <h2 style="margin-bottom: 30px; text-align:center">Thống kê sản phẩm theo danh mục</h2>


            <table class="table">
                <thead>
                    <tr>
                        <th style="text-align: center;" scope="col">Mã loại</th>
                        <th style="text-align: center;" scope="col">Tên loại</th>
                        <th style="text-align: center;" scope="col">Số lượng SP</th>
                        <th style="text-align: center;" scope="col">Giá nhỏ nhất</th>
                        <th style="text-align: center;" scope="col">Giá lớn nhất</th>
                        <th style="text-align: center;" scope="col">Giá trung bình</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT l.ma_loai, l.ten_loai, COUNT(h.ma_hh) AS so_luong, 
                    MIN(h.don_gia) AS gia_nho_nhat, MAX(h.don_gia) AS gia_lon_nhat, 
                    AVG(h.don_gia) AS gia_trung_binh
             FROM loai AS l
             LEFT JOIN hang_hoa AS h ON l.ma_loai = h.ma_loai
             GROUP BY l.ma_loai, l.ten_loai";

                    $result = $conn->query($sql);
                    foreach ($result as $key => $row) {

                    ?>
                        <tr>
                            <th style="text-align: center;" scope="row"><?php echo $row['ma_loai'] ?></th>
                            <td style="text-align: center;"><?php echo $row['ten_loai'] ?></td>
                            <td style="text-align: center;"><?php echo $row['so_luong']  ?></td>
                            <td style="text-align: center;"><?php echo number_format($row['gia_nho_nhat'])   ?> đ</td>
                            <td style="text-align: center;"><?php echo number_format($row['gia_lon_nhat'])   ?> đ</td>
                            <td style="text-align: center;"><?php echo number_format($row['gia_trung_binh'])   ?> đ</td>

                        </tr>

                    <?php } ?>
                </tbody>
            </table>




        </div>

        <div class="boxright">

            <h2 style="text-align:center">Biểu đồ</h2>
            <div>
                <canvas id="myChart"></canvas>
            </div>


        </div>

    </main>




    </div>
    <?php include(__DIR__ . '/../layouts/footer.php') ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Đảm bảo rằng bạn đã lấy dữ liệu từ cơ sở dữ liệu trước
    <?php
    $sql = "SELECT loai.ten_loai, COUNT(hang_hoa.ma_hh) as so_luong
            FROM loai
            LEFT JOIN hang_hoa ON loai.ma_loai = hang_hoa.ma_loai
            GROUP BY loai.ten_loai";
    $loai = $conn->query($sql);
    $sql = "SELECT loai.ten_loai, COUNT(hang_hoa.ma_hh) as so_luong
            FROM loai
            LEFT JOIN hang_hoa ON loai.ma_loai = hang_hoa.ma_loai
            GROUP BY loai.ten_loai";
    $so_luong = $conn->query($sql);
    ?>

    function confirmDelete(id) {
        if (confirm("Bạn có chắc chắn muốn xóa SP này?")) {
            window.location.href = "?url=delete-product&id=" + id;
        }
    }

    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: [<?php
                        // Lặp qua kết quả để lấy tên danh mục
                        foreach ($loai as $key => $row) {
                            echo "'" . $row['ten_loai'] . "', ";
                        }
                        ?>],
            datasets: [{
                // label: '# of Votes',
                data: [<?php
                        // Lặp qua kết quả để lấy số lượng sản phẩm
                        foreach ($so_luong as $key => $row) {
                            echo $row['so_luong'] . ", ";
                        }
                        ?>],
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                ],
                hoverOffset: 4,
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>


</html>