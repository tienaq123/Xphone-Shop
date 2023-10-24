<div id="topbar">
   <a href="#">
      <h2> HỆ THỐNG CỬA HÀNG XPHONE</h2>
   </a>
   <ul>
      <li>

         <p style="color:red; font-size: 17px;font-weight: bold; margin: 0;">
            Hello <?php

                  if (isset($_SESSION['ma_kh'])) {

                     // echo $_SESSION['ho_ten'];
                     echo '<a style="color:red; font-size: 17px;font-weight: bold; margin: 0;" href="?url=profile">' . $_SESSION['ho_ten'] . '</a>';
                     if (isset($_SESSION['vai_tro'])  && $_SESSION['vai_tro'] == 'admin') {
                        echo '<a class="active" style="font-weight: normal;" href="?url=admin">| Admin Page |</a>';
                     }
                  ?>

               <!-- <a class="active" style="font-weight: normal;" href="?url=logout"> | Logout |</a> -->
            <?php } else {
                     echo "you!";
            ?>
               <a class="active" style="font-weight: normal;" href="?url=login"> =>Login<= </a>
                  <?php }
                  ?>
         </p>
      </li>
      <li><a href="#">KIỂM TRA ĐƠN HÀNG</a></li>
      <li><a href="#">TIN TỨC</a></li>
      <li><a href="#">LIÊN HỆ</a></li>
   </ul>
</div>
<header id="header">
   <div id="logo">
      <a href="index.php"> <img src="http://storexphone.com/Upload/ImageDes/images/logo.png" alt="Logo"></a>
   </div>
   <div class="menu">
      <ul>
         <?php include 'models/db.php';
         $sql = "select * from loai where deleted = 1";
         $kq = $conn->query($sql);
         foreach ($kq as $key => $rows) {
         ?>

            <li>
               <h2>
                  <a style="text-transform: uppercase;" href="?url=showloai&ma_loai=<?php echo $rows['ma_loai'] ?>">
                     <?php echo $rows['ten_loai'] ?>
                  </a>
               </h2>
            </li>
         <?php
         }
         ?>
         <div id="nav">
            <a href="#"> <img src="public/img/search.png" alt=""></a>
            <a href="#"><img src="public/img/giohang.png" alt=""></a>
         </div>
      </ul>

   </div>

</header>