<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dự án mẫu</title>
  <link rel="stylesheet" href="./public/css/css.css">
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
  <?php include 'view/header.php' ?>  
  <!-- END HEADER -->
  <main class="catalog  mb ">

    <div class="boxleft">

      <div class="box_title">Quên mật khẩu</div>
      <div class="box_content form_account">
        <form action="index.php?act=quenmk" method="post">
          <div>
            <p>Email</p>
            <input type="email" name="email" placeholder="email">
          </div>

          <input type="submit" value="Gửi" name="guiemail">
          <input type="reset" value="Nhập lại">
        </form>
      </div>

    </div>
    <div class="boxright">

      
      <div class="mb">
        <div class="box_title">DANH MỤC</div>
        <div class="box_content2 product_portfolio">
          <ul >
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
  <?php include 'view/footer.php' ?>
</div>
<script src="main.js">

</script>
</body>
</html>