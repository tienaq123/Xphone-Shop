<?php
require_once 'models/Product.php';
// require_once 'models/db.php';

function listProduct()
{
    $products = getAllProduct();

    include 'views/admin/list_product.php';
}

function detailProduct()
{

    if (isset($_GET["ma_hh"])) {
        $ma_hh = $_GET['ma_hh'];
        global $conn;
        // Truy vấn SQL để tăng giá trị so_luot_xem lên 1 cho sản phẩm cụ thể
        $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh = $ma_hh";
        $conn->query($sql);
    } else {
        echo "Lỗi";
        exit;
    }
    include_once "views/detail.php";
}

function comment()
{

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ma_hh = $_POST["ma_hh"]; // Mã sản phẩm
        $noi_dung = $_POST["noi_dung"];
        $ma_kh = $_POST['ma_kh'];
        $ngay_bl = date('Y-m-d');
        insertComment($noi_dung, $ma_kh, $ma_hh, $ngay_bl);
        header("location: ?url=chitietsanpham&ma_hh= $ma_hh");
    }
}
function addProduct()
{
    include_once "views/admin/add_product.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $ten_hh = $_POST['ten_hh'];
        $don_gia = $_POST['don_gia'];
        $giam_gia = $_POST['giam_gia'] / 100 + 1;
        $hinh = $_POST['hinh'];
        $ngay_nhap = date('Y-m-d');
        $ma_loai = $_POST['ma_loai'];
        $dac_biet = $_POST['dac_biet'];
        $so_luot_xem = 0;
        $mo_ta = $_POST['mo_ta'];
        if (!empty($ten_hh) && !empty($don_gia)) {
            insertProduct($ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $ma_loai, $dac_biet, $so_luot_xem, $mo_ta);
            header("location: ?url=admin");
        } else {
            echo 'Không thêm được do thiếu dữ liệu';
        }
    }
}

function editProduct()
{

    if (isset($_GET['id'])) {

        $id_product = $_GET['id'];

        $product_data = getProductById($id_product);

        if (isset($product_data)) {
            include 'views/admin/edit_product.php';

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                $ma_hh = $_POST['ma_hh'];
                $ten_hh = $_POST['ten_hh'];
                $don_gia = $_POST['don_gia'];
                $giam_gia = $_POST['giam_gia'] / 100 + 1;
                $hinh = $_POST['hinh'];
                $ngay_nhap = $_POST['ngay_nhap'];
                $loai = $_POST['ma_loai'];
                $dac_biet = $_POST['dac_biet'];
                $so_luot_xem = $_POST['so_luot_xem'];
                $mo_ta = $_POST['mo_ta'];
            }

            if (isset($ma_hh) && isset($ten_hh) && isset($don_gia) && isset($giam_gia) && isset($hinh) && isset($loai) && isset($dac_biet) && isset($mo_ta)) {
                updateProduct($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $loai, $dac_biet, $so_luot_xem, $mo_ta);
                // var_dump($ten_hh); die;
                header("location:?url=admin");
            } else {
                echo "Lỗi";
            }
        }
    }
}
function deleteProduct()
{
    //Kiểm tra có lấy đc id trên url không
    if (isset($_GET['id'])) {
        // gán id trên url vào biến $id_category
        $id_product = $_GET['id'];
        //gọi hàm xóa
        removeProduct($id_product);
        header("location:?url=admin");
    }
}

function hiddenProduct()
{
    global $conn;

    if (isset($_POST['btn'])) {
        $ma_hh = $_POST['ma_hh'];

        try {
            $query_select_deleted = "SELECT deleted FROM hang_hoa WHERE ma_hh = :ma_hh";
            $stmt = $conn->prepare($query_select_deleted);
            $stmt->bindParam(':ma_hh', $ma_hh);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $currentDeleted = $row['deleted'];


            $newDeleted = ($currentDeleted == 1) ? 0 : 1;

            $query_update_deleted = "UPDATE hang_hoa SET deleted = :new_deleted WHERE ma_hh = :ma_hh";
            $stmt = $conn->prepare($query_update_deleted);
            $stmt->bindParam(':new_deleted', $newDeleted);
            $stmt->bindParam(':ma_hh', $ma_hh);

            if ($stmt->execute()) {
                // Cập nhật thành công
                header("Location: ?url=admin");
                // echo 'done';
            } else {
                echo "Lỗi khi cập nhật.";
            }
        } catch (PDOException $e) {
            echo "Lỗi truy vấn hoặc kết nối CSDL: " . $e->getMessage();
        }
    }
}
