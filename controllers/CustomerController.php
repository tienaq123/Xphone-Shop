<?php
ob_start();
require_once 'models/Customer.php';
// require_once 'models/db.php';
// Lấy dữ liệu người dùng từ form
function addCustomer()
{
    include_once "views/login.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['dangky'])) {
        $ho_ten = $_POST['ho_ten'];
        $email = $_POST['email'];
        $mat_khau = $_POST['mat_khau'];
        $confirm_mat_khau = $_POST['confirm_mat_khau'];
        $hinh = $_POST['hinh'];
        $kich_hoat = 'active';
        $vai_tro = 'user';

        if (isset($ho_ten) && isset($email) && isset($mat_khau) && isset($hinh) && isset($kich_hoat) && isset($vai_tro) && $mat_khau == $confirm_mat_khau) {
            insertCustomer($ho_ten, $mat_khau, $email, $hinh, $kich_hoat, $vai_tro);
            header("location: ?url=login");
        } else {
            echo '<script>alert("Thông báo: Mật khẩu không khớp.");</script>';
        }
    }
}

function editCustomer()
{
    //Kiểm tra có lấy đc id trên url không
    if (isset($_SESSION['ma_kh'])) {
        include 'views/profile.php';

        //Kiểm tra sever có trả về dữ liệu không
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //Tạo biến để gán dữ liệu bên form
            $ma_kh = $_SESSION['ma_kh'];
            $ho_ten = $_POST['ho_ten'];
            $email = $_POST['email'];
            $mat_khau_cu = $_POST['mat_khau_cu'];
            $mat_khau = $_POST['mat_khau'];
            $mat_khau_moi = $_POST['mat_khau_moi'];
            $email = $_POST['email'];
            $hinh = $_POST['hinh'];
            if ($mat_khau_cu == md5($mat_khau)) {
                updateCustomer($ma_kh, $ho_ten, $mat_khau_moi, $email, $hinh);
                echo "<script>alert('Thông báo: Cập nhật thông tin thành công.');</script>";
                header("location: ?url=profile");
            } else {
                echo "<script>alert('Thông báo: Mật khẩu cũ không chính xác.');</script>";
            }
        } else {
            echo "Lỗi";
        }
    } else {
        echo "Lỗi";
    }
}



function login()
{
    include 'models/db.php';
    include_once "views/login.php";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['login'])) {
            $ho_ten = $_POST['ho_ten'];
            $mat_khau = $_POST['mat_khau'];
            // $sql = "select * from khach_hang where ho_ten='$ho_ten' and mat_khau='" . md5($mat_khau) . "'";
            // $kq = $conn->query($sql);
            $stmt = $conn->prepare("SELECT * FROM khach_hang WHERE ho_ten = ? AND mat_khau = ? AND kich_hoat ='active'");
            $stmt->execute([$ho_ten, md5($mat_khau)]);
            $row = $stmt->fetch();
            if ($row) {
                $_SESSION["ma_kh"] = $row["ma_kh"];
                $_SESSION["ho_ten"] = $row["ho_ten"];
                $_SESSION["email"] = $row["emai"];
                $_SESSION["hinh"] = $row["hinh"];
                $_SESSION["kich_hoat"] = $row["kich_hoat"];
                $_SESSION["vai_tro"] = $row["vai_tro"];
                if ($row['vai_tro'] == 'admin') {
                    // admin
                    header("location: ?url=admin");
                } else {
                    // user
                    header("location: index.php");
                }
            } else {
                echo '<span style="color:#AFA;text-align:center;"><br>Tài khoản hoặc mật khẩu không hợp lệ</span>';
            }
        }
    }
}

function logout()
{
    session_start();

    // Hủy tất cả các session
    session_destroy();

    // Chuyển hướng người dùng
    header("Location: index.php");
    exit();
}


function band()
{
    global $conn;

    if (isset($_POST['btn-band'])) {
        $ma_kh = $_POST['ma_kh'];

        try {
            // Lấy kich_hoat hiện tại bằng cách truy vấn
            $query_select_role = "SELECT kich_hoat FROM khach_hang WHERE ma_kh = :ma_kh";
            $stmt = $conn->prepare($query_select_role);
            $stmt->bindParam(':ma_kh', $ma_kh);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $currentKichHoat = $row['kich_hoat'];

            // Xác định giá trị mới cho kich_hoat
            $newKichHoat = ($currentKichHoat == 'active') ? 'band' : 'active';

            // Thực hiện truy vấn UPDATE để cập nhật kich_hoat mới
            $query_update_kich_hoat = "UPDATE khach_hang SET kich_hoat = :new_kich_hoat WHERE ma_kh = :ma_kh";
            $stmt = $conn->prepare($query_update_kich_hoat);
            $stmt->bindParam(':new_kich_hoat', $newKichHoat);
            $stmt->bindParam(':ma_kh', $ma_kh);

            if ($stmt->execute()) {
                // Cập nhật thành công
                header("Location: ?url=customer");
                // echo 'done';
            } else {
                echo "Lỗi khi cập nhật kich_hoat.";
            }
        } catch (PDOException $e) {
            echo "Lỗi truy vấn hoặc kết nối CSDL: " . $e->getMessage();
        }
    }
}
function role()
{
    global $conn;

    if (isset($_POST['btn-role'])) {
        $ma_kh = $_POST['ma_kh'];

        try {
            $query_select_role = "SELECT vai_tro FROM khach_hang WHERE ma_kh = :ma_kh";
            $stmt = $conn->prepare($query_select_role);
            $stmt->bindParam(':ma_kh', $ma_kh);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $currentRole = $row['vai_tro'];

            // Xác định giá trị mới cho kich_hoat
            $newRole = ($currentRole == 'user') ? 'admin' : 'user';

            // Thực hiện truy vấn UPDATE để cập nhật kich_hoat mới
            $query_update_role = "UPDATE khach_hang SET vai_tro = :new_role WHERE ma_kh = :ma_kh";
            $stmt = $conn->prepare($query_update_role);
            $stmt->bindParam(':new_role', $newRole);
            $stmt->bindParam(':ma_kh', $ma_kh);

            if ($stmt->execute()) {
                // Cập nhật thành công
                header("Location: ?url=customer");
                // echo 'done';
            } else {
                echo "Lỗi khi cập nhật.";
            }
        } catch (PDOException $e) {
            echo "Lỗi truy vấn hoặc kết nối CSDL: " . $e->getMessage();
        }
    }
}
