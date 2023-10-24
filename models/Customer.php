<?php
require_once 'db.php';

function insertCustomer($ho_ten, $mat_khau, $email, $hinh, $kich_hoat, $vai_tro)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO khach_hang (ho_ten, mat_khau, email, hinh, kich_hoat, vai_tro) VALUES ('$ho_ten', '" . md5($mat_khau) . "', '$email', '$hinh', '$kich_hoat', '$vai_tro')");
    $stmt->execute();
    return $stmt->fetch();
}

function updateCustomer($ma_kh, $ho_ten, $mat_khau_moi, $email, $hinh)
{
    global $conn;
    $stmt = $conn->prepare("UPDATE khach_hang SET ho_ten ='$ho_ten', mat_khau = '" . md5($mat_khau_moi) . "', email = '$email', hinh = '$hinh' WHERE ma_kh = '$ma_kh'");
    $stmt->execute();
    return $stmt->fetch();
}
