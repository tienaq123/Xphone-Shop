<?php
if (!isset($_SESSION['vai_tro']) || $_SESSION['vai_tro'] !== 'admin') {
   header("Location: index.php");
   exit;
}
?>
<header>
   <style>
      .header {
         display: flex;
         justify-content: space-between;
         align-items: center;
         margin-bottom: 0px;
      }

      .header .input {
         height: 35px;
         width: 400px;
         border: none;
         padding: 1rem;
         border-radius: 1rem;
         background: #e8e8e8;
         box-shadow: 20px 20px 60px #c5c5c5,
            -20px -20px 60px #ffffff;
         transition: 0.3s;
      }

      .header .input:focus {
         outline-color: #e8e8e8;
         background: #e8e8e8;
         box-shadow: inset 20px 20px 60px #c5c5c5,
            inset -20px -20px 60px #ffffff;
         transition: 0.3s;
      }

      .header .link ul li {
         list-style: none;
         display: inline-block;
         line-height: 85px;
         margin-right: 40px;
      }

      .header .link ul li a {
         color: #fff;
         text-decoration: none;
      }
   </style>
   <div class=" header">
      <div class="logo">
         <a href="index.php"><img style="width:200px" src="http://storexphone.com/Upload/ImageDes/images/logo.png" alt=""></a>

      </div>
      <div class="link">
         <ul>
            <li><a href="?url=profile">Thông tin</a></li>
            <!-- <li><a href="?url=login">Đăng nhập</a></li> -->
            <li><a href="?url=logout">Đăng xuất</a></li>
            <!-- <li><a href="#"><i class='bx bxs-cart'></i></a></li> -->
         </ul>
      </div>

   </div>
   <div class=" menu">
      <ul>

         <li class="dropdown">
            <a class="dropdownbtn" href="?url=admin">Dashboard</a>
         </li>

         <li class="dropdown">
            <a class="dropdownbtn" href="?url=list-category">Quản Lí Danh mục</a>
         </li>

         <li class="dropdown">
            <a class="dropdownbtn" href="?url=customer">Quản lí người dùng</a>
         </li>
         <li class="dropdown">
            <a class="dropdownbtn" href="?url=comment">Quản lí bình luận</a>
         </li>
         <li class="dropdown">
            <a class="dropdownbtn" href="?url=thongke">Thống kê</a>
         </li>


      </ul>
   </div>
</header>