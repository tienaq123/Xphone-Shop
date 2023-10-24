<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="public/css/detail.css">
</head>
<style>
    #login {
        display: none;
    }

    .login,
    .logout {
        position: absolute;
        top: -3px;
        right: 0;
    }

    .page-header {
        position: relative;
    }

    .reviews {
        color: #555;
        font-weight: bold;
        margin: 10px auto 20px;
    }

    .notes {
        color: #999;
        font-size: 12px;
    }

    .media .media-object {
        max-width: 120px;
    }

    .media-body {
        position: relative;
    }

    .media-date {
        position: absolute;
        right: 25px;
        top: 25px;
    }

    .media-date li {
        padding: 0;
    }

    .media-date li:first-child:before {
        content: '';
    }

    .media-date li:before {
        content: '.';
        margin-left: -2px;
        margin-right: 2px;
    }

    .media-comment {
        margin-bottom: 20px;
    }

    .media-replied {
        margin: 0 0 20px 50px;
    }

    .media-replied .media-heading {
        padding-left: 6px;
    }

    .btn-circle {
        font-weight: bold;
        font-size: 12px;
        padding: 6px 15px;
        border-radius: 20px;
    }

    .btn-circle span {
        padding-right: 6px;
    }

    .embed-responsive {
        margin-bottom: 20px;
    }

    .tab-content {
        padding: 50px 15px;
        border: 1px solid #ddd;
        border-top: 0;
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    .custom-input-file {
        overflow: hidden;
        position: relative;
        width: 120px;
        height: 120px;
        background: #eee url('https://s3.amazonaws.com/uifaces/faces/twitter/walterstephanie/128.jpg');
        background-size: 120px;
        border-radius: 120px;
    }

    input[type="file"] {
        z-index: 999;
        line-height: 0;
        font-size: 0;
        position: absolute;
        opacity: 0;
        filter: alpha(opacity=0);
        -ms-filter: "alpha(opacity=0)";
        margin: 0;
        padding: 0;
        left: 0;
    }

    .uploadPhoto {
        position: absolute;
        top: 25%;
        left: 25%;
        display: none;
        width: 50%;
        height: 50%;
        color: #fff;
        text-align: center;
        line-height: 60px;
        text-transform: uppercase;
        background-color: rgba(0, 0, 0, .3);
        border-radius: 50px;
        cursor: pointer;
    }

    .custom-input-file:hover .uploadPhoto {
        display: block;
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
            <div class="menu">
                <ul>

                    <div id="nav">
                        <a href="product.php"> <img src="public/img/search.png" alt=""></a>
                        <a href="product.php"><img src="public/img/giohang.png" alt=""></a>
                    </div>
                </ul>

            </div>

        </header>

        <main>

            <?php include 'models/db.php';
            if (isset($_GET['ma_hh'])) {
                $ma_hh = $_GET['ma_hh'];
                $sqlsp = "select * from hang_hoa where ma_hh='$ma_hh'";
                $kqsp = $conn->query($sqlsp)->fetch();
            }
            ?>

            <div id="left"><img src="<?php echo $kqsp['hinh'] ?>" alt="">

            </div>
            <div id="right">
                <h1><?php echo $kqsp['ten_hh'] ?></h1>
                <div style="width: 500px;" class="tinvt">
                    <p><?php echo mb_substr($kqsp['mo_ta'], 0, 150) . '...' ?></p>
                </div>
                <div class="price">
                    <span class="price-old"><?php echo number_format($kqsp['don_gia'] * ($kqsp['giam_gia']))  ?>₫</span>
                    <span class="price-new"><?php echo number_format($kqsp['don_gia'])  ?>₫</span>
                </div>
                <div class="buy">
                    <input type="submit" value="Mua Ngay">
                </div>
                <div class="chitiet">
                    <h2>Mô tả</h2>
                    <p><?php echo $kqsp['mo_ta'] ?></p>
                </div>

            </div>

        </main>
        <div id="text">
            <div class="text-left">
                <p class="to">Chất lượng sản phẩm?</p>
                <p class="nho">Sản phẩm luôn được XSHOP kiểm định, đánh giá với chất lượng cao nhất trước khi đến tay khách hàng!</p>
                <p class="to">Sai màu sản phẩm?</p>
                <p class="nho">Vì 1 số yếu tố khách quan như độ sáng màn hình, chất lượng màn hình nên sản phẩm có thể ko đúng màu.</p>
                <p class="to">Hàng có sẵn không?</p>
                <p class="nho">Sản phẩm hiện có sẵn tại hệ thống cửa hàng XSHOP và online tại website.</p>
                <p class="to">Bảo hành sản phẩm</p>
                <p class="nho">Sản phẩm được bảo hành trong 30 ngày với bất kỳ lỗi nào. Hàng SALE không được bảo hành.</p>
            </div>

            <div class="text-right">
                <p class="to">Thời gian giao hàng?</p>
                <p class="nho">Chúng tôi sử dụng đơn vi vận chuyển uy tín và nhanh chóng nhất, thời dự kiến từ 1-4 ngày tuy khu vực.</p>
                <p class="to">Thời gian làm việc?</p>
                <p class="nho">Hệ thống cửa hàng và Online làm việc từ 8:30 - 22:00 hàng ngày.</p>
                <p class="to">Đổi hàng như thế nào?</p>
                <p class="nho">Việc đổi hàng rất dễ dàng và chúng tôi luôn muốn khách hàng ưng ý nhất. Hãy liên hệ fanpage để đổi!</p>
                <p class="to">Chọn sai size giày?</p>
                <p class="nho">Bạn có thể qua cửa hàng hoặc gửi lại để đổi hàng với sản phẩm mới 100%. Còn nguyên tem mác, hoá đơn mua hàng.</p>
            </div>
        </div>

        <!-- Sản phẩm cùng loại -->
        <h2 style="font-size: 28px; margin-left:50px; margin-bottom:40px">Sản phẩm cùng loại</h2>
        <div id="recommend">
            <?php include 'models/db.php';
            $ma_loai = $kqsp['ma_loai'];
            $sql = "select * from hang_hoa where ma_loai = $ma_loai";
            $kq = $conn->query($sql);
            foreach ($kq as $key => $rows) {
            ?>
                <article id="item_content">
                    <a href="?url=chitietsanpham&ma_hh=<?php echo $rows['ma_hh'] ?>">
                        <img src="<?php echo $rows['hinh'] ?>" alt="">
                        <h5><?php echo $rows['ten_hh'] ?></h5>
                        <div class="price">
                            <div class="old-price">
                                <p><?php echo number_format($kqsp['don_gia'] * ($kqsp['giam_gia']))  ?>₫</p>
                            </div>
                            <div class="new-price">
                                <p><?php echo number_format($kqsp['don_gia'])  ?>đ</p>
                            </div>
                        </div>
                    </a>
                </article>
            <?php
            }
            ?>
        </div>

        <!-- Bình luận -->
        <h2 style="font-size: 28px; margin-top:200px; margin-left:50px; margin-bottom:20px">Đánh giá</h2>
        <div class="comment">
            <?php
            $ma_hh = $_GET['ma_hh'];
            $sql = "SELECT * FROM binh_luan WHERE ma_hh = $ma_hh";
            $kq = $conn->query($sql);
            foreach ($kq as $key => $comment) {
                $ma_kh = $comment['ma_kh'];
                $sql_user = "SELECT ho_ten FROM khach_hang WHERE ma_kh = $ma_kh";
                $result_user = $conn->query($sql_user);
                $user = $result_user->fetch(PDO::FETCH_ASSOC);
            ?>
                <div class="user-comment">
                    <div class="user">
                        <span style="font-size: 20px; font-weight:700; color: #4a4a4a">
                            <?php echo $user['ho_ten']; ?>
                        </span>
                        <span style="font-size:12px; color: #707070">
                            <?php echo $comment['ngay_bl']; ?>
                        </span>
                        <p style="font-size: 12px; color: #707070; margin-top: 20px"><?php echo $comment['noi_dung']; ?></p>
                    </div>

                </div>
            <?php
            }
            if (isset($_SESSION['ma_kh'])) {
            ?>
                <form class="add-comment" method="post">
                    <input type="hidden" name="ma_hh" value="<?php echo $ma_hh; ?>">
                    <input type="hidden" name="ma_kh" value="<?php echo $_SESSION['ma_kh'] ?>">
                    <textarea name="noi_dung" cols="30" rows="10" required></textarea>
                    <button type="submit" class="button" style="--clr: #00ad54;">
                        <span class="button-decor"></span>
                        <div class="button-content">
                            <div class="button__icon">
                                <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" width="24">
                                    <circle opacity="0.5" cx="25" cy="25" r="23" fill="url(#icon-payments-cat_svg__paint0_linear_1141_21101)"></circle>
                                    <mask id="icon-payments-cat_svg__a" fill="#fff">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M34.42 15.93c.382-1.145-.706-2.234-1.851-1.852l-18.568 6.189c-1.186.395-1.362 2-.29 2.644l5.12 3.072a1.464 1.464 0 001.733-.167l5.394-4.854a1.464 1.464 0 011.958 2.177l-5.154 4.638a1.464 1.464 0 00-.276 1.841l3.101 5.17c.644 1.072 2.25.896 2.645-.29L34.42 15.93z">
                                        </path>
                                    </mask>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M34.42 15.93c.382-1.145-.706-2.234-1.851-1.852l-18.568 6.189c-1.186.395-1.362 2-.29 2.644l5.12 3.072a1.464 1.464 0 001.733-.167l5.394-4.854a1.464 1.464 0 011.958 2.177l-5.154 4.638a1.464 1.464 0 00-.276 1.841l3.101 5.17c.644 1.072 2.25.896 2.645-.29L34.42 15.93z" fill="#fff"></path>
                                    <path d="M25.958 20.962l-1.47-1.632 1.47 1.632zm2.067.109l-1.632 1.469 1.632-1.469zm-.109 2.068l-1.469-1.633 1.47 1.633zm-5.154 4.638l-1.469-1.632 1.469 1.632zm-.276 1.841l-1.883 1.13 1.883-1.13zM34.42 15.93l-2.084-.695 2.084.695zm-19.725 6.42l18.568-6.189-1.39-4.167-18.567 6.19 1.389 4.166zm5.265 1.75l-5.12-3.072-2.26 3.766 5.12 3.072 2.26-3.766zm2.072 3.348l5.394-4.854-2.938-3.264-5.394 4.854 2.938 3.264zm5.394-4.854a.732.732 0 01-1.034-.054l3.265-2.938a3.66 3.66 0 00-5.17-.272l2.939 3.265zm-1.034-.054a.732.732 0 01.054-1.034l2.938 3.265a3.66 3.66 0 00.273-5.169l-3.265 2.938zm.054-1.034l-5.154 4.639 2.938 3.264 5.154-4.638-2.938-3.265zm1.023 12.152l-3.101-5.17-3.766 2.26 3.101 5.17 3.766-2.26zm4.867-18.423l-6.189 18.568 4.167 1.389 6.19-18.568-4.168-1.389zm-8.633 20.682c1.61 2.682 5.622 2.241 6.611-.725l-4.167-1.39a.732.732 0 011.322-.144l-3.766 2.26zm-6.003-8.05a3.66 3.66 0 004.332-.419l-2.938-3.264a.732.732 0 01.866-.084l-2.26 3.766zm3.592-1.722a3.66 3.66 0 00-.69 4.603l3.766-2.26c.18.301.122.687-.138.921l-2.938-3.264zm11.97-9.984a.732.732 0 01-.925-.926l4.166 1.389c.954-2.861-1.768-5.583-4.63-4.63l1.39 4.167zm-19.956 2.022c-2.967.99-3.407 5.003-.726 6.611l2.26-3.766a.732.732 0 01-.145 1.322l-1.39-4.167z" fill="#fff" mask="url(#icon-payments-cat_svg__a)"></path>
                                    <defs>
                                        <linearGradient id="icon-payments-cat_svg__paint0_linear_1141_21101" x1="25" y1="2" x2="25" y2="48" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#fff" stop-opacity="0.71"></stop>
                                            <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                        </linearGradient>
                                    </defs>
                                </svg>
                            </div>
                            <span class="button__text">Gửi bình luận</span>
                        </div>
                    </button>
                </form>
            <?php
            } else {
            ?>
                <div class="add-comment" method="post">
                    <input type="hidden" name="ma_hh">
                    <input type="hidden" name="ma_kh">
                    <textarea name="noi_dung" cols="30" rows="10" readonly>Đăng nhập để bình luận</textarea>
                    <a href="?url=login">
                        <button class="button" style="--clr: #00ad54;">
                            <span class="button-decor"></span>
                            <div class="button-content">
                                <div class="button__icon">
                                    <svg viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg" width="24">
                                        <circle opacity="0.5" cx="25" cy="25" r="23" fill="url(#icon-payments-cat_svg__paint0_linear_1141_21101)"></circle>
                                        <mask id="icon-payments-cat_svg__a" fill="#fff">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M34.42 15.93c.382-1.145-.706-2.234-1.851-1.852l-18.568 6.189c-1.186.395-1.362 2-.29 2.644l5.12 3.072a1.464 1.464 0 001.733-.167l5.394-4.854a1.464 1.464 0 011.958 2.177l-5.154 4.638a1.464 1.464 0 00-.276 1.841l3.101 5.17c.644 1.072 2.25.896 2.645-.29L34.42 15.93z">
                                            </path>
                                        </mask>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M34.42 15.93c.382-1.145-.706-2.234-1.851-1.852l-18.568 6.189c-1.186.395-1.362 2-.29 2.644l5.12 3.072a1.464 1.464 0 001.733-.167l5.394-4.854a1.464 1.464 0 011.958 2.177l-5.154 4.638a1.464 1.464 0 00-.276 1.841l3.101 5.17c.644 1.072 2.25.896 2.645-.29L34.42 15.93z" fill="#fff"></path>
                                        <path d="M25.958 20.962l-1.47-1.632 1.47 1.632zm2.067.109l-1.632 1.469 1.632-1.469zm-.109 2.068l-1.469-1.633 1.47 1.633zm-5.154 4.638l-1.469-1.632 1.469 1.632zm-.276 1.841l-1.883 1.13 1.883-1.13zM34.42 15.93l-2.084-.695 2.084.695zm-19.725 6.42l18.568-6.189-1.39-4.167-18.567 6.19 1.389 4.166zm5.265 1.75l-5.12-3.072-2.26 3.766 5.12 3.072 2.26-3.766zm2.072 3.348l5.394-4.854-2.938-3.264-5.394 4.854 2.938 3.264zm5.394-4.854a.732.732 0 01-1.034-.054l3.265-2.938a3.66 3.66 0 00-5.17-.272l2.939 3.265zm-1.034-.054a.732.732 0 01.054-1.034l2.938 3.265a3.66 3.66 0 00.273-5.169l-3.265 2.938zm.054-1.034l-5.154 4.639 2.938 3.264 5.154-4.638-2.938-3.265zm1.023 12.152l-3.101-5.17-3.766 2.26 3.101 5.17 3.766-2.26zm4.867-18.423l-6.189 18.568 4.167 1.389 6.19-18.568-4.168-1.389zm-8.633 20.682c1.61 2.682 5.622 2.241 6.611-.725l-4.167-1.39a.732.732 0 011.322-.144l-3.766 2.26zm-6.003-8.05a3.66 3.66 0 004.332-.419l-2.938-3.264a.732.732 0 01.866-.084l-2.26 3.766zm3.592-1.722a3.66 3.66 0 00-.69 4.603l3.766-2.26c.18.301.122.687-.138.921l-2.938-3.264zm11.97-9.984a.732.732 0 01-.925-.926l4.166 1.389c.954-2.861-1.768-5.583-4.63-4.63l1.39 4.167zm-19.956 2.022c-2.967.99-3.407 5.003-.726 6.611l2.26-3.766a.732.732 0 01-.145 1.322l-1.39-4.167z" fill="#fff" mask="url(#icon-payments-cat_svg__a)"></path>
                                        <defs>
                                            <linearGradient id="icon-payments-cat_svg__paint0_linear_1141_21101" x1="25" y1="2" x2="25" y2="48" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#fff" stop-opacity="0.71"></stop>
                                                <stop offset="1" stop-color="#fff" stop-opacity="0"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <span class="button__text">Tới trang đăng nhập</span>
                            </div>
                        </button></a>
                </div>

            <?php
            }
            ?>


        </div>

    </div>


    <?php include 'views/layouts/footer_xphone.php' ?>
</body>

</html>