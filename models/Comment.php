<?php
function removeComment($ma_bl)
{
    global $conn;
    $stmt = $conn->prepare("DELETE FROM binh_luan WHERE ma_bl = '$ma_bl'");
    $stmt->execute();
    return $stmt->fetch();
}
