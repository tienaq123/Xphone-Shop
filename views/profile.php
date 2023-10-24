<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/showdanhmuc.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    #title_product {
        height: 200px;
        margin-bottom: 40px;
    }

    #title_product h1 {
        padding-top: 0;
        margin-right: 175px;
    }

    #title_product span {
        margin-top: 0;
        margin-bottom: 100px;
    }
</style>

<body>
    <div id="wapper">
        <div id="topbar">
            <a href="#">
                <h2> HỆ THỐNG CỬA HÀNG XPHONE</h2>
            </a>
            <ul>
                <li>
                    <p style="color:red; font-size: 17px;font-weight: bold; margin: 0;">
                        Hello <?php

                                if (isset($_SESSION['ma_kh'])) {
                                    echo $_SESSION['ho_ten'];
                                ?>
                            <a class="active" style="font-weight: normal;" href="?url=logout"> | Logout |</a>
                        <?php } else {
                                    echo "you!";
                        ?>
                            <a class="active" style="font-weight: normal;" href="?url=login"> =>Login<= </a>
                                <?php }
                                ?>
                    </p>
                </li>
                <li><a href="product.php">KIỂM TRA ĐƠN HÀNG</a></li>
                <li><a href="product.php">TIN TỨC</a></li>
                <li><a href="product.php">LIÊN HỆ</a></li>
            </ul>
        </div>
        <header id="header">
            <div id="logo">
                <a href="index.php"> <img src="http://storexphone.com/Upload/ImageDes/images/logo.png" alt="Logo"></a>
            </div>


        </header>

        <div id="title_product">
            <h1>Profile</h1>
            <span><a href="index.php">Trang chủ </a>> Profile</span>
        </div>
        <?php include 'models/db.php';
        $ma_kh = $_SESSION['ma_kh'];
        $sql = "select * from khach_hang where ma_kh = $ma_kh";
        $kq = $conn->query($sql);
        foreach ($kq as $key => $rows) {
        ?>
            <div class="container bootstrap snippets bootdeys">
                <div style="justify-content: center;" class="row">
                    <div class="col-xs-12 col-sm-9">
                        <form class="form-horizontal" method="post">
                            <div class="panel panel-default">
                                <div class="panel-body text-center">
                                    <img width="400px" src="<?php echo $rows['hinh'] ?>" class="img-circle profile-avatar" alt="User avatar">
                                </div>
                            </div>
                            <div class="panel panel-default">

                                <div class="panel-body">

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Họ tên</label>
                                        <div class="col-sm-10">
                                            <input name="ho_ten" type="text" class="form-control" value="<?php echo $rows['ho_ten'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input name="email" type="email" class="form-control" value="<?php echo $rows['email'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Link Ảnh</label>
                                        <div class="col-sm-10">
                                            <input name="hinh" type="text" class="form-control" value="<?php echo $rows['hinh'] ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">

                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Mật khẩu cũ</label>
                                        <div class="col-sm-10">
                                            <input name="mat_khau_cu" type="hidden" class="form-control" value="<?php echo $rows['mat_khau'] ?>">
                                            <input name="mat_khau" type="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Mật khẩu mới</label>
                                        <div class="col-sm-10">
                                            <input name="mat_khau_moi" type="password" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-10 col-sm-offset-2">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" class="btn btn-default">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        <?php } ?>



        <?php include 'views/layouts/footer_xphone.php' ?>
    </div>
</body>

</html>