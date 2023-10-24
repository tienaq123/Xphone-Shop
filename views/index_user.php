<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dự án mẫu</title>
  <link rel="stylesheet">
  <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <style>
    :root {
      --white-color: #fff;
      --black-color: #000;
      --text-color: #333;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto', sans-serif;
    }

    .boxcenter {
      width: 90%;
      margin: 0 auto;
    }

    .row {
      display: flex;
      width: 100%;
    }

    .row2 {
      float: left;
      width: 100%;
    }

    .mb {
      margin-bottom: 30px;
    }

    .mb10 {
      margin-bottom: 10px;
    }

    /* CSS CHO PHẦN HEADER */
    .header {
      background: aqua;
      border: 1px solid #000;
      font-size: 16px;
      padding: 5px;
    }

    .menu {
      background: black;
      border: 1px solid #000;

      padding: 5px;
      height: 33px;

    }

    .menu ul {
      display: flex;
      align-items: center;
      gap: 30px;
    }

    .menu ul li {
      list-style: none;
    }

    .menu li a {
      color: white;
      text-decoration: none;
    }

    .menu li a:hover,
    .dropdown:hover .dropbtn {
      color: rgb(225, 0, 43);
      padding: 13px 0;
    }

    .dropdown_content {
      display: none;
      position: absolute;
      background-color: #98FB98;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown_content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: center;

    }

    .dropdown_content a:hover {
      background-color: #98FB98;
    }

    .dropdown:hover .dropdown_content {
      display: block;
      margin-top: 13px;
    }

    /* css cho phần nội dung */
    .catalog {
      display: flex;
      gap: 30px;
    }

    .boxleft {
      width: 75%;
    }

    .boxright {

      width: 25%;
    }

    .box_title {
      display: flex;

      background: #EEEE;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
      border-left: 1px solid #ccc;
      border-right: 1px solid #ccc;
      padding: 10px;
      color: #333;
      height: 30px;
      align-items: center;

    }

    .box_content {


      border-left: 1px solid #ccc;
      border-right: 1px solid #ccc;
      border-bottom: 1px solid #ccc;
      border-bottom-left-radius: 5px;
      border-bottom-right-radius: 5px;
      min-height: 200px;
      padding: 20px;
    }

    .box_content2 {
      padding: 20px;
      background: #EEEE;
      border-left: 1px solid #ccc;
      border-right: 1px solid #ccc;
      border-bottom: 1px solid #ccc;
      border-bottom-left-radius: 5px;
      border-bottom-right-radius: 5px;
      min-height: 200px;

    }

    .box_footer {
      background: #EEEE;
      border-bottom-left-radius: 5px;
      border-bottom-right-radius: 5px;
      padding: 10px;
      color: #333;
      height: 30px;
      align-items: center;
    }

    .banner {
      width: 100%;
      min-width: 300px;
      text-align: center;
      position: relative;
    }

    .banner img {
      width: 100%;
      height: 300px;
    }

    .pre,
    .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      color: white;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease-in-out;
      border-radius: 0 3px 3px 0;
      border: none;

    }

    .pre:hover,
    .next:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    .pre {
      left: 0;
      border-radius: 0 3px 3px 0;
    }

    .items {
      width: 95%;
      margin: 0 auto;
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 20px;
    }

    .box_items {
      border: 1px solid #EEEE;
      border-radius: 5px;
      text-align: center;
      height: 360px;
      position: relative;
      overflow: hidden;
    }

    .box_items img {
      width: 100%;
      height: 250px;
      border-radius: 10px;
    }

    .box_items a {
      text-decoration: none;
      color: black;

    }

    .box_items .item_name {
      margin-top: 10px;
      font-size: 20px;
      font-weight: bold;

    }

    .box_items .price {
      margin: 10px 0;
      color: red;
      font-weight: 500;

    }

    .box_items_img:hover .add {
      width: 92%;
      bottom: 30.66%;
    }

    .box_items_img .add {

      position: absolute;
      bottom: -100%;

      padding: 10px;
      background-color: aqua;
      border-radius: 6px;
      margin-top: 20px;

    }

    form {
      text-align: center;
    }

    .form_li a {
      text-decoration: none;
      color: aqua;
    }

    .form_li a:hover {
      text-decoration: underline;
      color: red;
    }

    .form_li {
      list-style: none;
    }

    .form_account {
      line-height: 150%;
    }

    .form_account input[type="email"],
    .form_account input[type="text"],
    .form_account input[type="password"],
    .form_content input[type="text"] {
      width: 100%;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 6px 10px;
      margin-bottom: 12px;
    }

    .form_account input[type="checkbox"] {
      border-radius: 5px;
    }

    .form_account input[type="reset"],
    .form_account input[type="submit"],
    .form_content input[type="submit"],
    .form_content input[type="reset"],
    .form_content input[type="button"] {
      padding: 6px;
      background: white;
      border: 1px solid #CCC;
      border-radius: 5px;
    }

    .form_account input[type="submit"]:hover,
    .form_content input[type="submit"]:hover,
    .form_content input[type="reset"]:hover,
    .form_content input[type="button"]:hover {
      background: #CCC;
    }

    /*  CSS CHO PHẦN DANH MỤC */
    .product_portfolio ul {
      margin: 0;
      list-style-type: none;
      padding: 0;
    }

    .product_portfolio ul li {
      padding: 10px 20px;
      background-color: #EEEE;
      border-bottom: 1px #ccc solid;
    }

    .product_portfolio ul li a {
      text-decoration: none;
      color: #000;
    }

    .product_portfolio ul li:hover {

      background-color: #CCC;
    }

    .box_search input {
      margin-top: 9px;
      padding: 5px 10px;
      background-color: #ffff;
      border-radius: 5px;
      border: 1px #ccc solid;
    }

    .selling_products img {
      width: 20%;
      height: 50px;
      margin-right: 10px;
    }

    .selling_products a {
      color: #000;
      text-decoration: none;
    }

    .selling_products a:hover {
      color: #000;
      text-decoration: underline;
    }

    .banner2 img {
      width: 60%;
    }

    /* CSS CHO ADMIN */
    .header_admin {
      background-color: #EEE;
      border: 1px #CCC solid;
      color: #666;
      border-radius: 5px;
      padding: 10px 20px;

    }

    .header_admin h1 {
      font-size: 2vv;
    }

    .font_title {
      background-color: #EEE;
      border: 1px #CCC solid;
      color: #666;
      border-radius: 5px;
      padding: 10px 20px;
    }

    .mr20 {
      margin-right: 10px;
    }

    label {
      display: flex;
      justify-content: start;
      font-size: 20px;
      color: red;
      margin-top: 5px;
    }

    .formds_loai table {
      width: 100%;
      border-collapse: collapse;
      background-color: #ccc;

      padding: 20px;
    }

    .formds_loai table td {
      padding: 10px 20px;
      border: 1px #ccc solid;
      padding: 30px;
    }

    .box_footer {
      margin-top: 300px;
    }

    /* footer section starts */
    #footer {
      font-family: BalloExtra;
      height: auto;
      padding-bottom: 40px;
      background-image: linear-gradient(rgba(51, 51, 51, 0.86),
          rgba(51, 51, 51, 0.86)),
        url("./img/anh2.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      margin-top: 2rem;
    }

    #footer,
    .footer-left,
    .footer-right {
      display: flex;
    }

    .footer-left,
    .footer-right {
      margin-top: 3rem;
    }

    .footer-left {
      padding-left: 12%;
      align-items: center;
      width: 65%;
    }

    .footer-right {
      margin-top: 3.5rem;
      gap: 3rem;
      padding-right: 12%;
      width: 35%;
    }

    #footer h3 {
      font-family: BalooExtra;
      text-align: start;
      color: var(--yellow-color);
    }

    #footer p,
    #footer a {
      font-family: Barlow;
      color: #ffff;
      text-align: start;
    }

    #footer a {
      text-decoration: none;
      display: block;
      line-height: 1.8rem;
    }

    .footer-left .footer-logo {
      width: 45%;
      margin-right: 2.3rem;
    }

    .footer-logo img {
      width: 100%;
      object-fit: cover;
    }

    #footer i {
      color: var(--yellow-color);
    }

    #footer .card_1 {
      width: 70%;
    }

    .card_1 {
      width: 70%;
      margin: 0;
    }

    .card_1 div {
      display: flex;
      align-items: center;
    }

    .card_1 div p,
    .card_1 p {
      font-size: 0.9rem;
      margin-left: 0.3rem;
      line-height: 2rem;
      display: block;
      text-align: start;
    }

    .icons i {
      font-size: 1.5rem;
      margin-left: 1.3rem;
      margin-top: 0.5rem;
      margin-bottom: 1.4rem;
      cursor: pointer;
    }

    #footer .images {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
    }

    #footer .image {
      width: 8rem;
      height: 2.5rem;
    }

    .image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 0.2rem;
    }

    .image_3 {
      height: 3rem !important;
      width: 10rem;
      margin-top: 0.5rem;
    }

    /* footer section ends */
    .spct {
      text-align: center;
    }
  </style>
</head>

<body>

  <div class="boxcenter">
    <!-- BIGIN HEADER -->
    <header>
      <div class="row mb header">
        <h1>SIÊU THỊ TRỰC TUYẾN</h1>
      </div>
      <div style="display: flex; justify-content:space-between;" class="row mb menu">
        <ul style=" margin-left:40px;">

          <li class="dropdown">
            <a class="dropdownbtn" href="">Trang chủ</a>

          <li class="dropdown">
            <a class="dropdownbtn" href="">Danh mục</a>

          <li class="dropdown">
            <a class="dropdownbtn" href="?url=index_user ">Sản Phẩm</a>
        </ul>
        <li style="color: #fff; margin-right: 40px; list-style:none;">
          <?php

          // Kiểm tra xem người dùng đã đăng nhập chưa
          if (isset($_SESSION['ma_kh'])) {
            // Nếu đã đăng nhập, hiển thị thông tin người dùng và button đăng xuất
            $ma_kh = $_SESSION['ma_kh'];
            $ho_ten = $_SESSION['ho_ten'];

            echo "$ho_ten";
          } else {
            echo '<li><a href="?url=login">Login</a></li>';
          }
          ?>
        </li>
      </div>

  </div>
  </header>
  <!-- END HEADER -->
  <main class="catalog  mb ">

    <div class="boxleft">
      <div class="banner">
        <img id="banner" src="./public/img/anh0.jpg" alt="">
        <button class="pre" onclick="pre()">&#10094;</button>
        <button class="next" onclick="next()">&#10095;</button>
      </div>


      <div class="items">
        <?php
        $sql = "SELECT * FROM hang_hoa";
        $result = $conn->query($sql);
        foreach ($result as $key => $row) {
        ?>
          <div class="box_items">
            <div class="box_items_img">
              <td><img width="200px" src="<?php echo $row['hinh'] ?>" alt=""></td>
              <div class="add" href="">ADD TO CART</div>
            </div>
            <td><?php echo $row['ten_hh'] ?></td>
            <td><?php echo $row['don_gia'] ?></td>

          </div>
        <?php } ?>
      </div>
    </div>
    <div class="boxright">

      <div class="mb">

      </div>
      <div class="mb">
        <div class="box_title">DANH MỤC</div>
        <div class="box_content2 product_portfolio">
          <ul>
            <li><a href="">Đồng hồ </a></li>
            <li><a href="">Laptop</a></li>
            <li><a href="">Điện thoại</a></li>
            <li><a href="">Ipad</a></li>
            <li><a href="">Tivi</a></li>
          </ul>
        </div>
        <div class="box_search">
          <form action="#" method="POST">
            <input type="text" name="" id="" placeholder="Từ khóa tìm kiếm">
          </form>
        </div>
      </div>
      <!-- DANH MỤC SẢN PHẨM BÁN CHẠY -->
      <div class="mb">
        <div class="box_title">SẢN PHẨM BÁN CHẠY</div>
        <div class="box_content">
          <div class="selling_products" style="width:100%;">
            <img src="./img/clockforgirl.jpg" alt="anh">
            <a href="">Đồng hồ đeo tay nữ</a>
          </div>
          <div class="selling_products" style="width:100%;">
            <img src="./img/clockforgirl.jpg" alt="anh">
            <a href="">Đồng hồ đeo tay nữ</a>
          </div>
          <div class="selling_products" style="width:100%;">
            <img src="./img/clockforgirl.jpg" alt="anh">
            <a href="">Đồng hồ đeo tay nữ</a>
          </div>
          <div class="selling_products" style="width:100%;">
            <img src="./img/clockforgirl.jpg" alt="anh">
            <a href="">Đồng hồ đeo tay nữ</a>
          </div>
          <div class="selling_products" style="width:100%;">
            <img src="./img/clockforgirl.jpg" alt="anh">
            <a href="">Đồng hồ đeo tay nữ</a>
          </div>
        </div>
      </div>
    </div>

  </main>
  <!-- BANNER 2 -->

  <!-- FOOTER -->
  <footer class="box_footer row mb demo">
    <div id="footer">
      <div class="footer-left">
        <div class="footer-logo">
          <img src="./public/img/FPTShop_logo.jpg" alt="" />
        </div>
        <div class="card_1">
          <h3>CÔNG TY ĐIỆN TỬ FPT SỐ 1 VIỆT NAM</h3>
          <div>
            <i class="fa-sharp fa-solid fa-location-pin"></i>
            <p>
              Tầng 2 tòa nhà T10, Times City Vĩnh Tuy, Hai Bà Trưng, Hà Nội.
            </p>
          </div>

          <div>
            <i class="fa-solid fa-phone-flip"></i>
            <p>1900.63.69.36</p>
          </div>

          <div>
            <i class="fa-solid fa-envelope"></i>
            <p>info@tocotocotea.com</p>
          </div>

          <p>Số ĐKKD: 0106341306. Ngày cấp: 16/03/2017.</p>
          <p>Nơi cấp: Sở kế hoạch và Đầu tư Thành phố Hà Nội.</p>
          <div class="icons">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-square-instagram"></i>
            <i class="fa-brands fa-youtube"></i>
            <i class="fa-brands fa-square-twitter"></i>
            <i class="fa-brands fa-google-plus"></i>
          </div>

          <div class="images">
            <div class="image">
              <img src="./public/img/anh4.jpg" alt="" />
            </div>
            <div class="image">
              <img src="./public/img/anh1.jpg" alt="" />
            </div>
          </div>

          <div class="image_3 image">
            <img src="./public/img/anh2.jpg" alt="" />
          </div>
        </div>
      </div>
      <div class="footer-right">
        <div class="card_2">
          <h3>VỀ CHÚNG TÔI</h3>
          <a href="#">Giới thiệu về TocoToco</a>
          <a href="gioithieu.html">Nhượng quyền</a>
          <a href="">Tin tức khuyến mại</a>
          <a href="">Cửa hàng</a>
          <a href="#">Quy định chung</a>
          <a href="#">TT liên hệ &#038; ĐKKD</a>
        </div>
        <div class="card_3">
          <h3>CHÍNH SÁCH</h3>
          <a href="#">Chính sách thành viên</a>
          <a href="#">Hình thức thanh toán</a>
          <a href="#">Vận chuyển giao nhận</a>
          <a href="#">Đổi trả và hoàn tiền</a>
          <a href="#">Bảo vệ thông tin cá nhân</a>
          <a href="#">Bảo trì, bảo hành</a>
        </div>
      </div>
    </div>
    <!-- footer section ends -->
  </footer>
  </div>
  <script src="./public/js/main.js">
  </script>
</body>

</html>