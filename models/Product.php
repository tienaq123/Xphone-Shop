<?php
require_once 'db.php';

// lấy dữ liệu sản phẩm từ database
function getAllProduct(){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM hang_hoa");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
// Thêm sản phảm vào database
function insertProduct($ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $ma_loai, $dac_biet, $so_luot_xem, $mo_ta){
    global $conn;
    $stmt = $conn->prepare("INSERT INTO hang_hoa (ten_hh, don_gia, giam_gia, hinh, ngay_nhap, ma_loai, dac_biet, so_luot_xem, mo_ta) VALUES ('$ten_hh', '$don_gia', '$giam_gia', '$hinh',' $ngay_nhap', '$ma_loai', '$dac_biet', '$so_luot_xem', '$mo_ta')");
    $stmt->execute();
    return $stmt->fetch();
}

function getProductById($ma_hh){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM hang_hoa WHERE ma_hh = '$ma_hh'");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function updateProduct($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ngay_nhap, $ma_loai, $dac_biet, $so_luot_xem, $mo_ta){
    global $conn;
    $stmt = $conn->prepare("UPDATE hang_hoa SET ten_hh = '$ten_hh', don_gia = '$don_gia', giam_gia = '$giam_gia', hinh = '$hinh', ngay_nhap = '$ngay_nhap', ma_loai = '$ma_loai', dac_biet = '$dac_biet', so_luot_xem = '$so_luot_xem', mo_ta = '$mo_ta' WHERE ma_hh = '$ma_hh'");
    $stmt->execute();
    return $stmt->fetch();
}

function insertComment($noi_dung, $ma_kh, $ma_hh, $ngay_bl)
{
    global $conn;
    $sql = "INSERT INTO binh_luan (noi_dung, ma_kh, ma_hh, ngay_bl) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$noi_dung, $ma_kh, $ma_hh, $ngay_bl]);
}
function removeProduct($ma_hh){
    global $conn;
    $stmt = $conn->prepare("DELETE FROM hang_hoa WHERE ma_hh = '$ma_hh'");
    $stmt->execute();
    return $stmt->fetch();
}
