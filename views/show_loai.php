<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/showdanhmuc.css">
</head>

<body>
    <div id="wapper">
        <?php include 'layouts/header_user.php' ?>

        <div id="title_product">
            <h1>PRODUCT</h1>
            <span><a href="index.php">Trang chủ </a>> Product</span>
        </div>


        <?php include 'models/db.php';
        if (isset($_GET['ma_loai'])) {
            $ma_loai = $_GET['ma_loai'];
            $sqldanhmuc = "select * from hang_hoa where ma_loai='$ma_loai'";
            $kqdanhmuc = $conn->query($sqldanhmuc)->fetch();
        }
        ?>

        <!--  -->
        <h1 id="h1_content">
            <?php include 'models/db.php';
            $sql = "select * from loai where ma_loai='$ma_loai'";
            $kq = $conn->query($sql);
            foreach ($kq as $key => $rows) {
            ?>
                <h1 style="text-align: center; font-size: 40px"><?php echo $rows['ten_loai']; ?></h1>

            <?php
            }
            ?>

        </h1>
        <!--  -->

        <section id="content">
            <?php 'models/db.php';
            $sql = "select * from hang_hoa where ma_loai='$ma_loai' and deleted = 1";
            $kq = $conn->query($sql);
            foreach ($kq as $key => $rows) {
            ?>
                <article id="item_content">
                    <a href="?url=chitietsanpham&ma_hh=<?php echo $rows['ma_hh'] ?>">
                        <img src="<?php echo $rows['hinh'] ?>" alt="">
                        <h5><?php echo $rows['ten_hh'] ?></h5>
                        <div class="price">
                            <div class="old-price">
                                <p><?php echo number_format($rows['don_gia'] * ($rows['giam_gia']))  ?>đ</p>
                            </div>
                            <div class="new-price">
                                <p><?php echo number_format($rows['don_gia'])  ?>đ</p>
                            </div>
                        </div>
                    </a>
                </article>
            <?php
            }
            ?>
        </section>



        <?php include 'views/layouts/footer_xphone.php' ?>
    </div>
</body>

</html>