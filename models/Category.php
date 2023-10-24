<?php
require_once 'db.php';

function getAllCategory(){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM loai");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function insertCategory($ten_loai){
    global $conn;
    $stmt = $conn->prepare("INSERT INTO loai (ten_loai) VALUES ('$ten_loai')");
    $stmt->execute();
    return $stmt->fetch();
}
function getCategoryById($ma_loai){
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM loai WHERE ma_loai = '$ma_loai'");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function updateCategory($ma_loai, $ten_loai){
    global $conn;
    $stmt = $conn->prepare("UPDATE loai SET ten_loai ='$ten_loai' WHERE ma_loai = '$ma_loai'");
    $stmt->execute();
    return $stmt->fetch();
}


function removeCategory($ma_loai){
    global $conn;
    $stmt = $conn->prepare("DELETE FROM loai WHERE ma_loai = '$ma_loai'");
    $stmt->execute();
    return $stmt->fetch();
}
?>