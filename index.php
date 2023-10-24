<?php
session_start();
require 'controllers/CategoryController.php';
require 'controllers/ProductController.php';
require 'controllers/CustomerController.php';
require 'controllers/CommentController.php';
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
switch ($url) {
    case '/':
        include 'views/home_user.php';
        break;
    case 'home':
        include 'views/home_user.php';
        break;
    case 'profile':
        // include 'views/profile.php';
        editCustomer();
        break;
    case 'chitietsanpham':
        // include 'views/detail.php';
        detailProduct();
        comment();
        break;
    case 'showloai':
        include 'views/show_loai.php';

        break;
    case 'admin':
        include 'views/admin/home.php';
        hiddenProduct();
        break;
    case 'list-category':
        listCategory();
        hiddenCategory();
        break;

    case 'add-category':
        addCategory();
        break;
    case 'edit-category':
        editCategory();
        break;
    case 'delete-category':
        deleteCategory();
        break;

    case 'add-product':
        addProduct();
        break;

    case 'edit-product':
        editProduct();
        break;

    case 'delete-product':
        deleteProduct();
        break;

    case 'customer':
        include 'views/admin/list_user.php';
        band();
        role();
        break;
    case 'comment':
        include 'views/admin/list_comment.php';
        break;
    case 'delete-comment':
        deleteComment();
        break;
    case 'thongke':
        include 'views/admin/thongke.php';
        break;

    case 'login':
        login();
        addCustomer();
        break;
    case 'logout':
        logout();
        break;
}

    // case 'logout':
    //     exitCustomer();
    // break;
