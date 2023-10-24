<?php
require_once 'models/Comment.php';
function deleteComment()
{
    //Kiểm tra có lấy đc id trên url không
    if (isset($_GET['id'])) {
        // gán id trên url vào biến $id_category
        $id_comment = $_GET['id'];
        //gọi hàm xóa
        removeComment($id_comment);
        header("location: ?url=comment");
    }
}
