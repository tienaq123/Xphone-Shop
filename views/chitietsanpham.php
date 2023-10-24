<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dự án mẫu</title>
  <link rel="stylesheet" href="public/css/css.css">
  <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- <style>
    form li a{

    }
  </style> -->
</head>

<body>
  <div class="boxcenter">
    <!-- BIGIN HEADER -->
    <?php include 'layouts/header_user.php' ?>
    <!-- END HEADER -->
    <main class="catalog  mb ">

      <div class="boxleft">
        <div class="  mb">
          <div class="box_title">CHI TIẾT SẢN PHẨM</div>
          <div class="box_content">
            <img src="img/iphoneX.jpg">
          </div>
        </div>

        <div class="mb">
          <div class="box_title">BÌNH LUẬN</div>
          <div class="box_content2  product_portfolio binhluan ">
            <table>
              <tr>
                <td>Sản phẩm quá đẹp</td>
                <td>Nguyễn Thành A</td>
                <td>20/10/2022</td>
              </tr>

          </div>
          <div class="box_search">
            <form action="" method="POST">
              <input type="hidden" name="idpro" value="">
              <input type="text" name="noidung">
              <input type="submit" name="guibinhluan" value="Gửi bình luận">
            </form>
          </div>

        </div>

        <div class=" mb">
          <div class="box_title">SẢN PHẨM CÙNG LOẠI</div>
          <div class="box_content">
            <li><a href="">Sản phẩm 1</a></li>
            <li><a href="">Sản phẩm 1</a></li>
            <li><a href="">Sản phẩm 1</a></li>
            <li><a href="">Sản phẩm 1</a></li>
            <li><a href="">Sản phẩm 1</a></li>
          </div>
        </div>
      </div>
      <div class="boxright">


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
          <img src="./img/FPTShop_logo.jpg" alt="" />
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
              <img src="./img/anh4.jpg" alt="" />
            </div>
            <div class="image">
              <img src="./img/anh1.jpg" alt="" />
            </div>
          </div>

          <div class="image_3 image">
            <img src="./img/anh2.jpg" alt="" />
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
  <script src="public/js/main.js">

  </script>
</body>

</html>